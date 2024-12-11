CREATE DATABASE dwes07_sesiones;

USE dwes07_sesiones;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    correo VARCHAR(255) NOT NULL,
    contraseña VARCHAR(255) NOT NULL
);
