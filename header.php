<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <Head>
        <!--Custom CSS-->
        <link rel="stylesheet" href="Cascade Sheets/headerFooter.css">
        <!--Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!--Bootstrap CDN-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--Icon Library Font Awesome-->
        <script src="https://kit.fontawesome.com/f36fba13b4.js" crossorigin="anonymous"></script>                                                                                 
        <!--Title of the webpage-->
        <title>Booklr</title>
    </Head>
<body>
    <!--Header-->
    <Header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                <a href="index.php"><img class="logo" src="Images/Header & Footer/logo.png" alt="Booklr"></a>
                <form class="d-flex input-group w-auto">
                    <input type="search" class="form-control rounded" placeholder="Search Book" aria-label="Search" aria-describedby="search-addon"/>
                    <span class="input-group-text border-0" id="search-addon">
                        <a href=""><i class="fas fa-search"></i></a>                           
                    </span>
                    <ul class="navbar-nav d-flex flex-row me-10">
                        <li class="nav-item me-3 me-lg-3">
                            <a class="nav-link" href="cart.php">
                                <i class="fa-solid fa-cart-shopping" style="color: #4482ee;"></i>
                            </a>
                        </li>
                        <!---->
                        <li class="nav-item me-3 me-lg-3">
                            <a class="nav-link" href="my-account.php">
                                <i class="fa-regular fa-user" style="color: #266de8;"></i>
                            </a>
                        </li>
                        <!---->
                        <li class="nav-item me-3 me-lg-3">
                            <a class="nav-link" href="">
                                <i class="fa-regular fa-heart" style="color: #2c73ed;"></i>
                            </a>
                        </li>
                    </ul>
                </form>                
            </div>
        </nav>

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>
