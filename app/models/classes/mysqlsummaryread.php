<?php

class MySqlSummaryRead extends MySqlConnection implements MySqlSummaryReading{

    protected $superconcepts=["FACTOR HUMANO","GASTOS GENERALES"];
    protected $modules=["BANCO","CASA","GRUPO","OPERADORA","SAVELLA","SERVICIOS"];

    public function readModules($table,$month){

        $results=[];

        $results["Pagado"]=[];

        foreach ($this->superconcepts as $superconcept) {

            echo($superconcept);

            $results1=[];
            $results1["Super_Concepto"] = $superconcept;
            $results1["Cuentas"]=[];
            
            $accountArray = $this->mySql->selectDistinct($table,"Id_Cuenta","Super_Concepto = '".$superconcept."'","Id_Cuenta");

            print_r($accountArray);

            foreach ($accountArray as $account) {

                $results2=[];
                $results2["Cuenta"]=$account;
                $results2["Modulos"]=[];
                $results2["Llave"]=$superconcept.'-'.$account;

                foreach ($this->modules as $module) {

                    $results3=[];
                    $results3["Modulo"]=$module;
                    $conditions="Modulo = '".$module."'"." AND "."Id_Cuenta = '".$account."'"." AND "."Mes = '".$month."'";
                    $mensualidades = $this->mySql->select($table,["Subtotal"],$conditions,"Mes","assoc");
                    $results3["Subtotal"]=$mensualidades[0]["Subtotal"];
                    $results3["Llave"]=$account."-".$module;
                    $results2["Modulos"][]=$results3;

                }

                $results1["Cuentas"][]=$results2;

            }

            $results["Pagado"]=$results1;
    
        }

        echo(json_encode($results));

    }

}

?>