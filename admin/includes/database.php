<?php

// Local Server Details

if($_SERVER['HTTP_HOST'] =='localhost')

{
	$host = "localhost";					// database host name
	$user = "shivam";							// database username
	$pass = "";								// database password
	$dbname ="assignment";						// database name
}

// Testing Server (Temp) Details
else
{
	//$host = "localhost";					// database host name
	//$user = "videogar_videoga";							// database username
	//$pass = "videogar#%^@";								// database password
	//$dbname = "videogar_db04";						// database name

}

// Live Server Details

mysql_connect($host,$user,$pass) or die("Error: Could not connect to database server");
mysql_select_db($dbname) or die("Error: Could not connect to database");

?>
