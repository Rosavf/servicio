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

                        foreach ($cell as $key1=>$cell1) {

                            if(is_array($cell1)){

                                $line2=[];
                                $keys1=array_keys($cell1);
                                $tipe1;

                                if((count($keys1)==0)||($keys1[0]==0)){

                                    $type1="num";
            
                                }
            
                                else{
            
                                    $type1="assoc";
            
                                }

                                switch ($type1) {

                                    case 'num':

                                    foreach ($cell1 as $cell2) {

                                        if(is_array($cell2)){



                                        }

                                        else{

                                            $line2[]=$cell2;

                                        }

                                    }


                                    break;

                                    case 'assoc':

                                    foreach ($cell1 as $key2 => $cell2) {

                                        

                                    }

                                    break;
                                    
                                    default:

                                    break;
                                }

                                $line1[$key1]=$cell1;

                            }

                            else{

                                $line1[$key1]=$cell1;

                            }

                        }
                        
                        break;

                        case 'num': 
                        
                        foreach ($cell as $cell1) {

                            if(is_array($cell1)){

                                $line2=[];
                                $keys1=array_keys($cell1);
                                $tipe1;

                                if((count($keys1)==0)||($keys1[0]==0)){

                                    $type1="num";
            
                                }
            
                                else{
            
                                    $type1="assoc";
            
                                }

                                switch ($type1) {

                                    case 'num':

                                    foreach ($cell1 as $cell2) {

                                        if(is_array($cell2)){



                                        }

                                        else{

                                            $line2[]=$cell2;

                                        }

                                    }


                                    break;

                                    case 'assoc':

                                        foreach ($cell1 as $key2 => $cell2) {

                                            

                                        }

                                    break;
                                    
                                    default:

                                    break;
                                }

                                $line1[]=$cell1;

                            }

                            else{

                                $line1[]=$cell1;

                            }

                        }
                                                
                        break;
                        
                        default: break;
                    }

                    $line[$key]=$line1;

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