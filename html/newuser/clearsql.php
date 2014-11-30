<?php
$servername = "localhost";
$username = "root";
$password = "monkey";
$dbname = "t4ls_todo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "Truncate table users";

if ($conn->query($sql) === TRUE) {
    echo "table cleared successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
