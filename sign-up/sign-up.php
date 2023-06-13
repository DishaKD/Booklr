<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>

  <!--Custom CSS-->
  <link rel="stylesheet" href="./Styles/Home_Page - Style.css">
  <!--Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!--Bootstrap CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>        
  <!--Icon Library Font Awesome-->
  <script src="https://kit.fontawesome.com/f36fba13b4.js" crossorigin="anonymous"></script>                                                                                 
  <!--Title of the webpage-->
  <title>Booklr</title>

  <!--Link StyleSheet-->
  <link rel="stylesheet" type="text/css" href="styles/sign-up-styles.css">
</head>

<Header class="page header">
        <!--Logo-->  
        <img class="logo"src="Images/logo.png" alt="Booklr">

        <!--Navigation Bar-->        
        <div class="navigation-bar">
            <ul class="navigation-bar">
                <li class="navigation-bar"><a href="Home-Page.php" class="Home">Home</a></li>
                <li class="navigation-bar"><a href="About.php" class="About">About</a></li>
                <li class="navigation-bar"><a href="Books.php" class="Books">Books</a></li>
                <li class="navigation-bar"><a href="Contact.php" class="Contact">Contact</a></li>
                <li class="navigation-bar"><a href="Orders.php" class="Orders">Orders</a></li>
                <li class="navigation-bar"><a href="FAQ.php" class="FAQ">FAQ</a></li>
                <li class="user-access"><a href="" class="Login">Login</a>
                <li class="user-access"><a href="Register.php" class="Register">Register</a>
              </ul>
        </div><br><br>
    </Header>

<body>

  <!--Sign Up Form-->
  <div>
  <img class="image" src="images/sign-up.jpg">

  <h1>Sign Up</h1>
  <p>Create an account, It's free.</p>

    <form class="form" action="sign-up-process.php" method="POST" autocomplete="off">
      <label>First Name</label><br>
      <input type="text" id="F_name" name="F_name" placeholder="First Name" required><br><br>

      <label>Last Name</label><br>
      <input type="text" id="L_name" name="L_name" placeholder="Last Name" required><br><br>

      <label>Gender</label><br>
      <input type="radio" id="Gender" name="Gender" value="male"> Male
      <input type="radio" id="Gender" name="Gender" value="female"> Female<br><br>

      <label>Mobile Number</label><br>
      <input type="phone" id="Phone_number" name="Phone_number" pattern="[0-9]{10}" placeholder="077XXXXXXX" required><br><br>

      <label>Email</label><br>
      <input type="email" id="Email_Address" name="Email_Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" placeholder="example@gmail.com" required><br><br>

      <label>Address</label><br>
      <textarea id="Address" name="Address" rows="4" cols="60" placeholder="Enter your adress here" required></textarea><br><br>

      <label>Date of Birth</label><br>
      <input type="date" id="DOB" name="DOB" required><br><br>

      <label>Password</label><br>
      <input type="password" id="Password" name="Password"><br><br>

      <input type="checkbox" id="checkbox" onclick="appearSignUp()"> I have read and agree to the Terms of Service and Privacy Policy.<br><br>

      <input type="submit" id="submitButton" value="Sign Up" disabled>

      <p>Already have an account? <a href="../sign-in/sign-in.php">Sign In</a></p>
    </form><br><br><br><br>
  </div>

  <!-- Site footer -->
    <footer class="site-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-10 col-md-4">
            <!--Main Logo in White-->
            <img src="images/logo-white.png" alt="logo-white">
            <!--Brief about website and services-->
            <p class="text-justify">Booklr is a website for an extensive collection of  books, stationery and magazines.Not only a "one-stop shop" for book lovers but also an interactive and innovative destination designed to make it fun and exciting to discover and shop for new books online.</p>
            <!--Redirect to About Us page-->
            <a class social>Learn More About Us</a>
          </div>  
          
          <div class="col-xs-6 col-md-3">
            <h6>OUR MAIN OFFICE</h6>
            <ul class="footer-links">
              <li>Address</li>
              <li>P.O.BOx: 365/A</li>
              <li>Phone: (+94) 34 6786543</li>
              <li>E-Mail: info@booklr.com</li>              
            </ul>
          </div>

          <div class="col-xs-6 col-md-2">
            <h6>KEEP IN TOUCH WITH US</h6>
            <ul class="footer-links">
              <li><a href="">Facebook</a></li>
              <li><a href="">Twitter</a></li>
              <li><a href="">Instergram</a></li>               
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>INFORMATIONS</h6>
            <table class ="footer-table">
              <tr>
                <td>About Us</td>
                <td>Terms & Conditions</td>
              </tr>
              <tr>
                <td>Contact Us</td>
                <td>My Account</td>
              </tr>
              <tr>
                <td>FAQ</td>
                <td>Blog</td>
              </tr>
            </table>
          </div>
        </div>
        <hr>
      </div>
      
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-sm-6 ">
            <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by <a href="#">Booklr</a>.</p>
          </div>
    </footer>

  <!--Java Script for Sign Up Button-->
  <script>
    function appearSignUp() {
      if (document.getElementById("checkbox").checked) {
        document.getElementById("submitButton").disabled=false;
      }
      else{
        document.getElementById("submitButton").disabled=true;
      }
    }
  </script>

</body>
</html>