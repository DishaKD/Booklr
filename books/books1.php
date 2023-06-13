
<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale-1">


    <Head>
        <!--Custom CSS-->
        <link rel="stylesheet" href="./Styles/Home_Page - Style.css">
		<link rel="stylesheet" href="books.css">

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
  

  <div class="book-list">
    <?php
      // Fetch data from the database
      // Replace the database connection details with your own
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "books";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
    
       
	   $sqlcat = "SELECT category FROM books";
      $categories = $conn->query($sqlcat);
	  
	 echo "<div class='category-bar'>";
	       $all="all";
		echo "<h2 id='category'>Shop by category</h2>";

		echo "<ul>"; 
      echo "<li><a href='books.php?category=$all' >all</a></li><br>";

     if ($categories->num_rows > 0) {
		 
		 
      while ($row = $categories->fetch_assoc()) {
        $categoryname = $row["category"];
        
        echo "<li><a href='books.php?category=$categoryname'>$categoryname</a></li><br>";
		 
       }
	   
	 }
	 echo "</ul>"; 
	   echo "</div>";
			 // Check if a category was selected

         if(empty($_GET['category']) ) {
            // Retrieve all book items
            $query = "SELECT * FROM books";
		}
	     
		elseif(isset($_GET['category']) && !empty($_GET['category'])) {
            $selectedCategory = $_GET['category'];

         if ($selectedCategory == "all") {
            // Retrieve all book items
            $query = "SELECT * FROM books";
		}
		 else {
            // Retrieve book items for the selected category
            $query = "SELECT * FROM books WHERE category = '$selectedCategory'";
        }
          
		}
            
			$result= mysqli_query($conn, $query);
			
			while ($row = mysqli_fetch_assoc($result)) {
               echo "<div class='card'>";
             echo "<img src='uploads/books.jpg'/>";
              echo "<h2>" . $row["book name"] . "</h2>";
              echo "<p class='price'>$" .$row["price"] . "</p>";
			  echo "<p>by ".$row["author"]."</p>";
			   echo "<form method='POST' action=''>";
               echo "<button class='add-to-cart' name='submit' value=" . $row["book_ID"] . ">Add to Cart</button>";
              echo "</form>";
              echo "</div>";
			  
           
            }
			 //check whether submit button clicked
			 echo "</div>";
		    $added=array();
		   if (isset($_POST["submit"])&& !empty($_POST["submit"])) {
               
			     $bookId = $_POST["submit"];
			     
 	               $sqlCheck = "SELECT * FROM cart WHERE book_ID = '$bookId'";
                   $resultCheck = mysqli_query($conn, $sqlCheck);	
				   
				  if (mysqli_num_rows($resultCheck) > 0) {
                    echo "<script>alert('Item already added')</script>";
    }
				  else{
				  $query2 = "SELECT * FROM books WHERE book_ID = '$bookId'";
				  $result2=mysqli_query($conn, $query2);
			       //Updating the cart
				  while ($row = mysqli_fetch_assoc($result2)) {
					 
					  $bookID=$row['book_ID'];
					  $bookName=$row['book name'];
					  $bookPrice=$row['price'];
					  echo "<p><b>".$bookID."<b></p>";
					  
					  $sqlInsert = "INSERT INTO cart (book_ID,book_name,price) VALUES ('$bookID','$bookName','$bookPrice')";
             
			                 
				  }
				  
                    if (mysqli_query($conn,$sqlInsert)){
                              echo"<script>alert('Item added successfully')</script>";
	               
                                 }
                               else{
	                           echo "<script>alert('Error in Adding the item')</script>";
                                }

      
               } 
		   }
	      
	 echo "</div>";
	 
	
	
	  		  
      



      $conn->close();
    ?>
	</div>
 
    

        <!--Footer-->
        <footer class="footer">
            <div class="footer-left">
                <img src="images/logo-white.png" alt="logo-white">
                <p>Lorem ipsum dolor, sit amet consectetur<br>
                 adipisicing elit. Quam repellendus sunt praesentium <br>
                  aspernatur iure molestias.</p>
                <div class="socials">
                    <a class="paraText" href="about.html">Learn More About Us</a>
                </div>
            </div>
            <ul class="footer-right">
                <li>
                    <h2>OUR MAIN OFFICE</h2>
                    <p>Sample</p>
                    <p>Sample</p>
                    <p>Sample</p>
                    <p>Sample</p>
                </li>
                <li>
                    <h2>KEEP IN TOUCH WITH US</h2>
                    <p>Sample</p>
                    <p>Sample</p>
                    <p>Sample</p>
                    <p>Sample</p>
                </li>
                <li>
                    <h2>LINKS</h2>
                    <p>Sample</p>
                    <p>Sample</p>
                    <p>Sample</p>
                    <p>Sample</p>
                </li>
            </ul>
            <div class="footer-bottom">
                <p>&copy; 2023 Booklr.All Rights Resereved.</p>
            </div>
        </footer>
</html>