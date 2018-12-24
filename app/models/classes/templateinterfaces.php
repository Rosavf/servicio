<?php

/*************************************/
//////////INTERFACES DE BIGQUERY///////
/*************************************/

//CONEXION A BIGQUERY POR INYECCION DE DEPENDENCIAS CON METODOS PARA IMPORTAR DATOS
interface BigQueryConnecting{

    public function catchBigQuery($bigQuery);
    public function endBiqQuery();

}

//IMPORTA DATOS DE LA TABLA BSEG
interface BigQueryAccountImporting extends BigQueryConnecting{

    public function importAccounts($accountTable);

}

//IMPORTA DATOS DE LA TABLA BSEG
interface BigQueryDataImporting extends BigQueryAccountImporting{

    public function importData($anualidad,$meses,$modulo,$operador,$bigTable,$cecosTable);

}

/*************************************/
//////////INTERFACES DE MYSQL//////////
/*************************************/

//CONEXION A MYSQL POR INYECCION DE DEPENDENCIAS Y DESTRUCTOR
interface MySqlConnecting{

    public function catchMySql($mySql);
    public function endMySql();

}

//AGREGAMOS METODO DE ESCRITURA A DATABASE
interface MySqlWriting extends MySqlConnecting{

    public function writeMySql();

}

// HEREDAMOS CONEXION A MYSQL Y AGREGAMOS METODO DE LECTURA
interface MySqlDataReading extends MySqlConnecting{

    public function readAccounts();
    public function readData();

}

?>