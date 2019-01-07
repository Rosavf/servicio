<?php

class BigQueryFilterExport extends BigQueryConnection{

    private $filterArray=[];

    public function readPostRequest($module,$filters){

        for ($i=0; $i < count($filters); $i++) { 

            $row=$filters[$i];
            $filterLine=[];
            $filterLine['ID']=strval($i+1);

            switch ($variable) {
                case 'value':
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }

            $this->filterArray[]=$filterLine;

        }

    }

    public function updateAccountFilters($table){

        print_r($this->filterArray);

    }

}

?>