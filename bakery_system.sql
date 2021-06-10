-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 06, 2018 at 03:29 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_item`
--

DROP TABLE IF EXISTS `add_item`;
CREATE TABLE IF NOT EXISTS `add_item` (
  `PRODUCT_ID` int(255) NOT NULL AUTO_INCREMENT,
  `PRODUCT_NAME` varchar(255) NOT NULL,
  `PRODUCT_RATE` decimal(65,2) NOT NULL,
  `PRODUCT_QUANTITY` decimal(65,2) NOT NULL,
  `PRODUCT_UNIT` varchar(255) NOT NULL,
  `PRODUCT_BRAND` varchar(255) NOT NULL,
  `PRODUCT_STATUS` varchar(255) NOT NULL,
  `PRODUCT_WARN` decimal(65,2) NOT NULL,
  `PRODUCT_DATE` date NOT NULL,
  PRIMARY KEY (`PRODUCT_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=217 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_item`
--

INSERT INTO `add_item` (`PRODUCT_ID`, `PRODUCT_NAME`, `PRODUCT_RATE`, `PRODUCT_QUANTITY`, `PRODUCT_UNIT`, `PRODUCT_BRAND`, `PRODUCT_STATUS`, `PRODUCT_WARN`, `PRODUCT_DATE`) VALUES
(1, 'ZXC', '12.00', '18.00', 'kg', 'sunshine', 'Available', '1.00', '2018-08-14'),
(2, 'ZXC', '12.00', '18.00', 'kg', 'sedap', 'Available', '1.00', '2018-08-14'),
(3, 'ZXC', '12.00', '2.00', 'kg', 'sedap', 'Available', '1.00', '2018-08-14'),
(127, 'EGGS', '12.00', '5.00', 'grain', 'sedap', 'Not_Available', '2.00', '2018-08-31'),
(5, 'ZXC', '12.00', '20.00', 'kg', 'sedap', 'Available', '1.00', '2018-08-14'),
(116, 'LOL', '12.00', '1.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-31'),
(7, 'LOL', '12.00', '10.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-06'),
(8, 'LOL', '12.00', '1.00', 'kg', 'sunshine', 'Available', '10.00', '2018-08-16'),
(9, 'LOL', '12.00', '1.00', 'kg', 'sunshine', 'Available', '10.00', '2018-08-16'),
(10, 'LOL', '12.00', '1.00', 'kg', 'sunshine', 'Available', '10.00', '2018-08-16'),
(11, 'LOL', '12.00', '2.00', 'kg', 'sunshine', 'Available', '10.00', '2018-08-16'),
(126, 'BNMB', '2.00', '5.00', 'kg', 'sunshine', 'Not_Available', '1.00', '2018-08-31'),
(13, 'XCV', '12.00', '1.56', 'grain', 'sunshine', 'Available', '1.00', '2018-08-07'),
(115, 'CHOCOLATE', '12.00', '10.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-30'),
(114, 'VB', '10.00', '12.00', 'litre', 'sunshine', 'Not_Available', '2.00', '2018-08-30'),
(113, 'SUGAR', '12.00', '10.00', 'kg', 'mesti', 'Not_Available', '5.00', '2018-08-31'),
(112, 'BROWN SUGAR', '50.00', '12.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-31'),
(110, 'EGGS', '12.00', '12.00', 'grain', 'sedap', 'Not_Available', '2.00', '2018-08-31'),
(111, 'SALT', '12.00', '12.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-31'),
(109, 'JAGUNG', '12.00', '12.00', 'grain', 'sedap', 'Not_Available', '5.00', '2018-08-24'),
(108, 'ZXC', '12.00', '12.00', 'kg', 'sedap', 'Not_Available', '1.00', '2018-08-23'),
(24, 'ZXC', '12.00', '20.00', 'kg', 'sedap', 'Not_Available', '1.00', '2018-08-23'),
(25, 'LOL', '12.00', '12.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(105, 'BNMB', '2.00', '12.00', 'kg', 'sunshine', 'Not_Available', '1.00', '2018-08-31'),
(27, 'FLOUR', '12.00', '4.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-23'),
(28, 'FLOUR', '12.00', '3.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-23'),
(107, 'FLOUR', '12.00', '10.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-31'),
(30, 'BNMB', '2.00', '2.00', 'kg', 'sunshine', 'Available', '1.00', '2018-08-07'),
(31, 'FLOUR', '12.00', '5.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-23'),
(32, 'FLOUR', '12.00', '2.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-23'),
(33, 'LOL', '12.00', '11.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(34, 'ZXC', '12.00', '3.00', 'kg', 'sedap', 'Not_Available', '1.00', '2018-08-23'),
(125, 'LOL', '12.00', '12.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-31'),
(124, 'CHOCOLATE', '12.00', '12.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-30'),
(37, 'FLOUR', '12.00', '5.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-24'),
(123, 'VB', '10.00', '12.00', 'litre', 'sunshine', 'Not_Available', '2.00', '2018-08-30'),
(39, 'FLOUR', '12.00', '1.00', 'kg', 'sedap', 'Available', '5.00', '2018-08-24'),
(40, 'FLOUR', '12.00', '5.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-24'),
(41, 'FLOUR', '12.00', '6.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-24'),
(122, 'EGGS', '12.00', '1.00', 'grain', 'sedap', 'Available', '2.00', '2018-08-31'),
(43, 'FLOUR', '12.00', '5.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-24'),
(121, 'EGGS', '12.00', '12.00', 'grain', 'sedap', 'Not_Available', '2.00', '2018-08-31'),
(45, 'LOL', '12.00', '8.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(46, 'FLOUR', '12.00', '12.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-24'),
(47, 'EGGS', '12.00', '12.00', 'grain', 'sedap', 'Not_Available', '2.00', '2018-08-23'),
(48, 'LOL', '12.00', '12.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(49, 'LOL', '12.00', '12.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(50, 'ZXC', '12.00', '5.00', 'kg', 'sedap', 'Not_Available', '1.00', '2018-08-23'),
(51, 'FLOUR', '12.00', '1.00', 'kg', 'sedap', 'Available', '5.00', '2018-08-24'),
(52, 'EGGS', '12.00', '1.00', 'grain', 'sedap', 'Available', '2.00', '2018-08-24'),
(120, 'VB', '10.00', '1.00', 'litre', 'sunshine', 'Available', '2.00', '2018-08-30'),
(54, 'LOL', '12.00', '10.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(119, 'LOL', '12.00', '2.00', 'kg', 'sunshine', 'Available', '10.00', '2018-08-31'),
(56, 'EGGS', '12.00', '10.00', 'grain', 'sedap', 'Not_Available', '2.00', '2018-08-24'),
(57, 'FLOUR', '12.00', '10.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-24'),
(58, 'LOL', '12.00', '1.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(59, 'LOL', '12.00', '10.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(60, 'ZXC', '12.00', '1.00', 'kg', 'sedap', 'Not_Available', '1.00', '2018-08-23'),
(61, 'ZXC', '12.00', '2.00', 'kg', 'sedap', 'Not_Available', '1.00', '2018-08-23'),
(62, 'ZXC', '12.00', '2.00', 'kg', 'sedap', 'Not_Available', '1.00', '2018-08-23'),
(64, 'LOL', '12.00', '1.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(65, 'LOL', '12.00', '10.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(66, 'ZXC', '12.00', '3.00', 'kg', 'sedap', 'Not_Available', '1.00', '2018-08-23'),
(118, 'CHOCOLATE', '12.00', '10.00', 'kg', 'sunshine', 'Available', '5.00', '2018-08-30'),
(68, 'EGGS', '12.00', '3.00', 'grain', 'sedap', 'Not_Available', '2.00', '2018-08-24'),
(69, 'FLOUR', '12.00', '6.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-24'),
(70, 'XCV', '12.00', '8.00', 'grain', 'sunshine', 'Not_Available', '1.00', '2018-08-07'),
(71, 'BNMB', '2.00', '12.00', 'kg', 'sunshine', 'Not_Available', '1.00', '2018-08-07'),
(72, 'LOL', '12.00', '12.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(73, 'LOL', '12.00', '1.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(74, 'BNMB', '2.00', '3.00', 'kg', 'sunshine', 'Not_Available', '1.00', '2018-08-07'),
(75, 'BNMB', '2.00', '4.00', 'kg', 'sunshine', 'Not_Available', '1.00', '2018-08-07'),
(76, 'BNMB', '2.00', '4.00', 'kg', 'sunshine', 'Not_Available', '1.00', '2018-08-07'),
(77, 'BNMB', '2.00', '4.00', 'kg', 'sunshine', 'Not_Available', '1.00', '2018-08-07'),
(78, 'BNMB', '2.00', '10.00', 'kg', 'sunshine', 'Not_Available', '1.00', '2018-08-07'),
(79, 'BNMB', '2.00', '11.00', 'kgg', 'sunshine', 'Not_Available', '1.00', '2018-08-07'),
(80, 'BNMB', '2.00', '3.00', 'kg', 'sunshine', 'Not_Available', '1.00', '2018-08-07'),
(81, 'LOL', '12.00', '1.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(82, 'FLOUR', '12.00', '1.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-24'),
(83, 'LOL', '12.00', '2.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(84, 'ZXC', '12.00', '2.00', 'kg', 'sedap', 'Not_Available', '1.00', '2018-08-23'),
(85, 'SALT', '12.00', '1.00', 'kg', 'sunshine', 'Available', '5.00', '2018-08-26'),
(86, 'BNMB', '2.00', '3.00', 'kg', 'sunshine', 'Not_Available', '1.00', '2018-08-07'),
(87, 'VB', '10.00', '5.00', 'litre', 'sunshine', 'Not_Available', '2.00', '2018-08-26'),
(88, 'XCV', '12.00', '10.00', 'grain', 'sunshine', 'Not_Available', '1.00', '2018-08-07'),
(89, 'XCV', '12.00', '10.00', 'grain', 'sunshine', 'Not_Available', '1.00', '2018-08-07'),
(90, 'BNMB', '2.00', '10.00', 'kg', 'sunshine', 'Not_Available', '1.00', '2018-08-07'),
(91, 'LOL', '12.00', '12.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-23'),
(92, 'ZXC', '12.00', '10.00', 'kg', 'sedap', 'Not_Available', '1.00', '2018-08-23'),
(117, 'LOL', '12.00', '12.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-31'),
(94, 'EGGS', '12.00', '10.00', 'grain', 'sedap', 'Not_Available', '2.00', '2018-08-24'),
(95, 'FLOUR', '12.00', '10.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-24'),
(96, 'SALT', '12.00', '10.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-26'),
(97, 'VB', '10.00', '10.00', 'litre', 'sunshine', 'Not_Available', '2.00', '2018-08-26'),
(98, 'SUGAR', '12.00', '10.00', 'kg', 'mesti', 'Not_Available', '5.00', '2018-08-26'),
(106, 'LOL', '12.00', '12.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-31'),
(103, 'VB', '10.00', '12.00', 'litre', 'sunshine', 'Not_Available', '2.00', '2018-08-30'),
(101, 'FLOUR', '12.00', '10.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-27'),
(102, 'VB', '10.00', '10.00', 'litre', 'sunshine', 'Not_Available', '2.00', '2018-08-27'),
(128, 'FLOUR', '12.00', '6.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-08-31'),
(129, 'CHOCOLATE', '12.00', '1.00', 'kg', 'sunshine', 'Available', '5.00', '2018-08-30'),
(130, 'VB', '10.00', '1.00', 'litre', 'sunshine', 'Available', '2.00', '2018-08-30'),
(131, 'EGGS', '12.00', '1.00', 'grain', 'sedap', 'Available', '2.00', '2018-08-31'),
(132, 'LOL', '12.00', '1.00', 'kg', 'sunshine', 'Available', '10.00', '2018-08-31'),
(133, 'BNMB', '2.00', '1.00', 'kg', 'sunshine', 'Available', '1.00', '2018-08-31'),
(134, 'EGGS', '12.00', '1.00', 'grain', 'sedap', 'Not_Available', '2.00', '2018-08-31'),
(135, 'LOL', '12.00', '2.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-31'),
(136, 'LOL', '12.00', '5.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-31'),
(137, 'BNMB', '2.00', '10.00', 'kg', 'sunshine', 'Not_Available', '1.00', '2018-08-31'),
(138, 'EGGS', '12.00', '10.00', 'grain', 'sedap', 'Not_Available', '2.00', '2018-09-02'),
(139, 'FLOUR', '12.00', '10.00', 'kg', 'sedap', 'Not_Available', '5.00', '2018-09-02'),
(140, 'ZXC', '12.00', '1.00', 'kg', 'sedap', 'Available', '1.00', '2018-08-23'),
(141, 'XCV', '12.00', '1.00', 'grain', 'sunshine', 'Available', '1.00', '2018-08-07'),
(142, 'JAGUNG', '12.00', '1.00', 'grain', 'sedap', 'Available', '5.00', '2018-08-24'),
(143, 'SALT', '12.00', '1.00', 'kg', 'sunshine', 'Available', '5.00', '2018-08-31'),
(144, 'VB', '10.00', '1.00', 'litre', 'sunshine', 'Available', '2.00', '2018-08-30'),
(145, 'SUGAR', '12.00', '1.00', 'kg', 'mesti', 'Available', '5.00', '2018-08-31'),
(146, 'BROWN SUGAR', '50.00', '1.00', 'kg', 'sunshine', 'Available', '10.00', '2018-08-31'),
(147, 'SYRUP', '2.00', '1.00', 'litre', 'sunshine', 'Available', '1.00', '2018-08-27'),
(148, 'CHOCOLATE', '12.00', '1.00', 'kg', 'sunshine', 'Available', '5.00', '2018-09-02'),
(149, 'JAGUNG', '12.00', '7.00', 'grain', 'sedap', 'Not_Available', '5.00', '2018-08-24'),
(150, 'LOL', '12.00', '10.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-09-03'),
(151, 'LOL', '12.00', '1.00', 'kg', 'sunshine', 'Available', '10.00', '2018-09-03'),
(152, 'LOL', '12.00', '1.00', 'kg', 'sunshine', 'Available', '10.00', '2018-09-03'),
(153, 'JAGUNG', '12.00', '1.00', 'grain', 'sedap', 'Available', '5.00', '2018-08-24'),
(154, 'BNMB', '2.00', '10.00', 'kg', 'sunshine', 'Not_Available', '1.00', '2018-08-31'),
(155, 'BNMB', '2.00', '2.00', 'kg', 'sunshine', 'Available', '1.00', '2018-08-31'),
(156, 'VB', '10.00', '1.00', 'litre', 'sunshine', 'Not_Available', '2.00', '2018-08-30'),
(157, 'VB', '10.00', '1.00', 'litre', 'sunshine', 'Not_Available', '2.00', '2018-08-30'),
(158, 'VB', '10.00', '2.00', 'litre', 'sunshine', 'Available', '2.00', '2018-08-30'),
(159, 'SALT', '12.00', '1.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-31'),
(160, 'SALT', '12.00', '1.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-31'),
(161, 'SALT', '12.00', '2.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-31'),
(162, 'LOL', '12.00', '12.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-09-03'),
(163, 'ZXC', '12.00', '1.00', 'kg', 'sedap', 'Not_Available', '1.00', '2018-08-23'),
(164, 'ZXC', '12.00', '2.00', 'kg', 'sedap', 'Available', '1.00', '2018-08-23'),
(165, 'ZXC', '12.00', '2.00', 'kg', 'sedap', 'Available', '1.00', '2018-08-23'),
(166, 'ZXC', '12.00', '2.00', 'kg', 'sedap', 'Available', '1.00', '2018-08-23'),
(167, 'LOL', '12.00', '11.00', 'kg', 'sunshine', 'Available', '10.00', '2018-09-03'),
(168, 'SALT', '12.00', '6.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-31'),
(169, 'SALT', '12.00', '1.00', 'kg', 'sunshine', 'Available', '5.00', '2018-08-31'),
(170, 'SUGAR', '12.00', '1.00', 'kg', 'mesti', 'Not_Available', '5.00', '2018-08-31'),
(171, 'SUGAR', '12.00', '1.00', 'kg', 'mesti', 'Not_Available', '5.00', '2018-08-31'),
(172, 'SUGAR', '12.00', '1.00', 'kg', 'mesti', 'Available', '5.00', '2018-08-31'),
(173, 'SYRUP', '2.00', '2.00', 'litre', 'sunshine', 'Not_Available', '1.00', '2018-08-27'),
(174, 'XCV', '12.00', '1.00', 'grain', 'sunshine', 'Available', '1.00', '2018-08-07'),
(175, 'ZXC', '12.00', '1.00', 'kg', 'sedap', 'Not_Available', '1.00', '2018-08-23'),
(176, 'ZXC', '12.00', '1.00', 'kg', 'sedap', 'Not_Available', '1.00', '2018-08-23'),
(177, 'ZXC', '12.00', '2.00', 'kg', 'sedap', 'Available', '1.00', '2018-08-23'),
(178, 'ZXC', '12.00', '1.00', 'kg', 'sedap', 'Available', '1.00', '2018-08-23'),
(179, 'JAGUNG', '12.00', '2.00', 'grain', 'sedap', 'Not_Available', '5.00', '2018-08-24'),
(180, 'JAGUNG', '12.00', '1.00', 'grain', 'sedap', 'Available', '5.00', '2018-08-24'),
(181, 'SYRUP', '2.00', '2.00', 'litre', 'sunshine', 'Not_Available', '1.00', '2018-08-27'),
(182, 'SYRUP', '2.00', '1.00', 'litre', 'sunshine', 'Available', '1.00', '2018-08-27'),
(183, 'SALT', '12.00', '5.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-31'),
(184, 'SALT', '12.00', '5.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-31'),
(185, 'SALT', '12.00', '10.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-31'),
(186, 'SUGAR', '12.00', '1.00', 'kg', 'mesti', 'Not_Available', '5.00', '2018-08-31'),
(187, 'SUGAR', '12.00', '1.00', 'kg', 'mesti', 'Not_Available', '5.00', '2018-08-31'),
(188, 'SUGAR', '12.00', '1.00', 'kg', 'mesti', 'Not_Available', '5.00', '2018-08-31'),
(189, 'SUGAR', '12.00', '1.00', 'kg', 'mesti', 'Not_Available', '5.00', '2018-08-31'),
(190, 'VB', '10.00', '1.00', 'litre', 'sunshine', 'Not_Available', '2.00', '2018-08-30'),
(191, 'SALT', '12.00', '3.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-31'),
(192, 'SUGAR', '12.00', '5.00', 'kg', 'mesti', 'Not_Available', '5.00', '2018-08-31'),
(193, 'JAGUNG', '12.00', '5.00', 'grain', 'sedap', 'Not_Available', '5.00', '2018-08-24'),
(194, 'VB', '10.00', '2.00', 'litre', 'sunshine', 'Not_Available', '2.00', '2018-08-30'),
(195, 'SALT', '12.00', '2.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-31'),
(196, 'VB', '10.00', '2.00', 'litre', 'sunshine', 'Not_Available', '2.00', '2018-08-30'),
(197, 'SALT', '12.00', '2.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-31'),
(198, 'SUGAR', '12.00', '1.00', 'kg', 'mesti', 'Not_Available', '5.00', '2018-08-31'),
(199, 'SALT', '12.00', '1.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-08-31'),
(200, 'VB', '10.00', '2.00', 'litre', 'sunshine', 'Not_Available', '2.00', '2018-09-04'),
(201, 'SALT', '12.00', '2.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-09-04'),
(206, 'JAGUNG', '12.00', '1.00', 'grain', 'sedap', 'Available', '5.00', '2018-08-24'),
(203, 'EGGS', '12.00', '3.00', 'grain', 'sedap', 'Not_Available', '2.00', '2018-09-02'),
(204, 'JAGUNG', '12.00', '1.00', 'grain', 'sedap', 'Available', '5.00', '2018-08-24'),
(205, 'SYRUP', '2.00', '2.00', 'litre', 'sunshine', 'Available', '1.00', '2018-08-27'),
(207, 'BROWN SUGAR', '50.00', '5.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-31'),
(208, 'EGGS', '12.00', '5.00', 'grain', 'sedap', 'Not_Available', '2.00', '2018-09-02'),
(209, 'CHOCOLATE', '12.00', '5.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-09-02'),
(210, 'LOL', '12.00', '62.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-09-03'),
(211, 'JAGUNG', '12.00', '5.00', 'grain', 'sedap', 'Available', '5.00', '2018-08-24'),
(212, 'FLOUR', '12.00', '5.00', 'kg', 'sedap', 'Available', '5.00', '2018-09-02'),
(213, 'SALT', '12.00', '5.00', 'kg', 'sunshine', 'Available', '5.00', '2018-09-04'),
(214, 'VB', '10.00', '5.00', 'litre', 'sunshine', 'Available', '2.00', '2018-09-04'),
(215, 'SUGAR', '12.00', '5.00', 'kg', 'mesti', 'Available', '5.00', '2018-09-04'),
(216, 'BROWN SUGAR', '50.00', '1.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `item_used`
--

DROP TABLE IF EXISTS `item_used`;
CREATE TABLE IF NOT EXISTS `item_used` (
  `PRODUCT_ID` int(255) NOT NULL AUTO_INCREMENT,
  `PRODUCT_NAME` varchar(255) NOT NULL,
  `PRODUCT_QUANTITY` decimal(65,2) NOT NULL,
  `PRODUCT_UNIT` varchar(255) NOT NULL,
  `PRODUCT_BRAND` varchar(255) NOT NULL,
  `PRODUCT_DATE` date NOT NULL,
  PRIMARY KEY (`PRODUCT_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=154 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_used`
--

INSERT INTO `item_used` (`PRODUCT_ID`, `PRODUCT_NAME`, `PRODUCT_QUANTITY`, `PRODUCT_UNIT`, `PRODUCT_BRAND`, `PRODUCT_DATE`) VALUES
(2, 'ZXC', '2.00', 'kg', 'sedap', '2018-08-12'),
(4, 'XCV', '3.00', 'grain', 'sunshine', '2018-08-15'),
(5, 'LOL', '11.00', 'kg', 'sunshine', '2018-08-18'),
(6, 'XCV', '2.50', 'grain', 'sunshine', '2018-08-18'),
(8, 'JAGUNG', '10.00', 'grain', 'sedap', '2018-08-22'),
(10, 'FLOUR', '9.00', 'kg', 'sedap', '2018-08-23'),
(11, 'EGGS', '11.00', 'grain', 'sedap', '2018-08-23'),
(15, 'EGGS', '14.00', 'grain', 'sedap', '2018-08-23'),
(18, 'JAGUNG', '6.00', 'grain', 'sedap', '2018-08-23'),
(19, 'JAGUNG', '5.00', 'grain', 'sedap', '2018-08-23'),
(22, 'ZXC', '38.00', 'kg', 'sedap', '2018-08-23'),
(23, 'ZXC', '20.00', 'kg', 'sedap', '2018-08-24'),
(25, 'LOL', '10.00', 'kg', 'sunshine', '2018-08-23'),
(26, 'LOL', '10.00', 'kg', 'sunshine', '2018-08-23'),
(27, 'FLOUR', '5.00', 'kg', 'sedap', '2018-08-23'),
(28, 'FLOUR', '2.00', 'kg', 'sedap', '2018-08-23'),
(29, 'FLOUR', '5.00', 'kg', 'sedap', '2018-08-23'),
(30, 'FLOUR', '5.00', 'kg', 'sedap', '2018-08-23'),
(31, 'JAGUNG', '2.00', 'grain', 'sedap', '2018-08-23'),
(32, 'JAGUNG', '8.00', 'grain', 'sedap', '2018-08-24'),
(33, 'FLOUR', '5.00', 'kg', 'sedap', '2018-08-24'),
(34, 'FLOUR', '5.00', 'kg', 'sedap', '2018-08-24'),
(35, 'JAGUNG', '5.00', 'grain', 'sedap', '2018-08-24'),
(36, 'JAGUNG', '5.00', 'grain', 'sedap', '2018-08-24'),
(37, 'FLOUR', '5.00', 'kg', 'sedap', '2018-08-24'),
(38, 'LOL', '5.00', 'kg', 'sunshine', '2018-08-24'),
(39, 'FLOUR', '5.00', 'kg', 'sedap', '2018-08-24'),
(40, 'EGGS', '11.00', 'grain', 'sedap', '2018-08-24'),
(41, 'LOL', '10.00', 'kg', 'sunshine', '2018-08-24'),
(42, 'LOL', '12.00', 'kg', 'sunshine', '2018-08-24'),
(43, 'ZXC', '3.00', 'kg', 'sedap', '2018-08-24'),
(44, 'FLOUR', '12.00', 'kg', 'sedap', '2018-08-24'),
(45, 'FLOUR', '12.00', 'kg', 'sedap', '2018-08-24'),
(46, 'FLOUR', '3.00', 'kg', 'sedap', '2018-08-24'),
(47, 'FLOUR', '13.00', 'kg', 'sedap', '2018-08-24'),
(48, 'FLOUR', '16.00', 'kg', 'sedap', '2018-08-24'),
(49, 'FLOUR', '14.00', 'kg', 'sedap', '2018-08-24'),
(50, 'EGGS', '13.00', 'grain', 'sedap', '2018-08-24'),
(51, 'JAGUNG', '2.00', 'grain', 'sedap', '2018-08-24'),
(52, 'JAGUNG', '5.00', 'grain', 'sedap', '2018-08-24'),
(53, 'LOL', '10.00', 'kg', 'sunshine', '2018-08-24'),
(54, 'FLOUR', '10.00', 'kg', 'sedap', '2018-08-24'),
(56, 'JAGUNG', '10.00', 'grain', 'sedap', '2018-08-24'),
(57, 'ZXC', '5.00', 'kg', 'sedap', '2018-08-24'),
(58, 'LOL', '10.00', 'kg', 'sunshine', '2018-08-24'),
(59, 'ZXC', '2.00', 'kg', 'sedap', '2018-08-24'),
(60, 'ZXC', '2.00', 'kg', 'sedap', '2018-08-24'),
(61, 'LOL', '10.00', 'kg', 'sunshine', '2018-08-24'),
(62, 'JAGUNG', '5.00', 'grain', 'sedap', '2018-08-24'),
(63, 'FLOUR', '5.00', 'kg', 'sedap', '2018-08-24'),
(64, 'EGGS', '3.00', 'grain', 'sedap', '2018-08-24'),
(65, 'JAGUNG', '3.00', 'grain', 'sedap', '2018-08-24'),
(66, 'ZXC', '3.00', 'kg', 'sedap', '2018-08-24'),
(67, 'LOL', '10.00', 'kg', 'sunshine', '2018-08-24'),
(68, 'BNMB', '13.00', 'kg', 'sunshine', '2018-08-24'),
(69, 'XCV', '8.00', 'grain', 'sunshine', '2018-08-24'),
(70, 'LOL', '13.00', 'kg', 'sunshine', '2018-08-24'),
(71, 'BNMB', '13.00', 'kg', 'sunshine', '2018-08-24'),
(72, 'JAGUNG', '1.00', 'grain', 'sedap', '2018-08-26'),
(73, 'FLOUR', '2.00', 'kg', 'sedap', '2018-08-26'),
(74, 'LOL', '3.00', 'kg', 'sunshine', '2018-08-26'),
(75, 'LOL', '3.00', 'kg', 'sunshine', '2018-08-26'),
(76, 'ZXC', '3.00', 'kg', 'sedap', '2018-08-26'),
(77, 'BNMB', '3.00', 'kg', 'sunshine', '2018-08-26'),
(78, 'XCV', '1.00', 'grain', 'sunshine', '2018-08-01'),
(79, 'SALT', '9.00', 'kg', 'sunshine', '2018-08-26'),
(80, 'VB', '5.00', 'litre', 'sunshine', '2018-08-26'),
(81, 'SUGAR', '8.00', 'kg', 'mesti', '2018-08-26'),
(82, 'BNMB', '3.00', 'kg', 'sunshine', '2018-08-26'),
(83, 'VB', '4.00', 'litre', 'sunshine', '2018-08-26'),
(84, 'XCV', '7.00', 'grain', 'sunshine', '2018-08-26'),
(85, 'XCV', '10.00', 'grain', 'sunshine', '2018-08-26'),
(96, 'VB', '11.00', 'litre', 'sunshine', '2018-08-30'),
(95, 'FLOUR', '7.00', 'kg', 'sedap', '2018-08-30'),
(88, 'SALT', '2.00', 'kg', 'sunshine', '2018-08-27'),
(89, 'FLOUR', '1.00', 'kg', 'sedap', '2018-08-27'),
(90, 'BROWN SUGAR', '11.00', 'kg', 'sunshine', '2018-08-27'),
(91, 'SALT', '9.00', 'kg', 'sunshine', '2018-08-27'),
(92, 'FLOUR', '8.00', 'kg', 'sedap', '2018-08-27'),
(93, 'FLOUR', '2.00', 'kg', 'sedap', '2018-08-27'),
(94, 'FLOUR', '1.00', 'kg', 'sedap', '2018-08-27'),
(97, 'EGGS', '10.00', 'grain', 'sedap', '2018-08-31'),
(98, 'JAGUNG', '8.00', 'grain', 'sedap', '2018-08-31'),
(99, 'ZXC', '10.00', 'kg', 'sedap', '2018-08-31'),
(100, 'LOL', '10.00', 'kg', 'sunshine', '2018-08-31'),
(101, 'BNMB', '10.00', 'kg', 'sunshine', '2018-08-31'),
(102, 'SUGAR', '14.00', 'kg', 'mesti', '2018-08-31'),
(103, 'VB', '12.00', 'litre', 'sunshine', '2018-08-31'),
(104, 'CHOCOLATE', '8.00', 'kg', 'sunshine', '2018-08-31'),
(105, 'LOL', '10.00', 'kg', 'sunshine', '2018-08-31'),
(106, 'EGGS', '12.00', 'grain', 'sedap', '2018-08-31'),
(107, 'FLOUR', '10.00', 'kg', 'sedap', '2018-08-31'),
(108, 'EGGS', '12.00', 'grain', 'sedap', '2018-08-31'),
(109, 'BNMB', '12.00', 'kg', 'sunshine', '2018-08-31'),
(110, 'LOL', '22.00', 'kg', 'sunshine', '2018-08-31'),
(111, 'CHOCOLATE', '22.00', 'kg', 'sunshine', '2018-08-31'),
(112, 'VB', '12.00', 'litre', 'sunshine', '2018-08-31'),
(113, 'FLOUR', '5.00', 'kg', 'sedap', '2018-08-31'),
(114, 'EGGS', '7.00', 'grain', 'sedap', '2018-08-31'),
(115, 'BNMB', '5.00', 'kg', 'sunshine', '2018-08-31'),
(116, 'LOL', '10.00', 'kg', 'sunshine', '2018-08-31'),
(117, 'SALT', '14.00', 'kg', 'sunshine', '2018-09-02'),
(118, 'SUGAR', '10.00', 'kg', 'mesti', '2018-09-02'),
(119, 'BNMB', '10.00', 'kg', 'sunshine', '2018-09-02'),
(120, 'LOL', '10.00', 'kg', 'sunshine', '2018-09-02'),
(121, 'VB', '15.00', 'litre', 'sunshine', '2018-09-02'),
(122, 'SYRUP', '10.00', 'litre', 'sunshine', '2018-09-02'),
(123, 'JAGUNG', '15.00', 'grain', 'sedap', '2018-09-02'),
(128, 'ZXC', '8.00', 'kg', 'sedap', '2018-09-03'),
(130, 'SYRUP', '2.00', 'litre', 'sunshine', '2018-09-02'),
(131, 'SALT', '5.00', 'kg', 'sunshine', '2018-09-03'),
(132, 'SALT', '10.00', 'kg', 'sunshine', '2018-09-03'),
(133, 'SUGAR', '5.00', 'kg', 'mesti', '2018-09-03'),
(134, 'SALT', '10.00', 'kg', 'sunshine', '2018-09-03'),
(135, 'SUGAR', '2.00', 'kg', 'mesti', '2018-09-03'),
(136, 'VB', '3.00', 'litre', 'sunshine', '2018-09-03'),
(138, 'VB', '2.00', 'litre', 'sunshine', '2018-09-03'),
(139, 'SALT', '3.00', 'kg', 'sunshine', '2018-09-03'),
(140, 'VB', '2.00', 'litre', 'sunshine', '2018-09-03'),
(141, 'SALT', '2.00', 'kg', 'sunshine', '2018-09-03'),
(142, 'SALT', '2.00', 'kg', 'sunshine', '2018-09-02'),
(143, 'SUGAR', '5.00', 'kg', 'mesti', '2018-09-01'),
(144, 'EGGS', '11.00', 'grain', 'sedap', '2018-09-01'),
(145, 'VB', '2.00', 'litre', 'sunshine', '2018-09-04'),
(146, 'BROWN SUGAR', '15.00', 'kg', 'sunshine', '2018-09-04'),
(148, 'CHOCOLATE', '12.00', 'kg', 'sunshine', '2018-09-04'),
(149, 'LOL', '12.00', 'kg', 'sunshine', '2018-09-04'),
(150, 'LOL', '5.00', 'kg', 'sunshine', '2018-09-01'),
(151, 'BROWN SUGAR', '10.00', 'kg', 'sunshine', '2018-09-06'),
(152, 'CHOCOLATE', '5.00', 'kg', 'sunshine', '2018-09-06'),
(153, 'SYRUP', '6.00', 'litre', 'sunshine', '2018-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(255) NOT NULL,
  `password` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `PRODUCT_ID` int(255) NOT NULL AUTO_INCREMENT,
  `PRODUCT_NAME` varchar(255) NOT NULL,
  `PRODUCT_RATE` decimal(65,2) NOT NULL,
  `PRODUCT_QUANTITY` decimal(65,2) NOT NULL,
  `PRODUCT_UNIT` varchar(255) NOT NULL,
  `PRODUCT_BRAND` varchar(255) NOT NULL,
  `PRODUCT_STATUS` varchar(255) NOT NULL,
  `PRODUCT_WARN` decimal(60,2) NOT NULL,
  `PRODUCT_DATE` date DEFAULT NULL,
  `PRODUCT_CHECK` int(11) DEFAULT NULL,
  `PRODUCT_CHECKCOUNT` int(11) DEFAULT NULL,
  PRIMARY KEY (`PRODUCT_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PRODUCT_ID`, `PRODUCT_NAME`, `PRODUCT_RATE`, `PRODUCT_QUANTITY`, `PRODUCT_UNIT`, `PRODUCT_BRAND`, `PRODUCT_STATUS`, `PRODUCT_WARN`, `PRODUCT_DATE`, `PRODUCT_CHECK`, `PRODUCT_CHECKCOUNT`) VALUES
(46, 'LOL', '12.00', '70.00', 'kg', 'sunshine', 'Available', '10.00', '2018-09-03', 0, 0),
(47, 'ZXC', '12.00', '5.00', 'kg', 'sedap', 'Available', '1.00', '2018-08-23', 0, 0),
(48, 'XCV', '12.00', '5.06', 'grain', 'sunshine', 'Available', '1.00', '2018-08-07', 0, 0),
(49, 'BNMB', '2.00', '13.00', 'kg', 'sunshine', 'Available', '1.00', '2018-08-31', 0, 0),
(51, 'JAGUNG', '12.00', '14.00', 'grain', 'sedap', 'Available', '5.00', '2018-08-24', 0, 0),
(52, 'EGGS', '12.00', '5.56', 'grain', 'sedap', 'Available', '2.00', '2018-09-02', 0, 0),
(53, 'FLOUR', '12.00', '19.00', 'kg', 'sedap', 'Available', '5.00', '2018-09-02', 0, 0),
(54, 'SALT', '12.00', '12.00', 'kg', 'sunshine', 'Available', '5.00', '2018-09-04', 0, 0),
(55, 'VB', '10.00', '8.00', 'litre', 'sunshine', 'Available', '2.00', '2018-09-04', 0, 0),
(57, 'SUGAR', '12.00', '12.00', 'kg', 'mesti', 'Available', '5.00', '2018-09-04', 0, 0),
(58, 'BROWN SUGAR', '50.00', '3.00', 'kg', 'sunshine', 'Not_Available', '10.00', '2018-08-31', 1, 1),
(59, 'SYRUP', '2.00', '0.00', 'litre', 'sunshine', 'Not_Available', '1.00', '2018-08-27', 1, 1),
(60, 'CHOCOLATE', '12.00', '4.00', 'kg', 'sunshine', 'Not_Available', '5.00', '2018-09-02', 1, 1),
(62, 'TESTING', '2.00', '100.00', 'gram', 'LV', 'Available', '50.00', '2018-09-06', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

DROP TABLE IF EXISTS `product_order`;
CREATE TABLE IF NOT EXISTS `product_order` (
  `cust_ID` int(11) NOT NULL AUTO_INCREMENT,
  `cust_Name` text NOT NULL,
  `cust_HPN` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `type` text NOT NULL,
  `flavour` text NOT NULL,
  `filling` text NOT NULL,
  `shape` text NOT NULL,
  `size` text NOT NULL,
  `board` text NOT NULL,
  `price` double NOT NULL,
  `orderDate` date NOT NULL,
  `dispatchDate` date NOT NULL,
  `dispatchTime` text NOT NULL,
  `dispatchDay` text NOT NULL,
  `dispatchPlace` text NOT NULL,
  `remark` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`cust_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=354 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`cust_ID`, `cust_Name`, `cust_HPN`, `quantity`, `type`, `flavour`, `filling`, `shape`, `size`, `board`, `price`, `orderDate`, `dispatchDate`, `dispatchTime`, `dispatchDay`, `dispatchPlace`, `remark`, `status`) VALUES
(117, 'LILY', '0124589678', 1, 'Sponge', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 56, '2018-08-27', '2018-08-30', '02:30', 'PM', 'shop', 'write Happy Birthday', 'deliver'),
(118, 'ALEX', '0145689876', 2, 'ice cream', 'Dark Chocolate', 'Strawberry', 'Square', '7 inch', '9 inch', 56, '2018-08-27', '2018-08-29', '12:00', 'PM', 'shop', '', 'deliver'),
(120, 'JACK', '0145689876', 1, 'Sponge', 'Original', 'Chocolate', 'Round', '6 inch', '8 inch', 56, '2018-08-27', '2018-08-31', '20:00', 'PM', 'SHOP', '', 'deliver'),
(242, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(119, 'ABU', '0124568973', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'deliver'),
(236, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(237, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(179, 'ABU', '0124568973', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'done'),
(180, 'ABU', '0164588987', 1, 'Tart', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'done'),
(181, 'ABU', '0124568973', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'done'),
(182, 'KIM', '0124568973', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'done'),
(183, 'JOHNSON', '0124568973', 1, '30 Cupcake', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'done'),
(184, 'ALEX', '0136987899', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'done'),
(185, 'ABU', '0124568973', 1, 'Mousse', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(243, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(200, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(201, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(202, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(244, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(223, 'ABU', '0124568973', 1, 'Mousse', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(205, 'ABU', '0124568973', 1, 'Mousse', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(206, 'ABU', '0124568973', 1, 'Mousse', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(227, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(224, 'ABU', '0124568973', 1, 'Mousse', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(225, 'ABU', '0124568973', 1, 'Mousse', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(228, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(238, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(239, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(240, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(241, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(245, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(246, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(247, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(248, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(249, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(250, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(251, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(252, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(253, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(254, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(255, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(256, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(257, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(258, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(259, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(260, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(261, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(262, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(263, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(264, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(265, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(266, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(267, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(268, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(269, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(270, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(271, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(272, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(273, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(274, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(275, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(276, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(277, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(278, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(279, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(280, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(281, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(282, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(283, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(284, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(285, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(286, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(287, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(288, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(289, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(290, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(291, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(292, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(293, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(294, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(295, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(296, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(297, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(298, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(299, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(300, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(301, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(302, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(303, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(304, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(305, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(306, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(307, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(308, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(309, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(310, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(311, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(312, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(313, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(314, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(315, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(316, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(317, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(318, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(319, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(320, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(321, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(322, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(323, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(324, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(325, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(326, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(327, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(328, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(329, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(330, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(331, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(332, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(333, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(334, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(335, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(336, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(337, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(338, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(339, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(340, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(341, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(342, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(343, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(344, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(345, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(346, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(347, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(348, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(349, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(350, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(351, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(352, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending'),
(353, 'LOW', '0147789987', 1, 'Cheese', 'Chocolate', 'Chocolate', 'Round', '7 inch', '9 inch', 65, '2018-08-27', '2018-08-29', '11:00', 'AM', 'SHOP', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `stock_notification`
--

DROP TABLE IF EXISTS `stock_notification`;
CREATE TABLE IF NOT EXISTS `stock_notification` (
  `PRODUCT_NAME` varchar(255) NOT NULL,
  `PRODUCT_BRAND` varchar(255) NOT NULL,
  `PRODUCT_STATUS` varchar(255) NOT NULL,
  `PRODUCT_CHECK` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_notification`
--

INSERT INTO `stock_notification` (`PRODUCT_NAME`, `PRODUCT_BRAND`, `PRODUCT_STATUS`, `PRODUCT_CHECK`) VALUES
('CHOCOLATE', 'sunshine', 'Not_Available', 1),
('SYRUP', 'sunshine', 'Not_Available', 1),
('BROWN SUGAR', 'sunshine', 'Not_Available', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
