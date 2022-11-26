-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2022 lúc 01:19 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `helloworld`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(10) NOT NULL COMMENT 'mã bình luận',
  `noi_dung` varchar(255) NOT NULL COMMENT 'nội dung bình luận',
  `ma_hh` int(10) NOT NULL,
  `ma_kh` varchar(20) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL COMMENT 'mã hàng hóa',
  `ten_hh` varchar(50) NOT NULL COMMENT 'tên hàng hóa',
  `don_gia` double(10,2) NOT NULL COMMENT 'đơn giá',
  `giam_gia` double(10,2) DEFAULT 0.00 COMMENT 'giảm giá',
  `hinh` varchar(50) NOT NULL COMMENT 'hình ảnh',
  `ngay_nhap` date DEFAULT NULL COMMENT 'ngày nhập',
  `mo_ta` text NOT NULL COMMENT 'mô tả',
  `dac_biet` tinyint(1) NOT NULL COMMENT 'đặc biệt(1) bình thường(2)',
  `so_luot_xem` int(12) NOT NULL COMMENT 'số lượt xem',
  `ma_loai` int(10) NOT NULL COMMENT 'mã loại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon_chitiet`
--

CREATE TABLE `hoadon_chitiet` (
  `ma_hdct` int(11) NOT NULL,
  `ma_hd` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia_ca` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hd` int(11) NOT NULL,
  `ngay_mua` date NOT NULL,
  `ma_kh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) NOT NULL COMMENT 'mã khách hàng',
  `mat_khau` varchar(50) NOT NULL COMMENT 'mật khẩu',
  `ho_ten` varchar(50) NOT NULL COMMENT 'họ tên',
  `kich_hoat` tinyint(1) NOT NULL COMMENT 'không kích hoạt(0),kích hoạt(1)',
  `hinh` varchar(50) NOT NULL COMMENT 'hình ảnh',
  `email` varchar(50) NOT NULL COMMENT 'email',
  `vai_tro` varchar(50) NOT NULL COMMENT 'vai trò'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(10) NOT NULL COMMENT 'mã loại hàng',
  `ten_loai` varchar(50) NOT NULL COMMENT 'tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(24, 'Thời Trang Thể Thao'),
(25, 'Quần Áo Bóng Đá'),
(26, 'Quần Áo Bóng Chuyền'),
(27, 'Trang Phục Chạy Bộ'),
(28, 'Đồ CLB- Đội Tuyển'),
(29, 'Phụ Kiện Thể Thao');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `hoadon_chitiet`
--
ALTER TABLE `hoadon_chitiet`
  ADD PRIMARY KEY (`ma_hdct`),
  ADD KEY `ma_hd` (`ma_hd`),
  ADD KEY `ma_hh` (`ma_hh`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hd`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(10) NOT NULL AUTO_INCREMENT COMMENT 'mã bình luận', AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã hàng hóa', AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `hoadon_chitiet`
--
ALTER TABLE `hoadon_chitiet`
  MODIFY `ma_hdct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT COMMENT 'mã loại hàng', AUTO_INCREMENT=30;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);

--
-- Các ràng buộc cho bảng `hoadon_chitiet`
--
ALTER TABLE `hoadon_chitiet`
  ADD CONSTRAINT `hoadon_chitiet_ibfk_1` FOREIGN KEY (`ma_hd`) REFERENCES `hoa_don` (`ma_hd`),
  ADD CONSTRAINT `hoadon_chitiet_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
