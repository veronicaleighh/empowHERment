<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> empowHERment: Beauty, Health and Wellness </title>
    <link rel="stylesheet" href="lpstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="img/favicon2.png">
</head>

<body>

<!-- header -->
    <header>
        <div class = "logo"> <a href="homepage.php"><img src="img/empowherment.png"></a> </div>
        <label for="menu-bar" class='bx bx-menu'></label>
        
        <nav class="navbar">
            <a href="homepage.php"> Home </a>
            <a href="Beauty.php"> Beauty </a>
            <a href="Health_Wellness.php"> Health and Wellness </a>
            <a href="#products"> Products </a>
            <a href="AboutUs.php"> About Us </a>
            <a href="registration.php"> Register </a>
            <!-- cart icon -->
            <i class='bx bx-cart' id="cart-icon"></i>
            <!-- cart -->
            <div class="cart">
                <h2 class="cart-title"> Your Cart </h2>
                <!-- content -->
                <div class="cart-content">


            </div>

             <!--total-->
             <div class="total">
                <div class="total-title">TOTAL:</div>
                <div class="total-price">$0</div>
             </div>
             <!--buy button-->
             <button type="button" class="btn-buy">Buy Now</button>
             <!--CartClose-->
             <i class='bx bx-x' id="close-cart" ></i>
        </div>
    </div>

        </nav>
        </nav>
    </header>


<!-- home section -->
<section class="home" id="home"> 
    <div class="home-text"> 
        <h1> Self-care is not selfish, <br> <span> it's necessary. </span> </h1>
        <p>It is never wrong to prioritize yourself. <br> Always put yourself first and allow yourself plenty of time for self-care. </p>

        <a href="#" class="btn"> Shop Now </a>
    </div>
</section>

<!-- products -->
<section class="products" id="products">
    <div class="heading">
        <h2> Our Products </h2>
        <p>Investing in yourself is the best investment you can make.</p>
       
    </div>

    <!-- Skincare -->
    <div class="title-product">
            <h2> Skincare </h2>
    </div>
        
        <div class="product-container">
            <div class="box">
                <img src="img/skincare1.jpg" alt="" class="product-img">
                <div class="content">
                    <h2 class="product-title"> Body Exfoliating Set </h2>
                    <span class="price"> $45 </span>
                    <i class='bx bx-cart' ></i>
                </div>
            </div>

            <div class="box">
                <img src="img/skincare2.jpg" alt="" class="product-img">
                <div class="content">
                    <h2 class="product-title"> Facial Cleanser and Serum Set </h2>
                    <span class="price"> $30 </span>
                </div>
                <i class='bx bx-cart' ></i>
            </div>

            <div class="box">
                <img src="img/skincare3.jpg" alt="" class="product-img">
                <div class="content">
                    <h2 class="product-title"> Body Soap </h2>
                    <span class="price"> $25 </span>
                </div>
                <i class='bx bx-cart' ></i>
            </div>

            <div class="box">
                <img src="img/skincare4.jpg" alt="" class="product-img">
                <div class="content">
                    <h2 class="product-title"> Moisturizer Set </h2>
                    <span class="price"> $35 </span>
                </div>
                <i class='bx bx-cart' ></i>
            </div>
        </div>

        <br> 
        <br>
        <br> 

    <!-- Make-Up -->
    <div class="title-product">
        <h2> Make-Up </h2>
    </div>
    
    <div class="product-container">
        <div class="box">
            <img src="img/makeup1.jpg" alt="" class="product-img">
            <div class="content">
                <h2 class="product-title"> Face Foundation </h2>
                <span class="price"> $20 </span>
                <i class='bx bx-cart' ></i>
            </div>
        </div>

        <div class="box">
            <img src="img/makeup2.jpg" alt="" class="product-img">
            <div class="content">
                <h2 class="product-title"> Face Oil with Brush </h2>
                <span class="price"> $25 </span>
            </div>
            <i class='bx bx-cart' ></i>
        </div>

        <div class="box">
            <img src="img/makeup3.jpg" alt="" class="product-img">
            <div class="content">
                <h2 class="product-title"> Nude Eyeshadow Palette </h2>
                <span class="price"> $12 </span>
            </div>
            <i class='bx bx-cart' ></i>
        </div>

        <div class="box">
            <img src="img/makeup4.jpg" alt="" class="product-img">
            <div class="content">
                <h2 class="product-title"> Red Lipstick </h2>
                <span class="price"> $15 </span>
            </div>
            <i class='bx bx-cart' ></i>
        </div>
    </div>
  

    <br>
    <br>
    <br>
    
    <!-- Health and Wellness  -->
    <div class="title-product">
        <h2> Health and Wellness </h2>
    </div>
    
    <div class="product-container">
        <div class="box">
            <img src="img/health1.jpg" alt="" class="product-img">
            <div class="content">
                <h2 class="product-title"> Dietary Supplement Gummies </h2>
                <span class="price"> $15 </span>
                <i class='bx bx-cart' ></i>
            </div>
        </div>

        <div class="box">
            <img src="img/health2.jpg" alt="" class="product-img">
            <div class="content">
                <h2 class="product-title"> Wellness Kit </h2>
                <span class="price"> $40 </span>
            </div>
            <i class='bx bx-cart' ></i>
        </div>

        <div class="box">
            <img src="img/health5.jpg" alt="" class="product-img">
            <div class="content">
                <h2 class="product-title"> Collagen Supplement </h2>
                <span class="price"> $20 </span>
            </div>
            <i class='bx bx-cart' ></i>
        </div>

        <div class="box">
            <img src="img/health4.jpg" alt="" class="product-img">
            <div class="content">
                <h2 class="product-title"> Vitamin Supplement </h2>
                <span class="price"> $15 </span>
            </div>
            <i class='bx bx-cart' ></i>
        </div>
    </div>
</section>

    <!-- About Us -->
    <section class="about" id="about">
        <div class="heading-text">
            <h2> About Us </h2>
        </div>

        <div class="about-container">
            <div class="about-img">
                <img src="img/women.jpg" alt="Women">
            </div>

            <div class="about-text">
                <p> <b> empowHERment </b> is a website dedicated to empowering and inspiring women to prioritize their self-care and well-being. Our goal is to provide women with the tools and resources they need to take care of themselves physically, mentally, and emotionally despite having busy lives. We offer a variety of resources, including products that can help them improve their lives and information on how to better take care of themselves in different aspects. <br> <br> Join us as we work towards promoting a world where women can thrive and lead healthy, fulfilling lives. </p>
                <a href="AboutUs.php" class="btn"> Learn More </a>
            </div>
        </div>
    </section>

    <!-- Additional -->
    <section class="features" id="features">
        <div class="features-container">
            <div class="features-box">
                <i class='bx bxs-brain'></i>
                <h2> Your Health Matters </h2>
                <p>A woman's health is her capital.</p>
                 </div>

            <div class="features-box">
                <i class='bx bxs-happy'></i>
                <h2> Feel Empowered </h2>
                <p>There is no limit to what a WOMAN can accomplish.</p>
                </div>

            <div class="features-box">
                <i class='bx bxs-heart-circle'></i>
                <h2> Take Care of Yourself </h2>
                <p>Do something for yourself that your future self will thank you for.</p>
                </div>
        </div>
    </section>

    <!-- Quote -->
    <section class="ender">
        <div class="ender-text">
            <h2> A healthy woman is an unstoppable force. </h2>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                    <div class="footer-col">
                        <h4> Company </h4>
                        <ul> 
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h4> Get Help </h4>
                        <ul> 
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Order Status</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-col">
                        <h4>Shop Now</h4>
                        <ul>
                            <li><a href="#products">Skincare</a></li>
                            <li><a href="#products">Make-Up</a></li>
                            <li><a href="#products">Health and Wellness</a></li>
                        </ul>
                    </div>

                    <div class="footer-col">
                        <h4> Follow Us </h4>
                        <div class="social-links">
                            <ul> 
                                <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                                <a href="#"><i class='bx bxl-twitter' ></i></a>
                                <a href="#"><i class='bx bxl-instagram' ></i></a>
                                <a href="#"><i class='bx bxs-envelope' ></i></a>
                            </ul>
                        </div>
                    </div>
            </div>
            <p> Copyright &copy; 2023 </p>
        </div>
    </footer>

    </body>
</html>


<!-- javascript -->
<!--link to js-->
<script src="main.js" defer></script>










