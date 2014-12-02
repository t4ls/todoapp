<!DOCTYPE html>
<?php
    require_once 'core.php';
    require_once 'db/db_interface.php';

	switch (get("action")) {
		case "add_user":
    		add_user(post("username"));
    		break;

    	case "update_user":
    		update_user(post("username"), post("email"), post("first_name"), post("last_name"));
    		break;

    	case "add_task":
    		add_task(post("description"));
    		break;

    	case "update_task":
    		update_task(post("description"), post("priority"), post("completed"), post("due"));
    		break;
	}
?>
<html>
	<head>
        <title><?php echo TITLE; ?></title>
        <link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<div class="container" id="wrapper">
	        <div class="box" id="header">
	        	<span class="title" id="title"><?php echo TITLE; ?></span>
	        	<span class="title" id="date"><?php echo get_date(); ?></span>
	        </div>
	        <div class="box" id="menu">
	        	<span class="menu_item" id="menu_add_user"><a href="index.php?page=add_user">Create User</a></span>
	        	<span class="menu_item" id="menu_login_user"><a href="newtask/login.php">Login</a></span>
	        </div>
	        <div class="container" id="content">
	        	<?php
	        		switch (get("page")) {
	        			case false:
	        				include 'main.php';
	        				break;

	        			case "add_user":
	        				include 'add_user.php';
	        				break;

	        			default:
	        				include 'not_found.php';
	        				break;
	        		}
	        	?>
	        </div>
		</div>
	</body>
</html>
