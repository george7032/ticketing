-- Active: 1713413894962@@127.0.0.1@3306
USE ticketing;

CREATE TABLE students (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(255),
    registration_number VARCHAR(50) UNIQUE,
    course VARCHAR(100),
    password VARCHAR(255)
);

CREATE TABLE Admins (
    AdminID INT PRIMARY KEY AUTO_INCREMENT,
    AdminName VARCHAR(100),
    Username VARCHAR(50),
    UserPassword VARCHAR(50)
);




