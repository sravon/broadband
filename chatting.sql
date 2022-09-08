-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 05:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatting`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `mission`, `vision`, `description`, `created_at`, `updated_at`) VALUES
(1, 'About', 'BCL Online Limited (BCLOL) is an innovation house offering IT enabled services, virtualization, custom solutions in selected platforms.\r\nBCLOL offers full design and integration , specialized managed services and solutions, server virtualization, network security & optimization based on hardware and software tools, application integration and mobilization and tailored business solutions.\r\nBeing in the middle of all IT services offered by various companies, BCLOL had establish a strong footprint and separate identity standardizing the scalability and commitment. Our proven skills and maturity is being relied and admired among our customers to obtain a level of satisfaction to tie up the bonding to move together.\r\nSince forming, BCLOL has designed and implemented solutions for companies in different parts of Bangladesh to deploy simple and complex service and solutions for various customers.\r\nSurfing among the latest technology and ideas, we believe we are capable to provide the best solutions making the customers intention as our main objectives. We like listen till we start to think like our customers and then we deploy our expertise to obtain the goal..\r\n\r\nAmber IT is not simply another link in the chain of voice and data supply in the Bangladesh. Our pioneering spirit is evidenced by the creation of a national, fully resilient, MPLS network and the continuous testing and adoption of emerging communications platforms. As a result, we have earned the reputation of a communications provider whose focus is on solidly addressing businesses\' communications requirements.', NULL, '<p><strong><em>BCL Online Limited (BCLOL) is an</em></strong> innovation house offering IT enabled services, virtualization, custom solutions in selected platforms. BCLOL offers full design and integration , specialized managed services and solutions, server virtualization, network security &amp; optimization based on hardware and software tools, application integration and mobilization and tailored business solutions. Being in the middle of all IT services offered by various companies, BCLOL had establish a strong footprint and separate identity standardizing the scalability and commitment. Our proven skills and maturity is being relied and admired among our customers to obtain a level of satisfaction to tie up the bonding to move together. Since forming, BCLOL has designed and implemented solutions for companies in different parts of Bangladesh to deploy simple and complex service and solutions for various customers. Surfing among the latest technology and ideas, we believe we are capable to provide the best solutions making the customers intention as our main objectives. We like listen till we start to think like our customers and then we deploy our expertise to obtain the goal.. Amber IT is not simply another link in the chain of voice and data supply in the Bangladesh. Our pioneering spirit is evidenced by the creation of a national, fully resilient, MPLS network and the continuous testing and adoption of emerging communications platforms. As a result, we have earned the reputation of a communications provider whose focus is on solidly addressing businesses&#39; communications requirements.</p>', NULL, '2022-08-31 00:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `account_infos`
--

CREATE TABLE `account_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_id` bigint(20) UNSIGNED NOT NULL,
  `ac_no` bigint(20) NOT NULL,
  `r_no` bigint(20) DEFAULT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','editor','subscriber') COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'subscriber editor admin, subscriber, editor',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`) VALUES
(1, 'rss rita', 'user@gmail.com', NULL, 'admin', 'pnj9Zg9', NULL, '2022-08-09 01:37:43', '2022-08-27 09:57:51', ''),
(3, 'john ahta', 'john@gmail.com', NULL, NULL, '$2y$10$bu08p8sYwBeQ4oyK5uCy4erC9bAdPtCmgxenZh9VNgjQXliUOSbae', NULL, '2022-08-09 09:34:32', '2022-08-09 09:34:32', ''),
(4, 'nickname', 'kazi@gmail.com', NULL, NULL, '$2y$10$S6gV6SSih7AKEm4njU0xY.Wx9p1i/mvP1dzcd3kg2TVuPjWmx5zEe', 'zF5N5ufnm6vZ6DvS', '2022-08-09 23:15:44', '2022-08-09 23:15:46', '01834920142'),
(5, '_name', 'ar42@gmail.com', NULL, NULL, '$2y$10$OTKxX6XX2g2oeJXUaqt11uuuTPq7aLTnvPF4Xez.ZtBG402SR346i', 'ouJ98D7FNgfzq7f6lXg5U4Qn0aSubv', '2022-08-09 23:34:40', '2022-08-09 23:34:40', '01834920142'),
(12, 'nickname', 'ka42@gmail.com', NULL, NULL, '$2y$10$gnqaDG0NmcgZuF550U6zC.2RcbBOKPDToS8mAcHJEveBadg9Wyhba', 'UAx1CvZ8JNdl5aTQPMtVuBmpUv5RP1', '2022-08-10 00:04:14', '2022-08-10 00:04:14', '01834920142'),
(13, 'nickname', 'kaziar42@gmail.com', '2022-08-15 07:14:12', NULL, '$2y$10$WXcPPjbDN63VKv.Qmmej3OQTh5RYSAV/D0Puow2orp/mpucqblaey', '', '2022-08-10 07:24:58', '2022-08-15 07:14:12', '01834920142'),
(14, 'nickname', 'abdurrahman890000@gmail.com', '2022-08-10 08:41:28', NULL, '$2y$10$9t0991f3HwagMQDC.5el8urFdis8dqOtIl9vYCg2KR6nOXjYpKa16', '', '2022-08-10 07:56:03', '2022-08-10 08:41:28', '01834920142'),
(15, 'auntor sheikh', 'brownauntor@gmail.com', NULL, NULL, '$2y$10$rgFrl4xRT40L9nBhWmqXEOSvl8T1WljUzt9KzbXSMr6JuxcnkYTdG', 'VwLx28gVJ65jZTnXr9DlCLlkFnFGmy', '2022-08-10 11:31:49', '2022-08-10 11:31:49', '01834920142'),
(16, 'sifat khan', 'sifatk69@gmail.com', NULL, NULL, '$2y$10$EGRclcxEVhBLQH8CGce.Zedz9Vz..dORWWyFNA8iUzPkEva1TGvE6', 'mLaCSgLSqAn27yVb8XbWnf0pjSf7Rm', '2022-08-10 11:32:35', '2022-08-10 11:32:35', '01834920142');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(11, 'abdur rahman kazi', 'banks/1661524775.png', '2022-08-26 08:39:16', '2022-08-26 08:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(128) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `message`, `from`, `created`) VALUES
(1, 'hi', 'suba', '2021-03-24 19:52:16'),
(2, 'i am srabon', 'abdur rahman kazi', '2021-03-24 19:53:46'),
(3, 'HLW', 'a', '2021-03-24 20:32:55'),
(4, 'hhh', 'ddd', '2021-03-24 21:05:14'),
(5, '1', 'ddd', '2021-03-24 21:05:19'),
(6, '3', 'ddd', '2021-03-24 21:05:22'),
(21, 'fdfdf', 'eva', '2021-03-30 02:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Call us', '09611123123 || 09611123123', NULL, NULL),
(2, 'Email', '09611123123 || 09611123123', NULL, NULL),
(3, 'Our Corporate Office', '09611123123 || 09611123123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `corporate_internets`
--

CREATE TABLE `corporate_internets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coverages`
--

CREATE TABLE `coverages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `postcode` bigint(20) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coverages`
--

INSERT INTO `coverages` (`id`, `name`, `district_id`, `postcode`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(6, 'Navana Office', 1, 1212, 'Navana Tower (7th floor), 45, Gulshan South C/A-1', 1961133777, '2022-08-28 12:16:24', '2022-08-28 12:16:24'),
(7, 'Gulshan', 1, 1212, 'Gulshan (1,2), Banani, Badda, Mohakhali', 1961133777, '2022-08-28 12:17:37', '2022-08-28 12:17:37'),
(8, 'Chattogram', 3, 1230, 'Shiuli Petrol Pump Road, Pahartoli , OlankarMour, Chittagong', 17088080101, '2022-08-28 12:19:27', '2022-08-28 12:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '0000-00-00 00:00:00', '2022-08-25 16:07:43'),
(3, 'Chattogram', '2022-08-25 16:05:16', '2022-08-28 12:10:06'),
(5, 'Rajshahi', '2022-08-28 12:10:16', '2022-08-28 12:10:16'),
(6, 'Khulna', '2022-08-28 12:10:22', '2022-08-28 12:10:22'),
(7, 'Barishal', '2022-08-28 12:10:28', '2022-08-28 12:10:28'),
(8, 'Rangpur', '2022-08-28 12:10:33', '2022-08-28 12:10:33'),
(9, 'Mymensingh', '2022-08-28 12:10:36', '2022-08-28 12:10:36'),
(10, 'About', '2022-08-30 23:16:52', '2022-08-30 23:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_09_065817_create_admins_table', 1),
(9, '2022_08_15_145108_create_packages_table', 2),
(10, '2022_08_17_192103_create_districts_table', 2),
(11, '2022_08_17_192218_create_coverages_table', 3),
(12, '2022_08_17_214419_create_pays_table', 4),
(13, '2022_08_17_214535_create_banks_table', 4),
(14, '2022_08_17_214644_create_account_infos_table', 4),
(15, '2022_08_26_164040_create_contacts_table', 5),
(16, '2022_08_26_170901_create_abouts_table', 6),
(17, '2022_08_31_062156_create_corporate_internets_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mb` int(11) NOT NULL,
  `tk` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `mb`, `tk`, `description`, `created_at`, `updated_at`) VALUES
(1, 'abdur rahman kazi', 20, 234, 'gfhghf ghfgh||rrt||2 AM-8 PM - 20 Mbps.', '2022-08-27 10:34:26', '2022-08-27 10:34:26');

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
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Bkash', 'pays/1661656044.png', '2022-08-27 21:07:24', '2022-08-27 21:07:24'),
(3, 'Nogod', 'pays/1661656114.png', '2022-08-27 21:08:34', '2022-08-27 21:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdur rahman kazi', 'kay2333@email.com', NULL, '$2y$10$.9JYdilrIxH79fqjdz/3Uu5qO1tMJm4VKX6TK.Mdc/d8wayCB9Mka', NULL, '2022-08-09 07:18:02', '2022-08-09 07:18:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_infos`
--
ALTER TABLE `account_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_infos_bank_id_foreign` (`bank_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_internets`
--
ALTER TABLE `corporate_internets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coverages`
--
ALTER TABLE `coverages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coverages_district_id_foreign` (`district_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account_infos`
--
ALTER TABLE `account_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `corporate_internets`
--
ALTER TABLE `corporate_internets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coverages`
--
ALTER TABLE `coverages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_infos`
--
ALTER TABLE `account_infos`
  ADD CONSTRAINT `account_infos_bank_id_foreign` FOREIGN KEY (`bank_id`) REFERENCES `banks` (`id`);

--
-- Constraints for table `coverages`
--
ALTER TABLE `coverages`
  ADD CONSTRAINT `coverages_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
