<!DOCTYPE html>
<?php
	
	$servername = "localhost";
	$username = "todo";
	$password = "monkey";
	$dbname = "t4ls_todo";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$arr = array();
	$ii = 0;
	$srows = mysqli_query($conn,"SELECT username FROM users");
	if ($srows->num_rows > 0) {
	        while($row = $srows->fetch_assoc()) {
	        $arr[$ii] = $row["username"];
	        $ii++;
	    	}
	}
	else {
	        echo "0 results, no users exist\n";
	}	
echo "Current number of users: ".count($arr);
$conn->close();
?>
<html>
<head>
<link rel="stylesheet" href="../style.css"/>
<script>
function validateLogin() {
    var x = document.forms["login"]["username"].value;
    if (x == "" || x==null) {
        alert("A username is required");
        return false;
    }
	var users = <?php echo json_encode($arr); ?>;
	for (jj=0; jj < users.length; jj++){
		if (users[jj]==x) {
		return true;
		}
	}
	alert("The username does not exist");
    return false;
}

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
</head>
<body>
<h1>Login</h1>
<form name="login" form action="welcome.php" onsubmit="return validateLogin();" method="post">
<div class="form_row"><span class="form_label">Username: </span><input type="text" name="username"></div>
<div class="form_row"><input type="submit" value="Submit"></div>
</form>

<h1>Create New User</h1>
<form name="newuser" form action="newuser.php" onsubmit="return validateNew();" method="post">
	<div class="form_row"><span class="form_label">Username: </span><input type="text" name="username"></div>
	<div class="form_row"><span class="form_label">First Name: </span><input type="text" name="first_name"></div>
	<div class="form_row"><span class="form_label">Last Name: </span><input type="text" name="last_name"></div>
	<div class="form_row"><span class="form_label">E-mail: </span><input type="text" name="email"></div>
<input type="submit" value="Submit">

</form>
</body></html>


