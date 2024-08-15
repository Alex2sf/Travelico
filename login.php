<?php
session_start(); // Make sure to start the session

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        // Validate email and password
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        // Replace these with actual valid credentials
        $validEmail = "admin@gmail.com";
        $validPassword = "admin";

        if ($email === $validEmail && $password === $validPassword) {
            // Redirect to dashboard or home page
            header("Location: table.php");
            exit();
        } else {
            // Include your database connection code here
            $conn = mysqli_connect("127.0.0.1", "root", "", "book_db");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            // Check if email and password fields are not empty
            if (!empty(trim($email)) && !empty(trim($password))) {
                // Query to check if email and password match a valid user
                $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
                $result = mysqli_query($conn, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    $_SESSION['email'] = $email;
                    header('Location: book.php');
                } else {
                    $error = 'Invalid email or password.';
                }
            } else {
                $error = 'Data cannot be empty.';
            }
            
            mysqli_close($conn);
        }
    } else {
        // Redirect back to login with error message
        header("Location: login.html?error=1");
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="LoginStyle.css">
</head>
<body>
<div class="wrapper">
        <form action="login.php" method="post">
        <h1>Login</h1>

        <div class="input-box">

                <input type="email" id="email" name="email" required>
                <i class='bx bxs-user'></i>


        </div>    

        <div class="input-box">


                <input type="password" id="password" name="password" required>
                <i class='bx bxs-lock-alt'></i>

        </div>
            <button type="submit" class="btn" name="submit">Login</button>

      <div class="register-link">
        <p>Don't have an account? 
        <a href="register.php">Register</a></p>

      </div>
        </form>
        
        <?php
            if (isset($_GET["error"])) {
                echo "<p class='error'>Invalid email or password.</p>";
            }
            if (isset($error)) {
                echo "<p class='error'>$error</p>";
            }
        ?>
    </div>
</body>
</html>
