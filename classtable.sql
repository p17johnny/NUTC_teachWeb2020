-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020 年 03 月 16 日 15:52
-- 伺服器版本： 10.1.38-MariaDB
-- PHP 版本： 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `smart`
--

-- --------------------------------------------------------

--
-- 資料表結構 `classtable`
--

CREATE TABLE `classtable` (
  `id` varchar(11) NOT NULL,
  `name` varchar(4) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `classtable`
--

INSERT INTO `classtable` (`id`, `name`, `gender`, `password`) VALUES
('1110431036', '施雅瀞', '女', 'abc123'),
('1110502024', '蕭子芸', '女', 'abc123'),
('1110502043', '劉東霖', '男', 'abc123'),
('1110503084', '蔡和晉', '男', 'abc123'),
('1110504044', '陳尚恩', '男', 'abc123'),
('1110531002', '王翊臻', '女', 'abc123'),
('1110531003', '朱妍蓁', '女', 'abc123'),
('1110531005', '李妍菲', '女', 'abc123'),
('1110531006', '林育萱', '女', 'abc123'),
('1110531008', '林姿嫻', '女', 'abc123'),
('1110531009', '林家瑀', '女', 'abc123'),
('1110531010', '林耘潔', '女', 'abc123'),
('1110531011', '施亞彤', '女', 'abc123'),
('1110531013', '郭玉葳', '女', 'abc123'),
('1110531016', '陳慧慈', '女', 'abc123'),
('1110531018', '黃宥欣', '女', 'abc123'),
('1110531020', '葉奕青', '女', 'abc123'),
('1110531021', '蕭鈺穎', '女', 'abc123'),
('1110531022', '謝沛璇', '女', 'abc123'),
('1110531023', '謝若瑜', '女', 'abc123'),
('1110531024', '魏樂昀', '女', 'abc123'),
('1110531026', '王佑強', '男', 'abc123'),
('1110531027', '司曄瑋', '男', 'abc123'),
('1110531028', '宋鎔宇', '男', 'abc123'),
('1110531029', '易宗霖', '男', 'abc123'),
('1110531030', '林子元', '男', 'abc123'),
('1110531031', '林奇彥', '男', 'abc123'),
('1110531034', '康淯傑', '男', 'abc123'),
('1110531035', '張毓立', '男', 'abc123'),
('1110531036', '陳思翰', '男', 'abc123'),
('1110531037', '陳研熏', '男', 'abc123'),
('1110531039', '塗弘瑋', '男', 'abc123'),
('1110531040', '劉承灝', '男', 'abc123'),
('1110531041', '鍾博霖', '男', 'abc123'),
('1110531042', '蘇明瀚', '男', 'abc123'),
('1110531043', '黃晏綾', '女', 'abc123');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `classtable`
--
ALTER TABLE `classtable`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
