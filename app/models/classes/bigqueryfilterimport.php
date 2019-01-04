<?php

//
class BigQueryFilterImport extends BigqueryConnection implements BigQueryFilterImporting{

    //
    public function importAccountFilters($accountTable,$module){

        $dml='SELECT * FROM `informe-211921.MULTIVA.CUENTAS`;';
        $accountFilters=$this->bigQuery->select($dml);
        echo(json_encode($accountFilters));

    }

    //
    public function importCostCenterFilters($accountTable,$module){

        $dml='SELECT * FROM `informe-211921.MULTIVA.CECOS`;';
        $cecostFilters=$this->bigQuery->select($dml);
        echo(json_encode($cecosFilters));

    }
}

?>