-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 05:42 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1830511054`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga_beli`, `harga_jual`, `stok`) VALUES
('001', 'Komputer', 4000000, 5000000, 4),
('002', 'Laptop', 10500055, 11000000, -5),
('003', 'Smartphone', 3000000, 4500000, 194),
('004', 'Mouse', 66000, 80000, 50),
('005', 'Headset', 150000, 200000, 299),
('006', 'Speaker', 150000, 200000, 12),
('007', 'Memory Card', 60000, 100000, 45),
('008', 'Printer', 1000000, 1500000, 88),
('009', 'Scanner', 300000, 500000, 45);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `username`, `password`, `alamat`, `tempatlahir`, `tanggallahir`, `prodi`, `foto`) VALUES
('1830511067', 'Citra Ayunda Salsabila', 'citra67', 'Jl.Ciaul', 'Banten', '1998-06-18', 'Teknik Sipil', 'foto/Citra Ayunda Salsabila.jpeg'),
('1830511101', 'Dian Rahmawati', 'dian101', 'Sukaraja', 'Yogyakarta', '1990-09-18', 'Kimia', 'foto/Dian Rahmawati.jpeg'),
('1830511124', 'Azhilla Margiani Saraswati', 'azhilla124', 'Cigunung', 'Jakarta', '2000-12-24', 'Pendidikan Guru SD', 'foto/Azhilla Margiani Saraswati.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `kd_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `kd_barang`, `jumlah`, `tanggal`) VALUES
(68, 1, 4, '2019-06-20 08:09:06'),
(71, 7, 7, '2019-07-01 14:07:40'),
(72, 3, 6, '2019-07-01 17:32:13'),
(73, 6, 3, '2019-07-01 17:48:19'),
(74, 7, 5, '2019-07-01 18:06:10'),
(76, 5, 1, '2019-07-01 18:15:06'),
(77, 8, 2, '2019-07-02 23:07:05'),
(79, 1, 1, '2019-07-03 09:31:40'),
(80, 2, 6, '2020-02-06 04:55:49'),
(81, 2, 3, '2020-12-11 03:59:46'),
(82, 2, 4, '2021-01-14 13:09:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
