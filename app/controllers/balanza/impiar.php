<?php

class limpiar extends Controller{

    public function limpiador(){

        $this->model('endpoints','cleaner');
        $cleaner = new Cleaner();

    }

}


?>