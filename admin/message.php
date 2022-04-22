<?php
include("messagelist.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="adminstyle1.css">
    <link rel="stylesheet" href="adminstyle2.css">
    <link rel="icon" href="favicon.ico">
  </head>
<body>
<div class="header">
  <img class="logo" src="lo.png" alt="logo">
  <nav class="nav-bar">
    <ul>
      <li><a  href="home.php">User</a></li>
     <li> <a  href="book.php">Booking</a></li>
     <li><a  href="message.php">Message</a></li>
      <li><a  href="index.php">Logout</a></li>
    </ul>
  </nav>
    
</div>
<div class="middle">
  <p class="phead">Booking List</p>
<div style="width:600px;background:white;padding:10px;margin:auto;">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table>
       <thead><tr><th>S.N</th> 
         <th>Name</th>
         <th>Phone</th>
         <th>Message</th>
       
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['phone']??''; ?></td>
      <td><?php echo $data['message']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>
