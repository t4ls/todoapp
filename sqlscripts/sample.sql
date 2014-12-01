USE t4ls_todo;

INSERT INTO users (username, email, first_name, last_name)
VALUES ('cpg','cade@gmail.com','cade','gillem');
INSERT INTO users (username, email, first_name, last_name)
VALUES ('giggles','blake@gmail.com','blake','wrege');
INSERT INTO users (username, email, first_name, last_name)
VALUES ('goldenboy','patrick@gmail.com','patrick','amolsch');

INSERT INTO tasks (description, priority, completed, due, owner )
VALUES ('cpg explains what we are doing','pressing',1,'2014-12-31 23:55:59', 'cpg');
INSERT INTO tasks (description, priority, completed, due, owner )
VALUES ('goldenboy slacks off','low',0,'2014-12-03 23:55:59', 'goldenboy');
INSERT INTO tasks (description, priority, completed, due, owner )
VALUES ('giggles tries to be helpful and fails','routine',1,'2013-12-31 23:55:59', 'giggles');
INSERT INTO tasks (description, priority, completed, due, owner )
VALUES ('project is complete and we all get A+','low', 0, '2012-12-31 23:55:59', 'cpg');
