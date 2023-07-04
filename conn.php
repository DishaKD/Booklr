<?php


    //definig host
    $host = "localhost";
    //define username
    $username = "root";
    //define password
    $password = "";
    //define database
    $database = "booklr";

    $conn = mysqli_connect($host, $username, $password, $database);

    if(!$conn){
        die("Database connection failed" . mysqli_error($con));
    }
    else{
        //echo "Databse connection sucess!!";
    }




?>