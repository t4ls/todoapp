<!DOCTYPE html>
<?php
    require_once 'core.php'
?>
<html>
	<head>
        <title><?php echo TITLE; ?></title>
        <link rel="stylesheet" href="layout.css"/>
        <link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<div class="container">
	        <?php include_once 'header.php'; ?>
	        <?php include_once 'editor.php'; ?>
	        <?php include_once 'list.php'; ?>
	        <?php include_once 'footer.php'; ?>
		</div>
	<li><a href="http://t4ls.duckdns.org:8080/todoapp/html/newuser/">Add New User</a></li>	
		
	</body>
</html>
