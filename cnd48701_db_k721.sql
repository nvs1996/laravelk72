-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2020 at 09:55 PM
-- Server version: 10.3.21-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cnd48701_db_k72`
--

-- --------------------------------------------------------

--
-- Table structure for table `attr`
--

CREATE TABLE `attr` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE `attribute` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`id`, `name`) VALUES
(1, 'Kích thước'),
(3, 'Hãng sản xuất');

-- --------------------------------------------------------

--
-- Table structure for table `bang_moi`
--

CREATE TABLE `bang_moi` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(10) UNSIGNED NOT NULL,
  `state` tinyint(3) UNSIGNED DEFAULT NULL,
  `full` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NGuyễn thế phúc',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bang_phu`
--

CREATE TABLE `bang_phu` (
  `id` int(10) UNSIGNED NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bang_moi_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent`) VALUES
(10, 'Gạch lát nền', 0),
(11, '800x800mm', 10),
(12, '600x600mm', 10),
(13, 'Gạch ốp', 0),
(15, '500x500mm', 10),
(16, '400x400mm', 10),
(17, '300x300mm', 10),
(18, '300x600mm', 13),
(19, '400x800mm', 13),
(20, 'Gạch gỗ thanh', 0),
(21, '150x800mm', 20),
(22, 'Gạch bông porcelain', 0),
(23, 'Gạch ốp lát cao cấp', 0),
(24, '600x1200mm', 23),
(25, 'Vi tinh 800x800mm', 23),
(26, 'Muối tan 800x800mm', 23);

-- --------------------------------------------------------

--
-- Table structure for table `constructions`
--

CREATE TABLE `constructions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `detail2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `constructions`
--

INSERT INTO `constructions` (`id`, `name`, `detail`, `img`, `detail2`, `img2`) VALUES
(1, 'Công trình mới của công ty CDN tại quận 1 !!!!', 'Theo thông tin từ FECON, ngay những ngày đầu năm mới 2019, Công ty đã ký nhiều hợp đồng thầu mới, trong đó đáng chú gói thầu trị giá 1 triệu USD tại thị trường Myanma. Sáu tháng đầu năm 2018, TP HCM có 100 chung cư trong tổng số hơn 1.000 chung cư trên địa bàn xảy ra tranh chấp. Trong đó, chỉ có 34 trường hợp đang được Sở Xây dựng TP kiểm tra, xử lý.\r\n', 'HjnqiD5VQ.jpg', '213213', 'IVrdXefq7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `costs`
--

CREATE TABLE `costs` (
  `id` int(10) UNSIGNED NOT NULL,
  `detail` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `img2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `costs`
--

INSERT INTO `costs` (`id`, `detail`, `img`, `img2`, `detail2`) VALUES
(1, 'Bảng báo giá sửa chữa, cải tạo nhà CND 2020 !!!', 'iAKbmU908.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(18,0) DEFAULT NULL,
  `state` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_01_22_041435_create_bang_moi', 1),
(2, '2019_01_22_041831_create_bang_phu', 1),
(3, '2019_02_14_022138_create_category_table', 1),
(4, '2019_02_14_022817_create_product_table', 1),
(5, '2019_02_14_024556_create_users_table', 1),
(6, '2019_02_17_034232_create_customer_table', 1),
(7, '2019_02_17_034246_create_order_table', 1),
(8, '2019_02_17_034303_create_attr_table', 1),
(9, '2019_02_26_031357_create_info_table', 1),
(10, '2019_02_28_021911_create_attribute_table', 1),
(11, '2019_02_28_021949_create_values_table', 1),
(12, '2019_02_28_030452_create_values_product_table', 1),
(13, '2019_03_02_021722_create_variant_table', 1),
(14, '2019_03_02_030543_create_variant_values_table', 1),
(15, '2019_04_07_133238_poster', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `img2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `content`, `img`, `img2`, `content2`) VALUES
(3, 'asasa', 'asasas', '', NULL, NULL),
(4, 'Tin tức mới nhất của CND', '111', '', NULL, NULL),
(5, 'Hướng dẫn cách chọn mẫu gạch cho ngôi nhà của bạn', '111', '', NULL, NULL),
(6, 'Gạch 80*80 đang có những sản phẩm cực hot', '111', '', NULL, NULL),
(7, 'Bộ sưu tập 2020 mới được CND cập nhật', '111', '', NULL, NULL),
(8, 'Tin tức mới nhất của CND', '111', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(18,0) NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poster`
--

CREATE TABLE `poster` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poster`
--

INSERT INTO `poster` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'sas', 'cMCRQMXfG.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(18,0) NOT NULL DEFAULT 0,
  `state` tinyint(3) UNSIGNED NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info2` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info3` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info4` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info5` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info6` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `describe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_code`, `name`, `price`, `state`, `info`, `info1`, `info2`, `info3`, `info4`, `info5`, `info6`, `describe`, `img`, `img2`, `img3`, `category_id`, `created_at`, `updated_at`) VALUES
(14, 'KC89001', 'PORCELAIN MEN KIM CƯƠNG SIÊU BÓNG KC89001', '260000', 1, 'PORCELAIN MEN KIM CƯƠNG SIÊU BÓNG KC89001\r\n\r\nKích thước: 800x800mm\r\n\r\nChất liệu: Porcelain, phẳng\r\n\r\nCông nghệ: Kim cương NANO siêu bóng\r\nMàu: Xám tro - vân đá rễ cây\r\nBề mặt : Bề mặt: phẳng - siêu bóng, được phủ lớp men Kim Cương siêu cứng giúp chống trầy xước tốt\r\nĐộ bóng đạt 99%, Bóng nhưng không trơn - trượt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'V47HJ6Crm.jpg', NULL, NULL, 11, '2020-03-11 05:30:11', '2020-03-11 07:05:47'),
(15, 'LX6639', 'PORCELAIN MÀI BÓNG NANO LX6639', '180000', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LZ0XlxAAV.jpg', NULL, NULL, 12, '2020-03-11 05:35:43', '2020-03-11 05:36:04'),
(24, 'W158001', 'Gạch ốp lát gỗ thanh cao cấp W158001', '200000', 1, 'Thương hiệu: CMC', 'Tên sản phẩm: Gạch ốp lát gỗ thanh cao cấp', 'Mã sản phẩm: W158001', 'Kích thước: 150x800mm', 'Chất liệu: Ceramic', NULL, NULL, NULL, 'bMwSoxRrI.jpg', 'Mm7ehUgox.jpg', 'cqKQih4ep.jpg', 21, '2020-03-15 09:35:06', '2020-03-18 07:26:26'),
(31, 'LX8825', 'GẠCH PORCELAIN MÀI NANO SIÊU BÓNG LX8825', '230000', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'N2DrJB55X.jpg', 'ghRbUTMVX.jpg', 'E2sWXe3lF.jpg', 11, '2020-03-18 08:54:11', '2020-03-20 20:57:06'),
(33, 'LX8814', 'PORCELAIN MÀI NANO SIÊU BÓNG LX8814', '220000', 1, 'Thương hiệu: CMC', 'Tên sản phẩm: Gạch Porcelain mài nano siêu bóng', 'Mã sản phẩm: LX8814', 'Chất liệu: Porcelain xương bán sứ - độ cứng cao', NULL, NULL, NULL, NULL, 'TU6P2HXG4.jpg', 'EVNC8E7lb.jpg', 'xErwK08r9.jpg', 11, '2020-03-20 20:59:42', '2020-03-20 21:03:00'),
(34, 'LX8820', 'PORCELAIN MÀI NANO SIÊU BÓNG LX8820', '220000', 1, 'Thương hiệu: CMC', 'Tên sản phẩm: Gạch porcelain mài nano siêu bóng', 'Mã sản phẩm: LX8820', 'Chất liệu: Porcelain xương bán sứ - độ cứng cao', 'Bề mặt: Phẳng - bóng', NULL, NULL, NULL, 'J8LAQeCmm.jpg', 'jORZLNZ9E.jpg', 'mtMZk1bcW.jpg', 11, '2020-03-20 21:05:40', '2020-03-20 21:05:40'),
(35, 'LX8821', 'PORCELAIN MÀI NANO SIÊU BÓNG LX8821', '220000', 1, 'Thương hiệu: CMC', 'Tên sản phẩm: Gạch porcelain mài nano siêu bóng', 'Mã sản phẩm: LX8820', 'Chất liệu: Porcelain xương bán sứ - độ cứng cao', 'Bề mặt: Phẳng - bóng', NULL, NULL, NULL, 'q35LOxZUA.jpg', '4uN1dWm5n.jpg', 'no-img.jpg', 11, '2020-03-20 21:07:21', '2020-03-20 21:07:21'),
(36, 'LX8822', 'GẠCH LÁT MÀI NANO SIÊU BÓNG LX8822', '220000', 1, 'Thương hiệu: CMC', 'Tên sản phẩm: Gạch porcelain mài nano siêu bóng', 'Mã sản phẩm: LX8822', 'Chất liệu: Porcelain xương bán sứ - độ cứng cao', 'Bề mặt: Phẳng - bóng', NULL, NULL, NULL, 'wNyDY3ymp.jpg', 'DsphKz8QO.jpg', 'srqhIcDKd.jpg', 10, '2020-03-20 21:11:30', '2020-03-20 21:11:30'),
(37, 'LX8823', 'GẠCH LÁT MÀI NANO SIÊU BÓNG LX8823', '220000', 1, 'Thương hiệu: CMC', 'Tên sản phẩm: Gạch porcelain mài nano siêu bóng', 'Mã sản phẩm: LX8823', 'Chất liệu: Porcelain xương bán sứ - độ cứng cao', 'Bề mặt: Phẳng - bóng', NULL, NULL, NULL, 'AyFWLG841.jpg', 'nFR0Rhe7A.jpg', 'ohovFQqeG.jpg', 11, '2020-03-20 21:13:24', '2020-03-20 21:13:24'),
(38, 'LX8824', 'GẠCH LÁT MÀI NANO SIÊU BÓNG LX8824', '220000', 1, 'Thương hiệu: CMC', 'Tên sản phẩm: Gạch lát mài nano siêu bóng', 'Mã sản phẩm: LX8824', 'Chất liệu: Porcelain xương bán sứ - độ cứng cao', 'Bề mặt: Phẳng - bóng', NULL, NULL, NULL, '2pbkNYZB6.jpg', 'Q2nJdH01U.jpg', 'CLsFUTcLb.jpg', 11, '2020-03-20 21:15:24', '2020-03-20 21:15:24'),
(39, 'GX6801', 'GẠCH LÁT NỀN MEN MATT GX6801', '165000', 1, 'Thương hiệu: CMC', 'Tên sản phẩm: Gạch lát nền men matt', 'Mã sản phẩm: GX6801', 'Chất liệu: Porcelain xương bán sứ - độ cứng cao', 'Bề mặt: Phẳng - nhám', NULL, NULL, NULL, 'ruw8MsJe6.jpg', 'KkQt4sOCm.jpg', 'IfGe1tKQU.jpg', 12, '2020-03-20 21:20:07', '2020-03-20 21:20:07'),
(40, 'LD36102', 'GẠCH ỐP CERAMIC MEN BÓNG LD36102', '135000', 1, 'Thương hiệu: CMC', 'Tên sản phẩm: Gạch ốp ceramic men bóng', 'Mã sản phẩm: LD36102', 'Chất liệu: Ceramic', NULL, NULL, NULL, NULL, 'izrjuDTT2.jpg', 'bId2NxNmR.jpg', 'n7k9yW1pQ.jpg', 18, '2020-03-20 21:26:07', '2020-03-20 21:26:07'),
(41, 'VN3302', 'GẠCH LÁT NỀN MEN SUGAR VN3302', '130000', 1, 'Thương hiệu: CMC', 'Tên sản phẩm: Gạch lát nền men sugar', 'Mã sản phẩm: VN3302', 'Chất liệu: Ceramic', 'Bề mặt: Phẳng - nhám', NULL, NULL, NULL, 'bCwmfOPz3.jpg', 'F1V2tVi88.jpg', 'wWv76MWbA.jpg', 17, '2020-03-20 21:31:40', '2020-03-20 21:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `detail`, `img`, `img2`, `detail2`) VALUES
(1, 'Dự án CND', 'Theo thông tin từ FECON, ngay những ngày đầu năm mới 2019, Công ty đã ký nhiều hợp đồng thầu mới, trong đó đáng chú gói thầu trị giá 1 triệu USD tại thị trường Myanma. ', 'VxV2pgIgn.jpg', 'VxV2pgIgn.jpg', 'Nội dung phụ'),
(2, 'Dự án CND', 'Theo thông tin từ FECON, ngay những ngày đầu năm mới 2019, Công ty đã ký nhiều hợp đồng thầu mới, trong đó đáng chú gói thầu trị giá 1 triệu USD tại thị trường Myanma.', 'rnJgaOMF3.jpg', '0', '0'),
(3, 'Dự án CND', 'Theo thông tin từ FECON, ngay những ngày đầu năm mới 2019, Công ty đã ký nhiều hợp đồng thầu mới, trong đó đáng chú gói thầu trị giá 1 triệu USD tại thị trường Myanma.', 'VElq0Bq5b.jpg', '0', '0'),
(4, 'Dự án CND', 'Theo thông tin từ FECON, ngay những ngày đầu năm mới 2019, Công ty đã ký nhiều hợp đồng thầu mới, trong đó đáng chú gói thầu trị giá 1 triệu USD tại thị trường Myanma.', 'bLb5PLneI.jpg', '0', '0'),
(5, 'Dự án CND', 'Theo thông tin từ FECON, ngay những ngày đầu năm mới 2019, Công ty đã ký nhiều hợp đồng thầu mới, trong đó đáng chú gói thầu trị giá 1 triệu USD tại thị trường Myanma.', 'Lp2w1B4uA.jpg', '0', '0'),
(6, 'Dự án CND', 'Theo thông tin từ FECON, ngay những ngày đầu năm mới 2019, Công ty đã ký nhiều hợp đồng thầu mới, trong đó đáng chú gói thầu trị giá 1 triệu USD tại thị trường Myanma.', 'bJDbGQ1eU.jpg', '0', '0'),
(7, 'Dự án CND', 'Theo thông tin từ FECON, ngay những ngày đầu năm mới 2019, Công ty đã ký nhiều hợp đồng thầu mới, trong đó đáng chú gói thầu trị giá 1 triệu USD tại thị trường Myanma.', 'rICStfdAp.jpg', '0', '0'),
(8, 'Dự án CND', 'Theo thông tin từ FECON, ngay những ngày đầu năm mới 2019, Công ty đã ký nhiều hợp đồng thầu mới, trong đó đáng chú gói thầu trị giá 1 triệu USD tại thị trường Myanma.', 'Rh5eobmTq.jpg', '8w5zqkGJv.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(500) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `img`, `state`) VALUES
(1, '7t1gl6Xk1.jpg', 0),
(2, 'f1hiHjeji.jpg', 1),
(3, 'jW9oAHJP6.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `full`, `address`, `phone`, `level`, `remember_token`) VALUES
(1, 'admin@gmail.com', '$2y$10$Ebbs1ttATo775G2hj9QiN.fZDxbTtpHzTrujMabwYYGxL2OkOSnNK', 'Admin', 'Thường tín', '0356653301', 1, 'W62hBCnTJP2wgZMP60WVay2UEyPLhLW1KzWOmfvQ1g67xACzKKQmUGYrIxSd'),
(2, 'zimpro@gmail.com', '$2y$10$2Iun0yuOPxvQSyY3BEBSGOM1yCBENJSoFAeMfe6OJSkg1QvMEy57i', 'Nguyễn thế vũ', 'Bắc giang', '0356654487', 2, NULL),
(4, 'zimpro9x@gmail.com', '$2y$10$N3wFsjBxpXrG66SuTseYW.zyG0attSjYRrzwLNO4aPmiceK.my8/S', 'Nguyễn Văn Công', 'Nghệ An', '0357846659', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE `values` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attr_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `values`
--

INSERT INTO `values` (`id`, `value`, `attr_id`) VALUES
(10, '800x800', 1),
(11, 'CMC', 3),
(12, '600x600', 1),
(13, '150x800', 1),
(15, '300x600', 1),
(16, '300x300', 1);

-- --------------------------------------------------------

--
-- Table structure for table `values_product`
--

CREATE TABLE `values_product` (
  `values_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `values_product`
--

INSERT INTO `values_product` (`values_id`, `product_id`) VALUES
(10, 14),
(11, 14),
(12, 15),
(11, 15),
(13, 24),
(11, 24),
(10, 31),
(11, 31),
(10, 33),
(11, 33),
(10, 34),
(11, 34),
(10, 35),
(11, 35),
(10, 36),
(11, 36),
(10, 37),
(11, 37),
(10, 38),
(11, 38),
(12, 39),
(11, 39),
(15, 40),
(11, 40),
(16, 41),
(11, 41);

-- --------------------------------------------------------

--
-- Table structure for table `variant`
--

CREATE TABLE `variant` (
  `id` int(10) UNSIGNED NOT NULL,
  `price` decimal(18,0) NOT NULL DEFAULT 0,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variant`
--

INSERT INTO `variant` (`id`, `price`, `product_id`) VALUES
(17, '260000', 14),
(18, '180000', 15),
(25, '0', 24),
(26, '0', 24),
(28, '0', 31),
(30, '0', 33),
(31, '0', 34),
(32, '0', 35),
(33, '0', 36),
(34, '0', 37),
(35, '0', 38),
(36, '0', 39),
(37, '0', 40),
(38, '0', 41);

-- --------------------------------------------------------

--
-- Table structure for table `variant_values`
--

CREATE TABLE `variant_values` (
  `variant_id` int(10) UNSIGNED NOT NULL,
  `values_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variant_values`
--

INSERT INTO `variant_values` (`variant_id`, `values_id`) VALUES
(17, 10),
(17, 11),
(18, 12),
(18, 11),
(25, 10),
(26, 13),
(28, 10),
(30, 10),
(30, 11),
(31, 10),
(31, 11),
(32, 10),
(32, 11),
(33, 10),
(33, 11),
(34, 10),
(34, 11),
(35, 10),
(35, 11),
(36, 12),
(36, 11),
(37, 15),
(37, 11),
(38, 16),
(38, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attr`
--
ALTER TABLE `attr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attr_order_id_foreign` (`order_id`);

--
-- Indexes for table `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bang_moi`
--
ALTER TABLE `bang_moi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bang_phu`
--
ALTER TABLE `bang_phu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bang_phu_bang_moi_id_foreign` (`bang_moi_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name_unique` (`name`);

--
-- Indexes for table `constructions`
--
ALTER TABLE `constructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costs`
--
ALTER TABLE `costs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_users_id_foreign` (`users_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_product_code_unique` (`product_code`),
  ADD KEY `product_category_id_foreign` (`category_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `values_attr_id_foreign` (`attr_id`);

--
-- Indexes for table `values_product`
--
ALTER TABLE `values_product`
  ADD KEY `values_product_values_id_foreign` (`values_id`),
  ADD KEY `values_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `variant`
--
ALTER TABLE `variant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `variant_product_id_foreign` (`product_id`);

--
-- Indexes for table `variant_values`
--
ALTER TABLE `variant_values`
  ADD KEY `variant_values_variant_id_foreign` (`variant_id`),
  ADD KEY `variant_values_values_id_foreign` (`values_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attr`
--
ALTER TABLE `attr`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bang_moi`
--
ALTER TABLE `bang_moi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bang_phu`
--
ALTER TABLE `bang_phu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `constructions`
--
ALTER TABLE `constructions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `costs`
--
ALTER TABLE `costs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poster`
--
ALTER TABLE `poster`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `values`
--
ALTER TABLE `values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `variant`
--
ALTER TABLE `variant`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attr`
--
ALTER TABLE `attr`
  ADD CONSTRAINT `attr_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bang_phu`
--
ALTER TABLE `bang_phu`
  ADD CONSTRAINT `bang_phu_bang_moi_id_foreign` FOREIGN KEY (`bang_moi_id`) REFERENCES `bang_moi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `values`
--
ALTER TABLE `values`
  ADD CONSTRAINT `values_attr_id_foreign` FOREIGN KEY (`attr_id`) REFERENCES `attribute` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `values_product`
--
ALTER TABLE `values_product`
  ADD CONSTRAINT `values_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `values_product_values_id_foreign` FOREIGN KEY (`values_id`) REFERENCES `values` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `variant`
--
ALTER TABLE `variant`
  ADD CONSTRAINT `variant_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `variant_values`
--
ALTER TABLE `variant_values`
  ADD CONSTRAINT `variant_values_values_id_foreign` FOREIGN KEY (`values_id`) REFERENCES `values` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `variant_values_variant_id_foreign` FOREIGN KEY (`variant_id`) REFERENCES `variant` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
