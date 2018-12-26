<?php

class MonthlyReport extends MySqlDataRead{

    public function __construct($params){

        $this->attachMySql(new PdoCrud());
        $this->readData("Mensual","BANCO");        
        $this->detachMySql();       
         
    }
    
}

?>