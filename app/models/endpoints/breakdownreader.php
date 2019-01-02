<?php

class BreakdownReader extends MySqlBreakdownRead{

    public function __construct(){

        $this->attachMySql(new PdoCrud());

        $this->readBreakDown();
    
        $this->detachMySql('Desglose','2018','3','BANCO','1');
    
    }
    
}

?>