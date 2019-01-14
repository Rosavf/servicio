<?php

class resumen extends Controller{

    public function mensual($params){

        $this->model('endpoints','summary');

        $summary = new Summary('Mensual',$params);
        
    }

    public function acumulado($params){

        $this->model('endpoints','summary');

        $summary = new Summary('Mensual',$params);
        
    }

}

