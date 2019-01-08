<?php

class MySqlDataRead extends MySqlConnection implements MySqlDataReading{

    protected $mySql;
    protected $accountArray=[];   
    protected $readArray=[];
    protected $dataArray=[];

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

            $i=0;
            foreach ($block as $line) {

                $row["Id_Cuenta"] = $line["Id_Cuenta"];
                $row["Concepto"] = $line["Concepto"];
                $row["Super_Concepto"] = $line["Super_Concepto"];
                $row["Meses"][$i]["Mes"]=$line["Mes"];
                $row["Meses"][$i]["Subtotal"]=$line["Subtotal"];
                $row["Meses"][$i]["Llave"]=strval($line['Anualidad']).'-'.strval($line['Mes']).'-'.strval($line['Modulo']).'-'.strval($line['Id_Cuenta']);
                $i++;
            }

            $this->dataArray[]=$row;

        }

        echo(json_encode($this->dataArray));

    }
    
}

?>