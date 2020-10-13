-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2020 a las 03:29:54
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
  `descripcion` varchar(300) DEFAULT NULL,
  `photo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `arma`
--

INSERT INTO `arma` (`id_arma`, `nombre`, `tipo`, `descripcion`, `photo`) VALUES
(1, 'Glock-18', 'Pistola', 'La Glock 18 es una práctica pistola de primera ronda que funciona mejor contra oponentes sin protección y cuenta con un modo ráfaga de tres balas.', 0),
(3, 'Desert Eagle', 'Pistola', 'Tan cara como potente, la Desert Eagle es una emblemática pistola difícil de dominar pero sorprendentemente precisa a larga distancia.', 0),
(4, 'p250', 'Pistola', NULL, 0),
(5, 'Five-SeveN', 'Pistola', NULL, 0),
(6, 'Berettas Dobles', 'Pistola', NULL, 0),
(7, 'Tec-9', 'Pistola', NULL, 0),
(8, 'P2000', 'Pistola', NULL, 0),
(9, 'MP5-SD', 'Subfusil', NULL, 0),
(10, 'MP7', 'Subfusil', 'Versátil pero caro, el subfusil alemán MP7 es la mejor elección para combates a corta distancia.', 0),
(11, 'UMP-45', 'Subfusil', NULL, 0),
(12, 'P90', 'Subfusil', NULL, 0),
(13, 'PP-Bizon', 'Subfusil', NULL, 0),
(14, 'MP9', 'Subfusil', NULL, 0),
(15, 'MAC-10', 'Subfusil', NULL, 0),
(16, 'Nova', 'Pesada', NULL, 0),
(17, 'XM1014', 'Pesada', NULL, 0),
(18, 'Recortada', 'Pesada', NULL, 0),
(19, 'MAG-7', 'Pesada', NULL, 0),
(20, 'M249', 'Pesada', NULL, 0),
(21, 'Negev', 'Pesada', NULL, 0),
(23, 'M4-A4', 'Rifle', 'Más precisa pero menos potente que su equivalente, el AK-47, la M4A4 es el rifle de asalto automático disponible para los antiterroristas.', 0),
(24, 'SSG 08', 'Rifle', NULL, 0),
(25, 'SSG 553', 'Rifle', NULL, 0),
(26, 'AUG', 'Rifle', NULL, 0),
(27, 'AWP', 'Rifle', NULL, 0),
(28, 'G3SG1', 'Rifle', NULL, 0),
(29, 'SCAR 20', 'Rifle', NULL, 0),
(30, 'FAMAS', 'Rifle', NULL, 0),
(31, 'GALIL AR', 'Rifle', NULL, 0),
(32, 'Bayoneta', 'Cuchillo', NULL, 0),
(33, 'Bayoneta M9', 'Cuchillo', NULL, 0),
(34, 'Alfanje', 'Cuchillo', NULL, 0),
(35, 'Bowie', 'Cuchillo', NULL, 0),
(36, 'Clasico', 'Cuchillo', NULL, 0),
(37, 'Supervivencia', 'Cuchillo', NULL, 0),
(38, 'Cazador', 'Cuchillo', NULL, 0),
(39, 'Destripador', 'Cuchillo', NULL, 0),
(40, 'Encordado', 'Cuchillo', NULL, 0),
(41, 'Esqueletizado', 'Cuchillo', NULL, 0),
(42, 'Mariposa', 'Cuchillo', NULL, 0),
(43, 'Nomada', 'Cuchillo', NULL, 0),
(44, 'Plegable', 'Cuchillo', NULL, 0),
(45, 'Talon', 'Cuchillo', 'Este karambit con mango de marfil posee remaches de latón y dientes de sierra, por lo que corta al entrar y desgarra al salir.', 0),
(46, 'Ursus', 'Cuchillo', NULL, 0),
(47, 'Dagas Sombrias', 'Cuchillo', NULL, 0),
(48, 'Karambit', 'Cuchillo', NULL, 0),
(49, 'AK-47', 'Rifle', 'Potente y fiable, el AK-47 es uno de los rifles de asalto más famosos del mundo. Es sumamente letal en ráfagas cortas y controladas.', 1);

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
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `skin`
--

INSERT INTO `skin` (`id`, `id_arma`, `nombre`, `tipo`, `estado`, `coleccion`, `stattrak`, `precio`) VALUES
(6, 45, 'Tela escarlata', 'encubierto', 'Casi nuevo', NULL, 0, 43956),
(9, 1, 'Halcon', 'Consumidor', 'Deplorable', NULL, 1, 32),
(11, 49, 'Disruptor Fantasma', 'Consumidor', 'Recien fabricado', NULL, 1, 4322),
(12, 49, 'Aquamarine Revenge', 'Encubierto', 'Deplorable', NULL, 1, 3622);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `administrador` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `password`, `administrador`) VALUES
(2, 'admin', 'admin@admin.com', '$2y$12$q.9pPLDIz9E.kBBfZSD9ueZObiqNVdHHHCAhBqTPlF2lji97OVHKu', '3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arma`
--
ALTER TABLE `arma`
  ADD PRIMARY KEY (`id_arma`);

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
  MODIFY `id_arma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `skin`
--
ALTER TABLE `skin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `skin`
--
ALTER TABLE `skin`
  ADD CONSTRAINT `skin_ibfk_1` FOREIGN KEY (`id_arma`) REFERENCES `arma` (`id_arma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
