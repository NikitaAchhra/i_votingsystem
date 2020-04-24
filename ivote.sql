-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 03:21 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivote`
--

-- --------------------------------------------------------

--
-- Table structure for table `councils`
--

CREATE TABLE `councils` (
  `coun_id` bigint(20) UNSIGNED NOT NULL,
  `coun_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `dept_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `dept_id_fk` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `elect_classes`
--

CREATE TABLE `elect_classes` (
  `eclass_id` bigint(20) UNSIGNED NOT NULL,
  `nomclass_id_fk` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `elect_colleges`
--

CREATE TABLE `elect_colleges` (
  `ecollege_id` bigint(20) UNSIGNED NOT NULL,
  `nomcollege_id_fk` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_04_20_141841_create_departments_table', 1),
(4, '2020_04_20_142835_create_divisions_table', 1),
(5, '2020_04_20_143253_create_positions_table', 1),
(6, '2020_04_20_143512_create_councils_table', 1),
(7, '2020_04_20_144306_create_students_table', 1),
(8, '2020_04_20_145418_create_teachers_table', 1),
(9, '2020_04_20_150419_create_nom_classes_table', 1),
(10, '2020_04_20_151358_create_elect_classes_table', 1),
(11, '2020_04_20_151637_create_nom_colleges_table', 1),
(12, '2020_04_20_152130_create_elect_colleges_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nom_classes`
--

CREATE TABLE `nom_classes` (
  `nomclass_id` bigint(20) UNSIGNED NOT NULL,
  `stud_id_fk` bigint(20) UNSIGNED NOT NULL,
  `coun_id_fk` bigint(20) UNSIGNED NOT NULL,
  `votes` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nom_colleges`
--

CREATE TABLE `nom_colleges` (
  `nomcollege_id` bigint(20) UNSIGNED NOT NULL,
  `eclass_id_fk` bigint(20) UNSIGNED NOT NULL,
  `pos_id_fk` bigint(20) UNSIGNED NOT NULL,
  `coun_id_fk` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `pos_id` bigint(20) UNSIGNED NOT NULL,
  `pos_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stud_id` bigint(20) UNSIGNED NOT NULL,
  `user_id_fk` bigint(20) UNSIGNED NOT NULL,
  `class_id_fk` bigint(20) UNSIGNED NOT NULL,
  `dept_id_fk` bigint(20) UNSIGNED NOT NULL,
  `request` int(11) NOT NULL DEFAULT '0',
  `v_cr` int(11) NOT NULL DEFAULT '0',
  `v_cultural` int(11) NOT NULL DEFAULT '0',
  `v_sports` int(11) NOT NULL DEFAULT '0',
  `v_music` int(11) NOT NULL DEFAULT '0',
  `v_sort` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` bigint(20) UNSIGNED NOT NULL,
  `user_id_fk` bigint(20) UNSIGNED NOT NULL,
  `class_id_fk` bigint(20) UNSIGNED NOT NULL,
  `dept_id_fk` bigint(20) UNSIGNED NOT NULL,
  `committee` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `councils`
--
ALTER TABLE `councils`
  ADD PRIMARY KEY (`coun_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `divisions_dept_id_fk_foreign` (`dept_id_fk`);

--
-- Indexes for table `elect_classes`
--
ALTER TABLE `elect_classes`
  ADD PRIMARY KEY (`eclass_id`),
  ADD KEY `elect_classes_nomclass_id_fk_foreign` (`nomclass_id_fk`);

--
-- Indexes for table `elect_colleges`
--
ALTER TABLE `elect_colleges`
  ADD PRIMARY KEY (`ecollege_id`),
  ADD KEY `elect_colleges_nomcollege_id_fk_foreign` (`nomcollege_id_fk`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nom_classes`
--
ALTER TABLE `nom_classes`
  ADD PRIMARY KEY (`nomclass_id`),
  ADD KEY `nom_classes_stud_id_fk_foreign` (`stud_id_fk`),
  ADD KEY `nom_classes_coun_id_fk_foreign` (`coun_id_fk`);

--
-- Indexes for table `nom_colleges`
--
ALTER TABLE `nom_colleges`
  ADD PRIMARY KEY (`nomcollege_id`),
  ADD KEY `nom_colleges_eclass_id_fk_foreign` (`eclass_id_fk`),
  ADD KEY `nom_colleges_pos_id_fk_foreign` (`pos_id_fk`),
  ADD KEY `nom_colleges_coun_id_fk_foreign` (`coun_id_fk`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`pos_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stud_id`),
  ADD KEY `students_user_id_fk_foreign` (`user_id_fk`),
  ADD KEY `students_class_id_fk_foreign` (`class_id_fk`),
  ADD KEY `students_dept_id_fk_foreign` (`dept_id_fk`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `teachers_user_id_fk_foreign` (`user_id_fk`),
  ADD KEY `teachers_class_id_fk_foreign` (`class_id_fk`),
  ADD KEY `teachers_dept_id_fk_foreign` (`dept_id_fk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_user_email_unique` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `councils`
--
ALTER TABLE `councils`
  MODIFY `coun_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `class_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `elect_classes`
--
ALTER TABLE `elect_classes`
  MODIFY `eclass_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `elect_colleges`
--
ALTER TABLE `elect_colleges`
  MODIFY `ecollege_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nom_classes`
--
ALTER TABLE `nom_classes`
  MODIFY `nomclass_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nom_colleges`
--
ALTER TABLE `nom_colleges`
  MODIFY `nomcollege_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `pos_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stud_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `divisions`
--
ALTER TABLE `divisions`
  ADD CONSTRAINT `divisions_dept_id_fk_foreign` FOREIGN KEY (`dept_id_fk`) REFERENCES `departments` (`dept_id`);

--
-- Constraints for table `elect_classes`
--
ALTER TABLE `elect_classes`
  ADD CONSTRAINT `elect_classes_nomclass_id_fk_foreign` FOREIGN KEY (`nomclass_id_fk`) REFERENCES `nom_classes` (`nomclass_id`);

--
-- Constraints for table `elect_colleges`
--
ALTER TABLE `elect_colleges`
  ADD CONSTRAINT `elect_colleges_nomcollege_id_fk_foreign` FOREIGN KEY (`nomcollege_id_fk`) REFERENCES `nom_colleges` (`nomcollege_id`);

--
-- Constraints for table `nom_classes`
--
ALTER TABLE `nom_classes`
  ADD CONSTRAINT `nom_classes_coun_id_fk_foreign` FOREIGN KEY (`coun_id_fk`) REFERENCES `councils` (`coun_id`),
  ADD CONSTRAINT `nom_classes_stud_id_fk_foreign` FOREIGN KEY (`stud_id_fk`) REFERENCES `students` (`stud_id`);

--
-- Constraints for table `nom_colleges`
--
ALTER TABLE `nom_colleges`
  ADD CONSTRAINT `nom_colleges_coun_id_fk_foreign` FOREIGN KEY (`coun_id_fk`) REFERENCES `councils` (`coun_id`),
  ADD CONSTRAINT `nom_colleges_eclass_id_fk_foreign` FOREIGN KEY (`eclass_id_fk`) REFERENCES `elect_classes` (`eclass_id`),
  ADD CONSTRAINT `nom_colleges_pos_id_fk_foreign` FOREIGN KEY (`pos_id_fk`) REFERENCES `positions` (`pos_id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_class_id_fk_foreign` FOREIGN KEY (`class_id_fk`) REFERENCES `divisions` (`class_id`),
  ADD CONSTRAINT `students_dept_id_fk_foreign` FOREIGN KEY (`dept_id_fk`) REFERENCES `departments` (`dept_id`),
  ADD CONSTRAINT `students_user_id_fk_foreign` FOREIGN KEY (`user_id_fk`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_class_id_fk_foreign` FOREIGN KEY (`class_id_fk`) REFERENCES `divisions` (`class_id`),
  ADD CONSTRAINT `teachers_dept_id_fk_foreign` FOREIGN KEY (`dept_id_fk`) REFERENCES `departments` (`dept_id`),
  ADD CONSTRAINT `teachers_user_id_fk_foreign` FOREIGN KEY (`user_id_fk`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
