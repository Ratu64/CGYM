<?php
	/*For My LocalPC*/
	//$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
	//mysqli_select_db ($con,'gym');
	//Remote MySQL

	$host = 'remotemysql.com';
	$db = 'CGDycIpdYW';
	$user = 'CGDycIpdYW';
	$pass = 'Gwad14SjgG';
	$charset = 'utf8mb4';

	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

	try{
	    $pdo = new PDO($dsn, $user,$pass);
	    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	} catch(PDOException $e) {
	    throw new PDOException($e->getMessage());
	} 
	console.log('Success');
?>



