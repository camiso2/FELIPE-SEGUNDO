-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2020 a las 22:10:25
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ganafs`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_12_17_020130_create_participants_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participants`
--

CREATE TABLE `participants` (
  `id` int(10) UNSIGNED NOT NULL,
  `nacimiento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supermercado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recibo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fper` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `participants`
--

INSERT INTO `participants` (`id`, `nacimiento`, `nombres`, `apellidos`, `supermercado`, `recibo`, `fper`, `state`, `created_at`, `updated_at`) VALUES
(1, '12/03/2020', 'dsdsd', 'dssd', 'cc', '32', 'C:\\xampp\\tmp\\php819D.tmp', '1', '2020-12-17 09:16:42', '2020-12-17 18:35:44'),
(2, '2020-02-12', 'hgfh', 'gf', 'cc', '32233', 'C:\\xampp\\tmp\\php8185.tmp', '1', '2020-12-17 09:18:53', '2020-12-17 18:35:48'),
(3, '2030-01-03', 'fgfggf', 'ggff', 'cc', '333223', 'C:\\xampp\\tmp\\php73E7.tmp', '1', '2020-12-17 14:46:30', '2020-12-17 18:35:53'),
(10, '2020-15-12', 'dfd', 'fdf', 'cc', '455', 'wndow7xnhs20201217103557309785-33697709114040-2o4oc2zwsx.jpg', NULL, '2020-12-17 15:35:57', '2020-12-17 15:35:57'),
(11, '2020-08-12', 'sad', 'dsd', 'cc', '2332', '73exqupag420201217105818623936-85785300288153-zow29fodev.jpg', NULL, '2020-12-17 15:58:18', '2020-12-17 15:58:18'),
(12, '2020-08-12', 'vbvb', 'vbv', 'cc', '344', '5pbbsixmg720201217110913071497-74265328646804-h88r59u6jg.jpg', NULL, '2020-12-17 16:09:13', '2020-12-17 16:09:13'),
(13, '2020-02-12', 'vbvb', 'bvbv', 'cc', '332', 'lkebltt08d20201217111043101453-82808550077080-7qhq5ozboj.jpg', '1', '2020-12-17 16:10:43', '2020-12-17 18:35:17'),
(14, '2020-02-12', 'ds', 'dsd', 'cc', '34', '0surckroj020201217112253180304-98977809300555-qgykxotx87.jpg', '1', '2020-12-17 16:22:53', '2020-12-17 18:34:56'),
(15, '2020-03-12', 'fd', 'fd', 'cc', '65', '4qo139t8f520201217112502526715-57010024713158-udddzkzp04.jpg', '1', '2020-12-17 16:25:02', '2020-12-17 18:33:48'),
(16, '2020-02-12', 'fg', 'fg', 'cc', '3434', '5vcsqq630420201217112651125221-38103360513438-bsb9tlqh00.jpg', '1', '2020-12-17 16:26:51', '2020-12-17 18:32:43'),
(17, '2020-01-12', 'cs', 'sd', 'cc', '34343434', 'mgbixwekfp20201217112729974510-44279160301371-ev79vhhw08.jpg', '1', '2020-12-17 16:27:30', '2020-12-17 18:30:42'),
(18, '2020-07-12', 'jaiover andres', 'Ocampo Ovideo', 'cc', '465665465', '9dojp1o82x20201217140455065538-61525172307322-3x3evkshnn.jpg', NULL, '2020-12-17 19:04:55', '2020-12-17 19:04:55'),
(19, '2020-16-12', 'marcela', 'Vejarano', 'ti', '54545465', 'zlkpyxchq720201217140627399726-83892481921263-qgxma4fiz1.jpg', NULL, '2020-12-17 19:06:27', '2020-12-17 19:06:27');

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
(1, 'Emilio Perez', 'camiso2@gmail.com', '$2y$10$ihotQfd04HEoXeO8XJdt2.yfwYoEaA5iC5vSw./EVaI515Yz1etMC', 'Ylq17pM0c1edunUzc5LnUNN76OhjLAQmjlCnfSSFww7cDEbQuUmPu8GZ14rA', '2020-12-17 07:23:53', '2020-12-17 20:49:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
