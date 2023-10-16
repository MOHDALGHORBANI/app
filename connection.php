<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabise1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_select_db($conn,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
echo "connected";

?>
