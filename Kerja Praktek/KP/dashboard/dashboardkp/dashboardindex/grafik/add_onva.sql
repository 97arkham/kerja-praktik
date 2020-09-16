-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 07:38 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `add_on`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_onva`
--

CREATE TABLE `add_onva` (
  `no` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `minipack` int(11) NOT NULL,
  `upgrade` int(11) NOT NULL,
  `second_stb` int(11) NOT NULL,
  `tm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_onva`
--

INSERT INTO `add_onva` (`no`, `tanggal`, `minipack`, `upgrade`, `second_stb`, `tm`) VALUES
(1, '2018-05-04', 0, 5, 0, 0),
(2, '2018-05-05', 0, 1, 0, 0),
(3, '2018-05-07', 0, 1, 0, 0),
(4, '2018-05-08', 8, 2, 1, 0),
(5, '2018-05-09', 15, 8, 0, 0),
(6, '2018-05-10', 3, 1, 0, 0),
(7, '2018-05-11', 4, 7, 0, 0),
(8, '2018-05-12', 2, 4, 0, 0),
(9, '2018-05-13', 0, 0, 0, 0),
(10, '2018-05-14', 7, 5, 1, 0),
(11, '2018-05-15', 5, 1, 0, 0),
(12, '2018-05-16', 2, 4, 0, 0),
(13, '2018-05-17', 13, 11, 1, 0),
(14, '2018-05-18', 8, 0, 0, 0),
(15, '2018-05-19', 6, 2, 0, 0),
(16, '2018-05-20', 7, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_onva`
--
ALTER TABLE `add_onva`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
