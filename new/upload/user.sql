-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2022 at 09:02 PM
-- Server version: 5.7.38
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholars_career`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nm` varchar(60) NOT NULL,
  `father` varchar(60) NOT NULL,
  `fnm` varchar(60) NOT NULL,
  `cnm` varchar(60) NOT NULL,
  `rno` varchar(60) NOT NULL,
  `eno` varchar(60) NOT NULL,
  `cno` varchar(60) NOT NULL,
  `grd` varchar(10) NOT NULL,
  `mo` varchar(20) NOT NULL,
  `dt` varchar(30) NOT NULL,
  `ca` varchar(20) NOT NULL,
  `ty` varchar(50) NOT NULL,
  `htt` varchar(30) NOT NULL,
  `ht` varchar(30) NOT NULL,
  `ja` varchar(30) NOT NULL,
  `pm` varchar(30) NOT NULL,
  `pra` varchar(30) NOT NULL,
  `cam` varchar(30) NOT NULL,
  `mom` varchar(30) NOT NULL,
  `dtm` varchar(30) NOT NULL,
  `tym` varchar(30) NOT NULL,
  `httm` varchar(30) NOT NULL,
  `htm` varchar(30) NOT NULL,
  `jam` varchar(30) NOT NULL,
  `pmm` varchar(30) NOT NULL,
  `pram` varchar(30) NOT NULL,
  `field2` varchar(50) NOT NULL,
  `field3` varchar(50) NOT NULL,
  `field4` varchar(50) NOT NULL,
  `field5` varchar(50) NOT NULL,
  `field6` varchar(50) NOT NULL,
  `field7` varchar(50) NOT NULL,
  `field8` varchar(50) NOT NULL,
  `field9` varchar(50) NOT NULL,
  `FILES_tmp` varchar(100) NOT NULL,
  `ADCA` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `total2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nm`, `father`, `fnm`, `cnm`, `rno`, `eno`, `cno`, `grd`, `mo`, `dt`, `ca`, `ty`, `htt`, `ht`, `ja`, `pm`, `pra`, `cam`, `mom`, `dtm`, `tym`, `httm`, `htm`, `jam`, `pmm`, `pram`, `field2`, `field3`, `field4`, `field5`, `field6`, `field7`, `field8`, `field9`, `FILES_tmp`, `ADCA`, `date`, `total2`) VALUES
(9, 'Gghh', 'Ghhh', 'Ghhh', 'Ghh', 'Ggyy', 'Ertt', 'Tfft', 'G', '', '', '60', '', '', '', '', '', '', '39', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1655832408595243865747180410323.jpg', 'Adca', '2022-06-22', '39/60'),
(10, 'Ghj', 'Dfh', 'Ghuj', 'Gj', 'Ghu', 'Ety', 'Hy', 'Ghh', '', '', '60', '', '', '', '', '', '', '39', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '16558325803265319355803684878616.jpg', 'Adca', '2022-06-22', '39/60');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
