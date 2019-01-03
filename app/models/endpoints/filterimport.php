<?php

class FilterImport extends BigQueryFilterImport{

    public function __contruct(){

        $this->importAccountFilters("CUENTAS");

    }

}

?>