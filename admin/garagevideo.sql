-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2014 at 08:26 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `garagevideo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ga_admin`
--

CREATE TABLE IF NOT EXISTS `ga_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `user_type` char(10) NOT NULL,
  `registered_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `account_status` char(1) NOT NULL,
  `low_product` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ga_admin`
--

INSERT INTO `ga_admin` (`id`, `username`, `pass`, `admin_email`, `user_type`, `registered_on`, `last_login_date`, `account_status`, `low_product`) VALUES
(1, 'admin', 'ADMIN', 'santosh@aksinteractive.com', 's', '2014-04-30 10:43:14', '2014-04-30 10:43:14', 'Y', 10);

-- --------------------------------------------------------

--
-- Table structure for table `ga_consultaion`
--

CREATE TABLE IF NOT EXISTS `ga_consultaion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ga_consultaion`
--

INSERT INTO `ga_consultaion` (`id`, `name`, `email`) VALUES
(2, 'vikash', 'vikash.ranjan@aksinteractive.com'),
(3, 'rajesh', 'rajesh@aksinteractive.com'),
(4, 'ghgh', 'ghgh@dfd.cvom'),
(6, 'kumar', 'aks@ask.com');

-- --------------------------------------------------------

--
-- Table structure for table `ga_contact`
--

CREATE TABLE IF NOT EXISTS `ga_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(212) NOT NULL,
  `email_id` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(222) NOT NULL,
  `status` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ga_contact`
--

INSERT INTO `ga_contact` (`id`, `name`, `email_id`, `subject`, `message`, `status`) VALUES
(1, 'sfsdf', 'santosh@aksteractive.com', 'fdfdf', 'dfd', 'Y'),
(2, 'w', 'santosh@aksteractive.com', 'test', 'jkjk', 'Y'),
(3, 'w', 'santosh@aksteractive.com', 'test', 'jkjk', 'Y'),
(4, 'w', 'santosh@aksteractive.com', 'test', 'jkjk', 'Y'),
(5, 'w', 'santosh@aksteractive.com', 'test', 'jkjk', 'Y'),
(6, 'w', 'santosh@aksteractive.com', 'test', 'jkjk', 'Y'),
(7, 'w', 'santosh@aksteractive.com', 'test', 'jkjk', 'Y'),
(8, 'w', 'santosh@aksteractive.com', 'test', 'jkjk', 'Y'),
(9, 'w', 'santosh@aksteractive.com', 'test', 'jkjk', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ga_custom`
--

CREATE TABLE IF NOT EXISTS `ga_custom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `by_them` int(11) NOT NULL,
  `by_garag` int(11) NOT NULL,
  `over_you` int(11) NOT NULL,
  `over_garag` int(11) NOT NULL,
  `kinetix` int(11) NOT NULL,
  `length` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ga_custom`
--

INSERT INTO `ga_custom` (`id`, `by_them`, `by_garag`, `over_you`, `over_garag`, `kinetix`, `length`) VALUES
(1, 0, 100, 0, 100, 1355, '30'),
(2, 0, 120, 0, 125, 2255, '1'),
(3, 0, 140, 0, 150, 2655, '1:30'),
(4, 0, 160, 0, 175, 2955, '2'),
(5, 0, 180, 0, 200, 3155, '2:30'),
(6, 0, 200, 0, 225, 3355, '3');

-- --------------------------------------------------------

--
-- Table structure for table `ga_express`
--

CREATE TABLE IF NOT EXISTS `ga_express` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `by_them` int(11) NOT NULL,
  `by_garag` int(11) NOT NULL,
  `over_you` int(11) NOT NULL,
  `over_garag` int(11) NOT NULL,
  `kinetix` int(11) NOT NULL,
  `length` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ga_express`
--

INSERT INTO `ga_express` (`id`, `by_them`, `by_garag`, `over_you`, `over_garag`, `kinetix`, `length`) VALUES
(1, 0, 100, 0, 100, 1055, '30'),
(2, 0, 120, 0, 125, 1754, '1'),
(3, 0, 140, 0, 150, 2154, '1:30'),
(4, 0, 160, 0, 175, 2355, '2'),
(5, 0, 180, 0, 200, 2455, '2:30'),
(6, 0, 200, 0, 225, 2555, '3');

-- --------------------------------------------------------

--
-- Table structure for table `ga_featured_work`
--

CREATE TABLE IF NOT EXISTS `ga_featured_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `work_title` varchar(222) NOT NULL,
  `youtube_url` text NOT NULL,
  `thumb_image` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ga_featured_work`
--

INSERT INTO `ga_featured_work` (`id`, `work_title`, `youtube_url`, `thumb_image`, `created_date`, `status`) VALUES
(1, 'How to grow your business', '<iframe width="431" height="261" src="//www.youtube.com/embed/rCKpIjX7i4Y" frameborder="0" allowfullscreen></iframe>', '533d138dade57_video2.jpg', '2014-04-05 17:16:05', 'D'),
(2, 'Video1', 'https://www.youtube.com/watch?v=RRK0gyfwuRY', '533fed0b8894b_video3.jpg', '2014-04-11 13:23:59', 'Y'),
(3, 'Video2', 'https://www.youtube.com/watch?v=vb7bsw0cW-8', '533fecedb2281_video2.jpg', '2014-04-11 14:07:07', 'Y'),
(4, 'video3', 'https://www.youtube.com/watch?v=uVEmPZSGHZM', '533fecd3e128d_video1.jpg', '2014-04-11 13:08:37', 'Y'),
(5, 'video5', 'https://www.youtube.com/watch?v=bPkf8Yzd4WM', '533fecbbaa224_video4.jpg', '2014-04-11 14:05:18', 'Y'),
(6, 'Video6', 'https://www.youtube.com/watch?v=ceYxo4H5VNo', '533feca4d6bcc_video5.jpg', '2014-04-11 14:07:40', 'Y'),
(7, 'video7', 'http://www.youtube.com/watch?v=RRK0gyfwuRY', '533fec84b3604_video3.jpg', '2014-04-11 13:25:22', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ga_get_start`
--

CREATE TABLE IF NOT EXISTS `ga_get_start` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ga_get_start`
--

INSERT INTO `ga_get_start` (`id`, `name`, `email`) VALUES
(1, 'vikash', 'vikash.ranjan@aksinteractive.com'),
(2, 'vikash', 'vikash.ranjan22@aksinteractive.com'),
(3, 'vikash', 'vikash.ranjan@aksinteractive.com'),
(4, 'vikash', 'vikash.ranjan@aksinteractive.com'),
(5, 'vikash', 'vikash.ranjan@aksinteractive.com'),
(6, 'vikash', 'vikash.ranjan@aksinteractive.com'),
(7, 'vikash', 'vikash.ranjan@aksinteractive.com'),
(8, 'vikash', 'vikash.ranjan@aksinteractive.com'),
(9, 'vikash', 'vikash.ranjan@aksinteractive.com'),
(10, 'vikash', 'vikash.ranjan@aksinteractive.com'),
(11, 'vikash', 'vikash.ranjan@aksinteractive.com');

-- --------------------------------------------------------

--
-- Table structure for table `ga_news`
--

CREATE TABLE IF NOT EXISTS `ga_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(222) NOT NULL,
  `designation` varchar(222) NOT NULL,
  `image` text NOT NULL,
  `news` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ga_news`
--

INSERT INTO `ga_news` (`id`, `name`, `designation`, `image`, `news`, `created_date`, `status`) VALUES
(2, 'Jhon Mark', 'Director of Lorem Ipsum', '533d0577dcf54_testimonial-img1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor</p>\r\n', '2014-04-03 12:24:37', 'Y'),
(3, 'Jhon Mark', 'Director of Lorem Ipsum', '533d0581bfcc4_testimonial-img1.jpg', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2014-04-04 12:50:43', 'Y'),
(4, 'Jhon Mark', 'Director of Lorem Ipsum', '533d05886b6b2_testimonial-img1.jpg', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2014-04-04 12:43:15', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ga_newsletter`
--

CREATE TABLE IF NOT EXISTS `ga_newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ga_newsletter`
--

INSERT INTO `ga_newsletter` (`id`, `email`, `status`) VALUES
(1, 'vikash.ranjan@aksinteractive.com', 0),
(2, 'vikash.ranjan@aksinteractive.com', 1),
(3, 'rajesh@aksinteractive.com', 1),
(4, 'santosh@ak.com', 1),
(5, 'wow@wow.com', 1),
(6, 'gfgf@gmail.com', 1),
(7, 'qwqwq@sdsd.com', 1),
(8, 'wew@sdd.com', 1),
(9, 'ghhg@dfdf.com', 1),
(10, 'aks@www.com', 1),
(11, 'qwqwqw@sdsd.com', 1),
(12, 'fdff@sdsd.com', 1),
(13, 'kumar@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ga_payments`
--

CREATE TABLE IF NOT EXISTS `ga_payments` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `txnid` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_method` varchar(200) NOT NULL,
  `service` varchar(50) NOT NULL,
  `script_name` varchar(222) NOT NULL,
  `voice_name1` varchar(222) NOT NULL,
  `voice_name2` varchar(222) NOT NULL,
  `style_name` varchar(222) NOT NULL,
  `time_length` varchar(222) NOT NULL,
  `payment_amount` decimal(7,2) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `itemid` varchar(25) NOT NULL,
  `createdtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ga_payments`
--

INSERT INTO `ga_payments` (`id`, `txnid`, `user_id`, `service_method`, `service`, `script_name`, `voice_name1`, `voice_name2`, `style_name`, `time_length`, `payment_amount`, `payment_status`, `itemid`, `createdtime`) VALUES
(1, '', 1, '', 'Express', 'Writen by Us', '', 'Voice Over - Casting', 'Corporate', '1:30', 290.00, 'Processing', '10001', '2014-04-30 07:28:27');

-- --------------------------------------------------------

--
-- Table structure for table `ga_testimonials`
--

CREATE TABLE IF NOT EXISTS `ga_testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(222) NOT NULL,
  `designation` varchar(222) NOT NULL,
  `image` text NOT NULL,
  `comment` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ga_testimonials`
--

INSERT INTO `ga_testimonials` (`id`, `name`, `designation`, `image`, `comment`, `created_date`, `status`) VALUES
(1, 'Kumar Santosh', 'Php Developer ', '533d0b2863f03_testimonial-img1.jpg', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2014-04-04 13:15:18', 'Y'),
(2, 'Kumar jhon', 'Php Developer ', '533d0b4a7fc24_testimonial-img1.jpg', ' <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2014-04-24 14:04:15', 'Y'),
(3, 'Kumar Santosh', 'Php Developer ', '533d0be1147c5__13715567622.jpg', ' <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2014-04-24 14:03:53', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ga_user`
--

CREATE TABLE IF NOT EXISTS `ga_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ga_user`
--

INSERT INTO `ga_user` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'santosh', 'kumar', 'santosh.eci2012@gmail.com');
