-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-03-2019 a las 22:00:46
-- Versión del servidor: 5.7.25
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aventura_plataforma`
--

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `state`, `title`, `volanta`, `duracion`, `largo`, `descripcion`, `recomendacion`, `precioPublico`, `descuento`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, '0', 'Natural Rafting', 'Rafting de 21 kilómetros con Trekking y desayuno de frutas de estación.', '240', '21', 'Rafting único por su duración y su vista. Hermosa bajada de Rafting por el río Atuel de 21 kilómetros de recorrido, donde realizamos un trekking de 40 minutos y compartimos un refrigerio saludable con frutas de estación, cereales y jugo de frutas. Actividad recomendable para familias y grupos de amigos.', 'Para realizar esta actividad de forma 100% segura es necesario calzado seguro (acordonado o de neopreno) ropa de recambio y protector solar. Esta actividad no es recomendable para Mujeres embarazadas y niños de menos de 4 años.', '0', '0', 2, 3, '2018-10-23 00:11:00', '2018-10-27 18:57:07'),
(7, '0', 'Cañón del Diamante exclusivo.', 'Actividad exclusiva de Aventura sin Fronteras. Paisajes naturales actividades que te darán adrenalina en un gran caudal.', '0', '0', '<p><strong>Circuito de día completo, adrenalina y naturaleza se mezclan para tener una jornada cargada de sensaciones nuevas. Trekking, Rapel y Tirolesa son las actividades de aventura que realizamos en un lugar natural y calmo dentro del magnífico Cañón del Diamante. La misma incluye desayuno, almuerzo campestre y refrigerio.</strong></p>', '<p>Como en todas nuestras actividades de montaña siempre recomendamos calzado seguro y/o acordonado, ropa cómoda protector solar, repelente para insectos y mucha buena onda.</p>', '0', '0', 2, 1, '2018-11-03 16:40:11', '2018-11-03 17:40:56'),
(8, '0', 'La Frazada extremo', 'Imponente Cañón con vistas únicas en Valle Grande.', '0', '0', 'Circuito de medio día. Cargado de bellezas naturales en este se practica trekking, Rapel y Vía Ferrata esta última es un deporte que se desarrolla en Europa al término de la segunda guerra mundial, es un deporte que consiste en trepar una pared vertical con escalones artificiales con toda la seguridad correspondiente para que puedas disfrutar a pleno nuestros bellos paisajes. Incluye Traslados, deportes de aventura y refrigerio.', 'Como en todas nuestras actividades de montaña recomendamos calzado seguro y/o acordonado, protector solar 2 lts. de agua, ropa cómoda, gorra y muy buena onda.', '0', '0', 2, 1, '2018-11-03 17:04:04', '2018-11-03 17:04:04'),
(9, '0', 'Cañón del Atuel Full Day', 'Nuestro hermoso Cañón del Atuel pero lleno de sensaciones que harán sentirte vivo.', '0', '0', 'Circuito de día completo. Recorremos el Nihuil desde adentro con un desayuno a orillas del lago que lleva el mismo nombre, fotos, naturaleza y vistas únicas. Luego nos adentramos en el cañón para ver un imponente paisaje que nos muestran nuestras sierras, trekking, rapel y almuerzo campestre hacen que este día quede en nuestra retina para siempre. Vivilo.', 'Recomendamos para este circuito que lleven dentro de sus pertenencias traje de baño, ropa cómoda, calzado seguro, protector solar, gorra, 2lts. de agua y mucha buena onda.', '0', '0', 2, 1, '2018-11-03 17:24:23', '2018-11-03 17:24:23'),
(10, '0', 'Noche en la montaña.', 'Viví una experiencia única donde las estrellas se encargarán de mostrarte algo nunca antes vivido.', '0', '0', 'Circuito dos días. Aseguramos que esta experiencia nunca dejará de asombrarte. Campo y naturaleza en su estado puro hará que no dejes de sorprenderte. Actividades de turismo aventura, fogón, cena Campestre con los mejores vinos de nuestro San Rafael de bodega La Abeja. Incluye un refrigerio, cena, desayuno, deportes de aventura (trekking, rapel y tirolesa) y traslados.', 'ya que es una actividad de montaña recomendamos que lleves calzado seguro y/o acordonado, ropa cómoda, protector solar, gorra, repelente, 2lts, de agua, abrigo para la noche e impermeable por el caso de que llueva y mucha buena onda.', '0', '0', 2, 1, '2018-11-03 17:37:11', '2018-11-03 17:37:11'),
(11, '0', '\"SOSNEADO\" donde primero se ve el Sol.', 'Recomendable 100% por su belleza.', '0', '0', '<p>2 días. Para nosotros uno de los lugares mas hermosos de Mendoza. Paz, Naturaleza, Río, Laguna y una inmensidad que solo la sentirás si visitas este bello lugar. Te invitamos a vivir esta experiencia única. Visitamos las ruinas del Hotel Sosneado y sus termas, Laguna el Sosneado y trekking. Servicio todo incluído, 2 desayunos, 2 almuerzos, dos refrigerios de merienda y dos cenas típicas de un día cargado de naturaleza y campo, fogón. También te proveemos de carpas y bolsas de dormir. Mínimo necesario para realizar este circuito 4 personas.</p><p><strong>Esta experiencia no te la podes perder. Consultanos.</strong></p>', '<p>Como en todas nuestras actividades de montaña siempre recomendamos calzado seguro y/o acordonado, ropa cómoda protector solar, repelente para insectos, abrigo para la noche, traje de baño para las termas, toallón, elementos de higiene personal y mucha buena onda.</p>', '0', '0', 2, 1, '2018-11-03 17:55:46', '2019-03-09 17:10:17'),
(12, '0', 'Trekking Nocturno', 'Experiencia recomendable.', '0', '0', '<p>Experiencia nocturna en el que la mezcla de adrenalina y un cielo soñado permiten que nuestros sentidos gocen de un paisaje único entre cerros y arroyos. Al termino del trekking se degusta un excelente asado campestre y vinos de Bodega La Abeja. Incluye Traslados ida y vuelta, trekking con equipamientos de seguridad personal y asado campestre.</p>', 'Como en Todas nuestras actividades de montaña recomendamos ropa cómoda, calzado seguro y acordonado, 2 lts. de agua, abrigo y muy buena onda', '0', '0', 2, 3, '2019-03-09 17:37:54', '2019-03-09 17:37:54');

--
-- Volcado de datos para la tabla `albumes`
--

INSERT INTO `albumes` (`id`, `titulo`, `descripcion`, `portada`, `user_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Cañón del Diamante', 'Exclusivo.', '1541257310.jpg', 2, NULL, '2018-11-03 18:01:50', '2018-11-03 18:01:50'),
(3, 'Sosneado', 'Único por su belleza.', '1541257900.jpg', 2, NULL, '2018-11-03 18:11:40', '2018-11-03 18:11:40');

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Montaña', '2018-10-17 00:26:35', '2018-10-17 00:26:35'),
(2, 'Lago', '2018-10-17 00:27:36', '2018-10-17 00:27:36'),
(3, 'Actividades de Rio', '2018-10-17 00:27:49', '2018-10-17 00:27:49');

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `foto`, `album_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '6L2A0535.jpg', 3, NULL, '2018-11-03 18:14:41', '2018-11-03 18:14:41'),
(2, '20180311_153749.jpg', 3, NULL, '2018-11-03 18:14:41', '2018-11-03 18:14:41'),
(3, '20180311_153859.jpg', 3, NULL, '2018-11-03 18:14:41', '2018-11-03 18:14:41'),
(4, '20180311_193404.jpg', 3, NULL, '2018-11-03 18:14:41', '2018-11-03 18:14:41'),
(5, '20180312_153640.jpg', 3, NULL, '2018-11-03 18:14:41', '2018-11-03 18:14:41'),
(6, '20180312_171802.jpg', 3, NULL, '2018-11-03 18:14:41', '2018-11-03 18:14:41'),
(7, '20180312_192330.jpg', 3, NULL, '2018-11-03 18:14:41', '2018-11-03 18:14:41');

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `foto`, `actividad_id`, `created_at`, `updated_at`) VALUES
(4, 'actividad_1540655696.jpg', 2, '2018-10-27 18:55:02', '2018-10-27 18:55:02'),
(10, 'actividad_1541251483.jpg', 2, '2018-11-03 16:24:46', '2018-11-03 16:24:46'),
(11, 'actividad_1541252411.jpg', 7, '2018-11-03 16:40:11', '2018-11-03 16:40:11'),
(12, 'actividad_1541253844.jpg', 8, '2018-11-03 17:04:04', '2018-11-03 17:04:04'),
(13, 'actividad_1541255063.jpg', 9, '2018-11-03 17:24:23', '2018-11-03 17:24:23'),
(14, 'actividad_1541255831.jpg', 10, '2018-11-03 17:37:11', '2018-11-03 17:37:11'),
(15, 'actividad_1541256946.jpg', 11, '2018-11-03 17:55:46', '2018-11-03 17:55:46'),
(16, 'actividad_1552141572.jpg', 2, '2019-03-09 17:26:12', '2019-03-09 17:26:12'),
(17, 'actividad_1552142274.jpg', 12, '2019-03-09 17:37:54', '2019-03-09 17:37:54'),
(18, 'actividad_1552142361.jpg', 2, '2019-03-09 17:39:21', '2019-03-09 17:39:21'),
(19, 'actividad_1552142384.jpg', 2, '2019-03-09 17:39:44', '2019-03-09 17:39:44');

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `state`, `nombre`, `apellido`, `email`, `telefono`, `descripcion`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '0', 'Menura', 'gregorjut@gmail.com', 'gregorjut@gmail.com', '13318105737', 'We offer you the opportunity to advertise your products and services. \r\n \r\nDear Sir / Madam Behold is  an interesting offers for you. I can help you with sending  your commercial offers or messages through feedback forms. The advantage of this method is that the messages sent through the feedback forms are included in the white list. This method increases the chance that your message will be read. The same way as you received this message. \r\nSending via Feedback Forms to any domain zones of the world. (more than 1000 domain zones.). \r\nThe cost of sending 1 million messages for any domain zone of the world is $ 49 instead of $ 99. \r\nDomain zone .com - (12 million messages sent) - $399 instead of $699 \r\nAll domain zones in Europe- (8 million messages sent) - $ 299 instead of $599 \r\nAll sites in the world (25 million messages sent) - $499 instead of $999 \r\nDomain zone .de - (2 million messages sent) - $99 instead of $199 \r\nDomain zone .uk - (1.5 million messages sent) - $69 instead of $139 \r\nDomain zone .nl - (700 000 sent messages) - $39 instead of $79 \r\n \r\nDiscounts are valid until March 25. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype – FeedbackForm2019 \r\nEmail - FeedbackForm2019@gmail.com \r\n \r\nThank you for your attention.', NULL, '2019-03-14 23:40:45', '2019-03-14 23:40:45'),
(2, '0', 'Mary Wingo', 'Wingo', 'marywingo@roxwellwaterhouse.com', '515-4103', 'Hi there, my name is Mary Wingo and I manufacture premium woven and\r\nprinted labels and patches with the best craftsmanship in the\r\nindustry. These are used for product branding as well as certain\r\ntypes of legal compliance needed for sewn products and clothing. I\r\ncan also source small or large volumes of imported custom clothing\r\nand other custom sewn products, as I have a myriad of niche sewing\r\nfactories in my network.\r\n\r\nI can provide you not only with excellent service and pricing, but I\r\ncan also help with special requests and projects that are difficult to\r\nsource or engineer from many manufacturing fields.\r\n\r\nYou can always call me at 325-515-4103 (I work out of Texas, but I\r\ndo work internationally) or just get back by email if you have any\r\nspecs, artwork, or any questions whatsoever. You will completely be\r\ntaken care of by my world-class team, as we have been serving our\r\nelite clients for over 10 years.\r\n\r\nI do have some beautiful label and patch work to share with you if\r\nyou are interested. Would you like for me to send you more\r\ninformation or a link to my gallery? Or are you open to some other\r\ntype of dialog?\r\n\r\nMary Wingo\r\nUS: +1-315-515-4103\r\nWhatsApp +593997072882\r\nSkype ID maryiscontary\r\n13359 North Highway 183\r\nSuite 406-577\r\nAustin TX 78750', NULL, '2019-03-23 21:23:55', '2019-03-23 21:23:55'),
(3, '0', 'Irenzobia', 'iren_23@mail.com', 'iren_23@mail.com', '85491254296', 'Hello, I want to work in your company on a voluntary basis, can you offer me anything? \r\na little about me: https://about.me/iren', NULL, '2019-03-26 12:42:11', '2019-03-26 12:42:11');

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('miguelatonidandel@gmail.com', '$2y$10$6H8ors3EXWhW07NZltnHKOVZWyWMgS2HT9k0Ggviq/pkuTn1YIy.i', '2019-03-02 19:09:15');

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'matiasquevedo.sabbath@gmail.com', '$2y$10$eD6GV1jo7rCegmpIKkv.KeBuMjJfNYwcEhVVCPx2KM/xqfZn/fDLC', 'admin', 'rgXIX1JuZDzkzpuswd05SdzQYNeNIbGyxcoFVkUsyR1iYic4cwN9UKry7jkk', '2018-10-16 19:05:38', '2018-10-16 19:05:38'),
(2, 'miguel angel tonidandel', 'miguelatonidandel@gmail.com', '$2y$12$AwgbfcdRZBjZkbs5LsPtUOcLnlzygcKIrYuwLnfKTwlhzCx.W9I2C', 'admin', 'SCPozZhyO1qndG9T5OyKpulZIAMHgmoEoLrTvh1ST56XaNYuNSijMjsTNmrS', '2018-10-17 00:15:20', '2018-10-17 00:16:12');

-- --------------------------------------------------------

--
-- Estructura para la vista `actividadespaquetes`
--
DROP TABLE IF EXISTS `actividadespaquetes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `actividadespaquetes`  AS  select 1 AS `id`,1 AS `title`,1 AS `descripcion`,1 AS `recomendacion`,1 AS `actividad_id`,1 AS `paquete_id` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `actividadespostview`
--
DROP TABLE IF EXISTS `actividadespostview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `actividadespostview`  AS  select 1 AS `id`,1 AS `title`,1 AS `volanta`,1 AS `descripcion`,1 AS `recomendacion`,1 AS `duracion`,1 AS `largo`,1 AS `state`,1 AS `foto`,1 AS `name`,1 AS `created_at`,1 AS `updated_at` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `categoryactividadespost`
--
DROP TABLE IF EXISTS `categoryactividadespost`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `categoryactividadespost`  AS  select 1 AS `actividades`,1 AS `foto`,1 AS `state`,1 AS `title`,1 AS `precioPublico`,1 AS `descuento`,1 AS `name`,1 AS `category_id`,1 AS `created_at` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `eventospostview`
--
DROP TABLE IF EXISTS `eventospostview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `eventospostview`  AS  select 1 AS `id`,1 AS `title`,1 AS `fecha`,1 AS `hora`,1 AS `precio`,1 AS `lugar`,1 AS `tipo`,1 AS `descripcion`,1 AS `created_at`,1 AS `updated_at`,1 AS `foto` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `informacionespost`
--
DROP TABLE IF EXISTS `informacionespost`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `informacionespost`  AS  select 1 AS `id`,1 AS `title`,1 AS `descripcion`,1 AS `state`,1 AS `name`,1 AS `created_at`,1 AS `updated_at` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `paquetespostview`
--
DROP TABLE IF EXISTS `paquetespostview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `paquetespostview`  AS  select 1 AS `id`,1 AS `state`,1 AS `title`,1 AS `descripcion`,1 AS `precioCliente`,1 AS `precioEmpresa`,1 AS `descuento`,1 AS `fechaInicio`,1 AS `fechaTermino`,1 AS `user_id`,1 AS `created_at`,1 AS `updated_at` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
