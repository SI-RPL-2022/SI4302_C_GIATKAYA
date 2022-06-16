-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 14, 2022 at 03:26 AM
-- Server version: 8.0.29
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giat_kaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `training_id` bigint UNSIGNED NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `user_id`, `training_id`, `file`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'certificate/example.pdf', '2022-05-21 16:45:14', '2022-05-21 16:45:14'),
(2, 2, 3, 'certificate/example2.pdf', '2022-05-21 17:07:12', '2022-05-21 17:07:12'),
(3, 2, 2, 'certificate/example3.pdf', '2022-05-21 17:23:17', '2022-05-21 17:23:17'),
(4, 2, 1, 'certificate/example4.pdf', '2022-05-21 17:23:39', '2022-05-21 17:23:39');

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
-- Table structure for table `infokerja`
--

CREATE TABLE `infokerja` (
  `id` bigint UNSIGNED NOT NULL,
  `name_perusahaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infokerja`
--

INSERT INTO `infokerja` (`id`, `name_perusahaan`, `foto`, `deskripsi`, `lokasi`, `jabatan`, `gaji`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gojek', 'gojekbaru.png', 'Kami mengajak anda para profesional dan talenta muda untuk bergabung dengan kami', 'Bandung', 'Staff Manager', 'Rp. 7.000.000', '1', NULL, '2022-05-16 06:54:44', '2022-05-16 06:54:44'),
(2, 'Shopee', 'Shopee.png', 'Kami mengajak anda para profesional dan talenta muda untuk bergabung dengan kami', 'Jakarta', 'Manager', 'Rp. 15.000.000', '1', NULL, '2022-05-16 06:55:05', '2022-05-16 06:55:05'),
(3, 'Google', 'Google.png', 'Kami mengajak anda para profesional dan talenta muda untuk bergabung dengan kami', 'Bandung', 'Bendahara', 'Rp. 8.000.000', '1', NULL, '2022-05-16 06:55:23', '2022-05-16 06:55:23'),
(4, 'PT Pertamina', 'Pertamina-removebg-preview.png', 'Kami mengajak anda para profesional dan talenta muda untuk bergabung dengan kami', 'Jakarta', 'Human Resource Development', 'Rp. 8.000.000', '1', NULL, '2022-05-16 06:56:05', '2022-05-16 06:56:05'),
(5, 'Honda', 'Honda.png', 'Kami mengajak anda para profesional dan talenta muda untuk bergabung dengan kami', 'Jakarta', 'Staff Manager', 'Rp. 7.500.000', '1', NULL, '2022-05-16 06:56:48', '2022-05-16 06:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint UNSIGNED NOT NULL,
  `amount` bigint NOT NULL,
  `duration` int NOT NULL,
  `instalment` bigint NOT NULL,
  `file_nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_profesi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_pembiayaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_foto_usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_skt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `amount`, `duration`, `instalment`, `file_nik`, `file_profesi`, `file_pembiayaan`, `file_foto_usaha`, `file_skt`, `file_sku`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 2000000, 2, 1000000, 'image/loan/nrnIM6d0CDUEnqxlaK8GomZWh5YwS69I3bIpXL2c.png', 'image/loan/TgyWvJJRagV6SBKWfLxcvzuoO7Ow8Zy2ld9mY7zL.png', 'image/loan/XiUHSYNzX1QWavH81u36hVjRisa3EJl7f85wCLk9.png', 'image/loan/RF8Xi3vJjMI7cI3JF6MYXwi9SZVpXaLlyRrfd29J.png', 'image/loan/45UcyhB1S9xuqaLwGpJ42Kb5yEMYtVPqma1EdQCU.png', 'image/loan/EQvo2LYquCJQcHzutTOmQAcwZBiQoW58t6gzDln1.png', 2, 0, '2022-06-10 13:17:56', '2022-06-10 13:17:56'),
(3, 3000000, 2, 1500000, 'image/loan/xKEbSshVdDvcbSzuRIqaduArNQKMTcVmfodTQsJi.png', 'image/loan/7d6l3BL0cvr8f7MpRq7eI2mujaGuESwDXIr3jdSF.png', 'image/loan/i635bumKuRFRGBBkbZRiVkZ0iZ0ttHIOIaYGXYy3.png', 'image/loan/gdUDJmKFBH1lnEyXPyxV4a0be7IFP8g3AoaGNAFi.png', 'image/loan/zMmiOEl4dnBRlVh1XjYFLbjQBZBnpbi3yGeVjkBe.png', 'image/loan/KgVMZtJbI9x8W5CYZmKImrRa9W1PVrXN4AVirPOO.png', 2, 0, '2022-06-10 15:48:19', '2022-06-10 15:48:19'),
(4, 1000000, 1, 1000000, 'image/loan/uqoEaENT7bNOzadcK19mZcWqqkshkjKaRi80mb1z.png', 'image/loan/XUlUXRR6GudrZBKiAfrxjgHBITvUwuv15McoAkSK.png', 'image/loan/Phk7Qab1C7vwIUwnYCzMBM1WKgXoj9Jyt7MEp7Cx.png', 'image/loan/nSZ1Lbb68ytvp68KBhR50l4Z2zNM2sKMtyyrvYQK.png', 'image/loan/4lEHYWL5uVWsEUdHdowswsdBGon5FMIUB51kmXso.png', 'image/loan/vuMiuwVuPqSHUq68NvocLqxtg7ndnoOn6nsRLF3Z.png', 2, 0, '2022-06-14 03:25:48', '2022-06-14 03:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `loan_bills`
--

CREATE TABLE `loan_bills` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `loan_id` bigint UNSIGNED NOT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `total` bigint NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ammount` bigint DEFAULT NULL,
  `payment_proof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_bills`
--

INSERT INTO `loan_bills` (`id`, `user_id`, `loan_id`, `invoice`, `invoice_date`, `due_date`, `total`, `full_name`, `phone`, `email`, `payment_method`, `ammount`, `payment_proof`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2977452', '2022-06-10 20:36:12', '2022-06-17 20:36:12', 1000000, 'Windah', '08111111', 'windah@mail.com', 'Tunai', 1000000, 'img/payment/bukti_bayar.png', 1, '2022-06-10 20:36:12', '2022-06-10 20:36:12'),
(2, 2, 2, '324234', '2022-06-10 21:40:07', '2022-06-18 21:40:07', 1000000, 'Windah', '08511111111', 'windah@gmail.com', 'Indomaret', 1000000, 'image/bill/P67PWObsDNPKumx7o3RuKA52700qU91oDjo5PlHw.jpg', 1, '2022-06-10 21:40:07', '2022-06-10 15:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `masyarakats`
--

CREATE TABLE `masyarakats` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` int NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int NOT NULL,
  `tanggal` int NOT NULL,
  `nik` int NOT NULL,
  `usaha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `toko` int NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2022_04_04_083513_create_masyarakats_table', 1),
(6, '2022_04_07_031357_create_profile_user', 1),
(7, '2022_04_17_144907_training_skills', 1),
(8, '2022_04_17_145032_lapangan_kerja', 1),
(9, '2022_05_21_163443_create_certificates_table', 2),
(10, '2022_06_10_113353_create_loans_table', 3),
(11, '2022_06_10_132948_create_loan_bills_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `profile_user`
--

CREATE TABLE `profile_user` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` int NOT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` int NOT NULL,
  `Nama_Usaha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_usaha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_toko` int NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_berdiri` date NOT NULL,
  `foto_ktp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` bigint UNSIGNED NOT NULL,
  `cover` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_training` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode_training` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_training` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_rilis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kualitas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_pelatihan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `cover`, `name_training`, `metode_training`, `jenis_training`, `durasi`, `tgl_rilis`, `kualitas`, `detail_pelatihan`, `trainer`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'HR Rekruit.png', 'HR Recruitment Batch 12', 'Video Materi', 'Personal Skill', '15 Min', '2022-05-16', 'HDD', 'Mempelajari bagaimana melakukan rekruitasi dengan konsisten', 'Chara Event', '1', NULL, '2022-05-16 06:49:44', '2022-05-16 06:51:10'),
(2, 'Excel training.png', 'Microsoft Excel Training', 'Video Materi', 'Personal Skill', '12 Min', '2022-05-16', 'HD', 'Mempelajari bagaimana menggunakan Excel yang baik dan benar', 'Akusara Production Event', '1', NULL, '2022-05-16 06:52:20', '2022-05-16 06:52:20'),
(3, 'adobe ilustrator.jpg', 'Seminar online', 'Video Materi', 'Personal Skill', '45 Min', '2022-05-16', 'HD', 'Melatih skill kreatif menggunakan aplikasi pendukung seperti adobe ilustrator', 'Pandawa Production', '1', NULL, '2022-05-16 06:52:57', '2022-05-16 06:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `foto_profil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `nomor` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int DEFAULT NULL,
  `tanggal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usaha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bidang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toko` int DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `foto_profil`, `name`, `email`, `email_verified_at`, `nomor`, `alamat`, `password`, `status`, `tahun`, `tanggal`, `gender`, `nik`, `usaha`, `bidang`, `toko`, `foto`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Administrator', 'admin@gmail.com', NULL, '082217767566', 'Jl. Pemuda Pancasila', '$2y$10$LXTyKe7UaIDxCL6ppzAMkufJcesg10LxY2451oavh24QcJRswe9AK', '1', NULL, NULL, 'Laki-laki', NULL, NULL, NULL, NULL, NULL, '1', NULL, '2022-05-16 06:39:44', '2022-05-16 06:39:44'),
(2, 'windah.jpg', 'ALAM ADHIYATAMA', 'itempunya139@gmail.com', NULL, '082217767566', 'KOMPLEK SARUNI PERMAI BLOK 4 NO 12', '$2y$10$LXTyKe7UaIDxCL6ppzAMkufJcesg10LxY2451oavh24QcJRswe9AK', '1', 2017, '2001-06-18', 'Laki-laki', '36813418080104', 'GudangTeknologi', 'Teknologi', 1, 'windah.jpg', '0', NULL, '2022-05-17 06:44:49', '2022-05-17 06:46:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificates_user_id_foreign` (`user_id`),
  ADD KEY `certificates_training_id_foreign` (`training_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `infokerja`
--
ALTER TABLE `infokerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loans_user_id_foreign` (`user_id`);

--
-- Indexes for table `loan_bills`
--
ALTER TABLE `loan_bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loan_bills_user_id_foreign` (`user_id`),
  ADD KEY `loan_bills_loan_id_foreign` (`loan_id`);

--
-- Indexes for table `masyarakats`
--
ALTER TABLE `masyarakats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `masyarakats_nik_unique` (`nik`);

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
-- Indexes for table `profile_user`
--
ALTER TABLE `profile_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nik_unique` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infokerja`
--
ALTER TABLE `infokerja`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loan_bills`
--
ALTER TABLE `loan_bills`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `masyarakats`
--
ALTER TABLE `masyarakats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_user`
--
ALTER TABLE `profile_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_training_id_foreign` FOREIGN KEY (`training_id`) REFERENCES `training` (`id`),
  ADD CONSTRAINT `certificates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `loans`
--
ALTER TABLE `loans`
  ADD CONSTRAINT `loans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `loan_bills`
--
ALTER TABLE `loan_bills`
  ADD CONSTRAINT `loan_bills_loan_id_foreign` FOREIGN KEY (`loan_id`) REFERENCES `loans` (`id`),
  ADD CONSTRAINT `loan_bills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
