<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <Head>
        <!--Custom CSS-->
        <link rel="stylesheet" href="Cascade Sheets/headerFooter.css">
        <link rel="stylesheet" href="Cascade Sheets/orders.css">                                                                                
        <!--Title of the webpage-->
        <title>Booklr</title>
    </Head>

    <body>

    <?php include "./header.php"?>

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
		         <img src='Images/BooksPage/uploads/" . $row["image_filename"] . "'/>";		 
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

   <?php include "./footer.php"?>



    </body>


</html>