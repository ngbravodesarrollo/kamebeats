-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2019 a las 23:41:50
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kamebeats`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE IF NOT EXISTS `autores` (
  `id_usuario` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL,
  `is_author` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id_usuario`, `id_tema`, `is_author`) VALUES
(1, 7, 1),
(2, 7, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
`id_categoria` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES
(1, 'Trap'),
(2, 'Rap'),
(3, 'Hip-Hop'),
(4, 'Hardcore'),
(5, 'Chill'),
(6, 'Melodic'),
(7, 'Vaporwave');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cometarios`
--

CREATE TABLE IF NOT EXISTS `cometarios` (
  `id_tema` int(11) NOT NULL,
  `id_username` int(11) NOT NULL,
  `comentario` varchar(256) COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cometarios`
--

INSERT INTO `cometarios` (`id_tema`, `id_username`, `comentario`, `fecha`) VALUES
(1, 1, 'CAPOOOOOOO', '2019-10-23'),
(1, 2, 'Bastante malardo.', '2019-10-22'),
(3, 1, 'Mas oscuro que la noche', '2019-10-22'),
(4, 1, 'JAJAJAJajjajaja xexdxdequisde', '2019-10-23'),
(5, 2, 'Faranca mal eh, medio chorraso', '2019-10-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE IF NOT EXISTS `favoritos` (
  `id_tema` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`id_tema`, `id_usuario`) VALUES
(1, 2),
(3, 2),
(4, 2),
(5, 1),
(6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes_autores`
--

CREATE TABLE IF NOT EXISTS `likes_autores` (
  `id_autor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `likes_autores`
--

INSERT INTO `likes_autores` (`id_autor`, `id_usuario`) VALUES
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `like_temas`
--

CREATE TABLE IF NOT EXISTS `like_temas` (
  `id_tema` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `like_temas`
--

INSERT INTO `like_temas` (`id_tema`, `id_usuario`) VALUES
(1, 1),
(3, 1),
(3, 2),
(7, 1),
(7, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
`id_pais` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id_pais`, `nombre`) VALUES
(1, 'Argentina'),
(2, 'Brasil'),
(3, 'Colombia'),
(4, 'Ecuador'),
(5, 'Chile'),
(6, 'Bolivia'),
(7, 'Uruguay');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_tags`
--

CREATE TABLE IF NOT EXISTS `rel_tags` (
  `id_tema` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `rel_tags`
--

INSERT INTO `rel_tags` (`id_tema`, `id_tag`) VALUES
(1, 1),
(1, 3),
(4, 2),
(4, 4),
(6, 2),
(6, 5),
(7, 1),
(7, 2),
(7, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
`id_tag` int(11) NOT NULL,
  `hash` varchar(16) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id_tag`, `hash`) VALUES
(1, 'typeBeat'),
(2, 'hip-hop'),
(3, 'freeStyle'),
(4, 'rapper'),
(5, '420');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE IF NOT EXISTS `temas` (
`id_tema` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(256) COLLATE utf8_bin NOT NULL,
  `creado` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`id_tema`, `nombre`, `id_categoria`, `descripcion`, `creado`) VALUES
(1, 'ExplosiveMuy 4rribaaaaa', 7, 'Follow me in instagram @perritomalvado.25', '2019-10-09'),
(3, 'Travis scott typebeat - 1337', 2, 'Lalalalallelelelchichcilelele', '2019-10-15'),
(4, 'weedTime', 5, 'mate y chipas', '2019-10-12'),
(5, 'Don satur', 4, 'Agridulces y nada mas', '2019-10-13'),
(6, 'coffe and study', 6, '', '2019-10-05'),
(7, 'Macri bigote b2b Pelado espert', 1, 'SOmo lola - drone', '2019-10-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(35) COLLATE utf8_bin NOT NULL,
  `id_pais` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`username`, `password`, `email`, `id_pais`, `nombre`, `apellido`) VALUES
('GueW3', 'admin', 'admin@kamebeats.com', 7, 'Santiago', 'Gongora'),
('N4rWell', 'admin', 'admin@kamebeats.com', 1, 'Nahuel', 'Bravo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
 ADD PRIMARY KEY (`id_usuario`,`id_tema`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cometarios`
--
ALTER TABLE `cometarios`
 ADD PRIMARY KEY (`id_tema`,`id_username`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
 ADD PRIMARY KEY (`id_tema`,`id_usuario`);

--
-- Indices de la tabla `likes_autores`
--
ALTER TABLE `likes_autores`
 ADD PRIMARY KEY (`id_autor`,`id_usuario`);

--
-- Indices de la tabla `like_temas`
--
ALTER TABLE `like_temas`
 ADD PRIMARY KEY (`id_tema`,`id_usuario`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
 ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `rel_tags`
--
ALTER TABLE `rel_tags`
 ADD PRIMARY KEY (`id_tema`,`id_tag`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
 ADD PRIMARY KEY (`id_tag`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
 ADD PRIMARY KEY (`id_tema`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
