-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 06:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-com`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cupons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `returnorder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orders` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alluser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminuserrole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(25) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `brand`, `category`, `product`, `slider`, `cupons`, `banner`, `shipping`, `returnorder`, `review`, `orders`, `stock`, `alluser`, `reports`, `setting`, `adminuserrole`, `type`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Hasib', 'admin@gmail.com', '2021-07-01 12:05:34', '$2a$12$1wwtdXZz3/MgjrmKvVfOFezXVrebWq8AP.xpGjcN1SMXnvElln1cW', '123457', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 'UATtMHC11i', NULL, '2021120210463219840.png', '2021-07-01 12:05:34', '2021-12-02 04:46:46'),
(3, 'HR', 'hr@gmail.com', NULL, '$2y$10$oDipE7ivI1xRiaJlOjT00u/VIqSW4O.SDSnXilcrJr7VKPuQlKMD2', '01784677515', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 'upload/admin_images/1709131438442813.png', '2021-08-25 23:48:32', '2021-08-25 23:48:32'),
(6, 'test admin', 'testa@gmail.com', NULL, '$2y$10$DLMUhWPYqJZLTbAWOT/xj.zrtMmU0ysfloIQtwEq6Va3yPUS/BLMa', '01784677515', NULL, NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, 2, NULL, NULL, 'upload/admin_images/1709145818828385.png', '2021-08-26 03:01:10', NULL),
(7, 'OM', 'om@gmail.com', NULL, '$2y$10$zlafXZgPL3w/BFos1/Bvwe5IMW0jrcUOkNhULKhVfOLAWNvufwPni', '017846778516', '1', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 'upload/admin_images/1709147533915744.png', '2021-08-26 03:28:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(100) NOT NULL,
  `debit` float NOT NULL,
  `credit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `debit`, `credit`) VALUES
(1, 157299, 710270);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bennar_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `bennar_img`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'upload/banner/1714745555139813.jpg', 'new', NULL, 1, NULL, NULL),
(2, 'upload/banner/1714856934580635.jpg', 'Pandamic', NULL, 1, NULL, NULL),
(4, 'upload/banner/1714856972656189.jpeg', NULL, NULL, 1, NULL, NULL),
(5, 'upload/banner/1714856973390706.jpeg', NULL, NULL, 1, NULL, NULL),
(6, 'upload/banner/1714857066503092.jpg', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner_catagories`
--

CREATE TABLE `banner_catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bennar_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_catagories`
--

INSERT INTO `banner_catagories` (`id`, `bennar_img`, `status`, `created_at`, `updated_at`) VALUES
(7, 'upload/banner_Category/1714859456644436.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name_cats_eye` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name_cats_eye`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'Apex', 'upload/brand/1716672711740674.png', NULL, '2021-11-17 04:57:54'),
(2, 'Samsung', 'upload/brand/1716736902466512.png', NULL, '2021-11-17 21:58:12'),
(3, 'Bata', 'upload/brand/1716736366621767.png', NULL, '2021-11-17 21:49:41'),
(4, 'Oppo', 'upload/brand/1716736832621986.png', NULL, '2021-11-17 21:57:05'),
(5, 'Dell', 'upload/brand/1716736455176744.png', NULL, '2021-11-17 21:51:05'),
(6, 'Hp', 'upload/brand/1716736650950551.png', NULL, '2021-11-17 21:54:12'),
(7, 'Indian Fruit', 'upload/brand/1716736751579270.png', NULL, '2021-11-17 21:55:48'),
(8, 'Australian Furit', 'upload/brand/1716673027883880.jpg', NULL, '2021-11-17 05:02:56'),
(9, 'Hero', 'upload/brand/1716736510520816.png', NULL, '2021-11-17 21:51:58'),
(10, 'Honda', 'upload/brand/1716736589117018.jpg', NULL, '2021-11-17 21:53:13'),
(11, 'Astro', 'upload/brand/1716672833530286.png', NULL, '2021-11-17 04:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug_name`, `category_icon`, `created_at`, `updated_at`) VALUES
(1, 'Fashion', 'fashion', 'fashion', NULL, '2021-10-26 23:46:35'),
(2, 'Electronics', 'electronics', 'electronics', NULL, '2021-10-26 23:46:43'),
(3, 'Sports', 'sports', 'sports', NULL, '2021-10-26 23:46:49'),
(4, 'Mobile', 'mobile', 'mobile', NULL, '2021-10-26 23:47:16'),
(5, 'Laptop', 'laptop', 'laptop', NULL, '2021-10-26 23:47:23'),
(6, 'Fruit', 'fruit', 'fruit', NULL, '2021-10-26 23:47:30'),
(7, 'Motor Bike', 'motor-bike', 'bike', NULL, '2021-10-26 23:47:36'),
(8, 'Shoes', 'shoes', 'shoes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deals_times`
--

CREATE TABLE `deals_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hot_deals` date DEFAULT NULL,
  `special_deals` date DEFAULT NULL,
  `special_offer` date DEFAULT NULL,
  `featured` date DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deals_times`
--

INSERT INTO `deals_times` (`id`, `hot_deals`, `special_deals`, `special_offer`, `featured`, `product_id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, 1, '2021-10-27 00:15:37', '2021-10-27 00:15:37'),
(2, NULL, NULL, NULL, NULL, 2, '2021-10-27 00:19:17', '2021-10-27 00:19:17'),
(3, NULL, NULL, NULL, NULL, 3, '2021-10-27 00:26:31', '2021-10-27 00:26:31'),
(4, NULL, NULL, NULL, NULL, 4, '2021-10-27 00:37:09', '2021-10-27 00:37:09'),
(5, NULL, NULL, NULL, NULL, 5, '2021-10-27 00:40:56', '2021-10-27 00:40:56'),
(6, NULL, NULL, NULL, NULL, 6, '2021-10-27 00:49:23', '2021-10-27 00:49:23'),
(7, NULL, NULL, NULL, NULL, 7, '2021-10-27 00:53:02', '2021-10-27 00:53:02'),
(8, NULL, NULL, NULL, NULL, 8, '2021-10-27 00:57:01', '2021-10-27 00:57:01'),
(9, NULL, NULL, NULL, NULL, 9, '2021-10-27 01:00:31', '2021-10-27 01:00:31'),
(10, NULL, NULL, NULL, NULL, 10, '2021-10-27 01:02:25', '2021-10-27 01:02:25'),
(11, '2021-10-30', NULL, NULL, NULL, 11, '2021-10-27 21:54:02', '2021-10-27 22:44:14'),
(12, NULL, NULL, NULL, NULL, 12, '2021-10-28 03:44:45', '2021-10-28 03:44:45'),
(13, NULL, NULL, NULL, NULL, 13, '2021-10-28 03:50:28', '2021-10-28 03:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `created_at`, `updated_at`) VALUES
(1, 'Marketing', NULL, NULL),
(2, 'sales', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department_salaries`
--

CREATE TABLE `department_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `paid_salary` int(11) DEFAULT NULL,
  `due_salary` int(11) DEFAULT NULL,
  `advance_salary` int(11) DEFAULT NULL,
  `salary_date` date DEFAULT NULL,
  `total_salary` int(11) DEFAULT NULL,
  `bonus` int(11) DEFAULT NULL,
  `advance_salary_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_salaries`
--

INSERT INTO `department_salaries` (`id`, `department_id`, `employee_id`, `paid_salary`, `due_salary`, `advance_salary`, `salary_date`, `total_salary`, `bonus`, `advance_salary_date`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 20000, 0, 0, '2021-11-30', 20000, 0, '2021-11-30', '2021-11-22 23:47:34', '2021-11-22 23:50:30'),
(2, 2, 2, 20000, 0, 0, '2021-11-30', 20000, 0, '2021-11-30', '2021-11-22 23:47:56', '2021-11-23 04:59:23'),
(3, 1, 3, 20000, 0, 0, '2021-11-30', 20000, 0, '2021-11-30', '2021-11-23 05:02:14', '2021-11-23 05:11:12'),
(4, 1, 3, 0, 20000, 0, '2021-12-31', 20000, 0, '2021-12-31', '2021-12-01 22:03:45', '2021-12-01 22:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) NOT NULL,
  `employee_office_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_fathers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_present_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_salary` int(11) NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_date_of_birth` date NOT NULL,
  `employee_joing_date` date NOT NULL,
  `employee_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `department_id`, `employee_office_id`, `employee_name`, `email_id`, `employee_img`, `employee_phone`, `employee_fathers_name`, `employee_mother_name`, `employee_present_address`, `employee_permanent_address`, `employee_salary`, `designation`, `employee_date_of_birth`, `employee_joing_date`, `employee_status`, `created_at`, `updated_at`) VALUES
(1, 2, 'agfnbhmn', 'Hasan', 'a@gmail.com', 'upload/employee/1717196326005829.png', '01677444438', 'adsfgh', 'sdghfnm', 'asdfgh', 'asdghjm', 20000, 'asdf', '1999-02-04', '2021-11-23', 1, NULL, NULL),
(2, 2, 'agfmj', 'Hasan', 'as@gmail.com', 'upload/employee/1717196731252829.png', '01677444438', 'adsfgh', 'sdghfnm', 'asdfhmj,.', 'asfsdbn', 20000, 'manager', '2021-11-06', '2021-11-28', 1, NULL, NULL),
(3, 1, '123456', 'maruf', 'a123@gmail.com', 'upload/employee/1717216549198268.png', '01677444438', 'adsfgh', 'sdghfnm', '1233', '123', 20000, 'manager', '2021-11-05', '2021-11-23', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_date` date NOT NULL,
  `expense_type_id` int(20) NOT NULL,
  `expense_payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expense_amount` double(8,2) NOT NULL,
  `expense_refrence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expense_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expense_date`, `expense_type_id`, `expense_payment_type`, `expense_amount`, `expense_refrence`, `expense_img`, `description`, `created_at`, `updated_at`) VALUES
(1, '2021-11-04', 3, 'Bank', 200.00, NULL, 'uploads/expense/expense-1637752166.jpg', 'zdfghbjnmk', NULL, NULL),
(2, '2021-11-30', 1, 'Bank', 1000.00, NULL, 'uploads/expense/expense-1638167315.png', 'sdsfghjkl', NULL, NULL),
(3, '2021-11-30', 17, 'Bank', 200.00, NULL, 'uploads/expense/expense-1638180267.jpg', 'hgcjhvbjk', NULL, NULL),
(4, '2021-12-01', 2, 'Cash', 200.00, NULL, 'uploads/expense/expense-1638340908.jpg', 'jhygfjlk;', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expense_types`
--

CREATE TABLE `expense_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expense_types`
--

INSERT INTO `expense_types` (`id`, `expense_type`, `created_at`, `updated_at`) VALUES
(1, 'mobile Bill', NULL, NULL),
(2, 'Food bill', NULL, NULL),
(3, 'Stationary', NULL, NULL),
(4, 'Other', NULL, NULL),
(5, 'fdgh', NULL, NULL),
(6, 'food bill', NULL, NULL),
(7, 'computer bill', NULL, NULL),
(8, 'hasing', NULL, NULL),
(9, 'xcvbn', NULL, NULL),
(10, 'xfcvnmn', NULL, NULL),
(11, 'asdsg', NULL, NULL),
(12, 'zxcvb', NULL, NULL),
(13, 'xsvc', NULL, NULL),
(14, 'agub', NULL, NULL),
(15, 'fruit', NULL, NULL),
(16, 'hello', NULL, NULL),
(17, 'gg', NULL, NULL),
(18, 'hasda', NULL, NULL),
(19, 'mobile  bill', NULL, NULL);

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_02_02_203839_create_sessions_table', 1),
(7, '2021_02_02_212221_create_admins_table', 1),
(8, '2021_07_10_103242_create_brands_table', 1),
(9, '2021_07_14_093510_create_categories_table', 1),
(10, '2021_07_15_085609_create_sub_categories_table', 1),
(11, '2021_07_15_093649_create_sub_sub_categories_table', 1),
(12, '2021_07_17_084557_create_products_table', 1),
(13, '2021_07_17_090259_create_multi_imgs_table', 1),
(14, '2021_07_26_133813_create_sliders_table', 1),
(15, '2021_08_08_182246_create_wishlists_table', 1),
(16, '2021_08_09_221745_create_coupons_table', 1),
(17, '2021_08_11_102754_create_ship_divisions_table', 1),
(18, '2021_08_12_035659_create_ship_districts_table', 1),
(19, '2021_08_12_065531_create_ship_states_table', 1),
(20, '2021_08_13_141034_create_shippings_table', 1),
(21, '2021_08_14_204211_create_orders_table', 1),
(22, '2021_08_14_204435_create_order_items_table', 1),
(23, '2021_08_19_093500_create_banners_table', 1),
(24, '2021_08_21_214104_create_site_settings_table', 1),
(25, '2021_08_22_042936_create_seos_table', 1),
(26, '2021_10_04_090830_create_departments_table', 1),
(27, '2021_10_04_090852_create_employees_table', 1),
(28, '2021_10_04_091005_create_suppliers_table', 1),
(29, '2021_10_06_054324_create_department_salaries_table', 1),
(30, '2021_10_09_050445_create_subscribers_table', 1),
(31, '2021_10_09_060123_create_reviews_table', 1),
(32, '2021_10_12_052536_create_purchases_table', 1),
(33, '2021_10_18_065416_create_banner_catagories_table', 1),
(34, '2021_10_21_054036_create_deals_times_table', 1),
(35, '2021_10_24_045319_create_contact_us_table', 1),
(36, '2021_11_24_053047_create_expenses_table', 2),
(37, '2021_11_24_054530_create_expense_types_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_imgs`
--

INSERT INTO `multi_imgs` (`id`, `product_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'upload/products/multi-image/1714752414155059.jpg', '2021-10-27 00:15:36', NULL),
(2, 1, 'upload/products/multi-image/1714752414432718.jpg', '2021-10-27 00:15:36', NULL),
(3, 1, 'upload/products/multi-image/1714752414712982.jpg', '2021-10-27 00:15:37', NULL),
(4, 1, 'upload/products/multi-image/1714752415038456.jpg', '2021-10-27 00:15:37', NULL),
(5, 2, 'upload/products/multi-image/1714752644909559.jpg', '2021-10-27 00:19:16', NULL),
(6, 2, 'upload/products/multi-image/1714752645061307.jpg', '2021-10-27 00:19:16', NULL),
(7, 2, 'upload/products/multi-image/1714752645251084.jpg', '2021-10-27 00:19:16', NULL),
(8, 2, 'upload/products/multi-image/1714752645439707.jpg', '2021-10-27 00:19:17', NULL),
(9, 3, 'upload/products/multi-image/1714753100128099.jpg', '2021-10-27 00:26:31', NULL),
(10, 3, 'upload/products/multi-image/1714753100598397.jpg', '2021-10-27 00:26:31', NULL),
(11, 3, 'upload/products/multi-image/1714753100772621.jpeg', '2021-10-27 00:26:31', NULL),
(12, 3, 'upload/products/multi-image/1714753100983304.jpg', '2021-10-27 00:26:31', NULL),
(13, 4, 'upload/products/multi-image/1714753768786475.jpg', '2021-10-27 00:37:08', NULL),
(14, 4, 'upload/products/multi-image/1714753769291974.jpg', '2021-10-27 00:37:08', NULL),
(15, 4, 'upload/products/multi-image/1714753769498184.jpg', '2021-10-27 00:37:09', NULL),
(16, 4, 'upload/products/multi-image/1714753769768915.jpg', '2021-10-27 00:37:09', NULL),
(17, 5, 'upload/products/multi-image/1714754007681092.jpg', '2021-10-27 00:40:56', NULL),
(18, 5, 'upload/products/multi-image/1714754007830583.jpg', '2021-10-27 00:40:56', NULL),
(19, 6, 'upload/products/multi-image/1714754539373122.jpg', '2021-10-27 00:49:23', NULL),
(20, 6, 'upload/products/multi-image/1714754539521424.jpg', '2021-10-27 00:49:23', NULL),
(21, 6, 'upload/products/multi-image/1714754539665788.jpg', '2021-10-27 00:49:23', NULL),
(22, 6, 'upload/products/multi-image/1714754539810968.jpg', '2021-10-27 00:49:23', NULL),
(23, 7, 'upload/products/multi-image/1714754769188154.png', '2021-10-27 00:53:02', NULL),
(24, 8, 'upload/products/multi-image/1714755018111624.jpg', '2021-10-27 00:56:59', NULL),
(25, 8, 'upload/products/multi-image/1714755018295733.jpg', '2021-10-27 00:57:00', NULL),
(26, 8, 'upload/products/multi-image/1714755018510256.png', '2021-10-27 00:57:00', NULL),
(27, 8, 'upload/products/multi-image/1714755019045193.png', '2021-10-27 00:57:01', NULL),
(28, 9, 'upload/products/multi-image/1716740387855074.jpg', '2021-10-27 01:00:30', '2021-11-17 22:53:36'),
(29, 9, 'upload/products/multi-image/1716740552183734.jpg', '2021-10-27 01:00:31', '2021-11-17 22:56:12'),
(30, 9, 'upload/products/multi-image/1714755239701932.jpg', '2021-10-27 01:00:31', NULL),
(31, 10, 'upload/products/multi-image/1716741056483850.jpg', '2021-10-27 01:02:24', '2021-11-17 23:04:13'),
(32, 10, 'upload/products/multi-image/1716741056723478.jpg', '2021-10-27 01:02:25', '2021-11-17 23:04:13'),
(33, 10, 'upload/products/multi-image/1714755359221496.jpg', '2021-10-27 01:02:25', NULL),
(34, 10, 'upload/products/multi-image/1714755359369597.jpg', '2021-10-27 01:02:25', NULL),
(35, 10, 'upload/products/multi-image/1714755359516417.jpg', '2021-10-27 01:02:25', NULL),
(36, 11, 'upload/products/multi-image/1714834102225198.jpg', '2021-10-27 21:54:01', NULL),
(37, 11, 'upload/products/multi-image/1716738607296890.jpg', '2021-10-27 21:54:02', '2021-11-17 22:25:17'),
(38, 11, 'upload/products/multi-image/1714834104314655.jpg', '2021-10-27 21:54:02', NULL),
(39, 11, 'upload/products/multi-image/1714834104606853.webp', '2021-10-27 21:54:02', NULL),
(40, 12, 'upload/products/multi-image/1714856169145083.jpeg', '2021-10-28 03:44:45', NULL),
(41, 12, 'upload/products/multi-image/1714856169352725.jpg', '2021-10-28 03:44:45', NULL),
(42, 12, 'upload/products/multi-image/1714856169508604.jpg', '2021-10-28 03:44:45', NULL),
(43, 13, 'upload/products/multi-image/1716741668290818.jpg', '2021-10-28 03:50:24', '2021-11-17 23:13:57'),
(44, 13, 'upload/products/multi-image/1716741792953420.jpg', '2021-10-28 03:50:26', '2021-11-17 23:15:56'),
(45, 13, 'upload/products/multi-image/1714856527174771.jpg', '2021-10-28 03:50:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picked_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `return_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `division_id`, `district_id`, `state_id`, `name`, `email`, `phone`, `post_code`, `notes`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `order_number`, `invoice_no`, `order_date`, `order_month`, `order_year`, `confirmed_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `return_order`, `return_reason`, `status`, `created_at`, `updated_at`) VALUES
(16, 3, 2, 9, 60, 'mesba', 'mesba@gmail.com', '01780882914', 1208, 'SZDk', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 157299.00, NULL, 'EOS94283615', '2021-11-23 10:36:58', 'November', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-01', '2', 'valo', 'delivered', '2021-11-23 04:36:58', '2021-12-01 03:49:06'),
(17, 3, 2, 8, 52, 'mesba', 'mesba@gmail.com', '01780882914', 1203, 'asdfdsf', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 726.00, NULL, 'EOS66145075', '2021-11-24 08:58:51', 'November', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-01', '2', 'valo lagse nah', 'delivered', '2021-11-24 02:58:51', '2021-12-01 03:49:08'),
(18, 3, 1, 2, 7, 'mesba', 'mesba@gmail.com', '01780882914', 0, 'dsfgfn', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 710270.00, NULL, 'EOS42042878', '2021-11-24 09:07:27', 'November', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-01', '2', 'Return Reasonsfdfghjk', 'delivered', '2021-11-24 03:07:27', '2021-12-01 03:49:09'),
(19, 3, 2, 7, 43, 'mesba', 'mesba@gmail.com', '01780882914', 1208, 'sAdfghjk', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 3751.00, NULL, 'EOS54460955', '2021-12-01 09:29:34', 'December', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2021-12-01 03:29:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `color`, `size`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(18, 16, 11, '--Choose Color--', '--Choose Size--', '1', 129999.00, '2021-11-23 04:37:01', NULL),
(19, 17, 13, 'red', 'Large', '1', 600.00, '2021-11-24 02:58:55', NULL),
(20, 18, 9, 'black', '30', '1', 245000.00, '2021-11-24 03:07:31', NULL),
(21, 18, 10, 'orange', '36', '1', 342000.00, '2021-11-24 03:07:31', NULL),
(22, 19, 12, 'pink', '14\"', '1', 3100.00, '2021-12-01 03:29:39', NULL);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_short_descp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_descp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thambnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `product_views` int(11) DEFAULT 0,
  `vedio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `product_name`, `product_code`, `product_qty`, `product_tags`, `product_size`, `product_color`, `selling_price`, `discount_price`, `product_short_descp`, `product_long_descp`, `product_thambnail`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `status`, `product_views`, `vedio`, `created_at`, `updated_at`) VALUES
(1, 3, 8, 14, 15, 'Bata WAVE Men\'s Dress Shoe', '5050', '100', 'dfgfdg', '36', 'blue', '3500', '3300', 'dgdfhgh', '<p>gdfhgfhj gfhgfj</p>', 'upload/products/thambnail/1714752413851934.jpg', 1, 1, 1, 1, 1, 1, 'www.youtube.com', '2021-10-27 00:37:36', '2021-10-27 00:37:36'),
(2, 1, 8, 14, 14, 'APEX Men\'s Dress Shoe', '5040', '100', 'khjklj', '36', 'black', '4000', '3500', 'dgfdagdfg', '<p>dsfdsgdfgdfgh dfgfhgfhhj</p>', 'upload/products/thambnail/1714752644688652.jpg', 1, 1, 1, 1, 1, 0, 'www.youtube.com', '2021-10-27 00:37:23', '2021-10-27 00:37:23'),
(3, 4, 4, 2, 17, 'Oppo F19 Pro 8 GB 128 GB Fluid Black', '1220', '100', 'jghj', '5.6`', 'black,red,blue', '25000', NULL, 'fcbgfhgh', '<p>gfdhfggfj dfsghtgfshgfhj</p>', 'upload/products/thambnail/1714753099904915.jpeg', 1, 1, 1, 1, 1, 2, 'www.youtube.com', '2021-10-27 00:27:44', '2021-10-27 02:28:26'),
(4, 2, 4, 2, 16, 'Samsung Galaxy A52 6 GB 128 GB Black', '3636', '100', 'dfgdfg', '6.00`', 'blue,black,red', '30000', '29500', 'dfdasg', '<p>&nbsp;fdbgfdhfh&nbsp; fghfdhdfh</p>', 'upload/products/thambnail/1714753768538354.jpg', 1, 1, 1, 1, 1, 0, 'www.youtube.com', '2021-10-27 00:37:08', NULL),
(5, 5, 5, 13, 12, 'Dell Inspiron 15 3505 Athlon Silver 3050U 15.6\" HD Laptop', '1213', '100', 'dfsdfg', '15.6`', 'gold,black', '35000', NULL, 'dsfgdfgh', '<p>fdgdfghfh dfgfdghfdh</p>', 'upload/products/thambnail/1714754007452932.jpg', 1, 1, 1, 1, 1, 0, 'www.youtube.com', '2021-10-27 00:40:56', NULL),
(6, 6, 5, 13, 13, 'HP 15s-du1087TU Intel Celeron N4020 15.6 inch FHD Laptop with Win 10', '5533', '98', 'dfdgf', '15.6`', 'black,gray,gold', '48000', '45000', 'dfdgh', '<p>dfgfhgfh dgffgfdh dfgdfg</p>', 'upload/products/thambnail/1714754539142733.jpg', 1, 1, 1, 1, 1, 4, 'www.youtube.com', '2021-10-27 00:49:23', '2021-11-23 03:16:35'),
(7, 7, 6, 5, 8, 'Indian Red Apple', '4563', '45', 'dfdfg', '5', 'red ,green', '500', NULL, 'dsfdf', '<p>fdgdfgh dsgdfagdfh&nbsp;</p>', 'upload/products/thambnail/1714754768634354.jpg', 1, 1, 1, 1, 1, 1, 'www.youtube.com', '2021-11-18 03:16:43', '2021-11-18 03:24:08'),
(8, 8, 6, 5, 8, 'Australian Apple', '5858', '200', 'fdgh', '6', 'red,green', '550', '500', 'fdgdfg', '<p>dfghfhgh dfgfgh</p>', 'upload/products/thambnail/1714755016575621.png', 1, 1, 1, 1, 1, 0, 'www.youtube.com', '2021-10-27 01:02:51', '2021-10-27 01:02:51'),
(9, 9, 7, 10, 18, 'Hero Thriller 160R Price in Bangladesh 2021', '2010', '18', 'dfsf', '30', 'black,red,blue', '250000', '245000', 'dsdfggh', '<p>gfhjhjhkj fghgjhj</p>', 'upload/products/thambnail/1714774048609760.jpg', 1, 1, 1, 1, 1, 3, 'www.youtube.com', '2021-10-27 01:00:30', '2021-12-01 03:49:09'),
(10, 10, 7, 10, 19, 'Honda CBR150R Repsol Price in Bangladesh 2021', '3020', '8', 'etret', '36', 'orange,black,blue,red', '350000', '342000', 'dfdgfg', '<p>dsghghghret ertfewth</p>', 'upload/products/thambnail/1714773660483342.jpeg', 1, 1, 1, 1, 1, 19, 'www.youtube.com', '2021-10-27 01:02:24', '2021-12-01 03:49:09'),
(11, 2, 4, 2, 16, 'Samsung Galaxy S21 Ultra 12 GB 512 GB', 's21-ultra', '145', 's21,s21 ulta,samsung,flagship', '6.5\"', 'Phantom Black,Phantom Blue,Phantom Silver,Phantom Titanium,Phantom Brown', '139999', '129999', 'Epic.\r\nIn every way', '<p>Introducing Galaxy S21 Ultra 5G. Designed with a unique contour-cut camera to create a revolution in photography &mdash; letting you capture cinematic 8K video and snap epic stills, all in one go.</p>', 'upload/products/thambnail/1717842565655153.png', 1, NULL, NULL, NULL, 1, 30, 'https://www.youtube.com/watch?v=kYPHTSEU49Y', '2021-10-28 03:24:07', '2021-12-01 03:49:06'),
(12, 1, 1, 15, 20, 'Ladies Bag', 'ladies_bag-210', '24', 'sidebag,style', '14\"', 'pink,yellow', '3500', '3100', 'Ladies Bag', '<p>dfdsfjos dkjshfkjdashd kjdshfkjdsh jdshfkjdh kjdshf dj jhdf dsjf fjdheiowhqpe woerk nd</p>', 'upload/products/thambnail/1714856168619148.png', NULL, NULL, 1, NULL, 1, 2, 'https://www.youtube.com/watch?v=fSyn52GDg4U', '2021-10-28 03:44:44', '2021-11-23 03:16:35'),
(13, 11, 1, 15, 21, 'Red Shopping Bag', 'hbag-52', '94', 'red,fashion', 'Large', 'red,orange', '800', '600', 'a bag or box of leather, fabric, plastic, or the like, held in the hand or carried by means of a handle or strap', '<p>&nbsp;<strong>a bag or box of leather, fabric, plastic, or the like</strong>, held in the hand or carried by means of a handle or strap,&nbsp;commonly used for holding money, personal grooming items, small purchases, etc.</p>', 'upload/products/thambnail/1717842357995872.png', 1, NULL, NULL, NULL, 1, 16, 'https://www.youtube.com/watch?v=DrrijIv4HPI', '2021-10-28 03:51:22', '2021-12-01 03:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_qty` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `due_amount` int(11) DEFAULT NULL,
  `purchase_date` date NOT NULL,
  `purchase_create_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_name`, `review`, `product_id`, `user_id`, `star`, `created_at`, `updated_at`) VALUES
(1, 'Pabon Saha', 'Nice product', 10, 1, 4, '2021-10-27 04:36:20', '2021-10-27 04:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jvBjXd1mKEoWmqH6wXKUjOouEgBb6tKeFv8cOveD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUWlxUGVtd0dzQjNZbjlBZE9BUVg4ZkM0WHRnNEp1VXM3NFpYZGE0aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1640860060),
('JWwBz84H7kl6uZUH4w3YZ70HJotIxk1A6D55dPbX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMk9pSXIyUFY4TDVCMWdkS3FlYWhreGIxTU5uYXU1MXFYQkthblBMVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1641102231),
('vUs6KwjmgTlvJi0yVlmiIfcde5GgIvBx9uXH7id7', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTFo0U1dKbDFrQnhES2IxaVdaRnhHQjk1eUhLbW1SQkFEZ1BZQm1iQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6ImU4ZmYwYWY3NjgxNTQ4YmQ3NGNlMTZjOTAxZTM5YmM2IjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6MTA6e3M6NToicm93SWQiO3M6MzI6ImU4ZmYwYWY3NjgxNTQ4YmQ3NGNlMTZjOTAxZTM5YmM2IjtzOjI6ImlkIjtzOjE6IjgiO3M6MzoicXR5IjtzOjE6IjEiO3M6NDoibmFtZSI7czoxNjoiQXVzdHJhbGlhbiBBcHBsZSI7czo1OiJwcmljZSI7ZDo1MDA7czo2OiJ3ZWlnaHQiO2Q6MTtzOjc6Im9wdGlvbnMiO086Mzk6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtT3B0aW9ucyI6Mjp7czo4OiIAKgBpdGVtcyI7YTozOntzOjU6ImltYWdlIjtzOjQ2OiJ1cGxvYWQvcHJvZHVjdHMvdGhhbWJuYWlsLzE3MTQ3NTUwMTY1NzU2MjEucG5nIjtzOjU6ImNvbG9yIjtzOjM6InJlZCI7czo0OiJzaXplIjtzOjE6IjYiO31zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fXM6NzoidGF4UmF0ZSI7aToyMTtzOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtOO3M6NDY6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBkaXNjb3VudFJhdGUiO2k6MDt9fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRBdG41V0ZEdnRadXBzUnlWUlpzcXd1aWZENHJ0eDd0QUlwZllYbzFEdlpYT2RtdWdnU3ozQyI7fQ==', 1638678835);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ship_districts`
--

CREATE TABLE `ship_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_districts`
--

INSERT INTO `ship_districts` (`id`, `division_id`, `district_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Barguna', NULL, NULL),
(2, 1, 'Barishal', NULL, NULL),
(3, 1, 'Bhola', NULL, NULL),
(4, 1, 'Jhalokathi', NULL, NULL),
(5, 1, 'Patuakhali', NULL, NULL),
(6, 1, 'Pirojpur', NULL, NULL),
(7, 2, 'B.baria', NULL, NULL),
(8, 2, 'Bandarban', NULL, NULL),
(9, 2, 'Chandpur', NULL, NULL),
(10, 2, 'Chattogram', NULL, NULL),
(11, 2, 'Cox\'s bazar', NULL, NULL),
(12, 2, 'Cumilla', NULL, NULL),
(13, 2, 'Feni\r\n            ', NULL, NULL),
(14, 2, 'Khagrachari', NULL, NULL),
(15, 2, 'Laxmipur', NULL, NULL),
(16, 2, 'Noakhali\r\n            ', NULL, NULL),
(17, 2, 'Rangamati', NULL, NULL),
(18, 3, 'Dhaka', NULL, NULL),
(19, 3, 'Faridpur', NULL, NULL),
(20, 3, 'Gazipur', NULL, NULL),
(21, 3, 'Gopalganj', NULL, NULL),
(22, 3, 'Kishoreganj', NULL, NULL),
(23, 3, 'Madaripur', NULL, NULL),
(24, 3, 'Manikganj\r\n            ', NULL, NULL),
(25, 3, 'Munshiganj', NULL, NULL),
(26, 3, 'Narayanganj', NULL, NULL),
(27, 3, 'Narshingdi', NULL, NULL),
(28, 3, 'Rajbari', NULL, NULL),
(29, 3, 'Shariatpur', NULL, NULL),
(30, 3, 'Tangail', NULL, NULL),
(31, 4, 'Bagerhat', NULL, NULL),
(32, 4, 'Chuadanga', NULL, NULL),
(33, 4, 'Jashore', NULL, NULL),
(34, 4, 'Jhenaidah', NULL, NULL),
(35, 4, 'Khulna', NULL, NULL),
(36, 4, 'Kushtia', NULL, NULL),
(37, 4, 'Magura', NULL, NULL),
(38, 4, 'Meherpur', NULL, NULL),
(39, 4, 'Narail', NULL, NULL),
(40, 4, 'Satkhira\r\n            ', NULL, NULL),
(41, 5, 'Jamalpur', NULL, NULL),
(42, 5, 'Mymensingh\r\n            ', NULL, NULL),
(43, 5, 'Netrokona', NULL, NULL),
(44, 5, 'Sherpur', NULL, NULL),
(45, 6, 'Bogura\r\n            ', NULL, NULL),
(46, 6, 'C. nawabganj\r\n            ', NULL, NULL),
(47, 6, 'Joypurhat', NULL, NULL),
(48, 6, 'Naogaon', NULL, NULL),
(49, 6, 'Natore', NULL, NULL),
(50, 6, 'Pabna', NULL, NULL),
(51, 6, 'Rajshahi', NULL, NULL),
(52, 6, 'Sirajganj\r\n            ', NULL, NULL),
(53, 7, 'Dinajpur', NULL, NULL),
(54, 7, 'Gaibandha', NULL, NULL),
(55, 7, 'Kurigram\r\n            ', NULL, NULL),
(56, 7, 'Lalmonirhat', NULL, NULL),
(57, 7, 'Nilphamari\r\n            ', NULL, NULL),
(58, 7, 'Panchagarh\r\n            ', NULL, NULL),
(59, 7, 'Rangpur', NULL, NULL),
(60, 7, 'Thakurgaon', NULL, NULL),
(61, 8, 'Habiganj', NULL, NULL),
(62, 8, 'Moulvibazar', NULL, NULL),
(63, 8, 'Sunamganj', NULL, NULL),
(64, 8, 'Sylhet', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_divisions`
--

CREATE TABLE `ship_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_divisions`
--

INSERT INTO `ship_divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(1, 'Barishal', NULL, NULL),
(2, 'Chattogram', NULL, NULL),
(3, 'Dhaka', NULL, NULL),
(4, 'Khulna', NULL, NULL),
(5, 'MYMENSINGH', NULL, NULL),
(6, 'Rajshahi', NULL, NULL),
(7, 'Rangpur', NULL, NULL),
(8, 'Sylhet', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_states`
--

CREATE TABLE `ship_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_states`
--

INSERT INTO `ship_states` (`id`, `division_id`, `district_id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Amtali', NULL, NULL),
(2, 1, 1, 'Bamna', NULL, NULL),
(3, 1, 1, 'Barguna-S', NULL, NULL),
(4, 1, 1, 'Betagi', NULL, NULL),
(5, 1, 1, 'Patharghata', NULL, NULL),
(6, 1, 1, 'Taltali', NULL, NULL),
(7, 1, 2, 'Agailjhara', NULL, NULL),
(8, 1, 2, 'Babuganj', NULL, NULL),
(9, 1, 2, 'Bakerganj', NULL, NULL),
(10, 1, 2, 'Banaripara', NULL, NULL),
(11, 1, 2, 'Barishal-S', NULL, NULL),
(12, 1, 2, 'Gouranadi', NULL, NULL),
(13, 1, 2, 'Hizla', NULL, NULL),
(14, 1, 2, 'Mehendiganj', NULL, NULL),
(15, 1, 2, 'Muladi', NULL, NULL),
(16, 1, 2, 'Uzirpur', NULL, NULL),
(17, 1, 3, 'Bhola-S', NULL, NULL),
(18, 1, 3, 'Borhanuddin', NULL, NULL),
(19, 1, 3, 'Charfassion', NULL, NULL),
(20, 1, 3, 'Daulatkhan', NULL, NULL),
(21, 1, 3, 'Lalmohan', NULL, NULL),
(22, 1, 3, 'Monpura', NULL, NULL),
(23, 1, 3, 'Tazumuddin', NULL, NULL),
(24, 1, 4, 'Jhalokathi-S', NULL, NULL),
(25, 1, 4, 'Kathalia', NULL, NULL),
(26, 1, 4, 'Nalchity', NULL, NULL),
(27, 1, 4, 'Rajapur', NULL, NULL),
(28, 1, 5, 'Bauphal', NULL, NULL),
(29, 1, 5, 'Dashmina', NULL, NULL),
(30, 1, 5, 'Dumki', NULL, NULL),
(31, 1, 5, 'Galachipa', NULL, NULL),
(32, 1, 5, 'Kalapara', NULL, NULL),
(33, 1, 5, 'Mirjaganj', NULL, NULL),
(34, 1, 5, 'Patuakhali-S\r\n                ', NULL, NULL),
(35, 1, 5, 'Rangabali', NULL, NULL),
(36, 1, 6, 'Bhandaria', NULL, NULL),
(37, 1, 6, 'Kawkhali', NULL, NULL),
(38, 1, 6, 'Mothbaria', NULL, NULL),
(39, 1, 6, 'Nazirpur', NULL, NULL),
(40, 1, 6, 'Nesarabad', NULL, NULL),
(41, 1, 6, 'Pirojpur-S\r\n                ', NULL, NULL),
(42, 1, 6, 'Zianagar', NULL, NULL),
(43, 2, 7, 'Akhaura', NULL, NULL),
(44, 2, 7, 'Ashuganj', NULL, NULL),
(45, 2, 7, 'B.Baria-S', NULL, NULL),
(46, 2, 7, 'Bancharampur', NULL, NULL),
(47, 2, 7, 'Bijoynagar', NULL, NULL),
(48, 2, 7, 'Kasba', NULL, NULL),
(49, 2, 7, 'Nabinagar', NULL, NULL),
(50, 2, 7, 'Nasirnagar', NULL, NULL),
(51, 2, 7, 'Sarail', NULL, NULL),
(52, 2, 8, 'Alikadam', NULL, NULL),
(53, 2, 8, 'Bandarban-S', NULL, NULL),
(54, 2, 8, 'Lama', NULL, NULL),
(55, 2, 8, 'Naikhyongchari', NULL, NULL),
(56, 2, 8, 'Rowangchari', NULL, NULL),
(57, 2, 8, 'Ruma', NULL, NULL),
(58, 2, 8, 'Thanchi', NULL, NULL),
(59, 2, 9, 'Faridganj', NULL, NULL),
(60, 2, 9, 'Chandpur-S', NULL, NULL),
(61, 2, 9, 'Haimchar', NULL, NULL),
(62, 2, 9, 'Haziganj', NULL, NULL),
(63, 2, 9, 'Kachua', NULL, NULL),
(64, 2, 9, 'Matlab (Dakshin)', NULL, NULL),
(65, 2, 10, 'Shahrasti', NULL, NULL),
(66, 2, 9, 'Matlab (Uttar)', NULL, NULL),
(67, 2, 10, 'Anwara', NULL, NULL),
(68, 2, 10, 'Banskhali', NULL, NULL),
(69, 2, 10, 'Boalkhali', NULL, NULL),
(70, 2, 10, 'Chandanish', NULL, NULL),
(71, 2, 10, 'Fatikchari', NULL, NULL),
(72, 2, 10, 'Hathazari', NULL, NULL),
(73, 2, 10, 'Karnaphuli', NULL, NULL),
(74, 2, 10, 'Lohagara', NULL, NULL),
(75, 2, 10, 'Mirsharai', NULL, NULL),
(76, 2, 10, 'Patiya', NULL, NULL),
(77, 2, 10, 'Rangunia', NULL, NULL),
(78, 2, 10, 'Raojan', NULL, NULL),
(79, 2, 10, 'Sandwip', NULL, NULL),
(80, 2, 10, 'Satkania', NULL, NULL),
(81, 2, 10, 'Sitakunda', NULL, NULL),
(82, 2, 11, 'Chakoria', NULL, NULL),
(83, 2, 11, 'Cox\'S Bazar-S', NULL, NULL),
(84, 2, 11, 'Kutubdia', NULL, NULL),
(85, 2, 11, 'Moheskhali', NULL, NULL),
(86, 2, 11, 'Pekua', NULL, NULL),
(87, 2, 11, 'Ramu', NULL, NULL),
(88, 2, 11, 'Teknaf', NULL, NULL),
(89, 2, 11, 'Ukhiya', NULL, NULL),
(90, 2, 12, 'Barura', NULL, NULL),
(91, 2, 12, 'Brahmanpara', NULL, NULL),
(92, 2, 12, 'Burichong', NULL, NULL),
(93, 2, 12, 'Chandina', NULL, NULL),
(94, 2, 12, 'Chouddagram', NULL, NULL),
(95, 2, 12, 'Cumilla-S', NULL, NULL),
(96, 2, 12, 'Cumilla-S Daksin', NULL, NULL),
(97, 2, 12, 'Daudkandi', NULL, NULL),
(98, 2, 12, 'Debidwar', NULL, NULL),
(99, 2, 12, 'Homna', NULL, NULL),
(100, 2, 12, 'Laksham', NULL, NULL),
(101, 2, 12, 'Lalmai', NULL, NULL),
(102, 2, 12, 'Meghna', NULL, NULL),
(103, 2, 12, 'Monohorganj', NULL, NULL),
(104, 2, 12, 'Muradnagar', NULL, NULL),
(105, 2, 12, 'Nangalkot', NULL, NULL),
(106, 2, 12, 'Titas', NULL, NULL),
(107, 2, 13, 'Chhagalniya', NULL, NULL),
(108, 2, 13, 'Daganbhuiyan', NULL, NULL),
(109, 2, 13, 'Fulgazi', NULL, NULL),
(110, 2, 13, 'Feni-S', NULL, NULL),
(111, 2, 13, 'Porshuram', NULL, NULL),
(112, 2, 13, 'Sonagazi', NULL, NULL),
(113, 2, 14, 'Dighinala', NULL, NULL),
(114, 2, 14, 'Khagrachari-S', NULL, NULL),
(115, 2, 14, 'Laxmichari', NULL, NULL),
(116, 2, 14, 'Mahalchari', NULL, NULL),
(117, 2, 14, 'Manikchari', NULL, NULL),
(118, 2, 14, 'Matiranga', NULL, NULL),
(119, 2, 14, 'Panchari', NULL, NULL),
(120, 2, 14, 'Ramgarh', NULL, NULL),
(121, 2, 15, 'Komol Nagar', NULL, NULL),
(122, 2, 15, 'Laxmipur-S', NULL, NULL),
(123, 2, 15, 'Raipur', NULL, NULL),
(124, 2, 15, 'Ramganj', NULL, NULL),
(125, 2, 15, 'Ramgati', NULL, NULL),
(126, 2, 16, 'Begumganj', NULL, NULL),
(127, 2, 16, 'Chatkhil', NULL, NULL),
(128, 2, 16, 'Companiganj', NULL, NULL),
(129, 2, 16, 'Hatiya', NULL, NULL),
(130, 2, 16, 'Kabir Hat', NULL, NULL),
(131, 2, 16, 'Noakhali-S', NULL, NULL),
(132, 2, 16, 'Senbag', NULL, NULL),
(133, 2, 16, 'Sonaimuri', NULL, NULL),
(134, 2, 16, 'Subarna Char', NULL, NULL),
(135, 2, 17, 'Baghaichari', NULL, NULL),
(136, 2, 17, 'Barkal', NULL, NULL),
(137, 2, 17, 'Belaichari', NULL, NULL),
(138, 2, 17, 'Juraichari', NULL, NULL),
(139, 2, 17, 'Kaptai', NULL, NULL),
(140, 2, 17, 'Kaukhali', NULL, NULL),
(141, 2, 17, 'Langadu', NULL, NULL),
(142, 2, 17, 'Nanniarchar', NULL, NULL),
(143, 2, 17, 'Rajosthali', NULL, NULL),
(144, 2, 17, 'Rangamati-S', NULL, NULL),
(145, 3, 18, 'Dhamrai', NULL, NULL),
(146, 3, 18, 'Dohar', NULL, NULL),
(147, 3, 18, 'Keraniganj', NULL, NULL),
(148, 3, 18, 'Nawabganj', NULL, NULL),
(149, 3, 18, 'Savar', NULL, NULL),
(150, 3, 19, 'Alfadanga', NULL, NULL),
(151, 3, 19, 'Bhanga', NULL, NULL),
(152, 3, 19, 'Boalmari', NULL, NULL),
(153, 3, 19, 'Charbhadrasan', NULL, NULL),
(154, 3, 19, 'Faridpur-S', NULL, NULL),
(155, 3, 19, 'Madhukhali', NULL, NULL),
(156, 3, 19, 'Nagarkanda', NULL, NULL),
(157, 3, 19, 'Sadarpur', NULL, NULL),
(158, 3, 19, 'Saltha', NULL, NULL),
(159, 3, 20, 'Gazipur-S', NULL, NULL),
(160, 3, 20, 'Kaliakoir', NULL, NULL),
(161, 3, 20, 'Kaliakoir', NULL, NULL),
(162, 3, 20, 'Kapasia', NULL, NULL),
(163, 3, 20, 'Sreepur', NULL, NULL),
(164, 3, 21, 'Gopalganj-S', NULL, NULL),
(165, 3, 21, 'Kasiani', NULL, NULL),
(166, 3, 21, 'Kotwalipara', NULL, NULL),
(167, 3, 21, 'Muksudpur', NULL, NULL),
(168, 3, 21, 'Tungipara', NULL, NULL),
(169, 3, 22, 'Austagram', NULL, NULL),
(170, 3, 22, 'Bajitpur', NULL, NULL),
(171, 3, 22, 'Bhairab', NULL, NULL),
(172, 3, 22, 'Hossainpur', NULL, NULL),
(173, 3, 22, 'Itna', NULL, NULL),
(174, 3, 22, 'Karimganj', NULL, NULL),
(175, 3, 22, 'Katiadi', NULL, NULL),
(176, 3, 22, 'Kishoreganj-S', NULL, NULL),
(177, 3, 22, 'Kuliarchar', NULL, NULL),
(178, 3, 22, 'Mithamoin', NULL, NULL),
(179, 3, 22, 'Nikli', NULL, NULL),
(180, 3, 22, 'Pakundia', NULL, NULL),
(181, 3, 22, 'Tarail', NULL, NULL),
(182, 3, 23, 'Kalkini', NULL, NULL),
(183, 3, 23, 'Madaripur-S', NULL, NULL),
(184, 3, 23, 'Rajoir', NULL, NULL),
(185, 3, 23, 'Shibchar', NULL, NULL),
(186, 3, 24, 'Daulatpur', NULL, NULL),
(187, 3, 24, 'Ghior', NULL, NULL),
(188, 3, 24, 'Harirampur', NULL, NULL),
(189, 3, 24, 'Manikganj-S', NULL, NULL),
(190, 3, 24, 'Saturia', NULL, NULL),
(191, 3, 24, 'Shivalaya', NULL, NULL),
(192, 3, 24, 'Singair', NULL, NULL),
(193, 3, 25, 'Gazaria', NULL, NULL),
(194, 3, 25, 'Lauhajong', NULL, NULL),
(195, 3, 25, 'Munshiganj-S', NULL, NULL),
(196, 3, 25, 'Sirajdikhan', NULL, NULL),
(197, 3, 25, 'Sreenagar', NULL, NULL),
(198, 3, 25, 'Tongibari', NULL, NULL),
(199, 3, 26, 'Araihazar', NULL, NULL),
(200, 3, 26, 'Bandar', NULL, NULL),
(201, 3, 26, 'Narayanganj-S\r\n            ', NULL, NULL),
(202, 3, 26, 'Rupganj', NULL, NULL),
(203, 3, 26, 'Sonargaon', NULL, NULL),
(204, 3, 27, 'Belabo', NULL, NULL),
(205, 3, 27, 'Monohardi', NULL, NULL),
(206, 3, 27, 'Narshingdi-S', NULL, NULL),
(207, 3, 27, 'Palash', NULL, NULL),
(208, 3, 27, 'Raipura', NULL, NULL),
(209, 3, 27, 'Shibpur', NULL, NULL),
(210, 3, 28, 'Baliakandi', NULL, NULL),
(211, 3, 28, 'Goalanda', NULL, NULL),
(212, 3, 28, 'Kalukhali', NULL, NULL),
(213, 3, 28, 'Pangsha', NULL, NULL),
(214, 3, 28, 'Rajbari-S', NULL, NULL),
(215, 3, 29, 'Bhedarganj', NULL, NULL),
(216, 3, 29, 'Damuddya', NULL, NULL),
(217, 3, 29, 'Goshairhat', NULL, NULL),
(218, 3, 29, 'Janjira', NULL, NULL),
(219, 3, 29, 'Naria', NULL, NULL),
(220, 3, 29, 'Shariatpur-S', NULL, NULL),
(221, 3, 30, 'Basail', NULL, NULL),
(222, 3, 30, 'Bhuapur', NULL, NULL),
(223, 3, 30, 'Delduar', NULL, NULL),
(224, 3, 30, 'Dhanbari', NULL, NULL),
(225, 3, 30, 'Ghatail', NULL, NULL),
(226, 3, 30, 'Gopalpur', NULL, NULL),
(227, 3, 30, 'Kalihati', NULL, NULL),
(228, 3, 30, 'Madhupur', NULL, NULL),
(229, 3, 30, 'Mirzapur', NULL, NULL),
(230, 3, 30, 'Nagarpur', NULL, NULL),
(231, 3, 30, 'Shakhipur', NULL, NULL),
(232, 3, 30, 'Tangail-S', NULL, NULL),
(233, 4, 31, 'Bagerhat-S', NULL, NULL),
(234, 4, 31, 'Chitalmari', NULL, NULL),
(235, 4, 31, 'Fakirhat', NULL, NULL),
(236, 4, 31, 'Kachua', NULL, NULL),
(237, 4, 31, 'Mollahat', NULL, NULL),
(238, 4, 31, 'Mongla', NULL, NULL),
(239, 4, 31, 'Morrelganj', NULL, NULL),
(240, 4, 31, 'Rampal', NULL, NULL),
(241, 4, 31, 'Sharankhola', NULL, NULL),
(242, 4, 32, 'Alamdanga', NULL, NULL),
(243, 4, 32, 'Chuadanga-S\r\n        ', NULL, NULL),
(244, 4, 32, 'Damurhuda', NULL, NULL),
(245, 4, 32, 'Jibannagar', NULL, NULL),
(246, 4, 33, 'Abhoynagar', NULL, NULL),
(247, 4, 33, 'Bagherpara', NULL, NULL),
(248, 4, 33, 'Chowgacha', NULL, NULL),
(249, 4, 33, 'Jashore-S\r\n        ', NULL, NULL),
(250, 4, 33, 'Jhikargacha', NULL, NULL),
(251, 4, 33, 'Keshabpur', NULL, NULL),
(252, 4, 33, 'Monirampur', NULL, NULL),
(253, 4, 33, 'Sarsha', NULL, NULL),
(254, 4, 34, 'Harinakunda', NULL, NULL),
(255, 4, 34, 'Jhenaidah-S', NULL, NULL),
(256, 4, 34, 'Kaliganj', NULL, NULL),
(257, 4, 34, 'Kotchandpur', NULL, NULL),
(258, 4, 34, 'Moheshpur', NULL, NULL),
(259, 4, 34, 'Shailkupa', NULL, NULL),
(260, 4, 35, 'Batiaghata', NULL, NULL),
(261, 4, 35, 'Dacope', NULL, NULL),
(262, 4, 35, 'Dighalia', NULL, NULL),
(263, 4, 35, 'Dumuria', NULL, NULL),
(264, 4, 35, 'Koira', NULL, NULL),
(265, 4, 35, 'Paikgacha', NULL, NULL),
(266, 4, 35, 'Phultala', NULL, NULL),
(267, 4, 35, 'Rupsa', NULL, NULL),
(268, 4, 35, 'Terokhada', NULL, NULL),
(269, 4, 36, 'Bheramara', NULL, NULL),
(270, 4, 36, 'Daulatpur', NULL, NULL),
(271, 4, 36, 'Khoksha', NULL, NULL),
(272, 4, 36, 'Kumarkhali', NULL, NULL),
(273, 4, 36, 'Kushtia-S', NULL, NULL),
(274, 4, 36, 'Mirpur', NULL, NULL),
(275, 4, 37, 'Magura-S\r\n        ', NULL, NULL),
(276, 4, 37, 'Mohammadpur', NULL, NULL),
(277, 4, 37, 'Salikha', NULL, NULL),
(278, 4, 37, 'Sreepur', NULL, NULL),
(279, 4, 38, 'Gangni', NULL, NULL),
(280, 4, 38, 'Meherpur-S', NULL, NULL),
(281, 4, 38, 'Mujib Nagar', NULL, NULL),
(282, 4, 39, 'Kalia', NULL, NULL),
(283, 4, 39, 'Lohagara', NULL, NULL),
(284, 4, 39, 'Narail-S\r\n        ', NULL, NULL),
(285, 4, 40, 'Assasuni', NULL, NULL),
(286, 4, 40, 'Debhata', NULL, NULL),
(287, 4, 40, 'Kalaroa', NULL, NULL),
(288, 4, 40, 'Kaliganj', NULL, NULL),
(289, 4, 40, 'Satkhira-S', NULL, NULL),
(290, 4, 40, 'Shyamnagar', NULL, NULL),
(291, 4, 40, 'Tala', NULL, NULL),
(292, 5, 41, 'Bakshiganj', NULL, NULL),
(293, 5, 41, 'Dewanganj', NULL, NULL),
(294, 5, 41, 'Islampur', NULL, NULL),
(295, 5, 41, 'Jamalpur-S', NULL, NULL),
(296, 5, 41, 'Madarganj', NULL, NULL),
(297, 5, 41, 'Melendah', NULL, NULL),
(298, 5, 41, 'Sarishabari', NULL, NULL),
(299, 5, 42, 'Bhaluka', NULL, NULL),
(300, 5, 42, 'Dhobaura', NULL, NULL),
(301, 5, 42, 'Fulbaria', NULL, NULL),
(302, 5, 42, 'Gaffargaon', NULL, NULL),
(303, 5, 42, 'Gouripur', NULL, NULL),
(304, 5, 42, 'Haluaghat', NULL, NULL),
(305, 5, 42, 'Ishwarganj', NULL, NULL),
(306, 5, 42, 'Muktagacha', NULL, NULL),
(307, 5, 42, 'Mymensingh-S', NULL, NULL),
(308, 5, 42, 'Nandail', NULL, NULL),
(309, 5, 42, 'Phulpur', NULL, NULL),
(310, 5, 42, 'Tarakanda', NULL, NULL),
(311, 5, 42, 'Trishal', NULL, NULL),
(312, 5, 43, 'Atpara', NULL, NULL),
(313, 5, 43, 'Barhatta', NULL, NULL),
(314, 5, 43, 'Durgapur', NULL, NULL),
(315, 5, 43, 'Kalmakanda', NULL, NULL),
(316, 5, 43, 'Kendua', NULL, NULL),
(317, 5, 43, 'Khaliajuri', NULL, NULL),
(318, 5, 43, 'Madan', NULL, NULL),
(319, 5, 43, 'Mohanganj', NULL, NULL),
(320, 5, 43, 'Netrakona-S\r\n        ', NULL, NULL),
(321, 5, 43, 'Purbadhala', NULL, NULL),
(322, 5, 44, 'Jhenaigati', NULL, NULL),
(323, 5, 44, 'Nakla', NULL, NULL),
(324, 5, 44, 'Nalitabari', NULL, NULL),
(325, 5, 44, 'Sherpur-S', NULL, NULL),
(326, 5, 44, 'Sreebordi', NULL, NULL),
(327, 6, 45, 'Adamdighi', NULL, NULL),
(328, 6, 45, 'Bogura-S\r\n        ', NULL, NULL),
(329, 6, 45, 'Dhunot', NULL, NULL),
(330, 6, 45, 'Dhupchancia', NULL, NULL),
(331, 6, 45, 'Gabtali', NULL, NULL),
(332, 6, 45, 'Kahaloo', NULL, NULL),
(333, 6, 45, 'Nandigram', NULL, NULL),
(334, 6, 45, 'Sariakandi', NULL, NULL),
(335, 6, 45, 'Shajahanpur', NULL, NULL),
(336, 6, 45, 'Sherpur', NULL, NULL),
(337, 6, 45, 'Shibganj', NULL, NULL),
(338, 6, 45, 'Sonatala', NULL, NULL),
(339, 6, 46, 'Bholahat', NULL, NULL),
(340, 6, 46, 'Gomostapur', NULL, NULL),
(341, 6, 46, 'Nachol', NULL, NULL),
(342, 6, 46, 'Nawabganj-S', NULL, NULL),
(343, 6, 46, 'Shibganj', NULL, NULL),
(344, 6, 47, 'Akkelpur', NULL, NULL),
(345, 6, 47, 'Joypurhat-S', NULL, NULL),
(346, 6, 47, 'Kalai', NULL, NULL),
(347, 6, 47, 'Khetlal', NULL, NULL),
(348, 6, 47, 'Panchbibi', NULL, NULL),
(349, 6, 48, 'Atrai', NULL, NULL),
(350, 6, 48, 'Badalgachi', NULL, NULL),
(351, 6, 48, 'Dhamoirhat', NULL, NULL),
(352, 6, 48, 'Manda', NULL, NULL),
(353, 6, 48, 'Mohadevpur', NULL, NULL),
(354, 6, 48, 'Naogaon-S\r\n        ', NULL, NULL),
(355, 6, 48, 'Niamatpur', NULL, NULL),
(356, 6, 48, 'Patnitala', NULL, NULL),
(357, 6, 48, 'Porsha', NULL, NULL),
(358, 6, 48, 'Raninagar', NULL, NULL),
(359, 6, 48, 'Shapahar', NULL, NULL),
(360, 6, 49, 'Bagatipara', NULL, NULL),
(361, 6, 49, 'Baraigram', NULL, NULL),
(362, 6, 49, 'Gurudaspur', NULL, NULL),
(363, 6, 49, 'Lalpur', NULL, NULL),
(364, 6, 49, 'Naldanga', NULL, NULL),
(365, 6, 49, 'Natore-S', NULL, NULL),
(366, 6, 49, 'Singra', NULL, NULL),
(367, 6, 50, 'Atghoria', NULL, NULL),
(368, 6, 50, 'Bera', NULL, NULL),
(369, 6, 50, 'Bhangura', NULL, NULL),
(370, 6, 50, 'Chatmohar', NULL, NULL),
(371, 6, 50, 'Faridpur', NULL, NULL),
(372, 6, 50, 'Ishwardi', NULL, NULL),
(373, 6, 50, 'Pabna-S', NULL, NULL),
(374, 6, 50, 'Santhia', NULL, NULL),
(375, 6, 50, 'Sujanagar', NULL, NULL),
(376, 6, 51, 'Bagha', NULL, NULL),
(377, 6, 51, 'Bagmara', NULL, NULL),
(378, 6, 51, 'Charghat', NULL, NULL),
(379, 6, 51, 'Durgapur', NULL, NULL),
(380, 6, 51, 'Godagari', NULL, NULL),
(381, 6, 51, 'Mohanpur', NULL, NULL),
(382, 6, 51, 'Paba', NULL, NULL),
(383, 6, 51, 'Puthia', NULL, NULL),
(384, 6, 51, 'Tanore', NULL, NULL),
(385, 6, 52, 'Belkuchi', NULL, NULL),
(386, 6, 52, 'Chowhali', NULL, NULL),
(387, 6, 52, 'Kamarkhand', NULL, NULL),
(388, 6, 52, 'Kazipur', NULL, NULL),
(389, 6, 52, 'Raiganj', NULL, NULL),
(390, 6, 52, 'Shahzadpur', NULL, NULL),
(391, 6, 52, 'Sirajganj-S', NULL, NULL),
(392, 6, 52, 'Tarash', NULL, NULL),
(393, 6, 52, 'Ullapara', NULL, NULL),
(394, 7, 53, 'Birampur', NULL, NULL),
(395, 7, 53, 'Birganj', NULL, NULL),
(396, 7, 53, 'Birol', NULL, NULL),
(397, 7, 53, 'Bochaganj', NULL, NULL),
(398, 7, 53, 'Chirirbandar', NULL, NULL),
(399, 7, 53, 'Dinajpur-S\r\n        ', NULL, NULL),
(400, 7, 53, 'Fulbari', NULL, NULL),
(401, 7, 53, 'Ghoraghat', NULL, NULL),
(402, 7, 53, 'Hakimpur', NULL, NULL),
(403, 7, 53, 'Kaharol', NULL, NULL),
(404, 7, 53, 'Khanshama', NULL, NULL),
(405, 7, 53, 'Nawabganj', NULL, NULL),
(406, 7, 53, 'Parbatipur', NULL, NULL),
(407, 7, 54, 'Fulchari', NULL, NULL),
(408, 7, 54, 'Gaibandha-S', NULL, NULL),
(409, 7, 54, 'Gobindaganj', NULL, NULL),
(410, 7, 54, 'Palashbari', NULL, NULL),
(411, 7, 54, 'Sadullapur', NULL, NULL),
(412, 7, 54, 'Saghata', NULL, NULL),
(413, 7, 54, 'Sundarganj', NULL, NULL),
(414, 7, 55, 'Bhurungamari', NULL, NULL),
(415, 7, 55, 'Chilmari', NULL, NULL),
(416, 7, 55, 'Fulbari', NULL, NULL),
(417, 7, 55, 'Kurigram-S', NULL, NULL),
(418, 7, 55, 'Nageswari', NULL, NULL),
(419, 7, 55, 'Rajarhat', NULL, NULL),
(420, 7, 55, 'Rajibpur', NULL, NULL),
(421, 7, 55, 'Rowmari', NULL, NULL),
(422, 7, 55, 'Ulipur', NULL, NULL),
(423, 7, 56, 'Aditmari', NULL, NULL),
(424, 7, 56, 'Hatibandha', NULL, NULL),
(425, 7, 56, 'Kaliganj', NULL, NULL),
(426, 7, 56, 'Lalmonirhat-S', NULL, NULL),
(427, 7, 56, 'Patgram', NULL, NULL),
(428, 7, 57, 'Dimla', NULL, NULL),
(429, 7, 57, 'Domar', NULL, NULL),
(430, 7, 57, 'Jaldhaka', NULL, NULL),
(431, 7, 57, 'Kishoreganj', NULL, NULL),
(432, 7, 57, 'Nilphamari-S', NULL, NULL),
(433, 7, 57, 'Sayedpur', NULL, NULL),
(434, 7, 58, 'Atwari', NULL, NULL),
(435, 7, 58, 'Boda', NULL, NULL),
(436, 7, 58, 'Debiganj', NULL, NULL),
(437, 7, 58, 'Panchagarh-S', NULL, NULL),
(438, 7, 58, 'Tetulia', NULL, NULL),
(439, 7, 59, 'Badarganj', NULL, NULL),
(440, 7, 59, 'Gangachara', NULL, NULL),
(441, 7, 59, 'Kaunia', NULL, NULL),
(442, 7, 59, 'Mithapukur', NULL, NULL),
(443, 7, 59, 'Pirgacha', NULL, NULL),
(444, 7, 59, 'Pirganj', NULL, NULL),
(445, 7, 59, 'Rangpur-S', NULL, NULL),
(446, 7, 59, 'Taraganj', NULL, NULL),
(447, 7, 60, 'Baliadangi', NULL, NULL),
(448, 7, 60, 'Haripur', NULL, NULL),
(449, 7, 60, 'Pirganj', NULL, NULL),
(450, 7, 60, 'Ranisankail', NULL, NULL),
(451, 7, 60, 'Thakurgaon-S', NULL, NULL),
(452, 8, 61, 'Azmiriganj', NULL, NULL),
(453, 8, 61, 'Bahubal', NULL, NULL),
(454, 8, 61, 'Baniachong', NULL, NULL),
(455, 8, 61, 'Chunarughat', NULL, NULL),
(456, 8, 61, 'Habiganj-S', NULL, NULL),
(457, 8, 61, 'Lakhai', NULL, NULL),
(458, 8, 61, 'Madhabpur', NULL, NULL),
(459, 8, 61, 'Nabiganj', NULL, NULL),
(460, 8, 61, 'Sayestaganj', NULL, NULL),
(461, 8, 62, 'Barlekha', NULL, NULL),
(462, 8, 62, 'Juri', NULL, NULL),
(463, 8, 62, 'Kamalganj', NULL, NULL),
(464, 8, 62, 'Kulaura', NULL, NULL),
(465, 8, 62, 'Moulvibazar-S\r\n        ', NULL, NULL),
(466, 8, 62, 'Rajnagar', NULL, NULL),
(467, 8, 62, 'Sreemangal', NULL, NULL),
(468, 8, 63, 'Biswamvarpur', NULL, NULL),
(469, 8, 63, 'Chatak', NULL, NULL),
(470, 8, 63, 'Dakhin Sunamganj', NULL, NULL),
(471, 8, 63, 'Derai', NULL, NULL),
(472, 8, 63, 'Dharmapasha', NULL, NULL),
(473, 8, 63, 'Doarabazar', NULL, NULL),
(474, 8, 63, 'Jagannathpur', NULL, NULL),
(475, 8, 63, 'Jamalganj', NULL, NULL),
(476, 8, 63, 'Sulla', NULL, NULL),
(477, 8, 63, 'Sunamganj-S\r\n        ', NULL, NULL),
(478, 8, 63, 'Tahirpur', NULL, NULL),
(479, 8, 64, 'Balaganj', NULL, NULL),
(480, 8, 64, 'Beanibazar', NULL, NULL),
(481, 8, 64, 'Biswanath', NULL, NULL),
(482, 8, 64, 'Companiganj', NULL, NULL),
(483, 8, 64, 'Dakshin Surma', NULL, NULL),
(484, 8, 64, 'Fenchuganj', NULL, NULL),
(485, 8, 64, 'Golapganj', NULL, NULL),
(486, 8, 64, 'Gowainghat', NULL, NULL),
(487, 8, 64, 'Jointiapur', NULL, NULL),
(488, 8, 64, 'Kanaighat', NULL, NULL),
(489, 8, 64, 'Osmaninagar', NULL, NULL),
(490, 8, 64, 'Sylhet-S', NULL, NULL),
(491, 8, 64, 'Zakiganj', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `logo`, `phone_one`, `phone_two`, `email`, `company_name`, `company_address`, `facebook`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1714745454530492.png', '0145757455868', '0124758787', 'test@gmail.com', 'Vendor', 'Ramna, Dhaka', NULL, NULL, NULL, NULL, NULL, '2021-10-26 22:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_img`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(4, 'upload/slider/1717651095963582.webp', 'Phone', 'Samsung Galaxy A12 comes with 6.5 inches PLS IPS HD+ screen.', 1, NULL, '2021-11-30 02:46:04'),
(5, 'upload/slider/1717651196205361.png', 'Laptop', 'The 2-in-1 comes vivid color line-up with a 30.98 cm', 1, NULL, '2021-11-30 02:46:18'),
(6, 'upload/slider/1717842150962382.png', 'Rolex', 'Rolex  Men\'s Watch', 1, NULL, '2021-11-30 02:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_slug_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `sub_category_name`, `sub_category_slug_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'All Fashion', 'all-fashion', NULL, '2021-10-26 23:48:01'),
(2, 4, 'All Mobile', 'all-mobile', NULL, '2021-10-26 23:48:27'),
(4, 2, 'All Smart TV', 'all-smart-tv', NULL, '2021-10-26 23:48:51'),
(5, 6, 'All Fruit', 'all-fruit', NULL, '2021-10-26 23:49:06'),
(10, 7, 'All Motor Bike', 'all-motor-bike', NULL, '2021-10-26 23:50:14'),
(13, 5, 'All Laptop', 'all-laptop', NULL, NULL),
(14, 8, 'All Shoes', 'all-shoes', NULL, NULL),
(15, 1, 'Bag', 'bag', NULL, NULL),
(16, 3, 'bike', 'bike', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsubcategory_slug_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `category_id`, `subcategory_id`, `subsubcategory_name`, `subsubcategory_slug_name`, `created_at`, `updated_at`) VALUES
(4, 2, 4, 'Samsung', 'samsung', NULL, NULL),
(5, 2, 4, 'My One', 'my-one', NULL, NULL),
(6, 1, 1, 'Man', 'man', NULL, NULL),
(7, 1, 1, 'Woman', 'woman', NULL, NULL),
(8, 6, 5, 'Apple', 'apple', NULL, NULL),
(9, 6, 5, 'Orange', 'orange', NULL, NULL),
(10, 6, 5, 'Grapes', 'grapes', NULL, NULL),
(11, 5, 13, 'Samsung', 'samsung', NULL, NULL),
(12, 5, 13, 'Dell', 'dell', NULL, NULL),
(13, 5, 13, 'Hp', 'hp', NULL, NULL),
(14, 8, 14, 'Apex', 'apex', NULL, NULL),
(15, 8, 14, 'Bata', 'bata', NULL, NULL),
(16, 4, 2, 'Samsung', 'samsung', NULL, NULL),
(17, 4, 2, 'Oppo', 'oppo', NULL, NULL),
(18, 7, 10, 'Hero', 'hero', NULL, NULL),
(19, 7, 10, 'Honda', 'honda', NULL, NULL),
(20, 1, 15, 'Frame Bag', 'frame-bag', NULL, NULL),
(21, 1, 15, 'Hand Bag', 'hand-bag', NULL, NULL),
(22, 3, 16, 'honda', 'honda', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplyer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplyer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplyer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplyer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplyer_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplyer_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_seen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `provider_id`, `avatar`, `phone`, `last_seen`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Pabon Saha', 'user@gmail.com', NULL, NULL, '017854655745', '2021-11-04 09:20:11', NULL, '$2y$10$3FQPe5Fwl11zNirVIEyjhuP/XqmdnXA0zb5lAB16P0CpMKkNN0N9i', NULL, NULL, NULL, NULL, NULL, '2021-10-27 04:36:01', '2021-11-04 03:20:11'),
(2, 'mesba', 'superadmin@gmail.com', NULL, NULL, '01780882914', '2021-11-08 06:30:46', NULL, '$2y$10$hyR3fk7/RV8Y74dveCNt0uBjyyXp55Bk2bp6a.pWKP0U3u7sL2hvW', NULL, NULL, NULL, NULL, '202111080549logo.png', '2021-11-07 23:48:32', '2021-11-08 00:30:46'),
(3, 'mesba', 'mesba@gmail.com', NULL, NULL, '01780882914', '2021-12-05 04:33:55', NULL, '$2y$10$Atn5WFDvtZupsRyVRZsqwuifD4rtx7tAIpfYXo1DvZXOdmuggSz3C', NULL, NULL, NULL, NULL, NULL, '2021-11-17 21:47:23', '2021-12-04 22:33:55'),
(4, 'hasib', 'hasib@gmail.com', NULL, NULL, '01784677515', '2021-11-18 09:25:07', NULL, '$2y$10$MTwIKf.5bBR0ZqneLjpxkeBUgp/YqrOem56vzqVdtwdZ.kxZaumu6', NULL, NULL, NULL, NULL, '202111180856images.png', '2021-11-18 02:56:32', '2021-11-18 03:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_catagories`
--
ALTER TABLE `banner_catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals_times`
--
ALTER TABLE `deals_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_salaries`
--
ALTER TABLE `department_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_id_unique` (`email_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_types`
--
ALTER TABLE `expense_types`
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
-- Indexes for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_districts`
--
ALTER TABLE `ship_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_states`
--
ALTER TABLE `ship_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banner_catagories`
--
ALTER TABLE `banner_catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deals_times`
--
ALTER TABLE `deals_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department_salaries`
--
ALTER TABLE `department_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expense_types`
--
ALTER TABLE `expense_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ship_districts`
--
ALTER TABLE `ship_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ship_states`
--
ALTER TABLE `ship_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
