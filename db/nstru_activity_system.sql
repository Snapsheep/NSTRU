-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 25, 2017 at 08:37 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nstru_activity_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `newfeeds`
--

CREATE TABLE `newfeeds` (
  `P_ID` int(11) NOT NULL,
  `PTOPIC` text NOT NULL,
  `PTEXT` text NOT NULL,
  `PDATE` text NOT NULL,
  `PFILE` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `newfeeds`
--

INSERT INTO `newfeeds` (`P_ID`, `PTOPIC`, `PTEXT`, `PDATE`, `PFILE`) VALUES
(48, 'ขอเชิญประชุมคณะกรรมการสภานักศึกษาประจำปีการศึกษา2560 ', 'วันจันทร์ที่ 29 พฤษภาคม 2560 เวลา 10.00 น. ณ ห้องประชุมกองพัฒนานักศึกษา เพื่อเลือกตั้งประธานสภานักศึกษาและกรรมการตำแหน่งต่างๆ\r\nรายชื่อตัวแทนคณะกรรมการสภานักศึกษา\r\nมหาวิทยาลัยราชภัฏนครศรีธรรมราช ประจำปีการศึกษา 2560 จึงแจ้งมาเพื่อทราบโดยทั่วกัน\r\nเรียนผู้นำนักศึกษาทุกองค์กรกิจกรรมประจำปีการศึกษา2559 ให้ส่งรายชื่อผู้เข้าร่วมประชุมพัฒนาศักยภาพผู้นำนักศึกษา ประจำปีการศึกษา 2559 ระหว่างวันที่ 1 – 3 มิถุนายน 2559 ณ โรงแรมชลนภารีสอร์ท องค์กรละ 8 คน พร้อมอาจารย์หรือเจ้าหน้าที่ที่ปรึกษาองค์กร โดยให้จัดส่งข้อมูลภายในวันที่ 26 พฤษภาคม 2559 ณ กองพัฒนานักศึกษา', '05/26/2017', 'newfeeds_file/29-05-17 16-54-16.pdf'),
(49, 'ตัวอย่างโครงการที่ถูกต้อง', 'ประกาศ ประกาศ ประกาศ ประกาศ ประกาศ ประกาศประชุมสภา', '05/23/2017', 'newfeeds_file/29-05-17 16-54-49.pdf'),
(50, 'กำหนดการส่งเอกสาร ครั้งสุดท้าย', 'ฟหกฟหกฟหก', '05/30/2017', ''),
(51, 'กำหนดการสอบสัมภาษณ์ โครงการรับตรง 12 จังหวัดภาคตะวันออก	', 'ฟฟฟฟฟ', '05/23/2017', ''),
(52, 'กำหนดการสอบสัมภาษณ์ โครงการรับตรงทั่วประเทศ ', 'หหหหหหหหหหหหห', '05/08/2017', ''),
(53, 'ค่าธรรมเนียมการรายงานตัวเข้าศึกษา', 'กกกกกกกกกกก', '05/29/2017', ''),
(54, 'ประกาศผลผู้มีสิทธิ์รายงานตัวเข้าเป็นนิสิต', 'ไไไไไไไไไไไไไไไ', '05/29/2017', ''),
(55, 'ประกาศรายชื่อผู้มีสิทธิ์เข้าเป็นนิสิต สาขาวิชาเทคโนโลยีอุตสาหกรรมศึกษา คณะศึกษาศาสตร์', 'ๆๆๆๆๆๆๆๆๆๆ', '05/15/2017', ''),
(60, 'ประกาศรายชื่อผู้มีสิทธิ์สอบปฏิบัติ รับตรง คณะศิลปกรรมศาสตร์ รอบเพิ่มเติม (รายวิชาสอบมี 6 วิชา)', 'เเพเพเพเพเ', '05/04/2017', ''),
(61, 'แบบฟอร์ม', 'เเพเพเพเพเ', '05/04/2017', ''),
(70, 'ประกาศผลสอบปลายภาค', 'ให้นักศึกษามาสอบตามวันที่ที่กำหนดด้วย', '05/31/2017', 'newfeeds_file/30-05-17 17-16-45.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `storage1`
--

CREATE TABLE `storage1` (
  `P_ID` int(10) NOT NULL,
  `PNAME` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `PDATE` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PDATE2` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PTERM` int(5) NOT NULL,
  `PYEAR` int(5) NOT NULL,
  `PPLACE` text CHARACTER SET utf8mb4 NOT NULL,
  `PPERSON` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `PFACULTY` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PCLUBNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PPARTICIPANT` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PBUDGETS` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PSOURCE` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `PSELLMONEY` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `PMONEYBALANCE` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `PFIRSTNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PLASTNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PTELL` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PEMAIL` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PSTATUS` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `storage1`
--

INSERT INTO `storage1` (`P_ID`, `PNAME`, `PDATE`, `PDATE2`, `PTERM`, `PYEAR`, `PPLACE`, `PPERSON`, `PFACULTY`, `PCLUBNAME`, `PPARTICIPANT`, `PBUDGETS`, `PSOURCE`, `PSELLMONEY`, `PMONEYBALANCE`, `PFIRSTNAME`, `PLASTNAME`, `PTELL`, `PEMAIL`, `PSTATUS`) VALUES
(1, 'ประชุมสถานิสิตนักศึกษา', '24/05/2017', '09/06/2017', 2, 2560, 'งานร่วมกับผู้อื่นการอ่าน การจัดการ และทักษะทางภาษา', '1', '', '', '1000', '1000', '1000', '1000', '1000', 'นายอธิป', 'ทิปทิป', '082-3536-333', 'qweqwe@gmail.com', 0),
(2, 'พัฒนาศักยภาพนักศึกษา ', '26/05/2017', '07/06/2017', 2, 2560, 'ชลนภารีสอร์ท อำเถอขนอม จังหวัดนครศรีธรรมราช', '1', '', '', '100 คน', '179,000 บาท', 'งบประมาณเงินรายได้ รหัส งน.04-325-07.3', '213,095', '0 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 1),
(3, 'บีกินนิ่งแคมป์', '09/05/2017', '26/05/2017', 2, 2560, 'มหาวิทยาลัยราชภัฎนครศรีธรรมราช', '1', '', '', '2,500 คน', '150,000 บาท', 'รีดไถ', '100,000 บาท', '50,000 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0),
(4, 'รับร้องหอพักใน', '28/06/2017', '30/06/2017', 1, 2561, 'มหาวิทยาลัยราชภัฎนครศรีธรรมราช', '1', '', '', '1,200 คน', '50,000 บาท', 'ปล้นแบงค์', '20,000 บาท', '30,000 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-332', 'qweqw@gmail.com', 2),
(6, 'ทดสอบโครงการครั้งที่ 100', '10/05/2017', '26/05/2017', 2, 2560, 'มหาวิทยาลัย', '1', '', '', '500 คน', '20,000 บาท', 'สถาบันการเงิน', '10,000 บาท', '10,000 บาท', 'นายกฤตมุข', 'สมพรหม', '082-3536-333', 'asdf@gmail.com', 0),
(5, 'สอบปฏิบัติ', '23/05/2017', '10/06/2017', 2, 2560, 'มหาลัย', '1', '', '', '', '', '', '', '', '', '', '', '', 1),
(8, 'ทดสอบจาวาสคริป', '24/05/2017', '08/06/2017', 2, 2560, 'มหาวิทยาลัยธรรมศตร์', '1', '', '', '1,000 คน', '1,000 บาท', 'ธนาคารธนชาติ', '500 บาท', '500 บาท', 'นายอธิป', 'ทริปทริป', '082-3536-333', 'qweqwe@gmail.com', 0),
(11, 'ทดสอบบังคับกรอก1', '23/06/2017', '29/06/2017', 2, 2560, 'มหาวิทยาลัยราชภัฏสุราษ', '1', '', '', '250 คน', '100 บาท', 'บริจาค', '50 บาท', '50 บาท', 'นายอธิป', 'ทริปทริป', '082-3536-333', 'qwe@gmail.com', 0),
(10, '5555', '02/05/2017', '14/05/2017', 2, 2560, '', '1', '', '', '', '', '', '', '', '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `storage2`
--

CREATE TABLE `storage2` (
  `P_ID` int(10) NOT NULL DEFAULT '0',
  `PNAME` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `PDATE` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PDATE2` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PTERM` int(5) NOT NULL,
  `PYEAR` int(5) NOT NULL,
  `PPLACE` text CHARACTER SET utf8mb4 NOT NULL,
  `PPERSON` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `PFACULTY` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PCLUBNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PPARTICIPANT` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PBUDGETS` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PSOURCE` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `PSELLMONEY` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `PMONEYBALANCE` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `PFIRSTNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PLASTNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PTELL` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PEMAIL` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PSTATUS` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `storage2`
--

INSERT INTO `storage2` (`P_ID`, `PNAME`, `PDATE`, `PDATE2`, `PTERM`, `PYEAR`, `PPLACE`, `PPERSON`, `PFACULTY`, `PCLUBNAME`, `PPARTICIPANT`, `PBUDGETS`, `PSOURCE`, `PSELLMONEY`, `PMONEYBALANCE`, `PFIRSTNAME`, `PLASTNAME`, `PTELL`, `PEMAIL`, `PSTATUS`) VALUES
(1, 'งานร่วมกับผู้อื่นการอ่าน ', '24/05/2017', '09/06/2017', 2, 2560, 'งานร่วมกับผู้อื่นการอ่าน การจัดการ และทักษะทางภาษา', '2', '', '', '1000', '1000', '1000', '1000', '1000', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0),
(2, 'พัฒนาศักยภาพนักศึกษา ', '26/05/2017', '07/06/2017', 2, 2560, 'ชลนภารีสอร์ท อำเถอขนอม จังหวัดนครศรีธรรมราช', '2', '', '', '100 คน', '179,000 บาท', 'งบประมาณเงินรายได้ รหัส งน.04-325-07.3', '213,095', '0 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0),
(3, 'บีกินนิ่งแคมป์', '09/05/2017', '26/05/2017', 2, 2560, 'มหาวิทยาลัยราชภัฎนครศรีธรรมราช', '2', '', '', '2,500 คน', '150,000 บาท', 'รีดไถ', '100,000 บาท', '50,000 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0),
(4, 'รับร้องหอพัก', '02/05/2017', '17/05/2017', 2, 2560, 'มหาวิทยาลัย', '2', '', '', '1,200 คน', '20,000 บาท', 'ปล้นแบงค์', '10,000 บาท', '10,000 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `storage3`
--

CREATE TABLE `storage3` (
  `P_ID` int(10) NOT NULL DEFAULT '0',
  `PNAME` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `PDATE` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PDATE2` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PTERM` int(5) NOT NULL,
  `PYEAR` int(5) NOT NULL,
  `PPLACE` text CHARACTER SET utf8mb4 NOT NULL,
  `PPERSON` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `PFACULTY` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PCLUBNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PPARTICIPANT` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PBUDGETS` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PSOURCE` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `PSELLMONEY` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `PMONEYBALANCE` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `PFIRSTNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PLASTNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PTELL` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PEMAIL` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PSTATUS` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `storage3`
--

INSERT INTO `storage3` (`P_ID`, `PNAME`, `PDATE`, `PDATE2`, `PTERM`, `PYEAR`, `PPLACE`, `PPERSON`, `PFACULTY`, `PCLUBNAME`, `PPARTICIPANT`, `PBUDGETS`, `PSOURCE`, `PSELLMONEY`, `PMONEYBALANCE`, `PFIRSTNAME`, `PLASTNAME`, `PTELL`, `PEMAIL`, `PSTATUS`) VALUES
(1, 'งานร่วมกับผู้อื่นการอ่าน ', '24/05/2017', '09/06/2017', 2, 2560, 'งานร่วมกับผู้อื่นการอ่าน การจัดการ และทักษะทางภาษา', '3', '', '', '1000', '1000', '1000', '1000', '1000', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0),
(2, 'พัฒนาศักยภาพนักศึกษา ', '26/05/2017', '07/06/2017', 2, 2560, 'ชลนภารีสอร์ท อำเถอขนอม จังหวัดนครศรีธรรมราช', '3', '', '', '100 คน', '179,000 บาท', 'งบประมาณเงินรายได้ รหัส งน.04-325-07.3', '213,095', '0 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0),
(3, 'บีกินนิ่งแคมป์', '09/05/2017', '26/05/2017', 2, 2560, 'มหาวิทยาลัยราชภัฎนครศรีธรรมราช', '3', '', '', '2,500 คน', '150,000 บาท', 'รีดไถ', '100,000 บาท', '50,000 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0),
(4, 'รับร้องหอพัก', '02/05/2017', '17/05/2017', 2, 2560, 'มหาวิทยาลัย', '3', '', '', '1,200 คน', '20,000 บาท', 'ปล้นแบงค์', '10,000 บาท', '10,000 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `storage4`
--

CREATE TABLE `storage4` (
  `P_ID` int(10) NOT NULL DEFAULT '0',
  `PNAME` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `PDATE` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PDATE2` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PTERM` int(5) NOT NULL,
  `PYEAR` int(5) NOT NULL,
  `PPLACE` text CHARACTER SET utf8mb4 NOT NULL,
  `PPERSON` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `PFACULTY` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PCLUBNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PPARTICIPANT` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PBUDGETS` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PSOURCE` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `PSELLMONEY` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `PMONEYBALANCE` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `PFIRSTNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PLASTNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PTELL` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PEMAIL` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PSTATUS` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `storage4`
--

INSERT INTO `storage4` (`P_ID`, `PNAME`, `PDATE`, `PDATE2`, `PTERM`, `PYEAR`, `PPLACE`, `PPERSON`, `PFACULTY`, `PCLUBNAME`, `PPARTICIPANT`, `PBUDGETS`, `PSOURCE`, `PSELLMONEY`, `PMONEYBALANCE`, `PFIRSTNAME`, `PLASTNAME`, `PTELL`, `PEMAIL`, `PSTATUS`) VALUES
(1, 'งานร่วมกับผู้อื่นการอ่าน ', '24/05/2017', '09/06/2017', 2, 2560, 'งานร่วมกับผู้อื่นการอ่าน การจัดการ และทักษะทางภาษา', '4', 'เทคโนโลยีอุตสาหกรรม', '', '1000', '1000', '1000', '1000', '1000', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 1),
(2, 'พัฒนาศักยภาพนักศึกษา ', '26/05/2017', '07/06/2017', 2, 2560, 'ชลนภารีสอร์ท อำเถอขนอม จังหวัดนครศรีธรรมราช', '4', 'มนุษยศาสตร์และสังคมศาสตร์', '', '100 คน', '179,000 บาท', 'งบประมาณเงินรายได้ รหัส งน.04-325-07.3', '213,095', '0 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0),
(3, 'บีกินนิ่งแคมป์', '09/05/2017', '26/05/2017', 2, 2560, 'มหาวิทยาลัยราชภัฎนครศรีธรรมราช', '4', 'วิทยาศาสตร์และเทคโนโลยี', '', '2,500 คน', '150,000 บาท', 'รีดไถ', '100,000 บาท', '50,000 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0),
(4, 'รับร้องหอพัก', '02/05/2017', '17/05/2017', 2, 2560, 'มหาวิทยาลัย', '4', 'วิทยาการจัดการ', '', '1,200 คน', '20,000 บาท', 'ปล้นแบงค์', '10,000 บาท', '10,000 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `storage5`
--

CREATE TABLE `storage5` (
  `P_ID` int(10) NOT NULL DEFAULT '0',
  `PNAME` varchar(150) CHARACTER SET utf8mb4 NOT NULL,
  `PDATE` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PDATE2` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PTERM` int(5) NOT NULL,
  `PYEAR` int(5) NOT NULL,
  `PPLACE` text CHARACTER SET utf8mb4 NOT NULL,
  `PPERSON` varchar(60) CHARACTER SET utf8mb4 NOT NULL,
  `PFACULTY` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PCLUBNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PPARTICIPANT` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PBUDGETS` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PSOURCE` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `PSELLMONEY` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `PMONEYBALANCE` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `PFIRSTNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PLASTNAME` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `PTELL` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PEMAIL` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `PSTATUS` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `storage5`
--

INSERT INTO `storage5` (`P_ID`, `PNAME`, `PDATE`, `PDATE2`, `PTERM`, `PYEAR`, `PPLACE`, `PPERSON`, `PFACULTY`, `PCLUBNAME`, `PPARTICIPANT`, `PBUDGETS`, `PSOURCE`, `PSELLMONEY`, `PMONEYBALANCE`, `PFIRSTNAME`, `PLASTNAME`, `PTELL`, `PEMAIL`, `PSTATUS`) VALUES
(1, 'งานร่วมกับผู้อื่นการอ่าน ', '24/05/2017', '09/06/2017', 2, 2560, 'งานร่วมกับผู้อื่นการอ่าน การจัดการ และทักษะทางภาษา', '5', '', 'ปันรักให้น้อง', '1000', '1000', '1000', '1000', '1000', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0),
(2, 'พัฒนาศักยภาพนักศึกษา ', '26/05/2017', '07/06/2017', 2, 2560, 'ชลนภารีสอร์ท อำเถอขนอม จังหวัดนครศรีธรรมราช', '5', '', 'คอมพิวเตอร์ศึกษา', '100 คน', '179,000 บาท', 'งบประมาณเงินรายได้ รหัส งน.04-325-07.3', '213,095', '0 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0),
(3, 'บีกินนิ่งแคมป์', '09/05/2017', '26/05/2017', 2, 2560, 'มหาวิทยาลัยราชภัฎนครศรีธรรมราช', '5', '', 'สกัดกั้นนักดื่มหน้าใหม่', '2,500 คน', '150,000 บาท', 'รีดไถ', '100,000 บาท', '50,000 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0),
(4, 'รับร้องหอพัก', '02/05/2017', '17/05/2017', 2, 2560, 'มหาวิทยาลัย', '5', '', 'ไฟฟ้าอาสา', '1,200 คน', '20,000 บาท', 'ปล้นแบงค์', '10,000 บาท', '10,000 บาท', 'นายวัชรากร', 'พรหมทอง', '082-3536-333', 'qweqwe@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `ID_USER` int(11) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `ID_CARD` varchar(20) NOT NULL,
  `TYPESTATUS` varchar(30) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `IMAGE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`ID_USER`, `USERNAME`, `PASSWORD`, `ID_CARD`, `TYPESTATUS`, `STATUS`, `IMAGE`) VALUES
(1, 'admin', '123456', '5611513001', 'แอดมิน', 'Admin', 'image/admin.png'),
(2, 'admin1', '123456', '5611513001', 'แอดมิน', 'Admin', 'image/admin1.jpg'),
(3, 'user1', '123456', '5611513002', 'สภานักศึกษา', 'User', 'image/user1.jpg'),
(4, 'user2', '123456', '5611513003', 'องค์การบริหารนักศึกษา', 'User', 'image/user2.jpg'),
(5, 'user3', '123456', '5611513004', 'พรรคฝ่ายค้าน', 'User', 'image/user3.jpg'),
(7, 'user5', '123456', '5611513006', 'ชมรมนักศึกษา', 'User', 'image/user5.jpg'),
(8, 'user4', '123456', '5611513005', 'สโมสรนักศึกษา', 'User', 'image/user4.jpg'),
(9, 'user9', '123456', '5611513027', 'สภานักศึกษา', 'User', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newfeeds`
--
ALTER TABLE `newfeeds`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `storage1`
--
ALTER TABLE `storage1`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newfeeds`
--
ALTER TABLE `newfeeds`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `storage1`
--
ALTER TABLE `storage1`
  MODIFY `P_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
