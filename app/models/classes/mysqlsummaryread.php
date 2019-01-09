<?php

class MySqlSummaryRead extends MySqlConnection implements MySqlSummaryReading{

    protected $accountArray=[];
    protected $superConcepts=["FACTOR HUMANO","GASTOS GENERALES"];
    protected $modules=["BANCO","CASA","GRUPO","OPERADORA","SAVELLA","SERVICIOS"];

    //
    public function readModules($table,$month){

        $results=[];

        $accountArray = $this->mySql->selectDistinct($table,"Id_Cuenta","Id_Cuenta");

        for ($i=0; $i < count($accountArray); $i++) { 
    
            foreach ($this->modules as $module) {

                $moduleResult = $this->mySql->select($table,["Modulo", "Id_Cuenta", "Anualidad", "Concepto", "Super_Concepto","Subtotal"],"Modulo = '".$module."'"." AND "."Id_Cuenta = '".$accountArray[$i]."'","Mes","assoc");
                
                $results[]=$moduleResult;

            }

        }



    }



    
}



?>