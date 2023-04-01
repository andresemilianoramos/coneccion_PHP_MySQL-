<?php
$servername = "localhost";
$database = "andram64_andram64";
$username = "andram64_andram64";
$password = "Andres123.";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>