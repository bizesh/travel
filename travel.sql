-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 04:02 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2017-10-26 14:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `FromDate` varchar(100) NOT NULL,
  `ToDate` varchar(100) NOT NULL,
  `Comment` mediumtext NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `CancelledBy` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`BookingId`, `PackageId`, `UserEmail`, `FromDate`, `ToDate`, `Comment`, `RegDate`, `status`, `CancelledBy`) VALUES
(9, 1, 'demo@test.com', '05/19/2017', '05/21/2017', 'demo test demo test', '2017-05-14 07:45:11', 2, 'a'),
(10, 5, 'abc@g.com', '05/22/2017', '05/24/2017', 'test test t test test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test ttest test t', '2017-05-14 07:56:26', 2, 'a'),
(11, 3, 'bizeshghi@gmail.com', '2017-08-02', '2017-08-03', 'nn', '2017-08-21 12:23:46', 2, 'a'),
(12, 0, 'demodemo@yahoo.com', '2017-08-23', '2017-08-14', 'Demo book by bizesh', '2017-08-22 15:39:38', 0, NULL),
(13, 0, 'bizesh@gmail.com', '2017-06-22', '2017-06-06', 'kkk', '2017-08-23 10:38:18', 0, NULL),
(14, 0, 'bizesh@gmail.com', '2017-08-23', '2017-06-06', 'DBSYD', '2017-08-25 06:19:19', 0, NULL),
(15, 0, 'bizesh@gmail.com', '2017-08-23', '2017-06-06', 'fbysfh', '2017-08-25 06:27:56', 0, NULL),
(16, 1, 'bizesh@gmail.com', '2017-06-22', '2017-06-06', 'fdssdshdyyyyyyyyyyyyyyy', '2017-08-25 06:31:10', 2, 'u'),
(17, 4, 'bizesh@gmail.com', '2017-08-23', '2017-08-14', 'segfninaad', '2017-08-25 06:31:38', 2, 'a'),
(18, 1, 'abcde@gmail.com', '2017-06-22', '2017-06-06', 'hh', '2017-10-28 03:29:54', 2, 'u'),
(19, 2, 'abcde@gmail.com', '2017-06-22', '2017-08-14', 'cokment', '2017-10-28 03:31:28', 2, 'u'),
(20, 1, 'abcde@gmail.com', '11/04/2017', '11/01/2017', 'cc', '2017-11-01 13:05:56', 2, 'a'),
(21, 1, 'abcde@gmail.com', '12/08/2017', '11/06/2017', 'cc', '2017-11-01 13:06:56', 1, NULL),
(22, 3, 'abcde@gmail.com', '11/01/2017', '11/05/2017', 'POkhara', '2017-11-04 05:55:04', 2, 'a'),
(23, 5, 'abcde@gmail.com', '11/29/2017', '11/30/2017', 'cccc', '2017-11-04 07:25:42', 2, 'a'),
(24, 6, 'abcde@gmail.com', '11/23/2017', '11/21/2017', 'noo', '2017-11-04 07:28:48', 2, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) NOT NULL,
  `PackageType` varchar(150) NOT NULL,
  `PackageLocation` varchar(100) NOT NULL,
  `PackagePrice` int(11) NOT NULL,
  `PackageFetures` varchar(255) NOT NULL,
  `PackageDetails` mediumtext NOT NULL,
  `PackageImage` varchar(100) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`) VALUES
(1, 'Everest Base Camp Private Trek', 'General', 'Everest Base Camp ( 5,364 m)', 100, 'Air Condition, Luxury hotels and Experienced guides.', 'Everest Base Camp (EBC NEPAL) is the most famous trekking destination in the world and most trekked trekking trail in Nepal. Every year more trekkers are reaching the base camp. Now Everest Base Camp Trek is an adventure of 12 days trekking in the Himalayas. For this trek, you will need 15days in total including arrival and departure to/from Kathmandu. EBC trek starts with a 35 min flight from Kathmandu to Lukla, the trek starting point.', '14287acc-b5cb-46db-b8b4-e3ffe652fc0d.png', '2017-05-13 14:23:44'),
(2, 'Upper Mustang', 'General', 'Mustang - Manang', 400, 'Frree wifi, pick up and drop etc', 'Upper Mustang Trek which offers a spectacular trekking into the remote Trans-Himalayan mountain area with Tibetan influence culture. The high desert region of the Tibetan influence, Kaligandaki, from the Tibetan border south to Kagbeni is generally referred to as Upper Mustang. Explore the thousand years of old monastery, caves, local tribes and scenic beauties of the different landscapes. Make an adventure starting from world''s deepest gorge Kaligandaki Region into world''s highest regions of Lo-Mangthang Valley that passes through an almost tree-less barren landscape, a steep rocky trail up and down hill and panoramic views of Nilgiri, Annapurna, Dhaulagiri and several other peaks. The trek passes through high peaks, passes, glaciers, and alpine valleys. The thousands years of isolation has kept the culture, lifestyle and heritage remain unchanged for centuries and to this date. The houses in Mustang are mostly made from stone and sun baked mud bricks. The city wall and the four storey palace in Lo-Manthang are some of the beautiful architectures of Mustang region.\r\nUpper Mustang Trek begins with a spectacular scenic flight of 20 minutes over the mountains with views of 8,000ers such as Annapurna & Dhaulagiri, brings you at Jomsom. This trek allows us to explore a weird and wonderful landscape of eroded conglomerate cliffs, colored by natural earth coloring - red, yellow, brown and blue. Trekking across passes of up to 4100m, we also trek through a succession of picturesque white painted Mustang villages and Tibetan monasteries, set against a backdrop of the distant snow-capped peaks of the Himalayas. We have a day to explore our ultimate destination for excursion in Lo Manthang, a fairy-tale walled city and the capital of Mustang. This enlightening trekking adventure to Mustang in Nepal entices to them who love to explore special part of the Himalaya and finally by flight from Jomsom to Pokhara.', 'phpgurukul-1.png', '2017-05-13 15:24:26'),
(3, 'Pokhara Sarangkot Tour', 'Family', 'Pokhara', 150, 'Traditional Nepalese and Newari Culture', 'Pokhara is the famous tourist destination of Nepal which is situated towards 200km west from the Kathmandu city. Pokhara Sarangkot hiking is the shot trek to the hilltop of the Sarangkot which offers the unimpeded panoramic view of the mountains as well as the Pokhara valley. From the valley it takes two hours walk up the staircase to reach the hilltop of the Sarangkot. From the top of the Sarangkot you can see the beautiful panoramic view of the mountains like Annapurna (8091m.), Machhapuchhre (Fishtail), Dhaulagiri (8167m.), Ganesh Himal (7422m.), Manaslu (8156m.) and many more. From there you also observe the beautiful view of the Pokhara valley with all its natural attraction.', 'complaints.jpg', '2017-05-13 16:00:58'),
(4, 'Jungle Safari in Nepal', 'Family and Couple', 'Chitwan and Bardiya', 2000, 'Five star hotel/ Luxury transport', 'In Nepal, Chitwan and Bardia are two hot dishes on the menu. Pick Chitwan as this is Nepals most popular National Park offering excellent opportunity to see Royal Bengal Tigers, One horned Rhino, crocodile and thrilling wilderness experience into its deep and thick jungle. Pick Bardiya also, as this is another National Park, which offers excellent jungle safari. Here too you can ride on an elephant or a take four wheel to discover some of Nepals unspoiled natural habitats. Most jungle safari consists of canoe rides on the jungle rivers, nature walks, birds watching excursions and quick tours around the villages to discover unique culture and traditions of the local village people. There are also scheduled cultural-musical programs performed by the villages, which are also in the Jungle Safari itinerary.', 'images.jpg', '2017-05-13 22:39:37'),
(5, 'Annapurna Base Camp Trek', 'General', 'Kathmandu-Pokhara', 300, 'Close look to  mountain and famiiar with Gurung and Magar village  with their culture.', 'Trekking in Annapurna region is very popular trekking in Nepal. Annapurna Base Camp Trekking is to the base camp of Mt. Annapurna which is the 10th highest mountain all over the world. Trekking in this region provides the finest view of Annapurna I (8091m.), Mt. Fang (7647m.), Gangapurna (7454m.), Annapurna South (7273m.), Mt. Fishtail (6997m.), Glacier Dome and hundreds of mountains and peaks. Trekking in Annapurna is one of the pleasant adventures with the opportunities of exploring culturally rich villages, green valleys and hills, forests of rhododendron, flowery slopes, pasture lands and river gorges including very impressive sunrise and sunset views in Himalayan Range.\r\nAnnapurna region is a conservation area where you can see different rare wild animals in forest of rhododendron, oak, pine and many other trees. Visitors can see different kinds of birds and animals including some rare animals like snow leopard, musk deer etc. as the region is a conserved area by ACAP. The flowering vegetation along the way makes anyone feel it is the natural garden. The exploration of unique culture of Magar and Gurung ethnicity who are the indigenous tribes of Nepal’s hillside can be rewarding for the visitors as they have unique culture and lifestyle of their own.', 'coorg-hill-station1.jpg', '2017-05-13 22:42:10'),
(6, 'Lumbini Tour', 'VIP', 'Lumbini', 400, 'UNESCO World heritage Site', 'Lumbini listed at UNESCO world heritage site is a top destination for Buddhist pilgrims and traveler. Maya Devi temple, puskarini or holy pond, (where Buddha''s mother took ritual dip prior to his birth), ruins of ancient monasteries, a sacred Bodhi tree, Ashokan pillar etc. are main attraction of Lumbini. More than 4, 00,000 of Buddhist pilgrims and traveler every year visits this holist place and indulged at chanting, meditation. Lumbini is famous for archeological in association with Buddha''s born from central feature.\r\nSpeedy Travels And Tours Nepal Pvt. Ltd offers you both short and long  Lumbini travel package and its surrounding. Arrival at lumbini is possible by 8 hour drive by road from Kathmandu, 35 minute flight up to Bhairawa airport and half hour drive from airport or half hour driving from Sunauli (Nepal-India boarder).', 'mamp-pro-logo-big.png', '2017-05-14 08:01:08'),
(8, 'Nagarkot Sight Seeing', 'Silver', 'Kathmandu', 65, 'Four wheel transport / AC', 'Nagarkot is famous for Sunshine view and sunset view .Earlier morning from view tower you can have intact view of sunshine along with splendid view of Mountains like Mt Eveerest, Manasalu, Ganesh Himal, Langtang, Dorje Lakpa, Choyu, Gauri Shanker(mountain of God ) Annapurna etc. with range of long distance hill, jungle, village etc.Beside scenic view you can indulge for hiking around hillside, Village tour, Mountain bike tour, astronomical view centre, place for mediation, honeymoon trip, horse riding, picnic spot, place for seminar or conference, one day biking tour etc.\r\n\r\n\r\nTransportation Access: Public bus from city bus park or old bus park in Kathmandu or from Bhaktapur, daily tourist bus service from Lainchour, Thamel (front of Malla hotel) ,Reserve vehicle service(Taxi, Jeep, car, cab, bus, van or any type) from Thamel or any where inside Kathmandu valley is available for getting there', 'kit.png', '2017-10-27 12:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `MobileNumber` char(10) NOT NULL,
  `EmailId` varchar(70) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`) VALUES
(1, 'Anuj kumar', '1111111111', 'anuj@gmail.com', '5c428d8875d2948607f3e3fe134d71b4', '2017-05-10 10:38:17'),
(3, 'sarita', '9999999999', 'sarita@gmail.com', '5c428d8875d2948607f3e3fe134d71b4', '2017-05-10 10:50:48'),
(7, 'test', '7676767676', 'test@gm.com', 'f925916e2754e5e03f75dd58a5733251', '2017-05-10 10:54:56'),
(8, 'Anuj kumar', '9999999999', 'demo@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-05-14 07:17:44'),
(9, 'XYZabc', '3333333333', 'xyz@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-05-14 07:25:13'),
(10, 'Anuj Kumar', '4543534534', 'demo@test.com', 'f925916e2754e5e03f75dd58a5733251', '2017-05-14 07:43:23'),
(11, 'XYZ', '8888888888', 'abc@g.com', 'f925916e2754e5e03f75dd58a5733251', '2017-05-14 07:54:32'),
(12, 'BIjesh Ghimire', '8976543234', 'bizeshghi@gmail.com', 'ab56b4d92b40713acc5af89985d4b786', '2017-08-21 12:23:06'),
(13, 'Bizesh Ghimire', '9803273801', 'bizesh@gmail.com', 'abcdefgh', '2017-08-22 07:53:35'),
(14, 'Demo Demo', '1234567890', 'demodemo@yahoo.com', 'demodemo', '2017-08-22 07:56:24'),
(15, 'Bizesh Ghimire', '9803273801', 'bizesh@gmail.com', 'abcdefgh', '2017-08-22 08:04:12'),
(16, 'hghvv', '7654345678', 'bizeshghi@gmail.com', 'bhygvcft', '2017-08-23 04:52:03'),
(17, 'hghvv', '7654345678', 'bizeshghi@gmail.com', 'ddd', '2017-08-23 04:53:14'),
(18, 'Bizesh Ghimire', '9803273801', 'bizeshghi@gmail.com', 'bizesh123', '2017-08-23 10:01:48'),
(19, 'Bizesh Ghimire', '9803273801', 'bizesh@gmail.com', '8004b25fa669c1bc98ea4bbdf1acec56', '2017-08-23 10:04:14'),
(20, 'Bizesh Ghimire', '9803273801', 'bizeshghi@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '2017-08-24 02:09:22'),
(21, 'Bizesh Ghimire', '9803273801', 'bizesh@gmail.com', 'e8dc4081b13434b45189a720b77b6818', '2017-08-25 06:18:32'),
(22, 'Bizesh Ghimire', '9876543', 'abcde@gmail.com', '2f8c3c183d5544580423ac80d97741e5', '2017-10-26 14:07:56'),
(23, 'Gaurav Ghimirre', '0987654321', 'bjhfdfvhj@yahoo.com', 'e807f1fcf82d132f9bb018ca6738a19f', '2017-10-27 03:33:30'),
(24, 'dshgfshj', '1234567890', 'hasbh890sb@gmail.com', '12345678', '2017-10-27 03:35:18'),
(25, 'dshgfshj', '1234567890', 'hasbh890sb@gmail.com', '12345678', '2017-10-27 03:36:38'),
(26, 'jsvhsdhfv', '1234567890', 'fvbjdb@yahoo.com', '12345678', '2017-10-27 03:38:21'),
(27, 'bdhfbdjf', '9803273801', 'bizeshghi@gmail.com', '123456789', '2017-10-27 03:39:42'),
(28, 'bdhfbdjf', '9803273801', 'bizeshghi@gmail.com', 'qwertyuio', '2017-10-27 03:39:56'),
(29, 'Bizesh Ghimire', '9803273801', 'bizeshghi@gmail.com', '12345678', '2017-10-28 03:19:59'),
(30, 'Bizesh Ghimire', '9803273801', 'bizeshghi@gmail.com', '12345678', '2017-10-28 03:19:59'),
(31, 'Bizesh Ghimire', '9803273801', 'bizeshghi@gmail.com', '12345678', '2017-10-28 03:20:43'),
(32, 'Bizesh Ghimire', '9803273801', 'bizeshghi@gmail.com', '1234567', '2017-10-28 03:20:51'),
(33, 'fhjsdvh', '87846', 'bizeshghi@gmail.com', '1234', '2017-10-28 03:22:25'),
(34, 'Bizesh Ghimire', '9803273801', 'bizesh@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2017-11-03 11:19:56'),
(35, 'Bizesh Ghimire', '9803273801', 'bizeshghi@gmail.com', '123456789', '2017-11-03 11:20:54'),
(36, 'Bizesh Ghimire', '9803273801', 'bizeshghi@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2017-11-03 11:22:12'),
(37, 'Bizesh Ghimire', '9803273801', 'bizeshghi@gmail.com', '5211bda24f5c44114c473a74b8bdf361', '2017-11-03 11:22:21'),
(38, 'Bizesh Ghimire', '9803273801', 'bizeshghi@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '2017-11-03 11:24:54'),
(39, 'Bizesh Ghimire', '9803273801', 'bizeshghi@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '2017-11-03 11:26:41'),
(40, 'Bizesh Ghimire', '9803273801', 'bizeshghi@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2017-11-03 11:28:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
