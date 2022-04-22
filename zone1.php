<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Web Based Online Car Parking Management System</title>
    <link rel="stylesheet" href="css/styles3.css">
    <link rel="icon" href="css/pic/favicon.ico">
    <link rel="stylesheet" href="css/styles0.css" type="text/css" />
    <link rel="stylesheet" href="css/pager.css" type="text/css" />
<?php
			
			include('mainconnect.php');
	?>
  </head>
  <body>
<div class="header">
  <img class="logo" src="css/pic/lo.png" alt="logo">
  <nav class="nav-bar">
    <ul>
      <li><a  href="index.php">Home</a></li>
     <li> <a  href="zone1.php">Parking Zone</a></li>
     <li><a  href="signup.php">SignUp</a></li>
      <li><a  href="login.php">LogIn</a></li>
    </ul>
  </nav>
    <a class="cta" href="contact.php"><button>Contact</button></a>
</div>
<div class="middle">
  <h1 class="head2">Parking Lots Status</h1>
  	<div class="strt">
  	<p>Uttara Branch</p>
  	<table class="gridtable">
 <?php $branch ="uttara"; ?>
<tr>
	<td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 001' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 001</td>
	<td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 010' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 010</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 002' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 002</td><td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 011' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 011</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 003' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 003</td><td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 012' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 012</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 004' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 004</td><td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 013' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 013</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 005' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 005</td><td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 014' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 014</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 006' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 006</td><td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 015' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 015</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 007' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 007</td
	<?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 016' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>PL 016</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 008' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 008</td><td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 017' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 017</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 009' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 009</td><td
	<?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 018' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 018</td>
</tr>
</table>
	
	</div>
	
	
	<div class="strt">
	<p>Dhanmondi Branch</p>
	<table class="gridtable">
<?php $branch ="dhanmondi"; ?>
<tr>
	<td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 001' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 001</td>
	<td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 010' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 010</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 002' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 002</td><td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 011' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 011</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 003' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 003</td><td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 012' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 012</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 004' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 004</td><td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 013' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 013</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 005' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 005</td><td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 014' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 014</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 006' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 006</td><td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 015' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 015</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 007' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 007</td
	<?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 016' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>PL 016</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 008' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 008</td><td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 017' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 017</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 009' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 009</td><td
	<?php 
	$sql="SELECT * FROM zone WHERE branch='$branch' and pl='PL 018' and status='RESERVED'";
	$result=mysqli_query($connect, $sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 018</td>
</tr>
</table>

  	</div>
  	<p class="status">Red -> Reserved, Yellow -> Available </p>

</div>

<div class="footer">
  <a class="footer-link" href="https://www.facebook.com/">Facebook</a>
   <a class="footer-link" href="https://twitter.com/">Twitter</a>
   <a class="footer-link" href="https://www.Instagram.com/">Instragram</a>
   <p class="credit">© 2022 TEAM70.</p>
</div>
  </body>
</html>
