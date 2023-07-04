<?php
    include_once 'config.php';

    // Get the record ID to delete from the query string
    $recordId = $_GET['id'];

    // Prepare the delete statement
    $sql = "DELETE FROM contact_us WHERE msgNo = $recordId";

    // Execute the delete statement
    if (mysqli_query($con, $sql)) {
        header("location:viewmassage.php");
        
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }

    mysqli_close($con);
?>
