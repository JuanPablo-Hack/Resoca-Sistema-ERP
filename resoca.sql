-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2022 a las 03:55:14
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `resoca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acuses`
--

CREATE TABLE `acuses` (
  `id` int(11) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `encargado` varchar(50) NOT NULL,
  `puesto` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `manifiesto` varchar(10) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acuses`
--

INSERT INTO `acuses` (`id`, `cliente`, `encargado`, `puesto`, `descripcion`, `manifiesto`, `estado`, `creado`) VALUES
(7, '3', 'Juan Perez', 'blabla', 'jeje', 'FASBAIDSB', 'Activo', '2020-11-09 19:58:32'),
(6, '1', 'Juan Perez', 'blabla', 'jeje', 'FASBAIDSB', 'Activo', '2020-11-09 19:56:44'),
(8, '6', 'Rosa Yareli Martínez León', 'Director General ', 'aaaaaaa', '2011', 'Activo', '2020-11-14 20:51:18'),
(9, '7', 'Juan Pablo', 'Director de Sistemas', 'Balalalalaalalala', 'Balalalala', 'Activo', '2021-06-08 15:33:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `contra` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `user`, `contra`) VALUES
(1, 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id`, `nombre`) VALUES
(1, 'Carton'),
(2, 'Pet'),
(3, 'Plástico'),
(4, 'Metales no ferrosos'),
(5, 'Metales ferrosos'),
(6, 'Madera'),
(7, 'Vidrio'),
(8, 'Archivo muerto'),
(9, 'Residuos de Alimento'),
(10, 'Residuos de Llantas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `nra` varchar(15) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `area` varchar(30) DEFAULT NULL,
  `fecha_corte` varchar(20) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `dir` varchar(150) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL,
  `nombre_representante` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `tel_representante` varchar(10) NOT NULL,
  `email_representante` varchar(100) NOT NULL,
  `user` varchar(40) NOT NULL,
  `pwd` varchar(150) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `nra`, `telefono`, `email`, `area`, `fecha_corte`, `rfc`, `dir`, `cp`, `nombre_representante`, `cargo`, `tel_representante`, `email_representante`, `user`, `pwd`, `creado`) VALUES
(7, 'CONDOMINIO VIDA DEL MAR', 'ACV800308AL9', '3143350660', 'contable.vdm@gmail.com; vidadelmar@gmail.com', '', '01-01-2014', 'ACV800308AL9', 'Cerro del Cenicero S/N.  Col. Península de Juluapan.', '28860', '', '', '', '', 'VDM.RESOCA', '6e3693c79e8754e472ff402607a126d38654053c', '2020-11-20 15:21:13'),
(8, 'TRANSPORTES AGUILERA', 'AUFC751112MB8', '3143571108', 'pagos@transportesaguilera.com', '', '01-01-2014', 'AUFC751112MB8', 'Tapeixtles No. 28  Manzanillo, Colima. ', '28239', '', '', '', '', 'TAGUILERA.RESOCA', 'd36c60b91bec9032a1b173d76edfc8cd57d2c171', '2020-11-20 15:26:20'),
(10, 'SQM COMERCIAL DE MEXICO', 'SCM0012123D6', '3143364772', 'omar.hernadez@sqm.com; alejandro.campos@sqm.com', '', '01-01-2014', 'SCM0012123D6', 'Carretera Colima-Cihuatlán #101 Col. Tapeixtles  Manzanillo, Colima.  ', '28239', '', '', '', '', 'SQM.RESOCA', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-11-20 15:34:14'),
(11, 'SGS DE MEXICO', 'SME900524FC2', '3143368411', 'ana.quintero@sgs.com', '', '01-01-2014', 'SME900524FC2', 'Avenida Ballena S/N Ave.  Tapeixtles y Miguel  Cárdenas. Parque Industrial Tapeixtles. Col. Océano Manzanillo, Colima.  ', '28239', '', '', '', '', 'SGS.RESOCA', 'ebfc93f16f5e9192511fce9b137ffaab581fbdec', '2020-11-20 15:38:45'),
(12, 'SISTEMAS INTEGRALES DE SERVICIOS DE COMEDOR', 'SIS061004V52', '3141245317', 'rhcolima@sisc-comedores.com; administracion@sisc-comedores.com; cuentas@sisc-comedores.com; operacio', 'Comedor Impala Terminal', '01-01-2014', 'SIS061004V52', 'Carretera Manzanillo-Minatitlán Km. 1.5', '23549', '', '', '', '', 'SISCIMPALA.RESOCA', '5ebd28a7d14d168b5a2aecc5ad303808ca4fcd3a', '2020-11-20 15:49:06'),
(13, 'SISTEMAS INTEGRALES DE SERVICIOS DE COMEDOR', 'SIS061004V52', '3121004430', '', 'Comedor Peña Colorada, Minatit', '01-01-2014', '', 'Domicilio conocido, Mina Peña Colorada, Minatitlán, Colima', '28750', '', '', '', '', 'SISCMINATITLAN.RESOCA', '2353cea236078b76900dcc428681656b33c23bce', '2020-11-20 15:52:24'),
(14, 'SISTEMAS INTEGRALES DE SERVICIOS DE COMEDOR', 'SIS061004V52', '', '546456456456456456', 'Comedor Peña Colorada, Planta ', '01-01-2014', '4564564565645', 'Avenida del Trabajo N° 1000, col Tapeixtles  Manzanillo, Colima', '28239', '', '', '', '', 'SISCPELETIZADO.RESOCA', '8454cec2341fab55b98bf37f63cb0eaa0b0e94a5', '2020-11-20 15:58:11'),
(16, 'CAPDAM', '65498464', '3141468967', 'sistemas@capdam.gob.mx', 'Sistemas', '16-02-2022', 'FIJJ990225473', 'Xavier Villarrutia 511', '28869', 'JUAN PABLO DE JESUS FIGUEROA JARAMILLO', 'JEFE DE SISTEMAS', '3141468967', 'juanpablo@sistemas.gob.mx', 'capdam', '9adcb29710e807607b683f62e555c22dc5659713', '2020-12-01 16:41:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `confimarcion`
--

CREATE TABLE `confimarcion` (
  `id` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cargo` varchar(13) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `foto1` varchar(150) NOT NULL,
  `foto2` varchar(150) NOT NULL,
  `foto3` varchar(150) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `confimarcion`
--

INSERT INTO `confimarcion` (`id`, `id_orden`, `nombre`, `cargo`, `ruta`, `foto`, `foto1`, `foto2`, `foto3`, `creado`) VALUES
(2, 102, 'Vigilante 1', 'Guardia 1', 'imagen_6222da6916c14.png', '', '', '', '', '2022-03-05 03:35:05'),
(3, 102, 'Vigilante 1', 'Guardia 1', 'imagen_624d0da4364b1.png', '', '', '', '', '2022-04-06 03:48:52'),
(4, 145, 'guardia ', 'caseta entrad', 'imagen_625f7a47109a6.png', '', '', '', '', '2022-04-20 03:13:11'),
(5, 145, 'guardia ', 'caseta entrad', 'imagen_625f7e5fa0617.png', '', '', '', '', '2022-04-20 03:30:39'),
(6, 188, 'Edgar Cerecer', 'Gerente', 'imagen_6262f379335fe.png', '', '', '', '', '2022-04-22 18:27:05'),
(7, 189, 'Bernardino vargas', 'Guardia caset', 'imagen_626333ceb5799.png', '', '', '', '', '2022-04-22 23:01:34'),
(8, 188, 'Alfonso estrada bello', 'Seguridad ent', 'imagen_62634fe500193.png', '', '', '', '', '2022-04-23 01:01:25'),
(9, 190, 'Bernardino vargas', 'Guardia caset', 'imagen_6264c53f0172e.png', '', '', '', '', '2022-04-24 03:34:23'),
(10, 145, 'bernardino vargas', 'caseta entrad', 'imagen_6264c6b690a26.png', '', '', '', '', '2022-04-24 03:40:38'),
(11, 146, 'bernardino vargas', 'caseta entrad', 'imagen_6264c7ee19688.png', '', '', '', '', '2022-04-24 03:45:50'),
(12, 191, 'Eduardo de la Paz', 'Guardia 1', 'imagen_62673e85f0ce4.png', '', '', '', '', '2022-04-26 00:36:21'),
(13, 192, 'Bernabé carvallo ', 'Guardia 1', 'imagen_6268721c4d97e.png', '', '', '', '', '2022-04-26 22:28:44'),
(14, 146, 'Bernardino vargas', 'Guardia 1', 'imagen_626b31d31ef95.png', '', '', '', '', '2022-04-29 00:31:15'),
(15, 149, 'Bernardino vargas', 'Guardia 1', 'imagen_626b32413f53c.png', '', '', '', '', '2022-04-29 00:33:05'),
(16, 149, 'bernardino vargas', ' guardia case', 'imagen_626b38050cfa6.png', '', '', '', '', '2022-04-29 00:57:41'),
(17, 150, 'Bernardino vargas', 'Guardia 1', 'imagen_626b389e9f411.png', '', '', '', '', '2022-04-29 01:00:14'),
(18, 151, 'Bernardino vargas', 'Guardia 1', 'imagen_626b39cf50ab2.png', '', '', '', '', '2022-04-29 01:05:19'),
(19, 177, 'Bernardino vargas', 'Guardia 1', 'imagen_626b3aea242f8.png', '', '', '', '', '2022-04-29 01:10:02'),
(20, 154, 'Bernardino vargas', 'Guardia 1', 'imagen_626b3c0147430.png', '', '', '', '', '2022-04-29 01:14:41'),
(21, 155, 'Bernardino vargas', 'Guardia 1', 'imagen_626b3cee192d0.png', '', '', '', '', '2022-04-29 01:18:38'),
(22, 158, 'Bernabé carvallo ', 'Guardia 1', 'imagen_626b5d3fd212d.png', '', '', '', '', '2022-04-29 03:36:31'),
(23, 159, 'Bernardino vargas', 'Guardia 1', 'imagen_626b5f03dd58a.png', '', '', '', '', '2022-04-29 03:44:03'),
(24, 160, 'Bernardino vargas', 'Guardia 1', 'imagen_626b61d2092a8.png', '', '', '', '', '2022-04-29 03:56:02'),
(25, 158, 'bernardino vargas', 'caseta entrad', 'imagen_626dd902df04a.png', '', '', '', '', '2022-05-01 00:49:06'),
(26, 162, 'Bernardino vargas', 'Guardia 1', 'imagen_626dd9db60db5.png', '', '', '', '', '2022-05-01 00:52:43'),
(27, 163, 'Bernardino vargas', 'Guardia 1', 'imagen_626ddb47c1c5d.png', '', '', '', '', '2022-05-01 00:58:47'),
(28, 164, 'Bernardino vargas', 'Guardia 1', 'imagen_626ddbea9557e.png', '', '', '', '', '2022-05-01 01:01:30'),
(29, 165, 'Bernabé carvallo ', 'Guardia 1', 'imagen_626ddc9a1e7b7.png', '', '', '', '', '2022-05-01 01:04:26'),
(30, 166, 'Bernabé carvallo ', 'Guardia 1', 'imagen_626ddd18981ad.png', '', '', '', '', '2022-05-01 01:06:32'),
(31, 167, 'Bernardino vargas', 'Guardia 1', 'imagen_626ddda7eaa74.png', '', '', '', '', '2022-05-01 01:08:55'),
(32, 168, 'Bernardino vargas', 'Guardia 1', 'imagen_626dde6412fea.png', '', '', '', '', '2022-05-01 01:12:04'),
(33, 194, 'Bernabé carvallo ', 'Guardia 1', 'imagen_626deb0dc968a.png', '', '', '', '', '2022-05-01 02:06:05'),
(34, 197, 'Bernabé carvallo ', 'Guardia 1', 'imagen_626debc4215d2.png', '', '', '', '', '2022-05-01 02:09:08'),
(35, 195, 'Bernardino vargas', 'Guardia 1', 'imagen_626dece24981b.png', '', '', '', '', '2022-05-01 02:13:54'),
(36, 196, 'Bernabé carvallo ', 'Guardia 1', 'imagen_626dedd319c8d.png', '', '', '', '', '2022-05-01 02:17:55'),
(37, 170, 'Bernardino vargas', 'Guardia 1', 'imagen_626df0e949cca.png', '', '', '', '', '2022-05-01 02:31:05'),
(38, 171, 'Bernardino vargas', 'Guardia 1', 'imagen_626df1d2f0dd8.png', '', '', '', '', '2022-05-01 02:34:58'),
(39, 173, 'Bernabé carvallo ', 'Guardia 1', 'imagen_626df36765212.png', '', '', '', '', '2022-05-01 02:41:43'),
(40, 173, 'Bernardino vargas', 'Guardia 1', 'imagen_626df43ecf723.png', '', '', '', '', '2022-05-01 02:45:18'),
(41, 174, 'Bernabé carvallo 6', 'Guardia 1', 'imagen_626df50949368.png', '', '', '', '', '2022-05-01 02:48:41'),
(42, 175, 'Bernardino vargas', 'Guardia 1', 'imagen_626df60913fd7.png', '', '', '', '', '2022-05-01 02:52:57'),
(43, 177, 'Bernabé carvallo ', 'Guardia 1', 'imagen_626eb6ef9a5d3.png', '', '', '', '', '2022-05-01 16:35:59'),
(44, 178, 'Bernardino vargas', 'Guardia 1', 'imagen_626eb7912d64c.png', '', '', '', '', '2022-05-01 16:38:41'),
(45, 179, 'Bernabé carvallo ', 'Guardia 1', 'imagen_626eb839b16de.png', '', '', '', '', '2022-05-01 16:41:29'),
(46, 181, 'Bernardino vargas', 'Guardia 1', 'imagen_626eb9f332c49.png', '', '', '', '', '2022-05-01 16:48:51'),
(47, 182, 'Bernabé carvallo ', 'Guardia 1', 'imagen_626eba9dea0dd.png', '', '', '', '', '2022-05-01 16:51:41'),
(48, 183, 'Bernardino vargas', 'Guardia 1', 'imagen_626ebb44eb754.png', '', '', '', '', '2022-05-01 16:54:28'),
(49, 184, 'Bernabé carvallo ', 'Guardia 1', 'imagen_626ebcac3a00a.png', '', '', '', '', '2022-05-01 17:00:28'),
(50, 185, 'Bernabé carvallo ', 'Guardia 1', 'imagen_626ec025246a2.png', '', '', '', '', '2022-05-01 17:15:17'),
(51, 176, 'Bernabé carvallo ', 'Guardia 1', 'imagen_626ec68280379.png', '', '', '', '', '2022-05-01 17:42:26'),
(52, 152, 'Bernardino vargas', 'Guardia 1', 'imagen_626ec7b41a7af.png', '', '', '', '', '2022-05-01 17:47:32'),
(53, 153, 'Dayday Estrada', 'Guardia 1', 'imagen_627455533940a.png', '', '', '', '', '2022-05-05 22:53:07'),
(54, 156, 'José Manuel andrade', 'Guardia 1', 'imagen_6276d8bd1194a.png', '', '', '', '', '2022-05-07 20:38:21'),
(55, 149, 'Bernardino vargas', 'Guardia 1', 'imagen_627abe303b8fd.png', '', '', '', '', '2022-05-10 19:34:08'),
(56, 151, 'Bernabé carvallo ', 'Guardia 1', 'imagen_627abf2ccde15.png', '', '', '', '', '2022-05-10 19:38:20'),
(57, 152, 'Bernardino vargas', 'Guardia 1', 'imagen_627ac00d15233.png', '', '', '', '', '2022-05-10 19:42:05'),
(58, 154, 'Bernabé carvallo ', 'Guardia 1', 'imagen_627ac2657e24d.png', '', '', '', '', '2022-05-10 19:52:05'),
(59, 155, 'Bernabé carvallo ', 'Guardia 1', 'imagen_627ac32a5278f.png', '', '', '', '', '2022-05-10 19:55:22'),
(60, 165, 'Bernabé carvallo ', 'Guardia 1', 'imagen_627acc934086a.png', '', '', '', '', '2022-05-10 20:35:31'),
(61, 100, 'Juan Pablo de Jesus', 'DIRECTOR DE S', 'imagen_627ace2294be9.png', '', '', '', '', '2022-05-10 20:42:10'),
(62, 100, 'Juan Pablo de Jesus', 'JEFE DE SISTE', 'imagen_627acee3d0f00.png', '', '', '', '', '2022-05-10 20:45:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cortes`
--

CREATE TABLE `cortes` (
  `id` int(11) NOT NULL,
  `folio` varchar(5) NOT NULL,
  `ticket` varchar(5) NOT NULL,
  `porcentaje` varchar(3) NOT NULL,
  `kg` varchar(5) NOT NULL,
  `cantidad` varchar(5) NOT NULL,
  `unidad` varchar(5) NOT NULL,
  `descripcion` varchar(5) NOT NULL,
  `precio` varchar(5) NOT NULL,
  `importe` varchar(5) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cortes`
--

INSERT INTO `cortes` (`id`, `folio`, `ticket`, `porcentaje`, `kg`, `cantidad`, `unidad`, `descripcion`, `precio`, `importe`, `creado`) VALUES
(1, 'dsfq', 'ads', '70', '500', '12', 'kg', '1', '1500', '4500', '2020-10-15 16:19:38'),
(3, 'dsfq', 'ads', '70', '500', '20', 'asd', 'asd', '1500', '30000', '2020-11-09 19:21:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencias`
--

CREATE TABLE `evidencias` (
  `id` int(11) NOT NULL,
  `folio` int(11) NOT NULL,
  `ticket` varchar(15) NOT NULL,
  `num_conceptos` int(11) NOT NULL,
  `arreglo` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `comentarios` varchar(150) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evidencias`
--

INSERT INTO `evidencias` (`id`, `folio`, `ticket`, `num_conceptos`, `arreglo`, `foto`, `comentarios`, `creado`) VALUES
(2, 186, '48622', 0, '', '16506001420877385832694331810235.jpg', 'Ticket del 20 y 19 de abril', '2022-04-22 04:03:37'),
(4, 187, '48714', 0, '', '16507135068474597542877154772827.jpg', 'Recoleccion del jueves 21', '2022-04-23 11:32:55'),
(5, 188, '48778', 0, '', '16507708473913777010135872731655.jpg', 'Recoleccion del día 22 de abril', '2022-04-24 03:28:29'),
(6, 190, '48807', 0, '', '16507710400643489750769194491616.jpg', 'Recoleccion del día 23', '2022-04-24 03:31:22'),
(8, 145, '45037', 0, '', 'ticket del 02-03.jpeg', 'recoleccion del dia 01 y 02 de marzo', '2022-04-24 03:42:20'),
(9, 146, '45085', 0, '', '20220419_221526.jpg', 'Recoleccion del día 3', '2022-04-24 03:48:56'),
(10, 147, '45135', 0, '', '20220419_221537.jpg', 'Recoleccion del día 4', '2022-04-24 03:51:08'),
(11, 191, '48985', 0, '', '16510000037953153776771215622545.jpg', 'Recoleccion del día 25', '2022-04-26 19:08:04'),
(12, 192, '49055', 0, '', '16510844956752733077467383388293.jpg', 'Recoleccion del día 26 abril', '2022-04-27 18:35:21'),
(13, 148, '45256', 0, '', '16511925132925950387644787910145.jpg', 'Recoleccion del día 5 marzo', '2022-04-29 00:36:31'),
(15, 150, '45486', 0, '', '16511941836666433267943242277552.jpg', 'Recoleccion del día 7 y ticket 7 y8', '2022-04-29 01:04:10'),
(17, 154, '45644', 0, '', '1651194949582559671992471478008.jpg', 'Recoleccion del día 10 de marzo', '2022-04-29 01:17:06'),
(18, 155, '45940', 0, '', '16511951940705778807831820698651.jpg', 'Recoleccion de los días 14 y 15 de marzo', '2022-04-29 01:20:44'),
(19, 156, '45940', 0, '', '1651195558462546794037265348167.jpg', 'Recoleccion del día 15vy ticket del 14 y 15 de marzo', '2022-04-29 01:26:48'),
(20, 157, '45992', 0, '', '16511963077228548801687158771331.jpg', 'Recoleccion del día 16 marzo', '2022-04-29 01:39:16'),
(21, 168, '47122', 0, '', '1651367577756821526082756798864.jpg', 'Recoleccion del día 31 de marzo', '2022-05-01 01:13:45'),
(22, 167, '47110', 0, '', '16513677352276746823677373912941.jpg', 'Recoleccion del día 30 de marzo', '2022-05-01 01:16:25'),
(23, 165, '47034', 0, '', '16513679317847792221569939408152.jpg', 'Recoleccion del día 28n, ticket del 28 y 29nde marzo', '2022-05-01 01:19:39'),
(24, 166, '47034', 0, '', '1651368083946564066506239423754.jpg', 'Recoleccion del día 29 y ticket del día 28 y 29 de marzo', '2022-05-01 01:22:10'),
(25, 164, '46736', 0, '', '16513682425037692432358856333821.jpg', 'Recoleccion del día 26', '2022-05-01 01:24:54'),
(26, 163, '46699', 0, '', '16513683942325831686457327122198.jpg', 'Recoleccion del día 25 ticket del 26 de marzo', '2022-05-01 01:27:44'),
(27, 161, '46572', 0, '', '16513686536552654750747608940306.jpg', 'Recoleccion del.dia 23 y ticket del 23 y 24 de marzo', '2022-05-01 01:31:54'),
(28, 162, '46572', 0, '', '1651368820023642202808499824503.jpg', 'Recoleccion del día 24 y ticket del día  23 y 24 de marzo', '2022-05-01 01:34:24'),
(29, 194, '49328', 0, '', '16513708531373453255258551045687.jpg', 'Recoleccion del día 27 hockey del día 27 y 30 de abril', '2022-05-01 02:08:36'),
(30, 197, '49328', 0, '', '16513711191852213152636355630128.jpg', 'Recoleccion del 30  ticket del día 27 y 30 de abril', '2022-05-01 02:12:58'),
(31, 195, '49089', 0, '', '16513713037107922672587017253380.jpg', 'Recoleccion del día 28 de abril', '2022-05-01 02:16:19'),
(32, 196, '49309', 0, '', '16513715308941108094205386905461.jpg', 'Recoleccion del día 29 de abril', '2022-05-01 02:20:04'),
(33, 170, '47213', 0, '', '16513723733582119865138771727813.jpg', 'Recoleccion del 01 de abril', '2022-05-01 02:33:52'),
(34, 171, '47284', 0, '', '16513726336067481389101161708796.jpg', 'Recoleccion del.dia02 de abril', '2022-05-01 02:38:22'),
(35, 172, '47529', 0, '', '16513730137718072674373531747224.jpg', 'Recoleccion del día 4 ticket del día 4,5 y 6 de abril', '2022-05-01 02:44:24'),
(36, 173, '47529', 0, '', '16513732015285912232467452989652.jpg', 'Recoleccion del día 5 y ticket del día 4,5 y 6 de abril', '2022-05-01 02:47:55'),
(37, 174, '47529', 0, '', '16513734004661720119689233998284.jpg', 'Recoleccion del día 6 y ticket de 4,5 y 6 de abril', '2022-05-01 02:51:19'),
(38, 175, '47677', 0, '', '1651373648858561673322397660063.jpg', 'Recoleccion del día 7 y ticket del.dia 7 y 8 de abril', '2022-05-01 02:56:01'),
(39, 177, '47764', 0, '', '16514230223796075992002060726814.jpg', 'Recoleccion del día 9 de abril', '2022-05-01 16:38:04'),
(40, 178, '47844', 0, '', '16514231976284076109890990271932.jpg', 'Recoleccion del día 11 abril', '2022-05-01 16:40:50'),
(42, 179, '48029', 0, '', '16514236408936958701088082799606.jpg', 'Recoleccion del día 12 abril', '2022-05-01 16:48:15'),
(43, 181, '48198', 0, '', '16514238010158395282835991118404.jpg', 'Recoleccion del 14 y ticket del 14 y 15 de abril', '2022-05-01 16:51:10'),
(44, 182, '48198', 0, '', '16514239793423207696365465114182.jpg', 'Recoleccion del día 15 y ticket del 14 y 15 de abril', '2022-05-01 16:53:49'),
(45, 183, 'Sin numero', 0, '', '16514241447885404351115553997361.jpg', 'Recoleccion del día 16  no dieron ticket impreso solo sello', '2022-05-01 16:56:37'),
(46, 184, '48402', 0, '', '1651424548107724251173008210589.jpg', 'Recoleccion del día 18 de abril', '2022-05-01 17:03:18'),
(47, 185, '48622', 0, '', '16514254071929049903135711369504.jpg', 'Recoleccion del día 19  ticket del 19 y 20 de abril', '2022-05-01 17:17:53'),
(48, 176, '47677', 0, '', '16514270294671937804241365922870.jpg', 'Recoleccion del.dia 8 ticket del día 7 y 8 de abril', '2022-05-01 17:44:39'),
(49, 151, '45486', 0, '', '16514273370701437795345019306529.jpg', 'Recoleccion del 8 ticket del día 7 y 8 de marzo', '2022-05-01 17:49:50'),
(50, 149, '49709', 0, '', '16522113303127376528417496264069.jpg', 'Recoleccion del día 02 y ticket del 2,3 4 y 5 de Mayo', '2022-05-10 19:36:26'),
(51, 151, '49709', 0, '', '16522115790128415664517887374575.jpg', 'Recoleccion del día 4 y ticket del día 2,3 4 y 5 de mayo', '2022-05-10 19:40:34'),
(53, 154, '49949', 0, '', '16522123927622735610549511197457.jpg', 'Recoleccion del día 6 de mayo', '2022-05-10 19:54:40'),
(54, 100, '1565', 0, '', 'Black Orange Modern Limited Offer Work Out Instagr', 'Todo estuvo bien el proceso imades ya recibió la basura', '2022-05-10 20:04:52'),
(55, 100, 'RS-15489', 1, '1,150', '100 desc.jpg', 'Todo bien chavo', '2022-05-15 00:06:46'),
(56, 100, '1565', 1, '1,150', '100 desc.jpg', 'Todo bien', '2022-05-15 00:08:48'),
(57, 100, '1565', 1, '1,150', '100 desc.jpg', 'Todo bien Chaval', '2022-05-15 00:42:45'),
(58, 100, '1526', 1, '1,150', '100 desc.jpg', 'Todo bien chaval', '2022-05-15 00:44:19'),
(59, 109, 'RS-15489', 1, '1,150', '100 desc.jpg', 'SASasas', '2022-05-15 00:45:55'),
(60, 109, '1565', 1, 'Carton,150', '100 desc.jpg', 'Todo bien', '2022-05-15 00:47:57'),
(61, 109, '1565', 0, '', '', 'Todo bien caon', '2022-05-15 01:12:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manifiestos`
--

CREATE TABLE `manifiestos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `encargado` varchar(75) NOT NULL,
  `cargo` varchar(75) NOT NULL,
  `servicio` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(50) NOT NULL,
  `cantidad` varchar(4) NOT NULL,
  `unidad` varchar(15) NOT NULL,
  `concepto` varchar(40) NOT NULL,
  `manifiesto` varchar(15) NOT NULL,
  `factura` varchar(15) NOT NULL,
  `unidadasig` varchar(25) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `creado` date NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id`, `cliente`, `encargado`, `cargo`, `servicio`, `fecha`, `hora`, `cantidad`, `unidad`, `concepto`, `manifiesto`, `factura`, `unidadasig`, `estado`, `creado`) VALUES
(97, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '1550', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(98, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '400', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(99, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '435', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(100, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '1500', 'kg', 'Residuo Solido Urbano', 'MF-05897', 'FEGASDFASD', '4', 'Activo', '2022-04-20'),
(101, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(102, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(103, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '335', 'kilo', 'Residuo Solido Urbano', '', '', '0', 'Activo', '2022-04-20'),
(104, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '335', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(105, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '220', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(106, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '275', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(107, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '200', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(108, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '110', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(109, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '460', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(110, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '250', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(111, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '250', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(112, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '250', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(113, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '85', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(114, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '285', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(115, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '330', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(116, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '135', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(117, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '200', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(118, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '170', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(119, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '330', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(120, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '85', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(121, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '85', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-20'),
(122, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '160', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(123, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '260', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(124, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '100', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(125, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '100', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(126, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '80', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(127, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '140', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(128, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '140', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(129, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '115', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(130, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '100', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(131, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '250', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(132, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '175', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(133, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '175', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(134, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '115', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(135, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '310', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(136, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '120', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(137, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '120', 'kilo', 'Residuo Solido Urbano', '', '', '4', 'Activo', '2022-04-21'),
(138, 7, 'Nicolás Gomez', 'Administrador del condominio', 7, '0000-00-00', '', '330', 'Kilo', 'Recoleccion de residuos sólidos urbanos', '', '', '4', 'Activo', '2022-04-22'),
(139, 8, 'Edgar Cerecer', 'Gerente', 7, '0000-00-00', '', '', '', '', '', '', '4', 'Activo', '2022-04-22'),
(140, 7, 'Nicolás Gomez', 'Administrador del condominio', 7, '0000-00-00', '', '', '', '', '', '', '4', 'Activo', '2022-04-22'),
(141, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '', '', '', '', '', '4', 'Activo', '2022-04-23'),
(142, 7, 'Nicolás Gomez', 'Administrador del condominio', 7, '0000-00-00', '', '', '', '', '', '', '4', 'Activo', '2022-04-26'),
(143, 7, 'Nicolás Gomez', 'Administrador del condominio', 7, '0000-00-00', '', '', '', '', '', '', '4', 'Activo', '2022-04-26'),
(144, 8, 'Edgar Cerecer', 'Gerente', 7, '0000-00-00', '', '', '', '', '', '', '4', 'Activo', '2022-04-26'),
(145, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '', '', '', '', '', '4', 'Activo', '2022-04-27'),
(146, 7, 'Nicolas Gomez', 'Administrador del Condominio', 7, '0000-00-00', '', '', '', '', '', '', '4', 'Activo', '2022-04-27'),
(147, 7, 'Nicolás Gomez', 'Administrador del condominio', 7, '0000-00-00', '', '', '', '', '', '', '4', 'Activo', '2022-05-01'),
(148, 7, 'Nicolás Gomez', 'Administrador del condominio', 7, '0000-00-00', '', '', '', '', '', '', '4', 'Activo', '2022-05-01'),
(149, 7, 'Nicolás Gomez', 'Administrador del condominio', 7, '0000-00-00', '', '', '', '', '', '', '4', 'Activo', '2022-05-01'),
(150, 7, 'Nicolás Gomez', 'Administrador del condominio', 7, '0000-00-00', '', '', '', '', '', '', '4', 'Activo', '2022-05-01'),
(151, 7, 'Nicolás Gomez', 'Administrador del condominio', 7, '0000-00-00', '', '', '', '', '', '', '4', 'Activo', '2022-05-01'),
(152, 7, 'JAVIER SOLIS', 'DIRECTOR', 7, '0000-00-00', '16:00', '1500', 'kg', 'Carga de basura rapida', '', '', '3', 'Activo', '2022-05-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_combustible`
--

CREATE TABLE `registros_combustible` (
  `id` int(11) NOT NULL,
  `unidad` varchar(50) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `kminicial` varchar(25) NOT NULL,
  `kmfinal` varchar(25) NOT NULL,
  `tiposervicio` varchar(50) NOT NULL,
  `litros` varchar(3) NOT NULL,
  `rendimiento` varchar(20) NOT NULL,
  `factura` varchar(30) NOT NULL,
  `operador` varchar(50) NOT NULL,
  `importe` varchar(10) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registros_combustible`
--

INSERT INTO `registros_combustible` (`id`, `unidad`, `fecha`, `kminicial`, `kmfinal`, `tiposervicio`, `litros`, `rendimiento`, `factura`, `operador`, `importe`, `creado`) VALUES
(6, '1', '01-01-2020', '1500', '1650', 'asd', '450', '0.33333333333333', 'asdasdas', '1', '4500', '2020-11-28 16:22:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_mantenimiento`
--

CREATE TABLE `registros_mantenimiento` (
  `id` int(11) NOT NULL,
  `unidad` varchar(50) NOT NULL,
  `taller` varchar(50) NOT NULL,
  `nofactura` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `km` varchar(15) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registros_mantenimiento`
--

INSERT INTO `registros_mantenimiento` (`id`, `unidad`, `taller`, `nofactura`, `descripcion`, `fecha`, `km`, `creado`) VALUES
(4, '1', 'Taller el mochis', 'FGFAFSAE', 'Cambio de bujias', '07-12-2020', '50000', '2020-11-28 16:25:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `supervisor` varchar(50) NOT NULL,
  `operador` varchar(50) NOT NULL,
  `auxiliar` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `placas` varchar(10) NOT NULL,
  `destinofinal` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `material` varchar(150) NOT NULL,
  `equipo` varchar(150) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `tipo`, `descripcion`, `supervisor`, `operador`, `auxiliar`, `modelo`, `placas`, `destinofinal`, `ubicacion`, `material`, `equipo`, `creado`) VALUES
(7, 'RSU', 'Sólidos', 'Recolecció de residuos solidos urbanos', 'Aldhair Solano Castro', 'José Sebastián Ramos Robles', 'Jair Solano Castro', 'Chevrolet S-10', 'FC-7647-A', 'Relleno Sanitario de Manzanillo', 'Cerro de la Tigra S/N', 'Cascos de color rojo', 'Casco, Lentes, Guantes, Mascarilla, Uniforme, Chaleco, Overol, Botas Industrial,', '2020-11-23 19:40:18'),
(8, 'Recoleccion de Archivo Muerto', 'RME', 'Recolectar y Transportar Archivo Fiscal', 'Aldhair Solano Castro', 'Jose Sebastian Ramos Robles', 'Ivan Flores', 'Chevrolet S-10', 'FC-7647-A', 'asdasdda', 'sdadsasd', 'Escoba', 'Guantes Faja', '2020-11-27 18:18:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `curp` varchar(40) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `nss` varchar(25) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `user` varchar(40) NOT NULL,
  `pwd` varchar(150) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id`, `nombre`, `curp`, `rfc`, `nss`, `cargo`, `user`, `pwd`, `creado`) VALUES
(1, 'Pancho Lopez', 'DFSDFSD12356', 'DASDAS456', '3216546', 'Coordinador de Proyectos', 'Panchito', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-10-12 17:38:33'),
(3, 'Ivan Osorio Flores', 'ISCS46549HMC', 'ISC789654', '4654965654', 'Jefe de Sistemas', 'Ivan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-11-25 16:14:58'),
(4, 'Javier Ibarra', 'ASDASDADSA1619', 'ASDAS649845HM', 'SADS4679', 'Director General', 'Javi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-11-25 16:16:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `id` int(11) NOT NULL,
  `modelo` varchar(75) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `color` varchar(15) NOT NULL,
  `placas` varchar(15) NOT NULL,
  `noeconomico` varchar(20) NOT NULL,
  `capacidad` varchar(20) NOT NULL,
  `tipounidad` varchar(30) NOT NULL,
  `tipocombustible` varchar(75) NOT NULL,
  `serie` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`id`, `modelo`, `ano`, `color`, `placas`, `noeconomico`, `capacidad`, `tipounidad`, `tipocombustible`, `serie`, `descripcion`, `creado`) VALUES
(1, 'Chryshler', '2011', 'Negra', 'FJAJS15', '1524', '100 kg', 'Carga pesada', 'Diesel', '6465465', 'Hola', '2020-10-13 15:11:05'),
(2, 'Ranger ', '2002', '.', 'FH-85590', '.', '.', '.', '.', '.', '.', '2020-11-20 17:01:52'),
(3, 'Chevrolet S-10', '..', '..', 'FC-7647-A', '..', '', '', '..', '..', '..', '2020-11-20 17:58:22'),
(4, 'Chevrolet S-10', '2017', 'Blanco', 'FC-7647-A', 'S02', '1500', 'Caja Abierta', 'Magna', '93C143VG4HC448015', '.', '2020-11-23 19:12:06'),
(5, 'Ford F-350', '2006', 'Blanco', 'FH83862', 'S01', '3500', 'Caja Seca', 'Magna', '3FDKF36L56MA00863', '.', '2020-11-23 19:14:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_medidas`
--

CREATE TABLE `unidad_medidas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidad_medidas`
--

INSERT INTO `unidad_medidas` (`id`, `nombre`, `creado`) VALUES
(1, 'Volumen', '2020-11-24 21:03:42'),
(2, 'Peso', '2020-11-24 21:03:42'),
(3, 'Litros', '2020-11-25 17:01:33'),
(4, 'Piezas', '2020-11-25 17:01:33');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acuses`
--
ALTER TABLE `acuses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `rfc` (`rfc`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indices de la tabla `confimarcion`
--
ALTER TABLE `confimarcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cortes`
--
ALTER TABLE `cortes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `manifiestos`
--
ALTER TABLE `manifiestos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros_combustible`
--
ALTER TABLE `registros_combustible`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros_mantenimiento`
--
ALTER TABLE `registros_mantenimiento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nofactura` (`nofactura`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `curp` (`curp`),
  ADD UNIQUE KEY `rfc` (`rfc`),
  ADD UNIQUE KEY `nss` (`nss`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidad_medidas`
--
ALTER TABLE `unidad_medidas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acuses`
--
ALTER TABLE `acuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `confimarcion`
--
ALTER TABLE `confimarcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `cortes`
--
ALTER TABLE `cortes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `manifiestos`
--
ALTER TABLE `manifiestos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT de la tabla `registros_combustible`
--
ALTER TABLE `registros_combustible`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `registros_mantenimiento`
--
ALTER TABLE `registros_mantenimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `unidad_medidas`
--
ALTER TABLE `unidad_medidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
