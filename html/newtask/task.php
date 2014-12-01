
<?php
echo $_POST['description']."<br>";
echo $_POST['priority']."<br>";
echo $_POST['duedate']."<br>";

?>
<?php
session_start();
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

$owner = $_SESSION['username'];
$description = $_POST['description'];
$priority = $_POST['priority'];
$due = $_POST['duedate'];


$sql = "INSERT INTO tasks (owner, description, priority, due)
VALUES ('$owner','$description','$priority', '$due')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully\n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
	<div class="box" id="menu">
	    <span class="menu_item" id="menu_login_user"><a href="createtask.php">Create New Task</a></span>
		 <span class="menu_item" id="menu_login_user"><a href="viewtask.php"> View Tasks</a></span>
	</div>

