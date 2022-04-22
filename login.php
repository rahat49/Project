<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LogIn</title>
      <link rel="stylesheet" href="css/styles2.css">
    <link rel="icon" href="css/pic/favicon.ico">
  </head>
  <body>


    <div class="header">
      <img class="logo" src="css/pic/lo.png" alt="logo">
      <nav class="nav-bar">
        <ul>
          <li><a  href="index.php">Home</a></li>
         <li> <a  href="#">Parking Zone</a></li>
         <li><a  href="signup.php">SignUp</a></li>
          <li><a  href="login.php">LogIn</a></li>
        </ul>
      </nav>
        <a class="cta" href="contact.php"><button>Contact</button></a>
    </div>


  <div class="login-page">
<h1 class="head2">LOG IN </h1>
    <div class="form">
      <form class="login-form" action="logaction.php" method="POST">
        <input type="text" name="email" placeholder="EMAIL" >
        <input type="password" name="password" placeholder="PASSWORD" >
       <input type="submit" id="sub" name="submit" value="LogIn">
        <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
      </form>
  </div></div>


    <div class="footer">
      <a class="footer-link" href="https://www.facebook.com/">Facebook</a>
       <a class="footer-link" href="https://twitter.com/">Twitter</a>
       <a class="footer-link" href="https://www.Instagram.com/">Instragram</a>
       <p class="credit">© 2022 Team70.</p>
    </div>

  </body>
</html>
