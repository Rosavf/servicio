<?php

//dependencias minimas
ini_set('memory_limit', '2048M');

//archivos de configuracion
require_once('../app/config/config.php');

//interfaces
require_once('../app/lib/interfaces/libinterfaces.php');
require_once('../app/models/interfaces/modelinterfaces.php');

//interfaces
require_once('../app/lib/bigquery.php');
require_once('../app/lib/bigqueryparser.php');
require_once('../app/lib/pdocrud.php');


//controlador maestro
require_once('../app/controllers/classes/controller.php');

//clases de modelos
require_once('../app/models/classes/bigqueryconnection.php');
require_once('../app/models/classes/bigqueryaccountimport.php');
require_once('../app/models/classes/bigquerydataimport.php');
require_once('../app/models/classes/bigquerybreakdownimport.php');
require_once('../app/models/classes/mysqldatawrite.php');
require_once('../app/models/classes/mysqldataread.php');
require_once('../app/models/classes/mysqlbreakdownread.php');
require_once('../app/models/classes/mysqlclean.php');


//enrutador
require_once('router.php');

//iniciamos el enrutador
$router = new Router();

?>