-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2017 a las 19:30:13
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas`
--

CREATE TABLE `cajas` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `inicial` decimal(10,0) DEFAULT NULL,
  `cantidad` decimal(10,0) DEFAULT NULL,
  `usuCreador` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuModificador` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cajas`
--

INSERT INTO `cajas` (`id`, `usuario`, `inicial`, `cantidad`, `usuCreador`, `created_at`, `usuModificador`, `updated_at`, `status`) VALUES
(1, 1, '300', '200', 1, '2017-05-24 08:08:41', 1, '2017-05-24 14:08:41', 1),
(2, 1, '350', NULL, 1, '2017-05-24 13:57:14', NULL, '2017-05-24 13:57:14', 1),
(3, 1, '100', NULL, 1, '2017-05-24 13:58:48', NULL, '2017-05-24 13:58:48', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id` int(11) NOT NULL,
  `vc_nombre` varchar(50) NOT NULL,
  `usuCreador` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuModificador` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id`, `vc_nombre`, `usuCreador`, `created_at`, `usuModificador`, `updated_at`, `status`) VALUES
(1, 'Refrescos', 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1),
(2, 'botanas', 1, '2017-05-24 16:42:24', NULL, '2017-05-24 22:42:24', 1),
(3, 'Suprema', 1, '2017-05-11 23:45:48', NULL, '2017-05-11 23:45:48', 1),
(4, 'Nuevesiniaa', 1, '2017-05-24 16:38:20', NULL, '2017-05-24 22:38:20', 0),
(5, 'asdasdasdasdasdas', 1, '2017-05-24 07:35:34', NULL, '2017-05-24 13:35:34', 0),
(6, 'dfadfadf', 1, '2017-05-24 07:46:14', NULL, '2017-05-24 13:46:14', 0),
(7, '989', 1, '2017-05-24 16:38:15', NULL, '2017-05-24 22:38:15', 0),
(8, '98776', 1, '2017-05-24 16:38:30', NULL, '2017-05-24 22:38:30', 0),
(9, '123123123', 1, '2017-05-24 16:38:25', NULL, '2017-05-24 22:38:25', 0),
(10, 'Galletas', 1, '2017-05-24 22:38:38', NULL, '2017-05-24 22:38:38', 1),
(11, 'Electronica', 1, '2017-05-24 22:44:51', NULL, '2017-05-24 22:44:51', 1),
(12, 'NUeva clase', 1, '2017-05-25 00:37:50', NULL, '2017-05-25 00:37:50', 1),
(13, 'coca', 1, '2017-06-26 00:55:14', NULL, '2017-06-26 00:55:14', 1),
(14, 'dos', 1, '2017-06-26 01:01:51', NULL, '2017-06-26 01:01:51', 1),
(15, 'clase 2', 1, '2017-06-26 21:00:42', NULL, '2017-06-26 21:00:42', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) NOT NULL,
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
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `vc_nombre`, `vc_apellidoP`, `vc_apellidoM`, `d_fecha_nacimiento`, `vc_telefono`, `vc_email`, `vc_direccion`, `vc_municipio`, `vc_estado`, `sexo`, `cod_postal`, `recomienda`, `usuCreador`, `created_at`, `usuModificador`, `updated_at`, `status`) VALUES
(1, 'Publico General', '', '', '0000-00-00', '', '', '', '', '', 0, 0, NULL, 0, '2017-05-24 06:54:16', 0, '0000-00-00 00:00:00', 1),
(8, 'Carlos', 'Santillan', 'otro', '1992-07-20', '67215458785', 'carlos@itculiacan.com', 'Culiacan', 'Culiacan rosales', 'Sinaloa', 1, 80375, 1, 1, '2017-05-24 13:33:31', NULL, '2017-05-24 13:33:31', 1),
(10, 'Otro', 'Mas', 'Prueba', '2010-07-10', '61518786565', 'otro@otro.com', 'Navolato', 'Navolato', 'Sinaloa', 0, 80360, 8, 1, '2017-05-24 07:47:43', NULL, '2017-05-24 13:47:43', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `factura` varchar(300) NOT NULL,
  `total` double NOT NULL,
  `usuCreador` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuModificador` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compras`
--

CREATE TABLE `detalle_compras` (
  `id` int(11) NOT NULL,
  `folio_compra` int(11) NOT NULL,
  `cod_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costo` double NOT NULL,
  `usuCreador` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuModificador` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Volcado de datos para la tabla `detalle_ventas`
--

INSERT INTO `detalle_ventas` (`id_venta`, `cod_producto`, `cantidad`, `total`, `created_at`, `usuCreador`, `updated_at`, `usuModificador`, `status`) VALUES
(3, 1, 5, '100', '2017-05-24 20:37:54', 1, '2017-05-24 20:37:54', NULL, 1),
(4, 1, 1, '20', '2017-05-24 20:39:01', 1, '2017-05-24 20:39:01', NULL, 1),
(5, 4, 1, '15', '2017-05-24 20:42:18', 1, '2017-05-24 20:42:18', NULL, 1),
(6, 7, 1, '10', '2017-05-24 22:48:56', 1, '2017-05-24 22:48:56', NULL, 1),
(6, 6, 1, '5', '2017-05-24 22:48:56', 1, '2017-05-24 22:48:56', NULL, 1),
(6, 5, 1, '15', '2017-05-24 22:48:56', 1, '2017-05-24 22:48:56', NULL, 1),
(7, 9, 11, '132', '2017-05-25 00:42:58', 1, '2017-05-25 00:42:58', NULL, 1),
(7, 7, 1, '10', '2017-05-25 00:42:58', 1, '2017-05-25 00:42:58', NULL, 1),
(7, 6, 1, '5', '2017-05-25 00:42:58', 1, '2017-05-25 00:42:58', NULL, 1),
(8, 10, 1, '120', '2017-05-25 05:12:25', 1, '2017-05-25 05:12:25', NULL, 1),
(8, 8, 1, '450', '2017-05-25 05:12:25', 1, '2017-05-25 05:12:25', NULL, 1),
(9, 6, 1, '5', '2017-07-03 21:14:44', 1, '2017-07-03 21:14:44', NULL, 1),
(10, 6, 1, '5', '2017-07-03 21:15:32', 1, '2017-07-03 21:15:32', NULL, 1),
(10, 6, 1, '5', '2017-07-03 21:15:32', 1, '2017-07-03 21:15:32', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familias`
--

CREATE TABLE `familias` (
  `id` int(11) NOT NULL,
  `vc_nombre` varchar(50) NOT NULL,
  `id_clase` int(11) NOT NULL,
  `usuCreador` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuModificador` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `familias`
--

INSERT INTO `familias` (`id`, `vc_nombre`, `id_clase`, `usuCreador`, `created_at`, `usuModificador`, `updated_at`, `status`) VALUES
(1, 'Coca Cola', 1, 1, '2017-04-29 02:46:55', NULL, '2017-04-29 02:46:55', 1),
(2, 'Pepsi', 1, 1, '2017-04-29 21:52:54', NULL, '2017-04-29 21:52:54', 1),
(3, 'Sabritas', 2, 1, '2017-05-24 16:42:08', NULL, '2017-05-24 22:42:08', 1),
(4, 'Tostitos', 2, 1, '2017-05-12 01:01:09', NULL, '2017-05-12 01:01:09', 1),
(5, 'Rancheritos', 2, 1, '2017-05-24 07:46:25', NULL, '2017-05-24 13:46:25', 0),
(6, 'Fanta', 1, 1, '2017-05-24 07:46:57', NULL, '2017-05-24 13:46:57', 0),
(7, 'Sprite', 1, 1, '2017-05-24 16:39:13', NULL, '2017-05-24 22:39:13', 0),
(8, 'Sprite', 1, 1, '2017-05-12 01:04:00', NULL, '2017-05-12 01:04:00', 1),
(9, 'Barcel', 1, 1, '2017-05-24 13:48:01', NULL, '2017-05-24 13:48:01', 1),
(10, 'Computo', 11, 1, '2017-05-24 22:45:06', NULL, '2017-05-24 22:45:06', 1),
(11, 'NUeva familia', 12, 1, '2017-05-25 00:38:24', NULL, '2017-05-25 00:38:24', 1);

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
  `id` int(11) NOT NULL,
  `vc_codigo` varchar(20) NOT NULL,
  `vc_nombre` varchar(50) NOT NULL,
  `vc_descripcion` varchar(1000) NOT NULL,
  `vc_descripcion_corta` varchar(500) NOT NULL,
  `costo` decimal(10,0) NOT NULL,
  `venta` decimal(10,0) NOT NULL,
  `precio_mayoreo` decimal(10,0) NOT NULL,
  `i_existencia` int(11) NOT NULL,
  `i_existencia_min` int(11) NOT NULL,
  `i_existencia_max` int(11) NOT NULL,
  `id_familia` int(11) NOT NULL,
  `usuCreador` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuModificador` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `vc_codigo`, `vc_nombre`, `vc_descripcion`, `vc_descripcion_corta`, `costo`, `venta`, `precio_mayoreo`, `i_existencia`, `i_existencia_min`, `i_existencia_max`, `id_familia`, `usuCreador`, `created_at`, `usuModificador`, `updated_at`, `status`) VALUES
(1, '098321', 'Coca Cola 2L', 'Coca Cola 2L Retornable aplica promociones de fichas', 'Coca Coca 2L Retornbale', '50', '20', '20', 42, 10, 20, 1, 1, '2017-05-24 16:35:26', NULL, '2017-05-24 22:35:26', 0),
(2, '9083212', 'Sprite 2L', 'Sprite 2l botella retornable', 'Sprite 2L', '17', '20', '18', 44, 10, 20, 1, 1, '2017-05-24 16:35:31', NULL, '2017-05-24 22:35:31', 0),
(3, '000001', 'Rufles', 'Rufles 350gr', 'Rufles 350GR Verdes', '6', '10', '8', 43, 9, 20, 5, 1, '2017-05-24 07:47:21', NULL, '2017-05-24 13:47:21', 0),
(4, '01', 'Cemento', 'Cemento del fuerte', 'fuerte', '100', '15', '15', 49, 10, 10, 3, 1, '2017-05-24 16:35:36', NULL, '2017-05-24 22:35:36', 0),
(5, '123456', 'Manzanita', 'bebida sabor manzana con gas', 'refresco de manzana', '8', '15', '12', 49, 10, 60, 1, 1, '2017-07-21 15:33:00', 1, '2017-07-21 21:33:00', 1),
(6, '7501000651375', 'Mamut', 'Malvavisco con galleta y chocolate', 'Mamut', '3', '5', '4', 45, 20, 100, 3, 1, '2017-07-03 15:15:32', NULL, '2017-07-03 21:15:32', 1),
(7, '7501011142299', 'Grujitos', 'Botana Grugitos 40 g', 'Grujitos 40 g', '7', '10', '8', 7, 2, 30, 3, 1, '2017-05-24 18:42:58', NULL, '2017-05-25 00:42:58', 1),
(8, '17020168', 'Lectora de barraslecto', 'Lectora de barras Diamante', 'Lector', '350', '450', '400', 2, 1, 15, 10, 1, '2017-05-24 23:12:25', NULL, '2017-05-25 05:12:25', 1),
(9, '7501000601776', 'Emperador', 'Galletas emperador', 'emperador', '10', '12', '11', 39, 30, 60, 11, 1, '2017-05-24 18:42:58', NULL, '2017-05-25 00:42:58', 1),
(10, '740617256512', 'memoria Ram 8gb', 'memoria HYperX 8 gb', 'memoria RAM', '100', '120', '110', 11, 1, 99, 10, 1, '2017-05-24 23:12:25', NULL, '2017-05-25 05:12:25', 1),
(11, '000000', 'Mota', 'verde', 'verdee', '120', '150', '140', 20, 10, 300, 1, 1, '2017-07-21 02:17:57', NULL, '2017-07-21 02:17:57', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `telefono` int(15) NOT NULL,
  `cel` int(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cod_postal` int(5) NOT NULL,
  `direcccion` varchar(200) NOT NULL,
  `RFC` varchar(15) NOT NULL,
  `tipo` int(1) NOT NULL,
  `usuCreador` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuModificador` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@admin.com', '$2y$10$S87xVMT3kithjkrqdKLkNOI1Sswuap3dJhGM6mPUfFCokuM.Rwuba', 'V3ExcOq4RMgMsIKoE17vBuWWWEvfdENT0ruSY8ZIRYmVOc69daZWYgXo1KES', '2017-05-13 00:51:00', '2017-05-13 00:51:00'),
(3, 0, 'Joel Francisco', 'joel@joel.com', '$2y$10$ouTx7Ezy5nI1ZI8N.rIFZOZ0jd7DX4Wg4wsbme4fs1Mf1DhUfZC9q', 'Nt5xp9twMXLbybVvZTw3MMVwGVL1ad5kZdfEpYoW0WdxXy3Ov5QCgTYNVDwM', '2017-05-24 12:16:38', '2017-05-24 12:16:38'),
(4, NULL, 'usuario', 'usuario@usuario.com', '$2y$10$IsBD4CcTd7M0VXH0BxpHce62lGWg.NEdgJxu1jj5.uJizPosTbBeO', 'gI5OsXMtY7BfXLgVvYVRGWSitEX9h86AksnSMB8XYzlAgSYHSrHHt0FAm624', '2017-07-21 02:25:19', '2017-07-21 02:25:19'),
(6, NULL, 'Cajero', 'cajero@cajero.com', '$2y$10$nUWPwRO6kdcowHyFb3akW.L.2x3SLCecaV9H35rRPlU4VzIM0yl.O', 'vXgRoIWXQzb3EbNeaXt9s0RcLEJOSpzKvctYC8Voh7g12RN8cnI0BFQ8ffUt', '2017-07-21 11:39:16', '2017-07-21 11:39:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `caja` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `usuCreador` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usuModificador` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `cliente`, `caja`, `total`, `created_at`, `usuCreador`, `updated_at`, `usuModificador`, `status`) VALUES
(3, 8, 1, '0', '2017-05-24 20:37:54', 3, '2017-05-24 20:37:54', NULL, 1),
(4, 1, 1, '0', '2017-05-24 20:39:01', 1, '2017-05-24 20:39:01', NULL, 1),
(5, 8, 1, '0', '2017-05-24 20:42:18', 1, '2017-05-24 20:42:18', NULL, 1),
(6, 1, 1, '0', '2017-05-24 22:48:56', 1, '2017-05-24 22:48:56', NULL, 1),
(7, 1, 1, '0', '2017-05-25 00:42:57', 3, '2017-05-25 00:42:57', NULL, 1),
(8, 1, 1, '0', '2017-05-25 05:12:25', 1, '2017-05-25 05:12:25', NULL, 1),
(9, 1, 1, '0', '2017-07-03 21:14:44', 1, '2017-07-03 21:14:44', NULL, 1),
(10, 1, 1, '0', '2017-07-03 21:15:32', 1, '2017-07-03 21:15:32', NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuCreador` (`usuCreador`),
  ADD KEY `usuModificador` (`usuModificador`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `usuCreador_2` (`usuCreador`),
  ADD KEY `usuModificador_2` (`usuModificador`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuModificador` (`usuModificador`),
  ADD KEY `usuCreador` (`usuCreador`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `folio` (`recomienda`),
  ADD KEY `usuCreador` (`usuCreador`),
  ADD KEY `usuModificador` (`usuModificador`),
  ADD KEY `recomienda` (`recomienda`),
  ADD KEY `usuModificador_2` (`usuModificador`),
  ADD KEY `usuCreador_2` (`usuCreador`),
  ADD KEY `usuModificador_3` (`usuModificador`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `usuModificador` (`usuModificador`),
  ADD KEY `usuCreador` (`usuCreador`);

--
-- Indices de la tabla `detalle_compras`
--
ALTER TABLE `detalle_compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folio_compra` (`folio_compra`),
  ADD KEY `cod_producto` (`cod_producto`),
  ADD KEY `usuCreador` (`usuCreador`),
  ADD KEY `usuModificador` (`usuModificador`);

--
-- Indices de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `cod_producto` (`cod_producto`),
  ADD KEY `usuModificador` (`usuModificador`),
  ADD KEY `usuCreador` (`usuCreador`),
  ADD KEY `usuCreador_2` (`usuCreador`),
  ADD KEY `updated_at` (`updated_at`);

--
-- Indices de la tabla `familias`
--
ALTER TABLE `familias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_clase` (`id_clase`),
  ADD KEY `usuCreador` (`usuCreador`),
  ADD KEY `usuModificador` (`usuModificador`),
  ADD KEY `usuCreador_2` (`usuCreador`),
  ADD KEY `usuModificador_2` (`usuModificador`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuCreador` (`usuCreador`),
  ADD KEY `usuModificador` (`usuModificador`),
  ADD KEY `id_familia` (`id_familia`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuCreador` (`usuCreador`),
  ADD KEY `usuModificador` (`usuModificador`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folio` (`cliente`),
  ADD KEY `usuModificador` (`usuModificador`),
  ADD KEY `caja` (`caja`),
  ADD KEY `usuCreador` (`usuCreador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `detalle_compras`
--
ALTER TABLE `detalle_compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `familias`
--
ALTER TABLE `familias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD CONSTRAINT `cajas_ibfk_1` FOREIGN KEY (`usuCreador`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cajas_ibfk_2` FOREIGN KEY (`usuModificador`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `clases_ibfk_1` FOREIGN KEY (`usuCreador`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `clases_ibfk_2` FOREIGN KEY (`usuModificador`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`usuCreador`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`usuModificador`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `detalle_compras`
--
ALTER TABLE `detalle_compras`
  ADD CONSTRAINT `detalle_compras_ibfk_1` FOREIGN KEY (`folio_compra`) REFERENCES `compras` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detalle_compras_ibfk_2` FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detalle_compras_ibfk_3` FOREIGN KEY (`usuCreador`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detalle_compras_ibfk_4` FOREIGN KEY (`usuModificador`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD CONSTRAINT `detalle_ventas_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_ventas_ibfk_2` FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_ventas_ibfk_3` FOREIGN KEY (`usuCreador`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detalle_ventas_ibfk_4` FOREIGN KEY (`usuModificador`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `familias`
--
ALTER TABLE `familias`
  ADD CONSTRAINT `familias_ibfk_1` FOREIGN KEY (`id_clase`) REFERENCES `clases` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `familias_ibfk_2` FOREIGN KEY (`usuCreador`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `familias_ibfk_3` FOREIGN KEY (`usuModificador`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_4` FOREIGN KEY (`id_familia`) REFERENCES `familias` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_5` FOREIGN KEY (`usuCreador`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_ibfk_6` FOREIGN KEY (`usuModificador`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`usuCreador`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `proveedores_ibfk_2` FOREIGN KEY (`usuModificador`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`caja`) REFERENCES `cajas` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_3` FOREIGN KEY (`usuCreador`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_4` FOREIGN KEY (`usuModificador`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
