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

                    $line1=[];
                    $type;
                    $keys=array_keys($cell);

                    if((count($keys)==0)||($keys[0]==0)){

                        $type="num";

                    }

                    else{

                        $type="assoc";

                    }


                    switch ($type) {

                        case 'assoc': 
                        
                        
                        break;

                        case 'num': 
                        
                        foreach ($cell as $cell1) {

                            if(is_array($cell)){



                            }

                            else{



                            }

                        }
                                                
                        break;
                        
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