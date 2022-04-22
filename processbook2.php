<?php

$branch=$_POST['branch'];
$pl=$_POST['pl'];
$plate=$_POST['plate'];
$card=$_POST['card'];

session_start();
// Set session variables
$_SESSION["branch"] = $branch;
$_SESSION["pl"] = $pl;
$_SESSION["plate"] = $plate;
$_SESSION["card"] = $card;
//echo "Session variables are set.";
header("location:dateandtime.php");

?>