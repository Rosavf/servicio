<?php

class importar extends Controller{

    public function mensual($params){

        $this->model('endpoints','dataimporter');

        $dataImporter=new DataImporter();
        $dataImporter->attachBigQuery(new BigQueryParser());
        $dataImporter->execute($params);

    }

    public function acumulado($params){

                

    }

    public function desglose($params){



    }

}

?>