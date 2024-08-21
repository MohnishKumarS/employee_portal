-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


USE employee_portal;

-- Dumping structure for table employee_portal.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(255) DEFAULT NULL,
  `emp_name` varchar(255) DEFAULT NULL,
  `emp_dep` varchar(255) DEFAULT NULL,
  `emp_mobile` varchar(255) DEFAULT NULL,
  `emp_doj` varchar(255) DEFAULT NULL,
  `emp_email` varchar(255) DEFAULT NULL,
  `emp_pass` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empID_index` (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table employee_portal.employees: ~3 rows (approximately)
INSERT INTO `employees` (`id`, `emp_id`, `emp_name`, `emp_dep`, `emp_mobile`, `emp_doj`, `emp_email`, `emp_pass`, `created_at`) VALUES
	(1, 'E070', 'Monish', 'Developer', '567567567', '2024-08-01', 'poyidev292@givehit.com', '$2y$10$w0nVQXVRSu3IBx/FME0oxOPtmJPK.YHLP/XP6FICzcNKdecWWi5Bi', '2024-08-17 12:53:05'),
	(2, 'EWH020', 'Dinesh', 'Developer', '5675675757', '2024-06-14', 'poyidev292@givehit.com', '$2y$10$VmsAJeP8rqasLg7mmPGjROnEbDzmUHE3iCBBysLy/OrJp9UlVhk/i', '2024-08-17 13:20:44'),
	(11, 'EWH0202', 'Leess', 'Content Writer', '68678677868', '2024-07-11', ' poyidev292@givehit.com', '12345', '2024-08-20 04:59:28');

-- Dumping structure for table employee_portal.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table employee_portal.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
	(1, 'moni', 'poyidev292@givehit.com', '1234', 'user');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
