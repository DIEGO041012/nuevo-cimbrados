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
-- Table structure for table `formulario_reporte_diario`
--

DROP TABLE IF EXISTS `formulario_reporte_diario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formulario_reporte_diario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `mes` varchar(45) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `area` varchar(45) NOT NULL,
  `actividad_obra` varchar(45) NOT NULL,
  `centro_costos` varchar(45) NOT NULL,
  `actividad_planta` varchar(45) NOT NULL,
  `causa_inactividad` varchar(45) NOT NULL,
  `fechaSistema` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulario_reporte_diario`
--

LOCK TABLES `formulario_reporte_diario` WRITE;
/*!40000 ALTER TABLE `formulario_reporte_diario` DISABLE KEYS */;
INSERT INTO `formulario_reporte_diario` VALUES (2,'BONILLA GIRALDO OSCAR IVAN','diciembre','LUNES','2024-02-21','TG TRASLADO GUARNE','Seleciona centro de costos','Seleciona actividad','Causa','2024-02-12 11:26:47'),(3,'CASTAÑEDA QUIROZ JOHN KENEDIR','MAYO','JUEVES','Inactivida','Actividad obra','Seleciona centro de costos','Seleciona actividad','PNR PERMISO NO REMUNERADO','2024-02-12 11:30:47'),(4,'CARLOS ALBERTO CARDENAS PERUGA','ABRIL','MIERCOLES','Activo en planta','Actividad obra','GRC GRC','SF V SANTA FE VACIADO','Causa','2024-02-12 11:39:01'),(5,'CASTAÑEDA QUIROZ JOHN KENEDIR','ABRIL','MARTES','Activo obra','DESMONTAJE','Seleciona centro de costos','Seleciona actividad','Causa','2024-02-12 11:41:18'),(6,'CASTAÑEDA QUIROZ JOHN KENEDIR','ABRIL','MIERCOLES','Inactivida','Actividad obra','Seleciona centro de costos','Seleciona actividad','CP COMPENSATORIO','2024-02-12 11:42:14'),(9,'DIANA LUCIA BARON RIOS','ENERO','MARTES','Activo obra','DESMONTAJE','Seleciona centro de costos','Seleciona actividad','Causa','2024-02-12 17:39:22'),(10,'BONILLA GIRALDO OSCAR IVAN','junio','MIERCOLES','2024-02-21','SOLDADURA','Seleciona centro de costos','Seleciona actividad','Causa','2024-02-13 07:26:36'),(11,'BLANDON BLANDON EDUARD','ENERO','LUNES','Activo en planta','Actividad obra','SF P SANTA FE PULIDA','ORGANIZACION PLANTA','Causa','2024-02-13 08:12:38');
/*!40000 ALTER TABLE `formulario_reporte_diario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-22  9:53:15
