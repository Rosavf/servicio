<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\HTTP\Client;

use Google\Cloud\BigQuery\BigQueryClient;

class BigQuery{

    private $bigQueryClient;

    public function begin($projectId){

        try {

            $this->bigQueryClient = new BigQueryClient(['projectId'=>$projectId]);

        }

        catch(Exception $e){

            die($e);

        }

    }

    //funcion general de consulta
    //$dml query en lenguaje SQL standard
    //$type tipo de dato buscado en la consulta
    public function getQuery($dml){

        $query = $this->bigQueryClient->query($dml);

        $queryResults = $this->bigQueryClient->runQuery($query);

        if ($queryResults->isComplete()) {

            $rows = $queryResults->rows();

            return $rows;

        }

        else {
            
            return null;

        }

    }

    


}


?>