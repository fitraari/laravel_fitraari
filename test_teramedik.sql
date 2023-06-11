-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 02:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_teramedik`
--

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
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `nama`, `alamat`, `email`, `telepon`, `created_at`, `updated_at`) VALUES
(1, 'RSUP Dr. Hasan Sadikin', 'Jl. Pasteur No.38, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat', 'rsudhasansadikin@gmail.com', '0222034953', '2023-06-10 17:31:16', '2023-06-10 17:35:02'),
(2, 'Sentosa Hospital Bandung Kopo', 'Jl. Raya Kopo No.461-463, Cirangrang, Kec. Babakan Ciparay, Kota Bandung, Jawa Barat', 'santosahospitalkopo@gmail.com', '02254280333', '2023-06-10 17:31:16', '2023-06-10 17:36:11'),
(3, 'RSUD Kota Bandung (RS Ujung Berung)', 'Jl. Rumah Sakit No.22, Pakemitan, Kec. Cinambo, Kota Bandung, Jawa Barat.', 'rsujungberung@gmail.com', '0227811794', '2023-06-10 17:31:17', '2023-06-10 17:37:18'),
(4, 'Rumah Sakit Mata Cicendo', 'Jl. Cicendo No.4, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat', 'cicendohospital@gmail.com', '022292954854', '2023-06-10 17:31:17', '2023-06-10 17:38:35'),
(5, 'RSKB Halmahera Siaga', 'Jl. RE Martadinata St No.28, Citarum, Bandung Wetan, Kota Bandung, Jawa Barat', 'halmaherahospital@gmail.com', '0224206061', '2023-06-10 17:31:17', '2023-06-10 17:39:37');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_09_142424_create_hospitals_table', 1),
(6, '2023_06_09_142700_create_patients_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hospital_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `hospital_id`, `nama`, `alamat`, `telepon`, `created_at`, `updated_at`) VALUES
(1, 4, 'Makara Saputra S.Ked', 'Psr. Fajar No. 399, Pematangsiantar 58395, Sumbar', '(+62) 528 4078 580', '2023-06-10 17:31:17', '2023-06-10 17:31:17'),
(2, 5, 'Oni Gabriella Mardhiyah', 'Kpg. Monginsidi No. 295, Samarinda 12942, Sulteng', '(+62) 241 5017 0810', '2023-06-10 17:31:17', '2023-06-10 17:31:17'),
(3, 1, 'Ami Suartini M.TI.', 'Ds. Sugiyopranoto No. 127, Bandar Lampung 35600, Pabar', '0572 9444 4269', '2023-06-10 17:31:17', '2023-06-10 17:31:17'),
(4, 4, 'Aris Natsir S.Gz', 'Ds. Ketandan No. 821, Pekanbaru 67280, DIY', '0995 5779 6069', '2023-06-10 17:31:17', '2023-06-10 17:31:17'),
(5, 5, 'Taswir Pardi Wibisono', 'Psr. Achmad Yani No. 713, Parepare 47335, Kalsel', '(+62) 880 257 378', '2023-06-10 17:31:17', '2023-06-10 17:31:17'),
(6, 5, 'Suci Maimunah Mardhiyah', 'Ki. Qrisdoren No. 167, Padangpanjang 91156, Kaltim', '(+62) 965 3130 791', '2023-06-10 17:31:17', '2023-06-10 17:31:17'),
(7, 4, 'Omar Wahyu Setiawan', 'Gg. Kebonjati No. 322, Tegal 69221, Papua', '(+62) 848 841 727', '2023-06-10 17:31:17', '2023-06-10 17:31:17'),
(8, 5, 'Janet Purnawati', 'Jln. Suryo No. 882, Langsa 45667, Aceh', '024 7898 4554', '2023-06-10 17:31:17', '2023-06-10 17:31:17'),
(9, 1, 'Baktiadi Raihan Wacana', 'Kpg. Salak No. 578, Administrasi Jakarta Pusat 29655, Kalsel', '(+62) 495 7391 4401', '2023-06-10 17:31:17', '2023-06-10 17:31:17'),
(10, 4, 'Saka Wijaya', 'Dk. Gremet No. 817, Bima 56981, Papua', '(+62) 536 0861 1323', '2023-06-10 17:31:17', '2023-06-10 17:31:17'),
(11, 2, 'Abu Djaja Bunjamin', 'Jl. Kiastramanggala, Baleendah, Kec. Baleendah, Kab. Bandung, Jawa Barat.', '0802093843', '2023-06-10 17:42:02', '2023-06-10 17:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$JnENPspayPwHADLPW.HqGOuKk1kFLvd9V9QQAfoqKn.2IxSNEH3Zq', '2023-06-10 17:32:24', '2023-06-10 17:32:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
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
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
