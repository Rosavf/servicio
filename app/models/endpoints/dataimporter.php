<?php

final class DataImporter extends MySqlDataWrite{

    public function __construct($params){

        $paramArray=explode("-",$params);

        $year=$paramArray[0];
        $month=$paramArray[1];
        $module=$paramArray[2];

        $this->attachBigQuery(new BigQueryParser());
        $this->importAccounts(ACCOUNTS_TABLE);
        $this->importData("2018","3","BANCO","=",BSEG_TABLE,CECOS_TABLE);
        $this->detachBiqQuery();
        $this->attachMySql(new PdoCrud());
        $this->writeMySql("Mensual");
        $this->detachMySql();
        
    }
    
}

?>