GRANT ALL ON *.* TO 'root'@'localhost' IDENTIFIED BY "2asirtriana";
GRANT ALL ON *.* TO 'root'@'127.0.0.1' IDENTIFIED BY "2asirtriana";
GRANT ALL ON *.* TO 'root'@'%' IDENTIFIED BY "2asirtriana";
GRANT ALL ON proyecto.* TO 'root'@'localhost' IDENTIFIED BY "2asirtriana";
GRANT ALL ON proyecto.* TO 'root'@'127.0.0.1' IDENTIFIED BY "2asirtriana";
GRANT ALL ON proyecto.* TO 'root'@'%' IDENTIFIED BY "2asirtriana";
CREATE USER 'user'@'localhost' IDENTIFIED BY '2asirtriana';
CREATE USER 'user'@'127.0.0.1' IDENTIFIED BY '2asirtriana';
CREATE USER 'user'@'%' IDENTIFIED BY '2asirtriana';
GRANT SELECT,UPDATE,DELETE,INSERT ON *.* TO 'user'@'localhost' IDENTIFIED BY "2asirtriana";
GRANT SELECT,UPDATE,DELETE,INSERT ON *.* TO 'user'@'127.0.0.1' IDENTIFIED BY "2asirtriana";
GRANT SELECT,UPDATE,DELETE,INSERT ON *.* TO 'user'@'%' IDENTIFIED BY "2asirtriana";
GRANT SELECT,UPDATE,DELETE,INSERT ON proyecto.* TO 'user'@'localhost' IDENTIFIED BY "2asirtriana";
GRANT SELECT,UPDATE,DELETE,INSERT ON proyecto.* TO 'user'@'127.0.0.1' IDENTIFIED BY "2asirtriana";
GRANT SELECT,UPDATE,DELETE,INSERT ON proyecto.* TO 'user'@'%' IDENTIFIED BY "2asirtriana";
FLUSH PRIVILEGES;

-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: proyecto
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--
drop database if exists proyecto;
create database proyecto;
use proyecto;

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `CodCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(25) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Correo` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `Fecha_Alta` date DEFAULT NULL,
  PRIMARY KEY (`CodCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'user','user','user@user.com','ee11cbb19052e40b07aac0ca060c23ee','2019-03-04'),(2,'admin','admin','admin@admin.com','21232f297a57a5a743894a0e4a801fc3','2019-03-04'),(3,'carmen','carmen','carmen@carmen','880cbc1ed48043cbcdaa7286e058ef7f','2019-03-08');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleados` (
  `CodEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `DNI` varchar(9) DEFAULT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Telefono` varchar(9) DEFAULT NULL,
  `Correo` varchar(40) DEFAULT NULL,
  `FechaAlta` date DEFAULT NULL,
  `Categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CodEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (1,'15414403X','Carmen','Pérez','675564432','carmen@carmen','2019-03-08','Inyección');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recambios`
--

DROP TABLE IF EXISTS `recambios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recambios` (
  `IdRecambio` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(100) DEFAULT NULL,
  `Proveedor` varchar(50) DEFAULT NULL,
  `Stock` smallint(6) DEFAULT NULL,
  `PrecioReferencia` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`IdRecambio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recambios`
--

LOCK TABLES `recambios` WRITE;
/*!40000 ALTER TABLE `recambios` DISABLE KEYS */;
INSERT INTO `recambios` VALUES (1,'Aceite','Lausan',2,23.00);
/*!40000 ALTER TABLE `recambios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reparaciones`
--

DROP TABLE IF EXISTS `reparaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reparaciones` (
  `IdReparacion` int(11) NOT NULL AUTO_INCREMENT,
  `Matricula` varchar(8) NOT NULL,
  `km` decimal(8,2) DEFAULT NULL,
  `FechaEntrada` date DEFAULT NULL,
  `Averia` varchar(200) DEFAULT NULL,
  `FechaSalida` date DEFAULT NULL,
  PRIMARY KEY (`IdReparacion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reparaciones`
--

LOCK TABLES `reparaciones` WRITE;
/*!40000 ALTER TABLE `reparaciones` DISABLE KEYS */;
INSERT INTO `reparaciones` VALUES (1,'S3030',0.00,'2002-12-01','Calentadores','2002-12-01');
/*!40000 ALTER TABLE `reparaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehiculos` (
  `IdVehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `Matricula` varchar(8) NOT NULL,
  `Marca` varchar(25) DEFAULT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `FechaMatriculacion` date DEFAULT NULL,
  `CodCliente` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`IdVehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculos`
--

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
INSERT INTO `vehiculos` VALUES (2,'4370FGH','BMW','E46','Rojo','2019-03-08','2');
/*!40000 ALTER TABLE `vehiculos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-08 23:10:55
