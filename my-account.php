<?php
session_start();

//check customer logged in, if not redirect to sign-in page
if (!isset($_SESSION['User_Fname']) || !isset($_SESSION['User_Lname'])) {
  header("Location:sign-in.php");
  exit();
}

//get user data from the session
$firstName = $_SESSION['User_Fname'];
$lastName = $_SESSION['User_Lname'];
$email = $_SESSION['User_Email'];
$gender = $_SESSION['User_Gender'];
$phone = $_SESSION['User_Phone_number'];
$address = $_SESSION['User_Address'];
$dob = $_SESSION['User_DOB'];
$password = $_SESSION['User_Password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="styles/my-account-styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Account</title>

  <!--Custom CSS-->
  <link rel="stylesheet" href="Cascade Sheets/headerFooter.css">
  <link rel="stylesheet" href="Cascade Sheets/my-account-styles.css">
</head>

    
<body>
  <?php include "./header.php"?>
<center>
<div class="img-prof">
  <img src="images/p4.jpg" alt="profile pic">
</div>
  <h1><?php echo $firstName.' '.$lastName; ?></h1><br>
  <p>Email: <?php echo $email; ?></p>
  <p>Gender: <?php echo $gender; ?></p>
  <p>Phone: <?php echo $phone; ?></p>
  <p>Address: <?php echo $address; ?></p>
  <p>Date of Birth: <?php echo $dob; ?></p>
  <p>Password: <?php echo $password; ?></p>
  <button class="deleteButton" onclick="location.href='delete.php'">Delete Details</button>
  <button class="updateButton" onclick="location.href='update.php'">Update Details</button>
</center><br><br><br>


<?php include "./footer.php"?>


</body>
</html>
