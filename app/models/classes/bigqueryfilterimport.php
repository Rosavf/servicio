<?php

class BigQueryFilterImport extends BigqueryConnection implements BigQueryFilterImporting{

    protected $accountFilters=[];

    //
    public function importAccountFilters($accountTable){

        $dml='SELECT * FROM `informe-211921.MULTIVA.CUENTAS`;';

        $this->accountFilters=$this->bigQuery->select($dml);

        print_r($this->accountFilters);

        echo('ok');

    }

    //
    public function importCostCenterFilters($accountTable){

        

    }
}

?>