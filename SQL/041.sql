-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 27 ม.ค. 2023 เมื่อ 08:08 AM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20142752_miniprojact041`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `customers`
--

CREATE TABLE `customers` (
  `C_Id` int(11) NOT NULL,
  `C_Name` varchar(100) NOT NULL,
  `C_Address` varchar(100) NOT NULL,
  `C_Tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `customers`
--

INSERT INTO `customers` (`C_Id`, `C_Name`, `C_Address`, `C_Tel`) VALUES
(1, 'อมรรัตน์', 'ยะลา', '0415499655'),
(2, 'อมรรัตน์', 'สงขลา', '0415499655'),
(3, 'kkk', 'สงขลา', '0415499655');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `employee`
--

CREATE TABLE `employee` (
  `E_Id` int(11) NOT NULL,
  `E_Name` varchar(100) NOT NULL,
  `E_Position` varchar(100) NOT NULL,
  `E_Tel` varchar(20) NOT NULL,
  `E_Salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `employee`
--

INSERT INTO `employee` (`E_Id`, `E_Name`, `E_Position`, `E_Tel`, `E_Salary`) VALUES
(1, 'ดา', 'ผู้จัดการ', '0658874566', 0),
(2, 'ดา', 'ผู้จัดการ', '0658874566', 10000);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `product`
--

CREATE TABLE `product` (
  `P_Id` int(11) NOT NULL,
  `P_Name` varchar(100) NOT NULL,
  `P_Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `product`
--

INSERT INTO `product` (`P_Id`, `P_Name`, `P_Price`) VALUES
(1, 'ยุพา', 20.33),
(2, 'ยุพา', 20.33);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `sale`
--

CREATE TABLE `sale` (
  `S_Id` int(11) NOT NULL,
  `S_Total` float NOT NULL,
  `P_Id` int(11) DEFAULT NULL,
  `T_Id` int(11) DEFAULT NULL,
  `C_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` int(10) NOT NULL,
  `a_username` varchar(45) NOT NULL,
  `a_pass` varchar(45) NOT NULL,
  `a_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `a_username`, `a_pass`, `a_level`) VALUES
(1, 'admin', '12345', 'a'),
(1, 'admin', '12345', 'a');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `typee`
--

CREATE TABLE `typee` (
  `T_Id` int(11) NOT NULL,
  `T_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `typee`
--

INSERT INTO `typee` (`T_Id`, `T_Name`) VALUES
(1, 'เครื่องดื่ม');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`C_Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`E_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`P_Id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`S_Id`);

--
-- Indexes for table `typee`
--
ALTER TABLE `typee`
  ADD PRIMARY KEY (`T_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
