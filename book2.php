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
<h1 class="head2">Booking Information</h1>
    <div class="form">
      <form class="login-form" action="processbook2.php" method="POST">
        <label>PARKING DETAILS</label>
        <select name="branch">
          <option value="uttara">UTTARA BRANCH</option>
          <option value="dhanmondi">DHANMONDI BRANCH</option>
        </select>
        <label>SELECT PARKING LOT</label>
        <select name="pl">
          <option value="PL 001">PL 001</option>
          <option value="PL 002">PL 002</option>
          <option value="PL 003">PL 003</option>
          <option value="PL 004">PL 004</option>
          <option value="PL 005">PL 005</option>
          <option value="PL 006">PL 006</option>
          <option value="PL 007">PL 007</option>
          <option value="PL 008">PL 008</option>
          <option value="PL 009">PL 009</option>
          <option value="PL 010">PL 010</option>
          <option value="PL 011">PL 011</option>
          <option value="PL 012">PL 012</option>
          <option value="PL 013">PL 013</option>
          <option value="PL 014">PL 014</option>
          <option value="PL 015">PL 015</option>
          <option value="PL 016">PL 016</option>
          <option value="PL 017">PL 017</option>
          <option value="PL 018">PL 018</option>
        </select>
        <label>CAR PLATE NUMBER</label>
        <input type="text" name="plate" placeholder="eg. ADH 123" >
       <label>PAYMENT INFORMATION</label>
       <input type="text" name="card" placeholder="CARD NUMBER" >
        <input type="submit" id="sub" name="submit" value="Proceed To Date and Time">
        <p class="message">NOTE: Parking Fees Per Hour 399/- Taka</p>
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
