USE t4ls_todo;

CREATE TABLE tasks (
	id			int				NOT NULL		AUTO_INCREMENT,
	description	varchar(200),
	mandatory	boolean			NOT NULL		DEFAULT 0,
	public		boolean			NOT NULL		DEFAULT 0,
	completed	boolean			NOT NULL		DEFAULT 0,

	PRIMARY KEY (id)
) ENGINE = InnoDB;

# Task subtype for items with a due date.
CREATE TABLE commitments (
	id			int				NOT NULL,
	due			datetime		NOT NULL,

	PRIMARY KEY (id),
	FOREIGN KEY (id) REFERENCES tasks (id) ON DELETE CASCADE
) ENGINE = InnoDB;

# Task subtype for items with a set time and duration.
CREATE TABLE appointments (
	id			int				NOT NULL,
	time		datetime		NOT NULL,
	# Duration in seconds.
	duration	int				NOT NULL		DEFAULT 0,

	PRIMARY KEY (id),
	FOREIGN KEY (id) REFERENCES tasks (id) ON DELETE CASCADE
) ENGINE = InnoDB;

CREATE TABLE users (
	id			int 			NOT NULL		AUTO_INCREMENT,
	username	varchar(24)		NOT NULL,
	email		varchar(200),
	first_name	varchar(100),
	last_name	varchar(100),

	PRIMARY KEY (id)
) ENGINE = InnoDB;

# Relation of users to tasks
CREATE TABLE responsibility (
	task_id		int				NOT NULL,
	user_id		int				NOT NULL,
	owner		boolean			NOT NULL		DEFAULT 1,

	PRIMARY KEY (task_id, user_id),
	FOREIGN KEY (task_id) REFERENCES tasks (id) ON DELETE CASCADE,
	FOREIGN KEY (user_id) REFERENCES tasks (id) ON DELETE CASCADE
) ENGINE = InnoDB;

CREATE TABLE locations (
	id			int				NOT NULL,
	name		varchar(100)	NOT NULL,
	home		int,

	PRIMARY KEY (id)
) ENGINE = InnoDB;

# Relation of tasks to tasks
CREATE TABLE prereqs (
	id			int				NOT NULL,
	prereq_id	int				NOT NULL,
	# Whether to allow the main task to be completed even if prereq_id isn't done.
	strict		boolean			NOT NULL		DEFAULT 1,

	PRIMARY KEY (id, prereq_id),
	FOREIGN KEY (id) REFERENCES tasks (id) ON DELETE CASCADE,
	FOREIGN KEY (id) REFERENCES tasks (id) ON DELETE CASCADE
) ENGINE = InnoDB;

# Relation of locations to locations
CREATE TABLE distances (
	a			int				NOT NULL,
	b			int				NOT NULL,
	distance	decimal(6,3)	NOT NULL		DEFAULT 0,
	# Duration in seconds.
	time		int				NOT NULL 		DEFAULT 0,

	PRIMARY KEY (a, b),
	FOREIGN KEY (a) REFERENCES locations (id) ON DELETE CASCADE,
	FOREIGN KEY (b) REFERENCES locations (id) ON DELETE CASCADE
) ENGINE = InnoDB;
