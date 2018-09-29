-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2018 at 12:35 PM
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, 'lava', 'lava@email.com', '$2y$10$GuHdMYxHrGvRxNvVBVsX8e6ZYSxhbvealH0o1OCCRWBpouBS7YjZS', 'laver', 'Bandung', '12345', '082230744430', 2, NULL, '2018-09-29 00:13:17', '2018-09-29 00:13:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
