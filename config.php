<?php
$db_host = 'localhost';
$db_user = 'root';
$port = 3306;
$db_pass = '';
$db_name = 'book_db'; 

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name , $port);

if (!$conn) {
    die( mysqli_connect_error());
}else
{
    echo"";
}


