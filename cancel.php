 <?php 
 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
	$connection = mysqli_connect("localhost", "root", "", "wcpms");
	$phone=$_SESSION['plate'];
	$query = mysqli_query($connection, "select * from user where pl_booked='YES' AND car='$car'", $connection);
	$rows = mysqli_num_rows($query);
	//echo $rows;
	$row=mysqli_fetch_array($query);
	//if ($rows == 1) {
	
	$sql = "UPDATE user SET pl_booked = 'NO' WHERE car='$car'";
	mysqli_query($connection, $sql);
	$sql = "UPDATE zone SET status = 'UNBOOKED' WHERE plate = '$plate'";
	mysqli_query($connection, $sql);
	 header("Location:cancelbooking.php");
	//}
		
}