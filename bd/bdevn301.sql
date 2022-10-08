-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-09-2022 a las 02:23:21
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdevn301`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `modelo` varchar(15) NOT NULL,
  `nombre` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `precio` decimal(10,2) UNSIGNED NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estatus` tinyint(1) UNSIGNED NOT NULL,
  PRIMARY KEY (`modelo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`modelo`, `nombre`, `descripcion`, `precio`, `stock`, `foto`, `estatus`) VALUES
('t-001', 'Libro CorazÃ³n Indio', 'ConocÃ­ al verdadero protagonista de esta historia el mismo dÃ­a en que su corazÃ³n dejÃ³ de latir. Apenas lo vi, supe que su vida y la mÃ­a cambiarÃ­an para siempre. Tras someterse a un trasplante de corazÃ³n, Lucas, un atractivo joven, empieza a tener extraordinarias sensaciones e impactantes recuerdos que sabe que no se corresponden con su pasado, con el mundo que habÃ­a conocido hasta entonces.', '580.90', 15, 'vista/catalogo/productoscorazon-indio.png', 1),
('t-002', 'Marina', 'Â«Quince aÃ±os mÃ¡s tarde, la memoria de aquel dÃ­a ha vuelto a mÃ­. He visto a aquel muchacho vagando entre las brumas de la estaciÃ³n de Francia y el nombre de Marina se ha encendido de nuevo como una herida fresca. Todos tenemos un secreto encerrado bajo llave en el Ã¡tico del alma. Ã‰ste es el mÃ­o.Â»', '368.00', 20, 'vista/catalogo/productosmarina.jpg', 1),
('t-003', 'MOUSE INALÃMBRICO', 'Mouse InalÃ¡mbrico / ConexiÃ³n inalÃ¡mbrica de 2.4 GHz / Receptor USB/Sensor Ã³ptico / 3 botones (click izquierdo/derecho, rueda scroll)  / OperaciÃ³n con 1 baterÃ­a â€œAAâ€, no incluida', '199.50', 5, 'vista/catalogo/mouse.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `correo` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(64) NOT NULL,
  `foto` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `perfil` tinyint(1) UNSIGNED NOT NULL,
  `estatus` tinyint(1) UNSIGNED NOT NULL,
  PRIMARY KEY (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`correo`, `nombre`, `contrasena`, `foto`, `perfil`, `estatus`) VALUES
('admin@a.a', 'admin', '998ed4d621742d0c2d85ed84173db569afa194d4597686cae947324aa58ab4bb', 'vista/catalogo/clientes/admon.png', 1, 1),
('aha@a.a', 'aha', '4381de00c6050155d69ba4cd9dcf810eee3e2a07d8acc1ac369185bf3e8f1c97', 'vista/catalogo/clientes/m.png', 2, 1),
('andy@po.com', 'Andrea', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'vista/catalogo/clientesu1.png', 1, 2),
('angy@po.com', 'Angela', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'vista/catalogo/clientesu3.png', 2, 2),
('claudio@po.com', 'Claudio', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'vista/catalogo/clientes', 2, 2),
('eliza@po.com', 'Elizabeth', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'vista/catalogo/clientesu1.png', 1, 1),
('elvia@po.com', 'Elvia', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'vista/catalogo/clientesu3.png', 1, 2),
('elvira@po.com', 'Elvira', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'vista/catalogo/clientesu3.png', 1, 1),
('erne@po.com', 'Ernesto', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'vista/catalogo/clientesu2.png', 1, 2),
('gela@po.com', 'Angeles', '123', 'vista/catalogo/clientesu1.png', 2, 2),
('josh@po.com', 'Jorge', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'vista/catalogo/clientesu4.png', 1, 2),
('mario@po.co', 'Mario', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'vista/catalogo/clientesu2.png', 1, 1),
('mina@po.com', 'Erminia', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'vista/catalogo/clientesu1.png', 2, 2),
('nacho@po.com', 'Ignacio', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'vista/catalogo/clientesu4.png', 1, 2),
('pedro@po.com', 'Pedro', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'vista/catalogo/clientesu2.png', 2, 2),
('tina@po.coom', 'Martha', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'vista/catalogo/clientesu3.png', 2, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
