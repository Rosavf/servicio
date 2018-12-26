<?php

class informe extends Controller{

    public function mensual($params){

        $this->model('endpoints','monthlyreport');

        $monthlyreport = new MonthlyReport();

        $monthlyreport->execute($params);

    }

}

?>