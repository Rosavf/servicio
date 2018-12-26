<?php

class MySqlDataRead implements MySqlDataReading{

    protected $mySql;
    protected $dataArray=[];

    public function attachMySql($mySql){

        $this->mySql=$mySql;
        $this->mySql->begin('localhost','root','Pit2018mtv#@','INFORME');

    }

    public function detachMySql(){

        $this->mySql=null;

    }

    public function readAccounts($table,$module){

        $accounts = $this->mySql->selectDistinct($table,"Id_Cuenta","Modulo = '".$module."'","Id_Cuenta");

        print_r($accounts);

    }

    public function readData(){


    }
    
}


?>