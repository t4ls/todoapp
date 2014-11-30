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

$username=$_POST["username"];
$email=$_POST["email"];
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];



$sql = "INSERT INTO users (name, email, last_name, first_name)
VALUES ('$name','$email','$last_name', '$first_name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully\n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>





<html>
<body>

Welcome <?php echo $_POST["first_name"] $_POST["last_name"] ; ?><br>
Your username is: <?php echo $_POST["username"]; ?>




</body>
</html>
