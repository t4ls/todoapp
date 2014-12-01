INSERT INTO users (username, email, first_name, last_name)
VALUES ('cpg','cade@gmail.com','cade','gillem');
INSERT INTO users (username, email, first_name, last_name)
VALUES ('giggles','blake@gmail.com','blake','wrege');
INSERT INTO users (username, email, first_name, last_name)
VALUES ('goldenboy','patrick@gmail.com','patrick','amolsch');

INSERT INTO tasks (description, priority, public, completed, due, time, duration )
VALUES ('cpg explains what we are doing','pressing','1','0','2014-12-31 23:55:59','2015-12-31 23:56:59',2);
INSERT INTO tasks (description, priority, public, completed, due, time, duration )
VALUES ('goldenboy slacks off','low','1','0','2014-12-03 23:55:59','2016-12-31 23:56:59',9999);
INSERT INTO tasks (description, priority, public, completed, due, time, duration )
VALUES ('giggles tries to be helpful and fails','routine','0','1','2013-12-31 23:55:59','2015-12-31 23:56:59',60);
INSERT INTO tasks (description, due, time, duration )
VALUES ('project is complete and we all get A+','2012-12-31 23:55:59','2017-12-31 23:56:59',1);

INSERT INTO responsibility (task_id, user)
VALUES (1, 'cpg');
INSERT INTO responsibility (task_id, user)
VALUES (2, 'giggles');
INSERT INTO responsibility (task_id, user, owner )
VALUES (3, 'goldenboy', 0);
INSERT INTO responsibility (task_id, user)
VALUES (4, 'cpg');


INSERT INTO prereqs (id, prereq_id)
VALUES (4, 1);
INSERT INTO prereqs (id, prereq_id, strict)
VALUES (2, 3, 0);
