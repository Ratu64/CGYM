<?php
require_once('config.php');
session_start();
	
	//phpinfo();
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
   
</head>
<body align="center">
    <form name="notice" method="post" action="adminhomepage.php">
        <label>Enter new notice:</label><br>
        <textarea rows="20" cols="50" name="not"></textarea>
        <button type="submit" name="subnot">Submit</button>
    </form>
</body>
</html>