<?php

final class DataImporter extends MySqlDataWrite{

    public function __construct($year,$month,$module,$operator,$sqlTable){

        $this->attachBigQuery(new BigQueryParser());
        $this->importAccounts(ACCOUNTS_TABLE);
        $this->importData($year,$month,$module,$operator,BSEG_TABLE,CECOS_TABLE);
        $this->detachBiqQuery();
        $this->attachMySql(new PdoCrud());
        $this->writeMySql($sqlTable);
        $this->detachMySql();
        
    }
    
}

?>