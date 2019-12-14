-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2019 at 09:14 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usedcar-003`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `carType` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(80) NOT NULL,
  `color` varchar(20) NOT NULL,
  `license` varchar(20) NOT NULL,
  `province` varchar(30) NOT NULL,
  `modelYear` varchar(4) NOT NULL,
  `price` int(11) NOT NULL,
  `postedBy` int(11) NOT NULL,
  `postedDate` datetime NOT NULL,
  `carpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `carType`, `brand`, `model`, `color`, `license`, `province`, `modelYear`, `price`, `postedBy`, `postedDate`, `carpic`) VALUES
(1, 1, 'BMW', 'BMW001', 'ขาว', 'กท-2103', 'นครปฐม', '2018', 1980000, 10, '2019-12-14 00:00:00', '1 (4).jpg'),
(2, 1, 'NISAN', 'NISAN0052', 'คำ', 'นห-9158', 'นครปฐม', '2017', 1500000, 1, '2019-12-05 00:00:00', '1 (1).jpg'),
(3, 1, 'BMW', 'BMW25', 'ขาว', 'ยห-2851', 'ราชบุรี', '2019', 2980000, 1, '2019-12-03 00:00:00', '1 (2).jpg'),
(4, 1, 'NISAN', 'NISAN01', 'ฟ้า', 'กท-2846', 'ราชบุรี', '2018', 1150000, 10, '2019-12-14 00:00:00', '1 (3).jpg'),
(5, 2, 'VIGO', 'VIGOZ4', 'ขาว', 'กท-103', 'ราชบุรี', '2018', 1580000, 1, '2019-12-05 00:00:00', '2 (1).jpg'),
(6, 3, 'TOYOTA', '2017', 'ขาว', 'กท-845', 'นครปฐม', '2018', 1110000, 10, '2019-12-05 00:00:00', '3 (2).jpg'),
(7, 2, 'VIGO', 'VIGOGG', 'เทา', 'กท-2846', 'ราชบุรี', '2018', 580000, 10, '2019-12-05 00:00:00', '2 (2).jpg'),
(8, 2, 'VIGO', 'VIGORG', 'ดำ', 'กท-845', 'ราชบุรี', '2018', 280000, 10, '2019-12-05 00:00:00', '2 (3).jpg'),
(9, 3, 'TOYOTA', 'TOYOTASA', 'ขาว', 'กท-8451', 'ราชบุรี', '2018', 1980000, 10, '2019-12-05 00:00:00', '3 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `active`) VALUES
(1, 'Noraseat', '25f9e794323b453885f5181f1b624d0b', 'Noraseat', 'Panawong', 'jabnakub01@gmail.com', 1),
(7, 'khunjab', '3fb5606bd0362ead41a787099083983b', 'jab', 'panawong', 'jabnakub01@gmail.com', 0),
(8, 'napath', '8725cd3b3742ed257f1f342e31615a1e', 'napath', 'napath', 'napathbew@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `active`) VALUES
(1, 'napath@gmail.com', '8725cd3b3742ed257f1f342e31615a1e', 'napath', 'mapasa', 'napathbew@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `unintInStock` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `unintInStock`, `picture`, `category`) VALUES
(1, 'โน้ตบุ๊ค', 'โน้ตบุ๊ค Core I7, SSD128GB, RAM 16GB', 15000, 20, 'notebook1.jpg', 1),
(2, 'Notebook Shadow', 'PC I9, NVIDIA  RTX 2080 TI, RAM 32GB ', 34200, 20, '3.jpg', 1),
(3, 'Monitor MSI T7160', 'Monitor LED, HDMI, VGA, DVI', 10000, 20, 'm1 (1).jpg', 3),
(4, 'Monitor Acer U846', 'Monitor LED, HDMI', 10000, 20, 'monitoracer.png', 3),
(5, 'PC Core i7 For Gaming', 'CPU i7-2600\r\ncase ใหม่\r\nRam 4 GB\r\nHDD 500 GB\r\nการ์ดจอ rx 560 4G', 15900, 20, '5.jpg', 2),
(6, 'PC DELLOptiplex780 Core2', '-เครื่องพร้อมใช้งานมือ2รุ่น Business DELL 780 ทน ทาน สภาพใหม่-พิมพ์งานทั่วไป ดูหนัง ฟังเพลง เกมทั่วไป-Core2Duo 3.0 GHz /L2 Cach 6 MB-DDR3 RAM 2 GB/1333-HDD 250 GB-DVD-ROM Drive-Window 7 ลายเส้นแท้ ', 7900, 10, '6.jpg', 2),
(7, 'PC Core i9 For Gaming', 'GTX 1050TI 4GB โปรโมชั่่นหนักๆ พร้อมใช้ AMD FX4300 4C 4T 4.0GHz / RAM 4GB / HDD 500GB หรือ SSD 120GB/ *เลือกเคสและการ์ดจอได้*', 25000, 20, '7.jpg', 2),
(8, 'EGA TYPE C1 GAMING PC', 'EGA TYPE C1 GAMING PC CASE ของแท้ประกันศูนย์ เปลี่ยนไฟได้ EGATYPEC2', 10000, 11, 'pc.jpg', 2),
(9, 'ACER NOTEBOOK ', 'ACER NOTEBOOK NITRO AN515-43-R3K4 BLACK (A)', 22900, 20, '2.jpg', 1),
(10, 'Samsung Notebook 9 Pro', 'โน้ตบุ๊คขอบบาง หน้าจอ 13.3 นิ้ว ความละเอียด FHD มีฟีเจอร์ถนอมสายตา ประมวลผลด้วย Intel Core i7 และ RAM 8 GB รองรับ ปากกา Active Pen มี พอร์ต Thunderbolt 3 และ USB-C', 22000, 10, '4.jpg', 1),
(11, 'Monitor SF350 Monitor SF350 ', '24” FHD Monitor SF350 จอบางเฉียบ ดีไซน์เรียบหรู', 7000, 15, 'm1 (2).jpg', 3),
(12, '34WK650-W', 'Ultrawide Monitor จอคอมพิวเตอร์ รุ่น 34WK650-W ขนาด 34 นิ้ว จอภาพ IPS', 12000, 10, 'm1 (3).jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
