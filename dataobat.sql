-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 14.54
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataobat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_01_190034_create_post_table', 1),
(2, '2019_07_01_190418_create_penghasilan_table', 1),
(3, '2019_07_04_160757_create_log_activity_table', 1),
(4, '2019_07_07_035210_create_user_tabel', 2),
(5, '2019_07_09_094145_create_table_users', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghasilan`
--

CREATE TABLE `penghasilan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` enum('IYA','TIDAK') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'TIDAK',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penghasilan`
--

INSERT INTO `penghasilan` (`id`, `date`, `jumlah`, `deleted`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '2019-07-12', 'Rp.1.500.000', 'IYA', NULL, '2019-07-06 02:20:39', '2019-07-06 02:20:39'),
(2, '2019-07-13', 'Rp.1000.000', 'IYA', NULL, '2019-07-07 05:19:24', '2019-07-07 05:19:24'),
(3, '2019-07-09', 'Rp.2.100.000', 'TIDAK', NULL, '2019-07-09 10:08:15', '2019-07-15 04:47:19'),
(4, '2019-07-16', 'Rp.1.500.000', 'TIDAK', NULL, '2019-07-15 04:19:37', '2019-07-15 04:19:37'),
(5, '2019-07-15', 'Rp.2.000.000', 'TIDAK', NULL, '2019-07-15 04:46:57', '2019-07-15 04:46:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` enum('IYA','TIDAK') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'TIDAK',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `nama`, `stok`, `harga`, `jo`, `bobot`, `deleted`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Demolis', '23', 'Rp.50.000', 'BOTOL', '200ml', 'IYA', NULL, '2019-07-06 02:41:42', '2019-07-06 02:41:42'),
(2, 'demolisA', '12', 'Rp.50.000', 'BOTOL', '200ml', 'TIDAK', NULL, '2019-07-06 02:47:51', '2019-07-06 02:47:51'),
(3, 'demoliB', '1', 'Rp.50.000', 'BOTOL', '200ml', 'IYA', NULL, '2019-07-06 02:48:21', '2019-07-07 05:52:44'),
(4, 'arjuna', '16', 'Rp.50.000', 'SELECT', '100ml', 'IYA', NULL, '2019-07-07 00:04:59', '2019-07-07 00:04:59'),
(5, 'ndn', '16', 'Rp.60.000', 'PUPUK', '100ml', 'IYA', NULL, '2019-07-07 00:08:31', '2019-07-07 00:08:31'),
(6, 'demolic', '16', 'Rp.50.000', 'BOTOL', '200ml', 'TIDAK', NULL, '2019-07-09 00:43:36', '2019-07-09 00:43:36'),
(7, 'Roundap', '12', 'Rp.50.000', 'BOTOL', '200ml', 'IYA', NULL, '2019-07-09 08:52:39', '2019-07-09 08:52:39'),
(8, 'Roundap', '12', 'Rp.50.000', 'BOTOL', '200ml', 'TIDAK', NULL, '2019-07-09 09:21:37', '2019-07-09 09:21:37'),
(9, 'Arjuna', '10', 'Rp.75.000', 'BOTOL', '100ml', 'IYA', NULL, '2019-07-09 10:27:14', '2019-07-15 04:18:02'),
(10, 'Arton netus', '12', 'Rp.50.000', 'BOTOL', '200ml', 'IYA', NULL, '2019-07-15 04:17:33', '2019-07-15 04:45:30'),
(11, 'eraton', '16', 'Rp.50.000', 'BOTOL', '200ml', 'TIDAK', NULL, '2019-07-15 04:42:18', '2019-07-15 04:42:18'),
(12, 'tolak angin', '12', 'Rp.50.000', 'BOTOL', '100ml', 'TIDAK', NULL, '2019-07-15 04:45:04', '2019-07-15 04:45:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'frilia', 'nana@gmail.com', '*6084D98008B432CB0586F264', 'iniuyusbhjb', '2019-07-07 17:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penghasilan`
--
ALTER TABLE `penghasilan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penghasilan_id_unique` (`id`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_id_unique` (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `penghasilan`
--
ALTER TABLE `penghasilan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
