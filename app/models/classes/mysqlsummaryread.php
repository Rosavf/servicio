<?php

class MySqlSummaryRead extends MySqlConnection implements MySqlSummaryReading{

    private $accountArray=[];

    protected $mySql=null;
    protected $modules=["BANCO","CASA","GRUPO","OPERADORA","SAVELLA","SERVICIOS"];

    //
    public function readModules($table,$month){

        foreach ($this->modules as $module) {

            $accountArray = $this->mySql->selectDistinct($table,"Id_Cuenta","Modulo = '".$module."'","Id_Cuenta");

            for ($i=0; $i < $this->accountArray; $i++) { 
    
                $module = $this->mySql->select($table,["Modulo", "Id_Cuenta", "Anualidad", "Concepto", "Super_Concepto","Subtotal"],"Modulo = '".$module."'"." AND "."Id_Cuenta = '".$this->accountArray[$i]."'","Mes","assoc");
    
                print_r($module);
    
            }
    
        }

    }



    
}



?>