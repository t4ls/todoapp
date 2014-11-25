<?php
    define('HOST', 'localhost');
    define('USER', 'todo');
    define('PASSWORD', 'gitgud');
    define('DATABASE', 't4ls_todo');

    $db = new mysqli(HOST, USER, PASSWORD, DATABASE);

    function enforce_string_length($string, $length) {
        if (strlen($string) > $length) {
            return $string = substr($string, 0, $length);
        }
    }

    function add_user($username) {
    	global $db;

        enforce_string_length($username, 24);

    	$add_user = $db->prepare("INSERT INTO users(username)
    							  VALUES (?)");

    	$add_user->bind_attrib('s', $username);
    	$add_user->execute();
    	$add_user->close();
    }

    function add_task($description) {
        global $db;

        enforce_string_length($description, 200);

        $add_task = $db->prepare("INSERT INTO tasks(description)
                                  VALUES (?)");

        $add_task->bind_attrib('s', $description);
        $add_task->execute();
        $add_task->close();
    }

    function add_location($name) {
        global $db;

        enforce_string_length($name, 100);
    }
 ?>
