<?php

class BreakdownImporter{

    public function __construct(){

        $this->attachBigQuery(new BigQuery());

        $this->breakdownImport($year,$month,$module,$bigTable,$cecosTable,$accountsTable);

    }


}

?>