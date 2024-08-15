<?php
// menyertakan file program koneksi.php pada register
require('config.php');
// inisialisasi session
session_start();
$error = '';
$validate = '';

// mengecek apakah form registrasi di submit atau tidak
if (isset($_POST['submit'])) {
    // menghilangkan backshlases
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    // cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
    if (!empty(trim($email)) && !empty(trim($password))) {
        // insert data ke database (tanpa hashing password)
        $query = "INSERT INTO user (email, password) VALUES ('$email', '$password')";
        $result = mysqli_query($conn, $query);
        // jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data email ke session
        if ($result) {
            $_SESSION['email'] = $email;
            header('Location: login.php');
        } else {
            $error = 'Register User Gagal !!';
        }
    } else {
        $error = 'Data tidak boleh kosong !!';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="RegisterStyle.css">
</head>

<body>
<div class="wrapper">
                <form  action="register.php" method="POST">
                    <?php if ($error != '') { ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>
                    <h1>Register</h1>


                    <div class="input-box">
                        <input type="email" placeholder="Email"class="form-control" id="InputEmail" name="email" aria-describedby="emailHelp" placeholder="Masukkan email">
                        <i class='bx bxs-user'></i>
                    </div>

                    
                    <div class="input-box">
                        <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password">
                        <?php if ($validate != '') { ?>
                            <p class="text-danger"><?= $validate; ?></p>
                        <?php } ?>
                        <i class='bx bxs-lock-alt'></i>

                    </div>
                    <button type="submit" name="submit" class="btn">Register</button>


                    <div class="Login-link">
        <p>Do you have account? 
            <a 
          href="login.php">Login</a></p>

      </div>
                </form>
            </section>
        </section>
    </section>
</body>

</html>
