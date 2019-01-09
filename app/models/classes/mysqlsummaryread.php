<?php

class MySqlSummaryRead extends MySqlConnection implements MySqlSummaryReading{

    protected $superconcepts=["FACTOR HUMANO","GASTOS GENERALES"];
    protected $modules=["BANCO","CASA","GRUPO","OPERADORA","SAVELLA","SERVICIOS"];

    //
    public function readModules($table,$month){

        $results=[];

        foreach ($this->superconcepts as $superconcept) {
            
            $accountArray = $this->mySql->selectDistinct($table,"Id_Cuenta","Super_Concepto = '".$superconcept."'","Id_Cuenta");

            for ($i=0; $i < count($accountArray); $i++) { 
        
                foreach ($this->modules as $module) {
    
                    $moduleResult = $this->mySql->select($table,["Modulo", "Concepto","Subtotal"],"Modulo = '".$module."'"." AND "."Id_Cuenta = '".$accountArray[$i]."'","Mes","assoc");
                    
                    $results[]=$moduleResult;
        
                }
    
            }
    
        }

        echo(json_encode($results));

    }

    

}

?>