-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 30, 2024 lúc 12:07 PM
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
-- Cơ sở dữ liệu: `websitethoitrang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id_admin_roles` int(11) NOT NULL,
  `admin_admin_id` int(11) NOT NULL,
  `roles_id_roles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_roles`
--

INSERT INTO `admin_roles` (`id_admin_roles`, `admin_admin_id`, `roles_id_roles`) VALUES
(8, 2, 2),
(17, 1, 1),
(64, 15, 3),
(65, 15, 1),
(69, 9, 2),
(70, 9, 3),
(71, 3, 2),
(72, 3, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_10_145423_create_tbl_admin_table', 1),
(6, '2023_04_14_025802_create_tbl_category_product', 2),
(7, '2023_04_14_141602_create_tbl_brand_product', 3),
(8, '2023_04_14_155952_create_tbl_product', 4),
(9, '2023_04_16_161704_tbl_customer', 5),
(10, '2023_04_17_063819_tbl_shipping', 6),
(14, '2023_04_17_132635_tbl_payment', 7),
(15, '2023_04_17_133246_tbl_order', 7),
(16, '2023_04_17_133331_tbl_order_details', 7),
(17, '2023_04_22_142131_create_app_models_roles_table', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_amin`
--

CREATE TABLE `tbl_amin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_amin`
--

INSERT INTO `tbl_amin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'hainguyen', '0389938946', NULL, NULL),
(2, 'author12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'author12', '0354481295', NULL, NULL),
(3, 'user12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user12', '0374268055', NULL, NULL),
(9, 'vannam@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'VanNam', '0389938945', NULL, NULL),
(15, 'hainguyen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'hainguyen12', '0912039232', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_desc` text NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` text NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(18, 'Thời trang đặc sắc việt namm', 'vnn', 1, NULL, NULL),
(19, 'Áo thời trang nam', 'tt nam', 1, NULL, NULL),
(20, 'Áo thời trang nữ', 'tt nu', 1, NULL, NULL),
(21, 'Quần thời trang nam', 'q tt nam hot', 1, NULL, NULL),
(22, 'Quần thời trang nữ', 'q tt nu', 1, NULL, NULL),
(23, 'Giày dép nam', 'gd nam', 1, NULL, NULL),
(24, 'Giày dép nữ', 'gd nu', 1, NULL, NULL),
(25, 'Thời trang cho bé', 'tt cho be', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(10, 'quanhoang', 'quanhoang12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0389938946', NULL, NULL),
(11, 'hainguyen', 'hainguyen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0389938946', NULL, NULL),
(12, 'hainguyen13', 'hainguyen13@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0437855433', NULL, NULL),
(13, 'hainguyen14', 'hainguyen14@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0437855433', NULL, NULL),
(14, 'kh01', 'kh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0437855433', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_code` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(100) NOT NULL,
  `order_status` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_code`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(63, '65656f69', 10, 66, 86, '99000', 2, '2023-11-28 04:41:13', NULL),
(64, '6566f290', 11, 67, 87, '907956', 2, '2023-11-29 08:13:04', NULL),
(65, '65688cf3', 12, 68, 88, '2882652', 1, '2023-11-30 13:24:03', NULL),
(66, '65797c03', 10, 69, 89, '302652', 2, '2023-12-13 09:40:19', NULL),
(67, '6579abbe', 11, 70, 90, '78000', 2, '2023-12-13 13:03:58', NULL),
(68, '66052752', 14, 71, 91, '580100', 2, '2024-03-28 08:16:18', NULL),
(69, '66055d1a', 10, 72, 92, '302652', 1, '2024-03-28 12:05:46', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_code` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_size` varchar(100) DEFAULT NULL,
  `product_color` varchar(100) DEFAULT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `order_code`, `product_id`, `product_name`, `product_size`, `product_color`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(63, 63, '65656f69', 50, 'Áo dài trơn truyền thống màu tím huế cổ', 'S', 'Black', '99000', 2, NULL, NULL),
(64, 64, '6566f290', 47, 'Áo Dài Cách Tân Cổ Phục', 'XS', 'White', '302652', 3, NULL, NULL),
(65, 65, '65688cf3', 47, 'Áo Dài Cách Tân Cổ Phục', 'M', 'Red', '302652', 2, NULL, NULL),
(66, 65, '65688cf3', 55, 'Áo Thun Hoa TULIP Nam Nữ Unisex Form Rộng', 'XL', 'Red', '1290000', 2, NULL, NULL),
(67, 66, '65797c03', 47, 'Áo Dài Cách Tân Cổ Phục', 'XS', 'Black', '302652', 97, NULL, NULL),
(68, 67, '6579abbe', 49, 'Áo Dài Truyền Thống Nữ 4 Tà May Sẵn Dáng Xuông', 'S', 'Red', '78000', 1, NULL, NULL),
(69, 68, '66052752', 80, 'Đầm dự tiệc dáng xoè chữ A tiểu thư', 'S', 'White', '158000', 1, NULL, NULL),
(70, 68, '66052752', 58, 'Áo Thun Nam Ngắn Tay Cổ Tròn Họa Tiết Màu', 'S', 'White', '200000', 1, NULL, NULL),
(71, 68, '66052752', 53, 'Áo giữ nhiệt Nữ co giãn 4 chiều tay dài ôm body thời trang', 'XS', 'White', '222100', 1, NULL, NULL),
(72, 69, '66055d1a', 47, 'Áo Dài Cách Tân Cổ Phục', 'XS', 'Black', '302652', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(86, '2', 1, NULL, NULL),
(87, '2', 1, NULL, NULL),
(88, '2', 1, NULL, NULL),
(89, '2', 1, NULL, NULL),
(90, '2', 1, NULL, NULL),
(91, '2', 1, NULL, NULL),
(92, '2', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `product_qty` int(11) NOT NULL,
  `product_sold` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_content` text NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `product_name`, `brand_id`, `product_qty`, `product_sold`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(47, 18, 'Áo Dài Cách Tân Cổ Phục', NULL, 98, 102, 'Áo Dài Cổ Phục Hoa Kỳ là sự kết hợp tinh tế giữa truyền thống và hiện đại, là biểu tượng của vẻ đẹp quyến rũ và tinh tế của người phụ nữ Á Đông. Được lấy cảm hứng từ nền văn hóa Việt Nam truyền thống và kết hợp với phong cách thời trang hiện đại, sản phẩm mang lại sự độc đáo và thanh lịch cho người mặc.', 'Mô Tả Sản Phẩm - Áo Dài Cổ Phục\r\n\r\nTên Sản Phẩm: Áo Dài Cổ Phục Hoa Kỳ\r\n\r\nMô Tả:\r\nÁo Dài Cổ Phục Hoa Kỳ là sự kết hợp tinh tế giữa truyền thống và hiện đại, là biểu tượng của vẻ đẹp quyến rũ và tinh tế của người phụ nữ Á Đông. Được lấy cảm hứng từ nền văn hóa Việt Nam truyền thống và kết hợp với phong cách thời trang hiện đại, sản phẩm mang lại sự độc đáo và thanh lịch cho người mặc.\r\n\r\nĐặc Điểm Nổi Bật:\r\n\r\nChất Liệu Vải: Sử dụng chất liệu vải lụa mịn cao cấp, Áo Dài Cổ Phục Hoa Kỳ mang lại cảm giác thoải mái và êm dịu cho người mặc.\r\n\r\nKiểu Dáng Độc Đáo: Thiết kế với cổ áo cổ phục truyền thống, tôn lên vẻ đẹp duyên dáng của người mặc. Điểm nhấn là những họa tiết truyền thống được thêu tinh xảo, tạo nên điểm nhấn quyến rũ.\r\n\r\nPhối Màu Sắc Tinh Tế: Áo Dài được thiết kế với các màu sắc truyền thống như trắng, đỏ, xanh dương, tạo nên sự sang trọng và lịch lãm.\r\n\r\nCông Nghệ May Cao Cấp: Sản phẩm được sản xuất bởi các nghệ nhân lành nghề, với kỹ thuật may tỉ mỉ, đảm bảo sự bền bỉ và đẹp mắt.\r\n\r\nThích Hợp Cho:\r\n\r\nCác dịp lễ truyền thống.\r\nTiệc cưới và sự kiện quan trọng.\r\nBuổi gặp gỡ chính thức và hội nghị.\r\nSize:\r\nCó sẵn các size từ S đến XL, phù hợp với nhiều dáng vóc.\r\n\r\nNội Dung Sản Phẩm:\r\n\r\nÁo Dài Cổ Phục Hoa Kỳ không chỉ là một chiếc áo truyền thống mà còn là biểu tượng của vẻ đẹp và sự thanh lịch. Với chất liệu vải lụa mịn, kiểu dáng độc đáo và phối màu tinh tế, sản phẩm là lựa chọn hoàn hảo để tôn lên vẻ đẹp truyền thống và quyến rũ của phụ nữ Việt Nam.\r\n\r\nChọn Áo Dài Cổ Phục Hoa Kỳ để trải nghiệm sự kết hợp hài hòa giữa nét truyền thống và vẻ đẹp hiện đại, làm nổi bật phong cách và cá tính của bạn trong mọi dịp quan trọng.', 302652, 'aodai569.png', 1, NULL, NULL),
(48, 18, 'Bộ áo dài truyền thống dáng xưa chụp TẾT', NULL, 100, 0, 'Bộ áo dài truyền thống dáng xưa chụp TẾT', 'Kho sỉ lẻ áo dài Thiên Ân \r\n\r\n1.Tên sản phẩm: Bộ áo dài truyền thống dáng suông\r\n\r\n2.Kiểu mẫu: Áo dài truyền thống\r\n\r\n3.Tay áo: tay dài\r\n\r\n4.Dài áo: 120cm\r\n\r\n5.Dài quần: 103-105cm ống rộng 33-35cm\r\n\r\n6.Kiểu cổ áo: cổ tròn\r\n\r\n7.Chất liệu: Áo lụa Tây thi chất co dãn thoải mái, vải mềm mịn\r\n\r\n8.Quần: Quần lụa\r\n\r\n==> Khách tham khảo size theo số đo ạ:\r\n\r\nSize S (ngực 80-82 eo 66-68)\r\n\r\nSize M (ngực 84-86 eo 70-72)\r\n\r\nSize L (ngực 88-90 eo 74-76)\r\n\r\nSize Xl (ngực 92-94 eo 78-80)\r\n\r\nSize XXL (ngực 96-98 eo 82-84)\r\n\r\nKhách chưa chọn được áo có thể inbox để shop tư vấn size miễnphí ạ!', 199000, 'aodai429.png', 1, NULL, NULL),
(49, 18, 'Áo Dài Truyền Thống Nữ 4 Tà May Sẵn Dáng Xuông', NULL, 99, 1, 'o Dài Truyền Thống Nữ 4 Tà May Sẵn Dáng Xuông là sự kết hợp hoàn hảo giữa vẻ đẹp truyền thống và sự thoải mái trong việc mặc. Với kiểu dáng độc đáo, sản phẩm mang lại sự tinh tế và quý phái cho người mặc, đồng thời giữ được nét truyền thống của áo dài Việt Nam.', 'Áo Dài Truyền Thống Nữ 4 Tà May Sẵn Dáng Xuông là sự lựa chọn hoàn hảo cho những người phụ nữ muốn kết hợp giữa vẻ đẹp truyền thống và phong cách hiện đại. Chất liệu vải lụa mịn màng kết hợp với kiểu dáng 4 tà may sẵn, tạo nên một bức tranh tinh tế và quyến rũ, phản ánh sự thanh lịch và sang trọng của người mặc.\r\n\r\nVới Áo Dài Truyền Thống Nữ 4 Tà May Sẵn Dáng Xuông, bạn không chỉ là người phụ nữ đẹp mắt, mà còn là người gìn giữ và tỏa sáng trong nền văn hóa truyền thống của đất nước.', 78000, 'aodai399.png', 1, NULL, NULL),
(50, 18, 'Áo dài trơn truyền thống màu tím huế cổ', NULL, 100, 4, 'Áo Dài Trơn Truyền Thống Màu Tím Huế Cổ là biểu tượng của sự thanh lịch và quyến rũ, mang đậm bản sắc văn hóa truyền thống Việt Nam. Sản phẩm được chế tác với sự kỳ công, từ chất liệu vải đến kiểu dáng, tạo nên một bức tranh tinh tế và lãng mạn cho người mặc.', 'Áo Dài Trơn Truyền Thống Màu Tím Huế Cổ là biểu tượng của sự hòa quyện giữa truyền thống và hiện đại. Với chất liệu vải lụa mịn màng và kiểu dáng truyền thống, sản phẩm không chỉ tôn lên vẻ đẹp của người mặc mà còn là sự kết hợp hài hòa của nền văn hóa Việt Nam.\r\n\r\nChọn Áo Dài Trơn Truyền Thống Màu Tím Huế Cổ để trải nghiệm vẻ đẹp quyến rũ và đẳng cấp, làm nổi bật phong cách và cá tính của bạn trong mọi dịp quan trọng.', 99000, 'aodai270.png', 1, NULL, NULL),
(51, 18, 'Áo dài cách tân gấm tơ mềm phối cúc bọc', NULL, 100, 0, 'Áo Dài Cách Tân Gấm Tơ Mềm Phối Cúc Bọc là sự hòa quyện giữa vẻ truyền thống và sự đương đại, mang lại cho người mặc sự thoải mái và sang trọng. Với chất liệu gấm tơ mềm mại và chi tiết phối cúc bọc tinh tế, sản phẩm là biểu tượng của sự độc đáo và quý phái.', 'Áo Dài Cách Tân Gấm Tơ Mềm Phối Cúc Bọc là lựa chọn tuyệt vời cho những người phụ nữ muốn thể hiện sự độc đáo và quý phái trong trang phục truyền thống. Chất liệu gấm tơ mềm mại kết hợp với chi tiết phối cúc bọc, tạo nên một chiếc áo dài không chỉ là trang phục, mà còn là tác phẩm nghệ thuật.\r\n\r\nVới Áo Dài Cách Tân Gấm Tơ Mềm Phối Cúc Bọc, bạn sẽ tỏa sáng trong mọi dịp, từ những buổi tiệc trang trọng đến những sự kiện văn hóa quan trọng. Chiếc áo dài này không chỉ là biểu tượng của vẻ đẹp mà còn là hiện thân của sự duyên dáng và quyến rũ.', 289000, 'aodai83.png', 1, NULL, NULL),
(52, 20, 'Đầm body nữ dáng xòe nhẹ xinh xắn', NULL, 100, 0, 'Đầm Body Nữ Dáng Xòe Nhẹ Xinh Xắn là sự kết hợp hoàn hảo giữa phong cách thời trang hiện đại và vẻ đẹp nữ tính. Với dáng xòe nhẹ, sản phẩm không chỉ tôn lên vóc dáng mà còn mang đến cho người mặc sự thoải mái và xinh xắn trong mọi bước đi.', 'Đầm Body Nữ Dáng Xòe Nhẹ Xinh Xắn là sự lựa chọn hoàn hảo cho những người phụ nữ muốn tỏa sáng trong vẻ ngoại hình trẻ trung và nữ tính. Chất liệu body ôm giúp tôn lên vóc dáng mà vẫn giữ được sự thoải mái, trong khi dáng xòe nhẹ tạo nên sự duyên dáng và quyến rũ.\r\n\r\nVới Đầm Body Nữ Dáng Xòe Nhẹ Xinh Xắn, bạn sẽ tỏa sáng trong mọi bước đi, từ những sự kiện trang trọng đến những dịp gặp gỡ bạn bè. Chiếc đầm này không chỉ là trang phục mà còn là biểu tượng của phong cách và sự tự tin.', 29000, 'ttnu32.png', 1, NULL, NULL),
(53, 20, 'Áo giữ nhiệt Nữ co giãn 4 chiều tay dài ôm body thời trang', NULL, 99, 1, 'Áo Giữ Nhiệt Nữ Co Giãn 4 Chiều Tay Dài Ôm Body Thời Trang là sự kết hợp hoàn hảo giữa tính năng giữ ấm và phong cách thời trang. Thiết kế tay dài ôm body giúp bảo vệ cơ thể khỏi lạnh lẽo, trong khi chất liệu co giãn 4 chiều mang lại sự thoải mái và linh hoạt.', 'Áo Giữ Nhiệt Nữ Co Giãn 4 Chiều Tay Dài Ôm Body Thời Trang không chỉ là sự lựa chọn thông minh để giữ ấm mà còn là biểu tượng của sự thoải mái và phong cách. Thiết kế tay dài ôm sát cơ thể giúp áo trở nên đẹp mắt và thời trang, làm nổi bật vóc dáng và tạo điểm nhấn cho phong cách cá nhân của bạn.', 222100, 'ttnu217.png', 1, NULL, NULL),
(54, 20, 'Áo Thun Cổ Tròn Kẻ Sọc Ngang Khủng Long', NULL, 100, 0, 'Áo thun cổ tròn kẻ sọc ngang khủng long là sự hòa quyện giữa thế giới thời trang và hình ảnh đáng yêu của khủng long. Thiết kế với kẻ sọc ngang tạo nên vẻ trẻ trung và hiện đại, còn hình ảnh khủng long thêm vào áo thun sự vui nhộn và phá cách', 'Chất liệu thoáng khí giúp áo thun trở nên thoải mái trong mọi hoạt động. Áo thun cổ tròn kẻ sọc ngang khủng long là sự lựa chọn lý tưởng cho những người yêu thích sự vui nhộn và muốn thể hiện cá tính riêng qua phong cách thời trang hàng ngày của mình', 177000, 'ttnu363.png', 1, NULL, NULL),
(55, 20, 'Áo Thun Hoa TULIP Nam Nữ Unisex Form Rộng', NULL, 100, 0, 'Áo thun hoa TULIP nam nữ unisex form rộng là biểu tượng của sự thoải mái và phong cách độc đáo. Thiết kế với họa tiết hoa TULIP tinh tế, áo thun này không chỉ tạo điểm nhấn nghệ thuật mà còn mang đến sự linh hoạt cho cả nam và nữ với form rộng.', 'Chất liệu thoáng khí và mềm mại giúp áo thun này trở thành lựa chọn phổ biến trong tủ đồ thời trang hàng ngày. Với form rộng, áo thun hoa TULIP không chỉ làm tôn lên phong cách cá nhân mà còn tạo nên sự thoải mái tối đa cho mọi hoạt động', 1290000, 'ttnu491.png', 1, NULL, NULL),
(56, 19, 'Áo khoác nam nữ thể thao chống nắng', NULL, 100, 0, 'Áo khoác nam nữ thể thao chống nắng là một sản phẩm không thể thiếu trong bộ sưu tập của những người yêu thể thao. Với chất liệu chống nắng hiệu quả, áo khoác này không chỉ giúp bảo vệ làn da khỏi tác động có hại của tia UV mà còn mang đến cảm giác thoải mái và tự tin.', 'Áo khoác nam nữ thể thao chống nắng là sự kết hợp hoàn hảo giữa phong cách và chức năng. Chất liệu chống nắng chuyên nghiệp giúp bảo vệ da khỏi tác động có hại của tia UV, đồng thời giữ cho cơ thể luôn thoáng khí và thoải mái trong mọi hoạt động thể thao. Thiết kế đa dạng với nhiều màu sắc và kiểu dáng phong cách, áo khoác này không chỉ làm nổi bật phong cách cá nhân mà còn đảm bảo an toàn cho làn da dưới ánh nắng mặt trời. Điều này làm cho sản phẩm trở thành một lựa chọn lý tưởng cho những người yêu thể thao và mong muốn duy trì vẻ ngoại hình khỏe mạnh mà không lo sợ tác động tiêu cực của tác động từ tia UV.', 180000, 'ao16.png', 1, NULL, NULL),
(57, 19, 'Áo thun nam nữ Cổ Tròn Phối Chữ to', NULL, 100, 0, 'Áo thun nam nữ cổ tròn phối chữ to là sự kết hợp tinh tế giữa thiết kế đơn giản và sự nổi bật. Với cổ tròn thoải mái, áo thun này mang đến sự dễ dàng và thoải mái khi mặc. Chữ in to và phối màu sắc tinh tế tạo nên điểm nhấn độc đáo, làm tôn lên phong cách và cá nhân hóa trang phục.', 'Chất liệu mềm mại và thoáng khí của áo thun giúp tạo cảm giác thoải mái trong mọi hoạt động. Phù hợp cho cả nam và nữ, sản phẩm này không chỉ là lựa chọn thời trang hiện đại mà còn thể hiện sự tự tin và phong cách độc đáo của người mặc. Áo thun cổ tròn phối chữ to là điểm nhấn thú vị trong tủ đồ, phản ánh sự cá tính và sáng tạo trong gu thời trang của bạn.', 151000, 'ao297.png', 1, NULL, NULL),
(58, 19, 'Áo Thun Nam Ngắn Tay Cổ Tròn Họa Tiết Màu', NULL, 99, 1, 'Áo thun nam ngắn tay cổ tròn với họa tiết màu là sự kết hợp hoàn hảo giữa phong cách và sự năng động. Thiết kế cổ tròn mang lại sự thoải mái, đồng thời họa tiết màu sắc tạo nên điểm nhấn nổi bật, làm tăng thêm sự sinh động cho trang phục.', 'Chất liệu nhẹ, thoáng khí giúp áo thun phù hợp cho mọi hoạt động trong ngày. Họa tiết màu sắc đa dạng và sáng tạo tạo nên sự linh hoạt trong việc phối hợp trang phục. Đây không chỉ là một chiếc áo thun thoải mái, mà còn là biểu tượng của sự sáng tạo và cá tính trong phong cách thời trang nam. Áo thun này là lựa chọn lý tưởng cho những người muốn tỏa sáng và thể hiện bản thân thông qua trang phục hàng ngày.', 200000, 'ao315.png', 1, NULL, NULL),
(59, 21, 'Quần Túi Hộp 4 Túi Phối Khóa Kéo Chất Kaki', NULL, 100, 0, 'Quần túi hộp với 4 túi phối khóa kéo, sử dụng chất liệu kaki, là sự lựa chọn hoàn hảo cho người thích sự thoải mái và tiện ích. Thiết kế hộp với 4 túi tạo nên không gian lưu trữ đa dạng, thuận tiện cho việc mang theo đồ cá nhân và đồ điện tử.', 'Chất liệu kaki mang lại cảm giác thoải mái và bền bỉ, phù hợp cho nhiều hoạt động khác nhau. Các khóa kéo được phối màu tạo điểm nhấn thú vị và cũng giúp bảo vệ đồ vật bên trong an toàn. Quần túi hộp với 4 túi và chất liệu kaki là sự kết hợp hoàn hảo giữa tiện ích và phong cách, phản ánh sự hiện đại và linh hoạt trong lối sống hàng ngày.', 490000, 'quan173.png', 1, NULL, NULL),
(60, 21, 'Quần Dài Nam Nữ Unisex 4 Kẻ Ngang', NULL, 100, 0, 'Quần dài nam nữ unisex với họa tiết 4 kẻ ngang là sự lựa chọn thời trang đa dạng và phổ biến. Thiết kế unisex mang lại sự linh hoạt, phù hợp cho cả nam và nữ. Họa tiết 4 kẻ ngang tạo điểm nhấn độc đáo và thời trang cho trang phục.', 'Chất liệu thoải mái và bền bỉ giúp quần dài phục vụ cho nhiều hoạt động khác nhau. Sự kết hợp giữa kiểu dáng hiện đại và tính ứng dụng làm cho quần trở thành một phần không thể thiếu trong tủ đồ đa dạng của bạn. Cho dù bạn là nam hay nữ, quần dài unisex 4 kẻ ngang là biểu tượng của sự thoải mái và phong cách trong thời trang hàng ngày.', 440000, 'quan269.png', 1, NULL, NULL),
(61, 21, 'Quần Jogger Kaki Nam Mẫu Mới Cạp Chun', NULL, 100, 0, 'Quần jogger kaki nam mẫu mới với cạp chun là sự kết hợp hoàn hảo giữa phong cách và thoải mái. Thiết kế jogger mang lại sự năng động và hiện đại, trong khi chất liệu kaki đảm bảo cảm giác thoải mái và bền bỉ.', 'Cạp chun linh hoạt giúp quần dễ dàng điều chỉnh, phù hợp với mọi vóc dáng. Sự sáng tạo trong mẫu mới thường đi kèm với các chi tiết thời trang, tạo điểm nhấn và tạo nên phong cách riêng biệt cho người mặc. Quần jogger kaki nam mẫu mới cạp chun là lựa chọn đẳng cấp cho những người muốn kết hợp giữa sự thoải mái của quần jogger và vẻ đẹp của chất liệu kaki trong phong cách hàng ngày.', 370000, 'quan392.png', 1, NULL, NULL),
(62, 22, 'Quần Tây Nữ Lưng Cao Đi Học', NULL, 100, 0, 'Quần tây nữ lưng cao là sự chọn lựa tinh tế và thích hợp cho những buổi học. Với thiết kế lưng cao, quần giúp tôn lên đường cong tự nhiên của cơ thể, mang lại vẻ thanh lịch và sang trọng.', 'Chất liệu thoáng khí và thoải mái giúp bạn cảm thấy dễ chịu trong suốt thời gian dài. Quần tây nữ lưng cao thích hợp để mặc khi đi học, tạo nên diện mạo chuyên nghiệp mà vẫn giữ được sự thoải mái. Sự kết hợp giữa phong cách và tính ứng dụng làm cho quần tây lưng cao trở thành một lựa chọn lý tưởng cho nữ sinh muốn tỏa sáng và tự tin trong môi trường học tập.', 165000, 'quannu117.webp', 1, NULL, NULL),
(63, 22, 'Quần Tây Học Sinh Nữ 2 Cúc Quần Baggy', NULL, 100, 0, 'Quần tây học sinh nữ 2 cúc quần baggy là sự kết hợp hoàn hảo giữa phong cách thoải mái và năng động. Thiết kế với 2 cúc quần và kiểu dáng baggy mang đến sự rộng rãi và thoải mái, phù hợp cho các hoạt động học tập và giải trí.', 'Chất liệu thoáng khí giúp duy trì sự thoải mái trong mọi điều kiện. Quần tây baggy không chỉ làm tôn lên phong cách cá nhân mà còn giúp học sinh tự tin và thoải mái khi di chuyển. Sự thoải mái và tính ứng dụng của quần tây baggy làm cho nó trở thành một lựa chọn phổ biến trong bộ đồ học sinh nữ, kết hợp giữa sự thoải mái và phong cách thời trang.', 175000, 'quannu288.png', 1, NULL, NULL),
(64, 22, 'Quần Kaki Nữ Túi Hộp Phong Cách Thời Trang', NULL, 100, 0, 'Quần kaki nữ túi hộp phong cách thời trang là sự kết hợp tinh tế giữa tính ứng dụng và phong cách. Thiết kế với túi hộp tạo nên điểm nhấn độc đáo, đồng thời mang lại không gian lưu trữ tiện ích. Chất liệu kaki chất lượng giúp quần vừa thoải mái vừa bền bỉ.', 'Phong cách thời trang của quần kaki nữ này thường đi kèm với các chi tiết linh hoạt và độc đáo, tạo nên sự cá tính và nổi bật. Dễ dàng kết hợp với nhiều loại áo, quần kaki túi hộp là sự lựa chọn hoàn hảo cho những người phát triển phong cách cá nhân và muốn thể hiện sự hiện đại trong bộ trang phục hàng ngày.', 237000, 'quannu39.png', 1, NULL, NULL),
(65, 20, 'Đầm Cổ Vuông Tay Phồng Tiểu Thư', NULL, 100, 0, 'Đầm cổ vuông tay phồng tiểu thư là sự kết hợp tinh tế giữa phong cách retro và sự duyên dáng. Thiết kế với cổ vuông tinh tế và tay phồng tạo nên vẻ đẹp dịu dàng và nữ tính. Đầm này thường được ưa chuộng bởi những chi tiết nhỏ nhưng quan trọng, như dáng đầm ôm gọn vừa và tạo ra sự quyến rũ tinh tế.', 'Chất liệu thoáng khí và êm dịu giúp tăng thêm cảm giác thoải mái khi mặc. Phù hợp cho nhiều dịp, từ các sự kiện nổi bật đến những buổi hẹn nhẹ nhàng. Đầm cổ vuông tay phồng tiểu thư thường là sự lựa chọn lý tưởng cho những người phụ nữ muốn thể hiện sự quý phái và dễ thương trong trang phục.', 350000, 'dam191.png', 1, NULL, NULL),
(66, 23, 'Giày nam Sneaker phản quang đêm', NULL, 100, 0, 'Giày nam Sneaker phản quang đêm là sự kết hợp giữa phong cách thể thao và tính năng an toàn. Với chất liệu phản quang, đôi giày này sẽ tỏa sáng dưới ánh đèn vào buổi tối, giúp tăng cường khả năng nhận biết và an toàn khi di chuyển trong điều kiện ánh sáng yếu.', 'Thiết kế Sneaker không chỉ mang lại sự thoải mái trong hoạt động hàng ngày mà còn là điểm nhấn thời trang. Phần đế và đầu giày thường có các chi tiết phản quang, tạo nên không gian thời trang độc đáo và hiện đại. Giày nam Sneaker phản quang đêm không chỉ là sự chọn lựa thời trang mà còn là giải pháp an toàn khi bạn di chuyển vào buổi tối.', 170000, 'giaynam131.png', 1, NULL, NULL),
(67, 23, 'giày nam cao cấp ship hàng toàn quốc', NULL, 100, 0, 'Dòng giày nam cao cấp, chất lượng, và có dịch vụ giao hàng toàn quốc là sự chọn lựa thông minh để đảm bảo bạn nhận được sản phẩm tốt nhất.', 'Khám phá bộ sưu tập giày nam cao cấp, mang đến cho bạn sự thoải mái và phong cách đẳng cấp. Sự kết hợp hoàn hảo giữa thiết kế độc đáo và chất liệu chất lượng, giày này là biểu tượng của phong cách và sự sang trọng. Với dịch vụ giao hàng toàn quốc, chúng tôi cam kết đưa sản phẩm xuất sắc đến tận cửa nhà bạn, mang đến trải nghiệm mua sắm tiện lợi và đẳng cấp. Hãy chọn giày nam cao cấp của chúng tôi để tận hưởng không gian thời trang đẳng cấp và đẳng cấp mọi lúc, mọi nơi', 135000, 'giaynam284.png', 1, NULL, NULL),
(68, 23, 'Giày thể thao nam sneaker đế mềm', NULL, 100, 0, 'Đôi giày thể thao nam Sneaker với đế mềm không chỉ là sản phẩm thời trang, mà còn là nguồn cảm hứng cho cuộc sống đầy năng động và thoải mái. Thiết kế đơn giản nhưng tinh tế, với đế mềm nhẹ, giày này mang lại sự thoải mái và linh hoạt đặc biệt cho những người yêu thể thao và hoạt động ngoại ô.', 'Chất liệu cao cấp và đường may tỉ mỉ đảm bảo đôi giày vừa vặn và êm ái. Đế mềm nhẹ giúp giảm áp lực lên bàn chân, tạo ra trải nghiệm di chuyển thoải mái. Phù hợp cho cả các hoạt động nhẹ nhàng như đi bộ và các buổi tập thể dục đòi hỏi sự linh hoạt.\r\n\r\nKhám phá sự kết hợp hoàn hảo giữa phong cách và thoải mái với đôi giày Sneaker này. Bạn sẽ không chỉ tự tin với phong cách thời trang mà còn thoải mái mỗi bước đi.', 258000, 'giaynam395.png', 1, NULL, NULL),
(69, 24, 'Giày thể thao nữ độn đế kim tuyến', NULL, 100, 0, 'Khám phá sự hòa quyện giữa phong cách và sáng tạo với đôi giày thể thao nữ độn đế kim tuyến. Thiết kế độn đế với chi tiết kim tuyến làm nổi bật mọi bước chân, tạo điểm nhấn quyến rũ và cá tính. Đôi giày không chỉ là phụ kiện thời trang, mà còn là biểu tượng của sự tự tin và sáng tạo.', 'Chất liệu chất lượng và độ thoải mái được chăm sóc kỹ lưỡng, giúp bạn tự tin di chuyển trong mọi hoạt động. Tận hưởng sự linh hoạt và thoải mái với đôi giày thể thao nữ độn đế kim tuyến, nơi nghệ thuật và phong cách gặp gỡ, tạo nên bước đi đầy ấn tượng và quyến rũ', 288000, 'giaynu167.png', 1, NULL, NULL),
(70, 24, 'Giày thể thao nữ 7cm Thoáng khí', NULL, 100, 0, 'Khám phá sự kết hợp tinh tế giữa thoải mái và phong cách với đôi giày thể thao nữ 7cm thoáng khí. Đế giày 7cm tạo nên độ cao vừa đủ để tôn lên đường cong nữ tính, cùng với thiết kế thoáng khí, giúp duy trì sự mát mẻ và thoải mái trong mọi hoạt động.', 'Đôi giày thể thao nữ với độ đội giày 7cm và thiết kế thoáng khí là sự lựa chọn hoàn hảo cho những người muốn kết hợp giữa phong cách thể thao và tính năng thoáng khí. Dưới đây là mô tả ngắn:\r\n\r\n\"Khám phá sự kết hợp tinh tế giữa thoải mái và phong cách với đôi giày thể thao nữ 7cm thoáng khí. Đế giày 7cm tạo nên độ cao vừa đủ để tôn lên đường cong nữ tính, cùng với thiết kế thoáng khí, giúp duy trì sự mát mẻ và thoải mái trong mọi hoạt động.\r\n\r\nChất liệu độ bền cao và đường may chắc chắn, giày thể thao này không chỉ là phụ kiện thời trang mà còn là sự đồng hành đáng tin cậy cho cuộc sống đầy năng động. Bạn sẽ tự tin bước đi với đôi giày vừa thoáng khí vừa tăng chiều cao này, đồng thời giữ được phong cách thời trang hàng ngày của mình', 350000, 'giaynu286.png', 1, NULL, NULL),
(71, 24, 'Giày Thể Thao Nữ Vải Canvas', NULL, 100, 0, 'Khám phá sự thoải mái và phong cách đẳng cấp với đôi giày thể thao nữ chất liệu vải canvas. Thiết kế nhẹ nhàng và linh hoạt, giày này không chỉ mang lại cảm giác thoải mái mà còn tạo nên vẻ đẹp tinh tế.', 'Chất liệu vải canvas thoáng khí giúp bảo quản sự mát mẻ cho bàn chân, phù hợp cho mọi hoạt động hàng ngày và thể thao nhẹ. Với đa dạng màu sắc và kiểu dáng, đôi giày này là sự kết hợp hoàn hảo giữa tính năng thoải mái và phong cách thời trang, làm nổi bật phong cách cá nhân của bạn', 130000, 'giaynu391.png', 1, NULL, NULL),
(72, 25, 'Bộ cộc tay cho bé mùa hè CUTIE', NULL, 100, 0, 'Chiếc bộ cộc tay cho bé mùa hè CUTIE là sự lựa chọn hoàn hảo để bé yêu tỏa sáng trong những ngày nắng oi bức. Thiết kế ngắn tay không chỉ giúp bé thoải mái và mát mẻ mà còn tạo nên vẻ đáng yêu với những hình vẽ và màu sắc tinh tế.', 'Chất liệu nhẹ, thoáng khí giúp bảo vệ làn da nhạy cảm của bé khỏi ánh nắng mặt trời. Bộ cộc tay CUTIE không chỉ là trang phục mùa hè tiện ích mà còn là biểu tượng của sự vui vẻ và thoải mái cho các bé yêu của bạn.', 98000, 'be178.png', 1, NULL, NULL),
(73, 25, 'Áo khoác trẻ em , Áo khoác hoodie', NULL, 100, 0, 'Áo khoác hoodie trẻ em là người bạn đồng hành đáng tin cậy trong mùa lạnh. Thiết kế với mũ và túi kín đáo, áo khoác hoodie không chỉ giữ ấm cho cơ thể nhỏ bé mà còn tạo nên phong cách thời trang đáng yêu.', 'Chất liệu thoáng khí và thoải mái giúp đảm bảo sự thoải mái khi hoạt động. Áo khoác này thường đi kèm với nhiều màu sắc và họa tiết phong phú, phản ánh cá tính và sở thích của trẻ em. Với áo khoác hoodie, các bé không chỉ ấm áp mà còn thể hiện phong cách thời trang riêng của mình.', 76000, 'be26.png', 1, NULL, NULL),
(74, 25, 'Bộ Đồ Liền Thân Cho Trẻ Sơ Sinh', NULL, 100, 0, 'Bộ đồ liền thân cho trẻ sơ sinh là sự chọn lựa độc đáo và tiện ích cho những ngày đầu đời của bé yêu. Thiết kế với dây nơ hoặc cúc ấn nhẹ nhàng, giúp việc thay đổi và mặc cho bé trở nên dễ dàng hơn.', 'Chất liệu mềm mại và thoáng khí làm cho bộ đồ này thích hợp cho làn da nhạy cảm của trẻ sơ sinh. Bên cạnh đó, những họa tiết đáng yêu và màu sắc tươi sáng tạo nên sự đáng yêu cho bé. Bộ đồ liền thân không chỉ là trang phục thoải mái mà còn là biểu tượng của sự âu yếm và quan tâm cho tình yêu nhỏ của bạn.', 125000, 'be324.png', 1, NULL, NULL),
(75, 25, 'Body dài tay body suit cho bé trai bé gái', NULL, 100, 0, 'Body dài tay là sự kết hợp giữa thiết kế tiện ích và thoải mái cho bé trai và bé gái. Chất liệu mềm mại và co giãn giúp giữ ấm cho cơ thể nhỏ bé và đồng thời tạo sự thoải mái trong mọi hoạt động.', 'Thiết kế dài tay bảo vệ tay và cả cơ thể của bé khỏi lạnh, là sự chọn lựa tuyệt vời cho những ngày se lạnh. Với nhiều màu sắc và họa tiết đáng yêu, bodysuit không chỉ là trang phục hàng ngày mà còn là biểu tượng của sự dễ thương và quan tâm cho tình yêu nhỏ của bạn.', 169000, 'be421.png', 1, NULL, NULL),
(76, 25, 'Bộ Đồ Mặc Nhà Mẫu Mới Thu Đông', NULL, 100, 0, 'Khám phá sự ấm áp và thoải mái với bộ đồ mặc nhà mẫu mới cho mùa thu đông. Thiết kế này thường chú trọng đến chất liệu mềm mại và giữ nhiệt tốt, đảm bảo bạn thoải mái trong những ngày lạnh.', 'Bộ đồ mặc nhà mẫu mới thường có kiểu dáng thời trang, đa dạng về màu sắc và họa tiết. Đây là sự lựa chọn lý tưởng cho những người muốn kết hợp giữa sự ấm áp và phong cách trong không gian riêng tư của họ vào mùa thu và đông', 574000, 'be590.png', 1, NULL, NULL),
(77, 18, 'Áo dài cách tân cổ dây kiểu sang trọng', NULL, 100, 0, 'Áo dài cách tân cổ dây kiểu sang trọng là biểu tượng của sự quý phái và thời trang hiện đại. Thiết kế với cổ dây tinh tế, áo dài này không chỉ làm tôn lên vóc dáng mà còn tạo điểm nhấn sang trọng.', 'Chất liệu lụa mềm mại và thoáng khí giúp áo dài trở nên thoải mái khi mặc. Áo dài cách tân với kiểu cổ dây là sự lựa chọn ấn tượng cho những dịp quan trọng, tạo nên vẻ đẹp truyền thống và đương đại đồng thời', 175000, 'aodai186.png', 1, NULL, NULL),
(78, 18, 'ÁO DÀI CÁCH TÂN , ÁO DÀI CỔ YẾM TAY', NULL, 100, 0, 'Áo dài cách tân cổ yếm tay là biểu tượng của sự tinh tế và sang trọng, mang đến cho người mặc vẻ đẹp truyền thống với một chút sự hiện đại. Thiết kế cổ yếm tay tinh tế làm tôn lên nét quyến rũ và duyên dáng.', 'Chất liệu lụa mềm mại và thoáng khí giúp áo dài thoải mái trên cơ thể. Áo dài cách tân cổ yếm tay thường là sự lựa chọn lý tưởng cho những dịp quan trọng, nơi bạn muốn tỏa sáng với vẻ đẹp truyền thống và đẳng cấp đương đại.', 669000, 'aodai683.png', 1, NULL, NULL),
(79, 18, 'Áo Dài Cách Tân 4 Tà Tay Bèo', NULL, 100, 0, 'Áo dài cách tân 4 tà tay bèo là biểu tượng của sự duyên dáng và sang trọng, đem đến cho phái đẹp một vẻ đẹp truyền thống được làm mới. Với thiết kế tay bèo tinh tế, áo dài này không chỉ tôn lên vẻ dịu dàng mà còn thể hiện sự quý phái.', 'Chất liệu lụa mềm mại và thoáng khí giúp áo dài trở nên thoải mái khi mặc. Áo dài cách tân 4 tà tay bèo thường là sự lựa chọn hoàn hảo cho những dịp quan trọng, nơi bạn muốn tỏa sáng với vẻ đẹp truyền thống và đẳng cấp hiện đại.', 320000, 'aodai785.png', 1, NULL, NULL),
(80, 20, 'Đầm dự tiệc dáng xoè chữ A tiểu thư', NULL, 99, 1, 'Đầm dự tiệc dáng xoè chữ A tiểu thư là biểu tượng của sự quý phái và duyên dáng. Thiết kế với dáng xoè chữ A tinh tế giúp tôn lên vóc dáng và tạo nên sự nữ tính và dễ thương.', 'Chất liệu cao cấp và đường may tỉ mỉ làm cho đầm trở nên sang trọng. Được thiết kế đặc biệt cho những dịp quan trọng, đầm xoè chữ A là sự lựa chọn lý tưởng cho tiểu thư muốn tỏa sáng và thể hiện phong cách riêng tại các bữa tiệc và sự kiện đặc biệt', 158000, 'dam226.png', 1, NULL, NULL),
(81, 20, 'Váy dài tay nữ basic tay nơ', NULL, 100, 0, 'Váy dài tay nữ basic tay nơ là sự lựa chọn hoàn hảo cho những ngày se lạnh. Thiết kế cơ bản với tay nơ nhẹ nhàng là điểm nhấn tinh tế, tạo nên sự duyên dáng và quyến rũ.', 'Chất liệu thoáng khí và thoải mái giúp váy trở nên lý tưởng cho mọi dịp, từ những buổi hẹn nhẹ nhàng đến các sự kiện quan trọng. Với váy dài tay nơ, bạn có thể kết hợp dễ dàng với phụ kiện để thể hiện phong cách cá nhân của mình', 219000, 'dam31.png', 1, NULL, NULL),
(82, 20, 'Váy dài tay kiểu dáng cổ điển', NULL, 100, 0, 'Váy dài tay kiểu dáng cổ điển là biểu tượng của sự thanh lịch và quý phái. Thiết kế với cổ điển thường đi kèm với đường may tỉ mỉ và các chi tiết trang trí tinh tế, tạo nên vẻ đẹp độc đáo và lôi cuốn', 'Chất liệu chọn lọc và dáng váy ôm nhẹ, thoải mái giúp làm nổi bật đường cong của người mặc. Với váy dài tay kiểu cổ điển, bạn sẽ tỏa sáng trong những sự kiện quan trọng và không bao giờ lỗi mốt với phong cách lâu dài và truyền thống', 500000, 'dam4508.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id_roles` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_roles`
--

INSERT INTO `tbl_roles` (`id_roles`, `name`) VALUES
(1, 'admin'),
(2, 'author'),
(3, 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) NOT NULL,
  `shipping_note` varchar(200) DEFAULT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_phone` varchar(255) NOT NULL,
  `shipping_email` varchar(255) NOT NULL,
  `shipping_country` varchar(200) DEFAULT NULL,
  `shipping_state` varchar(200) DEFAULT NULL,
  `shipping_city` varchar(200) DEFAULT NULL,
  `shipping_zipcode` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_note`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_country`, `shipping_state`, `shipping_city`, `shipping_zipcode`, `created_at`, `updated_at`) VALUES
(66, 'Nguyen Hoang Quan', '', '99 An Duong Vuong, p16 q8 HCM', '0389938946', 'hquan20020915@gmail.com', 'Vietnam', 'Mexico', 'Chau Thanh District', '123', NULL, NULL),
(67, 'Jennie', '', 'Dai hoc Su Pham', '01234567789', 'xuanbac@gmail.com', 'USA', 'Mexico', 'Chau Thanh District', '123', NULL, NULL),
(68, 'Nguyen Minh Tien', '', '99 An Duong Vuong, p16 q8 HCM', '0389938946', 'tien@gmail.com', 'Vietnam', 'khong co', 'sai gon', '1234', NULL, NULL),
(69, 'Nguyen Hoang Quan', '', '99 An Duong Vuong, p16 q8 HCM', '0389938946', 'hquan20020915@gmail.com', 'Vietnam', 'khong co', 'Chau Thanh District', '123', NULL, NULL),
(70, 'Nguyen Minh Tien', '', 'Dai hoc Sai Gon', '0389938946', 'nam@gmail.com', 'Vietnam', 'Khong co', 'Ha Noi, 99, anc', '123', NULL, NULL),
(71, 'Nguyen Hoang Quan', '', '99 An Duong Vuong, p16 q8 HCM', '0389938946', 'hquan20020915@gmail.com', 'Vietnam', 'khong co', 'Chau Thanh District', '123', NULL, NULL),
(72, 'Nguyen Hoang Tien', '', 'Dai hoc Sai Gon', '0389938946', 'hquan20020915@gmail.com', 'Vietnam', 'khong co', 'Chau Thanh District', '1234', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_statistical`
--

CREATE TABLE `tbl_statistical` (
  `id_statistical` int(11) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `sales` varchar(200) NOT NULL,
  `profit` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id_admin_roles`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `tbl_amin`
--
ALTER TABLE `tbl_amin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`,`brand_id`),
  ADD KEY `category_id_2` (`category_id`,`brand_id`);

--
-- Chỉ mục cho bảng `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `tbl_statistical`
--
ALTER TABLE `tbl_statistical`
  ADD PRIMARY KEY (`id_statistical`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id_admin_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_amin`
--
ALTER TABLE `tbl_amin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `tbl_statistical`
--
ALTER TABLE `tbl_statistical`
  MODIFY `id_statistical` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
