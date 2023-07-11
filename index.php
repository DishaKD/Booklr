<!--Home Page-->
<!DOCTYPE html></Doctype>
<html lang=en>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <Head>
        <!--Custom CSS-->
        <link rel="stylesheet" href="Cascade Sheets/headerFooter.css">
        <link rel="stylesheet" href="Cascade Sheets/Home_Page - Style.css">
        <!--Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!--Bootstrap CDN-->    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
        <!-- MDB -->
        <!--Icon Library Font Awesome-->
        <script src="https://kit.fontawesome.com/f36fba13b4.js" crossorigin="anonymous"></script>                                                                                 
        <!--Title of the webpage-->
        <title>Booklr</title>
    </Head>
        
    <!--Body Section-->
    <body>
      <!--Include Header-->
      <?php include "./header.php"?>
      
      <!--Main Image Slider-->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="Images/Home Page/wallpaper.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Images/Home Page/wallpaper.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Images/Home Page/wallpaper.jpg" alt="Third slide">
          </div>
        </div>
      </div>
      
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
          <a href="books.php">
            <img src="Images/Home Page/bestseller/book-1.jpg" />
            <div class="details">
              <h5>LKR.1,400/=</h5>              
            </div>
          </a>
          
          <a href="books.php">
            <img src="Images/Home Page/bestseller/book-2.jpg" />
            <div class="details">
              <h5>LKR.900/=</h5>              
            </div>
          </a>
          

          <a href="books.php">
            <img src="Images/Home Page/bestseller/book-3.jpg" />
            <div class="details">
              <h5>LKR.4,000/=</h5>              
            </div>
          </a>
          

          <a href="books.php">
            <img src="Images/Home Page/bestseller/book-4.jpg" />
            <div class="details">
              <h5>LKR.1,780/=</h5>              
            </div>
          </a>
          

          <a href="books.php">
            <img src="Images/Home Page/bestseller/book-5.jpg" />
            <div class="details">
              <h5>LKR.3,400/=</h5>              
            </div>
          </a>
          

          <a href="books.php">
            <img src="Images/Home Page/bestseller/book-6.jpg" />
            <div class="details">
              <h5>LKR.2,900/=</h5>              
            </div>
          </a>

          <a href="books.php">
            <img src="Images/Home Page/bestseller/book-7.jpg" />
            <div class="details">
              <h5>LKR.5,900/=</h5>              
            </div>
          </a>
          
          <a href="books.php">
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
      <br><br><br><br><br>
      
      <!--Review section-->
      <h2 class="text-center">OUR HAPPY CUSTOMERS</h2>
      <br><br><br><br>
      
      <!-- Review Slider -->
      <div id="carouselExampleControls" class="carousel slide text-center carousel-dark" data-mdb-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="rounded-circle shadow-1-strong mb-4" src="Images\Home Page\Testimonials\sn.jpeg" alt="avatar" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h5 class="mb-3">Sacith Nimendra</h5>
                <p>Freelancer</p>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                  nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                  fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                  doloremque.
                </p>
              </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
          
          <div class="carousel-item">
            <img class="rounded-circle shadow-1-strong mb-4" src="Images\Home Page\Testimonials\mf.jpeg" alt="avatar" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h5 class="mb-3">Mihiranga Fernando</h5>
                <p>Cricketer</p>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                  nesciunt sint eligendi reprehenderit reiciendis.
                </p>
              </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
          
          <div class="carousel-item">
            <img class="rounded-circle shadow-1-strong mb-4" src="Images\Home Page\Testimonials\rds.jpg" alt="avatar" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h5 class="mb-3">Raveen De Silva</h5>
                <p>Student</p>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                  nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                  fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                  doloremque.
                </p>
              </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
          
          <div class="carousel-item">
            <img class="rounded-circle shadow-1-strong mb-4" src="Images\Home Page\Testimonials\kd.jpeg" alt="avatar" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h5 class="mb-3">Kavindu Dilshan</h5>
                <p>Musician</p>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                  nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                  fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                  doloremque.
                </p>
              </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Review Slider Ends -->
      <br><br><br><br>

      <!--News Section-->
      <h2 class="text-center">OUR LATEST NEWS</h2>
      <br><br><br>
      
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="https://cdn.pixabay.com/photo/2016/02/09/08/01/null-1188489_1280.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
              <div class="card-body">
                <p class="card-text">
                  <small class="text-muted">03-05-2023</small>
                </p>
                <h5 class="card-title">Limited Time Sale</h5>
                <p class="card-text">Grab your books with discount limited time offer. This offer valid for certain categories</p>
                <a href="" class="card-link" style="text-decoration:none">Continue Reading</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card">
              <img src="https://cdn.pixabay.com/photo/2018/01/18/10/09/stop-3089945_1280.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
              <div class="card-body">
                <p class="card-text">
                  <small class="text-muted">09-06-2023</small>
                </p>
                <h5 class="card-title">Stop Wasting Your Time</h5>
                <p class="card-text">Booklr introduce new concept of delivering for suburbs and remote cities.</p>
                <a href="" class="card-link" style="text-decoration:none">Continue Reading</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card">
              <img src="https://cdn.pixabay.com/photo/2018/03/15/14/53/e-commerce-3228418_1280.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
              <div class="card-body">
                <p class="card-text">
                  <small class="text-muted">19-07-2023</small>
                </p>
                <h5 class="card-title">Secure Payment and Credentials Safe</h5>
                <p class="card-text">Booklr partner with most securable platform to provide secure payments.</p>
                <a href="" class="card-link" style="text-decoration:none">Continue Reading</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br><br><br>
      <!--News Section Ends-->









        
    <?php include "./footer.php"?>  
    
    <!--Bootstrap Java Script-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
  </body>
</html>