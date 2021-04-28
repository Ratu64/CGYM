<?php
    session_start();
	require_once('config.php');
  $qr='select Uid from survey where Uid = '.$_SESSION['id'].' ';
  $query_run = mysqli_query($con,$qr);
  if (mysqli_num_rows( $query_run) > 0) 
  {
    echo '<script type="text/javascript">alert("You have already submitted your survey.")</script>';
    usleep(200000);
    header( "Location: userpage.php");
    exit();
  }
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
            <p id="p1">Survey Form</p><br>
            <p>Fill this feedback form<p>

                <br>

          <form name='survey' method="post" action="survey.php" id='contact'>
           <ul>
           <li> <ul>
            <li><label>1. What was your first impression when you entered the website?</label></li>
              <li> <input type="radio" name="appealing" value="Extremely appealing"> Extremely appealing</li>
              <li> <input type="radio" name="appealing" value="Very appealing"> Very appealing</li>
              <li> <input type="radio" name="appealing" value="Somewhat appealing"> Somewhat appealing</li>
              <li> <input type="radio" name="appealing" value="Not at all appealing"> Not at all appealing</li>
              </ul>  </li>
            <li>   <ul>
            <li><label>2. How did you first hear about us?</label></li>
              <li> <input type="radio" name="gender" value="Advertisment"> Advertisment</li>
              <li> <input type="radio" name="gender" value="Family"> Family</li>
              <li> <input type="radio" name="gender" value="Friends"> Friends</li>
              </ul>  </li>
             <li>  <ul>
            <li><label>3. Is there anything missing on this page?</label></li>
              <li> <input style="width:600px; height:80px;" name="miss" type="text" maxlength="100"></li>
              </ul>  </li>
             <li>  <ul>
            <li><label>4. How likely are you to recommend this to your friend of collegue?</label></li>
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
       
        if(query_run){
          echo '<script type="text/javascript">alert("Survey Submitted.Thank you for taking the time to complete this survey. We truly value the information that you have provided.")</script>';
          usleep(200000);
          header( "Location: userpage.php");
        }

        else{
          echo '<script type="text/javascript">alert("Survey Submission Failure")</script>';
          usleep(200000);
          header( "Location: userpage.php");
        }    
}
?>
    </div>
</body>
</html>