<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crave Wave</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <section id="header">
            <a href="#"><img src="../img/logoo3.png" class="logo" alt=""></a>
            <div>
                <ul id="navbar">
                <li><a href="http://localhost/cwmp/home">Home</a></li>
                    <li><a class="active" href="http://localhost/cwmp/menu">Menu</a></li>
  
                    <li><a href="http://localhost/cwmp/about">About</a></li>
                    <li><a href="http://localhost/cwmp/contact.php">Contact</a></li>
                    <li><a href="http://localhost/cwmp/bmicalc">Bmicalc</a></li>
                    <li><a href="http://localhost/cwmp/login">Login</a></li>
                    <li><a href="http://localhost/cwmp/signup">Signup</a></li>
                    <i class="far fa-shopping-bag" id="cart-icon"></i>
                </ul>
                <div id="cart" class="yourcart">
                    <h2 class="cart-title">Your cart</h2>
                    <div class="cart-content">
                        
                    </div>
                    <div class="total">
                        <div class="total-title">Total</div>
                        <div class="total-price">Rs.0</div>
                    </div>
                    <button onclick="window.location.href='pay.php';" type="button" class="btn-buy">Buy Now</button>
                    <i class="far fa-times" id="close-cart"></i>
                </div>
            </div>
        </section>

        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img id="product-img" class="product-img" src="../img/cnr.png" width="100%" id="MainImg" alt="">
            </div>

            <div class="single-pro-details">
                <h6>Home / Meals</h6>
                <h4 class="product-title">Chicken and Rice</h4>
                <h2 class="price">Rs.100</h2>
                <select>
                    <option>Customize</option>
                    <option>Double Meat</option>
                    <option>Extra Spicy</option>
                    <option>Dip sauce</option>
                </select>
                <!-- <input type="number" value="1"> -->
                <button id="addtocart-btn">Add To Cart</button>
                <h4>Meal Details</h4>
                <span>Chicken and rice is a common mouth watering food combination in several cultures which have both chicken and rice as staple foods.
                    <img src="../img/p11.png" alt="">
                </span>
            </div>
            
        </section>

        <section id="product1" class="section-p1">
            <h1>Popular Meals</h1>
            <div class="pro-container">
                <div class="pro" onclick="window.location.href='biryani.php';">
                    <img src="../img/biryani.png" alt="">
                    <div class="des">
                        <h5>BIRYANI</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rs.100</h4>
                    </div>
                    <!-- <a href="#"><i class="fal fa-shopping-cart cart"></i></a> -->
                </div>
                <div class="pro" onclick="window.location.href='shawarma.php';">
                    <img src="../img/shawarma.png" alt="">
                    <div class="des">
                        <h5>SHAWARMA</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rs.100</h4>
                    </div>
                    <!-- <a href="#"><i class="fal fa-shopping-cart cart"></i></a> -->
                </div>
                <div class="pro" onclick="window.location.href='soyasalad.php';">
                    <img src="../img/soyasalad.png" alt="">
                    <div class="des">
                        <h5>SOYA CHUNKS SALAD</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rs.100</h4>
                    </div>
                    <!-- <a href="#"><i class="fal fa-shopping-cart cart"></i></a> -->
                </div>
                <div class="pro" onclick="window.location.href='chickpeasalad.php';">
                    <img src="../img/chickpea.png" alt="">
                    <div class="des">
                        <h5>CHICKPEA SALAD</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rs.100</h4>
                    </div>
                    <!-- <a href="#"><i class="fal fa-shopping-cart cart"></i></a> -->
                </div>
            </div>
        </section>
  
        <footer class="section-p1">
            <div class="col">
                <img  class="logo" src="../img/logoo3.png" alt="">
                <h4>Contact</h4>
                <p><strong>Address:</strong>   Nirmal Nagar Police Station Marg, Nirmal Nagar, Bandra East, Mumbai, Maharashtra 400051 </p>
                <p><strong>Phone:</strong>   022 29647361</p>
                <p><strong>Hours:</strong>   Everyday: 10:00am-11:00pm</p>
                <div class="follow">
                    <h4>Follow Us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>


            <div class="col">
                <h4>About Us</h4>
                <a href="#">About Us</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Contact Us</a>
            </div>


            <div class="col">
                <h4>My Account</h4>
                <a href="#">Sign in</a>
                <a href="#">View Cart</a>
                <a href="#">Track my order</a>
                <a href="#">Help</a>
            </div>

            <div class="col">
                <h4> Payments</h4>
                <img src="../img/payment.png" alt="">
            </div>
            
        </footer>


        <script src="main.js"></script>
    </body>

</html>