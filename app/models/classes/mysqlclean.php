<?php

class MySqlClean extends MySqlConnection implements MySqlCleaning{

    protected $mySql;

    //
    public function cleanData($table){

        $this->mySql->truncate($table);

    }

}



?>