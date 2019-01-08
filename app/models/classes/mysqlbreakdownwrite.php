<?php

class MySqlBreakdownWrite extends BigQueryBreakdownImport implements MySqlWriting{

    public function attachMySql($mySql){

        $this->mySql=$mySql;
        $this->mySql->begin('localhost','root','Pit2018mtv#@','INFORME');

    }

    public function detachMySql(){

        $this->mySql=null;


    }

    public function writeMySql($table){

        foreach ($this->breakdownArray as $row) {

            $sql="INSERT INTO ".
            "`".$tabla."`(`Id_Cuenta`, `Mes`, `Anualidad`, `Modulo`, `Monto`, `CeCo`, `Descripcion`, `Fecha`, `Moneda`) ".
            "VALUES ('".
            $row['ID']."','".$row['MES']."','".$row['ANUALIDAD']."','".$row['MODULO']."','".$row['MONTO']."','".$row['CECO']."','".$row['DESCRIPCION']."','".$row['FECHA']."','".$row['MONEDA']."')";
            
            
            
            $crud->query($tabla,$sql);

        }

        $crud->end();

    }

}

?>