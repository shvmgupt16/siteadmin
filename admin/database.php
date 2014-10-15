<?php

// Local Server Details

if($_SERVER['HTTP_HOST'] == 'localhost')

{
	$host = "localhost";					// database host name
	$user = "shivam";							// database username
	$pass = "";								// database passwordo
	$dbname = "akspro";						// database name
}

// Testing Server (Temp) Details
else
{
	
//$host = "mysql.clients.aksinteractive.com"; //database location
//$user = "transeddb"; //database username
//$pass = "TRAN121sed"; //database password
//$dbname = "transeddb"; //database name
				// database name

}

// Live Server Details

mysql_connect($host,$user,$pass) or die("Error: Could not connect to database server");
mysql_select_db($dbname) or die("Error: Could not connect to database");

?>
