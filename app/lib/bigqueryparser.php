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

                    $type;
                    $keys=array_keys($cell);

                    if((count($keys)==0)||($keys[0]==0)){

                        $type="assoc";

                    }

                    else{

                        $type="num";

                    }


                    switch ($type) {

                        case 'assoc': 
                        
                            echo("a"); 
                        
                        break;

                        case 'num': echo("n"); break;
                        
                        default: break;
                    }


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