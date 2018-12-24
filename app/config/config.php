<?php


// declaracion de principales CONSTANTES del aplicativo  (aqui van IDs, nombres y llaves maestras)
$json = file_get_contents('../app/config/config.json');
$config = json_decode($json);

//APP
define('APP_DIR',dirname(dirname(__FILE__)));

//URL
define('APP_URL',$config->app->urlroute);
define('SITE_NAME',$config->app->sitename);

//GOOGLE_CLOUD
define('PROJECT_ID',$config->googleCloud->projectId);
define('BSEG_TABLE',$config->googleCloud->bigQuery->bsegTable);
define('CECOS_TABLE',$config->googleCloud->bigQuery->bsegTable);
define('ACCOUNTS_TABLE',$config->googleCloud->bigQuery->bsegTable);

?>