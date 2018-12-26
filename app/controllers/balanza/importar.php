<?php

class importar extends Controller{

    public function mensual(){

        $this->model('endpoints','dataimporter');
        $dataImporter=new DataImporter($params);
        $dataImporter=null;


    }

    public function acumulado($params){

                

    }

    public function desglose($params){



    }

}

?>