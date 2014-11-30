<?php
$servername = "localhost";
$username = "testuser";
$password = "test623";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "Truncate table testmail";

if ($conn->query($sql) === TRUE) {
    echo "table cleared successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
