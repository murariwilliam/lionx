<?php

/*----------------------------------------
 * Centro dati per l'applicazione che permette il corretto funzionamento.
 * <?php echo $progetto_nome ?>
 * <?php echo $creator ?>
 *---------------------------------------*/

//Definisco nome del sito globale (Non serve a niente ma fa figo ( :P ). usare: 
$progetto_nome = "Mostre Online";
$creator = '<br><a href="http://murariwilliam.com">Murariwilliam.com</a><br>Version 0.1 Alpha';
$vers = "0.1";

//Mi Collego al DB Principale con questi dati

define("DB_HOST", "localhost");
define("DB_NAME", "musei");
define("DB_USER", "root");
define("DB_PSW", "");


































/*----------------------------------------
 * connessione al database

define("IS_DEVELOPER_SERVER",true);
//C:/programmi/xampp/htrdocs/motorizzazione/
$app_root = $_SERVER["DOCUMENT_ROOT"].dirname($_SERVER["PHP_SELF"])."/";
//http://www.miosito.it/  | localohost:8080/Motorizzazione
$app_url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/';
//echo substr(__FILE__, 0, -strlen($_SERVER['SCRIPT_NAME']));;
define("APP_URL",$app_url);
define("APP_ROOT",$app_root);

//define("TEMPLATE_URL",APP_URL."template/");

if(IS_DEVELOPER_SERVER){
    define("DB_HOST", "localhost");
    define("DB_NAME", "mostre");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    
    ini_set("display_error", "On");
    error_reporting(E_ALL);
}else{
    
    define("DB_HOST", "localhost");
    define("DB_NAME", "");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    
    ini_set("display_error", "Off");
    error_reporting(0);
}

define("SESSION_TIME",60);

//error_reporting(0);
include_once './utility.php';

 *---------------------------------------*/
?> 

