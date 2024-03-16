-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2024 at 04:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_contact_page`
--

CREATE TABLE `about_contact_page` (
  `S_No` int(11) NOT NULL,
  `PageType` varchar(33) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `MobileNumber` bigint(30) DEFAULT NULL,
  `UpdationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_contact_page`
--

INSERT INTO `about_contact_page` (`S_No`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, '2024-01-11 16:32:51'),
(2, 'contactus', 'Contact Us', '890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)', 'vbalakrishna21121@gmail.com', 7995122572, '2024-01-22 10:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `add_class`
--

CREATE TABLE `add_class` (
  `S_No` int(11) NOT NULL,
  `Class_name` varchar(33) NOT NULL,
  `Section` varchar(30) NOT NULL,
  `Creation_Date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `Deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_class`
--

INSERT INTO `add_class` (`S_No`, `Class_name`, `Section`, `Creation_Date`, `Deleted`) VALUES
(1, '10', 'D', '2024-02-05 09:57:56.646842', 0),
(2, '10', 'B', '2024-01-06 04:56:41.520542', 0),
(3, '10', 'C', '2024-01-06 07:47:56.579457', 0),
(4, '11', 'A', '2024-01-06 07:48:09.661220', 0),
(5, '11', 'D', '2024-02-06 12:49:53.457937', 0),
(6, '11', 'C', '2024-01-06 07:48:19.008806', 0),
(7, '11', 'D', '2024-01-06 07:48:23.209497', 0),
(8, '12', 'A', '2024-01-06 07:48:28.882747', 0),
(9, '12', 'B', '2024-01-06 07:48:53.936055', 0),
(26, '10', 'F', '2024-02-05 09:58:26.121743', 0),
(27, '10', 'E', '2024-02-05 09:58:29.506282', 0),
(28, '10', 'E', '2024-02-05 09:58:32.713008', 0),
(29, '10', 'F', '2024-02-05 09:53:16.223497', 0);

-- --------------------------------------------------------

--
-- Table structure for table `add_notice`
--

CREATE TABLE `add_notice` (
  `S_No` int(11) NOT NULL,
  `Notice_Title` varchar(33) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `Notice_Message` varchar(150) NOT NULL,
  `Notice_Date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `Deleted` tinyint(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_notice`
--

INSERT INTO `add_notice` (`S_No`, `Notice_Title`, `ClassId`, `Notice_Message`, `Notice_Date`, `Deleted`) VALUES
(1, 'Marks of Unit Test', 8, 'Marks of Unit Test-I', '2024-01-23 07:48:44.013161', 0),
(2, 'Class topper', 9, 'Consult your class teacher', '2024-01-22 09:13:44.326299', 0),
(3, 'Interviews', 9, 'Interviews will be held from tommorow.', '2024-02-05 02:56:58.211169', 0);

-- --------------------------------------------------------

--
-- Table structure for table `add_students`
--

CREATE TABLE `add_students` (
  `S_No` int(11) NOT NULL,
  `Student_Name` varchar(33) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Student_ID` varchar(30) NOT NULL,
  `Photo` varbinary(30) NOT NULL,
  `Father_Name` varchar(30) NOT NULL,
  `Mother_Name` varchar(30) NOT NULL,
  `Contact_Number` bigint(10) NOT NULL,
  `Alternate_Contact_Number` bigint(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Admissin_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Deleted` tinyint(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_students`
--

INSERT INTO `add_students` (`S_No`, `Student_Name`, `Email`, `Class`, `Gender`, `Date_of_Birth`, `Student_ID`, `Photo`, `Father_Name`, `Mother_Name`, `Contact_Number`, `Alternate_Contact_Number`, `Address`, `User_Name`, `Password`, `Admissin_Date`, `Deleted`) VALUES
(1, 'V Balakrishna', 'vbalakrishna21121@gmail.com', '8', 'Male', '2000-08-11', '12a-1', 0x4453435f303135302e6a7067, 'V Simhachalam', 'V Bhagyam', 9347943984, 7995122572, '162, Pagodu, Jalumuru, Srikakulam, AP', 'bhanu_21121', 'Bhanu@116', '2024-02-05 11:25:35', 0),
(2, 'G Satyanarayana', 'satyagadi444@gmial.com', '9', 'Male', '2002-09-06', '12b-1', 0x73617479612e6a7067, 'G Bangarinaidu', 'G Lakshmi', 7036785205, 9865482155, 'Nellimarla, Vizianagaram, AP', 'satya_143', 'Satya@144', '2024-02-05 11:25:42', 0),
(3, 'D Jairam', 'jairamdesilla85@gmail.com', '3', 'Male', '2005-06-27', '10c-2', 0x494d4732303230303131393036313630362e6a7067, 'D Siva', 'D Nirmala', 8688468794, 9354854284, 'Tilaru, Jalumuru, Srikakulam, AP', 'jairam_086', 'Jairam@086', '2024-01-15 14:32:14', 0),
(4, 'D Dinesh', 'dinesh1445@gmail.com', '1', 'Male', '2003-01-26', '10a-1', 0x44696e6573685f70686f746f2e6a706567, 'D Siva', 'D Nirmala', 9392702322, 7995122572, 'Tilaru, Jalumuru, Srikakulam, AP', 'sai_1445', 'Sai@1445', '2024-01-15 13:30:44', 0),
(5, 'V Kesavarao', 'kesavavelamala1122@gmail.com', '9', 'Male', '1998-07-22', '12b-2', 0x494d475f32303139313030395f3139303733302e6a7067, 'V Simhachalam', 'V Bhagyam', 9398513783, 8185905655, 'Pagodu, Jalumuru, Srikakulam, AP', 'kesav_1122', 'Kesav@1122', '2024-01-15 13:34:26', 0),
(6, 'Y Naveen', 'naveenyadla211@gmail.com', '5', 'Male', '2002-04-21', '11b-5', 0x3230334a3541303339302e6a7067, 'Y Satyanarayana', 'Y Vijayalaxmi', 8945712481, 7989144142, 'Marepalli, Devarapalli, Vizag', 'naveen_118', 'Naveen@118', '2024-01-26 09:43:19', 0),
(7, 'M Rakesh', 'rakesh026@gmail.com', '4', 'Male', '2002-02-03', '11a-5', 0x494d475f32303233303432385f3133343431302e6a7067, 'M Srinivas', 'M Hymavathi', 9854181544, 7846552616, 'Vepagunta, Visakhapatnam, Andhra Pradesh', 'rakesh_026', 'Rakesh@026', '2024-02-06 12:50:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `S_No` int(11) NOT NULL,
  `Name` varchar(33) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `Mobile_Number` bigint(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `AdminRegdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`S_No`, `Name`, `User_Name`, `Mobile_Number`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'V Balakrishna', 'bhanu_116', 7995122572, 'bhanu21121@gmail.com', 'Bhanu@116', '2024-02-05 11:07:59.019017');

-- --------------------------------------------------------

--
-- Table structure for table `public_notice`
--

CREATE TABLE `public_notice` (
  `S_No` int(11) NOT NULL,
  `Notice_Title` varchar(33) NOT NULL,
  `Notice_Message` varchar(150) NOT NULL,
  `Notice_Date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `Deleted` tinyint(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `public_notice`
--

INSERT INTO `public_notice` (`S_No`, `Notice_Title`, `Notice_Message`, `Notice_Date`, `Deleted`) VALUES
(1, 'School will re-open', 'Consult your class teacher', '2024-01-23 07:50:37.631586', 0),
(2, 'Sankranthi Holidays', 'Holidays are declared from 11-01-2024 to 22-01-2024', '2024-01-11 03:06:10.660612', 0),
(3, 'Sankranthi Holidays', 'Holidays are declared from 11-01-2024 to 22-01-2024', '2024-01-11 03:07:13.034694', 0),
(4, 'Sankranthi Holidays', 'Holidays are declared from 11-01-2024 to 22-01-2024', '2024-01-11 03:07:20.710694', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_contact_page`
--
ALTER TABLE `about_contact_page`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `add_class`
--
ALTER TABLE `add_class`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `add_notice`
--
ALTER TABLE `add_notice`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `add_students`
--
ALTER TABLE `add_students`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `public_notice`
--
ALTER TABLE `public_notice`
  ADD PRIMARY KEY (`S_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_contact_page`
--
ALTER TABLE `about_contact_page`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_class`
--
ALTER TABLE `add_class`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `add_notice`
--
ALTER TABLE `add_notice`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_students`
--
ALTER TABLE `add_students`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `public_notice`
--
ALTER TABLE `public_notice`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
