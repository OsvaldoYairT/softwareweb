-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2022 a las 18:00:52
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `docentes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `Estatus` varchar(150) NOT NULL,
  `Id` int(150) NOT NULL,
  `Numtrab` varchar(150) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Contraseña` varchar(45) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Usuario` varchar(45) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`Estatus`, `Id`, `Numtrab`, `Nombre`, `Correo`, `Contraseña`, `Telefono`, `Usuario`, `Fecha`) VALUES
('Activo', 1, '001', 'Marcos Rivas De la Torre', 'marcos12@gmail.com', '28123456', '5579461325', 'Marcos_Rivas', '2020-05-01'),
('Activo', 1, '001', 'Marcos Rivas De la Torre', 'marcos12@gmail.com', '28123456', '5579461325', 'Marcos_Rivas', '2020-05-01'),
('Activo', 2, '002', 'Maria Narvaez', 'maria45@gmail.com', '789456', '5554328791', 'Mari_nav', '2020-05-01'),
('Activo', 3, '003', 'Cristian Torres', 'crisitian34@gmail.com', 'as47856', '5551197645', 'Torres_Cristian', '2020-05-01'),
('Activo', 4, '004', 'Dafne Rivas', 'cresitian34@gmail.com', 'adasdsa987', '5514789635', 'Daf_rivas', '2020-05-01'),
('Activo', 5, '005', 'Osvaldo', 'osvaldo14@gmail.com', 'poiu123', '5536984741', 'Torres_Osvaldo', '2020-05-01'),
('Activo', 6, '006', 'Yair Sanchez', 'Yair Sanchez', 'qwe456', '5525896314', 'San_yair', '2020-05-01'),
('Activo', 7, '007', 'Giovanny Hernandez', 'gio1234@gmail.com', 'dfg789', '5514785236', 'Gio125', '2020-05-01'),
('Activo', 8, '008', 'Miguel Medina', 'miguel456@gmail.com', 'apor453', '5525878946', 'Miguel_156', '2020-05-01'),
('Activo', 9, '009', 'Karym Diaz', 'karym80@gmail.com', 'zxcv4563', '5585412364', 'Karym Diaz', '2020-05-01'),
('Activo', 10, '010', 'Jesus Toledo', 'jesus49@gmail.com', 'jklñ15975', '5545695175', 'Toledo Jesus', '2020-05-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
