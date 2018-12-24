<?php

// conexion  y destruccion de clase de big query
interface BigQuerying{

    public function getQuery();
    public function end();

}

?>