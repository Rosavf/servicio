<?php

class MySqlClean implements MySqlDataCleaning{

    protected $mySql;

    public function attachMySql($mySql){

        $this->mySql=$mySql;
        $this->mySql->begin('localhost','root','Pit2018mtv#@','INFORME');

    }

    //
    public function detachMySql(){

        $this->mySql=null;

    }

    //
    public function cleanData($table){

        $this->mySql->truncate($table);

    }

}



?>