-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

USE `u276871878_pacientes`;

-- Volcando estructura para tabla u276871878_pacientes.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla u276871878_pacientes.migrations: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(2, '2022_02_23_045822_create_u276871878_pacientes_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla u276871878_pacientes.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_sangre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pacientes_dni_unique` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla u276871878_pacientes.pacientes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` (`id`, `nombres`, `apellidos`, `edad`, `sexo`, `dni`, `tipo_sangre`, `telefono`, `correo`, `direccion`, `created_at`, `updated_at`) VALUES
	(1, 'Alex Oscar', 'Gamarra Solis', '28', 'Masculino', '70218511', 'A+', '943124351', 'alex@gmail.com', 'Jr. Ramón Castilla 110', '2022-02-23 01:04:39', '2022-02-23 01:04:39'),
	(2, 'María Perla', 'Saruc Main', '34', 'Femenino', '80218522', 'A-', '952312435', 'maria@gmail.com', 'Jr. Manuel Ruíz 230', '2022-02-23 01:04:39', '2022-02-23 01:04:39'),
	(3, 'Julio Ramón', 'Quiroga Hasher', '52', 'Masculino', '23219913', 'A+', '977123331', 'julio@gmail.com', 'Jr. Enrique Palacios 202', '2022-02-23 01:04:39', '2022-02-23 01:04:39'),
	(4, 'Mario Idalgo', 'Cuerbo Nieto', '18', 'Masculino', '80218511', 'B+', '932112351', 'mario@gmail.com', 'Jr. Manuel Ruiz 800', '2022-02-23 01:04:39', '2022-02-23 01:04:39'),
	(5, 'María Rosa', 'Jara Uri', '40', 'Femenino', '62215777', 'AB+', '951774351', 'maría@gmail.com', 'Jr. Ramón Castilla 401', '2022-02-23 01:04:39', '2022-02-23 01:04:39'),
	(6, 'Kevin Juan', 'Rodriguez Ezquivel', '49', 'Masculino', '78218555', 'A+', '934994351', 'kevin@gmail.com', 'Jr. Alfonso Ugarte 2020', '2022-02-23 01:04:39', '2022-02-23 01:04:39'),
	(7, 'Cielo Celeste', 'Lázaro Peterson', '50', 'Femenino', '23888591', 'A-', '971661152', 'cielo@gmail.com', 'Jr. Francisco Bolognesi', '2022-02-23 01:04:39', '2022-02-23 01:04:39');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
