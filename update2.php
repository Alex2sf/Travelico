<?php
// Include config file
require_once "config.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Define variables
$arrivals = $leaving = $guests = $name = $email = $phone = $address = $location = "";
$arrivals_err = $leaving_err = $guests_err = $name_err = $email_err = $phone_err = $address_err = $location_err = "";

// Processing
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Arrivals
    $input_arrivals = trim($_POST["arrivals"]);
    if (empty($input_arrivals)) {
        $arrivals_err = "Please enter an arrivals date";
    } else {
        $arrivals = $input_arrivals;
    }

    // Validate Leaving
    $input_leaving = trim($_POST["leaving"]);
    if (empty($input_leaving)) {
        $leaving_err = "Please enter a leaving date";
    } else {
        $leaving = $input_leaving;
    }

    // Validate Guests
    $input_guests = trim($_POST["guests"]);
    if (empty($input_guests)) {
        $guests_err = "Please enter the number of guests";
    } else {
        $guests = $input_guests;
    }

    // Validate Name
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter your name";
    } else {
        $name = $input_name;
    }

    // Validate Email
    $input_email = trim($_POST["email"]);
    if (empty($input_email)) {
        $email_err = "Please enter your email";
    } else {
        $email = $input_email;
    }

    // Validate Phone
    $input_phone = trim($_POST["phone"]);
    if (empty($input_phone)) {
        $phone_err = "Please enter your phone number";
    } else {
        $phone = $input_phone;
    }

    // Validate Address
    $input_address = trim($_POST["address"]);
    if (empty($input_address)) {
        $address_err = "Please enter your address";
    } else {
        $address = $input_address;
    }

    // Validate Location
    $input_location = trim($_POST["location"]);
    if (empty($input_location)) {
        $location_err = "Please enter your location";
    } else {
        $location = $input_location;
    }

    // Check errors
    if (empty($arrivals_err) && empty($leaving_err) && empty($guests_err) && empty($name_err) && empty($email_err) && empty($phone_err) && empty($address_err) && empty($location_err)) {
        // Prepare
        $sql = "UPDATE book_form SET arrivals=?, leaving=?, guests=?, name=?, email=?, phone=?, address=?, location=? WHERE id=?";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables
            mysqli_stmt_bind_param($stmt, "ssssssssi", $param_arrivals, $param_leaving, $param_guests, $param_name, $param_email, $param_phone, $param_address, $param_location, $param_id);

            // Set parameters
            $param_arrivals = $arrivals;
            $param_leaving = $leaving;
            $param_guests = $guests;
            $param_name = $name;
            $param_email = $email;
            $param_phone = $phone;
            $param_address = $address;
            $param_location = $location;
            $param_id = $_POST["id"];

            // Attempt
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to the index page
                header("location: table.php");
                exit();
            } else {
                echo "Something went wrong";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }

        // Close connection
        mysqli_close($conn);
    }
}

// Check if ID exists in the URL
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    // Get ID from the URL
    $id = trim($_GET["id"]);

    // Prepare statement
    $sql = "SELECT * FROM book_form WHERE id = ?";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Set parameter
        $param_id = $id;

        // Attempt to execute the statement
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                // Fetch data
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                // Retrieve data
                $arrivals = $row["arrivals"];
                $leaving = $row["leaving"];
                $guests = $row["guests"];
                $name = $row["name"];
                $email = $row["email"];
                $phone = $row["phone"];
                $address = $row["address"];
                $location = $row["location"];
            } else {
                // Redirect to the error page if no record is found
                header("location: error.php");
                exit();
            }
        } else {
            echo "Something went wrong";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($conn);
} else {
    // Redirect to the error page if no ID is provided
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update record</h2>
                    </div>
                    <p>Please edit.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER["REQUEST_URI"])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($arrivals_err)) ? 'has-error' : ''; ?>">
                            <label>Arrivals</label>
                            <input type="date" name="arrivals" class="form-control" value="<?php echo $arrivals; ?>">
                            <span class="help-block"><?php echo $arrivals_err ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($leaving_err)) ? 'has-error' : ''; ?>">
                            <label>Leaving</label>
                            <input type="date" name="leaving" class="form-control" value="<?php echo $leaving; ?>">
                            <span class="help-block"><?php echo $leaving_err ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($guests_err)) ? 'has-error' : ''; ?>">
                            <label>Guests</label>
                            <input type="text" name="guests" class="form-control" value="<?php echo $guests; ?>"readonly>
                            <span class="help-block"><?php echo $guests_err ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name;  ?>" readonly>
                            <span class="help-block"><?php echo $name_err ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>"readonly>
                            <span class="help-block"><?php echo $email_err ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>"readonly>
                            <span class="help-block"><?php echo $phone_err ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="<?php echo $address; ?>"readonly>
                            <span class="help-block"><?php echo $address_err ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($location_err)) ? 'has-error' : ''; ?>">
                            <label>Location</label>
                            <input type="text" name="location" class="form-control" value="<?php echo $location; ?>"readonly>
                            <span class="help-block"><?php echo $location_err ?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="table.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
