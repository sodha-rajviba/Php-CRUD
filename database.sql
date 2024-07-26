DROP DATABASE IF EXISTS `Person`;

CREATE DATABASE `Person`;

USE `Person`;

CREATE TABLE `Person_details`
(
    `Id` INT PRIMARY KEY AUTO_INCREMENT,
    `Name` Varchar(250) NOT NULL,
    `Address` Varchar(250) NOT NULL,
    `Pincode` Varchar(250) NOT NULL,
    `State` Varchar(250) NOT NULL,
    `City` Varchar(250) NOT NULL,
    `Mobilenumber` Varchar(250) NOT NULL,
    `Gender` Varchar(250) NOT NULL,
    `Hobby` Varchar(250) NOT NULL
);