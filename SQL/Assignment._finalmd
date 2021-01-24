/*Tables for the Assignment
Create the following tables in a database named "roster". Make sure that your database and tables are named exactly as follows including matching case.*/

DROP TABLE IF EXISTS Member;
DROP TABLE IF EXISTS `User`;
DROP TABLE IF EXISTS Course;

CREATE TABLE `User` (
    user_id     INTEGER NOT NULL AUTO_INCREMENT,
    name        VARCHAR(128) UNIQUE,
    PRIMARY KEY(user_id)
) ENGINE=InnoDB CHARACTER SET=utf8;

CREATE TABLE Course (
    course_id     INTEGER NOT NULL AUTO_INCREMENT,
    title         VARCHAR(128) UNIQUE,
    PRIMARY KEY(course_id)
) ENGINE=InnoDB CHARACTER SET=utf8;

CREATE TABLE Member (
    user_id       INTEGER,
    course_id     INTEGER,
    role          INTEGER,

    CONSTRAINT FOREIGN KEY (user_id) REFERENCES `User` (user_id)
      ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (course_id) REFERENCES Course (course_id)
       ON DELETE CASCADE ON UPDATE CASCADE,

    PRIMARY KEY (user_id, course_id)
) ENGINE=InnoDB CHARACTER SET=utf8;
  
  
  /*Example: Data
You will normalize the following data (each user gets different data on the autograder page), and insert the following data items into your database, creating and
linking all the foreign keys properly. Encode instructor with a role of 1 and a learner with a role of 0.

Nialla, si106, Instructor
Elise, si106, Learner
Juniper, si106, Learner
Manwen, si106, Learner
Travis, si106, Learner

Ivory, si110, Instructor
Moayd, si110, Learner
Saifaddine, si110, Learner
Sheignneth, si110, Learner
Temitayo, si110, Learner

Ainslie, si206, Instructor
Arfaa, si206, Learner
Carron, si206, Learner
Carys, si206, Learner
Duncan, si206, Learner

*/

INSERT INTO User (name) VALUES ('Nialla');
INSERT INTO User (name) VALUES ('Elise');
INSERT INTO User (name) VALUES ('Juniper');
INSERT INTO User (name) VALUES ('Manwen');
INSERT INTO User (name) VALUES ('Travis');

INSERT INTO User (name) VALUES ('Ivory');
INSERT INTO User (name) VALUES ('Moayd');
INSERT INTO User (name) VALUES ('Saifaddine');
INSERT INTO User (name) VALUES ('Sheignneth');
INSERT INTO User (name) VALUES ('Temitayo');

INSERT INTO User (name) VALUES ('Ainslie');
INSERT INTO User (name) VALUES ('Arfaa');
INSERT INTO User (name) VALUES ('Carron');
INSERT INTO User (name) VALUES ('Carys');
INSERT INTO User (name) VALUES ('Duncan');

INSERT INTO Course (title) VALUES ('si106');
INSERT INTO Course (title) VALUES ('si110');
INSERT INTO Course (title) VALUES ('si206');


INSERT INTO Member (user_id, course_id, role) VALUES (1, 1, 1 );

INSERT INTO Member (user_id, course_id, role) VALUES (2, 1, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (3, 1, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (4, 1, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (5, 1, 0 );


INSERT INTO Member (user_id, course_id, role) VALUES (6, 2, 1 );

INSERT INTO Member (user_id, course_id, role) VALUES (7, 2, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (8, 2, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (9, 2, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (10, 2, 0);


INSERT INTO Member (user_id, course_id, role) VALUES (11, 3, 1 );

INSERT INTO Member (user_id, course_id, role) VALUES (12, 3, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (13, 3, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (14, 3, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (15, 3, 0);


/*SQL_QUERY*/

SELECT User.name, Course.title, Member.role
FROM User JOIN Member JOIN Course
ON User.user_id = Member.user_id AND Member.course_id = Course.course_id
ORDER BY Course.title, Member.role DESC, User.name


![Sanity Check](https://github.com/lindangulopez/DrCHUCK-PHP-SQL-DB-APPS-JS/blob/main/SQL/sanity_check.png?raw=true)


/* Submitting Your Assignment
When you have the data all inserted, use phpMyAdmin to Export the data as follows:

Select the database (do not select a table within the database)
Select the Export Tab
Select "Custom - display all possible options"
Select "Save output to a file"
Set the format to JSON
Do not select "pretty print" the output
Leave everything else as default and run the export.
*/

