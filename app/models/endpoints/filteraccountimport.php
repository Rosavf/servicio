<?php

final class FilterAccountImport extends BigQueryFilterImport{

    public function __construct($module){

        $this->attachBigQuery(new BigQueryParser());
        $this->importAccountFilters("`informe-211921.MULTIVA.CUENTAS`",$module);
        $this->detachBiqQuery();

    }

}

?>