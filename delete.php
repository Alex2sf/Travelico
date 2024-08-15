<?php
//proces
if(isset($_POST["id"]) && !empty($_POST["id"])){
    //incld
    require_once "config.php";

    //prepare
    $sql = "DELETE FROM book_form WHERE id = ?";

    if($stmt = mysqli_prepare($conn, $sql)){
        //bind
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        //set parameter
        $param_id = trim($_POST["id"]);

        //atempt
        if(mysqli_stmt_execute($stmt)){
            //record
            header("Location: table.php");
            exit();
        } else{
            echo "oops ! something gonna wrong hohoho.";
        }
    }

    //close statement
    mysqli_stmt_close($stmt);

    //close connection
    mysqli_close($conn);
} else {
    //cek
    if(empty(trim($_GET["id"]))){
        //url
        header("Location: error.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background-image: url(images/test.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            max-width: 500px;
            width: 100%;
            padding: 20px;
            background-color: rgba(255, 192, 203, 0.8); /* Pink color with semi-transparent background */
            border-radius: 5px;
            filter: none; /* Remove blur effect inside the form box */
        }
        
        /* Adjust button width and spacing */
        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }
        
        .btn {
            flex: 1;
            margin: 0 5px; /* Add margin to separate buttons */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="page-header text-center">
            <h2>Delete Your Reservation?</h2>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="alert alert-danger fade in">
                <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>">
                <p class="text-center">Are you sure you want to delete the reservation?</p>
                <div class="btn-container">
                    <input type="submit" value="Yes" class="btn btn-danger">
                    <a href="table.php" class="btn btn-default">No</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
