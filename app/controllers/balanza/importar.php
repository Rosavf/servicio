<?php

class importar extends Controller{

    public function mensual($params){

        $paramArray=explode("-",$params);

        $year=$paramArray[0];
        $month=$paramArray[1];


        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"BANCO","=","Mensual");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"CASA","=","Mensual");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"GRUPO","=","Mensual");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"OPERADORA","=","Mensual");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"SAVELLA","=","Mensual");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"SERVICIOS","=","Mensual");
        $dataImporter=null;

        echo('success');


    }

    public function acumulado($params){

        $paramArray=explode("-",$params);

        $year=$paramArray[0];
        $month=$paramArray[1];


        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"BANCO","<=","Mensual_Acumulado");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"CASA","<=","Mensual_Acumulado");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"GRUPO","<=","Mensual_Acumulado");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"OPERADORA","<=","Mensual_Acumulado");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"SAVELLA","<=","Mensual_Acumulado");
        $dataImporter=null;

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,"SERVICIOS","<=","Mensual_Acumulado");
        $dataImporter=null;

        echo('success');               

    }

    public function desglose($params){

        $this->model('endpoints','breakdownimporter');

        $paramArray=explode("-",$params);
        $year=$paramArray[0];
        $month=$paramArray[1];
        $breakdownImporter = new BreakdownImporter($year,$month,"CASA");
        $breakdownImporter = null;

    }

    public function filtros($params){



    }

}

?>