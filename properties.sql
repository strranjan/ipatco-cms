-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 07:18 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `properties`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` bigint(20) NOT NULL,
  `address_line1` text,
  `address_line2` text,
  `address_line3` text,
  `address_line4` text,
  `address_line5` text,
  `address_long` varchar(20) DEFAULT NULL,
  `address_lat` varchar(20) DEFAULT NULL,
  `address_created_on` varchar(25) DEFAULT NULL,
  `address_updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `api_id` int(11) NOT NULL,
  `api_user` int(11) NOT NULL,
  `api_token` varchar(200) NOT NULL,
  `api_authorized` int(11) NOT NULL DEFAULT '0',
  `api_valid` varchar(25) NOT NULL,
  `api_created_on` varchar(25) NOT NULL,
  `api_updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api`
--

INSERT INTO `api` (`api_id`, `api_user`, `api_token`, `api_authorized`, `api_valid`, `api_created_on`, `api_updated_on`) VALUES
(2, 1, 'p_dPT2r9GjoX3DmL7gyaspe5QbU', 1, '2020/12/31', '2019/02/09', '2019-02-09 16:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blogs_id` int(11) NOT NULL,
  `blogs_post` int(11) NOT NULL,
  `blogs_description` longtext,
  `blogs_cover_pic` varchar(100) DEFAULT NULL,
  `blogs_comment` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blogs_id`, `blogs_post`, `blogs_description`, `blogs_cover_pic`, `blogs_comment`) VALUES
(1, 4, 'This is a Test description', 'FIJ9ERjNueLS76PQHUKYGrTtC.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(50) NOT NULL,
  `categories_slug` varchar(50) NOT NULL,
  `categories_icon` varchar(50) NOT NULL DEFAULT 'icon.png',
  `categories_type` varchar(20) DEFAULT NULL,
  `categories_parent` int(11) NOT NULL,
  `categories_status` int(11) NOT NULL DEFAULT '1',
  `categories_created_on` varchar(25) NOT NULL,
  `categories_updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_slug`, `categories_icon`, `categories_type`, `categories_parent`, `categories_status`, `categories_created_on`, `categories_updated_on`) VALUES
(1, 'Car', 'car', '0wMZ8Dbxpt9qsmeIlnAzVRHES.png', 'vehicle_type', 0, 1, '2019/02/07', '2019-02-07 15:21:36'),
(2, 'Honda', 'honda', 'KyOFjPZBA2pwX8oWl5zub9r3L.png', 'vehicle_company', 1, 1, '2019/02/07', '2019-02-07 15:23:01'),
(3, 'City', 'city', 'js0CMK9kHG4iS2NBLxROdAU87.png', 'vehicle_model', 2, 1, '2019/02/07', '2019-02-07 15:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories_meta`
--

CREATE TABLE `categories_meta` (
  `meta_id` int(11) NOT NULL,
  `meta_category` int(11) NOT NULL,
  `meta_key` varchar(100) NOT NULL,
  `meta_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories_meta`
--

INSERT INTO `categories_meta` (`meta_id`, `meta_category`, `meta_key`, `meta_value`) VALUES
(1, 1, '_vehicle_fuel_type', 'Petrol\r\nDiesel\r\nElectric'),
(2, 1, '_vehicle_body_type', 'Hatchback\r\nSadan'),
(3, 1, '_vehicle_transmission_type', 'Automatic\r\nManual'),
(4, 3, '_vehicle_launcled_year', '2011'),
(5, 3, '_vehicle_colour', 'Red\r\nBlack\r\nSilver\r\nYellow\r\nPink'),
(6, 3, '_vehicle_price', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `contact_status` int(11) NOT NULL DEFAULT '0',
  `contact_message` text NOT NULL,
  `contact_file` varchar(100) DEFAULT NULL,
  `contact_created_on` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `images_id` bigint(20) NOT NULL,
  `images_text` varchar(50) DEFAULT NULL,
  `images_alt` varchar(50) DEFAULT NULL,
  `images_image` varchar(100) DEFAULT NULL,
  `images_post` int(11) DEFAULT NULL,
  `images_created_on` varchar(25) DEFAULT NULL,
  `images_updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`images_id`, `images_text`, `images_alt`, `images_image`, `images_post`, `images_created_on`, `images_updated_on`) VALUES
(1, NULL, NULL, '7NRY9OB5huqwIxa34mzHLcM2l.png', 1, '2019/02/18', '2019-02-18 13:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `meta_id` int(11) NOT NULL,
  `meta_key` varchar(150) NOT NULL,
  `meta_value` text NOT NULL,
  `meta_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`meta_id`, `meta_key`, `meta_value`, `meta_type`) VALUES
(2, '_site_menu', 'Prashant{}prashant-rijal-web', 'menu'),
(3, '_dashboard_card', 'warning{}Vehicles{}car-alt-1{}3', 'vehicle'),
(4, '_dashboard_card', 'success{}iPatco{}car-alt-1{}0', 'patco');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `packages_id` int(11) NOT NULL,
  `packages_name` varchar(100) DEFAULT NULL,
  `packages_price` varchar(20) DEFAULT NULL,
  `packages_valid` int(11) DEFAULT '30',
  `packages_post` int(11) DEFAULT '10',
  `packages_for` varchar(50) DEFAULT NULL,
  `packages_status` int(11) DEFAULT '1',
  `packages_updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `packages_created_on` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packages_features`
--

CREATE TABLE `packages_features` (
  `packages_features_id` bigint(20) NOT NULL,
  `packages_features_package` int(11) DEFAULT NULL,
  `packages_features_line` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pages_id` int(11) NOT NULL,
  `pages_post` int(11) NOT NULL,
  `pages_cover_pic` varchar(50) NOT NULL,
  `pages_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `posts_id` bigint(20) NOT NULL,
  `posts_title` varchar(150) DEFAULT NULL,
  `posts_slug` varchar(150) DEFAULT NULL,
  `posts_author` int(11) NOT NULL,
  `posts_type` varchar(25) DEFAULT NULL,
  `posts_join` varchar(50) NOT NULL,
  `posts_status` int(11) DEFAULT '0',
  `posts_created_on` varchar(20) DEFAULT NULL,
  `posts_updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`posts_id`, `posts_title`, `posts_slug`, `posts_author`, `posts_type`, `posts_join`, `posts_status`, `posts_created_on`, `posts_updated_on`) VALUES
(1, 'Honda City on UK', 'honda-city-on-uk', 1, 'vehicle', 'vehicles, vehicles_post', 1, '2019/02/07', '2019-02-07 15:25:23'),
(2, 'This is test from API', 'this-is-test-from-api', 5, 'vehicle', '', 0, '2019/02/09', '2019-02-09 18:19:45'),
(3, 'This is test from API', 'this-is-test-from-api-1-1', 5, 'vehicle', '', 0, '2019/02/09', '2019-02-09 18:20:12'),
(4, 'Aanchal Grover: Upcomming Model of IT', 'aanchal-grover-upcomming-model-of-it', 1, 'blog', '', 1, '2019/02/21', '2019-02-21 04:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `posts_meta`
--

CREATE TABLE `posts_meta` (
  `p_meta_id` int(11) NOT NULL,
  `p_meta_post` int(11) NOT NULL,
  `p_meta_key` varchar(100) NOT NULL,
  `p_meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviews_id` bigint(20) NOT NULL,
  `reviews_post` int(11) DEFAULT NULL,
  `reviews_star` double DEFAULT '5',
  `reviews_message` varchar(100) DEFAULT NULL,
  `reviews_user` int(11) DEFAULT NULL,
  `reviews_created_on` varchar(20) DEFAULT NULL,
  `reviews_updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `settings_key` varchar(100) DEFAULT NULL,
  `settings_value` text,
  `settings_auto` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `settings_key`, `settings_value`, `settings_auto`) VALUES
(1, 'title', 'iPatco Inc', NULL),
(2, 'tagline', 'Prashant Rijal', NULL),
(3, 'email', 'info@ipatco.com', NULL),
(4, 'email-server', 'mail.ipatco.com', NULL),
(5, 'email-port', '587', NULL),
(6, 'email-login', 'info@ipatco.com', NULL),
(7, 'email-password', 'passwords', NULL),
(8, 'auto-approve-comment', '1', NULL),
(9, 'post-per-page', '10', NULL),
(10, 'thumbnail-height', '128', NULL),
(11, 'thumbnail-width', '128', NULL),
(12, 'image-height', '1000', NULL),
(13, 'image-width', '1000', NULL),
(14, 'watermark', '1', NULL),
(15, 'theme', 'default', NULL),
(16, 'footer', '&copy; 2019 | Powered by <a href=\"https://www.ipatco.com/\">iPatco CMS</a>.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(50) DEFAULT NULL,
  `users_email` varchar(50) DEFAULT NULL,
  `users_password` varchar(200) DEFAULT NULL,
  `users_role` int(11) DEFAULT NULL,
  `users_address` int(11) DEFAULT NULL,
  `users_phone` varchar(20) DEFAULT NULL,
  `users_profile` varchar(100) DEFAULT NULL,
  `users_status` int(11) DEFAULT '0',
  `users_created_on` varchar(20) DEFAULT NULL,
  `users_updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_email`, `users_password`, `users_role`, `users_address`, `users_phone`, `users_profile`, `users_status`, `users_created_on`, `users_updated_on`) VALUES
(1, 'Prashant Rijal', 'me@prashantrijal.com.np', '$argon2i$v=19$m=1024,t=2,p=2$aGE5RDlnMEVJdjFZTkdNaQ$5cLWesP0GABchott9ISDb534yM0b/hgG+WrJqO7jHM4', 121, 1, '7251818130', 'yJrBoulPLN137w8pRW4GYg5vj.png', 1, '2019/01/26', '2019-01-26 10:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicles_id` int(11) NOT NULL,
  `vehicles_post` int(11) NOT NULL,
  `vehicles_for` varchar(20) NOT NULL,
  `vehicles_type` int(11) NOT NULL,
  `vehicles_company` int(11) NOT NULL,
  `vehicles_model` int(11) NOT NULL,
  `vehicles_description` text NOT NULL,
  `vehicles_engine` int(11) DEFAULT NULL,
  `vehicles_varient` varchar(100) DEFAULT NULL,
  `vehicles_insurance` varchar(50) DEFAULT NULL,
  `vehicles_km` int(11) DEFAULT NULL,
  `vehicles_ownership` varchar(50) DEFAULT NULL,
  `vehicles_fuel` varchar(50) DEFAULT NULL,
  `vehicles_body` varchar(50) DEFAULT NULL,
  `vehicles_transmission` varchar(50) DEFAULT NULL,
  `vehicles_launched_year` int(11) DEFAULT NULL,
  `vehicles_color` varchar(50) DEFAULT NULL,
  `vehicles_price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicles_id`, `vehicles_post`, `vehicles_for`, `vehicles_type`, `vehicles_company`, `vehicles_model`, `vehicles_description`, `vehicles_engine`, `vehicles_varient`, `vehicles_insurance`, `vehicles_km`, `vehicles_ownership`, `vehicles_fuel`, `vehicles_body`, `vehicles_transmission`, `vehicles_launched_year`, `vehicles_color`, `vehicles_price`) VALUES
(1, 1, 'Sell', 1, 2, 3, 'This is very good condition', 1200, '', '2018/5/5', 1200, 'First Hand', 'Diesel', 'Hatchback', 'Automatic', 2017, 'Black', 1000),
(2, 2, 'Sell', 1, 1, 1, 'This is a demo description form api', 2500, 'Good', '2018/02/13', 12500, 'First Hand', 'Petrol', 'XUV', 'Automatic', 2018, 'Red', 12.22),
(3, 3, 'Sell', 1, 2, 3, 'This is a demo description form api', 2500, 'Good', '2018/02/13', 12500, 'First Hand', 'Petrol', 'XUV', 'Automatic', 2018, 'Red', 12.22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`api_id`),
  ADD UNIQUE KEY `api_token` (`api_token`),
  ADD UNIQUE KEY `api_user` (`api_user`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogs_id`),
  ADD UNIQUE KEY `blogs_post` (`blogs_post`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `categories_meta`
--
ALTER TABLE `categories_meta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`images_id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`packages_id`);

--
-- Indexes for table `packages_features`
--
ALTER TABLE `packages_features`
  ADD PRIMARY KEY (`packages_features_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pages_id`),
  ADD UNIQUE KEY `pages_post` (`pages_post`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`posts_id`);

--
-- Indexes for table `posts_meta`
--
ALTER TABLE `posts_meta`
  ADD PRIMARY KEY (`p_meta_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviews_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`),
  ADD UNIQUE KEY `settings_key` (`settings_key`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `api_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories_meta`
--
ALTER TABLE `categories_meta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `images_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `packages_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages_features`
--
ALTER TABLE `packages_features`
  MODIFY `packages_features_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `posts_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts_meta`
--
ALTER TABLE `posts_meta`
  MODIFY `p_meta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviews_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
