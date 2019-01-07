<?php

final class DataImporter extends MySqlDataWrite{

    public function __construct($year,$month,$module,$operator,$sqlTable){

        $this->attachBigQuery(new BigQueryParser());
        $this->importAccounts('`informe-211921.MULTIVA.CUENTAS`');
        $this->importData($year,$month,$module,$operator,'`informe-211921.MULTIVA.BSEGAIO`','`informe-211921.MULTIVA.CECOS`');
        $this->detachBiqQuery();
        $this->attachMySql(new PdoCrud());
        $this->writeMySql($sqlTable);
        $this->detachMySql();
        
    }
    
}

?>