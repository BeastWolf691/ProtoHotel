-- Active: 1713252765707@@127.0.0.1@3306@gthotel
CREATE TABLE IF NOT EXISTS `rooms` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255),
    `description` TEXT,
    `price` DECIMAL(10, 2),
    `available` INT
);

INSERT INTO `rooms` (`name`, `description`, `price`, `available`) 
VALUES
('Chambre Standard', 'Une belle chambre pour deux personnes.', 100.00, 1),
('Chambre Luxe', 'Spacieuse et luxueuse, avec vue sur la mer.', 200.00, 0),
('Suite Royale', 'Notre suite la plus luxueuse.', 500.00, 1);


CREATE TABLE IF NOT EXISTS `create_Profil` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `lastname` VARCHAR(255) NOT NULL,
    `firstname` VARCHAR(255) NOT NULL ,
    `password` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL
);

INSERT INTO `users` (`lastname`, `firstname`, `password`, `address`,`email`) 
VALUES 
('duval', 'Sophie', 'hashed_password', '45 rue du désespoir', 'sophieduval@gmail.com');


CREATE TABLE IF NOT EXISTS `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `lastname` VARCHAR(255) NOT NULL,
    `firstname` VARCHAR(255) NOT NULL ,
    `lastPassword` VARCHAR(255) NOT NULL,
    `newPassword` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL
);

INSERT INTO `users` (`lastname`, `firstname`, `lastPassword`, `newPassword`, `address`,`email`) 
VALUES ('duval', 'Sophie', 'hashed_password', '457889/1', '45 rue du désespoir', 'sophieduval@gmail.com');


CREATE TABLE IF NOT EXISTS `hotels` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL
);

INSERT INTO `hotels` (name, description) VALUES ('Hôtel Plaza Athénée', 'Situé au cœur de Paris, cet hôtel offre une expérience luxueuse avec une vue magnifique sur la Tour Eiffel.');


CREATE TABLE IF NOT EXISTS `Formulaires_Contacts` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nom` VARCHAR(255) NOT NULL,
    `prénom` VARCHAR(255) NOT NULL ,
    `email` VARCHAR(255) NOT NULL,
    `sujet` VARCHAR(255) NOT NULL,
    `message` VARCHAR(255) NOT NULL
);