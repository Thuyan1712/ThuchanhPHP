-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2023 lúc 11:12 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ban_hang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_ngang`
--

CREATE TABLE `menu_ngang` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) NOT NULL,
  `parent` int(11) NOT NULL,
  `loai_menu` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_ngang`
--

INSERT INTO `menu_ngang` (`id`, `ten`, `parent`, `loai_menu`) VALUES
(1, 'Trang chủ', 0, ''),
(2, 'Giới thiệu', 0, ''),
(3, 'Sản phẩm', 0, 'san_pham'),
(4, 'Khuyến mãi', 0, ''),
(5, 'Trả góp', 0, ''),
(6, 'Liên hệ', 0, ''),
(7, 'Sản phẩm 1', 3, ''),
(8, 'Sản phẩm 2', 3, ''),
(9, 'Sản phẩm 3', 3, ''),
(10, 'Sản phẩm 4', 3, ''),
(11, 'Sản phẩm 5', 3, ''),
(12, 'Nội dung sản phẩm 1', 7, ''),
(13, 'Nội dung sản phẩm 2', 8, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `menu_ngang`
--
ALTER TABLE `menu_ngang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `menu_ngang`
--
ALTER TABLE `menu_ngang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
