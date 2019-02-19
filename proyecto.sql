
DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `CodCliente` varchar(5) NOT NULL,
  `DNI` varchar(25) NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Telefono` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`CodCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

DROP TABLE IF EXISTS `recambios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recambios` (
  `IdRecambio` varchar(10) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  `UnidadBase` varchar(50) DEFAULT NULL,
  `Stock` smallint(6) DEFAULT NULL,
  `PrecioReferencia` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`IdRecambio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recambios`
--

LOCK TABLES `recambios` WRITE;
/*!40000 ALTER TABLE `recambios` DISABLE KEYS */;
/*!40000 ALTER TABLE `recambios` ENABLE KEYS */;
UNLOCK TABLES;

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

DROP TABLE IF EXISTS `reparaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reparaciones`
--

LOCK TABLES `reparaciones` WRITE;
/*!40000 ALTER TABLE `reparaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `reparaciones` ENABLE KEYS */;
UNLOCK TABLES;

DROP TABLE IF EXISTS `vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehiculos` (
  `Matricula` varchar(8) NOT NULL,
  `Marca` varchar(25) DEFAULT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `FechaMatriculacion` date DEFAULT NULL,
  `CodCliente` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`Matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculos`
--

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
/*!40000 ALTER TABLE `vehiculos` ENABLE KEYS */;
UNLOCK TABLES;
