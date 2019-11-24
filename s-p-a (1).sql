-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2019 pada 15.28
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s-p-a`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calas`
--

CREATE TABLE `calas` (
  `id` int(10) UNSIGNED NOT NULL,
  `npm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `krs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kelulusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `calas`
--

INSERT INTO `calas` (`id`, `npm`, `nama`, `kelas`, `jurusan`, `fakultas`, `alamat`, `nomor_telepon`, `krs`, `avatar`, `user_id`, `status_kelulusan`, `created_at`, `updated_at`) VALUES
(1, '51416339', 'Bambang Solehudin', '4IA05', 'Teknik Informatika', 'Teknologi INdustri', 'Bogor', '081284418504', 'img/krs/krs.jpg', 'img/avatar/bambang.jpg', '1', 'Lulus', NULL, '2019-11-18 07:34:11'),
(16, '51416339', 'Bambang Solehudin', '4IA01', 'Teknik Mesin', 'sasasa', 'bogor', '081284418504', 'krs/krs.jpg', 'avatar/bambang.jpg', '39', 'Tidak Lulus', '2019-11-07 06:21:59', '2019-11-07 06:21:59'),
(17, '51416339', 'bambang', '4IA01', 'Teknik Kimia', 'Teknologi Pangan', 'jl samber gledek no 90 re3 rw2', '081284418504', 'krs/krs.jpg', 'avatar/bambang.jpg', '40', 'Tidak Lulus', '2019-11-07 06:26:00', '2019-11-07 06:26:00'),
(18, '51416339', 'Jihad Wibu', '4IA02', 'Teknik Mesin', 'Teknologi Pangan', 'Jl. WIbu 23', '9788278320', 'krs/krs.jpg', 'avatar/bambang.jpg', '41', 'Tidak Lulus', '2019-11-07 07:16:57', '2019-11-18 07:35:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_05_091950_create_calas_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bambang Solehudin', 'bamsolwibu@gmail.com', NULL, '$2y$10$zTtHgCeneUR52CFUR2xJieU1iSWPGMTRD1AEpkQh9JYrxFQ.DOJ1y', 'admin', 'ANnbPnsXXWAj8tcwoTTOI3KpsCwbkxlZQW1Qr3R6fvKEXZJK3hmjtaBpGLb5', '2019-11-05 02:33:36', '2019-11-05 02:33:36'),
(40, 'bambang', 'bamsolotaku@gmail.com', NULL, '$2y$10$bzKM7gcniwlDpLEmyhcZZOmx7ullmk9lNVIofIKtV9PPViUZmqXo.', 'calas', 'soTwVUO2YUWiAUdzl0bELTkur0bPIka1z0L1FRXWr3aMM75IB8QqSRxr9bc5', '2019-11-07 06:26:00', '2019-11-07 06:26:00'),
(41, 'Jihad Wibu', 'jurgen@gmail.com', NULL, '$2y$10$jU5rK.agggFwqArTeubl5OTuk9I49HGhIXmGxJLRYhf3sVJNO8856', 'calas', 'GvkSwu87xs8Owqlj5kPNEAgKafRjqkYN7a686GJv6a1sUh457sJWU4kRpAaQ', '2019-11-07 07:16:56', '2019-11-07 07:16:56'),
(42, 'bambang budiman', 'bamsolwibu48@gmail.com', NULL, '$2y$10$MATQkWwFosaq3Uvipnndt.Guk.MmHflZ2EAC9mziWoxGfN0LKWk2a', 'calas', 'JVstQ7PckexdJ5HDRxndM9xUywKNdkXEb2yvqLtydPp6G5MHA2x6rpw2Mv4N', '2019-11-18 03:13:53', '2019-11-18 03:13:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calas`
--
ALTER TABLE `calas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calas`
--
ALTER TABLE `calas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
