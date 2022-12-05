-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 04:42 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `broadband`
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
(1, 'About', 'BCL Online Limited (BCLOL) is an innovation house offering IT enabled services, virtualization, custom solutions in selected platforms.\r\nBCLOL offers full design and integration , specialized managed services and solutions, server virtualization, network security & optimization based on hardware and software tools, application integration and mobilization and tailored business solutions.\r\nse focus is on solidly addressing businesses\' communications requirements.', 'BCL Online Limited (BCLOL) is an innovation house offering IT enabled services, virtualization, custom solutions in selected platforms.\r\nBCLOL offers full design and integration , specialized managed services and solutions, server virtualization, network security & optimization based on hardware and software tools, application integration and mobilization and tailored business solutions.\r\nse focus is on solidly addressing businesses\' communications requirements.', '<p>BCL Online Service (BCLOS) is an innovation house offering IT enabled services, virtualization, custom solutions in selected platforms.</p>\r\n\r\n<p>BCLOS offers full design and integration , specialized managed services and solutions, server virtualization, network security &amp; optimization based on hardware and software tools, application integration and mobilization and tailored business solutions.</p>\r\n\r\n<p>Being in the middle of all IT services offered by various companies, BCLOS had establish a strong footprint and separate identity standardizing the scalability and commitment. Our proven skills and maturity is being relied and admired among our customers to obtain a level of satisfaction to tie up the bonding to move together.</p>\r\n\r\n<p>Since forming, BCLOS has designed and implemented solutions for companies in different parts of Bangladesh to deploy simple and complex service and solutions for various customers.</p>\r\n\r\n<p>Surfing among the latest technology and ideas, we believe we are capable to provide the best solutions making the customers intention as our main objectives. We like listen till we start to think like our customers and then we deploy our expertise to obtain the goal.</p>', NULL, '2022-10-01 11:14:47');

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
(2, 'abdur rahman kazi', 12, 324234232423423, 436345, 'comilla', '2022-09-14 15:09:41', '2022-09-14 15:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','editor','subscriber','guest') COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'subscriber,editor,admin,guest',
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
(18, 'misty akter', 'misty@gmail.com', '2022-09-19 06:16:14', 'admin', '$2y$10$x..t5/QP/JFt2y8SuBPptOPpJQ35lba3E/1oQafqiOdPYC2QQIQga', '', '2022-09-19 06:15:14', '2022-09-19 06:16:14', '01722222222', NULL, 'f'),
(19, 'md shrabon', 'kaziar42@gmail.com', '2022-09-19 06:27:29', 'admin', '$2y$10$hg7cqZxCyidrCgFpL5x8OeQL14TSTx9YJFB35XcZPh6ZVWIl3VwK.', '', '2022-09-19 06:27:18', '2022-12-01 11:51:05', '01715550341', 'sliders/1669917065.jpg', 'm'),
(21, 'misty akter', 'mistyakter89000@gmail.com', '2022-12-04 10:26:38', 'guest', '$2y$10$LD/bLm13GDQpthOMe3iK3OAIBcwszjmz.4CKihjw8UN1Ypu2v6Hje', '', '2022-12-04 10:26:27', '2022-12-04 10:36:42', '01834920142', NULL, 'm');

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
(12, 'brack bank', 'banks/1670254301.jpg', '2022-09-29 12:52:59', '2022-12-05 09:31:43');

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
(1, 'Call us', '01834920142', NULL, '2022-12-04 11:21:04'),
(2, 'Email', 'kaziar42@gmail.com || arr@gmail.com', NULL, NULL),
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
(2, 'abdur rahma', 'fa-connectdevelop', '2 AM-8 PM - 20 Mbps.||rrt||2 AM-8 PM - 20 Mbp', '2022-09-10 10:14:27', '2022-10-01 10:56:05'),
(3, 'Cloud IP-PBX', 'fa-connectdevelop', 'Enjoy free PBX system by connecting to our IP-PBX platform||Zero CapEx||Scalable depending on your staffing needs', '2022-09-10 10:53:24', '2022-09-10 10:53:24'),
(4, 'abdur rahma', 'fa-connectdevelop', '2 AM-8 PM - 20 Mbps.||rrt||2 AM-8 PM - 20 Mbp', '2022-09-10 10:14:27', '2022-10-01 10:56:40'),
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
(11, 'pabna', '2022-09-20 12:45:38', '2022-09-20 12:47:55');

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
-- Table structure for table `featureimages`
--

CREATE TABLE `featureimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featureimages`
--

INSERT INTO `featureimages` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'package', 'assets/logo/1670074611jj-ying-8bghKxNU1j0-unsplash.jpg', NULL, '2022-12-03 07:36:51'),
(2, 'pay', 'assets/logo/1670127938jj-ying-8bghKxNU1j0-unsplash.jpg', NULL, '2022-12-03 22:25:38'),
(3, 'coverage', 'assets/logo/1670128533marc-olivier-jodoin-NqOInJ-ttqM-unsplash.jpg', NULL, '2022-12-03 22:35:33'),
(4, 'corporateinternet', 'assets/logo/1670128317markus-spiske-iar-afB0QQw-unsplash.jpg', NULL, '2022-12-03 22:31:57'),
(5, 'contacts', 'assets/logo/1670127949julian-hochgesang-psGV5KhidlY-unsplash.jpg', NULL, '2022-12-03 22:25:49'),
(6, 'about', 'assets/logo/1670128267thom-holmes-RqASow2Y6Os-unsplash.jpg', NULL, '2022-12-03 22:31:07'),
(7, 'ip_phones', 'assets/logo/1664542239cv1111.jpg', NULL, '2022-09-30 06:50:40');

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
(2, 'Feature of Amber IT IP Phone App:', 'banks/1664643965.png', 'Get 10 taka account balance doing NID card verification properly.||alk to any number 24 hours by 40 poisa per minute call rate. (15% VAT applicable)||Every second pulse.', '2022-09-14 10:34:52', '2022-10-01 11:07:24'),
(3, 'Download Amber IT IP Phone app today to enjoy the best call rates in the country.', 'banks/1664644107.png', 'Talk to any local operator for 40 poisa per minute and one second pulse.||FREE calls to IP phone numbers, app-to-app video calls, audio calls, group chats and file sharing.||Get 10 taka bonus by registering with correct information', '2022-09-14 12:26:22', '2022-10-01 11:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `link_page_to_menus`
--

CREATE TABLE `link_page_to_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `submenutype` int(11) NOT NULL DEFAULT 0,
  `pageid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `link_page_to_menus`
--

INSERT INTO `link_page_to_menus` (`id`, `submenutype`, `pageid`, `created_at`, `updated_at`) VALUES
(6, 0, 3, '2022-12-02 13:35:52', '2022-12-02 13:35:52'),
(7, 0, 6, '2022-12-02 13:45:24', '2022-12-02 13:45:24'),
(8, 1, 7, '2022-12-03 07:15:59', '2022-12-03 07:15:59');

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
(21, '2022_09_19_140911_create_pages_table', 11),
(23, '2022_09_28_130101_create_settings_table', 12),
(25, '2022_09_30_082601_create_featureimages_table', 13),
(27, '2022_12_02_141613_create_link_page_to_menus_table', 14);

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
(1, 'Golden', 20, 239, '2 AM-8 PM - 20 Mbps.||rrt||2 AM-8 PM - 20 Mbps.', '2022-08-27 10:34:26', '2022-10-01 10:01:14');

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
(3, 'Customized Network Management', '<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Customized Network Management</strong></p>\r\n\r\n<p>BCLOS&rsquo;s flexible network expertise and understanding embraces small office configurations, multiple-sites, or corporate networks.</p>\r\n\r\n<p>We manage the optimization of your network significantly reducing the risk associated with unscheduled outages or loss of data.</p>\r\n\r\n<p>Our experienced technical team realizes the financial impact facing your business should you experience a network failure. Their ability to quickly diagnose the problem minimizes the effect on your business.</p>\r\n\r\n<p>Individually tailored maintenance programs are available to manage your system remotely with our support. Latest technology instantly alerts us to a client&rsquo;s network or server issue enabling our 24-hour team to respond quickly and resolve any problems.</p>\r\n\r\n<p>Call us Now and speak with one of our solution designers to discuss your options.</p>', '2022-12-02 07:48:08', '2022-12-02 07:48:08'),
(6, 'Super Control over Internet and Intranet Content', '<p>Content Control keeps your kids or any other persons away from undesirable website.</p>\r\n\r\n<p>Content control in corporate environment would prevent your good employees doing from bad things. Would improved the working condition and overall productivity.</p>\r\n\r\n<p>Features:</p>\r\n\r\n<ul>\r\n	<li>Blocking of file sharing programs and sites</li>\r\n	<li>Undesirable sites</li>\r\n	<li>Adult-content filtering</li>\r\n	<li>Limit use of the Internet for the day and the week</li>\r\n	<li>Set time limits for categories of websites, such as videos and online games</li>\r\n	<li>Log computer activity to let you later review each user&rsquo;s activities</li>\r\n	<li>Send log files to any email address</li>\r\n</ul>', '2022-12-02 13:45:24', '2022-12-02 13:45:24'),
(7, 'Tasks and Periphery', '<p>BCLOS is one of the deciders of the market trend for managed services, dictates over network integration, opens new era in optimization and Visualization solutions.</p>\r\n\r\n<p>Delivering scalable and innovative enterprise solutions and services is our first goal to obtain through the best possible combination of existing client resources and minimum level of shift from the main track.</p>\r\n\r\n<p>Believing in the power of &ldquo;WE&rdquo;, team spirit and bonding together with the clients in our milestone.</p>\r\n\r\n<p>Analyzing CAPEX and OPEX, we try to analyze SWOT of our customers while formulating the best solution.</p>\r\n\r\n<p>So regardless of your size or the scale or complexity of your business requirement we are confident of architecting and delivering a solution that suits best for you.</p>', '2022-12-03 07:15:59', '2022-12-03 07:15:59');

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `keywords`, `logo`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'BCL Online Service', 'Internet Service Provider in Bangladesh, isp in bangladesh, isp in dhaka, isp in bd', 'logo/16644662751664462799logo.jpeg', 'logo/166446627516644661811664462475fevicon.png', 'Discover the joy of super-fast Internet access at home with BCL Online Service (BCLOS). We offer super speed Optical Fiber Home Internet Connectivity with Real IP. See our fibre broadband plans for your home now.', NULL, '2022-09-29 09:44:35');

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
(2, 'sliders/1670253202.jpg', '2022-09-17 08:04:37', '2022-12-05 09:13:24'),
(3, 'sliders/1670253102.jpg', '2022-09-17 08:37:22', '2022-12-05 09:11:42');

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
(2, 'facebook official', 'facebook-official', 'http://127.0.0.1:8000/social_media', '2022-09-16 09:35:18', '2022-12-04 11:19:49');

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
-- Indexes for table `featureimages`
--
ALTER TABLE `featureimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip_phones`
--
ALTER TABLE `ip_phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link_page_to_menus`
--
ALTER TABLE `link_page_to_menus`
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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- AUTO_INCREMENT for table `featureimages`
--
ALTER TABLE `featureimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ip_phones`
--
ALTER TABLE `ip_phones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `link_page_to_menus`
--
ALTER TABLE `link_page_to_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
