-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 04:36 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactdb148`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `user_id` int(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `display_name` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_id`, `username`, `password`, `email`, `display_name`) VALUES
(1, 'sguyalive', '1234', 'fah-tvxq@live.com', 'sguyalive'),
(2, 'admin', '1234', '', ''),
(3, 'add', '1111', '1111', '');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `date`, `image`) VALUES
(1, 'Rogue One', '2016-12-15', 'https://www.img.in.th/images/9c91cf3c658caea6d8d24089bb7c2abc.jpg'),
(2, 'Pohn-Jak-Fah', '2016-12-01', 'https://www.img.in.th/images/4e87002d252ee542e82e2eef2fc7d618.jpg'),
(3, '20 Mai', '2016-12-24', 'https://www.img.in.th/images/4a2505159e9bcfc0419ad7de9afb3700.jpg'),
(4, 'Fantastic Beast ', '2016-11-17', 'https://www.img.in.th/images/c6e39332ee3dcc086fe7b6a3ed14b6e4.jpg'),
(5, 'Nocturnal Animals', '2016-12-01', 'https://www.img.in.th/images/1869a9d28d9577826f1a65652b67914b.jpg'),
(6, 'Billy Lynn''s Halftime Walk ', '2016-11-24', 'https://www.img.in.th/images/71e9c295fd9408be4414b2d0e91c28bd.jpg'),
(7, 'Infeno', '2016-11-10', 'https://www.img.in.th/images/91b986c66ef60566ea6f42441ce232da.jpg'),
(8, 'Your Name', '2016-11-10', 'https://www.img.in.th/images/131e606be23473c026d46e983ad2e7a7.jpg'),
(9, 'Doctor Strange', '2016-11-26', 'https://www.img.in.th/images/92bb75a8af768ba5d28e0014bb47ab40.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `Topic_id` int(11) NOT NULL,
  `topic_name` varchar(45) DEFAULT NULL,
  `topic_detail` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`Topic_id`, `topic_name`, `topic_detail`) VALUES
(3, 'test', '45'),
(31, NULL, NULL),
(32, NULL, NULL),
(33, NULL, NULL),
(34, NULL, NULL),
(35, 'ee', 'ada'),
(36, NULL, NULL),
(37, NULL, NULL),
(38, '0e2b0e2b', '0e440e44'),
(39, 'ddww', 'ww'),
(40, 'wff', 'dd'),
(41, 'dd', 'dd'),
(42, 'eeeee', 'ee'),
(43, NULL, NULL),
(44, NULL, NULL),
(45, 'ww', 'ss'),
(46, 'ss', 'dd'),
(47, 'ee', 'ww'),
(48, 'ss', 'ss'),
(49, 'ad', 'ss'),
(50, 'dd', 'ww'),
(51, 'ss', 'ss'),
(52, 'ffe', 'dd'),
(53, 'w', ''),
(54, 'ee', 'ww'),
(55, 'ffd', 'ss'),
(56, 'ad', 'ee'),
(57, 'dd', 'ddd'),
(58, 'jkhj', 'yghj'),
(59, 'df', 'fefrf'),
(60, 'aa', 'aa'),
(61, '0e140e14', '0e460e46'),
(62, 'qq', 'qq'),
(63, 'dd', 'dd'),
(64, 'rr', 'ww'),
(65, 'kjjl', 'l;kl;'),
(66, '0e2d0e400e40', '0e460e46'),
(67, 'ddd', 'sss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`Topic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `Topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
