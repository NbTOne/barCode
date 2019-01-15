-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: localhost    Database: tiaoma
-- ------------------------------------------------------
-- Server version	5.5.53-log

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
-- Table structure for table `tp_user`
--

DROP TABLE IF EXISTS `tp_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tp_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tp_user`
--

LOCK TABLES `tp_user` WRITE;
/*!40000 ALTER TABLE `tp_user` DISABLE KEYS */;
INSERT INTO `tp_user` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `tp_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tp_user_order`
--

DROP TABLE IF EXISTS `tp_user_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tp_user_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `supplier` varchar(20) DEFAULT NULL,
  `vender` varchar(20) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `number` int(6) DEFAULT '1',
  `bid` float DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tp_user_order`
--

LOCK TABLES `tp_user_order` WRITE;
/*!40000 ALTER TABLE `tp_user_order` DISABLE KEYS */;
INSERT INTO `tp_user_order` VALUES (31,'饼干','200ml','大润发','娃哈哈有限公司','978718220867721',22,1.5,2.5),(30,'饼干','200ml','大润发','娃哈哈有限公司','978718230867721',22,1.5,2.5),(28,'牛奶','200ml','大润发','娃哈哈有限公司','978718130567721',22,1.5,2.5),(29,'牛奶','200ml','大润发','娃哈哈有限公司','978718130867721',22,1.5,2.5),(27,'牛奶','200ml','大润发','娃哈哈有限公司','978718130557721',22,1.5,2.5),(25,'牛奶','200ml','大润发','娃哈哈有限公司','978718130257721',22,1.5,2.5),(23,'牛奶','200ml','大润发','娃哈哈有限公司','978718180657721',22,1.5,2.5),(24,'牛奶','200ml','大润发','娃哈哈有限公司','978718180257721',22,1.5,2.5),(26,'牛奶','200ml','大润发','娃哈哈有限公司','978718130357721',22,1.5,2.5),(32,'饼干','200ml','大润发','娃哈哈有限公司','978718220866721',22,1.5,2.5),(33,'饼干','200ml','大润发','娃哈哈有限公司','978718820866721',22,1.5,2.5),(34,'饼干','200ml','大润发','娃哈哈有限公司','978718890866721',22,1.5,2.5),(35,'饼干','200ml','大润发','娃哈哈有限公司','978718890869721',22,1.5,2.5),(36,'饼干','200ml','大润发','娃哈哈有限公司','978718990869721',22,1.5,2.5),(37,'饼干','200ml','大润发','娃哈哈有限公司','978718990868721',22,1.5,2.5),(38,'饼干','200ml','大润发','娃哈哈有限公司','978718992868721',22,1.5,2.5),(39,'饼干','200ml','大润发','娃哈哈有限公司','978718992898721',22,1.5,2.5),(40,'饼干','200ml','大润发','娃哈哈有限公司','978718992858721',22,1.5,2.5),(41,'饼干','200ml','大润发','娃哈哈有限公司','978710992858721',22,1.5,2.5),(42,'饼干','200ml','大润发','娃哈哈有限公司','977710992858721',22,1.5,2.5),(43,'饼干','200ml','大润发','娃哈哈有限公司','977710992868721',22,1.5,2.5);
/*!40000 ALTER TABLE `tp_user_order` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-25 13:31:46
