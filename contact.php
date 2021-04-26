<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel='stylesheet' type='text/css' href='contactstyle.css'> 
</head>
<body>
     <nav>
       <ul><li><a href ="index.php"><button>Back to Home</button></a></li></ul>
    </nav>
     
     <div class="details">
        <div>
            <p id="p1">Contact Us</p>
            <p> fill the form below to let us help you<p>

                <br>

          <form name='contact' method="post" action="contact.php" id='contact'>
            <ul>
            <li><label>Name:</label></li>
              <li>  <input class="con-in" type='text' placeholder=' Enter username' name='Username' required><br></li>
            <li><label>Email:</label></li>
             <li>   <input class="con-in" type='text' placeholder=' Enter email id' name='Email' required><br></li>
            <li><label>Your message:</label></li>
             <li>   <textarea  form='contact' placeholder='Enter your Query/Feedback' name='Query' rows=5 cols=40 required></textarea></li>
                <br>
            <button type='submit' name='submitd'>Submit</button><br>
            </ul>
        </form>
    </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST['submitd']))
{
        $query=$_POST['Query'];
        $name=$_POST['Username'];
        $email=$_POST['Email'];
        $msg = wordwrap($query,70);
        if(mail("rcbangera.1999@gmail.com","Query","You received a query from User:".$name." Email:".$email." Message:".$msg)){
            echo '<script lang="JavaScript">
             alert("Mail Sent");
            </script>';
        }  
        else{
            echo '<script lang="JavaScript">
             alert("Failed");
            </script>';
        }
    }
?>