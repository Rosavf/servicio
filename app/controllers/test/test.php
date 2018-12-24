<?php

// prueba de aplicacion
// .chechar archivos .htaccess y configuracion de servidor apache
class test extends Controller{
    
    public function tester($params){
        
        echo($params);
    
    }

    public function getid(){

        echo(GOOGLE_CREDENTIALS);

    }

}

?>