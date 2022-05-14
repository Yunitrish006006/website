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

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `pno` int(11) NOT NULL,
  `pname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `unitprice` decimal(10,2) NOT NULL,
  `category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`pno`, `pname`, `description`, `file_type`, `unitprice`, `category`) VALUES
(1, '經典蜂巢房', '參考蜂巢樣式設計，結合科技感打造出的房間。多孔洞的設計使得整個房間是通風的，冬暖夏涼。', 'p-1.jpg', '4100.00', '台北旗艦店'),
(2, '雙人商務套房', '典雅沈穩的空間佈置搭配柔軟舒適床組，營造出全然放鬆環境，讓疲累的身心享有片刻寧靜，換來一夜好眠。', 'p-2.jpg', '2800.00', '台北旗艦店'),
(3, '單人商務套房', '精緻且設備齊全的客房，舒適而毫無拘束感，讓您避免外界干擾，暫忘都市的塵囂，感受如家的自在與悠閒。', 'p-3.jpg', '2300.00', '台北旗艦店'),
(4, '雅致客房', '客房空間寬敞明亮，配備遼闊的視野、風格獨特的藝術畫作，疲累的旅人在此可享有舒適的休憩。', 'p-4.jpg', '2300.00', '台北旗艦店'),
(5, '經典客房', '運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。', 'p-5.jpg', '3100.00', '台北旗艦店'),
(6, '總統套房', '明亮的光線、溫馨的陳設及獨具的風格藝術品，打造20坪客房及客廳的專屬私人休憩空間。', 'p-6.jpg', '3350.00', '台北旗艦店'),
(7, '商務套房', '典雅沈穩的空間佈置搭配柔軟舒適床組，營造出全然放鬆環境，讓疲累的身心享有片刻寧靜，換來一夜好眠。', 'p-7.jpg', '3160.00', '台中旗艦店'),
(8, '海景雙人房', '精緻且設備齊全的客房，舒適而毫無拘束感，讓您避免外界干擾，暫忘都市的塵囂，感受如家的自在與悠閒。', 'p-8.jpg', '3500.00', '台中逢甲店'),
(9, '典雅四人房', '客房空間寬敞明亮，配備遼闊的視野、風格獨特的藝術畫作，疲累的旅人在此可享有舒適的休憩。', 'p-9.jpg', '5000.00', '台中逢甲店'),
(10, '大道套房', '運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。', 'p-10.jpg', '4800.00', '台中逢甲店'),
(11, '行政套房', '運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。', 'p-11.jpg', '3350.00', '台中旗艦店'),
(12, '商務套房', '典雅沈穩的空間佈置搭配柔軟舒適床組，營造出全然放鬆環境，讓疲累的身心享有片刻寧靜，換來一夜好眠。', 'p-12.jpg', '4200.00', '高雄愛河店'),
(13, '海景雙人房', '精緻且設備齊全的客房，舒適而毫無拘束感，讓您避免外界干擾，暫忘都市的塵囂，感受如家的自在與悠閒。', 'p-13.jpg', '4400.00', '高雄旗艦店'),
(14, '店雅四人房', '客房空間寬敞明亮，配備遼闊的視野、風格獨特的藝術畫作，疲累的旅人在此可享有舒適的休憩。', 'p-14.jpg', '5300.00', '高雄愛河店'),
(15, '森林套房', '運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。', 'p-15.jpg', '3750.00', '彰化鹿港店'),
(16, '英倫皇風', '典雅沈穩的空間佈置搭配柔軟舒適床組，營造出全然放鬆環境，讓疲累的身心享有片刻寧靜，換來一夜好眠。', 'p-16.jpg', '3900.00', '彰化鹿港店'),
(17, '卡米樂', '精緻且設備齊全的客房，舒適而毫無拘束感，讓您避免外界干擾，暫忘都市的塵囂，感受如家的自在與悠閒。', 'p-17.jpg', '3750.00', '彰化鹿港店'),
(18, '十里洋場', '客房空間寬敞明亮，配備遼闊的視野、風格獨特的藝術畫作，疲累的旅人在此可享有舒適的休憩。', 'p-18.jpg', '4200.00', '彰化鹿港店'),
(19, '枯麻主題一館', '典雅沈穩的空間佈置搭配柔軟舒適床組，營造出全然放鬆環境，讓疲累的身心享有片刻寧靜，換來一夜好眠。', 'p-19.jpg', '2350.00', '墾丁恆春店'),
(20, '枯麻主題二館', '精緻且設備齊全的客房，舒適而毫無拘束感，讓您避免外界干擾，暫忘都市的塵囂，感受如家的自在與悠閒。', 'p-20.jpg', '2400.00', '墾丁恆春店'),
(21, '枯麻主題三館', '客房空間寬敞明亮，配備遼闊的視野、風格獨特的藝術畫作，疲累的旅人在此可享有舒適的休憩。', 'p-21.jpg', '2450.00', '墾丁恆春店'),
(22, '妖怪列車', '運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。', 'p-22.jpg', '2300.00', '墾丁恆春店'),
(23, '粉紅城堡', '運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。', 'p-23.jpg', '3350.00', '墾丁恆春店'),
(24, '百老匯', '運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。', 'p-24.jpg', '3500.00', '墾丁恆春店'),
(25, '歡樂屋', '運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。', 'p-25.jpg', '4250.00', '墾丁恆春店'),
(26, '夜森之謎', '運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。', 'p26.jpg', '3800.00', '墾丁恆春店');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pno`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
