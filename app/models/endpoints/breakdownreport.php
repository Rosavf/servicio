<?php

final class BreakdownReport extends MySqlBreakdownRead{

    public function __construct($table,$params){

        $this->attachMySql(new PdoCrud());
        $this->readBreakDown('Desglose','2018','3','BANCO','1');
        $this->detachMySql();
    
    }
    
}

?>