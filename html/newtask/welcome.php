<link rel="stylesheet" href="../style.css"/>
<div class="box" id="menu">
    <span class="menu_item" id="menu_login_user"><a href="createtask.php">Create New Task</a></span>
	<span class="menu_item" id="menu_login_user"><a href="viewtask.php"> View Tasks</a></span>
	<span class="menu_item" id="menu_login_user"><a href="newtask/../.."> Homepage</a></span>
</div>
<p>
	<?php 
	session_start(); 
	$_SESSION['username'] = $_POST['username'];
	?>
	Welcome <?php echo $_SESSION['username']; ?><br>
</p>