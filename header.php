<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale-1">

    <Head>
        <!--Custom CSS-->
        <link rel="stylesheet" href="home-page/Styles/Home_Page - Style.css">
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
<body>
    <!--Header-->
    <Header class="page header">
        <!--Logo-->  
        <img class="logo"src="home-page/Images/logo.png" alt="Booklr">

        <!--Navigation Bar-->        
        <div class="navigation-bar">
            <ul class="navigation-bar">
                <li class="navigation-bar"><a href="index.html" class="Home">Home</a></li>
                <li class="navigation-bar"><a href="about/About.php" class="About">About</a></li>
                <li class="navigation-bar"><a href="books/books.php" class="Books">Books</a></li>
                <li class="navigation-bar"><a href="about/Contact.php" class="Contact">Contact</a></li>
                <li class="navigation-bar"><a href="books/orders.php" class="Orders">Orders</a></li>
                <li class="navigation-bar"><a href="FAQ/FAQ.html" class="FAQ">FAQ</a></li>
                <li class="user-access"><a href="sign-in/sign-in.php" class="Login">Login</a>
                <li class="user-access"><a href="sign-up/sign-up.php" class="Register">Register</a>
              </ul>
        </div>  
        
        <!--Search Bar-->
        <div class="search-bar">
          <input type="text" placeholder="Search..." class="search">
          <a href=""><i class="fa fa-search"></i></a>
          <a href="shopping-cart/"><i class="fa fa-shopping-cart"></i></a>
          <a href="my-account/my-account.php"><i class="fa-solid fa-user"></i></a>
          <a href=""><i class="fa-solid fa-heart"></i></a>
        </div> <br>        
    </Header>
</body>
</html>
