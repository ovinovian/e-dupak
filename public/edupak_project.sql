-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for edupak-project
CREATE DATABASE IF NOT EXISTS `edupak-project` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `edupak-project`;

-- Dumping data for table edupak-project.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table edupak-project.migrations: ~6 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_12_26_032700_create_permission_tables', 1),
	(6, '2022_12_26_032914_create_products_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table edupak-project.model_has_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Dumping data for table edupak-project.model_has_roles: ~1 rows (approximately)
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Dumping data for table edupak-project.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table edupak-project.permissions: ~8 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'role-list', 'web', '2022-12-26 03:44:35', '2022-12-26 03:44:35'),
	(2, 'role-create', 'web', '2022-12-26 03:44:36', '2022-12-26 03:44:36'),
	(3, 'role-edit', 'web', '2022-12-26 03:44:36', '2022-12-26 03:44:36'),
	(4, 'role-delete', 'web', '2022-12-26 03:44:36', '2022-12-26 03:44:36'),
	(5, 'product-list', 'web', '2022-12-26 03:44:36', '2022-12-26 03:44:36'),
	(6, 'product-create', 'web', '2022-12-26 03:44:36', '2022-12-26 03:44:36'),
	(7, 'product-edit', 'web', '2022-12-26 03:44:36', '2022-12-26 03:44:36'),
	(8, 'product-delete', 'web', '2022-12-26 03:44:36', '2022-12-26 03:44:36');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping data for table edupak-project.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping data for table edupak-project.products: ~0 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping data for table edupak-project.roles: ~1 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'web', '2022-12-26 03:48:33', '2022-12-26 03:48:33');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping data for table edupak-project.role_has_permissions: ~8 rows (approximately)
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Dumping data for table edupak-project.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Hardik Savani', 'admin@gmail.com', NULL, '$2y$10$abONWAwvZaS9ArTjF.UICeCOMgos2CLZNir07IEx8aL9jAlWnPpfi', NULL, '2022-12-26 03:48:33', '2022-12-27 00:59:58'),
	(2, 'Ovi Novian', 'ovi.novian@babelprov.go.id', NULL, '$2y$10$8auEVslIygLu9zxVELaCEuBh5vM/KVGP0Spz4qB//NfBEBqypYRqa', NULL, '2022-12-26 06:02:32', '2022-12-26 06:02:32');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
