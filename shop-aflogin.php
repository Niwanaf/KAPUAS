<?php 
session_start();
include "db_conn.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="img/favicon.png" rel="shortcut icon">

    <link rel="stylesheet" href="style.css" />
    <title>Kapuas - Find Your Style</title>
  </head>
  <body>
    <section id="header">
    <a href="#"><img src="img/logos.png" alt="" width="20%"/></a>

      <div>
        <ul id="navbar">
          
          <li><a href="index-aflogin.php">Home</a></li>
          <li><a class="active" href="shop-aflogin.php">Shop</a></li>
          <li><a href="blog-aflogin.php">Blog</a></li>

          <li id="lg-bag">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
          </li>
          <?php
          $sel = "SELECT * FROM users WHERE id = $_SESSION[id]";
          $query = mysqli_query($conn, $sel);
          $tampil = mysqli_fetch_assoc($query);
           ?>
          <li>
            <a href="#">Hello <?= $tampil['user_name']; ?></a>
          </li>
          <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
          <a href="#"><i class="far fa-times" id="close"></i></a>
          
          
        </ul>
      </div>
      
      <div id="mobile">
        <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
        <a href="#"><i id="bar" class="fas fa-outdent"></i> </a> 
      </div>
    </section>

    <section id="page-header">
      <h2>Super Value Deal</h2>

      <p>Save more with coupons & up to 50% off!</p>
    </section>

    <section id="product1" class="section-p1">
      <div class="pro-container">
        <div class="pro" onclick="window.location.href='sproduct-aflogin.php'">
          <img src="img/products/f1.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/f2.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/f3.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/f4.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/f5.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/f6.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/f7.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/f8.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
      </div>

      <div class="pro-container">
        <div class="pro">
          <img src="img/products/n1.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/n2.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/n3.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/n4.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/n5.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/n6.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/n7.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="img/products/n8.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astrounout</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
      </div>
    </section>

    <section id="pagination" class="section-p1">
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
    </section>
    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up for Newslater</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers</span></p>
      </div>

      <div class="form">
        <input type="text" placeholder="Your E-mail Address" />
        <button class="normal">Sign Up</button>
      </div>
    </section>
    <footer class="section-p1">
      <div class="col">
          <img class="logo" src="img/logos.png" alt="" width="30%">
          <h4>Contact</h4>
          <p><strong>Address: </strong> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, quasi.</p>
          <p><strong>Phone:</strong> +22 2222 222 /(+62) 01 2345 6789</p>
          <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
          <div class="follow">
              <h4>Follow us</h4>
              <div class="icon">
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-instagram"></i>
                  <i class="fab fa-pinterest-p"></i>
                  <i class="fab fa-youtube"></i>
              </div>
          </div>
      </div>
      <div class="col">
          <h4>About</h4>
          <a href="#">About us</a>
          <a href="#">Delivery information</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>
      </div>
      <div class="col">
          <h4>My Account</h4>
          <a href="#">Sign In</a>
          <a href="#">View Cart</a>
          <a href="#">My Wishlist</a>
          <a href="#">Track My Order</a>
          <a href="#">Help</a>
      </div>
      <div class="col install">
          <h4>Install App</h4>
          <p>From App Store or Google Play</p>
          <div class="row">
              <img src="img/pay/app.jpg" alt="">
              <img src="img/pay/play.jpg" alt="">
          </div>
          <p>Secured Payment Gateways </p>
          <img src="img/pay/pay.png">
      </div>
      <div class="copyright">
          <p>&copy; 2022, KAPUAS  </p>
      </div>
     </footer>
    <script src="script.js"></script>
  </body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>