<?php  
error_reporting(E_ALL ^ E_NOTICE);
if ($_SERVER['HTTP_HOST'] == "localhost") {
    define('LOCAL_MODE', true);
} else {
 	define('LOCAL_MODE', false);
}
#Root Path
$tmp = dirname(__FILE__);
$tmp = str_replace('\\' ,'/',$tmp);
$tmp = substr($tmp, 0, strrpos($tmp, '/'));
$host = "http://".$_SERVER['HTTP_HOST'];
//$host = "http://".$_SERVER['HTTP_HOST'].'/defactosalons/';
define('SITE_ROOT', $host); 
require_once("database.php");
require_once("functions.php");
session_start();
//define('SCRIPT_START_TIME', getmicrotime());
#magic_quotes_runtime needs to be "off"
if(get_magic_quotes_runtime()) {
	set_magic_quotes_runtime(0);
}
?>