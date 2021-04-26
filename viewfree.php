<!DOCTYPE html>
<html >
<head>
	<?php
    session_start();
    require_once('config.php');

    ?>
    </head>
    <link rel="stylesheet" type="text/css" href="userstyling.css">u
<body >
<h2>Free Members Report:</h2>
<div id="view" class="view-attendance">

	<?php
		$view="select * from free";
	    $result=mysqli_query($con,$view);
	    if (mysqli_num_rows($result) > 0) 
	                {
	                echo "<table><tr><th>NAME</th><th>AGE</th><th>GENDER</th><th>PAN</th></tr>";
	                while($row = mysqli_fetch_assoc($result)) 
	                {
	                    echo "<tr><td>".$row['name']."</td><td>".$row['age']."</td><td>".$row['gender']."</td><td>".$row['pan']."</td></tr>";
	                }
	                    echo"</table>";
	                }
	?>
	
</div>
</body>
</html>