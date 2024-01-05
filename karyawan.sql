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

-- Dumping structure for table karyawan.data_karyawan
CREATE TABLE IF NOT EXISTS `data_karyawan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table karyawan.data_karyawan: ~1 rows (approximately)
DELETE FROM `data_karyawan`;
INSERT INTO `data_karyawan` (`id`, `nip`, `nama`, `tgl_lahir`, `alamat`, `bagian`, `tlp`, `pendidikan`) VALUES
	(12, '121212121', 'adadajndsaj', '0001-01-01', 'nnjadas', 'Akunting', '15121', 'SMP'),
	(14, '2341231', 'Prad', '2024-01-04', 'lorem ipsum', 'Gudang', '0892913132', 'SMP');

-- Dumping structure for table karyawan.gaji
CREATE TABLE IF NOT EXISTS `gaji` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `periode` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `bagian` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `jabatan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `golongan` int DEFAULT NULL,
  `lembur` int DEFAULT NULL,
  `ppn` int DEFAULT NULL,
  `jamsostek` int DEFAULT NULL,
  `bonus` int DEFAULT NULL,
  `total_gajih` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table karyawan.gaji: ~0 rows (approximately)
DELETE FROM `gaji`;
INSERT INTO `gaji` (`id`, `nip`, `nama`, `periode`, `bagian`, `jabatan`, `golongan`, `lembur`, `ppn`, `jamsostek`, `bonus`, `total_gajih`) VALUES
	(3, '121212121', 'adadajndsaj', 'April', 'Akunting', 'Kepala Bidang', 4000000, 2, 3, NULL, 200000, '3930000'),
	(5, '2341231', 'Prad', 'Desember', 'Gudang', 'Direktur', 5500000, 10, 2, NULL, 500000000, '5640000');

-- Dumping structure for table karyawan.user
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table karyawan.user: ~1 rows (approximately)
DELETE FROM `user`;
INSERT INTO `user` (`username`, `pass`, `email`) VALUES
	('yudha', '12345', 'yudha@gmail.com');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
