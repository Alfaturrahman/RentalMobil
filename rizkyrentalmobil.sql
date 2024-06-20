-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2024 at 07:53 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rizkyrentalmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `fullname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$10$PrYkEInUys.qJMgnAEegd.4xmDhCEwWa3lITet4qw148UFHUqXaLW', NULL, '2024-06-09 00:19:00', '2024-06-09 00:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint UNSIGNED NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `make_year` int NOT NULL,
  `passenger_capacity` int UNSIGNED NOT NULL,
  `kilometers_per_liter` decimal(8,2) UNSIGNED NOT NULL,
  `fuel_type` enum('diesel','hybrid','petrol','electric') COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmission_type` enum('Automatique','Manuel') COLLATE utf8mb4_unicode_ci NOT NULL,
  `daily_rate` decimal(8,2) NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '0',
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `model`, `brand`, `make_year`, `passenger_capacity`, `kilometers_per_liter`, `fuel_type`, `transmission_type`, `daily_rate`, `available`, `image_url`, `created_at`, `updated_at`) VALUES
(7, 'Agya', 'Toyota', 2014, 4, 40.00, 'diesel', 'Automatique', 250.00, 1, 'car_images/hHHg9RqtRMBrjTU4azn3uTO6XqQaQdpYcaVYfpP6.png', '2024-06-09 12:00:52', '2024-06-09 12:00:52'),
(8, 'New Avanza', 'Toyota', 2021, 6, 40.00, 'diesel', 'Automatique', 300.00, 1, 'car_images/S7lr9XlSGbgdYTNCj3OuhE4yfXpTK4CyEDkTAyNB.png', '2024-06-09 12:01:45', '2024-06-09 12:01:45'),
(9, 'Avanza Lama', 'Toyota', 2010, 6, 40.00, 'diesel', 'Automatique', 250.00, 1, 'car_images/ZDOm7aoWW9yj43uwIuGjzMZuJGIyX7oMCz6Ei1r5.png', '2024-06-09 12:02:50', '2024-06-09 12:02:50'),
(10, 'Raize', 'Toyota', 2021, 4, 40.00, 'diesel', 'Automatique', 300.00, 1, 'car_images/rZUMNaDVfH5uLMjoehphYUeiNfBA2WSQsjpnZsRb.png', '2024-06-09 12:03:46', '2024-06-09 12:03:46'),
(11, 'Calya', 'Toyota', 2017, 6, 40.00, 'diesel', 'Automatique', 250.00, 1, 'car_images/J44Kr9qby9ynoHMVOdul2uVn3U7Y1mPYHAbNY08E.png', '2024-06-09 12:05:01', '2024-06-09 12:05:01'),
(12, 'Grand Innova', 'Toyota', 2011, 7, 40.00, 'diesel', 'Automatique', 300.00, 1, 'car_images/IPh2RhtbEWtFFIlMsKj4S5ISWfYD0lbnX0hcYWCg.png', '2024-06-09 12:06:26', '2024-06-09 12:06:26'),
(13, 'Innova Reborn', 'Toyota', 2015, 7, 40.00, 'diesel', 'Automatique', 400.00, 1, 'car_images/eyHM9kxc2ofsKCaQwwWOvfp0lf62MkjHcjVmUBHb.png', '2024-06-09 12:07:25', '2024-06-09 12:07:25'),
(14, 'Innova Reborn Ventura', 'Toyota', 2017, 7, 40.00, 'diesel', 'Automatique', 500.00, 1, 'car_images/tWMhvqHIHfY2OMmKzp27SCpH29CAD81dz9O6SxKe.png', '2024-06-09 12:08:13', '2024-06-09 12:08:13'),
(15, 'Fortuner', 'Toyota', 2018, 7, 40.00, 'diesel', 'Automatique', 10000.00, 1, 'car_images/lXplKa9v8aCTUshkSrP5vzPBT3ioTyOI6odkzRMj.png', '2024-06-09 12:10:13', '2024-06-09 12:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `car_id`, `created_at`, `updated_at`) VALUES
(7, 'car_images/Ui9INFLmXFZg134CPyKiZeKpfBNnXNI4qeNVeAN2.png', 7, '2024-06-09 12:00:52', '2024-06-09 12:00:52'),
(8, 'car_images/jneGVgQ4c5AMmmPuB6CxUeplJKl2QNISrz7fJutq.png', 8, '2024-06-09 12:01:45', '2024-06-09 12:01:45'),
(9, 'car_images/ulxHpW9mTiweojZOS2bsJWehDCMZRGVH6J6psvL0.png', 9, '2024-06-09 12:02:50', '2024-06-09 12:02:50'),
(10, 'car_images/Yt8EDBLXo93mnyxgBw45lQjwDqq1iGkBSKWYOUJv.png', 10, '2024-06-09 12:03:46', '2024-06-09 12:03:46'),
(11, 'car_images/vsnuYhMx4VVWKT0nolkuPRibbEWVkm5VJkFdWgFg.png', 11, '2024-06-09 12:05:01', '2024-06-09 12:05:01'),
(12, 'car_images/npVP1TtU5uCKytT77oEaVZ9h5yDIe5rV6S2Y7U7z.png', 12, '2024-06-09 12:06:26', '2024-06-09 12:06:26'),
(13, 'car_images/XrnwyDYL1sJnaUhP6xwxDiVlGh8dKxavvcRBPtck.png', 13, '2024-06-09 12:07:25', '2024-06-09 12:07:25'),
(14, 'car_images/Enpy3RnVir9bWqD0t69g3TcijUmrrCgUuwzkI7k2.png', 14, '2024-06-09 12:08:13', '2024-06-09 12:08:13'),
(15, 'car_images/jiO1gZlAzsNG18vaYz4fLTynHAKIIcRKYwtUQSV7.png', 15, '2024-06-09 12:10:13', '2024-06-09 12:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_21_205317_create_cars_table', 1),
(6, '2023_03_21_205333_create_admins_table', 1),
(7, '2023_03_21_205404_create_rents_table', 1),
(8, '2023_03_22_194824_create_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `id` bigint UNSIGNED NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `total_cost` decimal(8,2) NOT NULL,
  `payement_status` enum('berhasil','pending','gagal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `payement_method` enum('paypal','visa','mastercard','dana','ovo','gopay') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `car_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `date_of_birth`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a', '12111q', '2024-06-09', 'a@gmail.com', NULL, '$2y$10$.YwE9Cae5GKkKL.pezN3POt.77mhFTEy/MIEsq6SqZOB8Bi6Mxbhi', NULL, '2024-06-09 00:20:15', '2024-06-09 00:20:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_car_id_foreign` (`car_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rents_car_id_foreign` (`car_id`),
  ADD KEY `rents_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rents`
--
ALTER TABLE `rents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);

--
-- Constraints for table `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `rents_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`),
  ADD CONSTRAINT `rents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
