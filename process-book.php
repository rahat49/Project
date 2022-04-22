<?php
	require('mainconnect.php');
	session_start();
	 $model = $_SESSION["model"];
	  $vehicle = $_SESSION["vehicle"];
	  $status="RESERVED";
	  $plate = $_SESSION["plate"];
	  $pl = $_SESSION["pl"];
	  $card = $_SESSION["card"];
	  $branch = $_SESSION["branch"];
	    $date = $_SESSION["date"];
		 $time = $_SESSION["time"];
		    $charge = "399";
			/*CHECK IF RESERVED */
			
$sql="SELECT * FROM zone WHERE branch='$branch' and pl='$pl' and Status='RESERVED'";
$result=mysqli_query($connect, $sql);


// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If

if($count==1){
header('location:errorbooking.php');
}
else
{

        $query = "INSERT INTO `zone` (model,vehicle,status,branch,pl,plate,card,charge,date,time) VALUES ('$model', '$vehicle','$status','$branch','$pl','$plate','$card','$charge','$date','$time')";
        $result = mysqli_query($connect, $query);

		$var = $_SESSION["date"];
$date = str_replace('/', '.', $var);
echo date('Y.m.d', strtotime($date));
		
		if($result){
           //REDIRECT
		   header('location:confirm.php');
		   
exit;
        }
}
    ?>