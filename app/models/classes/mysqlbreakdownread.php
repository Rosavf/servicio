<?php

class MySqlBreakdownRead{

    protected $mySql;

    protected $breakdownArray=[];

    public function attachMySql($mySql){

        $this->mySql= new crud('localhost','root','Pit2018mtv#@','INFORME');

    }

    public function detachMySql(){

        $this->mySql=null;

    }

    public function readBreakDown($table,$year,$month,$module){

        $breakdown = $this->mySql->select('Desglose',['Monto', 'Descripcion','Fecha','Moneda'],"Modulo = '".$module."' AND Mes = ".$month." AND Anualidad = ".$year." AND Id_Cuenta = ".$id,'Id_Cuenta','assoc');

        echo(json_encode($breakdown));
        
    }

}

?>