<?php

class Summary extends MySqlSummaryRead{

    $this->attachMySql(new PdoCrud());
    $this->readModules();
    $this->detachSql();

}

?>