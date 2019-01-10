<?php

class BigQueryAccountImport extends BigQueryConnection implements BigQueryAccountImporting{

    protected $accountArray=[]; //arreglo que guarda las cuentas obtenidas

    //importamos las cuentas desde la tabla de cuentas en BigQuery
    public function importAccounts($module,$accountTable){

        $dml = 'SELECT ID, HKONT, ARRAY_TO_STRING(CONCEPTO, '*') AS CONCEPTO, PAGADO, SUPERCONCEPTO, '.

        ' FROM '.$accountTable.' WHERE MODULO = "'.$module.'" '.' ORDER BY ID';

        $accountResult = $this->bigQuery->select($dml);

        foreach ($accountResult as $i => $row) {

            $this->accountArray[$i] = $row;

        }

    }

}

?>