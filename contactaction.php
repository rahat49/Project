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
echo "successfully";

$sql="INSERT INTO message(Name,Phone,Message)VALUES('$_POST[name]','$_POST[phone]','$_POST[message]')";


if (mysqli_query($conn, $sql)) {
  echo "Message Sent Successfully";

}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
