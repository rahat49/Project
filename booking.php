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
      <li><a  href="unbook.php">Unbook Parking</a></li>
    </ul>
  </nav>
    <a class="cta" href="contact.php"><button>Contact</button></a>
</div>

  <div class="login-page">
<h1 class="head2">Describe Your Vehicle</h1>
    <div class="form">
      <form class="login-form" action="processbook1.php" method="POST">
        <label>MODEL</label>
        <input type="text" name="model" placeholder="eg. TOYOTA ALLION" >
       <label>VEHICLE TYPE</label>
        <select name="vehicle">
          <option value="volvo">CAR</option>
          <option value="saab">LORRY</option>
          <option value="saab">TRAILER</option>
        </select>
       <input type="submit" id="sub" name="submit" value="Proceed"></a>
        <p class="message">Click On Proceed To Continue Booking</p>
      </form>
  </div></div>

<div class="footer">
  <a class="footer-link" href="https://www.facebook.com/">Facebook</a>
   <a class="footer-link" href="https://twitter.com/">Twitter</a>
   <a class="footer-link" href="https://www.Instagram.com/">Instragram</a>
   <p class="credit">©2022 Rahat.</p>
</div>
  </body>
</html>
