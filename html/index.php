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
	</body>
</html>