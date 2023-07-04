<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>

  <!--Custom CSS-->
  <link rel="stylesheet" href="Cascade Sheets/headerFooter.css">
   <!--Link StyleSheet-->
  <link rel="stylesheet" type="text/css" href="Cascade Sheets/sign-up-styles.css">
  <!--Custom Java Script-->
  <script src="Java Scripts/Signup/signup.js"></script>
  <title>Sign Up</title> 
</head>

<body>
<?php include "header.php"?>
  <!--Sign Up Section-->
  <div>
  <img class="image" src="Images/Signin & Signup/sign-up.jpg">

  <h1>Sign Up</h1>
  <p>Create an account, It's free.</p>

    <form class="form" action="sign-up-process.php" method="POST" autocomplete="off">
      <label>First Name</label><br>
      <input type="text" id="F_name" name="F_name" placeholder="First Name" required><br><br>

      <label>Last Name</label><br>
      <input type="text" id="L_name" name="L_name" placeholder="Last Name" required><br><br>

      <label>Gender</label><br>
      <input type="radio" id="Gender" name="Gender" value="male"> Male
      <input type="radio" id="Gender" name="Gender" value="female"> Female<br><br>

      <label>Mobile Number</label><br>
      <input type="phone" id="Phone_number" name="Phone_number" pattern="[0-9]{10}" placeholder="077XXXXXXX" required><br><br>

      <label>Email</label><br>
      <input type="email" id="Email_Address" name="Email_Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" placeholder="example@gmail.com" required><br><br>

      <label>Address</label><br>
      <textarea id="Address" name="Address" rows="4" cols="60" placeholder="Enter your adress here" required></textarea><br><br>

      <label>Date of Birth</label><br>
      <input type="date" id="DOB" name="DOB" required><br><br>

      <label>Password</label><br>
      <input type="password" id="Password" name="Password"><br><br>

      <input type="checkbox" id="checkbox" onclick="appearSignUp()"> I have read and agree to the Terms of Service and Privacy Policy.<br><br>

      <input type="submit" id="submitButton" value="Sign Up" disabled>

      <p>Already have an account? <a href="sign-in.php">Sign In</a></p>
    </form><br><br><br><br>
  </div>

 <?php include "footer.php"?>

</body>
</html>