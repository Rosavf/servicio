<?php

class MySqlSummaryRead{

    protected $mySql;
    protected $accountArray=[];   
    protected $readArray=[];
    protected $dataArray=[];

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
    public function readModules(){

        

    }

    public function readTotals(){



    }

    public function readSum(){



    }


    
}



?>