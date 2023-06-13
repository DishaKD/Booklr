<?php
  //start session
  session_start();

  //create connection
  $con = new mysqli('localhost','root','','booklr');

  //check connection
  if ($con->connect_error){
    die("Connection failed:".$con->connect_error);
  }

?>