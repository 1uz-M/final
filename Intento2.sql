-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2021 at 10:57 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intento2`
--

-- --------------------------------------------------------

--
-- Table structure for table `registro`
--

CREATE TABLE `registro` (
  `seguro` text,
  `nombres` text,
  `apellidop` text,
  `apellidom` text,
  `nacimiento` date DEFAULT NULL,
  `membresia` text,
  `titular` text,
  `direccion` varchar(255) DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `genero` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registro`
--

INSERT INTO `registro` (`seguro`, `nombres`, `apellidop`, `apellidom`, `nacimiento`, `membresia`, `titular`, `direccion`, `codigo`, `correo`, `genero`) VALUES
('fesfsdf', 'fsdfdsf', 'fsfsdf', 'fdsfds', '2021-08-03', 'fddf', 'fddfd', 'fdfd', 4757, 'fdgdfg', 'Masculino'),
('fdfdsdfs', 'fdss', 'fsfsd', 'sffds', '2021-02-01', 'fsf', 'fssf', 'fssd', 12345, 'fdsfsfs', 'Masculino'),
('IMSS', 'Luis Francisco', 'Lopez', 'Perez', '1989-02-12', 'Premium', 'Luis Jorge Hernandez', 'Los Nogales', 12345, 'LuisJHdez_@gmail.com', 'Masculino'),
('IMSS', 'SFSDF', 'FDSF', 'SFSF', '2021-08-02', 'FDSDFS', 'FSFSD', 'DFSF', 54542, 'CFSFS', 'Femenino');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
