<?php

class BigQueryFilterExport extends BigQueryConnection{

    private $filterArray=[];

    public function readPostRequest($module,$filters){

        for ($i=0; $i < count($filters); $i++) { 

            $row=$filters[$i];
            $filterLine=[];
            $filterLine['ID']=strval($i+1);
            $filterLine['PAGADO']=strval($i+1);

            $filterArray[]=$filterLine;

        }

    }

    public function updateAccountFilters($table){



    }

}

?>