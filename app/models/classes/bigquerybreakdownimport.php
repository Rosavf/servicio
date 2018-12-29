<?php

class BigQueryBreakdownImport extends BigQueryDataImport{

    private $breakdownArray=[];

    public function importBreakDown($year,$month,$module,$bigTable,$cecosTable,$accountsTable){

        $subquerys=[];

        foreach ($this->Tabla_Cuentas as $row) {

            $dml = 'SELECT "'.$module.'" AS MODULO,'.$row['ID'].' AS ID, '.' DMBTR AS MONTO, CAST(SUBSTR(BUDAT,1,4) AS INT64) AS ANUALIDAD, CAST(SUBSTR(BUDAT,5,2) AS INT64) AS MES, BUDAT AS FECHA, PSWSL AS MONEDA, KOSTL AS CECO, BKTXT AS DESCRIPCION FROM'.
            ' '.$bigTable.' '.
            ' WHERE CAST(SUBSTR(BUDAT,5,2) AS INT64) <= '.strval($month).
            ' AND CAST(SUBSTR(BUDAT,1,4) AS INT64) = '.strval($year).
            ' AND KOSTL IN (SELECT KOSTL FROM '.$cecosTable.' WHERE MODULO = "'.strval($module).'")'.
            ' AND HKONT = (SELECT HKONT FROM '.$accountsTable.' WHERE ID = "'.$row['ID'].'")';

            $subquerys[]=$dml;
                    
        }

        $uniquery=implode(" UNION ALL ", $subquerys);
        $subquerys=null;
        $this->Array_Desgloses[] = $this->bigQuery->select($uniquery);
        $uniquery=null;

        print_r($this->breakdownArray);

    }

}

?>