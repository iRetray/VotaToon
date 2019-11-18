-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2019 a las 20:38:15
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `votaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE `candidatos` (
  `ID` int(100) NOT NULL,
  `nombre1` text COLLATE utf8_spanish_ci NOT NULL,
  `correo1` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion1` text COLLATE utf8_spanish_ci NOT NULL,
  `foto1` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre2` text COLLATE utf8_spanish_ci NOT NULL,
  `correo2` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion2` text COLLATE utf8_spanish_ci NOT NULL,
  `foto2` text COLLATE utf8_spanish_ci NOT NULL,
  `plan` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`ID`, `nombre1`, `correo1`, `descripcion1`, `foto1`, `nombre2`, `correo2`, `descripcion2`, `foto2`, `plan`) VALUES
(1, 'Julian Camilo', 'juan@gmail.com', '<p>Descripcion del<strong> candidato</strong></p>', '../fotos/WhatsApp Image 2019-11-14 at 6.00.51 PM.jpeg', 'Angela', 'angela@gmail.com', '<p><em>Descripcion de la candidata</em></p>', '../fotos/Diagrama de clases UML.png', '../fotos/1_Clases_y_objetos.pdf'),
(2, 'Brayan', 'brayan@gmail.com', '<p>Soy bien <strong>sexy</strong></p>', '../fotos/1014461.jpg', 'Retray', 'retray@hotmail.com', '<p>Y sho bien feo<em> alv :v</em></p>', '../fotos/562121.png', '../fotos/Evidencia_Clases_y_objetos.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
