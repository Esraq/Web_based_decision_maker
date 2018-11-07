-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 10:08 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `image` varchar(200) NOT NULL,
  `launch` date NOT NULL,
  `g2` int(11) NOT NULL,
  `g3` int(11) NOT NULL,
  `g4` int(11) NOT NULL,
  `dim` varchar(25) NOT NULL,
  `weight` int(11) NOT NULL,
  `disp_type` varchar(20) NOT NULL,
  `size` double NOT NULL,
  `resolution` int(11) NOT NULL,
  `protection` varchar(50) NOT NULL,
  `OS` varchar(25) NOT NULL,
  `CPU` varchar(100) NOT NULL,
  `core` int(11) NOT NULL,
  `clock` double NOT NULL,
  `vrate` int(11) NOT NULL,
  `GPU` varchar(20) NOT NULL,
  `front` double NOT NULL,
  `back` double NOT NULL,
  `battary` int(11) NOT NULL,
  `b_type` varchar(50) NOT NULL,
  `ram` int(11) NOT NULL,
  `rom` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `design` double NOT NULL,
  `perform` double NOT NULL,
  `cam` double NOT NULL,
  `batt` double NOT NULL,
  `rate` double NOT NULL,
  `view` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `name`, `brand`, `image`, `launch`, `g2`, `g3`, `g4`, `dim`, `weight`, `disp_type`, `size`, `resolution`, `protection`, `OS`, `CPU`, `core`, `clock`, `vrate`, `GPU`, `front`, `back`, `battary`, `b_type`, `ram`, `rom`, `price`, `design`, `perform`, `cam`, `batt`, `rate`, `view`, `count`) VALUES
(3, 'Samsung Galaxy S7 edge', 'Samsung', 'app/view/images/samsunggalaxys7edge.jpg', '2016-03-12', 1, 1, 1, '150.9 x 72.6 x 7.7 mm', 157, 'AMOLED', 5.5, 1440, 'Corning Gorilla Glass 4', 'Android 6.0 (Marshmallow)', 'Qualcomm MSM8996 Snapdragon 820', 4, 2.15, 9, 'Adreno 530 ', 5, 12, 3600, 'Non-removable Li-Ion', 4, 128, 65000, 9.4285714285714, 9.7619047619048, 9, 9, 9, 309, 21),
(4, 'Xiaomi Redmi Note 4', 'Xiaomi', 'app/view/images/xiaomi-redmi-note-4-sn.jpg', '2017-01-19', 1, 1, 1, '151 x 76 x 8.5 mm', 165, 'IPS LCD', 5.5, 1080, 'No', 'Android 6.0', 'Qualcomm MSM8953 Snapdragon 625', 8, 2, 6, 'Adreno 506', 5, 13, 4100, 'Non-removable Li-Ion', 4, 64, 18000, 8.7, 9, 8.3, 9.5, 9.1, 201, 20),
(5, 'Samsung Galaxy S8', 'Samsung', 'app/view/images/samsung-galaxy-s8-.jpg', '2017-04-21', 1, 1, 1, '148.9 x 68.1 x 8 mm ', 155, 'Super AMOLED', 5.8, 1440, 'Corning Gorilla Glass 5', 'Android 7.0', 'Qualcomm MSM8998 Snapdragon 835', 8, 2.35, 10, 'Adreno 540', 8, 12, 3000, 'Non-removable Li-Ion', 4, 64, 78000, 10, 9.7, 9.8, 9.8, 9.8, 913, 20),
(6, 'Google Pixel 2', 'Google', 'app/view/images/google-pixel-2.jpg', '2017-10-18', 1, 1, 1, '145.7 x 69.7 x 7.8 mm', 143, 'AMOLED', 5, 1080, 'Corning Gorilla Glass 5', 'Android 8.0', 'Qualcomm MSM8998 Snapdragon 835', 8, 2.35, 10, 'Adreno 540', 8, 12.2, 2700, 'Non-removable Li-Ion', 4, 128, 60000, 9.5, 9.8, 9.8, 9.5, 9.8, 815, 20),
(7, 'Apple iPhone X', 'Apple', 'app/view/images/apple-iphone-x.jpg', '2017-11-03', 1, 1, 1, '143.6 x 70.9 x 7.7 mm', 174, 'Super AMOLED', 5.8, 1440, 'Scratch-resistant glass', 'iOS 11.1', 'Apple A11 Bionic', 6, 2.5, 10, 'Apple GPU ', 7, 12, 2716, 'Non-removable Li-Ion', 3, 256, 84000, 10, 9.6, 9.8, 9.9, 10, 1043, 20),
(8, 'Huawei Mate 10 Pro', 'Huawei', 'app/view/images/huawei-mate10-pro.jpg', '2017-11-17', 1, 1, 1, '154.2 x 74.5 x 7.9 mm', 178, 'AMOLED', 6, 1080, 'Corning Gorilla Glass', 'Android 8.0', 'Hisilicon Kirin 970', 8, 2.4, 9, 'Mali-G72 MP12', 8, 20, 4000, 'Non-removable Li-Ion', 6, 128, 60000, 10, 9.249261083743841, 9.8, 9.5, 9.1, 209, 20),
(9, 'saddasdsa', 'asdfasdfasdf', 'app/view/images/m1510388339.jpg', '2017-11-10', 1, 1, 0, '12412412ff', 257, 'sdfadfv', 4, 1080, 'fdvfdavadfv', 'greragrewg', 'aewfawfwef', 1, 2, 4, 'dsdfsdfs', 5, 3, 3212, 'adfgdffv', 3, 2, 2354, 2.94427710344, 2.8079115960361, 8, 10, 10, 86, 22),
(19, 'saddasdxxxx', 'asdfasdfasdf', 'app/view/images/m1510388339.jpg', '2017-11-10', 1, 1, 0, '12412412ff', 257, 'sdfadfv', 4, 1080, 'fdvfdavadfv', 'greragrewg', 'aewfawfwef', 1, 2, 4, 'dsdfsdfs', 5, 3, 3212, 'adfgdffv', 3, 2, 2354, 2.94427710344, 2.8079115960361, 8, 10, 10, 85, 22);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_type` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `post_title` text NOT NULL,
  `post_text` text NOT NULL,
  `publish_date` datetime NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_type`, `user_id`, `user_name`, `post_title`, `post_text`, `publish_date`, `image`) VALUES
(6, 'news', 8, 'Osama', 'ZTE confirms Axon 7 will have a successor', 'ZTE has confirmed that there will be a successor to the Axon 7 smartphone. The confirmation came from the Chinese company\'s US subsidiary in response to a user query on Twitter. In the tweet, the company also termed the Axon 7 as \"incredibly successful.\"\r\n\r\nSadly, there is currently no information on exactly when the handset will arrive. The Axon 7 was made official by the Chinese company back in May 2016, and went on sale the following month. It arrived in the US in July 2016, carrying a $400 price tag.', '2017-09-04 00:00:00', 'app/view/images/doasdasdawnload.jpg'),
(7, 'news', 3, 'Anirudhya', 'Google Pixel 2 XL charging speed capped at 10.5W', 'Okay, so this one isn\'t an issue as much as a miscommunication. Despite Google\'s newest, premium Pixel smartphone shipping with an 18-watt USB Power Delivery 2.0 wall adapter, the phone\'s charging speed is capped at 10.5W.\r\n\r\nAccording to a test performed by Nathan K over on Google Plus, the Google Pixel 2 XL has been proven to be charging \"slow\". This confirms reports of many users who feel that the Pixel 2 XL was not charging at its full potential.\r\n\r\nThe Pixel 2 XL comes with a wall adapter, which is advertised on Google\'s site, to charge the phone with up to 18W of current. Nathan K\'s wattage/temperature graph is shown below.\r\n\r\nNotice how the wattage starts at about 15W in the very beginning, but quickly switches down to just over 10W in the graph. The phone continues to charge at this rate until about 50 minutes into the cycle, where it begins to gradually slow down until the very end of the cycle, where charging is completed, 2 and a half hours after starting.\r\nIn our review, we usually run a test with a depleted battery as to how much capacity the included charger can restore within 30 minutes of starting. The Google Pixel 2 XL charged to 35% in 30 minutes, which was well below other smartphones in the same category, around upper 40s and lower 50s in the percentages.\r\n\r\nSeveral fast-charging methods switch between multiple voltages. In this wall adapter\'s case, the phone should charge at 9V (up to 2A) when its battery is depleted below something like 40% or 50% capacity. The Pixel 2 XL is not switching between voltages and is sticking to the single 9V and not going above 1.1A or 1.2A (around 10W). Note that this wattage is only with the included wall adapter, the phone will have to charge at the lower 5V voltage when plugged into a computer\'s USB port.\r\n\r\nOne possible reason, according to Nathan K for the phone\'s charging current to be tuned so conservatively is to save the battery from the same degradation issues that the Google Nexus 6P faced. An incorrectly programmed Power Management chip on the Pixel 2 XL is an entirely plausible scenario, considering the other PR nightmares that Google has faced with the Pixel 2 XL already, including one that could face court.\r\n\r\nThe original Google Pixel also had a similar situation when it charged at a maximum 15W over an advertised 18W. The smaller battery of the Google Pixel justified this difference in wattage. This is a 58% difference.\r\n\r\nGoogle was not immediately available for comment.', '2017-11-01 00:00:00', 'app/view/images/downlosadasddsddscddscad.jpg'),
(8, 'news', 8, 'Osama', 'Essential Phone gets a price cut of about $315 in Canada', 'When Essential announced price cut for the PH-1 in the US recently, it was revealed that units in Canada will also get discounted, although exact details weren\'t available. Well, that changes now, as the company has officially announced price drop for Canada as well.\r\nSo as you can see, the handset has dropped to CAD 650, which currently translates into around $510. That\'s a CAD 400 (around $315) discount, given the phone launched in the country carrying a CAD 1,050 price tag (around $820).\r\n\r\nIn Canada, the PH-1 is only available through carrier Telus at the moment (unlocked units are currently not available at all). For more information, or to make a purchase, head to the Source link below.', '2017-11-02 00:00:00', 'app/view/images/downloessesad.jpg'),
(9, 'previews', 8, 'Osama', 'Razer Phone Preview', 'It\'s official - computer hardware company Razer is stepping into the smartphone market with the Razer Phone. We were invited to attend the announcement event and, the way these things work, we got to spend a few precious moments with one of the Razer Phones.\r\n\r\nAs with all things Razer, gaming is the main theme here. And as any self-respecting true gamer will tell you, fps and Hz are things you can never have too much of. So Razer went ahead and fitted the handset with a 120Hz display, which they call Ultramotion. That\'s twice the usual refresh rate, and a first on a global release phone (there\'s the Japan-only Aquos R from Sharp). It\'s a proper 16:9 5.7\" QHD unit, so you\'re not trading off pixels for refresh rate.\r\n\r\nYou\'re getting the latest Qualcomm Snapdragon 835 chipset, and should we mention the Adreno 540 GPU before the octa-core Kryo CPU, this being a gaming rig? We just did. Razer went all out and equipped the Phone with 8GB of RAM, but took a more restrained approach with storage - 64 gigs isn\'t what it used to be. You get a microSD card for expanding that though - so no real reason to worry.\r\n\r\nLittle restraint has been shown in the audio department too - the phone comes with dual front-facing speakers, each with its own dedicated amp, and a THX certification.\r\n\r\nIt\'s all powered by a 4,000mAh battery and the smartphone features Qualcomm\'s QuickCharge 4+ - gaming\'s never been easy on them cells, so you\'d best have more battery and faster charging. And this time around you actually get a 24W QuickCharge 4 charger in the box, unlike other Snapdragon 835 devices.\r\n\r\nThe looks and build is also very Razerly - a boxy rectangle made of metal shows the Phone means business. Meanwhile, the grown-ups among us appreciate the choice of a white logo on the back. Of course, die-hard fans can still get the bright green logo on the Limited Edition version - it changes nothing but the color of the lock.\r\n\r\nRazer seemingly didn\'t get the memo about flagships going all bezelless this year, as its phone has a display frame almost as thick as that of the iPhone 8 Plus (and the proportions of that one date back to 2014). At least here you have a couple of powerful speakers flanking the display so it has something to show for it. And if our recent survey is anything to go by many will be happy with the trade.\r\n\r\nThe speakers themselves are really impressive. They produce deep and impressively loud sound - we had no trouble hearing them over an entire crowd of talking people. The Dolby Atmos branding might be the as the one seen on the ZTE Axon 7, but the Razer Phone clearly has superior speakers.\r\n\r\nRazer seemingly didn\'t get the memo about flagships going all bezelless this year, as its phone has a display frame almost as thick as that of the iPhone 8 Plus (and the proportions of that one date back to 2014). At least here you have a couple of powerful speakers flanking the display so it has something to show for it. And if our recent survey is anything to go by many will be happy with the trade.\r\n\r\nThe speakers themselves are really impressive. They produce deep and impressively loud sound - we had no trouble hearing them over an entire crowd of talking people. The Dolby Atmos branding might be the as the one seen on the ZTE Axon 7, but the Razer Phone clearly has superior speakers.\r\n', '2017-10-25 00:00:00', 'app/view/images/downrazload.jpg'),
(10, 'previews', 3, 'Anirudhya', 'Google Pixel 2 XL review', 'Google has come a long way since the days of Nexus smartphones. This is only the second iteration of the Google Pixel and it shows how much Google\'s software and hardware have evolved in the past year. Both Pixel smartphones got a refined, yet simpler appearance. This review is specifically for the larger Pixel 2 XL. We\'ll be reviewing the smaller Pixel 2 separately.\r\n\r\nThis model has a couple of differences over the smaller Pixel 2. For starters, the Pixel 2 XL has a larger 6-inch display with the 18:9 aspect ratio of display that has taken 2017 by storm. This, and the Pixel 2 XL gets a 21% larger battery than the 5-inch Pixel 2.\r\nGoogle offers the latest Qualcomm processor on both Pixels, along with its powerful HDR+ algorithm for taking photos. Combine these with Google\'s unparalleled Android experience, not to mention Google\'s unlimited photo storage with its official Photos app, and software updates directly from Google.\r\n\r\nIs this, however, enough to get Android purists on-board with the Google\'s best vanilla Android Experience? That\'ll all depend on how much purists are willing to pay for such an experience, which starts at $850 in the US, and might soar even higher in other markets.\r\n\r\nYou\'re getting the latest Qualcomm Snapdragon 835 chipset, and should we mention the Adreno 540 GPU before the octa-core Kryo CPU, this being a gaming rig? We just did. Razer went all out and equipped the Phone with 8GB of RAM, but took a more restrained approach with storage - 64 gigs isn\'t what it used to be. You get a microSD card for expanding that though - so no real reason to worry.\r\n\r\nLittle restraint has been shown in the audio department too - the phone comes with dual front-facing speakers, each with its own dedicated amp, and a THX certification.\r\n\r\nIt\'s all powered by a 4,000mAh battery and the smartphone features Qualcomm\'s QuickCharge 4+ - gaming\'s never been easy on them cells, so you\'d best have more battery and faster charging. And this time around you actually get a 24W QuickCharge 4 charger in the box, unlike other Snapdragon 835 devices.\r\n\r\nThe looks and build is also very Razerly - a boxy rectangle made of metal shows the Phone means business. Meanwhile, the grown-ups among us appreciate the choice of a white logo on the back. Of course, die-hard fans can still get the bright green logo on the Limited Edition version - it changes nothing but the color of the lock.\r\n\r\nRazer seemingly didn\'t get the memo about flagships going all bezelless this year, as its phone has a display frame almost as thick as that of the iPhone 8 Plus (and the proportions of that one date back to 2014). At least here you have a couple of powerful speakers flanking the display so it has something to show for it. And if our recent survey is anything to go by many will be happy with the trade.\r\n\r\nThe speakers themselves are really impressive. They produce deep and impressively loud sound - we had no trouble hearing them over an entire crowd of talking people. The Dolby Atmos branding might be the as the one seen on the ZTE Axon 7, but the Razer Phone clearly has superior speakers.\r\n\r\nRazer seemingly didn\'t get the memo about flagships going all bezelless this year, as its phone has a display frame almost as thick as that of the iPhone 8 Plus (and the proportions of that one date back to 2014). At least here you have a couple of powerful speakers flanking the display so it has something to show for it. And if our recent survey is anything to go by many will be happy with the trade.\r\n\r\nThe speakers themselves are really impressive. They produce deep and impressively loud sound - we had no trouble hearing them over an entire crowd of talking people. The Dolby Atmos branding might be the as the one seen on the ZTE Axon 7, but the Razer Phone clearly has superior speakers.', '2017-10-24 00:00:00', 'app/view/images/gsmarena_009.jpg'),
(12, 'news', 8, 'Osama', 'New Title Title Title Title Title Title Title Title Sdfsdfds', 'new When Essential announced price cut for the PH-1 in the US recently, it was revealed that units in Canada will also get discounted, although exact details weren\\\'t available. Well, that changes now, as the company has officially announced price. When Essential announced price cut for the PH-1 in the US recently, it was revealed that units in Canada will also get discounted, although exact details weren\\\'t available. Well, that changes now, as the company has officially announced priceWhen Essential announced price cut for the PH-1 in the US recently, it was revealed that units Canada will also get discounted, although exact details weren\\\'t available. Well, that changes now, as the company has officially announced priceWhen Essential announced price cut for the PH-1 in the US recently, it was revealed that units in Canada will also get discounted, although exact details weren\\\'t available. Well, that changes now, as the company has officially announced priceWhen Essential announced price cut for the PH-1 in the US recently, it was revealed that units in Canada will also get discounted, although exact details weren\\\'t available. Well, that changes now, as the company has officially announced priceWhen Essential announced price cut for the PH-1 in the US recently, it was revealed that units in Canada will also get discounted, although exact details weren\\\'t available. Well, that changes now, as the company has officially announced priceWhen Essential announced price cut for the PH-1 in the US recently, it was revealed that units in Canada will also get discounted, although exact details weren\\\'t available. Well, that changes now, as the company has officially announced price\\\"\"', '2017-11-11 09:23:46', 'app/view/images/p1510372273.jpg'),
(13, 'news', 3, 'Anirudhya', 'asdsadsd asdasdsad', 'asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad  asdsadsd asdasdsad', '2017-11-11 10:10:40', 'app/view/images/p1510373441.jpg'),
(14, 'news', 3, 'Anirudhya', 'dfgdfgdfg', 'sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg  sdfgfsg', '2017-11-11 14:04:17', 'app/view/images/p1510387458.jpeg'),
(16, 'news', 6, 'Asd', 'Adsdad Safdasdfa Newx', 'adsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfaadsdad safdasdfa', '2017-11-11 23:57:00', 'app/view/images/p1510423021.jpg'),
(19, 'preview', 3, 'Anirudhya', 'Preview Title', 'preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body preview body', '2017-11-12 02:05:27', 'app/view/images/p1510430728.jpeg'),
(20, 'preview', 6, 'Asd', 'My Title', 'my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body my body', '2017-11-12 02:30:50', 'app/view/images/p1510432250.jpeg'),
(21, 'preview', 6, 'Asd', 'My Prev', 'my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body', '2017-11-12 02:40:29', 'app/view/images/p1510432830.jpg'),
(22, 'preview', 6, 'Asd', 'My Prev', 'my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body my prev body', '2017-11-12 02:44:23', 'app/view/images/p1510433063.jpg'),
(23, 'preview', 6, 'Asd', 'New New Title Title Title Title Title Title Title Title Sdfsdfdssa', 'body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body body', '2017-11-12 02:59:25', 'app/view/images/p1510433965.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `type`) VALUES
(3, 'Anirudhya', 'Duyti', 'adchinmoy@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'super'),
(6, 'Asd', 'As', 'as@asd.asd', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin'),
(8, 'Osama', 'Almas', 'ggosaamaa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin'),
(9, 'Gg', 'Asd', 'gg@gma.ca', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin'),
(10, 'Seam', 'Hasan', 'seam@gma.c', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
