-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 09:11 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `northwaymotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bazars`
--

CREATE TABLE `bazars` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `item` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bazar_items`
--

CREATE TABLE `bazar_items` (
  `id` int(11) NOT NULL,
  `item` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `joiningdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `designation`, `phone`, `address`, `joiningdate`) VALUES
(1, 'আমি', 'ম্যানেজার', '0217869356', '', '2017-09-04'),
(2, 'Ariful Islam', 'CEO', '1737569833', 'Gobindaganj', '2018-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `food` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `food`, `price`, `log`) VALUES
(1, 'Plain Rice', 40, '2018-02-09 10:08:55'),
(2, 'Pabda Fish', 30, '2018-02-09 10:08:55'),
(4, 'Fish', 0, '2018-02-10 14:47:50');

-- --------------------------------------------------------

--
-- Table structure for table `guest_infos`
--

CREATE TABLE `guest_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `guest_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest_father` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(10) UNSIGNED NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coming_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passportno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visano` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entrybd` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guest_infos`
--

INSERT INTO `guest_infos` (`id`, `guest_name`, `guest_father`, `address`, `age`, `nationality`, `profession`, `company`, `coming_from`, `duration`, `purpose`, `mobile`, `passportno`, `visano`, `issue`, `entrybd`, `created_at`, `updated_at`) VALUES
(1, 'aa', 's', 's', 1, '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '2018-02-01', '2018-01-31 18:00:00', '2018-01-31 18:00:00'),
(2, 'Ariful Islam', 'Faridul', 'Gobindaganj', 22, 'Bangladesh', 'Student', 'Pigeon Soft', 'Dhaka', '12', 'business', '', '123456', '654321', '12-12-12', '2018-02-01', NULL, NULL),
(3, 'Ariful Islam', 'Faridul Islam', 'Gobindaganj', 22, 'Bangladesh', 'Student', 'Pigeon Soft', 'Bogra', '12', 'business', '1737569833', '123456111', '654321111', '12-12-12', '2018-02-01', NULL, NULL),
(7, 'Ariful Islam', '', 'Gobindaganj', 0, 'Bangladesh', '', 'Pigeon Soft', '', '', '', '8801738249292', '', '', '', '2018-02-08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_invoice`
--

CREATE TABLE `hotel_invoice` (
  `id` int(10) NOT NULL,
  `invoiceID` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `customer_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` float NOT NULL,
  `discount` float NOT NULL,
  `total` float NOT NULL,
  `commission` float NOT NULL,
  `netAmount` float NOT NULL,
  `recptBy` varchar(30) NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_invoice`
--

INSERT INTO `hotel_invoice` (`id`, `invoiceID`, `date`, `customer_name`, `subtotal`, `discount`, `total`, `commission`, `netAmount`, `recptBy`, `log`) VALUES
(1, 'INV001', '2016-03-01', 'ANG001', 450, 20, 430, 50, 380, 'Sabbir', '0000-00-00 00:00:00'),
(2, 'H20181', '2018-02-16', 'walking', 200, 10, 190, 0, 190, 'Ariful', '2018-02-15 22:22:52'),
(4, 'H20182', '2018-02-16', 'walking', 500, 10, 490, 0, 490, 'Ariful', '2018-02-15 22:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_invoice_details`
--

CREATE TABLE `hotel_invoice_details` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `invoiceID` varchar(10) NOT NULL,
  `productCode` varchar(10) NOT NULL,
  `productName` varchar(70) NOT NULL,
  `price` float NOT NULL,
  `qty` int(3) NOT NULL,
  `total` float NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_invoice_details`
--

INSERT INTO `hotel_invoice_details` (`id`, `date`, `invoiceID`, `productCode`, `productName`, `price`, `qty`, `total`, `log`) VALUES
(1, '2016-03-01', 'INV001', 'MP', 'Blood for MP', 250, 1, 0, '2018-02-13 21:20:03'),
(2, '2016-03-01', 'INV001', 'BTCT', 'BT. CT', 200, 1, 0, '2018-02-13 21:20:03'),
(3, '2018-02-16', 'H20181', '', 'Pasta', 200, 1, 0, '2018-02-15 22:24:10'),
(4, '2018-02-16', 'H20182', '', 'Noodles', 300, 1, 0, '2018-02-15 22:25:29'),
(5, '2018-02-16', 'H20182', '', 'Pasta', 100, 2, 0, '2018-02-15 22:25:29'),
(6, '2018-02-16', 'H20182', '', 'Noodles', 300, 1, 0, '2018-02-16 19:16:33'),
(7, '2018-02-16', 'H20182', '', 'Pasta', 100, 2, 0, '2018-02-16 19:16:33'),
(8, '2018-02-16', 'H20182', '', 'Noodles', 300, 1, 0, '2018-02-16 19:17:16'),
(9, '2018-02-16', 'H20182', '', 'Pasta', 100, 2, 0, '2018-02-16 19:17:16'),
(10, '2018-02-16', 'H20182', '', 'Noodles', 300, 1, 0, '2018-02-16 20:01:10'),
(11, '2018-02-16', 'H20182', '', 'Pasta', 100, 2, 0, '2018-02-16 20:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `guest_id` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `subtotal` float NOT NULL,
  `tax` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `total` float NOT NULL,
  `recieptby` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `transactionid` varchar(50) NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `guest_id`, `date`, `subtotal`, `tax`, `discount`, `total`, `recieptby`, `status`, `transactionid`, `log`) VALUES
(1, '123', '2018-02-08', 0, 0, 0, 0, '', 0, '', '2018-02-07 21:54:17'),
(2, '8801738249292', '2018-02-08', 500, 75, 0, 575, 'admin', 1, '20182', '2018-02-10 00:17:36'),
(3, '8801738249292', '2018-02-08', 0, 0, 0, 0, '', 0, '', '2018-02-07 23:14:35'),
(4, '8801738249292', '2018-02-08', 1830, 275, 0, 2104, 'admin', 1, '20184', '2018-02-09 23:42:11'),
(5, '8801738249292', '2018-02-10', 700, 105, 0, 805, 'admin', 1, '20185', '2018-02-10 14:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id` int(11) NOT NULL,
  `invoiceid` int(11) NOT NULL,
  `product` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `idate` date NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`id`, `invoiceid`, `product`, `price`, `idate`, `log`) VALUES
(1, 4, 'Room Rent for Delux  Room No 2002 Duration 3 day(s)', 300, '2018-02-09', '2018-02-08 20:08:57'),
(2, 4, 'Room Rent for Delux  Room No 2002 Duration 4 day(s)', 400, '2018-02-09', '2018-02-08 20:13:51'),
(3, 4, 'Room Rent for Delux  Room No 2002 Duration 4 day(s)', 400, '2018-02-09', '2018-02-08 20:15:11'),
(4, 4, 'Room Rent for Delux  Room No 2002 Duration 4 day(s)', 400, '2018-02-09', '2018-02-08 20:15:49'),
(5, 2, 'Plain Rice', 50, '2018-02-09', '2018-02-09 10:40:25'),
(6, 2, 'Plain Rice', 50, '2018-02-09', '2018-02-09 10:40:36'),
(7, 4, 'Plain Rice', 50, '2018-02-09', '2018-02-09 10:49:42'),
(8, 4, 'Plain Rice', 50, '2018-02-09', '2018-02-09 10:52:30'),
(9, 4, 'Plain Rice', 0, '2018-02-09', '2018-02-09 10:52:37'),
(10, 4, 'Plain Rice', 40, '2018-02-09', '2018-02-09 10:57:47'),
(11, 4, 'Plain Rice', 40, '2018-02-09', '2018-02-09 11:30:26'),
(12, 4, 'Pabda Fish', 50, '2018-02-09', '2018-02-09 11:30:35'),
(13, 3, 'Plain Rice', 40, '2018-02-09', '2018-02-09 11:30:58'),
(14, 4, 'Plain Rice', 100, '2018-02-09', '2018-02-09 12:00:06'),
(15, 2, 'Room Rent for Delux  Room No 2002 Duration 2 day(s)', 200, '2018-02-10', '2018-02-10 00:13:21'),
(16, 2, 'Room Rent for Delux  Room No 2002 Duration 2 day(s)', 200, '2018-02-10', '2018-02-10 00:14:13'),
(17, 5, 'Plain Rice', 200, '2018-02-10', '2018-02-10 14:21:46'),
(18, 5, 'Room Rent for Economy  Room No 1001 Duration 1 day(s)', 500, '2018-02-10', '2018-02-10 14:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `productCode` varchar(10) NOT NULL,
  `productName` varchar(70) NOT NULL,
  `productDescription` int(150) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productCode`, `productName`, `productDescription`, `price`) VALUES
(1, 'BTCT', 'BT. CT', 0, 200),
(2, 'MP', 'Blood for MP', 0, 250),
(3, 'New', 'New Patient', 0, 500),
(4, 'Xray', 'X-Ray L/S', 0, 400);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `roomno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `guest_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `roomno`, `category`, `rate`, `status`, `guest_id`, `details`, `created_at`, `updated_at`) VALUES
(1, '1001', '3', 500, 0, '8801738249292', '2 bed', NULL, '2018-02-10 14:22:16'),
(2, '2002', 'Delux AC', 100, 0, '8801738249292', 'Nothing to say', '2018-01-28 18:26:42', '2018-02-13 18:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `room_bookings`
--

CREATE TABLE `room_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `roomno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoiceid` int(11) NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_bookings`
--

INSERT INTO `room_bookings` (`id`, `roomno`, `guest_id`, `invoiceid`, `check_in`, `check_out`, `duration`, `status`, `created_at`, `updated_at`) VALUES
(1, '2002', '8801738249292', 2, '2018-02-08 00:00:00', '2018-02-10 00:00:00', '2', 4, NULL, NULL),
(2, '2002', '8801738249292', 3, '2018-02-08 00:00:00', '0000-00-00 00:00:00', '', 3, NULL, NULL),
(3, '2002', '8801738249292', 4, '2018-02-08 10:34:00', '2018-02-09 00:00:00', '4', 4, NULL, NULL),
(4, '1001', '8801738249292', 5, '2018-02-10 22:10:00', '2018-02-10 13:01:00', '1', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`id`, `category`, `log`) VALUES
(2, 'Delux AC', '2018-02-13 18:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `employeeid` int(11) NOT NULL,
  `post` varchar(30) NOT NULL,
  `month` varchar(20) NOT NULL,
  `pay` float NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salarysheet`
--

CREATE TABLE `salarysheet` (
  `id` int(11) NOT NULL,
  `staffid` int(11) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salarysheet`
--

INSERT INTO `salarysheet` (`id`, `staffid`, `date`, `month`, `pay`) VALUES
(1, 1, '2017-09-04', 'November', 5000),
(2, 2, '2018-02-17', 'February', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(300) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `user_type`) VALUES
(1, 'Ariful', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bazars`
--
ALTER TABLE `bazars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bazar_items`
--
ALTER TABLE `bazar_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest_infos`
--
ALTER TABLE `guest_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guest_infos_mobile_unique` (`mobile`);

--
-- Indexes for table `hotel_invoice`
--
ALTER TABLE `hotel_invoice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hotel_invoiceID` (`invoiceID`);

--
-- Indexes for table `hotel_invoice_details`
--
ALTER TABLE `hotel_invoice_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productCode` (`productCode`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rooms_roomno_unique` (`roomno`);

--
-- Indexes for table `room_bookings`
--
ALTER TABLE `room_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salarysheet`
--
ALTER TABLE `salarysheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bazars`
--
ALTER TABLE `bazars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bazar_items`
--
ALTER TABLE `bazar_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `guest_infos`
--
ALTER TABLE `guest_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hotel_invoice`
--
ALTER TABLE `hotel_invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hotel_invoice_details`
--
ALTER TABLE `hotel_invoice_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `room_bookings`
--
ALTER TABLE `room_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `room_category`
--
ALTER TABLE `room_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salarysheet`
--
ALTER TABLE `salarysheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
