
USE school;

CREATE TABLE if NOT exists students(
	id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255),  
	lastname VARCHAR(255),
	email VARCHAR(255),
	password varchar(255), 
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

USE school; 

SHOW TABLES;

DESC students;

SELECT *  FROM students;

INSERT INTO students (NAME, lastname, email,password) VALUES('leo','lopez','leo@gmail.com','123456789');
INSERT INTO students (NAME, lastname, email, PASSWORD) VALUES('maya', 'bermudez', 'maya@gmail.com', '58772118');

UPDATE students
SET NAME = 'sigartha'
WHERE NAME = 'apolo';

DELETE FROM students WHERE id = 1 ;

SELECT * FROM students;