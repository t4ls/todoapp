DROP DATABASE t4ls_todo;

CREATE DATABASE t4ls_todo;

GRANT ALL PRIVILEGES ON t4ls_todo.* TO 'todo'@'localhost';

USE t4ls_todo;

CREATE TABLE tasks (
	id			int				NOT NULL		AUTO_INCREMENT,
	description	varchar(200),
	priority	enum('low','routine','pressing','urgent')			NOT NULL		DEFAULT 'routine',
	public		boolean			NOT NULL		DEFAULT 0,
	completed	boolean			NOT NULL		DEFAULT 0,
	due			datetime,
	time		datetime,
	duration	int,

	PRIMARY KEY (id)
) ENGINE = InnoDB;

CREATE TABLE users (
	username	varchar(24)		NOT NULL,
	email		varchar(200),
	first_name	varchar(100),
	last_name	varchar(100),

	PRIMARY KEY (username)
) ENGINE = InnoDB;

# Relation of users to tasks
CREATE TABLE responsibility (
	task_id		int				NOT NULL,
	user		varchar(24)		NOT NULL,
	owner		boolean			NOT NULL		DEFAULT 1,

	PRIMARY KEY (task_id, user),
	FOREIGN KEY (task_id) REFERENCES tasks (id) ON DELETE CASCADE,
	FOREIGN KEY (user) REFERENCES users (username) ON DELETE CASCADE
) ENGINE = InnoDB;

# Relation of tasks to tasks
CREATE TABLE prereqs (
	id			int				NOT NULL,
	prereq_id	int				NOT NULL,
	# Whether to allow the main task to be completed even if prereq_id isn't done.
	strict		boolean			NOT NULL		DEFAULT 1,

	PRIMARY KEY (id, prereq_id),
	FOREIGN KEY (id) REFERENCES tasks (id) ON DELETE CASCADE,
	FOREIGN KEY (prereq_id) REFERENCES tasks (id) ON DELETE CASCADE
) ENGINE = InnoDB;