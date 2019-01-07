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

            if($row[1]){$accounts[]="5200";}else{  }
            if($row[2]){$accounts[]="5300";}else{  }
            if($row[3]){$accounts[]="5500";}else{  }

            $filterLine['SOCIEDADES'] = $accounts;

            $this->filterArray[]=$filterLine;

        }

    }

    public function updateAccountFilters($table){

        print_r($this->filterArray);
        
    }

}

?>