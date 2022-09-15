-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: cmmfi
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `application_forms`
--

DROP TABLE IF EXISTS `application_forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `application_forms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `scheme_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proposal_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proposal_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_of_proposee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_of_proposee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_outcome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_outlay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eligible_bank_loan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_receipt_date` date DEFAULT NULL,
  `amount_sanctioned` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_sanction` date DEFAULT NULL,
  `subsidy_claimed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subsidy_received` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `margin_money` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_for_delay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application_forms`
--

LOCK TABLES `application_forms` WRITE;
/*!40000 ALTER TABLE `application_forms` DISABLE KEYS */;
/*!40000 ALTER TABLE `application_forms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bank_masters`
--

DROP TABLE IF EXISTS `bank_masters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bank_masters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank_masters`
--

LOCK TABLES `bank_masters` WRITE;
/*!40000 ALTER TABLE `bank_masters` DISABLE KEYS */;
/*!40000 ALTER TABLE `bank_masters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dept_masters`
--

DROP TABLE IF EXISTS `dept_masters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dept_masters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dept_masters`
--

LOCK TABLES `dept_masters` WRITE;
/*!40000 ALTER TABLE `dept_masters` DISABLE KEYS */;
INSERT INTO `dept_masters` VALUES (1,'Vety & AH',NULL,NULL),(2,'Agriculture',NULL,NULL),(3,'Horticulture',NULL,NULL),(4,'Industries & Commerce',NULL,NULL);
/*!40000 ALTER TABLE `dept_masters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disbursements`
--

DROP TABLE IF EXISTS `disbursements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `disbursements` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_disbursement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_disbursed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subsidy_credited_to_loan_ac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disbursements`
--

LOCK TABLES `disbursements` WRITE;
/*!40000 ALTER TABLE `disbursements` DISABLE KEYS */;
/*!40000 ALTER TABLE `disbursements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `district_masters`
--

DROP TABLE IF EXISTS `district_masters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `district_masters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lgd_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `district_masters`
--

LOCK TABLES `district_masters` WRITE;
/*!40000 ALTER TABLE `district_masters` DISABLE KEYS */;
INSERT INTO `district_masters` VALUES (1,'Chumukedima',NULL,NULL,NULL),(2,'Dimapur',NULL,NULL,NULL),(3,'Kiphire',NULL,NULL,NULL),(4,'Kohima',NULL,NULL,NULL),(5,'Longleng',NULL,NULL,NULL),(6,'Mokokchung',NULL,NULL,NULL),(7,'Mon',NULL,NULL,NULL),(8,'Noklak',NULL,NULL,NULL),(9,'Niuland',NULL,NULL,NULL),(10,'Peren',NULL,NULL,NULL),(11,'Phek',NULL,NULL,NULL),(12,'Shamator',NULL,NULL,NULL),(13,'Tuensang',NULL,NULL,NULL),(14,'Wokha',NULL,NULL,NULL),(15,'Zunheboto',NULL,NULL,NULL),(16,'Tseminyu',NULL,NULL,NULL);
/*!40000 ALTER TABLE `district_masters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `grievance_transfer_logs`
--

DROP TABLE IF EXISTS `grievance_transfer_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grievance_transfer_logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `grievance_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_dept` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_dept` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grievance_transfer_logs`
--

LOCK TABLES `grievance_transfer_logs` WRITE;
/*!40000 ALTER TABLE `grievance_transfer_logs` DISABLE KEYS */;
INSERT INTO `grievance_transfer_logs` VALUES (1,'1','3','1','2022-09-15 09:37:39','2022-09-15 09:37:39'),(2,'1','1','3','2022-09-15 09:41:38','2022-09-15 09:41:38');
/*!40000 ALTER TABLE `grievance_transfer_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grievances`
--

DROP TABLE IF EXISTS `grievances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grievances` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scheme_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grievances`
--

LOCK TABLES `grievances` WRITE;
/*!40000 ALTER TABLE `grievances` DISABLE KEYS */;
INSERT INTO `grievances` VALUES (1,'Jolene Roth','Dolore consequatur','maky@mailinator.com','6','3','8','Aut quam at tenetur','2022-09-15 09:00:52','2022-09-15 09:41:38');
/*!40000 ALTER TABLE `grievances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_08_30_100911_create_scheme_masters_table',1),(6,'2022_08_30_101109_create_dept_masters_table',1),(7,'2022_08_30_101300_create_grievances_table',1),(8,'2022_08_30_101442_create_district_masters_table',1),(9,'2022_08_30_124222_create_application_forms_table',1),(10,'2022_09_15_082417_create_bank_masters_table',1),(11,'2022_09_15_085115_create_misutilizations_table',1),(12,'2022_09_15_085325_create_subsidies_table',1),(13,'2022_09_15_112202_create_disbursements_table',1),(14,'2022_09_15_145952_create_grievance_transfer_logs_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `misutilizations`
--

DROP TABLE IF EXISTS `misutilizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `misutilizations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scheme_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount_released` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_last_release` date DEFAULT NULL,
  `repayment_due` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac_regular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_visit` date DEFAULT NULL,
  `utilized` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nature_misutilization` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `misutilizations`
--

LOCK TABLES `misutilizations` WRITE;
/*!40000 ALTER TABLE `misutilizations` DISABLE KEYS */;
/*!40000 ALTER TABLE `misutilizations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
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
-- Table structure for table `scheme_masters`
--

DROP TABLE IF EXISTS `scheme_masters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `scheme_masters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `scheme_name` text COLLATE utf8mb4_unicode_ci,
  `dept_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scheme_masters`
--

LOCK TABLES `scheme_masters` WRITE;
/*!40000 ALTER TABLE `scheme_masters` DISABLE KEYS */;
INSERT INTO `scheme_masters` VALUES (1,'Construction of Circular Eco-hatchery','1',NULL,NULL,NULL),(2,'Rejuvenation of Animal Husbandry (dairy, piggery, goat, poultry, duckery)','1',NULL,NULL,NULL),(3,'Integrated Farming System','2',NULL,NULL,NULL),(4,'Zero Energy Cold Storage','2',NULL,NULL,NULL),(5,'Solar Cold Storage','2',NULL,NULL,NULL),(6,'Procurement of Transport Vehicle for agriculture products (Refrigerated and Non-Refrigerated)','2',NULL,NULL,NULL),(7,'Post-Harvest processing Units','2',NULL,NULL,NULL),(8,'Value Addition units for Multi Horticulture product','3',NULL,NULL,NULL),(9,'Micro Finance Scheme for Micro-enterprises (Hostel, Vocational Training Institute, Logistics & Mobile Food Services, Gym/Fitness Centre, Home Stays)','4',NULL,NULL,NULL);
/*!40000 ALTER TABLE `scheme_masters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subsidies`
--

DROP TABLE IF EXISTS `subsidies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subsidies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dlic_meeting_date` date DEFAULT NULL,
  `rate_of_receipt_applications` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_applications_received` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_loan_sanctioned` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_eligible_subsidy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_claim_subsidy` date DEFAULT NULL,
  `date_receipt_subsidy` date DEFAULT NULL,
  `amount_subsidy_released` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_subsidy_outstanding` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subsidies`
--

LOCK TABLES `subsidies` WRITE;
/*!40000 ALTER TABLE `subsidies` DISABLE KEYS */;
/*!40000 ALTER TABLE `subsidies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_mobile_unique` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Lungdsuo Mozhui','mozhui.lungdsuo@gmail.com','9366206916',NULL,'$2y$10$HU8yCdY3pRh949jUO0/WQe/9ldRxWkDsvsJ37k5Jwyl8X1MLoUMhO','ADMIN',NULL,NULL,NULL,'2022-09-15 08:51:34','2022-09-15 08:51:34');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-15 20:42:40
