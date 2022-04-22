<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booking Parking Lot</title>
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="icon" href="css/pic/favicon.ico">
  </head>
  <body>
<div class="header">
  <img class="logo" src="css/pic/lo.png" alt="logo">
  <nav class="nav-bar">
    <ul>
      <li><a  href="afterlogin.php">Home</a></li>
     <li> <a  href="zone2.php">Parking Zone</a></li>
     <li><a  href="booking.php">Booking Parking Lot</a></li>
      <li><a  href=".html">Unbook Parking</a></li>
    </ul>
  </nav>
    <a class="cta" href="contact.php"><button>Contact</button></a>
</div>
<div class="login-page">
<h1 class="head2">Specify Date and Time To Book</h1>
  <div class="form">
    <form class="login-form" action="processbook3.php" method="POST">
      <label>DATE</label>
      <input type="date" name="date" placeholder="Select Date" >
     <label>TIME</label>
    <input type="Time" name="time" placeholder="Select Time" >
    <input type="submit" id="sub" name="submit" value="Book"></a>
      <p class="message">Click On Book To Confirm Your Booking</p>
    </form>
</div></div>

<div class="footer">
  <a class="footer-link" href="https://www.facebook.com/">Facebook</a>
   <a class="footer-link" href="https://twitter.com/">Twitter</a>
   <a class="footer-link" href="https://www.Instagram.com/">Instragram</a>
   <p class="credit">© 2022 TEAM70.</p>
</div>
  </body>
</html>
