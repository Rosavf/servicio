<?php

class BigQueryDataImport extends BigQueryAccountImport implements BigQueryDataImporting{

    protected $subtotalArray=[];
    protected $subtotalTable=[];

    public function importData($year,$month,$module,$operator,$bigTable,$cecosTable){

        // meses a contar en el informe
        for($i=1;$i<=intval($month); $i++){

            $subquerys=[];

            foreach ($this->accountArray as $row) {

                if($row['PAGADO']==1){

                    switch ($row['HKONT']) {

                        case '6410010102':

                        $dml = 'SELECT ROUND(SUM(CAST(DMBTR AS FLOAT64)), 2)'.' AS SUBTOTAL, '.'"'.strval($year).'"'.' AS ANUALIDAD, '.'"'.$module.'"'.' AS MODULO, '.'"'.$row['HKONT'].'"'.' AS CUENTA, '.'"'.$row['ID'].'"'.' AS ID, '.'"'.strval($i).'"'.' AS MES, '.'"'.$row['SUPERCONCEPTO'].'"'.' AS SUPERCONCEPTO, '.'"'.$row['CONCEPTO'].'"'.' AS CONCEPTO, "'.strval($row['PAGADO']).'" AS PAGADO '.
                        'FROM (SELECT BUDAT, KOSTL, HKONT, DMBTR FROM '.$bigTable.' '.
                        'WHERE CAST(SUBSTR(BUDAT,5,2) AS INT64) '.strval($operator).' '.strval($i).' '.'AND CAST(SUBSTR(BUDAT,1,4) AS INT64) = '.strval($year).' '.'AND KOSTL IN (SELECT KOSTL FROM '.$cecosTable.' WHERE MODULO = "'.strval($module).'") '.
                        ' AND SUBSTR(DBBLG,0,4) <> "PROV"'.
                        'AND HKONT = "'.strval($row['HKONT']).'")';
                                
                        $subquerys[]=$dml;

                            break;

                        case '6410010103':

                        $dml = 'SELECT ROUND(SUM(CAST(DMBTR AS FLOAT64)), 2)'.' AS SUBTOTAL, '.'"'.strval($year).'"'.' AS ANUALIDAD, '.'"'.$module.'"'.' AS MODULO, '.'"'.$row['HKONT'].'"'.' AS CUENTA, '.'"'.$row['ID'].'"'.' AS ID, '.'"'.strval($i).'"'.' AS MES, '.'"'.$row['SUPERCONCEPTO'].'"'.' AS SUPERCONCEPTO, '.'"'.$row['CONCEPTO'].'"'.' AS CONCEPTO, "'.strval($row['PAGADO']).'" AS PAGADO '.
                        'FROM (SELECT BUDAT, KOSTL, HKONT, DMBTR FROM '.$bigTable.' '.
                        'WHERE CAST(SUBSTR(BUDAT,5,2) AS INT64) '.strval($operator).' '.strval($i).' '.'AND CAST(SUBSTR(BUDAT,1,4) AS INT64) = '.strval($year).' '.'AND KOSTL IN (SELECT KOSTL FROM '.$cecosTable.' WHERE MODULO = "'.strval($module).'") '.
                        ' AND SUBSTR(DBBLG,0,4) = "PROV"'.
                        'AND HKONT = "'.strval($row['HKONT']).'")';
                                    
                        $subquerys[]=$dml;
    
                            break;

                        case '6410010104':

                        $dml = 'SELECT ROUND(SUM(CAST(DMBTR AS FLOAT64)), 2)'.' AS SUBTOTAL, '.'"'.strval($year).'"'.' AS ANUALIDAD, '.'"'.$module.'"'.' AS MODULO, '.'"'.$row['HKONT'].'"'.' AS CUENTA, '.'"'.$row['ID'].'"'.' AS ID, '.'"'.strval($i).'"'.' AS MES, '.'"'.$row['SUPERCONCEPTO'].'"'.' AS SUPERCONCEPTO, '.'"'.$row['CONCEPTO'].'"'.' AS CONCEPTO, "'.strval($row['PAGADO']).'" AS PAGADO '.
                        'FROM (SELECT BUDAT, KOSTL, HKONT, DMBTR FROM '.$bigTable.' '.
                        'WHERE CAST(SUBSTR(BUDAT,5,2) AS INT64) '.strval($operator).' '.strval($i).' '.'AND CAST(SUBSTR(BUDAT,1,4) AS INT64) = '.strval($year).' '.'AND KOSTL IN (SELECT KOSTL FROM '.$cecosTable.' WHERE MODULO = "'.strval($module).'") '.
                        ' AND SUBSTR(DBBLG,0,4) = "PROV"'.
                        'AND HKONT = "'.strval($row['HKONT']).'")';
                                        
                        $subquerys[]=$dml;
        
                            break;

                        case '6410010115':

                        $dml = 'SELECT ROUND(SUM(CAST(DMBTR AS FLOAT64)), 2)'.' AS SUBTOTAL, '.'"'.strval($year).'"'.' AS ANUALIDAD, '.'"'.$module.'"'.' AS MODULO, '.'"'.$row['HKONT'].'"'.' AS CUENTA, '.'"'.$row['ID'].'"'.' AS ID, '.'"'.strval($i).'"'.' AS MES, '.'"'.$row['SUPERCONCEPTO'].'"'.' AS SUPERCONCEPTO, '.'"'.$row['CONCEPTO'].'"'.' AS CONCEPTO, "'.strval($row['PAGADO']).'" AS PAGADO '.
                        'FROM (SELECT BUDAT, KOSTL, HKONT, DMBTR FROM '.$bigTable.' '.
                        'WHERE CAST(SUBSTR(BUDAT,5,2) AS INT64) '.strval($operator).' '.strval($i).' '.'AND CAST(SUBSTR(BUDAT,1,4) AS INT64) = '.strval($year).' '.'AND KOSTL IN (SELECT KOSTL FROM '.$cecosTable.' WHERE MODULO = "'.strval($module).'") '.
                        ' AND SUBSTR(DBBLG,0,4) = "PROV"'.
                        'AND HKONT = "'.strval($row['HKONT']).'")';
                                            
                        $subquerys[]=$dml;
            
                            break;
                            
                        
                        default:

                        $dml = 'SELECT ROUND(SUM(CAST(DMBTR AS FLOAT64)), 2)'.' AS SUBTOTAL, '.'"'.strval($year).'"'.' AS ANUALIDAD, '.'"'.$module.'"'.' AS MODULO, '.'"'.$row['HKONT'].'"'.' AS CUENTA, '.'"'.$row['ID'].'"'.' AS ID, '.'"'.strval($i).'"'.' AS MES, '.'"'.$row['SUPERCONCEPTO'].'"'.' AS SUPERCONCEPTO, '.'"'.$row['CONCEPTO'].'"'.' AS CONCEPTO, "'.strval($row['PAGADO']).'" AS PAGADO '.
                        'FROM (SELECT BUDAT, KOSTL, HKONT, DMBTR FROM '.$bigTable.' '.
                        'WHERE CAST(SUBSTR(BUDAT,5,2) AS INT64) '.strval($operator).' '.strval($i).' '.'AND CAST(SUBSTR(BUDAT,1,4) AS INT64) = '.strval($year).' '.'AND KOSTL IN (SELECT KOSTL FROM '.$cecosTable.' WHERE MODULO = "'.strval($module).'") '.
                        ' AND SUBSTR(DBBLG,0,4) <> "PROV"'.
                        'AND HKONT = "'.strval($row['HKONT']).'")';
                                
                        $subquerys[]=$dml;

                            break;
                    }




                }


                // en caso de ser gastos no pagados
                else if($row['PAGADO']==0){

                    $dml = 'SELECT ROUND(SUM(CAST(DMBTR AS FLOAT64)), 2)'.' AS SUBTOTAL, '.'"'.strval($year).'"'.' AS ANUALIDAD, '.'"'.$module.'"'.' AS MODULO, '.'"'.$row['HKONT'].'"'.' AS CUENTA, '.'"'.$row['ID'].'"'.' AS ID, '.'"'.strval($i).'"'.' AS MES, '.'"'.$row['SUPERCONCEPTO'].'"'.' AS SUPERCONCEPTO, '.'"'.$row['CONCEPTO'].'"'.' AS CONCEPTO, "'.strval($row['PAGADO']).'" AS PAGADO '.
                    'FROM (SELECT BUDAT, KOSTL, HKONT, DMBTR FROM '.$bigTable.' '.
                    'WHERE CAST(SUBSTR(BUDAT,5,2) AS INT64) '.strval($operator).' '.strval($i).' '.'AND CAST(SUBSTR(BUDAT,1,4) AS INT64) = '.strval($year).' '.'AND KOSTL IN (SELECT KOSTL FROM '.$cecosTable.' WHERE MODULO = "'.strval($module).'") '.
                    ' AND SUBSTR(DBBLG,0,4) = "PROV"'.
                    'AND HKONT = "'.strval($row['HKONT']).'")';
                            
                    $subquerys[]=$dml;

                }

                else{



                }

                            
            }

            $uniquery=implode(" UNION ALL ", $subquerys);
            $subquerys=null;
            $uniquerys[]=$uniquery;
        }

        // ejecutamos el conjunto de queries
        foreach ($uniquerys as $dml) {

            $subtotal=$this->bigQuery->select($dml);
            $this->subtotalArray[]=$subtotal;

        }

        $uniquerys=null;

        $index=0;

        foreach ($this->subtotalArray as $subtotal) {

            foreach ($subtotal as $row) {

                if($row['SUBTOTAL']==null){$row['SUBTOTAL']=0;}

                if($row['PAGADO']==1){$row['PAGADO']='1';}
                else if($row['PAGADO']==0){$row['PAGADO']='0';}
                else{  }


                $this->subtotalTable[$index]['Modulo']=$row['MODULO'];
                $this->subtotalTable[$index]['Id_Cuenta']=$row['ID'];
                $this->subtotalTable[$index]['Cuenta']=$row['CUENTA'];
                $this->subtotalTable[$index]['Concepto']=$row['CONCEPTO'];
                $this->subtotalTable[$index]['Super_Concepto']=$row['SUPERCONCEPTO'];
                $this->subtotalTable[$index]['Subtotal']=$row['SUBTOTAL'];
                $this->subtotalTable[$index]['Mes']=$row['MES'];
                $this->subtotalTable[$index]['Anualidad']=$row['ANUALIDAD'];
                $this->subtotalTable[$index]['Pagado']=$row['PAGADO'];


                $index++;

            }

        }

        $index=0;

    }

}


?>