<?php

//clase controladora de carga y ejecucion de modelos

class Controller implements Controlling{

    // mandamos a llamar un modelo
    public function model($folder,$model){

        // creamos ruta a partir de parametros
        $route='../app/models/'.$folder.'/'.$model.'.php';

        // de existir archivo con clase; lo abrimos y mandamos llamar
        if(file_exists($route)){

            require_once($route);

        }

        //
        else{

            echo("error 404");

        }

    }

}

?>