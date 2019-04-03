<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "omega";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo $conn->connect_error;
}
?>
