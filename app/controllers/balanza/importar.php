<?php

class importar extends Controller{

    //
    public function mensual($params){

        $paramArray=explode("-",$params);

        $year=$paramArray[0];
        $month=$paramArray[1];
        $module=$paramArray[2];

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,$module,"=","Mensual");
        $dataImporter=null;

        echo('success');

    }

    //
    public function acumulado($params){

        $paramArray=explode("-",$params);

        $year=$paramArray[0];
        $month=$paramArray[1];
        $module=$paramArray[2];

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($year,$month,$module,"<=","Mensual_Acumulado");
        $dataImporter=null;

        echo('success');               

    }

    //
    public function desglose($params){


        $paramArray=explode("-",$params);
        $year=$paramArray[0];
        $month=$paramArray[1];
        $module=$paramArray[2];

        $this->model('endpoints','breakdownimporter');
        $breakdownImporter = new BreakdownImporter($year,$month,"CASA");
        $breakdownImporter = null;

    }

    //

}

?>