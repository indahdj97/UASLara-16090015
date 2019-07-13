-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 12:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectuas`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `judul` varchar(191) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `deskripsi` varchar(225) DEFAULT NULL,
  `peserta` varchar(191) NOT NULL,
  `lokasi` varchar(191) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `judul`, `tanggal`, `jam_mulai`, `jam_selesai`, `deskripsi`, `peserta`, `lokasi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'UASdsda', '2019-07-18', '00:34:00', '17:05:00', 'kliy', '2 oran', 'jakarta', '2019-07-07 22:40:10', '2019-07-04 07:21:40', '2019-07-05 22:42:53'),
(2, 'adfa', '2019-07-12', '12:05:00', '03:04:00', 'das', '2 orang', 'jl.wassdasdsaaf', '2019-07-07 22:40:10', '2019-07-06 06:56:31', '2019-07-06 06:56:31'),
(3, 'adasdsafkakf', '2019-07-10', '03:43:00', '01:21:00', 'dlknskaklfaf', 'sad;ljafd', 'wsdsaddasdsfaf', '2019-07-07 22:40:10', '2019-07-06 07:01:55', '2019-07-06 07:01:55'),
(4, 'iiidosdajdjsa', '2019-07-18', '04:03:00', '07:04:00', 'kajhflahflkdalfk', '3 orang', 'jembatan ancol', '2019-07-07 22:40:10', '2019-07-07 08:30:16', '2019-07-07 08:30:16'),
(5, 'rapat tahunan ke 20', '2019-07-25', '07:00:00', '10:00:00', 'Untuk membahas proker kedepan', '30 orang', 'Hotel GrandLand', NULL, '2019-07-07 08:48:33', '2019-07-07 08:48:33');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `id_user` char(30) DEFAULT NULL,
  `act` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `id_user`, `act`, `created_at`, `updated_at`) VALUES
(348, '11', 'on- task', '2019-07-09 17:16:51', '2019-07-09 17:16:51'),
(349, '11', 'on edit data task', '2019-07-09 17:16:54', '2019-07-09 17:16:54'),
(350, '11', 'update data task', '2019-07-09 17:17:06', '2019-07-09 17:17:06'),
(351, '11', 'on- task', '2019-07-09 17:17:07', '2019-07-09 17:17:07'),
(352, '11', 'on- task', '2019-07-09 17:18:16', '2019-07-09 17:18:16'),
(353, '11', 'on edit data task', '2019-07-09 17:18:20', '2019-07-09 17:18:20'),
(354, '11', 'update data task', '2019-07-09 17:18:32', '2019-07-09 17:18:32'),
(355, '11', 'on- task', '2019-07-09 17:18:32', '2019-07-09 17:18:32'),
(356, '11', 'delete data task', '2019-07-09 17:19:33', '2019-07-09 17:19:33'),
(357, '11', 'on daftar project', '2019-07-09 17:19:43', '2019-07-09 17:19:43'),
(358, '11', 'on- task', '2019-07-09 17:19:46', '2019-07-09 17:19:46'),
(359, '11', 'on edit data task', '2019-07-09 17:20:25', '2019-07-09 17:20:25'),
(360, '11', 'on edit data task', '2019-07-09 17:20:53', '2019-07-09 17:20:53'),
(361, '11', 'update data task', '2019-07-09 17:21:07', '2019-07-09 17:21:07'),
(362, '11', 'on- task', '2019-07-09 17:21:07', '2019-07-09 17:21:07'),
(363, '11', 'on- task', '2019-07-09 17:21:13', '2019-07-09 17:21:13'),
(364, '11', 'on edit data task', '2019-07-09 17:27:00', '2019-07-09 17:27:00'),
(365, '11', 'update data task', '2019-07-09 17:27:08', '2019-07-09 17:27:08'),
(366, '11', 'on- task', '2019-07-09 17:27:08', '2019-07-09 17:27:08'),
(367, '11', 'on- task', '2019-07-09 17:27:22', '2019-07-09 17:27:22'),
(368, '11', 'on edit data task', '2019-07-09 17:27:27', '2019-07-09 17:27:27'),
(369, '11', 'on edit data task', '2019-07-09 17:27:33', '2019-07-09 17:27:33'),
(370, '11', 'on dashboard', '2019-07-09 17:33:19', '2019-07-09 17:33:19'),
(371, '1', 'on dashboard', '2019-07-09 17:37:05', '2019-07-09 17:37:05'),
(372, '1', 'on daftar project', '2019-07-09 17:39:30', '2019-07-09 17:39:30'),
(373, '1', 'on daftar project', '2019-07-09 17:44:01', '2019-07-09 17:44:01'),
(374, '1', 'on- task', '2019-07-09 17:47:27', '2019-07-09 17:47:27'),
(375, '1', 'on edit data task', '2019-07-09 17:47:37', '2019-07-09 17:47:37'),
(376, '1', 'update data task', '2019-07-09 17:48:34', '2019-07-09 17:48:34'),
(377, '1', 'on- task', '2019-07-09 17:48:35', '2019-07-09 17:48:35'),
(378, '1', 'on- task', '2019-07-09 17:48:40', '2019-07-09 17:48:40'),
(379, '1', 'on edit data task', '2019-07-09 17:48:45', '2019-07-09 17:48:45'),
(380, '1', 'update data task', '2019-07-09 17:49:17', '2019-07-09 17:49:17'),
(381, '1', 'on- task', '2019-07-09 17:49:18', '2019-07-09 17:49:18'),
(382, '1', 'on- task', '2019-07-09 17:49:22', '2019-07-09 17:49:22'),
(383, '1', 'delete data task', '2019-07-09 17:49:27', '2019-07-09 17:49:27'),
(384, '1', 'on- task', '2019-07-09 17:49:35', '2019-07-09 17:49:35'),
(385, '1', 'on daftar project', '2019-07-09 17:50:07', '2019-07-09 17:50:07'),
(386, '1', 'on edit data project', '2019-07-09 17:50:12', '2019-07-09 17:50:12'),
(387, '1', 'on daftar project', '2019-07-09 17:50:41', '2019-07-09 17:50:41'),
(388, '1', 'on edit data project', '2019-07-09 17:50:44', '2019-07-09 17:50:44'),
(389, '1', 'update data project', '2019-07-09 17:51:02', '2019-07-09 17:51:02'),
(390, '1', 'on daftar project', '2019-07-09 17:51:02', '2019-07-09 17:51:02'),
(391, '1', 'on- task', '2019-07-09 17:51:06', '2019-07-09 17:51:06'),
(392, '1', 'on edit data task', '2019-07-09 17:51:10', '2019-07-09 17:51:10'),
(393, '1', 'update data task', '2019-07-09 17:51:29', '2019-07-09 17:51:29'),
(394, '1', 'on- task', '2019-07-09 17:51:29', '2019-07-09 17:51:29'),
(395, '1', 'on- task', '2019-07-09 17:51:33', '2019-07-09 17:51:33'),
(396, '1', 'on daftar project', '2019-07-09 17:52:40', '2019-07-09 17:52:40'),
(397, '1', 'on edit data project', '2019-07-09 17:52:43', '2019-07-09 17:52:43'),
(398, '1', 'on daftar project', '2019-07-09 17:53:19', '2019-07-09 17:53:19'),
(399, '1', 'on- task', '2019-07-09 17:53:55', '2019-07-09 17:53:55'),
(400, '1', 'on edit data task', '2019-07-09 17:54:56', '2019-07-09 17:54:56'),
(401, '1', 'on daftar project', '2019-07-09 17:55:29', '2019-07-09 17:55:29'),
(402, '1', 'on- task', '2019-07-09 17:55:33', '2019-07-09 17:55:33'),
(403, '1', 'on agenda', '2019-07-09 17:56:08', '2019-07-09 17:56:08'),
(404, '1', 'on edit agenda', '2019-07-09 17:57:05', '2019-07-09 17:57:05'),
(405, '1', 'on agenda', '2019-07-09 17:57:28', '2019-07-09 17:57:28'),
(406, '1', 'on data user', '2019-07-09 17:57:36', '2019-07-09 17:57:36'),
(407, '1', 'on data user', '2019-07-09 17:58:32', '2019-07-09 17:58:32'),
(408, '1', 'on edit data user', '2019-07-09 17:58:34', '2019-07-09 17:58:34'),
(409, '1', 'on agenda', '2019-07-09 17:59:11', '2019-07-09 17:59:11'),
(410, '1', 'on data user', '2019-07-09 17:59:17', '2019-07-09 17:59:17'),
(411, '1', 'on daftar project', '2019-07-09 17:59:19', '2019-07-09 17:59:19'),
(412, '1', 'on dashboard', '2019-07-09 17:59:26', '2019-07-09 17:59:26'),
(413, '1', 'on daftar project', '2019-07-09 17:59:30', '2019-07-09 17:59:30'),
(414, '1', 'on dashboard', '2019-07-13 05:26:58', '2019-07-13 05:26:58'),
(415, '1', 'on daftar project', '2019-07-13 05:27:21', '2019-07-13 05:27:21'),
(416, '1', 'create data project', '2019-07-13 05:28:37', '2019-07-13 05:28:37'),
(417, '1', 'on daftar project', '2019-07-13 05:28:37', '2019-07-13 05:28:37'),
(418, '1', 'on edit data project', '2019-07-13 05:28:43', '2019-07-13 05:28:43'),
(419, '1', 'update data project', '2019-07-13 05:28:50', '2019-07-13 05:28:50'),
(420, '1', 'on daftar project', '2019-07-13 05:28:51', '2019-07-13 05:28:51'),
(421, '1', 'delete data project', '2019-07-13 05:29:05', '2019-07-13 05:29:05'),
(422, '1', 'on daftar project', '2019-07-13 05:29:05', '2019-07-13 05:29:05'),
(423, '1', 'on- task', '2019-07-13 05:30:04', '2019-07-13 05:30:04'),
(424, '1', 'on data user', '2019-07-13 05:30:50', '2019-07-13 05:30:50'),
(425, '1', 'create data task', '2019-07-13 05:31:44', '2019-07-13 05:31:44'),
(426, '1', 'on- task', '2019-07-13 05:31:44', '2019-07-13 05:31:44'),
(427, '1', 'on daftar project', '2019-07-13 05:31:53', '2019-07-13 05:31:53'),
(428, '1', 'on- task', '2019-07-13 05:32:01', '2019-07-13 05:32:01'),
(429, '1', 'on agenda', '2019-07-13 05:32:24', '2019-07-13 05:32:24'),
(430, '1', 'on daftar project', '2019-07-13 05:32:30', '2019-07-13 05:32:30'),
(431, '1', 'on agenda', '2019-07-13 05:33:21', '2019-07-13 05:33:21'),
(432, '1', 'on data user', '2019-07-13 05:34:25', '2019-07-13 05:34:25'),
(433, '1', 'on data user', '2019-07-13 05:34:35', '2019-07-13 05:34:35'),
(434, '1', 'on data user', '2019-07-13 05:35:50', '2019-07-13 05:35:50'),
(435, '1', 'on data user', '2019-07-13 05:36:04', '2019-07-13 05:36:04'),
(436, '1', 'on data user', '2019-07-13 05:36:20', '2019-07-13 05:36:20');

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_07_03_132137_create-siswa-table', 1);

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
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `nama_instansi` varchar(191) NOT NULL,
  `nama_project` varchar(191) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status_project` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `nama_instansi`, `nama_project`, `tgl_mulai`, `tgl_akhir`, `deleted_at`, `status_project`, `created_at`, `updated_at`) VALUES
(1, 'hehe', 'magang', '2019-07-08', '2019-07-07', '2019-07-09 03:52:20', 'running', '2019-07-08 08:03:08', '2019-07-08 20:52:20'),
(2, 'PT. An', 'Aplikasi pmo', '2019-07-01', '2019-07-27', '2019-07-09 11:46:12', 'New', '2019-07-05 23:53:10', '2019-07-09 04:46:12'),
(3, 'Cv. Awe', 'Aplikasi Kasir', '2019-07-01', '2019-08-06', '2019-07-09 06:46:32', 'Pending', '2019-07-08 19:29:59', '2019-07-08 23:46:32'),
(4, 'Cv. Awe', 'Aplikasi Kasir', '2019-07-01', '2019-08-06', NULL, 'Pending', '2019-07-09 04:21:47', '2019-07-09 04:21:47'),
(5, 'PT. An', 'Aplikasi Project Management', '2019-07-10', '2019-10-09', NULL, 'Pending', '2019-07-09 05:58:08', '2019-07-09 17:51:02'),
(6, 'Pt. Daftar Project', 'Daftar Project', '2019-07-01', '2019-07-31', '2019-07-13 12:29:05', 'Pending', '2019-07-13 05:28:37', '2019-07-13 05:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `id_project` int(11) DEFAULT NULL,
  `judul` varchar(191) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `progress` double(8,2) NOT NULL,
  `assign_to` varchar(191) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `id_project`, `judul`, `deskripsi`, `tgl_mulai`, `tgl_akhir`, `progress`, `assign_to`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'asa', 'das', '2019-07-29', '2019-07-16', 10.00, '1', NULL, '2019-07-06 00:35:15', '2019-07-06 00:36:06'),
(2, 2, 'ahahhahahahahhahahha', '#agustusbikinbot ahahah', '2019-07-07', '2019-07-22', 1.00, '3', NULL, '2019-07-08 00:44:49', '2019-07-08 00:51:00'),
(12, 2, 'qwertyuo', 'dfghjklkhkjskjd', '2019-07-31', '2019-07-31', 20.00, '1', NULL, '2019-07-09 00:11:31', '2019-07-09 00:11:31'),
(13, 4, 'Mengerjakan Modul Aplikasi', 'AplikasiKasir', '2019-07-25', '2019-09-21', 30.00, '11', NULL, '2019-07-09 04:28:13', '2019-07-09 17:48:34'),
(15, 4, 'Mengerjakan Review Aplikasi', 'Aplikasi Kasir', '2019-07-17', '2019-12-14', 40.00, '1', NULL, '2019-07-09 04:32:54', '2019-07-09 17:51:29'),
(18, 5, 'Review Jurnal dan Prosiding', 'jdpsadsa', '2019-08-01', '2019-08-17', 30.00, '11', NULL, '2019-07-09 05:59:27', '2019-07-09 05:59:27'),
(19, 4, 'au kamu dan dia', 'dnkadjfdkfhlkdody', '2019-07-26', '2019-07-27', 20.00, '1', '2019-07-10 00:06:01', '2019-07-09 16:56:29', '2019-07-09 17:06:01'),
(20, 4, 'dksjdksddaf', 'skdgkjhfjkgkhyklujuhgbfvds', '2019-08-03', '2019-12-20', 29.00, '1', '2019-07-10 00:04:55', '2019-07-09 16:59:01', '2019-07-09 17:04:55'),
(21, 4, 'iiiiiiiiiiiijhhjhjklbvcvbnm', 'jhdfghjkljgfdfghjkfdfdsfsfgdfgfdg', '2019-07-07', '2019-07-06', 60.00, '1', '2019-07-10 00:49:27', '2019-07-09 17:08:02', '2019-07-09 17:49:27'),
(22, 4, 'melanjutkan Tugas', 'aplikasi kasir', '2019-07-09', '2019-07-09', 40.00, '1', NULL, '2019-07-13 05:31:44', '2019-07-13 05:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `alamat`, `telpon`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'indah', 'indahdj4@gmail.com', 'tegal1', '12345', NULL, '$2y$10$5ieik/wptD6xpLTNsHrNbuesbjtwIos3hwee8qqqbw7qziS0c7rRC', NULL, '2019-07-06 23:36:14', '2019-07-09 00:13:11'),
(11, 'nnisa', 'nisa@gmail.com', 'karangwuluh', '08986543456', NULL, '$2y$10$BPAm2mRFX4iNjlB2lXG2qeygq0B2ed.vfio2eMc6xsclzKpOjei8K', NULL, '2019-07-08 20:56:01', '2019-07-08 20:56:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
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
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=437;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
