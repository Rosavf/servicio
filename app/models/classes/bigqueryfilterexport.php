<?php

class BigQueryFilterExport extends BigQueryConnection{

    private $filterArray=[];

    public function readPostRequest($module,$filters){


        for ($i=0; $i < count($filters); $i++) { 

            $row=$filters[$i];
            $filterLine=[];
            $filterLine['ID']=strval($i+1);

            switch ($row[0]) {

                case true: $filterLine['PAGADO']="TRUE";

                    break;

                case false: $filterLine['PAGADO']="FALSE";
                
                    break;

            }

            $accounts=[];

            if($row[1]){$accounts[]="5200";}else{ $accounts[]="0"; }
            if($row[2]){$accounts[]="5300";}else{ $accounts[]="00"; }
            if($row[3]){$accounts[]="5500";}else{ $accounts[]="000"; }

            $filterLine['SOCIEDADES'] = $accounts;

            $this->filterArray[]=$filterLine;

        }

    }

    public function updateAccountFilters($module,$table){

        foreach ($this->filterArray as $row) {

            $dml='UPDATE '.$table.' SET '.' PAGADO ='.$row['PAGADO'].', SOCIEDADES = '.
            '["'.implode('","',$row['SOCIEDADES']).'"]'.' WHERE ID ='.'"'.$row['ID'];

            echo($dml);


        }
        
    }

}

?>