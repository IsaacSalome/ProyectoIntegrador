-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-11-2020 a las 02:49:52
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aquav1`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Actualizar_pago` (IN `vid_pagos` INT, IN `vhorasTrabajadas` INT, IN `vfecha` DATE, IN `vid_Empleados` INT)  NO SQL
BEGIN
set @id =(SELECT empleados.id_puesto FROM empleados WHERE empleados.id_Empleados=vid_Empleados);

set @salario = (SELECT puestos.salarioBase FROM puestos WHERE puestos.id_puesto=@id);
set @horas = (SELECT puestos.horasTrabajo FROM puestos WHERE puestos.id_puesto=@id);

set @valor= (@salario/@horas)*vhorasTrabajadas;

UPDATE `pagosempleados` 
SET `horasTrabajadas` = vhorasTrabajadas, 
`fecha` = vfecha, 
`total` = @valor,
`id_Empleados` =vid_Empleados
WHERE `pagosempleados`.`id_pagosE` = vid_pagos;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Modificar_alumnos` (IN `id` INT, IN `Vnombre` VARCHAR(50), IN `VapellidoPaterno` VARCHAR(50), IN `VapellidoMaterno` VARCHAR(50), IN `Vedad` INT, IN `Vcalle` VARCHAR(100), IN `VnumeroInterior` INT, IN `VnumeroExterior` INT, IN `VcodigoPostal` VARCHAR(5), IN `Vlocalidad` VARCHAR(100), IN `Vcorreo` VARCHAR(100), IN `Vtelefono` VARCHAR(10), IN `tnombre` VARCHAR(100), IN `tapellidoPaterno` VARCHAR(100), IN `tapellidoMaterno` VARCHAR(100), IN `tedad` INT, IN `tsexo` VARCHAR(5), IN `tparentesco` VARCHAR(50), IN `ttelefono` VARCHAR(10), IN `Vfoto` VARCHAR(255))  NO SQL
BEGIN
UPDATE `alumnos` SET 
`nombre` = Vnombre, 
`apellidoPaterno` = VapellidoPaterno, 
`apellidoMaterno` = VapellidoMaterno, 
`edad` = Vedad, 
`calle` = Vcalle, 
`numeroInterior` = VnumeroInterior, 
`numeroExterior` = VnumeroExterior, 
`codigoPostal` = VcodigoPostal, 
`localidad` = Vlocalidad, 
`correo` = Vcorreo, 
`telefono` = Vtelefono, 
`foto` = Vfoto 
WHERE `alumnos`.`id_Estudiantes` = id;

UPDATE `tutores` SET 
`nombre` = tnombre, 
`apellidoPaterno` = tapellidoPaterno, 
`apellidoMaterno` = tapellidoMaterno, 
`sexo` = tsexo, 
`parentesco` = tparentesco, 
`edad` = tedad, 
`telefono` = ttelefono, 
`created_at` = NULL, 
`updated_at` = Now() 
WHERE `tutores`.`id_tutores` = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Registrar_alumnos` (IN `Vnombre` VARCHAR(50), IN `VapellidoPaterno` VARCHAR(50), IN `VapellidoMaterno` VARCHAR(50), IN `Vedad` INT, IN `Vcalle` VARCHAR(100), IN `VnumeroInterior` INT, IN `VnumeroExterior` INT, IN `VcodigoPostal` VARCHAR(5), IN `Vlocalidad` VARCHAR(100), IN `Vcorreo` VARCHAR(100), IN `Vtelefono` VARCHAR(10), IN `tnombre` VARCHAR(100), IN `tapellidoPaterno` VARCHAR(100), IN `tapellidoMaterno` VARCHAR(100), IN `tedad` INT, IN `tsexo` VARCHAR(5), IN `tparentesco` VARCHAR(50), IN `ttelefono` VARCHAR(10), IN `Vfoto` VARCHAR(255))  NO SQL
BEGIN
INSERT INTO `alumnos` (`nombre`, `apellidoPaterno`, `apellidoMaterno`, `edad`, `calle`, `numeroInterior`, `numeroExterior`, `codigoPostal`, `localidad`, `correo`, `telefono`, `foto`, `created_at`, `updated_at`) VALUES (Vnombre, VapellidoPaterno, VapellidoMaterno, Vedad, Vcalle, VnumeroInterior, VnumeroExterior, VcodigoPostal, Vlocalidad, Vcorreo, Vtelefono, Vfoto, Now(), Now());

SET @id_Estudiantes = LAST_INSERT_ID();

INSERT INTO `tutores` (`nombre`, `apellidoPaterno`, `apellidoMaterno`, `sexo`, `parentesco`, `edad`, `telefono`, `id`) VALUES (tnombre, tapellidoPaterno, tapellidoMaterno, tsexo, tparentesco, tedad, ttelefono, @id_Estudiantes);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Registrar_pago` (IN `vhorasTrabajadas` INT, IN `vfecha` DATE, IN `vid_Empleados` INT)  NO SQL
BEGIN
set @id =(SELECT empleados.id_puesto FROM empleados WHERE empleados.id_Empleados=vid_Empleados);

set @salario = (SELECT puestos.salarioBase FROM puestos WHERE puestos.id_puesto=@id);
set @horas = (SELECT puestos.horasTrabajo FROM puestos WHERE puestos.id_puesto=@id);

set @valor= (@salario/@horas)*vhorasTrabajadas;

INSERT INTO `pagosempleados` (`horasTrabajadas`, `fecha`, `total`, `id_Empleados`) VALUES (vhorasTrabajadas, vfecha, @valor, vid_Empleados);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_Estudiantes` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoPaterno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoMaterno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `calle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroInterior` int(11) NOT NULL,
  `numeroExterior` int(11) NOT NULL,
  `codigoPostal` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_Estudiantes`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `edad`, `calle`, `numeroInterior`, `numeroExterior`, `codigoPostal`, `localidad`, `correo`, `telefono`, `foto`, `created_at`, `updated_at`) VALUES
(3, 'isaac', 'salome', 'gandara', 21, 'capitan antonio fernandez becerra', 37, 0, '73965', 'Teziutlan', 'isaacsalome1704@gmail.com', '2311443528', 'uploads/kIXMhnoI8IFbbJmhXqhvpML51XKD0WlFEz56uXjc.jpeg', '2020-11-01 22:54:07', '2020-11-01 22:54:07'),
(4, 'Karen', 'Salome', 'Gandara', 19, 'capitan antonio fernandez becerra', 37, 0, '73800', 'Teziutlan', 'isaacsalome1704@gmail.com', '2311443528', 'uploads/SdTlFfR6YthZMdejZdz5JWNYdlbcp3G7RoFBK5VM.jpeg', '2020-11-01 23:22:07', '2020-11-01 23:22:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptos`
--

CREATE TABLE `conceptos` (
  `id_concepto` int(11) NOT NULL,
  `concepto` varchar(100) NOT NULL,
  `costo` double NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conceptos`
--

INSERT INTO `conceptos` (`id_concepto`, `concepto`, `costo`, `updated_at`) VALUES
(1, 'inscripcion', 800, '2020-11-01 20:29:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_Empleados` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoPaterno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoMaterno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `calle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroInterior` int(11) NOT NULL,
  `numeroExterior` int(11) NOT NULL,
  `codigoPostal` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curp` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfc` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_puesto` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_Empleados`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `sexo`, `edad`, `calle`, `numeroInterior`, `numeroExterior`, `codigoPostal`, `localidad`, `correo`, `telefono`, `curp`, `rfc`, `id_puesto`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'isaac', 'salome', 'gandara', 'Hombre', 17, 'capitan antonio fernandez becerra', 3, 0, '73800', 'te', 'isaacsalome1704@gmail.com', '1231351532', 'SAGI981202HPLLNS02', 'SAGI981202', 1, 'uploads/ZPWqJAnmHmUtAWGR9k5QrtYoh5B5EApOBhi6SIWb.jpeg', NULL, '2020-11-02 01:11:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_19_032100_create_empleados_table', 1),
(5, '2020_10_19_032355_create_alumnos_table', 1),
(6, '2020_10_25_032356_create_tutores_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagosalumnos`
--

CREATE TABLE `pagosalumnos` (
  `id_pagosA` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_Estudiantes` int(11) NOT NULL,
  `id_concepto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagosalumnos`
--

INSERT INTO `pagosalumnos` (`id_pagosA`, `fecha`, `id_Estudiantes`, `id_concepto`) VALUES
(4, '2020-11-01 22:54:58', 3, 1),
(5, '2020-11-01 23:22:43', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagosempleados`
--

CREATE TABLE `pagosempleados` (
  `id_pagosE` int(11) NOT NULL,
  `horasTrabajadas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` int(11) NOT NULL,
  `id_Empleados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagosempleados`
--

INSERT INTO `pagosempleados` (`id_pagosE`, `horasTrabajadas`, `fecha`, `total`, `id_Empleados`) VALUES
(1, 15, '2020-11-01', 341, 1),
(2, 15, '2020-11-01', 341, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `id_puesto` int(11) NOT NULL,
  `puesto` varchar(100) NOT NULL,
  `salarioBase` double NOT NULL,
  `horasTrabajo` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id_puesto`, `puesto`, `salarioBase`, `horasTrabajo`, `updated_at`) VALUES
(1, 'Recursos Human', 1000, 44, '2020-11-01 08:53:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `id_tutores` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoPaterno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoMaterno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentesco` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tutores`
--

INSERT INTO `tutores` (`id_tutores`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `sexo`, `parentesco`, `edad`, `telefono`, `id`, `created_at`, `updated_at`) VALUES
(3, 'alejandra', 'Gandara', 'Lara', 'Mujer', 'Madre', 54, '2311039310', 3, NULL, NULL),
(4, 'alejandra', 'Gandara', 'Lara', 'Mujer', 'Madre', 54, '2311039319', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'joel', 'essjoelssm@gmail.com', NULL, '$2y$10$/UHOZorD.lcBuaSNd2lvi.AXsDREL4tmq9veUMDwUalJASYidWMXS', NULL, '2020-10-30 11:25:09', '2020-10-30 11:25:09'),
(2, 'isaac', 'isaacsalome1704@gmail.com', NULL, '$2y$10$zdNtwyyZ5b25tVPDyEeyH.T9VmyaJ4J/Gm7kn8vIL41OH9rIQtx4u', NULL, '2020-10-30 11:26:34', '2020-10-30 11:26:34'),
(3, 'Karen', 'karensalome048@gmail.com', NULL, '$2y$10$GCZ4ppPJ9djmst6lXPPDGO7xafNw.5OzjmKG4XJXdGdMwpCoQaWg2', NULL, '2020-11-01 02:17:15', '2020-11-01 02:17:15');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_palumnos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_palumnos` (
`id_pagosA` int(11)
,`concepto` varchar(100)
,`fecha` timestamp
,`nombre` varchar(152)
,`costo` double
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_pempleados`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_pempleados` (
`id_pagosE` int(11)
,`horasTrabajadas` int(11)
,`empleado` varchar(202)
,`fecha` date
,`total` int(11)
,`puesto` varchar(100)
,`salarioBase` double
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_palumnos`
--
DROP TABLE IF EXISTS `vista_palumnos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_palumnos`  AS  select `pa`.`id_pagosA` AS `id_pagosA`,`c`.`concepto` AS `concepto`,`pa`.`fecha` AS `fecha`,concat(`a`.`nombre`,' ',`a`.`apellidoPaterno`,' ',`a`.`apellidoMaterno`) AS `nombre`,`c`.`costo` AS `costo` from ((`pagosalumnos` `pa` join `alumnos` `a` on((`pa`.`id_Estudiantes` = `a`.`id_Estudiantes`))) join `conceptos` `c` on((`pa`.`id_concepto` = `c`.`id_concepto`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_pempleados`
--
DROP TABLE IF EXISTS `vista_pempleados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_pempleados`  AS  select `pe`.`id_pagosE` AS `id_pagosE`,`pe`.`horasTrabajadas` AS `horasTrabajadas`,concat(`e`.`nombre`,' ',`e`.`apellidoPaterno`,' ',`e`.`apellidoMaterno`) AS `empleado`,`pe`.`fecha` AS `fecha`,`pe`.`total` AS `total`,`p`.`puesto` AS `puesto`,`p`.`salarioBase` AS `salarioBase` from ((`puestos` `p` join `empleados` `e` on((`p`.`id_puesto` = `e`.`id_puesto`))) join `pagosempleados` `pe` on((`e`.`id_Empleados` = `pe`.`id_Empleados`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_Estudiantes`);

--
-- Indices de la tabla `conceptos`
--
ALTER TABLE `conceptos`
  ADD PRIMARY KEY (`id_concepto`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_Empleados`),
  ADD KEY `id_puesto` (`id_puesto`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagosalumnos`
--
ALTER TABLE `pagosalumnos`
  ADD PRIMARY KEY (`id_pagosA`),
  ADD KEY `id_Estudiantes` (`id_Estudiantes`),
  ADD KEY `id_concepto` (`id_concepto`);

--
-- Indices de la tabla `pagosempleados`
--
ALTER TABLE `pagosempleados`
  ADD PRIMARY KEY (`id_pagosE`),
  ADD KEY `id_Empleados` (`id_Empleados`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id_puesto`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`id_tutores`),
  ADD KEY `tutores_id_foreign` (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_Estudiantes` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `conceptos`
--
ALTER TABLE `conceptos`
  MODIFY `id_concepto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_Empleados` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pagosalumnos`
--
ALTER TABLE `pagosalumnos`
  MODIFY `id_pagosA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pagosempleados`
--
ALTER TABLE `pagosempleados`
  MODIFY `id_pagosE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `id_puesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tutores`
--
ALTER TABLE `tutores`
  MODIFY `id_tutores` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagosalumnos`
--
ALTER TABLE `pagosalumnos`
  ADD CONSTRAINT `id_concepto` FOREIGN KEY (`id_concepto`) REFERENCES `conceptos` (`id_concepto`);

--
-- Filtros para la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD CONSTRAINT `tutores_id_foreign` FOREIGN KEY (`id`) REFERENCES `alumnos` (`id_Estudiantes`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
