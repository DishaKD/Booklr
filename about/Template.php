<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale-1">


    <Head>
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
    </Head>

    <!--Header-->
    <Header class="page header">
        <!--Logo-->  
        <img class="header_Logo"src="" alt="Booklr">
        
        <!--Search Bar-->
        <div class="search-bar">
          <input type="text" placeholder="Search..." class="search">
          <a href=""><i class="fa fa-search"></i></a>
          <a href=""><i class="fa fa-shopping-cart"></i></a>
          <a href=""><i class="fa-solid fa-user"></i></a>
          <a href=""><i class="fa-solid fa-heart"></i></a>
        </div>

        <!--Navigation Bar-->        
        <div class="navigation-bar">
            <ul class="navigation-bar">
                <li class="navigation-bar"><a href="home.html" class="Home">Home</a></li>
                <li class="navigation-bar"><a href="About.php" class="About">About</a></li>
                <li class="navigation-bar"><a href="Books.php" class="Books">Books</a></li>
                <li class="navigation-bar"><a href="Contact.php" class="Contact">Contact</a></li>
                <li class="navigation-bar"><a href="Orders.php" class="Orders">Orders</a></li>
                <li class="navigation-bar"><a href="FAQ.php" class="FAQ">FAQ</a></li>
                <li class="user-access"><a href="Login.php" class="Login">Login</a>
                <li class="user-access"><a href="Register.php" class="Register">Register</a>
              </ul>
        </div>    
    </Header>
    
    <!-- Site footer -->
    <footer class="site-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-10 col-md-4">
            <!--Main Logo in White-->
            <img src="images/logo-white.png" alt="logo-white">
            <!--Brief about website and services-->
            <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam repellendus sunt praesentium aspernatur iure molestias.</p>
            <!--Redirect to About Us page-->
            <a class social>Learn More About Us</a>
          </div>  
          
          <div class="col-xs-6 col-md-3">
            <h6>OUR MAIN OFFICE</h6>
            <ul class="footer-links">
              <li>Address</li>
              <li>P.O.BOx:xxx</li>
              <li>Phone:(+94) xx xxx xxxx</li>
              <li>E-Mail:info@booklr.com</li>              
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
                <td>Contact Us</td>
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
</html>