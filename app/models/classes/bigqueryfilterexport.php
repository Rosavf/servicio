<?php

class BigQueryFilterExport extends BigQueryConnection implements BigQueryFilterExporting{

    protected $filterPostRequest;

    public function readPostRequest(){

        if(isset($_POST['req'])){

            $this->filterPostRequest=$_POST['req'];
            
            print_r($this->filterPostRequest);

        }

    }

    public function exportAccountFilters($accountTable,$module){




    }

    public function exportCostCenterFilters($accountTable,$module){




    }
    
}




?>