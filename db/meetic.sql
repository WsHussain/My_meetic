CREATE DATABASE IF NOT EXISTS meetic;
USE meetic;

DROP TABLE IF EXISTS login;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS hobbies;

CREATE TABLE login (
    id              INT             NOT NULL AUTO_INCREMENT,
    email           VARCHAR(255)    NOT NULL UNIQUE,
    password        VARCHAR(255)    NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT,
    firstname varchar(255) NOT NULL,
    lastname varchar(255) NOT NULL,
    date_naissance datetime NOT NULL,
    address varchar(255) NOT NULL,
    genre varchar(255) NOT NULL,
    id_hobbies int(11) NOT NULL,
    date_inscription datetime DEFAULT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE hobbies (
  id_hobbies int(11) NOT NULL AUTO_INCREMENT,
  nom varchar(100) NOT NULL,
  PRIMARY KEY (id_hobbies)
);

INSERT INTO hobbies (id_hobbies, nom) VALUES
(1, 'Dance'),
(2, 'Skateboard'),
(3, 'Guitar'),
(4, 'Tueur en série');

INSERT INTO users (id, firstname, lastname, date_naissance, address, genre, id_hobbies, date_inscription) VALUES
(1, 'Waqas', 'Hussain', '1990-01-01', 'Paris', 'Homme', 1, '2021-01-01'),
(2, 'John', 'Doe', '1990-01-01', 'Paris', 'Homme', 2, '2021-01-01'),
(3, 'Jane', 'Doe', '1990-01-01', 'Paris', 'Femme', 3, '2021-01-01'),
(4, 'Jack', 'Doe', '1990-01-01', 'Paris', 'Homme', 4, '2021-01-01');


