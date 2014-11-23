<?php
    define('HOST', 'localhost');
    define('USER', 'todo');
    define('PASSWORD', 'gitgud');
    define('DATABASE', 't4ls_todo');

    $db = new mysqli(HOST, USER, PASSWORD, DATABASE);

    function add_user($username) {
    	global $db;

    	$add_user = $db->prepare("INSERT INTO users (username)
    							  VALUES (?)");

    	$add_user->bind_attrib('s', $username);
    	$add_user->execute();
    	$add_user->close();
    }


 ?>