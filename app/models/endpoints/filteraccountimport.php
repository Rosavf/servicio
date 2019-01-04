<?php

final class FilterAccountImport extends BigQueryFilterImport{

    public function __construct($module){

        $this->attachBigQuery(new BigQueryParser());
        $this->importAccountFilters("CUENTAS",$module);
        $this->detachBiqQuery();

    }

}

?>