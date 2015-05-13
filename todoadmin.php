<?php
//based on the most current SQL script for our database "todo.sql" and "sample.sql"

do{
	$servername = "localhost";
	$username = "todo";
	$password = "monkey";
	$dbname = "t4ls_todo";
	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}


	$menu = menu();
	

	if ($menu == 1) {
		echo "\nResetting database\n";
		rebuilddb($conn);
	}
	if ($menu == 2) {
		echo "\nResetting database with sample set\n";
		rebuilddb($conn);
		sample($conn);
	}


} while ( $menu != 0);





function menu(){
	echo "
		\n############# ADMIN CONTROLS MENU ##############\n\n
		\n0. exit
		\n1. reset database
		\n2. reset database and add samples";
	echo "\nSelect a number: "; $handle0 = fopen ("php://stdin","r"); $menu = trim(fgets($handle0));
	return $menu;
}




//Rebuilds the entiredb
function rebuilddb($conn){
	mysqli_query($conn,"drop database t4ls_todo");
	mysqli_query($conn,"create database t4ls_todo");
	mysqli_query($conn,"GRANT ALL PRIVILEGES ON t4ls_todo.* TO 'todo'@'localhost'");
	mysqli_query($conn,"use t4ls_todo");
	


	mysqli_query($conn,"CREATE TABLE users (
	username	varchar(24)		NOT NULL,
	email		varchar(200),
	first_name	varchar(100),
	last_name	varchar(100),
	PRIMARY KEY (username)
	) ENGINE = InnoDB");


	mysqli_query($conn,"CREATE TABLE tasks (
	id integer NOT NULL AUTO_INCREMENT,
	description   varchar(200),
	priority enum('low','routine','pressing','urgent') NOT NULL   DEFAULT 'routine',
	completed boolean NOT NULL DEFAULT 0,
	due	  datetime,
	owner varchar(24) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (owner) REFERENCES users(username) ON DELETE CASCADE
	)ENGINE = InnoDB");



	mysqli_query($conn,"CREATE TABLE responsibility (
	task_id		int				NOT NULL,
	user		varchar(24)		NOT NULL,
	owner		boolean			NOT NULL		DEFAULT 1,

	PRIMARY KEY (task_id, user),
	FOREIGN KEY (task_id) REFERENCES tasks (id) ON DELETE CASCADE,
	FOREIGN KEY (user) REFERENCES users (username) ON DELETE CASCADE
	) ENGINE = InnoDB");

	
	mysqli_query($conn,"CREATE TABLE prereqs (
	id			int				NOT NULL,
	prereq_id	int				NOT NULL,
	strict		boolean			NOT NULL		DEFAULT 1,
	PRIMARY KEY (id, prereq_id),
	FOREIGN KEY (id) REFERENCES tasks (id) ON DELETE CASCADE,
	FOREIGN KEY (prereq_id) REFERENCES tasks (id) ON DELETE CASCADE
	) ENGINE = InnoDB");


}

function sample($conn){
	mysqli_query($conn,"INSERT INTO users (username, email, first_name, last_name)
VALUES ('cpg','cade@gmail.com','cade','gillem')");
	mysqli_query($conn,"INSERT INTO users (username, email, first_name, last_name)
VALUES ('giggles','blake@gmail.com','blake','wrege') ");
	mysqli_query($conn,"INSERT INTO users (username, email, first_name, last_name)
VALUES ('goldenboy','patrick@gmail.com','patrick','amolsch') ");

	mysqli_query($conn,"INSERT INTO tasks (description, priority, completed, due, owner )
VALUES ('cpg explains what we are doing','pressing',1,'2014-12-31 23:55:59', 'cpg') ");
	
	mysqli_query($conn,"INSERT INTO tasks (description, priority, completed, due, owner )
VALUES ('goldenboy slacks off','low',0,'2014-12-03 23:55:59', 'goldenboy') ");
	
	mysqli_query($conn,"INSERT INTO tasks (description, priority, public, completed, due, time, duration )
VALUES ('giggles tries to be helpful and fails','routine','0','1','2013-12-31 23:55:59','2015-12-31 23:56:59',60) ");
	
	mysqli_query($conn,"INSERT INTO tasks (description, priority, completed, due, owner )
VALUES ('project is complete and we all get A+','low', 0, '2012-12-31 23:55:59', 'cpg') ");

}





	echo "\ndone\n";
$conn->close();
?>
