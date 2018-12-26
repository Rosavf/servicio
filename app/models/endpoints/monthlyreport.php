<?php

class MonthlyReport extends MySqlDataRead{

    public function execute($params){

        $this->attachMySql(new PdoCrud());
        $this->readAccounts("Mensual","BANCO");        

        echo("OK");
    }
    
}


?>