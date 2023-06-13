<?php
    include_once ('inc/conn.php');

    // Get the record ID to delete from the query string
    $recordId = $_GET['id'];

    // Prepare the delete statement
    $sql = "DELETE FROM books WHERE book_ID = $recordId";

    // Execute the delete statement
    if (mysqli_query($conn, $sql)) {
        header("location:cart.php");
        
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
