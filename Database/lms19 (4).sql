-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 08, 2024 at 11:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms19`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(11) NOT NULL,
  `date_borrow` datetime NOT NULL DEFAULT current_timestamp(),
  `borrowcode` bigint(50) NOT NULL,
  `member_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_assigned` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `time_limit` datetime NOT NULL,
  `date_return` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id`, `date_borrow`, `borrowcode`, `member_id`, `item_id`, `stock_id`, `user_id`, `room_assigned`, `status`, `time_limit`, `date_return`) VALUES
(1, '2017-02-21 11:12:17', 22120170412171, 7, 16, 18, 1, 8, 2, '0000-00-00 00:00:00', '2017-02-21 04:12:47'),
(2, '2017-02-21 11:36:07', 22120170436071, 1, 16, 18, 1, 7, 2, '0000-00-00 00:00:00', '2017-02-21 04:48:33'),
(3, '2017-02-21 11:37:01', 22120170437011, 7, 26, 24, 1, 4, 2, '0000-00-00 00:00:00', '2017-02-21 04:48:31'),
(4, '2017-02-21 11:41:12', 22120170441121, 1, 16, 18, 1, 6, 2, '0000-00-00 00:00:00', '2017-02-21 04:48:31'),
(10, '2017-02-21 11:51:30', 22120170451301, 8, 24, 22, 1, 7, 2, '0000-00-00 00:00:00', '2024-03-20 03:46:48'),
(11, '2017-02-21 11:52:38', 22120170452381, 6, 26, 24, 1, 7, 2, '0000-00-00 00:00:00', '2024-03-16 05:56:55'),
(14, '2024-03-19 21:28:47', 316202405494614, 14, 16, 19, 8, 10, 2, '2024-03-18 10:19:00', '2024-03-19 16:59:30'),
(16, '2024-03-19 21:32:40', 31920241702408, 7, 27, 24, 8, 11, 2, '2024-03-20 12:02:00', '2024-03-20 16:53:39'),
(19, '2024-03-25 06:05:49', 32520240135498, 16, 24, 22, 8, 3, 2, '2024-03-25 09:15:00', '2024-03-26 04:16:58'),
(20, '2024-03-25 06:05:49', 32520240135498, 16, 28, 25, 8, 3, 2, '2024-03-25 09:15:00', '2024-03-26 04:16:58'),
(21, '2024-03-25 06:05:49', 32520240135498, 16, 16, 19, 8, 3, 2, '2024-03-25 09:15:00', '2024-03-26 04:16:58'),
(22, '2024-03-25 06:06:22', 32520240136228, 14, 16, 18, 8, 7, 2, '2024-03-25 09:30:00', '2024-03-26 03:32:32'),
(23, '2024-03-25 06:06:22', 32520240136228, 14, 24, 22, 8, 7, 2, '2024-03-25 09:30:00', '2024-03-26 03:32:32'),
(24, '2024-03-25 06:06:22', 32520240136228, 14, 27, 24, 8, 7, 2, '2024-03-25 09:30:00', '2024-03-26 03:32:32'),
(25, '2024-03-25 06:06:22', 32520240136228, 14, 16, 19, 8, 7, 2, '2024-03-25 09:30:00', '2024-03-26 03:32:32'),
(26, '2024-03-25 13:45:19', 325202401343816, 16, 18, 21, 8, 3, 2, '2024-03-26 06:04:00', '2024-03-25 09:15:36'),
(27, '2024-03-25 13:45:19', 325202401343816, 16, 24, 22, 8, 3, 2, '2024-03-26 06:04:00', '2024-03-25 09:15:36'),
(28, '2024-03-26 08:02:20', 325202409142016, 16, 18, 21, 8, 3, 2, '2024-03-26 01:44:00', '2024-03-26 03:32:30'),
(29, '2024-03-26 08:02:20', 325202409142016, 16, 27, 24, 8, 3, 2, '2024-03-26 01:44:00', '2024-03-26 03:32:30'),
(30, '2024-03-26 08:02:20', 325202409142016, 16, 29, 26, 8, 3, 2, '2024-03-26 01:44:00', '2024-03-26 03:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `e_deviceid` varchar(50) NOT NULL,
  `e_model` varchar(50) NOT NULL,
  `e_category` varchar(50) NOT NULL,
  `e_brand` varchar(50) NOT NULL,
  `e_description` text NOT NULL,
  `e_stock` int(11) NOT NULL,
  `e_stockleft` int(11) NOT NULL,
  `e_type` varchar(50) NOT NULL,
  `e_status` varchar(50) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipment_inventory`
--

CREATE TABLE `equipment_inventory` (
  `id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_logs`
--

CREATE TABLE `history_logs` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `status_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `history_logs`
--

INSERT INTO `history_logs` (`id`, `description`, `table_name`, `status_name`, `user_id`, `user_type`, `date_created`) VALUES
(53, 'add new equipmentH328C , Projector', 'equipment', '', 1, 1, '2017-02-21 11:24:12'),
(54, 'add new equipmentOM-130006A/K , Keyboard', 'equipment', '', 1, 1, '2017-02-21 11:28:04'),
(55, 'add new equipment---- , Remote', 'equipment', '', 1, 1, '2017-02-21 11:31:19'),
(56, 'add new equipment58E510 , TV', 'equipment', '', 1, 1, '2017-02-21 11:35:07'),
(57, 'add new student', 'client', '', 1, 1, '2024-03-16 10:19:14'),
(58, 'add userdhatchu', 'user', '', 1, 1, '2024-03-16 10:22:04'),
(59, 'add new equipment12 , Monitor', 'equipment', '', 1, 1, '2024-03-19 21:15:43'),
(60, 'add usermanoj', 'user', '', 1, 1, '2024-03-19 21:25:53'),
(61, 'add 22items to12quantity', 'equipment', '', 8, 1, '2024-03-21 18:52:58'),
(62, 'add userjeni', 'user', '', 7, 1, '2024-03-25 06:02:00'),
(63, 'add new student', 'client', '', 8, 1, '2024-03-25 06:03:57'),
(64, 'add new student', 'client', '', 9, 1, '2024-03-25 08:04:53'),
(65, 'add new equipment55 , Monitor', 'equipment', '', 8, 1, '2024-03-25 13:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(5) NOT NULL,
  `i_deviceID` varchar(50) NOT NULL,
  `i_model` varchar(50) NOT NULL,
  `i_category` varchar(50) NOT NULL,
  `i_brand` varchar(50) NOT NULL,
  `i_description` text NOT NULL,
  `i_type` varchar(50) NOT NULL,
  `item_rawstock` int(11) NOT NULL,
  `i_status` int(11) NOT NULL DEFAULT 1,
  `i_mr` varchar(50) NOT NULL,
  `i_price` decimal(10,2) NOT NULL,
  `i_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `i_deviceID`, `i_model`, `i_category`, `i_brand`, `i_description`, `i_type`, `item_rawstock`, `i_status`, `i_mr`, `i_price`, `i_photo`) VALUES
(1, '37784471777', '58E510', 'TV', 'Skyworth', '58\" Smart Full HD, HDMI x3, VGA X1, LAN X2, USB X2, AV X3, Component in x2, Wifi, MHL Function, 1920x1080 screen resolution, 8w+8w audio output power, 100-240v~ 50/0Hz, 25.9 kg58\" Smart Full HD, HDMI x3, VGA X1, LAN X2, USB X2', 'Consumable', 5, 1, 'Sir Cadagat', 8000.00, '1487648107.jpg'),
(16, '2009991', 'SM-9221', 'Mouse', 'Acer', 'Black', 'Consumable', 13, 1, 'Sir Cadagat', 599.00, '1487646917.jpg'),
(18, '----', 'H328C', 'Projector', 'epson', 'white', 'Consumable', 3, 1, 'Sir Cadagat', 2500.00, '1487647452.jpg'),
(19, '----', 'OM-130006A/K', 'Keyboard', 'Acer', 'Slim Compact Keyboard, Black USB Wired, 98 Keys', 'Consumable', 60, 1, 'Sir Cadagat', 250.00, '1487647676.png'),
(20, '----', 'OM-130006A/K', 'Keyboard', 'Acer', 'Slim Compact Keyboard, Black USB Wired, 98 Keys', 'Consumable', 60, 1, 'Sir Cadagat', 250.00, '1487647678.png'),
(21, '----', 'OM-130006A/K', 'Keyboard', 'Acer', 'Slim Compact Keyboard, Black USB Wired, 98 Keys', 'Consumable', 60, 1, 'Sir Cadagat', 250.00, '1487647679.png'),
(22, '----', 'OM-130006A/K', 'Keyboard', 'Acer', 'Slim Compact Keyboard, Black USB Wired, 98 Keys', 'Consumable', 60, 1, 'Sir Cadagat', 250.00, '1487647680.png'),
(23, '----', 'OM-130006A/K', 'Keyboard', 'Acer', 'Slim Compact Keyboard, Black USB Wired, 98 Keys', 'Consumable', 60, 1, 'Sir Cadagat', 250.00, '1487647681.png'),
(24, '----', 'OM-130006A/K', 'Keyboard', 'Acer', 'Slim Compact Keyboard, Black USB Wired, 98 Keys', 'Consumable', 60, 1, 'Sir Cadagat', 250.00, '1712410774.jpg'),
(27, 'gfd', '32', 'DLP Screen', '13', '324', 'Consumable', 13, 1, '43', 322.00, '1710052514.jpg'),
(28, 'ff', '12', 'Monitor', 'Dell', 'dde', 'Consumable', 74, 1, '98745', 5241.00, '1711027415.png'),
(29, 'dd', '55', 'Monitor', 'dell', 'hgh', 'Consumable', 98, 1, '999', 50000.00, '1711354261.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `item_inventory`
--

CREATE TABLE `item_inventory` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `inventory_itemstock` int(11) NOT NULL,
  `inventory_status` int(11) NOT NULL,
  `item_remarks` text NOT NULL,
  `date_change` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `item_inventory`
--

INSERT INTO `item_inventory` (`id`, `item_id`, `inventory_itemstock`, `inventory_status`, `item_remarks`, `date_change`) VALUES
(8, 16, 2, 2, '', '2017-02-17 06:13:59'),
(9, 16, 2, 2, 'test', '2017-02-17 06:16:07');

-- --------------------------------------------------------

--
-- Table structure for table `item_stock`
--

CREATE TABLE `item_stock` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `items_stock` int(11) NOT NULL,
  `item_status` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `item_stock`
--

INSERT INTO `item_stock` (`id`, `item_id`, `room_id`, `items_stock`, `item_status`, `status`) VALUES
(18, 16, 14, 10, 1, 1),
(19, 16, 14, 3, 2, 1),
(21, 18, 14, 1, 1, 1),
(22, 24, 14, 60, 1, 1),
(24, 27, 14, 4, 1, 1),
(25, 28, 14, 72, 1, 1),
(26, 29, 14, 98, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_transfer`
--

CREATE TABLE `item_transfer` (
  `id` int(11) NOT NULL,
  `t_itemID` int(11) NOT NULL,
  `t_roomID` int(11) NOT NULL,
  `t_stockID` int(11) NOT NULL,
  `t_quantity` int(11) NOT NULL,
  `date_transfer` timestamp NOT NULL DEFAULT current_timestamp(),
  `t_status` int(11) NOT NULL DEFAULT 1,
  `personincharge` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `item_transfer`
--

INSERT INTO `item_transfer` (`id`, `t_itemID`, `t_roomID`, `t_stockID`, `t_quantity`, `date_transfer`, `t_status`, `personincharge`, `userid`) VALUES
(1, 27, 6, 24, 1, '2024-03-19 15:44:51', 1, 'dhatchu', 1),
(2, 28, 6, 25, 1, '2024-03-20 15:55:32', 1, 'monika', 8),
(3, 18, 6, 21, 2, '2024-03-22 03:02:07', 1, 'manoj', 8);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `m_school_id` int(11) NOT NULL,
  `m_fname` varchar(50) NOT NULL,
  `m_lname` varchar(50) NOT NULL,
  `m_gender` varchar(10) NOT NULL,
  `m_contact` varchar(15) NOT NULL,
  `m_department` varchar(50) NOT NULL,
  `m_year_section` varchar(20) NOT NULL,
  `m_type` varchar(50) NOT NULL,
  `m_password` varchar(50) NOT NULL,
  `m_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `m_school_id`, `m_fname`, `m_lname`, `m_gender`, `m_contact`, `m_department`, `m_year_section`, `m_type`, `m_password`, `m_status`) VALUES
(1, 21200122, 'John ', 'Doe', 'Male', '9124599887', 'BSIS', '1st-A', 'Student', '', 1),
(2, 21200002, 'Chris ', 'Doe', 'Male', '9076486735', 'BSIS', '1st-A', 'Student', '', 0),
(3, 21300024, 'Shane', 'Ramos', 'Female', '9072786945', 'BSCE', '1st-A', 'Student', '', 1),
(5, 21200011, 'Tresha', 'Tiamzon', 'Female', '9499007591', 'BSIT', '1st-A', 'Student', '', 1),
(6, 21400099, 'Mark', 'Susana', 'Male', '091265451332', 'BSIT', '2nd- B', 'Student', '', 1),
(7, 21300073, 'Gino', 'Olmedo', 'Male', '09502786543', 'BSIS', '4th- A', 'Student', '', 1),
(8, 21401109, 'Mika', 'Calapatan', 'Female', '09498723987', 'BSHRM', '3rd- C', 'Student', '', 1),
(14, 7, 'Dhatchu', 'Mah', 'Female', '9874563210', 'CSE', '2nd - A', 'Student', '', 1),
(16, 123, 'Rudth', 'Jenifa', 'Female', '9874563210', 'EEE', '3rd - A', 'teacher', '', 1),
(17, 2, 'Jenima', 'K', 'Female', '987463210', 'EEE', '3rd - A', 'Student', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `reservation_code` varchar(60) NOT NULL,
  `member_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `reserve_date` varchar(50) DEFAULT NULL,
  `reservation_time` varchar(20) NOT NULL,
  `time_limit` datetime NOT NULL,
  `assign_room` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `remarks` text NOT NULL,
  `r_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_code`, `member_id`, `item_id`, `stock_id`, `room_id`, `reserve_date`, `reservation_time`, `time_limit`, `assign_room`, `status`, `remarks`, `r_date`) VALUES
(1, '0316202405494614', 14, 16, 19, 0, '03/19/2024', '11:20', '2024-03-18 10:19:00', 10, 3, '', '2024-03-16 10:19:46'),
(2, '031920240458209', 9, 24, 22, 0, '03/19/2024', '10:27', '2024-03-19 09:26:00', 11, 3, '', '2024-03-19 21:28:20'),
(3, '031920240458209', 9, 27, 24, 0, '03/19/2024', '10:27', '2024-03-19 09:26:00', 11, 3, '', '2024-03-19 21:28:20'),
(4, '0325202401343816', 16, 18, 21, 0, '03/25/2024', '19:05', '2024-03-26 06:04:00', 3, 3, '', '2024-03-25 06:04:38'),
(5, '0325202401343816', 16, 24, 22, 0, '03/25/2024', '19:05', '2024-03-26 06:04:00', 3, 3, '', '2024-03-25 06:04:38'),
(6, '0325202409142016', 16, 18, 21, 0, '03/25/2024', '15:45', '2024-03-26 01:44:00', 3, 3, '', '2024-03-25 13:44:20'),
(7, '0325202409142016', 16, 27, 24, 0, '03/25/2024', '15:45', '2024-03-26 01:44:00', 3, 3, '', '2024-03-25 13:44:20'),
(8, '0325202409142016', 16, 29, 26, 0, '03/25/2024', '15:45', '2024-03-26 01:44:00', 3, 3, '', '2024-03-25 13:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_status`
--

CREATE TABLE `reservation_status` (
  `id` int(11) NOT NULL,
  `reservation_code` varchar(50) NOT NULL,
  `remark` text NOT NULL,
  `res_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reservation_status`
--

INSERT INTO `reservation_status` (`id`, `reservation_code`, `remark`, `res_status`) VALUES
(13, '0217201706314310', 'Accepted Reservation', 1),
(14, '021920170329593', 'Accepted Reservation', 1),
(15, '021920170329593', 'Accepted Reservation', 1),
(16, '021920170345437', 'Accepted Reservation', 1),
(17, '021920170353384', 'Accepted Reservation', 1),
(18, '0316202405494614', 'Accepted Reservation', 1),
(19, '031920240458209', 'Accepted Reservation', 1),
(20, '0325202401343816', 'Accepted Reservation', 1),
(21, '0325202409142016', 'Accepted Reservation', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `rm_name` varchar(50) NOT NULL,
  `rm_date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `rm_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `rm_name`, `rm_date_added`, `rm_status`) VALUES
(1, 'room 312', '2016-11-16 21:21:42', 1),
(2, 'room 403', '2016-11-16 21:21:47', 1),
(3, 'room 311', '2016-11-16 21:21:53', 1),
(4, 'room 313', '2016-11-17 18:45:03', 1),
(5, 'room 402', '2016-11-17 20:51:30', 1),
(6, 'room 301', '2016-11-17 20:51:43', 1),
(7, 'room 302', '2016-11-17 20:51:54', 1),
(8, 'room 303', '2016-11-17 20:52:04', 1),
(9, 'room 304', '2016-11-17 20:52:20', 1),
(10, 'room 305', '2016-11-17 20:52:56', 1),
(11, 'room 306', '2016-11-17 20:53:20', 1),
(14, 'room 310', '2017-01-08 13:17:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_equipment`
--

CREATE TABLE `room_equipment` (
  `id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `re_quantity` int(11) NOT NULL,
  `stats` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `room_equipment`
--

INSERT INTO `room_equipment` (`id`, `equipment_id`, `room_id`, `re_quantity`, `stats`) VALUES
(1, 1, 14, 12, 1),
(2, 2, 14, 12, 1),
(3, 3, 14, 12, 1),
(4, 4, 14, 12, 1),
(5, 5, 1, 12, 1),
(6, 6, 14, 12, 1),
(7, 7, 14, 12, 1),
(8, 8, 5, 12, 1),
(9, 1, 14, 10, 1),
(10, 2, 14, 10, 1),
(11, 1, 14, 12, 1),
(12, 2, 14, 12, 1),
(13, 3, 14, 2, 1),
(14, 1, 14, 12, 1),
(15, 2, 14, 10, 1),
(16, 3, 14, 10, 1),
(17, 1, 14, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1=admin, 2=stafff',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active, 2=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `type`, `status`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', 1, 1),
(2, 'John Doe', 'staff1', 'de9bf5643eabf80f4a56fda3bbb84483', 2, 1),
(3, 'Juan', 'juan', 'f5737d25829e95b9c234b7fa06af8736', 2, 1),
(4, 'Maria Cruz', 'maria', '263bce650e68ab4e23f28263760b9fa5', 2, 1),
(5, 'Pedro Jose', 'pedro', 'd3ce9efea6244baa7bf718f12dd0c331', 2, 1),
(6, 'Administrator 2', 'admin2', 'c84258e9c39059a89ab77d846ddab909', 1, 1),
(7, 'dhatchu', 'dhatchu', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(8, 'manoj', 'manojk', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(9, 'jeni', 'jenifa', 'e10adc3949ba59abbe56e057f20f883e', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `equipment_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `equipment_inventory`
--
ALTER TABLE `equipment_inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipment_id` (`equipment_id`);

--
-- Indexes for table `history_logs`
--
ALTER TABLE `history_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_inventory`
--
ALTER TABLE `item_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_stock`
--
ALTER TABLE `item_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_transfer`
--
ALTER TABLE `item_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `equipment_id` (`item_id`);

--
-- Indexes for table `reservation_status`
--
ALTER TABLE `reservation_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_equipment`
--
ALTER TABLE `room_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equipment_inventory`
--
ALTER TABLE `equipment_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_logs`
--
ALTER TABLE `history_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `item_inventory`
--
ALTER TABLE `item_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `item_stock`
--
ALTER TABLE `item_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `item_transfer`
--
ALTER TABLE `item_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservation_status`
--
ALTER TABLE `reservation_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `room_equipment`
--
ALTER TABLE `room_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
