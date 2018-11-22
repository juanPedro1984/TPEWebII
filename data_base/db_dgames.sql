-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2018 a las 05:16:16
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_dgames`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_Comentarios` int(11) NOT NULL,
  `Comentarios` text NOT NULL,
  `id_Juego` int(11) NOT NULL,
  `id_Usuario` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Valoracion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_Comentarios`, `Comentarios`, `id_Juego`, `id_Usuario`, `Fecha`, `Valoracion`) VALUES
(70, 'sss', 66, 28, '2018-11-17', 2),
(71, 'batman', 66, 28, '2018-11-17', 0),
(72, 'miedo', 67, 28, '2018-11-17', 3),
(73, 'gtaV', 65, 28, '2018-11-17', 5),
(75, 'gran juego', 65, 28, '2018-11-17', 5),
(76, 'primer comentario alien ', 68, 28, '2018-11-18', 2),
(77, '', 68, 28, '2018-11-18', 2),
(78, '', 68, 28, '2018-11-18', 1),
(79, '', 68, 28, '2018-11-18', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_Genero` int(11) NOT NULL,
  `Genero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_Genero`, `Genero`) VALUES
(12, 'Accion'),
(13, 'Aventura'),
(14, 'Terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_Imagen` int(11) NOT NULL,
  `Img_path` text NOT NULL,
  `id_Juego` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_Imagen`, `Img_path`, `id_Juego`) VALUES
(27, 'image/gtaV.jpg', 65),
(28, 'image/batmanAC.jpg', 66),
(32, 'image/slenderMan.jpg', 70),
(33, 'image/godOfWar.jpg', 71),
(34, 'image/godOfWar1.jpg', 71),
(35, 'image/godOfWar2.jpg', 71),
(36, 'image/godOfWar3.jpg', 71),
(37, 'image/godOfWar4.jpg', 71),
(38, 'image/godOfWar5.jpg', 71),
(39, 'image/godOfWar6.jpg', 71),
(50, 'image/gtaV1.jpg', 65),
(51, 'image/gtaV2.jpg', 65),
(52, 'image/gtaV3.jpg', 65),
(53, 'image/batmanAC1.jpg', 66),
(54, 'image/batmanAC2.jpg', 66),
(55, 'image/batmanAC3.jpg', 66),
(56, 'image/batmanAC4.jpg', 66),
(57, 'image/theEvilWI.jpg', 67),
(58, 'image/theEvilWI1.jpg', 67),
(59, 'image/theEvilWI2.jpg', 67),
(60, 'image/theEvilWI3.jpg', 67),
(61, 'image/AlienI.jpg', 68),
(62, 'image/AlienI-1.jpg', 68),
(63, 'image/AlienI-2.jpg', 68),
(64, 'image/AlienI-3.jpg', 68),
(65, 'image/outlast.jpg', 69),
(66, 'image/outlast1.jpg', 69),
(67, 'image/outlast2.jpg', 69),
(68, 'image/outlast3.jpg', 69),
(69, 'image/slenderMan1.jpg', 70),
(70, 'image/slenderMan2.jpg', 70),
(71, 'image/slenderMan3.jpg', 70),
(74, 'image/batmanAC3.jpg', 67);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_Juego` int(11) NOT NULL,
  `Consola` varchar(5) NOT NULL,
  `id_Genero` int(11) NOT NULL,
  `Titulo` text NOT NULL,
  `Descripcion` text NOT NULL,
  `Precio` smallint(6) NOT NULL,
  `img_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_Juego`, `Consola`, `id_Genero`, `Titulo`, `Descripcion`, `Precio`, `img_path`) VALUES
(65, 'ps4', 12, 'GTA V', 'La historia transcurre en la remodelada ciudad de Los Santos, donde Michael, Trevor y Franklin trabajan individualmente hasta que se cruzan sus vidas y empiezan a trabajar en equipo robando bancos o realizando trabajos para diversos personajes.', 299, './image/gtaV.jpg'),
(66, 'ps4', 12, 'Batman Arkham city', 'Bruce Wayne ofrece una conferencia de prensa para declarar su oposición a la creación de Arkham City. Un grupo de mercenarios de TYGER interrumpe la conferencia para arrestar a Wayne y encarcelarlo en Arkham City.', 599, './image/batmanAC.jpg'),
(67, 'pc', 12, 'The Evil Within', 'Mientras investigaban la escena de un horripilante asesinato masivo en el Hospital Mental Beacon, el detective de la policía de la ciudad de Krimson Sebastian Castellanos, su compañero Joseph Oda y el joven detective Juli Kidman se encuentran repentinamente arrojados a un mundo irreal, después de escuchar un ruido agudo. Poco después de que esto ocurra, Sebastian se separa de sus compañeros y se ve obligado a huir de un monstruoso que maneja una motosierra.', 399, './image/theEvilWI.jpg'),
(68, 'ps3', 14, 'Alien Isolation', 'Tras un fallido intento de establecer contacto por radio con la Sevastopol, en el que solo reciben un mensaje de advertencia lleno de estática de parte del mariscal colonial Waits, indicándoles que no pueden recibir pasajeros y ante la poca claridad de la situación, el equipo decide abordar la estructura mediante una caminata espacial, a los pocos metros de alcanzar la esclusa de aire una explosión corte el cable y el equipo se separe, dejando a Amanda como única posible sobreviviente', 499, './image/alienI.jpg'),
(69, 'ps4', 14, 'Outlast', 'Un periodista independiente que recibe un correo anónimo que le informa acerca de experimentos ilegales llevados a cabo en un manicomio llamado Mount Massive. Adentrándose al manicomio de noche y con una cámara de mano, encuentra la institución en ruinas.', 399, './image/outlast.jpg'),
(70, 'ps4', 14, 'Slenderman', 'El objetivo del jugador es recoger ocho páginas ubicadas en diversas áreas del bosque, evitando al mismo tiempo a Slender, una extraña criatura o ente de forma humanoide sin rostro, de piel pálida y con tentáculos como apéndices que brotan de su espalda, que aparecen cuando el jugador está al borde de la muerte.3? El jugador está dotado únicamente con una linterna para ver a través de la oscuridad.', 499, './image/slenderMan.jpg'),
(71, 'ps4', 13, 'God of War', 'Se basa en las aventuras de un semidiós espartano, Kratos, quién se enfrenta a diversos personajes de la mitología griega, tanto héroes y especies mitológicas como dioses griegos y dioses primordiales. Aunque el guerrero espartano acostumbra enemistad con la mayoría de los Dioses, recibe ayuda de muchos de ellos, en especial de Atenea.', 799, './image/godOfWar.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Admin_permiso` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `Usuario`, `Password`, `Admin_permiso`) VALUES
(28, 'juan@gmail.com', '$2y$10$x34ZWOKsIrKsQvhrMeC8Aeeom7mWzodhCyGfJ5QPJ6LXKz5sV6kyy', 1),
(31, 'sasha@lala', '$2y$10$pH.DwTfzU.hunh5yXeDPU.1frSO2KqFm0HNuurFjhG5pG0Cu0EFhK', 0),
(32, 'pedro@gmail.com', '$2y$10$7AQ5dtQc7xHFKReNDJWYOOtL5FR9wPlJSNfikC20GbnE18XIJfvO.', 0),
(33, 'pepe@gmail.com', '$2y$10$KXtN9QU0yQDl9JON5GysVOqnG/f0HTRHiWaL7plK1yON6XexEyn8i', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_Comentarios`),
  ADD KEY `comentarios_ibfk_1` (`id_Juego`),
  ADD KEY `comentarios_ibfk_2` (`id_Usuario`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_Genero`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_Imagen`),
  ADD KEY `imagenes_ibfk_1` (`id_Juego`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_Juego`),
  ADD KEY `juegos_ibfk_1` (`id_Genero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_Comentarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_Genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_Imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_Juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_Juego`) REFERENCES `juegos` (`id_Juego`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_Usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`id_Juego`) REFERENCES `juegos` (`id_Juego`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `juegos_ibfk_1` FOREIGN KEY (`id_Genero`) REFERENCES `genero` (`id_Genero`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
