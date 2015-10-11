-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2015 at 10:43 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forge`
--

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE IF NOT EXISTS `features` (
  `feature_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `screens` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption` text COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`feature_id`),
  KEY `features_section_id_foreign` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`feature_id`, `section_id`, `title`, `description`, `screens`, `caption`, `order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 'Login', 'Login', 'Login', 'Login', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, 1, 'Forgot Password', 'Forgot Password', 'Forgot Password', 'Forgot Password', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(4, 1, 'Settings', 'Settings', 'Settings', 'Settings', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(5, 1, 'Change Email', 'Change Email', 'Change Email', 'Change Email', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(6, 1, 'Change Password', 'Change Password', 'Change Password', 'Change Password', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(7, 1, 'Logout', 'Logout', 'Logout', 'Logout', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feature_fields`
--

CREATE TABLE IF NOT EXISTS `feature_fields` (
  `feature_field_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `feature_id` int(10) unsigned DEFAULT NULL,
  `field_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('Text','Pass','Rsd','Check','Sel','Hidd') COLLATE utf8_unicode_ci NOT NULL,
  `default` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_mandatory` tinyint(4) NOT NULL,
  `validation_message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`feature_field_id`),
  KEY `feature_fields_feature_id_foreign` (`feature_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feature_relation`
--

CREATE TABLE IF NOT EXISTS `feature_relation` (
  `feature_relation_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_feature_id` int(10) unsigned DEFAULT NULL,
  `child_feature_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`feature_relation_id`),
  KEY `feature_relation_parent_feature_id_foreign` (`parent_feature_id`),
  KEY `feature_relation_child_feature_id_foreign` (`child_feature_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `feature_relation`
--

INSERT INTO `feature_relation` (`feature_relation_id`, `parent_feature_id`, `child_feature_id`, `created_at`, `updated_at`) VALUES
(6, NULL, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 2, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, NULL, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 4, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 4, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 4, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fs`
--

CREATE TABLE IF NOT EXISTS `fs` (
  `fs_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `fs_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`fs_id`),
  KEY `fs_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=47 ;

--
-- Dumping data for table `fs`
--

INSERT INTO `fs` (`fs_id`, `user_id`, `fs_name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(46, 1, 'Test', NULL, '2015-10-11 04:44:40', '2015-10-11 04:44:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fs_features`
--

CREATE TABLE IF NOT EXISTS `fs_features` (
  `fs_feature_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fs_version_id` int(100) NOT NULL,
  `section_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `screens` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caption` text COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`fs_feature_id`),
  KEY `features_section_id_foreign` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `fs_features`
--

INSERT INTO `fs_features` (`fs_feature_id`, `fs_version_id`, `section_id`, `title`, `description`, `screens`, `caption`, `order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(32, 44, 1, 'Login', 'Login', '', 'Login1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(33, 44, 1, 'Forgot Password', 'Forgot Password', '', 'Forgot Password', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(34, 44, 1, 'Settings', 'Settings', '', 'Settings', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(35, 44, 1, 'Change Email', 'Change Email', '', 'Change Email', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(36, 44, 1, 'Change Password', 'Change Password', '', 'Change Password', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(37, 44, 1, 'Logout', 'Logout', '', 'Logout', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fs_versions`
--

CREATE TABLE IF NOT EXISTS `fs_versions` (
  `fs_version_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fs_id` int(10) unsigned DEFAULT NULL,
  `version` double(11,11) NOT NULL,
  `file_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`fs_version_id`),
  KEY `fs_versions_fs_id_foreign` (`fs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=45 ;

--
-- Dumping data for table `fs_versions`
--

INSERT INTO `fs_versions` (`fs_version_id`, `fs_id`, `version`, `file_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(44, 46, 0.00000000000, '', '2015-10-11 04:44:41', '2015-10-11 04:44:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_02_030658_create_fs_table', 2),
('2015_10_02_030745_create_fs_versions_table', 3),
('2015_10_06_173420_create_section_field_values_table', 4),
('2015_10_06_190054_create_sections_table', 5),
('2015_10_07_185557_create_features_table', 5),
('2015_10_07_185645_create_feature_relation_table', 5),
('2015_10_07_185713_create_feature_fields_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `section_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section_order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`section_id`, `section_name`, `section_order`, `created_at`, `updated_at`) VALUES
(1, 'Application', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `section_field_values`
--

CREATE TABLE IF NOT EXISTS `section_field_values` (
  `section_field_value_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fs_version_id` int(10) unsigned DEFAULT NULL,
  `document_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `document_sub_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dev_company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dev_company_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_company_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `objective` text COLLATE utf8_unicode_ci NOT NULL,
  `ios` tinyint(4) NOT NULL,
  `lowest_ios_version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resolutions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ios_oriantation` enum('Portraite','Landscape') COLLATE utf8_unicode_ci NOT NULL,
  `android` tinyint(4) NOT NULL,
  `windows` tinyint(4) NOT NULL,
  `other_platform` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ie` tinyint(4) NOT NULL,
  `ie_lowest_version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chrome` tinyint(4) NOT NULL,
  `safari` tinyint(4) NOT NULL,
  `monetization_model` enum('Free','Paid','Subscription') COLLATE utf8_unicode_ci NOT NULL,
  `monetization_description` text COLLATE utf8_unicode_ci NOT NULL,
  `english` tinyint(4) NOT NULL,
  `other_langauge` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`section_field_value_id`),
  KEY `section_field_values_fs_version_id_foreign` (`fs_version_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `section_field_values`
--

INSERT INTO `section_field_values` (`section_field_value_id`, `fs_version_id`, `document_title`, `document_sub_title`, `dev_company_name`, `dev_company_logo`, `client_company_name`, `client_company_logo`, `objective`, `ios`, `lowest_ios_version`, `resolutions`, `ios_oriantation`, `android`, `windows`, `other_platform`, `ie`, `ie_lowest_version`, `chrome`, `safari`, `monetization_model`, `monetization_description`, `english`, `other_langauge`, `created_at`, `updated_at`, `deleted_at`) VALUES
(36, 44, 'Test', 'Test', 'test company', 'dev_company_logo36.png', 'Test', 'client_company_logo36.png', 'Test', 0, '', '', 'Landscape', 0, 0, '', 0, '', 0, 0, 'Paid', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subscription` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stripe_id` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `free_fs_count` int(10) unsigned NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_payment` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `password`, `subscription`, `stripe_id`, `status`, `free_fs_count`, `last_login`, `last_payment`, `confirmation_code`, `confirmed`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test', 'mohdadilvp@gmail.com', '$2y$10$79vN6Nj7oJHf.xev9BeugeQPaGHS1stqR4SYMJyXWMkB7onEm9ZO6', NULL, 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ab9069bdeea6d0ad7e4373d8e97b4938', 1, 'KnwAeAauCknaK1u9JoYlPFjEIM0x9cyrv6ZW2OHCA7QhpjDgvFs4siJUWpAN', '2015-09-30 13:12:33', '2015-10-01 13:18:44', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `features_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`section_id`) ON DELETE CASCADE;

--
-- Constraints for table `feature_fields`
--
ALTER TABLE `feature_fields`
  ADD CONSTRAINT `feature_fields_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`feature_id`);

--
-- Constraints for table `feature_relation`
--
ALTER TABLE `feature_relation`
  ADD CONSTRAINT `feature_relation_child_feature_id_foreign` FOREIGN KEY (`child_feature_id`) REFERENCES `features` (`feature_id`),
  ADD CONSTRAINT `feature_relation_parent_feature_id_foreign` FOREIGN KEY (`parent_feature_id`) REFERENCES `features` (`feature_id`);

--
-- Constraints for table `fs`
--
ALTER TABLE `fs`
  ADD CONSTRAINT `fs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `fs_versions`
--
ALTER TABLE `fs_versions`
  ADD CONSTRAINT `fs_versions_fs_id_foreign` FOREIGN KEY (`fs_id`) REFERENCES `fs` (`fs_id`) ON DELETE CASCADE;

--
-- Constraints for table `section_field_values`
--
ALTER TABLE `section_field_values`
  ADD CONSTRAINT `section_field_values_fs_version_id_foreign` FOREIGN KEY (`fs_version_id`) REFERENCES `fs_versions` (`fs_version_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
