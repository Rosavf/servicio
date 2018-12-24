<?php

// conexion  y destruccion de clase de big query
interface BigQuerying{

    public function getQuery();
    public function end();

}

// parseado se consulta de big query
interface BigQueryParsing{

    public function select($dml);

}

?>

