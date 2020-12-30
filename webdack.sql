-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 19, 2020 lúc 04:04 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdack`
--
CREATE DATABASE IF NOT EXISTS `webdack` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `webdack`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `Position` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`, `Position`) VALUES
(6, 'Laptop', 2),
(2, 'USB', 5),
(3, 'Điện Thoại', 1);

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
(13, 'Dell'),
(10, 'Samsung'),
(11, 'Iphone'),
(14, 'Asus'),
(15, 'Huawei'),
(17, 'Kingston'),
(18, 'Xiaomi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderitems`
--

CREATE TABLE `orderitems` (
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orderitems`
--

INSERT INTO `orderitems` (`OrderID`, `ProductID`, `Quantity`) VALUES
(48, 52, 1),
(48, 35, 1),
(54, 69, 2),
(56, 72, 1),
(56, 71, 1);

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
(54, 34, '2020-05-08 12:23:12', '123ss', '13214', 15380000, b'0'),
(48, 35, '2020-04-29 23:03:52', 'ggdy24234', '13214', 41980000, b'0'),
(56, 36, '2020-07-19 20:57:35', '113 Bến lức, Long An', '12345', 27980000, b'0');

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
  `Price` int(11) NOT NULL DEFAULT 0,
  `Quantity` int(11) NOT NULL DEFAULT 0,
  `Description` varchar(1000) NOT NULL,
  `Body` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ProductID`, `ManufacturerID`, `CategoryID`, `ProductName`, `ImageUrl`, `Price`, `Quantity`, `Description`, `Body`) VALUES
(69, 18, 3, 'Xiaomi Redmi K20', '214121723redmik20pro.jpg', 7690000, 15, 'Xiaomi redmi K20 Pro', ''),
(70, 18, 3, 'Xiaomi Note7', '916006156redminote7.jpg', 4990000, 12, '', ''),
(71, 13, 3, 'Xiaomi Note8', '1023358251redminote8.jpg', 5490000, 15, 'Xiaomi Redmi Note 8 2019', ''),
(72, 14, 6, 'Laptop Asus Tuf FX505', '394609427tuffx505.jpg', 22490000, 15, 'Dòng Tuf Gaming thế hệ mới năm 2020', ''),
(51, 11, 3, 'iPhone Xs Max 256GB', 'xsmax256gb.png', 22000000, 24, 'Sau 1 năm mong chờ, chiếc smartphone cao cấp nhất của Apple đã chính thức ra mắt mang tên iPhone Xs Max. Máy các trang bị các tính năng cao cấp nhất từ chip A12 Bionic, dàn loa đa chiều cho tới camera kép tích hợp trí tuệ nhân tạo.', 'Màn hình: OLED, 6.5\", Super Retina.\r\nHệ điều hành:	iOS 12. \r\nCamera sau: Chính 12 MP & Phụ 12 MP.'),
(52, 14, 6, 'Laptop Asus TUF GX219', 'tuf.png', 17990000, 30, 'Dòng Gaming cao cấp giá phù hợp vs trang bị xử lý AMD Ryen mang lại hiệu năng tốt nhất cho người dùng.', ''),
(64, 18, 3, 'Xiaomi Note 10', '1766250350minote10.png', 15690000, 14, '', ''),
(65, 14, 6, 'Laptop Asus MothershipU', '317351002mothership.jpg', 179990000, 4, 'Dòng máy cao cấp với hiệu năng vượt trội đáp ứng mọi nhu cầu ', ''),
(66, 14, 6, 'Laptop Asus Zenbook15', '1596834775zenbook15.jpg', 24590000, 12, 'Phù hợp công việc, có màn hình cảm ứng ở touchpad', ''),
(49, 13, 6, 'Laptop Dell G7 Gaming', 'dellg7.png', 39990000, 20, 'Laptop Dell G7 là dòng máy tính xách tay mới của Dell trong năm 2018 với cấu hình cực cao bao gồm vi xử lý i7 8550U thế hệ thứ 8 có hiệu năng vượt trội, card màn hình rời Radeon 520 và 8 GB RAM. Với cấu hình mạnh mẽ máy có thể chạy tốt các ứng dụng phục vụ cho công việc, học tập, xử lý đồ hoạ cũng như chơi game ở mức cao.', ''),
(58, 17, 2, 'USB Kingston 16gb', '1103603339kingston1.jpg', 79000, 33, '', ''),
(54, 15, 3, 'Huawei 7i 2019', '912952734hw7i.jpg', 9350000, 25, 'Huawei 7i là dòng sản phẩm trang bị với 4 camera 64mp cùng với hệ điều hành anhdroid 9.0', 'Hệ điều hành: Android 9.0(Pie)\r\nRam: 4gb\r\nCamera: 64mp, Chụp ngược sáng'),
(56, 15, 3, 'Huawei P30 Pro', '1178345072hwp30.jpg', 28990000, 21, 'P30 pro là  dòng điện thoại cao cấp với hiệu năng xử lí cao cho phép đáp ứng mọi nhu cầu sử dụng của người dùng.', ''),
(42, 14, 6, 'Laptop Asus Rog GF28', 'rog.jpg', 32490000, 20, 'Dòng laptop gaming phù hợp cho mọi thể loại từ giải trí đến đồ họa nặng.', ''),
(61, 15, 3, 'Huawei P30 Lite', '1411149976p30lite.jpg', 7790000, 12, '', ''),
(62, 18, 3, 'Xiaomi 9T', '1241638982mi9t.jpg', 8990000, 22, '', ''),
(63, 18, 3, 'Xiaomi Note9', '2111838740minote9.jpg', 9890000, 15, '', ''),
(45, 13, 6, 'Laptop Dell Inspiration', 'inspiration.jpg', 14590000, 10, 'Laptop Dell Inspiration 2019 là bản nâng cấp của dòng Inspiration trước đây vs hiệu năng xử lí và cải thiện màu sắc mang lại hình ảnh chân thật hơn', ''),
(55, 15, 3, 'Huawei Nova 5T91', '1893634178hwnova5t.png', 5690000, 30, 'Dòng sản phẩm tầm trung với trang bị camera 32mp mang lại những tấm hình đặc sắc, cùng với chip Snapdragon hiệu năng xử lí mạnh mẽ', ''),
(46, 13, 6, 'Laptop Dell G3', 'dellg3.png', 25590000, 20, 'Thiết kế thanh lịch phù hợp, được trang bị cấu hình mạnh để chạy tốt các ứng dụng văn phòng, cho phản hồi các thao tác kéo thả trong photoshop, AI khá nhanh rất phù hợp cho sinh viên, nhân viên văn phòng.', ''),
(53, 11, 3, 'IPhone11 Pro Max', '487488884iphone11pm.jpg', 39990000, 20, 'Là dòng sản phẩm mới của Apple với trang bị 3 Camera AI và hiệu năng của chip A13 mang đến sự trải nghiệm mượt mà cho người dùng', ''),
(47, 14, 6, 'Laptop Asus VivoBook', 'vivobook.png', 11490000, 40, 'Asus Vivobook là chiếc laptop sở hữu cấu hình cho hiệu năng hoạt động ổn định với chip Intel Core i3 thế hệ thứ 8, 4 GB RAM, ổ cứng lưu trữ HDD 1 TB. Phù hợp cho công việc giải trí nhẹ hoặc cho dân văn phòng vs trọng lượng nhẹ giúp việc di chuyển dễ dàng hơn', ''),
(41, 15, 3, 'Huawei Y7 Pro', 'huaweiy7-2019.png', 3490000, 10, 'Hoàn toàn lột xác so với phiên bản tiền nhiệm, Y7 Pro (2019) đã giúp Huawei có thêm điểm cộng trong mắt người dùng nhờ việc đem thiết kế mặt lưng gradient, màn hình giọt nước và pin khủng lên chiếc smartphone giá rẻ của mình.', 'Màn hình: IPS LCD, 6.26\", HD+. Hệ điều hành:	Android 8.1 (Oreo)'),
(67, 14, 6, 'Laptop Asus Zenbook PDuo', '2054651690zenproduo.jpg', 32490000, 10, 'Dòng nâng cấp giúp bạn thiết kế thuận tiện hơn với màn hình phụ cảm ứng IPS.', ''),
(68, 10, 3, 'Samsung Note10+', '1948686706note10+.jpg', 18890000, 20, 'Note 10+', ''),
(40, 11, 3, 'IPhone X 64Gb', 'x64gb.jpg', 8990000, 30, 'Mặc dù giữ nguyên vẻ bề ngoài so với dòng điện thoại iPhone đời trước, bù lại iPhone 7 Plus 32GB lại được trang bị nhiều nâng cấp đáng giá như camera kép đầu tiên cũng như cấu hình mạnh mẽ.', 'Màn hình: LED-backlit IPS LCD, 5.5\", Retina HD\r\nHệ điều hành: iOS 12'),
(35, 10, 3, 'Samsung Galaxy S10+', 's10+128gb.png', 23990000, 10, 'Samsung Galaxy S10+ (128Gb) đã ra mắt và thực sự người dùng khó có thể cường lại sức hút kỳ lạ tới từ siêu phẩm này của Samsung và giờ đây hãng sản xuất smartphone tới từ Hàn Quốc tiếp tục tung ra phiên bản Samsung Galaxy S10+ 128GB Bạc Đa Sắc thậm chí còn thu hút hơn các phiên bản cũ.', ''),
(57, 11, 3, 'IPhone SE 2020', '395666813iphonese.jpg', 12490000, 15, '', ''),
(59, 17, 2, 'USB Kingston 64gb', '1768035299kingston2.jpg', 320000, 24, '', ''),
(60, 17, 2, 'USB Kingston TypeC', '790870843usbtypec.jpg', 180000, 21, '', ''),
(36, 10, 3, 'Samsung Galaxy A50 64GB', 'samsungA50.png', 6990000, 20, 'Samsung Galaxy A50 là chiếc smartphone tầm trung mới của Samsung trong năm 2019 với nhiều tính năng hấp dẫn, đặc biệt là có cả cảm biến vân tay dưới màn hình.', 'Màn hình: Super AMOLED, 6.4\", Full HD+\r\nHệ điều hành:	Android 9.0 (Pie)'),
(37, 10, 3, 'Samsung Galaxy A70', 'samsungA70.png', 6990000, 12, 'Samsung Galaxy A70 là một phiên bản phóng to của chiếc Samsung Galaxy A50 đã ra mắt trước đó với nhiều cải tiến tới từ bên trong.', 'Màn hình: Super AMOLED, 6.7\", Full HD+. Hệ điều hành:	Android 9.0 (Pie)'),
(38, 11, 3, 'IPhone Xr 64GB', 'IphoneXRblack.png', 11990000, 10, 'Là  chiếc điện thoại iPhone có mức giá dễ chịu, phù hợp với nhiều khách hàng hơn, iPhone Xr vẫn được ưu ái trang bị chip Apple A12 mạnh mẽ, màn hình tai thỏ cùng khả năng chống nước chống bụi.', 'Màn hình: IPS LCD, 6.1\", Liquid Retina. Hệ điều hành:	iOS 12\r\nMàu: Đen'),
(73, 14, 6, 'Laptop Asus Tuf A17', '842685614tufgamingA17.jpg', 23690000, 18, 'Dòng gaming Asus với cấu hình mạnh mẽ', ''),
(74, 17, 2, 'Usb Kingston 3.1', '663795927usb128gb.jpg', 320000, 12, '', ''),
(75, 17, 2, 'Usb Kingston 32gb', '889989210usb170k.jpg', 170000, 25, '', ''),
(76, 18, 3, 'Xiaomi Alpha ', '583499760xiaomialpha.jpg', 62890000, 20, 'Màn hình hiển thị cả 2 mặt, độ phân giải hình ảnh 8k', ''),
(77, 10, 3, 'Samsung S20+ Ultra', '1661935832s20+.png', 29990000, 32, 'Camera 128mp với khả năng zoom tới 100x', ''),
(78, 10, 3, 'Samsung Z Flip', '536396140zlip.jpg', 50000000, 22, 'Thiết kế ấn tượng với khả năng gập lại giúp máy gọn gàng hơn.', '');

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
(34, 1, 'Trần Kim Hiếu', 'hieutk', '202cb962ac59075b964b07152d234b70', 'kimhieu1314@gmail.com'),
(35, 3, 'Phạm Minh Luân', 'Luan', '202cb962ac59075b964b07152d234b70', 'play4fun@yahoo.com'),
(36, 2, 'Hữu', 'huupt', '202cb962ac59075b964b07152d234b70', 'huupt@gmail.com');

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
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `ManufacturerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
