<?php

class BreakdownImporter extends BigQueryBreakdownImport{

    public function __construct($year,$month,$module){

        $this->attachBigQuery(new BigQueryParser());
        $this->importAccounts($module,'`informe-211921.MULTIVA.CUENTAS`');
        $this->importBreakDown($year,$month,$module,'`informe-211921.MULTIVA.BSEGAIO`','`informe-211921.MULTIVA.CECOS`','`informe-211921.MULTIVA.CUENTAS`');
        $this->detachBiqQuery();

    }

}

?>