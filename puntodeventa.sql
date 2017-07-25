-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2017 a las 01:43:18
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `puntodeventa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id_clase` int(11) NOT NULL,
  `vc_nombre` varchar(50) NOT NULL,
  `usuCreador` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuModificador` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id_clase`, `vc_nombre`, `usuCreador`, `created_at`, `usuModificador`, `updated_at`, `status`) VALUES
(1, 'Refrescos', 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1),
(2, 'Sabritas', 1, '2017-04-29 02:45:34', NULL, '2017-04-29 02:45:34', 1),
(3, 'Suprema', 1, '2017-05-11 23:45:48', NULL, '2017-05-11 23:45:48', 1),
(4, 'Nuevesiniaa', 1, '2017-05-12 00:05:15', NULL, '2017-05-12 00:05:15', 1),
(5, 'asdasdasdasdasdas', 1, '2017-05-12 00:06:39', NULL, '2017-05-12 00:06:39', 1),
(6, 'dfadfadf', 1, '2017-05-12 00:27:32', NULL, '2017-05-12 00:27:32', 1),
(7, '989', 1, '2017-05-12 00:28:48', NULL, '2017-05-12 00:28:48', 1),
(8, '98776', 1, '2017-05-12 00:29:15', NULL, '2017-05-12 00:29:15', 1),
(9, '123123123', 1, '2017-05-12 00:29:51', NULL, '2017-05-12 00:29:51', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `folio` int(10) NOT NULL,
  `vc_nombre` varchar(20) NOT NULL,
  `vc_apellidoP` varchar(20) NOT NULL,
  `vc_apellidoM` varchar(20) NOT NULL,
  `d_fecha_nacimiento` date NOT NULL,
  `vc_telefono` varchar(20) NOT NULL,
  `vc_email` varchar(30) NOT NULL,
  `vc_direccion` varchar(50) NOT NULL,
  `vc_municipio` varchar(30) NOT NULL,
  `vc_estado` varchar(20) NOT NULL,
  `sexo` int(1) NOT NULL,
  `cod_postal` int(5) NOT NULL,
  `recomienda` int(10) DEFAULT NULL,
  `usuCreador` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuModificador` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`folio`, `vc_nombre`, `vc_apellidoP`, `vc_apellidoM`, `d_fecha_nacimiento`, `vc_telefono`, `vc_email`, `vc_direccion`, `vc_municipio`, `vc_estado`, `sexo`, `cod_postal`, `recomienda`, `usuCreador`, `created_at`, `usuModificador`, `updated_at`, `status`) VALUES
(1, 'moy', 'sainz', 'leal', '1994-08-13', '6721097767', 'moy@hotmail.com', 'centro', 'navolato', 'sinalo', 1, 80370, NULL, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1),
(2, 'joel', 'a', 'm', '1992-08-28', '8781231', 'joel@hotmail.com', 'laguna', 'navolato', 'sinaloa', 1, 1, NULL, 1, '2017-05-12 01:16:25', NULL, '2017-05-12 01:16:25', 1),
(3, 'cristian', 'm', 'a', '1992-07-20', '7789792109', 'cris_ales@live.com.mx', 'cochambre', 'navolato', 'sinaloa', 1, 1, NULL, 1, '2017-05-12 01:20:04', NULL, '2017-05-12 01:20:04', 1),
(4, 'cristian', 'm', 'a', '1992-07-20', '7789792109', 'cris_ales@live.com.mx', 'cochambre', 'navolato', 'sinaloa', 1, 1, NULL, 1, '2017-05-12 01:20:04', NULL, '2017-05-12 01:20:04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ventas`
--

CREATE TABLE `detalle_ventas` (
  `id_venta` int(11) NOT NULL,
  `cod_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuCreador` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usuModificador` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familias`
--

CREATE TABLE `familias` (
  `id_familia` int(11) NOT NULL,
  `vc_nombre` varchar(50) NOT NULL,
  `id_clase` int(11) NOT NULL,
  `usuCreador` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuModificador` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `familias`
--

INSERT INTO `familias` (`id_familia`, `vc_nombre`, `id_clase`, `usuCreador`, `created_at`, `usuModificador`, `updated_at`, `status`) VALUES
(1, 'Coca Cola', 1, 1, '2017-04-29 02:46:55', NULL, '2017-04-29 02:46:55', 1),
(2, 'Pepsi', 1, 1, '2017-04-29 21:52:54', NULL, '2017-04-29 21:52:54', 1),
(3, 'Doritos', 2, 1, '2017-04-29 21:53:11', NULL, '2017-04-29 21:53:11', 1),
(4, 'Tostitos', 2, 1, '2017-05-12 01:01:09', NULL, '2017-05-12 01:01:09', 1),
(5, 'Rancheritos', 2, 1, '2017-05-12 01:02:27', NULL, '2017-05-12 01:02:27', 1),
(6, 'Fanta', 1, 1, '2017-05-12 01:02:48', NULL, '2017-05-12 01:02:48', 1),
(7, 'Sprite', 1, 1, '2017-05-12 01:04:00', NULL, '2017-05-12 01:04:00', 1),
(8, 'Sprite', 1, 1, '2017-05-12 01:04:00', NULL, '2017-05-12 01:04:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_producto` int(11) NOT NULL,
  `vc_codigo` varchar(20) NOT NULL,
  `vc_nombre` varchar(50) NOT NULL,
  `vc_descripcion` varchar(1000) NOT NULL,
  `vc_descripcion_corta` varchar(500) NOT NULL,
  `costo` decimal(10,0) NOT NULL,
  `venta` decimal(10,0) NOT NULL,
  `precio_mayoreo` decimal(10,0) NOT NULL,
  `iva` decimal(10,0) NOT NULL,
  `ieps` decimal(10,0) NOT NULL,
  `i_existencia` int(11) NOT NULL,
  `i_existencia_min` int(11) NOT NULL,
  `i_existencia_max` int(11) NOT NULL,
  `id_familia` int(11) NOT NULL,
  `usuCreador` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuModificador` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_producto`, `vc_codigo`, `vc_nombre`, `vc_descripcion`, `vc_descripcion_corta`, `costo`, `venta`, `precio_mayoreo`, `iva`, `ieps`, `i_existencia`, `i_existencia_min`, `i_existencia_max`, `id_familia`, `usuCreador`, `created_at`, `usuModificador`, `updated_at`, `status`) VALUES
(1, '098321', 'Coca Cola 2L', 'Coca Cola 2L Retornable aplica promociones de fichas', 'Coca Coca 2L Retornbale', '0', '0', '20', '2', '1', 10, 10, 20, 1, 1, '2017-04-29 03:53:30', NULL, '2017-04-29 03:53:30', 1),
(2, '9083212', 'Sprite 2L', 'Sprite 2l botella retornable', 'Sprite 2L', '17', '20', '18', '2', '1', 12, 10, 20, 1, 1, '2017-04-29 08:40:33', NULL, '2017-04-29 08:40:33', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Christian', 'cris_ales@live.com.mx', '$2y$10$pQqbvL/FVEFN185c1gAnj.R63V5rZJMVyuYsVdbJjh0r3kOOKqyg6', 'Gbtb3rHUX3wnWCRQCn7TIi0ctpzo8RqbNZSaUUHZToDYRTD026Yk1tVzVdAY', '2017-05-13 00:34:48', '2017-05-13 00:34:48'),
(2, 'admin', 'admin@admin.com', '$2y$10$S87xVMT3kithjkrqdKLkNOI1Sswuap3dJhGM6mPUfFCokuM.Rwuba', 'v7qit3eetYJZvVj4Sf333VI3LU7UQXhyMJgWSYJ2qYOBmAfFUjh7XkmKed1S', '2017-05-13 00:51:00', '2017-05-13 00:51:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varbinary(8000) NOT NULL,
  `vc_imagen` varchar(500) DEFAULT NULL,
  `vc_nombre` varchar(60) NOT NULL,
  `b_admin` int(1) NOT NULL,
  `usuCreador` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuModificador` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `vc_imagen`, `vc_nombre`, `b_admin`, `usuCreador`, `created_at`, `usuModificador`, `updated_at`, `status`) VALUES
(1, 'admin', 0x61646d696e, NULL, 'admin', 1, NULL, '2017-04-27 04:44:36', NULL, '2017-04-27 04:44:36', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuCreador` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usuModificador` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id_clase`),
  ADD KEY `usuModificador` (`usuModificador`),
  ADD KEY `usuCreador` (`usuCreador`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`folio`),
  ADD UNIQUE KEY `folio` (`recomienda`),
  ADD KEY `usuCreador` (`usuCreador`),
  ADD KEY `usuModificador` (`usuModificador`);

--
-- Indices de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `cod_producto` (`cod_producto`),
  ADD KEY `usuModificador` (`usuModificador`),
  ADD KEY `usuCreador` (`usuCreador`);

--
-- Indices de la tabla `familias`
--
ALTER TABLE `familias`
  ADD PRIMARY KEY (`id_familia`),
  ADD KEY `id_clase` (`id_clase`),
  ADD KEY `usuCreador` (`usuCreador`),
  ADD KEY `usuModificador` (`usuModificador`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_producto`),
  ADD KEY `usuCreador` (`usuCreador`),
  ADD KEY `usuModificador` (`usuModificador`),
  ADD KEY `id_familia` (`id_familia`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `usuCreador` (`usuCreador`),
  ADD KEY `usuModificador` (`usuModificador`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `folio` (`cliente`),
  ADD KEY `usuModificador` (`usuModificador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id_clase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `folio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `familias`
--
ALTER TABLE `familias`
  MODIFY `id_familia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `cod_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `clases_ibfk_1` FOREIGN KEY (`usuCreador`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `clases_ibfk_2` FOREIGN KEY (`usuModificador`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`usuCreador`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`usuModificador`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD CONSTRAINT `detalle_ventas_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id_venta`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_ventas_ibfk_2` FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`cod_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `familias`
--
ALTER TABLE `familias`
  ADD CONSTRAINT `familias_ibfk_1` FOREIGN KEY (`id_clase`) REFERENCES `clases` (`id_clase`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_4` FOREIGN KEY (`id_familia`) REFERENCES `familias` (`id_familia`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`usuCreador`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`usuModificador`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`folio`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
