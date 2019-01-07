<?php

final class FilterExport extends BigQueryFilterExport{

    public function __construct($module,$request){

        $this->attachBigQuery(new BigQueryParser());
        $this->readPostRequest($module,$request);
        $this->updateAccountFilters("BANCO","`informe-211921.MULTIVA.CUENTAS`");
        $this->detachBigQuery();

    }

}



?>