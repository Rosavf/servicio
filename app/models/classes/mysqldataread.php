<?php

class MySqlDataRead implements MySqlDataReading{

    protected $mySql;
    protected $accountArray=[];   
    protected $dataArray=[];
    protected $nestedArray=[];

    //
    public function attachMySql($mySql){

        $this->mySql=$mySql;
        $this->mySql->begin('localhost','root','Pit2018mtv#@','INFORME');

    }

    //
    public function detachMySql(){

        $this->mySql=null;

    }

    //
    public function readData($table,$module){

        $this->accountArray = $this->mySql->selectDistinct($table,"Id_Cuenta","Modulo = '".$module."'","Id_Cuenta");

        $results=[];

        for($i=0;$i<count($this->accountArray);$i++){

            $months = $this->mySql->select($table,["Modulo", "Id_Cuenta", "Anualidad", "Concepto", "Super_Concepto", "Mes" ,"Subtotal"],"Modulo = '".$module."'"." AND "."Id_Cuenta = '".$this->accountArray[$i]."'","Mes","assoc");

            foreach ($months as $row) {

                $results[]=$row;

            }


        }

        $this->accountArray=null;

        $this->dataArray['Data']=$results;

        echo(json_encode($this->dataArray));

    }

}



?>