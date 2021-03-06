-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2020 a las 04:32:45
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_phantom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arma`
--

CREATE TABLE `arma` (
  `id_arma` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `arma`
--

INSERT INTO `arma` (`id_arma`, `nombre`, `tipo`, `descripcion`) VALUES
(1, 'Glock-18', 'Pistola', 'La Glock 18 es una práctica pistola de primera ronda que funciona mejor contra oponentes sin protección y cuenta con un modo ráfaga de tres balas.'),
(3, 'Desert Eagle', 'Pistola', 'Tan cara como potente, la Desert Eagle es una emblemática pistola difícil de dominar pero sorprendentemente precisa a larga distancia.'),
(4, 'p250', 'Pistola', NULL),
(5, 'Five-SeveN', 'Pistola', NULL),
(6, 'Berettas Dobles', 'Pistola', NULL),
(7, 'Tec-9', 'Pistola', NULL),
(8, 'P2000', 'Pistola', NULL),
(9, 'MP5-SD', 'Subfusil', NULL),
(10, 'MP7', 'Subfusil', 'Versátil pero caro, el subfusil alemán MP7 es la mejor elección para combates a corta distancia.'),
(11, 'UMP-45', 'Subfusil', NULL),
(12, 'P90', 'Subfusil', NULL),
(13, 'PP-Bizon', 'Subfusil', NULL),
(14, 'MP9', 'Subfusil', NULL),
(15, 'MAC-10', 'Subfusil', NULL),
(16, 'Nova', 'Pesada', NULL),
(17, 'XM1014', 'Pesada', NULL),
(18, 'Recortada', 'Pesada', NULL),
(19, 'MAG-7', 'Pesada', NULL),
(20, 'M249', 'Pesada', NULL),
(21, 'Negev', 'Pesada', NULL),
(23, 'M4-A4', 'Rifle', 'Más precisa pero menos potente que su equivalente, el AK-47, la M4A4 es el rifle de asalto automático disponible para los antiterroristas.'),
(24, 'SSG 08', 'Rifle', NULL),
(25, 'SSG 553', 'Rifle', NULL),
(26, 'AUG', 'Rifle', NULL),
(27, 'AWP', 'Rifle', NULL),
(28, 'G3SG1', 'Rifle', NULL),
(29, 'SCAR 20', 'Rifle', NULL),
(30, 'FAMAS', 'Rifle', NULL),
(31, 'GALIL AR', 'Rifle', NULL),
(32, 'Bayoneta', 'Cuchillo', NULL),
(33, 'Bayoneta M9', 'Cuchillo', NULL),
(34, 'Alfanje', 'Cuchillo', NULL),
(35, 'Bowie', 'Cuchillo', NULL),
(36, 'Clasico', 'Cuchillo', NULL),
(37, 'Supervivencia', 'Cuchillo', NULL),
(38, 'Cazador', 'Cuchillo', NULL),
(39, 'Destripador', 'Cuchillo', NULL),
(40, 'Encordado', 'Cuchillo', NULL),
(41, 'Esqueletizado', 'Cuchillo', NULL),
(42, 'Mariposa', 'Cuchillo', NULL),
(43, 'Nomada', 'Cuchillo', NULL),
(44, 'Plegable', 'Cuchillo', NULL),
(45, 'Talon', 'Cuchillo', 'Este karambit con mango de marfil posee remaches de latón y dientes de sierra, por lo que corta al entrar y desgarra al salir.'),
(46, 'Ursus', 'Cuchillo', NULL),
(47, 'Dagas Sombrias', 'Cuchillo', NULL),
(48, 'Karambit', 'Cuchillo', NULL),
(49, 'AK-47', 'Rifle', 'Potente y fiable, el AK-47 es uno de los rifles de asalto más famosos del mundo. Es sumamente letal en ráfagas cortas y controladas.'),
(50, 'USP-S', 'Pistola', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `id_user` int(30) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `id_skin` int(30) NOT NULL,
  `comentario` varchar(144) NOT NULL,
  `valoracion` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_user`, `usuario`, `id_skin`, `comentario`, `valoracion`) VALUES
(31, 14, 'Houth', 21, 'asdasd', 3),
(32, 14, 'Houth', 21, 'asdasd', 2),
(35, 14, 'Houth', 16, 'asdasd', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skin`
--

CREATE TABLE `skin` (
  `id` int(11) NOT NULL,
  `id_arma` int(30) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `coleccion` varchar(45) DEFAULT NULL,
  `stattrak` tinyint(1) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `skin`
--

INSERT INTO `skin` (`id`, `id_arma`, `nombre`, `tipo`, `estado`, `coleccion`, `stattrak`, `precio`, `imagen`) VALUES
(16, 49, 'Aquamarine Revenge', 'Encubierto', 'Recien fabricado', 'Vacio', 1, 6325, NULL),
(18, 1, 'asd1', 'Consumidor', 'Deplorable', NULL, 0, 123, ''),
(19, 1, 'asdasd4', 'Consumidor', 'Deplorable', NULL, 0, 123123, ''),
(20, 1, 'f123asd', 'Consumidor', 'Deplorable', NULL, 0, 5123, ''),
(21, 1, '1234123', 'Consumidor', 'Deplorable', NULL, 0, 41423123, ''),
(22, 1, '132414234', 'Consumidor', 'Deplorable', NULL, 0, 51234, ''),
(23, 6, '123344444', 'Consumidor', 'Algo desgastado', NULL, 1, 42141, ''),
(24, 10, 'jkedd', 'Militar', 'Recien fabricado', NULL, 1, 123131, ''),
(25, 6, 'aljhbdf', 'Restringido', 'Bastante desgastado', NULL, 1, 1234555, ''),
(26, 11, 'lkjglsfhjlsfgh', 'Contrabando', 'Bastante desgastado', NULL, 0, 5552, ''),
(31, 1, 'sadasd4444', 'Consumidor', 'Deplorable', 'Vacio', 0, 1233, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `permiso` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `pass`, `permiso`) VALUES
(13, 'admin', 'admin@admin.com', '$2y$10$bj3UCWJS7MozsQ30gqVVZ.P46u/mVctSYJoh7.QMj/aahbXQI.AkG', 1),
(14, 'Houth', 'faku_binetti@hotmail.com', '$2y$10$m.MABNMp3yPawgiSqQZJRes3f72Fy5r90HP8Kfeo4nx.mf4UOojb2', 1),
(15, 'admin1', 'admin@admin.com', '$2y$10$bj3UCWJS7MozsQ30gqVVZ.P46u/mVctSYJoh7.QMj/aahbXQI.AkG', 0),
(16, 'admin2', 'admin@admin.com', '$2y$10$bj3UCWJS7MozsQ30gqVVZ.P46u/mVctSYJoh7.QMj/aahbXQI.AkG', 1),
(17, 'admin3', 'admin@admin.com', '$2y$10$bj3UCWJS7MozsQ30gqVVZ.P46u/mVctSYJoh7.QMj/aahbXQI.AkG', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arma`
--
ALTER TABLE `arma`
  ADD PRIMARY KEY (`id_arma`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`,`id_skin`),
  ADD KEY `id_skin` (`id_skin`);

--
-- Indices de la tabla `skin`
--
ALTER TABLE `skin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_arma` (`id_arma`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arma`
--
ALTER TABLE `arma`
  MODIFY `id_arma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `skin`
--
ALTER TABLE `skin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_skin`) REFERENCES `skin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `skin`
--
ALTER TABLE `skin`
  ADD CONSTRAINT `skin_ibfk_1` FOREIGN KEY (`id_arma`) REFERENCES `arma` (`id_arma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
