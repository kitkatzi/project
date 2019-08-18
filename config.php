<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$db = "new";
*/

$conn = mysqli_connect("localhost", "root", "", "new");
mysqli_set_charset($conn,"utf8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>