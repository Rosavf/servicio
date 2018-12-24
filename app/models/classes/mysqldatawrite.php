<?php

class MySqlDataWrite extends BigQueryDataImport implements MySqlWriting{

    protected $mySql;

    public function attachMySql($mySql){

        $this->mySql=$mySql;

    }

    public function detachMySql(){

        $this->mySql=null;

    }

    public function writeMySql($table){

        



    }

}


?>