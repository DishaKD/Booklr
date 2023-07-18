<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <Head>
        <link rel="stylesheet" href="Cascade Sheets/cart.css">
        <link rel="stylesheet" href="Cascade Sheets/headerFooter.css">
        <script src="Java Scripts/ShoppingCart/cart.js"></script>
        <title>Shopping Cart</title>
    </Head>


    
    <!-- Cart -->

    <body>
      <?php include "./header.php"?>
	
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
	   $dbname="booklr";
	   
	   //create connection
	   $conn=new mysqli($servername,$username,$password,$dbname);
	   
	   //check connection
	   if($conn->connect_error){
		   die("connection failed:".$conn->connect_error);
		   
	   }

	  
            $sql= "SELECT * FROM cart";
            $result= mysqli_query ($conn,$sql);			
            $subtotal = 0;
			while ($DataRows=$result->fetch_assoc())
            {
                $booksName = $DataRows["book_name"];
                $booksImages = $DataRows ["image_filename"];
                $booksPrice = $DataRows ["price"];                
                $booksID = $DataRows ["book_ID"]; 
                $subtotal = $subtotal + $DataRows['price'];
			echo "<tr>
                <td>
                    <div class='cart-info'>
                        <img class='book' src='Images/BooksPage/uploads/$booksImages'>
                        <div>
                            <p>$booksName</p>
                        </div>
                    </div>
                </td>
                <form method='POST' action=''>
			   <td><input class='quantity $booksID' onchange='changequantity(`$booksID`)' type='number' name='quantity' min='0' value='1'></td>
                <td class='price $booksID'>$booksPrice</td></form>";
				
    

				echo"
                <td><span class='total $booksID total-price-ammount'>$booksPrice</span></td>
                <td><a href='deletebooks.php?id=$booksID'>X</a></td>
				
            </tr>";
			}
      echo "</table>";
      
      
      echo "<div class='total-price'>

      <table>
          <tr>
              <td>Subtotal</td>
              <td class='subtotal-ammount'>LKR ".$subtotal.".00/=</td>
          </tr>
          <tr>
              <td>Shipping</td>
              <td>LKR 420.00/=</td>
          </tr>
          <tr>
              <td>Total</td>
              <td class='total-ammount'>LKR ".($subtotal + 60).".00/=</td>
          </tr>
      </table>

  </div>";?>	
		

    
        </div>
      
    </body>
      <?php include "./footer.php"?>
</html>