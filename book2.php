<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>book</title>

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
            <a href="book2.php">book</a>
            <a href="table.php">History</a>
            <a href="home.php">Log out</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars" onclick="navbar()"></div>

    </section>

    <!-- Header Section Ends -->

    <div class="heading" style="background: url(images/book1.jpg) no-repeat; color:aliceblue;" width:2000px; >
        <h1>book now</h1>
    </div>

    <!-- booking section starts -->

    <section class="booking">

        <h1 class="heading-title">book your trip!</h1>

        <form action="book_form.php" method= "post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your phone number" name="phone">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>destination :</span>
                    <select name="location">
                        <option value="Jakarta Amanjiwo">Jakarta Amanjiwa $2000 USD</option>
                        <option value="Bali Amanjiwo">Bali Amanjiwo $1500 USD</option>
                        <option value="Jakarta Kempinski">Jakarta Kempinski $250 USD</option>
                        <option value="Jakarta Mandarin Oriental">Jakarta Mandarin Oriental $150 USD</option>
                        <option value="Tokyo Aman">Aman resort - Tokyo $2500 USD</option>
                        <option value="Bali MAUA resort">MAUA resort - Bali $1750 USD</option>
                        <option value="Paris Hotel Du Louvre">Hotel Du Louvre - Paris $200 USD</option>
                        <option value="Rome Continental Hotel">Continental Hotel - Rome $2000 USD</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>ticket :</span>
                    <input type="number" placeholder="total ticket" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>

    </section>

    <!-- booking section ends-->














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