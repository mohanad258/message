-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 ديسمبر 2024 الساعة 22:48
-- إصدار الخادم: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `messageauthentication`
--

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Validity` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password2` varchar(100) NOT NULL,
  `phonnumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`ID`, `UserName`, `password`, `Validity`, `email`, `password2`, `phonnumber`) VALUES
(121, 'mohanad', '5a478022f33905d2d40410e006fb1aa8564b280c', 'admin', 'www@gmail.com', '', '07716206278'),
(124, 'حامد شهاب', '2952aeca0fe15cf310ede96c437acb94b2b208f1', 'admin', 'maha@gmail.com', '', '0780124555'),
(125, 'ايمان محمد', '3c4a80dbdfac57d174d1cab8d11d03ad91888820', 'admin', 'mmss@gmail.com', '', '0780124555'),
(126, 'm', '356a192b7913b04c54574d18c28d46e6395428ab', 'admin', 'mmuu20ss21@gmail.com', '', '07716206278'),
(127, 'm', '356a192b7913b04c54574d18c28d46e6395428ab', 'admin', 'mmuu20ssg21@gmail.com', '', '07716206278');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
