-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2026 at 10:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduhire`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `phone`, `email`, `website`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Joty Biswas', '01403107510', 'jotybiswas0199@gmail.com', 'https://www.akcc.gov.bd/', 'profile/isNeWU0y4G60WIUUUr2gidPgySayHe2d56gsR8MM.jpg', '2026-03-05 08:12:55', '2026-03-05 08:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Joty Biswas', 'jotybiswas0199@gmail.com', 'ফগফদ্গ', '2026-03-05 11:41:06', '2026-03-05 11:41:06'),
(2, 'Joty Biswas', 'jotybiswas0199@gmail.com', 'hi', '2026-03-06 02:05:15', '2026-03-06 02:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_03_01_094305_create_accounts_table', 1),
(5, '2026_03_01_140515_create_contacts_table', 1),
(6, '2026_03_03_155057_create_profiles_table', 1),
(7, '2026_03_05_102941_create_preferred_classes_table', 1),
(8, '2026_03_05_111306_create_preferred_subjects_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preferred_classes`
--

CREATE TABLE `preferred_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `preferred_class_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preferred_classes`
--

INSERT INTO `preferred_classes` (`id`, `preferred_class_name`, `created_at`, `updated_at`) VALUES
(1, 'Primary', '2026-03-05 07:08:29', '2026-03-05 13:02:40'),
(3, 'Secondary', '2026-03-05 07:56:47', '2026-03-05 13:04:18'),
(5, 'College', '2026-03-05 13:04:25', '2026-03-05 13:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `preferred_subjects`
--

CREATE TABLE `preferred_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `preferred_subject_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preferred_subjects`
--

INSERT INTO `preferred_subjects` (`id`, `preferred_subject_name`, `created_at`, `updated_at`) VALUES
(1, 'Bangla', '2026-03-05 07:19:35', '2026-03-05 07:19:35'),
(2, 'English', '2026-03-05 07:19:38', '2026-03-05 13:06:58'),
(4, 'Math', '2026-03-05 13:07:09', '2026-03-05 13:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `current_address` text DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `ssc_board` varchar(255) DEFAULT NULL,
  `ssc_result` varchar(255) DEFAULT NULL,
  `ssc_year` varchar(255) DEFAULT NULL,
  `hsc_result` varchar(255) DEFAULT NULL,
  `bachelor_degree` varchar(255) DEFAULT NULL,
  `master_degree` varchar(255) DEFAULT NULL,
  `subject_major` varchar(255) DEFAULT NULL,
  `preferred_subject` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`preferred_subject`)),
  `preferred_class` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`preferred_class`)),
  `experience` int(11) DEFAULT NULL,
  `previous_school` varchar(255) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `name`, `father_name`, `mother_name`, `dob`, `gender`, `image`, `number`, `email`, `division`, `district`, `current_address`, `permanent_address`, `ssc_board`, `ssc_result`, `ssc_year`, `hsc_result`, `bachelor_degree`, `master_degree`, `subject_major`, `preferred_subject`, `preferred_class`, `experience`, `previous_school`, `salary`, `created_at`, `updated_at`, `status`) VALUES
(5, 1, 'Joty Biswas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2026-03-06 03:02:24', '2026-03-06 03:02:24', 'pending'),
(6, NULL, 'Alamin Khan', 'Nur Alom Khan', 'Rukhsana Begum', '2001-03-07', 'Male', 'teachers/nDbcTBUBhAyiJkcblzJVAMKsMpwFdoYVnlvRHqDS.jpg', '01403107657', 'alamin0199@gmail.com', 'Khulna', 'Khulna', '22/2, Kabi Nazrul Sarak, west Tootpara', '22/2, Kabi Nazrul Sarak, west Tootpara', 'Khulna', '4.83', '2018', '5.00', '3.22', '3.33', 'Finance', '\"[\\\"1\\\",\\\"2\\\",\\\"4\\\"]\"', '\"[\\\"1\\\",\\\"3\\\"]\"', 2, NULL, 5000.00, '2026-03-06 03:06:51', '2026-03-06 03:07:07', 'approved'),
(7, NULL, 'Bushra Zaman', 'Selim Sheikh', 'Rokeya Begum', '2000-12-02', NULL, 'teachers/ZvDvUtnqTklbD4A2CEXHyzau1pnkgVSAEjIhODTg.webp', '01403107201', 'Bushra0199@gmail.com', 'Dhaka', 'Dhaka', '20, Rani Pukur Lane', '20, Rani Pukur Lane', 'Dhaka', '5.00', '2020', '5.00', '3.80', '3.55', 'CSE', '\"[\\\"1\\\",\\\"2\\\",\\\"4\\\"]\"', '\"[\\\"3\\\",\\\"5\\\"]\"', 1, NULL, 6000.00, '2026-03-06 03:13:16', '2026-03-06 03:13:25', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0JywOTEUepRGCPcTERbzRycwhvoFVHQoazooIZS9', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibDlHS05sN3huU01iM0ZrS3E2UmtDZEFPSFp4cWtwS0R6SmdMbm5ERyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly9sb2NhbGhvc3QvdGVhY2hlcl9saXN0LzMvdGVhY2hlcl9kZXRhaWxzLzciO3M6NToicm91dGUiO3M6MTU6InRlYWNoZXIuZGV0YWlscyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzcyNzg2NzAzO319', 1772788445),
('Rr68hvbA2df1JEvIlX6tfjSySrdyqKa0n0kUmJM6', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYTlmMWNMN3ZJQWNuWnZuS2I4d2I4TEdPYUJSWVpQQ3pPanpmaHlrWiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNDoiaHR0cDovL2xvY2FsaG9zdC9wcm9maWxlIjt9czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3QvdGVhY2hlcl9saXN0LzEiO3M6NToicm91dGUiO3M6MTI6InRlYWNoZXIubGlzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1772738435),
('uC2trZQLSQZzHjbcbBygnMPlp9FjlfPUBLllL6Wd', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOENTaFBZSmZ2amxUeGQ4NkNTMGJJbWtwdkh1S1BNMmg2VllRU01iYyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9sb2NhbGhvc3QiO3M6NToicm91dGUiO3M6NDoiaG9tZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzcyNzg0Mjk3O319', 1772784328);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Joty Biswas', 'jotybiswas0199@gmail.com', NULL, 1, '$2y$12$Ij4jWG97C8ehZZ9QImamtOoSkKB7VxX5XLIdBFUPWiANOI9o47sVu', NULL, '2026-03-05 07:07:58', '2026-03-05 07:07:58'),
(2, 'Joty Biswas', 'jotybiswas019@gmail.com', NULL, 0, '$2y$12$FM.t0UjziL1uIeNsHzClU.xXgfD9z15X2das3mx6EaTZT0p1shVfy', NULL, '2026-03-06 02:02:52', '2026-03-06 02:02:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `preferred_classes`
--
ALTER TABLE `preferred_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preferred_subjects`
--
ALTER TABLE `preferred_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `preferred_classes`
--
ALTER TABLE `preferred_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `preferred_subjects`
--
ALTER TABLE `preferred_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
