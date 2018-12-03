-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 08:45 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarseni`
--

CREATE TABLE `daftarseni` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaKesenian` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargaSewa` int(11) NOT NULL,
  `Keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datakesenian`
--

CREATE TABLE `datakesenian` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaKesenian` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JenisKesenian` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarifSewa` int(11) NOT NULL,
  `noTelp` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusSewa` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotoSeni` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datakesenian`
--

INSERT INTO `datakesenian` (`id`, `namaKesenian`, `JenisKesenian`, `tarifSewa`, `noTelp`, `alamat`, `deskripsi`, `foto`, `status`, `statusSewa`, `fotoSeni`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Tari Tayrr', 'Tari', 10000000, '081230447654', 'Bondowoso', 'mantab coy', '25W2yGa.png', 'Terverifikasi', 'Disewa', 'aqq7OfL.jpg', 14, '2018-10-22 06:19:16', '2018-11-30 23:58:22'),
(2, 'reog', 'Tari', 2000000, '085234676735', 'pager kulon puger jember', 'asjawfbaskdnbfsdfskjdfskdjvnjxncvkjzdsvnjnzlksnlmxclkzmsdjonckmxlKMXcosoijsdocsduvwef', '25W2yGa.png', 'Terverifikasi', 'Disewa', '25W2yGa.png', 14, '2018-10-23 07:26:30', '2018-12-03 06:58:53'),
(3, 'Ketoprak', 'Lawak', 10000000, '081230447654', 'Bandung', 'mantab coy', 'ore.png', 'Terverifikasi', 'Belum disewa', 'koi.jpg', 12, '2018-10-23 07:35:02', '2018-11-16 20:22:47'),
(4, 'Tari Piring', 'Tari', 10000000, '081230447654', 'Bandung', 'mantab coy', 'images.jpg', 'Terverifikasi', 'Belum disewa', 'images.jpg', 12, '2018-10-23 08:31:56', '2018-11-16 20:22:53'),
(5, 'Reog Ponorogo', 'Tari', 1000000, '081230447654', 'Halmahera', 'ini mantab', '25W2yGa.png', 'Terverifikasi', 'Belum disewa', '25W2yGa.png', 14, '2018-11-11 05:58:24', '2018-11-16 20:23:01'),
(6, 'Wayang Kulit', 'drama', 100000, '087226266661', 'Bogor', 'Mantab', 'WhatsApp Image 2017-11-26 at 18.32.26.jpeg', 'Tidak Disetujui', 'lom disewa', 'WhatsApp Image 2017-11-26 at 18.32.26.jpeg', 14, '2018-11-22 02:10:42', '2018-11-22 02:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'Admin'),
(2, 'Penyedia Jasa'),
(3, 'Penyewa Jasa');

-- --------------------------------------------------------

--
-- Table structure for table `metodepembayaran`
--

CREATE TABLE `metodepembayaran` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, '2018_10_09_175659_daftar_art', 1),
(2, '2018_10_09_181219_daftar_kesenian', 1),
(3, '2018_10_18_113328_create_tabel_kesenian', 2),
(4, '2018_10_24_073135_create_metode_sewa', 3),
(5, '2018_10_30_133442_create_transaksi_table', 3),
(6, '2018_12_03_134949_create_tabel_rekening', 4);

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
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noRek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id`, `nama`, `noRek`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'BNI', '788099877', 10, '2018-12-03 12:24:01', '2018-12-03 12:24:01'),
(2, 'BRI', '98220999', 10, '2018-12-03 12:24:52', '2018-12-03 12:24:52');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_Sewa` int(10) UNSIGNED NOT NULL,
  `namaKesenian` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisKesenian` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyedia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarifSewa` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasiSewa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalSewa` date NOT NULL,
  `alamatPenyewaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metodePembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `seni_id` int(10) UNSIGNED NOT NULL,
  `statusBayar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noTelp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_Sewa`, `namaKesenian`, `jenisKesenian`, `penyedia`, `tarifSewa`, `durasiSewa`, `tanggalSewa`, `alamatPenyewaan`, `catatan`, `metodePembayaran`, `status`, `user_id`, `seni_id`, `statusBayar`, `noTelp`, `created_at`, `updated_at`) VALUES
(1, 'Tari Tayrr', 'Tari', 'Cartu', '10000000', '10', '2018-10-29', 'Bondowoso', 'zXcz', 'on', 'Belum Diterima', 15, 1, NULL, '081230447654', '2018-11-30 07:45:54', '2018-11-30 07:45:54'),
(2, 'Tari Tayrr', 'Tari', 'Cartu', '10000000', '10', '2018-10-29', 'Bondowoso', 'zXcz', 'on', 'Belum Diterima', 15, 1, NULL, '081230447654', '2018-11-30 07:50:04', '2018-11-30 07:50:04'),
(3, 'Tari Tayrr', 'Tari', 'Cartu', '10000000', '10', '2018-11-27', 'Bondowoso', 'jnkj', 'on', 'Belum Diterima', 15, 1, NULL, '081230447654', '2018-11-30 23:40:06', '2018-11-30 23:40:06'),
(4, 'Tari Tayrr', 'Tari', 'Cartu', '10000000', '10', '2018-12-26', 'Bondowoso', 'mknkj', 'on', 'Belum Diterima', 15, 1, NULL, '081230447654', '2018-11-30 23:57:35', '2018-11-30 23:57:35'),
(5, 'Tari Tayrr', 'Tari', 'Cartu', '10000000', '10', '2018-12-26', 'Bondowoso', 'mknkj', 'on', 'Diterima', 15, 1, NULL, '081230447654', '2018-11-30 23:58:22', '2018-12-03 06:03:22'),
(6, 'reog', 'Tari', 'Cartu', '2000000', '10', '2018-12-17', 'Bondowoso', 'asdda', 'on', 'Belum Diterima', 15, 2, 'Belum Dibayar', '085234676735', '2018-12-03 06:58:53', '2018-12-03 06:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodeP` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `nameB`, `alamat`, `kodeP`, `noHp`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alfa', 'alfa@alfa.com', '$2y$10$gJS.wHFqJfm9fxTistK/U.NNLbNSqwIruQ4WX6L0CyjrZLPKkzaSm', '', '', '', '', 0, 'GhJF0XTsubXXWjhNDmzXVP4ioC1qpgyNViugoMuwerUZileVC4ls4YSoVCQ8', '2018-09-26 09:28:09', '2018-09-26 09:28:09'),
(2, 'beta', 'beta@beta.com', '$2y$10$AwAIZOhA9z77NdCy6OvID.uK/e3vlRCsGHja8DpLcA2zdMMIGl6w2', '', '', '', '', 0, 'xPpBnjvN42LzRAaBsS8j0hRC9KnhZl1BzGTcLB9JlIO3N8KzpWxflbIrQY5a', '2018-09-26 09:43:40', '2018-09-26 09:43:40'),
(3, 'aku', 'faisol@email.com', '$2y$10$E23J008/F6y3CAfvkMnQ.uLXYSQbTgB4PEE3sIRypK/q6NtoCjpMS', 'required|string|max:255', '', '', '', 0, NULL, '2018-09-28 21:12:22', '2018-09-28 21:12:22'),
(4, 'beta', 'betadin@email.com', '$2y$10$4eFH4KDf19CqNjBHGkzDPeudfmq3HpAVYpcqY2d/w8aYTw8GtNq9K', 'required|string|max:255', '', '', '', 0, 'ubCY70SkrZqltduQSNUw3Gc4KLLXmuhhHxMSRaTvMKGsgp4gCpYrTaPrlYNK', '2018-09-28 22:53:51', '2018-09-28 22:53:51'),
(5, 'wahib', 'wahib@email.com', '$2y$10$0vcYfmHkMCJBGNBmXr5yrOFNjQb8c4/1z8k0j9ZnynubaId0HXy/a', 'irawan', '', '', '', 0, 'NtNBFNIUZ9HCRdfGUI2XDiYlt0ALkoctAE8rhI5BXFWygfiO6HftSTacdwPj', '2018-09-28 22:55:45', '2018-09-28 22:55:45'),
(6, 'dia', 'aku@email.com', '$2y$10$DYXCXj4l/05niElxgjfew.4TgVIyatadPSjVmWQp8r6azbhhVbWc2', 'dan', 'Bondowoso', '12345', '082230744430', 0, 'w4V73hge92ZFGV9sybwJszPI4SwfXYhCtvxhaSlpN8pC8Ty3N2r4lf1zBcT2', '2018-09-28 23:45:48', '2018-09-28 23:45:48'),
(7, 'lava', 'lava@email.com', '$2y$10$GuHdMYxHrGvRxNvVBVsX8e6ZYSxhbvealH0o1OCCRWBpouBS7YjZS', 'laver', 'Bandung', '12345', '082230744430', 2, NULL, '2018-09-29 00:13:17', '2018-09-29 00:13:17'),
(10, 'Admin', 'admin@email.com', '$2y$10$3g.2jZat3FP0fd71YorZhuCgwmTCcqjORImg5oSiHWmz7.e/mvNBO', 'Bebas', 'Bondowoso', '12312', '12312312311', 1, 'yo1wMhtE2SwCngQ1fiaIbTAHF0T9lZ4wh0NdLlFKeTkUp71GSpUrPQ5FLxop', '2018-10-02 09:20:49', '2018-10-23 08:27:50'),
(11, 'Rokie', 'rokie@email.com', '$2y$10$lxo3SvB37wJNofhRX2DnY.9UaI9jZcb363Q/yQ1W99du1WE3E4nzi', 'Mastah', 'Banyuwangi', '23415', '087766543221', 3, 'SPzmDEfLtuBpRdFnLdn8SwkboYpVFLRrCq5XjOLQHaHTnllyQ7lHDJecOefo', '2018-10-08 09:49:10', '2018-10-08 09:49:10'),
(12, 'panda', 'panda@email.com', '$2y$10$BpdMaOVrq3FUzl5NM6gC..dIH.OIMZRFD6v.Lx3nGmoiPq7yQCrnW', 'panda', 'oke oce', '68162', '082139703737', 2, 'LJJYPQKBAwWA7VwlFDUcHvZR4qSV3I2UYoAjcTIE5bJ5IypgmuKsVtbT1ixk', '2018-10-08 10:34:15', '2018-10-09 19:52:10'),
(13, 'tri', 'tri@email.com', '$2y$10$abJaavOuCwsmvV8llPzWbueeBkfKNhu5mGg4KfXHgJYzHc80u5ufS', 'qwer', 'alamatku', '68128', '1239485067', 3, 'lumnuN9bpczU2dRmrJiqzpoHCr9HlWxSoE3fjywgfKjepSfCqn78IpnGIF8W', '2018-10-09 07:45:24', '2018-10-09 07:45:24'),
(14, 'Cartu', 'carli@email.com', '$2y$10$gZPUj/2v/ygXi7ro0BQ8AOJ/yIVlu34wGKAbRHmlPcG5raTmomNXy', 'carla', 'Bondowoso', '12345', '089554332221', 2, 'L1fxia1Ij56zseqPvQy8tmp4lfymQAaNVYKe3Ja9AGwuOXS2kv3O7RxWn5Yo', '2018-10-09 11:20:40', '2018-11-22 02:08:45'),
(15, 'delta', 'delta@email.com', '$2y$10$SchdwjPwgKXpvJ7UuCz7IOvtQdVUcwUTl5Y9fDtZZ2CM0W7OlEYh6', 'deltu', 'Bandung', '87123', '089223334222', 3, 'Ciu8BhMefZwaR9LWFfm7OOTHUY6NchRNP123uRU3dEK3MIVxUdAqXccDFr8l', '2018-10-09 11:22:13', '2018-10-09 11:22:13'),
(16, 'echo', 'echo@email.com', '$2y$10$fq4WJnSxNExImVm2TqE0EeL0wU8dcvJy6vqmju0sT.l4QQkQgTNJy', 'echi', 'Bandung', '53121', '089776554332', 3, '58hz4iQ9K3cAPPowSK4ta1esWT45ALQOmS7b2OsaFAV79F24WSOodwcAJ1wl', '2018-10-09 19:50:40', '2018-10-09 20:02:02'),
(17, 'rambo', 'rambo@email.com', '$2y$10$tW/eEDRMp.6OIEV5..ovV.sOHTMcFp3BM/DAcd6jJN3jsVfXPmEAy', 'rambi', 'Bondowoso', '12345', '082230744430', 3, NULL, '2018-11-07 00:53:20', '2018-11-07 00:53:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarseni`
--
ALTER TABLE `daftarseni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daftarseni_user_id_foreign` (`user_id`);

--
-- Indexes for table `datakesenian`
--
ALTER TABLE `datakesenian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datakesenian_user_id_foreign` (`user_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rekening_user_id_foreign` (`user_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_Sewa`),
  ADD KEY `transaksi_user_id_foreign` (`user_id`),
  ADD KEY `transaksi_seni_id_foreign` (`seni_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarseni`
--
ALTER TABLE `daftarseni`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `datakesenian`
--
ALTER TABLE `datakesenian`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_Sewa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftarseni`
--
ALTER TABLE `daftarseni`
  ADD CONSTRAINT `daftarseni_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `datakesenian`
--
ALTER TABLE `datakesenian`
  ADD CONSTRAINT `datakesenian_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rekening`
--
ALTER TABLE `rekening`
  ADD CONSTRAINT `rekening_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_seni_id_foreign` FOREIGN KEY (`seni_id`) REFERENCES `datakesenian` (`id`),
  ADD CONSTRAINT `transaksi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
