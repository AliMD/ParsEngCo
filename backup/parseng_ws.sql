-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2012 at 05:16 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parsengws`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `category` int(10) unsigned NOT NULL,
  `description` varchar(256) NOT NULL,
  `excerpt` varchar(128) NOT NULL,
  `thumb` varchar(32) NOT NULL,
  `image` varchar(32) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `category`, `description`, `excerpt`, `thumb`, `image`, `sort`) VALUES
(6, 'پروژه ۲', 3, 'تنوع طرح و رنگ بسیار بالای این محصول می تواند محدودیت را از دید و ذهن طراحان دکوراسیون داخلی و ایده پردازان صنعت تزئینات بردارد.', 'متن خلاصه در مورد محصول', '1.jpg', '1.jpg', 5),
(7, 'پروژه ۲', 2, 'تنوع طرح و رنگ بسیار بالای این محصول می تواند محدودیت را از دید و ذهن طراحان دکوراسیون داخلی و ایده پردازان صنعت تزئینات بردارد.', 'متن خلاصه در مورد محصول', '2.jpg', '2.jpg', 2),
(8, 'پروژه ۳', 1, 'تنوع طرح و رنگ بسیار بالای این محصول می تواند محدودیت را از دید و ذهن طراحان دکوراسیون داخلی و ایده پردازان صنعت تزئینات بردارد.', 'متن خلاصه در مورد محصول', '3.jpg', '3.jpg', 0),
(10, 'پروژه 1', 3, 'تنوع طرح و رنگ بسیار بالای این محصول می تواند محدودیت را از دید و ذهن طراحان دکوراسیون داخلی و ایده پردازان صنعت تزئینات بردارد.', 'متن خلاصه در مورد محصول', '1.jpg', '1.jpg', 5),
(11, 'پروژه ۲', 3, 'تنوع طرح و رنگ بسیار بالای این محصول می تواند محدودیت را از دید و ذهن طراحان دکوراسیون داخلی و ایده پردازان صنعت تزئینات بردارد.', 'متن خلاصه در مورد محصول', '2.jpg', '2.jpg', 2),
(12, 'پروژه ۳', 3, 'تنوع طرح و رنگ بسیار بالای این محصول می تواند محدودیت را از دید و ذهن طراحان دکوراسیون داخلی و ایده پردازان صنعت تزئینات بردارد.', 'متن خلاصه در مورد محصول', '3.jpg', '3.jpg', 0),
(13, 'پروژه 1', 2, 'تنوع طرح و رنگ بسیار بالای این محصول می تواند محدودیت را از دید و ذهن طراحان دکوراسیون داخلی و ایده پردازان صنعت تزئینات بردارد.', 'متن خلاصه در مورد محصول', '1.jpg', '1.jpg', 5),
(14, 'پروژه ۲', 2, 'تنوع طرح و رنگ بسیار بالای این محصول می تواند محدودیت را از دید و ذهن طراحان دکوراسیون داخلی و ایده پردازان صنعت تزئینات بردارد.', 'متن خلاصه در مورد محصول', '2.jpg', '2.jpg', 2),
(15, 'پروژه ۳', 2, 'تنوع طرح و رنگ بسیار بالای این محصول می تواند محدودیت را از دید و ذهن طراحان دکوراسیون داخلی و ایده پردازان صنعت تزئینات بردارد.', 'متن خلاصه در مورد محصول', '3.jpg', '3.jpg', 0),
(16, 'پروژه 1', 1, 'تنوع طرح و رنگ بسیار بالای این محصول می تواند محدودیت را از دید و ذهن طراحان دکوراسیون داخلی و ایده پردازان صنعت تزئینات بردارد.', 'متن خلاصه در مورد محصول', '1.jpg', '1.jpg', 5),
(17, 'پروژه ۲', 1, 'تنوع طرح و رنگ بسیار بالای این محصول می تواند محدودیت را از دید و ذهن طراحان دکوراسیون داخلی و ایده پردازان صنعت تزئینات بردارد.', 'متن خلاصه در مورد محصول', '2.jpg', '2.jpg', 2),
(18, 'پروژه ۳', 1, 'تنوع طرح و رنگ بسیار بالای این محصول می تواند محدودیت را از دید و ذهن طراحان دکوراسیون داخلی و ایده پردازان صنعت تزئینات بردارد.', 'متن خلاصه در مورد محصول', '3.jpg', '3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(4) NOT NULL,
  `category` int(10) unsigned NOT NULL,
  `thumb` varchar(32) NOT NULL,
  `image` varchar(32) NOT NULL,
  `description` varchar(256) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `category`, `thumb`, `image`, `description`, `sort`) VALUES
(1, '142', 1, '142.jpg', '142.jpg', '', 0),
(2, '143', 1, '143.jpg', '143.jpg', '', 0),
(3, '192', 1, '192.jpg', '192.jpg', '', 0),
(4, '243', 1, '243.jpg', '243.jpg', '', 0),
(5, '354', 1, '354.jpg', '354.jpg', '', 0),
(6, '364', 1, '364.jpg', '364.jpg', '', 0),
(7, '418', 1, '418.jpg', '418.jpg', '', 0),
(8, '421', 2, '421.jpg', '421.jpg', '', 0),
(9, '423', 2, '423.jpg', '423.jpg', '', 0),
(10, '524', 2, '524.jpg', '524.jpg', '', 0),
(11, '532', 2, '532.jpg', '532.jpg', '', 0),
(12, '782', 2, '782.jpg', '782.jpg', '', 0),
(13, '835', 2, '835.jpg', '835.jpg', '', 0),
(14, '243', 3, '243.jpg', '243.jpg', '', 0),
(15, '354', 3, '354.jpg', '354.jpg', '', 0),
(16, '364', 3, '364.jpg', '364.jpg', '', 0),
(17, '418', 3, '418.jpg', '418.jpg', '', 0),
(18, '421', 3, '421.jpg', '421.jpg', '', 0),
(19, '423', 3, '423.jpg', '423.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_cats`
--

DROP TABLE IF EXISTS `products_cats`;
CREATE TABLE IF NOT EXISTS `products_cats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products_cats`
--

INSERT INTO `products_cats` (`id`, `name`, `sort`) VALUES
(1, 'پنل های ALPI', 0),
(2, 'پنل های DANZER', 0),
(3, 'پنل های High Glass', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects_cats`
--

DROP TABLE IF EXISTS `projects_cats`;
CREATE TABLE IF NOT EXISTS `projects_cats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `projects_cats`
--

INSERT INTO `projects_cats` (`id`, `name`, `sort`) VALUES
(1, 'کابینت', 0),
(2, 'دکوراسیون داخلی', 1),
(3, 'درب های ساختمانی', 1);
