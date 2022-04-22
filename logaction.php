<?php
  $conn = mysqli_connect("localhost", "root", "", "wcpms");
  if(!$conn){
	  echo ("Error Connection:".mysqli_connect_error());
  }
  if(isset($_POST['submit'])){
	  $Email = $_POST['email'];
	  $Password = $_POST['password'];

   $sql = "select * from user where email='$Email' and password = '$Password'";
   $result = mysqli_query($conn,$sql);
   $num = mysqli_num_rows($result);

   if($num ==1){

	   header ("location:afterlogin.php");
   }
   else{



//myFunction();

 
   }

  }

?>
<?php
session_start();
session_destroy();
?>
<script>
    alert ("Wrong Password");
    window.location.href = "login.php";
</script>
	  
