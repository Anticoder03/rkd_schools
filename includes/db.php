<?php
$host = "localhost";
$user = "root";          // change if needed
$pass = "";              // change if needed
$db   = "rkd_school";    // your database name

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
