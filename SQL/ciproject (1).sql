-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 08:18 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_session`
--

CREATE TABLE `active_session` (
  `active_session_id` int(11) NOT NULL,
  `user` varchar(45) DEFAULT NULL,
  `tid` varchar(45) DEFAULT NULL,
  `ip` varchar(256) DEFAULT NULL,
  `sessionID` varchar(256) NOT NULL,
  `timestamp` datetime DEFAULT current_timestamp(),
  `out_ts` datetime DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `active_session`
--

INSERT INTO `active_session` (`active_session_id`, `user`, `tid`, `ip`, `sessionID`, `timestamp`, `out_ts`, `role`, `status`) VALUES
(1, 'nirajcmhatre@gmail.com', '5', '::1', 'ki86rniblq2iqf5bq1m6pgaa5vj5h28n', '2019-09-21 21:42:36', '0000-00-00 00:00:00', 'User', 'D'),
(2, 'nirajcmhatre@gmail.com', '5', '::1', '4qu3g85te3114roog3o5qucfpcenbg0v', '2019-09-21 22:27:13', '0000-00-00 00:00:00', 'User', 'D'),
(3, 'nirajcmhatre@gmail.com', '5', '::1', '4qu3g85te3114roog3o5qucfpcenbg0v', '2019-09-21 22:30:48', '0000-00-00 00:00:00', 'User', 'D'),
(4, 'nirajcmhatre@gmail.com', '5', '::1', 'mvrrsleeie447sblrodukgqhpi7biqkt', '2019-09-21 22:59:45', '0000-00-00 00:00:00', 'User', 'D'),
(5, 'nirajcmhatre@gmail.com', '5', '::1', 'gjrrvbf46eb64gs706a11agg0hdfq5jk', '2019-09-21 23:16:13', '0000-00-00 00:00:00', 'User', 'D'),
(6, 'nirajcmhatre@gmail.com', '5', '::1', '3v9qaiv52qr2kn68vleme19e5mbf186p', '2019-09-21 23:31:42', '0000-00-00 00:00:00', 'User', 'D'),
(7, 'nirajcmhatre@gmail.com', '5', '::1', 'adnvrukak3103cqlhega1kj3103aj1qi', '2019-09-21 23:36:19', '0000-00-00 00:00:00', 'User', 'D'),
(8, 'nirajcmhatre@gmail.com', '5', '::1', 'c7j7dudrgotdnq9m1jauujkkodsba492', '2019-09-21 23:41:37', '0000-00-00 00:00:00', 'User', 'D'),
(9, 'nirajcmhatre@gmail.com', '5', '::1', 's7urmchn11u0reii9ng3uraibarl0p7p', '2019-09-22 00:14:29', '0000-00-00 00:00:00', 'User', 'D'),
(10, 'nirajcmhatre@gmail.com', '5', '::1', 'hs740mj9lhem9l0oib20mal90q0gc0te', '2019-09-22 00:15:01', '0000-00-00 00:00:00', 'User', 'D'),
(11, 'nirajcmhatre@gmail.com', '5', '::1', 'ukh3q60gb6vf9bldljp2n4cpkbi63k7g', '2019-09-22 00:31:37', '2019-09-22 00:31:38', 'User', 'D'),
(12, 'nirajcmhatre@gmail.com', '5', '::1', 'm9flt40k6hom416m22c79b6msvr76n0n', '2019-09-22 00:32:04', '2019-09-22 00:32:22', 'User', 'D'),
(13, 'nirajcmhatre@gmail.com', '5', '::1', 'lgu0n8f2ssc0nf1k62cbr8pl5ijj7ggv', '2019-09-22 01:17:48', '2019-09-22 01:23:09', 'User', 'D'),
(14, 'nirajcmhatre@gmail.com', '5', '::1', 'ffeqr7ng4cgga9mgfons5nt88r5o0nss', '2019-09-22 01:23:17', '2019-09-22 01:25:06', 'User', 'D'),
(15, 'nirajcmhatre@gmail.com', '5', '::1', 'flqr59f05tsqeb0km6fl5cdb0c2st4ld', '2019-09-22 13:41:38', NULL, 'User', 'A'),
(16, 'nirajcmhatre@gmail.com', '5', '::1', 'i6ms9cn8t6ttn086219h3va60m6rtfbg', '2019-09-22 13:55:24', '2019-09-22 13:55:28', 'User', 'D'),
(17, 'nirajcmhatre@gmail.com', '5', '::1', 'pbdd46l83rvmgnrla277vrpo61pfr0iv', '2019-09-27 22:33:47', '2019-09-27 22:34:12', 'User', 'D'),
(18, 'nirajcmhatre@gmail.com', '5', '::1', 'akj4047mocmuvq1vf8cnk3l7cn41f9nl', '2019-09-27 23:55:31', '2019-09-28 00:27:06', 'User', 'D'),
(19, 'nirajcmhatre@gmail.com', '5', '::1', 'ds6b602jqdq0go2mgau3b3v1ng2gvjub', '2019-09-28 00:27:23', '2019-09-28 00:32:32', NULL, 'D'),
(20, 'nirajcmhatre@gmail.com', '5', '::1', '2jr7t2fh6aj1tq5c20cknahifobo5uae', '2019-09-28 00:32:39', NULL, NULL, 'A'),
(21, 'nirajcmhatre@gmail.com', '5', '::1', '2jr7t2fh6aj1tq5c20cknahifobo5uae', '2019-09-28 00:33:02', NULL, NULL, 'A'),
(22, 'nirajcmhatre@gmail.com', '5', '::1', '2jr7t2fh6aj1tq5c20cknahifobo5uae', '2019-09-28 00:35:11', NULL, NULL, 'A'),
(23, 'nirajcmhatre@gmail.com', '5', '::1', '2jr7t2fh6aj1tq5c20cknahifobo5uae', '2019-09-28 00:35:24', NULL, NULL, 'A'),
(24, 'nirajcmhatre@gmail.com', '5', '::1', '2jr7t2fh6aj1tq5c20cknahifobo5uae', '2019-09-28 00:36:53', NULL, NULL, 'A'),
(25, 'nirajcmhatre@gmail.com', '5', '::1', '2jr7t2fh6aj1tq5c20cknahifobo5uae', '2019-09-28 00:37:09', NULL, NULL, 'A'),
(26, 'nirajcmhatre@gmail.com', '5', '::1', '97t0vk513eq03p7tsk90teh9mcb5ac3f', '2019-10-31 18:10:22', '2019-10-31 18:12:40', NULL, 'D'),
(27, 'nirajcmhatre@gmail.com', '5', '::1', 'llhr1mfqorjo1ghsnaspitkvru9v8b3r', '2019-11-01 17:26:12', '2019-11-01 17:29:44', NULL, 'D'),
(28, 'nirajcmhatre@gmail.com', '5', '::1', 'nn3jvh9shl7bekkfsqvdo3qdbr82js9q', '2019-11-01 17:29:54', '2019-11-01 17:36:56', NULL, 'D'),
(29, 'nirajcmhatre@gmail.com', '5', '::1', 'n05hdtiv4k2i93tjk57p0vhe86tv4ngb', '2019-11-01 17:43:31', '2019-11-01 17:48:16', NULL, 'D'),
(30, 'nirajcmhatre@gmail.com', '5', '::1', 'kosqh5nd9rjg4uihfvi8pf371lkmurqd', '2019-11-12 01:38:24', '2019-11-12 01:38:45', NULL, 'D'),
(31, 'nirajcmhatre@gmail.com', '5', '::1', 'qh8rq0gvmf1u4b8ceqo12r4jq605npma', '2019-11-14 10:45:51', '2019-11-14 10:46:04', NULL, 'D'),
(32, 'nirajcmhatre@gmail.com', '5', '::1', '0qg15hsrpncpu59m9r6u8bq6rd37va3b', '2019-11-23 11:05:24', '2019-11-23 11:08:53', NULL, 'D'),
(33, 'nirajcmhatre@gmail.com', '5', '::1', '8mqvuaml8u201m4auibmopgg79qkhcj8', '2019-11-28 12:36:25', '2019-11-28 13:53:24', NULL, 'D'),
(34, 'nirajcmhatre@gmail.com', '5', '::1', 'km0sbln29dh3tq2d1v7h4lfradu7cr9f', '2019-11-28 13:53:30', '2019-11-28 14:18:40', NULL, 'D'),
(35, 'nirajcmhatre@gmail.com', 'Array\n(\n    [id] => 5\n    [user_group] => 42\n', '::1', 'p1lbd80fj0pf6rplb3qas0ukt6s6r9mb', '2019-11-28 14:20:00', NULL, NULL, 'A'),
(36, 'nirajcmhatre@gmail.com', 'Array\n(\n    [id] => 5\n    [user_group] => 42\n', '::1', 'urehj31bv2di3bn1tdcuma7rggpk00ri', '2019-11-28 15:16:21', NULL, NULL, 'A'),
(37, 'nirajcmhatre@gmail.com', '5', '::1', '1e7p874vjr0kqpi57fkluhba071mlonu', '2019-11-28 15:35:12', '2019-11-28 15:38:48', NULL, 'D'),
(38, 'nirajcmhatre@gmail.com', '5', '::1', 'jlnms0ge1of1tqp0v3cfio0r3paidosa', '2019-11-28 15:49:07', '2019-11-28 16:08:59', NULL, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `audit_table`
--

CREATE TABLE `audit_table` (
  `audit_id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `hostname` varchar(45) DEFAULT NULL,
  `hostip` varchar(45) DEFAULT NULL,
  `session_id` varchar(100) DEFAULT NULL,
  `action` varchar(256) DEFAULT NULL,
  `event_desc` varchar(256) DEFAULT NULL,
  `ts` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `configarable_sideview`
--

CREATE TABLE `configarable_sideview` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(45) DEFAULT NULL,
  `page_link` varchar(45) DEFAULT NULL,
  `page_status` varchar(45) DEFAULT NULL,
  `page_create_ts` datetime DEFAULT current_timestamp(),
  `page_role` varchar(45) DEFAULT NULL,
  `page_seq` varchar(45) DEFAULT NULL,
  `page_active` varchar(45) DEFAULT NULL,
  `symbol` varchar(200) NOT NULL DEFAULT 'fas fa-fw fa-folder'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `configarable_sideview`
--

INSERT INTO `configarable_sideview` (`page_id`, `page_name`, `page_link`, `page_status`, `page_create_ts`, `page_role`, `page_seq`, `page_active`, `symbol`) VALUES
(1, 'Dashboard', 'user/Dashboard', 'A', '2019-09-15 00:30:51', 'USER', '1', 'Active', 'fas fa-fw fa-tachometer-alt'),
(2, 'Profile', 'user/User_profile', 'A', '2019-09-15 00:30:51', 'USER', '2', NULL, 'fas fa-fw fa-chart-area'),
(3, 'Change password', 'user/Change_password', 'A', '2019-09-15 00:30:51', 'USER', '3', NULL, 'fas fa-fw fa-table'),
(4, 'Logout', 'user/Login/logout', 'A', '2019-09-15 00:30:51', 'USER', '4', NULL, 'fas fa-fw fa-tachometer-alt'),
(5, 'Dashboard', 'admin/Dashboard', 'A', '2019-09-15 00:30:51', 'ADMIN', '1', 'Active', 'fas fa-fw fa-tachometer-alt'),
(6, 'Users', 'admin/Manage_Users', 'A', '2019-09-15 00:30:51', 'ADMIN', '2', NULL, 'fas fa-fw fa-chart-area'),
(7, 'Active Users', 'admin/Active_Users', 'A', '2019-09-22 22:53:09', 'ADMIN', '3', NULL, 'fas fa-fw fa-table'),
(8, 'Audit', 'admin/Audit_Users', 'A', '2019-09-22 22:53:09', 'ADMIN', '4', NULL, 'fas fa-fw fa-folder'),
(9, 'Active Session', 'admin/Active_Sessions', 'A', '2019-11-01 09:24:52', 'ADMIN', '5', '', 'fas fa-fw fa-table'),
(10, 'Create Group', 'admin/Create_Group', 'A', '2019-11-01 09:24:52', 'ADMIN', '6', NULL, 'fas fa-fw fa-table'),
(11, 'Create User', 'admin/Create_User', 'A', '2019-11-01 09:24:52', 'ADMIN', '7', NULL, 'fas fa-fw fa-chart-area');

-- --------------------------------------------------------

--
-- Table structure for table `image_store`
--

CREATE TABLE `image_store` (
  `id` int(100) NOT NULL,
  `emp_ref_id` int(100) DEFAULT NULL,
  `image_name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_store`
--

INSERT INTO `image_store` (`id`, `emp_ref_id`, `image_name`) VALUES
(4, 1, '1574080198-Chrysanthemum.jpg'),
(5, 2, '1574080236-Desert.jpg'),
(6, 3, '1574080280-Hydrangeas.jpg'),
(7, 4, '1574080309-Jellyfish.jpg'),
(8, 5, '1574080327-Koala.jpg'),
(9, 10, '1574080432-Lighthouse.jpg'),
(10, 11, '1574080465-Penguins.jpg'),
(11, 12, '1574080607-Tulips.jpg'),
(12, 14, '1574080639-Koala.jpg'),
(13, 13, '1574080662-Hydrangeas.jpg'),
(14, 1, '1574241659-Jellyfish.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `permissionID` int(11) NOT NULL,
  `permission` varchar(200) DEFAULT NULL,
  `key` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`permissionID`, `permission`, `key`, `category`) VALUES
(68, 'READ', 'READ', 'READONLY'),
(69, 'WRITE', 'WRITE', 'WRITE'),
(71, 'UPDATE', 'UPDATE', 'UPDATE');

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `groupID` int(11) NOT NULL,
  `groupName` varchar(200) DEFAULT NULL,
  `groupDesc` varchar(2000) DEFAULT NULL,
  `groupSection` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_groups`
--

INSERT INTO `permission_groups` (`groupID`, `groupName`, `groupDesc`, `groupSection`) VALUES
(42, 'VIEW', 'This is view user', 0),
(43, 'ADMIN', 'this is admi user', 0),
(51, 'DEVOSS', 'DEV_OSS', 0),
(56, 'DEV_OSS', 'DEV_OSS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `permission_map`
--

CREATE TABLE `permission_map` (
  `groupID` int(11) NOT NULL DEFAULT 0,
  `permissionID` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_map`
--

INSERT INTO `permission_map` (`groupID`, `permissionID`) VALUES
(42, 68),
(42, 69),
(43, 68),
(43, 69);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL,
  `role_name` varchar(45) DEFAULT NULL,
  `role_description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idrole`, `role_name`, `role_description`) VALUES
(1, 'USER', 'USER'),
(2, 'ADMIN', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `userName` varchar(120) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `userName`, `password`) VALUES
(1, 'admin', 'Test@12345');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(200) DEFAULT NULL,
  `lastName` varchar(200) DEFAULT NULL,
  `emailId` varchar(200) DEFAULT NULL,
  `mobileNumber` char(12) DEFAULT NULL,
  `userPassword` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `isActive` int(1) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `workGroup_id` int(11) DEFAULT 42
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `firstName`, `lastName`, `emailId`, `mobileNumber`, `userPassword`, `regDate`, `isActive`, `lastUpdationDate`, `workGroup_id`) VALUES
(1, 'Anuj', 'Kumar', 'test@gmail.com', '1234567890', 'Test@12345', '2018-12-17 18:30:00', 1, '2018-12-25 06:15:43', 42),
(2, 'Sarita', 'Pandey', 'phpgurukulofficial@gmail.com', '1234567890', 'Test@123', '2018-12-18 17:40:40', 1, '2018-12-22 05:33:41', 42),
(3, 'Testuser', 'User', 'user@test.com', '1111111112', 'Test@12345', '2018-12-25 17:57:43', 1, '2018-12-25 18:36:18', 42),
(4, 'ABC', 'XYZ', 'abc@xyz.com', '1234567890', 'Test@123', '2018-12-25 18:43:33', 1, '2019-09-22 19:23:31', 42),
(5, 'Niraj', 'Mhatre', 'nirajcmhatre@gmail.com', '9773390082', 'pass@123', '2019-09-14 13:29:27', 1, '2019-11-28 10:33:20', 42),
(11, 'Niraj', 'Mhatre', 'nirajmhatre89', '9699675725', 'Test@12345', '2019-11-16 17:42:21', 0, '0000-00-00 00:00:00', 42),
(12, 'Niraj', 'Mhatre', 'nirajmhatre89', '9699675725', 'Test@12345', '2019-11-16 17:46:53', 0, '0000-00-00 00:00:00', 42),
(13, 'Niraj', 'Mhatre', 'nirajmhatre89', '9699675725', 'Test@12345', '2019-11-16 17:48:00', 0, '0000-00-00 00:00:00', 42),
(14, 'Niraj12', 'Mhatre', 'nirajmhatre8912', '9699675725', 'Test@12345', '2019-11-17 05:38:32', 0, '0000-00-00 00:00:00', 42);

-- --------------------------------------------------------

--
-- Table structure for table `user_role_map`
--

CREATE TABLE `user_role_map` (
  `id` int(11) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role_map`
--

INSERT INTO `user_role_map` (`id`, `user_role_id`, `user_id`) VALUES
(1, 1, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_session`
--
ALTER TABLE `active_session`
  ADD PRIMARY KEY (`active_session_id`);

--
-- Indexes for table `audit_table`
--
ALTER TABLE `audit_table`
  ADD PRIMARY KEY (`audit_id`);

--
-- Indexes for table `configarable_sideview`
--
ALTER TABLE `configarable_sideview`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `image_store`
--
ALTER TABLE `image_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permissionID`),
  ADD UNIQUE KEY `key` (`key`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`groupID`);

--
-- Indexes for table `permission_map`
--
ALTER TABLE `permission_map`
  ADD PRIMARY KEY (`groupID`,`permissionID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idrole`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role_map`
--
ALTER TABLE `user_role_map`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_session`
--
ALTER TABLE `active_session`
  MODIFY `active_session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `audit_table`
--
ALTER TABLE `audit_table`
  MODIFY `audit_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configarable_sideview`
--
ALTER TABLE `configarable_sideview`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `image_store`
--
ALTER TABLE `image_store`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permissionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `groupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
