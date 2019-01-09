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
            
            $accountArray = $this->mySql->selectDistinct($table,"Cuenta","Super_Concepto = '".$superconcept."'","Id_Cuenta");

            foreach ($accountArray as $account) {

                $results2=[];

                $results2["Cuenta"]=$account;

                

                foreach ($this->modules as $module) {



                }

                $results1["Cuentas"][]=$account;

            }

            $results[]=$results1;
    
        }

        echo(json_encode($results));


    }

    

}

?>