<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <Head>
        <!--Custom CSS-->
        <link rel="stylesheet" href="Cascade Sheets/headerFooter.css">
		    <link rel="stylesheet" href="Cascade Sheets/books.css"> 
        <!--Bootstrap CDN-->    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">      
        <title>Books</title>
    </Head>  

    <body>
        <?php include "./header.php"?>            
        
          <?php          
          // Fetch data from the database
          // Replace the database connection details with website
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "Booklr";
          
          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) 
          {
            die("Connection failed: " . $conn->connect_error);
          }
          //Get all categories
          $sqlcat = "SELECT category FROM books";
          $categories = $conn->query($sqlcat);
          // Array to store the unique category names
          $uniqueCategories = [];
          //Sidebar starts    
          echo " <div class= 'container-fluid'>"; 
          echo "<div class='row'>";    
          echo "<div class='col-2 sidebar'>";
          // Variable to all genre
          $all="all";
          // Bootstrap list 
          echo "<ul class='list-group list-group-flush'>";
          echo "<li class='list-group-item'>Shop by Category</li>";
          // Display All Genre
          echo "<li class='list-group-item text-center'><a href='books.php?category=$all'>All Genre</a></li><br>";
          // Add unique category to name to the array 
          while ($row = $categories->fetch_assoc()) 
          {
            $categoryname = $row["category"];
            $categoryname = ucwords($categoryname); // Capitalize each word
            if (!in_array($categoryname, $uniqueCategories))
            {
              $uniqueCategories[] = $categoryname;
            }
          }
          // Generate categories to sidebar
          foreach ($uniqueCategories as $categoryname) 
          {
            echo "<li class='list-group-item text-center'><a href='books.php?category='$categoryname'>$categoryname</a></li>";
          }         
          // Check if a category was selected
          if(empty($_GET['category']) ) 
          {
            // Retrieve all book items
            $query = "SELECT * FROM books";
          }
          
          elseif(isset($_GET['category']) && !empty($_GET['category']))
          {
            $selectedCategory = $_GET['category'];
            if ($selectedCategory == "all") 
            {
              // Retrieve all book items
              $query = "SELECT * FROM books";
            }
            else 
            {
              // Retrieve book items for the selected category
              $query = "SELECT * FROM books WHERE category = '$selectedCategory'";
            }
          }
          echo "</ul>"; // Bootstrap list ends 
          echo "</div>"; // col-2 </div>
          

          //Book Cards Open
          echo "<div class='col-10 main-content .p-4'>";  
          //Set Row
          echo "<div class='row'>";
          // Get all the books from book table
          $sqlbooks = "SELECT * FROM books";
          $book = $conn->query($sqlbooks);
          // Fetch data from DB and generate cards
          while ($DataRows=$book->fetch_assoc())
          {
            $booksName = $DataRows["book name"];
            $booksImages = $DataRows ["image_filename"];
            $booksPrice = $DataRows ["price"];
            $booksAuthor = $DataRows ["author"];
            $booksID = $DataRows ["book_ID"];  

          //Cards starts
          echo "<div class='card col-md-2 .p-10'>";        
          echo "<img src='Images/BooksPage/uploads/$booksImages'/>"; //Images 
          echo "<div class='card-body'>";
          echo "<p class='card-title'>".$booksName ."</p>"; //Book Name
          echo "<p class='card-text'>LKR " .$booksPrice . ".00/=</p>"; // Book Price
			    echo "<p class='text-muted'>by ".$booksAuthor."</p>"; // Book Author
			    echo "<form method='POST' action=''>";
          echo "<button class='add-to-cart' name='submit' value=" . $booksID . ">Add to Cart</button>"; // Add to cart button
          echo "</form>";
          echo "</div>";        
          echo "</div>"; 
         }
           
          echo "</div>"; // Book Cards row ends
          echo "</div>"; // col-10 ends
          echo "</div>"; // whole row end  
          echo "</div>"; // container-fluid end
          
            //check whether submit button clicked		 
            $added=array();
            if (isset($_POST["submit"])&& !empty($_POST["submit"])) 
            {
              $bookId = $_POST["submit"];
              $sqlCheck = "SELECT * FROM cart WHERE book_ID = '$bookId'";
              $resultCheck = mysqli_query($conn, $sqlCheck);
              
              if (mysqli_num_rows($resultCheck) > 0) 
              {
                echo "<script>alert('Item already added')</script>";
              }
              else
              {
                $query2 = "SELECT * FROM books WHERE book_ID = '$bookId'";
                $result2=mysqli_query($conn, $query2);
                
                //Updating the cart
                while ($row = mysqli_fetch_assoc($result2)) 
                {
                  $bookID=$row['book_ID'];
                  $bookName=$row['book name'];
                  $bookPrice=$row['price'];
                  $filename=$row["image_filename"];
                  echo "<p><b>".$bookID."<b></p>";
                  
                  $sqlInsert = "INSERT INTO cart (book_ID,book_name,price,image_filename) VALUES ('$bookID','$bookName','$bookPrice','$filename')";
                }
                
                if (mysqli_query($conn,$sqlInsert))
                {
                  "<script>alert('Item added successfully')</script>";
                }
                else
                {
                  echo "<script>alert('Error in Adding the item')</script>";
                 }
                }
              }
              
              $conn->close();
              ?>
        
        
        <?php include "./footer.php"?>


    <!--Bootstrap Java Script-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>