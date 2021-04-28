<?php
    session_start();
	require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel='stylesheet' type='text/css' href='css/surveystyle.css'> 
</head>
<body >
    

     <div class="details">
        <div>
            <p id="p1">Survey Form</p>
            <p>Fill this feedback form<p>

                <br>

          <form name='survey' method="post" action="survey.php" id='contact'>
           <ul>
           <li> <ul>
            <li><label>What was your first impression when you entered the website?</label></li>
              <li> <input type="radio" name="appealing" value="Extremely appealing">Extremely appealing <br></li>
              <li> <input type="radio" name="appealing" value="Very appealing">Very appealing <br></li>
              <li> <input type="radio" name="appealing" value="Somewhat appealing">Somewhat appealing <br></li>
              <li> <input type="radio" name="appealing" value="Not at all appealing">Not at all appealing <br></li>
              </ul>  </li>
            <li>   <ul>
            <li><label>How did you first hear about us?</label></li>
              <li> <input type="radio" name="gender" value="Advertisment"> Advertisment <br></li>
              <li> <input type="radio" name="gender" value="Family"> Family <br></li>
              <li> <input type="radio" name="gender" value="Friends"> Friends <br></li>
              </ul>  </li>
             <li>  <ul>
            <li><label>Is there anything missing on this page?</label></li>
              <li> <input style="width:600px; height:80px;" name="miss" type="text" maxlength="100"> <br></li>
              </ul>  </li>
             <li>  <ul>
            <li><label>How likely are you to recommend this to your friend of collegue?</label></li>
              <li> 0<input  type="range" name="points" min="0" max="10">10<br></li>
             
              </ul>  </li>
             <button type='submit' name='submitd'>Submit</button><br>
              </ul>  
        </form>
    </div>
    <?php
    if(isset($_POST['submitd']))
{
        $appeal=$_POST['appealing'];
        $hear=$_POST['gender'];
        $miss=$_POST['miss'];
        $recomm=$_POST['points'];
        
        $ql="insert into survey(Uid,ques1,ques2,ques3,ques4) values (".$_SESSION['id'].",'".$appeal."','".$hear."','".$miss."','".$recomm."')";
        $query_run = mysqli_query($con,$ql);
       
 
session_destroy();
usleep(400000);
header( "Location: index11.php");
         }
?>
    </div>
</body>
</html>
