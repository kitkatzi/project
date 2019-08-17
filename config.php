<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$db = "new";


$conn = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($conn,"utf8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
*/


    $conn = mysqli_connect("localhost", "root", "", "new");

    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error($conn));
    }


?>