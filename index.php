<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale-1">


    <Head>
        <!--Custom CSS-->
        <link rel="stylesheet" href="Cascade Sheets/headerFooter.css">
        <link rel="stylesheet" href="Cascade Sheets/Home_Page - Style.css">
        <!--Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">        
        <!--Icon Library Font Awesome-->
        <script src="https://kit.fontawesome.com/f36fba13b4.js" crossorigin="anonymous"></script>                                                                                 
        <!--Title of the webpage-->
        <title>Booklr</title>
    </Head>


    <?php include "./header.php"?>

    
    <!--Body Section-->
    <body>
      <!--Main Logo-->
      <img class="img-fluid" src="Images/Home Page/wallpaper.jpg" alt="main-logo">
      
      <!--Provide Service Icons -->
      <div class="icon-bar">
        <div class="icons">
          <i class="fa-solid fa-truck-fast fa-2xl"></i>
          <div class="description">
            <h3>Free Shipping</h3>
            <p>Order over 5000 rupees</p>
          </div>
        </div>

        <div class="icons">
          <i class="fa-solid fa-file-shield fa-2xl"></i>
          <div class="description">
            <h3>Secure Payment</h3>
            <p>Fully protected transactions</p>
          </div>
        </div>

        <div class="icons">
          <i class="fa-solid fa-arrows-rotate fa-2xl"></i>
          <div class="description">
            <h3>Easy Returns</h3>
            <p>7 days return policy</p>
          </div>
        </div>
        
        <div class="icons">
          <i class="fa-solid fa-headset fa-2xl"></i>
          <div class="description">
            <h3>24/7 Support</h3>
            <p>Call us anytime</p>
          </div>
        </div>
      </div>

      <!--Bestseller section-->
      <div class="bestseller-Section">
        <div class="header">
          <h3 Style="display:inline-block;">Bestseller</h3>
          <p class="paragraph-bestseller" Style="display:inline-block;"><a href="books.php">View All</a>
        </div>

        <!--Bestseller Books-->
        <div class="bestseller-books">
          <a href="#Books.php">
            <img src="Images/Home Page/bestseller/book-1.jpg" />
            <div class="details">
              <h5>LKR.1,400/=</h5>              
            </div>
          </a>
          
          <a href="#Books.php">
            <img src="Images/Home Page/bestseller/book-2.jpg" />
            <div class="details">
              <h5>LKR.900/=</h5>              
            </div>
          </a>
          

          <a href="#Books.php">
            <img src="Images/Home Page/bestseller/book-3.jpg" />
            <div class="details">
              <h5>LKR.4,000/=</h5>              
            </div>
          </a>
          

          <a href="#Books.php">
            <img src="Images/Home Page/bestseller/book-4.jpg" />
            <div class="details">
              <h5>LKR.1,780/=</h5>              
            </div>
          </a>
          

          <a href="#Books.php">
            <img src="Images/Home Page/bestseller/book-5.jpg" />
            <div class="details">
              <h5>LKR.3,400/=</h5>              
            </div>
          </a>
          

          <a href="#Books.php">
            <img src="Images/Home Page/bestseller/book-6.jpg" />
            <div class="details">
              <h5>LKR.2,900/=</h5>              
            </div>
          </a>

          <a href="#Books.php">
            <img src="Images/Home Page/bestseller/book-7.jpg" />
            <div class="details">
              <h5>LKR.5,900/=</h5>              
            </div>
          </a>
          
          <a href="#Books.php">
            <img src="Images/Home Page/bestseller/book-8.jpg" />
            <div class="details">
              <h5>LKR.4,100/=</h5>              
            </div>
          </a>
        </div>
      </div>      
      <!--Bestseller section end-->

      <!--Top Rated section-->      
      <div class="toprated-Section">
        <div class="header">
          <h3 Style="display:inline-block;">Top Rated Books</h3>
          <p class="paragraph-toprated" Style="display:inline-block;"><a href="books.php">View All</a>
        </div>

        <!--Bestseller Books-->
        <div class="toprated-books">
          <a href="#Books.php">
            <img src="Images/Home Page/toprated/tr-1.jpg" />
            <div class="details">
              <h5>LKR.1,400/=</h5>              
            </div>
          </a>
          
          <a href="#Books.php">
            <img src="Images/Home Page/toprated/tr-2.jpg" />
            <div class="details">
              <h5>LKR.900/=</h5>              
            </div>
          </a>
          

          <a href="#Books.php">
            <img src="Images/Home Page/toprated/tr-3.jpg" />
            <div class="details">
              <h5>LKR.4,000/=</h5>              
            </div>
          </a>
          

          <a href="#Books.php">
            <img src="Images/Home Page/toprated/tr-4.jpg" />
            <div class="details">
              <h5>LKR.1,780/=</h5>              
            </div>
          </a>
          

          <a href="#Books.php">
            <img src="Images/Home Page/toprated/tr-5.jpg" />
            <div class="details">
              <h5>LKR.3,400/=</h5>              
            </div>
          </a>
          

          <a href="#Books.php">
            <img src="Images/Home Page/toprated/tr-6.jpg" />
            <div class="details">
              <h5>LKR.2,900/=</h5>              
            </div>
          </a>

          <a href="#Books.php">
            <img src="Images/Home Page/toprated/tr-7.jpg" />
            <div class="details">
              <h5>LKR.5,900/=</h5>              
            </div>
          </a>
          
          <a href="#Books.php">
            <img src="Images/Home Page/toprated/tr-8.jpg" />
            <div class="details">
              <h5>LKR.4,100/=</h5>              
            </div>
          </a>
        </div>
      </div>  
        
        
    <?php include "./footer.php"?>   
      
    </body>
</html>