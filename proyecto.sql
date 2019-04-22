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
) ENGINE=InnoDB AUTO_INCREMENT=4570 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'user','user','user@user.com','7ed1ca45414f40612d0c469e24453e40','2019-03-31'),(2,'admin','admin','admin@admin.com','7ed1ca45414f40612d0c469e24453e40','2019-03-31'),(3,'Rafael','Diaz Gonzalez','rafa@rafa.com','7ed1ca45414f40612d0c469e24453e40','2019-03-31');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `incluyen`
--

DROP TABLE IF EXISTS `incluyen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `incluyen` (
  `IdRecambio` int(11) NOT NULL,
  `IdReparacion` int(11) NOT NULL,
  `Unidades` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`IdRecambio`,`IdReparacion`),
  KEY `IdRep` (`IdReparacion`),
  CONSTRAINT `IdRec` FOREIGN KEY (`IdRecambio`) REFERENCES `recambios` (`IdRecambio`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `IdRep` FOREIGN KEY (`IdReparacion`) REFERENCES `reparaciones` (`IdReparacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `incluyen`
--

LOCK TABLES `incluyen` WRITE;
/*!40000 ALTER TABLE `incluyen` DISABLE KEYS */;
/*!40000 ALTER TABLE `incluyen` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recambios`
--

LOCK TABLES `recambios` WRITE;
/*!40000 ALTER TABLE `recambios` DISABLE KEYS */;
INSERT INTO `recambios` VALUES (1,'Aceite','Ralsa',5,15.00),(2,'Filtro Antipolen','VALEO',2,10.00),(3,'Junta culata','BOSCH',2,35.00),(4,'Bomba aceite','BOSCH',4,115.00);
/*!40000 ALTER TABLE `recambios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reparaciones`
--

DROP TABLE IF EXISTS `reparaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reparaciones` (
  `IdReparacion` int(11) NOT NULL AUTO_INCREMENT UNIQUE,
  `Matricula` varchar(8) NOT NULL,
  `km` decimal(8,2) DEFAULT NULL,
  `FechaEntrada` date DEFAULT NULL,
  `Averia` varchar(200) DEFAULT NULL,
  `FechaSalida` date DEFAULT NULL,
  PRIMARY KEY (`IdReparacion`),
  KEY `Matri` (`Matricula`),
  CONSTRAINT `Matri` FOREIGN KEY (`Matricula`) REFERENCES `vehiculos` (`Matricula`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reparaciones`
--

LOCK TABLES `reparaciones` WRITE;
/*!40000 ALTER TABLE `reparaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `reparaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehiculos` (
  `Matricula` varchar(8) NOT NULL,
  `Marca` varchar(25) DEFAULT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `FechaMatriculacion` date DEFAULT NULL,
  `CodCliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`Matricula`),
  KEY `CodCli` (`CodCliente`),
  CONSTRAINT `CodCli` FOREIGN KEY (`CodCliente`) REFERENCES `clientes` (`CodCliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculos`
--

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
INSERT INTO `vehiculos` VALUES ('2000 CVF','Peugeot','407','Gris oscuro','2007-07-10',2),('4569 BFC','BMW','320d','Rojo','2001-10-02',3),('9845 FCV','Renault','Clio IV','Blanco','2014-06-02',1);
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

-- Dump completed on 2019-04-01  0:16:00
