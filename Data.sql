
USE hola;

-- Tabla de usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Pass VARCHAR(255) NOT NULL
);

-- Tabla de datos
CREATE TABLE datos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nomb VARCHAR(100) NOT NULL,
    Age INT NOT NULL,
    Email VARCHAR(100) NOT NULL
);