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
$sql = "SELECT name, email FROM testmail";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
