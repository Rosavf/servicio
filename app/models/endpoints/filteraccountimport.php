<?php

final class FilterAccountImport extends BigQueryFilterImport{

    public function __construct(){

        $this->attachBigQuery(new BigQueryParser());
        $this->importAccountFilters("CUENTAS");
        $this->detachBiqQuery();

    }

}

?>