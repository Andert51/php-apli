CREATE DATABASE apli_php;

USE apli_php;
CREATE TABLE students(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    patsurname VARCHAR(50) NOT NULL,
    matsurname VARCHAR(50) NOT NULL,
    birthdate DATE NOT NULL,
    height FLOAT NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL

)

USE apli_php;
DESCRIBE students;