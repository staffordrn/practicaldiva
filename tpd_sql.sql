-- Create artists table 
CREATE TABLE artists  
(artist_id INT(10) UNSIGNED,    
first_name VARCHAR(25),
last_name VARCHAR(25),    
CONSTRAINT pk_artist    
PRIMARY KEY (artist_id));

-- Insert artists into artists table
INSERT INTO artists 
(first_name, last_name)
VALUES ('Sarah', 'Chase');
INSERT INTO artists
(first_name, last_name)
VALUES ('Jeff', 'Baker');
INSERT INTO artists 
(first_name, last_name)
VALUES ('Sarah', 'Chase');
INSERT INTO artists 
(first_name, last_name)
VALUES ('Emma', 'Grant');
INSERT INTO artists 
(first_name, last_name)
VALUES ('Kerry', 'Best');

-- Create users table
CREATE TABLE users  
(user_id INT(10) UNSIGNED,    
user_first_name VARCHAR(25),
user_last_name VARCHAR(25),
user_email VARCHAR(40),
user_password VARCHAR(255),    
CONSTRAINT pk_user    
PRIMARY KEY (user_id));

CREATE TABLE tpd_users  
(tpd_id INT(10) UNSIGNED,    
first_name VARCHAR(25),
last_name VARCHAR(25),
user_email VARCHAR(40),
password VARCHAR(255),    
CONSTRAINT pk_user    
PRIMARY KEY (user_id));

From Angie's List
She was extremely creative. If I want to do something she would make it happen. She was amazing. 

Taerra is terrific. Knows what she is doing and has a very pleasant personality. I have hired her many times.