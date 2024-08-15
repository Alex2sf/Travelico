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
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper {
            width: 950px;
            margin: 0 auto;
        }

        table tr td:last-child a {
        margin-right: 10px;
    }

    /* Menggunakan kelas w-25, w-50, dll. untuk mengatur lebar kolom */
    table tr td {
        word-wrap: break-word;
    }
    
        .page-header h2 {
            margin-top: 0;
        }

        table tr td:last-child a {
            margin-right: 10px;
        }

        /* Menyesuaikan lebar kolom menjadi 300px */
        table tr td {
            width: 300px;
            word-wrap: break-word;
            border: 1px solid #dddddd;
            padding: 5px;

        }

        .delete-btn {
            color: red !important;
    margin-right: 5px;
    margin-left: 5px; 
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
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
<div class="heading" style="background: url(images/table.jpg) no-repeat; color:aliceblue;" width:3000px; >
        <h2>Welcome To Admin Page</h2>
    </div>
    <section class="purchase">

    <h2>your Booking</h2>
    <table>
    <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Location</th>
            <th>Guests</th>
            <th>Arrivals</th>
            <th>Leaving</th>
            <th>Total Price</th>    
            <th>Action</th>
        </tr>
        <?php include 'table_form.php';?>
    </table>

    </section>
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
