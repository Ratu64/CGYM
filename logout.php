<?php
session_start();
require_once('config.php');
$qr='select Uid from survey where Uid = '.$_SESSION['id'].' ';
 $query_run = mysqli_query($con,$qr);
 if (mysqli_num_rows( $query_run) > 0) 
 {
session_destroy();
usleep(400000);
header( "Location: index11.php");
 }
else{
    header( "Location: survey.php");
}
?>