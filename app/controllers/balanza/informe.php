<?php

class informe extends Controller{

    public function mensual($module){

        $this->model('endpoints','monthlyreport');
        $monthlyreport = new MonthlyReport('Mensual',$module);

    }

    public function acumulado($module){

        $this->model('endpoints','monthlyreport');
        $monthlyreport = new MonthlyReport('Mensual_Acumulado',$module);

    }

    public function desglose($params){

        $this->model('endpoints','breakdownreport');
        $breakdownReport = new BreakdownReport('Desglose',$params);

    }

    public function resumen($params){

        $this->model('endpoints','summary');

    }

}

?>