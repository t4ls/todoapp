<html>
<script> 
function validateNew() {
    var x = document.forms["newuser"]["username"].value;
    if (x == "" || x==null) {
        alert("A username is required");
        return false;
    }
    
    	var users = <?php echo json_encode($arr); ?>;
		for (jj=0; jj < users.length; jj++){
		if (users[jj]==x) {
		alert("That username already exists");
		return false;
		}
	}    

    var x = document.forms["newuser"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
    	alert("Not a valid e-mail address");
    	return false;
    }
    
    var x = document.forms["newuser"]["first_name"].value;
    if (x == "" || x==null) {
        alert("A first name is required");
        return false;
    }
    
    var x = document.forms["newuser"]["last_name"].value;
    if (x == "" || x==null) {
        alert("A last name is required");
        return false;
    }    

}
</script>
<link rel="stylesheet" href="../style.css"/>
</head>
<body>
<div class="box" id="menu">
        <span class="menu_item" id="menu_login_user"><a href="createtask.php">Create New Task</a></span>
        <span class="menu_item" id="menu_login_user"><a href="viewtask.php"> View Tasks</a></span>
        <span class="menu_item" id="menu_login_user"><a href="newtask/../.."> Homepage</a></span>
</div>
<?php
echo "<div class='task'><div class='form_row'>".$_POST['description']."</div>";
echo "<div class='form_row'".$_POST['priority']."</div>";
echo "<div class='form_row'>".$_POST['duedate']."</div></div>";

?>
<?php
session_start();
$servername = "localhost";
$username = "todo";
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
VALUES (\"$owner\",\"$description\",\"$priority\", \"$due\")";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully\n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
	
</body>
<html>
