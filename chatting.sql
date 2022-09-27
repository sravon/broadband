-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 06:37 AM
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
(1, 'About', 'BCL Online Limited (BCLOL) is an innovation house offering IT enabled services, virtualization, custom solutions in selected platforms.\nBCLOL offers full design and integration , specialized managed services and solutions, server virtualization, network security & optimization based on hardware and software tools, application integration and mobilization and tailored business solutions.\nse focus is on solidly addressing businesses\' communications requirements.', 'BCL Online Limited (BCLOL) is an innovation house offering IT enabled services, virtualization, custom solutions in selected platforms.\nBCLOL offers full design and integration , specialized managed services and solutions, server virtualization, network security & optimization based on hardware and software tools, application integration and mobilization and tailored business solutions.\nse focus is on solidly addressing businesses\' communications requirements.', '<p><strong><em>BCL Online Limited (BCLOL) is an</em></strong> innovation house offering IT enabled services, virtualization, custom solutions in selected platforms. BCLOL offers full design and integration , specialized managed services and solutions, server virtualization, network security &amp; optimization based on hardware and software tools, application integration and mobilization and tailored business solutions. Being in the middle of all IT services offered by various companies, BCLOL had establish a strong footprint and separate identity standardizing the scalability and commitment. Our proven skills and maturity is being relied and admired among our customers to obtain a level of satisfaction to tie up the bonding to move together. Since forming, BCLOL has designed and implemented solutions for companies in different parts of Bangladesh to deploy simple and complex service and solutions for various customers. Surfing among the latest technology and ideas, we believe we are capable to provide the best solutions making the customers intention as our main objectives. We like listen till we start to think like our customers and then we deploy our expertise to obtain the goal.. Amber IT is not simply another link in the chain of voice and data supply in the Bangladesh. Our pioneering spirit is evidenced by the creation of a national, fully resilient, MPLS network and the continuous testing and adoption of emerging communications platforms. As a result, we have earned the reputation of a communications provider whose focus is on solidly addressing businesses&#39; communications requirements.</p>', NULL, '2022-08-31 00:47:48');

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

--
-- Dumping data for table `account_infos`
--

INSERT INTO `account_infos` (`id`, `name`, `bank_id`, `ac_no`, `r_no`, `branch`, `created_at`, `updated_at`) VALUES
(2, 'abdur rahman kazi', 11, 324234232423423, 436345, 'comilla', '2022-09-14 15:09:41', '2022-09-14 15:09:41');

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
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `image`, `gender`) VALUES
(18, 'misty akter', 'mistyakter89000@gmail.com', '2022-09-19 06:16:14', 'admin', '$2y$10$x..t5/QP/JFt2y8SuBPptOPpJQ35lba3E/1oQafqiOdPYC2QQIQga', '', '2022-09-19 06:15:14', '2022-09-19 06:16:14', '01722222222', NULL, 'f'),
(19, 'md shrabon', 'kaziar42@gmail.com', '2022-09-19 06:27:29', 'admin', '$2y$10$hg7cqZxCyidrCgFpL5x8OeQL14TSTx9YJFB35XcZPh6ZVWIl3VwK.', '', '2022-09-19 06:27:18', '2022-09-20 02:56:54', '01715550341', NULL, 'm');

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
(11, 'brac', 'banks/1661524775.png', '2022-08-26 08:39:16', '2022-08-26 08:39:35');

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
(1, 'Call us', '096||09611123123', NULL, '2022-09-20 08:56:12'),
(2, 'Email', '09611123123 || 09611123123', NULL, NULL),
(3, 'Our Corporate Office', 'Amber IT Ltd. Navana Tower (7th Floor) || 45 Gulshan South C/A, Circle-1', NULL, NULL);

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

--
-- Dumping data for table `corporate_internets`
--

INSERT INTO `corporate_internets` (`id`, `name`, `icon_name`, `items`, `created_at`, `updated_at`) VALUES
(2, 'abdur rahma', 'era', '2 AM-8 PM - 20 Mbps.||rrt||2 AM-8 PM - 20 Mbp', '2022-09-10 10:14:27', '2022-09-10 10:24:11'),
(3, 'Cloud IP-PBX', 'fa-connectdevelop', 'Enjoy free PBX system by connecting to our IP-PBX platform||Zero CapEx||Scalable depending on your staffing needs', '2022-09-10 10:53:24', '2022-09-10 10:53:24'),
(4, 'abdur rahma', 'era', '2 AM-8 PM - 20 Mbps.||rrt||2 AM-8 PM - 20 Mbp', '2022-09-10 10:14:27', '2022-09-10 10:24:11'),
(5, 'Cloud IP-PBX', 'fa-connectdevelop', 'Enjoy free PBX system by connecting to our IP-PBX platform||Zero CapEx||Scalable depending on your staffing needs', '2022-09-10 10:53:24', '2022-09-10 10:53:24');

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
(11, 'pabna', '2022-09-20 12:45:38', '2022-09-20 12:47:55'),
(12, 'abdur rahman kazi', '2022-09-20 12:52:34', '2022-09-20 12:52:34'),
(13, 'md shrabon', '2022-09-20 12:52:41', '2022-09-20 12:52:41'),
(14, 'Brand_name', '2022-09-20 12:52:46', '2022-09-20 12:52:46');

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
-- Table structure for table `ip_phones`
--

CREATE TABLE `ip_phones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ip_phones`
--

INSERT INTO `ip_phones` (`id`, `name`, `image`, `items`, `created_at`, `updated_at`) VALUES
(2, 'nick arname', 'banks/1663173292.png', 'gfhghf ghfgh||2 AM-8 PM - 20 Mbp||Enjoy free PBX system by connecting to our IP-PBX platform', '2022-09-14 10:34:52', '2022-09-14 10:41:24'),
(3, 'abdur rahman kazi', 'banks/1663179982.jpg', '2 AM-8 PM - 20 Mbp||rrt||gfhghf ghfgh', '2022-09-14 12:26:22', '2022-09-14 12:26:22');

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
(17, '2022_08_31_062156_create_corporate_internets_table', 7),
(18, '2022_09_14_153711_create_ip_phones_table', 8),
(19, '2022_09_16_132319_create_social_media_table', 9),
(20, '2022_09_17_125754_create_sliders_table', 10),
(21, '2022_09_19_140911_create_pages_table', 11);

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
(1, 'abdur rahman kazi', 20, 239, '2 AM-8 PM - 20 Mbps.||rrt||2 AM-8 PM - 20 Mbps.', '2022-08-27 10:34:26', '2022-09-10 09:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'md shrabon me', '<p>dszfasf tfhdfxh dasgfds i am a man</p>', '2022-09-19 10:43:35', '2022-09-20 02:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mistyakter89000@gmail.com', '16635208066948242', '2022-09-18 11:06:46'),
('mistyakter89000@gmail.com', '16635208737296974', '2022-09-18 11:07:53'),
('mistyakter89000@gmail.com', '16635216548457930', '2022-09-18 11:20:54'),
('mistyakter89000@gmail.com', '16635217371666308', '2022-09-18 11:22:17'),
('tasnim.plabon@northsoouth.edu', '16635275488966589', '2022-09-18 12:59:08'),
('tasnim.plabon@northsouth.edu', '16635275788948948', '2022-09-18 12:59:38');

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
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, 'sliders/1663423477.jpg', '2022-09-17 08:04:37', '2022-09-17 08:04:37'),
(3, 'sliders/1663425442.jpg', '2022-09-17 08:37:22', '2022-09-17 08:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `name`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(2, 'facebook official', 'facebook-official', 'http://127.0.0.1:8000/admin/social_media', '2022-09-16 09:35:18', '2022-09-16 09:35:18');

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
-- Indexes for table `ip_phones`
--
ALTER TABLE `ip_phones`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account_infos`
--
ALTER TABLE `account_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `corporate_internets`
--
ALTER TABLE `corporate_internets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coverages`
--
ALTER TABLE `coverages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_phones`
--
ALTER TABLE `ip_phones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
