<?php

// AGREGA CONEXIONES A BIG QUERY Y AGREGA METODOS DE CONEXION Y ESCRITURA A MYSQL, AMBOS POR INVERSION DE CONTROL LATERAL
class BigQueryConnection implements BigQueryConnecting{

    protected $bigQuery;

    public  function attachBigQuery($bigQuery){

        $this->bigQuery=$bigQuery;
        $this->bigQuery->begin(PROJECT_ID);

    }

    public  function detachBiqQuery(){

        $this->bigQuery=null;

    }

}


?>