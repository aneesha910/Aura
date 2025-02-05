<?php
session_start();

// Debugging: Check if session is set
//var_dump($_SESSION);
//exit();

// If user is NOT logged in, redirect to login.php
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AURA</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900& &family=Mate:ital@0;1& &family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900& &display=swap" rel="stylesheet">
    <link rel= "stylesheet" href= "style 3.4.css">

</head>
<body>
    <section id="header">
        <a href="default.asp"><img src="image1.jpg" class="logo" alt="" style="width:70px;height:49px;"></a>
        <div>
            <ul id="navbar">
                <li><a class=active href="index.php">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p><b>Save more with coupons & up to 70% off!</b></p>
        <button>Shop Now</button>
    </section>


    <section id="product1" class="section-p1">
        <h2>Featured products</h2>
        <p>THE HERITAGE COLLECTION</p>
        <div class="pro-container">
            <div class="pro">
                <img src="image22.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1460</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image28.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1589</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image23.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1647</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image41.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1418</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image25.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1544</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image26.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1764</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image27.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1774</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image30.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1974</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Online Services</h4>
        <h2>Upto to <span>20% 0ff</span>-All Fine jewellery</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>WHITE WEDDINGS</p>
        <div class="pro-container">
            <div class="pro">
                <img src="image33.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1460</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image24.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1589</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image35.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1647</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image36.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1418</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image37.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1544</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image38.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1764</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image39.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1774</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image40.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1974</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Autumn/Spring 2024</h2>
        <p>we know the style</p>
        <div class="pro-container">
            <div class="pro">
                <img src="image44.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1460</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image45.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1589</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image46.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1647</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image47.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1418</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image48.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1544</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image49.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1764</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image50.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1774</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            <div class="pro">
                <img src="image51.jpg" alt="">
                <div class="des">
                    <spam>Aura</spam>
                    <h5>Embellished Chiffon Saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$1974</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            
            </div>
            
        </div>
    </section>

        
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="image17.jpg" alt="" style="width:170px;height:140px;">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="image11.jpg" alt="" style="width:170px;height:140px;">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
                <img src="image12.jpg" alt="" style="width:170px;height:140px;">
                <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="image15.jpg" alt="" style="width:170px;height:140px;">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="image14.jpg" alt="" style="width:170px;height:140px;">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Precious</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best Ready To Wear Saree is on sale at Aura</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Autumn/winter 2024</h4>
            <h2>buy 1 get 1 free</h2>
            <span>Winter is on sale at Aura</span>
            <button class="white">Learn More</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter collection -10% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>FINE JEWELLERY</h2>
            <h3>Bengal Royale</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>HIGH JEWELLERY</h2>
            <h3>Bengal Byzantine Broadway</h3>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers</span>.</p>
        </div>
        <div class="form">
            <input type="text" placeholder="your emailaddress">
            <button class="normal">Sign Up</button>

        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="image1.jpg" alt="" style="width:70px;height:49px;">
            <h4>Contact</h4>
            <p><strong>Address:</strong>100 plenty road,preston, Melbourne</p>
            <p><strong>Phone:</strong> +61 466466999</p>
            <p><strong>Hours:</strong> 10:00-18:00, Mon-Sat</p>
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
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign in</a>
            <a href="#">View cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track my Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
              <h4>Install App</h4>
              <p>From App Store or Google Play</p>
              <div class="row">
                  <img src="image59.jpg" alt="" style="width:120px;height:49px;">
                  <img src="image57.jpg" alt="" style="width:120px;height:49px;">
              </div>
              <p>Secured Payment Gateways</p>
              <img src="image58.jpg" alt="" style="width:270px;height:49px;">
        </div>

        <div class="copyright">
              <p>&copy; 2021,Tech2 etc - HTML CSS Ecommerce Template</p>
        </div>
    </footer>


    <script src="script.js"></script>
</body>
</html>