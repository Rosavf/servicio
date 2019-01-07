<?php

class FilterExport extends BigQueryFilterExport{

    public function __construct(){

        if(isset($_POST['req'])){

            $request=$_POST['req'];

        }

    }

}


?>