<?php

class MonthlyReport extends MySqlDataRead{

    public function execute($params){

        $this->attachMySql(new PdoCrud());
        $this->readData("Mensual","BANCO");        
        $this->endMySql();        
    }
    
}

?>