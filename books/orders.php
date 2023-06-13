<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale-1">


    <Head>
        <!--Custom CSS-->
        <link rel="stylesheet" href="./Styles/Home_Page - Style.css">
		<link rel="stylesheet" href="orders.css">

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
        </div><br>       
    </Header>

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
	   
	   //Retrieve all order details
	   $sql="SELECT * FROM orders ";
	   $result=$conn->query($sql);
	   
	   echo "<h1>My Orders</h1> ";
	   $sum=0;
	   echo "<div class='orders'>";
	      
   
	   echo "<div class='orderlist'>";
	   //display orders
	   while($row=$result->fetch_assoc()){
		   echo "
		         <form method='post' action=''> 
		         <input type='checkbox' name='cancel_orders[]' class='checkbox' value='" . $row['order_ID'] . "'>
		         <img src='uploads/" . $row["image_filename"] . "'/>";		 
				 echo "<span><b>".$row["book_name"]."</b><span>
				 <span class='ID'>ID :".$row["order_ID"]."</span>
				s <span class='qty'>Qty:".$row["quantity"]."</span>
				 <span class='status'>Status: ".$row["status"]."</span><br><br>
				 <span class='delivery'>Delivery Date:".$row["delivery"]."</span>
				 <span class='price'>Rs".$row["price"]."</span> 
				 <hr>";
				 //Displaying the sum
				  if ($row["status"] !== "Cancelled") {
                  $sum += $row["price"];
                 }
	   }
	   echo  "<h3>Total :Rs".$sum."</h3>";
	   echo "<button type='submit' id='cancel' name='cancel-btn'>Cancel order</button>";	   
	  echo "</form>";
	  
	  //Order cancellation
	  if (isset($_POST['cancel-btn'])) {
    if (isset($_POST['cancel_orders'])) {
        $cancelOrders = $_POST['cancel_orders'];
        foreach ($cancelOrders as $orderId) {
            $updateSql = "UPDATE orders SET status = 'Cancelled' WHERE order_ID = $orderId";
            if (mysqli_query($conn, $updateSql)) {
                echo "<h3 class='msg'>Order ID $orderId has been canceled.<h3><br>";
            } else {
                echo "Error updating order ID $orderId: " . mysqli_error($conn) . "<br>";
            }
        }
    } else {
        echo "<h3 class='msg'><b>No orders selected for cancellation.<b></h3><br>";
    }
}
	  
	  echo "</div>";
	  echo "</div>";
	 
    

    
	  
	 $conn->close();


	 ?>
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