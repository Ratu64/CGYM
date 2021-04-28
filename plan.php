<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel ="stylesheet" type="text/css" href="css/testingstyle.css">
</head>
<body>
      <h1 id="head">Select Plan</h1>
    	<div class="staff">
		<div class="column">
			<div class="card"> 
				
				<div class="card-info">
					<h1>3 Months</h1><br>
                   <p>Pay ₹2000</p>
                   <p>Get One Month Free</p>
                   <h2>₹2000</h2>
                   <form class='tab' name='3m' action='plan.php' method='post'>
                    <button type='submit' name='3m'>Enroll</button><br>
               </form>
				</div>
			</div>	
		</div>

		<div class="column">
			<div class="card"> 
			
				<div class="card-info">
					<h1>6 Months</h1><br>
                   <p >Pay ₹4000</p>
                   <p>Get Two Months Free</p>
                   <h2>₹4000</h2>
                   <form class='tab' name='6m' action='plan.php' method='post'>
                   <button type='submit' name='6m'>Enroll</button><br>
                  </form>
				</div>
			</div>	
		</div>

		<div class="column">
			<div class="card"> 
				
				<div class="card-info">
					<h1>Year</h1><br>
                   <p>Pay ₹6000</p>
                   <p>Get Three Months Free</p>
                   <h2>₹6000</h2>
                   <form class='tab' name='year' action='plan.php' method='post'>
                   <button type='submit' name='year'>Enroll</button><br>
                  </form>
				</div>
			</div>	
		</div>

	</div>

        <?php
            if(isset($_POST['3m']))
            {
				$query = "update users set plan='3m' where user='$_SESSION[username]' and password='$_SESSION[password]' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
                        $_SESSION['plan'] = '3m';
                     usleep(200000);
                        header( "Location: index11.php");
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
            }
        if(isset($_POST['6m']))
        {
				$query = "update users set plan='6m' where user='$_SESSION[username]' and password='$_SESSION[password]' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
                        $_SESSION['plan'] = '6m';
                     usleep(200000);
                        header( "Location: index11.php");
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
            }
        if(isset($_POST['year']))
            {
				$query = "update users set plan='year' where user='$_SESSION[username]' and password='$_SESSION[password]' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
                        $_SESSION['plan'] = 'year';
                     usleep(200000);
                        header( "Location: index11.php");
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
            }
    ?>
</body>
</html>