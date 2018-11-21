-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2018 at 12:08 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realife`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `maalb` int(10) NOT NULL,
  `tenalb` varchar(255) NOT NULL,
  `madv` int(10) NOT NULL,
  `img_album` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`maalb`, `tenalb`, `madv`, `img_album`) VALUES
(16, 'Hình Sản Phẩm', 17, '154278342804.jpg'),
(17, 'Hùng Và Cường', 16, '1542783476ab2.jpg'),
(18, 'Hiếu & Hung ', 15, '1542783506abl2.jpg'),
(19, 'Hân & Nhân', 18, '1542783594s6.jpg'),
(20, 'Hình Kỉ Yếu', 16, '1542807917ab5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `mabl` int(10) NOT NULL,
  `noidung` varchar(500) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `luottuongtac` int(11) DEFAULT NULL,
  `diemtichluy` int(20) DEFAULT NULL,
  `madv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `mablog` int(10) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mabl` int(10) NOT NULL,
  `maloaiblog` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `madv` int(10) NOT NULL,
  `tendv` varchar(255) NOT NULL,
  `don_gia` int(4) NOT NULL,
  `giam_gia` int(4) DEFAULT NULL,
  `hinh` varchar(255) NOT NULL,
  `mo_ta` varchar(2000) NOT NULL,
  `so_luot_xem` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`madv`, `tendv`, `don_gia`, `giam_gia`, `hinh`, `mo_ta`, `so_luot_xem`) VALUES
(15, 'Chụp Hình Ngoại Cảnh', 3000000, 0, '1542783234h4.jpg', 'Nemo rutrum pharetra pariatur ornare, nobis lorem pede, sem! Diamlorem! Vero blandit velit id, explicabo, inventore proident magna ut rutrum, torquent. Animi ligula harum hac incidunt! Vitae taciti sem nemo nostra nihil, diam leo ut, ullam, eleifend vel aliquet aliquid! Molestie, feugiat platea. Sequi exercitationem eiusmod? Eaque id, etiam commodi nonummy accumsan libero voluptates! Fringilla? Quos adipiscing! Voluptas platea convallis! Natus egestas nisi at nisi officia itaque aliqua nesciunt eleifend, sit quidem ligula ligula sapiente natus itaque exercitation dolor lacus? Lacus. Autem! Aspernatur facilisis! Mattis ab accusantium do, elementum iusto? Cumque nascetur nostra, wisi beatae pretium? Reiciendis tenetur suspendisse qui.', 0),
(16, 'Chụp hình kỉ yếu ', 990000, 10, '1542783306abl3.jpg', 'Chup hình kỉ yếu cho học sinh', 3),
(17, 'Chụp hình sản phẩm', 20000000, 0, '154278338004.jpg', 'Chụp hình sản phẩm chuyên nghiệp', 2),
(18, 'Chụp Hình Đám Cưới', 10000000, 0, '1542783568g9.jpg', 'Chụp Hình Đám Cưới Chụp Hình Đám Cưới Chụp Hình Đám Cưới', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hinh`
--

CREATE TABLE `hinh` (
  `mahinh` int(10) NOT NULL,
  `makh` int(11) NOT NULL,
  `maalb` int(10) NOT NULL,
  `hinh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hinh`
--

INSERT INTO `hinh` (`mahinh`, `makh`, `maalb`, `hinh`) VALUES
(1, 25, 19, '1542807743gallery-slideshow-3.jpg'),
(2, 22, 19, '1542807760gallery-slideshow-1.jpg'),
(3, 25, 19, '1542807768gallery-slideshow-4.jpg'),
(4, 25, 19, '1542807784gallery-single-12.jpg'),
(5, 25, 19, '1542807792gallery-single-11.jpg'),
(6, 25, 19, '1542807800gallery-single-2.jpg'),
(7, 25, 19, '1542807830a5.jpg'),
(8, 25, 19, '1542807840d2.jpg'),
(9, 25, 19, '1542807847h2.jpg'),
(10, 22, 19, '1542808367x2.jpg'),
(13, 22, 19, '1542808417g7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `hoten` varchar(300) NOT NULL,
  `matkhau` varchar(20) NOT NULL,
  `kichhoat` tinyint(1) DEFAULT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `hoten`, `matkhau`, `kichhoat`, `hinh`, `email`) VALUES
(22, 'Huỳnh MINH Nhân', 'minhnhan21', 1, '154278362237854340_2142431066014608_3979912980773994496_o.jpg', 'huynhminhnhan69@gmail.com'),
(23, 'Nguyễn Hữu Hùng', 'hungml', 1, '154278369438228826_2178935142384364_3344642963568328704_n.jpg', 'HUNG@GMAIL.COM'),
(24, 'Huỳnh Nhật Cường', 'cuongml', 0, '1542783746cuog.jpg', 'cuong69@gmail.com'),
(25, 'Trương Trung Hiếu', 'hieuml', 0, '1542783891exx.jpg', 'truongtrunghieu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `loaiblog`
--

CREATE TABLE `loaiblog` (
  `maloaiblog` int(10) NOT NULL,
  `tenloaiblog` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imgloaiblog` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`maalb`),
  ADD KEY `Fk_album_dich-vu` (`madv`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `Fk_binh-luan_khach-hang` (`makh`),
  ADD KEY `Fk_binh-luan_dich-vu` (`madv`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`mablog`),
  ADD KEY `maloai-blog` (`maloaiblog`),
  ADD KEY `FK_ma_bl` (`mabl`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`madv`);

--
-- Indexes for table `hinh`
--
ALTER TABLE `hinh`
  ADD PRIMARY KEY (`mahinh`),
  ADD KEY `fk_makh` (`makh`),
  ADD KEY `fk_maalb` (`maalb`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loaiblog`
--
ALTER TABLE `loaiblog`
  ADD PRIMARY KEY (`maloaiblog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `maalb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabl` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `mablog` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `madv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hinh`
--
ALTER TABLE `hinh`
  MODIFY `mahinh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `loaiblog`
--
ALTER TABLE `loaiblog`
  MODIFY `maloaiblog` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `Fk_album_dich-vu` FOREIGN KEY (`madv`) REFERENCES `dichvu` (`madv`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `Fk_binh-luan_dich-vu` FOREIGN KEY (`madv`) REFERENCES `dichvu` (`madv`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_binh-luan_khach-hang` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `FK_ma_bl` FOREIGN KEY (`mabl`) REFERENCES `binhluan` (`mabl`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_maloai-blog` FOREIGN KEY (`maloaiblog`) REFERENCES `loaiblog` (`maloaiblog`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `hinh`
--
ALTER TABLE `hinh`
  ADD CONSTRAINT `fk_maalb` FOREIGN KEY (`maalb`) REFERENCES `album` (`maalb`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_makh` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
