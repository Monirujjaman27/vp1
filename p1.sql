-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2022 at 11:59 PM
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
-- Database: `p1`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactmessage`
--

CREATE TABLE `contactmessage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `messagebody` longtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactmessage`
--

INSERT INTO `contactmessage` (`id`, `name`, `email`, `phone`, `messagebody`, `status`, `created_at`) VALUES
(9, 'sdf', 'testing4900@gmail.com', NULL, 'dfghj', 0, '2022-04-15 20:21:07'),
(10, 'sdf', 'testing4900@gmail.com', '3456', 'dfghj', 0, '2022-04-15 20:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `default_setting`
--

CREATE TABLE `default_setting` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `bodybackground` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `fb_page` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `default_setting`
--

INSERT INTO `default_setting` (`id`, `title`, `about`, `email`, `phone`, `fb`, `twitter`, `google`, `address`, `instagram`, `youtube`, `linkedin`, `logo`, `bodybackground`, `copyright`, `fb_page`) VALUES
(1, 'Marzia\'s Mehendi', 'this is my test about', 'testing4900@gmail.com', '000000000', 'https://fb/', 'https://twitter.com/', 'https://google.com', 'Bangladesh', 'https://www.instagrame.com', 'https://www.youtube.com/', 'https://www.linkdin.com/', 'assets/images/logo.jpg', NULL, '© Copyright 2020 all resarved', 'https://www.fbpage.com/');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `description`, `image`) VALUES
(4, 'sdf', 'gfd', 'upload/16-04-22-1650110873.jpg'),
(5, 'g2', 'dfg', 'upload/16-04-22-1650110894.jpg'),
(6, 'sdf', 'dfgh', 'upload/18-04-22-1650306242.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `requirements` longtext DEFAULT NULL,
  `pakage_name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `offerprice` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `date`, `requirements`, `pakage_name`, `price`, `offerprice`, `status`) VALUES
(76, 'sdf', 'testing4900@gmail.com', '3456', '2022-04-18 20:24:00', 'sdfg', 'Test pack3', '23', '34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pakages`
--

CREATE TABLE `pakages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `offerprice` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakages`
--

INSERT INTO `pakages` (`id`, `name`, `price`, `offerprice`, `description`, `image`, `rating`) VALUES
(1, 'pak 1', '100', '200', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo amet ex rerum aliquam officiis. Nostrum maxime pariatur quaerat atque, commodi necessitatibus iste non modi voluptates illum eius quidem rerum quo?', 'upload/18-04-22-1650308953.jpg', 4),
(2, 'test pak2', '200', '300', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci quia maxime, fuga inventore unde assumenda cupiditate, suscipit architecto pariatur voluptas quis non alias deserunt asperiores harum explicabo sed in hic!', 'upload/18-04-22-1650307516.jpg', 5),
(3, 'test pack3', '23', '34', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo amet ex rerum aliquam officiis. Nostrum maxime pariatur quaerat atque, commodi necessitatibus iste non modi voluptates illum eius quidem rerum quo?', 'upload/18-04-22-1650308828.jpg', 1),
(4, 'test pack4', '40', '5000', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo amet ex rerum aliquam officiis. Nostrum maxime pariatur quaerat atque, commodi necessitatibus iste non modi voluptates illum eius quidem rerum quo?', 'upload/18-04-22-1650308857.jpg', 2),
(5, 'test pack5', '1000', '800', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo amet ex rerum aliquam officiis. Nostrum maxime pariatur quaerat atque, commodi necessitatibus iste non modi voluptates illum eius quidem rerum quo?', 'upload/18-04-22-1650308885.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `price`) VALUES
(15, 'service3', 'upload/15-04-22-1650056149.jpg', '1000'),
(16, 'service2', 'upload/15-04-22-1650056177.jpg', '12500'),
(17, 'service3', 'upload/15-04-22-1650056203.jpg', '500');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `subheading` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `heading`, `subheading`, `image`) VALUES
(11, 'slider 1', 'welcome For Our Service', 'Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your own', 'upload/15-04-22-1650056451.jpg'),
(12, 'slider2', 'Service which is Going On', 'simply put them on your own', 'upload/15-04-22-1650056522.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(44, 'testing4900@gmail.com'),
(45, 'testing4900@gmail.com'),
(46, 'testing4900@gmail.com'),
(47, 'testing4900@gmail.com'),
(48, 'testing4900@gmail.com'),
(49, 'testing4900@gmail.com'),
(50, 'testing4900@gmail.com'),
(51, 'testing4900@gmail.com'),
(52, 'testing4900@gmail.com'),
(53, 'testing4900@gmail.com'),
(54, 'testing4900@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `loginPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `email`, `loginPassword`) VALUES
(1, 'p1', 'forservice2021@gmail.com', '0a571f99e5667cb088dadcc9a2d1e161');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactmessage`
--
ALTER TABLE `contactmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `default_setting`
--
ALTER TABLE `default_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakages`
--
ALTER TABLE `pakages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactmessage`
--
ALTER TABLE `contactmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `default_setting`
--
ALTER TABLE `default_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `pakages`
--
ALTER TABLE `pakages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
