-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2022 a las 03:06:07
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarioex`
--

CREATE TABLE `inventarioex` (
  `Id` int(11) NOT NULL,
  `Producto` varchar(55) NOT NULL,
  `Cantidad` varchar(55) NOT NULL,
  `Precio` varchar(55) NOT NULL,
  `Lote` varchar(55) NOT NULL,
  `imagen` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventarioex`
--

INSERT INTO `inventarioex` (`Id`, `Producto`, `Cantidad`, `Precio`, `Lote`, `imagen`) VALUES
(1, 'Almojabanas', '10 unidades por paquete', '$ 8.000', '134589', 'images/almojabanas.png'),
(2, 'Arepas Boyacense', '10 unidades por paquete', '$ 7.500', '478369', 'images/arepa.png'),
(3, 'Pan De Bono', '8 unidades por paquete', '$ 5.500', '483105', 'images/bono.png'),
(4, 'Envuelto de Mazorca', '12 unidades por paquete', '$16.000', '2298302', 'images/envuelto.png'),
(5, 'Chicharron de Cuajada', '15 unidades por paquete', '$ 10.500', '834903', 'images/chicharron.png'),
(6, 'Garullas', '8 unidades por paquete', '$ 8.000', '198934', 'images/garulla.png'),
(7, 'Pan De Yuca', '10 unidades por paquete', '$ 8.500', '298743', 'images/pand.png'),
(8, 'Queso Tipo Paipa', '1 unidad por paquete', '$ 8.000', '2298302', 'images/Queso.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarioint`
--

CREATE TABLE `inventarioint` (
  `Id` int(11) NOT NULL,
  `NombreInt` varchar(55) NOT NULL,
  `CantidadInt` varchar(55) NOT NULL,
  `LoteInt` varchar(55) NOT NULL,
  `imagen` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventarioint`
--

INSERT INTO `inventarioint` (`Id`, `NombreInt`, `CantidadInt`, `LoteInt`, `imagen`) VALUES
(1, 'Harina De Trigo', '12 bultos', '23424', 'images/HARINA.png'),
(2, 'Harina de Maiz', '10 bultos', '439205', 'images/maiz.png'),
(3, 'Azucar', '5 bultos', '1789', 'images/azucar.png'),
(4, 'Mantequilla', '8 cajas', '19867', 'images/mante.png'),
(5, 'Sal', '8 bultos', '5634', 'images/sal.png'),
(6, 'Ingrediente Secreto', 'Indefinido', '???????', 'images/Po.jpg'),
(7, 'Promasa', '5 bultos', '84796', 'images/promasa.png'),
(8, 'Almidon de Yuca', '4 bultos', '54326', 'images/almidon.png'),
(9, 'Mazorcas', '5 bultos', '09867', 'images/mazorca.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion`
--

CREATE TABLE `suscripcion` (
  `Id` int(11) NOT NULL,
  `email` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `suscripcion`
--

INSERT INTO `suscripcion` (`Id`, `email`) VALUES
(1, 'kyo@gmail.com'),
(2, 'noseweylsrm@gmail.com'),
(4, 'sebasrmbt13@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(15) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 NOT NULL,
  `role` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', 'arepas123', 'admin'),
(2, 'Perdo', 'pd@gmail.com', '12345', 'personal'),
(3, 'Salazar', 'Sz@gmail.com', '123456', 'personal'),
(4, 'Maria', 'Mr@gmail.com', '1234567', 'personal'),
(5, 'Carlos', 'Cl@gmail.com', '1234568', 'personal'),
(6, 'Juan', 'Jn@gmail.com', '1234569', 'personal'),
(7, 'Peppa', 'Pp@gmail.com', '1234561', 'personal'),
(8, 'Alfonso', 'Af@gmail.com', '1234562', 'personal'),
(9, 'Yisus', 'Ys@gmail.com', '1234563', 'personal'),
(10, 'Diego', 'Dg@gmail.com', '1234564', 'personal'),
(11, 'Quintana', 'Qt@gmail.com', '1234565', 'personal'),
(12, 'Nelson', 'Nl@gmail.com', '1234566', 'personal'),
(13, 'yherys', 'noseweylsrm@gmail.com', 'HwnctaPldEAg', 'personal'),
(14, 'franco', 'Sz@gmail.com', 'HwnctaPldEAgNek=', 'personal'),
(15, 'sebas', 'noseweylsrm@gmail.com', 'GA7Wuafh', 'presonal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventarioex`
--
ALTER TABLE `inventarioex`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `inventarioint`
--
ALTER TABLE `inventarioint`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventarioex`
--
ALTER TABLE `inventarioex`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `inventarioint`
--
ALTER TABLE `inventarioint`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
