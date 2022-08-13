-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 09:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dl_recordtest`
--

CREATE TABLE `tb_dl_recordtest` (
  `name` varchar(50) NOT NULL,
  `num` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `event` text NOT NULL,
  `date` date NOT NULL,
  `status` text NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dl_recordtest`
--

INSERT INTO `tb_dl_recordtest` (`name`, `num`, `address`, `event`, `date`, `status`, `id`) VALUES
('Jose Protacio Y Realonda', '09171852365', '000 Manil', 'Baptism', '2022-09-09', 'Verifying', 1),
('Francisco Mercado', '02223335544', '010 Manil', 'Wedding', '2022-08-11', 'Completing Requirements', 2),
('Teodora Alonso', '054836542844', '200 Makati', 'Funeral', '2022-08-24', 'Completing Requirements', 3),
('Saturnina Rizal', '07894356665', '555 Sardines', 'Wedding', '2022-09-23', 'Completing Requirements', 4),
('Paciano Rizal', '04687254935', '888 Makati', 'Wedding', '2022-09-26', 'Completing Requirements', 5),
('Narcisa Rizal', '09453581254', '989 Pasay', 'Funeral', '2022-10-19', 'Completing Requirements', 6),
('Olympia Rizal', '09543581265', '777 Pasig', 'Baptism', '2022-08-30', 'Completing Requirements', 7),
('Lucia Rizal', '09456812357', '242 Kaskdjhkj', 'Baptism', '2022-09-16', 'Verifying', 8),
('Maria Rizal', '01962587895', '336 Soaklaks', 'Baptism', '2022-09-29', 'Completing Requirements', 9),
('Concepcion Rizal', '09145632585', '92334 Anankng', 'House Blessing', '2022-10-19', 'Verifying', 10),
('Josefa', '04687254935', '3454 Hahahaha', '', '2022-10-11', 'Completing Requirements', 11),
('Trinidad', '09453581254', '101 Produce', 'Wedding', '2022-10-16', 'Verifying', 12),
('Soledad Rizal', '01254789632', '827 Wigatitolforyu', 'Car Blessing', '2022-10-23', 'Completing Requirements', 13),
('Jose Protacio Y Realonda', '09171852365', '000 Manil', 'Baptism', '2022-09-09', 'Verifying', 29),
('Francisco Mercado', '02223335544', '010 Manil', 'Wedding', '2022-08-11', 'Completing Requirements', 30),
('Teodora Alonso', '054836542844', '200 Makati', 'Funeral', '2022-08-24', 'Completing Requirements', 31),
('Saturnina Rizal', '07894356665', '555 Sardines', 'Wedding', '2022-09-23', 'Completing Requirements', 32),
('Paciano Rizal', '04687254935', '888 Makati', 'Wedding', '2022-09-26', 'Completing Requirements', 33),
('Narcisa Rizal', '09453581254', '989 Pasay', 'Funeral', '2022-10-19', 'Completing Requirements', 34),
('Olympia Rizal', '09543581265', '777 Pasig', 'Baptism', '2022-08-30', 'Completing Requirements', 35),
('Lucia Rizal', '09456812357', '242 Kaskdjhkj', 'Baptism', '2022-09-16', 'Verifying', 36),
('Maria Rizal', '01962587895', '336 Soaklaks', 'Baptism', '2022-09-29', 'Completing Requirements', 37),
('Concepcion Rizal', '09145632585', '92334 Anankng', 'House Blessing', '2022-10-19', 'Verifying', 38),
('Josefa', '04687254935', '3454 Hahahaha', '', '2022-10-11', 'Completing Requirements', 39),
('Trinidad', '09453581254', '101 Produce', 'Wedding', '2022-10-16', 'Verifying', 40),
('Soledad Rizal', '01254789632', '827 Wigatitolforyu', 'Car Blessing', '2022-10-23', 'Completing Requirements', 41),
('Jose Protacio Y Realonda', '09171852365', '000 Manil', 'Baptism', '2022-09-09', 'Verifying', 44),
('Francisco Mercado', '02223335544', '010 Manil', 'Wedding', '2022-08-11', 'Completing Requirements', 45),
('Teodora Alonso', '054836542844', '200 Makati', 'Funeral', '2022-08-24', 'Completing Requirements', 46),
('Saturnina Rizal', '07894356665', '555 Sardines', 'Wedding', '2022-09-23', 'Completing Requirements', 47),
('Paciano Rizal', '04687254935', '888 Makati', 'Wedding', '2022-09-26', 'Completing Requirements', 48),
('Narcisa Rizal', '09453581254', '989 Pasay', 'Funeral', '2022-10-19', 'Completing Requirements', 49),
('Olympia Rizal', '09543581265', '777 Pasig', 'Baptism', '2022-08-30', 'Completing Requirements', 50),
('Lucia Rizal', '09456812357', '242 Kaskdjhkj', 'Baptism', '2022-09-16', 'Verifying', 51),
('Maria Rizal', '01962587895', '336 Soaklaks', 'Baptism', '2022-09-29', 'Completing Requirements', 52),
('Concepcion Rizal', '09145632585', '92334 Anankng', 'House Blessing', '2022-10-19', 'Verifying', 53),
('Josefa', '04687254935', '3454 Hahahaha', '', '2022-10-11', 'Completing Requirements', 54),
('Trinidad', '09453581254', '101 Produce', 'Wedding', '2022-10-16', 'Verifying', 55),
('Soledad Rizal', '01254789632', '827 Wigatitolforyu', 'Car Blessing', '2022-10-23', 'Completing Requirements', 56),
('Jose Protacio Y Realonda', '09171852365', '000 Manil', 'Baptism', '2022-09-09', 'Verifying', 57),
('Francisco Mercado', '02223335544', '010 Manil', 'Wedding', '2022-08-11', 'Completing Requirements', 58),
('Teodora Alonso', '054836542844', '200 Makati', 'Funeral', '2022-08-24', 'Completing Requirements', 59),
('Saturnina Rizal', '07894356665', '555 Sardines', 'Wedding', '2022-09-23', 'Completing Requirements', 60),
('Paciano Rizal', '04687254935', '888 Makati', 'Wedding', '2022-09-26', 'Completing Requirements', 61),
('Narcisa Rizal', '09453581254', '989 Pasay', 'Funeral', '2022-10-19', 'Completing Requirements', 62),
('Olympia Rizal', '09543581265', '777 Pasig', 'Baptism', '2022-08-30', 'Completing Requirements', 63),
('Lucia Rizal', '09456812357', '242 Kaskdjhkj', 'Baptism', '2022-09-16', 'Verifying', 64),
('Maria Rizal', '01962587895', '336 Soaklaks', 'Baptism', '2022-09-29', 'Completing Requirements', 65),
('Concepcion Rizal', '09145632585', '92334 Anankng', 'House Blessing', '2022-10-19', 'Verifying', 66),
('Josefa', '04687254935', '3454 Hahahaha', '', '2022-10-11', 'Completing Requirements', 67),
('Trinidad', '09453581254', '101 Produce', 'Wedding', '2022-10-16', 'Verifying', 68),
('Soledad Rizal', '01254789632', '827 Wigatitolforyu', 'Car Blessing', '2022-10-23', 'Completing Requirements', 69);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dl_recordtest`
--
ALTER TABLE `tb_dl_recordtest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dl_recordtest`
--
ALTER TABLE `tb_dl_recordtest`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
