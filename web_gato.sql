-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 05, 2020 lúc 04:23 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_gato`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_table`
--

CREATE TABLE `admin_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `level` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_table`
--

INSERT INTO `admin_table` (`id`, `email`, `name`, `password`, `phone`, `active`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin123@gmail.com', 'Admin admin', '$2y$10$q72PDIpBVoVDXHWooXu8Tez78P7ovicwkp0SCZIEXtiTeVBFvnojO', 123456789, 1, 1, '2019-12-29 00:50:39', NULL),
(2, 'linh123@gmail.com', 'Linhlinh', '$2y$10$pp8IvJ9w6u2sf4uH/nTijuGfiPrO5CocXLkiC/GB2T/wc.ZAa1/ZG', 123456789, 1, 1, '2019-12-29 00:50:39', NULL),
(3, 'truong123@gmail.com', 'admin Truong', '$2y$10$VOJ/OWlcw773oseov.ETIu7GehRwAk/Yx69c3cXmDGpthszQ5OHta', 123456789, 1, 1, '2019-12-29 00:50:39', NULL),
(4, 'dai123@gmail.com', 'Admin Dai', '$2y$10$Bm0K4mqebUuOzi6ZcmLfQezgTj5iUNy49ZexuL9xtHVg6aUZnvpKC', 123456789, 1, 1, '2019-12-29 00:50:39', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cate_blog`
--

CREATE TABLE `cate_blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cate_menu` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cate_menu`
--

CREATE TABLE `cate_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_order` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cate_menu`
--

INSERT INTO `cate_menu` (`id`, `name`, `number_order`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Danh mục sản phẩm', 2, 'mô tả Danh mục sản phẩm', 1, '2019-12-29 00:50:39', NULL),
(2, 'Home', 1, 'mô tả Home', 1, '2019-12-29 00:50:39', NULL),
(3, 'Tin tức', 3, 'mô tả Danh mục sản phẩm', 1, '2019-12-29 00:50:39', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cate_product`
--

CREATE TABLE `cate_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cate_menu` bigint(20) UNSIGNED NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cate_product`
--

INSERT INTO `cate_product` (`id`, `name`, `slug`, `image`, `id_cate_menu`, `active`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Bánh sinh nhật', 'banh-sinh-nhat', 'banhhoa4.jpg', 1, 1, 'Bánh sinh nhật', '2019-12-29 00:50:39', NULL),
(2, 'Bánh hình con vật', 'banh-hinh-con-vat', 'banhhoa4.jpg', 1, 1, 'Banh hình con vật', '2019-12-29 00:50:39', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `details_order`
--

CREATE TABLE `details_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_product` bigint(20) NOT NULL,
  `id_order` bigint(20) NOT NULL,
  `price` double(8,2) UNSIGNED NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message_contact`
--

CREATE TABLE `message_contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `phone` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_07_012335_create_product_table', 1),
(4, '2019_12_07_014123_create_cate_product_table', 1),
(5, '2019_12_07_025217_create_cate_menu_table', 1),
(6, '2019_12_07_035827_create_cate_blog_table', 1),
(7, '2019_12_07_040010_create_orders_table', 1),
(8, '2019_12_07_040040_create_details_order_table', 1),
(9, '2019_12_07_040144_create_permission_table', 1),
(10, '2019_12_07_040310_create_slider_table', 1),
(11, '2019_12_07_043149_create_admin_table', 1),
(12, '2019_12_07_043254_create_tag_blog_table', 1),
(13, '2019_12_20_130856_create_blog_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `time_receipt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total` double(8,2) UNSIGNED NOT NULL,
  `title_cake` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total_pay` double(8,2) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission`
--

CREATE TABLE `permission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) UNSIGNED NOT NULL,
  `sale_price` double(8,2) UNSIGNED NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `new` int(11) NOT NULL DEFAULT 1,
  `count_view` int(11) NOT NULL DEFAULT 0,
  `count_sale` int(11) NOT NULL DEFAULT 0,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cate_product` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `image`, `price`, `sale_price`, `active`, `new`, `count_view`, `count_sale`, `short_description`, `full_description`, `id_cate_product`, `size`, `created_at`, `updated_at`) VALUES
(1, 'Blue Kitty', 'hello-kitty', 'banh1.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD001', 'Mã: BDD001\nKích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(2, 'Maruco', 'maruco', 'banh2.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD002', 'Mã: BDD002\nKích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(3, 'Kute Dog', 'kute-dog', 'banh3.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD003', 'Mã: BDD003\nKích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 250.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(4, 'Mèo 3D', 'meo-3d', 'banh4.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD004', 'Mã: BDD00p\nKích thước to nhỏ tùy theo mức giá. 180.000đ Kích thước đế 18 cm 190.000đ Kích thước đế 20 cm 240.000đ-250.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(5, 'Chim cánh cụt', 'chim-canh-cut', 'banh5.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD005', 'Mã: BDD005\nKích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(6, 'Gấu vẽ mặt', 'gau-ve-mat', 'banh6.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD006', 'Mã: BDD006\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(7, 'Smiling girl', 'smiling-girl', 'banh7.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD007', 'Mã: BDD007\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(8, 'Angry bird', 'angry-bird', 'banh8.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD008', 'Mã: BDD008\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(9, 'Doremon', 'doremon', 'banh9.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD009', 'Mã: BDD009\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(10, 'Ô tô 3d', 'o-to-3d', 'banh10.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD010', 'Mã: BDD010', 1, '22cm', '2019-12-29 00:50:39', NULL),
(11, 'Khỉ 3d', 'khi-3d', 'banh11.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD011', 'Mã: BDD011', 1, '22cm', '2019-12-29 00:50:39', NULL),
(12, 'Gấu 3d', 'gau-3d', 'banh10.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD012', 'Mã: BDD012', 1, '22cm', '2019-12-29 00:50:39', NULL),
(13, 'Gấu panda 3d', 'gau-panda-3d', 'banh10.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD015', 'Mã: BDD015\n                Kích thước to nhỏ tùy theo mức giá. 180.000đ Kích thước đế 18 cm 240.000đ-250.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(14, 'Fly Cock', 'fly-cock', 'banh16.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD016', 'Mã: BDD016\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(15, 'Eating Dog', 'eating-dog', 'banh17.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD017', 'Mã: BDD017\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(16, 'Fat Dog', 'fat-dog', 'banh18.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD018', 'Mã: BDD018\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(17, 'Monkey Face', 'monkey-face', 'banh19.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD019', 'Mã: BDD019\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(18, 'Pink Pig', 'pink-pig', 'banh20.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD020', 'Mã: BDD020\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(19, 'Trâu xinh', 'trau-xinh', 'banh21.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD021', 'Mã: BDD021\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(20, 'Mickey', 'mickey', 'banh22.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD022', 'Mã: BDD022\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(21, 'Minnie', 'minnie', 'banh23.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD023', 'Mã: BDD023\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(22, 'Tiger', 'tiger', 'banh24.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD024', 'Mã: BDD024\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(23, 'Lợn siêu nhân (Super pig)', 'lon-sieu-nhan-super-pig', 'banh25.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD025', 'Mã: BDD025\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(24, 'Purple Dragon', 'purple-dragon', 'banh26.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD026', 'Mã: BDD026\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(25, 'Mèo mimi', 'meo-mimi', 'banh27.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD027', 'Mã: BDD027\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(26, 'Hey boy', 'hey-boy', 'banh28.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD028', 'Mã: BDD028\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(27, 'Lady smiling', 'lady-smiling', 'banh29.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD029', 'Mã: BDD029\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(28, 'Tiger face', 'tiger-face', 'banh30.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD030', 'Mã: BDD030\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(29, 'Snake', 'snake', 'banh31.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD031', 'Mã: BDD031\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(30, 'Fat Pig', 'fat-pig', 'banh32.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD032', 'Mã: BDD032\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(31, 'Dog Dog', 'dog-dog', 'banh33.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD033', 'Mã: BDD033\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(32, 'Gà Mẹ', 'ga-me', 'banh34.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD034', 'Mã: BDD034\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(33, 'Vịt Donald', 'vit-donald', 'banh35.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD035', 'Mã: BDD035\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(34, 'Dê xì tin', 'de-xi-tin', 'banh36.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BDD036', 'Mã: BDD036\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(35, 'Bánh giỏ hoa', 'banh-gio-hoa', 'banhhoa1.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BH001', 'Mã: BH001\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(36, 'Bánh màu hoa', 'banh-mau-hoa', 'banhhoa2.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BH002', 'Mã: BH002\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(37, 'Bánh hoa trái tim', 'banh-hoa-trai-tim', 'banhhoa3.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BH003', 'Mã: BH003\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL),
(38, 'Bánh hoa tim', 'banh-hoa-tim', 'banhhoa4.jpg', 200000.00, 0.00, 1, 1, 0, 0, 'Mã: BH004', 'Mã: BH004\n                Kích thước to nhỏ tùy theo mức giá. 200.000đ Kích thước đế 18 cm 260.000đ Kích thước đế 22 cm 300.000đ Kích thước đế 26 cm 500.000đ Kích thước đế 35 cm', 1, '22cm', '2019-12-29 00:50:39', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_order` int(11) NOT NULL DEFAULT 100,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag_blog`
--

CREATE TABLE `tag_blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `id_blog` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `phone` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_table_email_unique` (`email`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cate_blog`
--
ALTER TABLE `cate_blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cate_menu`
--
ALTER TABLE `cate_menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cate_product`
--
ALTER TABLE `cate_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cate_product_name_unique` (`name`);

--
-- Chỉ mục cho bảng `details_order`
--
ALTER TABLE `details_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `message_contact`
--
ALTER TABLE `message_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission_name_unique` (`name`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_name_unique` (`name`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tag_blog`
--
ALTER TABLE `tag_blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cate_blog`
--
ALTER TABLE `cate_blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cate_menu`
--
ALTER TABLE `cate_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `cate_product`
--
ALTER TABLE `cate_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `details_order`
--
ALTER TABLE `details_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `message_contact`
--
ALTER TABLE `message_contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `permission`
--
ALTER TABLE `permission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tag_blog`
--
ALTER TABLE `tag_blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
