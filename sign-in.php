    <!-- Signin Section-->
    <?php 
    include_once('sign-in-config.php');
    ?>

    <?php
      if(isset($_POST['submit'])){
        //declaring variables and assign empty values
        $email = "";
        $password = "";

        $email = input_varify($_POST['Email_Address']);
        $password = input_varify($_POST['Password']);

       $query1 = "SELECT * FROM customer WHERE Email_Address = '{$email}' AND Password = '{$password}' LIMIT 1";

       $showResult = mysqli_query($con, $query1);

       if($showResult){
        if(mysqli_num_rows($showResult) == 1){
          
          $user = mysqli_fetch_assoc($showResult);
          $_SESSION['User_Fname'] = $user['F_name'];
          $_SESSION['User_Lname'] = $user['L_name'];
          $_SESSION['User_Email'] = $user['Email_Address'];
          $_SESSION['User_Gender'] = $user['Gender'];
          $_SESSION['User_Phone_number'] = $user['Phone_number'];
          $_SESSION['User_Address'] = $user['Address'];
          $_SESSION['User_DOB'] = $user['DOB'];
          $_SESSION['User_Password'] = $user['Password'];
          header("Location: ../my-account/my-account.php");
        }
        else{
          echo '<script type="text/javascript">
                  window.onload = function () {alert("Please check your email and password"); }
              </script>';
        }
       }

      }

      function input_varify($data){
        //Remove empty space from user input
        $data = trim($data);
        //Remove back slash from user input
        $data = stripslashes($data);
        //conver special chars to html entities
        $data = htmlspecialchars($data);

        return $data;
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>

  <!--Custom CSS-->
  <link rel="stylesheet" href="Cascade Sheets/headerFooter.css">
  <link rel="stylesheet" type="text/css" href="Cascade Sheets/sign-in-styles.css">  
  <title>Sign In</title>
</head>


<body>

<?php include "header.php"?>

  <!--Sign In Form-->
  <div>
  <img class="image" src="Images/Signin & Signup/sign-in.jpg">

  <h1>Sign In</h1>
  <p>Hello again! Welcome back.</p>

    <form class="form" action="" method="POST" autocomplete="off">

      <label>Email</label><br>
      <input type="email" id="Email_Address" name="Email_Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" placeholder="example@gmail.com" required><br><br>

      <label>Password</label><br>
      <input type="password" id="Password" name="Password"><br><br>

      <input type="checkbox" id="checkbox" onclick="appearSignIn()"> Remember Me</p><br>
      
      <p><a href="#">Forgot Password?</a></p>

      <button type="submit" name="submit" id="submitButton" value="Sign In">Sign in</button>

      <p>Don't have an account? <a href="sign-up.php">Create a new account</a></p>
    </form>
  </div>

  <?php include "footer.php"?>



</body>
</html>