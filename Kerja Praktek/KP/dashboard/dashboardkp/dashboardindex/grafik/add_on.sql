-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 06:26 AM
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
-- Table structure for table `add_on`
--

CREATE TABLE `add_on` (
  `no` int(11) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `minipack` int(11) NOT NULL,
  `upgrade` int(11) NOT NULL,
  `second_stb` int(11) NOT NULL,
  `tm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_on`
--

INSERT INTO `add_on` (`no`, `tanggal`, `minipack`, `upgrade`, `second_stb`, `tm`) VALUES
(1, '2018-05-04', 1, 21, 1, 1),
(2, '2018-05-05', 0, 3, 0, 1),
(3, '2018-05-07', 1, 5, 0, 0),
(4, '2018-05-08', 1, 3, 0, 0),
(5, '2018-05-09', 6, 8, 0, 0),
(6, '2018-05-10', 9, 1, 0, 0),
(7, '2018-05-11', 0, 8, 0, 0),
(8, '2018-05-12', 1, 0, 0, 0),
(9, '2018-05-13', 3, 0, 0, 0),
(10, '2018-05-14', 3, 27, 0, 0),
(11, '2018-05-15', 9, 10, 0, 0),
(12, '2018-05-16', 8, 5, 0, 0),
(13, '2018-05-17', 1, 22, 0, 0),
(14, '2018-05-18', 2, 9, 0, 0),
(15, '2018-05-19', 6, 6, 0, 0),
(16, '2018-05-20', 1, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_on`
--
ALTER TABLE `add_on`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
