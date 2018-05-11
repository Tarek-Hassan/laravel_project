-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 03:30 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmanager`
--
CREATE DATABASE IF NOT EXISTS `pmanager` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pmanager`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--
-- Creation: May 05, 2018 at 04:15 PM
-- Last update: May 08, 2018 at 12:11 AM
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `commentable_id` int(10) UNSIGNED NOT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `body`, `url`, `user_id`, `commentable_id`, `commentable_type`, `created_at`, `updated_at`) VALUES
(9, 'fggtdg', 'iuiuiuou', 1, 3, '0', '2018-05-05 14:03:47', '2018-05-05 14:03:47'),
(8, 'uyreuiwyuiwreuirytuityiuty', '7777reutyuretyutre', 1, 3, '0', '2018-05-05 14:01:37', '2018-05-05 14:01:37'),
(4, 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 1, 1, '2', '2018-05-05 13:51:26', '2018-05-05 13:51:26'),
(5, 'qqqqqqqqqqqqqqq', 'wwwwwwwwwwwwwwww', 1, 1, '2', '2018-05-05 13:51:51', '2018-05-05 13:51:51'),
(7, 'tttttttttttttttttttttttttttttttttttttt', 'yyyyyyyyyyyoooooooooooooooooooooooo', 1, 2, '0', '2018-05-05 13:53:46', '2018-05-05 13:53:46'),
(10, 'ddddddddd', 'ddddd', 1, 3, '0', '2018-05-05 14:04:40', '2018-05-05 14:04:40'),
(11, 'fgrdgd', 'ewwr32r32', 1, 3, '0', '2018-05-05 14:05:44', '2018-05-05 14:05:44'),
(12, 'ddddddddddddd', 'dddddddddddddddddddddddde', 1, 3, '0', '2018-05-05 14:08:12', '2018-05-05 14:08:12'),
(13, 'dsdsdd', 'qqqqqqqqqqqqqqqqq', 1, 3, '0', '2018-05-05 14:08:19', '2018-05-05 14:08:19'),
(14, 'yyuuuuuuuuuuuuuuuuuu', '1111111111111111', 1, 3, '0', '2018-05-05 14:09:21', '2018-05-05 14:09:21'),
(15, 'hjghhggfhfgh', 'retretret', 1, 8, '0', '2018-05-05 14:09:41', '2018-05-05 14:09:41'),
(16, '11111111111111', '1111111111111111111111111', 1, 8, '0', '2018-05-05 14:11:15', '2018-05-05 14:11:15'),
(17, 'sssssssssssssssssssss', 'ssssssssssssssssssssssssssssssssss', 1, 8, '0', '2018-05-05 14:11:55', '2018-05-05 14:11:55'),
(18, 'jhgjghjf', 'kjhkjkjk', 1, 0, '0', '2018-05-05 14:12:54', '2018-05-05 14:12:54'),
(19, 'htfghthtrhtrh', 'yrtytrytytyy', 1, 0, 'project', '2018-05-05 14:15:20', '2018-05-05 14:15:20'),
(20, 'tttttttttttttttttttttttttttttttttt', 'yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', 1, 15, 'project', '2018-05-05 16:12:31', '2018-05-05 16:12:31'),
(21, 'لبيتنملتيبنملنب', 'مكمننمنمن', 1, 1, 'App\\Project', '2018-05-07 17:30:37', '2018-05-07 17:30:37'),
(22, 'tory. The index.php in thi', 'cation.', 1, 2, 'App\\Project', '2018-05-07 18:22:08', '2018-05-07 18:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--
-- Creation: May 02, 2018 at 09:40 PM
-- Last update: May 04, 2018 at 09:47 AM
-- Last check: May 02, 2018 at 09:40 PM
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'company 1', 'Make sure to place composer\'s system-wide vendor bin directory in your $PATH so the laravel executable can be located by your system. This directory exists in different locations based on your operating system; however, some common locations include:', 1, '2018-05-16 05:17:21', NULL),
(2, 'company2', 'Once installed, the laravel new command will create a fresh Laravel installation in the directory you specify. For instance, laravel new blog will create a directory named blog containing a fresh Laravel installation with all of Laravel\'s dependencies already installed:', 1, '2018-05-17 06:17:13', NULL),
(3, 'company 6', 'company 6', 1, '2018-05-04 07:47:28', '2018-05-04 07:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--
-- Creation: May 02, 2018 at 09:40 PM
-- Last update: May 02, 2018 at 09:40 PM
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_28_103246_create_companies_table', 1),
(4, '2018_04_28_103411_create_projects_table', 1),
(5, '2018_04_28_103446_create_comments_table', 1),
(6, '2018_04_28_103536_create_roles_table', 1),
(7, '2018_04_28_103607_create_project_user_table', 1),
(8, '2018_04_28_103638_create_task_user_table', 1),
(9, '2018_04_28_103649_create_tasks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--
-- Creation: May 02, 2018 at 09:40 PM
-- Last update: May 02, 2018 at 09:40 PM
-- Last check: May 02, 2018 at 09:40 PM
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_user`
--
-- Creation: May 02, 2018 at 09:40 PM
-- Last update: May 11, 2018 at 12:21 PM
-- Last check: May 02, 2018 at 09:40 PM
--

CREATE TABLE `project_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_user`
--

INSERT INTO `project_user` (`id`, `user_id`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--
-- Creation: May 02, 2018 at 09:40 PM
-- Last update: May 05, 2018 at 07:46 PM
-- Last check: May 02, 2018 at 09:40 PM
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `company_id` int(10) UNSIGNED NOT NULL,
  `days` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `company_id`, `days`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'project1', 'If you have PHP installed locally and you would like to use PHP\'s built-in development server to serve your application, you may use the serve Artisan command. This command will stcart a development server at http://localhost:8000:', 1, '10', 1, '2018-05-09 03:17:18', '2018-05-04 09:21:31'),
(2, 'project2', 'After installing Laravel, you should configure your web server\'s document / web root to be the  public directory. The index.php in this directory serves as the front controller for all HTTP requests entering your application.', 1, '20', 1, '2018-05-15 02:13:15', NULL),
(3, 'project3', 'The next thing you should do after installing Laravel is set your application key to a random string. If you installed Laravel via Composer or the Laravel installer, this key has already been set for you by the php artisan key:generate command.\r\n\r\nTypically, this string should be 32 characters long. The key can be set in the .env environment file. If you have not renamed the .env.example file to .env, you should do that now. If the application key is not set, your user sessions and other encrypted data will not be secure!', 2, '10', 1, '2018-05-17 04:14:15', NULL),
(4, 'project4', 'Laravel needs almost no other configuration out of the box. You are free to get started developing! However, you may wish to review the config/app.php file and its documentation. It contains several options such as timezone and locale that you may wish to change according to your application.', 2, '5', 1, '2018-05-15 01:15:15', NULL),
(5, 'project5', 'Apache/2.4.23 (Win64) PHP/5.6.25\r\nDatabase client version: libmysql - mysqlnd 5.0.11-dev - 20120503 - $Id: 76b08b24596e12d4553bd41fc93cccd5bac2fe7a $\r\nPHP extension: mysqliDocumentation curlDocumentation mbstringDocumentation\r\nPHP version: 5.6.25', 3, NULL, 1, '2018-05-04 06:04:20', '2018-05-04 06:04:20'),
(6, 'project5', 'project_id', 0, NULL, 1, '2018-05-04 06:05:56', '2018-05-04 06:05:56'),
(9, 'compydump', 'companyDUMP', 0, NULL, 1, '2018-05-04 08:53:10', '2018-05-04 08:53:10'),
(8, 'project1 for company1', 'project1 for company1', 0, NULL, 1, '2018-05-04 07:52:25', '2018-05-04 07:52:25'),
(10, 'ssss', 'ssss', 0, NULL, 1, '2018-05-04 09:01:28', '2018-05-04 09:01:28'),
(11, 'test', 'm,nm,nxzmc,nm,zx', 0, NULL, 1, '2018-05-04 09:29:45', '2018-05-04 09:29:45'),
(12, 'ssss', 'ffffffffffffffffffff', 0, NULL, 1, '2018-05-04 11:37:34', '2018-05-04 11:37:34'),
(14, 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 3, NULL, 1, '2018-05-04 12:32:28', '2018-05-04 12:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--
-- Creation: May 02, 2018 at 09:40 PM
-- Last update: May 08, 2018 at 12:11 AM
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Moderators', NULL, NULL),
(3, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task_user`
--
-- Creation: May 02, 2018 at 09:40 PM
-- Last update: May 02, 2018 at 09:40 PM
-- Last check: May 02, 2018 at 09:40 PM
--

CREATE TABLE `task_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `task_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--
-- Creation: May 02, 2018 at 09:40 PM
-- Last update: May 02, 2018 at 09:40 PM
-- Last check: May 02, 2018 at 09:40 PM
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hours` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: May 02, 2018 at 09:40 PM
-- Last update: May 08, 2018 at 12:11 AM
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `first_name`, `middle_name`, `last_name`, `city`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tarek', 'tarek446240@gmail.com', '$2y$10$Iqo.zI7iV8KCBz58ggdXmeEsZokBs5LjEOIbXd0FvT6Lhi33i6nre', 'Tarek', 'Hassan', 'Ahmed', 'Alexandria', 1, '2JP8WTaHJOq5T3axhBemJp9HIJiNKNAVdKUzaJJTnw1E1HRnjF8jfLXxVwaI', '2018-05-02 19:41:33', '2018-05-02 19:41:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_user_id_foreign` (`user_id`);

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
-- Indexes for table `project_user`
--
ALTER TABLE `project_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_user_project_id_foreign` (`project_id`),
  ADD KEY `project_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_user_id_foreign` (`user_id`),
  ADD KEY `projects_company_id_foreign` (`company_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_user`
--
ALTER TABLE `task_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_user_user_id_foreign` (`user_id`),
  ADD KEY `task_user_task_id_foreign` (`task_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_project_id_foreign` (`project_id`),
  ADD KEY `tasks_user_id_foreign` (`user_id`),
  ADD KEY `tasks_company_id_foreign` (`company_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `project_user`
--
ALTER TABLE `project_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `task_user`
--
ALTER TABLE `task_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
