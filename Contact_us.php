<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale-1">


    <Head>
        <!--Custom CSS-->
        <link rel="stylesheet" href="Cascade Sheets/headerFooter.css">
        <!--Custom CSS-->
        <link rel="stylesheet" href="Cascade Sheets/contact.css">    
        <!--Custom Java script-->
        <script src="Java Scripts/ContactUs/contact.js"></script>

        <title>Booklr</title>        
    </Head>


    
    <body>

    <?php include "./header.php" ?>
      
        <h1>How can I help you?</h1> 
        
<!--Contact us box -->
<div class="contactUsBox">
    <div class="content-left">
        <div class="icons">
            <i class="fas fa-map-marker-alt" id="icon"><br><h2 class="side-text">Address<p class="side-para">Nawam Mawatha,Colombo 10</p></h2></i><br>
            <i class="fas fa-phone" id="icon"><br><h2 class="side-text">Phone<p class="side-para">0711234567</p></h2></i><br>
            <i class="fas fa-envelope" id="icon"><br><h2 class="side-text">Email<p class="side-para">info@booklr.com</p></h2></i><br>
        </div>
    </div>
    <div class="vertical-line"></div>
    <div class="content-right">
        <h2>Send us a message</h2>
        <p>Have a question or need assistance? We're here to help! Contact our friendly <br>team today for prompt and reliable support.</p>
        <form method="POST" action="submitMassage.php" onsubmit="return checkforblank()">
            <input type="text" id="fname" name="fname" placeholder="Enter your first name">
            <input type="text" id="lname" name="lname" placeholder="Enter your last name"> <br><br>
            <input type="email" id="email" name="email" placeholder="Enter your email"> <br>
            <textarea rows="5" id="msg" name="msg" placeholder="Enter your message"></textarea>
            <input type="submit" id="btnSendNow" value="Send now">
            
        </form>
    </div>
</div>

<?php include "./footer.php"?>


    </body>   
</html>