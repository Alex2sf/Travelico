<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');



// Periksa koneksi berhasil atau tidak
if (!$connection) {
    die('Koneksi ke database gagal: ' . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    // Membersihkan data dari potensi SQL injection
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $location = mysqli_real_escape_string($connection, $_POST['location']);
    $guests = mysqli_real_escape_string($connection, $_POST['guests']);
    $arrivals = mysqli_real_escape_string($connection, $_POST['arrivals']);
    $leaving = mysqli_real_escape_string($connection, $_POST['leaving']);

    // Definisikan harga untuk setiap lokasi
    $locationPrices = array(
        "Jakarta Amanjiwo" => 2000,
        "Bali Amanjiwo" => 1500,
        "Jakarta Kempinski" => 250,
        "Jakarta Mandarin Oriental" => 150,
        "Tokyo Aman" => 2500,
        "Bali MAUA resort" => 1750,
        "Paris Hotel Du Louvre" => 200,
        "Rome Continental Hotel" => 2000
    );

    // Hitung total harga berdasarkan lokasi yang dipilih dan jumlah guests

    $totalPrice = $locationPrices[$location] * $guests;

    // Gunakan Prepared Statements untuk menghindari SQL injection
    $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving, total_price)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $request);
    mysqli_stmt_bind_param($stmt, "ssssssssi", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving, $totalPrice);

    // Eksekusi Prepared Statements
    if (mysqli_stmt_execute($stmt)) {
        echo "Data berhasil dimasukkan.";
        header('Location: book.php');
    } else {
        echo "Gagal memasukkan data: " . mysqli_stmt_error($stmt);
    }

    // Tutup statement
    mysqli_stmt_close($stmt);
} else {
    echo 'Formulir belum di-submit, silakan coba lagi';
}

// Tutup koneksi setelah selesai menggunakan database
mysqli_close($connection);

?>
