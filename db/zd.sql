-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2021 at 12:56 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zd`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `membership` tinyint(1) NOT NULL,
  `donation_amount` double NOT NULL,
  `pp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `title_id` (`title_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211202224647', '2021-12-03 22:13:55', 555),
('DoctrineMigrations\\Version20211203221110', '2021-12-03 22:41:02', 1053),
('DoctrineMigrations\\Version20211203224331', '2021-12-03 22:43:47', 1404),
('DoctrineMigrations\\Version20211203233702', '2021-12-03 23:37:10', 2680),
('DoctrineMigrations\\Version20211203234200', '2021-12-03 23:42:19', 2232),
('DoctrineMigrations\\Version20211203235111', '2021-12-03 23:51:17', 3352);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

DROP TABLE IF EXISTS `icons`;
CREATE TABLE IF NOT EXISTS `icons` (
  `id` int NOT NULL AUTO_INCREMENT,
  `icon_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `icon_content`) VALUES
(1, 'https://i.ibb.co/C5vBpJw/9.png');

-- --------------------------------------------------------

--
-- Table structure for table `labels`
--

DROP TABLE IF EXISTS `labels`;
CREATE TABLE IF NOT EXISTS `labels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `label_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label_color` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `note_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note_content` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `space_id` int NOT NULL,
  `proj_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proj_start` date NOT NULL,
  `proj_deadline` date NOT NULL,
  `proj_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `space_id` (`space_id`),
  KEY `status_id` (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_labels`
--

DROP TABLE IF EXISTS `project_labels`;
CREATE TABLE IF NOT EXISTS `project_labels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `label_id` int NOT NULL,
  `proj_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `label_id` (`label_id`),
  KEY `proj_id` (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Président(e)');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `task_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_start` date NOT NULL,
  `task_deadline` date NOT NULL,
  `task_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_users` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int NOT NULL,
  `proj_id` int NOT NULL,
  `label_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status_id` (`status_id`),
  KEY `proj_id` (`proj_id`),
  KEY `label_id` (`label_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

DROP TABLE IF EXISTS `titles`;
CREATE TABLE IF NOT EXISTS `titles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pronoun` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `first_mail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_mail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `space_id` int NOT NULL,
  `member_status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int NOT NULL,
  `ca` tinyint(1) NOT NULL,
  `shirt_size` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_color` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav_games` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64986CC499D` (`pseudo`),
  KEY `space_id` (`space_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `roles`, `password`, `first_name`, `last_name`, `gender`, `pronoun`, `dob`, `first_mail`, `second_mail`, `adress`, `zip`, `city`, `phone`, `space_id`, `member_status`, `role_id`, `ca`, `shirt_size`, `fav_color`, `fav_games`, `comments`) VALUES
(1, 'Anaïs', '[\"ROLE_ADMIN\"]', '$2y$13$IY7cyVUUu5mrvCy87HZ7MevlvB/P.gSVbeFt5pRT4vHZmzRB0ZyKq', 'Anaïs', 'Xantippe', 'femme', 'elle', '1992-11-25', 'hanays@hotmail.com', 'a.xantippe@zephyr-esport.com', '22, rue Delahaye', '80080', 'Amiens', '0631306872', 1, 'Bénévole', 1, 1, 'S/M', 'Cyan', 'Oxygen not Included, Rimworld, Don\'t Starve, Northgard, League of Legends, Cyberpunk 77, Fallout 4, Rust', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workspaces`
--

DROP TABLE IF EXISTS `workspaces`;
CREATE TABLE IF NOT EXISTS `workspaces` (
  `id` int NOT NULL AUTO_INCREMENT,
  `space_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `space_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `space_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `icon_id` (`icon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workspaces`
--

INSERT INTO `workspaces` (`id`, `space_name`, `space_desc`, `space_color`, `icon_id`) VALUES
(1, 'Administration', 'Espace réservé au Bureau', '000000', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `accounts_ibfk_2` FOREIGN KEY (`title_id`) REFERENCES `titles` (`id`);

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`space_id`) REFERENCES `workspaces` (`id`),
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

--
-- Constraints for table `project_labels`
--
ALTER TABLE `project_labels`
  ADD CONSTRAINT `project_labels_ibfk_1` FOREIGN KEY (`label_id`) REFERENCES `labels` (`id`),
  ADD CONSTRAINT `project_labels_ibfk_2` FOREIGN KEY (`proj_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `tasks_ibfk_2` FOREIGN KEY (`proj_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `tasks_ibfk_3` FOREIGN KEY (`label_id`) REFERENCES `labels` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`space_id`) REFERENCES `workspaces` (`id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `workspaces`
--
ALTER TABLE `workspaces`
  ADD CONSTRAINT `workspaces_ibfk_1` FOREIGN KEY (`icon_id`) REFERENCES `icons` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
