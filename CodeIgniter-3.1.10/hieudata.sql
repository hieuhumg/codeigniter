-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 09, 2019 lúc 06:12 AM
-- Phiên bản máy phục vụ: 10.1.40-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hieudata`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `money`
--

CREATE TABLE `money` (
  `id` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  `date_modified` int(11) DEFAULT NULL,
  `idTL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `money`
--

INSERT INTO `money` (`id`, `content`, `money`, `status`, `date`, `date_created`, `date_modified`, `idTL`) VALUES
(43, 'tien an sang', 20000, 1, 1564264800, 1564543272, NULL, 1),
(86, 'check date', 32432432, 1, 1564264800, 1564547881, NULL, 1),
(101, NULL, NULL, 1, 0, 1564566515, NULL, NULL),
(102, NULL, NULL, 1, 0, 1564566799, NULL, NULL),
(103, NULL, NULL, 1, 0, 1564566869, NULL, NULL),
(104, NULL, NULL, 1, 0, 1564644875, NULL, NULL),
(105, NULL, NULL, 1, 0, 1564646183, NULL, NULL),
(106, NULL, NULL, 1, 0, 1564652477, NULL, NULL),
(108, 'ăn trưa', 435453, 1, -3600, 1564652482, 1564998459, 1),
(109, '', 0, 1, 0, 1564718511, NULL, 1),
(110, '', 0, 1, 0, 1564718519, NULL, 1),
(111, '', 0, 1, 0, 1564718631, NULL, 1),
(112, '', 0, 1, 0, 1564718632, NULL, 1),
(113, '', 0, 1, 0, 1564718740, NULL, 1),
(114, '', 0, 1, 0, 1564718914, NULL, 1),
(115, '', 0, 1, 0, 1564729412, NULL, 1),
(116, '', 0, 1, 0, 1564730420, NULL, 1),
(117, '', 0, 1, 0, 1564730435, NULL, 1),
(118, '', 0, 1, 0, 1564730456, NULL, 1),
(119, '', 0, 1, 0, 1564730470, NULL, 1),
(120, '', 0, 1, 0, 1564730509, NULL, 1),
(121, '', 0, 1, 0, 1564730519, NULL, 1),
(122, 'byh', 0, 1, 0, 1564731346, NULL, 1),
(123, 'ăn trưa', 0, 1, 0, 1564731351, NULL, 1),
(124, '', 0, 1, 0, 1564731353, NULL, 1),
(125, '', 0, 1, 0, 1564731363, NULL, 1),
(126, 'â', 0, 1, 0, 1564732259, NULL, 1),
(127, '', 0, 1, 0, 1564732278, NULL, 1),
(128, '', 0, 1, 0, 1564734685, NULL, 1),
(129, '', 0, 1, 0, 1564734884, NULL, 1),
(130, '', 0, 1, 0, 1564734885, NULL, 1),
(131, '', 0, 1, 0, 1564734887, NULL, 1),
(132, '', 0, 1, 0, 1564734887, NULL, 1),
(133, '', 0, 1, 0, 1564734888, NULL, 1),
(134, '', 0, 1, 0, 1564735607, NULL, 1),
(135, '', 0, 1, 0, 1564735609, NULL, 1),
(136, '', 0, 1, 0, 1564735610, NULL, 1),
(137, '', 0, 1, 0, 1564735652, NULL, 1),
(138, 'ăn trưa', 0, 1, 0, 1564735655, NULL, 1),
(139, 'ăn trưa', 0, 1, 0, 1564735687, NULL, 1),
(140, '', 0, 1, 0, 1564735688, NULL, 1),
(141, '', 0, 1, 0, 1564735690, NULL, 1),
(142, '', 0, 1, 0, 1564735690, NULL, 1),
(143, '', 0, 1, 0, 1564735692, NULL, 1),
(144, '', 0, 1, 0, 1564735807, NULL, 1),
(145, '', 0, 1, 0, 1564735812, NULL, 1),
(146, '', 0, 1, 0, 1564735835, NULL, 1),
(147, 'an sang ', 0, 1, 0, 1564738588, NULL, NULL),
(148, 'ăn trưa', 0, 1, 0, 1564738751, NULL, NULL),
(149, NULL, NULL, 1, 0, 1564801723, NULL, NULL),
(150, NULL, NULL, 1, 0, 1564802742, NULL, NULL),
(151, '', 0, 1, 0, 1564802747, NULL, NULL),
(152, NULL, NULL, 1, 0, 1564802798, NULL, NULL),
(153, '', 0, 1, 0, 1564802801, NULL, 1),
(154, NULL, NULL, 1, 0, 1564802878, NULL, NULL),
(155, '', 0, 1, 0, 1564802880, NULL, 1),
(156, NULL, NULL, 1, 0, 1564817134, NULL, NULL),
(157, '', 0, 1, 0, 1564817137, NULL, 1),
(158, '', 0, 1, 0, 1564817291, NULL, 1),
(159, '', 0, 1, 0, 1564817735, NULL, NULL),
(160, '', 0, 1, 0, 1564820162, NULL, NULL),
(161, '', 0, 1, 0, 1564820257, NULL, NULL),
(162, '', 43543543, 1, 0, 1564830091, NULL, NULL),
(163, '', 2147483647, 1, 0, 1564830096, NULL, NULL),
(164, 'mừng đám cưới hùng', 0, 1, 0, 1564830101, NULL, NULL),
(165, '', 0, 1, 0, 1564848665, NULL, NULL),
(166, '', 0, 1, 0, 1564848681, NULL, NULL),
(167, '', 0, 1, 0, 1564848724, NULL, 1),
(168, NULL, NULL, 1, 0, 1564848748, NULL, NULL),
(169, '', 0, 1, 0, 1564848754, NULL, 1),
(170, '', 0, 1, 0, 1564848956, NULL, 1),
(171, '', 0, 1, 0, 1564848958, NULL, 1),
(172, '', 0, 1, 0, 1564848961, NULL, 1),
(173, '', 0, 1, 0, 1564849580, NULL, 1),
(174, 'ăn trưa', 0, 1, 0, 1564849586, NULL, 1),
(175, 'ăn trưa', 435435, 1, 1564783200, 1564849604, NULL, 1),
(176, NULL, NULL, 1, 0, 1564849670, NULL, NULL),
(177, '', 0, 1, 0, 1564849671, NULL, 1),
(178, 'rrferger', 3432432, 1, -3600, 1564930100, NULL, 1),
(179, '81', 334324, 1, 1564696800, 1564975753, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloaitien`
--

CREATE TABLE `theloaitien` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  `date_modified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `theloaitien`
--

INSERT INTO `theloaitien` (`id`, `name`, `date_created`, `date_modified`) VALUES
(1, 'tiền ăn sáng', NULL, NULL),
(2, 'tiền đám cưới', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_public`
--

CREATE TABLE `users_public` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users_public`
--

INSERT INTO `users_public` (`id`, `name`, `email`, `password`, `created`) VALUES
(1, 'hieuhumg', 'hghgdhtgf@gmail.com', '123', '2019-08-08 09:44:57'),
(2, 'dvvwefewffd', 'hieuhumg@gmail.com', '123', '2019-08-08 09:55:27'),
(3, 'dvvwefewff', 'hieuhumg2711@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-08-08 09:56:29');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloaitien`
--
ALTER TABLE `theloaitien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users_public`
--
ALTER TABLE `users_public`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `money`
--
ALTER TABLE `money`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT cho bảng `theloaitien`
--
ALTER TABLE `theloaitien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users_public`
--
ALTER TABLE `users_public`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
