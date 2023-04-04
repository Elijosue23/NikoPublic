-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2023 a las 19:37:34
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `istnikolatesla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `malla`
--

CREATE TABLE `malla` (
  `idmalla` int(11) NOT NULL,
  `nameMalla` varchar(255) DEFAULT NULL,
  `createDateMalla` date DEFAULT NULL,
  `UpdateDateMalla` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `malla`
--

INSERT INTO `malla` (`idmalla`, `nameMalla`, `createDateMalla`, `UpdateDateMalla`) VALUES
(1, 'TECNOLOGIA SUPERIOR EN CONTABILIDAD - PRESENCIAL - 17-09-2021 al 17-09-2026 - RPC-SE-33-NO-100-2021', NULL, NULL),
(2, 'TECNOLOGIA SUPERIOR EN MECÁNICA AUTOMOTRIZ - PRESENCIAL - 17-09-2021 al 17-09-2026 - RPC-SE-33-NO-100-2021', NULL, NULL),
(3, 'TECNOLOGIA SUPERIOR EN MECATRÓNICA - PRESENCIAL - 17-09-2021 al 17-09-2026 - RPC-SE-33-NO-100-2021', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moduls`
--

CREATE TABLE `moduls` (
  `idmodul` int(11) NOT NULL,
  `namemoduls` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `imgmodulo` text DEFAULT NULL,
  `dateCreate` date DEFAULT NULL,
  `dateupdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `moduls`
--

INSERT INTO `moduls` (`idmodul`, `namemoduls`, `description`, `imgmodulo`, `dateCreate`, `dateupdate`) VALUES
(1, 'ACTUALIZACIONES', 'actualizar datos', 'estrella.png', '2023-02-28', NULL),
(2, 'CALENDARIO', 'calendarios palneados', 'logros.png', '2023-02-28', NULL),
(3, 'CERTIFICADOS', 'entrega de certificados', 'campaning.jpg', '2023-02-28', NULL),
(4, 'ENCUESTAS', 'encuesta 20233', 'pizarra.png', '2023-02-28', NULL),
(5, 'HOJA DE VIDA', 'hoja de reporte ', 'pantalla.png', '2023-02-28', NULL),
(6, 'MATRICULACION', 'fecha de matrícula', 'libro-digital.png', '2023-02-28', NULL),
(7, 'EVALUACION DOCENTES', 'encuesta docentes 2023', 'contrato.png', '2023-02-28', NULL),
(8, 'INSCRIPCIONES', 'realizar incripciones ', 'juventud.png', '2023-02-28', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `options`
--

CREATE TABLE `options` (
  `idoptions` int(11) NOT NULL,
  `nameOption` varchar(45) DEFAULT NULL,
  `stade` int(11) DEFAULT NULL,
  `istuduent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `options`
--

INSERT INTO `options` (`idoptions`, `nameOption`, `stade`, `istuduent`) VALUES
(1, NULL, 0, 1),
(2, NULL, 0, 1),
(3, NULL, 0, 1),
(4, NULL, 1, 1),
(5, NULL, 0, 1),
(6, NULL, 0, 1),
(7, NULL, 0, 1),
(8, NULL, 0, 1),
(9, NULL, 1, 1),
(10, NULL, 1, 1),
(11, NULL, 0, 1),
(12, NULL, 0, 1),
(13, NULL, 0, 1),
(14, NULL, 0, 1),
(15, NULL, 0, 1),
(16, NULL, 0, 1),
(17, NULL, 0, 1),
(18, NULL, 0, 1),
(19, NULL, 0, 1),
(20, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `idpaises` int(11) NOT NULL,
  `NamePais` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`idpaises`, `NamePais`) VALUES
(1, 'ABJASIA'),
(2, 'ACROTIRI Y DHEKELIA'),
(3, 'AFGANISTÁN'),
(4, 'ALBANIA'),
(5, 'ALEMANIA'),
(6, 'ANDORRA'),
(7, 'ANGOLA'),
(8, 'ANGUILA'),
(9, 'ANTIGUA Y BARBUDA'),
(10, 'ARABIA SAUDITA'),
(11, 'ARGELIA'),
(12, 'ARGENTINA'),
(13, 'ARMENIA'),
(14, 'ARUBA'),
(15, 'AUSTRALIA'),
(16, 'AUSTRIA'),
(17, 'AZERBAIYÁN'),
(18, 'BAHAMAS'),
(19, 'BARÉIN'),
(20, 'BAGLADESH'),
(21, 'BARBADOS'),
(22, 'BÉLGICA'),
(23, 'BELICE'),
(24, 'BENÍN'),
(25, 'BERMUDAS'),
(26, 'BIELORRUSIA'),
(27, 'BIRMANIA'),
(28, 'BOLIVIA'),
(29, 'BOSNIA Y HERZEGOVINA'),
(30, 'BOTSUANA'),
(31, 'BRASIL'),
(32, 'BRUNÉI'),
(33, 'BULGARIA'),
(34, 'BURKINA FASO'),
(35, 'BURUNDI'),
(36, 'BUTÁN'),
(37, 'CABO VERDE'),
(38, 'ISLAS CAIMÁN '),
(39, 'CAMBOYA'),
(40, 'CAMERÚN'),
(41, 'CANADÁ'),
(42, 'CATAR'),
(43, 'REPÚBLICA CENTROAFRICANA'),
(44, 'CHAD'),
(45, 'REPÚBLICA CHECA'),
(46, 'CHILE'),
(47, 'CHINA'),
(48, 'CHIPRE'),
(49, 'CHIPRE DEL NORTE'),
(50, 'ISLAS COCOS'),
(51, 'COLOMBIA'),
(52, 'COMORAS'),
(53, 'REPÚBLICA DEL CONGO'),
(54, 'REPÚBLICA DEMOCRÁTICA DEL CONGO'),
(55, 'ISLAS COOK'),
(56, 'COREA DEL NORTE'),
(57, 'COREA DEL SUR'),
(58, 'COSTA DE MARFIL'),
(59, 'COSTA RICA'),
(60, 'CROACIA'),
(61, 'CUBA'),
(62, 'CURAZAO'),
(63, 'DINAMARCA'),
(64, 'DOMINICA'),
(65, 'REPÚBLICA DOMINICANA'),
(66, 'ECUADOR'),
(67, 'EGIPTO'),
(68, 'EL SALVADOR'),
(69, 'EMIRATOS ÁRABES UNIDOS'),
(70, 'ERITREA'),
(71, 'ESLOVAQUIA'),
(72, 'ESLOVENIA'),
(73, 'ESPAÑA'),
(74, 'ESTADO ISLÁMICO'),
(75, 'ESTADOS UNIDOS'),
(76, 'ESTONIA'),
(77, 'ETIOPÍA'),
(78, 'ISLAS FEROE'),
(79, 'FILIPINAS'),
(80, 'FINLANDIA'),
(81, 'FIYI'),
(82, 'FRANCIA'),
(83, 'GABÓN'),
(84, 'GAMBIA'),
(85, 'GEORGIA'),
(86, 'GHANA'),
(87, 'GIBRALTAR'),
(88, 'GRANADA'),
(89, 'GRECIA'),
(90, 'GROENLANDIA'),
(91, 'GUAM'),
(92, 'GUATEMALA'),
(93, 'GUERNSEY'),
(94, 'GUINEA'),
(95, 'GUINEA-BISÁU'),
(96, 'GUINEA ECUATORIAL'),
(97, 'GUYANA'),
(98, 'HAITÍ'),
(99, 'HONDURAS'),
(100, 'HONG KONG'),
(101, 'HUNGRÍA'),
(102, 'INDIA'),
(103, 'INDONESIA'),
(104, 'IRAK'),
(105, 'IRÁN'),
(106, 'IRLANDA'),
(107, 'ISLANDIA'),
(108, 'ISRAEL'),
(109, 'ITALIA'),
(110, 'JAMAICA'),
(111, 'JAPÓN'),
(112, 'JERSEY'),
(113, 'JORDANIA'),
(114, 'KAZAJISTAN'),
(115, 'KENIA'),
(116, 'KIRGUISTÁN'),
(117, 'KIRIBATI'),
(118, 'KOSOVO'),
(119, 'KUWAIT'),
(120, 'LAOS'),
(121, 'LESOTO'),
(122, 'LETONIA'),
(123, 'LÍBANO'),
(124, 'LIBERIA'),
(125, 'LIBIA'),
(126, 'LIECHTENSTEIN'),
(127, 'LITUANIA'),
(128, 'LUXEMBURGO'),
(129, 'MACAO'),
(130, 'MACEDONIA'),
(131, 'MADAGASCAR'),
(132, 'MALASIA'),
(133, 'MALAUI'),
(134, 'MALDIVAS'),
(135, 'MALÍ'),
(136, 'MALTA'),
(137, 'ISLAS MALVINAS'),
(138, 'ISLA DE MAN'),
(139, 'ISLAS MARIANAS DEL NORTE'),
(140, 'MARRUECOS'),
(141, 'ISLAS MARSHALL'),
(142, 'MAURICIO'),
(143, 'MAURITANIA'),
(144, 'MÉXICO'),
(145, 'MICRONESIA'),
(146, 'MOLDAVIA'),
(147, 'MÓNACO'),
(148, 'MONGOLIA'),
(149, 'MONTENEGRO'),
(150, 'MONTSERRAT'),
(151, 'MOZAMBIQUE'),
(152, 'NAGORNO KARABAJ'),
(153, 'NAMIBIA'),
(154, 'NAURU'),
(155, 'ISLA DE NAVIDAD'),
(156, 'NEPAL'),
(157, 'NICARAGUA'),
(158, 'NÍGER'),
(159, 'NIGERIA'),
(160, 'NIUE'),
(161, 'ISLA NORFOLK'),
(162, 'NORUEGA'),
(163, 'NUEVA CALEDONIA'),
(164, 'NUEVA RUSIA'),
(165, 'NUEVA ZELANDA'),
(166, 'OMÁN'),
(167, 'OSETIA DEL SUR'),
(168, 'PAÍSES BAJOS'),
(169, 'PAKISTÁN'),
(170, 'PALAOS'),
(171, 'PALESTINA'),
(172, 'PANAMÁ'),
(173, 'PAPÚA NUEVA GUINEA'),
(174, 'PARAGUAY'),
(175, 'PERÚ'),
(176, 'ISLAS PITCAIRN'),
(177, 'POLINESIA FRANCESA'),
(178, 'POLONIA'),
(179, 'PORTUGAL'),
(180, 'PUERTO RICO'),
(181, 'REINO UNIDO'),
(182, 'RUANDA'),
(183, 'RUMANIA'),
(184, 'RUSIA'),
(185, 'SAHARA OCCIDENTAL'),
(186, 'ISLAS SALOMÓN'),
(187, 'SAMOA'),
(188, 'SAMOA AMERICANA'),
(189, 'SAN BARTOLOMÉ'),
(190, 'SAN CRISTÓBAL Y NIEVES'),
(191, 'SAN MARINO'),
(192, 'SAN MARTÍN'),
(193, 'SINT MAARTEN'),
(194, 'SAN PEDRO Y MIQUELÓN'),
(195, 'SAN VICENTE Y LAS GRANADINAS'),
(196, 'ASCENSIÓN Y TRISTÁN DE ACUÑA SANTA ELENA'),
(197, 'SANTA LUCÍA'),
(198, 'SANTO TOMÉ Y PRÍNCIPE'),
(199, 'SENEGAL'),
(200, 'SERBIA'),
(201, 'SEYCHELLES'),
(202, 'SIERRA LEONA'),
(203, 'SINGAPUR'),
(204, 'SIRIA'),
(205, 'SOMALIA'),
(206, 'SOMALILANDIA'),
(207, 'SRI LANKA<'),
(208, 'SUAZILANDIA'),
(209, 'SUDÁFRICA'),
(210, 'SUDÁN'),
(211, 'SUDÁN DEL SUR'),
(212, 'SUECIA'),
(213, 'SUIZA'),
(214, 'SURINAM'),
(215, 'SVALBARD'),
(216, 'TAILANDIA'),
(217, 'TAIWÁN'),
(218, 'TANZANIA'),
(219, 'TAYIKISTÁN'),
(220, 'TIMOR ORIENTAL'),
(221, 'TOGO'),
(222, 'TOKELAU'),
(223, 'TONGA'),
(224, 'TRANSNISTRIA'),
(225, 'TRINIDAD Y TOBAGO'),
(226, 'TÚNEZ'),
(227, 'ISLAS TURCAS Y CAICOS'),
(228, 'TURKMENISTÁN'),
(229, 'TURQUÍA'),
(230, 'TUVALU'),
(231, 'UCRANIA'),
(232, 'UGANDA'),
(233, 'URUGUAY'),
(234, 'UZBEKISTÁN'),
(235, 'VANUATU'),
(236, 'CIUDAD DE VATICANO'),
(237, 'VENEZUELA'),
(238, 'VIETNAM'),
(239, 'ISLAS VÍRGENES BRITÁNICAS'),
(240, 'ISLAS VÍRGENES DE LOS ESTADOS UNIDOS'),
(241, 'WALLIS Y FUTUNA'),
(242, 'YEMEN'),
(243, 'YIBUTI'),
(244, 'ZAMBIA'),
(245, 'ZIMBABUE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `idprograma` int(11) NOT NULL,
  `namesProgram` varchar(45) DEFAULT NULL,
  `dateCreateprogram` date DEFAULT NULL,
  `dateUpdateprogram` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`idprograma`, `namesProgram`, `dateCreateprogram`, `dateUpdateprogram`) VALUES
(1, 'TECNOLOGIA SUPERIOR EN CONTABILIDAD', NULL, NULL),
(2, 'TECNOLOGIA SUPERIOR EN MECÁNICA AUTOMOTRIZ', NULL, NULL),
(3, 'TECNOLOGIA SUPERIOR EN MECATRÓNICA', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idroles` int(11) NOT NULL,
  `rolname` varchar(45) DEFAULT NULL,
  `datecreat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idroles`, `rolname`, `datecreat`) VALUES
(1, 'ADMINISTRADOR', '2023-02-28'),
(2, 'ESTUDIANTE', '2023-02-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `studnt`
--

CREATE TABLE `studnt` (
  `id` int(11) NOT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `Pasaporte` varchar(45) DEFAULT NULL,
  `Nombres` varchar(45) DEFAULT NULL,
  `perApellido` varchar(45) DEFAULT NULL,
  `sdoApellido` varchar(45) DEFAULT NULL,
  `Nacionalidad` varchar(45) DEFAULT NULL,
  `PaisNacimiento` int(11) DEFAULT NULL,
  `ProvinciaNacimiento` varchar(45) DEFAULT NULL,
  `CartonNacimiento` varchar(45) DEFAULT NULL,
  `ParroquiaNacimiento` varchar(45) DEFAULT NULL,
  `fechaNacimiento` varchar(45) DEFAULT NULL,
  `Sexo` varchar(45) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `EstadoCivil` varchar(45) DEFAULT NULL,
  `etnia` varchar(45) DEFAULT NULL,
  `tipoSangre` varchar(45) DEFAULT NULL,
  `PaisResidencia` int(11) DEFAULT NULL,
  `sectorResidencia` varchar(45) DEFAULT NULL,
  `callePrincipal` varchar(45) DEFAULT NULL,
  `calleSecundaria` varchar(45) DEFAULT NULL,
  `RefeDomiciliaria` varchar(45) DEFAULT NULL,
  `BarrioCiudadeia` varchar(45) DEFAULT NULL,
  `CodigoPostal` varchar(45) DEFAULT NULL,
  `NumeroResidencia` varchar(45) DEFAULT NULL,
  `telefonoMovil` varchar(45) DEFAULT NULL,
  `telefijos` varchar(45) DEFAULT NULL,
  `CorreoElectronico` varchar(45) DEFAULT NULL,
  `CorreoInstitucional` varchar(45) DEFAULT NULL,
  `Colegio` varchar(45) DEFAULT NULL,
  `Especialidad` varchar(45) DEFAULT NULL,
  `CentroInformacion` varchar(45) DEFAULT NULL,
  `Sede` varchar(45) DEFAULT NULL,
  `Modalidad` varchar(45) DEFAULT NULL,
  `Programa` int(11) DEFAULT NULL,
  `malla` int(11) DEFAULT NULL,
  `Sescion` varchar(45) DEFAULT NULL,
  `Periodo` varchar(45) DEFAULT NULL,
  `OpcionesRegistro` varchar(45) DEFAULT NULL,
  `Asesor` varchar(45) DEFAULT NULL,
  `dateInscription` varchar(45) DEFAULT NULL,
  `CodigoPromocion` varchar(45) DEFAULT NULL,
  `Archivador` varchar(45) DEFAULT NULL,
  `ComoNosConocio` varchar(45) DEFAULT NULL,
  `RazonesInscribirse` varchar(45) DEFAULT NULL,
  `Observaciones` varchar(45) DEFAULT NULL,
  `nuevotablcol` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `studnt`
--

INSERT INTO `studnt` (`id`, `cedula`, `Pasaporte`, `Nombres`, `perApellido`, `sdoApellido`, `Nacionalidad`, `PaisNacimiento`, `ProvinciaNacimiento`, `CartonNacimiento`, `ParroquiaNacimiento`, `fechaNacimiento`, `Sexo`, `genero`, `EstadoCivil`, `etnia`, `tipoSangre`, `PaisResidencia`, `sectorResidencia`, `callePrincipal`, `calleSecundaria`, `RefeDomiciliaria`, `BarrioCiudadeia`, `CodigoPostal`, `NumeroResidencia`, `telefonoMovil`, `telefijos`, `CorreoElectronico`, `CorreoInstitucional`, `Colegio`, `Especialidad`, `CentroInformacion`, `Sede`, `Modalidad`, `Programa`, `malla`, `Sescion`, `Periodo`, `OpcionesRegistro`, `Asesor`, `dateInscription`, `CodigoPromocion`, `Archivador`, `ComoNosConocio`, `RazonesInscribirse`, `Observaciones`, `nuevotablcol`) VALUES
(1, '0145', '4587', 'DANIEL', 'CHAVEZ', 'TORRIEL', 'Suiza', 1, 'HUAMALIES', 'ÚNICO', 'CATOLICO', '1998-01-12', 'MASCULINO', 'HOMBRE', 'UNION LIBRE', 'INDIGENA', 'O+', 5, 'CALLAO', 'MILAFRORES', 'CALLER-', 'LIMA', 'PRIMABERRA', '52846', '154', '057896', '01458', 'danilo@gmail.com', 'mesu@unas.com', '', ' ', ' ', 'MATRIZ', 'PRESENCIAL', 2, 2, 'MATUTINA', ' ', '', '', '2023-03-11', '0217', 'NUEVO', ' ', 'CARRERA', 'MY PRIMER REGISTRO', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `user` varchar(45) DEFAULT NULL,
  `names` varchar(45) DEFAULT NULL,
  `lastnames` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nanverIdentification` int(11) DEFAULT NULL,
  `rolId` int(11) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `filePerfil` text DEFAULT NULL,
  `datecreat` date DEFAULT NULL,
  `dateUpdate` date DEFAULT NULL,
  `status` enum('ACTIVO','INACTIVO') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `user`, `names`, `lastnames`, `email`, `nanverIdentification`, `rolId`, `password`, `filePerfil`, `datecreat`, `dateUpdate`, `status`) VALUES
(1, '0450055504', 'JOSUE', ' COYAGO FREIRE', 'admin1234@gmail.com', 0450055504, 1, '$argon2i$v=19$m=65536,t=4,p=1$dXd5L3UvZjZ2NnhySHdtVw$gzmrrYGkGdGIw8hc9nbEAcpjg6mQW3mhIhckXjylNro', NULL, NULL, NULL, 'ACTIVO');
(2, '0000000000', 'JOSUE', ' Cxxxxx Fxxxxx', 'admin1234@gmail.com', 0000000000, 1, '$argon2i$v=19$m=65536,t=4,p=1$dXd5L3UvZjZ2NnhySHdtVw$gzmrrYGkGdGIw8hc9nbEAcpjg6mQW3mhIhckXjylNro', NULL, NULL, NULL, 'ACTIVO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `malla`
--
ALTER TABLE `malla`
  ADD PRIMARY KEY (`idmalla`);

--
-- Indices de la tabla `moduls`
--
ALTER TABLE `moduls`
  ADD PRIMARY KEY (`idmodul`);

--
-- Indices de la tabla `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`idoptions`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`idpaises`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`idprograma`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idroles`);

--
-- Indices de la tabla `studnt`
--
ALTER TABLE `studnt`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `malla`
--
ALTER TABLE `malla`
  MODIFY `idmalla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `moduls`
--
ALTER TABLE `moduls`
  MODIFY `idmodul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `options`
--
ALTER TABLE `options`
  MODIFY `idoptions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `idpaises` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `idprograma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idroles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `studnt`
--
ALTER TABLE `studnt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
