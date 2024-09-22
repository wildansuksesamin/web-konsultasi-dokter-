-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2023 pada 12.43
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelaceptor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `konsultasi_id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaDokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesialis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasis`
--

CREATE TABLE `konsultasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'closed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi_has_role`
--

CREATE TABLE `konsultasi_has_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konsultasi_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi_user`
--

CREATE TABLE `konsultasi_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konsultasi_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `konsultasi_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `metadata`
--

CREATE TABLE `metadata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `metadata1s`
--

CREATE TABLE `metadata1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_12_06_131949_create_categories_table', 1),
(7, '2022_12_06_132041_create_posts_table', 1),
(8, '2022_12_10_093044_create_orders_table', 1),
(9, '2022_12_13_142957_create_admins_table', 1),
(10, '2023_01_22_114425_create_pages_table', 1),
(11, '2023_01_22_120920_create_metadata_table', 1),
(12, '2023_01_23_124029_create_media_table', 1),
(13, '2023_01_23_144838_create_rumahsakits_table', 1),
(14, '2023_01_25_023001_create_permission_tables', 1),
(15, '2023_01_25_171846_create_metadata1s_table', 1),
(16, '2023_01_27_233808_create_konsultasis_table', 1),
(17, '2023_01_27_235732_create_konsultasi_user_table', 1),
(18, '2023_01_27_235852_create_applicants_table', 1),
(19, '2023_01_28_000231_create_konsultasi_has_role_table', 1),
(20, '2023_01_28_000623_create_members_table', 1),
(21, '2023_01_28_000751_create_rooms_table', 1),
(22, '2023_01_28_085504_add_users_id_to_posts', 1),
(23, '2023_01_29_132537_create_konsultasi_table', 1),
(24, '2023_01_29_145547_add_users_id_to_konsultasi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `status` enum('pending','unpaid','paid') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.index', 'web', '2023-02-15 04:11:39', '2023-02-15 04:11:39'),
(2, 'konsultasi.index', 'web', '2023-02-15 04:11:39', '2023-02-15 04:11:39'),
(3, 'konsultasi.create', 'web', '2023-02-15 04:11:40', '2023-02-15 04:11:40'),
(4, 'konsultasi.edit', 'web', '2023-02-15 04:11:40', '2023-02-15 04:11:40'),
(5, 'konsultasi.delete', 'web', '2023-02-15 04:11:40', '2023-02-15 04:11:40'),
(6, 'roles.index', 'web', '2023-02-15 04:11:40', '2023-02-15 04:11:40'),
(7, 'roles.create', 'web', '2023-02-15 04:11:40', '2023-02-15 04:11:40'),
(8, 'roles.edit', 'web', '2023-02-15 04:11:40', '2023-02-15 04:11:40'),
(9, 'roles.delete', 'web', '2023-02-15 04:11:40', '2023-02-15 04:11:40'),
(10, 'permissions.index', 'web', '2023-02-15 04:11:41', '2023-02-15 04:11:41');

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
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `tittel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-02-15 04:11:52', '2023-02-15 04:11:52'),
(2, 'dokter', 'web', '2023-02-15 04:11:52', '2023-02-15 04:11:52'),
(3, 'user', 'web', '2023-02-15 04:11:52', '2023-02-15 04:11:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `konsultasi_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumahsakits`
--

CREATE TABLE `rumahsakits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(101, 'Gadang Saefullah', 'waskita.kardi@wibisono.web.id', NULL, '$2y$10$SL9Ih134xFO8v1meTajY0O.ngb9BkljfHLy.N.N2G0..zhDwwfOpO', NULL, NULL, NULL, NULL, '2023-02-15 04:20:57', '2023-02-15 04:20:57'),
(102, 'Febi Wastuti M.Pd', 'harimurti.pangestu@gmail.co.id', NULL, '$2y$10$ec0w426TX0.PAbJpEv1BhuZboHc9QUSZ/PH1aodN7A7wFk4j58SXm', NULL, NULL, NULL, NULL, '2023-02-15 04:20:58', '2023-02-15 04:20:58'),
(103, 'Mahfud Suwarno', 'hesti.uwais@maryadi.co.id', NULL, '$2y$10$CvfVblhGdtn08D21fIVxs.ub9bfbmHQbbmh4H7qE/2k9ixgwrO/3a', NULL, NULL, NULL, NULL, '2023-02-15 04:20:58', '2023-02-15 04:20:58'),
(104, 'Cager Tarihoran', 'dono.nababan@gmail.com', NULL, '$2y$10$kwzi0MJcdS94Aq2SXw.6WuB1vqJ4kHW1nYD0YZYPh.USe6F6NtXS.', NULL, NULL, NULL, NULL, '2023-02-15 04:20:58', '2023-02-15 04:20:58'),
(105, 'Carub Widodo', 'usitumorang@gmail.co.id', NULL, '$2y$10$581pFniXDuv2j3wdjNNsnOFraRGrWeosZO6NX0gGkwsAHebp11LKy', NULL, NULL, NULL, NULL, '2023-02-15 04:20:58', '2023-02-15 04:20:58'),
(106, 'Cinthia Padmi Handayani', 'novitasari.hasna@tamba.web.id', NULL, '$2y$10$.80kNNV0yZipkKxW48ZfYOWwNsT4xmhe88SLHfvjQ0kofj2n5gTBG', NULL, NULL, NULL, NULL, '2023-02-15 04:20:58', '2023-02-15 04:20:58'),
(107, 'Radika Maryadi', 'laksita.oni@januar.web.id', NULL, '$2y$10$xGMBRBbYxH0uhkXth5OXFem2z7WkkXwnSEkU2aNYr9xunvOiK0CpK', NULL, NULL, NULL, NULL, '2023-02-15 04:20:58', '2023-02-15 04:20:58'),
(108, 'Hasta Iswahyudi M.TI.', 'janet78@haryanti.my.id', NULL, '$2y$10$8t.gvS6jy2ReOJTPcQVS3OIBRMjYW9nWisDZdudy/AEr2vaPzdpHy', NULL, NULL, NULL, NULL, '2023-02-15 04:20:59', '2023-02-15 04:20:59'),
(109, 'Lukman Kala Simanjuntak', 'fnasyiah@yahoo.com', NULL, '$2y$10$uvk97R1CwCZwRWETUWciLu//iYJDIzrkhTQ2bEZn2.HkdHLKB2g72', NULL, NULL, NULL, NULL, '2023-02-15 04:20:59', '2023-02-15 04:20:59'),
(110, 'Asirwanda Tamba', 'paulin.lailasari@setiawan.go.id', NULL, '$2y$10$mL/S8E1xlx7tGpFvMG/zaeJ/UYy.Egy37nqxsVUBXXUEcd7Jo.Grm', NULL, NULL, NULL, NULL, '2023-02-15 04:20:59', '2023-02-15 04:20:59'),
(111, 'Luhung Haryanto', 'salahudin.sari@gmail.co.id', NULL, '$2y$10$yr2w8KrRZtIkmJ1Id95SyuPKm8N0eozIiizGC5jhqlR1HvxDqAHVe', NULL, NULL, NULL, NULL, '2023-02-15 04:20:59', '2023-02-15 04:20:59'),
(112, 'Erik Irawan', 'wastuti.raisa@yahoo.co.id', NULL, '$2y$10$rs5q/3q217tyBTyCg8Aqc.2O5AJJIae8cBbNPSnGcoWcfiVKBrt1W', NULL, NULL, NULL, NULL, '2023-02-15 04:20:59', '2023-02-15 04:20:59'),
(113, 'Prayitna Pranowo S.Kom', 'handayani.kardi@gmail.com', NULL, '$2y$10$06DyFhU2VUdosNu5z7aV5u5I00dZsKK6JjMqZ/xVDQ1No16o9A2V6', NULL, NULL, NULL, NULL, '2023-02-15 04:21:00', '2023-02-15 04:21:00'),
(114, 'Yuni Maimunah Palastri S.IP', 'hardiansyah.prabowo@wijaya.id', NULL, '$2y$10$96JJRGDnuTOsRNI99z5J8uudlGbxqvoaY9YaMtkCnPWWooQP9qN0K', NULL, NULL, NULL, NULL, '2023-02-15 04:21:00', '2023-02-15 04:21:00'),
(115, 'Dwi Eko Rajata', 'yuliarti.usyi@namaga.com', NULL, '$2y$10$KnZ6l89Wqnvk3KIqyOkPK.F1IsqiHuV7kj2WeXrA14uC4/.BjynK.', NULL, NULL, NULL, NULL, '2023-02-15 04:21:00', '2023-02-15 04:21:00'),
(116, 'Zulfa Palastri', 'lyolanda@yahoo.co.id', NULL, '$2y$10$mkDPK0v3gv9iPKBJFWJNdOBo0ydCJb2ylkA/Yig.BuwnsmIvlgz9O', NULL, NULL, NULL, NULL, '2023-02-15 04:21:00', '2023-02-15 04:21:00'),
(117, 'Nrima Zulkarnain S.E.I', 'whutagalung@pranowo.ac.id', NULL, '$2y$10$5m8GM8X3zCgHGh2NAQYUGesiOy4.YBcE5PqXccxs87O8Sk90SX5Mi', NULL, NULL, NULL, NULL, '2023-02-15 04:21:00', '2023-02-15 04:21:00'),
(118, 'Candrakanta Rajasa', 'cwijaya@dabukke.name', NULL, '$2y$10$1Hlttry9lvNCdQw0xbvAPOGVlhDeB/a7WFFrF/s2KSiVUtsTZ7q1e', NULL, NULL, NULL, NULL, '2023-02-15 04:21:00', '2023-02-15 04:21:00'),
(119, 'Bakiadi Najmudin', 'almira.suryono@sitompul.org', NULL, '$2y$10$n20HXeIGaMgg/a.lE7q.guQso5O5YWNWPBeqIaMo.YfZoRIbjTdLa', NULL, NULL, NULL, NULL, '2023-02-15 04:21:01', '2023-02-15 04:21:01'),
(120, 'Azalea Ami Kusmawati S.Pt', 'fitriani.nurdiyanti@rahayu.com', NULL, '$2y$10$dCu2FUXFCLjjropwescwT.y8EaiSWWTYMUTE5e9xd4/5AMh.br7oe', NULL, NULL, NULL, NULL, '2023-02-15 04:21:01', '2023-02-15 04:21:01'),
(121, 'Restu Yolanda', 'widiastuti.caraka@budiyanto.name', NULL, '$2y$10$w.EC3qPDrezih7KdMQfK6eAphYaNWLjgH7poLx92IfzAWy8YHdTEu', NULL, NULL, NULL, NULL, '2023-02-15 04:21:01', '2023-02-15 04:21:01'),
(122, 'Enteng Winarno S.Sos', 'darijan09@wijayanti.biz', NULL, '$2y$10$2.TXG.4pouYQyVZryTRK3e8an0dBmNKdTOpd9VJ.aV/wySk1Cq0m.', NULL, NULL, NULL, NULL, '2023-02-15 04:21:01', '2023-02-15 04:21:01'),
(123, 'Wulan Latika Susanti S.E.I', 'irma.widodo@yahoo.co.id', NULL, '$2y$10$tHX.NgIjacTm2cK6fxsPLuDMfdTqL0yNLtvajzflv1kKTnoSfWUzS', NULL, NULL, NULL, NULL, '2023-02-15 04:21:01', '2023-02-15 04:21:01'),
(124, 'Karna Lazuardi', 'uwahyuni@yahoo.co.id', NULL, '$2y$10$9dnfNP20Z/PhO/.HBh/ni.xGbFG2IFVCMo4kdrwn/aXt2ZvLCnEdO', NULL, NULL, NULL, NULL, '2023-02-15 04:21:02', '2023-02-15 04:21:02'),
(125, 'Lega Winarno', 'whidayat@sitompul.com', NULL, '$2y$10$7JU25aIsrOd8zC4blN6ahukArs5FQtc3MxNZJaauvtctJHL5BFTCK', NULL, NULL, NULL, NULL, '2023-02-15 04:21:02', '2023-02-15 04:21:02'),
(126, 'Zalindra Wijayanti', 'ida54@prastuti.asia', NULL, '$2y$10$H2VJnGJR.Nd5/xvgtouo3eLXcL/PJTIRZIrylDsp/TGs2kapFL/ti', NULL, NULL, NULL, NULL, '2023-02-15 04:21:02', '2023-02-15 04:21:02'),
(127, 'Ana Yuniar', 'rmegantara@yahoo.com', NULL, '$2y$10$O/FStG9op0t4GsHI7xF.rOLnp84oHueRI9WnC00m41QnwiRIyG/oG', NULL, NULL, NULL, NULL, '2023-02-15 04:21:02', '2023-02-15 04:21:02'),
(128, 'Raditya Pratama', 'lharyanti@budiman.web.id', NULL, '$2y$10$yLhnwN/U.DDiPWtEOC8vEORpG0SwlUmvpHyG6Ih5pwYCrrIHuB8Je', NULL, NULL, NULL, NULL, '2023-02-15 04:21:02', '2023-02-15 04:21:02'),
(129, 'Ani Hani Mardhiyah M.Kom.', 'nadine30@yahoo.co.id', NULL, '$2y$10$j4dqYmXZjZ0a/g51q8g9p.ux39OisabM5S9LiPljH3SEkZBnzuOT2', NULL, NULL, NULL, NULL, '2023-02-15 04:21:02', '2023-02-15 04:21:02'),
(130, 'Opung Firmansyah', 'ulya.maryati@tampubolon.co', NULL, '$2y$10$zi0Wu/UjmW.nPTn5DlB8m.1Gxoyw9Mc7zGUpb4wObr14TG3473Kei', NULL, NULL, NULL, NULL, '2023-02-15 04:21:02', '2023-02-15 04:21:02'),
(131, 'Oni Pertiwi S.Kom', 'dadi.sihotang@gmail.co.id', NULL, '$2y$10$C7a2XlPVzu0xrtn5SCJFR.xs32jJDSFf1AVk3sAW72ciqI1msfdRW', NULL, NULL, NULL, NULL, '2023-02-15 04:21:03', '2023-02-15 04:21:03'),
(132, 'Usyi Nuraini', 'jaeman.wahyuni@winarno.web.id', NULL, '$2y$10$r/2z9yXZb4OFIJ5MHZJQKecdD2jcK8IyzlVFPVGpqCEsGG0PmrtWi', NULL, NULL, NULL, NULL, '2023-02-15 04:21:03', '2023-02-15 04:21:03'),
(133, 'Ghaliyati Nasyiah', 'rahayu.mujur@yahoo.com', NULL, '$2y$10$x0oYLbIpF6JjyMszG6MS1OeppxXJAi4MyRVdrXcHSbwzQLmsVa4u6', NULL, NULL, NULL, NULL, '2023-02-15 04:21:03', '2023-02-15 04:21:03'),
(134, 'Hafshah Fujiati M.TI.', 'samosir.syahrini@suryono.ac.id', NULL, '$2y$10$8pXLAk4KDBUPHHNaQXHWMeSQT751zNTsgg4.otGRlwwtRR6PZFBlK', NULL, NULL, NULL, NULL, '2023-02-15 04:21:03', '2023-02-15 04:21:03'),
(135, 'Yessi Namaga', 'irsad10@yahoo.co.id', NULL, '$2y$10$NBKOK/2nLbJicEWr2orBseuqwdKqFrDIvrDt9k6p27srTjrPY.0VS', NULL, NULL, NULL, NULL, '2023-02-15 04:21:03', '2023-02-15 04:21:03'),
(136, 'Karja Wibowo', 'permadi.hamima@gmail.co.id', NULL, '$2y$10$1OUvq7NoSEnZTyrpHoeHA.8kLndK2kel39yYx8gkjzx3h63jOS83u', NULL, NULL, NULL, NULL, '2023-02-15 04:21:03', '2023-02-15 04:21:03'),
(137, 'Gara Saka Megantara', 'restu.novitasari@yahoo.com', NULL, '$2y$10$MyIQdK2owkqZOM/Ll/fQB.cthaTR/cEjnR8WC8betHqEsE5kXltte', NULL, NULL, NULL, NULL, '2023-02-15 04:21:03', '2023-02-15 04:21:03'),
(138, 'Mala Hariyah', 'niyaga94@yahoo.com', NULL, '$2y$10$gosATmx2.i2xXNOBSgtAEefiXMjHjHuFF8mE6MKY1NbX/pG0Pela2', NULL, NULL, NULL, NULL, '2023-02-15 04:21:04', '2023-02-15 04:21:04'),
(139, 'Ivan Nainggolan', 'usamah.queen@gmail.co.id', NULL, '$2y$10$TfUGFrJywsw9J.061803Z.Kdq3DTobmw6lhx2ljjZsg7alyCHTew2', NULL, NULL, NULL, NULL, '2023-02-15 04:21:04', '2023-02-15 04:21:04'),
(140, 'Septi Andriani', 'tasdik04@puspasari.co', NULL, '$2y$10$8WxlJnQ6iqb897Lrh.atY.U3x12w/yX/iiiS64WacmEGzwcmRLeJq', NULL, NULL, NULL, NULL, '2023-02-15 04:21:04', '2023-02-15 04:21:04'),
(141, 'Imam Setiawan', 'pranowo.mahmud@gmail.co.id', NULL, '$2y$10$st3wbGgU3SpMaStaA2pwVuScoy18Em4Qs9gvZmr8as2fJHFhhuslm', NULL, NULL, NULL, NULL, '2023-02-15 04:21:04', '2023-02-15 04:21:04'),
(142, 'Tari Puti Kuswandari', 'aditya.wijayanti@melani.biz.id', NULL, '$2y$10$j.kvENVtixHXmkmrZyKRs.jkdGftuPz57cldtN.q7qmVVG6JvkTkC', NULL, NULL, NULL, NULL, '2023-02-15 04:21:04', '2023-02-15 04:21:04'),
(143, 'Samiah Rahimah M.Pd', 'adikara44@siregar.go.id', NULL, '$2y$10$CfXIC//QZhxRtll.QK.fXO8D.keqZx/egNY3bvOmA9sXUXmshPW7q', NULL, NULL, NULL, NULL, '2023-02-15 04:21:04', '2023-02-15 04:21:04'),
(144, 'Zahra Riyanti', 'fathonah15@budiyanto.id', NULL, '$2y$10$AwPzSUyNWIrQ8ykMZbFl0eKi6BQxaofd9FP7IKdvX9X3vknlXcH/.', NULL, NULL, NULL, NULL, '2023-02-15 04:21:04', '2023-02-15 04:21:04'),
(145, 'Mulya Adriansyah', 'tantri.suryatmi@rahimah.desa.id', NULL, '$2y$10$DVMSiAZrTROpPmsKTlMk1elcXAHmWROyqnzR0vizTeybRGNTeTZPK', NULL, NULL, NULL, NULL, '2023-02-15 04:21:05', '2023-02-15 04:21:05'),
(146, 'Aurora Nurdiyanti S.E.', 'osiregar@gmail.co.id', NULL, '$2y$10$t/kO5zWfo4iAgxUyB.Y7J./5Z3WhT/f.h8EdJAJIv8ALNUkhledF.', NULL, NULL, NULL, NULL, '2023-02-15 04:21:05', '2023-02-15 04:21:05'),
(147, 'Raden Wahyu Simbolon M.Ak', 'rosman94@safitri.id', NULL, '$2y$10$Yds2rYI/kTsQHL5axuyIEuAUlkFH6VSCrEptlKI9NMTowcM0F6xpm', NULL, NULL, NULL, NULL, '2023-02-15 04:21:05', '2023-02-15 04:21:05'),
(148, 'Prayogo Pranowo', 'zulaika.lidya@dongoran.asia', NULL, '$2y$10$1Jq.e3Qh2ktxK4HXBmDRv.gWCMdMKRzm98txhd2h1IXerjM2SjL7C', NULL, NULL, NULL, NULL, '2023-02-15 04:21:05', '2023-02-15 04:21:05'),
(149, 'Shania Amalia Yolanda', 'caket.uwais@oktaviani.or.id', NULL, '$2y$10$1wr4I2NvIolyiSSj5ALAj.tNUObte.M4b6WCNUe/a0rQvV2xpG6w.', NULL, NULL, NULL, NULL, '2023-02-15 04:21:05', '2023-02-15 04:21:05'),
(150, 'Prabu Permadi', 'qsuryatmi@yahoo.co.id', NULL, '$2y$10$nL6uuOhvKoloDUUeQX/HIejxnQh.Ab3uS2s6dGKj7kgl4NjLPz2Du', NULL, NULL, NULL, NULL, '2023-02-15 04:21:05', '2023-02-15 04:21:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indeks untuk tabel `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicants_user_id_foreign` (`user_id`),
  ADD KEY `applicants_konsultasi_id_foreign` (`konsultasi_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konsultasis`
--
ALTER TABLE `konsultasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konsultasis_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `konsultasi_has_role`
--
ALTER TABLE `konsultasi_has_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konsultasi_has_role_konsultasi_id_foreign` (`konsultasi_id`);

--
-- Indeks untuk tabel `konsultasi_user`
--
ALTER TABLE `konsultasi_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konsultasi_user_konsultasi_id_foreign` (`konsultasi_id`),
  ADD KEY `konsultasi_user_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_user_id_foreign` (`user_id`),
  ADD KEY `members_konsultasi_id_foreign` (`konsultasi_id`),
  ADD KEY `members_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `metadata`
--
ALTER TABLE `metadata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `metadata1s`
--
ALTER TABLE `metadata1s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_konsultasi_id_foreign` (`konsultasi_id`);

--
-- Indeks untuk tabel `rumahsakits`
--
ALTER TABLE `rumahsakits`
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
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konsultasis`
--
ALTER TABLE `konsultasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konsultasi_has_role`
--
ALTER TABLE `konsultasi_has_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konsultasi_user`
--
ALTER TABLE `konsultasi_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `metadata`
--
ALTER TABLE `metadata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `metadata1s`
--
ALTER TABLE `metadata1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rumahsakits`
--
ALTER TABLE `rumahsakits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `applicants`
--
ALTER TABLE `applicants`
  ADD CONSTRAINT `applicants_konsultasi_id_foreign` FOREIGN KEY (`konsultasi_id`) REFERENCES `konsultasis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applicants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `konsultasis`
--
ALTER TABLE `konsultasis`
  ADD CONSTRAINT `konsultasis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `konsultasi_has_role`
--
ALTER TABLE `konsultasi_has_role`
  ADD CONSTRAINT `konsultasi_has_role_konsultasi_id_foreign` FOREIGN KEY (`konsultasi_id`) REFERENCES `konsultasis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `konsultasi_user`
--
ALTER TABLE `konsultasi_user`
  ADD CONSTRAINT `konsultasi_user_konsultasi_id_foreign` FOREIGN KEY (`konsultasi_id`) REFERENCES `konsultasis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `konsultasi_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_konsultasi_id_foreign` FOREIGN KEY (`konsultasi_id`) REFERENCES `konsultasis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `members_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `konsultasi_has_role` (`id`),
  ADD CONSTRAINT `members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_konsultasi_id_foreign` FOREIGN KEY (`konsultasi_id`) REFERENCES `konsultasis` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
