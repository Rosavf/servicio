<?php

class BigQueryAccountImport extends BigQueryConnection implements BigQueryAccountImporting{

    protected $accountArray=[]; //arreglo que guarda las cuentas obtenidas

    public function __construct(){

        $this->catchBigQuery(new Parser());
        $this->importAccounts('`informe-211921.PRE_PRODUCCION_MULTIVA.CUENTAS`');
        
    }

    //importamos las cuentas desde la tabla de cuentas en BigQuery
    public function importAccounts($accountTable){

        $dml = 'SELECT ID, HKONT, CONCEPTO, SUPERCONCEPTO FROM '.$accountTable.' ORDER BY ID';
        $accountResult = $this->bigQuery->getTable($dml);

        foreach ($accountResult as $i => $row) {

            $this->accountArray[$i] = $row;

        }

        echo(count($this->accountArray));
 
    }

}

?>