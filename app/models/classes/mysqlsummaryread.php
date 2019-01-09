<?php

class MySqlSummaryRead extends MySqlConnection implements MySqlSummaryReading{

    protected $superconcepts=["FACTOR HUMANO","GASTOS GENERALES"];
    protected $modules=["BANCO","CASA","GRUPO","OPERADORA","SAVELLA","SERVICIOS"];

    public function readModules($table,$month){

        $results=[];

        foreach ($this->superconcepts as $superconcept) {

            $results1=[];

            $results1["Super_Concepto"] = $superconcept;

            $results["Cuentas"]=[];
            
            $accountArray = $this->mySql->selectDistinct($table,"Id_Cuenta","Super_Concepto = '".$superconcept."'","Id_Cuenta");

            foreach ($accountArray as $account) {

                //$results

                //$Id_Cuenta

            }

            $results[]=$results1;
    
        }

        echo(json_encode($results));


    }

    

}

?>