<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel='stylesheet' type='text/css' href='css/96.css'>
</head>
<body>
   <nav>
       <ul><li><a href ="index.php">Home</a></li></ul>
    </nav><hr>
   <h1>Admin Log In</h1>
    <form name='log' method="post" action="adminlog.php">
        <label>Admin Name:</label>
            <input type='text' placeholder='Enter name' name='Username' required/><br>
        <label>Password:</label>
            <input type='password' placeholder='Enter password' name='Password' required/><br>
            <hr>
        <button type='submit' name='login-submit'>Sign in</button><br>
    </form>
    <br><hr>
    <footer>
        <marquee direction="right" scrollamount="12" >Contact No:+91-5559879879</marquee>
    </footer>
    <?php
			if(isset($_POST['login-submit']))
			{
				@$username=$_POST['Username'];
				@$password=$_POST['Password'];
               
				$query = "select * from admin where name='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					   $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					   $_SESSION['username'] = $username;
					   $_SESSION['password'] = $password;
                        		   if($username == "Ivaan")
					   {
						   usleep(200000);
						    header( "Location: recp_attendance.php");
					   }
					   else
					   {
						usleep(200000);
						header( "Location: adminhomepage.php");
					   }
					}
					else
					{
						echo '<script type="text/javascript">alert("Username/Password Incorrect.")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
            }
		?>
</body>
</html>
 	
