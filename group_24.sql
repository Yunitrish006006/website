-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-29 16:04:58
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
-- 資料庫: `group_24`
--
CREATE DATABASE IF NOT EXISTS `group_24` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `group_24`;

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
  `index` varchar(10) NOT NULL,
  `main` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `content` varchar(20) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `details`
--

INSERT INTO `details` (`id`, `account`, `index`, `main`, `name`, `content`, `time`) VALUES
('1', 'LinYunYou', '1', '1', '林昀佑', '這個人好智障', '2022-05-15 13:13:03'),
('2', 'guest', '2', '1', '匿名', '服務人員真辛苦', '2022-05-15 12:38:24');

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
  `category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipment` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`pno`, `pname`, `description`, `file_type`, `unitprice`, `category`, `equipment`) VALUES
(1, '蜂巢主題房', '裡面的使用蜂巢式結構設計，為綠色建築的代表。多孔洞的設計使得整間飯店是通風的，冬暖夏涼，白天吸收太陽光作為晚上的電力供應。', 'p-1.jpg', '4100.00', '台北旗艦店', '電子卡片式門鎖 有線寬頻及無線上網 拖鞋 冰箱 吹風機 電熱水壺 專用保險箱 直撥電話 液晶電視 衛星電視頻道 分離式衛浴設備'),
(2, '雅緻客房', '客房空間寬敞明亮，配備遼闊的視野、風格獨特的藝術畫作，疲累的旅人在此可享有舒適的休憩。房內地毯與窗簾皆為防燄材質，並採全系列德國衛浴設備，提供高質感住宿選擇。', 'p-2.jpg', '2800.00', '台北旗艦店', '電子卡片式門鎖 有線寬頻及無線上網 拖鞋 冰箱 吹風機 電熱水壺 專用保險箱 直撥電話 液晶電視 衛星電視頻道 分離式衛浴'),
(3, '商務套房', '運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。', 'p-3.jpg', '2300.00', '台北旗艦店', '電子卡片式門鎖 有線寬頻及無線上網 拖鞋 冰箱 吹風機 電熱水壺 專用保險箱 直撥電話 液晶電視 衛星電視頻道 分離式衛浴設備'),
(4, '經典套房', '明亮的光線、溫馨的陳設及獨具的風格藝術品，打造20坪客房及客廳的專屬私人休憩空間。直撥電話及免費的寬頻上網，讓您運籌帷幄怡然自得，商機在握！', 'p-4.jpg', '4700.00', '台北旗艦店', '電子卡片式門鎖 有線寬頻及無線上網 拖鞋 冰箱 吹風機 電熱水壺 專用保險箱 直撥電話 液晶電視 衛星電視頻道 分離式衛浴設備'),
(5, '家庭四人房', '客房光線明亮、視野遼闊、典雅的佈置，讓全家人都可以盡情放鬆身心，兩張大床的住宿空間，為闔家出遊最佳住宿選擇。', 'p-5.jpg', '4450.00', '台北旗艦店', '電子卡片式門鎖 有線寬頻及無線上網 拖鞋 冰箱 吹風機 電熱水壺 專用保險箱 直撥電話 液晶電視 衛星電視頻道 分離式衛浴設備'),
(6, '豪華客房', '10.5坪格局方正、單面落地玻璃式採光，簡單的空間格局，180公分寬大床，輕撫柔暖貼身的羽毛被枕，柔和光線營造寧靜氣氛，是商務洽公或旅遊最佳選擇。', 'p-6.jpg', '3350.00', '台中逢甲店', '液晶電視、全頻道電視、靜音冰箱、電子感應門鎖、專用保險箱、電話、煮水器、乾溼分離衛浴設備、吹風機、拖鞋、全館無線上網、免費礦泉水、烏龍茶包'),
(7, '經典套房', '21坪大脫俗靜謐的雙人套房，整面落地玻璃光線明亮、視野寬廣；獨立客廳方便接待賓客親友，提供濾掛式咖啡、臥房32吋液晶電視及DVD設備增添住宿樂趣。', 'p-7.jpg', '3160.00', '台中逢甲店', '液晶電視、全頻道電視、靜音冰箱、電子感應門鎖、專用保險箱、電話、煮水器、乾溼分離衛浴設備、吹風機、拖鞋、全館無線上網、免費礦泉水、烏龍茶包'),
(8, '溫馨四人房', '兩張雙人中床提供足夠的睡眠休憩空間，疲累的身心靈能夠全然放鬆，舒適的設備空調，無論成人或孩童，均能輕鬆進入甜甜夢鄉。', 'p-8.jpg', '3500.00', '台中逢甲店', '液晶電視、全頻道電視、靜音冰箱、電子感應門鎖、專用保險箱、電話、煮水器、乾溼分離衛浴設備、吹風機、拖鞋、全館無線上網、免費礦泉水、烏龍茶包'),
(9, '總統套房', '接待過來自世界各地與國內的國際知名音樂演奏家、名人等入住。擁有超大坪數完整設備的總統套房，獨立樓面空間私密，設計風格經典優雅，名人之風氣宇非凡，貼心服務尊禮遇，合乎您的姿領略鑑賞。', 'p-9.jpg', '5000.00', '台中逢甲店', '液晶電視、全頻道電視、靜音冰箱、電子感應門鎖、專用保險箱、電話、煮水器、乾溼分離衛浴設備、吹風機、拖鞋、全館無線上網、免費礦泉水、烏龍茶包'),
(10, '大道套房', '盡情享受寧靜安怡的氛圍，欣賞市景或酒店園景，以及優美的花園和泳池景觀。設有深色木製傢俱及富有格調的燈光，這些優雅的客房提供典雅的氣氛。', 'p-10.jpg', '4800.00', '高雄愛河店', '提供一張特大號床或雙床、 480 針亞麻床上用品及穿堂式衣櫃。豪華的雲石浴室採用經典設計，配備穿堂式淋浴間和獨立浴缸。  '),
(11, '行政套房', '客房寬敞舒適，附設玄關，給人溫馨親切的感覺。客房鋪設毛絨地毯，配備深色木製家具及富有情調的燈飾。', 'p-11.jpg', '3350.00', '高雄愛河店', '設有私人主臥室，並備有特大號床或雙床可供選擇。此外，旁邊的客廳還配備沙發、穿堂式衣櫃，以及連獨立浴缸和寬敞穿堂式淋浴間的浴室。 '),
(12, '商務套房', '典雅沈穩的空間佈置搭配柔軟舒適床組，營造出全然放鬆環境，讓疲累的身心享有片刻寧靜，換來一夜好眠。', 'p-12.jpg', '4200.00', '高雄愛河店', '客房鋪設豪華毛絨地毯，並配備深色木製家具及富有情調的燈飾。相連浴室設有獨立浴缸和寬敞步入式淋浴間。'),
(13, '海景雙人房', '精緻且設備齊全的客房，舒適而毫無拘束感，讓您避免外界干擾，暫忘都市的塵囂，感受如家的自在與悠閒。', 'p-13.jpg', '4400.00', '高雄愛河店', '典雅的單床套房，房內配備寬敞的客廳和步入式衣櫃，其寬大的臥室配備穿堂式衣櫃，客廳配有各式座椅、咖啡桌及辦公桌。浴室則配備浴缸和淋浴間'),
(14, '典雅四人房', '漂亮的室內裝潢完美地糅合了現代室內設計與經典風格，客房空間寬敞明亮，配備遼闊的視野、風格獨特的藝術畫作，疲累的旅人在此可享有舒適的休憩。', 'p-14.jpg', '5300.00', '高雄愛河店', '房間設有一間配備特大號床的寬敞臥室、連沙發的獨立客廳，還可讓您欣賞台北市的景觀。賓客還可盡情享受大型浴室以及浴缸和步入式淋浴間。'),
(15, '森林套房', '由國際知名設計團隊精心打造的67坪頂級渡假空間，以純白、典雅金與溫暖木質等色調完美輝映，欲為貴賓營造低調奢華的不凡體驗。', 'p-15.jpg', '3750.00', '彰化鹿港店', '數位電視、免費網路連接、鬧鐘、浴袍、報紙、電子煙霧探測器、洗衣服務、迷你酒吧、保險箱、冰箱、電熨斗和燙衣板、獨立衣帽間、書桌、房內保險箱'),
(16, '英倫皇風', '典雅沈穩的空間佈置搭配柔軟舒適床組，營造出全然放鬆環境，讓疲累的身心享有片刻寧靜，換來一夜好眠。', 'p-16.jpg', '3900.00', '彰化鹿港店', '數位電視、免費網路連接、鬧鐘、浴袍、報紙、電子煙霧探測器、洗衣服務、迷你酒吧、保險箱、冰箱、電熨斗和燙衣板、獨立衣帽間、書桌、房內保險箱'),
(17, '卡米樂', '設計理念為創造與家人間的幸福回憶，設計團隊大量霓虹燈光，搭配木質色調結合，營造溫馨典雅風格。映入眼簾的優雅靜謐與碧綠環山景致，提供旅人獨特不凡的假期體驗。', 'p-17.jpg', '3750.00', '彰化鹿港店', '數位電視、免費網路連接、鬧鐘、浴袍、報紙、電子煙霧探測器、洗衣服務、迷你酒吧、保險箱、冰箱、電熨斗和燙衣板、獨立衣帽間、書桌、房內保險箱'),
(18, '十里洋場', '館內設有四間絕美奢華的水療套房，佐以半露天的風格景緻，賓客於房內即可享受專屬頂級的SPA療程，盡擁靜謐悠然的假期氛圍。', 'p-18.jpg', '4200.00', '彰化鹿港店', '數位電視、免費網路連接、鬧鐘、浴袍、報紙、電子煙霧探測器、洗衣服務、迷你酒吧、保險箱、冰箱、電熨斗和燙衣板、獨立衣帽間、書桌、房內保險箱'),
(19, '枯麻主題一館', '簡約大方的陳設，打造寬敞空間感。柔和燈光映照每個角落，與淺色木紋地板、木質拉門相互輝映交織出溫馨舒適氛圍，讓旅人感受精緻風雅的休憩時光。', 'p-19.jpg', '2350.00', '墾丁恆春店', '盥洗用具、毛巾、浴巾、紙拖鞋、吹風機、液晶電視、中華電信MOD、冰箱\r\n獨立式冷氣、獨立衛浴(乾溼分離)、電茶壺、茶包、咖啡、房間內皆提供RO逆滲透山泉水及免費無線WIFI'),
(20, '枯麻主題二館', '舒適寬大的空間裡，豪華時尚，自然色的家具配置，為房間增添典雅高貴氣息。入夜後，浸浴在獨立溫泉湯池中放鬆身心紓解疲勞，度過一段洗滌心靈的療癒時光。', 'p-20.jpg', '2400.00', '墾丁恆春店', '盥洗用具、毛巾、浴巾、紙拖鞋、吹風機、液晶電視、中華電信MOD、冷藏冰箱獨立式冷氣、獨立衛浴(乾溼分離)、電茶壺、茶包、咖啡 房間內皆設有RO逆滲透山泉水 '),
(21, '枯麻主題三館', '21坪大的套房內，柔和舒適的房間設計，覽盡一望無際遼闊平原的陽台，寬敞衛浴空間提供雙湯池，旅人獨享高級私人湯屋，與親密的家人朋友度過悠閒美好的享沐時光。', 'p-21.jpg', '2450.00', '墾丁恆春店', '盥洗用具、毛巾、浴巾、紙拖鞋、吹風機、液晶電視、中華電信MOD、冷藏冰箱、獨立式冷氣、獨立衛浴(乾溼分離)、電茶壺、茶包、咖啡、房間內皆設有RO逆滲透山泉水及免費無線WIFI'),
(22, '妖怪列車', '時尚典雅的客房放置舒適床鋪，保留了大片活動空間，大朋友可以開場盡興的PARTY；小朋友可以盡情的嬉戲玩耍。拉門隔間寬敞衛浴裡，旅人可以浸浴在湯池中享受悠閒靜謐時光。', 'p-22.jpg', '2300.00', '墾丁恆春店', '盥洗用具、毛巾、浴巾、紙拖鞋、吹風機、液晶電視、中華電信MOD、冷藏冰箱、獨立式冷氣、獨立衛浴(乾溼分離)、電茶壺、茶包、咖啡、房間內皆設有RO逆滲透山泉水及免費無線WIFI'),
(23, '粉紅城堡', '精緻典雅的傢俱，像家一樣溫馨， 佇立在大片落地窗前，高樓層的風景盡收眼底， 在粉紅城堡風格的客房氛圍及舒眠音樂陪伴下， 徹底放鬆。', 'p-23.jpg', '3350.00', '墾丁恆春店', '盥洗用具、毛巾、浴巾、紙拖鞋、吹風機、液晶電視、中華電信MOD、冷藏冰箱、獨立式冷氣、獨立衛浴(乾溼分離)、電茶壺、茶包、咖啡、房間內皆設有RO逆滲透山泉水及免費無線WIFI'),
(24, '百老匯', '運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。', 'p-24.jpg', '3500.00', '墾丁恆春店', '盥洗用具、毛巾、浴巾、紙拖鞋、吹風機、液晶電視、中華電信MOD、冷藏冰箱、獨立式冷氣、獨立衛浴(乾溼分離)、電茶壺、茶包、咖啡、房間內皆設有RO逆滲透山泉水及免費無線WIFI'),
(25, '歡樂屋', '簡約木質調設計，搭配上沉穩灰色系，柔和燈光咉印在房間的每個角落，格外令人放鬆愉悅，不論是一個人或是兩個人入住，都能感受品味高雅時尚之旅。', 'p-25.jpg', '4250.00', '墾丁恆春店', '盥洗用具、毛巾、浴巾、紙拖鞋、吹風機、液晶電視、中華電信MOD、冷藏冰箱、獨立式冷氣、獨立衛浴(乾溼分離)、電茶壺、茶包、咖啡、房間內皆設有RO逆滲透山泉水及免費無線WIFI'),
(26, '夜森之謎', '進入客房，映入眼簾的是寧靜的星空及小屋的設計，浴室內獨特的圓形大鏡面及乾濕分離的衛浴設計，讓人沉浸在無限遐想之中', 'p-26.jpg', '3800.00', '墾丁恆春店', '盥洗用具、毛巾、浴巾、紙拖鞋、吹風機、液晶電視、中華電信MOD、冷藏冰箱、獨立式冷氣、獨立衛浴(乾溼分離)、電茶壺、茶包、咖啡、房間內皆設有RO逆滲透山泉水及免費無線WIFI');

-- --------------------------------------------------------

--
-- 資料表結構 `record`
--

CREATE TABLE `record` (
  `id` int(10) NOT NULL,
  `tno` int(10) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `saleprice` decimal(10,2) NOT NULL,
  `amount` int(10) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `record`
--

INSERT INTO `record` (`id`, `tno`, `pname`, `saleprice`, `amount`, `checkin`, `checkout`) VALUES
(33, 46, '蜂巢主題房', '8200.00', 2, '2022-05-17', '2022-05-25'),
(34, 46, '經典套房', '9400.00', 2, '2022-05-18', '2022-05-25'),
(49, 55, '蜂巢主題房', '8200.00', 2, '2022-05-25', '2022-05-26'),
(50, 55, '商務套房', '2300.00', 1, '2022-05-24', '2022-05-25'),
(51, 56, '商務套房', '6900.00', 3, '2022-05-11', '2022-05-12'),
(52, 57, '商務套房', '6900.00', 3, '2022-05-25', '2022-05-27'),
(53, 57, '雅緻客房', '14000.00', 5, '2022-05-18', '2022-05-20');

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

-- --------------------------------------------------------

--
-- 資料表結構 `transaction`
--

CREATE TABLE `transaction` (
  `tno` int(11) NOT NULL,
  `transmid` char(8) NOT NULL,
  `transtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `transaction`
--

INSERT INTO `transaction` (`tno`, `transmid`, `transtime`) VALUES
(46, '1', '2022-05-29 12:44:47'),
(55, '1', '2022-05-29 01:08:00'),
(56, '1', '2022-05-29 01:13:56'),
(57, '1', '2022-05-29 04:02:38');

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
-- 資料表索引 `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tno`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--
ALTER TABLE `product`
  MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `record`
--
ALTER TABLE `record`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
