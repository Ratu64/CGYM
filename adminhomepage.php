<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel ="stylesheet" type="text/css" href="96.css">
</head>
<body>
		 <nav>
       <ul><li><a href="adminlog.php">LOG OUT</a></li></ul>
    </nav><hr>
	 <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
	<div><form name="adminp" method="post">
		<ul>
			<li><button name="init" >INITIALIZE TODAY'S ATTENDANCE</button></li>
			<li><a href="initatt.php">UPDATE NOTICE BOARD</a></li>
			 <li><a href="viewfree.php">VIEW FREE TRIAL MEMBERS</a></li>
		</ul>
		</form>
	</div>
</body>
</html>
<?php
if(isset($_POST["init"]))
{
    $query = "select * from recp_attendance where date=curdate(); ";
    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        if(mysqli_num_rows($query_run)>0)
        {
            echo '<script type="text/javascript">alert("Attendance already initialized today")</script>';
        }
        else{
                $ql= "Insert into recp_attendance(email) select email from users";
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