-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-01-2018 a las 05:09:17
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_llatzer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `titulo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `subtitulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contenido` text COLLATE utf8_spanish_ci NOT NULL,
  `encabezado` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `portada` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `titulo`, `subtitulo`, `contenido`, `encabezado`, `portada`) VALUES
(10, 'PolÃ­tica Fur-free en la Moda', 'No es novedad que exista un grupo de la poblaciÃ³n que se dedique a la insaciable lucha a favor de l', 'No es novedad que exista un grupo de la poblaciÃ³n que se dedique a la insaciable lucha a favor de la protecciÃ³n de los derechos de los animal, entre ellos la reconocida y polÃ©mica agrupaciÃ³n de activistas, PETA (People for the Ethical Treatment of Animals). Como parte de la lucha de estos activistas ha sido atender a eventos de la moda, como Fashion Shows de diseÃ±adores reconocidos por utilizar las pieles en sus diseÃ±os y colecciones.\r\nSin embargo PETA ha anunciado que marcas reconocidas en la industria como Gucci, Calvin Klein, Ralph Lauren, Tommy Hilfiger, Armani, Jimmy Choo y Michael Kors han renunciado a utilizar pieles de animales. El mÃ¡s reciente de estos casos fue Michael Kors, quien asegura que se unirÃ¡ a la polÃ­tica fur-free y a cambio implementarÃ¡ pieles falsas (faux fur) y materiales mÃ¡s innovadores en sus diseÃ±os. Aunque aun se podrÃ¡n encontrar prendas con pieles en las tiendas, el equipo de Michael Kors asegura que para diciembre 2018 serÃ¡ oficialmente una marca libre de pieles.', 'img/header.jpg', 'img/portada.jpg'),
(11, 'asdas', 'asdas', 'Contenidoada', 'asd', 'asd'),
(12, 'Imagenes', 'asa', 'Contenidoad', '20170328_131734.jpg', '20170327_104447.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
