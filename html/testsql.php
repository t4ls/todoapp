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

$name=$_POST["name"];
$email=$_POST["email"];


$sql = "INSERT INTO testmail (name,email)
VALUES ('$name','$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully\n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>





<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; 





$con = mysqli_connect("localhost","testuser","test623","testdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  echo "  Connected to MySQL"

?>







</body>
</html>
