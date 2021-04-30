<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel ="stylesheet" type="text/css" href="css/adminpage.css">
</head>
<body>
		 <nav>
       <ul><li><a href="adminlog.php">LOG OUT</a></li></ul>
    </nav><hr>
	 <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
	<div><form name="adminp" method="post">
		<ul>
			<li><button name="init" >Initialize Todays Attendance</button></li>
			<li><a href="initatt.php">Update Notice Board</a></li>
		</ul>
		</form>
	</div>
</body>
</html>
<?php
if(isset($_POST["init"]))
{
    date_default_timezone_set('Asia/Kolkata');
    $d = date("Y-m-d");
    $query = "select * from recp_attendance where date=$d;";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        if(mysqli_num_rows($query_run)>0)
        {
            echo '<script type="text/javascript">alert("Attendance already initialized today")</script>';
        }
        else{
                $ql= "INSERT into recp_attendance(email,date) select email,".$d." from users";
		          $result = mysqli_query($con, $ql) ; 
            echo '<script type="text/javascript">alert("Attendance initialized!!")</script>';
        }
    }
}

if(isset($_POST["subnot"]))
{
   $ql= "update notice set TEXT='".$_POST["not"]."' where ID=1";
		 $result = mysqli_query($con, $ql) ; 
    echo '<script type="text/javascript">alert("Notice Uploaded!!")</script>';
}
?>
