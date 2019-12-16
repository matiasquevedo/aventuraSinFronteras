use aventura_plataforma;

show tables;

select * from migrations;
select * from users;
select * from categories;
select * from actividades;
select * from paquetes;
select * from actividadPaquete;
select * from actividadespostview;
select * from informaciones;
select * from informacionespost;
select * from eventos;
select * from eventospostview;
select * from proveedores;
select * from categoryactividadespost;
select * from proyectos;
select * from images;
select * from pedidos;
select * from albumes;
select * from fotos;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'matiasquevedo.sabbath@gmail.com', '$2y$10$eD6GV1jo7rCegmpIKkv.KeBuMjJfNYwcEhVVCPx2KM/xqfZn/fDLC', 'admin', 'rgXIX1JuZDzkzpuswd05SdzQYNeNIbGyxcoFVkUsyR1iYic4cwN9UKry7jkk', '2018-10-16 19:05:38', '2018-10-16 19:05:38'),
(2, 'miguel angel tonidandel', 'miguelatonidandel@gmail.com', '$2y$12$AwgbfcdRZBjZkbs5LsPtUOcLnlzygcKIrYuwLnfKTwlhzCx.W9I2C', 'admin', 'SCPozZhyO1qndG9T5OyKpulZIAMHgmoEoLrTvh1ST56XaNYuNSijMjsTNmrS', '2018-10-17 00:15:20', '2018-10-17 00:16:12');



INSERT INTO `categories` (`id`, `name`,`slug`, `created_at`, `updated_at`) VALUES
(1, 'Montaña','montaña', '2018-10-17 00:26:35', '2018-10-17 00:26:35'),
(2, 'Lago','lago', '2018-10-17 00:27:36', '2018-10-17 00:27:36'),
(3, 'Actividades de Rio','actividades-de-rio', '2018-10-17 00:27:49', '2018-10-17 00:27:49');

INSERT INTO `actividades` (`id`, `state`, `title`, `slug`, `volanta`, `duracion`, `largo`, `descripcion`, `recomendacion`, `precioPublico`, `descuento`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(7, '1', 'Cañón del Diamante exclusivo.', 'canon-del-diamante-exclusivo', 'Actividad exclusiva de Aventura sin Fronteras. Paisajes naturales actividades que te darán adrenalina en un gran caudal.', '0', '0', '<p><strong>Circuito de día completo, adrenalina y naturaleza se mezclan para tener una jornada cargada de sensaciones nuevas. Trekking, Rapel y Tirolesa son las actividades de aventura que realizamos en un lugar natural y calmo dentro del magnífico Cañón del Diamante. La misma incluye desayuno, almuerzo campestre y refrigerio.</strong></p>', '<p>Como en todas nuestras actividades de montaña siempre recomendamos calzado seguro y/o acordonado, ropa cómoda protector solar, repelente para insectos y mucha buena onda.</p>', '0', '0', 2, 1, '2018-11-03 19:40:11', '2019-03-29 04:16:21'),
(8, '1', 'La Frazada extremo', 'la-frazada-extremo', 'Imponente Cañón con vistas únicas en Valle Grande.', '0', '0', 'Circuito de medio día. Cargado de bellezas naturales en este se practica trekking, Rapel y Vía Ferrata esta última es un deporte que se desarrolla en Europa al término de la segunda guerra mundial, es un deporte que consiste en trepar una pared vertical con escalones artificiales con toda la seguridad correspondiente para que puedas disfrutar a pleno nuestros bellos paisajes. Incluye Traslados, deportes de aventura y refrigerio.', 'Como en todas nuestras actividades de montaña recomendamos calzado seguro y/o acordonado, protector solar 2 lts. de agua, ropa cómoda, gorra y muy buena onda.', '0', '0', 2, 1, '2018-11-03 20:04:04', '2019-03-29 04:16:21'),
(9, '1', 'Cañón del Atuel Full Day', 'canon-del-atuel-full-day', 'Nuestro hermoso Cañón del Atuel pero lleno de sensaciones que harán sentirte vivo.', '0', '0', 'Circuito de día completo. Recorremos el Nihuil desde adentro con un desayuno a orillas del lago que lleva el mismo nombre, fotos, naturaleza y vistas únicas. Luego nos adentramos en el cañón para ver un imponente paisaje que nos muestran nuestras sierras, trekking, rapel y almuerzo campestre hacen que este día quede en nuestra retina para siempre. Vivilo.', 'Recomendamos para este circuito que lleven dentro de sus pertenencias traje de baño, ropa cómoda, calzado seguro, protector solar, gorra, 2lts. de agua y mucha buena onda.', '0', '0', 2, 1, '2018-11-03 20:24:23', '2019-11-21 00:38:18'),
(10, '1', 'Noche en la montaña.', 'noche-en-la-montaña', 'Viví una experiencia única donde las estrellas se encargarán de mostrarte algo nunca antes vivido.', '0', '0', 'Circuito dos días. Aseguramos que esta experiencia nunca dejará de asombrarte. Campo y naturaleza en su estado puro hará que no dejes de sorprenderte. Actividades de turismo aventura, fogón, cena Campestre con los mejores vinos de nuestro San Rafael de bodega La Abeja. Incluye un refrigerio, cena, desayuno, deportes de aventura (trekking, rapel y tirolesa) y traslados.', 'ya que es una actividad de montaña recomendamos que lleves calzado seguro y/o acordonado, ropa cómoda, protector solar, gorra, repelente, 2lts, de agua, abrigo para la noche e impermeable por el caso de que llueva y mucha buena onda.', '0', '0', 2, 1, '2018-11-03 20:37:11', '2019-03-29 04:16:21'),
(11, '1', '\"SOSNEADO\" donde primero se ve el Sol.', 'sosneado-donde-el-sol', 'Recomendable 100% por su belleza.', '0', '0', '<p>2 días. Para nosotros uno de los lugares mas hermosos de Mendoza. Paz, Naturaleza, Río, Laguna y una inmensidad que solo la sentirás si visitas este bello lugar. Te invitamos a vivir esta experiencia única. Visitamos las ruinas del Hotel Sosneado y sus termas, Laguna el Sosneado y trekking. Servicio todo incluído, 2 desayunos, 2 almuerzos, dos refrigerios de merienda y dos cenas típicas de un día cargado de naturaleza y campo, fogón. También te proveemos de carpas y bolsas de dormir. Mínimo necesario para realizar este circuito 4 personas.</p><p><strong>Esta experiencia no te la podes perder. Consultanos.</strong></p>', '<p>Como en todas nuestras actividades de montaña siempre recomendamos calzado seguro y/o acordonado, ropa cómoda protector solar, repelente para insectos, abrigo para la noche, traje de baño para las termas, toallón, elementos de higiene personal y mucha buena onda.</p>', '0', '0', 2, 1, '2018-11-03 20:55:46', '2019-03-29 04:16:21'),
(12, '1', 'Trekking Nocturno', 'trekking-nocturno', 'Experiencia recomendable.', '0', '0', '<p>Experiencia nocturna en el que la mezcla de adrenalina y un cielo soñado permiten que nuestros sentidos gocen de un paisaje único entre cerros y arroyos. Al termino del trekking se degusta un excelente asado campestre y vinos de Bodega La Abeja. Incluye Traslados ida y vuelta, trekking con equipamientos de seguridad personal y asado campestre.</p>', 'Como en Todas nuestras actividades de montaña recomendamos ropa cómoda, calzado seguro y acordonado, 2 lts. de agua, abrigo y muy buena onda', '0', '0', 2, 1, '2019-03-09 20:37:54', '2019-11-21 00:42:29'),
(13, '1', 'Rafting natural full day', 'rafting-natural-full-day', 'Tu mejor opción.', '0', '21 Km.', 'Rafting full day es una actividad que se realiza solamente desde el mes de Septiembre hasta el mes de febrero. El recorrido total es de 21 kilómetros y en el mismo hacemos un pequeño trekking y degustamos un exquisito desayuno saludable con muchas variedades de frutas de estación, jugos y cereales. No te la podés perder.', 'Ropa adecuada para mojar según estación del año, calzado seguro y mucha buena onda para vivir una experiencia que será dificil de olvidar.', '0', '0', 2, 3, '2019-05-04 00:46:08', '2019-11-21 00:43:38');

INSERT INTO `images` (`id`, `foto`, `actividad_id`, `created_at`, `updated_at`) VALUES
(11, 'actividad_1541252411.jpg', 7, '2018-11-03 19:40:11', '2018-11-03 19:40:11'),
(12, 'actividad_1541253844.jpg', 8, '2018-11-03 20:04:04', '2018-11-03 20:04:04'),
(13, 'actividad_1541255063.jpg', 9, '2018-11-03 20:24:23', '2018-11-03 20:24:23'),
(14, 'actividad_1541255831.jpg', 10, '2018-11-03 20:37:11', '2018-11-03 20:37:11'),
(17, 'actividad_1552142274.jpg', 12, '2019-03-09 20:37:54', '2019-03-09 20:37:54'),
(20, 'actividad_1556919968.jpg', 13, '2019-05-04 00:46:09', '2019-05-04 00:46:09'),
(21, 'actividad_1572960805.jpg', 11, '2019-11-05 16:33:25', '2019-11-05 16:33:25');
