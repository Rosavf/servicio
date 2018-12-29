<?php

class BreakdownImporter{

    public function __construct($year,$month,$module){

        $this->attachBigQuery(new BigQuery());
        $this->breakdownImport($year,$month,$module,BSEG_TABLE,CECOS_TABLE,ACCOUNTS_TABLE);
        $this->attachBigQuery();

    }

}

?>