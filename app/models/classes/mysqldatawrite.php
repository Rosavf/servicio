<?php

class MySqlDataWrite extends BigQueryDataImport implements MySqlWriting{

    protected $mySql;

    public function attachMySql($mySql){

        $this->mySql=$mySql;
        $this->mySql->begin('localhost','root','Pit2018mtv#@','Informe');

    }

    public function detachMySql(){

        $this->mySql=null;

    }

    public function writeMySql($table){


    }

}


?>