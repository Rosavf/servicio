<?php

class Cleaner extends MySqlClean{

    public function __construct(){

        $this->attachMySql(new PdoCrud());
        $this->cleanData('Mensual');
        $this->cleanData('Mensual_Acumulado');
        $this->cleanData('Desglose');
        $this->detachMySql();

    }
    
}


?>