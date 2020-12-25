-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2019 lúc 12:05 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoponline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `Position` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`, `Position`) VALUES
(1, 'Laptop', 4),
(2, 'USB', 5),
(3, 'Điện Thoại Di Động', 1),
(4, 'Ram', 2),
(5, 'Ipad', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `GroupID` int(11) NOT NULL,
  `GroupName` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`GroupID`, `GroupName`) VALUES
(1, 'Admin'),
(2, 'Moder'),
(3, 'Khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufacturers`
--

CREATE TABLE `manufacturers` (
  `ManufacturerID` int(11) NOT NULL,
  `ManufacturerName` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `manufacturers`
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
-- Cấu trúc bảng cho bảng `orderitems`
--

CREATE TABLE `orderitems` (
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orderitems`
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
-- Cấu trúc bảng cho bảng `orders`
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
-- Đang đổ dữ liệu cho bảng `orders`
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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ManufacturerID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ImageUrl` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL DEFAULT '0',
  `Quantity` int(11) NOT NULL DEFAULT '0',
  `Description` varchar(1000) NOT NULL,
  `StatusHeader` text,
  `ViewCount` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ProductID`, `ManufacturerID`, `CategoryID`, `ProductName`, `ImageUrl`, `Price`, `Quantity`, `Description`, `StatusHeader`, `ViewCount`) VALUES
(1, 1, 1, 'Sony VAIO SVE11115EG/P,B', 'lab_vaio.jpg', 12000000, 30, 'Laptop vaio product of sony', '-50%', 0),
(2, 6, 5, 'Appl', '111413087lab_dell.jpg', 7000000, 30, 'Product of apple ', '-20%', 0),
(4, 2, 1, 'Laptop apple', 'lab_apple.jpg', 60000000, 12, 'Product of apple', 'free', 6),
(5, 2, 3, 'Mobi phone LG', 'dt_LG.jpg', 21000000, 20, 'Product of LG', '', 0),
(6, 2, 1, 'Laptop asus', 'lab_asus.jpg', 12000000, 500, 'Product of asus', '', 100),
(7, 2, 1, 'COMPAQ CQ43-301TU QG494PA', 'lab_compac.jpg', 2121000, 30, 'mfalskdjl', '', 10),
(8, 1, 1, 'Laptop dell', 'lab_dell.jpg', 2300000, 200, 'aksjs;dlsa', '', 211),
(9, 1, 1, 'Laptop hp', 'lab_hp.jpg', 20012200, 9, 'jdjddhdjd', '50%', 1013),
(10, 1, 1, 'Laptop toshiba', 'lab_toshiba.jpg', 14000000, 50, 'fasdkfa;sldkfja', '', 90),
(11, 1, 2, 'USB', 'usb1.jpg', 29000000, 20, 'kajsd;lskj;dl', '', 0),
(12, 1, 2, 'USB', 'usb2.jpg', 2050000, 69, 'as;ldkjf;aslkdjfals', '', 0),
(13, 1, 3, 'Nokia 2200', '23282mcith_00000000000Nokia_6303i_b.jpg', 1000000000, 20, 'Sản phẩm của nokia', '', 0),
(14, 2, 4, '   1GB DDR3 Kingston', '129864039_thumb_team_elite_2gbb.jpg', 195000, 30, 'Tính năng nổi bật:\r\nBus 1333Mhz  PC 10600   KINGSTON ', '', 0),
(15, 6, 5, 'Apple Ipad NEW 64G Wifi ', '221898259_new-ipadd.jpg', 12000000, 50, '', '', 0),
(17, 6, 5, 'iPad3', '136833343_ipad-3-4thh.jpg', 13000000, 30, 'sản phẩm của apple', '', 0),
(18, 6, 5, 'Ipad 4', '1504719595_ipad-3-4thh.jpg', 9000000, 15, 'sản phẩm của apple', '', 0),
(19, 4, 2, '4GB Transcend JF500', '3513649_cz377.jpg', 95000, 50, 'USB 4GB Transcend JF500', '', 0),
(20, 3, 4, '2GB DDR3 Kingston HyperX 1600', '316946244_khx16c9b11.jpg', 300000, 19, 'Bus 1600Mhz  PC 12800   KINGSTON', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UserID`, `GroupID`, `FullName`, `UserName`, `PassWord`, `Email`) VALUES
(1, 1, 'Võ Thị Mỹ Hiền', 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'myhien@yahoo.com'),
(3, 3, 'Nguyễn Hồng Nguyên', 'nguyen', 'e10adc3949ba59abbe56e057f20f883e', 'nhnguyen@yahoo.com'),
(6, 1, 'Như Ái', 'nhuai', 'e10adc3949ba59abbe56e057f20f883e', 'nhuai@yahoo.com'),
(18, 1, 'Mai thảo', 'mthao', 'e10adc3949ba59abbe56e057f20f883e', 'mthao@gmail.com'),
(22, 3, 'Ngọc', 'ngoc', 'e10adc3949ba59abbe56e057f20f883e', 'ngoc@gmail.com'),
(23, 3, 'My Hiền', 'hien', 'e10adc3949ba59abbe56e057f20f883e', 'mietmai051986@yahoo.com'),
(5, 1, 'admin', 'admin1', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(24, 3, '3', '1', 'c4ca4238a0b923820dcc509a6f75849b', 'ds');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Chỉ mục cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`ManufacturerID`);

--
-- Chỉ mục cho bảng `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`OrderID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `UserID` (`UserID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `ManufacturerID` (`ManufacturerID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `GroupID` (`GroupID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `ManufacturerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
