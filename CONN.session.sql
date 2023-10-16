-- Active: 1696626067491@@127.0.0.1@3306@mydatabise1
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabise1";

// Create connection
$conn = mysqli_select($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
echo "connected";

?>
