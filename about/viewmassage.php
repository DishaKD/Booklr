<?php
    include_once 'config.php';
?>

<!--Home Page-->
<!DOCTYPE html>
<html lang=en>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale-1">


    <Head>
        <style>
        td {
        border: 1px solid black;
        padding: 8px;
    }
        
        .massagetable{
            width: 90%;
            max-width: 1200px;
            margin : 10px auto;
            padding:0;
            background-color:none;
            border:1px;
            border-color:none;
            border-radius:40px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .msgtable{
            margin:auto;
            width:90%;
            border:2px;
            border-radius: 4px;
            
        }
        table {
            border-collapse: collapse; /* Collapse the borders into a single border */
            border: 2px;
            width: 100%;
        }

        th, td {
            border: 1px solid black; /* Set a solid black border */
            padding: 8px;
        }

        #tableheader{
            text-decoration: underline;
            font-size:20px;
            margin: auto;
            
        }
        </style>
                <!--Custom CSS-->
        <link rel="stylesheet" href="./Styles/Home_Page - Style.css">
        <!--About css-->
        <link rel="stylesheet" href="./Styles/about.css">
        <!--Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!--Bootstrap CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>        
        <!--Icon Library Font Awesome-->
        <script src="https://kit.fontawesome.com/f36fba13b4.js" crossorigin="anonymous"></script>                                                                                 
        <!--Title of the webpage-->
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
        <!--Massage table-->
        <h1 style="marin:auto; text-align:center;">Your Massages</h1>
        <div class="massagetable" style="border-style: groove; border-color: darkblue">
        <table 'border="1" class="msgtable">
        <tr>
            <th class="col1" id="tableheader">Massage No</th>
            <th class="col2" id="tableheader">First Name</th>
            <th class="col3" id="tableheader">Last Name</th>
            <th class="col4" id="tableheader">Email</th>
            <th class="col5" id="tableheader">Massage</th>
        </tr>

        <?php
        $sql = "SELECT * FROM contact_us";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['msgNo'] .
                    "</td><td>" . $row['Fname'] .
                    "</td><td>" . $row['Lname'] .
                    "</td><td>" . $row['Email'] .
                    "</td><td>" . $row['Massage'] . "</td>
                    <td><a href='deleteData.php?id=".$row['msgNo']."'>Delete</a></td></tr>";
            }
        } else {
            echo "<h5 style='text-align:center;'>Empty rows.</h5>";
        }
        echo "</table>";
        mysqli_close($con);
        ?>
    </table>
</div>

    </body>
    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-md-4">
            <img src="images/logo-white.png" alt="logo-white">
            <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam repellendus sunt praesentium aspernatur iure molestias.</p>
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