<?php

class MySqlSummaryRead{

    private $accountArray=[];

    protected $mySql=null;
    protected $modules=["BANCO","CASA","GRUPO","OPERADORA","SAVELLA","SERVICIOS"];
    protected $moduleArray=[];

    public function attachMySql($mySql){

        $this->mySql=$mySql;
        $this->mySql->begin('localhost','root','Pit2018mtv#@','INFORME');

    }

    public function detachMySql(){

        $this->mySql=null;

    }

    public function readModules($year,$month){


        foreach ($this->moduleArray as $key => $value) {

            $accountArray = $this->mySql->selectDistinct($table,"Id_Cuenta","Modulo = '".$module."'","Id_Cuenta");

            for ($i=0; $i < $this->accountArray; $i++) { 
    
                $module = $this->mySql->select($table,["Modulo", "Id_Cuenta", "Anualidad", "Concepto", "Super_Concepto","Subtotal"],"Modulo = '".$module."'"." AND "."Id_Cuenta = '".$this->accountArray[$i]."'","Mes","assoc");
    
                print_r($module);
    
            }
    
        }

    }


    
}



?>