<?php

class MySqlSummaryRead extends MySqlConnection implements MySqlSummaryReading{

    private $accountArray=[];
    protected $modules=["BANCO","CASA","GRUPO","OPERADORA","SAVELLA","SERVICIOS"];

    //
    public function readModules($table,$month){

        foreach ($this->modules as $module) {

            $accountArray = $this->mySql->selectDistinct($table,"Id_Cuenta","Modulo = '".$module."'","Id_Cuenta");

            for ($i=0; $i < count($accountArray); $i++) { 
    
                $moduleResult = $this->mySql->select($table,["Modulo", "Id_Cuenta", "Anualidad", "Concepto", "Super_Concepto","Subtotal"],"Modulo = '".$module."'"." AND "."Id_Cuenta = '".$accountArray[$i]."'","Mes","assoc");
    
                
                $results=[];

                foreach($moduleResult as $moduleRow){

                    if($i==0){

                        

                    }

                }

                



                
            }
    
        }

    }



    
}



?>