<?php

class BreakdownImporter extends BigQueryBreakdownImport{

    public function __construct($year,$month,$module){

        $this->attachBigQuery(new BigQuery());
        $this->importBreakDown($year,$month,$module,BSEG_TABLE,CECOS_TABLE,ACCOUNTS_TABLE);
        $this->attachBigQuery();

    }

}

?>