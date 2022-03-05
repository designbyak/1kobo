-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2022 at 12:08 PM
-- Server version: 10.3.32-MariaDB-log-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fredytzd_kobo`
--

-- --------------------------------------------------------

--
-- Table structure for table `archiveds`
--

CREATE TABLE `archiveds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `archiveds`
--

INSERT INTO `archiveds` (`id`, `name`, `message`, `created_at`, `updated_at`) VALUES
(4, 'kanicorp', 'You this boy you will be great in this life i promise you that for sure.', '2022-02-11 02:00:31', '2022-02-11 02:00:31'),
(5, 'kanicorp', 'You are a great guy keep up the good work.', '2022-02-11 17:02:45', '2022-02-11 17:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `message`, `created_at`, `updated_at`) VALUES
(1, 'kanicorp', 'Hello Kanicorp you did a great job here keep up the good work.', '2022-02-12 04:30:53', '2022-02-12 04:30:53'),
(2, 'kanicorp', 'Paddy go and marry\r\nHall go dey free for ikorodu tomorrow', '2022-02-12 05:17:28', '2022-02-12 05:17:28'),
(3, 'princess', 'Forehead CEO do giveaway for your people.', '2022-02-12 15:24:13', '2022-02-12 15:24:13'),
(4, 'kanicorp', 'I love you💖💖💖💖', '2022-02-12 15:28:04', '2022-02-12 15:28:04'),
(5, 'eseosa', 'My oga thanks for the support', '2022-02-13 19:13:06', '2022-02-13 19:13:06'),
(6, 'eseosa', 'Your eyes are sexy', '2022-02-13 20:55:09', '2022-02-13 20:55:09'),
(7, 'kanicorp', 'Get back to me Akamiloh🤲🏾', '2022-02-15 19:52:01', '2022-02-15 19:52:01'),
(8, 'kanicorp', 'Hi hi hi hi hi', '2022-02-15 23:43:45', '2022-02-15 23:43:45'),
(9, 'kanicorp', 'Hi hi hi hi hi hi hi hi', '2022-02-15 23:44:23', '2022-02-15 23:44:23'),
(10, 'joshua', 'Abeg gettout😏', '2022-02-16 01:56:39', '2022-02-16 01:56:39'),
(11, 'joshua', 'I love your beats', '2022-02-16 01:57:07', '2022-02-16 01:57:07'),
(14, 'kanicorp', 'Ak ooooo I no understand', '2022-02-16 16:49:31', '2022-02-16 16:49:31'),
(15, 'joshua', 'Hiiiiiiiiiiiiiiiii', '2022-02-16 22:53:01', '2022-02-16 22:53:01'),
(16, 'joshua', 'Hiiiiiiiiiiiiiii', '2022-02-16 22:53:22', '2022-02-16 22:53:22'),
(17, 'kanicorp', 'I used to think u liked me 🌚', '2022-02-24 00:50:35', '2022-02-24 00:50:35'),
(18, 'kanicorp', 'Ak I love you date me or double date 😍😍', '2022-02-24 08:01:46', '2022-02-24 08:01:46'),
(19, 'blvck', 'I’ll keep on loving you even if u don’t want me but why? do you have a girlfriend🥺❤️', '2022-02-24 23:39:21', '2022-02-24 23:39:21'),
(20, 'blvck', 'Thanks for been such an amazing friend. One who sees your weakness and tries to bring & build strength out of it. Always watching over those he cares about even when you think he\'s not watching. I 🖤 you so much brotherly. It\'s an honor been your friend', '2022-02-24 23:41:42', '2022-02-24 23:41:42'),
(21, 'blvck', 'So funny how we become friend tho but you are a mad boy why i wan dey follow you write anonymous sef ...something wey i fit tell you for front monkey oshi ... knowing you is the best I love the times spent together for the past  3years or so heart u big', '2022-02-25 00:12:51', '2022-02-25 00:12:51'),
(22, 'blvck', 'Hey baby I want to let U knw that I love u so much and I will always pray for u 🥰🥰my play mate fight mate quarrel mate thanks for been there just watch wen I blow I will finish u with love 🥰big brother figure 🥰love u my second daddy', '2022-02-25 00:23:09', '2022-02-25 00:23:09'),
(23, 'blvck', 'You’re cool \r\nContinue been a nice person \r\nGod bless you🥰', '2022-02-25 00:32:03', '2022-02-25 00:32:03'),
(24, 'blvck', 'You’re fine 🥰', '2022-02-25 00:32:42', '2022-02-25 00:32:42'),
(25, 'blvck', 'Fyine you’re cute', '2022-02-25 00:37:15', '2022-02-25 00:37:15'),
(26, 'blvck', 'Big mannnnnnnn', '2022-02-25 00:39:03', '2022-02-25 00:39:03'),
(27, 'blvck', 'My lovely and amazing boyfriend please tell \'em you are mine 🥺❤️. I don\'t like shout and fight, thanks for being an amazing person I love you❤️ and God bless you🤲🏾', '2022-02-25 00:40:53', '2022-02-25 00:40:53'),
(28, 'blvck', 'Send me carddddddd🤨😂', '2022-02-25 00:42:34', '2022-02-25 00:42:34'),
(29, 'mimi', 'Make we fuck na', '2022-02-25 00:50:19', '2022-02-25 00:50:19'),
(30, 'mimi', 'Hey dearrrr', '2022-02-25 00:51:48', '2022-02-25 00:51:48'),
(31, 'mimi', 'Hey dearrrr', '2022-02-25 00:52:18', '2022-02-25 00:52:18'),
(32, 'blvck', 'ASHAWO!!!!!!!!!!!!!!!!!', '2022-02-25 13:16:07', '2022-02-25 13:16:07'),
(33, 'blvck', 'I love you', '2022-02-26 20:22:29', '2022-02-26 20:22:29'),
(34, 'daniella', 'Mama Ejiro how is you, short woman 🥰🥰🥰🥰', '2022-03-02 16:46:04', '2022-03-02 16:46:04'),
(35, 'daniella', 'Daniella, \r\nBeauty with brains. \r\nGod knows i tried my best in trying to be ur number one guy...\r\nBut as life will have it, I\'m happy you\'re still a part of my life. This is no longer an anonymous, you\'ll definitely know who\'s writing😂😂😂😂😂', '2022-03-02 16:47:34', '2022-03-02 16:47:34'),
(36, 'kanicorp', 'Akamiloh\r\nGet back to me', '2022-03-04 00:43:11', '2022-03-04 00:43:11'),
(37, 'kanicorp', 'Iiiiiiiiiiiiiiii', '2022-03-04 12:43:23', '2022-03-04 12:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_02_10_221906_create_messages_table', 2),
(8, '2022_02_11_014325_create_archiveds_table', 3),
(9, '2022_02_11_173248_create_reports_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `message`, `created_at`, `updated_at`) VALUES
(1, 'kanicorp', 'Hello you are a good boy keep up the good works', '2022-02-11 16:52:52', '2022-02-11 16:52:52'),
(2, 'surprise', 'I just want to let you know that I\'m thinking of you!', '2022-02-16 02:17:16', '2022-02-16 02:17:16'),
(3, 'kanicorp', 'Hhhhjjjhggggffdddssssscbnkounvb', '2022-02-22 08:46:54', '2022-02-22 08:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kanicorp', 'certifiedakboy@gmail.com', NULL, '$2y$10$BZP19RaoB3WbMgyZOTZqROEFOmM84hK5vEey8KFpwt/wjOIhO6som', NULL, '2022-02-10 20:28:26', '2022-02-11 15:55:06'),
(2, 'pulsenaija', '4midableporto022@gmail.com', NULL, '$2y$10$jI4F5VliHF.3qbHx/DBAgu.u3larCmmwAUY0kSvhIJ0GdMACIM27.', NULL, '2022-02-10 20:48:27', '2022-02-10 20:48:27'),
(3, 'princess', 'poyinye@gmail.com', NULL, '$2y$10$pQaYjn/oLfpvsDAlwvKAP.nwEhMxBHh.WwuRoj6xRWDdGc45MIWZe', NULL, '2022-02-12 15:16:18', '2022-02-12 15:16:18'),
(4, 'eseosa', 'obasekieseosa97@gmail.com', NULL, '$2y$10$liRElhthMnyUMg0j/scg7eTaiVRm2KE6mefvJanwO/0F9hhaMq2OK', NULL, '2022-02-13 18:56:27', '2022-02-13 18:56:27'),
(5, 'joshua', 'Joshuapiano7@gmail.com', NULL, '$2y$10$QSD.WZvHPijbA/0WkiEWe.BxuVXz1GMuAXGYB6dWCeShk/UxgFMbC', NULL, '2022-02-16 01:49:22', '2022-02-16 01:49:22'),
(6, 'surprise', 'surpriseempire2@gmail.com', NULL, '$2y$10$D6uBxZl32Ozg4BdeyU7xLO4dmc2NHJdAFXVpdTPfj9cCBnk6Nxara', NULL, '2022-02-16 01:59:37', '2022-02-16 01:59:37'),
(7, 'blvck', 'Drmslegend@gmail.com', NULL, '$2y$10$BC8.Hb9Sy9LIkH/0PzPdY.upuEaDtHmuXV/TkAD1.wC/4sWMw9W8a', NULL, '2022-02-24 23:32:04', '2022-02-24 23:32:04'),
(8, 'mimi', 'fumnanyaolisekwu@gmail.Com', NULL, '$2y$10$VS/ZDkLJ/7.PYRPVVH0ZIeZOvP6wwYcf4KQBkSR.Jrt9dKUTdZ33a', NULL, '2022-02-25 00:46:32', '2022-02-25 00:46:32'),
(9, 'mc nezer', 'ebenezerolufemi77@gmail.com', NULL, '$2y$10$85vE9Ir4nNxZpw83X9DG2O/SQTHq2jVkLX2QBkv3IWlutrajVbU5a', NULL, '2022-03-01 03:12:53', '2022-03-01 03:12:53'),
(10, 'daniella', 'dannybeddins@gmail.com', NULL, '$2y$10$mQA0YUgKEx/JHzjLipUiX.UPKx4dud.IQKXLypqj7L1ByzX.k075G', NULL, '2022-03-02 16:42:10', '2022-03-02 16:42:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archiveds`
--
ALTER TABLE `archiveds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `archiveds`
--
ALTER TABLE `archiveds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
