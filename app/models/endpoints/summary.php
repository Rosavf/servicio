<?php

final class Summary extends MySqlSummaryRead{

    public function __construct($table,$month){

        $this->attachMySql(new PdoCrud());
        $this->readModules($table,$month);
        $this->detachMySql();

    }

}

?>