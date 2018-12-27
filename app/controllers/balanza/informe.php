<?php

class informe extends Controller{

    public function mensual($module){

        $this->model('endpoints','monthlyreport');
        $monthlyreport = new MonthlyReport('Mensual',$module);

    }

}

?>