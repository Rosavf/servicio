<?php

class MySqlDataRead implements MySqlDataReading{

    protected $mySql;
    protected $accountArray=[];   
    protected $readArray=[];
    protected $dataArray=[];

    //
    public function attachMySql($mySql){

        $this->mySql=$mySql;
        $this->mySql->begin('localhost','root','Pit2018mtv#@','INFORME');

    }

    //
    public function detachMySql(){

        $this->mySql=null;

    }

    //
    public function readData($table,$module){

        $this->accountArray = $this->mySql->selectDistinct($table,"Id_Cuenta","Modulo = '".$module."'","Id_Cuenta");

        $results=[];

        //tomamos bloque con 3n meses
        for($i=0;$i<count($this->accountArray);$i++){

            $months = $this->mySql->select($table,["Modulo", "Id_Cuenta", "Anualidad", "Concepto", "Super_Concepto", "Mes" ,"Subtotal"],"Modulo = '".$module."'"." AND "."Id_Cuenta = '".$this->accountArray[$i]."'","Mes","assoc");
            
            $results[]=$months;

        }

        foreach ($results as $block) {

            $row=[];

            foreach ($block as $line) {

                $row["Id_Cuenta"] = $line["Id_Cuenta"];
                $row["Concepto"] = $line["Concepto"];
                $row["Super_Concepto"] = $line["Super_Concepto"];


            }

            $this->dataArray[]=$row;

        }



        
    }




        

        
    

}



?>