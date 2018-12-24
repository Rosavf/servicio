<?php

//dependencias minimas
ini_set('memory_limit', '1536M');
require_once('../app/config/config.php');
require_once('../app/config/loader.php');
require_once('router.php');

//
$loader= new Loader();
$router = new Router();

?>