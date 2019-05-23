-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2019 at 10:41 AM
-- Server version: 10.1.34-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_medlemmar`
--

CREATE TABLE `tb_medlemmar` (
  `nyckel` int(255) NOT NULL COMMENT 'nyckel',
  `username` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL COMMENT 'username',
  `password` varchar(255) NOT NULL COMMENT 'password',
  `Förnamn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL COMMENT 'Förnamn',
  `Efternamn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL COMMENT 'Efternamn',
  `Tfn` varchar(255) NOT NULL COMMENT 'Telefonnummer',
  `Admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Medlemsregister';

--
-- Dumping data for table `tb_medlemmar`
--

INSERT INTO `tb_medlemmar` (`nyckel`, `username`, `password`, `Förnamn`, `Efternamn`, `Tfn`, `Admin`) VALUES
(1, 'piggy1337', '12345', 'Isak', 'Wikman', '0706036127', 1),
(2, 'sedvin', 'sedvin', 'Edvin', 'Åkeson', '0701234567', 1),
(3, 'berra', 'berra', 'Anton', 'Stenberg', '0707654321', 0),
(4, 'Philly22', 'Jones123', 'Phil', 'Jones', '0701233284', 1),
(5, 'Romelu22', 'Lukaku123', 'Romelu', 'Lukaku', '1243543643', 0),
(6, 'Ingemar', 'Ceicer', 'Ingemar', 'Ceicer', '1234567890', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_medlemmar`
--
ALTER TABLE `tb_medlemmar`
  ADD PRIMARY KEY (`nyckel`),
  ADD UNIQUE KEY `nyckel` (`nyckel`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_medlemmar`
--
ALTER TABLE `tb_medlemmar`
  MODIFY `nyckel` int(255) NOT NULL AUTO_INCREMENT COMMENT 'nyckel', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
