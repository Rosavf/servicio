<?php

class BigQueryAccountImport extends BigQueryConnection implements BigQueryAccountImporting{

    protected $accountArray=[]; //arreglo que guarda las cuentas obtenidas

    //importamos las cuentas desde la tabla de cuentas en BigQuery
    public function importAccounts($module,$accountTable){

        $dml = 'SELECT ID, HKONT, CONCEPTO, SUPERCONCEPTO  FROM '.$accountTable.' ORDER BY ID';

        echo($dml);

        $accountResult = $this->bigQuery->select($dml);

        print_r($accountResult);

        foreach ($accountResult as $i => $row) {

            $this->accountArray[$i] = $row;

        }

    }

}

?>