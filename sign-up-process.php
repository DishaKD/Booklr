<?php

  include_once 'sign-up-config.php';

  //getting form data
  $F_name = $_POST['F_name'];
  $L_name = $_POST['L_name'];
  $Gender = $_POST['Gender'];
  $Phone_number = $_POST['Phone_number'];
  $Email_Address = $_POST['Email_Address'];
  $Address = $_POST['Address'];
  $DOB = $_POST['DOB'];
  $Password = $_POST['Password'];

  //check user is already registered
  $checkEmail = "select * from customer where Email_Address = '$Email_Address'";
  $result = $con->query($checkEmail);

  if ($result->num_rows > 0){
    //display a popup message
    echo "<script>alert('This email address is already taken. Please log in using your email and password.')</script>";
    echo "<script>window.location.href='../sign-in/sign-in.php';</script>";
    exit();
  }

  //send SQL query
  $sql = "INSERT INTO customer (F_name,L_name,Gender,Phone_number,Email_Address,Address,DOB,Password) VALUES ('$F_name','$L_name','$Gender','$Phone_number','$Email_Address','$Address','$DOB','$Password')";

  if ($con->query($sql) === true){
    echo "<script>alert('Registration Completed.')</script>";
    echo "<script>window.location.href='sign-in.php';</script>";
    exit();
  }

  $con->close();
?>
