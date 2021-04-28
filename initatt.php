<?php
require_once('config.php');
session_start();
	
	//phpinfo();
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/notice.css">
   
</head>
<body align="center">
    <div class="icon">
        <a href ="adminhomepage.php">
            <img src="img/home-icon.png">
        </a>
    </div>
    <form name="notice" method="post" action="adminhomepage.php">
        <label align="center">Enter new notice:</label><br><br>
        <textarea rows="20" cols="50" name="not"></textarea><br><br>
        <button type="submit" name="subnot">Submit</button>
    </form>
</body>
</html>