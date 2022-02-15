-- -------------------------------------------------------------
-- TablePlus 4.5.2(402)
--
-- https://tableplus.com/
--
-- Database: ci4_sinergy_dashboard
-- Generation Time: 2022-02-15 14:12:47.4850
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `barang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `kuantitas` int NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `detailpermintaan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `kuantitas` int NOT NULL,
  `id_permintaan` int NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `detailpermintaan_ibfk_1` (`id_permintaan`),
  CONSTRAINT `detailpermintaan_ibfk_1` FOREIGN KEY (`id_permintaan`) REFERENCES `permintaanbarang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `migrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

CREATE TABLE `operasionals` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `proyek` varchar(100) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `w_berangkat` date DEFAULT NULL,
  `w_pulang` date DEFAULT NULL,
  `transport` int DEFAULT NULL,
  `tol` int DEFAULT NULL,
  `parkir` int DEFAULT NULL,
  `makan` int DEFAULT NULL,
  `lainnya` varchar(20) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `status_gm` tinyint(1) DEFAULT '0',
  `status_fm` tinyint(1) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

CREATE TABLE `permintaanbarang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `proyek` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` tinyint(1) NOT NULL DEFAULT '0',
  `verified_gudang` tinyint(1) NOT NULL DEFAULT '0',
  `verified_gm` tinyint(1) NOT NULL DEFAULT '0',
  `id_user` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int DEFAULT NULL,
  `role` varchar(100) DEFAULT 'staff',
  `password` varchar(100) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

INSERT INTO `barang` (`id`, `nama_barang`, `satuan`, `tipe`, `kuantitas`, `update_at`, `id_user`) VALUES
(3, 'Laptop', 'pack', 'Thinkpad', 5, '2022-02-02 13:31:59', NULL),
(6, 'Nasi Goreng', 'pack', 'Thinkpad', 2, '2022-02-02 17:35:29', NULL),
(7, 'Hape', 'kg', 'j2 prime', 12, '2022-02-15 12:21:58', NULL);

INSERT INTO `detailpermintaan` (`id`, `nama_barang`, `tipe`, `satuan`, `kuantitas`, `id_permintaan`, `updated_at`) VALUES
(21, 'Laptop', 'Thinkpad', 'Thinkpad', 4, 9, '2022-02-02 06:30:31');

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-02-03-072238', 'App\\Database\\Migrations\\Users', 'default', 'App', 1643874478, 1),
(2, '2022-02-08-164431', 'App\\Database\\Migrations\\Operasional', 'default', 'App', 1644339245, 2);

INSERT INTO `operasionals` (`id`, `proyek`, `lokasi`, `w_berangkat`, `w_pulang`, `transport`, `tol`, `parkir`, `makan`, `lainnya`, `keterangan`, `status_gm`, `status_fm`, `created_at`, `updated_at`) VALUES
(1, 'Pengecatan Gedung', 'Depok', '2022-02-16', '2022-02-17', 1000000, 50000, 2000, 50000, '60000', 'Contoh keterangan', 1, 1, '2022-02-15 00:38:05', '2022-02-15 00:38:49'),
(2, 'Kampus IPB Baranangsiang', 'Bogor', '2022-02-15', '2022-02-26', 123, 123, 123, 123, '123', 'Contoh', 1, 1, '2022-02-15 00:43:39', '2022-02-15 00:44:38');

INSERT INTO `permintaanbarang` (`id`, `proyek`, `lokasi`, `tanggal_pengajuan`, `tanggal_pengembalian`, `status_pengembalian`, `verified_gudang`, `verified_gm`, `id_user`, `created_at`, `update_at`) VALUES
(5, 'Jalan', 'Bandung', '2022-02-22', '2022-02-10', 1, 1, 1, NULL, '2022-02-01 21:12:35', '2022-02-01 21:12:35'),
(9, 'Bangun Tidur', 'Cirebon', '2022-03-04', '2022-03-12', 0, 0, 0, NULL, '2022-02-02 18:25:34', '2022-02-02 18:25:34');

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `role`, `password`) VALUES
(1, 'Arsyandi Pratama', 'arsyandi.develop@gmail.com', 2147483647, 'staff', '$2y$10$h/c9wVOK5pEZ75SQUlOvm.pEtY0arsVXkV0ehVORzzUWhmISHs8r2'),
(2, 'Mohammad Toha', 'paktoha@gmail.com', 2147483647, 'manager', '$2y$10$XFd3KkdzjcrGeCXpqPPxvO5v4PfZdUxfvHaiz/lh9bvwSUYnXOzWS'),
(3, 'Lina Nainggolan', 'bulina@gmail.com', 2147483647, 'finance', '$2y$10$7bBC4Ug.cj.kgcgREMLzUe2bhsZReh9sAhaiYk.gcSgJkQcwYvbtm');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;