<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale-1">


    <Head>
        <link rel="stylesheet" href="Cascade Sheets/cart.css">
        <link rel="stylesheet" href="Cascade Sheets/headerFooter.css">
        <script src="Java Scripts/ShoppingCart/cart.js"></script>
        <title>Booklr</title>
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
			while ($row=$result->fetch_assoc()){
        $subtotal = $subtotal + $row['price'];
			echo "<tr>
                <td>
                    <div class='cart-info'>
                        <img class='book' src='.jpeg'>
                        <div>
                            <p>".$row['book_name']."</p>
                        </div>
                    </div>
                </td>
                <form method='POST' action=''>
			   <td><input class='quantity".$row['book_ID']."' onchange='changequantity(`".$row['book_ID']."`)' type='number' name='quantity' min='0' value='1'></td>
                <td class='price".$row['book_ID']."'>".$row['price']."</td></form>";
				
    

				echo"
                <td><span class='total".$row['book_ID']." total-price-ammount'>".$row['price']."</span></td>
                <td><a href='deletebooks.php?id=".$row['book_ID']."'>X</a></td>
				
            </tr>";
			}
      echo "</table>";
      
      
      echo "<div class='total-price'>

      <table>
          <tr>
              <td>Subtotal</td>
              <td class='subtotal-ammount'>$".$subtotal."</td>
          </tr>
          <tr>
              <td>Shipping</td>
              <td>$60</td>
          </tr>
          <tr>
              <td>Total</td>
              <td class='total-ammount'>$".($subtotal + 60)."</td>
          </tr>
      </table>

  </div>";?>	
		

    

      
    </body>
      <?php include "./footer.php"?>
</html>