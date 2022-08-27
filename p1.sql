-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2022 at 03:27 PM
-- Server version: 8.0.30-0ubuntu0.22.04.1
-- PHP Version: 8.1.2

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
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `messagebody` longtext,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contactmessage`
--

INSERT INTO `contactmessage` (`id`, `name`, `email`, `phone`, `messagebody`, `status`, `created_at`) VALUES
(11, 'Md. Munirujjaman Moner', 'sowrov1997@gmail.com', '01744331991', 'sdfgh', 0, '2022-08-24 17:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `default_setting`
--

CREATE TABLE `default_setting` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `about` longtext,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `address` longtext,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `bodybackground` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `fb_page` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `default_setting`
--

INSERT INTO `default_setting` (`id`, `title`, `about`, `email`, `phone`, `fb`, `twitter`, `google`, `address`, `instagram`, `youtube`, `linkedin`, `logo`, `bodybackground`, `copyright`, `fb_page`) VALUES
(1, 'Memu Ghi', 'this is my test about', 'testing4900@gmail.com', '000000000', 'https://fb/', 'https://twitter.com/', 'https://google.com', 'Bangladesh', 'https://www.instagrame.com', 'https://www.youtube.com/', 'https://www.linkdin.com/', 'upload/logo/27-08-22-1661613759.png', NULL, '© Copyright 2020 all resarved', 'https://www.fbpage.com/');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `requirements` longtext,
  `pakage_name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `offerprice` varchar(255) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `date`, `requirements`, `pakage_name`, `price`, `offerprice`, `status`) VALUES
(76, 'sdf', 'testing4900@gmail.com', '3456', '2022-04-18 20:24:00', 'sdfg', 'Test pack3', '23', '34', 1),
(81, 'update', 'testing490@gmail.com', '01744331991', '2022-04-20 09:47:00', 'sdfd', 'Test pack4', '40', '5000', 1),
(82, 'sdf', 'testing4@gmail.com', '01744331991', '2022-12-31 06:59:00', 'wdfg', 'Test pack4', '40', '5000', 1),
(83, 'sdf', 'testin4@gmail.com', '01744331991', '2022-12-31 06:59:00', 'wdfg', 'Test pack4', '40', '5000', 1),
(84, 'sdf', 'testi4@gmail.com', '01744331991', '2022-12-31 06:59:00', 'wdfg', 'Test pack4', '40', '5000', 1),
(85, 'sdf', 'test4@gmail.com', '01744331991', '2022-12-31 06:59:00', 'wdfg', 'Test pack4', '40', '5000', 1),
(86, 'sdf', 'test@gmail.com', '01744331991', '2022-12-31 06:59:00', 'wdfg', 'Test pack4', '40', '5000', 1),
(87, 'Md. Munirujjaman Moner', 'sowrov1997@gmail.com', '01744331991', '2022-08-25 07:55:00', 'sg', 'Test pak2', '200', '300', 1),
(88, 'Md. Munirujjaman Moner', 'sowrovw1997@gmail.com', '01744331991', '2022-08-25 07:55:00', 'sg', 'Test pak2', '200', '300', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int NOT NULL,
  `about` longtext,
  `tarms_condition` longtext,
  `privacy_policy` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `about`, `tarms_condition`, `privacy_policy`) VALUES
(1, '&lt;header&gt;&lt;nav class=&quot;m-0&quot;&gt;&lt;div class=&quot;row mx-3&quot;&gt;&lt;div class=&quot;col-sm-8&quot; style=&quot;width: 872px; flex-basis: 66.6667%; max-width: 66.6667%;&quot;&gt;&lt;a target=&quot;_blank&quot; href=&quot;http://localhost/p1/index.php&quot; style=&quot;color: rgb(199, 196, 196); text-decoration-line: underline;&quot;&gt;&lt;img src=&quot;http://localhost/p1/assets/images/logo.jpg&quot; class=&quot;img-thumbnail&quot; width=&quot;30px&quot; alt=&quot; logo&quot;&gt;&lt;/a&gt;&lt;/div&gt;&lt;div class=&quot;col-sm-4&quot; style=&quot;width: 436px; flex-basis: 33.3333%; max-width: 33.3333%;&quot;&gt;&lt;ul class=&quot;header-top-menue d-flex float-right mt-2&quot;&gt;&lt;li class=&quot;mr-2&quot;&gt;&lt;a href=&quot;http://localhost/p1/Admin/about-us.php#&quot;&gt;Name: p1 |&lt;/a&gt;&lt;/li&gt;&lt;li class=&quot;mr-2&quot;&gt;&lt;a href=&quot;http://localhost/p1/Admin/about-us.php?action=logout&quot;&gt;Sign Out&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;&lt;/div&gt;&lt;/nav&gt;&lt;/header&gt;&lt;div class=&quot;alert alert-success alert-dismissible fade show text-capitalize&quot;&gt;About Content Save Successfully&lt;/div&gt;&lt;div class=&quot;alert alert-success alert-dismissible fade show text-capitalize&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div class=&quot;alert alert-success alert-dismissible fade show text-capitalize&quot;&gt;&lt;div class=&quot;answercell post-layout--right&quot; style=&quot;margin: 0px; padding-top: 0px; padding-right: var(--su16); padding-bottom: 0px; padding-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI Adjusted&amp;quot;, &amp;quot;Segoe UI&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif; font-size: 13px; vertical-align: baseline; box-sizing: inherit; grid-column: 2 / auto; width: auto; min-width: 0px; color: rgb(35, 38, 41); text-transform: none; background-color: rgb(255, 255, 255);&quot;&gt;&lt;div class=&quot;s-prose js-post-body&quot; itemprop=&quot;text&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: var(--s-prose-line-height); font-family: var(--theme-post-body-font-family); font-size: 15px; vertical-align: baseline; box-sizing: inherit; --s-prose-line-height:1.5; --s-prose-spacing:1.1em; --s-prose-spacing-condensed:calc(var(--s-prose-spacing) / 2); overflow-wrap: break-word; width: 659px;&quot;&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: var(--s-prose-spacing); margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; clear: both;&quot;&gt;You could try running your text through&amp;nbsp;&lt;a href=&quot;http://www.php.net/manual/en/function.html-entity-decode.php&quot; rel=&quot;noreferrer&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; text-decoration-line: underline; color: var(--theme-link-color); cursor: pointer; user-select: auto;&quot;&gt;&lt;code style=&quot;margin: 0px; padding: var(--su2) var(--su4); border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: var(--ff-mono); font-size: var(--fs-body1); vertical-align: baseline; box-sizing: inherit; background-color: var(--black-075); white-space: pre-wrap; border-radius: var(--br-sm);&quot;&gt;html_entity_decode()&lt;/code&gt;&lt;/a&gt;&amp;nbsp;before&amp;nbsp;&lt;code style=&quot;margin: 0px; padding: var(--su2) var(--su4); border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: var(--ff-mono); font-size: var(--fs-body1); vertical-align: baseline; box-sizing: inherit; background-color: var(--black-075); white-space: pre-wrap; color: var(--black-800); border-radius: var(--br-sm);&quot;&gt;echo&lt;/code&gt;ing it.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; clear: both;&quot;&gt;as in&amp;nbsp;&lt;code style=&quot;margin: 0px; padding: var(--su2) var(--su4); border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: var(--ff-mono); font-size: var(--fs-body1); vertical-align: baseline; box-sizing: inherit; background-color: var(--black-075); white-space: pre-wrap; color: var(--black-800); border-radius: var(--br-sm);&quot;&gt;echo html_entity_decode($row[\'htmlcode\']);&lt;/code&gt;&lt;/p&gt;&lt;/div&gt;&lt;div class=&quot;mt24&quot; style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; margin-top: var(--su24)  !important;&quot;&gt;&lt;div class=&quot;d-flex fw-wrap ai-start jc-end gs8 gsy&quot; style=&quot;margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; flex-wrap: wrap !important; justify-content: flex-end !important; align-items: flex-start !important;&quot;&gt;&lt;time itemprop=&quot;dateCreated&quot; datetime=&quot;2011-12-05T06:21:28&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;/time&gt;&lt;div class=&quot;flex--item mr16&quot; style=&quot;margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; flex: 1 1 100px;&quot;&gt;&lt;div class=&quot;js-post-menu pt2&quot; data-post-id=&quot;8381670&quot; style=&quot;margin: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; padding-top: var(--su2)  !important;&quot;&gt;&lt;div class=&quot;d-flex gs8 s-anchors s-anchors__muted fw-wrap&quot; style=&quot;margin: calc(var(--su8) / 2 * -1); padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; flex-wrap: wrap !important;&quot;&gt;&lt;div class=&quot;flex--item&quot; style=&quot;margin: calc(var(--su8) / 2); padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;a href=&quot;https://stackoverflow.com/a/8381670&quot; rel=&quot;nofollow&quot; itemprop=&quot;url&quot; class=&quot;js-share-link js-gps-track&quot; title=&quot;Short permalink to this answer&quot; data-gps-track=&quot;post.click({ item: 2, priv: 0, post_type: 2 })&quot; data-controller=&quot;se-share-sheet s-popover&quot; data-se-share-sheet-title=&quot;Share a link to this answer&quot; data-se-share-sheet-subtitle=&quot;&quot; data-se-share-sheet-post-type=&quot;answer&quot; data-se-share-sheet-social=&quot;facebook twitter &quot; data-se-share-sheet-location=&quot;2&quot; data-se-share-sheet-license-url=&quot;https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f&quot; data-se-share-sheet-license-name=&quot;CC BY-SA 3.0&quot; data-s-popover-placement=&quot;bottom-start&quot; aria-controls=&quot;se-share-sheet-1&quot; data-action=&quot; s-popover#toggle se-share-sheet#preventNavigation s-popover:show-&gt;se-share-sheet#willShow s-popover:shown-&gt;se-share-sheet#didShow&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; color: var(--black-500); cursor: pointer; user-select: auto;&quot;&gt;Share&lt;/a&gt;&lt;/div&gt;&lt;div class=&quot;flex--item&quot; style=&quot;margin: calc(var(--su8) / 2); padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;button type=&quot;button&quot; id=&quot;btnFollowPost-8381670&quot; class=&quot;s-btn s-btn__link js-follow-post js-follow-answer js-gps-track&quot; data-gps-track=&quot;post.click({ item: 14, priv: 0, post_type: 2 })&quot; data-controller=&quot;s-tooltip &quot; data-s-tooltip-placement=&quot;bottom&quot; data-s-popover-placement=&quot;bottom&quot; aria-controls=&quot;&quot; aria-describedby=&quot;--stacks-s-tooltip-0aj1j8yd&quot; style=&quot;box-sizing: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; position: relative; display: inline; padding: 0px; border-width: initial; border-style: none; border-color: initial; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: none; text-align: inherit; cursor: pointer; user-select: auto; box-shadow: none;&quot;&gt;Follow&lt;/button&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;js-menu-popup-container&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;post-signature flex--item fl0&quot; style=&quot;margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: top; box-sizing: inherit; width: 200px; flex: 0 1 auto !important;&quot;&gt;&lt;div class=&quot;user-info user-hover&quot; style=&quot;margin: 0px; padding: 5px 6px 7px 7px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: var(--black-500);&quot;&gt;&lt;div class=&quot;user-action-time&quot; style=&quot;margin: 1px 0px 4px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: var(--fs-caption); vertical-align: baseline; box-sizing: inherit; white-space: nowrap;&quot;&gt;&lt;a href=&quot;https://stackoverflow.com/posts/8381670/revisions&quot; title=&quot;show all edits to this post&quot; class=&quot;js-gps-track&quot; data-gps-track=&quot;post.click({ item: 4, priv: 0, post_type: 2 })&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 12px; vertical-align: baseline; box-sizing: inherit; color: var(--theme-link-color); cursor: pointer; user-select: auto;&quot;&gt;edited&amp;nbsp;&lt;span title=&quot;2011-12-05 06:48:09Z&quot; class=&quot;relativetime&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;Dec 5, 2011 at 6:48&lt;/span&gt;&lt;/a&gt;&lt;/div&gt;&lt;div class=&quot;user-gravatar32&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; float: left; width: 32px; height: 32px; border-radius: 1px;&quot;&gt;&lt;a href=&quot;https://stackoverflow.com/users/295783/mplungjan&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; color: var(--theme-link-color); cursor: pointer; user-select: auto;&quot;&gt;&lt;div class=&quot;gravatar-wrapper-32&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; overflow: hidden; width: 32px; height: 32px;&quot;&gt;&lt;img src=&quot;https://www.gravatar.com/avatar/da548667c834109a7059b51060e53dff?s=64&amp;amp;d=identicon&amp;amp;r=PG&quot; alt=&quot;user avatar&quot; width=&quot;32&quot; height=&quot;32&quot; class=&quot;bar-sm&quot; style=&quot;margin: 0px auto; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; border-radius: 1px; width: 32px; height: 32px;&quot;&gt;&lt;/div&gt;&lt;/a&gt;&lt;/div&gt;&lt;div class=&quot;user-details&quot; style=&quot;margin: 0px 0px 0px 8px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 17px; font-family: inherit; vertical-align: baseline; box-sizing: inherit; overflow-wrap: break-word; float: left; width: calc(100% - 40px);&quot;&gt;&lt;a href=&quot;https://stackoverflow.com/users/295783/mplungjan&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; color: var(--theme-link-color); cursor: pointer; user-select: auto;&quot;&gt;mplungjan&lt;/a&gt;&lt;div class=&quot;-flair&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;span class=&quot;reputation-score&quot; title=&quot;reputation score 153,532&quot; dir=&quot;ltr&quot; style=&quot;margin: 0px 2px 0px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: var(--fs-caption); vertical-align: baseline; box-sizing: inherit;&quot;&gt;154k&lt;/span&gt;&lt;span title=&quot;27 gold badges&quot; aria-hidden=&quot;true&quot; style=&quot;margin: 0px 3px 0px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;span class=&quot;badge1&quot; style=&quot;margin: 0px 3px 0px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: text-bottom; box-sizing: inherit; display: inline-block; overflow: hidden; width: 6px; height: 14px; background-position: -102px -398px; background-image: url(&amp;quot;../../Img/unified/sprites.svg?v=fcc0ea44ba27&amp;quot;), none; background-size: initial; background-repeat: no-repeat;&quot;&gt;&lt;/span&gt;&lt;span class=&quot;badgecount&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: var(--fs-caption); vertical-align: baseline; box-sizing: inherit; color: var(--black-400);&quot;&gt;27&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;v-visible-sr&quot; style=&quot;margin: -1px 3px -1px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; clip: rect(1px, 1px, 1px, 1px); clip-path: inset(50%); height: 1px; overflow: hidden; position: absolute; width: 1px; overflow-wrap: normal;&quot;&gt;27 gold badges&lt;/span&gt;&lt;span title=&quot;165 silver badges&quot; aria-hidden=&quot;true&quot; style=&quot;margin: 0px 3px 0px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;span class=&quot;badge2&quot; style=&quot;margin: 0px 3px 0px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: text-bottom; box-sizing: inherit; display: inline-block; overflow: hidden; width: 6px; height: 14px; background-position: -82px -398px; background-image: url(&amp;quot;../../Img/unified/sprites.svg?v=fcc0ea44ba27&amp;quot;), none; background-size: initial; background-repeat: no-repeat;&quot;&gt;&lt;/span&gt;&lt;span class=&quot;badgecount&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: var(--fs-caption); vertical-align: baseline; box-sizing: inherit; color: var(--black-400);&quot;&gt;165&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;v-visible-sr&quot; style=&quot;margin: -1px 3px -1px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; clip: rect(1px, 1px, 1px, 1px); clip-path: inset(50%); height: 1px; overflow: hidden; position: absolute; width: 1px; overflow-wrap: normal;&quot;&gt;165 silver badges&lt;/span&gt;&lt;span title=&quot;220 bronze badges&quot; aria-hidden=&quot;true&quot; style=&quot;margin: 0px 3px 0px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;span class=&quot;badge3&quot; style=&quot;margin: 0px 3px 0px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: text-bottom; box-sizing: inherit; display: inline-block; overflow: hidden; width: 6px; height: 14px; background-position: -62px -398px; background-image: url(&amp;quot;../../Img/unified/sprites.svg?v=fcc0ea44ba27&amp;quot;), none; background-size: initial; background-repeat: no-repeat;&quot;&gt;&lt;/span&gt;&lt;span class=&quot;badgecount&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: var(--fs-caption); vertical-align: baseline; box-sizing: inherit; color: var(--black-400);&quot;&gt;220&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;v-visible-sr&quot; style=&quot;margin: -1px 3px -1px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; clip: rect(1px, 1px, 1px, 1px); clip-path: inset(50%); height: 1px; overflow: hidden; position: absolute; width: 1px; overflow-wrap: normal;&quot;&gt;220 bronze badges&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;post-signature flex--item fl0&quot; style=&quot;margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: top; box-sizing: inherit; width: 200px; flex: 0 1 auto !important;&quot;&gt;&lt;div class=&quot;user-info user-hover&quot; style=&quot;margin: 0px; padding: 5px 6px 7px 7px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: var(--black-500);&quot;&gt;&lt;div class=&quot;user-action-time&quot; style=&quot;margin: 1px 0px 4px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: var(--fs-caption); vertical-align: baseline; box-sizing: inherit; white-space: nowrap;&quot;&gt;answered&amp;nbsp;&lt;span title=&quot;2011-12-05 06:21:28Z&quot; class=&quot;relativetime&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 12px; vertical-align: baseline; box-sizing: inherit;&quot;&gt;Dec 5, 2011 at 6:21&lt;/span&gt;&lt;/div&gt;&lt;div class=&quot;user-gravatar32&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; float: left; width: 32px; height: 32px; border-radius: 1px;&quot;&gt;&lt;a href=&quot;https://stackoverflow.com/users/464744/blender&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; color: var(--theme-link-color); cursor: pointer; user-select: auto;&quot;&gt;&lt;div class=&quot;gravatar-wrapper-32&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; overflow: hidden; width: 32px; height: 32px;&quot;&gt;&lt;img src=&quot;https://www.gravatar.com/avatar/3dfd6067f4c69986a652444f44bb6d7c?s=64&amp;amp;d=identicon&amp;amp;r=PG&quot; alt=&quot;user avatar&quot; width=&quot;32&quot; height=&quot;32&quot; class=&quot;bar-sm&quot; style=&quot;margin: 0px auto; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; border-radius: 1px; width: 32px; height: 32px;&quot;&gt;&lt;/div&gt;&lt;/a&gt;&lt;/div&gt;&lt;div class=&quot;user-details&quot; itemprop=&quot;author&quot; itemscope=&quot;&quot; itemtype=&quot;http://schema.org/Person&quot; style=&quot;margin: 0px 0px 0px 8px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 17px; font-family: inherit; vertical-align: baseline; box-sizing: inherit; overflow-wrap: break-word; float: left; width: calc(100% - 40px);&quot;&gt;&lt;a href=&quot;https://stackoverflow.com/users/464744/blender&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; color: var(--theme-link-color); cursor: pointer; user-select: auto;&quot;&gt;Blender&lt;/a&gt;&lt;div class=&quot;-flair&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;span class=&quot;reputation-score&quot; title=&quot;reputation score 272,992&quot; dir=&quot;ltr&quot; style=&quot;margin: 0px 2px 0px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: var(--fs-caption); vertical-align: baseline; box-sizing: inherit;&quot;&gt;273k&lt;/span&gt;&lt;span title=&quot;49 gold badges&quot; aria-hidden=&quot;true&quot; style=&quot;margin: 0px 3px 0px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;span class=&quot;badge1&quot; style=&quot;margin: 0px 3px 0px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: text-bottom; box-sizing: inherit; display: inline-block; overflow: hidden; width: 6px; height: 14px; background-position: -102px -398px; background-image: url(&amp;quot;../../Img/unified/sprites.svg?v=fcc0ea44ba27&amp;quot;), none; background-size: initial; background-repeat: no-repeat;&quot;&gt;&lt;/span&gt;&lt;span class=&quot;badgecount&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: var(--fs-caption); vertical-align: baseline; box-sizing: inherit; color: var(--black-400);&quot;&gt;49&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;v-visible-sr&quot; style=&quot;margin: -1px 3px -1px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; clip: rect(1px, 1px, 1px, 1px); clip-path: inset(50%); height: 1px; overflow: hidden; position: absolute; width: 1px; overflow-wrap: normal;&quot;&gt;49 gold badges&lt;/span&gt;&lt;span title=&quot;417 silver badges&quot; aria-hidden=&quot;true&quot; style=&quot;margin: 0px 3px 0px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;span class=&quot;badge2&quot; style=&quot;margin: 0px 3px 0px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: text-bottom; box-sizing: inherit; display: inline-block; overflow: hidden; width: 6px; height: 14px; background-position: -82px -398px; background-image: url(&amp;quot;../../Img/unified/sprites.svg?v=fcc0ea44ba27&amp;quot;), none; background-size: initial; background-repeat: no-repeat;&quot;&gt;&lt;/span&gt;&lt;span class=&quot;badgecount&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: var(--fs-caption); vertical-align: baseline; box-sizing: inherit; color: var(--black-400);&quot;&gt;417&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;v-visible-sr&quot; style=&quot;margin: -1px 3px -1px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; clip: rect(1px, 1px, 1px, 1px); clip-path: inset(50%); height: 1px; overflow: hidden; position: absolute; width: 1px; overflow-wrap: normal;&quot;&gt;417 silver badges&lt;/span&gt;&lt;span title=&quot;478 bronze badges&quot; aria-hidden=&quot;true&quot; style=&quot;margin: 0px 3px 0px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;span class=&quot;badge3&quot; style=&quot;margin: 0px 3px 0px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: text-bottom; box-sizing: inherit; display: inline-block; overflow: hidden; width: 6px; height: 14px; background-position: -62px -398px; background-image: url(&amp;quot;../../Img/unified/sprites.svg?v=fcc0ea44ba27&amp;quot;), none; background-size: initial; background-repeat: no-repeat;&quot;&gt;&lt;/span&gt;&lt;span class=&quot;badgecount&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: var(--fs-caption); vertical-align: baseline; box-sizing: inherit; color: var(--black-400);&quot;&gt;478&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;v-visible-sr&quot; style=&quot;margin: -1px 3px -1px 2px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; clip: rect(1px, 1px, 1px, 1px); clip-path: inset(50%); height: 1px; overflow: hidden; position: absolute; width: 1px; overflow-wrap: normal;&quot;&gt;478 bronze badges&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;post-layout--right js-post-comments-component&quot; style=&quot;margin: 0px; padding-top: 0px; padding-right: var(--su16); padding-bottom: 0px; padding-left: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, &amp;quot;Segoe UI Adjusted&amp;quot;, &amp;quot;Segoe UI&amp;quot;, &amp;quot;Liberation Sans&amp;quot;, sans-serif; font-size: 13px; vertical-align: baseline; box-sizing: inherit; grid-column: 2 / auto; width: auto; min-width: 0px; color: rgb(35, 38, 41); text-transform: none; background-color: rgb(255, 255, 255);&quot;&gt;&lt;div id=&quot;comments-8381670&quot; class=&quot;comments js-comments-container bt bc-black-075 mt12 &quot; data-post-id=&quot;8381670&quot; data-min-length=&quot;15&quot; style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; width: 659px; -webkit-tap-highlight-color: rgba(255, 255, 255, 0); margin-top: var(--su12)  !important; border-top-width: var(--su-static1)  !important; border-top-style: solid !important; border-color: var(--black-075)  !important;&quot;&gt;&lt;ul class=&quot;comments-list js-comments-list&quot; data-remaining-comments-count=&quot;0&quot; data-canpost=&quot;false&quot; data-cansee=&quot;true&quot; data-comments-unavailable=&quot;false&quot; data-addlink-disabled=&quot;true&quot; style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; list-style: none; box-sizing: inherit; display: grid; grid-template-columns: max-content 1fr;&quot;&gt;&lt;li id=&quot;comment-10345354&quot; class=&quot;comment js-comment &quot; data-comment-id=&quot;10345354&quot; data-comment-owner-id=&quot;464744&quot; data-comment-score=&quot;0&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; transition: background-color 2s linear 0s; display: contents;&quot;&gt;&lt;div class=&quot;js-comment-actions comment-actions&quot; style=&quot;margin: 0px; padding: 6px 2px 6px 0px; border-top: 0px; border-right: 0px; border-bottom: 1px solid var(--black-050); border-left: 0px; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; width: auto; transition: background-color 3s ease-out 0s; flex-shrink: 0; display: grid; grid-template-columns: repeat(2, max-content); align-content: flex-start;&quot;&gt;&lt;div class=&quot;comment-score js-comment-edit-hide&quot; style=&quot;margin: 0px; padding: 0px 4px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; width: auto; display: inline-block; min-width: var(--su-static16);&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;comment-text  js-comment-text-and-form&quot; style=&quot;margin: 0px; padding: 6px; border-top: 0px; border-right: 0px; border-bottom: 1px solid var(--black-050); border-left: 0px; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.4; font-family: inherit; font-size: var(--fs-body1); vertical-align: text-top; box-sizing: inherit; flex-grow: 1; min-width: 0px; flex-basis: 0px; transition: background-color 3s ease-out 0s;&quot;&gt;&lt;div class=&quot;comment-body js-comment-edit-hide&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; overflow-wrap: break-word;&quot;&gt;&lt;span class=&quot;comment-copy&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: var(--theme-post-body-font-family); vertical-align: baseline; box-sizing: inherit;&quot;&gt;I\'m stabbing in the dark here, as the OP said that he could see the HTML code (so either it was rendered as plaintext, or was encoded). I\'m just guessing.&lt;/span&gt;&amp;nbsp;&lt;div class=&quot;d-inline-flex ai-center&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; align-items: center !important;&quot;&gt;–&amp;nbsp;&lt;a href=&quot;https://stackoverflow.com/users/464744/blender&quot; title=&quot;272,992 reputation&quot; class=&quot;comment-user&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; color: var(--theme-link-color); cursor: pointer; user-select: auto; display: inline-block; white-space: nowrap;&quot;&gt;Blender&lt;/a&gt;&lt;/div&gt;&amp;nbsp;&lt;span class=&quot;comment-date&quot; dir=&quot;ltr&quot; style=&quot;margin: 0px; padding: 0px; border-top: 0px; border-right: 0px; border-bottom: none; border-left: 0px; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; color: var(--black-350);&quot;&gt;&lt;a class=&quot;comment-link&quot; href=&quot;https://stackoverflow.com/questions/8381651/php-echo-working-html-code-from-mysql#comment10345354_8381670&quot; style=&quot;margin: 0px; padding: 0px; border-top: 0px; border-right: 0px; border-bottom: none; border-left: 0px; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; color: var(--black-350); cursor: pointer; user-select: auto;&quot;&gt;Dec 5, 2011 at 6:25&lt;/a&gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;/li&gt;&lt;li id=&quot;comment-10345359&quot; class=&quot;comment js-comment &quot; data-comment-id=&quot;10345359&quot; data-comment-owner-id=&quot;-1&quot; data-comment-score=&quot;0&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; transition: background-color 2s linear 0s; display: contents;&quot;&gt;&lt;div class=&quot;js-comment-actions comment-actions&quot; style=&quot;margin: 0px; padding: 6px 2px 6px 0px; border-top: 0px; border-right: 0px; border-bottom: 1px solid var(--black-050); border-left: 0px; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; width: auto; transition: background-color 3s ease-out 0s; flex-shrink: 0; display: grid; grid-template-columns: repeat(2, max-content); align-content: flex-start;&quot;&gt;&lt;div class=&quot;comment-score js-comment-edit-hide&quot; style=&quot;margin: 0px; padding: 0px 4px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; width: auto; display: inline-block; min-width: var(--su-static16);&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;comment-text  js-comment-text-and-form&quot; style=&quot;margin: 0px; padding: 6px; border-top: 0px; border-right: 0px; border-bottom: 1px solid var(--black-050); border-left: 0px; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.4; font-family: inherit; font-size: var(--fs-body1); vertical-align: text-top; box-sizing: inherit; flex-grow: 1; min-width: 0px; flex-basis: 0px; transition: background-color 3s ease-out 0s;&quot;&gt;&lt;div class=&quot;comment-body js-comment-edit-hide&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; overflow-wrap: break-word;&quot;&gt;&lt;span class=&quot;comment-copy&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: var(--theme-post-body-font-family); vertical-align: baseline; box-sizing: inherit;&quot;&gt;oh i know, just saying is all, based on the question its as valid an answer as well any :-)&lt;/span&gt;&amp;nbsp;&lt;div class=&quot;d-inline-flex ai-center&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; align-items: center !important;&quot;&gt;–&amp;nbsp;&lt;span class=&quot;comment-user&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;user557846&lt;/span&gt;&lt;/div&gt;&amp;nbsp;&lt;span class=&quot;comment-date&quot; dir=&quot;ltr&quot; style=&quot;margin: 0px; padding: 0px; border-top: 0px; border-right: 0px; border-bottom: none; border-left: 0px; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; color: var(--black-350);&quot;&gt;&lt;a class=&quot;comment-link&quot; href=&quot;https://stackoverflow.com/questions/8381651/php-echo-working-html-code-from-mysql#comment10345359_8381670&quot; style=&quot;margin: 0px; padding: 0px; border-top: 0px; border-right: 0px; border-bottom: none; border-left: 0px; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; color: var(--black-350); cursor: pointer; user-select: auto;&quot;&gt;Dec 5, 2011 at 6:26&lt;/a&gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;/li&gt;&lt;li id=&quot;comment-10345407&quot; class=&quot;comment js-comment &quot; data-comment-id=&quot;10345407&quot; data-comment-owner-id=&quot;986693&quot; data-comment-score=&quot;0&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; transition: background-color 2s linear 0s; display: contents;&quot;&gt;&lt;div class=&quot;js-comment-actions comment-actions&quot; style=&quot;margin: 0px; padding: 6px 2px 6px 0px; border-top: 0px; border-right: 0px; border-bottom: 1px solid var(--black-050); border-left: 0px; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; width: auto; transition: background-color 3s ease-out 0s; flex-shrink: 0; display: grid; grid-template-columns: repeat(2, max-content); align-content: flex-start;&quot;&gt;&lt;div class=&quot;comment-score js-comment-edit-hide&quot; style=&quot;margin: 0px; padding: 0px 4px 0px 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; width: auto; display: inline-block; min-width: var(--su-static16);&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;comment-text  js-comment-text-and-form&quot; style=&quot;margin: 0px; padding: 6px; border-top: 0px; border-right: 0px; border-bottom: 1px solid var(--black-050); border-left: 0px; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.4; font-family: inherit; font-size: var(--fs-body1); vertical-align: text-top; box-sizing: inherit; flex-grow: 1; min-width: 0px; flex-basis: 0px; transition: background-color 3s ease-out 0s;&quot;&gt;&lt;div class=&quot;comment-body js-comment-edit-hide&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; overflow-wrap: break-word;&quot;&gt;&lt;span class=&quot;comment-copy&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: var(--theme-post-body-font-family); vertical-align: baseline; box-sizing: inherit;&quot;&gt;Have you got an example of how i can use html_entity_decode with the echo.&lt;/span&gt;&amp;nbsp;&lt;div class=&quot;d-inline-flex ai-center&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; align-items: center !important;&quot;&gt;–&amp;nbsp;&lt;a href=&quot;https://stackoverflow.com/users/986693/david-wibb&quot; title=&quot;25 reputation&quot; class=&quot;comment-user owner&quot; style=&quot;margin: 0px; padding: 1px 5px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; color: var(--theme-link-color); cursor: pointer; user-select: auto; border-radius: var(--br-sm); display: inline-block; white-space: nowrap;&quot;&gt;David Wibb&lt;/a&gt;&lt;/div&gt;&amp;nbsp;&lt;span class=&quot;comment-date&quot; dir=&quot;ltr&quot; style=&quot;margin: 0px; padding: 0px; border-top: 0px; border-right: 0px; border-bottom: none; border-left: 0px; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; color: var(--black-350);&quot;&gt;&lt;a class=&quot;comment-link&quot; href=&quot;https://stackoverflow.com/questions/8381651/php-echo-working-html-code-from-mysql#comment10345407_8381670&quot; style=&quot;margin: 0px; padding: 0px; border-top: 0px; border-right: 0px; border-bottom: none; border-left: 0px; border-image: initial; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; color: var(--black-350); cursor: pointer; user-select: auto;&quot;&gt;Dec 5, 2011 at 6:31&lt;/a&gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;&lt;div id=&quot;comments-link-8381670&quot; data-rep=&quot;50&quot; data-anon=&quot;true&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;a class=&quot;js-add-link comments-link disabled-link&quot; title=&quot;Use comments to ask for more information or suggest improvements. Avoid comments like “+1” or “thanks”.&quot; href=&quot;https://stackoverflow.com/questions/8381651/php-echo-working-html-code-from-mysql#&quot; role=&quot;button&quot; style=&quot;margin: 0px; padding: 0px 3px 2px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit; color: rgb(131, 140, 149); cursor: pointer; user-select: auto; opacity: 0.6;&quot;&gt;Add a comment&lt;/a&gt;&lt;/div&gt;&lt;div id=&quot;comments-link-8381670&quot; data-rep=&quot;50&quot; data-anon=&quot;true&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div id=&quot;comments-link-8381670&quot; data-rep=&quot;50&quot; data-anon=&quot;true&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div id=&quot;comments-link-8381670&quot; data-rep=&quot;50&quot; data-anon=&quot;true&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div id=&quot;comments-link-8381670&quot; data-rep=&quot;50&quot; data-anon=&quot;true&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div id=&quot;comments-link-8381670&quot; data-rep=&quot;50&quot; data-anon=&quot;true&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div id=&quot;comments-link-8381670&quot; data-rep=&quot;50&quot; data-anon=&quot;true&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; box-sizing: inherit;&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pakages`
--

CREATE TABLE `pakages` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `offerprice` varchar(255) DEFAULT NULL,
  `description` longtext,
  `image` longtext,
  `rating` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `offerprice` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `price`, `offerprice`, `image`, `category`, `description`) VALUES
(19, 'Doi', '100', '', 'upload/posts/26-08-22-1661502791.jpg', 'Sweets', ''),
(20, 'coconut-gulab-jaman', '100', '', 'upload/posts/26-08-22-1661502734.jpg', 'Sweets', ''),
(21, 'Motichur_Laddu', '100', '', 'upload/posts/26-08-22-1661502608.jpg', 'Sweets', ''),
(22, 'Turkish_strained_yogurt', '500', '', 'upload/posts/26-08-22-1661503191.jpg', 'Yogurt', 'This is Turkish_strained_yogurt'),
(23, 'Ghee', '100', '', 'upload/posts/26-08-22-1661503345.jpg', 'Ghee', ''),
(24, 'Ghee and Clarified Butter', '100', '50', 'upload/posts/27-08-22-1661609468.jpg', 'Ghee', 'Ghee is typically prepared by simmering butter, which is churned from cream (traditionally made by churning the topmost layer of dahi, which is also called Bilona method), skimming any impurities from the surface, then pouring and retaining the clear liquid fat while discarding the solid residue that has settled to the bottom. Spices can be added for flavor. The texture, color, and taste of ghee depend on the quality of the butter, the milk source used in the process, and the duration of boiling time.'),
(25, 'Special Raecpy', '500', '100', 'upload/posts/27-08-22-1661611600.jpg', 'Ghee', 'Ghee is typically prepared by simmering butter, which is churned from cream (tra');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `price`) VALUES
(16, 'RecipeTin Eats How to make Ghee and Clarified Butter', 'upload/services/23-05-22-1653327341.jpg', '12500'),
(17, 'Deep Pure Cow Ghee Clarified Butter, 64 Ounce', 'upload/services/23-05-22-1653327178.jpg', '500'),
(20, 'Ghee vs butter 1 pot ghee', 'upload/services/23-05-22-1653327110.jpg', '23456');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `subheading` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `heading`, `subheading`, `image`) VALUES
(11, 'slider 1', 'welcome For Our Service', 'Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your own', 'upload/sliders/23-05-22-1653324001.jpg'),
(12, 'slider2', 'Service which is Going On', 'simply put them on your own', 'upload/sliders/23-05-22-1653323973.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(55, 'testing4900@gmail.com'),
(56, 'testing@gmail.com'),
(57, 'testing490@gmail.com'),
(58, 'testing4900'),
(59, 'testing400@gmail.com'),
(60, 'testing4@gmail.com'),
(61, 'testin4@gmail.com'),
(62, 'testi4@gmail.com'),
(63, 'test4@gmail.com'),
(64, 'test@gmail.com'),
(65, 'sowrov1997@gmail.com'),
(66, 'sowrovw1997@gmail.com'),
(67, 'fahimmbpifahimmbpi@gmail.com'),
(68, 'b@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `loginPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakages`
--
ALTER TABLE `pakages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `default_setting`
--
ALTER TABLE `default_setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pakages`
--
ALTER TABLE `pakages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
