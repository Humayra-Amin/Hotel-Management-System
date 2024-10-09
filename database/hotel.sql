-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 06:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `room_id` varchar(255) NOT NULL,
  `guestnumber` varchar(255) DEFAULT NULL,
  `checkInDate` date NOT NULL,
  `checkOutDate` date NOT NULL,
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `paid` double(8,2) DEFAULT NULL,
  `due` double(8,2) DEFAULT NULL,
  `specialrequest` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `cname`, `email`, `tel`, `nid`, `room_id`, `guestnumber`, `checkInDate`, `checkOutDate`, `price`, `discount`, `paid`, `due`, `specialrequest`, `status`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'johndoe@gmail.com', '01888888888', '2156358945698', '2', '2 person', '2024-01-11', '2024-01-15', 40000.00, NULL, 30000.00, 10000.00, NULL, NULL, '2024-01-11 02:16:23', '2024-01-11 02:16:23'),
(2, 'Saif Morshed', 'saif@gmail.com', '01815113066', 'n/a', '3', '2', '2024-01-22', '2024-01-24', 10000.00, 0.00, 3000.00, 7000.00, NULL, 'checkin', '2024-01-21 13:11:30', '2024-01-21 13:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ename` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `emergencyContact` varchar(255) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `motherName` varchar(255) NOT NULL,
  `Locality` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `nid` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `joiningdate` date NOT NULL,
  `salary` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `ename`, `email`, `phone`, `emergencyContact`, `fatherName`, `motherName`, `Locality`, `dob`, `nid`, `position`, `gender`, `joiningdate`, `salary`, `verified`, `image`, `created_at`, `updated_at`) VALUES
(1, 'kathy', 'kathy@gmail.com', '01845226872', '01556987453', 'jacky', 'erica', 'gec', '1995-01-04', '216258956265', 'Receptionist', 'Female', '2022-01-05', '12000', 0, '[\"emp\\/1\\/ROFF47tbIZzmLL4DOtTHp7k7nC0LXCvldUh4omNj.jpg\"]', '2024-01-11 02:15:02', '2024-01-11 02:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expensename` text NOT NULL,
  `cost` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expensename`, `cost`, `created_at`, `updated_at`) VALUES
(1, 'Electricity Bill', '500', '2024-01-11 02:16:53', '2024-01-11 02:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_id` varchar(255) NOT NULL,
  `paid` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`id`, `reservation_id`, `paid`, `created_at`, `updated_at`) VALUES
(1, '1', 30000.00, '2024-01-11 02:16:23', '2024-01-11 02:16:23'),
(2, '2', 3000.00, '2024-01-21 13:11:30', '2024-01-21 13:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_20_121016_create_rooms_table', 1),
(6, '2023_07_20_121931_create_employees_table', 1),
(7, '2023_08_24_123107_create_customers_table', 1),
(8, '2023_09_14_114136_create_categories_table', 1),
(9, '2023_10_01_172332_create_bookings_table', 1),
(10, '2023_10_25_133410_create_incomes_table', 1),
(11, '2023_10_26_093124_create_expenses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roomtitle` varchar(255) NOT NULL,
  `roomno` varchar(255) NOT NULL,
  `floorno` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL DEFAULT 0.00,
  `category_id` varchar(255) NOT NULL,
  `roomsize` varchar(255) NOT NULL,
  `roomview` varchar(255) DEFAULT NULL,
  `maxoccupancy` text NOT NULL,
  `facilities` text NOT NULL,
  `guestservice` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `discount` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `roomtitle`, `roomno`, `floorno`, `price`, `category_id`, `roomsize`, `roomview`, `maxoccupancy`, `facilities`, `guestservice`, `image`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Double Room', '201', '2nd Floor', 10000.00, 'Double Room', '250 per square', 'Sea View', '2 person', '[\"Free Wi-Fi\",\"Flat-screen TV\",\"Mini Fridge\",\"24 Hour security\"]', '[\"Coffee Maker\",\"Fruit Basket\",\"Dry fruits, nuts & chocolates\",\"Laundry service\"]', '[\"2\\/4KrDo0d6UvlGpmfd78GWJKkiznUQCqZhd8smu4Tb.jpg\"]', 0, 'Booked', '2024-01-10 07:56:53', '2024-01-11 02:16:23'),
(3, 'Single Room', '101', '1st floor', 5000.00, 'Single Room', '250 per square', 'Mountain View', '2 person', '[\"Free Wi-Fi\",\"Flat-screen TV\",\"Mini Fridge\"]', '[\"Coffee Maker\",\"Fruit Basket\"]', '[\"3\\/FxLWanGghCoTjO3ZdFU1b9r9EiF02ZN88Tbk8zyk.jpg\"]', 0, 'Booked', '2024-01-10 08:00:25', '2024-01-21 13:11:30'),
(4, 'Couple Room', '301', '3rd floor', 4000.00, 'Couple Room', '200 square feet', 'Mountain View', '2 person', '[\"Free Wi-Fi\",\"Flat-screen TV\",\"Mini Fridge\"]', '[\"Coffee Maker\",\"Fruit Basket\",\"Dry fruits, nuts & chocolates\"]', '[\"4\\/RT4RlKbekQJpEzomoLXyN3XBfG1v6Fts4kGDphbK.jpg\"]', 0, NULL, '2024-01-11 01:34:29', '2024-01-11 01:34:30'),
(5, 'VIP Room', '401', '4th Floor', 10000.00, 'VIP Room', '256 per square', 'Sea View', '3 person', '[\"Mini Fridge\",\"24 Hour security\",\"Free Room Service\"]', '[\"Coffee Maker\",\"Fruit Basket\",\"Dry fruits, nuts & chocolates\"]', '[\"5\\/0p6EKJMsycxDibyADuxOomXSMDM8YD1chUpJprzA.jpg\"]', 0, NULL, '2024-01-11 01:35:27', '2024-01-11 01:35:28'),
(6, 'Single Sea Vew room', '102', '1st Floor', 6000.00, 'Single Room', '100x100', 'Sea View', '2', '[\"Free Wi-Fi\",\"Flat-screen TV\",\"Mini Fridge\",\"24 Hour security\",\"Free Room Service\"]', '[\"Coffee Maker\",\"Fruit Basket\",\"Dry fruits, nuts & chocolates\",\"Laundry service\",\"Hairdyers\",\"Extra stationery\",\"Towelled slippers\",\"Bath Robe\"]', '[\"6\\/2upncr2hrTqOt0DR0Fftmz8dqCDkA4oJbak2tmMx.jpg\",\"6\\/Iev6a3Y9puDBRdwvpBhHaGjVtvVbbvz2L74yGPfh.jpg\"]', 0, NULL, '2024-01-21 13:09:25', '2024-01-21 13:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'huma', 'huma@gmail.com', NULL, '$2y$10$RQuWpwTd8thja/l2CwdpR.Jg5waCjzUiw/O46tLX79NUImP29MU56', NULL, '2023-12-18 02:53:03', '2023-12-18 02:53:03'),
(2, 'Saif', 'saif@gmail.com', NULL, '$2y$10$z6E2PKhBvRI.g1Dw6ejDdeVINH0tZCYppoWYA4i9MvIyW1QpWgBty', NULL, '2024-01-21 13:07:47', '2024-01-21 13:07:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
