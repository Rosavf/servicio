<?php

class BigQueryFilterExport extends BigQueryConnection implements BigQueryFilterExporting{

    protected $filterPostRequest;

    public function exportAccountFilters($accountTable,$module){

        print_r($this->filterPostRequest);

        for ($i=0; $i < $this->filterPostRequest; $i++) { 

            $row=$this->filterPostRequest[$i];

        }

    }

    public function exportCostCenterFilters($accountTable,$module){



    }
    
}




?>