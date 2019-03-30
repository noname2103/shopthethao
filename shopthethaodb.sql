-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 30, 2019 lúc 02:04 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopthethaodb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `MaAdmin` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`MaAdmin`, `Ten`, `MatKhau`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `MaDG` int(10) UNSIGNED NOT NULL,
  `NoiDung` text COLLATE utf8mb4_unicode_ci,
  `SoLuongSao` int(11) NOT NULL,
  `MaTV` int(10) UNSIGNED NOT NULL,
  `MaSP` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`MaDG`, `NoiDung`, `SoLuongSao`, `MaTV`, `MaSP`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sản phẩm rất ok', 5, 1, 30, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaGH` int(10) UNSIGNED NOT NULL,
  `MaTV` int(10) UNSIGNED NOT NULL,
  `MaSP` int(10) UNSIGNED NOT NULL,
  `TongGia` int(11) NOT NULL,
  `DiaChiGiaoHang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`MaGH`, `MaTV`, `MaSP`, `TongGia`, `DiaChiGiaoHang`, `remember_token`, `created_at`, `updated_at`, `SoLuong`) VALUES
(7, 1, 30, 684000, NULL, NULL, '2019-03-27 20:23:39', '2019-03-27 22:41:30', 19),
(8, 1, 27, 900000, NULL, NULL, '2019-03-27 20:23:43', '2019-03-27 20:23:43', 1),
(11, 1, 1, 350000, NULL, NULL, '2019-03-27 20:59:08', '2019-03-27 20:59:08', 1),
(12, 1, 20, 36000, NULL, NULL, '2019-03-27 21:00:55', '2019-03-27 21:00:55', 1),
(14, 2, 28, 120000000, NULL, NULL, '2019-03-30 05:55:00', '2019-03-30 05:55:00', 1),
(15, 2, 27, 900000, NULL, NULL, '2019-03-30 05:55:03', '2019-03-30 05:55:03', 1),
(16, 2, 2, 420000, NULL, NULL, '2019-03-30 05:55:10', '2019-03-30 05:55:10', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kichthuoc`
--

CREATE TABLE `kichthuoc` (
  `MaKT` int(10) UNSIGNED NOT NULL,
  `TenKT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaLoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kichthuocsp`
--

CREATE TABLE `kichthuocsp` (
  `MaKT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaSP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoai` int(10) UNSIGNED NOT NULL,
  `TenLoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoai`, `TenLoai`, `HinhAnh`, `Slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Banh bóng đá\r\n', '111.png', '', NULL, NULL, NULL),
(2, 'Banh khác', '10.png', '', NULL, NULL, NULL),
(3, 'Vợt', '11.png', '', NULL, NULL, NULL),
(4, 'Dụng cụ y tế', '62.png', '', NULL, NULL, NULL),
(5, 'Giày', '52.png', '', NULL, NULL, NULL),
(6, 'Áo', '9.png', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_23_054143_mon_the_thao', 1),
(4, '2019_03_23_054421_loai_san_pham', 1),
(5, '2019_03_24_051407_thanh_vien', 1),
(6, '2019_03_24_052228_san_pham', 1),
(7, '2019_03_24_054629_danh_gia', 1),
(8, '2019_03_24_055108_gio_hang', 1),
(9, '2019_03_24_055434_kich_thuoc', 1),
(10, '2019_03_24_055637_kich_thuoc_s_p', 1),
(11, '2019_03_24_055854_admin', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monthethao`
--

CREATE TABLE `monthethao` (
  `MaMon` int(10) UNSIGNED NOT NULL,
  `TenMon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monthethao`
--

INSERT INTO `monthethao` (`MaMon`, `TenMon`, `HinhAnh`, `Slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bóng đá', '111.png', '', NULL, NULL, NULL),
(2, 'Bóng rổ', '31.png', '', NULL, NULL, NULL),
(3, 'Tennis', '41.png', '', NULL, NULL, NULL),
(4, 'Cầu lông\r\n', '81.png', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(10) UNSIGNED NOT NULL,
  `TenSP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MoTa` text COLLATE utf8mb4_unicode_ci,
  `Gia` int(11) DEFAULT NULL,
  `MaMon` int(10) UNSIGNED NOT NULL,
  `MaLoai` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `HinhAnh`, `MoTa`, `Gia`, `MaMon`, `MaLoai`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'GIÀY BÓNG ĐÁ HYPERVENOM PHANTOM III TF XANH LƠ VÀNG', 'giay1.jpg', 'Màu sắc tuyệt đẹp,thoải mái với nhiều size giày cho bạn lựa chọn.', 350000, 1, 5, NULL, NULL, NULL),
(2, 'GIÀY BÓNG ĐÁ WINBRO PREDATOR ĐEN ĐỎ TF', 'giay2.jpg', 'Màu sắc tuyệt đẹp,thoải mái với nhiều size giày cho bạn lựa chọn.', 420000, 1, 5, NULL, NULL, NULL),
(3, 'GIÀY BÓNG ĐÁ ADIDAS X18.1 FG MÀU XANH 1', 'giay3.jpg', 'Màu sắc tuyệt đẹp,thoải mái với nhiều size giày cho bạn lựa chọn.', 120000, 1, 5, NULL, NULL, NULL),
(4, 'GIÀY BÓNG ĐÁ ADIDASX16.3 TF ĐỎ', 'giay5.jpg', 'Màu sắc tuyệt đẹp,thoải mái với nhiều size giày cho bạn lựa chọn.', 350000, 1, 5, NULL, NULL, NULL),
(5, 'GIÀY BÓNG ĐÁ NIKE MERCURIAL SUPERFLY CR7 MÀU TRẮNG', 'giay6.jpg', 'Màu sắc tuyệt đẹp,thoải mái với nhiều size giày cho bạn lựa chọn.', 120000000, 1, 5, NULL, NULL, NULL),
(6, 'GIÀY BÓNG ĐÁ ADIDAS NEMEZIZ 18.3 TF – XANH NÕN', 'giay4.jpg', 'Màu sắc tuyệt đẹp,thoải mái với nhiều size giày cho bạn lựa chọn.', 230000, 1, 5, NULL, NULL, NULL),
(7, 'GIÀY ĐÁ BÓNG WINBRO CHELSEA TF', 'giay7.jpg', 'Màu sắc tuyệt đẹp,thoải mái với nhiều size giày cho bạn lựa chọn.', 200000, 1, 5, NULL, NULL, NULL),
(8, 'GIÀY BÓNG ĐÁ ADIDAS X16.3 CG (MỚI) ĐEN', 'giay8.jpg', 'Màu sắc tuyệt đẹp,thoải mái với nhiều size giày cho bạn lựa chọn.', 450000, 1, 5, NULL, NULL, NULL),
(9, 'GIÀY BÓNG ĐÁ ADIDAS X17.3 TF MÀU TRẮNG', 'giay9.jpg', 'Màu sắc tuyệt đẹp,thoải mái với nhiều size giày cho bạn lựa chọn.', 6900000, 1, 5, NULL, NULL, NULL),
(10, 'GIÀY ADIDAS X 16.3 AG MÀU ĐỎ ĐEN', 'giay10.jpg', 'Màu sắc tuyệt đẹp,thoải mái với nhiều size giày cho bạn lựa chọn.', 269000, 1, 5, NULL, NULL, NULL),
(11, 'Vợt Cầu Lông Haotian 7725', 'votcl1.jpg', 'Vợt cầm nhẹ,chắc tay', 230000, 4, 3, NULL, NULL, NULL),
(12, 'Cặp Vợt Cầu Lông AAA VAV', 'votcl2.jpg', 'Màu sắc tuyệt đẹp,thoải mái với nhiều size giày cho bạn lựa chọn.', 450000, 4, 3, NULL, NULL, NULL),
(13, 'Ống Cầu Lông 12 Trái Hải Yến', 'traicl1.jpg', 'chất lượng cao ,ít bong ', 350000, 4, 2, NULL, NULL, NULL),
(14, 'Quả bóng đá cao cấp World Cup 2018 TELSTAR số 5 (Màu đen trắng)- Kèm kim bơm bóng', 'banhbongda1.jpg', 'độ bền cao,thích hợp môi loại sân', 120000000, 1, 1, NULL, NULL, NULL),
(15, ' Bóng đá Động Lực trẻ em Số 3 Hoa Ebete + Kèm kim bơm bóng (giao màu ngẫu nhiên)', 'banhbongda2.jpg', 'độ bền cao,thích hợp môi loại sân', 230000, 1, 1, NULL, NULL, NULL),
(16, 'Bóng đá Động Lực trẻ em Size 4 Hoa Ebete + Tặng kim bơm bóng (Hàng nhập khẩu, giao màu ngẫu nhiên)', 'banhbongda3.jpg', 'độ bền cao,thích hợp môi loại sân', 350000, 1, 1, NULL, NULL, NULL),
(17, 'Bảo vệ đầu gối chống chấn thương Belo PJ 758A', 'dungcubongda2.jpg', NULL, 360000, 1, 4, NULL, NULL, NULL),
(18, 'Đôi nẹp bọc bảo vệ ống đồng bóng đá các CLB - Giao mẫu mẫu nhiên (Free size)', 'dungcubongda1.jpg', NULL, 3500000, 1, 4, NULL, NULL, NULL),
(19, 'Quả bóng (banh) Tennis luyện tập', 'banhtennis1.jpg', 'độ bền cao,thích hợp môi loại sân', 360000, 3, 2, NULL, NULL, NULL),
(20, 'Đai bó cơ khuỷu tay khi chơi Tennis, golf, cầu lông, bóng bàn AOLIKES TC-7949', 'dungcutennis.jpg', NULL, 36000, 3, 4, NULL, NULL, NULL),
(21, 'Vợt Tennis Head Graphene Touch Radical S 2018 (280gr)', 'vottenis1.jpg', 'cầm nhẹ tay', 360000, 3, 3, NULL, NULL, NULL),
(22, 'Bóng rổ số 7 Spalding NBA da PU cao cấp (Tiêu chuẩn thi đấu-V)', 'banhbongro1.jpg', 'độ bền cao,thích hợp môi loại sân', 9890000, 2, 2, NULL, NULL, NULL),
(23, 'Qủa bóng rổ số 6 Spalding NBA da PU cao cấp (đạt tiêu chuẩn thi đấu) + Kèm kim bơm bóng', 'banhbongro2.jpg', 'độ bền cao,thích hợp môi loại sân', 59236000, 2, 2, NULL, NULL, NULL),
(24, 'Bộ Đồ Bóng Rổ CPSports Sportslink BONGRO-TRANG - Trắng', 'aobongro1.jpg', 'mặc thoải mái,chất liệu tự nhiên', 1626300, 2, 6, NULL, NULL, NULL),
(25, 'Bộ Đồ Bóng Rổ CPSports Sportslink BONGRO-DO - Đỏ', 'aobongro2.jpg', 'mặc thoải mái,chất liệu tự nhiên', 3600000, 2, 6, NULL, NULL, NULL),
(26, 'Sét Đồ Đội Tuyển Anh Trắng Sân Nhà World Cup 2018', 'aobongda1.jpg', NULL, 8962000, 1, 6, NULL, NULL, NULL),
(27, 'Sét Đồ Đội Tuyển Argentina Sọc Sân Nhà World Cup 2018', 'aobongda2.jpg', NULL, 900000, 1, 6, NULL, NULL, NULL),
(28, 'Bộ Quần Áo Đá Bóng Manchester - United - Đỏ', 'aobongda3.jpg', NULL, 120000000, 1, 6, NULL, NULL, NULL),
(29, 'Bộ Quần Áo Bóng Đá MU Xanh - Đồ Đá Banh 2018 2019', 'aobongda4.jpg', NULL, 90000000, 1, 6, NULL, NULL, NULL),
(30, 'Áo Tennis Nam Dunlop DATES8082-1-GY', 'aotenis1.jpg', NULL, 36000, 3, 6, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `MaTV` int(10) UNSIGNED NOT NULL,
  `TenKH` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AnhDaiDien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`MaTV`, `TenKH`, `Email`, `SDT`, `DiaChi`, `MatKhau`, `AnhDaiDien`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'trung', 'trungminhminh@gmail.com', '133', NULL, 'trungminh', NULL, NULL, '2019-03-24 00:57:53', '2019-03-24 00:57:53'),
(2, 'xuantruong', 'xuantruong97er@gmail.com', '84123996491', NULL, 'xuantruong', NULL, NULL, '2019-03-30 05:54:24', '2019-03-30 05:54:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`MaAdmin`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`MaDG`),
  ADD KEY `danhgia_matv_foreign` (`MaTV`),
  ADD KEY `danhgia_masp_foreign` (`MaSP`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGH`),
  ADD KEY `giohang_matv_foreign` (`MaTV`),
  ADD KEY `giohang_masp_foreign` (`MaSP`);

--
-- Chỉ mục cho bảng `kichthuoc`
--
ALTER TABLE `kichthuoc`
  ADD PRIMARY KEY (`MaKT`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `monthethao`
--
ALTER TABLE `monthethao`
  ADD PRIMARY KEY (`MaMon`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `sanpham_mamon_foreign` (`MaMon`),
  ADD KEY `sanpham_maloai_foreign` (`MaLoai`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`MaTV`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `MaAdmin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `MaDG` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaGH` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `kichthuoc`
--
ALTER TABLE `kichthuoc`
  MODIFY `MaKT` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `monthethao`
--
ALTER TABLE `monthethao`
  MODIFY `MaMon` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `MaTV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_masp_foreign` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `danhgia_matv_foreign` FOREIGN KEY (`MaTV`) REFERENCES `thanhvien` (`MaTV`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_masp_foreign` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `giohang_matv_foreign` FOREIGN KEY (`MaTV`) REFERENCES `thanhvien` (`MaTV`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_maloai_foreign` FOREIGN KEY (`MaLoai`) REFERENCES `loaisanpham` (`MaLoai`),
  ADD CONSTRAINT `sanpham_mamon_foreign` FOREIGN KEY (`MaMon`) REFERENCES `monthethao` (`MaMon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
