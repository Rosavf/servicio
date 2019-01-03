<?php

final class FilterImport extends BigQueryFilterImport{

    public function __construct(){

        $this->attachBigQuery(new BigQueryParser());
        $this->importAccountFilters("CUENTAS");
        $this->detachBiqQuery();

    }

}

?>