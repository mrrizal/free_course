-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: free_course
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'Linux Container','<p style=\"text-align: justify;\">Linux Container (LXC) merupakan virtualisasi pada level system operasi. Yang dimana bertujuan untuk mengisolasi Linux System (containers) pada control host (system linux milik kita) menggunakan single kernel. Jadi Linux Container tidak benar&rdquo; membuat virtual machine, tapi hanya membuat virtual environment seolah olah kita memiliki banyak sistem operasi pada satu mesin.</p>\r\n<p style=\"text-align: justify;\">Linux Kernel menyediakan cgroups yang berfungsi untuk limitation dan prioritization resouce seperti CPU, memory, block I/O, network, dll tanpa perlu menjalankan virtual machine (misal menjalankan virtualbox), dan juga namespace isolation yang berfungsi secara penuh mengisolasi applications view of the operating environment, including process trees, networking, user IDs, dan mounted file system.</p>\r\n<p style=\"text-align: justify;\">LXC mengkombinasikan cgroups dan dukungan untuk namespace isolation untuk menyediakan isolated environment untuk application. Docker dapat menggunakan LXC sebagai execution drivers, enabling image management and menyediakan deployment services.</p>'),(2,'Docker','<p style=\"text-align: justify;\">Docker, merupakan sebuah container (seperti linux container) yang berfungsi untuk meng isolasi system / application. Sama halnya dengan linux container, docker juga merupakan virtual environment dimana kita dapat membuat pc / komputer kita seolah olah memiliki banyak system operasi didalam nya tanpa menjalankan virtual machine.</p>\r\n<p style=\"text-align: justify;\">Docker merupakan aplikasi client server, berikut merupakan arsitektur docker :</p>\r\n<p style=\"text-align: justify;\"><img src=\"https://docs.docker.com/engine/article-img/architecture.svg\" alt=\"docker-architecture\" width=\"541\" height=\"282\" /></p>'),(10,'Pemrograman PHP','<p style=\"text-align: justify;\">PHP adalah singkatan dari \"PHP : Hypertext Preprocessor\", yaitu bahasa pemrograman yang digunakan secara luas untuk penanganan pembuatan dan pengembangan sebuah situ web dan bisa digunakan bersamaan dengan HTML. PHP diciptakan oleh Radmus Ledorf pertama kali tahun 1994. Pada awalnya PHP adalah singatakan dari \"Personal Home Page Tools\". Selanjutnya diganti menjadi FI (\"Forms Interpreter\"). Sejak versi 3.0, nama bahasa ini diubah menjadi \"PHP : Hypertext Preprocessor\" dengan singkatannya \"PHP\". PHP versi terbaru adalah versi ke-7. Berdasarkan survey Netcraft pada bulan Desember 1999, lebih dari sejuta site menggunakan PHP, di antaranya adalah NASA, Mitsubishi, dan RedHat</p>');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-26 11:10:40
