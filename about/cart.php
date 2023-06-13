<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale-1">


    <Head>
        <link rel="stylesheet" href="./Styles/cart.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <title>Booklr</title>
    </Head>

    <!--Header-->
    <Header class="page header">
        <!--Logo-->  
        <img class="header_Logo"src="" alt="Booklr">
        
        <!--Search Bar-->
        <div class="boxContrainer">
            <table class="elementsContrainer">
                <tr>
                    <td>
                        <input type="text" placeholder="Search Book" class="search">
                    </td>
                    <td>
                        <a href="#"><i class="material-icons">search</i></a>
                    </td>
                </tr>
            </table>
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
            </ul>
        </div>    
    </Header>
    
    <!-- Cart -->

    <body>
	
        <div class = "container text">
            <header>
                <h1>Shopping Cart</h1>
            </header>
        </div>
        
        <div class="container cart-page">
        <table>
            <tr>
                <th>ITEMS</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
                <th>TOTAL</th>
                <th></th>
            </tr>
      <?php  
           // Fetch data from the database
      // Replace the database connection details with your own
	   $servername="localhost";
	   $username="root";
	   $password="";
	   $dbname="books";
	   
	   //create connection
	   $conn=new mysqli($servername,$username,$password,$dbname);
	   
	   //check connection
	   if($conn->connect_error){
		   die("connection failed:".$conn->connect_error);
		   
	   }

	  
            $sql= "SELECT * FROM books";
            $result= mysqli_query ($conn,$sql);			
			
			while ($row=$result->fetch_assoc()){
			echo "<tr>
                <td>
                    <div class='cart-info'>
                        <img class='book' src='images/book1.jpeg'>
                        <div>
                            <p>".$row['book name']."</p>
                            <small>".$row['author']."</small>
                        </div>
                    </div>
                </td>
                <form method='POST' action=''>
			   <td><input type='number' name='quantity' value='2'></td>
                <td>".$row['price']."</td></form>";
				

				echo"
                <td></td>
                <td><a href=''>X</a></td>
				
            </tr>";
			}	
		?>	
        </table>

        <div class="total-price">

            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$600</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$60</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$660</td>
                </tr>
            </table>

        </div>

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