-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 06:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cnweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `Position` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`, `Position`) VALUES
(1, 'Laptop', 4),
(2, 'USB', 5),
(3, 'Điện Thoại Di Động', 1),
(4, 'Ram', 2),
(5, 'Ipad', 3);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `GroupID` int(11) NOT NULL,
  `GroupName` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`GroupID`, `GroupName`) VALUES
(1, 'Admin'),
(2, 'Moder'),
(3, 'Khách hàng');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `ManufacturerID` int(11) NOT NULL,
  `ManufacturerName` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`ManufacturerID`, `ManufacturerName`) VALUES
(1, 'Sony'),
(2, 'Dell'),
(3, 'Compaq'),
(4, 'Hp'),
(5, 'Nokia'),
(6, 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`OrderID`, `ProductID`, `Quantity`) VALUES
(1, 1, 20),
(1, 2, 9),
(1, 4, 1),
(1, 5, 1),
(1, 6, 1),
(1, 10, 1),
(1, 11, 1),
(1, 12, 3),
(9, 11, 3),
(9, 12, 1),
(9, 13, 1),
(10, 8, 1),
(10, 9, 1),
(10, 10, 1),
(10, 11, 1),
(10, 12, 1),
(10, 13, 1),
(11, 12, 1),
(11, 13, 1),
(12, 8, 1),
(12, 9, 1),
(14, 11, 1),
(14, 12, 1),
(14, 13, 1),
(15, 1, 1),
(15, 11, 1),
(15, 12, 1),
(15, 13, 2),
(16, 14, 6),
(16, 17, 8),
(16, 19, 1),
(16, 20, 1),
(17, 9, 8),
(17, 6, 2),
(17, 10, 1),
(17, 8, 1),
(17, 1, 4),
(17, 20, 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `AddedDate` datetime NOT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Sum` int(11) DEFAULT NULL,
  `Status` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `UserID`, `AddedDate`, `Address`, `Phone`, `Sum`, `Status`) VALUES
(1, 1, '2014-10-22 22:11:26', '692 Lý Chính Thắng, F9, Q3', NULL, NULL, b'0'),
(9, 1, '2014-11-04 23:27:30', 'Lâm Đồng', '01239821963', NULL, b'0'),
(10, 1, '2014-11-05 10:34:43', 'Vũng Tàu', '0665163526', 6, b'0'),
(11, 1, '2014-11-06 10:39:32', 'Hải Dương', '3828769', 2, b'0'),
(12, 1, '2014-11-07 10:48:30', '695, Đường 30/4, F9, TP Vũng Tàu', '0919219119', 2, b'0'),
(14, 1, '2014-12-25 11:53:59', '169 Hai Bà Trưng, F3, Q 3', '0989757211', 1031050000, b'0'),
(15, 1, '2014-12-26 18:16:11', 'Trần Hưng Đạo', '09876545432', 2043050000, b'0'),
(16, 18, '2015-01-10 10:05:13', '123 Lạc Long Quân', '1900000000', 105565000, b'0'),
(17, 24, '2019-12-05 03:44:56', 'hồ chí minh', '931039092', 249297600, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ManufacturerID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ImageUrl` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL DEFAULT 0,
  `Quantity` int(11) NOT NULL DEFAULT 0,
  `Description` varchar(1000) NOT NULL,
  `StatusHeader` text DEFAULT NULL,
  `ViewCount` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ManufacturerID`, `CategoryID`, `ProductName`, `ImageUrl`, `Price`, `Quantity`, `Description`, `StatusHeader`, `ViewCount`) VALUES
(1, 1, 1, 'Sony VAIO SVE11115EG/P,B', 'lab_vaio.jpg', 12000000, 30, 'Laptop vaio product of sony', '-50%', 0),
(2, 6, 5, 'Appl', '111413087lab_dell.jpg', 7000000, 30, 'Product of apple ', '-20%', 0),
(4, 2, 1, 'Laptop apple', 'lab_apple.jpg', 60000000, 12, 'Product of apple', 'free', 6),
(5, 2, 3, 'Mobi phone LG', 'dt_LG.jpg', 21000000, 20, 'Product of LG', '', 0),
(6, 2, 1, 'Laptop asus', 'lab_asus.jpg', 12000000, 500, 'Product of asus', '', 100),
(7, 2, 1, 'COMPAQ CQ43-301TU QG494PA', 'lab_compac.jpg', 2121000, 30, 'mfalskdjl', '', 10),
(8, 1, 1, 'Laptop dell', 'lab_dell.jpg', 2300000, 198, 'aksjs;dlsa', '', 211),
(9, 1, 1, 'Laptop hp', 'lab_hp.jpg', 20012200, 9, 'jdjddhdjd', '50%', 1013),
(10, 1, 1, 'Laptop toshiba', 'lab_toshiba.jpg', 14000000, 50, 'fasdkfa;sldkfja', '', 90),
(11, 1, 2, 'USB', 'usb1.jpg', 29000000, 20, 'kajsd;lskj;dl', '', 0),
(12, 1, 2, 'USB', 'usb2.jpg', 2050000, 69, 'as;ldkjf;aslkdjfals', '', 0),
(13, 1, 3, 'Nokia 2200', '23282mcith_00000000000Nokia_6303i_b.jpg', 1000000000, 20, 'Sản phẩm của nokia', '', 0),
(14, 2, 4, '   1GB DDR3 Kingston', '129864039_thumb_team_elite_2gbb.jpg', 195000, 30, 'Tính năng nổi bật:\r\nBus 1333Mhz  PC 10600   KINGSTON ', '', 0),
(15, 6, 5, 'Apple Ipad NEW 64G Wifi ', '221898259_new-ipadd.jpg', 12000000, 50, '', '', 0),
(17, 6, 5, 'iPad3', '136833343_ipad-3-4thh.jpg', 13000000, 30, 'sản phẩm của apple', '', 0),
(18, 6, 5, 'Ipad 4', '1504719595_ipad-3-4thh.jpg', 9000000, 14, 'sản phẩm của apple', '', 0),
(19, 4, 2, '4GB Transcend JF500', '3513649_cz377.jpg', 95000, 47, 'USB 4GB Transcend JF500', '', 1),
(20, 3, 4, '2GB DDR3 Kingston HyperX 1600', '316946244_khx16c9b11.jpg', 300000, 15, 'Bus 1600Mhz  PC 12800   KINGSTON', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `PassWord` varchar(32) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `GroupID`, `FullName`, `UserName`, `PassWord`, `Email`) VALUES
(5, 1, 'admin', 'admin1', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(25, 1, 'Trần Kim Hiếu', 'hieutk', '202cb962ac59075b964b07152d234b70', 'kimhieu1314@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`ManufacturerID`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`OrderID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `ManufacturerID` (`ManufacturerID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `GroupID` (`GroupID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `ManufacturerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
