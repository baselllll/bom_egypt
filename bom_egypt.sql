-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 09:32 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bom_egypt`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Design` text COLLATE utf16_bin NOT NULL,
  `Contractor` text COLLATE utf16_bin NOT NULL,
  `other` text COLLATE utf16_bin NOT NULL,
  `Company_Name` text COLLATE utf16_bin NOT NULL,
  `Company_Address` text COLLATE utf16_bin NOT NULL,
  `Phone_Number` text COLLATE utf16_bin NOT NULL,
  `Company_Mobile_Number` text COLLATE utf16_bin NOT NULL,
  `Established_Info` text COLLATE utf16_bin NOT NULL,
  `Company_Website` text COLLATE utf16_bin NOT NULL,
  `Company_Capital` text COLLATE utf16_bin NOT NULL,
  `Number_Of_Employees` text COLLATE utf16_bin NOT NULL,
  `Company_Profile` text COLLATE utf16_bin NOT NULL,
  `Company_Logo` text COLLATE utf16_bin NOT NULL,
  `Employee_Name` text COLLATE utf16_bin NOT NULL,
  `Employee_Title` text COLLATE utf16_bin NOT NULL,
  `Email_Address` text COLLATE utf16_bin NOT NULL,
  `Employee_Mobile_Number` text COLLATE utf16_bin NOT NULL,
  `Employee_Info` text COLLATE utf16_bin NOT NULL,
  `Company_Since` text COLLATE utf16_bin NOT NULL,
  `Username` text COLLATE utf16_bin NOT NULL,
  `Password` text COLLATE utf16_bin NOT NULL,
  `ReTypePassword` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Design`, `Contractor`, `other`, `Company_Name`, `Company_Address`, `Phone_Number`, `Company_Mobile_Number`, `Established_Info`, `Company_Website`, `Company_Capital`, `Number_Of_Employees`, `Company_Profile`, `Company_Logo`, `Employee_Name`, `Employee_Title`, `Email_Address`, `Employee_Mobile_Number`, `Employee_Info`, `Company_Since`, `Username`, `Password`, `ReTypePassword`) VALUES
(5, 'Design', 'Electrical', 'basel', 'sds', 'sdsds', '545454', '545454', 'sdsdsd', 'www.google.com', 'dsdsd', '54', 'sdsdsd', 'IMG_1994.JPG', 'sds', 'sdsd', 'sdsds', '545454', 'sdsd', 'sdsds', 'basel', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'Electrical', 'Finishing', 'hellllo', 'sdsd', 'sdsd', '52', '22', 'sdsd', 'dsdsds', 'sdsdsd', '5', 'sdsdsd', 'IMG_2003.JPG', 'dfedfdq', 'dfdfd', 'dfmdkfm', '65655656', 'dfd,md', 'dfdfd', 'lsdksdj', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'Civil/Structural', 'Civil/Structural', 'basel', 'saas', 'sdsd', '65', '656', 'sdsds', 'sdsds', 'sdsd', '66', 'sdsd', 'sdsds', 'sdsd', 'sdsd', '65', 'sdsd', 'sds5', 'sdsds', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'IMG_1994.JPG'),
(8, 'Electrical', 'Mechnical', 'basel', 'sds', 'sds', '255', '565', 'sdsd', 'sdsd', 'asas', '65', 'sdasd', 'dsds', 'sdsd', 'sds', '65', 'sds', 'sds', 'sdsd', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'IMG_1994.JPG'),
(9, 'Civil/Structural', 'Earth works', 'basel', 'sds', 'sdsd', '65', '655', 'dsd', 'sdsd', 'sdsd', '65', 'sds', 'sdsd', 'axsdd', 'csds', '5', 'csd', 'ssd', 'sds', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', ''),
(10, 'Design', 'Earth works', 'basel', 'sdsd', 'sds', '66', '66', 'sdsd', 'sdsd', 'sdsd', '66', 'sds', 'dsds', 'sdsd', 'asasa', '54', 'sdsd', '5asa', 'sdsd', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
