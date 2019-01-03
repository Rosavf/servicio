<?php

class FilterImport extends BigQueryFilterImport{

    public function __contruct(){

        $this->attachBigQuery(new BigQuery());
        $this->importAccountFilters("CUENTAS");
        $this->detachBigQuery();

    }

}

?>