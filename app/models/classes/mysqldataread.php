<?php

class MySqlDataRead implements MySqlDataReading{

    protected $mySql;

    public function attachMySql($mySql){

        $this->mySql=$mySql;
        $this->mySql->begin('localhost','root','Pit2018mtv#@','INFORME');

    }

    public function detachMySql(){

        $this->mySql=null;

    }

    public function readAccounts(){



    }

    public function readData(){



    }
    
}


?>