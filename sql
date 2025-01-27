CREATE DATABASE IF NOT EXISTS ipb23valstis;
USE ipb23valstis;

CREATE TABLE IF NOT EXISTS userss (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL ,
    password VARCHAR(255) NOT NULL
);
INSERT INTO userss
 ( PASSWORD, USER)
VALUES 
("sabucis"),
("sabucis");
