<?php

class MySqlSummaryRead extends MySqlConnection implements MySqlSummaryReading{

    protected $superconcepts=["FACTOR HUMANO","GASTOS GENERALES"];
    protected $modules=["BANCO","CASA","GRUPO","OPERADORA","SAVELLA","SERVICIOS"];

    public function readModules($table,$month){

        $results=[];

        foreach ($this->superconcepts as $superconcept) {

            $results1=[];
            $results1["Super_Concepto"] = $superconcept;
            $results1["Cuentas"]=[];
            
            $accountArray = $this->mySql->selectDistinct($table,"Id_Cuenta","Super_Concepto = '".$superconcept."'","Id_Cuenta");

            foreach ($accountArray as $account) {

                $results2=[];
                $results2["Cuenta"]=$account;
                $results2["Modules"]=[];

                foreach ($this->modules as $module) {

                    $results3=[];

                    $results3["Modulo"]=$module;

                    $conditions="Modulo = '".$module."'"." AND "."Id_Cuenta = '".$account."'"." AND "."Mes = '".$month."'";

                    $mensualidades = $this->mySql->select($table,["Subtotal"],$conditions,"Mes","assoc");

                    $results3["Subtotal"]=$mensualidades["Subtotal"];

                    $results2["Modules"][]=$results3;

                }

                $results1["Cuentas"][]=$results2;

            }

            $results[]=$results1;
    
        }

        echo(json_encode($results));


    }

    

}

?>