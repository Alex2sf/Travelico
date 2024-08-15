<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (!$connection) {
    die('Koneksi ke database gagal: ' . mysqli_connect_error());
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($connection, $_POST['update']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $location = mysqli_real_escape_string($connection, $_POST['location']);
    $guests = mysqli_real_escape_string($connection, $_POST['guests']);
    $arrivals = mysqli_real_escape_string($connection, $_POST['arrivals']);
    $leaving = mysqli_real_escape_string($connection, $_POST['leaving']);

    // Lakukan query untuk mengupdate data berdasarkan $id
    $request = "UPDATE book_form SET name='$name', email='$email', phone='$phone', address='$address', location='$location', guests='$guests', arrivals='$arrivals', leaving='$leaving' WHERE id='$id'";
    $updateResult = mysqli_query($connection, $request);

    if (!$updateResult) {
        die('Query update gagal: ' . mysqli_error($connection));
    }
}


$request = "SELECT * FROM book_form";
$result = mysqli_query($connection, $request);

if (!$result) {
    die('Query select gagal: ' . mysqli_error($connection));
}

// Tutup koneksi setelah selesai menggunakan database
mysqli_close($connection);

if (mysqli_num_rows($result) > 0) {
    // Loop through the rows of data and display them in the table
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["location"] . "</td>";
        echo "<td>" . $row["guests"] . "</td>";
        echo "<td>" . $row["arrivals"] . "</td>";
        echo "<td>" . $row["leaving"] . "</td>";
        echo "<td>" . $row['total_price'] . "</td>"; // Menampilkan Total Price

        echo "<td>";
        // Update button
        echo "<a href='update.php?id=" . $row['id'] . "' title='Update Record' data-toggle='tooltip' class='btn btn-primary update-btn'>
            <span class='glyphicon glyphicon-pencil'></span> Update</a>";

        // Delete button with red icon
        echo "<a href='delete.php?id=" . $row['id'] . "' title='Delete Record' data-toggle='tooltip' class='delete-btn'>
            <span class='glyphicon glyphicon-trash'></span></a>";
        
        // Delete form with hidden input
        // echo "<form action='book_form.php' method='post'>";
        // echo "<input type='hidden' name='delete' value='" . $row['id'] . "'>";
        // echo "<button type='submit' class='btn btn-danger'>Delete</button>";
        // echo "</form>";
        
        echo "</td>";
        echo "</tr>";
    }
} else {
    // Display a message if no data is found
    echo "<tr><td colspan='9'>Tidak ada data yang ditemukan.</td></tr>";
}

?>
