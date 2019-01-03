<?php

class BigQueryFilterImport extends BigqueryConnection implements BigQueryFilterImporting{

    protected $accountFilters=[];

    //
    public function importAccountFilters($accountTable){

        $dml='SELECT * FROM `informe-211921.MULTIVA.CUENTAS`;';
        $accountFilters=$this->bigQuery->select($dml);
        print_r($accountFilters);

    }

    //
    public function importCostCenterFilters($accountTable){

        

    }
}

?>