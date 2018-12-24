<?php

class BigQueryDataImport extends AccountImport implements BigQueryDataImporting{

    protected $subtotalArray=[];
    protected $subtotalTable=[];

    public function importData($anualidad,$meses,$modulo,$operator,$bigTable,$cecosTable){

        // meses a contar en el informe
        for($i=1;$i<=intval($meses); $i++){

            $subquerys=[];

            foreach ($this->accountArray as $row) {
        
                $dml = 'SELECT ROUND(SUM(CAST(DMBTR AS FLOAT64)), 2) AS SUBTOTAL, '.'"'.strval($anualidad).'"'.' AS ANUALIDAD, '.'"'.$modulo.'"'.' AS MODULO, '.'"'.$row['ID'].'"'.' AS ID, '.'"'.strval($i).'"'.' AS MES, '.'"'.$row['SUPERCONCEPTO'].'"'.' AS SUPERCONCEPTO, '.'"'.$row['CONCEPTO'].'"'.' AS CONCEPTO '.
                'FROM (SELECT BUDAT, KOSTL, HKONT, DMBTR FROM '.$bigTable.' '.
                'WHERE CAST(SUBSTR(BUDAT,5,2) AS INT64) '.strval($operator).' '.strval($i).' '.'AND CAST(SUBSTR(BUDAT,1,4) AS INT64) = '.strval($anualidad).' '.'AND KOSTL IN (SELECT KOSTL FROM '.$cecosTable.' WHERE MODULO = "'.strval($modulo).'") '.
                'AND HKONT = "'.strval($row['HKONT']).'")';
                        
                $subquerys[]=$dml;
                            
            }

            $uniquery=implode(" UNION ALL ", $subquerys);
            $subquerys=null;
            $uniquerys[]=$uniquery;
        }

        // ejecutamos el conjunto de queries
        foreach ($uniquerys as $dml) {

            $subtotal=$this->getMultiTable($dml);
            $this->subtotalArray[]=$subtotal;

        }

        $uniquerys=null;

        //normalizamos arreglo para insertarlo en mysql
        $index=0;

        foreach ($this->subtotalArray as $subtotal) {

            foreach ($subtotal as $row) {

                if($row['SUBTOTAL']==null){$row['SUBTOTAL']=0;}

                $this->subtotalTable[$index]['Modulo']=$row['MODULO'];
                $this->subtotalTable[$index]['Id_Cuenta']=$row['ID'];
                $this->subtotalTable[$index]['Concepto']=$row['CONCEPTO'];
                $this->subtotalTable[$index]['Super_Concepto']=$row['SUPERCONCEPTO'];
                $this->subtotalTable[$index]['Subtotal']=$row['SUBTOTAL'];
                $this->subtotalTable[$index]['Mes']=$row['MES'];
                $this->subtotalTable[$index]['Anualidad']=$row['ANUALIDAD'];

                $index++;

            }

        }

        $index=0;

    }


}


?>