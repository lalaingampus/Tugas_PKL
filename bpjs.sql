-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 01:38 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpjs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_apk`
--

CREATE TABLE `tb_apk` (
  `Kd_Apk` varchar(100) NOT NULL,
  `Nm_Apk` varchar(225) NOT NULL,
  `Sts_Apk` enum('Aktif','Tidak Aktif') NOT NULL,
  `Fungsi_Apk` text NOT NULL,
  `URL_Apk` varchar(255) NOT NULL,
  `Tgl_Golive_Apk` date NOT NULL,
  `IP_Apk` varchar(50) NOT NULL,
  `KdCluster` varchar(10) DEFAULT NULL,
  `KdDB` varchar(10) NOT NULL,
  `KdWS` varchar(10) NOT NULL,
  `KdRegis` int(100) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_apk`
--

INSERT INTO `tb_apk` (`Kd_Apk`, `Nm_Apk`, `Sts_Apk`, `Fungsi_Apk`, `URL_Apk`, `Tgl_Golive_Apk`, `IP_Apk`, `KdCluster`, `KdDB`, `KdWS`, `KdRegis`) VALUES
('', '', 'Aktif', '', '', '1970-01-01', '', 'CL001', 'DB001', 'WS001', 5),
('12345', 'MUHAMAD HAFIZH WIDODO', 'Aktif', 'adadasdsadwda', 'https://www.youtube.com/watch?v=6jSKldt7Eqs&list=PLhixgUqwRTjxglIswKp9mpkfPNfHkzyeN&index=5', '2019-11-26', '1', 'CL001', 'DB001', 'WS001', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cluster`
--

CREATE TABLE `tb_cluster` (
  `Kd_Cluster` varchar(10) NOT NULL,
  `Nm_Cluster` varchar(225) NOT NULL,
  `Sts_Cluster` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cluster`
--

INSERT INTO `tb_cluster` (`Kd_Cluster`, `Nm_Cluster`, `Sts_Cluster`) VALUES
('CL001', 'Cluster Kepersertaan', 'Aktif'),
('CL002', 'Cluster Collecting Iuran', 'Aktif'),
('CL099', 'Cluster Percobaan 2', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_db`
--

CREATE TABLE `tb_db` (
  `Kd_DB` varchar(10) NOT NULL,
  `Nm_DB` varchar(225) NOT NULL,
  `IP_DB` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_db`
--

INSERT INTO `tb_db` (`Kd_DB`, `Nm_DB`, `IP_DB`) VALUES
('DB001', 'Database Keuangan', '100.1.12.111'),
('DB002', 'Database Keanggotaan', '90.99.1.10'),
('DB003', 'Database Karyawan', '8.8.8.10'),
('DB004', 'Database Pelayanan', '7.77.777.1'),
('DB099', 'DB Percobaan 3', '10.11.1.1x2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_regis`
--

CREATE TABLE `tb_regis` (
  `Kd_Login` int(100) UNSIGNED NOT NULL,
  `Nm_Login` varchar(100) NOT NULL,
  `Eml_Login` varchar(100) NOT NULL,
  `Pass_Login` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_regis`
--

INSERT INTO `tb_regis` (`Kd_Login`, `Nm_Login`, `Eml_Login`, `Pass_Login`) VALUES
(4, 'basuki', 'pow@mai.com', '$2y$10$gEcIk826XEFe355O9OogtueFDOVNVIyCWEgeskMS4LxrWxtDxnckm'),
(5, '1212', 'cacat@gmail.com', '$2y$10$EpB3.SyW1TG/jl3HSykTpeqzwFowKNLlH/CiZoXAYEDl0GWrpITDe'),
(6, 'basuki', '123@mail.com', '$2y$10$hEo5rLBPvED0ZtItzBAXEeoHGpSuXJvAuuITK4yyfTU36MXmFD0HK'),
(7, 'basuki', 'cacate@gmail.com', '$2y$10$Fpxw.K/CdMTttflJKz8tH.UcGbRO6oTdd1MPOH1T1U1eCG5P8Mb8.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `Kd_Transaksi` int(10) NOT NULL,
  `No_Registrasi` varchar(100) NOT NULL,
  `Tgl_Masuk` date NOT NULL,
  `Tgl_Selesai` date NOT NULL,
  `aplikasi` varchar(100) CHARACTER SET latin1 NOT NULL,
  `versi` varchar(100) NOT NULL,
  `Tgl_Info` date NOT NULL,
  `fitur` text NOT NULL,
  `fungsi` text NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `perubahan` varchar(100) NOT NULL,
  `pengembangan` varchar(100) NOT NULL,
  `sysUpdate` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`Kd_Transaksi`, `No_Registrasi`, `Tgl_Masuk`, `Tgl_Selesai`, `aplikasi`, `versi`, `Tgl_Info`, `fitur`, `fungsi`, `keterangan`, `perubahan`, `pengembangan`, `sysUpdate`, `data`) VALUES
(20, '123', '2019-11-27', '2019-11-19', '', 'adadaa', '2019-10-30', '111', '1111', '1111', 'Normal', 'AdHoc', 'Penyempurnaan', '51453_Undangan Fuse 2019.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ws`
--

CREATE TABLE `tb_ws` (
  `Kd_WebSrv` varchar(10) NOT NULL,
  `Nm_WebSrv` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ws`
--

INSERT INTO `tb_ws` (`Kd_WebSrv`, `Nm_WebSrv`) VALUES
('WS001', 'Server Internasional'),
('WS002', 'Server Lokal'),
('WS003', 'Server Cloud'),
('WS004', 'Server Testing 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_apk`
--
ALTER TABLE `tb_apk`
  ADD PRIMARY KEY (`Kd_Apk`),
  ADD KEY `Kd_Cluster` (`KdCluster`),
  ADD KEY `Kd_DB` (`KdDB`),
  ADD KEY `Kd_WS` (`KdWS`),
  ADD KEY `KdRegis` (`KdRegis`);

--
-- Indexes for table `tb_cluster`
--
ALTER TABLE `tb_cluster`
  ADD PRIMARY KEY (`Kd_Cluster`);

--
-- Indexes for table `tb_db`
--
ALTER TABLE `tb_db`
  ADD PRIMARY KEY (`Kd_DB`);

--
-- Indexes for table `tb_regis`
--
ALTER TABLE `tb_regis`
  ADD PRIMARY KEY (`Kd_Login`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`Kd_Transaksi`);

--
-- Indexes for table `tb_ws`
--
ALTER TABLE `tb_ws`
  ADD PRIMARY KEY (`Kd_WebSrv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_regis`
--
ALTER TABLE `tb_regis`
  MODIFY `Kd_Login` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `Kd_Transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_apk`
--
ALTER TABLE `tb_apk`
  ADD CONSTRAINT `tb_apk_ibfk_2` FOREIGN KEY (`KdCluster`) REFERENCES `tb_cluster` (`Kd_Cluster`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_apk_ibfk_3` FOREIGN KEY (`KdDB`) REFERENCES `tb_db` (`Kd_DB`),
  ADD CONSTRAINT `tb_apk_ibfk_4` FOREIGN KEY (`KdWS`) REFERENCES `tb_ws` (`Kd_WebSrv`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_1` FOREIGN KEY (`aplikasi`) REFERENCES `tb_apk` (`Kd_Apk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
