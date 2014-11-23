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

    private function set_attrib($table, $attrib, $type, $value) {
        global $db;

        $set_attrib = $db->prepare("UPDATE $table
                                    SET $attrib = ?");

        $set_attrib->bind_param($type, $value);
        $set_attrib->execute();
        $set_attrib->close();
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

        $add_location = $db->prepare("INSERT INTO locations(name)
                                      VALUES (?)");

        $add_location->bind_attrib('s', $name);
        $add_location->execute();
        $add_location->close();
    }

    function set_user_name($id, $first, $last) {
        enforce_string_length($last, 100);
        enforce_string_length($first, 100);
        set_attrib("user", "first", 's', $first);
        set_attrib("user", "last", 's', $last);
    }

    function set_task_due($id, $year, $month = 1, $day = 1, $hour = 0, $minute = 0) {
        
    }
 ?>
