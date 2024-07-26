DROP DATABASE IF EXISTS `User`;

CREATE DATABASE `User`;

USE `User`;

CREATE TABLE `User_details`(
    Id INT PRIMARY KEY AUTO_INCREMENT,
    Name Varchar(250) NOT NULL,
    Address Varchar(250) NOT NULL,
    Mobilenumber Varchar(250) NOT NULL
);