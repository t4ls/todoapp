<!DOCTYPE html>
<html>
<head>
<p> Login or create a new user </p>
<br>


<script>
function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x == "" || x==null) {
        alert("A username is required");
        return false;
    }
}
</script>

</head>

<body>

<h3>Login</h3>
<form name="myForm" form action="welcome.php" onsubmit="return validateForm();" method="post">
username: <input type="text" name="username"><br>
<input type="submit" value="Submit">
</form>
<br><br>

<h3>New User</h3>
<form action="newuser.php" onsubmit="return validateForm();" method="post">
username: <input type="text" name="username"><br>
first name: <input type="text" name="first_name"><br>
last name: <input type="text" name="last_name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" value="Submit">

</form>
</body></html>


