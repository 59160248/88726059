-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 01:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `shopID` varchar(45) NOT NULL,
  `shopName` varchar(128) NOT NULL,
  `shopDetail` varchar(255) NOT NULL,
  `shopPrice` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`shopID`, `shopName`, `shopDetail`, `shopPrice`) VALUES
('1001', 'ไก่วิงซ์แซ่บ 3 ชิ้น', 'ปีกไก่บนคลุกเคล้ากับเครื่องเทศรสจัดจ้าน จำนวน 3 ชิ้น', 55),
('1002', 'ไก่ไม่มีกระดูก 2 ชิ้น', 'ไก่ทอดเนื้อล้วนไม่มีกระดูก', 39),
('1003', 'นักเก็ตส์ 6 ชิ้น', 'คัดสรรเนื้ออกไก่ 100% คลุกเคล้ากับเครื่องเทศ 11 ชนิด เสิร์ฟพร้อมซอสบาร์บีคิว', 75),
('1004', 'ชิคเก้นป๊อป 7 ชิ้น', 'อร่อยแบบไก่ทอดฮอตแอนด์สไปซี่ ในรูปแบบพอดีคำ อร่อยจนหยุดไม่ได้', 39),
('1005', 'ทาร์ทไข่ 2 ชิ้น', 'ทาร์ตไข่แป้งบางกรอบ ไส้เนียนนุ่ม อบสดใหม่ หอมกรุ่น อร่อยติดใจ', 55),
('1006', 'เฟรนช์ฟรายส์ (ปกติ)', 'นำเข้าจากเนเธอร์แลนด์เฟรนช์ฟรายส์แสนอร่อยปรุงสดใหม่ในร้าน', 39);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`shopID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
