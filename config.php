<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $db = "booklr";

    //create new connection
    $con= new mysqli($severname, $username, $password, $db);

    //check connection
    if($con->connect_error){
        die("Connection failed : ".$con->connect_error);

    }
    echo "Connected successfully!";


?>