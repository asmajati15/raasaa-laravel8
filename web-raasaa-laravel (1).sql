-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 25, 2022 at 07:59 AM
-- Server version: 8.0.30
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-raasaa-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `availabilities`
--

CREATE TABLE `availabilities` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tersedia` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;;

--
-- Dumping data for table `availabilities`
--

INSERT INTO `availabilities` (`id`, `nama`, `tersedia`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tersedia', 'Tersedia', 'able', '2022-02-08 11:38:36', '2022-02-08 11:38:36'),
(2, 'Tidak Tersedia', 'Tidak Tersedia', 'disabled', '2022-02-08 11:39:15', '2022-02-08 11:39:15'),
(3, 'Tersembunyi', 'Tidak Tersedia', 'hidden', '2022-02-23 15:36:32', '2022-02-23 15:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE `filters` (
  `id` bigint UNSIGNED NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hide` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`id`, `slug`, `hide`, `created_at`, `updated_at`) VALUES
(1, 'makanan', 'Full-Menu', '2022-01-27 08:46:19', '2022-01-27 08:46:19'),
(2, 'minuman', 'Full-Menu', '2022-01-27 08:46:19', '2022-01-27 08:46:19'),
(3, 'special', 'Special-of-the-Day', '2022-02-07 04:33:21', '2022-02-07 04:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `types_id` bigint UNSIGNED NOT NULL,
  `availabilities_id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int UNSIGNED DEFAULT NULL,
  `hari` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mulai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sampai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `types_id`, `availabilities_id`, `nama`, `slug`, `deskripsi`, `gambar`, `harga`, `stok`, `hari`, `mulai`, `sampai`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Signature Fried Rice', 'signature-fried-rice', 'Nasi goreng kluwek disajikan dengan cumi goreng pedas', 'menu-images/3VOlQOxYxfVrsUFP2fQ8DYGKkoR4s2Cn63SySzwu.png', 'Rp65,000', 100, NULL, NULL, NULL, '2022-03-07 23:17:04', '2022-11-29 23:28:00'),
(2, 1, 1, 'Fried Carp Fish with Mango Sauce', 'fried-carp-fish-with-mango-sauce', 'Ikan dengan saus mangga', 'menu-images/GAGp98UGNHnoXtz1teghyc0HZxI4spHUsO5xM1NM.jpg', 'Rp75,000', 23, 'Tersedia di Hari Rabu & Kamis', NULL, NULL, '2022-03-07 23:25:53', '2022-11-29 23:27:46'),
(3, 3, 1, 'Beef Teriyaki with Rice', 'beef-teriyaki-with-rice', 'Nasi dengan daging bumbu teriyaki Nasi dengan daging bumbu teriyaki', 'menu-images/TloxwbKRgF6OxfcdqKfz55FhcQ5p0G8oQFK4Awa1.jpg', 'Rp75,000', NULL, NULL, NULL, NULL, '2022-06-15 08:31:00', '2022-11-30 00:09:43'),
(4, 1, 1, 'nugget', 'nugget', 'Hangat dan Nikmat', 'menu-images/X9NYveUM1UTGk03xjncyqUgpqreo6Q176DecAvf5.jpg', 'Rp15,000', NULL, NULL, NULL, NULL, '2022-11-29 23:26:25', '2022-11-29 23:26:25'),
(5, 5, 1, 'Lasagna', 'lasagna', 'Lasagna', 'menu-images/PYYaWDGN4ATthekIOPQzfe2PJNfDRf5j4STUFUhP.jpg', 'Rp65,000', NULL, NULL, NULL, NULL, '2022-11-29 23:29:14', '2022-11-29 23:29:14'),
(6, 1, 1, 'nugget', 'nugget-2', 'Hangat dan Nikmat', 'menu-images/iSerce9nUYitUBQIKgGVm0y5plXHaWaPTPu43n1T.png', 'Rp40,000', NULL, NULL, NULL, NULL, '2022-11-29 23:30:59', '2022-11-29 23:30:59'),
(7, 3, 1, 'Nugget', 'nugget-3', 'Hangat dan Nikmat', 'menu-images/zApLKuqlG7wnUwXiKoTlfZLpEextn9mlKzYwSEfR.png', 'Rp40,000', NULL, NULL, NULL, NULL, '2022-11-29 23:31:34', '2022-11-29 23:31:34'),
(8, 1, 1, 'Nugget', 'nugget-4', 'Hangat dan Nikmat', 'menu-images/QpZu9OswwRbFt8FCR9irsciede9dHCVg8NYz91Yq.png', 'Rp40,000', NULL, NULL, NULL, NULL, '2022-11-29 23:31:59', '2022-11-29 23:31:59'),
(9, 3, 1, 'Nugget', 'nugget-5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tellus lorem, pellentesque sit amet risus a, ultricies tempor enim. Proin.', 'menu-images/ol7Jw30k6plo5EG3dcY8JmllkEzOdwajBUo5j0Ec.png', 'Rp40,000', NULL, NULL, NULL, NULL, '2022-11-29 23:33:59', '2022-11-29 23:33:59'),
(10, 3, 1, 'Nugget', 'nugget-6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tellus lorem, pellentesque sit amet risus a, ultricies tempor enim. Proin.', 'menu-images/5bUOMLKtHgaOd2d7IFlcVzipif6GDEdYaqyTKeXn.png', 'Rp40,000', NULL, NULL, NULL, NULL, '2022-11-29 23:35:19', '2022-11-29 23:35:19'),
(11, 3, 1, 'Nugget', 'nugget-7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tellus lorem, pellentesque sit amet risus a, ultricies tempor enim. Proin.', 'menu-images/5q3YlzPUUCGYDRNKIaQ4ODMIsFpB52NGQyG4Bja9.png', 'Rp40,000', NULL, NULL, NULL, NULL, '2022-11-29 23:35:42', '2022-11-29 23:35:42'),
(12, 3, 1, 'Nugget', 'nugget-8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tellus lorem, pellentesque sit amet risus a, ultricies tempor enim. Proin.', 'menu-images/pQpttLkkMhWLQL9ehbowOMxBkxAjZEpMVcq9zsoy.png', 'Rp40,000', NULL, NULL, NULL, NULL, '2022-11-29 23:36:04', '2022-11-29 23:36:04'),
(13, 3, 1, 'Nugget', 'nugget-9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tellus lorem, pellentesque sit amet risus a, ultricies tempor enim. Proin.', 'menu-images/8GCuFrITkmjyBBh0adI1oGcQ35iCnY4FmVz39CuI.png', 'Rp40,000', NULL, NULL, NULL, NULL, '2022-11-29 23:36:27', '2022-11-29 23:36:27'),
(14, 3, 1, 'Nugget', 'nugget-10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tellus lorem, pellentesque sit amet risus a, ultricies tempor enim. Proin.', 'menu-images/3FwBST850QUfmyFjEQkvJMG1AGFz75BcoVd9gQWa.png', 'Rp40,000', NULL, NULL, NULL, NULL, '2022-11-29 23:36:51', '2022-11-29 23:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_25_064639_create_menus_table', 1),
(6, '2022_01_27_032840_create_types_table', 1),
(7, '2022_01_27_034431_create_filters_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('gibran.anggalana21@gmail.com', 'XZxuz6JYwLqijMyErqavMWfs1oxNDpG03KiGCVWnhPuANjUBxdIdxSduqQIFb1wY', '2022-03-11 01:23:27'),
('asepmnv14@gmail.com', 'dRFWA09pQqkL5rtsDXKQXZzmOVdWP3TStLUvXoo9MjcaZSRjsSmvftq6nWuG8Axl', '2022-06-15 06:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `display_user` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `nama`, `slug`, `display`, `display_user`, `created_at`, `updated_at`) VALUES
(1, 'Sunset di Kebun', 'sunset-di-kebun', 'highlight-display', 'Tersembunyi', '2022-03-02 14:13:26', '2022-03-07 03:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint UNSIGNED NOT NULL,
  `filters_id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `filters_id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 3, 'Special of The Day', 'special-of-the-month', '2022-03-08 04:34:59', '2022-06-14 05:37:14'),
(2, 3, 'Sunset di Kebun', 'susnset-di-kebun', '2022-03-08 04:34:59', '2022-03-08 04:34:59'),
(3, 1, 'Indonesian Taste', 'indonesian-taste', '2022-03-07 21:49:14', '2022-03-07 21:49:14'),
(4, 1, 'Snacks', 'snacks', '2022-03-07 21:55:21', '2022-03-07 21:55:21'),
(5, 1, 'From the Grill', 'from-the-grill', '2022-03-07 21:56:22', '2022-03-07 21:56:22'),
(6, 1, 'Vegetables', 'vegetables', '2022-03-07 21:56:40', '2022-03-07 21:56:40'),
(7, 1, 'Desset', 'desset', '2022-03-07 21:56:57', '2022-03-07 21:56:57'),
(8, 2, 'Beverages Coffee', 'beverages-coffee', '2022-03-07 21:57:23', '2022-03-07 21:57:23'),
(9, 2, 'Signature Coffee', 'signature-coffee', '2022-03-07 21:58:04', '2022-03-07 21:58:04'),
(10, 2, 'Tea', 'tea', '2022-03-07 21:58:23', '2022-03-07 21:58:23'),
(11, 2, 'Chocolate, Milk, and Shakes', 'chocolate-milk-and-shakes', '2022-03-07 21:58:43', '2022-03-07 21:58:43'),
(12, 2, 'Water & Sodas', 'water', '2022-03-07 21:59:02', '2022-03-07 21:59:02'),
(13, 2, 'Juices', 'juices', '2022-03-07 21:59:46', '2022-03-07 21:59:46'),
(14, 2, 'Mocktail', 'mocktail', '2022-03-07 21:59:59', '2022-06-14 04:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `is_administrator` tinyint(1) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_administrator`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Asmajati Ananto', 'amnv02', 'asepmnv14@gmail.com', NULL, '$2y$10$wPayzGOZEJSMSa5ju9OgXuZto5ED0BMTjZUQl32B9aX0f.hGkWkce', NULL, '2022-02-02 19:43:18', '2022-03-10 21:38:36'),
(2, NULL, 'Koguma', 'koguma01', 'asmajati.cooler15@gmail.com', NULL, '$2y$10$KnEYbnX3uBYtgYMkMf6qj./IeY4EEZ3p6MsjzpRxv2OF3ysDetH1W', NULL, '2022-03-09 01:17:44', '2022-03-09 01:17:44'),
(4, 1, 'antum', 'antum', 'gibran.anggalana21@gmail.com', NULL, '$2y$10$sMKYp3p06valW0gJbD2R9uYgVborbFNfuzSvV4/7IB1FHdSUZMMOi', NULL, '2022-03-10 21:39:32', '2022-03-10 21:39:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availabilities`
--
ALTER TABLE `availabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_slug_unique` (`slug`);

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
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `types_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `availabilities`
--
ALTER TABLE `availabilities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filters`
--
ALTER TABLE `filters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
