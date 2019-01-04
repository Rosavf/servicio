<?php

final class FilterCecosImport extends BigQueryFilterImport{

    public function __construct(){

        $this->attachBigQuery(new BigQueryParser());
        $this->importAccountFilters("CUENTAS");
        $this->detachBiqQuery();

    }

}

?>