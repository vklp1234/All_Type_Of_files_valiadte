-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 01:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `0187cs161125`
--

-- --------------------------------------------------------

--
-- Table structure for table `vindata`
--

CREATE TABLE `vindata` (
  `doc1` varchar(200) NOT NULL,
  `doc2` varchar(200) NOT NULL,
  `pptfile` varchar(200) NOT NULL,
  `imgs` varchar(200) NOT NULL,
  `vdo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vindata`
--

INSERT INTO `vindata` (`doc1`, `doc2`, `pptfile`, `imgs`, `vdo`) VALUES
('NODAL CENTRE REGISTRATION.doc', 'All_new_Physics_lab_manual (1).doc', 'Atomic structure.ppt', 'vkl.jpeg', 'yh.mp4'),
('chapter1.doc', 'NODAL CENTRE REGISTRATION 1.doc', 'Atomic structure.ppt', '855-soc-1.jpg', 'Salam rocky bhai - new whatsapp status video-kgf-.mp4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
