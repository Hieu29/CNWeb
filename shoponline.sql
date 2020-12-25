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
(6, 'Apple'),
(7, 'Asus');

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
(14, 2, 4, '1GB DDR3 Kingston', '129864039_thumb_team_elite_2gbb.jpg', 195000, 30, 'Tính năng nổi bật:\r\nBus 1333Mhz  PC 10600   KINGSTON ', '', 0),
(15, 6, 5, 'Apple Ipad NEW 64G Wifi ', '221898259_new-ipadd.jpg', 12000000, 50, '', '', 0),
(17, 6, 5, 'iPad3', '136833343_ipad-3-4thh.jpg', 13000000, 30, 'sản phẩm của apple', '', 0),
(18, 6, 5, 'Ipad 4', '1504719595_ipad-3-4thh.jpg', 9000000, 15, 'sản phẩm của apple', '', 0),
(19, 4, 2, '4GB Transcend JF500', '3513649_cz377.jpg', 95000, 50, 'USB 4GB Transcend JF500', '', 0),
(20, 3, 4, '2GB DDR3 Kingston HyperX 1600', '316946244_khx16c9b11.jpg', 300000, 19, 'Bus 1600Mhz  PC 12800   KINGSTON', '', 0),
(21, 5, 3, 'Điện thoại Nokia 8.3 5G', 'nokia-83.jpg', 9490000, 4, 'Nokia 8.3 được trang bị con chip Snapdragon 765G tích hợp modem 5G hỗ trợ đa băng tần, giúp Nokia 8.3 trở thành thiết bị đầu tiên có khả năng kết nối 5G trên toàn cầu (theo Nokia).', '-26%', 112),
(22, 5, 3, 'Điện thoại Nokia 3.4', 'nokia-34-xam.jpg', 3390000, 3, 'Nokia 3.4 sở hữu màn hình IPS LCD kích thước 6.39 inch độ phân giải HD+, màn hình có thiết kế theo kiểu đục lỗ đang là xu hướng', '-8%', 1211),
(23, 5, 3, 'Điện thoại Nokia 5.3', 'nokia-53-xam.jpg', 2890000, 4, 'Nokia 5.3 gây ấn tượng bởi màn hình cực rộng lên đến 6.55 inch cung cấp một không gian hiển thị thoáng đãng cho bạn thoải mái chơi game hay xem video.', '', 98),
(24, 5, 3, 'Điện thoại Nokia 8000 4G', 'nokia-8000-den-new.jpg', 1790000, 3, 'Nokia 8000 4G được thiết kế để tỏa sáng. Lớp hoàn thiện khung giữa mạ chrome sang trọng hoàn thiện vẻ ngoài.', '', 987),
(25, 5, 3, 'Điện thoại Nokia C2', 'nokia-c2-xanh.jpg', 1690000, 4, 'Điểm nâng cấp đầu tiên của Nokia C2 so với thế hệ trước Nokia C1 đó là kích thước màn hình, nay đã được mở rộng lên đến 5.7 inch.', '', 654),
(26, 2, 1, 'Laptop Dell Inspiron 5593', 'dell-inspiron-5593-i5-1035g1-8gb-256gb-2gb-mx230-w-213570.jpg', 17990000, 3, 'Laptop Dell Inspiron 5593 sở hữu ngoại hình với lớp vỏ nhựa màu bạc thanh lịch, thời trang, hoàn thiện chắc chắn và vát mỏng đều ở các góc cạnh. Tuy nhiên, trọng lượng máy lên đến 2.05 kg, không quá nặng đối với những ai phải thường xuyên mang laptop ra ngoài làm việc.', '', 11233),
(27, 2, 1, 'Laptop Dell Vostro 3590', 'dell-vostro-3590-i7-grmgk2-220718.jpg', 20990000, 'Laptop Dell Vostro 3590 i7 (GRMGK2) là phiên bản laptop đồ họa kĩ thuật có thiết kế hiện đại, cấu hình khỏe với vi xử lí gen 10 và card đồ họa rời. Đây chính là chiếc laptop đáng cân nhắc đối với dân đồ họa hay sinh viên khối ngành kĩ thuật.', '', 9877),
(28, 2, 1, 'Laptop Dell Vostro 5581', 'dell-vos15-5581-i5-8265-4gb-1tb-mx130-office-vrf6.jpg', 13990000, 5, 'Laptop Dell Vostro 5581 có thiết kế đơn giản quen thuộc của thương hiệu Dell, chiếc laptop văn phòng này chủ yếu chú trọng đến cấu hình mạnh để đem đến hiệu quả làm việc cao. Bên cạnh đó, máy còn được trang bị card đồ họa rời giúp việc thiết kế và chơi game tốt hơn.', '-20%', 984),
(29, 2, 1, 'Laptop Dell Inspiron 3493', 'dell-inspiron-3493-i5-n4i5122w-222088.jpg', 15290000, 4, 'Laptop Dell Inspiron 3493 i5 (N4I5122W) là mẫu máy laptop văn phòng đến từ nhà Dell. Hướng tới khách hàng là học sinh sinh viên và nhân viên văn phòng, máy được trang bị cấu hình đủ dùng cho công việc lẫn giải trí thường ngày.', '', 2326),
(30, 2, 1, 'Laptop Dell Inspiron 15 5584', 'dell-inspiron-5584-i5-8265u-8gb-2tb-2gb-mx130-156f8-204654.jpg', 19690000, 4, 'Laptop Dell Inspiron 5584 (N5I5353W) là mẫu laptop cho sinh viên với kiểu dáng đơn giản, cứng cáp quen thuộc của dòng Dell Inspiron. Chiếc máy tính xách tay gây ấn tượng bởi cấu hình mạnh mẽ, dung lượng lưu trữ cực lớn cùng các tính năng hiện đại.', '-9%', 8287);
(31, 3, 2, 'USB 2.0 8 GB Sandisk SDCZ50', 'usb-sandisk-sdcz50-8gb-20-xanh-duong-1-5.jpg', 150000, 5, 'Kiểu dáng nhỏ nhắn chỉ 4.5 cm. Có thể móc dây với lỗ nhỏ phía dưới cùng của USB. Lưu trữ hơn 2.600 bài hát (1 bài ~3 MB). Thêm một sự lựa chọn của thương hiệu uy tín Sandisk.', '', 50),
(32, 3, 2, 'USB 3.1 32 GB Apacer AH357', 'usb-31-32gb-apacer-ah357-av.jpg', 300000, 3, 'Kiểu dáng nhỏ gọn, tiện dụng. Thiết kế nắp xoay 360 độ, xóa tan nỗi lo mất nắp đậy. Công nghệ USB 3.1 Gen 1 cho băng thông có thể đạt đến 5 Gbps.', '', 928),
(33, 3, 2, 'USB 3.1 32 GB Transcend JetFlash 760 Đen Tím', 'usb-31-32gb-transcend-jetflash-760-den-tim-avatar.jpg',  210000, 5, 'Thiết kế đơn giản, nhỏ gọn dễ mang đi theo bên mình. Chuẩn giao tiếp USB 3.1 – Cho tốc độ đọc lên đến 70 MB/s. Tương thích chuẩn giao tiếp USB 3.0 và 2.0.', '', 98),
(34, 3, 2, 'USB 2.0 8GB Sandisk SDCZ33 Đen', 'usb-20-8gb-sandisk-sdcz33-den-1-1.jpg', 150000, 4, 'Thiết kế nhỏ gọn, tiện lợi, chuẩn USB 2.0. Tốc độ đọc 20 MB/s, tốc độ ghi 5 MB/s. Có thể móc dây với lỗ nhỏ phía dưới cùng của USB. Bảo vệ các tệp riêng tư với phần mềm Sandisk SecureAccess. Thêm một sự lựa chọn của thương hiệu uy tín Sandisk.', '', 87),
(35, 3, 2, 'USB 3.0 16 GB Apacer AH354', 'usb-16gb-30-apacer-ah354-avatar.jpg', 200000, 4, 'Bảo vệ được đầu USB bằng cách kéo vào trong thân USB. USB 3.0 cho tốc độ chép dữ liệu nhanh gấp đôi 2.0. Tốc độ ghi lớn 25 MB/s. Giúp chép 1 video nặng 1 GB vào USB mất 60 giây. Lưu trữ hơn 15.500 tấm ảnh (1 tấm ~1.5 MB).', '', 91),
(36, 6, 5, 'Máy tính bảng iPad 8 Wifi 32GB (2020)', 'ipad-gen-8-wifi-bac-new.jpg', 9990000, 5, 'iPad 8 Wifi 32 GB (2020) có giá trị tuyệt vời cho một iPad mới khi mang lại hiệu suất tốt hơn, các nâng cấp iPadOS hữu ích cùng với một mức giá phải chăng rất đáng để sở hữu.', '', 99),
(37, 6, 5, 'Máy tính bảng iPad Pro 12.9 inch Wifi 128GB (2020)', 'ipad-pro-12-9-inch-wifi-128gb-2020-bac.jpg', 26490000, 5, 'Sở hữu thiết kế tinh tế, màn hình xuất sắc và cấu hình mạnh mẽ, đáp ứng được hầu hết nhu cầu của một người sáng tạo chuyên nghiệp. Điều không một thế hệ máy tính bảng nào khác có thể làm được, đã xuất hiện trên iPad Pro 12.9 inch 2020.', '-5%', 512),
(38, 6, 5, 'Máy tính bảng iPad Air 4 Wifi Cellular 64GB (2020)', 'ipad-4-cellular-hong-new.jpg', 19990000, 4, 'Trong sự kiện Time Flies vừa qua, Apple đã giới thiệu đến người dùng chiếc iPad Air 4 Wifi Cellular 64GB (2020) với thiết kế tương tự iPad Pro, ngoại hình của Air 4 đã được làm mới so với thế hệ iPad Air 3, cấu hình được nâng cấp mạnh mẽ cùng với nhiều cải tiến đáng giá.', '', 82),
(39, 6, 5, 'Máy tính bảng iPad Pro 11 inch Wifi Cellular 128GB (2020)', 'ipad-pro-11-inch-wifi-cellular-128gb-2020-bac.jpg', 24990000, 5, 'Đã 2 năm kể từ khi mẫu iPad Pro 2018 ra mắt, mới đây, mẫu iPad Pro mới nhất - iPad Pro 11 inch (2020) vừa được Apple trình làng với nhiều sự cải tiến đáng giá lẫn về tính năng và sức mạnh xử lý, hứa hẹn đây sẽ là mẫu máy tính bảng được săn đón nhiều nhất trong năm 2020.', '', 192),
(40, 6, 5, 'Máy tính bảng iPad Pro 11 inch Wifi 128GB (2020)', 'ipad-pro-11-inch-2020-xam.jpg', 20990000, 4, 'iPad Pro 11 inch 2020 là mẫu iPad mới nhất vừa được Apple ra mắt vào 18/3 với thiết kế gần như không thay đổi so với thế hệ trước, chủ yếu là sự nâng cấp đến từ chip A12Z cho hiệu năng mạnh mẽ và cụm camera có cảm biến mới hỗ trợ tăng cường thực tế ảo.', '', 198),
(41, 3, 4, 'Ram DDR4 Colorful 8G/2666 Battle AX Tản Nhiệt', 'CLF_8G2666_BattleAX.jpg', 645000, 5, 'Ram Colorful Tản nhiệt DDR4 8GB Bus 2666 Battle Ax là một phần quan trọng trong máy tính của bạn để cho phép truy cập dữ liệu ngắn hạn, sở hữu dung lượng RAM 8GB, sản phẩm này chắc chắn sẽ giúp máy của bạn tăng tốc trong việc cài đặt ứng dụng, duyệt web hoặc chơi các trò game đòi hỏi cấu hình cao.', '', 92),
(42, 3, 4, 'Ram DDR4 OCPC XTREME II 8G/2666', 'OCPC_Extreme_8G2666.jpg', 640000, 5, 'RAM là một phần quan trọng trong máy tính của bạn để cho phép truy cập dữ liệu ngắn hạn, sở hữu dung lượng RAM 8GB, Ram OCPC Extreme II DDR4 8GB Bus 2666 chắc chắn sẽ giúp máy của bạn tăng tốc trong việc cài đặt ứng dụng, duyệt web hoặc chơi các trò game đòi hỏi cấu hình cao.', '', 962),
(43, 3, 4, 'Ram DDR4 Adata 8G/2666 XPG Gammix D10', 'ADT-8G2666-D10.jpg', 685000, 5, 'Gammix D10 8GB (2666) AX4U266638G16-SRG (Đỏ) là dòng  được thiết kế cho các game thủ và những người đam mê  cùng với sự hỗ trợ cho việc triển khai tốc độ bộ nhớ cơ bản cho hệ thống X299. Với bảng mạch in (B) 10 lớp, dòng D10 cải thiện chất lượng truyền tín hiệu và duy trì hoạt động ổn định mọi lúc, cũng hỗ trợ XMP 2.0 để ép xung nhanh và an toàn hơn. Gammix D10 với thiết kế lớp áo  hình răng cưa cá tính và độc nhất, vừa cho hình thức nổi bật vừa cho hiệu suất  tuyệt vời. Chiều cao của  phù hợp với tất cả các kích thước của mọi hệ thống , có thể lắp đặt cho cả các hệ thống có không gian lắp đặt hạn chế.', '', 192),
(44, 3, 4, 'Ram DDR4 Apacer 8G/2666 Panther Golden', 'APC-Panther-GD-8GB2666-1.jpg', 730000, 5, 'RAM PC Apacer Panther Golden Bus 2666 được trang bị với dung lượng lên đến 8GB tạo được bộ nhớ lưu trữ tạm thời lớn, hỗ trợ cho quá trình xử lý công việc của máy tính được nhanh hơn và hiệu quả hơn.', '', 942),
(45, 3, 4, 'Ram DDR4 Kingmax 8G/3200 Zeus Dragon RGB', 'ram-ddr4-kingmax-8g-3000-zeus-dragon-rgb.jpg', 990000, 5, 'Ram là một trong những linh kiện khá quan trọng trong máy tính. Ram D4 Kingmax 8G/3200 Zeus Dragon RGB Thuộc chuẩn RAM DDR4, có vẻ ngoài sắc sảo với bộ tản nhiệt nhôm chất lượng cao có thể làm tăng khả năng tản nhiệt và đảm bảo hiệu quả làm mát đáng kinh ngạc.', '', 822);
(46, 7, 1, 'Laptop Asus VivoBook X409JA', 'asus-vivobook-x409ja-i5-ek052t-220976.jpg', 15490000, 4, 'Asus VivoBook X409JA i5 (EK052T) là dòng máy tính xách tay học tập văn phòng được thiết kế hiện đại, mỏng nhẹ tối ưu cho người cần di chuyển nhiều. Với cấu hình mạnh và màn hình tràn viền, X409JA đem đến trải nghiệm làm việc mượt mà, giải trí thoải mái.', '', 289),
(47, 7, 1, 'Laptop Asus ZenBook UX425EA', 'asus-zenbook-ux425ea-i5-bm069t-grey-new.jpg', 22990000, 5, 'Siêu phẩm Asus ZenBook UX425EA i5 (BM069T) vừa ra mắt đến từ nhà Asus sở hữu thiết kế đẹp tinh tế, di động tối ưu cùng độ bền chuẩn quân đội. Đặc biệt, chiếc máy này sở hữu con chip Intel thế hệ 11 mới nhất đến thời điểm hiện tại đem đến những tính năng hiện đại và tân tiến nhất.', '', 287),
(48, 7, 1, 'Laptop Asus VivoBook X509M', 'asus-vivobook-x509m-n5000-ej255t-6-225951.jpg', 8890000, 5, 'Laptop Asus VivoBook X509M N5000 (EJ255T) là dòng laptop học tập - văn phòng thuộc phân khúc giá rẻ, được thiết kế mỏng nhẹ để di động tối ưu đồng thời cấu hình được trang bị đủ cho nhu cầu học tập, lướt web giải trí thông thường.', '', 221),
(49, 7, 1, 'Laptop Asus VivoBook X509JP', 'asus-vivobook-x509jp-i5-ej023t-2gb-221617.jpg', 17190000, 4, 'Asus VivoBook X509JP i5 (EJ023T) là chiếc laptop học tập - văn phòng mỏng nhẹ, cấu hình mạnh và ổn định cho nhu cầu làm việc, giải trí hằng ngày. Ngoài ra, máy cũng có khả năng đồ họa khá nhờ có card đồ họa rời.', '', 256),
(50, 7, 1, 'Laptop Asus Gaming Rog Strix G512', 'asus-gaming-rog-strix-g512-i5-ial031t-225940-225940.jpg', 24490000, 5, 'Laptop Asus Gaming ROG Strix G512 i5 (IAL013T) mang đến ngôn ngữ thiết kế hiện đại, cấu hình mạnh mẽ với vi xử lí gen 10 mới, card đồ họa rời GeForce GTX 1650Ti, chiến những tựa game nặng kí nhất. ', '', 433),
(51, 1, 3, 'Xperia 5 II', '42e7acd5e4e8451e3ded3219b30082d8.jpg', 23990000, 4, 'Tích hợp công nghệ của các máy ảnh chuyên nghiệp Alpha, Xperia 5 II mang tới cho bạn tốc độ và sự chuẩn xác cần thiết để bắt trọn các khoảnh khắc màu nhiệm với khả năng lấy nét cực sắc và độ phơi sáng hoàn hảo.', '' , 576),
(52, 1, 3, 'Xperia 1 II', '93375262915162c04b81617da973a2c4.jpg', 27990000, 5, 'Xperia 1 II nâng cao chuẩn tốc độ cho điện thoại thông minh. Tập hợp những công nghệ hiện đại mới nhất và camera do kỹ sư máy ảnh Alpha của Sony phát triển, điện thoại thông minh này có khả năng lấy nét tự động nhanh vượt trội. Cùng màn hình OLED HDR 4K 21:9 CinemaWide 6,5 inch, bạn có thể xem mọi thứ với chất lượng như rạp chiếu phim.', '' , 227),
(53, 1, 3, 'Xperia 10 II', '52759649396a293bbc0ffb05f9bd0e8b.jpg', 9990000, 4, 'Với chuẩn chống nước IP65/68, Kính Corning® Gorilla® Glass 6 bền bỉ và thời gian sử dụng pin dài, bạn sẽ không phải lo lắng gì khi sử dụng Xperia 10 II. Tính năng nhiều cửa sổ mang đến nhiều cách mới để sử dụng điện thoại thông minh, còn màn hình OLED 6 inch 21:9 Wide biến trải nghiệm xem nội dung trở nên thú vị. Bạn cũng có thể tự do sáng tạo ảnh và video hơn, nhờ camera ba ống kính mới.', '' , 518),
(54, 1, 3, 'Xperia 5', 'dae23edc294287acc10c6b6125d5e2a3.jpg', 19990000, 3, 'Với thiết kế đối xứng tuyệt mỹ vượt thời gian cùng khung kim loại chế tác có độ chính xác cao, sản phẩm đã được thử nghiệm để đạt kích thước tối ưu và vừa vặn trên tay bạn.', '' , 129),
(55, 1, 3, 'Xperia 1', 'e776e241f1d48b55ad6e630f862253b6.jpg', 22990000, 4, 'Xperia 1 mới được trang bị những công nghệ tiên tiến cho màn hình, máy ảnh và các thiết bị âm thanh chuyên nghiệp của Sony, nhằm mang đến trải nghiệm tốt nhất trên điện thoại thông minh. Sản phẩm sở hữu màn hình OLED HDR 4K 21:9 CinemaWide™ đầu tiên trên thế giới cùng camera ba ống kính chất lượng chuyên nghiệp.', '' , 827),
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
