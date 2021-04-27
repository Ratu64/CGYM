<!DOCTYPE html>
<html >
<head>
	<?php
    session_start();
    require_once('config.php');
  
        
    ?>
	<!-- <script >
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<script >
		$(document).ready(function(){
  $("button").click(function(){
    $("p").css({"background-color": "yellow", "font-size": "200%"});
  });
});
	</script>
 -->	<link rel="stylesheet" type="text/css" href="userstyling.css">
	<script type="text/javascript">
		// function myFunction() {
          var length=  parseInt('<?php echo $_SESSION['c_wt']-$_SESSION['d_wt'];?>') ;
             
//			var length = parseInt("< $_session['']?>");
// document.getElementById("slider").style.width = length+"%";
// }
		
		// length=length/100;
		
	</script>
</head>
<body >
	<div class="top">

		<ul class="top-ul">
			<li class="top-li"><a href="userpage.php">Home</a></li>
			<li class="top-li"><a href="#view">Attendance</a></li>
			<li class="top-li">About</li>
			<li class="top-li"><a href="logout.php">Logout</a></li>

		</ul>
	</div>

	<div class="contain">
		<table class="hello" align="center">
			<tr><th>NOTICE</th></tr>
			<tr><td id="notice_in">
			    <?php
		              $view="select TEXT from notice";

                        $result=mysqli_query($con,$view);
                        if (mysqli_num_rows($result) > 0) 
                                    {
                                        $row = mysqli_fetch_assoc($result);
                                        echo $row['TEXT'];
                                    }
                    ?>
            </td>	</tr>
		</table>
		<br>
		
		
	</div>

<div class="goal">
	<?php echo "<h2>Welcome,".$_SESSION['username']." !!</h2>"?><br>
	<?php echo "<h4>Your current weight :".$_SESSION['c_wt']." </h4>"?><br>
	<?php echo "<h4>Your desired weight :".$_SESSION['d_wt']." </h4>"?><br>
	<h2>Goal Progress:</h2><br>
	<div class="progress">
		<div id="slider"></div>
			<script type="text/javascript">
                var length=  parseInt('<?php echo $_SESSION['c_wt']-$_SESSION['d_wt'];?>') ;
                	
				document.getElementById("slider").style.width = (100-length)+"%";
			</script>
	</div>

</div>	
<h2>Attendance Report:</h2>
<h3>(Recent 30 days)</h3>
<div id="view" class="view-attendance">

	<?php
		$view="select date,status from recp_attendance where email='".$_SESSION['email']."' ORDER BY date desc LIMIT 30";

	    $result=mysqli_query($con,$view);
	    if (mysqli_num_rows($result) > 0) 
	                {
	                echo "<table><tr><th>DATE</th><th>STATUS</th></tr>";
	                while($row = mysqli_fetch_assoc($result)) 
	                {
	                    echo"<tr><td>".$row['date']."</td><td>".$row['status']."  </td><tr>";
	                }
	                    echo"</table>";
	                }
	?>
	
</div>
</body>
</html>
