<?php

class BigQueryFilterImport extends BigqueryConnection implements BigQueryFilterImporting{

    protected $accountFilters=[];

    public function importAccountFilters($accountTable){

        $dml='SELECT * FROM `informe-211921.MULTIVA.CUENTAS`;';

        $this->bigQuery->select($dml);

    }

    public function importCostCenterFilters($accountTable){

        

    }
}

?>