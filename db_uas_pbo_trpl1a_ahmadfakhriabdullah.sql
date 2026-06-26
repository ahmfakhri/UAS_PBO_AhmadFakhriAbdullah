-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2026 at 02:16 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_pbo_trpl1a_ahmadfakhriabdullah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `id_mahasiswa` int NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `semester` int NOT NULL,
  `tarif_ukt_nominal` decimal(12,2) NOT NULL,
  `jenis_pembiayaan` enum('Mandiri','BidikMisi','Prestasi') NOT NULL,
  `golongan_ukt` varchar(10) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `nomor_kip_kuliah` varchar(30) DEFAULT NULL,
  `dana_saku_subsidi` decimal(12,2) DEFAULT NULL,
  `nama_instansi_beasiswa` varchar(100) DEFAULT NULL,
  `minimal_ipk_syarat` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `nim`, `semester`, `tarif_ukt_nominal`, `jenis_pembiayaan`, `golongan_ukt`, `nama_wali`, `nomor_kip_kuliah`, `dana_saku_subsidi`, `nama_instansi_beasiswa`, `minimal_ipk_syarat`) VALUES
(1, 'Ahmad Fakhri', '231101001', 4, 4500000.00, 'Mandiri', 'UKT 5', 'Abdullah', NULL, NULL, NULL, NULL),
(2, 'Budi Santoso', '231101002', 2, 3500000.00, 'Mandiri', 'UKT 3', 'Sutrisno', NULL, NULL, NULL, NULL),
(3, 'Citra Lestari', '231101003', 6, 5000000.00, 'Mandiri', 'UKT 6', 'Supriyadi', NULL, NULL, NULL, NULL),
(4, 'Dewi Anggraini', '231101004', 4, 2500000.00, 'Mandiri', 'UKT 2', 'Sugeng', NULL, NULL, NULL, NULL),
(5, 'Eko Prasetyo', '231101005', 8, 5500000.00, 'Mandiri', 'UKT 7', 'Mulyono', NULL, NULL, NULL, NULL),
(6, 'Fajar Nugroho', '231101006', 2, 4000000.00, 'Mandiri', 'UKT 4', 'Slamet', NULL, NULL, NULL, NULL),
(7, 'Gita Permata', '231101007', 1, 2000000.00, 'Mandiri', 'UKT 1', 'Hartono', NULL, NULL, NULL, NULL),
(8, 'Hendra Wijaya', '231101008', 4, 0.00, 'BidikMisi', NULL, NULL, 'KIP001', 700000.00, NULL, NULL),
(9, 'Indah Sari', '231101009', 6, 0.00, 'BidikMisi', NULL, NULL, 'KIP002', 700000.00, NULL, NULL),
(10, 'Joko Saputra', '231101010', 2, 0.00, 'BidikMisi', NULL, NULL, 'KIP003', 750000.00, NULL, NULL),
(11, 'Kartika Dewi', '231101011', 8, 0.00, 'BidikMisi', NULL, NULL, 'KIP004', 800000.00, NULL, NULL),
(12, 'Lukman Hakim', '231101012', 4, 0.00, 'BidikMisi', NULL, NULL, 'KIP005', 700000.00, NULL, NULL),
(13, 'Maya Putri', '231101013', 2, 0.00, 'BidikMisi', NULL, NULL, 'KIP006', 750000.00, NULL, NULL),
(14, 'Nanda Pratama', '231101014', 1, 0.00, 'BidikMisi', NULL, NULL, 'KIP007', 700000.00, NULL, NULL),
(15, 'Olivia Rahma', '231101015', 4, 0.00, 'Prestasi', NULL, NULL, NULL, NULL, 'Bank Indonesia', 3.50),
(16, 'Putra Mahendra', '231101016', 6, 0.00, 'Prestasi', NULL, NULL, NULL, NULL, 'Djarum Foundation', 3.75),
(17, 'Qori Anisa', '231101017', 2, 0.00, 'Prestasi', NULL, NULL, NULL, NULL, 'Pemda Cilacap', 3.40),
(18, 'Rizky Ramadhan', '231101018', 8, 0.00, 'Prestasi', NULL, NULL, NULL, NULL, 'KIP Prestasi', 3.60),
(19, 'Salsa Amelia', '231101019', 4, 0.00, 'Prestasi', NULL, NULL, NULL, NULL, 'BRI Peduli', 3.50),
(20, 'Teguh Prakoso', '231101020', 2, 0.00, 'Prestasi', NULL, NULL, NULL, NULL, 'Pertamina Foundation', 3.70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `id_mahasiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

