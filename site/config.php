<?php 

$server = "localhost";
$user = "root";
$pass = "cigareta";
$database = "capstone";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>