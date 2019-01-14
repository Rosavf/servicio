<?php

class MySqlDataWrite extends BigQueryDataImport implements MySqlWriting{

    protected $mySql;

    public function attachMySql($mySql){

        $this->mySql=$mySql;
        $this->mySql->begin('localhost','root','Pit2018mtv#@','INFORME');

    }

    public function detachMySql(){

        $this->mySql=null;

    }

    public function writeMySql($table){

        foreach ($this->subtotalTable as $row) {

            $sql="INSERT INTO `".$table."`(`Modulo`, `Id_Cuenta`, `Cuenta`, `Concepto`, `Super_Concepto`, `Subtotal`, `Mes`, `Anualidad`, `Pagado`) VALUES('".$row["Modulo"]."','".$row["Id_Cuenta"]."','".$row["Cuenta"]."','".$row["Concepto"]."','".$row["Super_Concepto"]."','".$row["Subtotal"]."','".$row["Mes"]."','".$row["Anualidad"]."','".$row["Pagado"]."');";
            $this->mySql->query($table,$sql);

        }

        $this->subtotalTable=null;

    }

}


?>