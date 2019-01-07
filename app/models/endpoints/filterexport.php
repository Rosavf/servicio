<?php

final class FilterExport extends BigQueryFilterExport{

    public function __construct($module,$request){

        $this->readPostRequest($module,$request);

    }

    public function updateAccountFilters($table){

        print_r($this->filterArray);

    }
    
}



?>