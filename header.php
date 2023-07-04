<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale-1">

    <Head>
        <!--Custom CSS-->
        <link rel="stylesheet" href="Cascade Sheets/headerFooter.css">
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
        <img class="logo"src="Images/Header & Footer/logo.png" alt="Booklr">

         <!--Search Bar-->
        <div class="search-bar">
          <input type="text" placeholder="Search..." class="search">
          <a href=""><i class="fa fa-search"></i></a>
          <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
          <a href="my-account.php"><i class="fa-solid fa-user"></i></a>
          <a href=""><i class="fa-solid fa-heart"></i></a>
        </div>

        <!--Navigation Bar-->        
        <div class="navigation-bar">
            <ul class="navigation-bar">
                <li class="navigation-bar"><a href="index.php" class="Home">Home</a></li>
                <li class="navigation-bar"><a href="About_us.php" class="About">About</a></li>
                <li class="navigation-bar"><a href="books.php" class="Books">Books</a></li>
                <li class="navigation-bar"><a href="Contact_us.php" class="Contact">Contact</a></li>
                <li class="navigation-bar"><a href="orders.php" class="Orders">Orders</a></li>
                <li class="navigation-bar"><a href="FAQ.php" class="FAQ">FAQ</a></li>
                <li class="user-access"><a href="sign-in.php" class="Login">Login</a>
                <li class="user-access"><a href="sign-up.php" class="Register">Register</a>
              </ul>
        </div>  
        
        <br>        
    </Header>
</body>
</html>
