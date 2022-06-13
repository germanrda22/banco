DROP DATABASE IF EXISTS banco;
CREATE DATABASE banco;
USE banco;
CREATE TABLE usuario
(
    dni         VARCHAR(9) NOT NULL,
    nombre      VARCHAR(100) NOT NULL,
    apellidos   VARCHAR(255) NOT NULL,
    telefono    INT(9) NOT NULL,
    email       VARCHAR(255) NOT NULL,
    password    VARCHAR(255) NOT NULL,
    rol         VARCHAR(20) NOT NULL,
    saldo       FLOAT,
    CONSTRAINT pk_usuarios PRIMARY KEY(dni),
    CONSTRAINT uq_email UNIQUE(email)
)
ENGINE=InnoDb;
CREATE TABLE movimiento
(
    id          INT(255) AUTO_INCREMENT NOT NULL,
    dni_usuario VARCHAR(9) NOT NULL,
    cantidad    FLOAT NOT NULL,
    fecha       DATE NOT NULL,
    concepto    VARCHAR(255),
    CONSTRAINT pk_movimientos PRIMARY KEY(id),
    CONSTRAINT fk_dni_usuario FOREIGN KEY(dni_usuario) REFERENCES usuario(dni) ON DELETE CASCADE
)
ENGINE=InnoDb;
INSERT INTO usuario
VALUES  ('78224235Q', 'Germán', 'Ruiz del Arco', '637628727', 'admin@gmail.com', 'admin', 'admin', NULL), 
        ('23804454F', 'Javier', 'Rodriguez Gallegos', '678457585', 'javi@gmail.com', 'javi', 'usuario', '250849');
INSERT INTO movimiento
VALUES  (NULL, '23804454F', '+50', '2022-06-10', 'Cobro dietas y desplazamiento'), 
        (NULL, '23804454F', '-200', '2022-06-09', 'Luz y agua');