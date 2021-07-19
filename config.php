<?php
$databaseHost = 'localhost';
$databaseName = 'bakery_system';
$databaseUsername = 'root';
$databasePassword = '';

$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if(!$con){
	echo "Database Connection Failed";
}


?>