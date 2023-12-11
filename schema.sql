CREATE DATABASE IF NOT EXISTS `dolphin_crm`;

GRANT ALL PRIVILEGES ON dolphin_crm.* TO 'admin'@'localhost' IDENTIFIED BY 'password123';

USE `dolphin_crm`;

DROP TABLE IF EXISTS `Users`;

CREATE TABLE Users (
  
    id INT NOT NULL auto_increment PRIMARY KEY,
    firstname varchar(255) NOT NULL,
    lastname varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(100),
    role varchar(35),
    created_at datetime
    );

DROP TABLE IF EXISTS `Contacts`;

CREATE TABLE Contacts (
    id INT NOT NULL auto_increment PRIMARY KEY,
    title varchar(255) NOT NULL,
    firstname varchar(255) NOT NULL,
    lastname varchar(255) NOT NULL,
    email varchar(100),
    telephone varchar(255) NOT NULL,
    company varchar(255) NOT NULL,
    assigned_to int NOT NULL,
    created_by int NOT NULL,
    created_at datetime,
    updated_at datetime
    );

DROP TABLE IF EXISTS `Notes`;

CREATE TABLE Notes (
    id INT NOT NULL auto_increment PRIMARY KEY,
    contact_id int NOT NULL,
    comment text(2048) NOT NULL,
    created_by int NOT NULL,
    updated_at datetime
    );

    INSERT INTO `Users` (`firstname`, `lastname`, `email`, `password`, `role`, `created_at`) VALUES
('Super', 'User', 'admin@project2.com', '$2y$10$sjxkpqc9.E9efPFsO23fseSmhCA5.j2HpQR2zfmATQPwpYutfbcdi', 'admin','2023-12-02 16:08:27');
