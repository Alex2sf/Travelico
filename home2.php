<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

   <!--  swiper css link-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Header Section Starts -->

<section class="header">

    <a href="home.php" class="logo">Travelico!™</a>

    <nav class="navbar">
            <a href="home2.php">home</a>
            <a href="about2.php">about</a>
            <a href="package2.php">package</a>
            <a href="book.php">book</a>
            <a href="table2.php">History</a>
            <a href="home.php">Log out</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars" onclick="navbar()"></div>

</section>

<!-- Header Section Ends -->

<!-- home section starts -->

<section class="home">

    <div class="swiper home-slider">
       
        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.png) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>explore beautiful destinations</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.png) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>experience unforgettable adventures</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        
    </div>

</section>

<!-- home section ends -->

<!-- Service section starts -->

<section class="service">

    <h1 class="heading-title"> our service </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/icon-1.png" alt="" width="70cm" height="70cm">
            <h3>adventure</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt=""  width="70cm" height="70cm">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt=""  width="70cm" height="70cm">
            <h3>tracking</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt=""  width="70cm" height="70cm">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="images/icon-5.png" alt=""  width="70cm" height="70cm">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="images/icon-6.png" alt=""  width="70cm" height="70cm">
            <h3>camping</h3>
        </div>

    </div>

</section>

<!-- Service section ends -->

<!-- home about section starts -->

<section class = "home-about">

    <div class="image">
        <img src="images/aboutus.jpg" alt="">
    </div>

    <div class="content">

        <h3>about us</h3>
        <p>
        Step into the world of Travelico! Discover a gateway to unforgettable journeys and extraordinary adventures. 
        As a leading travel agency, we are devoted to crafting exceptional travel experiences that exceed the norm. 
        With a strong dedication to excellence, personalization, and meticulous attention to detail, we bring your travel dreams to life!
        </p>
        <a href="about.php" class="btn">read more</a>

    </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts -->

    <section class="home-packages">

        <h1 class="heading-title"> our packages </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/japan.jpg" alt="">
                </div>
                <div class="content">
                <h3>Japan</h3>
                    <p>Japan presents a rich variety of travel destinations that harmoniously fuse ancient traditions, 
                    awe-inspiring natural landscapes, 
                    and state-of-the-art modern advancements.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/nusa.jpg" alt="">
                </div>
                <div class="content">
                    <h3>nusa penida</h3>
                    <p>Nusa Penida, a stunning island adjacent to Bali, 
                        captures the hearts of nature enthusiasts and those in search of excitement. Crystal Bay stands out with its exceptionally clear waters, 
                        creating a mesmerizing sight.
                    </p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/paris.jpg" alt="">
                </div>
                <div class="content">
                <h3>Paris</h3>
                        <p>Paris, the "City of Love" and French capital, 
                        overflows with iconic landmarks, artistry, and enchanting districts to discover. 
                        </p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>

    </section>

<!-- home packages section ends -->

<!-- home offer section starts -->

<section class="home-offer">

    <div class="content">
        <h3>upto 50% off</h3>
        <p>Seeking an unbeatable deal to quench your wanderlust? Your search ends here! 
            Travelico! proudly presents our remarkable up to 50% discount sale, 
            granting you the opportunity to explore the world's finest destinations at a fraction of the expense. 
            Don't pass up this exclusive chance to embark on your dream vacation without straining your budget.
        </p>
        <a href="book.php" class="btn">book now</a>
    </div>

</section>

<!-- home offer section starts -->


<!-- footer section starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i>book</a>
    
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask question</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> term of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 0895331568624 </a>
            <a href="#"> <i class="fas fa-phone"></i> 0897411785426 </a>
            <a href="#"> <i class="fas fa-envelope"></i> travelico!@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Jakarta, Indonesia - 16888 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> created by <span> Shidqa Shifyina </span> | Project Web Applicaton </div>

</section>

<!-- footer section ends -->











 <!-- swiper js file link -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

 <!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>