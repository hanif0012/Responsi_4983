<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "db_multilogin_4983"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>