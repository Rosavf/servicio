<?php
// declaracion de principales CONSTANTES del aplicativo  (aqui van IDs, nombres y llaves maestras)

$jsonConfig = file_get_contents('../app/config/config.json');
$config = json_decode($jsonConfig);

//APP
define('APP_DIR',dirname(dirname(__FILE__)));

//URL
define('APP_URL',$config->app->urlroute);
define('SITE_NAME',$config->app->sitename);

//GOOGLE CLOUD
define('GOOGLE_CREDENTIALS',$config->googleCloud->projectId);

//MYSQL
define('SQL_HOST',$config->sql->host);
define('SQL_USER',$config->sql->user);
define('SQL_PASSWORD',$config->sql->password);
define('SQL_DATABASE',$config->sql->dataBase);


?>