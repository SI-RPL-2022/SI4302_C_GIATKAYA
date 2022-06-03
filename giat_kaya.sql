-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giat_karya`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `training_id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `infokerja`
--

CREATE TABLE `infokerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gaji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Table structure for table `masyarakats`
--

CREATE TABLE `masyarakats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` int(11) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toko` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2022_04_04_083513_create_masyarakats_table', 1),
(6, '2022_04_07_031357_create_profile_user', 1),
(7, '2022_04_17_144907_training_skills', 1),
(8, '2022_04_17_145032_lapangan_kerja', 1),
(9, '2022_05_21_163443_create_certificates_table', 2);

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
-- Table structure for table `profile_user`
--

CREATE TABLE `profile_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` int(11) NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` int(11) NOT NULL,
  `Nama_Usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_toko` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_berdiri` date NOT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_training` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode_training` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_training` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_rilis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kualitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_pelatihan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trainer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto_profil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `nomor` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usaha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bidang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toko` int(11) DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `foto_profil`, `name`, `email`, `email_verified_at`, `nomor`, `alamat`, `password`, `status`, `tahun`, `tanggal`, `gender`, `nik`, `usaha`, `bidang`, `toko`, `foto`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Administrator', 'admin@gmail.com', NULL, '082217767566', 'Jl. Pemuda Pancasila', '$2y$10$LXTyKe7UaIDxCL6ppzAMkufJcesg10LxY2451oavh24QcJRswe9AK', '1', NULL, NULL, 'Laki-laki', NULL, NULL, NULL, NULL, NULL, '1', NULL, '2022-05-16 06:39:44', '2022-05-16 06:39:44'),
(2, 'windah.jpg', 'ALAM ADHIYATAMA', 'itempunya139@gmail.com', NULL, '082217767566', 'KOMPLEK SARUNI PERMAI BLOK 4 NO 12', '$2y$10$LXTyKe7UaIDxCL6ppzAMkufJcesg10LxY2451oavh24QcJRswe9AK', '1', 2017, '2001-06-18', 'Laki-laki', '36813418080104', 'GudangTeknologi', 'Teknologi', 1, '1652795089.jpg', '0', NULL, '2022-05-17 06:44:49', '2022-05-17 06:46:18');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infokerja`
--
ALTER TABLE `infokerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `masyarakats`
--
ALTER TABLE `masyarakats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `profile_user`
--
ALTER TABLE `profile_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_training_id_foreign` FOREIGN KEY (`training_id`) REFERENCES `training` (`id`),
  ADD CONSTRAINT `certificates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
