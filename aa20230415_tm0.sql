-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2024-03-16 11:12:33
-- 服务器版本： 10.6.12-MariaDB
-- PHP 版本： 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `aa20230415_tm0`
--

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `cat_name`, `intro`, `parent_id`) VALUES
(1, 'Original Novel', '包含该栏目及所有子栏目下内容', 0),
(2, 'Fan fiction', '', 0),
(5, 'Archived Novel', '', 0),
(4, 'Admin', '', 0),
(3, 'Chat', 'emmm', 0);

-- --------------------------------------------------------

--
-- 表的结构 `reply`
--

CREATE TABLE `reply` (
  `rid` int(11) NOT NULL,
  `tid` int(11) NOT NULL DEFAULT 0,
  `floor` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `uid` int(11) NOT NULL DEFAULT 0,
  `type` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(15) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `reptime` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `reply`
--

INSERT INTO `reply` (`rid`, `tid`, `floor`, `uid`, `type`, `name`, `content`, `reptime`) VALUES
(66, 54, 1, 7, 0, '匿名', '1', 1476089671),
(34, 16, 1, 2, 1, '高贵红名', 'gdfgdfgdf', 1475078894),
(65, 53, 1, 2, 1, '红名啊啊啊啊', 'aa<span class=\"quote\">&gt;&gt;52</span>', 1476089479),
(36, 16, 3, 2, 1, '高贵红名', 'a', 1475367346),
(51, 16, 4, 2, 1, '红名', 'aa', 1476077086),
(52, 52, 1, 2, 1, '红名', 'teee', 1476077209),
(53, 16, 5, 2, 1, '红名', 'a', 1476081164),
(54, 16, 5, 2, 1, '红名', 'a', 1476081164),
(55, 16, 5, 2, 1, '红名', 'a', 1476081164),
(56, 16, 5, 2, 1, '红名', 'a', 1476081164),
(57, 16, 5, 2, 1, '红名', 'a', 1476081164),
(58, 16, 5, 2, 1, '红名', 'a', 1476081164),
(59, 16, 5, 2, 1, '红名', 'a', 1476081164),
(60, 16, 5, 2, 1, '红名', 'a', 1476081164),
(61, 16, 5, 2, 1, '红名', 'a', 1476081164),
(62, 16, 5, 2, 1, '红名', 'a', 1476081164),
(63, 16, 5, 2, 1, '红名', 'a', 1476081164),
(64, 52, 2, 7, 0, '匿名', '<span class=\"quote\">&gt;&gt;52</span>', 1476088745),
(67, 53, 2, 7, 0, '匿名', 'a', 1476089685),
(68, 52, 3, 7, 0, '匿名', '<span class=\"quote\">&gt;&gt;52&gt;2</span>', 1476089923),
(69, 59, 1, 19, 0, '无名氏', '(;´Д`)嘿嘿嘿', 1710475317),
(77, 63, 2, 19, 0, '无名氏', '回复测试啦啦啦', 1710504590),
(75, 63, 1, 2, 1, '红名', '测试测试', 1710500477),
(79, 63, 3, 19, 0, '无名氏', '111', 1710504795),
(81, 65, 1, 19, 0, '无名氏', '试试看', 1710504996);

-- --------------------------------------------------------

--
-- 表的结构 `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL DEFAULT 0,
  `tid` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=FIXED;

--
-- 转存表中的数据 `subscription`
--

INSERT INTO `subscription` (`id`, `uid`, `tid`) VALUES
(151, 2, 40),
(2, 2, 33),
(152, 1, 16),
(156, 2, 53),
(154, 2, 16),
(149, 1, 40),
(157, 19, 54),
(159, 19, 57);

-- --------------------------------------------------------

--
-- 表的结构 `thread`
--

CREATE TABLE `thread` (
  `tid` int(11) NOT NULL,
  `uid` int(11) NOT NULL DEFAULT 0,
  `type` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `cat` int(11) NOT NULL DEFAULT 0,
  `name` varchar(15) NOT NULL DEFAULT '',
  `title` varchar(30) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `pubtime` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `lastreptime` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `SAGE` tinyint(3) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `thread`
--

INSERT INTO `thread` (`tid`, `uid`, `type`, `cat`, `name`, `title`, `content`, `pubtime`, `lastreptime`, `SAGE`) VALUES
(42, 1, 0, 1, '匿名', '无标题', 'test', 1476022904, 1476022904, 0),
(43, 2, 1, 1, '红名', '无标题', '1', 1476024038, 1476024038, 0),
(39, 2, 1, 0, '红名', '举报受理', '在此串下举报违规串或回应，请简述举报理由。', 1475500819, 1475500819, 0),
(40, 2, 1, 1, '红名', '无标题', '111', 1475502805, 1475502805, 1),
(16, 2, 1, 3, '高贵红名', '无标题', 'fsdfsdfg', 1475078886, 1475500540, 0),
(44, 2, 1, 2, '红名', '无标题', '111', 1476024161, 1476024161, 0),
(67, 19, 0, 1, '无名氏', '试试看', '嘿嘿嘿', 1710504882, 1710504882, 0),
(48, 2, 1, 1, '红名', '无标题', '1', 1476025999, 1476025999, 0),
(49, 2, 1, 1, '红名', '无标题', 'dfasfd', 1476026161, 1476026161, 0),
(52, 2, 1, 1, '红名', '无标题', 'a', 1476077177, 1476077209, 1),
(53, 2, 1, 1, '红名啊啊啊啊', 'test', '111', 1476089449, 1476089685, 0),
(54, 7, 0, 1, '匿名', 'a11', 'a11', 1476089645, 1476089671, 0),
(61, 2, 1, 1, '红名', '无标题', '这是一个测试帖( ´ー`)', 1710499522, 1710499522, 0),
(59, 19, 0, 4, '无名氏', '嘿嘿嘿', '我来啦我来啦(´ﾟДﾟ`)', 1710473232, 1710475317, 0),
(63, 2, 1, 1, '红名', '测试标题', '( ´ー`)aaa', 1710499850, 1710504795, 0),
(65, 2, 1, 1, '红名', '试试看', '嘿嘿', 1710500021, 1710504996, 0),
(68, 19, 0, 5, '无名氏', '大家好', '大家好，我是 132，火速写了这个论坛', 1710587375, 1710587375, 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `uid` int(10) UNSIGNED NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `username` varchar(16) NOT NULL DEFAULT '',
  `nickname` varchar(10) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `regtime` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `regip` varchar(50) DEFAULT NULL,
  `lastlogin` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `lastip` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `type`, `username`, `nickname`, `email`, `password`, `regtime`, `regip`, `lastlogin`, `lastip`) VALUES
(1, 0, 'testa', '匿名', 'aa@aa.aa', '123456', 1474975269, '::1', 1476022900, '::1'),
(2, 1, 'admin', '红名', 'admin@tm0.net', '5e953f36fcc8a11df056a6d924c2e689', 1474975269, '', 1710498725, '127.0.0.1'),
(19, 0, 'yisar', '无名氏', '1533540012@qq.com', '5e953f36fcc8a11df056a6d924c2e689', 1710472818, '127.0.0.1', 1710582694, '2408:8214:3b1d:de10:7c60:b191:650f:ba43'),
(20, 0, '', '无名氏', '111@222', '37c09a6a7620a4b397ae1893d7508cc9', 1710514461, '2408:8214:3b1d:de10:e88d:e146:6006:715b', 1710514461, '2408:8214:3b1d:de10:e88d:e146:6006:715b'),
(21, 0, '', '无名氏', 'qinky94@163.com', '3fefae4ce254648e9dff33608059a9dd', 1710586223, '2408:821b:2412:dc50:eda7:2ab2:c1b3:d548', 1710586223, '2408:821b:2412:dc50:eda7:2ab2:c1b3:d548');

--
-- 转储表的索引
--

--
-- 表的索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`rid`) USING BTREE;

--
-- 表的索引 `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 表的索引 `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`tid`) USING BTREE;

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`) USING BTREE;

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `reply`
--
ALTER TABLE `reply`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- 使用表AUTO_INCREMENT `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- 使用表AUTO_INCREMENT `thread`
--
ALTER TABLE `thread`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
