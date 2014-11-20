<?php
    define('HOST', 'localhost');
    define('USER', 'todo');
    define('PASSWORD', 'gitgud');
    define('DATABASE', 't4ls_todo');

    function connect() {
        global $db;

        $db = new mysqli(HOST, USER, PASSWORD, DATABASE);
    }
?>