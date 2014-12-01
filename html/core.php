<?php
	define('TITLE', "To Do");

	function get_sql_datetime() {
		return date("Y-m-d H:i:s");
	}

	function get_sql_datetime_from_string($string) {
		$datetime = strtotime($string);
		return date("Y-m-d H:i:s", $datetime);
	}

	function get_date() {
		return date("j-M-Y");
	}

	function get_presentational_datetime_from_string($string) {
		$datetime = strtotime($string);
		return date("j-M-Y g:i", $datetime);
	}

	/* Uses the GET protocol and returns a string if the key was found, or a boolean if it wasn't. */
	function get($key, $default = false) {
		if (isset($_GET[$key]) && !empty($_GET[$key])) {
			return $_GET[$key];
		} else {
			return $default;
		}
	}

	function post($key, $default = false) {
		if (isset($_POST[$key]) && !empty($_POST[$key])) {
			return $_POST[$key];
		} else {
			return $default;
		}
	}
?>