<link rel="stylesheet" href="../style.css"/>
<div class="box" id="menu">
    <span class="menu_item" id="menu_login_user"><a href="createtask.php">Create New Task</a></span>
    <span class="menu_item" id="menu_login_user"><a href="newtask/../.."> Homepage</a></span>
</div>
<div class="container" id="content">
<?php 
session_start(); 
$username = $_SESSION['username'];
echo "<p>hello ".$username."</p>";
?>


<p class="ex">Sort By: <span class="menu_item" id="menu_login_user">
<a href="viewtask.php"> Priority</a></span>
<a href="bydate.php"> Due Date</a></span>

</p>

<head>
<style>
table, th, td {
	border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
<form name ="finishtask" form action="finishtask.php" onsubmit="return validatetask();" method="post">

<body>
<table style="width:100%">
  <tr>
    <th>Description</th>
    <th>Priority</th>       
    <th>Due Date</th>
  </tr>
<?php
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
$sql = "SELECT *
             FROM tasks
             WHERE completed = 0 
             ORDER BY priority DESC, due DESC
             LIMIT 50";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<tr>";
    while($row = $result->fetch_assoc()) {
        if($row["owner"]==$_SESSION['username']){
            $pieces = explode(" ", $row["due"]);
            echo "<tr>";
            $ta=$row["id"];
            ?><td><input type="radio" name="test" value=<?php echo $row["id"];?> >
            <?php
            echo " ".$row["description"]." </td> <td> ".$row["priority"]." </td> <td> ".$pieces[0] ;
            echo "</th></tr>";
        }
    }
    echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>
      <input type="submit" value="Complete Task"/>
</div>
</body>
