<?php

final class DataImporter extends MySqlDataWrite{

    public function execute($params){

        $paramArray=explode("-",$params);

        $year=$paramArray[0];
        $month=$paramArray[1];
        $module=$paramArray[2];

        $this->importAccounts(ACCOUNTS_TABLE);
        
    }
    
}


?>