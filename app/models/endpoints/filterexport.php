<?php

final class FilterExport extends BigQueryFilterExport{

    public function __construct($module,$request){

        $this->readPostRequest($module,$request);
        $this->updateAccountFilters("`informe-211921.MULTIVA.CUENTAS`");

    }

}



?>