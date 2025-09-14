-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2022 a las 17:40:26
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_hoodies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES
(1, 'hoodies'),
(2, 'con cierre'),
(3, 'basicos'),
(4, 'sweaters');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `precio` int(11) NOT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `imagen`, `precio`, `tipo`, `id_categoria`) VALUES
(75, 'Against War', 'images/products/634b5b1bbd01f.jpg', 8990, 'hombre', 1),
(76, 'Floral', 'images/products/634b61f61f0df.jpg', 6400, 'mujer', 1),
(78, 'BTS Hoodie 2.0 World Tour', 'images/products/634c2d0554bc0.jpg', 8400, 'hombre', 1),
(79, 'Elephant Hoodie', 'images/products/634c2d507dc80.jpg', 8500, 'hombre', 1),
(80, 'Camperita train rosa mujer mod', 'images/products/634cb901da9c3.jpg', 4700, 'mujer', 2),
(81, 'Buzo prada moda otoño', 'images/products/634cb950c9491.jpg', 5400, 'mujer', 3),
(82, 'Hoodie smile mostaza', 'images/products/634cb983d3b7e.jpg', 6600, 'mujer', 1),
(83, 'Buso basic \"New kaider\" ', 'images/products/634cb9cb3ef2f.jpg', 7500, 'hombre', 3),
(84, 'Hoodie \"OEE WHITE\" ', 'images/products/634cba89eb492.jpg', 8900, 'hombre', 1),
(85, 'Sweater parche invierno hombre', 'images/products/634cbaeacc4cb.jpg', 6300, 'hombre', 4),
(86, 'Sweater vest solid green', 'images/products/634cbc5c3c86a.jpg', 5500, 'mujer', 4),
(87, 'Buzo Mono Wetty camperita homb', 'images/products/634cbd8ad27d2.jpg', 6000, 'hombre', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contraseña`) VALUES
(6, 'loshefreeman', '$2y$10$uSC5udo79gY9u7yEhAVrxO9iXEGzW2mnEEZcKr8CMrorpd90qjZSK'),
(7, 'Facupancani', '$2y$10$pqXwo311siQ9VqmHJOn1M.wTYH5pTo5j8YztKvzjp0b1HFbYKKoYa'),
(8, 'Admin', '$2y$10$rL0v7njdRjqnNCvsIzTaGuflrRCNPl/4dXsdE16gCTe6Ke5zJf.6u'),
(11, 'agus', '$2y$10$hUd2f1a56Xaesx8nJjQw3.GeggNJM5JaAKyuKLe4NfFIx2pJ4RTkC'),
(12, 'Luchi', '$2y$10$lCUlJ3apwYb2EBp6c1bF4.FKlNWfKHYOIys8yUd/WBsnv..uA22F.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
