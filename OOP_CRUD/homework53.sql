-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.18-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for exercise1
CREATE DATABASE IF NOT EXISTS `exercise1` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `exercise1`;

-- Dumping structure for table exercise1.child
CREATE TABLE IF NOT EXISTS `child` (
  `name` varchar(50) NOT NULL,
  `ssn` int(11) NOT NULL,
  `age` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `ssn_fk` (`ssn`),
  CONSTRAINT `ssn_fk` FOREIGN KEY (`ssn`) REFERENCES `employees` (`ssn`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table exercise1.child: ~0 rows (approximately)
/*!40000 ALTER TABLE `child` DISABLE KEYS */;
/*!40000 ALTER TABLE `child` ENABLE KEYS */;

-- Dumping structure for table exercise1.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `dno` int(11) NOT NULL DEFAULT 0,
  `dname` varchar(50) DEFAULT NULL,
  `budget` int(11) DEFAULT NULL,
  PRIMARY KEY (`dno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table exercise1.departments: ~0 rows (approximately)
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;

-- Dumping structure for table exercise1.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `ssn` int(11) NOT NULL,
  `salary` int(11) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `dno` int(11) DEFAULT NULL,
  PRIMARY KEY (`ssn`),
  KEY `dno_fk` (`dno`),
  CONSTRAINT `dno_fk` FOREIGN KEY (`dno`) REFERENCES `departments` (`dno`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table exercise1.employees: ~0 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
