-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 10:25 PM
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
-- Database: `pegasus`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(250) NOT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `penulis` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `slug` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `judul`, `gambar`, `penulis`, `tanggal`, `kategori`, `deskripsi`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Memahami Perbedaan antara Custom Software dan Package Software', 'blog-1720509888.jpg', 'Mairatul Lailia', '2024-05-29', 'Company Profile', '<p>Halo Createch People! Apakah perusahaan Anda bingung memilih antara custom software atau package software untuk pengembangan sistem atau aplikasi? Jangan khawatir, artikel ini akan membantu Anda memahami perbedaan antara keduanya serta kelebihan dan kekurangannya. Mari baca artikel ini untuk memilih dengan bijak!</p>', 'memahami-perbedaan-antara-custom-software-dan-package-software', '2024-07-09 00:24:48', '2024-07-09 00:24:48'),
(3, 'Bagaimana menggunakan Big Data untuk Membuat Keputusan Bisnis yang Tepat', 'blog-1720509945.jpg', 'Mairatul Lailia', '2024-03-28', 'E-Commerce', '<p>Hai Createch People, dalam artikel ini, kita akan membahas bagaimana menggunakan Big Data untuk membuat keputusan bisnis yang tepat. Dalam dunia bisnis modern, keputusan yang tepat sangat penting untuk membuat bisnis berkembang dan sukses. Dalam artikel ini, Anda akan mempelajari langkah-langkah untuk memahami, mengumpulkan, memproses, mengintegrasikan, dan akhirnya membuat keputusan bisnis berdasarkan Big Data. Dengan mengikuti langkah-langkah ini, bisnis dapat meningkatkan efisiensi dan efektivitas dalam pengambilan keputusan, dan meningkatkan kemampuan mereka untuk bersaing di dunia software. Yuk, simak artikelnya!</p>', 'bagaimana-menggunakan-big-data-untuk-membuat-keputusan-bisnis-yang-tepat', '2024-07-09 00:25:45', '2024-07-09 00:25:45'),
(4, 'Mengoptimalkan User Experience dengan UI/UX Design', 'blog-1720509991.jpg', 'Mairatul Lailia', '2023-05-11', 'ERP', '<p>Hai Createch People! Apakah Anda ingin memastikan produk digital Anda memberikan pengalaman pengguna yang memuaskan? Artikel ini akan membahas cara mengoptimalkan user experience dengan UI/UX design. Dalam artikel ini, Anda akan mempelajari pentingnya memahami target pengguna, menentukan kebutuhan pengguna, menentukan tujuan dan strategi produk, memperhatikan aspek desain, dan melakukan pengujian produk. Mari kita lihat cara-cara untuk menciptakan produk digital yang sukses dengan UX dan UI design yang baik!</p>', 'mengoptimalkan-user-experience-dengan-ui-ux-design', '2024-07-09 00:26:31', '2024-07-09 00:26:31'),
(5, 'Mitos dan Fakta tentang Cloud Computing', 'blog-1720510054.jpg', 'Mairatul Lailia', '2024-07-19', 'Point Of Sale', '<p>Halo Createch People! Apakah Anda memiliki keraguan tentang cloud computing? Artikel ini akan membahas mitos dan fakta tentang teknologi ini yang dapat membantu Anda membuat keputusan yang tepat. Mari kita bersama-sama mengupas mitos keamanan, biaya, dan implementasi yang sering terdengar tentang cloud computing. Temukan jawabannya di artikel ini!</p>', 'mitos-dan-fakta-tentang-cloud-computing', '2024-07-09 00:27:34', '2024-07-09 00:27:34'),
(6, 'Mengembangkan Bisnis Anda dengan Solusi Custom Software', 'blog-1720510098.jpg', 'Mairatul Lailia', '2024-07-26', 'E-Learning', '<p>Halo Createch People! Apakah Anda ingin meningkatkan efisiensi dan produktivitas bisnis Anda? Custom software dapat menjadi solusi yang tepat untuk memenuhi kebutuhan bisnis yang khusus dan unik. Dalam artikel ini, Anda akan mempelajari keuntungan menggunakan custom software dan bagaimana custom software dapat membantu meningkatkan efisiensi, keamanan data, dan pertumbuhan bisnis Anda. Jangan lewatkan kesempatan untuk meningkatkan bisnis Anda dengan solusi custom software. Bacalah artikel ini sekarang!</p>', 'mengembangkan-bisnis-anda-dengan-solusi-custom-software', '2024-07-09 00:28:18', '2024-07-09 00:28:18'),
(7, 'Menilik Prospek Karir dalam Industri Software Development di Masa Depan', 'blog-1720510147.jpg', 'Mairatul Lailia', '2024-07-09', 'Digital Marketing', '<p>Halo Createch People, artikel ini akan membahas prospek karir dalam industri software development di masa depan. Dengan semakin meningkatnya permintaan untuk software, industri ini menawarkan peluang karir yang menjanjikan. Namun, adopsi teknologi terbaru dan kompleksitas pengembangan software juga menuntut keterampilan yang lebih tinggi. Artikel ini akan membahas peluang karir yang tersedia serta tantangan yang akan dihadapi. Yuk, simak artikelnya!</p>', 'menilik-prospek-karir-dalam-industri-software-development-di-masa-depan', '2024-07-09 00:29:07', '2024-07-09 00:29:07');

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
(4, '2024_06_28_020105_create_portfolio_table', 1),
(5, '2024_06_28_020120_create_blog_table', 1),
(6, '2024_06_28_055924_add_kategori_after_lokasi', 1);

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
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `lokasi` varchar(250) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `tanggalProyek` date NOT NULL,
  `client` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `slug` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `nama`, `gambar`, `lokasi`, `kategori`, `tanggalProyek`, `client`, `deskripsi`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Universitas Negeri Malang', '-portfolio-1720510296.jpg', 'Malang', 'Company Profile', '2022-10-12', 'Secret', '<p>Proyek supply Furniture pada ruang Belajar, Front Office, dan Lab. Komputer Universitas Negeri Malang yang berhasil diselesaikan.</p>\r\n<p>&nbsp;</p>', 'universitas-negeri-malang', '2024-07-09 00:31:36', '2024-07-09 00:31:36'),
(3, 'Kementrian Keuangan', '-portfolio-1720510357.jpg', 'Jakarta', 'E-Commerce', '2024-07-09', 'Secret', '<p>Proyek supply Furniture pada ruang rapat Kementrian Keuangan Indonesia yang berhasil diselesaikan.</p>\r\n<p>&nbsp;</p>', 'kementrian-keuangan', '2024-07-09 00:32:37', '2024-07-09 00:32:37'),
(4, 'Kementrian Pertahanan Indonesia', '-portfolio-1720510400.jpg', 'Jakarta', 'ERP', '2024-07-28', 'Secret', '<p>Proyek supply Furniture pada ruang rapat Kementrian Pertahanan Indonesia yang berhasil diselesaikan.</p>\r\n<p>&nbsp;</p>', 'kementrian-pertahanan-indonesia', '2024-07-09 00:33:20', '2024-07-09 00:33:20');

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
('gE3aVQ2VLv42S1TSinxBb6ZmKvIxog7YmjMWHG3L', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Avast/126.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibk03Sm11ckEwaUdCYXVjd3N4MFBRSFFITEhUTGdtY0x6bHdRMUpBQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1720528635),
('LQmd9EwPr3tEPFA68gNifFUdaUmay48fNORiFn77', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Avast/126.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUVlCTFVGMkJwMDl1bDB1dnRjVHIxVkVsajU3YWJldjlGQzhySzlreCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYW5hZ2UtYmxvZyI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1720511849),
('rhUJhyO2Wyz3bHKjE5gWLElSboemsueB1jMEkjOE', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Avast/126.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY1RhcU9zWVZUaEtISkcwYXFQbDY5TWRIUWplS2R4alNjYTN2dW5PMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0LXVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1720556679);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_photo` varchar(250) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', '2024-07-08 23:53:33', '$2y$12$sAgojs/RlTlIFvLEl4.YaOp034zS//aHKKXrUusZCGsPzBWGxFKOu', 'user-1720510737.jpg', NULL, '2024-07-08 23:53:33', '2024-07-09 00:57:05'),
(2, 'pegasusindonesia', 'pegasusindonesia@example.com', NULL, '$2y$12$cQWOp7tjpsLqRzEMtZDQtuGYYYmR3lyJ7ciuoElszxGufVZlYoiGC', 'user-1720510721.jpg', NULL, '2024-07-09 00:37:43', '2024-07-09 00:40:27'),
(3, 'example', 'example@example.com', NULL, '$2y$12$ftuzDLfyf9WTn.m6do9VceKgJ6gT4s9v7TasWLwnT9yxNXNrUisk6', 'user-1720511717.jpg', NULL, '2024-07-09 00:55:17', '2024-07-09 00:55:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

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
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portfolio_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
