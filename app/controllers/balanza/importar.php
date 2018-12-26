<?php

class importar extends Controller{

    public function mensual($params){


        $paramArray=explode($params);

        $year=$paramArray[0];
        $month=$paramArray[1];


        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"BANCO","=");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"CASA","=");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"GRUPO","=");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"OPERADORA","=");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"SAVELLA","=");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"SERVICIOS","=");
        $dataImporter=null;

        echo('success');


    }

    public function acumulado($params){

                

    }

    public function desglose($params){



    }

}

?>