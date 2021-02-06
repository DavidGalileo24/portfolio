-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-02-2021 a las 23:26:16
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portfolio`
--
CREATE DATABASE IF NOT EXISTS `portfolio` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `portfolio`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_tech`
--

CREATE TABLE `categoria_tech` (
  `id_categoria_tec` int(11) NOT NULL,
  `nombre_categoria` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categoria_tech`
--

INSERT INTO `categoria_tech` (`id_categoria_tec`, `nombre_categoria`) VALUES
(1, 'Lenguaje de programación'),
(2, 'Bases de datos'),
(3, 'Framework'),
(4, 'Sistema operativo'),
(5, 'Librería'),
(6, 'Control de versiones'),
(7, 'CMS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `nombre_proyecto` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `img_proyecto` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `id_tecnologia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `nombre_proyecto`, `img_proyecto`, `id_tecnologia`) VALUES
(1, 'Tienda online HelloBrazil', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnologias`
--

CREATE TABLE `tecnologias` (
  `id_tecnologia` int(11) NOT NULL,
  `nombre_tecnologia` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `id_categoria_tec` int(11) DEFAULT NULL,
  `img_tech` varchar(250) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tecnologias`
--

INSERT INTO `tecnologias` (`id_tecnologia`, `nombre_tecnologia`, `id_categoria_tec`, `img_tech`) VALUES
(1, 'Javascript', 1, 'assets/images_server/javascript.png'),
(2, 'Bootstrap', 3, 'assets/images_server/bootstrap.png'),
(3, 'PHP', 1, 'assets/images_server/php.png'),
(4, 'Codeigniter', 3, 'assets/images_server/codeigniter.png'),
(5, 'React', 3, 'assets/images_server/react.png'),
(6, 'MySQL', 2, 'assets/images_server/mysql.png'),
(7, 'MongoDB', 2, 'assets/images_server/mongodb.png'),
(8, 'CSS3', 1, 'assets/images_server/css3.png'),
(9, 'HTML5', 1, 'assets/images_server/html5.png'),
(10, 'GIT-Github', 6, 'assets/images_server/github.png'),
(11, 'Python', 1, 'assets/images_server/python.png'),
(12, 'Wordpress', 7, 'assets/images_server/wordpress.png'),
(13, 'jQuery', 2, 'assets/images_server/jquery.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria_tech`
--
ALTER TABLE `categoria_tech`
  ADD PRIMARY KEY (`id_categoria_tec`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `id_tecnologia` (`id_tecnologia`);

--
-- Indices de la tabla `tecnologias`
--
ALTER TABLE `tecnologias`
  ADD PRIMARY KEY (`id_tecnologia`),
  ADD KEY `id_categoria_tec` (`id_categoria_tec`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria_tech`
--
ALTER TABLE `categoria_tech`
  MODIFY `id_categoria_tec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tecnologias`
--
ALTER TABLE `tecnologias`
  MODIFY `id_tecnologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`id_tecnologia`) REFERENCES `tecnologias` (`id_tecnologia`);

--
-- Filtros para la tabla `tecnologias`
--
ALTER TABLE `tecnologias`
  ADD CONSTRAINT `tecnologias_ibfk_1` FOREIGN KEY (`id_categoria_tec`) REFERENCES `categoria_tech` (`id_categoria_tec`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
