-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 02:57 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa_pw3`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--
-- Error reading structure for table mahasiswa_pw3.mahasiswa: #1932 - Table &#039;mahasiswa_pw3.mahasiswa&#039; doesn&#039;t exist in engine
-- Error reading data for table mahasiswa_pw3.mahasiswa: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `mahasiswa_pw3`.`mahasiswa`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa2`
--
-- Error reading structure for table mahasiswa_pw3.mahasiswa2: #1932 - Table &#039;mahasiswa_pw3.mahasiswa2&#039; doesn&#039;t exist in engine
-- Error reading data for table mahasiswa_pw3.mahasiswa2: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `mahasiswa_pw3`.`mahasiswa2`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa3`
--

CREATE TABLE `mahasiswa3` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(33) NOT NULL,
  `gender` varchar(9) NOT NULL,
  `alamat` varchar(33) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa3`
--

INSERT INTO `mahasiswa3` (`nim`, `nama`, `gender`, `alamat`, `foto`) VALUES
('12432', 'fsankaons', 'Pria', 'oamfaklw', '24-foto.jpg'),
('1490739', 'fasemifk', 'Pria', 'fapdnij', '-'),
('213213', 'Coeg', 'Pria', 'jln.apa', ''),
('232085', 'adwjfwi9a', 'Pria', 'wadawfgmmofdm', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa3`
--
ALTER TABLE `mahasiswa3`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
