-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-11 23:21:09
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- 表的结构 `score`
--

CREATE TABLE `score` (
  `id` int(10) UNSIGNED NOT NULL,
  `studentId` varchar(8) CHARACTER SET utf8 NOT NULL,
  `test_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `subject` varchar(50) CHARACTER SET utf8 NOT NULL,
  `paper_id` int(10) UNSIGNED NOT NULL COMMENT '试卷id',
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `score`
--

INSERT INTO `score` (`id`, `studentId`, `test_name`, `subject`, `paper_id`, `mark`) VALUES
(35, '07160701', '练习三', 'java', 28, 100),
(36, '07160701', 'java实训', 'java', 34, 2);

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `studentId` varchar(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `className` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `sex` char(1) NOT NULL DEFAULT '男',
  `nation` varchar(10) NOT NULL,
  `password` varchar(40) DEFAULT NULL COMMENT '密码'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `studentId`, `name`, `className`, `birthday`, `sex`, `nation`, `password`) VALUES
(16, '1', '小明', '1606', '2017-12-03', '男', '汉', NULL),
(17, '2', '阿超', '1606', '2017-12-03', '男', '汉', NULL),
(18, '3', '小玲', '1606', '2016-12-03', '女', '汉', NULL),
(20, '4', '小灵', '1606', '2016-12-03', '女', '汉', NULL),
(22, '6', '小凌', '1606', '2017-12-03', '男', '汉', NULL),
(23, '5', '小风', '1606', '2017-12-03', '男', '汉', NULL),
(24, '7', '小林', '1606', '2017-12-03', '男', '汉', NULL),
(25, '8', '欧阳', '1606', '2017-12-03', '男', '藏', NULL),
(26, '9', '小龙', '1606', '2017-12-03', '男', '藏', NULL),
(27, '10', '阿龙', '1606', '2017-12-03', '男', '藏', NULL),
(28, '11', '路飞', '1606', '2017-12-03', '男', '汉', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(48) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '状态'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(2, 'administrator', '62102030389c47479e7563261db82c747246b5b5', 1),
(3, 'abcd', '81fe8bfe87576c3ecb22426f8e57847382917acf', 1),
(4, '07160611', '81fe8bfe87576c3ecb22426f8e57847382917acf', 1),
(5, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(6, 'root', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1),
(7, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(8, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index3_student_id` (`studentId`),
  ADD KEY `index4_paper_id` (`paper_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `INDEX_STUDENT_ID` (`studentId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `score`
--
ALTER TABLE `score`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- 使用表AUTO_INCREMENT `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
