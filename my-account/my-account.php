<?php
session_start();

//check customer logged in, if not redirect to sign-in page
if (!isset($_SESSION['User_Fname']) || !isset($_SESSION['User_Lname'])) {
  header("Location: ../sign-in/sign-in.php");
  exit();
}

//get user data from the session
$firstName = $_SESSION['User_Fname'];
$lastName = $_SESSION['User_Lname'];
$email = $_SESSION['User_Email'];
$gender = $_SESSION['User_Gender'];
$phone = $_SESSION['User_Phone_number'];
$address = $_SESSION['User_Address'];
$dob = $_SESSION['User_DOB'];
$password = $_SESSION['User_Password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="styles/my-account-styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Account</title>

  <!--Custom CSS-->
  <link rel="stylesheet" href="styles/Home_Page - Style.css">
  <link rel="stylesheet" href="styles/my-account-styles.css">
  <!--Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!--Bootstrap CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>        
  <!--Icon Library Font Awesome-->
  <script src="https://kit.fontawesome.com/f36fba13b4.js" crossorigin="anonymous"></script>
</head>
<!--Header-->
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
<center>
<div class="img-prof">
  <img src="images/p4.jpg" alt="profile pic">
</div>
  <h1><?php echo $firstName.' '.$lastName; ?></h1><br>
  <p>Email: <?php echo $email; ?></p>
  <p>Gender: <?php echo $gender; ?></p>
  <p>Phone: <?php echo $phone; ?></p>
  <p>Address: <?php echo $address; ?></p>
  <p>Date of Birth: <?php echo $dob; ?></p>
  <p>Password: <?php echo $password; ?></p>
  <button class="deleteButton" onclick="location.href='delete.php'">Delete Details</button>
  <button class="updateButton" onclick="location.href='update.php'">Update Details</button>
</center><br><br><br>

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
</body>
</html>
