-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 07:19 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geek`
--

-- --------------------------------------------------------

--
-- Table structure for table `adata`
--

DROP TABLE IF EXISTS `adata`;
CREATE TABLE IF NOT EXISTS `adata` (
  `rollno` varchar(80) NOT NULL,
  `email` varchar(77) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adata`
--

INSERT INTO `adata` (`rollno`, `email`) VALUES
('BT305179', 'ayushigupta@gmail.com'),
('BT305180', 'rabhishek733@gmail.com'),
('BT305181', 'akhilbhisht@gmail.com'),
('BT305182', 'arikshitbanyal@gmail.com'),
('BT305183', 'artisharma032@gmail.com'),
('BT305184', 'ashishchauhan9596@gmail.com'),
('BT305185', 'gammasharma01@gmail.com'),
('BT305186', 'hansagautam777@gmail.com'),
('BT305187', 'himanshusharma@gmail.com'),
('BT305188', 'kumarimausam1993@gmail.com'),
('BT305189', 'monicawithme11@gmail.com'),
('BT305190', 'pankajthakur@gmail.com'),
('BT305191', 'sanjeev@gmail.com'),
('BT305192', 'asheetalthakur143@gmail.com'),
('BT305193', 'shubhambhardwaj@gmail.com'),
('BT305194', 'srishtisuryawanshi767@gmail.com'),
('BT305195', 'tanya6766900@gmail.com'),
('BT305196', 'vishalsharma239258@gmail.com'),
('BT305197', 'vivekjaswal@gmail.com'),
('BT305198', 'arnavsingh@gmail.com'),
('BT305200', 'ashutoshverma33742@gmail.com'),
('BT305201', 'kbhupender@gmail.com'),
('BT305202', 'mandijitender@gmail.com'),
('BT305203', 'abc@gmail.com'),
('BT305204', 'kanchanbesta@gmail.com'),
('BT305205', 'nitishbhardwaj167@gmail.com'),
('BT305206', 'rajluxmi08@gmail.com'),
('BT305207', 'rajatthakursolan@gmail.com'),
('BT305208', 'shubhamnegi100@gmail.com'),
('BTL4050060', 'xyz@gmail.com'),
('BTL4050061', 'ddgf@gmail.com'),
('BTL4050062', 'shradhabhardwaj57@gmail.com'),
('BTL4050063', 'ruchikasharma.nbu@gmail.com'),
('BTL4050064', 'parth108naryal@gmail.com'),
('BTL4050065', 'vmamta944@gmail.com'),
('BTL4050066', 'seemakatwal07@gmail.com'),
('BTL4050067', 'bjhnb@gmail.com'),
('BTL4050068', 'bjjhnb@gmail.com'),
('11586', 'racer220p@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
