<?php 
session_start(); 
$username = $_SESSION['username'];
echo "hello ".$username;


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
$sql = "SELECT id, description, owner
			 FROM tasks
			 WHERE completed = 0 
			 ORDER BY priority DESC, due DESC
			 LIMIT 50";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	if($row["owner"]==$_SESSION['username']){
				echo '<li class="task" id="'.$row["id"].'"">';
				echo $row["description"];
				echo '</li>';
		}
    }
} else {
    echo "0 results";
}
$conn->close();
?>
	<div class="box" id="menu">
	    <span class="menu_item" id="menu_login_user"><a href="createtask.php">Create New Task</a></span>
	</div>