<?php

class BigQueryFilterExport extends BigQueryConnection{

    private $filterArray=[];

    public function readPostRequest($module,$filters){

        for ($i=0; $i < count($filters); $i++) { 

            $row=$filters[$i];

        }

    }

    public function updateAccountFilters($table){



    }

}

?>