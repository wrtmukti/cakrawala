-- MySQL dump 10.13  Distrib 5.7.39, for osx11.0 (x86_64)
--
-- Host: 127.0.0.1    Database: cakrawala_db
-- ------------------------------------------------------
-- Server version	5.7.26-1+b1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `award`
--

DROP TABLE IF EXISTS `award`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `award` (
  `id_award` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_file` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_award`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `award`
--

LOCK TABLES `award` WRITE;
/*!40000 ALTER TABLE `award` DISABLE KEYS */;
INSERT INTO `award` VALUES (1,'Penghargaan PT. Cakrawala Pratama Manunggal','award1.jpg','2024-01-22 14:31:39','2024-01-22 14:31:39'),(2,'Sertifikat Silver','sertif_silver.jpg','2024-01-22 14:31:39','2024-01-22 14:31:39'),(3,'Sertifikat Gold','sertif_gold.jpg','2024-01-22 14:31:39','2024-01-22 14:31:39');
/*!40000 ALTER TABLE `award` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collaboration`
--

DROP TABLE IF EXISTS `collaboration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `collaboration` (
  `id_collaboration` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_file` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_collaboration`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collaboration`
--

LOCK TABLES `collaboration` WRITE;
/*!40000 ALTER TABLE `collaboration` DISABLE KEYS */;
INSERT INTO `collaboration` VALUES (1,'PPJB Notaris','Proses PPJB Bersama Notaris','1.jpg','2024-01-22 14:31:39','2024-01-22 14:31:39'),(2,'Survei BPN','Survei Bekerjasama Dengan BPN','2.jpg','2024-01-22 14:31:39','2024-01-22 14:31:39'),(3,'PDAM Kabupaten Sukoharjo','Bekerjasama Dengan PDAM Kabupaten Sukoharjo','3.jpg','2024-01-22 14:31:39','2024-01-22 14:31:39'),(4,'Musyawarah Warga','Musyawarah Dengan Warga Setempat','4.jpg','2024-01-22 14:31:39','2024-01-22 14:31:39'),(5,'Bank BTN','Event Dengan Bank BTN','5.jpg','2024-01-22 14:31:39','2024-01-22 14:31:39'),(6,'BTN dan TAPERA','Event Bersama BTN dan TAPERA','6.jpg','2024-01-22 14:31:39','2024-01-22 14:31:39'),(7,'Akad Bank Masal','Akad Bank Masal PT. Cakrawala Pratama Manunggal','7.jpg','2024-01-22 14:31:39','2024-01-22 14:31:39'),(8,'Kelurahan Setempat','Bekerja Sama Dengan Kelurahan Setempat','8.jpg','2024-01-22 14:31:39','2024-01-22 14:31:39'),(9,'Doa Bersama','Prosesi Doa Bersama Pembukaan Lahan','9.jpg','2024-01-22 14:31:39','2024-01-22 14:31:39');
/*!40000 ALTER TABLE `collaboration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_bio`
--

DROP TABLE IF EXISTS `company_bio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_bio` (
  `id_company_bio` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_nickname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_maps` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iframe_maps` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_thumbnail` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_company_bio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_bio`
--

LOCK TABLES `company_bio` WRITE;
/*!40000 ALTER TABLE `company_bio` DISABLE KEYS */;
INSERT INTO `company_bio` VALUES (1,'PT. Cakrawala Pratama Manunggal','Cakrawala','Jl. Raya Solo - Purwodadi KM 12,5, Mandan, Kec. Sukoharjo, Kabupaten Sukoharjo, Jawa Tengah 57554','https://maps.app.goo.gl/uCBpEYfiQLPQNNWT8','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63282.313786208775!2d110.77761244860885!3d-7.5592070683129915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16627ad11ab1%3A0xe7fe4e0454bc3095!2sSurakarta%2C%20Kota%20Surakarta%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1705082053182!5m2!1sid!2sid','cakrawalapratamamanunggalresmi@gmail.com','6281234567890','6281234567890',NULL,NULL,NULL,'https://youtu.be/kQaOKLKyYvY','about2.png','logo_app.png','2024-01-22 14:31:39','2024-01-24 20:38:53');
/*!40000 ALTER TABLE `company_bio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `img_poster`
--

DROP TABLE IF EXISTS `img_poster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `img_poster` (
  `id_img_poster` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_project` bigint(20) unsigned NOT NULL,
  `img_file` text COLLATE utf8mb4_unicode_ci,
  `carousel_active` enum('Y','N') COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_img_poster`),
  KEY `img_poster_id_project_foreign` (`id_project`),
  CONSTRAINT `img_poster_id_project_foreign` FOREIGN KEY (`id_project`) REFERENCES `projects` (`id_project`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `img_poster`
--

LOCK TABLES `img_poster` WRITE;
/*!40000 ALTER TABLE `img_poster` DISABLE KEYS */;
INSERT INTO `img_poster` VALUES (1,1,'cru1.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(2,2,'cru2.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(3,3,'cru3.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(4,4,'cru4.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(5,5,'cru5.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(6,6,'cru6.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(7,7,'cru7.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39');
/*!40000 ALTER TABLE `img_poster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `img_siteplan`
--

DROP TABLE IF EXISTS `img_siteplan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `img_siteplan` (
  `id_img_siteplan` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_project` bigint(20) unsigned NOT NULL,
  `img_file` text COLLATE utf8mb4_unicode_ci,
  `carousel_active` enum('Y','N') COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_img_siteplan`),
  KEY `img_siteplan_id_project_foreign` (`id_project`),
  CONSTRAINT `img_siteplan_id_project_foreign` FOREIGN KEY (`id_project`) REFERENCES `projects` (`id_project`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `img_siteplan`
--

LOCK TABLES `img_siteplan` WRITE;
/*!40000 ALTER TABLE `img_siteplan` DISABLE KEYS */;
INSERT INTO `img_siteplan` VALUES (1,1,'cru1.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(2,2,'cru2.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(3,3,'cru3.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(4,4,'cru4.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(5,5,'cru5.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(6,6,'cru6.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(7,7,'cru7.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39');
/*!40000 ALTER TABLE `img_siteplan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `img_type`
--

DROP TABLE IF EXISTS `img_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `img_type` (
  `id_img_type` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_project` bigint(20) unsigned NOT NULL,
  `img_file` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carousel_active` enum('Y','N') COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_img_type`),
  KEY `img_type_id_project_foreign` (`id_project`),
  CONSTRAINT `img_type_id_project_foreign` FOREIGN KEY (`id_project`) REFERENCES `projects` (`id_project`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `img_type`
--

LOCK TABLES `img_type` WRITE;
/*!40000 ALTER TABLE `img_type` DISABLE KEYS */;
INSERT INTO `img_type` VALUES (1,1,'cru1.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(2,2,'cru2.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(3,3,'cru3.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(4,4,'cru4.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(5,5,'cru5.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(6,6,'cru6.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39'),(7,7,'cru7.jpg','Y','2024-01-22 14:31:39','2024-01-22 14:31:39');
/*!40000 ALTER TABLE `img_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (16,'2014_10_12_000000_create_users_table',1),(17,'2014_10_12_100000_create_password_resets_table',1),(18,'2019_08_19_000000_create_failed_jobs_table',1),(19,'2019_12_14_000001_create_personal_access_tokens_table',1),(20,'2024_01_18_024436_create_project_table',1),(21,'2024_01_18_025637_create_img_poster',1),(22,'2024_01_18_025650_create_img_type',1),(23,'2024_01_18_025659_create_img_siteplan',1),(24,'2024_01_18_031146_update_project_table',1),(25,'2024_01_18_032432_update_projects_table',1),(26,'2024_01_18_043520_delete_table_type',1),(27,'2024_01_18_073944_create_company_bio_table',1),(28,'2024_01_18_075008_update_company_bio_table',1),(29,'2024_01_18_084807_create_collaboration_table',1),(30,'2024_01_18_092403_create_award_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id_project` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_maps` text COLLATE utf8mb4_unicode_ci,
  `iframe_maps` text COLLATE utf8mb4_unicode_ci,
  `project_desc` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'Cakrawala Utama Residence 1','Jarakan Rt02/03, Jarakan, Mandan, Kec. Sukoharjo, Kabupaten Sukoharjo, Jawa Tengah 57516','https://maps.app.goo.gl/93pyNk8v32cZCrMn8','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.7937814937923!2d110.8315329!3d-7.7052654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3b83f6e8f059%3A0x860056744bff0f89!2sCakrawala%20Utama%20Residence%201!5e0!3m2!1sid!2sid!4v1706113314369!5m2!1sid!2sid','Free Kitchen Set Atas','2024-01-22 14:31:39','2024-01-24 23:22:48',NULL,'30/60','900 ribu'),(2,'Cakrawala Utama Residence 2','Jarakan, Mandan, Kec. Sukoharjo, Kabupaten Sukoharjo, Jawa Tengah 57551','https://maps.app.goo.gl/KYqVpiL3CUjdsZhK8','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.785900097936!2d110.83136979999999!3d-7.706109499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3be140713e95%3A0x67a1552069d808dc!2sPerumahan%20Cakrawala%20Utama%20Residence%202!5e0!3m2!1sid!2sid!4v1706113407220!5m2!1sid!2sid','Free Kitchen Set Atas','2024-01-22 14:31:39','2024-01-24 23:23:46',NULL,'30/60','900 ribu'),(3,'Cakrawala Utama Residence 3','Jl. Gawok, Sawah, Jati, Kec. Baki, Kabupaten Sukoharjo, Jawa Tengah','https://maps.app.goo.gl/EV3ww76yqTHFzuBM9','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.6166306511336!2d110.7659338!3d-7.616626400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3f2961f1b7bf%3A0x1acf1ac7eaa9923e!2sCakrawala%20Utama%20Residence%203!5e0!3m2!1sid!2sid!4v1706113472436!5m2!1sid!2sid','Free Kanopi Depan','2024-01-22 14:31:39','2024-01-24 23:26:26',NULL,'30/60','1 Juta'),(4,'Cakrawala Utama Residence 4','Gekeng, Karangturi, Kec. Gondangrejo, Kabupaten Karanganyar, Jawa Tengah 57188','https://maps.app.goo.gl/6D9t73hdmx2TQcuw6','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.530289431786!2d110.864037!3d-7.516988000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a11a700ed0deb%3A0xfe399dd28e32026c!2sCAKRAWALA%20UTAMA%20RESIDENCE%204!5e0!3m2!1sid!2sid!4v1706113552428!5m2!1sid!2sid','Free Kanopi Depan','2024-01-22 14:31:39','2024-01-24 23:26:18',NULL,'34/60','1 Juta'),(5,'Cakrawala Utama Residence 5','Gekeng, Karangturi, Kec. Gondangrejo, Kabupaten Karanganyar, Jawa Tengah 57188','https://maps.app.goo.gl/34PBhuvNPY4QmqeE6','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.530289431786!2d110.864037!3d-7.516988000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a11a700ed0deb%3A0xfe399dd28e32026c!2sCAKRAWALA%20UTAMA%20RESIDENCE%204!5e0!3m2!1sid!2sid!4v1706113552428!5m2!1sid!2sid','Free Kanopi Depan','2024-01-22 14:31:39','2024-01-24 23:28:23',NULL,'30/60','1 Juta'),(6,'Cakrawala Utama Residence 6','Dusun III, Kwangen, Kec. Gemolong, Kabupaten Sragen, Jawa Tengah 50274','https://maps.app.goo.gl/iZ42nGMBiZAUkREQ9','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.7201763045196!2d110.8254341!3d-7.3852224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a0f8ac2c82837%3A0x894981b53ba5bf08!2sCAKRAWALA%20UTAMA%20RESIDENCE%206!5e0!3m2!1sid!2sid!4v1706113777261!5m2!1sid!2sid','Free Kanopi Depan','2024-01-22 14:31:39','2024-01-24 23:30:04',NULL,'34/60','1 Juta'),(7,'Cakrawala Utama Residence 7','Sawah, Jetis, Kec. Baki, Kabupaten Sukoharjo, Jawa Tengah','https://maps.app.goo.gl/MWRUEssQb5xyTo6o6?g_st=ic','https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3954.6185874043335!2d110.76211097500332!3d-7.616414392398898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMzYnNTkuMSJTIDExMMKwNDUnNTIuOSJF!5e0!3m2!1sid!2sid!4v1706113872137!5m2!1sid!2sid','Free Kanopi Depan','2024-01-22 14:31:39','2024-01-24 23:31:35',NULL,'30/60','1 Juta');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'cakrawalaadminckwyogyakarta','cakrawalaadminckwyogyakarta2024@gmail.com',NULL,'$2y$10$z8ogc9D0IWD8D/g2xL.nSOJUUmd.IncPSJStf8M3gKomB1KZ2j9I.',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cakrawala_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-24 23:43:07
