<?php
	/*For My LocalPC*/
	//$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
	//mysqli_select_db ($con,'gym');
	//Remote MySQL
	$host = 'remotemysql.com:3306';
	$db = 'CGDycIpdYW';
	$user = 'CGDycIpdYW';
	$pass = 'Gwad14SjgG';
	$charset = 'utf8mb4';
	/*$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	try{
	    $con = new PDO($dsn, $user,$pass);
	    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    throw new PDOException($e->getMessage());
	} 
	*/
	echo '<script type="text/javascript">console.log("Start")</script>';
	$con = mysqli_connect($host, $user, $pass);
	echo '<script type="text/javascript">console.log("Running Config file")</script>';
         if(! $con ) {
            die('Could not connect: ' . mysqli_error());
         }
	if($con){
		echo '<script type="text/javascript">console.log("Success")</script>';
	}
	mysqli_select_db ($con,$db);
?>
