<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/96.css">
    <title>Free Trial</title>
</head>
<body>
    <nav>
       <ul>
           <li><a href ="index.php">Home</a></li>
       </ul>
    </nav><hr>
    <h1>Free Trial Registration</h1>
    <form name='freee' method="post" action="free.php">
      <div>
        <p>Please Fill this form</p>
        <hr>
        <label>Name:</label>
        <input type="text" placeholder="Enter Name" id="nname" name='nname'required><br>
        <label>Age:</label>
        <input type="number" placeholder="Enter Age" id="age" min="5" max="150" name='age' required><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="male" checked> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other<br>
        <label>Pan No:</label>
        <input type="text" placeholder="Enter Pan No." id="pan" name="pan" required><br>
        <hr>
       <!-- <p>By creating an account you agree to our <a href="https://www.memedroid.com/memes/tag/exam">Terms & Privacy</a>.</p> -->
        <button type="submit" name='free-submit'>Register</button>
      </div>
    </form>
    <br><hr>
    <footer>
        <marquee direction="right" scrollamount="12" >Contact Ivan:8948239833</marquee>
    </footer>
    <?php
        if(isset($_POST['free-submit']))
			{
				$username=$_POST['nname'];
                $age=$_POST['age'];
				$gender=$_POST['gender'];
				$pan=$_POST['pan'];
				
					$query = "select * from free where name='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This name Already exists.. Please try another name!")</script>';
						}
						else
						{
							$query = "insert into free (name,gender,age,pan) values ('$username','$gender','$age','$pan')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered for Free Trial.. Welcome")</script>';
                                 usleep(200000);
								header("Location:index.php");
							}
							else
							{
								echo '<p>Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
    ?>
</body>
</html>