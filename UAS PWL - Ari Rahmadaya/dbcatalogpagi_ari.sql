-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jan 2023 pada 11.18
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcatalogpagi_ari`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(4, 3, 'Vitamin & Suplemen', '2023-01-21 06:20:58', '2023-01-21 06:52:16'),
(5, 3, 'Antibiotik', '2023-01-21 06:21:48', '2023-01-21 06:59:56'),
(7, 3, 'Salep', '2023-01-21 06:22:41', '2023-01-21 06:22:41'),
(8, 3, 'Obat Tetes', '2023-01-21 06:22:49', '2023-01-21 06:22:49'),
(9, 3, 'Herbal', '2023-01-21 06:43:39', '2023-01-21 06:43:39'),
(10, 3, 'Alat Kesehatan', '2023-01-21 07:12:21', '2023-01-21 07:12:21'),
(11, 3, 'Asam Lambung', '2023-01-21 07:21:19', '2023-01-21 07:21:19'),
(12, 3, 'Antiseptik', '2023-01-21 19:00:13', '2023-01-21 19:00:13'),
(13, 5, 'Ekstrak', '2023-01-21 22:28:45', '2023-01-21 22:28:45'),
(14, 5, 'Diabetes', '2023-01-24 06:37:11', '2023-01-24 06:37:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_30_074503_create_categories_table', 1),
(6, '2023_01_04_042931_create_products_table', 1),
(7, '2023_01_11_012744_update_table_category', 1),
(8, '2023_01_11_012929_update_table_product', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `name`, `price`, `photo`, `created_at`, `updated_at`) VALUES
(8, 3, 7, 'Salep 88', 12000, '63cc150ec8032.jpg', '2023-01-21 06:36:46', '2023-01-21 09:38:38'),
(9, 3, 9, 'Tolak Angin', 48000, '63cc15aecf166.jpg', '2023-01-21 06:47:19', '2023-01-21 09:42:16'),
(10, 3, 10, 'Kiranti', 5000, '63cbeddb23ba2.jpg', '2023-01-21 06:51:23', '2023-01-21 07:27:48'),
(11, 3, 11, 'Blackmores', 111200, '63cbeebd743c0.jpg', '2023-01-21 06:55:09', '2023-01-21 07:27:31'),
(12, 3, 4, 'Imboost F', 82000, '63cbef57417d0.jpg', '2023-01-21 06:57:43', '2023-01-21 17:52:06'),
(13, 3, 5, 'Ciprofloxacin', 3400, '63cbf03983fb5.jpg', '2023-01-21 07:01:29', '2023-01-21 07:29:47'),
(14, 3, 5, 'Amoxicillin', 12000, '63cccfb160f24.jpg', '2023-01-21 07:03:45', '2023-01-21 22:54:57'),
(16, 3, 8, 'Insto', 14000, '63cbf1d7cb7fc.jpg', '2023-01-21 07:08:23', '2023-01-21 07:08:23'),
(17, 3, 7, 'Kalpanax', 19200, '63cccf5941c81.jpg', '2023-01-21 07:09:12', '2023-01-21 22:53:29'),
(18, 3, 10, 'Testpack', 8800, '63cbf4482c200.jpg', '2023-01-21 07:18:48', '2023-01-21 07:31:52'),
(19, 3, 10, 'Spuit 1 cc', 2000, '63cbf4a1e2c22.jpg', '2023-01-21 07:20:17', '2023-01-21 07:20:17'),
(20, 3, 11, 'Promag', 7500, '63cbf51b5beac.jpg', '2023-01-21 07:22:19', '2023-01-21 07:22:19'),
(21, 3, 11, 'Omeprazole', 4400, '63cbf59d600a2.jpg', '2023-01-21 07:24:29', '2023-01-21 07:24:29'),
(22, 3, 4, 'Caviplex', 8700, '63cc9806a3884.jpg', '2023-01-21 18:57:26', '2023-01-21 18:57:26'),
(23, 3, 12, 'Hansaplast', 37000, '63cc98f9899c2.png', '2023-01-21 19:01:29', '2023-01-21 19:07:06'),
(24, 3, 12, 'Alkohol 70%', 11000, '63cc9a16734a2.jpeg', '2023-01-21 19:06:14', '2023-01-21 19:06:14'),
(25, 5, 13, 'Ekstrak Jahe', 32000, '63cccedce63f7.png', '2023-01-21 22:30:25', '2023-01-21 22:51:24'),
(26, 5, 13, 'Garcia', 99000, '63ccca4e7c0a4.jpg', '2023-01-21 22:31:58', '2023-01-21 22:32:42'),
(27, 5, 13, 'Mastin', 97000, '63cccb44a8c0d.jpg', '2023-01-21 22:36:04', '2023-01-21 22:36:04'),
(28, 5, 13, 'Kunyit', 20000, '63cccbb4eba42.jpg', '2023-01-21 22:37:56', '2023-01-21 22:39:01'),
(29, 3, 5, 'Metronidazol', 4400, '63cfdcc60e43f.jpg', '2023-01-24 06:27:34', '2023-01-24 06:33:19'),
(30, 3, 4, 'Folavit', 12000, '63cfdd417b20e.jpg', '2023-01-24 06:29:37', '2023-01-24 06:29:37'),
(31, 3, 9, 'Vermint', 23000, '63cfddf39c124.jpg', '2023-01-24 06:32:35', '2023-01-24 06:32:35'),
(32, 5, 14, 'Metformin', 3000, '63cfdfbd28a18.png', '2023-01-24 06:40:13', '2023-01-24 06:40:13'),
(33, 5, 14, 'Acarbose', 3900, '63cfe0815696a.jpg', '2023-01-24 06:43:29', '2023-01-24 06:43:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shoppingaris`
--

CREATE TABLE `shoppingaris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `buyer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyer_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyer_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `qty` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `shoppingaris`
--

INSERT INTO `shoppingaris` (`id`, `buyer_name`, `buyer_whatsapp`, `buyer_address`, `product_id`, `qty`, `total`, `note`, `created_at`, `updated_at`) VALUES
(1, 'bbb', '234567876543', 'asa', 26, 3, 297000, 'XL', '2023-01-27 13:08:10', '2023-01-27 13:08:10'),
(2, 'Ari', '082269140660', 'Sudirman', 25, 2, 64000, 'Bubuk', '2023-01-27 13:18:09', '2023-01-27 13:18:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'toko her', 'admin@google.com', NULL, '$2y$10$I0YhKybnzgg0EDK/KqnzKenuLKP1o7LqwXdHHJGEKA6OOeB22yW5u', NULL, '2023-01-10 18:38:03', '2023-01-21 06:39:02'),
(5, 'toko cin', 'admin2@google.com', NULL, '$2y$10$4w4vum7tgpnSU9q0Gk5gAeoxOdsZU.Uxr9Rd94x6itLHHrChWa2Wi', NULL, '2023-01-21 22:24:24', '2023-01-21 22:24:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shoppingaris`
--
ALTER TABLE `shoppingaris`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `shoppingaris`
--
ALTER TABLE `shoppingaris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
