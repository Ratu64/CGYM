<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>

	<script type="text/javascript">

            function preback(){
                window.history.forward();
            }
            setTimeout("preback()", 0);
            window.onunload=function(){window.history.back()};

        </script>

		<?php
$dbServername = 'remotemysql.com:3306';
$dbUsername = 'CGDycIpdYW';
$dbPassword ='Gwad14SjgG';
$dbName = 'CGDycIpdYW';


$con = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

session_start();

if (isset($_POST['recp_submit'])){
	$uni=$_POST['recp_email'];

	$date = date('Y-m-d');
	date_default_timezone_set('Asia/Kolkata');

		$ql="UPDATE recp_attendance set status ='Present' where date = '".$date."' and email='".$uni."'";

		 $result = mysqli_query($con, $ql) ;
		 print_r($uni);
		// THE BELOW COMMENTS PORTION IS USED TO AUTO INITIALIZE ATTENDACE DAILY ADD A BUTTON IN ADMIN SECTION TO INITIALIZE THIS
		 echo '<script type="text/javascript">alert("Attendance Granted.")</script>';
	   // $ql= "Insert into recp_attendance(email) select email from users";

  }
      ?>
<link rel="stylesheet" type="text/css" href="css/recpatt.css">
</head>
<body background="img/wel-wall.jpg">
    <div class="logout">
        <a href="index.php">Log Out</a>
    </div>
	<div align="center">
		<p>Welcome</p>
	</div>
	<!-- action="recp_attend.php" -->
	<div class="att" align="center">
	<form method="post" >
		<label>Enter Email:&nbsp</label>
		<input type="email" name="recp_email"><br>
		<button  name="recp_submit">Submit</button>
	</form>
	<div>
</body>
</html>
