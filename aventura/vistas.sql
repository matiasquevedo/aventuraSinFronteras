-- MySQL dump 10.13  Distrib 8.0.15, for macos10.14 (x86_64)
--
-- Host: localhost    Database: aventura_plataforma
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary view structure for view `actividadespaquetes`
--

DROP TABLE IF EXISTS `actividadespaquetes`;
/*!50001 DROP VIEW IF EXISTS `actividadespaquetes`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8mb4;
/*!50001 CREATE VIEW `actividadespaquetes` AS SELECT 
 1 AS `id`,
 1 AS `title`,
 1 AS `descripcion`,
 1 AS `recomendacion`,
 1 AS `actividad_id`,
 1 AS `paquete_id`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `actividadespostview`
--

DROP TABLE IF EXISTS `actividadespostview`;
/*!50001 DROP VIEW IF EXISTS `actividadespostview`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8mb4;
/*!50001 CREATE VIEW `actividadespostview` AS SELECT 
 1 AS `id`,
 1 AS `title`,
 1 AS `slug`,
 1 AS `volanta`,
 1 AS `descripcion`,
 1 AS `recomendacion`,
 1 AS `duracion`,
 1 AS `largo`,
 1 AS `state`,
 1 AS `foto`,
 1 AS `name`,
 1 AS `created_at`,
 1 AS `updated_at`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `categoryactividadespost`
--

DROP TABLE IF EXISTS `categoryactividadespost`;
/*!50001 DROP VIEW IF EXISTS `categoryactividadespost`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8mb4;
/*!50001 CREATE VIEW `categoryactividadespost` AS SELECT 
 1 AS `actividades`,
 1 AS `foto`,
 1 AS `state`,
 1 AS `slug`,
 1 AS `volanta`,
 1 AS `title`,
 1 AS `precioPublico`,
 1 AS `descuento`,
 1 AS `name`,
 1 AS `category_id`,
 1 AS `created_at`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `informacionespost`
--

DROP TABLE IF EXISTS `informacionespost`;
/*!50001 DROP VIEW IF EXISTS `informacionespost`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8mb4;
/*!50001 CREATE VIEW `informacionespost` AS SELECT 
 1 AS `id`,
 1 AS `title`,
 1 AS `descripcion`,
 1 AS `state`,
 1 AS `name`,
 1 AS `created_at`,
 1 AS `updated_at`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `paquetespostview`
--

DROP TABLE IF EXISTS `paquetespostview`;
/*!50001 DROP VIEW IF EXISTS `paquetespostview`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8mb4;
/*!50001 CREATE VIEW `paquetespostview` AS SELECT 
 1 AS `id`,
 1 AS `state`,
 1 AS `title`,
 1 AS `slug`,
 1 AS `descripcion`,
 1 AS `precioCliente`,
 1 AS `descuento`,
 1 AS `fechaInicio`,
 1 AS `fechaTermino`,
 1 AS `user_id`,
 1 AS `created_at`,
 1 AS `updated_at`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `actividadespaquetes`
--

/*!50001 DROP VIEW IF EXISTS `actividadespaquetes`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `actividadespaquetes` AS select `actividades`.`id` AS `id`,`actividades`.`title` AS `title`,`actividades`.`descripcion` AS `descripcion`,`actividades`.`recomendacion` AS `recomendacion`,`actividadpaquete`.`actividad_id` AS `actividad_id`,`actividadpaquete`.`paquete_id` AS `paquete_id` from (`actividades` join `actividadpaquete`) where (`actividadpaquete`.`actividad_id` = `actividades`.`id`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `actividadespostview`
--

/*!50001 DROP VIEW IF EXISTS `actividadespostview`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `actividadespostview` AS select `actividades`.`id` AS `id`,`actividades`.`title` AS `title`,`actividades`.`slug` AS `slug`,`actividades`.`volanta` AS `volanta`,`actividades`.`descripcion` AS `descripcion`,`actividades`.`recomendacion` AS `recomendacion`,`actividades`.`duracion` AS `duracion`,`actividades`.`largo` AS `largo`,`actividades`.`state` AS `state`,`images`.`foto` AS `foto`,`categories`.`name` AS `name`,`actividades`.`created_at` AS `created_at`,`actividades`.`updated_at` AS `updated_at` from ((`actividades` join `images`) join `categories`) where ((`actividades`.`state` = '1') and (`categories`.`id` = `actividades`.`category_id`) and (`images`.`actividad_id` = `actividades`.`id`)) order by `actividades`.`updated_at` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `categoryactividadespost`
--

/*!50001 DROP VIEW IF EXISTS `categoryactividadespost`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `categoryactividadespost` AS select `actividades`.`id` AS `actividades`,`images`.`foto` AS `foto`,`actividades`.`state` AS `state`,`actividades`.`slug` AS `slug`,`actividades`.`volanta` AS `volanta`,`actividades`.`title` AS `title`,`actividades`.`precioPublico` AS `precioPublico`,`actividades`.`descuento` AS `descuento`,`categories`.`name` AS `name`,`categories`.`id` AS `category_id`,`actividades`.`created_at` AS `created_at` from ((`actividades` join `categories`) join `images`) where ((`actividades`.`state` = '1') and (`categories`.`id` = `actividades`.`category_id`) and (`images`.`actividad_id` = `actividades`.`id`)) order by `images`.`actividad_id` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `informacionespost`
--

/*!50001 DROP VIEW IF EXISTS `informacionespost`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `informacionespost` AS select `informaciones`.`id` AS `id`,`informaciones`.`title` AS `title`,`informaciones`.`descripcion` AS `descripcion`,`informaciones`.`state` AS `state`,`categories`.`name` AS `name`,`informaciones`.`created_at` AS `created_at`,`informaciones`.`updated_at` AS `updated_at` from (`informaciones` join `categories`) where ((`informaciones`.`state` = '1') and (`categories`.`id` = `informaciones`.`category_id`)) order by `informaciones`.`updated_at` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `paquetespostview`
--

/*!50001 DROP VIEW IF EXISTS `paquetespostview`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `paquetespostview` AS select `paquetes`.`id` AS `id`,`paquetes`.`state` AS `state`,`paquetes`.`title` AS `title`,`paquetes`.`slug` AS `slug`,`paquetes`.`descripcion` AS `descripcion`,`paquetes`.`precioCliente` AS `precioCliente`,`paquetes`.`descuento` AS `descuento`,`paquetes`.`fechaInicio` AS `fechaInicio`,`paquetes`.`fechaTermino` AS `fechaTermino`,`paquetes`.`user_id` AS `user_id`,`paquetes`.`created_at` AS `created_at`,`paquetes`.`updated_at` AS `updated_at` from `paquetes` where (`paquetes`.`state` = '1') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-28 22:26:05
