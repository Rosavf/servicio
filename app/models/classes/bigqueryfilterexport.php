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

            if($row[1]){$accounts[]="5200";}
            if($row[2]){$accounts[]="5300";}
            if($row[3]){$accounts[]="5500";}

            $this->filterArray[]=$filterLine;

        }

    }

    public function updateAccountFilters($table){




        
    }

}

?>