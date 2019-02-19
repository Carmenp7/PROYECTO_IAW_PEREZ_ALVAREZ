CREATE DATABASE  IF NOT EXISTS proyecto;
USE proyecto;

CREATE TABLE IF NOT EXISTS clientes(
    CodCliente varchar(5) NOT NULL PRIMARY KEY,
    DNI varchar(25) NOT NULL,
    Nombre varchar(25) DEFAULT NULL,
    Apellidos varchar(50) DEFAULT NULL,
    Direccion varchar(50) DEFAULT NULL,
    Telefono varchar(9) DEFAULT NULL,    
);


