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

        $accounts = $this->mySql->select($table,["Modulo", "Id_Cuenta"],"1","Id_Cuenta","assoc");

    }

    public function readData(){

        //$this->mySql->select();

    }
    
}


?>