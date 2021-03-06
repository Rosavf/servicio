<?php
/*************************************/
//////////INTERFACES DE BIGQUERY///////
/*************************************/

//CONEXION A BIGQUERY POR INYECCION DE DEPENDENCIAS CON METODOS PARA IMPORTAR DATOS
interface BigQueryConnecting{

    public function attachBigQuery($bigQuery);
    public function detachBiqQuery();

}

//IMPORTA DATOS DE LA TABLA BSEG
interface BigQueryAccountImporting extends BigQueryConnecting{

    public function importAccounts($module,$accountTable);

}

//IMPORTA DATOS DE LA TABLA ACCOUNTS
interface BigQueryDataImporting extends BigQueryAccountImporting{

    public function importData($year,$month,$modulo,$operator,$bigTable,$cecosTable);

}

/*************************************/
//////////INTERFACES DE MYSQL//////////
/*************************************/

//CONEXION A MYSQL POR INYECCION DE DEPENDENCIAS Y DESTRUCTOR
interface MySqlConnecting{

    public function attachMySql($mySql);
    public function detachMySql();

}

//AGREGAMOS METODO DE ESCRITURA A DATABASE
interface MySqlWriting extends MySqlConnecting{

    public function writeMySql($table);

}

// HEREDAMOS CONEXION A MYSQL Y AGREGAMOS METODO DE LECTURA
interface MySqlDataReading extends MySqlConnecting{

    public function readData($table, $module);

}

interface MySqlCleaning extends MySqlConnecting{

    public function cleanData($table);

}

interface MySqlSummaryReading extends MySqlConnecting{

    public function readModules($table,$month);

}

//IMPORTA DATOS DE LA TABLA BSEG
interface BigQueryFilterImporting extends BigQueryConnecting{

    public function importAccountFilters($accountTable,$module);
    public function importCostCenterFilters($accountTable,$module);

}

//IMPORTA DATOS DE LA TABLA BSEG
interface BigQueryFilterExporting extends BigQueryConnecting{

    public function exportAccountFilters($accountTable,$module);
    public function exportCostCenterFilters($accountTable,$module);

}

?>