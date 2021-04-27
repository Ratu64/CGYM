<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="96.css">
    <script>
       /* var name=document.getElementsByName('User')[0].value();
        var email=document.getElementsByName('Email')[0].value();
        function emvalid(email)
      {
         var reg=/^[a-zA-Z0-9_]+@[a-zA-Z]+.[a-zA-Z]+$/;
         if(email.test(reg))
         {
            return true;
         }
         else
         {
            alert('Invalid Email');
            email.focus();
            return false;
        }
      }
      function nvalid(name)
      {
          var reg=/^[a-zA-Z0-9]+$/;
         if(name.value.length==0||name.value.length<3||name.value.length>15)//||!name.test(reg))
         {
            alert("Invalid Name");
            name.focus();
            return false;
        }
            return true;
      }    
      */
    </script>
</head>
<body>
   <nav>
       <ul><li><a href ="index.php">Home</a></li></ul>
    </nav><hr>
   <h1>Create Account</h1>
   <div class="container-reg" >
    <form name='sign' method="post" action="register.php" align="center">
       <ul class="reg-ul">
       <li> <label>Username:</label></li>
        <li>   <input type='text' placeholder='Enter username' name='User' required></li>
    <li>   <label>Age:</label></li>
         <li>   <input type='number' placeholder='Enter age' name='Age' required></li>
     <li>   <label>EmailId:</label></li>
         <li>   <input type='text' placeholder='Enter email id' name='Email' required></li>
      <li>          <label>Current Weight:</label></li>
         <li>   <input type='text' placeholder='Enter current weight' name='cw' required></li>
      <li>          <label>Desired Weight:</label></li>
        <li>    <input type='text' placeholder='Enter desired weight' name='dw' required></li>
      <li>  <label>Current Goal:</label></li>
        <li>    <select name='Goal' >
                <option value='Wtloss' selected>Weight Loss</option>
                <option value='MG'>Muscle Gain</option>
                <option value='BF'>Burn Fat</option>
            </select></li>
      <li>  <label>Password:</label></li>
        <li>    <input type='password' placeholder='Enter password' name='Pass' required></li>
      <li>  <label>Confirm Password:</label></li>
        <li>   <input type='password' placeholder='Enter password again' name='ConPass' required></li>
           </ul>
            
        <hr>
        <button type='submit' name='signup-submit'>Sign up</button><br>
        <div>Go back to <a href='index11.php'>Log In</a></div>
    </form>
    </div>
     <br><hr>
    <footer>
        <marquee direction="right" scrollamount="12" >Contact Ivan:8948239833</marquee>
    </footer>

		<?php
			if(isset($_POST['signup-submit']))
			{
				@$username=$_POST['User'];
				@$password=$_POST['Pass'];
				@$cpassword=$_POST['ConPass'];
                @$age=$_POST['Age'];
				@$email=$_POST['Email'];
				@$goal=$_POST['Goal'];
                @$cw=$_POST['cw'];
				@$dw=$_POST['dw'];
				
                
				if($password==$cpassword)
				{
					$query = "select * from users where user='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						console.log('Success');
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into users (user,password,email,goal,rolep_id,Plan,curwt,deswt) values ('$username','$password','$email','$goal',2,12,'$cw','$dw')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
                                
                                
                                				$_SESSION['id'] = $row['iduser'];
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								$_SESSION['age'] = $age;
                                				$_SESSION['email'] = $email;
								$_SESSION['goal'] = $goal;
                                				$_SESSION['cw'] = $cw;
								$_SESSION['dw'] = $dw;
                                
                                				usleep(200000);
								header( "Location: plan.php");
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
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>
</body>
</html>
