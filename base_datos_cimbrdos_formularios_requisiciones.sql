-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: base_datos_cimbrdos
-- ------------------------------------------------------
-- Server version	8.2.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `formularios_requisiciones`
--

DROP TABLE IF EXISTS `formularios_requisiciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formularios_requisiciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `area_solicitante` varchar(60) NOT NULL,
  `nombre_solicitante` varchar(45) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cantidad` varchar(45) NOT NULL,
  `unidad_medida` varchar(45) NOT NULL,
  `centro_costos` varchar(45) NOT NULL,
  `proviene` varchar(45) NOT NULL,
  `respuesta` varchar(45) NOT NULL,
  `destino` varchar(45) NOT NULL,
  `observaciones` varchar(45) NOT NULL,
  `fecha_max` date NOT NULL,
  `cobro_terceros` varchar(45) NOT NULL,
  `proveedor` varchar(45) NOT NULL,
  `precio_unitario` varchar(45) NOT NULL,
  `No_factura` varchar(45) NOT NULL,
  `como_recupera` varchar(45) NOT NULL,
  `No_remision` varchar(45) NOT NULL,
  `No_contable` varchar(45) NOT NULL,
  `recuperable_nombre` varchar(45) NOT NULL,
  `fechaSistema` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formularios_requisiciones`
--

LOCK TABLES `formularios_requisiciones` WRITE;
/*!40000 ALTER TABLE `formularios_requisiciones` DISABLE KEYS */;
INSERT INTO `formularios_requisiciones` VALUES (1,'CONTABILIDAD','NATALIS RUIZ','la mejor empresa','3','m3','02 Torres de carga formaleteria','OP','sdhsdhs','sdfhdf','dsfhsdf','2024-02-12','Si','sdfhsdfh','dfhdfh','4234534','Si','453453','453434','fgdfgdfg','2024-02-12 16:42:23'),(2,'EQUIPO','MANUEL CARVAJAL','la mejor empresa','89','Tonelada','04 Equipo meq sin operario','OP','64563168','inventario','esta buena ','2024-02-19','Si','cocacola','45400','12358794','Si','58798546','53465245','juan muñoz','2024-02-19 09:39:04');
/*!40000 ALTER TABLE `formularios_requisiciones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-22  9:53:16
