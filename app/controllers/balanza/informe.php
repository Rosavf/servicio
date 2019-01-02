<?php

class informe extends Controller{

    public function mensual($module){

        $this->model('endpoints','monthlyreport');
        $monthlyreport = new MonthlyReport('Mensual',$module);

    }

    public function desglose($module){

        $this->model('endpoints','breakdownreport');
        $monthlyreport = new MonthlyReport('Mensual',$module);

    }

}

?>