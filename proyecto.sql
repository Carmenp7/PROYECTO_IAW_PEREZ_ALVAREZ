drop database if exists proyecto;
create database proyecto;
use proyecto;

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `CodCliente` varchar(5) NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Correo` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `Fecha_Alta` DATE DEFAULT NULL,
  PRIMARY KEY (`CodCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
LOCK TABLES `clientes` WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS `recambios`;
CREATE TABLE `recambios` (
  `IdRecambio` varchar(10) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `UnidadBase` varchar(50) DEFAULT NULL,
  `Stock` smallint(6) DEFAULT NULL,
  `PrecioReferencia` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`IdRecambio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
LOCK TABLES `recambios` WRITE;
UNLOCK TABLES;


DROP TABLE IF EXISTS `empleados`;
CREATE TABLE `empleados` (
  `CodEmpleado` varchar(5) NOT NULL,
  `DNI` varchar(25) DEFAULT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Telefono` varchar(9) DEFAULT NULL,
  `CP` varchar(5) DEFAULT NULL,
  `FechaAlta` date DEFAULT NULL,
  `Categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CodEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
LOCK TABLES `empleados` WRITE;
UNLOCK TABLES;


DROP TABLE IF EXISTS `reparaciones`;
CREATE TABLE `reparaciones` (
  `IdReparacion` int(11) NOT NULL AUTO_INCREMENT,
  `Matricula` varchar(8) NOT NULL,
  `FechaEntrada` date DEFAULT NULL,
  `km` decimal(8,2) DEFAULT NULL,
  `Averia` varchar(200) DEFAULT NULL,
  `FechaSalida` date DEFAULT NULL,
  `Reparado` tinyint(1) DEFAULT NULL,
  `Observaciones` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`IdReparacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
LOCK TABLES `reparaciones` WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS `vehiculos`;
CREATE TABLE `vehiculos` (
  `Matricula` varchar(8) NOT NULL,
  `Marca` varchar(25) DEFAULT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `FechaMatriculacion` date DEFAULT NULL,
  `CodCliente` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`Matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
LOCK TABLES `vehiculos` WRITE;
UNLOCK TABLES;
