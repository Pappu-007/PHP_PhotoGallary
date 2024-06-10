# PHP_PhotoGallary
First create a database table using this sql command:

CREATE DATABASE photograhy;

USE photograhy;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    number VARCHAR(100) NOT NULLL
);
