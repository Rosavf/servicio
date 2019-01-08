<?php

final class BreakdownReport extends MySqlBreakdownRead{

    public function __construct($table,$params){

        $paramArray=explode("-",$params);

        $year=$paramArray[0];
        $month=$paramArray[1];
        $module=$paramArray[2];
        $id=$paramArray[3];

        $this->attachMySql(new PdoCrud());
        $this->readBreakDown('Desglose',$year,$month,$module,$id);
        $this->detachMySql();
    
    }
    
}

?>