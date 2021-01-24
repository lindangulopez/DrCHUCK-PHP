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

Taliesin, si106, Instructor
Denver, si106, Learner
Juwairiyah, si106, Learner
Kainui, si106, Learner
Zoya, si106, Learner

Aisha, si110, Instructor
Artemis, si110, Learner
Danna, si110, Learner
Dennis, si110, Learner
Tyler, si110, Learner

Kirstin, si206, Instructor
Allisha, si206, Learner
Carra, si206, Learner
Idahosa, si206, Learner
Iliana, si206, Learner */

INSERT INTO User (name) VALUES ('Taliesin');
INSERT INTO User (name) VALUES ('Denver');
INSERT INTO User (name) VALUES ('Juwairiyah');
INSERT INTO User (name) VALUES ('Kainui');
INSERT INTO User (name) VALUES ('Zoya');
INSERT INTO User (name) VALUES ('Aisha');
INSERT INTO User (name) VALUES ('Artemis');
INSERT INTO User (name) VALUES ('Danna');
INSERT INTO User (name) VALUES ('Dennis');
INSERT INTO User (name) VALUES ('Tyler');
INSERT INTO User (name) VALUES ('Kirstin');
INSERT INTO User (name) VALUES ('Allisha');
INSERT INTO User (name) VALUES ('Carra');
INSERT INTO User (name) VALUES ('Idahosa');
INSERT INTO User (name) VALUES ('Iliana');

/* 
user_id, name
6, Aisha
12, Allisha
7, Artemis
13, Carra
8, Danna
9, Dennis
2, Denver
14, Idahosa
15, Iliana
3, Juwairiyah
4, Kainui
11, Kirstin
1, Taliesin
10, Tyler
5, Zoya

TABLE `User` (user_id INTEGER NOT NULL AUTO_INCREMENT, name VARCHAR(128) UNIQUE, 
PRIMARY KEY(user_id)

*/

INSERT INTO Course (title) VALUES ('si106');
INSERT INTO Course (title) VALUES ('si110');
INSERT INTO Course (title) VALUES ('si206');

/*
course_id, title
1, si106
2, si110
3, si206
 TABLE Member (user_id INTEGER, course_id INTEGER, role INTEGER)
     CONSTRAINT FOREIGN KEY (user_id) REFERENCES `User` (user_id)
      ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (course_id) REFERENCES Course (course_id)
       ON DELETE CASCADE ON UPDATE CASCADE,

    PRIMARY KEY (user_id, course_id)
    
*/

/*Taliesin, si106, Instructor [1, Taliesin]
Denver, si106, Learner [2, Denver]
Juwairiyah, si106, Learner [3, Juwairiyah]
Kainui, si106, Learner [4, Kainui]
Zoya, si106, Learner [5, Zoya]

*/

/* 1=Instructor, 0=Learner*/

INSERT INTO Member (user_id, course_id, role) VALUES (1, 1, 1 );

INSERT INTO Member (user_id, course_id, role) VALUES (2, 1, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (3, 1, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (4, 1, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (5, 1, 0 );


/*Aisha, si110, Instructor [6, Aisha]
Artemis, si110, Learner  [7, Artemis]
Danna, si110, Learner [8, Danna]
Dennis, si110, Learner [9, Dennis]
Tyler, si110, Learner [10, Tyler]
*/

INSERT INTO Member (user_id, course_id, role) VALUES (6, 2, 1 );

INSERT INTO Member (user_id, course_id, role) VALUES (7, 2, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (8, 2, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (9, 2, 0);

INSERT INTO Member (user_id, course_id, role) VALUES (10, 2, 0);

/*
Kirstin, si206, Instructor [11, Kirstin]
Allisha, si206, Learner [12, Allisha]
Carra, si206, Learner [13, Carra]
Idahosa, si206, Learner [14, Idahosa]
Iliana, si206, Learner [15, Iliana]
*/


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

