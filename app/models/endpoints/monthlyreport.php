<?php

class MonthlyReport extends MySqlDataRead{

    public function parseParams($params){

        $paramArray=explode("-",$params);

        $year=$paramArray[0];
        $month=$paramArray[1];
        $module=$paramArray[2];

        $this->attachMySql(new PdoCrud());
        $this->readAccounts("Mensual","BANCO");        

    }
    
}


?>