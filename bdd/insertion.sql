
CREATE DATABASE appli_bug;
USE appli_bug;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);



insert into users (username, password) values ('admin', 'admin');

