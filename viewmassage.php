<?php
    include_once 'config.php';
?>

<!--Home Page-->
<!DOCTYPE html>
<html lang=en>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale-1">


    <Head>
        <style>
        td {
        border: 1px solid black;
        padding: 8px;
    }
        
        .massagetable{
            width: 90%;
            max-width: 1200px;
            margin : 10px auto;
            padding:0;
            background-color:none;
            border:1px;
            border-color:none;
            border-radius:40px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .msgtable{
            margin:auto;
            width:90%;
            border:2px;
            border-radius: 4px;
            
        }
        table {
            border-collapse: collapse; /* Collapse the borders into a single border */
            border: 2px;
            width: 100%;
        }

        th, td {
            border: 1px solid black; /* Set a solid black border */
            padding: 8px;
        }

        #tableheader{
            text-decoration: underline;
            font-size:20px;
            margin: auto;
            
        }
        </style>
         <!--Custom CSS-->
        <link rel="stylesheet" href="Cascade Sheets/headerFooter.css">
        <!--About css-->
        <link rel="stylesheet" href="Cascade Sheets/about.css">                                                                                        
        <!--Title of the webpage-->
    </Head>

    <body>
        <?php include "./header.php"?>
        <!--Massage table-->
        <h1 style="marin:auto; text-align:center;">Your Massages</h1>
        <div class="massagetable" style="border-style: groove; border-color: darkblue">
        <table 'border="1" class="msgtable">
        <tr>
            <th class="col1" id="tableheader">Massage No</th>
            <th class="col2" id="tableheader">First Name</th>
            <th class="col3" id="tableheader">Last Name</th>
            <th class="col4" id="tableheader">Email</th>
            <th class="col5" id="tableheader">Massage</th>
        </tr>

        <?php
        $sql = "SELECT * FROM contact_us";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['msgNo'] .
                    "</td><td>" . $row['Fname'] .
                    "</td><td>" . $row['Lname'] .
                    "</td><td>" . $row['Email'] .
                    "</td><td>" . $row['Massage'] . "</td>
                    <td><a href='deleteData.php?id=".$row['msgNo']."'>Delete</a></td></tr>";
            }
        } else {
            echo "<h5 style='text-align:center;'>Empty rows.</h5>";
        }
        echo "</table>";
        mysqli_close($con);
        ?>
    </table>
</div>
<?php include "./footer.php"?>
    </body>

</html>