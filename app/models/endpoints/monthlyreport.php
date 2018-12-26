<?php

class MonthlyReport extends MySqlDataRead{

    public function __construct($table,$module){

        $this->attachMySql(new PdoCrud());
        $this->readData($table,$module);
        $this->detachMySql();       
         
    }
    
}

?>