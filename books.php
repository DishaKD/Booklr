<!--Home Page-->
<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale-1">


    <Head>
        <!--Custom CSS-->
        <link rel="stylesheet" href="Cascade Sheets/headerFooter.css">
		<link rel="stylesheet" href="Cascade Sheets/books.css">       
        <title>Booklr</title>
    </Head>  

    <body>
        <?php include "./header.php"?>

      <div class="book-list">
    <?php
      // Fetch data from the database
      // Replace the database connection details with your own
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "Booklr";

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
             echo "<img src='uploads/" . $row["image_filename"] . "'/>";
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
					  $filename=$row["image_filename"];
					  echo "<p><b>".$bookID."<b></p>";
					  
					  $sqlInsert = "INSERT INTO cart (book_ID,book_name,price,image_filename) VALUES ('$bookID','$bookName','$bookPrice','$filename')";
             
			                 
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

    <?php include "./footer.php"?>

    </body>


    


</html>