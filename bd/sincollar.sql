-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2023 a las 04:48:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sincollar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mensajes`
--

CREATE TABLE `tb_mensajes` (
  `id_mensaje` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `mensaje` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tb_mensajes`
--

INSERT INTO `tb_mensajes` (`id_mensaje`, `nombre`, `correo`, `mensaje`) VALUES
(10, 'sebas', 'ssilvafraile@gmail.com', 'muy buena iniciativa'),
(11, 'Confidencial', 'ss@gmail.com', 'Excelente pagina web!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_publicacion`
--

CREATE TABLE `tb_publicacion` (
  `id_publicacion` int(11) NOT NULL,
  `nombre_dueno` varchar(100) DEFAULT NULL,
  `ap_dueno` varchar(50) DEFAULT NULL,
  `edad_dueno` int(10) DEFAULT NULL,
  `fono_dueno` varchar(10) DEFAULT NULL,
  `correo_dueno` varchar(50) DEFAULT NULL,
  `id_sexo` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `upload_foto` varchar(100) NOT NULL,
  `descripcion_dueno` varchar(500) DEFAULT NULL,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tb_publicacion`
--

INSERT INTO `tb_publicacion` (`id_publicacion`, `nombre_dueno`, `ap_dueno`, `edad_dueno`, `fono_dueno`, `correo_dueno`, `id_sexo`, `id_region`, `upload_foto`, `descripcion_dueno`, `fecha_creacion`) VALUES
(47, 'sebastian', 'Silva', 30, '964941860', 'ssilvafraile@gmail.com', 3, 16, 'upload/1696903837.png', 'test', '2023-10-09'),
(48, 'Pirata', 'Silva', 24, '962521280', 'ss@gmail.com', 3, 8, 'upload/1698196647.png', 'Pirata, lo encontramos en pichilemu hace unos meses, falta llevarlo al veterinario.', '2023-10-24'),
(49, 'Matilda', 'Silva', 25, '965232015', 'test@test.cl', 2, 10, 'upload/1698290882.png', 'Gatita esterilizada, muy regalona, con sus vacunas al día busca hogar definitivo.\r\nmas información contactarme a mi celular o correo.', '2023-10-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_region`
--

CREATE TABLE `tb_region` (
  `id_region` int(11) NOT NULL,
  `nombre_region` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tb_region`
--

INSERT INTO `tb_region` (`id_region`, `nombre_region`) VALUES
(1, 'Seleccione'),
(2, 'ARICA Y PARINACOTA'),
(3, 'TARAPACÁ'),
(4, 'ANTOFAGASTA'),
(5, 'ATACAMA'),
(6, 'COQUIMBO'),
(7, 'VALPARAÍSO'),
(8, 'DEL LIBERTADOR GRAL. BERNARDO O\'HIGGINS'),
(9, 'DEL MAULE'),
(10, 'DEL BIOBÍO'),
(11, 'DE LA ARAUCANÍA'),
(12, 'DE LOS RÍOS'),
(13, 'DE LOS LAGOS'),
(14, 'AISÉN DEL GRAL. CARLOS IBAÑEZ DEL CAMPO'),
(15, 'MAGALLANES Y DE LA ANTÁRTICA CHILENA'),
(16, 'METROPOLITANA DE SANTIAGO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_sexo`
--

CREATE TABLE `tb_sexo` (
  `id_sexo` int(11) NOT NULL,
  `tipo_sexo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tb_sexo`
--

INSERT INTO `tb_sexo` (`id_sexo`, `tipo_sexo`) VALUES
(1, 'Seleccione'),
(2, 'Femenino'),
(3, 'Masculino'),
(4, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `pass_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nombre_usuario`, `pass_usuario`) VALUES
(1, 'root', 'qwerty'),
(2, 'root', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_mensajes`
--
ALTER TABLE `tb_mensajes`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indices de la tabla `tb_publicacion`
--
ALTER TABLE `tb_publicacion`
  ADD PRIMARY KEY (`id_publicacion`),
  ADD KEY `id_region` (`id_region`),
  ADD KEY `id_sexo` (`id_sexo`);

--
-- Indices de la tabla `tb_region`
--
ALTER TABLE `tb_region`
  ADD PRIMARY KEY (`id_region`);

--
-- Indices de la tabla `tb_sexo`
--
ALTER TABLE `tb_sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_mensajes`
--
ALTER TABLE `tb_mensajes`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tb_publicacion`
--
ALTER TABLE `tb_publicacion`
  MODIFY `id_publicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `tb_region`
--
ALTER TABLE `tb_region`
  MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tb_sexo`
--
ALTER TABLE `tb_sexo`
  MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_publicacion`
--
ALTER TABLE `tb_publicacion`
  ADD CONSTRAINT `tb_publicacion_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `tb_region` (`id_region`),
  ADD CONSTRAINT `tb_publicacion_ibfk_2` FOREIGN KEY (`id_sexo`) REFERENCES `tb_sexo` (`id_sexo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
