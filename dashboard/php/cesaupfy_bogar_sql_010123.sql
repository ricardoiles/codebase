-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2023 a las 23:42:16
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cesaupfy_bogar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id_entrada` int(11) NOT NULL,
  `estado_entrada` tinyint(1) NOT NULL DEFAULT 1,
  `fecha_entrada` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_entrada` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `entrada` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `categoria_entrada` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `comentarios_entrada` int(10) NOT NULL DEFAULT 0,
  `creacion_entrada` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `modificacion_entrada` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eliminacion_entrada` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboraciones_video`
--

CREATE TABLE `colaboraciones_video` (
  `id_user` int(11) NOT NULL DEFAULT 1,
  `id_colaboracion` int(11) NOT NULL,
  `bg_image` text NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `lugar` varchar(20) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `url` text NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colaboraciones_video`
--

INSERT INTO `colaboraciones_video` (`id_user`, `id_colaboracion`, `bg_image`, `titulo`, `lugar`, `fecha`, `url`, `update_at`) VALUES
(1, 1, 'cover_colaboracion_video.JPG', 'Malabares mientras toco batería con @Sys Malakian', 'México', '23 Abr. 2023', 'https://www.youtube.com/watch?v=13YcgFd08e0&ab_channel=BogarOnline', '2023-02-01 20:39:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_blog`
--

CREATE TABLE `comentarios_blog` (
  `id_comentario` int(11) NOT NULL,
  `id_entrada` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombres` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `whatsapp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expe_traye`
--

CREATE TABLE `expe_traye` (
  `id_et` int(11) NOT NULL,
  `tipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_lugar` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `expe_traye`
--

INSERT INTO `expe_traye` (`id_et`, `tipo`, `titulo`, `descripcion`, `fecha_lugar`, `updated_at`) VALUES
(20, 'experiencia', 'Giras dentro de la RepUblica Mexicana y el Extranjero', '                                *Look out here we go! Baja california Surf Tour 2021.\r\n*Pura Vida Mae Tour nov 2019. \r\n*Look out here we go! European Tour 2016.\r\n*Gira con Danny Amis y Didi Wray 2015. \r\n*Gira Surfer Joe Mexican Tour 2014.\r\n*Gira Los Misterios de America del Surf 2014.\r\n*Gira Los Oxidados Canada Tour 2013.                            ', '2013 - 2022', '2023-01-02 14:30:13'),
(21, 'experiencia', 'FESTIVALES', '                                *Fiesta de Halloween XV muertos de miedo 2019.\r\n*Fiesta de la MÃºsica 2019.\r\n*Spider Monkey Fest 2017.\r\n*Surfer Joe Summer Festival 2016.\r\n*Festival Costa Notte Bianca 2016.\r\n*Back to the Surf Music Festival 2016.\r\n*ASI Abierto de Surf Instrumental 2014.\r\n*Festival North by Northeast 2013.\r\n*Festival Great Lakes Surf Battle.\r\n*La Onda Kustom Festival 2014.\r\n*Festival Antes de que nos Olviden.\r\n*4Â° noche de ChapmanStick.                        ', '2013 - 2022', '2023-01-02 14:30:42'),
(22, 'experiencia', 'ARTISTAS NACIONALES E INTERNACIONALES', '                NACIONALES *Los Oxidados.\r\n*Hettory.\r\n*Sys Malakian.\r\n*Perro Agradecido Cumbia.\r\n\r\nINTERNACIONALES\r\n*Daddy-O  Grande.\r\n-Surfer Joe.\r\n-Didi Wray.\r\n-Melina Sarmiento.              ', '2013 - 2022', '2023-01-02 14:38:02'),
(23, 'experiencia', 'ESCENARIOS', '-Foro Cultural Alicia (varias fechas y aÃ±os) \r\n-Centro Cultural EspaÃ±a en MÃ©xico (varias fechas y aÃ±os)\r\n-Zinco Jazz Club mayo 2014\r\n-New Orleans MÃ©xico sept 2014\r\n-Gran Forum y SalÃ³n Zafiro 2015\r\n-Tianguis Cultural el Chopo Ago 2013\r\n-Teatro MetropÃ³litan 2008', '2008 - 2022', '2023-01-02 14:39:46'),
(24, 'trayectoria', 'CONCIERTOS EN PAISES Y CIUDADES', '-Francia - Dunkirk.\r\n-Alemania - Mannheim.\r\n-Belgica - Antwerp.\r\n-Holanda (The hague/La Haya, Amsterdam, Rotterdam).\r\n-Italia (Livorno, Parma, Tortona, Torino, Imperia). \r\n-CanadÃ¡ (Toronto, Stratford).\r\n-Costa Rica ( San JosÃ©, San RamÃ³n).\r\n-MÃ©xico (Baja California Sur, Guadalajara, CDMX, Puebla, Pachuca, Aguascalientes, LeÃ³n, Morelia, Toluca, Estado de MÃ©xico, entre otras.', '2008-2022', '2023-01-02 14:41:42'),
(25, 'trayectoria', 'DISCOGRAFIA', '*Buena noticias - Los Oxidados.\r\n*Los Herederos - Los Oxidados.\r\n*Death Man - Los Oxidados.\r\n*Sencillos: CapitÃ¡n Lance Murdock, Los Ellos, Trixie, Pat Morita, Miramare, Blue Bird- Los Oxidados.\r\n*The Strings Alflame Arreglos y baterÃ­as. COMPILADOS INTERNACIONALES\r\n*Los Misterios de America del Surf\r\n*Latin American Surf Sampler Pt. 2 La Playa\r\n*A tribute to Death Rocks \r\n*Surf you next ', '2012-2022', '2023-01-02 14:47:50'),
(26, 'trayectoria', 'NOMINACIONES', '*ðŸ† Incubadora de Poyectos Unitec con empresa Bogar Online (ganador).\r\n-*Premios Imas Indie-0 Music Awars a mejor disco Surf Rockabilly.', 'CDMX', '2023-01-02 14:49:54'),
(27, 'trayectoria', 'Look Out Here We Go! Baja California Surf Tour 2021 ', 'Gira en Baja California Sur como baterista de @LosOxidados \r\n', 'Baja California Sur', '2023-01-03 00:02:47'),
(28, 'trayectoria', 'Pura Vida Mae Tour 2019', '                                Gira a Costa Rica como baterista de @LosOxidados con 3 presentaciones, dos en San Jose y una en San RamÃ³n.                            ', 'Costa Rica', '2023-01-03 00:06:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hero_index`
--

CREATE TABLE `hero_index` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `profesion` varchar(200) NOT NULL,
  `lema` text NOT NULL,
  `logo_hero` text NOT NULL,
  `foto_cover_hero` text NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hero_index`
--

INSERT INTO `hero_index` (`id_user`, `fullname`, `profesion`, `lema`, `logo_hero`, `foto_cover_hero`, `update_at`) VALUES
(1, 'Cesar Nuñez', 'Músico de sesión', 'La música es la mejor medicina, terapia, rehabilitación y forma de expresión.', 'logo_hero.jpg', 'banner_bogar.jpg', '2023-01-22 14:38:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_bogar_index`
--

CREATE TABLE `info_bogar_index` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `foto_index` varchar(500) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `info_bogar_index`
--

INSERT INTO `info_bogar_index` (`id_user`, `fullname`, `descripcion`, `foto_index`, `update_at`) VALUES
(1, 'Cesar Nuñez Serrano', 'Soy un enamorado de la música y sus ritmos. Alguien apasionado por ayudar y compartir mis conocimientos y habilidades. Proporciono un servicio profesional, de calidad, siempre aplicando mis conocimientos y experiencia, cumpliendo con ética, responsabilidad, compromiso y propósito a la realización de las metas y objetivos que surgen de cada proyecto.                ', 'bogar.jpg', '2023-01-27 22:14:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `links_redes`
--

CREATE TABLE `links_redes` (
  `id_link` int(11) NOT NULL,
  `nombre_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `links_redes`
--

INSERT INTO `links_redes` (`id_link`, `nombre_link`, `link`, `update_at`) VALUES
(1, 'facebook', 'https://www.facebook.com/', '2022-12-22 00:35:35'),
(2, 'whatsapp', '+5215537178947', '2023-01-03 00:01:08'),
(3, 'twiter', 'https://www.instagram.com/cesarnunezonline/', '2023-01-01 20:34:49'),
(4, 'youtube', 'https://www.youtube.com/c/BogarOnline', '2023-01-01 20:34:14'),
(5, 'tiktok', 'https://www.tiktok.com/@cesarnunezonline', '2023-01-01 20:35:06'),
(6, 'platzi', 'https://platzi.com/p/cesarnuezserrano/', '2023-01-01 20:33:37'),
(7, 'linktree', 'https://linktr.ee/cesarnunezonline', '2023-01-01 20:35:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preview_info`
--

CREATE TABLE `preview_info` (
  `id_info` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `preview_info`
--

INSERT INTO `preview_info` (`id_info`, `descripcion`, `imagen`, `correo`, `telefono`, `ubicacion`, `direccion`, `updated_at`) VALUES
(1, '                                                                                                                        Soy un enamorado de la musica y sus ritmos. \r\n\r\nAlguien apasionado por ayudar y compartir mis conocimientos y habilidades.\r\n\r\nProporciono un servicio profesional, de calidad, siempre aplicando mis conocimientos y experiencia, cumpliendo con etica, responsabilidad, compromiso y proposito a la realizacion de las metas y objetivos que surgen de cada proyecto.                                                                                                                                     ', 'Cesar Nunez Online INdex.png', 'bogaronline@gmail.com', '+52155371789', 'Tampico, Tamaulipas.', '', '2023-01-03 02:01:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `tipo`, `titulo`, `descripcion`, `update_at`) VALUES
(17, 'servicio', 'Musico de sesion', 'Baterista para shows en Vivo / Grabaciones en estudio / Ensayos.', '2023-01-02 19:20:15'),
(20, 'servicio', 'Speaker/Conferencia', '                                              \r\nComo recupere la salud con musica y pensamientos positivos.', '2023-01-02 18:38:33'),
(23, 'servicio', 'Masterclass', 'Clinica musical / Masterclass Bateria.', '2023-01-02 18:34:54'),
(24, 'servicio', 'Como le ayuda la musica a tu salud? *GRATIS', 'Realizamos una entrevista para que nos compartas que y como le ayuda la musica para tu salud. ', '2023-01-02 23:43:39'),
(25, 'clase', 'Clases PROGRAMA de Instrumentos Ritmicos, Melodicos y Armonicos', 'Programa presencial practico 1-1  donde el alumno interactua con instrumentos ritmicos, melodicos y armonicos. Desarrollando la habilidad de tocar diversos instrumentos musicales (bateria, guiro, congas, timbales, flauta, guitarra electica, guitarra acustica, ukelele y teclado). El plan es personalizado y enfocado a las preferencias del alumno. Parte de nivel basico a nivel intermedio.', '2023-01-02 20:37:51'),
(26, 'clase', 'Como entender la musica, su escritura y los principales elementos para su interpretacion ', 'Programa enfocado a los elementos graficos y escritos en una partitura abarcando los principales elementos musicales para poder ejecutar musica.', '2023-01-02 20:34:30'),
(28, 'servicio', 'Educador Musical', 'Docencia: Presencial y Virtual. MATERIAS -Bateria. -Ritmica y Metrica. -Solfeo. -Armonia. -Entrenamiento Auditivo.', '2023-01-02 23:48:48'),
(29, 'clase', 'Trucos baquetas/malabar ', 'Entrenamiento enfocado para poder hacer trucos con baquetas y fusionarlos con malabar. ', '2023-01-02 20:00:43'),
(31, 'clase', 'Introduccion al Trading y a los Mercados Financieros', 'Curso nivel basico de introduccion al trading y a los mercados financieros. ', '2023-01-02 20:11:58'),
(34, 'servicio', 'Mentorias', '*Como comprar Criptomonedas, Cetes, Acciones. *Uso de plataformas de inversion o exchanges. *Envio, recepcion y compraventa de criptomonedas.', '2023-01-02 23:42:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sobre_mi`
--

CREATE TABLE `sobre_mi` (
  `id_mi` int(11) NOT NULL,
  `seccion` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sobre_mi`
--

INSERT INTO `sobre_mi` (`id_mi`, `seccion`, `descripcion`, `foto`, `update_at`) VALUES
(1, 'cesar', 'Me dedico a ser músico de sesión acompañando artistas en la batería para shows en vivo y grabaciones.\r\n\r\n\r\nSoy educador musical con más de 8 años de experiencia, creo programas personalizados corta y larga duración para mentorías 1-1 o grupales. He impartido clases en escuelas como ICM, Reaktor y actualmente imparto en Bogar Online (proyecto propio).\r\n\r\nFusiono la batería con el malabar y realizo Trading.', 'CNOnline Instrumento1(about2).png', '2023-01-17 21:10:23'),
(3, 'historia', '                                                                                                                  Al ser diagnosticado con Esclerosis Multiple perdi la coordinaciÃ³n de mi lado derecho. La musica, la bateria y el malabar me ayudaron a recuperarme por completo. \r\n\r\nAhi surgio la idea de ser mi propia empresa, compartir mis pasiones, habilidades y enseÃ±ar lo que se y me ha ayudado, pues es una forma de sentirme pleno en la vida. \r\n\r\nSigo desarrollÃ¡ndome, creando nuevas habilidades y nuevas expectativas apoyandome de mi experiencia como musico a nivel nacional e internacional, convencido de mi formacion musical la cual me ha permitido acompaÃ±ar y grabar como musico de sesion albums y singles producidos por diversos sellos y reproducidos en programas de TV y radios.                                                                                                            ', 'about historia.jpg', '2023-01-02 18:19:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pin` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT '000000',
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `pin`, `name`, `lastname`, `logo`, `created_at`, `updated_at`) VALUES
(2, 'bogar', '0nl1n3B0', '000000', 'Bogar', 'NuÃ±ez', 'logo2_bogar.png', '2022-09-18 14:39:09', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_entrada`);

--
-- Indices de la tabla `colaboraciones_video`
--
ALTER TABLE `colaboraciones_video`
  ADD PRIMARY KEY (`id_colaboracion`);

--
-- Indices de la tabla `comentarios_blog`
--
ALTER TABLE `comentarios_blog`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_entrada` (`id_entrada`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `expe_traye`
--
ALTER TABLE `expe_traye`
  ADD PRIMARY KEY (`id_et`);

--
-- Indices de la tabla `hero_index`
--
ALTER TABLE `hero_index`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `info_bogar_index`
--
ALTER TABLE `info_bogar_index`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `links_redes`
--
ALTER TABLE `links_redes`
  ADD PRIMARY KEY (`id_link`);

--
-- Indices de la tabla `preview_info`
--
ALTER TABLE `preview_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `sobre_mi`
--
ALTER TABLE `sobre_mi`
  ADD PRIMARY KEY (`id_mi`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `colaboraciones_video`
--
ALTER TABLE `colaboraciones_video`
  MODIFY `id_colaboracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comentarios_blog`
--
ALTER TABLE `comentarios_blog`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `expe_traye`
--
ALTER TABLE `expe_traye`
  MODIFY `id_et` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `hero_index`
--
ALTER TABLE `hero_index`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `info_bogar_index`
--
ALTER TABLE `info_bogar_index`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `links_redes`
--
ALTER TABLE `links_redes`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `preview_info`
--
ALTER TABLE `preview_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `sobre_mi`
--
ALTER TABLE `sobre_mi`
  MODIFY `id_mi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios_blog`
--
ALTER TABLE `comentarios_blog`
  ADD CONSTRAINT `comentarios_blog_ibfk_1` FOREIGN KEY (`id_entrada`) REFERENCES `blog` (`id_entrada`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
