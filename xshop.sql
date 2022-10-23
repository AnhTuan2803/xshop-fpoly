-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 06:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL DEFAULT 0,
  `bill_name` varchar(10) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_pttt` tinyint(1) DEFAULT 1 COMMENT '1. Thanh toán trực tiếp 2. Chuyển khoản 3. Thanh toán online ',
  `ngaydathang` varchar(50) NOT NULL,
  `total` int(10) DEFAULT NULL,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0. Đơn hàng mới 1.Đang chờ 2.Đang giao hàng 3. Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL,
  `bill_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`, `bill_email`) VALUES
(38, 1, 'admin', 'Hà Nội', '0987957355', 0, '04:05:01pm 22/10/2022', 340000, 1, NULL, NULL, NULL, 'phamanhtuan1628@gmail.com'),
(39, 15, 'admin', '', '', 1, '04:48:18pm 22/10/2022', 28880, 0, NULL, NULL, NULL, 'vippro@gmail.com'),
(40, 15, 'admin', '', '', 1, '04:50:19pm 22/10/2022', 28880, 0, NULL, NULL, NULL, 'vippro@gmail.com'),
(41, 15, 'admin', '', '', 1, '04:50:56pm 22/10/2022', 28880, 0, NULL, NULL, NULL, 'vippro@gmail.com'),
(42, 15, 'admin', '', '', 1, '04:51:54pm 22/10/2022', 28880, 0, NULL, NULL, NULL, 'vippro@gmail.com'),
(43, 15, 'admin', '', '', 1, '04:52:23pm 22/10/2022', 28880, 0, NULL, NULL, NULL, 'vippro@gmail.com'),
(44, 0, '', '', '', 1, '05:17:57pm 22/10/2022', 40000, 0, NULL, NULL, NULL, ''),
(45, 0, '', '', '', 1, '05:19:38pm 22/10/2022', 40000, 0, NULL, NULL, NULL, ''),
(46, 0, '', '', '', 1, '05:19:52pm 22/10/2022', 40000, 0, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(15, 'allaa', 15, 43, '05:16:04pm 22/10/2022'),
(16, 'ablcccclllll', 15, 43, '05:16:09pm 22/10/2022'),
(17, 'allaa00', 1, 46, '05:57:32pm 22/10/2022');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(143, 1, 47, 'glasses.png', 'Kính thực tế ảo', 320000, 1, 320000, 38),
(144, 1, 40, 'flycam.png', 'Plycam', 20000, 1, 20000, 38),
(146, 15, 43, 'loudspeaker.png', 'Bình nước giữ nhiệt', 28880, 1, 28880, 40),
(147, 15, 43, 'loudspeaker.png', 'Bình nước giữ nhiệt', 28880, 1, 28880, 41),
(148, 15, 43, 'loudspeaker.png', 'Bình nước giữ nhiệt', 28880, 1, 28880, 42),
(149, 15, 43, 'loudspeaker.png', 'Bình nước giữ nhiệt', 28880, 1, 28880, 43),
(150, 0, 39, 'ip14.png', 'Iphone 14 Pro', 40000, 1, 40000, 44),
(151, 0, 39, 'ip14.png', 'Iphone 14 Pro', 40000, 1, 40000, 45),
(152, 0, 39, 'ip14.png', 'Iphone 14 Pro', 40000, 1, 40000, 46);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(18, 'Công nghệ'),
(19, 'Bàn chải'),
(20, 'Bình nước'),
(21, 'Gaming');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) DEFAULT 0.00,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(37, 'Bàn chải', 20.00, 'brush.png', 'Bàn chải đánh răng bằng điện chất lượng tốt, mua hàng như Vua chăm sóc như Vip tại XShop', 0, 19),
(39, 'Iphone 14 Pro', 40000.00, 'ip14.png', 'Iphone 14 Pro 512GB bản quốc tế.', 0, 18),
(40, 'Plycam', 20000.00, 'flycam.png', 'Plycam Flycam giá rẻ 100k mini, flycam drone camera mini, máy bay điều khiển từ XShop', 0, 18),
(41, 'Labtop Gaming', 20000.00, 'laptop.png', 'Đơn vị cung cấp Laptop Gaming số 1 tại VN, chính hãng 100%, ưu đãi đặc biệt cho sinh viên. Quà Khủng, Giá Tốt Nhất. Cấu Hình Mạnh Mẽ. Học Tập, Làm Việc, Chiến Game Mượt Mà.', 0, 21),
(42, 'Đồng hồ xshop', 38000.00, 'smartwacth.png', 'Đồng hồ thương hiệu xshop chống nước pin trâu.', 0, 18),
(43, 'Bình nước giữ nhiệt', 28880.00, 'loudspeaker.png', 'Bình nước giữ nhiệt thương hiệu xshop giữ nhiệt lên đến 12 giờ.', 0, 20),
(46, 'Tay cầm xshop', 22000.00, 'gamepad.png', 'Tay cầm gaming thương hiệu xshop.', 0, 21),
(47, 'Kính thực tế ảo', 320000.00, 'glasses.png', 'Kính thực tế ảo xshop mang đến cho người dùng cảm giác chân thực nhất', 0, 18);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'admin', 'admin', 'phamanhtuan1628@gmail.com', 'Hà Nội', '0987957355', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_idprobl_idpro` (`idpro`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_iduser_user` (`iduser`),
  ADD KEY `lk_idbill_bill` (`idbill`),
  ADD KEY `lk_idpro_product` (`idpro`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_idprobl_idpro` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_idpro_product` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
