<?php

class FilterImport extends BigQueryFilterImport{

    public function __contruct(){

        $this->attachBigQuery(new BigQueryParser());
        $this->importAccountFilters("CUENTAS");
        $this->detachBigQuery();

    }

}

?>