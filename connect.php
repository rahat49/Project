<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wcpms";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: ");
}


$sql="INSERT INTO user(Name,Email,Phone,Car,Password)VALUES('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[car]','$_POST[password]')";


if (mysqli_query($conn, $sql)) {
 

}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);
?>
<?php
session_start();
session_destroy();
?>
<script>
    alert ("SignUp Successfully");
    window.location.href = "login.php";
</script>
