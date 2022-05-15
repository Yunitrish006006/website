-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 05 月 15 日 07:05
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.29

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
CREATE DATABASE IF NOT EXISTS `beehotel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `beehotel`;

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `account` varchar(20) NOT NULL,
  `level` int(2) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `history` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{}'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`id`, `account`, `level`, `password`, `email`, `history`) VALUES
(0, 'test', 1, 'test123456', 'test@gmail.com', ''),
(1, 'admin', 99, 'admin123456', 'admin@BeeHotel.com.tw', ''),
(2, 'guest', 0, 'guest123456', 'guest@gmail.com', ''),
(3, 'LinYunYou', 23, '0937565253', 'yunthomas@gmail.com', ''),
(4, 'member', 1, 'member123456', 'member@gmail.com', ''),
(17, 'jimmy', 99, 'jimmy123456', 'jimmy@gmail.com', '');

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
-- 資料表結構 `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `pno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `cart`
--

INSERT INTO `cart` (`id`, `account_id`, `pno`) VALUES
(30, 1, 3);

-- --------------------------------------------------------

--
-- 資料表結構 `comments`
--

CREATE TABLE `comments` (
  `id` varchar(10) NOT NULL,
  `account` varchar(20) NOT NULL,
  `name` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `picture_path` varchar(50) DEFAULT NULL,
  `tag` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `comments`
--

INSERT INTO `comments` (`id`, `account`, `name`, `date`, `picture_path`, `tag`, `subject`, `comment`) VALUES
('1', 'Lin', '林小姐', '2022-05-01', 'images/blog/main-blog/m-blog-1.jpg', '食物,服務人員', '服務人員請不要氣餒', '好幾年公司尾牙都在此舉辦，今年當然也不例外，疫情當下在台灣還能大啖美食很幸福。今年有個小插曲，\r\n                                            服務員在送餐時（玉露海石斑）不小心湯汁濺灑在我衣服整隻袖子，感覺服務員很生澀應該是工讀生，\r\n                                            用餐過程到結束來了好幾位主管來跟我致歉，及詢問我需要什麼善後服務之類，還說要拿件衣服給我換，\r\n                                            或者把衣服送過來清洗都沒關係，我回沒關係不介意別責怪那位服務員，希望那位工讀生別往心裡去，\r\n                                            服務業辛苦了。'),
('2', 'Yang', '楊先生', '2022-05-15', 'images/blog/main-blog/m-blog-8.jpg', '食物,服務人員,套房', '於房間設計與服務人員看法', '228連假期間入住12樓全新改裝的雅緻客房，房內裝潢走典雅木質系，空間寬敞\r\n                                            ，衛浴設施新穎，有免治馬桶，盥洗泡澡水量強勁且大，但室內燈光偏昏暗，\r\n                                            夜晚想在房內看書，只有書桌前上方的小燈可用，角落若能增加些立燈，應該會更好些\r\n                                            ，當晚還遇到11點半樓上房客一直在搬家具的聲音，幸好反應給櫃檯人員後就改善了。\r\n                                            隔日的早餐是採半自助式的，除了可無限點用限定的6種套餐外，再加上自助吧的沙拉\r\n                                            、麵包、水果及飲品，其實也能吃飽吃巧，同時比較不浪費食材，但就星級大飯店價位來說，\r\n                                            提供這樣的早餐品項，心情難免會覺得落差太大，當天請領檯人員另外幫我做外帶，\r\n                                            服務人員也很迅速完成準備，讓沒能來得及起床用餐的家人，吃得很很飽，下次有機會還是\r\n                                            會再次選擇入住蜂巢。'),
('3', 'Liu', '劉小姐', '2022-04-04', 'images/blog/main-blog/m-blog-4.jpg', '服務人員,套房', '再也不來這住了', '這次住8樓，遇到一些問題，住的不是很開心\r\n                                            <br>1.晚上10點多，聽到別間傳來的洗澡水聲和管線的水聲，超級超級大聲的（已蓋過電視聲音），也持續一小時\r\n                                            <br>2.超大水聲之後，廁所開始出現很濃的霉味\r\n                                            <br>3.隔音很差，早上6點多開始，有說話聲和電視的聲音，持續2小時\r\n                                            <br> 4.停車場已經有登錄車號，卻還是不能自由進出，需要按對講機和保全通話\r\n                                            <br>因為住宿經驗很差，回來查看評價，才發現這都是很多人會遇到的相同問題，然後官方都回答，10-12樓有新客房，那為何一開始就不拿出來，等留下差評了才這樣回覆，感覺很沒誠意'),
('4', 'Fang', '方小姐', '2022-05-08', 'images/blog/main-blog/m-blog-3.jpg', '食物,服務人員', '這家飯店的婚禮佈置', '蜂巢花園宴會廳是一間精緻西式風格又偏有點夢幻少女心的布景，沿途可見鮮花、\r\n                                            氣球、愛心、熊熊，雖然有些無法拍照(藝術品)有些可惜，不過也能讓夢幻感持續湧現。\r\n                                            基本上餐廳、會議廳空間都不是非常的寬敞，相對狹小，很容易造成壅擠的情況\r\n                                            ，假設是大型企業尾牙可能需要多考慮這點的不便性。\r\n                                            餐點魚類料理非常不滿意，很腥，感覺不是很新鮮，其餘海鮮還可以接受。\r\n                                            喜歡抹茶甜點蛋糕，濃郁且不會太甜，令人開心。整體上服務態度良好，\r\n                                            不會有多餘的親切以及不舒服的體驗，交通就在台中高鐵附近，位置方便。');

-- --------------------------------------------------------

--
-- 資料表結構 `details`
--

CREATE TABLE `details` (
  `id` varchar(10) NOT NULL,
  `account` varchar(20) NOT NULL,
  `main` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `content` varchar(20) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `details`
--

INSERT INTO `details` (`id`, `account`, `main`, `name`, `content`, `time`) VALUES
('1', 'LinYun', '1', '林昀佑', '這個人好智障', '2022-05-15 13:13:03'),
('2', 'guest', '1', '匿名', '服務人員真辛苦', '2022-05-05 00:20:10');

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
(6, '總統套房', '明亮的光線、溫馨的陳設及獨具的風格藝術品，打造20坪客房及客廳的專屬私人休憩空間。', 'p-6.jpg', '3350.00', '台中逢甲店'),
(7, '商務套房', '典雅沈穩的空間佈置搭配柔軟舒適床組，營造出全然放鬆環境，讓疲累的身心享有片刻寧靜，換來一夜好眠。', 'p-7.jpg', '3160.00', '台中逢甲店'),
(8, '海景雙人房', '精緻且設備齊全的客房，舒適而毫無拘束感，讓您避免外界干擾，暫忘都市的塵囂，感受如家的自在與悠閒。', 'p-8.jpg', '3500.00', '台中逢甲店'),
(9, '典雅四人房', '客房空間寬敞明亮，配備遼闊的視野、風格獨特的藝術畫作，疲累的旅人在此可享有舒適的休憩。', 'p-9.jpg', '5000.00', '台中逢甲店'),
(10, '大道套房', '運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。', 'p-10.jpg', '4800.00', '高雄愛河店'),
(11, '行政套房', '運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。', 'p-11.jpg', '3350.00', '高雄愛河店'),
(12, '商務套房', '典雅沈穩的空間佈置搭配柔軟舒適床組，營造出全然放鬆環境，讓疲累的身心享有片刻寧靜，換來一夜好眠。', 'p-12.jpg', '4200.00', '高雄愛河店'),
(13, '海景雙人房', '精緻且設備齊全的客房，舒適而毫無拘束感，讓您避免外界干擾，暫忘都市的塵囂，感受如家的自在與悠閒。', 'p-13.jpg', '4400.00', '高雄愛河店'),
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
(26, '夜森之謎', '運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。', 'p-26.jpg', '3800.00', '墾丁恆春店');

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
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pno`);

--
-- 資料表索引 `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- 資料庫: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- 資料表結構 `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- 傾印資料表的資料 `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"beehotel\",\"table\":\"comments\"},{\"db\":\"beehotel\",\"table\":\"details\"},{\"db\":\"beehotel\",\"table\":\"account\"},{\"db\":\"beehotel\",\"table\":\"language\"},{\"db\":\"beehotel\",\"table\":\"product\"},{\"db\":\"beehotel\",\"table\":\"rooms\"},{\"db\":\"beehotel\",\"table\":\"detail\"},{\"db\":\"beehotel\",\"table\":\"account_temp\"}]');

-- --------------------------------------------------------

--
-- 資料表結構 `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- 傾印資料表的資料 `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-05-15 05:02:26', '{\"lang\":\"zh_TW\",\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- 資料表結構 `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- 資料表結構 `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- 資料表索引 `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- 資料表索引 `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- 資料表索引 `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- 資料表索引 `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- 資料表索引 `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- 資料表索引 `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- 資料表索引 `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- 資料表索引 `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- 資料表索引 `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- 資料表索引 `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- 資料表索引 `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- 資料表索引 `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- 資料表索引 `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- 資料表索引 `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- 資料表索引 `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- 資料表索引 `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- 資料表索引 `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 資料庫: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
