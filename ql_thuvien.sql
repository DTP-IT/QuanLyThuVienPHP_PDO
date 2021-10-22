-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 20, 2021 lúc 04:33 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_thuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `doc_gia_id` int(11) DEFAULT NULL,
  `can_bo_id` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `passwd` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `doc_gia_id`, `can_bo_id`, `user`, `passwd`, `level`) VALUES
(1, 7777, NULL, 7777, '123', 'reader'),
(3, NULL, 1000, 1000, '12345', 'admin'),
(4, 1811066789, NULL, 1811066789, '12345', 'reader'),
(7, NULL, 1010, 1010, '12345', 'manager'),
(8, NULL, 1017, 1017, '12345', 'member'),
(33, 111, NULL, 111, '123', 'reader'),
(37, NULL, 1015, 1015, '562', 'manager'),
(45, 1811061106, NULL, 1811061106, '', 'reader'),
(237, NULL, 1020, 1020, '123', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `can_bo_thu_vien`
--

CREATE TABLE `can_bo_thu_vien` (
  `maCanBo` int(11) NOT NULL,
  `tenCanBo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên cán bộ',
  `gioiTinh` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'giới tính',
  `namSinh` date DEFAULT NULL COMMENT 'năm sinh',
  `diaChi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'dịa chỉ',
  `anh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ảnh',
  `SDT` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'số điện thoại',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quyenHan` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'quyền hạn',
  `matKhau` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'mật khẩu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `can_bo_thu_vien`
--

INSERT INTO `can_bo_thu_vien` (`maCanBo`, `tenCanBo`, `gioiTinh`, `namSinh`, `diaChi`, `anh`, `SDT`, `email`, `quyenHan`, `matKhau`) VALUES
(1000, 'Đỗ Tuấn Phong', 'nam', '2000-04-17', 'Hà Tây', 'pongggggg.jpg', '0999999999', 'phongdo789@gmail.com', 'admin', '12345'),
(1010, 'Ngô Thị Hà', 'nữ', '2000-07-06', 'Bắc Ninh', 'haaaaaaaaaaa.jpg', '0912345678', 'NgoHa@gmail.com', 'manager', '12345'),
(1015, 'Hà Thị Kiều Trang', 'nữ', '2000-12-22', 'Thái Bình', 'trangggggggg.jpg', '0912345678', 'TrangKieu@gmail.com', 'manager', '12345'),
(1017, 'Nguyễn Khả Hiệp', 'nam', '2000-07-05', 'Phùng Khoang - Hà Nội', 'hieppppp chickiiii.jpg', '0369105776', 'NKH@gmail.com', 'member', '12345'),
(1020, 'Nguyễn Long Vũ', 'nam', '2000-02-29', 'Hà Nội', 'longvuuuuuuu.jpg', '0968686868', 'LogVuz@gmail.com', 'admin', '12345'),
(1088, '', NULL, '0000-00-00', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_muon_tra`
--

CREATE TABLE `chi_tiet_muon_tra` (
  `id` int(11) NOT NULL,
  `muonTraID` int(11) NOT NULL,
  `maSach` int(11) NOT NULL,
  `maCanBoMuon` int(11) DEFAULT NULL,
  `maCanBoTra` int(11) DEFAULT NULL,
  `tinhTrangMuon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngayMuon` date NOT NULL DEFAULT current_timestamp(),
  `ngayPhaiTra` date DEFAULT NULL,
  `ngayTra` date DEFAULT NULL,
  `tinhTrangTra` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thanhToan` float DEFAULT NULL,
  `ghiChu` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_muon_tra`
--

INSERT INTO `chi_tiet_muon_tra` (`id`, `muonTraID`, `maSach`, `maCanBoMuon`, `maCanBoTra`, `tinhTrangMuon`, `ngayMuon`, `ngayPhaiTra`, `ngayTra`, `tinhTrangTra`, `thanhToan`, `ghiChu`) VALUES
(1, 1, 76, 1020, NULL, 'Bình thường', '2021-05-15', '2021-05-28', NULL, NULL, NULL, ''),
(2, 9, 76, 1000, 1000, '									OK								', '2021-05-15', '2021-05-26', '2021-05-15', '								', 0, '																																		'),
(8, 5, 77, 1000, NULL, NULL, '2021-05-15', '2021-05-24', NULL, NULL, NULL, '																																				\r\n																																'),
(10, 10, 77, 1000, 1000, '																	', '2021-05-15', '2021-05-28', '2021-05-15', '								', 0, '																											\r\n																								'),
(11, 5, 76, 1000, 1000, 'Bình thường', '2021-05-15', '2021-05-28', '2021-05-15', 'Bình thường', 0, '																		\r\n																'),
(12, 6, 77, 1000, 1000, '																											\r\n																								', '2021-05-15', '2021-06-18', '0000-00-00', '								', 0, '																																				\r\n																																'),
(13, 5, 77, 1017, 1020, NULL, '2021-05-06', NULL, '2021-05-18', NULL, NULL, ''),
(14, 4, 77, 1020, 1010, NULL, '2021-06-17', NULL, NULL, NULL, NULL, ''),
(15, 10, 76, 1015, 1010, NULL, '2020-05-05', NULL, '2023-05-09', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doc_gia`
--

CREATE TABLE `doc_gia` (
  `maThe` int(11) NOT NULL COMMENT 'mã thẻ',
  `hoTen` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'họ tên',
  `ngaySinh` date DEFAULT NULL COMMENT 'ngày sinh',
  `gioiTinh` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'giới tính',
  `diaChi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ảnh',
  `SDT` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'số điện thoại',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'email',
  `trinhDo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'trình dộ',
  `maLop` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'mã lớp',
  `maKhoa` int(11) DEFAULT NULL COMMENT 'mã khoa',
  `khoaHoc` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'khóa học',
  `ngayCapThe` date DEFAULT current_timestamp() COMMENT 'ngày cấp thẻ',
  `hanDungThe` date DEFAULT NULL COMMENT 'hạn dùng thẻ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doc_gia`
--

INSERT INTO `doc_gia` (`maThe`, `hoTen`, `ngaySinh`, `gioiTinh`, `diaChi`, `anh`, `SDT`, `email`, `trinhDo`, `maLop`, `maKhoa`, `khoaHoc`, `ngayCapThe`, `hanDungThe`) VALUES
(111, 'Đỗ Tuấn Phong', '2000-03-25', 'nam', 'Ứng Hòa', 'pongggggg.jpg', '0999999999', 'Phongdo789@gmail.com', 'Tiến sĩ', 'ĐH8C7', 1, '2018-2022', '2018-09-02', '2022-09-02'),
(7777, 'Nguyễn Long Vũ ', '2021-05-04', 'nam', 'Hà Nội', 'longvuuuuuuu.jpg', '1633317062', 'LogVuz@gmail.com', 'Thạc sĩ', 'ĐH8C2', 1, '324', '2021-05-04', '2021-06-05'),
(234234, 'Nguyễn Khả Hiệp', '2000-06-21', 'nam', '	Phùng Khoang - Hà Nội																								\r\n																							', 'hieppppp chickiiii.jpg', '0369105776', 'khahiep21062000@gmail.com', 'Đại học', 'ĐH8C7', 1, 'DH8', '2018-09-14', '2021-05-16'),
(123123123, 'Hà Thị Kiều Trang', '2000-12-22', 'nữ', 'Thái Bình', 'trangggggggg.jpg', '0912389567', 'Kieutrang@gmail.com', 'Đại học', 'ĐH8C7', 1, 'DH8', '2016-06-17', '2021-05-17'),
(1811061106, 'Ngô Thị Hà', '2000-03-07', 'nữ', 'Bắc Ninh', 'haaaaaaaaaaa.jpg', '0968686868', 'HaNgo@gmail.com', 'Đại học', 'ĐH8C7', 1, '2018-2022', '2020-12-09', '2021-01-23'),
(1811066789, 'Nguyễn Long Vũ Nữ', '2020-12-03', 'nam', 'HT', '2.png', '0326598745', 'NLVn@hunre.edu.vn', 'Cao đẳng', 'ĐH8QM5', 3, '2018-2022', '2020-12-29', '2021-01-07'),
(1811068974, 'A B C', '2020-12-08', 'nam', 'Hà Nam', '3.png', '0326598745', 'ABC@gmail.com', 'Đại học', 'ĐH8KE3', 2, '2018-2022', '2020-12-31', '2021-01-07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `maKhoa` int(11) NOT NULL COMMENT 'mã khoa',
  `tenKhoa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'tên khoa',
  `diaChi` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'địa chỉ',
  `SDT` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'số điện thoại',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuNhiemKhoa` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'chủ nhiệm khoa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`maKhoa`, `tenKhoa`, `diaChi`, `SDT`, `email`, `chuNhiemKhoa`) VALUES
(0, 'Choose', NULL, NULL, '', NULL),
(1, 'Công nghệ thông tin', 'B103', '0326598745', '', 'AA'),
(2, 'Kế toán', 'B104', '0123456789', '', 'BB'),
(3, 'Quản lý môi trường', 'B105', '0365974561', '', 'CC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho_sach`
--

CREATE TABLE `kho_sach` (
  `maKho` int(11) NOT NULL COMMENT 'mã kho',
  `tenKho` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'tên kho',
  `ghiChu` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ghi chú'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kho_sach`
--

INSERT INTO `kho_sach` (`maKho`, `tenKho`, `ghiChu`) VALUES
(1, 'Công nghệ thông tin', NULL),
(2, 'Kế toán', NULL),
(3, 'Quản lý môi trường', NULL),
(4, 'Tài nguyên nước', 'Cập nhật'),
(6, 'Luật', ''),
(7, 'Kinh tế', ''),
(8, 'Đất đai', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `maLop` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'mã lớp',
  `tenLop` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'tên lớp',
  `gvChuNhiem` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'chủ nhiệm lớp',
  `maKhoa` int(11) DEFAULT NULL COMMENT 'mã khoa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`maLop`, `tenLop`, `gvChuNhiem`, `maKhoa`) VALUES
('Choose', NULL, NULL, 0),
('ĐH8C1', 'Đại học 8 công nghệ thông tin lớp 1', 'bbb', 1),
('ĐH8C2', 'Đại học 8 công nghệ thông tin lớp 2', 'bbb', 1),
('ĐH8C3', 'Đại học 8 công nghệ thông tin lớp 3', 'bbb', 1),
('ĐH8C4', 'Đại học 8 công nghệ thông tin lớp 4', 'bbb', 1),
('ĐH8C5', 'Đại học 8 công nghệ thông tin lớp 5', 'bbb', 1),
('ĐH8C6', 'Đại học 8 công nghệ thông tin lớp 6', 'bbb', 1),
('ĐH8C7', 'Đại học 8 công nghệ thông tin lớp 7', 'bbb', 1),
('ĐH8KE3', 'Đại học 8 kế toán lớp 3', 'ccc', 2),
('ĐH8QM5', 'Đại học 8 quản lý môi trường lớp 5', 'aaa', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muon_tra`
--

CREATE TABLE `muon_tra` (
  `id` int(11) NOT NULL,
  `maDocGia` int(11) DEFAULT NULL,
  `ngayTao` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `muon_tra`
--

INSERT INTO `muon_tra` (`id`, `maDocGia`, `ngayTao`) VALUES
(1, NULL, '2021-05-10'),
(2, NULL, '2021-05-10'),
(3, NULL, '2021-05-10'),
(4, 7777, '2021-05-10'),
(5, 123123123, '2021-05-10'),
(6, NULL, '2021-05-10'),
(9, 111, '0000-00-00'),
(10, 1811061106, '2020-02-12'),
(11, 111, '2222-03-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_xuat_ban`
--

CREATE TABLE `nha_xuat_ban` (
  `maNXB` int(11) NOT NULL COMMENT 'mã nhà xuất bản',
  `tenNXB` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'tên nhà xuất bản',
  `dienthoai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'số điện thoại',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'địa chỉ',
  `ghiChu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha_xuat_ban`
--

INSERT INTO `nha_xuat_ban` (`maNXB`, `tenNXB`, `dienthoai`, `email`, `diachi`, `ghiChu`) VALUES
(1, 'Đại học quốc gia', '0326598741', 'DHQG@gmail.com', 'Hà Nội', NULL),
(3, 'Đại học Hà Nội', '0123456789', 'HNU@gmail.com', ' Thanh Xuân', ''),
(5, 'Đại học Thăng Long', '0912389567', 'TLU@gmail.com', '\r\nHà Nội																		\r\n																																																							', ''),
(6, 'Đại học Tài Nguyên và Môi Trường', '0912345678', 'hunre@gmail.com', '	Cầu Diễn											\r\n											', ''),
(7, 'Đại học Bưu Chính Viễn Thông', '0999999999', 'BCVT@gmail.com', '			Hà Đông									\r\n											', ''),
(8, 'Bộ Giáo Dục và Đào Tạo', '0968686868', 'BGD@gmail.com', '		Hà Nội										\r\n											', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `maSach` int(11) NOT NULL COMMENT 'mã sách',
  `tenSach` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'tên sách',
  `anh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ảnh sách',
  `tenTacGia` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'tên tác giả',
  `maTheLoai` int(11) DEFAULT NULL COMMENT 'mã thể loại sách',
  `maNXB` int(11) DEFAULT NULL COMMENT 'mã nhà xuất bản',
  `soluong` int(11) DEFAULT NULL COMMENT 'số lượng',
  `giaTien` float DEFAULT NULL COMMENT 'giá tiền',
  `maKho` int(11) DEFAULT NULL COMMENT 'mã kho'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`maSach`, `tenSach`, `anh`, `tenTacGia`, `maTheLoai`, `maNXB`, `soluong`, `giaTien`, `maKho`) VALUES
(76, 'Phân tích thiết kế hệ thống thông tin', 'gtPTTKHT.jpg', 'Đại học quốc gia', 2, 1, 49, 50000, 1),
(77, 'Quốc Phòng và An Ninh', 'GDQPAN.jpg', 'Đại Học Quốc Gia Hà Nội', 2, 1, 50, 50000, 6),
(79, 'Cấu Trúc Dữ Liệu và Giải Thuật', 'cautrucdulieuvagiaithuat.jpg', 'Đại học Hà Nội', 2, 3, 50, 60000, 1),
(80, 'Luật Hình Sự', 'HinhSu.jpg', 'Đại học Luật Hà Nội', 6, 8, 49, 61000, 6),
(81, 'Tiếng Anh', 'TA.jpg', 'Đại học Ngoại Ngữ', 5, 5, 10, 30000, 1),
(82, 'Toán rời rạc', 'TOAN.jpg', 'Bộ Giáo Dục', 7, 8, 100, 70000, 2),
(83, 'Lập Trình JAVA ', 'java.jpg', 'Đại học Bưu Chính', 1, 7, 11, 12345, 1),
(85, 'Tạp Chí', 'tapchi.jpg', 'Nguyễn Khả Hiệp', 3, 3, 123, 2000, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the_loai_sach`
--

CREATE TABLE `the_loai_sach` (
  `maTheLoai` int(11) NOT NULL COMMENT 'mã thể loại sách',
  `tenTheLoai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'tên thể loại sách',
  `ghiChu` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ghi chú'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `the_loai_sach`
--

INSERT INTO `the_loai_sach` (`maTheLoai`, `tenTheLoai`, `ghiChu`) VALUES
(1, 'Đồ án', NULL),
(2, 'Giáo trình', NULL),
(3, 'Tạp chí', NULL),
(5, 'Ngoại văn', ''),
(6, 'Sách tham khảo', ''),
(7, 'Sách toán', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD KEY `doc_gia_id` (`doc_gia_id`),
  ADD KEY `can_bo_id` (`can_bo_id`);

--
-- Chỉ mục cho bảng `can_bo_thu_vien`
--
ALTER TABLE `can_bo_thu_vien`
  ADD PRIMARY KEY (`maCanBo`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `chi_tiet_muon_tra`
--
ALTER TABLE `chi_tiet_muon_tra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `muonTraID` (`muonTraID`),
  ADD KEY `maSach` (`maSach`),
  ADD KEY `maCanBoTra` (`maCanBoTra`),
  ADD KEY `maCanBoMuon` (`maCanBoMuon`);

--
-- Chỉ mục cho bảng `doc_gia`
--
ALTER TABLE `doc_gia`
  ADD PRIMARY KEY (`maThe`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `maLop` (`maLop`,`maKhoa`),
  ADD KEY `maKhoa` (`maKhoa`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`maKhoa`),
  ADD KEY `email` (`email`);

--
-- Chỉ mục cho bảng `kho_sach`
--
ALTER TABLE `kho_sach`
  ADD PRIMARY KEY (`maKho`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`maLop`),
  ADD KEY `maKhoa` (`maKhoa`);

--
-- Chỉ mục cho bảng `muon_tra`
--
ALTER TABLE `muon_tra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maDocGia` (`maDocGia`);

--
-- Chỉ mục cho bảng `nha_xuat_ban`
--
ALTER TABLE `nha_xuat_ban`
  ADD PRIMARY KEY (`maNXB`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`maSach`),
  ADD KEY `maNXB` (`maNXB`,`maKho`),
  ADD KEY `maKho` (`maKho`),
  ADD KEY `maLoaiSach` (`maTheLoai`);

--
-- Chỉ mục cho bảng `the_loai_sach`
--
ALTER TABLE `the_loai_sach`
  ADD PRIMARY KEY (`maTheLoai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;

--
-- AUTO_INCREMENT cho bảng `can_bo_thu_vien`
--
ALTER TABLE `can_bo_thu_vien`
  MODIFY `maCanBo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1089;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_muon_tra`
--
ALTER TABLE `chi_tiet_muon_tra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `khoa`
--
ALTER TABLE `khoa`
  MODIFY `maKhoa` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã khoa', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `kho_sach`
--
ALTER TABLE `kho_sach`
  MODIFY `maKho` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã kho', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `muon_tra`
--
ALTER TABLE `muon_tra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `nha_xuat_ban`
--
ALTER TABLE `nha_xuat_ban`
  MODIFY `maNXB` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã nhà xuất bản', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `maSach` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã sách', AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `the_loai_sach`
--
ALTER TABLE `the_loai_sach`
  MODIFY `maTheLoai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã thể loại sách', AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`doc_gia_id`) REFERENCES `doc_gia` (`maThe`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `account_ibfk_2` FOREIGN KEY (`can_bo_id`) REFERENCES `can_bo_thu_vien` (`maCanBo`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chi_tiet_muon_tra`
--
ALTER TABLE `chi_tiet_muon_tra`
  ADD CONSTRAINT `chi_tiet_muon_tra_ibfk_2` FOREIGN KEY (`maSach`) REFERENCES `sach` (`maSach`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `chi_tiet_muon_tra_ibfk_3` FOREIGN KEY (`muonTraID`) REFERENCES `muon_tra` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `chi_tiet_muon_tra_ibfk_4` FOREIGN KEY (`maCanBoTra`) REFERENCES `can_bo_thu_vien` (`maCanBo`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `chi_tiet_muon_tra_ibfk_5` FOREIGN KEY (`maCanBoMuon`) REFERENCES `can_bo_thu_vien` (`maCanBo`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `doc_gia`
--
ALTER TABLE `doc_gia`
  ADD CONSTRAINT `doc_gia_ibfk_1` FOREIGN KEY (`maLop`) REFERENCES `lop` (`maLop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doc_gia_ibfk_2` FOREIGN KEY (`maKhoa`) REFERENCES `khoa` (`maKhoa`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`maKhoa`) REFERENCES `khoa` (`maKhoa`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `muon_tra`
--
ALTER TABLE `muon_tra`
  ADD CONSTRAINT `muon_tra_ibfk_1` FOREIGN KEY (`maDocGia`) REFERENCES `doc_gia` (`maThe`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`maTheLoai`) REFERENCES `the_loai_sach` (`maTheLoai`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `sach_ibfk_2` FOREIGN KEY (`maNXB`) REFERENCES `nha_xuat_ban` (`maNXB`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `sach_ibfk_3` FOREIGN KEY (`maKho`) REFERENCES `kho_sach` (`maKho`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
