<?php

$date=$_POST['date'];
$time=$_POST['time'];

session_start();
// Set session variables
$_SESSION["date"] = $date;
$_SESSION["time"] = $time;
//echo "Session variables are set.";
header("location:process-book.php");

?>