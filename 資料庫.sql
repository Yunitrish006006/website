-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-13 17:25:30
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `beehotel`
--
CREATE DATABASE IF NOT EXISTS `beehotel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `beehotel`;

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `account` varchar(20) NOT NULL,
  `level` int(2) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`account`, `level`, `password`, `email`) VALUES
('admin', 99, 'admin123456', 'admin@BeeHotel.com.tw'),
('guest', 0, '********', 'guest@gmail.com'),
('LinYun', 6, '123456', 'yunthomas006@gmail.com'),
('member', 1, 'member123456', 'member@gmail.com');

-- --------------------------------------------------------

--
-- 資料表結構 `account_temp`
--

CREATE TABLE `account_temp` (
  `account` varchar(20) NOT NULL,
  `level` int(2) NOT NULL,
  `password` varchar(20) NOT NULL,
  `verify_code` int(6) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `account` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `food_tag` tinyint(1) NOT NULL,
  `service_tag` tinyint(1) NOT NULL,
  `activity_tag` tinyint(1) NOT NULL,
  `room_tag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `comments`
--

INSERT INTO `comments` (`id`, `account`, `date`, `food_tag`, `service_tag`, `activity_tag`, `room_tag`) VALUES
(0, 'guest01', '2022-05-13', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `language`
--

CREATE TABLE `language` (
  `id` varchar(20) NOT NULL,
  `eng_us` varchar(10) NOT NULL,
  `zh_tw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `language`
--

INSERT INTO `language` (`id`, `eng_us`, `zh_tw`) VALUES
('index.hotel_name', 'Bee Hotel', '蜂巢飯店'),
('nav.home', 'Home', '首頁');

-- --------------------------------------------------------

--
-- 資料表結構 `rooms`
--

CREATE TABLE `rooms` (
  `id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(6) NOT NULL,
  `sold` tinyint(1) NOT NULL,
  `location` varchar(40) NOT NULL,
  `canContain` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account`);

--
-- 資料表索引 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account` (`account`);

--
-- 資料表索引 `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
