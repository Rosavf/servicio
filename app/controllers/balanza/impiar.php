<?php

class limpiar extends Controller{

    public function limpiar(){

        $this->model('endpoints','cleaner');
        $cleaner = new Cleaner();

    }

}


?>