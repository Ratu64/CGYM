<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel='stylesheet' type='text/css' href='css/contactstyle.css'>
</head>
<body>
    <div>
         <nav>
                <ul class="nav-ul">
                    <li class="nav-li"><a href='index.php'>HOME</a></li>
                    <li class="nav-li"><a href='register.php'>SIGN UP</a></li>
                    <li class="nav-li"><a href='index11.php'>LOGIN</a></li>
                    <li class="nav-li"><a href='contact.php'>HELP</a></li>
                </ul>

         </nav>
     </div>
     <div class="details">
        <div>
            <p id="p1">Contact Us</p>
            <br>
            <p id="p2"> Fill the form below to let us help you...<p>

                <br>

          <form name='contact' method="post" action="contact.php" id='contact'>
            <ul>
            <li><label>Name:</label></li>
              <li>  <input class="con-in" type='text' placeholder=' Enter Name' name='Username' required><br></li>
            <li><label>Email:</label></li>
             <li>   <input class="con-in" type='email' placeholder=' Enter Email Id' name='Email' required><br></li>
            <li><label>Your message:</label></li>
             <li>   <textarea  form='contact' placeholder='Enter Your Query/Feedback' name='Query' rows=5 cols=40 required></textarea></li>
                <br><br>
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
        if(mail("abcd@gmail.com","Query","You received a query from User:".$name." Email:".$email." Message:".$msg)){
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