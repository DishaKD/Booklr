<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale-1">


    <Head>
        <!--Custom CSS-->
        <link rel="stylesheet" href="./Styles/Home_Page - Style.css">
        <!--Custom CSS-->
        <link rel="stylesheet" href="./Styles/contact.css">
        <!--Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!--Bootstrap CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>        
        <!--Icon Library Font Awesome-->
        <script src="https://kit.fontawesome.com/f36fba13b4.js" crossorigin="anonymous"></script>                                                                                 
        <!--Title of the webpage-->
        <title>Booklr</title>
        <script src="javascript/contact.js"></script>
    </Head>

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
        </div>  
        
        <!--Search Bar-->
        <div class="search-bar">
          <input type="text" placeholder="Search..." class="search">
          <a href=""><i class="fa fa-search"></i></a>
          <a href=""><i class="fa fa-shopping-cart"></i></a>
          <a href=""><i class="fa-solid fa-user"></i></a>
          <a href=""><i class="fa-solid fa-heart"></i></a>
        </div> <br>
        
    </Header>
    
    <body>
        <h1>How can I help you?</h1> 
        
<!--Contact us box -->
<div class="contactUsBox">
    <div class="content-left">
        <div class="icons">
            <i class="fas fa-map-marker-alt" id="icon"><br><h2 class="side-text">Address<p class="side-para">Nawam Mawatha,Colombo 10</p></h2></i><br>
            <i class="fas fa-phone" id="icon"><br><h2 class="side-text">Phone<p class="side-para">0711234567</p></h2></i><br>
            <i class="fas fa-envelope" id="icon"><br><h2 class="side-text">Email<p class="side-para">info@booklr.com</p></h2></i><br>
        </div>
    </div>
    <div class="vertical-line"></div>
    <div class="content-right">
        <h2>Send us a message</h2>
        <p>Have a question or need assistance? We're here to help! Contact our friendly <br>team today for prompt and reliable support.</p>
        <form method="POST" action="submitMassage.php" onsubmit="return checkforblank()">
            <input type="text" id="fname" name="fname" placeholder="Enter your first name">
            <input type="text" id="lname" name="lname" placeholder="Enter your last name"> <br><br>
            <input type="email" id="email" name="email" placeholder="Enter your email"> <br>
            <textarea rows="5" id="msg" name="msg" placeholder="Enter your message"></textarea>
            <input type="submit" id="btnSendNow" value="Send now">
            
        </form>
    </div>
</div>


    </body>
        
        
        

      
      

    
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
</html>