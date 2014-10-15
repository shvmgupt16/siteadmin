-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2014 at 12:52 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `user_type` char(10) NOT NULL,
  `registered_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `account_status` char(1) NOT NULL,
  `low_product` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`, `admin_email`, `user_type`, `registered_on`, `last_login_date`, `account_status`, `low_product`) VALUES
(1, 'Admin', 'Admin', 'santosh.eci@gmail.co', 's', '2014-04-04 12:42:47', '2014-04-04 12:42:47', 'Y', 10);

-- --------------------------------------------------------

--
-- Table structure for table `ga_consultaion`
--

CREATE TABLE IF NOT EXISTS `ga_consultaion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ga_consultaion`
--

INSERT INTO `ga_consultaion` (`id`, `name`, `email`) VALUES
(1, 'viaksh', 'viaksh.ranjan@aksinteractive.com'),
(2, 'vikash', 'vikash.ranjan@aksinteractive.com'),
(3, 'rajesh', 'rajesh@aksinteractive.com');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ga_contact`
--

INSERT INTO `ga_contact` (`id`, `name`, `email_id`, `subject`, `message`, `status`) VALUES
(10, 'asasa', 'asas', '', '', 'Y'),
(11, 'Kumar Santosh', 'santosh@aksteractive.com', 'test', 'wewewe wewewjk wjekwjekwj jkwewe', 'Y'),
(12, 'Kumar Santosh', 'santosh@aksteractive.com', 'test', 'wewewe wewewjk wjekwjekwj jkwewe', 'Y');

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
(1, 'How to grow your business', '<iframe width="431" height="261" src="//www.youtube.com/embed/rCKpIjX7i4Y" frameborder="0" allowfullscreen></iframe>', '533d138dade57_video2.jpg', '2014-04-04 11:19:33', 'Y'),
(2, 'How to grow your business', '<iframe width="431" height="261" src="//www.youtube.com/embed/RRK0gyfwuRY?rel=0" frameborder="0" allowfullscreen></iframe>', '533d13f4b89cd_video2.jpg', '2014-04-03 17:02:43', 'Y'),
(3, 'tart Your Business in 7 Days ', '<iframe width=\\"431\\" height=\\"261\\" src=\\"//www.youtube.com/embed/RRK0gyfwuRY?rel=0\\" frameborder=\\"0\\" allowfullscreen></iframe>', '533d1fc8e5187_video1.jpg', '2014-04-03 17:26:56', 'Y'),
(4, 'How to grow your business12', '<iframe width="431" height="261" src="//www.youtube.com/embed/RRK0gyfwuRY?rel=0" frameborder="0" allowfullscreen></iframe>', '533d3e728c775_video2.jpg', '2014-04-03 17:30:29', 'Y'),
(5, 'How to grow your business12', '<iframe width="431" height="261" src="//www.youtube.com/embed/ooPVb_OS0Gc" frameborder="0" allowfullscreen></iframe>', '533d3e7523859_video2.jpg', '2014-04-04 11:24:38', 'Y'),
(6, 'How to grow your business12', '<iframe width="431" height="216" src="//www.youtube.com/embed/hfLX3LcH4dg" frameborder="0" allowfullscreen></iframe>', '533d3e775bb47_video2.jpg', '2014-04-04 11:25:33', 'Y'),
(7, 'How to grow your business12', '<iframe width="431" height="261" src="//www.youtube.com/embed/XiEcTomk7s4" frameborder="0" allowfullscreen></iframe>', '533d3e798210b_video2.jpg', '2014-04-04 11:23:24', 'Y');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ga_newsletter`
--

INSERT INTO `ga_newsletter` (`id`, `email`, `status`) VALUES
(1, 'vikash.ranjan@aksinteractive.com', 0),
(2, 'vikash.ranjan@aksinteractive.com', 1),
(3, 'rajesh@aksinteractive.com', 1);

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
  `payment_amount` decimal(7,2) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `itemid` varchar(25) NOT NULL,
  `createdtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ga_payments`
--

INSERT INTO `ga_payments` (`id`, `txnid`, `user_id`, `service_method`, `service`, `payment_amount`, `payment_status`, `itemid`, `createdtime`) VALUES
(2, '', 5, 'Custom', 'Script by you', 1.00, 'Completed', '10005', '2014-03-26 23:31:11'),
(3, '', 6, 'Custom', 'Full service', 2.00, 'Processing', '10006', '2014-04-03 12:44:08');

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
(2, 'Kumar jhon', 'Php Developer ', '533d0b4a7fc24_testimonial-img1.jpg', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2014-04-04 13:15:11', 'Y'),
(3, 'Kumar Santosh', 'Php Developer ', '533d0be1147c5__13715567622.jpg', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '2014-04-04 13:15:01', 'Y');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ga_user`
--

INSERT INTO `ga_user` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'rajesh', 'verma', 'rajesh@aksinteractive.com'),
(2, 'verma', 'rajesh@aksinteractive.com', 'rajesh@aksinteractive.com'),
(3, 'rajesh', 'verma', 'rajesh@aksinteractive.com'),
(4, 'rajesh', 'verma', 'rajesh@aksinteractive.com'),
(5, 'rajesh', 'verma', 'rajesh@aksinteractive.com'),
(6, 'test', 'rtr', 'test@sfg.com');
