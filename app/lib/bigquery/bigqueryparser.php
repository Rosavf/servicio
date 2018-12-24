<?php

//
class BigQueryParser extends BigQuery{

    public function select($dml){

        $rows=$this->getQuery($dml);

        $table=[];
        foreach ($rows as $row) {

            $line=[];
            foreach ($row as $key => $cell) {

                if(is_array($cell)){



                }

                else{

                    $line[$key]=$cell;

                }

            }

            $table[]=$line;

        }

        $rows=null;

        return $table;
        
    }

}

?>