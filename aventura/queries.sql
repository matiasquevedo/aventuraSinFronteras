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


INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Montaña', '2018-10-17 00:26:35', '2018-10-17 00:26:35'),
(2, 'Lago', '2018-10-17 00:27:36', '2018-10-17 00:27:36'),
(3, 'Actividades de Rio', '2018-10-17 00:27:49', '2018-10-17 00:27:49');

INSERT INTO `actividades` (`id`, `state`, `title`, `volanta`, `duracion`, `largo`, `descripcion`, `recomendacion`, `precioPublico`, `descuento`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, '0', 'Natural Rafting', 'Rafting de 21 kilómetros con Trekking y desayuno de frutas de estación.', '240', '21', 'Rafting único por su duración y su vista. Hermosa bajada de Rafting por el río Atuel de 21 kilómetros de recorrido, donde realizamos un trekking de 40 minutos y compartimos un refrigerio saludable con frutas de estación, cereales y jugo de frutas. Actividad recomendable para familias y grupos de amigos.', 'Para realizar esta actividad de forma 100% segura es necesario calzado seguro (acordonado o de neopreno) ropa de recambio y protector solar. Esta actividad no es recomendable para Mujeres embarazadas y niños de menos de 4 años.', '0', '0', 2, 3, '2018-10-23 00:11:00', '2018-10-27 18:57:07'),
(7, '0', 'Cañón del Diamante exclusivo.', 'Actividad exclusiva de Aventura sin Fronteras. Paisajes naturales actividades que te darán adrenalina en un gran caudal.', '0', '0', '<p><strong>Circuito de día completo, adrenalina y naturaleza se mezclan para tener una jornada cargada de sensaciones nuevas. Trekking, Rapel y Tirolesa son las actividades de aventura que realizamos en un lugar natural y calmo dentro del magnífico Cañón del Diamante. La misma incluye desayuno, almuerzo campestre y refrigerio.</strong></p>', '<p>Como en todas nuestras actividades de montaña siempre recomendamos calzado seguro y/o acordonado, ropa cómoda protector solar, repelente para insectos y mucha buena onda.</p>', '0', '0', 2, 1, '2018-11-03 16:40:11', '2018-11-03 17:40:56'),
(8, '0', 'La Frazada extremo', 'Imponente Cañón con vistas únicas en Valle Grande.', '0', '0', 'Circuito de medio día. Cargado de bellezas naturales en este se practica trekking, Rapel y Vía Ferrata esta última es un deporte que se desarrolla en Europa al término de la segunda guerra mundial, es un deporte que consiste en trepar una pared vertical con escalones artificiales con toda la seguridad correspondiente para que puedas disfrutar a pleno nuestros bellos paisajes. Incluye Traslados, deportes de aventura y refrigerio.', 'Como en todas nuestras actividades de montaña recomendamos calzado seguro y/o acordonado, protector solar 2 lts. de agua, ropa cómoda, gorra y muy buena onda.', '0', '0', 2, 1, '2018-11-03 17:04:04', '2018-11-03 17:04:04'),
(9, '0', 'Cañón del Atuel Full Day', 'Nuestro hermoso Cañón del Atuel pero lleno de sensaciones que harán sentirte vivo.', '0', '0', 'Circuito de día completo. Recorremos el Nihuil desde adentro con un desayuno a orillas del lago que lleva el mismo nombre, fotos, naturaleza y vistas únicas. Luego nos adentramos en el cañón para ver un imponente paisaje que nos muestran nuestras sierras, trekking, rapel y almuerzo campestre hacen que este día quede en nuestra retina para siempre. Vivilo.', 'Recomendamos para este circuito que lleven dentro de sus pertenencias traje de baño, ropa cómoda, calzado seguro, protector solar, gorra, 2lts. de agua y mucha buena onda.', '0', '0', 2, 1, '2018-11-03 17:24:23', '2018-11-03 17:24:23'),
(10, '0', 'Noche en la montaña.', 'Viví una experiencia única donde las estrellas se encargarán de mostrarte algo nunca antes vivido.', '0', '0', 'Circuito dos días. Aseguramos que esta experiencia nunca dejará de asombrarte. Campo y naturaleza en su estado puro hará que no dejes de sorprenderte. Actividades de turismo aventura, fogón, cena Campestre con los mejores vinos de nuestro San Rafael de bodega La Abeja. Incluye un refrigerio, cena, desayuno, deportes de aventura (trekking, rapel y tirolesa) y traslados.', 'ya que es una actividad de montaña recomendamos que lleves calzado seguro y/o acordonado, ropa cómoda, protector solar, gorra, repelente, 2lts, de agua, abrigo para la noche e impermeable por el caso de que llueva y mucha buena onda.', '0', '0', 2, 1, '2018-11-03 17:37:11', '2018-11-03 17:37:11'),
(11, '0', '\"SOSNEADO\" donde primero se ve el Sol.', 'Recomendable 100% por su belleza.', '0', '0', '<p>2 días. Para nosotros uno de los lugares mas hermosos de Mendoza. Paz, Naturaleza, Río, Laguna y una inmensidad que solo la sentirás si visitas este bello lugar. Te invitamos a vivir esta experiencia única. Visitamos las ruinas del Hotel Sosneado y sus termas, Laguna el Sosneado y trekking. Servicio todo incluído, 2 desayunos, 2 almuerzos, dos refrigerios de merienda y dos cenas típicas de un día cargado de naturaleza y campo, fogón. También te proveemos de carpas y bolsas de dormir. Mínimo necesario para realizar este circuito 4 personas.</p><p><strong>Esta experiencia no te la podes perder. Consultanos.</strong></p>', '<p>Como en todas nuestras actividades de montaña siempre recomendamos calzado seguro y/o acordonado, ropa cómoda protector solar, repelente para insectos, abrigo para la noche, traje de baño para las termas, toallón, elementos de higiene personal y mucha buena onda.</p>', '0', '0', 2, 1, '2018-11-03 17:55:46', '2019-03-09 17:10:17'),
(12, '0', 'Trekking Nocturno', 'Experiencia recomendable.', '0', '0', '<p>Experiencia nocturna en el que la mezcla de adrenalina y un cielo soñado permiten que nuestros sentidos gocen de un paisaje único entre cerros y arroyos. Al termino del trekking se degusta un excelente asado campestre y vinos de Bodega La Abeja. Incluye Traslados ida y vuelta, trekking con equipamientos de seguridad personal y asado campestre.</p>', 'Como en Todas nuestras actividades de montaña recomendamos ropa cómoda, calzado seguro y acordonado, 2 lts. de agua, abrigo y muy buena onda', '0', '0', 2, 3, '2019-03-09 17:37:54', '2019-03-09 17:37:54');

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