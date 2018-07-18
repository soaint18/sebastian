-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2018 a las 17:54:27
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `social`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` mediumint(9) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL DEFAULT '',
  `mensaje` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `time`, `name`, `mensaje`) VALUES
(1, '2018-06-11 09:28:08', 'jose', 'hola'),
(2, '2018-06-11 09:47:24', 'jose', 'hola'),
(3, '2018-06-11 09:47:25', 'jose', 'hola'),
(4, '2018-06-11 09:47:43', 'pedro', 'bonet'),
(5, '2018-06-11 09:49:40', 'pedro', 'bonet'),
(6, '2018-06-11 09:49:41', 'pedro', 'bonet'),
(7, '2018-06-11 09:49:41', 'pedro', 'bonet'),
(8, '2018-06-11 09:49:41', 'pedro', 'bonet'),
(9, '2018-06-11 09:49:41', 'pedro', 'bonet'),
(10, '2018-06-11 09:49:41', 'pedro', 'bonet'),
(11, '2018-06-11 09:49:42', 'pedro', 'bonet'),
(12, '2018-06-11 09:49:42', 'pedro', 'bonet'),
(13, '2018-06-11 09:53:21', 'sebas', 'que tal'),
(14, '2018-06-11 09:54:01', 'sebas', 'se ve'),
(15, '2018-06-11 09:55:29', 'sebas', 'se sigue viendo'),
(16, '2018-06-11 09:56:36', 'as', 'se sigue '),
(17, '2018-06-11 09:56:37', 'as', 'se sigue '),
(18, '2018-06-11 09:59:55', 'as', 'se sigue '),
(19, '2018-06-11 10:11:38', 'oliver', 'holaaaa'),
(20, '2018-06-11 10:20:14', 'oliver', 'asasdas'),
(21, '2018-06-11 10:22:21', 'samuel', 'heeeey'),
(22, '2018-06-11 10:26:49', 'pepe', 'holaa'),
(23, '2018-06-11 10:38:55', 'hola', 'pepep'),
(24, '2018-06-11 10:45:45', 'maria', 'que tal'),
(25, '2018-06-11 10:46:28', '', 'https://as.com/'),
(26, '2018-06-11 10:46:47', '', 'sin nombre'),
(27, '2018-06-13 07:27:34', 'pepon', 'alohaaa'),
(28, '2018-06-13 07:36:44', 'jose juan', 'asddasdada'),
(29, '2018-06-13 07:36:54', '', 'sadsa'),
(30, '2018-06-13 07:38:46', 'admin', 'grgf'),
(31, '2018-06-13 07:38:48', 'admin', ''),
(32, '2018-06-13 07:38:51', 'admin', 'sdfsdfsdgsddg'),
(33, '2018-06-13 07:55:22', 'beta', 'hola'),
(34, '2018-06-13 07:55:27', 'beta', 'soy beta'),
(35, '2018-06-13 07:56:14', 'beta', ''),
(36, '2018-06-13 07:56:29', 'beta', ''),
(37, '2018-06-13 07:56:29', 'beta', ''),
(38, '2018-06-13 07:56:30', 'beta', ''),
(39, '2018-06-13 07:59:10', 'admin', 'holaa\r\n'),
(40, '2018-06-13 07:59:16', 'admin', 'qwe'),
(41, '2018-06-13 07:59:18', 'admin', 'asdsadsa'),
(42, '2018-06-13 07:59:19', 'admin', ''),
(43, '2018-06-13 07:59:28', 'admin', 'que pesaooo soy'),
(44, '2018-06-13 07:59:34', 'admin', 'sdfsdfsd'),
(45, '2018-06-14 10:35:34', 'admin', 'sds'),
(46, '2018-06-14 10:36:15', 'admin', 'se escucha algooo'),
(47, '2018-06-16 01:42:45', 'admin', 'hey'),
(48, '2018-06-16 08:48:55', 'ajax', 'hola soy ajax'),
(49, '2018-06-16 10:06:09', 'julio', 'hola soy julio'),
(50, '2018-06-16 10:07:41', 'gabriela', 'hola soy gabriela'),
(51, '2018-06-16 10:57:58', 'sebas', 'hola soy nuevo '),
(52, '2018-06-17 05:12:57', 'pedro', 'hola'),
(53, '2018-06-18 13:13:12', 'sebas', 'Holaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `descripcion` varchar(1000) DEFAULT NULL,
  `id_juego` int(3) DEFAULT NULL,
  `usuario` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`descripcion`, `id_juego`, `usuario`, `fecha`) VALUES
('bueniiisimo', 2, 'beta', '2018-06-13 11:56:01'),
('Juego de acciÃ³n muy divertido y para toda la familia', 1, 'sebas', '2018-06-18 14:32:10'),
('Juego de aventuras y puzzles con buenos grÃ¡ficos', 7, 'sebas', '2018-06-18 14:38:27'),
('Me lo conseguÃ­ pasar en un dia', 10, 'ajax', '2018-06-18 14:43:07'),
('Juego anticuado, graficos malÃ­simos, no tiene tercera persona', 12, 'ajax', '2018-06-18 14:44:07'),
('Tardes con los colegas jugando a penalties', 6, 'ajax', '2018-06-18 14:47:24'),
('10 / 10', 2, 'sebas', '2018-06-18 14:56:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` int(3) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `nombre`) VALUES
(1, 'accion'),
(2, 'deporte'),
(4, 'plataforma'),
(3, 'terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id` int(3) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `anio` int(4) DEFAULT NULL,
  `foto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `id_genero` int(3) DEFAULT NULL,
  `puntos` int(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `nombre`, `descripcion`, `anio`, `foto`, `id_genero`, `puntos`) VALUES
(1, 'DEADPOOL', 'Despues de sobrevivir a un ataque bovino casi mortal, un chef desfigurado de cafeterÃ­a (Wade Wilson) lucha por cumplir su sueÃ±o de convertirse en el barman mas caliente de Mayberry mientras aprende a lidiar con su perdido sentido del gusto. Buscando recuperar el sabor de la vida, asÃ­ como un condensador de flujo, Wade debe luchar contra ninjas, los yakuza y un grupo de caninos sexualmente agresivos, mientras recorre el mundo para descubrir la importancia de la familia, la amistad y el sabor ? encontrando un nuevo gusto por la aventura y ganando la codiciada taza de cafÃ© con el titulo del mejor amante del mundo', 2013, 'deadpool_ps3_.jpg', 1, 100),
(2, 'FIFA 17', 'FIFA 17 permite que te sumerjas en autÃ©nticas experiencias futbolÃ­sticas, aprovechando la sofisticaciÃ³n de un nuevo motor de juego. AdemÃ¡s, te presenta futbolistas llenos de profundidad y emociÃ³n, y te lleva a nuevos mundos a los que solo podrÃ¡s acceder en el juego. Experimenta la innovaciÃ³n total de la manera en que los jugadores piensan y se mueven, interactÃºa fÃ­sicamente con los oponentes y ejecuta ataques para sentirte el dueÃ±o de cada momento en la cancha.', 2016, 'FIFA17_ps4.png', 2, 970),
(3, 'GOD OF WAR', 'Kratos es un guerrero espartano que sirve a los Dioses griegos del Olimpo. A punto de ser derrotado y morir, le dio su vida a Ares, Dios de la Guerra, a cambio de poder.', 2004, 'god_1_ps2.jpg', 1, 0),
(4, 'GOD OF WAR 2', 'Vuelve el guerrero espartano Kratos en la secuela del aclamado juego que sali? en 2005. Kratos deber? viajar al fin de la Tierra, enfrentarse a iconos de la mitolog?a griega y cambiar lo que ning?n mortal ni dios ha conseguido jam?s: su destino Utiliza nuevas habilidades, magia poderosa y armas impresionantes.', 2007, 'god_2_ps2.jpg', 1, 0),
(5, 'GOD OF WAR 3', 'Asume el intrÃ©pido rol del ex guerrero espartano, Kratos, mientras emerge de las mÃ¡s oscuras profundidades del Hades para escalar hasta las cimas del Monte Olimpo y buscar su sangrienta venganza. Armado con espadas de doble cadena y una nueva variedad de armas y magia, Kratos debe combatir con las criaturas mÃ¡s letales de la mitologÃ­a, resolviendo al mismo tiempo complicados acertijos a lo largo de su despiadada bÃºsqueda para destruir el Olimpo.', 2010, 'god_3_ps3.jpg', 1, 0),
(6, 'PES 2017', 'Simulador de futbol 2016-2017	', 2016, 'pes2017.jpg', 2, 79),
(7, 'UNCHARTED 4', 'Varios aÃ±os despuÃ©s de su Ãºltima aventura, el retirado cazador de fortunas, Nathan Drake, es obligado a regresar al mundo de los ladrones. Con intereses mucho mÃ¡s personales, Drake se embarca en un viaje alrededor del mundo persiguiendo una conspiraciÃ³n histÃ³rica conectada con un legendario tesoro pirata. Su mejor aventura probarÃ¡ sus lÃ­mites fÃ­sicos, su capacidad de resoluciÃ³n, y en definitiva que estÃ¡ dispuesto a sacrificar para salvar a sus seres amados.', 2016, 'uncharted_ps4.jpg', 1, 216),
(8, 'SUPER MARIO WORLD', 'Juego de plataformas de los 80', 1992, 'smw.jpg', NULL, 0),
(9, 'MARVEL VS CAPCOM', 'Es una serie de juegos de lucha creada por Capcom en el que los personajes creados por Marvel Comics y los personajes propios de Capcom aparecen juntos. ', 1998, 'mvVScpcPS1.jpg', NULL, 0),
(10, 'POKEMON ESMERALDA', '', 2003, 'pkGBA.jpg', NULL, 98),
(11, 'GALAGA', 'Juego de arcade ', 1986, 'galaga2.jpg', NULL, 0),
(12, 'RESIDENT EVIL', ' Juego de terror y accion en la lucha contra zombies', 1996, 'resPS1.jpg', NULL, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(3) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `pass`, `foto`) VALUES
(1, 'admin', 'admin', 'arctic.jpg'),
(2, 'ajax', 'ajax', 'daft_punk.jpg'),
(4, 'donald', 'glover', 'childish.jpeg'),
(7, 'Gabriela', 'maria', 'telegram-logo_89d04.svg'),
(8, 'sebas', 'tapia', 'telegram-logo_89d04.svg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD KEY `id_juego` (`id_juego`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `pass` (`pass`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_juego`) REFERENCES `juegos` (`id`);

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `juegos_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
