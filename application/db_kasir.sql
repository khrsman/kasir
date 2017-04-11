-- MySQL dump 10.13  Distrib 5.7.13, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: kasir
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

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
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barang` (
  `id_barang` varchar(50) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `id_satuan` int(10) DEFAULT NULL,
  `id_kategori` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_barang`),
  UNIQUE KEY `id_barang_UNIQUE` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` VALUES ('10','Orci Institute',9,7),('100','Aliquam Arcu Corp.',1,8),('11','Eu Incorporated',8,9),('12','Feugiat Inc.',10,10),('13','Laoreet PC',9,6),('14','Elit Associates',1,1),('15','Etiam Ltd',4,5),('16','Tempor Erat Neque Incorporated',7,7),('17','Nonummy PC',6,10),('18','Montes Nascetur Ridiculus LLC',8,8),('19','Erat Vivamus PC',8,10),('2','Tellus Non Magna Ltd',9,1),('20','Dui Nec Ltd',4,1),('21','Enim Mi Tempor Limited',4,5),('22','Phasellus Company',5,8),('23','Pellentesque Associates',8,9),('24','Viverra Donec Tempus Corporation',9,1),('25','Suspendisse Ac Metus Consulting',6,1),('26','Porttitor Scelerisque Industries',7,3),('27','Tempor Bibendum Donec Foundation',2,4),('28','Conubia Nostra LLC',10,5),('29','Morbi Tristique Senectus Ltd',3,7),('3','Ac LLC',5,4),('30','Dis Parturient Montes Company',1,10),('31','Vitae Dolor Donec Institute',3,3),('32','Ipsum Porta Elit Corp.',6,9),('33','Nulla Ante Iaculis Company',1,8),('34','Fringilla Limited',1,1),('35','Tristique Pharetra Institute',9,6),('36','Mauris Ut Consulting',5,9),('37','Orci Quis Lectus Consulting',5,9),('38','Diam Dictum Foundation',7,3),('39','Praesent Limited',1,1),('4','Duis Gravida Praesent Inc.',7,7),('40','A Nunc In Limited',9,10),('41','Neque Associates',9,4),('42','Amet PC',6,9),('43','Arcu Imperdiet Associates',6,7),('44','Nisi Magna Consulting',10,2),('45','Ornare Inc.',8,8),('46','At Incorporated',7,4),('47','Lacus Vestibulum Lorem Consulting',7,9),('48','Lorem Tristique LLP',9,9),('49','Eu Turpis Corporation',9,1),('5','Pede Nec Company',4,6),('50','Montes Nascetur Ridiculus Incorporated',7,3),('51','Orci LLP',6,6),('52','Mus Consulting',2,2),('53','Enim Limited',8,8),('54','Varius Orci Institute',3,10),('55','Consectetuer Cursus Et Corporation',2,3),('56','Fermentum Corporation',9,7),('57','Augue Porttitor Interdum Institute',7,2),('58','Morbi Metus Vivamus Corporation',3,6),('59','Eget Institute',1,7),('6','Cum Sociis Consulting',6,9),('60','Proin Nisl Company',10,8),('61','Est Consulting',5,4),('62','Faucibus Id Libero Incorporated',1,8),('63','Neque Nullam Ut LLC',3,9),('64','Velit In Ltd',3,1),('65','Amet Consulting',8,7),('66','Lobortis Quam A Institute',8,3),('67','Quisque PC',1,6),('68','Etiam Consulting',9,3),('69','Erat Volutpat Foundation',1,7),('7','Nullam Vitae PC',6,10),('70','Ipsum Corporation',5,7),('71','Congue A Aliquet Company',5,2),('72','Vel Limited',10,2),('73','Ipsum Associates',8,2),('74','Placerat Institute',7,4),('75','Consequat Industries',5,9),('76','Duis Corp.',1,8),('77','Mattis Cras Corp.',10,10),('78','Vulputate Posuere Associates',1,4),('79','Lectus Sit Amet Company',7,2),('8','A Associates',3,7),('80','Nam Nulla Magna Limited',10,5),('81','Consectetuer Rhoncus Nullam Consulting',7,3),('82','Nunc Risus Varius Institute',6,5),('83','Et Magnis Dis Ltd',1,7),('84','Euismod Urna Company',7,3),('85','Enim Diam Vel Corporation',10,9),('86','Nunc Foundation',2,2),('87','Auctor Quis Tristique Corp.',4,1),('88','Nunc Risus Varius Limited',5,6),('89','Eu Inc.',5,5),('9','Mollis Phasellus Libero LLC',9,9),('90','Nam Corporation',3,4),('91','Sem Corporation',1,1),('92','Vehicula Pellentesque Tincidunt Inc.',7,7),('93','Donec Felis Orci Industries',4,9),('94','Mi Foundation',2,9),('95','Scelerisque Ltd',2,4),('96','In PC',4,2),('97','Vehicula Consulting',7,8),('98','Commodo At Corp.',3,3),('99','Non LLC',7,6);
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_brand`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand`
--

LOCK TABLES `brand` WRITE;
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `harga`
--

DROP TABLE IF EXISTS `harga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `harga` (
  `id_barang` int(11) DEFAULT NULL,
  `harga_beli` varchar(10) DEFAULT NULL,
  `harga_jual` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `harga`
--

LOCK TABLES `harga` WRITE;
/*!40000 ALTER TABLE `harga` DISABLE KEYS */;
/*!40000 ALTER TABLE `harga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'Makanan'),(2,'Minuman'),(3,'Alat Tulis');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pembelian`
--

DROP TABLE IF EXISTS `pembelian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  PRIMARY KEY (`id_pembelian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembelian`
--

LOCK TABLES `pembelian` WRITE;
/*!40000 ALTER TABLE `pembelian` DISABLE KEYS */;
/*!40000 ALTER TABLE `pembelian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penjualan`
--

DROP TABLE IF EXISTS `penjualan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penjualan` (
  `id_penjualan` int(10) NOT NULL,
  PRIMARY KEY (`id_penjualan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penjualan`
--

LOCK TABLES `penjualan` WRITE;
/*!40000 ALTER TABLE `penjualan` DISABLE KEYS */;
/*!40000 ALTER TABLE `penjualan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satuan`
--

DROP TABLE IF EXISTS `satuan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satuan` (
  `id_satuan` int(10) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_satuan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satuan`
--

LOCK TABLES `satuan` WRITE;
/*!40000 ALTER TABLE `satuan` DISABLE KEYS */;
INSERT INTO `satuan` VALUES (1,'Biji'),(2,'Sachet'),(3,'Pcs'),(4,'Box'),(5,'Unit');
/*!40000 ALTER TABLE `satuan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-11  9:22:42
