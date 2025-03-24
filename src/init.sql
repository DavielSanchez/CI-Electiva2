CREATE DATABASE IF NOT EXISTS testdb;

USE testdb;

CREATE TABLE IF NOT EXISTS saludo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mensaje VARCHAR(255) NOT NULL
);

INSERT INTO saludo (mensaje) VALUES ('¡Hola Mundo desde MySQL y PHP!');
