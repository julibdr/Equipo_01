-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2023 a las 01:25:36
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
-- Base de datos: `celularia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `redes` varchar(20) NOT NULL,
  `edad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`nombre`, `apellido`, `imagen`, `correo`, `redes`, `edad`) VALUES
('Ailen', 'Alvarez', 'img/alumnos/Ailen.png', 'ailen.alvarez@davinci.edu.ar', 'ailenad', '1998-07-05'),
('Julieta', 'Bariandaran', 'img/alumnos/Julieta.jpeg', 'julieta.bariandaran@davinci.edu.ar', 'julibdr', '2004-04-15'),
('Lourdes', 'Martinez Fuschino', 'img/alumnos/Lourdes.jpg', 'lourdes.martinez@davinci.edu.ar', 'luli-martinez', '2002-07-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `color` varchar(25) DEFAULT NULL,
  `disponibilidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `caracteristicas`
--

INSERT INTO `caracteristicas` (`id`, `producto_id`, `color`, `disponibilidad`) VALUES
(1, 1, 'Dorado', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `pantalla` varchar(20) NOT NULL,
  `sistemaoperativo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `imagen`, `categoria`, `pantalla`, `sistemaoperativo`) VALUES
(1, 'iPhone SE', 1000, 'El chip A15 Bionic mejora prácticamente todo lo que haces con el iPhone. Las apps se cargan al instante y funcionan con total fluidez.Rendimiento grafico hasta 1.2 veces ms rápido.', 'img/iphone/iphone-SE.jpg', 'celulares', '4.7 pulgadas', 'iOs 16'),
(2, 'iPhone 12', 2000, 'Este iphone cuenta con una pantalla Super Retina XDR de 6.1 pulgadas. Con opciones de 64 GB, 128 GB O 256 GB. El sistemas de camaras trasero es dual. Usa Face Id para la seguridad y corre iOS 14', 'img/iphone/iphone12.jpg', 'celulares', '6.1 pulgadas', 'iOs 16'),
(3, 'iPhone 13', 1300, 'El sistema de dos cámaras más avanzado en un iPhone. El superrápido chip A15 Bionic. Un gran salto en duración de batería. Un diseño resistente.Y una pantalla Super Retina XDR más brillante\r\n', 'img/iphone/iphone13.jpg', 'celulares', '6.1 pulgadas', 'iOs 16'),
(4, 'Ipad Pro', 1000, 'Un rendimiento extraordinario, pantallas increíblemente avanzadas, conexión inalámbrica, nuevas y poderosas funcionalidades con iPadOS 16 y un toque de magia para el Apple Pencil.\r\n', 'img/ipad/ipadPro.jpg', 'tablet', '12.9 pulgadas', 'iOs 16'),
(5, 'MacBook Air', 3000, 'La MacBook Air con chip M1 es una laptop super portátil, versátil y rápida. Tiene una increíble pantalla Retina, un diseño delgado y sin ventilador que la hace muy silenciosa y una batería que te acompaña todo el día.\r\n', 'img/mac/macbookAir.jpg', 'computadora', '13.3 ', 'iOs 16'),
(6, 'iPhone 14', 1500, 'El iPhone 14 viene con el sistema de dos cámaras, para que tomes fotos espectaculares con mucha o poca luz. Y te da más tranquilidad gracias a una funcionalidad de seguridad que salva vidas.\r\n', 'img/iphone/iphone-14jpg.jpg', 'celulares', '6.1 pulgadas', 'iOs 16'),
(7, 'iPhone 14 PRO', 1800, 'El iPhone 14 Pro te permite captar detalles increíbles gracias a su cámara gran angular de 48 MP. Y viene con Detección de Choques(1), una funcionalidad de seguridad que pide ayuda cuando no estás en condiciones de hacerlo.\r\n', 'img/iphone/iphone14Pro.jpg', 'celulares', '6.1 pulgadas', 'iOs 16'),
(8, 'iPad', 2500, 'El nuevo iPad enamora a primera vista, con diseño de borde a borde perfecta para trabajar, darles forma a tus ideas y hacer videollamadas. Más poderoso, más bonito y más capaz.\r\n', 'img/ipad/ipad.jpg', 'tablet', '10.9 pulgadas', 'iOs 16'),
(9, 'iPad Air', 1000, 'El iPad Air te sumerge de lleno en todo lo que haces. Viene con tecnologías avanzadas como True Tone, amplia gama de colores P3 y revestimiento antirreflejo para que leas, trabajes y veas tus películas favoritas como nunca.\r\n', 'img/ipad/ipadAir.jpg', 'tablet', '10.9 pulgadas', 'iOs 16'),
(10, 'iPad Mini', 800, 'El iPad mini se diseñó meticulosamente para tener una belleza extraordinaria: con una pantalla de borde a borde, marcos más delgados y esquinas elegantemente redondeadas.\r\n', 'img/ipad/ipadMini.jpg', 'tablet', '8.3 pulgadas', 'iOs 16'),
(11, 'MacBook Pro', 3500, 'Gracias al nuevo chip M2, la MacBook Pro de 13 pulgadas es más poderosa que nunca. Ofrece hasta 20 horas de batería y un sistema de enfriamiento activo que mantiene un rendimiento increíble en el mismo diseño compacto de siempre.\r\n', 'img/mac/macbookPro.jpg', 'computadora', '13 pulgadas', 'macOs ventura'),
(12, 'iMac', 2500, 'Creada con lo mejor de Apple, los superpoderes del chip M1 y un diseño que brilla en todos lados. En resumen, es justo lo que necesitabas.\r\n', 'img/mac/iMacc.jpeg', 'computadora', '24 pulgadas', 'macOs ventura'),
(13, 'Mac Pro', 6000, 'Cada aspecto de la Mac Pro fue diseñado para ofrecer el máximo rendimiento. La carcasa de aluminio se desliza sobre un armazón de acero inoxidable de alta precisión, permitiendo un acceso de 360º a todos los componentes y numerosas opciones de configuración. A partir de ahí todo es posible.\r\n', 'img/mac/macPro.jpg', 'computadora', '13 pulgadas', 'macOs ventura'),
(14, 'Studio Display', 6300, 'Presentamos el monitor Studio Display. Una envolvente pantalla Retina 5K de 27 pulgadas (1) con cámara de 12 MP con Encuadre Centrado, inclinación y altura ajustable, micrófonos con calidad de estudio y un sistema de sonido de seis bocinas (parlantes). El compañero ideal de cualquier Mac.\r\n', 'img/mac/studioDisplay.png', 'computadora', '27 pulgadas', 'macOs ventura'),
(15, 'Pro Display XR', 6600, 'Eleva tu trabajo. Y muévelo. Cada aspecto del Pro Display XDR fue diseñado pensando en los usuarios profesionales. La base Pro Stand no es la excepción, ya que ofrece estabilidad sin ocupar mucho espacio y permite ajustar la altura, inclinación y orientación del monitor. Ideal para usarlo en posición horizontal o vertical. Ideal para cualquier tipo de trabajo.\r\n', 'img/mac/prodisplayxdr.jpeg', 'computadora', '32 pulgadas', 'macOs ventura');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD CONSTRAINT `caracteristicas_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
