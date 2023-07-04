<?php
    include_once 'config.php';
?>

<?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $msg   = $_POST["msg"];

    $sql = "INSERT INTO contact_us(msgNo, Fname, Lname, Email, Massage)
    VALUES('', '$fname', '$lname', '$email', '$msg')";

    if(mysqli_query($con, $sql)){
        header("location:viewmassage.php");
    }else {
        echo "<script> alert('Error in insertion!!')</script>";
    }

    //close the connection
    mysqli_close($con);

?>