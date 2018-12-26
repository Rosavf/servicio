<?php

class BigQueryBreakDownImport extends BigQueryAccountImport implements BigQueryDataImporting{

    protected $breakdownArray=[];

    public function importData($year,$month,$module,$operator,$bigTable,$cecosTable){

        $subquerys=[];

        foreach ($this->Tabla_Cuentas as $row) {

            $dml = 'SELECT "'.$modulo.'" AS MODULO,'.$row['ID'].' AS ID, '.' DMBTR AS MONTO, CAST(SUBSTR(BUDAT,1,4) AS INT64) AS ANUALIDAD, CAST(SUBSTR(BUDAT,5,2) AS INT64) AS MES, BUDAT AS FECHA, PSWSL AS MONEDA, KOSTL AS CECO, BKTXT AS DESCRIPCION FROM'.
            ' '.$bigTable.' '.
            ' WHERE CAST(SUBSTR(BUDAT,5,2) AS INT64) <= '.strval($meses).
            ' AND CAST(SUBSTR(BUDAT,1,4) AS INT64) = '.strval($year).
            ' AND KOSTL IN (SELECT KOSTL FROM '.$cecosTable.' WHERE MODULO = "'.strval($modulo).'")'.
            ' AND HKONT = (SELECT HKONT FROM '.$cuentasTable.' WHERE ID = "'.$row['ID'].'")';

            $subquerys[]=$dml;
                    
        }

        $uniquery=implode(" UNION ALL ", $subquerys);
        $subquerys=null;
        $this->breakdownArray[] = $this -> getMultiTable(CREDENTIALS,$uniquery);
        $uniquery=null;

    }


}


?>