<!DOCTYPE html>
<html>
<head>
	<title></title>
		<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbName = "gym";

$con = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if (isset($_POST['recp_submit'])){
	$uni=$_POST['recp_email'];

	$date = date('Y-m-d');
		$ql="UPDATE recp_attendance set status ='present' where email='".$uni."'";
		 $result = mysqli_query($con, $ql) ;
		// THE BELOW COMMENTS PORTION IS USED TO AUTO INITIALIZE ATTENDACE DAILY ADD A BUTTON IN ADMIN SECTION TO INITIALIZE THIS

	   // $ql= "Insert into recp_attendance(email) select email from users"; 
  }
      ?>
<link rel="stylesheet" type="text/css" href="recpatt.css">
</head>
<body background="wel-wall.jpg">
	<div align="center">
		<p>Welcome</p>
	</div>
	<!-- action="recp_attend.php" -->
	<div class="att" align="center">
	<form method="post" >
		<label>Enter email:&nbsp</label>
		<input type="text" name="recp_email"><br>
		<button  name="recp_submit">Submit</button>
	</form>
	<div>
</body>
</html>