<?php

class informe extends Controller{

    public function mensual($module){

        $this->model('endpoints','monthlyreport');
        $monthlyreport = new MonthlyReport('Mensual',$module);

    }

    public function desglose($params){

        $this->model('endpoints','breakdownreport');
        $breakdownReport = new BreakdownReport('Desglose',$params);

    }

}

?>