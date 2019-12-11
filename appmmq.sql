-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 06:05 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appmmq`
--

-- --------------------------------------------------------

--
-- Table structure for table `fotografer`
--

CREATE TABLE `fotografer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `handphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portofolio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fotografer`
--

INSERT INTO `fotografer` (`id`, `user_id`, `kota_id`, `handphone`, `portofolio`, `created_at`, `updated_at`) VALUES
(4, 6, 1, '0856483673848', 'pdf/HzJfuneS8HDkoS911ax9W4txMw5ShoXLhwlBw8hZ.pdf', NULL, NULL),
(5, 5, 1, '08587362827', 'pdf/Kmy8USacBG1v78a2pTnScRaYlF8PPC8jYjgOf9hJ.pdf', NULL, NULL),
(6, 7, 5, '0858758762', 'pdf/BqYImngx6Y3DfKgIYBzJDUF6RTGiaiWk4Rn5dtmc.pdf', NULL, NULL),
(7, 8, 9, '0859382028473', 'pdf/aLFezmOB7yso7jVdCjJ5BwIR56cj66UQQ0WNNOfA.pdf', NULL, NULL),
(8, 9, 7, '08576367856', 'pdf/4ZBhp8sCRWhZhTxeliXTWrl5HcKv3I9nDfJpAjB9.pdf', NULL, NULL),
(9, 12, 2, '08547382712', 'pdf/dOsV4owbBvE4RAplBH4e2pUfLMD8bNAjcu0NPbrn.pdf', NULL, NULL),
(10, 10, 11, '0856483673848', 'pdf/h42sCGpadvh5dlSik3i5I9eU2LzP60hkgEiDics0.pdf', NULL, NULL),
(11, 14, 4, '081383078507', 'pdf/lITwjJjShZCCJof8RQWk9f7Ziuc0sAZem0lwbu9o.pdf', NULL, NULL),
(12, 16, 8, '085783882', 'pdf/wN9UyjCGe9f5cqBy1sgabHvYpffU8Xx46K1OwK8c.pdf', NULL, NULL),
(13, 17, 6, '087383712', 'pdf/tN8Qu7weYiWmC5iKLQFbDLZwEdl5TtwIKiDK0PTK.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `foto` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `user_id`, `foto`, `created_at`, `updated_at`) VALUES
(4, 7, 'foto/qEbISHjm8kO6KPOHGARpPZsIhOzqGOiaVK1VQnqg.jpeg', '2019-11-12 11:19:44', '2019-11-12 11:19:44'),
(5, 7, 'foto/BpOxOlVBeB9itXenKqeV8E3kdBNHuRK3G6S0KTxz.jpeg', '2019-11-12 11:20:01', '2019-11-12 11:20:01'),
(6, 7, 'foto/GKuFahqpg9ka5nndTqmNEJFZcPXa1RpQSF3tOFwP.jpeg', '2019-11-12 11:20:22', '2019-11-12 11:20:22'),
(7, 7, 'foto/htQurPHAxOSWdThuSetxTRkmuRDNCfBR5TzL5Nya.jpeg', '2019-11-12 11:20:35', '2019-11-12 11:20:35'),
(8, 7, 'foto/mhDT0eWQyAQtkngJJX9j8VSkXzBqlPCke65oz3aO.png', '2019-11-12 11:20:47', '2019-11-12 11:20:47'),
(9, 5, 'foto/zfpPrIpwMkJ4S1jc2IZW7Ub8xbEfzmq9549lgikB.jpeg', '2019-11-12 11:22:31', '2019-11-12 11:22:31'),
(10, 5, 'foto/dplQmdSF1B1oOpre2NukyeKLlF60gcRtJCAUEiQY.jpeg', '2019-11-12 11:22:43', '2019-11-12 11:22:43'),
(11, 5, 'foto/v2N66Jm4SfmQy3yFaPRDP6EetUWu63t2JU88g67B.jpeg', '2019-11-12 11:22:52', '2019-11-12 11:22:52'),
(12, 5, 'foto/LKdSiSn1LLjABPbAcHycyT7oZferkPtnwqxuPyOm.jpeg', '2019-11-12 11:23:10', '2019-11-12 11:23:10'),
(14, 6, 'foto/3N5yggpFyFebiAiRn4RO8rDebWm03QFFXDn6tUKI.jpeg', '2019-11-12 11:24:34', '2019-11-12 11:24:34'),
(15, 6, 'foto/amJJntsdx3SH2D73G2umkjp4QDf1fiOcbRA0Mtiv.jpeg', '2019-11-12 11:24:35', '2019-11-12 11:24:35'),
(16, 6, 'foto/VXftc6LwEQksJ2l3s2WYPrLdHlFNWqmOcFiRDUVZ.jpeg', '2019-11-12 11:25:15', '2019-11-12 11:25:15'),
(17, 6, 'foto/tIvGhel0cYuGv54sXLgeRfgnIfzenu1j5CXbh9z1.jpeg', '2019-11-12 11:25:37', '2019-11-12 11:25:37'),
(18, 6, 'foto/UHS4ylSrhtvLvZdbdz9mcQjGUK6keDeXdUfLmTwG.jpeg', '2019-11-12 11:25:49', '2019-11-12 11:25:49'),
(19, 8, 'foto/DqPTxRvpIuETGZIY4sddzAwLUPz2qvNusVjfbyTR.jpeg', '2019-11-12 11:29:15', '2019-11-12 11:29:15'),
(20, 8, 'foto/ktIfNSZnx61jV8S4Ox0XNP9l9pFYP60Zt9QLMmGw.jpeg', '2019-11-12 11:29:32', '2019-11-12 11:29:32'),
(21, 8, 'foto/T0AGLwEbZXvF6KnRzrlC1efLVTekKcVOnLUyoJ9o.jpeg', '2019-11-12 11:29:41', '2019-11-12 11:29:41'),
(22, 8, 'foto/Go2C4auI0Lz1WGazEOJdfmAK8jUlDlmj8vz7Gp8Z.jpeg', '2019-11-12 11:29:51', '2019-11-12 11:29:51'),
(23, 8, 'foto/Nn99iDstskXzIEX57HWqBpCY422kopCpDYqvxgVj.jpeg', '2019-11-12 11:30:01', '2019-11-12 11:30:01'),
(24, 9, 'foto/8TOcjPZEvuvgo9roUjgN88OtjTpRXBaP4pRK7wLv.jpeg', '2019-11-12 11:32:54', '2019-11-12 11:32:54'),
(25, 9, 'foto/1lq81L6XHlqUQLyvxJz0g08SXPPI7AWKIpqZ0fMv.jpeg', '2019-11-12 11:33:08', '2019-11-12 11:33:08'),
(26, 9, 'foto/Gu2XcNIcFps2KmnBy1jG4Ntv2oQLZSYCCQFm2jyY.jpeg', '2019-11-12 11:33:22', '2019-11-12 11:33:22'),
(27, 9, 'foto/OJ7zkiO7oL82lT9o32sHnXXLf2PczAdYVg942hF1.jpeg', '2019-11-12 11:33:59', '2019-11-12 11:33:59'),
(28, 10, 'foto/D8x4gbqBCa0BtrrLHqsQQDRlTRHh0rhMrWDXrMAc.jpeg', '2019-11-12 11:39:36', '2019-11-12 11:39:36'),
(29, 10, 'foto/Gyhj9qrdx8Ui4zwzr3pTrDDjuxmQipHOOhKhxNEp.jpeg', '2019-11-12 11:40:56', '2019-11-12 11:40:56'),
(30, 10, 'foto/6jfv9wbPxINeLZFIWOFqyK2dJ8gSYAm18FqSe1ex.jpeg', '2019-11-12 11:41:09', '2019-11-12 11:41:09'),
(31, 5, 'foto/4QAEKFpoK8YggsfkP96R8bsUgAiMTq6BOmoaqhAG.jpeg', '2019-11-14 13:16:38', '2019-11-14 13:16:38'),
(32, 12, 'foto/IjGDKT7joFP10z8sGDyoYhHhpjWPWTwqkfkkGGk0.jpeg', '2019-11-20 08:37:38', '2019-11-20 08:37:38'),
(33, 12, 'foto/JvnVDbrxIxI65N7mYy5KPZgagUbQAra8I1sDqkoa.jpeg', '2019-11-20 08:37:53', '2019-11-20 08:37:53'),
(34, 12, 'foto/753Ken8MHNLJjZ95kV8cPOqNl3SKaAhqjKd1luFW.jpeg', '2019-11-20 08:38:10', '2019-11-20 08:38:10'),
(35, 16, 'foto/wYlMXyyL526J8erjU182xH712QwS3BoNSkVUAXhN.jpeg', '2019-12-08 13:30:55', '2019-12-08 13:30:55'),
(36, 16, 'foto/UN0mN38Wh59fMgIEZ6vAzT0iSqM3JILjpkS85WP2.jpeg', '2019-12-08 13:31:24', '2019-12-08 13:31:24'),
(39, 17, 'foto/CXDwVjn5CKbildJKdboNROUP0izNLT9vA4ttaJa1.jpeg', '2019-12-08 13:36:07', '2019-12-08 13:36:07'),
(40, 17, 'foto/sugUgajgFZj87MN4ubSLJcHb0KlErqUpDKWnEBAq.jpeg', '2019-12-08 13:36:23', '2019-12-08 13:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Jember', '2019-11-10 11:57:49', '2019-11-14 12:15:35'),
(2, 'Banyuwangi', '2019-11-10 12:02:49', '2019-11-14 12:13:51'),
(4, 'Bondowoso', '2019-11-10 12:42:39', '2019-11-10 12:42:39'),
(5, 'Padang', '2019-11-10 13:00:55', '2019-11-10 13:00:55'),
(6, 'Surabaya', '2019-11-10 13:18:33', '2019-11-10 13:18:33'),
(7, 'Yogyakarta', '2019-11-10 13:19:59', '2019-11-10 13:19:59'),
(8, 'Bali', '2019-11-10 13:21:39', '2019-11-10 13:21:39'),
(9, 'Riau', '2019-11-10 13:22:41', '2019-11-10 13:22:41'),
(10, 'Solo', '2019-11-10 13:23:04', '2019-11-10 13:23:04'),
(11, 'Jakarta', '2019-11-10 13:29:31', '2019-11-10 13:29:31'),
(12, 'Penari', '2019-12-08 15:49:35', '2019-12-08 15:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_19_041314_create_roles_table', 2),
(4, '2019_09_19_044847_create_role_user_table', 2),
(5, '2019_11_10_180654_create_kota_table', 3),
(6, '2019_11_10_180750_create_wisata_table', 3),
(7, '2019_11_11_180343_create_fotografer_table', 4),
(8, '2019_11_11_191300_create_galery_table', 5),
(9, '2019_11_23_131306_create_order_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `fotografer_id` int(11) NOT NULL,
  `wisata_id` int(11) NOT NULL,
  `tanggal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` int(11) NOT NULL,
  `pesan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `fotografer_id`, `wisata_id`, `tanggal`, `waktu`, `pesan`, `status`, `foto`, `created_at`, `updated_at`) VALUES
(2, 11, 10, 7, '2019-11-12', 1, 'Cek cek', 'Booked', 'bukti/7XMb1oAd822vJyiOXoVR0UDG5YdT3AQgY1bw8XI9.jpeg', '2019-11-23 11:23:20', '2019-11-24 09:37:30'),
(3, 14, 5, 3, '2019-12-17', 1, 'ser', 'Accept', 'bukti/HRDL2FB1Kklh3a1eJ9cb42a0oMcRCmeoP3OIJUK2.jpeg', '2019-12-08 10:56:57', '2019-12-08 14:02:00'),
(5, 15, 5, 3, '2019-12-17', 3, 'bantuuu', 'Accept', 'bukti/EL9YzvpkjBOQpfgMOdlLzrCKu8ZBqHpXPl5g4vJX.png', '2019-12-08 11:21:15', '2019-12-08 11:39:15'),
(6, 15, 5, 4, '2019-12-19', 2, 'ass', 'Accept', 'bukti/F4vQVW3m4ocaKLgZm1aHM7EojLMWSRc1PSEdgDs4.png', '2019-12-08 11:59:04', '2019-12-08 12:00:38'),
(7, 13, 7, 18, '2019-12-25', 1, 'aae', 'Accept', 'bukti/HRDL2FB1Kklh3a1eJ9cb42a0oMcRCmeoP3OIJUK2.jpeg', '2019-12-08 13:47:28', '2019-12-08 14:01:22'),
(8, 18, 10, 27, '2019-12-17', 2, 'tulunggaaa', 'Accept', 'bukti/x19Fk1t35hRCOXhd0tSvrFSlFHbb5pzo6PZGRAHD.jpeg', '2019-12-08 13:52:54', '2019-12-08 14:01:30'),
(9, 18, 13, 20, '2019-12-20', 4, 'huaaim', 'Accept', 'bukti/5aVWMGYSeWh1SddZMteEMnp3s45bkNaRqI51RRC2.jpeg', '2019-12-08 13:53:47', '2019-12-08 14:01:39'),
(10, 19, 8, 14, '2019-12-23', 2, 'adeww', 'Accept', 'bukti/ybXhg64FhmyGdQtXRVbqfsBIOFk5KGvajeyVSUca.jpeg', '2019-12-08 13:57:31', '2019-12-08 14:01:48'),
(11, 19, 9, 22, '2019-12-23', 2, 'amazingg', 'Decline', 'bukti/wCJX4t4znt3sUjwdFEM809oziGIhNWZTkPGbL2T1.jpeg', '2019-12-08 13:58:26', '2019-12-08 14:02:10'),
(12, 15, 8, 23, '2019-12-26', 3, 'undenn', 'Booked', 'bukti/lUNdMB2AKFelsJ1knyBT4c9q0xHbSTK64QhVEzrR.jpeg', '2019-12-08 15:04:09', '2019-12-08 15:04:42'),
(13, 15, 12, 14, '2019-12-25', 1, 'aset', 'Booked', 'bukti/ybXhg64FhmyGdQtXRVbqfsBIOFk5KGvajeyVSUca.jpeg', '2019-12-08 15:08:58', '2019-12-08 15:08:58'),
(14, 19, 12, 14, '2019-12-26', 4, 'dahhhh', 'Booked', 'bukti/fcejgxWARJZnwMBfh0KmsCPCQFJJSFKFNEDiRImp.jpeg', '2019-12-08 15:30:02', '2019-12-08 15:31:22'),
(15, 19, 11, 12, '2019-12-17', 4, 'ddffddfdxf', 'Booked', 'bukti/FJyXmuGfyEOJaABn5fU9F6IfL3fwhGYTgRgVYmLx.jpeg', '2019-12-09 01:37:10', '2019-12-09 01:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'fotografer', NULL, NULL),
(3, 'wisatawan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 2, 7, NULL, NULL),
(8, 2, 8, NULL, NULL),
(9, 2, 9, NULL, NULL),
(10, 2, 10, NULL, NULL),
(11, 3, 11, NULL, NULL),
(12, 2, 12, NULL, NULL),
(13, 3, 13, NULL, NULL),
(14, 2, 14, NULL, NULL),
(15, 3, 15, NULL, NULL),
(16, 2, 16, NULL, NULL),
(17, 2, 17, NULL, NULL),
(18, 3, 18, NULL, NULL),
(19, 3, 19, NULL, NULL),
(20, 3, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handphone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('aktif','non aktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `handphone`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '081383078500', NULL, '$2y$10$1IeUTe7Bia5mRTWPV5lg1OOQB.0c4IvkufwQGeBVITe/4aPp7H66S', '6vlYCbLt7Z18OHAAA025etyAnUmT8JVQOXvcqPnFmA7xQuijrhECgwzmazJk', 'aktif', '2019-11-10 06:19:38', '2019-11-10 06:19:38'),
(5, 'alby', 'alby@gmail.com', '0856483673848', NULL, '$2y$10$FutVTsav5rkx8tPWutvaoeIqyZTv3o7O3Eie6ePoEIJboNgoEmaB2', 'OPYQ7gRPNNp7DkCeQJ0OTFH9CGeqgoRmZq1UHxiyMhbI7byGIgCHee3tWXPe', 'aktif', '2019-11-12 10:39:49', '2019-11-20 08:44:45'),
(6, 'maulana', 'maulana@gmail.com', '08587362827', NULL, '$2y$10$.BdD.XwX3IJ4s5y18CjFTuH3h3/GdYI73vxAq.yiBiuvpttDmWm0G', 'sVm1CWjEZWSJgPgiYgACrLCcjMVSwNgAOf78Vi16NXO3vbZSww5l7xAj8P8f', 'aktif', '2019-11-12 10:41:35', '2019-12-08 13:38:21'),
(7, 'Taufan', 'taufan@gmail.com', '0859382028473', NULL, '$2y$10$anbju/MYB9dzmaTYJgHTve8jm76aBWoz4m.K.NLFYPbgOteCAnwFS', 'gTD3YqKGkFJuSxRCZSuPi1pBIxlbePAAzjkyAeb3T237pjH1avvlZPraIlwd', 'aktif', '2019-11-12 10:53:55', '2019-11-12 10:53:55'),
(8, 'nugroho', 'nugroho@gmail.com', '0859382028473', NULL, '$2y$10$SV6463/DB.FbXG73t2dcquukw05C.ow53jIzsMK/7NwdvSM5ZqSbq', 'xzKnZCQptaY4BgYKS5KJqLGZELkjIHlJpcs3nVKlUy5XoxACZeLyeSBRxLig', 'aktif', '2019-11-12 11:28:27', '2019-11-12 11:28:27'),
(9, 'firjon', 'firjon@gmail.com', '08576367856', NULL, '$2y$10$D5cWeg0JGrfKidSYsjF7OO8I8eYEz3W8UDefaDkaBk2HCQqpIakdi', 'gcIMYrQHCKl8PP0s6q026IF0Or1VlPhWF2RXBCcq0Y1Sx7zICvUGzSF6fXiu', 'aktif', '2019-11-12 11:31:53', '2019-11-18 09:22:14'),
(10, 'songgonity', 'songgon@gmail.com', '08576367856', NULL, '$2y$10$hfIh4hvsXVqzAMcVKSNsxuYXqt5IyX3.nc8F2P/tKFNsEcz0RPOay', 'Or8M0kxfh2DKPbd3QfdfBxNy7oqRjDqchA469QLk9FCEipN0wqNHFBlsLSmd', 'aktif', '2019-11-12 11:39:07', '2019-11-20 08:31:08'),
(11, 'Allyvio', 'allyviomahardhika@gmail.com', '081383078500', NULL, '$2y$10$jg32.2DoW5wN.s8bPVATPuiXRYq1AmcvMNalgz2Py3XpNXRielVfe', 'zfCfvIPSgvhlHyZtHFmPudWhf9y5cMwUnnAZtwN93oYtIJwbVJbGpBbC5hz1', 'aktif', '2019-11-14 11:37:12', '2019-11-14 11:37:12'),
(12, 'Alfiana', 'alfiana@gmail.com', NULL, NULL, '$2y$10$gy4u/ZvAWgbA1yuxzaxsS.3ESv6L.evAqM7m9oKhYJEA8Ds2tDSjS', 'jzq6Oe7erTAfWrm4vq6SrLVepfEYP1GtJVjTFpBuTZ0AZsdHdzK8Y0DxiUL2', 'aktif', '2019-11-20 08:36:43', '2019-12-08 13:37:55'),
(13, 'wisatawan', 'wisatawan@gmail.com', '08573847591', NULL, '$2y$10$1lsKbuGFMhJg.9Pp.I7JAuaANrWLvR81FIf/rBPPYHlyoO2AgxJi.', 'GJ6h9VWaIeS7L4tX3ASk8KdCuVXWpkN5hKe23sOpEwQzylIIyMryNjm8PrnG', 'aktif', '2019-12-08 09:22:41', '2019-12-08 09:22:41'),
(14, 'wong', 'wong@gmail.com', NULL, NULL, '$2y$10$sVMi76H4grYqAeyZqP4p7ej2NYho8e8SVfq3oV9r9c0uhtqW33emy', 'NXB2x7b39tkSyj6IojbzYV2EhWdvw0gax4OnkVapVhRImpyJcK4uwz8mTEp1', 'aktif', '2019-12-08 09:50:42', '2019-12-08 13:38:08'),
(15, 'budi', 'budi@gmail.com', '08764664622', NULL, '$2y$10$2e2/92TkU8o18TUfCTIlbO4.9ssdmr.CqiBvoUqzWHPCBi/9aKjES', 'xrXCRMJqa4Yltajy5IofTcVRfzOcE6cwGOXyKZBNOlXovFX5gcHAVFusE1kP', 'aktif', '2019-12-08 11:07:49', '2019-12-08 11:07:49'),
(16, 'binomo', 'binomo@gmail.com', NULL, NULL, '$2y$10$RjVNW3djrnxpKW9IYAZZdej.bA5ioH9iIsso6h8b./Nt6XNqFaaNy', 'gXuJlsytzjpRx0dG7BrrjF17Gv61vtfY9hus8hTN2YCj2Uxp09iAWTSbgeZe', 'aktif', '2019-12-08 13:28:30', '2019-12-08 13:38:03'),
(17, 'trpl', 'trpl@gmail.com', NULL, NULL, '$2y$10$E3y48ZHp0cBp1EIK4BVxoOqKuPrIlUeQpMJPZAmmRWR3/Fl308Oae', 'HRrdclXgOE56BWHvn6Q6KmGw0IO87UTumkY1SqWAj1nN0UpXyCO7CRlOv3mD', 'aktif', '2019-12-08 13:34:04', '2019-12-08 13:38:12'),
(18, 'turis', 'turis@gmail.com', '08473747343', NULL, '$2y$10$v44W3ubPuGsO01XQJ9MawOo4ItOdk.DBiNxuveDDgBv.RAfwHEyji', '0FwIb2Fr4vXyoU29pfLlcr2WU3AMUjhK4Oyh6KyRjyhspKxU42cjvg32HjFi', 'aktif', '2019-12-08 13:51:02', '2019-12-08 13:51:02'),
(19, 'bule', 'bule@gmail.com', '087627327', NULL, '$2y$10$2oIsRnqhYTQgMALg2wTaeeicWgi9/I2pGG7hfwbqtXTevvgkbm4Re', 'h41TYSg1TTCUU7ZHgNvprzPHHEOtVkZ2PCKQ8ELTwFjKZkmpi9elQXKKhp9F', 'aktif', '2019-12-08 13:51:35', '2019-12-08 13:51:35'),
(20, 'coba aja', 'やってみて@gmail.com', '08356678787', NULL, '$2y$10$WxMls5VFmP3cbueVCz2csevzmCX7kUY2ybSqnU6vGcKV7VJLbd3wK', 'T3ZaLl4l2cPdE0mvLusXLHxzSjyZ38RKiWwfFgl0bMGkeRXEBEyTXpadbC4i', 'aktif', '2019-12-09 01:30:26', '2019-12-09 01:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kota_id` bigint(20) NOT NULL,
  `nama` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `kota_id`, `nama`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 'Papuma', 'Tes', 350000, NULL, '2019-11-20 11:51:28'),
(3, 1, 'Niagara', 'Tes', 30000, '2019-11-11 09:44:11', '2019-11-11 09:44:11'),
(4, 1, 'Bande Alit', 'Tes', 10000, '2019-11-20 07:33:54', '2019-11-20 07:33:54'),
(5, 2, 'Ijen', 'Tes', 30000, '2019-11-20 07:34:36', '2019-11-20 07:34:36'),
(7, 2, 'Djawatan', 'tes', 150000, '2019-11-20 08:16:48', '2019-11-20 08:16:48'),
(8, 2, 'Umbul Bening', 'tes', 170000, '2019-11-20 08:26:36', '2019-11-20 08:26:36'),
(9, 2, 'Bukit Mondoleko', 'tes', 140000, '2019-11-20 08:28:25', '2019-11-20 08:28:44'),
(11, 4, 'Kawah Wurung', 'tes', 240000, '2019-11-20 09:16:10', '2019-11-20 09:16:10'),
(12, 4, 'Kawah Ilalang', 'Kawah Ilalang merupakan..', 145000, '2019-11-20 09:27:01', '2019-11-20 09:27:01'),
(13, 4, 'Air Terjun PuloAgung', 'Spot wisata kece ini bisa kamu temukan di antara perkebunan kopi.  Suasana alam yang asri ditambah udaranya yang sejuk akan memberikan efek rileks yang menenangkan pikiranmu.  Lokasi: Desa Sukorejo, Kecamatan Sumber Wringin, Kabupaten Bondowoso, Jawa Timur.', 150000, '2019-11-20 09:41:23', '2019-11-20 09:41:23'),
(14, 8, 'Tanah Lot', 'tes', 2300, '2019-11-20 11:55:22', '2019-11-20 11:55:53'),
(15, 9, 'Bukit 30', 'indah, wow', 89000, '2019-12-08 12:57:57', '2019-12-08 12:57:57'),
(16, 9, 'Candi Muara Takus', 'candddi', 70000, '2019-12-08 13:07:37', '2019-12-08 13:07:37'),
(17, 5, 'Banto Rayo', 'Papan titian yang mengesankan', 180000, '2019-12-08 13:10:26', '2019-12-08 13:10:26'),
(18, 5, 'Goa Batu Kapal', 'Gugusan Stalaktit', 150000, '2019-12-08 13:12:36', '2019-12-08 13:12:36'),
(19, 6, 'Ancol', 'tamannn bermain', 70000, '2019-12-08 13:13:42', '2019-12-08 13:13:42'),
(20, 6, 'Taman Wisata Niopi', 'wooow', 110000, '2019-12-08 13:14:24', '2019-12-08 13:14:24'),
(21, 7, 'Candi Borobudur', 'candi yang sangat populer di Indonesia', 128000, '2019-12-08 13:15:33', '2019-12-08 13:15:33'),
(22, 7, 'Pantai Indrayanti', 'Pantai yang biru', 300000, '2019-12-08 13:16:15', '2019-12-08 13:16:15'),
(23, 8, 'Unden Berundak', 'amazingg', 320000, '2019-12-08 13:17:09', '2019-12-08 13:17:09'),
(24, 10, 'Grojogan Sewu Tawamangu', 'air terjun', 230000, '2019-12-08 13:18:35', '2019-12-08 13:18:35'),
(25, 10, 'Keraton Surakarta', 'Bangunan bersejarah yang menajubkan', 450000, '2019-12-08 13:19:23', '2019-12-08 13:19:23'),
(26, 11, 'Taman Mini Indonesia Indah', 'indahh', 260000, '2019-12-08 13:20:33', '2019-12-08 13:20:33'),
(27, 11, 'Pantai Ancol', 'pantaiii koy', 110000, '2019-12-08 13:21:06', '2019-12-08 13:21:06'),
(28, 11, 'Alive Museum', 'Museum Antariksa', 150000, '2019-12-08 13:21:37', '2019-12-08 13:21:37'),
(29, 11, 'Monumen Nasional', 'sugoiii', 340000, '2019-12-08 13:22:21', '2019-12-08 13:22:21'),
(30, 11, 'Pulau Semak Daun', 'pulau liburan', 147000, '2019-12-08 13:23:05', '2019-12-08 13:23:05'),
(31, 7, 'pasar malam', 'pasar nighttt', 45000, '2019-12-08 13:24:04', '2019-12-08 13:24:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fotografer`
--
ALTER TABLE `fotografer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fotografer`
--
ALTER TABLE `fotografer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
