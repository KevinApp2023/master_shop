-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2024 a las 08:49:03
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `url_opcional` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `name`, `img`, `url_opcional`) VALUES
(1, 'Banner de pago seguro', '/img/banner/banner_inicio_2.png', ''),
(2, 'Banner de pago seguro', '/img/banner/banner_inicio_1.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carousel`
--

INSERT INTO `carousel` (`id`, `name`) VALUES
(1, 'Carousel inicio principal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `data` text NOT NULL,
  `banner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `data`, `banner`) VALUES
(2, 'Smartphones y Accesorios', '', ''),
(3, 'Computadoras y Laptops', '', ''),
(4, 'Componentes de PC', '', ''),
(5, 'Electrónica de Consumo', '', ''),
(6, 'Juguetes y Gadgets', '', ''),
(7, 'Redes y Conectividad', '', ''),
(8, 'Audio y Sonido', '', ''),
(9, 'Hogar Inteligente (Smart Home)', '', ''),
(10, 'Periféricos y Accesorios', '', ''),
(11, 'Software y Aplicaciones', '', ''),
(12, 'Baterías y Cargadores', '', ''),
(13, 'Fotografía y Videografía', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `config`
--

INSERT INTO `config` (`id`, `name`, `data`) VALUES
(1, 'url', 'http://localhost/'),
(2, 'title', 'Tienda Tecnologia'),
(3, 'keywords', 'tienda de tecnología, productos tecnológicos, smartphones, laptops, gadgets electrónicos, accesorios para PC, cámaras de seguridad, electrónica de consumo, tecnología avanzada, componentes de PC, drones y gadgets, dispositivos inteligentes, relojes inteligentes, computadoras gaming, altavoces Bluetooth, cámaras digitales, routers y modems, gaming y consolas, gadgets innovadores, accesorios para smartphones, tecnología para el hogar inteligente, dispositivos de audio, sistemas de sonido, tecnología para empresas, productos de realidad virtual'),
(4, 'author', 'Centro Digital GoodMax'),
(5, 'description', 'En Tienda Tecnologia, ofrecemos una amplia selección de productos tecnológicos de última generación. Encuentra smartphones, laptops, gadgets, componentes de PC, accesorios, dispositivos inteligentes y mucho más, todo a precios competitivos. ¡Descubre la tecnología que necesitas para mejorar tu vida digital!'),
(6, 'icon', '/img/logo.png'),
(7, 'logo_nav', '/img/logo_ttc_60.png'),
(8, 'lang', 'es'),
(9, 'color_nav', 'white'),
(10, 'color_top', 'danger'),
(11, 'facebook', 'https://facoom.com'),
(12, 'youtube', '#'),
(13, 'instagram', '#'),
(14, 'linkedin', '#'),
(15, 'x', '#'),
(16, 'github', '#'),
(17, 'telegram', '#'),
(18, 'whatsapp', '3122450595'),
(19, 'gmail', '#'),
(20, 'skype', '#'),
(21, 'texto_top', 'This is the first item\'s accordion body'),
(22, 'epayco_api', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_carousel`
--

CREATE TABLE `data_carousel` (
  `id` int(11) NOT NULL,
  `carousel` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `data_carousel`
--

INSERT INTO `data_carousel` (`id`, `carousel`, `img`) VALUES
(1, '1', '/img/banner/2985901.jpg'),
(2, '1', '/img/banner/2985902.jpg'),
(3, '1', '/img/banner/2985901.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_productos`
--

CREATE TABLE `img_productos` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `productos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `img_productos`
--

INSERT INTO `img_productos` (`id`, `img`, `productos`) VALUES
(1, '/img/products/p_1_1.jpg', '1'),
(2, '/img/products/p_1_2.jpg', '1'),
(3, '/img/products/p_1_3.jpg', '1'),
(4, '/img/products/p_1_4.jpg', '1'),
(5, '/img/products/p_1_5.jpg', '1'),
(6, '/img/products/p_1_6.jpg', '1'),
(7, '/img/products/p_1_1.jpg', '6'),
(8, '/img/products/p_1_1.jpg', '7'),
(9, '/img/products/p_1_1.jpg', '8'),
(10, '/img/products/p_1_1.jpg', '9'),
(11, '/img/products/p_1_1.jpg', '10'),
(12, '/img/products/p_1_1.jpg', '11'),
(13, '/img/products/p_1_1.jpg', '12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag`
--

CREATE TABLE `pag` (
  `id` int(11) NOT NULL,
  `pagina` text NOT NULL,
  `componente` text NOT NULL,
  `data_componente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pag`
--

INSERT INTO `pag` (`id`, `pagina`, `componente`, `data_componente`) VALUES
(1, 'home', 'carousel', 1),
(2, 'home', 'ofertas_dia', 1),
(3, 'home', 'banner', 1),
(4, 'home', 'ofertas', 1),
(5, 'home', 'banner', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `ref` text NOT NULL,
  `producto` text NOT NULL,
  `category` text NOT NULL,
  `descripcion` text NOT NULL,
  `descripcion_completa` text NOT NULL,
  `valor_producto` text NOT NULL,
  `img_producto` text NOT NULL,
  `popular` text NOT NULL,
  `oferta` int(11) NOT NULL,
  `valor_producto_oferta` int(11) NOT NULL,
  `oferta_dia` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `ref`, `producto`, `category`, `descripcion`, `descripcion_completa`, `valor_producto`, `img_producto`, `popular`, `oferta`, `valor_producto_oferta`, `oferta_dia`, `estado`) VALUES
(1, '14562', 'Lámpara LED regulable para oficina y estudio', 'Electrónica de Consumo, Periféricos y Accesorios', '<p><strong>¡Ilumina tu espacio de trabajo con esta lámpara LED de escritorio!</strong><br><br>Cuenta con luz regulable en intensidad y temperatura de color.<br>Base de acero resistente y diseño moderno.<br>Compatible con puertos USB para cargar dispositivos.<br>Ideal para oficinas, estudios y mesas de trabajo.</p>', '<p><strong>¡Ilumina tu espacio de trabajo!</strong></p><br><p><strong>Características:</strong> Lámpara LED de escritorio con intensidad de luz ajustable y cambio de temperatura de color. Su diseño moderno y base de acero hacen que sea tanto funcional como decorativa. Además, tiene un puerto USB para cargar dispositivos mientras trabajas.</p>', '45000', '/img/products/p_1_1.jpg', '1', 0, 0, 0, 1),
(6, '1567', 'Silla ergonómica de oficina con ajuste lumbar', 'Electrónica de Consumo, Periféricos y Accesorios', '<p><strong>¡Siéntete cómodo mientras trabajas!</strong><br><br>Asiento de espuma de alta densidad para mayor comodidad.<br>Respaldo ajustable con soporte lumbar.<br>Base giratoria y ruedas para fácil movilidad.<br>Disponible en varios colores.</p>', '<p><strong>¡Siéntete cómodo durante largas jornadas de trabajo!</strong></p><br><p><strong>Ergonómica:</strong> Esta silla cuenta con respaldo ajustable y soporte lumbar para una mejor postura. Además, su asiento de espuma de alta densidad y base con ruedas te proporcionan comodidad y facilidad de movimiento durante el día.</p>', '199900', '/img/products/p_1_1.jpg', '1', 1, 179900, 1, 1),
(7, '2345', 'Monitor LED Full HD de 24 pulgadas', '', '<p><strong>¡Mejora tu experiencia visual con este monitor!</strong><br><br>Pantalla Full HD de 24 pulgadas con tecnología LED.<br>Ángulo de visión de 178° y tiempo de respuesta de 5 ms.<br>Conexiones HDMI y VGA.</p>', '<p><strong>¡Experiencia visual superior!</strong></p><br><p><strong>Detalles:</strong> Este monitor LED de 24 pulgadas te ofrece una resolución Full HD, con colores vibrantes y detalles nítidos. Su ángulo de visión de 178° y un tiempo de respuesta de 5 ms lo convierten en una excelente opción tanto para trabajo como para entretenimiento.</p>', '399900', '/img/products/p_1_1.jpg', '1', 0, 349900, 1, 1),
(8, '1789', 'Teclado mecánico retroiluminado', '', '<p><strong>¡Optimiza tu productividad con este teclado mecánico!</strong><br><br>Teclas táctiles y de respuesta rápida.<br>Iluminación RGB personalizable.<br>Conexión USB de alta velocidad.<br>Diseño compacto y resistente.</p>', '<p><strong>¡Potencia tu escritura y juegos con este teclado mecánico!</strong></p><br><p><strong>Características:</strong> Teclas mecánicas de respuesta rápida y táctil, iluminación RGB personalizable y una sólida construcción. Perfecto para trabajos de oficina o para sesiones de juegos intensos, con conexión USB para máxima velocidad.</p>', '149900', '/img/products/p_1_1.jpg', '1', 1, 129900, 0, 1),
(9, '1496', 'Mochila para laptop de 15.6 pulgadas', '', '<p><strong>¡Protege tu laptop con estilo!</strong><br><br>Compartimento acolchado para laptop de hasta 15.6 pulgadas.<br>Bolsillos adicionales para accesorios y documentos.<br>Correas ajustables y diseño ergonómico.</p>', '<p><strong>¡Lleva tu laptop con seguridad y comodidad!</strong></p><br><p><strong>Práctica y funcional:</strong> Esta mochila tiene un compartimento especial para tu laptop de hasta 15.6 pulgadas, con protección acolchonada. Además, cuenta con varios bolsillos adicionales para organizar tus accesorios y documentos.</p>', '79900', '/img/products/p_1_1.jpg', '1', 1, 69900, 0, 1),
(10, '1783', 'Auriculares inalámbricos Bluetooth', '', '<p><strong>¡Escucha tu música con libertad y calidad!</strong><br><br>Sonido estéreo de alta calidad.<br>Conexión Bluetooth 5.0 para mayor alcance.<br>Duración de batería de hasta 20 horas.</p>', '<p><strong>¡Libérate de los cables y disfruta del mejor sonido!</strong></p><br><p><strong>Inalámbricos:</strong> Estos auriculares ofrecen una excelente calidad de sonido estéreo con Bluetooth 5.0 para conexión sin interrupciones. La duración de la batería te permite disfrutar de música, llamadas y juegos hasta 20 horas.</p>', '159900', '/img/products/p_1_1.jpg', '1', 1, 139900, 0, 1),
(11, '1234', 'Cargador portátil 10000 mAh', '', '<p><strong>¡Nunca te quedes sin batería!</strong><br><br>Carga rápida para tus dispositivos móviles.<br>Batería de 10000 mAh para múltiples cargas.<br>Diseño compacto y ligero.</p>', '<p><strong>¡Lleva la energía siempre contigo!</strong></p><br><p><strong>Rápido y potente:</strong> Con este cargador portátil de 10000 mAh, podrás cargar rápidamente tus dispositivos mientras estás en movimiento. Su tamaño compacto lo hace fácil de llevar en tu bolso o mochila.</p>', '79900', '/img/products/p_1_1.jpg', '1', 1, 69900, 0, 1),
(12, '1567', 'Cámara de seguridad Wi-Fi para interiores', '', '<p><strong>¡Mantén tu hogar seguro las 24 horas!</strong><br><br>Visión nocturna y detección de movimiento.<br>Conexión Wi-Fi para visualización remota.<br>Fácil instalación y control desde tu teléfono móvil.</p>', '<p><strong>¡Protege tu hogar de manera inteligente!</strong></p><br><p><strong>Características:</strong> Esta cámara de seguridad para interiores cuenta con visión nocturna, detección de movimiento y se conecta a tu red Wi-Fi para poder visualizar en tiempo real desde tu teléfono móvil. Su instalación es fácil y rápida, proporcionando seguridad en todo momento.</p>', '179900', '/img/products/p_1_1.jpg', '1', 1, 159900, 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `data_carousel`
--
ALTER TABLE `data_carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `img_productos`
--
ALTER TABLE `img_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag`
--
ALTER TABLE `pag`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `data_carousel`
--
ALTER TABLE `data_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `img_productos`
--
ALTER TABLE `img_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `pag`
--
ALTER TABLE `pag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
