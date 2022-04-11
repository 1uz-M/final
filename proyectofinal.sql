-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: proyectofinal
-- Tiempo de generación: 11-04-2022 a las 05:40:40
-- Versión del servidor: 8.0.28
-- Versión de PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Intento2`
--
CREATE DATABASE IF NOT EXISTS `Intento2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `Intento2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
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
  `codigo` int DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `genero` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`seguro`, `nombres`, `apellidop`, `apellidom`, `nacimiento`, `membresia`, `titular`, `direccion`, `codigo`, `correo`, `genero`) VALUES
('fesfsdf', 'fsdfdsf', 'fsfsdf', 'fdsfds', '2021-08-03', 'fddf', 'fddfd', 'fdfd', 4757, 'fdgdfg', 'Masculino'),
('fdfdsdfs', 'fdss', 'fsfsd', 'sffds', '2021-02-01', 'fsf', 'fssf', 'fssd', 12345, 'fdsfsfs', 'Masculino'),
('IMSS', 'Luis Francisco', 'Lopez', 'Perez', '1989-02-12', 'Premium', 'Luis Jorge Hernandez', 'Los Nogales', 12345, 'LuisJHdez_@gmail.com', 'Masculino'),
('IMSS', 'SFSDF', 'FDSF', 'SFSF', '2021-08-02', 'FDSDFS', 'FSFSD', 'DFSF', 54542, 'CFSFS', 'Femenino');
--
-- Base de datos: `intento2`
--
CREATE DATABASE IF NOT EXISTS `intento2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `intento2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
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
  `codigo` int DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `genero` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`seguro`, `nombres`, `apellidop`, `apellidom`, `nacimiento`, `membresia`, `titular`, `direccion`, `codigo`, `correo`, `genero`) VALUES
('fesfsdf', 'fsdfdsf', 'fsfsdf', 'fdsfds', '2021-08-03', 'fddf', 'fddfd', 'fdfd', 4757, 'fdgdfg', 'Masculino'),
('fdfdsdfs', 'fdss', 'fsfsd', 'sffds', '2021-02-01', 'fsf', 'fssf', 'fssd', 12345, 'fdsfsfs', 'Masculino'),
('IMSS', 'Luis Francisco', 'Lopez', 'Perez', '1989-02-12', 'Premium', 'Luis Jorge Hernandez', 'Los Nogales', 12345, 'LuisJHdez_@gmail.com', 'Masculino'),
('IMSS', 'SFSDF', 'FDSF', 'SFSF', '2021-08-02', 'FDSDFS', 'FSFSD', 'DFSF', 54542, 'CFSFS', 'Femenino'),
('sda', 'adsa', 'asad', 'adasda', '2022-03-29', 'sdda', 'sad', 'sdadaa', 23132, 'mayela.o2000@gmail.com', 'Femenino');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
