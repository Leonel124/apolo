USE school;

DROP TABLE IF EXISTS users;
DROP TABLE IF  EXISTS students;
DROP TABLE IF EXISTS teachers;

CREATE  TABLE IF NOT EXISTS users(
	id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
   `name` VARCHAR(255) NOT NULL,
   lastname VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
   `password` VARCHAR(255) NOT NULL,
   created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP  
);

CREATE TABLE IF NOT EXISTS teachers(
	id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	`rank` VARCHAR(255) NOT NULL DEFAULT 'Prof.', 
	user_id INT(11) NOT NULL,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS students(
   id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   grade VARCHAR(255) NOT NULL,
   `group` VARCHAR(255) NOT NULL,
   user_id INT(11) NOT NULL,
   created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
-- 

INSERT INTO users(NAME, lastname, email, PASSWORD) VALUES("Leonel", "Bermudez", "leonel@gmail.com", "apolo12");
INSERT INTO users(NAME, lastname, email, PASSWORD) VALUES("Mauricio", "Lopez", "mauricio@gmail.com", "mauricio12");
SELECT * FROM users;

INSERT INTO students(grade, `group`, user_id) VALUES("6to", "A", 1);


SELECT * FROM students;

INSERT INTO teachers(rank, user_id) VALUES("Director", 2);
SELECT * FROM teachers;

SELECT * FROM users a INNER JOIN students b ON a.id = b.user_id;
SELECT * FROM users c INNER JOIN teachers d ON c.id = d.user_id;
SELECT * FROM users a 
LEFT OUTER JOIN students b 
ON a.id = b.user_id
WHERE b.user_id IS NOT NULL ;

SELECT * FROM users a LEFT OUTER JOIN teachers b ON a.id = b.user_id WHERE b.user_id IS NULL;

SHOW TABLES;

