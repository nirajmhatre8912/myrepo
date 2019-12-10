-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 08:17 AM
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
-- Database: `oneossdb`
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
(44, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'k4cbnkcql14t20uar3jhjat1tqlfpd52', '2019-12-05 16:55:44', '2019-12-05 16:57:28', 'VIEWUSER', 'D'),
(45, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'k4cbnkcql14t20uar3jhjat1tqlfpd52', '2019-12-05 16:56:39', '2019-12-05 16:57:28', 'VIEWUSER', 'D'),
(46, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'g0ekb39r03jt15pvaafngr2p9pnqlv25', '2019-12-05 16:58:07', '2019-12-05 16:58:21', 'VIEWUSER', 'D'),
(47, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'd1ilqkbmjeaf55k4j3bq9ske817b76em', '2019-12-05 17:08:05', '2019-12-05 17:08:11', 'VIEWUSER', 'D'),
(48, 'ncmhatre@globalcloudxchange.com', '1', '::1', '07k8kuks7mum31sim7uk7j68mcmc55mj', '2019-12-05 17:13:29', '2019-12-05 17:13:51', 'VIEWUSER', 'D'),
(49, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'dcj6m9aq4ojvajdf920h2mh5639kpbtr', '2019-12-05 17:17:20', '2019-12-05 17:40:54', 'VIEWUSER', 'D'),
(50, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'j1els0k41ar43l6upugggj8fovk7eou3', '2019-12-05 17:41:19', '2019-12-05 17:41:30', 'VIEWUSER', 'D'),
(51, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'ur991qcsg0t1c5ev5fb8asft55uqc991', '2019-12-05 17:53:00', '2019-12-05 17:56:38', 'VIEWUSER', 'D'),
(52, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'ur991qcsg0t1c5ev5fb8asft55uqc991', '2019-12-05 17:55:20', '2019-12-05 17:56:38', 'VIEWUSER', 'D'),
(53, 'ncmhatre@globalcloudxchange.com', '1', '::1', '0eucjqoi8mcjt8gg3gf1djlj82842n0i', '2019-12-05 17:56:47', '2019-12-05 17:57:04', 'VIEWUSER', 'D'),
(54, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'fd399qncsinr856oan6g8j5qqgc9incb', '2019-12-05 17:59:57', '2019-12-05 18:01:22', 'VIEWUSER', 'D'),
(55, 'ncmhatre@globalcloudxchange.com', '1', '::1', '0lsftrikoq538tf5p8jc4l2j26lgn16b', '2019-12-05 18:01:30', '2019-12-05 18:05:42', 'VIEWUSER', 'D'),
(56, 'ncmhatre@globalcloudxchange.com', '1', '::1', '2mokcgbinsrh0sks6m8l61ial2d0fh7o', '2019-12-05 18:05:54', '2019-12-05 18:12:14', 'VIEWUSER', 'D'),
(57, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'j5568cqs2n2uu7ive753m467ar9pr4m5', '2019-12-05 18:12:50', '2019-12-05 18:13:59', 'VIEWUSER', 'D'),
(58, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'iq3n5bdkvkk1r6b8s6h9tqhgaqog88tf', '2019-12-05 18:16:59', '2019-12-05 18:23:02', 'VIEWUSER', 'D'),
(59, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'b6erkgiqpr6jj8soihtgic9qfr2j2u6q', '2019-12-05 18:26:04', '2019-12-05 18:26:07', 'VIEWUSER', 'D'),
(60, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'a2rj9g37m1ajjbtemp8n2hc6fkgooebf', '2019-12-05 18:28:34', '2019-12-05 18:28:38', 'VIEWUSER', 'D'),
(61, 'ncmhatre@globalcloudxchange.com', '1', '::1', '3v1uth54fjs89a3j61cihu7129r7olr5', '2019-12-05 18:29:36', '2019-12-05 18:29:53', 'VIEWUSER', 'D'),
(62, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'iehk5n1r9imk8nlvoo9ria9o5buair82', '2019-12-05 18:30:06', NULL, 'VIEWUSER', 'A'),
(63, 'ncmhatre@globalcloudxchange.com', '1', '::1', '9gn8ur1etn2otb6ltcddas3ndc7har5m', '2019-12-05 18:44:19', '2019-12-05 18:44:23', 'VIEWUSER', 'D'),
(64, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'ob5be82bppc8m1kn7t9ia227uptie163', '2019-12-05 18:44:55', NULL, 'VIEWUSER', 'A'),
(65, 'ncmhatre@globalcloudxchange.com', '1', '::1', 'tvj64k4vnpdpccos1hdn3mct811ojtr2', '2019-12-05 18:45:06', '2019-12-05 18:45:12', 'VIEWUSER', 'D'),
(66, 'ncmhatre@globalcloudxchange.com', '1', '::1', '3hkrl9lm8pa4e23ku74rjrcftkksn48h', '2019-12-05 18:45:49', '2019-12-05 18:52:43', 'VIEWUSER', 'D'),
(67, 'ncmhatre@globalcloudxchange.com', '1', '::1', '5fimnapnni3oveitaug6jho70e01vdt9', '2019-12-05 18:54:17', '2019-12-05 18:54:21', 'VIEWUSER', 'D'),
(68, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'f4lok10odbvdb09uid3b8m653lj7b1bk', '2019-12-05 19:00:39', NULL, 'VIEWUSER', 'A'),
(69, 'YHIngale@globalcloudxchange.com', '2', '10.8.127.204', 'el81ngd1d671n65t6o34es8k2bd6cavh', '2019-12-05 19:03:32', '2019-12-05 19:04:30', 'VIEWUSER', 'D'),
(70, 'YHIngale@globalcloudxchange.com', '2', '10.8.127.204', 'he2e131lvph5vjpk5aj79tj0mri9sdnk', '2019-12-05 19:04:37', '2019-12-05 19:08:03', 'VIEWUSER', 'D'),
(71, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', '7cuog5e9qc7n4pl8olvv7u3m4da32gge', '2019-12-05 19:07:35', '2019-12-05 19:08:30', 'VIEWUSER', 'D'),
(72, 'YHIngale@globalcloudxchange.com', '2', '10.10.203.61', '9btokdjvrq4e0jh7fqqk7fhblkear1ra', '2019-12-05 19:07:44', '2019-12-05 19:08:50', 'VIEWUSER', 'D'),
(73, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'k1f9afcri8j9mmnf9m0jopfr59k0m6id', '2019-12-06 11:19:16', '2019-12-06 11:19:23', 'VIEWUSER', 'D'),
(74, 'YHIngale@globalcloudxchange.com', '2', '10.8.127.204', '4h8tvhppsv2rtuu6kl6gg5sib6uctgqg', '2019-12-06 11:25:56', '2019-12-06 11:26:03', 'VIEWUSER', 'D'),
(75, 'YHIngale@globalcloudxchange.com', '2', '10.8.127.204', 'kgjehiqgnmfirr742r7hji9g5ii6s50q', '2019-12-06 11:27:28', '2019-12-06 11:27:38', 'VIEWUSER', 'D'),
(76, 'YHIngale@globalcloudxchange.com', '2', '10.8.127.204', 'avpo4a0jlkr1is74p2ittqi0fp8ntfks', '2019-12-06 11:28:33', '2019-12-06 11:28:46', 'VIEWUSER', 'D'),
(77, 'YHIngale@globalcloudxchange.com', '2', '10.8.127.204', 'nce38a6sornr4qkt5dtl19unkbakcds8', '2019-12-06 11:29:30', NULL, 'VIEWUSER', 'A'),
(78, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'fjdgoar5mo3sgcmahm1osoec7a5ofjkr', '2019-12-06 11:35:13', '2019-12-06 11:35:54', 'VIEWUSER', 'D'),
(79, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', '64si6uhb6otii1b5vvtl3jn848j6p6ma', '2019-12-06 11:36:00', NULL, 'VIEWUSER', 'A'),
(80, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', '3c7oni9br91a77gcbr9489ga19oi9j9t', '2019-12-06 12:12:37', '2019-12-06 12:12:42', 'VIEWUSER', 'D'),
(81, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', '4fubcu5juuo5pcal72auu46qdpc8l0nr', '2019-12-06 14:43:08', '2019-12-06 14:44:15', 'VIEWUSER', 'D'),
(82, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'hq1kis71phjv9jdcu16np97u2shu3nsg', '2019-12-06 14:49:18', '2019-12-06 14:49:34', 'VIEWUSER', 'D'),
(83, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', '6epgqcuqhqttle3439r3o3ni4sffjl72', '2019-12-06 15:06:06', NULL, 'VIEWUSER', 'A'),
(84, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', '8uhifo3b5svqluuagdreb07ohbkjqeei', '2019-12-06 15:08:22', NULL, 'VIEWUSER', 'A'),
(85, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'relm2cri9jifbev8bi8ufefkn8oe5gus', '2019-12-06 15:18:26', NULL, 'VIEWUSER', 'A'),
(86, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'relm2cri9jifbev8bi8ufefkn8oe5gus', '2019-12-06 15:18:43', NULL, 'VIEWUSER', 'A'),
(87, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'relm2cri9jifbev8bi8ufefkn8oe5gus', '2019-12-06 15:19:29', NULL, 'VIEWUSER', 'A'),
(88, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'relm2cri9jifbev8bi8ufefkn8oe5gus', '2019-12-06 15:20:04', NULL, 'VIEWUSER', 'A'),
(89, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'relm2cri9jifbev8bi8ufefkn8oe5gus', '2019-12-06 15:20:10', NULL, 'VIEWUSER', 'A'),
(90, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'erne0abngcbuv9ogq00g1k8o1j0ncuj9', '2019-12-06 15:23:18', NULL, 'VIEWUSER', 'A'),
(91, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'erne0abngcbuv9ogq00g1k8o1j0ncuj9', '2019-12-06 15:24:47', NULL, 'VIEWUSER', 'A'),
(92, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'erne0abngcbuv9ogq00g1k8o1j0ncuj9', '2019-12-06 15:26:59', NULL, 'VIEWUSER', 'A'),
(93, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'raac1bg73to1ked78q7io6dhq8edhvaa', '2019-12-06 15:32:08', NULL, 'VIEWUSER', 'A'),
(94, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'raac1bg73to1ked78q7io6dhq8edhvaa', '2019-12-06 15:33:00', NULL, 'VIEWUSER', 'A'),
(95, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'raac1bg73to1ked78q7io6dhq8edhvaa', '2019-12-06 15:33:23', NULL, 'VIEWUSER', 'A'),
(96, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'raac1bg73to1ked78q7io6dhq8edhvaa', '2019-12-06 15:34:59', NULL, 'VIEWUSER', 'A'),
(97, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'qc0hkd0kaqvdgjdksvcurleoj4rbsr1a', '2019-12-06 15:40:03', NULL, 'VIEWUSER', 'A'),
(98, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'esvqs0jtb7gt6v6v68c30m4d8nhgp6jk', '2019-12-06 15:43:42', NULL, 'VIEWUSER', 'A'),
(99, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'esvqs0jtb7gt6v6v68c30m4d8nhgp6jk', '2019-12-06 15:44:48', NULL, 'VIEWUSER', 'A'),
(100, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'uak5q3sdbgqrorc36q731b8plr4vgueh', '2019-12-06 15:45:04', NULL, 'VIEWUSER', 'A'),
(101, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'rs0afgn8f0ntfao7ve36tb88rp8hc2a6', '2019-12-06 16:58:25', NULL, 'VIEWUSER', 'A'),
(102, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'd3r6hs78ljnc2baak2spopn309fnsabl', '2019-12-06 17:01:50', NULL, 'VIEWUSER', 'A'),
(103, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'g7ak48ijjsocjgs7pba7qsf0rjd1b373', '2019-12-06 19:26:13', NULL, 'VIEWUSER', 'A'),
(104, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'sk076pggllpifll0dqbvaemiqv41v74q', '2019-12-06 19:31:05', NULL, 'VIEWUSER', 'A'),
(105, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', '1a29t1g546o43tc37gr53cqi4fqn598d', '2019-12-06 19:35:19', NULL, 'VIEWUSER', 'A'),
(106, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'ce3jeqddr49s8e6rvible4iuhrokja0l', '2019-12-06 19:38:15', NULL, 'VIEWUSER', 'A'),
(107, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', '3df1p6acpfd1i8p76ob31f76rrqsnf12', '2019-12-06 19:43:25', NULL, 'VIEWUSER', 'A'),
(108, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'f4rjt3f2cfjh9tqv86tvlhcjvpl77nnm', '2019-12-06 19:44:16', NULL, 'VIEWUSER', 'A'),
(109, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'j0tfdcrrelc967589pm7defqa339uj7p', '2019-12-06 19:44:31', NULL, 'VIEWUSER', 'A'),
(110, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'd7efu96r792qb44pnrkh1hnucrt503q1', '2019-12-06 19:46:25', NULL, 'VIEWUSER', 'A'),
(111, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', '1lctsuqi4deq11u82vke20kqjvfeqcmf', '2019-12-06 19:47:11', NULL, 'VIEWUSER', 'A'),
(112, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'p58od4ij6etvh8ce0ug1rao70hvng5dm', '2019-12-06 19:47:25', NULL, 'VIEWUSER', 'A'),
(113, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'qh6kgio0ujs1kr0jalp83sb653tpsged', '2019-12-06 19:48:14', NULL, 'VIEWUSER', 'A'),
(114, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'v0orn00335m1pss1qh9h573pef0bq1m1', '2019-12-06 19:48:29', NULL, 'VIEWUSER', 'A'),
(115, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', 'db3m3ti8ug7vl50m4mjagifk06o3p5bg', '2019-12-06 19:48:51', NULL, 'VIEWUSER', 'A'),
(116, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.236', '6i33dnffgp2lqlbf0ro5sqcl4m3md52o', '2019-12-06 20:02:40', NULL, 'VIEWUSER', 'A'),
(117, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'ol2c7d84t4g21d15le0cdjsiev91bg04', '2019-12-09 11:13:32', NULL, 'VIEWUSER', 'A'),
(118, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'c3rj85p40lnhuj03t66cudh9dk75ctg2', '2019-12-09 11:16:15', NULL, 'VIEWUSER', 'A'),
(119, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'dqn1ac09fmoms0kca8mmoccs7mavik0s', '2019-12-09 11:17:08', NULL, 'VIEWUSER', 'A'),
(120, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'ennpacr05ianbmmo2h46hadjs7iv12rb', '2019-12-09 11:18:42', NULL, 'VIEWUSER', 'A'),
(121, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '6j2bne36juk9i8bs791vojpdsdbvg6qr', '2019-12-09 11:19:10', NULL, 'VIEWUSER', 'A'),
(122, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'a61phgklva68ndu5ufuev2souo77a3mv', '2019-12-09 11:20:24', NULL, 'VIEWUSER', 'A'),
(123, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'jljtbjrv5o7088p2rjfj69dgv2j27d1l', '2019-12-09 11:28:22', NULL, 'VIEWUSER', 'A'),
(124, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '3tbvfetmpjlsc83sshaiqvs8rulobupp', '2019-12-09 11:28:56', NULL, 'VIEWUSER', 'A'),
(125, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'ojur4h88lrlgsanu2ii7s89n29thi76h', '2019-12-09 11:29:10', NULL, 'VIEWUSER', 'A'),
(126, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'p4eoshf7h63j6kin8u89cp14n4b48t0n', '2019-12-09 11:29:24', NULL, 'VIEWUSER', 'A'),
(127, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'eo6vaqrkti4emuopeugmhrg0lb4q5tt8', '2019-12-09 11:30:07', NULL, 'VIEWUSER', 'A'),
(128, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '89lt9rteta061dvvsjvg3l62um98338g', '2019-12-09 11:31:48', NULL, 'VIEWUSER', 'A'),
(129, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '2cphkck00o7i3g7l4lrdubvmh4mkjhdo', '2019-12-09 11:33:16', NULL, 'VIEWUSER', 'A'),
(130, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'gntuesqe56otreqidg8k484nrtsq4gpj', '2019-12-09 11:33:54', NULL, 'VIEWUSER', 'A'),
(131, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'v2nlk5licc7d7af0a0ev426bru7l7nak', '2019-12-09 11:34:00', NULL, 'VIEWUSER', 'A'),
(132, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'u7b0m0c1o7uhjmu6retlg6rgm48dqol1', '2019-12-09 11:34:12', NULL, 'VIEWUSER', 'A'),
(133, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'hs71kv1mjkei1frt0ikfr9me2ei8djag', '2019-12-09 11:56:17', NULL, 'VIEWUSER', 'A'),
(134, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'r7tk2nfbs3lkb30hct1ck3mskveag4r8', '2019-12-09 12:00:45', NULL, 'VIEWUSER', 'A'),
(135, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'urqgr5nrv2l921tv6iarpiv5aegg2f07', '2019-12-09 12:00:55', NULL, 'VIEWUSER', 'A'),
(136, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '33e1jkku0ci57sdbdaudhaqvlngoj880', '2019-12-09 12:01:11', NULL, 'VIEWUSER', 'A'),
(137, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'vtd522lhfum6c831rb5lfva0nnrfn6nf', '2019-12-09 12:20:05', NULL, 'VIEWUSER', 'A'),
(138, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'um3t3bdlvbt46cgu1p4nt3r8de2sam6v', '2019-12-09 12:26:31', NULL, 'VIEWUSER', 'A'),
(139, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '4t9c1p8sfq570aesqii21jhgkenfh4ju', '2019-12-09 12:34:19', NULL, 'VIEWUSER', 'A'),
(140, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'rsjm3q19ncbud3i0j0vmtml1ro4s0qd8', '2019-12-09 12:35:26', NULL, 'VIEWUSER', 'A'),
(141, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '8c02eljnbg0adc1oud92po6jd24ec3rn', '2019-12-09 12:38:46', NULL, 'VIEWUSER', 'A'),
(142, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'kh4qbs15rg1uts2bdqdp19895qas6r6v', '2019-12-09 12:40:26', NULL, 'VIEWUSER', 'A'),
(143, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '2g6qtk7m86du9h8fkjnmr5jv05d4lmfk', '2019-12-09 12:42:23', NULL, 'VIEWUSER', 'A'),
(144, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'utq66pst0jivcvhbrkjaukcqsptfrp35', '2019-12-09 12:42:43', NULL, 'VIEWUSER', 'A'),
(145, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'dvinu4ea675v85evjjivd3uotn0er4d1', '2019-12-09 13:38:51', NULL, 'VIEWUSER', 'A'),
(146, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '71muhieh6dok7b9g86j8hi67enkf869e', '2019-12-09 13:42:12', NULL, 'VIEWUSER', 'A'),
(147, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '8um8h17fdrtaunfs3bemvbp83dm0co0g', '2019-12-09 13:42:41', NULL, 'VIEWUSER', 'A'),
(148, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'k42u0ocpkugv40iij86pco8379126hvq', '2019-12-09 13:42:59', NULL, 'VIEWUSER', 'A'),
(149, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '3rqpq52lmelsrfe052tnjjfqrc1t5duj', '2019-12-09 13:43:31', NULL, 'VIEWUSER', 'A'),
(150, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'c8kiu3ektevnsi3lui1bgot4k0t5ufba', '2019-12-09 13:44:13', NULL, 'VIEWUSER', 'A'),
(151, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '8anbp15537u737kjk4h9s1g84qj95imc', '2019-12-09 13:44:27', NULL, 'VIEWUSER', 'A'),
(152, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '2ednvu1com313sca45969dgfqka5ason', '2019-12-09 13:44:52', NULL, 'VIEWUSER', 'A'),
(153, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'dcd9i8nankk0sc67c8ivlcvvm5671lan', '2019-12-09 13:46:04', NULL, 'VIEWUSER', 'A'),
(154, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'hkanb6g7kbgmu6p3aufphgo56dc0ocot', '2019-12-09 13:47:35', NULL, 'VIEWUSER', 'A'),
(155, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'd8snb9cqtibl5b1brl5hse9ra10o6293', '2019-12-09 13:49:50', NULL, 'VIEWUSER', 'A'),
(156, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '7hpgob32dsla7401qg2gb29pnlh4b2uv', '2019-12-09 13:51:38', NULL, 'VIEWUSER', 'A'),
(157, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '7b70f09r1ud3710ufpifaaongngvj2h2', '2019-12-09 13:52:01', NULL, 'VIEWUSER', 'A'),
(158, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '1ek4rg3squ43j4rkt0cs8rpum2lh4cn9', '2019-12-09 13:52:36', NULL, 'VIEWUSER', 'A'),
(159, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'nc37ba9u9e1ov3e2r2boa2iosj419p4v', '2019-12-09 13:53:04', NULL, 'VIEWUSER', 'A'),
(160, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '75467gua3e347hj7gkm3voab7e7utgdb', '2019-12-09 13:53:56', NULL, 'VIEWUSER', 'A'),
(161, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'h8m9723r9aha6s225j5f3gk1q3fn12u2', '2019-12-09 13:55:10', NULL, 'VIEWUSER', 'A'),
(162, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '1890gl0jallp960clpag4sdcf1c8hlsr', '2019-12-09 14:11:30', NULL, 'VIEWUSER', 'A'),
(163, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'ge9s482nemmh2e2futfm6kghgmsuib93', '2019-12-09 14:15:31', NULL, 'VIEWUSER', 'A'),
(164, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'qr0o9tu9bcp7udfq9p8immov4beuk1f5', '2019-12-09 14:16:13', NULL, 'VIEWUSER', 'A'),
(165, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'mps7tul5a2ts778n46722lsi042j42d2', '2019-12-09 14:19:25', NULL, 'VIEWUSER', 'A'),
(166, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'mps7tul5a2ts778n46722lsi042j42d2', '2019-12-09 14:19:47', NULL, 'VIEWUSER', 'A'),
(167, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'r2u4p81unclm5fv807rhpesrbfn7ofpb', '2019-12-09 14:20:27', NULL, 'VIEWUSER', 'A'),
(168, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'kjjbe3dber7cjs5248vqnvoaksas3es3', '2019-12-09 14:21:21', NULL, 'VIEWUSER', 'A'),
(169, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '1ovg5jefrrbfl06ja8vlrmg91qsmivq1', '2019-12-09 14:23:04', NULL, 'VIEWUSER', 'A'),
(170, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '29s8pq0dkb3c611pblmitnqrra7m2sv0', '2019-12-09 14:27:12', NULL, 'VIEWUSER', 'A'),
(171, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '6o6b6pl69jrfeeph8e7j576u9e5jl44o', '2019-12-09 14:32:18', NULL, 'VIEWUSER', 'A'),
(172, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'uq5kefoi1p271qhrn2abeaorms22dkjm', '2019-12-09 14:41:38', NULL, 'VIEWUSER', 'A'),
(173, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'i7erf5v7ino85vf4bvn14vhuvsted9ev', '2019-12-09 14:42:55', NULL, 'VIEWUSER', 'A'),
(174, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '96khkjd4vpf4m2vv9fokhf257dnjphv6', '2019-12-09 14:44:37', NULL, 'VIEWUSER', 'A'),
(175, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'dpp193eg51dljinqus3a1v8djq4lfekr', '2019-12-09 15:01:04', NULL, 'VIEWUSER', 'A'),
(176, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'c3vcde1obpb35msn5dt05vu6falo3tse', '2019-12-09 15:08:25', NULL, 'VIEWUSER', 'A'),
(177, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'nlcar395otc717oj10akhmuk02t152hu', '2019-12-09 15:10:08', NULL, 'VIEWUSER', 'A'),
(178, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'rd6seiegiu5u6jvd3nbhid7jd0ukq1oo', '2019-12-09 15:11:48', NULL, 'VIEWUSER', 'A'),
(179, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'kpjqvp2bapddqe19nen1egpfeqm60v21', '2019-12-09 15:14:30', NULL, 'VIEWUSER', 'A'),
(180, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'm6qokjepjs4hcqpu6lo151b2jcb7j631', '2019-12-09 15:14:53', NULL, 'VIEWUSER', 'A'),
(181, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'sr8rj3infgjs7flgjriai1e4anaru08n', '2019-12-09 15:15:16', NULL, 'VIEWUSER', 'A'),
(182, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '35atssiuev0iq27bbfg2uh7q3gbbht8f', '2019-12-09 15:16:16', NULL, 'VIEWUSER', 'A'),
(183, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'k0m0os90jr09n28tsofk8qpqlbnlg23l', '2019-12-09 15:25:52', NULL, 'VIEWUSER', 'A'),
(184, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '0qtpfbel91f1gimkvptgak4gn00ref7f', '2019-12-09 15:38:29', NULL, 'VIEWUSER', 'A'),
(185, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'jto8sbvaflo83r2rpml3adjc2k108697', '2019-12-09 15:39:58', NULL, 'VIEWUSER', 'A'),
(186, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '2pmighaj2gtog2i5q0gd12c4oit8o0td', '2019-12-09 15:41:33', NULL, 'VIEWUSER', 'A'),
(187, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'o06mh0lphaje53rmrku09k1qi88rif9m', '2019-12-09 15:43:41', NULL, 'VIEWUSER', 'A'),
(188, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'n0v2d7a75kheiseiv0017fubvpjdknh8', '2019-12-09 16:17:37', NULL, 'VIEWUSER', 'A'),
(189, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'auo89ommlvrvqjlk8hj3o7us57rjamc5', '2019-12-09 16:19:30', NULL, 'VIEWUSER', 'A'),
(190, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'jlfho8qedvu8qldmvetcvguqrdjgjtn9', '2019-12-09 16:19:52', NULL, 'VIEWUSER', 'A'),
(191, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '30i9oi8oqrunebo9d0o45iou9hgssiae', '2019-12-09 16:27:52', NULL, 'VIEWUSER', 'A'),
(192, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'fmttdmilbomij5acb19uo6id9iu801ei', '2019-12-09 16:28:10', NULL, 'VIEWUSER', 'A'),
(193, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '44fkg48rt24lfbd2pnutotgh0ns8tch6', '2019-12-09 16:29:08', NULL, 'VIEWUSER', 'A'),
(194, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '6dna69tj937u68m0bvsh0k56h2i8a9fk', '2019-12-09 16:31:07', NULL, 'VIEWUSER', 'A'),
(195, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'n9agslts4l1iv1ji1b39pth1767q9rol', '2019-12-09 16:49:25', NULL, 'VIEWUSER', 'A'),
(196, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'pt1rnp7ka06uvn8fg7ckn3oq0tm1ij8d', '2019-12-09 16:54:19', NULL, 'VIEWUSER', 'A'),
(197, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '3kojuu873gd8pvdlnu8rungetc35h0mm', '2019-12-09 17:12:35', NULL, 'VIEWUSER', 'A'),
(198, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '19ru78d8he0f65fr7vf83qsdj8h273e6', '2019-12-09 17:14:56', NULL, 'VIEWUSER', 'A'),
(199, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'plamoafkena28v061isfi3dst0ogs6c4', '2019-12-09 17:21:50', NULL, 'VIEWUSER', 'A'),
(200, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'qplsu55kungauae6gdc6hd0ervk3cmdv', '2019-12-09 17:28:21', NULL, 'VIEWUSER', 'A'),
(201, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'fr0k9l5esn26tv33cof80jdcagd105hs', '2019-12-09 17:29:03', NULL, 'VIEWUSER', 'A'),
(202, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '3brq8j4lgkga36vpp4i09tce8qfjuf47', '2019-12-09 17:33:02', NULL, 'VIEWUSER', 'A'),
(203, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'mc7fttg5sjr73kbd31l5msc67hg99ogg', '2019-12-09 17:33:41', NULL, 'VIEWUSER', 'A'),
(204, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '666ik9lntl3cmqe5tti2k6olf1lsbfqn', '2019-12-09 17:37:01', NULL, 'VIEWUSER', 'A'),
(205, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'ql15geregrg7poggv1s7hvgh9emvdaul', '2019-12-09 17:37:16', NULL, 'VIEWUSER', 'A'),
(206, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'ql15geregrg7poggv1s7hvgh9emvdaul', '2019-12-09 17:37:17', NULL, 'VIEWUSER', 'A'),
(207, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'b02bq69ijt36fv4a7dnbk4qnhdnb2p61', '2019-12-09 17:38:03', NULL, 'VIEWUSER', 'A'),
(208, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'brookid11hsf1dqi8umj7momov8kbqvt', '2019-12-09 17:38:12', NULL, 'VIEWUSER', 'A'),
(209, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'rb67eq12c8rmp6388uasumlfo1la94jl', '2019-12-09 17:39:08', NULL, 'VIEWUSER', 'A'),
(210, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'vh8ua1io6f53fhn4gfkf19p2jsvqj1m6', '2019-12-09 18:10:36', NULL, 'VIEWUSER', 'A'),
(211, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'odqcer975f82b15rudp8c93oss06pm6o', '2019-12-09 18:11:12', NULL, 'VIEWUSER', 'A'),
(212, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'jfus2jmfb32rgtt82p1d677901odoj9a', '2019-12-09 18:11:35', NULL, 'VIEWUSER', 'A'),
(213, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'd53h403rg8vmrobu3kat5ljgb6hdth0d', '2019-12-09 18:13:27', NULL, 'VIEWUSER', 'A'),
(214, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'jlsh2a6q58s8o48kvtj5rt92m3kucmoc', '2019-12-09 18:15:24', NULL, 'VIEWUSER', 'A'),
(215, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'uo2m3j85cmv4fj2m6pat6qq9dord9hj3', '2019-12-09 18:15:37', NULL, 'VIEWUSER', 'A'),
(216, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '17um1mach1fq8m0fjvobcph8jijembla', '2019-12-09 18:16:32', NULL, 'VIEWUSER', 'A'),
(217, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'o1l6vob240cd6qlf5jaq31vkiaqkj6f4', '2019-12-09 18:19:58', NULL, 'VIEWUSER', 'A'),
(218, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'uo06udbcgfaf9b0p87g1kbj3s0pelvf9', '2019-12-09 18:27:29', NULL, 'VIEWUSER', 'A'),
(219, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '9h7la6din1cba29fua7cq35ckjnedbo1', '2019-12-09 18:32:11', NULL, 'VIEWUSER', 'A'),
(220, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'lul5b0a3fp1ibs1vh7i9dd1e3us5v3jn', '2019-12-09 18:35:55', NULL, 'VIEWUSER', 'A'),
(221, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'mlln4p2a8r1im874os7bk4qmvii0ip4f', '2019-12-09 18:37:59', NULL, 'VIEWUSER', 'A'),
(222, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'vnl580fpfq28c3365c6o9ma7to1hkbfl', '2019-12-09 18:40:42', NULL, 'VIEWUSER', 'A'),
(223, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', '5m4fh12bk4frc3c1ef5irt4uspp0n6ab', '2019-12-10 10:03:08', NULL, 'VIEWUSER', 'A'),
(224, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'h4gp55psp5j76t0l8cpeo8r8bkq8es67', '2019-12-10 10:07:11', NULL, 'VIEWUSER', 'A'),
(225, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'kgu489h40nik5v4tj27p992578ehsjci', '2019-12-10 10:13:30', NULL, 'VIEWUSER', 'A'),
(226, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'ih63qgsbnmbdf11cvug6ngsfglc9dl6o', '2019-12-10 10:15:48', NULL, 'VIEWUSER', 'A'),
(227, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'elu3sue75dvjcheplhld3nr5c7puqahl', '2019-12-10 10:17:05', NULL, 'VIEWUSER', 'A'),
(228, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'u0fr1hupg77h6icnnfam6ingsn8vpp72', '2019-12-10 10:26:43', NULL, 'VIEWUSER', 'A'),
(229, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'cuesh4hlj8i1fe36hlis5kle1p8sou4s', '2019-12-10 10:27:54', NULL, 'VIEWUSER', 'A'),
(230, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'jthlrqrtcu8mdtfr30i0ji2rdcf2pcig', '2019-12-10 11:56:32', NULL, 'VIEWUSER', 'A'),
(231, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'cn62tcp9rvfful85d2g30b4m0qlljocv', '2019-12-10 12:41:38', NULL, 'VIEWUSER', 'A'),
(232, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'cn62tcp9rvfful85d2g30b4m0qlljocv', '2019-12-10 12:41:38', NULL, 'VIEWUSER', 'A'),
(233, 'ncmhatre@globalcloudxchange.com', '1', '10.10.203.87', 'vvg03sutit2o53no62o9mfd1i77jnhqd', '2019-12-10 12:42:45', NULL, 'VIEWUSER', 'A');

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
(1, 'Dashboard', 'user/Dashboard', 'A', '0000-00-00 00:00:00', 'VIEWUSER', '1', 'Active', 'fas fa-fw fa-tachometer-alt'),
(2, 'Profile', 'user/User_profile', 'A', '2019-09-15 00:30:51', 'VIEWUSER', '2', NULL, 'fas fa-fw fa-chart-area'),
(3, 'Change password', 'user/Change_password', 'A', '2019-09-15 00:30:51', 'VIEWUSER', '3', NULL, 'fas fa-fw fa-table'),
(10, 'Customer Management', 'user/Customer_Mgmt', 'A', '2019-12-09 11:10:08', 'VIEWUSER', '4', NULL, 'fas fa-fw fa-user-circle'),
(11, 'User Rights', 'user/User_Right', 'A', '2019-12-09 11:10:08', 'VIEWUSER', '5', NULL, 'fas fa-fw fa-balance-scale'),
(12, 'Customer Creation', 'user/Create_Customer', 'A', '2019-12-09 11:10:08', 'VIEWUSER', '6', NULL, 'fas fa-fw fa-bolt'),
(13, 'Config management', 'user/Config_Mgmt', 'A', '2019-12-09 11:10:08', 'VIEWUSER', '7', NULL, 'fas fa-fw fa-list');

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
(68, 'READ', 'READ', 'READ'),
(69, 'WRITE', 'WRITE', 'WRITE'),
(71, 'UPDATE', 'UPDATE', 'UPDATE');

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `groupID` int(11) NOT NULL,
  `groupName` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_groups`
--

INSERT INTO `permission_groups` (`groupID`, `groupName`) VALUES
(42, 'VIEWUSER'),
(43, 'ADMINUSER'),
(44, 'APPROVERUSER');

-- --------------------------------------------------------

--
-- Table structure for table `permission_map`
--

CREATE TABLE `permission_map` (
  `mapId` int(11) NOT NULL DEFAULT 0,
  `groupID` int(11) NOT NULL DEFAULT 0,
  `permissionID` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_map`
--

INSERT INTO `permission_map` (`mapId`, `groupID`, `permissionID`) VALUES
(0, 42, 68),
(0, 42, 69),
(0, 43, 68),
(0, 43, 69);

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
(0, 'admin', 'pass@12345'),
(0, 'admin', 'pass@12345');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(200) DEFAULT NULL,
  `lastName` varchar(200) DEFAULT NULL,
  `userId` varchar(200) DEFAULT NULL,
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

INSERT INTO `tblusers` (`id`, `firstName`, `lastName`, `userId`, `mobileNumber`, `userPassword`, `regDate`, `isActive`, `lastUpdationDate`, `workGroup_id`) VALUES
(1, 'Niraj', 'Mhatre', 'ncmhatre@globalcloudxchange.com', '9699675725', 'Test@12345', '2019-11-17 00:08:32', 1, '2019-12-05 06:10:00', 42),
(2, 'Yugal', 'Ingale', 'yhingale@globalcloudxchange.com', '0000000000', 'Test@12345', '2019-11-17 00:08:32', 1, '2019-12-05 06:10:00', 42),
(3, 'Ketan', 'Pachpande', 'KPachpande@GlobalcloudXchange.com', '0000000000', 'Test@12345', '2019-12-09 06:25:07', 1, NULL, 42),
(4, 'Sushant', 'Badkas', 'SBadkas@GlobalcloudXchange.com', '0000000000', 'Test@12345', '2019-12-09 06:25:07', 1, NULL, 42),
(5, 'Pranav', 'Patil', 'pranavp@GlobalcloudXchange.com', '0000000000', 'Test@12345', '2019-12-09 06:25:07', 1, NULL, 42),
(6, 'Abhay', 'Patil', 'appatil@GlobalcloudXchange.com', '0000000000', 'Test@12345', '2019-12-09 06:25:07', 1, NULL, 42),
(7, 'Vikas', 'Mahajan', 'VSMahajan@GlobalcloudXchange.com', '0000000000', 'Test@12345', '2019-12-09 12:49:47', 0, NULL, 42),
(8, 'Ganesh', 'Hande', 'GBHande@GlobalcloudXchange.com', '0000000000', 'Test@12345', '2019-12-09 12:49:47', 0, NULL, 42);

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
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_session`
--
ALTER TABLE `active_session`
  MODIFY `active_session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `audit_table`
--
ALTER TABLE `audit_table`
  MODIFY `audit_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configarable_sideview`
--
ALTER TABLE `configarable_sideview`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `groupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
