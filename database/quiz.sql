-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 10:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `uans_id` int(4) NOT NULL,
  `userid_r` int(4) NOT NULL,
  `qid_r` int(4) NOT NULL,
  `qtype_r` int(4) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `tick` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`uans_id`, `userid_r`, `qid_r`, `qtype_r`, `answer`, `tick`) VALUES
(6, 2, 1, 1, 'Ramus Lerdorf', 1),
(8, 2, 2, 1, 'rome', 0),
(10, 2, 3, 1, 'goa', 1),
(18, 2, 4, 1, 'china', 1),
(20, 2, 5, 1, 'indonesia', 0),
(24, 2, 6, 2, 'rabada', 0),
(30, 2, 7, 2, '2', 1),
(32, 2, 8, 2, '8', 0),
(34, 2, 9, 2, '2', 1),
(36, 2, 10, 2, 'U.K', 0),
(38, 5, 1, 1, 'Ramus Lerdorf', 1),
(40, 8, 1, 1, 'Ramus Lerdorf', 1),
(42, 10, 1, 1, 'Ramus Lerdorf', 1),
(44, 10, 9, 2, '1', 0),
(46, 14, 1, 1, 'Lewis Benton', 0),
(48, 14, 5, 1, 'japan', 1),
(50, 14, 6, 2, 'rabada', 0),
(52, 14, 10, 2, 'china', 1),
(54, 17, 1, 1, 'Daywin Schmit', 0),
(56, 17, 4, 1, 'nigeria', 0),
(58, 17, 5, 1, 'germany', 0),
(60, 17, 3, 1, 'goa', 1),
(62, 17, 9, 2, '2', 1),
(64, 20, 2, 1, 'persia', 0),
(66, 20, 10, 2, 'brazil', 0),
(68, 21, 2, 1, 'persia', 0),
(70, 26, 2, 1, 'persia', 0),
(72, 26, 4, 1, 'japan', 0),
(74, 26, 5, 1, 'japan', 1),
(76, 26, 9, 2, '1', 0),
(78, 26, 10, 2, 'U.K', 0),
(80, 29, 1, 1, 'Lewis Benton', 0),
(82, 29, 3, 1, 'Dadar&NagarHaveli', 0),
(86, 29, 4, 1, 'nigeria', 0),
(88, 29, 5, 1, 'germany', 0),
(90, 29, 8, 2, '8', 0),
(92, 29, 10, 2, 'U.K', 0),
(94, 30, 9, 2, '1', 0),
(96, 30, 4, 1, 'china', 1),
(98, 41, 1, 1, 'Lewis Benton', 0),
(104, 41, 4, 1, 'china', 1),
(106, 41, 8, 2, '8', 0),
(108, 41, 10, 2, 'U.K', 0),
(110, 41, 6, 2, 'sachin', 1),
(112, 41, 9, 2, '1', 0),
(114, 42, 10, 2, 'china', 1),
(116, 42, 9, 2, '0', 0),
(118, 42, 8, 2, '11', 1),
(120, 42, 7, 2, '2', 1),
(122, 42, 6, 2, 'rabada', 0),
(124, 42, 1, 1, 'Ramus Lerdorf', 1),
(126, 42, 3, 1, 'daman&diu', 0),
(128, 42, 2, 1, 'persia', 0),
(130, 42, 4, 1, 'japan', 0),
(134, 42, 5, 1, 'germany', 0),
(136, 44, 2, 1, 'persia', 0),
(138, 44, 5, 1, 'japan', 1),
(140, 44, 8, 2, '12', 0),
(142, 44, 10, 2, 'china', 1),
(144, 45, 8, 2, '12', 0),
(146, 45, 7, 2, '3', 0),
(148, 45, 1, 1, 'Daywin Schmit', 0),
(150, 45, 2, 1, 'india', 1),
(152, 47, 5, 1, 'japan', 1),
(154, 47, 10, 2, 'china', 1),
(156, 48, 1, 1, 'Daywin Schmit', 0),
(158, 48, 2, 1, 'india', 1),
(162, 48, 5, 1, 'japan', 1),
(164, 48, 8, 2, '12', 0),
(166, 48, 10, 2, 'china', 1),
(168, 49, 6, 2, 'sachin', 1),
(170, 50, 6, 2, 'sachin', 1),
(172, 50, 7, 2, '0', 0),
(174, 50, 8, 2, '11', 1),
(176, 50, 9, 2, '3', 0),
(178, 50, 10, 2, 'russia', 0),
(180, 50, 1, 1, 'Lewis Benton', 0),
(182, 50, 2, 1, 'persia', 0),
(184, 50, 3, 1, 'daman&diu', 0),
(186, 50, 4, 1, 'nigeria', 0),
(188, 50, 5, 1, 'japan', 1),
(190, 51, 6, 2, 'sachin', 1),
(194, 51, 8, 2, '8', 0),
(196, 51, 9, 2, '1', 0),
(198, 51, 10, 2, 'china', 1),
(200, 51, 3, 1, 'goa', 1),
(206, 51, 1, 1, 'Herbert Benly', 0),
(208, 53, 5, 1, 'germany', 0),
(210, 53, 4, 1, 'nigeria', 0),
(212, 53, 10, 2, 'brazil', 0),
(214, 53, 8, 2, '11', 1),
(216, 54, 1, 1, 'Ramus Lerdorf', 1),
(218, 54, 2, 1, 'india', 1),
(220, 54, 3, 1, 'goa', 1),
(222, 54, 4, 1, 'china', 1),
(224, 54, 5, 1, 'indonesia', 0),
(226, 54, 6, 2, 'sachin', 1),
(228, 54, 7, 2, '1', 0),
(230, 54, 8, 2, '11', 1),
(232, 54, 9, 2, '2', 1),
(234, 54, 10, 2, 'china', 1),
(238, 56, 1, 1, 'Daywin Schmit', 0),
(240, 56, 2, 1, 'india', 1),
(242, 56, 3, 1, 'daman&diu', 0),
(246, 56, 4, 1, 'china', 1),
(254, 56, 5, 1, 'japan', 1),
(256, 56, 9, 2, '1', 0),
(258, 56, 8, 2, '8', 0),
(260, 56, 7, 2, '2', 1),
(266, 56, 6, 2, 'sachin', 1),
(268, 56, 10, 2, 'russia', 0);

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `qid` int(11) NOT NULL,
  `type_` int(11) NOT NULL,
  `question` varchar(150) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `OP2` varchar(50) NOT NULL,
  `OP3` varchar(50) NOT NULL,
  `OP4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`qid`, `type_`, `question`, `answer`, `OP2`, `OP3`, `OP4`) VALUES
(1, 1, 'Name the programmer who originally created PHP scripting language.', 'Ramus Lerdorf', 'Lewis Benton', 'Herbert Benly', 'Daywin Schmit'),
(2, 1, 'In which country was the number 0 invented?', 'india', 'mongolia', 'persia', 'rome'),
(3, 1, 'which current indian state was a former portuguese colony?', 'goa', 'daman&diu', 'pondichery', 'Dadar&NagarHaveli'),
(4, 1, 'coronavirus was first found in which country?', 'china', 'japan', 'nigeria', 'N.korea'),
(5, 1, 'hiroshima, nagasaki are located in which country?', 'japan', 'indonesia', 'S.korea', 'germany'),
(6, 2, 'what is the name of the athlete also known as master blaster?', 'sachin', 'virat', 'rabada', 'ashok dinda'),
(7, 2, 'how many one-day cricket worldcups india has won?', '2', '1', '0', '3'),
(8, 2, 'how many players are there in football in one team?', '11', '10', '8', '12'),
(9, 2, 'how many refrees/umpires are the on a cricket field?', '2', '1', '3', '0'),
(10, 2, 'which country hosted the olympics in the year 2008?', 'china', 'U.K', 'russia', 'brazil');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usr_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `marks_h` int(11) NOT NULL,
  `marks_s` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usr_id`, `username`, `marks_h`, `marks_s`) VALUES
(1, 'amey', 0, 0),
(2, 'ameyzing', 3, 2),
(3, 'empty', 0, 0),
(4, 'namy', 0, 0),
(5, 'tester', 1, 0),
(6, 'test2', 0, 0),
(7, 'nmklo', 0, 0),
(8, 'mambo', 1, 0),
(9, 'mnb', 0, 0),
(10, 'bigh', 1, 0),
(11, 'gerr', 0, 0),
(12, 'sed', 0, 0),
(13, 'nhyt', 0, 0),
(14, 'asdfgh', 1, 1),
(15, 'quizy', 0, 0),
(16, 'adx', 0, 0),
(17, 'newman', 1, 1),
(18, 'nobi', 0, 0),
(19, 'dede', 0, 0),
(20, 'for', 0, 0),
(21, 'wench', 0, 0),
(22, 'jabaa', 0, 0),
(23, 'mamas', 0, 0),
(24, 'manz', 0, 0),
(25, 'ajck', 0, 0),
(26, 'jacky', 1, 0),
(27, 'boom', 0, 0),
(28, 'yoyo', 0, 0),
(29, 'ok', 0, 0),
(30, 'mazn', 1, 0),
(31, 'andy', 0, 0),
(32, 'andr', 0, 0),
(33, 'namet', 0, 0),
(34, 'namer', 0, 0),
(35, 'nasdc', 0, 0),
(36, 'tetsz', 0, 0),
(37, 'heyy', 0, 0),
(38, 'yasdfgg', 0, 0),
(39, 'nope', 0, 0),
(40, 'okaya', 0, 0),
(41, 'huihui', 1, 1),
(42, 'yagiuda', 1, 3),
(43, 'bhyu', 0, 0),
(44, 'jabajaba', 1, 1),
(45, 'bhu', 1, 0),
(46, 'aspalt', 0, 0),
(47, 'vbg', 1, 1),
(48, 'boss', 2, 1),
(49, 'omni', 0, 1),
(50, 'loggy', 1, 2),
(51, '', 1, 2),
(52, 'bills', 0, 0),
(53, 'no', 0, 1),
(54, 'ajays', 4, 4),
(55, 'january', 0, 0),
(56, 'freshh', 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`uans_id`);

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `uans_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
