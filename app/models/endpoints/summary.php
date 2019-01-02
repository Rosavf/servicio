<?php

class Summary extends MySqlSummaryRead{

   public function  __construct(){

        $this->attachMySql(new PdoCrud());

        $this->readModules();

   }

}

?>