<?php

class BigQueryFilterImport extends BigqueryConnection{

    //
    public function importAccountFilters($accountTable,$module){

        $dml='SELECT * FROM `informe-211921.MULTIVA.CUENTAS`'.
        'WHERE MODULO = '.'"'.$module.'"';
        ' ORDER BY CAST(ID AS INT64);';
        $accountFilters=$this->bigQuery->select($dml);
        echo(json_encode($accountFilters));

    }

}

?>