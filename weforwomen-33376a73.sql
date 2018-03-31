-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: shareddb-i.hosting.stackcp.net
-- Generation Time: Mar 31, 2018 at 11:34 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weforwomen-33376a73`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhar`
--

CREATE TABLE `aadhar` (
  `UID` varchar(2555) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(2555) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aadhar`
--

INSERT INTO `aadhar` (`UID`, `name`, `mobile`) VALUES
('824837593845', 'Kevin Lobo', '9235668395'),
('864578935454', 'Meldon Dias', '9648521348'),
('649875856545', 'Renita Lobo', '9654585657'),
('378965412365', 'Akshay Brid', '9654587458'),
('665989789955', 'Gyanendra Maurya', '9654575445'),
('965845675485', 'Maria Pitashe', '9654578123'),
('965874523154', 'Molly Polly', '9587456321'),
('856457321585', 'Prerna Singh', '9658745213'),
('965874585231', 'Dhruvin Shetty', '9658237456'),
('754658213456', 'Mandar Borkar', '7856421589'),
('11', '1', '1'),
('123456789', 'kevin', '9999999999'),
('824837593845', 'Kevin Lobo', '9235668395'),
('864578935454', 'Meldon Dias', '9648521348'),
('649875856545', 'Renita Lobo', '9654585657'),
('378965412365', 'Akshay Brid', '9654587458'),
('665989789955', 'Gyanendra Maurya', '9654575445'),
('965845675485', 'Maria Pitashe', '9654578123'),
('965874523154', 'Molly Polly', '9587456321'),
('856457321585', 'Prerna Singh', '9658745213'),
('965874585231', 'Dhruvin Shetty', '9658237456'),
('754658213456', 'Mandar Borkar', '7856421589'),
('11', '1', '1'),
('123456789', 'kevin', '9999999999');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `contact_id` int(50) NOT NULL,
  `user_id` int(50) DEFAULT NULL,
  `user_username` varchar(50) DEFAULT NULL,
  `org_username` varchar(50) DEFAULT NULL,
  `org_id` int(11) DEFAULT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `message` varchar(100) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`contact_id`, `user_id`, `user_username`, `org_username`, `org_id`, `name`, `surname`, `email`, `phone`, `message`, `timestamp`) VALUES
(0, NULL, NULL, NULL, NULL, 'Kevin', 'sadads', 'hsbdaj@yash.com', 848484848, 'sadasas', '2018-03-21 08:44:01.774296'),
(0, NULL, NULL, NULL, NULL, 'prerna', 'singh', 'prerna2@gmail.com', 8424841141, 'need help ', '2018-03-31 07:28:39.034614');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `DistCode` int(11) NOT NULL,
  `StCode` int(11) DEFAULT NULL,
  `DistrictName` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DistCode`, `StCode`, `DistrictName`) VALUES
(1, 32, 'Adilabad'),
(2, 34, 'Agra'),
(3, 21, 'Ahmed Nagar'),
(4, 12, 'Ahmedabad City'),
(5, 24, 'Aizawl'),
(6, 29, 'Ajmer'),
(7, 21, 'Akola'),
(8, 34, 'Aligarh'),
(9, 34, 'Allahabad'),
(10, 18, 'Alleppey'),
(11, 35, 'Almora'),
(12, 29, 'Alwar'),
(13, 18, 'Alwaye'),
(14, 2, 'Amalapuram'),
(15, 13, 'Ambala'),
(16, 34, 'Ambedkar Nagar'),
(17, 21, 'Amravati'),
(18, 12, 'Amreli'),
(19, 28, 'Amritsar'),
(20, 2, 'Anakapalle'),
(21, 12, 'Anand'),
(22, 2, 'Anantapur'),
(23, 15, 'Ananthnag'),
(24, 31, 'Anna Road H.O'),
(25, 31, 'Arakkonam'),
(26, 36, 'Asansol'),
(27, 26, 'Aska'),
(28, 34, 'Auraiya'),
(29, 21, 'Aurangabad'),
(30, 5, 'Aurangabad(Bihar)'),
(31, 34, 'Azamgarh'),
(32, 17, 'Bagalkot'),
(33, 35, 'Bageshwar'),
(34, 34, 'Bagpat'),
(35, 34, 'Bahraich'),
(36, 20, 'Balaghat'),
(37, 26, 'Balangir'),
(38, 26, 'Balasore'),
(39, 34, 'Ballia'),
(40, 34, 'Balrampur'),
(41, 12, 'Banasanktha'),
(42, 34, 'Banda'),
(43, 15, 'Bandipur'),
(44, 36, 'Bankura'),
(45, 29, 'Banswara'),
(46, 34, 'Barabanki'),
(47, 15, 'Baramulla'),
(48, 29, 'Baran'),
(49, 12, 'Bardoli'),
(50, 34, 'Bareilly'),
(51, 29, 'Barmer'),
(52, 28, 'Barnala'),
(53, 4, 'Barpeta'),
(54, 7, 'Bastar'),
(55, 34, 'Basti'),
(56, 28, 'Bathinda'),
(57, 21, 'Beed'),
(58, 5, 'Begusarai'),
(59, 17, 'Belgaum'),
(60, 17, 'Bellary'),
(61, 17, 'Bengaluru East'),
(62, 17, 'Bengaluru South'),
(63, 17, 'Bengaluru West'),
(64, 26, 'Berhampur'),
(65, 26, 'Bhadrak'),
(66, 5, 'Bhagalpur'),
(67, 21, 'Bhandara'),
(68, 29, 'Bharatpur'),
(69, 12, 'Bharuch'),
(70, 12, 'Bhavnagar'),
(71, 29, 'Bhilwara'),
(72, 2, 'Bhimavaram'),
(73, 13, 'Bhiwani'),
(74, 5, 'Bhojpur'),
(75, 20, 'Bhopal'),
(76, 26, 'Bhubaneswar'),
(77, 17, 'Bidar'),
(78, 17, 'Bijapur'),
(79, 34, 'Bijnor'),
(80, 29, 'Bikaner'),
(81, 7, 'Bilaspur'),
(82, 36, 'Birbhum'),
(83, 22, 'Bishnupur'),
(84, 4, 'Bongaigaon'),
(85, 34, 'Budaun'),
(86, 15, 'Budgam'),
(87, 34, 'Bulandshahr'),
(88, 21, 'Buldhana'),
(89, 29, 'Bundi'),
(90, 36, 'Burdwan'),
(91, 4, 'Cachar'),
(92, 18, 'Calicut'),
(93, 1, 'Carnicobar'),
(94, 14, 'Chamba'),
(95, 35, 'Chamoli'),
(96, 35, 'Champawat'),
(97, 24, 'Champhai'),
(98, 34, 'Chandauli'),
(99, 22, 'Chandel'),
(100, 6, 'Chandigarh'),
(101, 21, 'Chandrapur'),
(102, 18, 'Changanacherry'),
(103, 3, 'Changlang'),
(104, 17, 'Channapatna'),
(105, 31, 'Chengalpattu'),
(106, 31, 'Chennai City Central'),
(107, 31, 'Chennai City North'),
(108, 31, 'Chennai City South'),
(109, 20, 'Chhatarpur'),
(110, 20, 'Chhindwara'),
(111, 17, 'Chikmagalur'),
(112, 17, 'Chikodi'),
(113, 17, 'Chitradurga'),
(114, 34, 'Chitrakoot'),
(115, 2, 'Chittoor'),
(116, 29, 'Chittorgarh'),
(117, 22, 'Churachandpur'),
(118, 29, 'Churu'),
(119, 31, 'Coimbatore'),
(120, 36, 'Contai'),
(121, 36, 'Cooch Behar'),
(122, 31, 'Cuddalore'),
(123, 2, 'Cuddapah'),
(124, 26, 'Cuttack City'),
(125, 26, 'Cuttack North'),
(126, 26, 'Cuttack South'),
(127, 8, 'Dadra & Nagar Haveli'),
(128, 9, 'Daman'),
(129, 5, 'Darbhanga'),
(130, 36, 'Darjiling'),
(131, 4, 'Darrang'),
(132, 29, 'Dausa'),
(133, 14, 'Dehra Gopipur'),
(134, 35, 'Dehradun'),
(135, 10, 'Delhi'),
(136, 34, 'Deoria'),
(137, 33, 'Dhalai'),
(138, 16, 'Dhanbad'),
(139, 14, 'Dharamsala'),
(140, 31, 'Dharmapuri'),
(141, 17, 'Dharwad'),
(142, 4, 'Dhemaji'),
(143, 26, 'Dhenkanal'),
(144, 29, 'Dholpur'),
(145, 4, 'Dhubri'),
(146, 21, 'Dhule'),
(147, 3, 'Dibang Valley'),
(148, 4, 'Dibrugarh'),
(149, 1, 'Diglipur'),
(150, 25, 'Dimapur'),
(151, 31, 'Dindigul'),
(152, 9, 'Diu'),
(153, 15, 'Doda'),
(154, 29, 'Dungarpur'),
(155, 7, 'Durg'),
(156, 5, 'East Champaran'),
(157, 23, 'East Garo Hills'),
(158, 3, 'East Kameng'),
(159, 23, 'East Khasi Hills'),
(160, 3, 'East Siang'),
(161, 30, 'East Sikkim'),
(162, 2, 'Eluru'),
(163, 18, 'Ernakulam'),
(164, 31, 'Erode'),
(165, 34, 'Etah'),
(166, 34, 'Etawah'),
(167, 34, 'Faizabad'),
(168, 13, 'Faridabad'),
(169, 28, 'Faridkot'),
(170, 34, 'Farrukhabad'),
(171, 28, 'Fatehgarh Sahib'),
(172, 34, 'Fatehpur'),
(173, 28, 'Fazilka'),
(174, 1, 'Ferrargunj'),
(175, 34, 'Firozabad'),
(176, 28, 'Firozpur'),
(177, 17, 'Gadag'),
(178, 21, 'Gadchiroli'),
(179, 12, 'Gandhinagar'),
(180, 29, 'Ganganagar'),
(181, 34, 'Gautam Buddha Nagar'),
(182, 5, 'Gaya'),
(183, 34, 'Ghaziabad'),
(184, 34, 'Ghazipur'),
(185, 16, 'Giridih'),
(186, 11, 'Goa'),
(187, 4, 'Goalpara'),
(188, 17, 'Gokak'),
(189, 4, 'Golaghat'),
(190, 34, 'Gonda'),
(191, 12, 'Gondal'),
(192, 21, 'Gondia'),
(193, 34, 'Gorakhpur'),
(194, 2, 'Gudivada'),
(195, 2, 'Gudur'),
(196, 17, 'Gulbarga'),
(197, 20, 'Guna'),
(198, 2, 'Guntur'),
(199, 28, 'Gurdaspur'),
(200, 13, 'Gurugram'),
(201, 20, 'Gwalior'),
(202, 4, 'Hailakandi'),
(203, 14, 'Hamirpur (HP)'),
(204, 34, 'Hamirpur (UP)'),
(205, 32, 'Hanamkonda'),
(206, 29, 'Hanumangarh'),
(207, 34, 'Hardoi'),
(208, 35, 'Haridwar'),
(209, 17, 'Hassan'),
(210, 34, 'Hathras'),
(211, 17, 'Haveri'),
(212, 16, 'Hazaribagh'),
(213, 2, 'Hindupur'),
(214, 21, 'Hingoli'),
(215, 13, 'Hissar'),
(216, 36, 'Hooghly'),
(217, 20, 'Hoshangabad'),
(218, 28, 'Hoshiarpur'),
(219, 36, 'Howrah'),
(220, 1, 'Hut Bay'),
(221, 32, 'Hyderabad City'),
(222, 32, 'Hyderabad South East'),
(223, 18, 'Idukki'),
(224, 22, 'Imphal East'),
(225, 22, 'Imphal West'),
(226, 20, 'Indore City'),
(227, 20, 'Indore Moffusil'),
(228, 18, 'Irinjalakuda'),
(229, 20, 'Jabalpur'),
(230, 23, 'Jaintia Hills'),
(231, 29, 'Jaipur'),
(232, 29, 'Jaisalmer'),
(233, 28, 'Jalandhar'),
(234, 34, 'Jalaun'),
(235, 21, 'Jalgaon'),
(236, 21, 'Jalna'),
(237, 29, 'Jalor'),
(238, 36, 'Jalpaiguri'),
(239, 15, 'Jammu'),
(240, 12, 'Jamnagar'),
(241, 34, 'Jaunpur'),
(242, 29, 'Jhalawar'),
(243, 34, 'Jhansi'),
(244, 29, 'Jhujhunu'),
(245, 29, 'Jodhpur'),
(246, 4, 'Jorhat'),
(247, 12, 'Junagadh'),
(248, 34, 'Jyotiba Phule Nagar'),
(249, 2, 'Kakinada'),
(250, 26, 'Kalahandi'),
(251, 4, 'Kamrup'),
(252, 31, 'Kanchipuram'),
(253, 34, 'Kannauj'),
(254, 31, 'Kanniyakumari'),
(255, 18, 'Kannur'),
(256, 34, 'Kanpur Dehat'),
(257, 34, 'Kanpur Nagar'),
(258, 28, 'Kapurthala'),
(259, 27, 'Karaikal'),
(260, 31, 'Karaikudi'),
(261, 29, 'Karauli'),
(262, 4, 'Karbi Anglong'),
(263, 15, 'Kargil'),
(264, 4, 'Karimganj'),
(265, 32, 'Karimnagar'),
(266, 13, 'Karnal'),
(267, 31, 'Karur'),
(268, 17, 'Karwar'),
(269, 18, 'Kasaragod'),
(270, 15, 'Kathua'),
(271, 34, 'Kaushambi'),
(272, 26, 'Keonjhar'),
(273, 2, 'Khammam (AP)'),
(274, 32, 'Khammam (TL)'),
(275, 20, 'Khandwa'),
(276, 12, 'Kheda'),
(277, 34, 'Kheri'),
(278, 25, 'Kiphire'),
(279, 17, 'Kodagu'),
(280, 25, 'Kohima'),
(281, 4, 'Kokrajhar'),
(282, 17, 'Kolar'),
(283, 24, 'Kolasib'),
(284, 21, 'Kolhapur'),
(285, 36, 'Kolkata'),
(286, 26, 'Koraput'),
(287, 29, 'Kota'),
(288, 18, 'Kottayam'),
(289, 31, 'Kovilpatti'),
(290, 31, 'Krishnagiri'),
(291, 15, 'Kulgam'),
(292, 31, 'Kumbakonam'),
(293, 15, 'Kupwara'),
(294, 2, 'Kurnool'),
(295, 13, 'Kurukshetra'),
(296, 3, 'Kurung Kumey'),
(297, 34, 'Kushinagar'),
(298, 12, 'Kutch'),
(299, 4, 'Lakhimpur'),
(300, 19, 'Lakshadweep'),
(301, 34, 'Lalitpur'),
(302, 21, 'Latur'),
(303, 24, 'Lawngtlai'),
(304, 15, 'Leh'),
(305, 3, 'Lohit'),
(306, 25, 'Longleng'),
(307, 3, 'Lower Subansiri'),
(308, 34, 'Lucknow'),
(309, 28, 'Ludhiana'),
(310, 24, 'Lunglei'),
(311, 2, 'Machilipatnam'),
(312, 5, 'Madhubani'),
(313, 31, 'Madurai'),
(314, 32, 'Mahabubnagar'),
(315, 34, 'Maharajganj'),
(316, 12, 'Mahesana'),
(317, 34, 'Mahoba'),
(318, 34, 'Mainpuri'),
(319, 36, 'Malda'),
(320, 24, 'Mammit'),
(321, 14, 'Mandi'),
(322, 20, 'Mandsaur'),
(323, 17, 'Mandya'),
(324, 17, 'Mangalore'),
(325, 18, 'Manjeri'),
(326, 28, 'Mansa'),
(327, 4, 'Marigaon'),
(328, 34, 'Mathura'),
(329, 34, 'Mau'),
(330, 18, 'Mavelikara'),
(331, 1, 'Mayabander'),
(332, 31, 'Mayiladuthurai'),
(333, 26, 'Mayurbhanj'),
(334, 32, 'Medak'),
(335, 34, 'Meerut'),
(336, 23, 'Meghalaya'),
(337, 36, 'Midnapore'),
(338, 34, 'Mirzapur'),
(339, 28, 'Moga'),
(340, 28, 'Mohali'),
(341, 25, 'Mokokchung'),
(342, 25, 'Mon'),
(343, 5, 'Monghyr'),
(344, 34, 'Moradabad'),
(345, 20, 'Morena'),
(346, 28, 'Muktsar'),
(347, 21, 'Mumbai'),
(348, 36, 'Murshidabad'),
(349, 34, 'Muzaffarnagar'),
(350, 5, 'Muzaffarpur'),
(351, 17, 'Mysore'),
(352, 36, 'Nadia'),
(353, 4, 'Nagaon'),
(354, 31, 'Nagapattinam'),
(355, 29, 'Nagaur'),
(356, 21, 'Nagpur'),
(357, 35, 'Nainital'),
(358, 5, 'Nalanda'),
(359, 4, 'Nalbari'),
(360, 32, 'Nalgonda'),
(361, 31, 'Namakkal'),
(362, 1, 'Nancorie'),
(363, 1, 'Nancowrie'),
(364, 21, 'Nanded'),
(365, 21, 'Nandurbar'),
(366, 2, 'Nandyal'),
(367, 17, 'Nanjangud'),
(368, 2, 'Narasaraopet'),
(369, 21, 'Nashik'),
(370, 12, 'Navsari'),
(371, 5, 'Nawadha'),
(372, 28, 'Nawanshahr'),
(373, 2, 'Nellore'),
(374, 31, 'Nilgiris'),
(375, 32, 'Nizamabad'),
(376, 36, 'North 24 Parganas'),
(377, 4, 'North Cachar Hills'),
(378, 36, 'North Dinajpur'),
(379, 30, 'North Sikkim'),
(380, 33, 'North Tripura'),
(381, 21, 'Osmanabad'),
(382, 18, 'Ottapalam'),
(383, 16, 'Palamau'),
(384, 18, 'Palghat'),
(385, 29, 'Pali'),
(386, 12, 'Panchmahals'),
(387, 3, 'Papum Pare'),
(388, 21, 'Parbhani'),
(389, 2, 'Parvathipuram'),
(390, 12, 'Patan'),
(391, 18, 'Pathanamthitta'),
(392, 28, 'Patiala'),
(393, 5, 'Patna'),
(394, 31, 'Pattukottai'),
(395, 35, 'Pauri Garhwal'),
(396, 32, 'Peddapalli'),
(397, 25, 'Peren'),
(398, 25, 'Phek'),
(399, 26, 'Phulbani'),
(400, 34, 'Pilibhit'),
(401, 35, 'Pithoragarh'),
(402, 27, 'Poducherry (PD)'),
(403, 31, 'Poducherry (TN)'),
(404, 31, 'Pollachi'),
(405, 15, 'Poonch'),
(406, 12, 'Porbandar'),
(407, 1, 'Port Blair'),
(408, 2, 'Prakasam'),
(409, 34, 'Pratapgarh'),
(410, 2, 'Proddatur'),
(411, 31, 'Pudukkottai'),
(412, 15, 'Pulwama'),
(413, 21, 'Pune'),
(414, 26, 'Puri'),
(415, 5, 'Purnea'),
(416, 36, 'Purulia'),
(417, 17, 'Puttur'),
(418, 18, 'Quilon'),
(419, 34, 'Raebareli'),
(420, 17, 'Raichur'),
(421, 7, 'Raigarh (CT)'),
(422, 21, 'Raigarh (MH)'),
(423, 7, 'Raipur'),
(424, 2, 'Rajahmundry'),
(425, 15, 'Rajauri'),
(426, 12, 'Rajkot'),
(427, 29, 'Rajsamand'),
(428, 31, 'Ramanathapuram'),
(429, 34, 'Rampur'),
(430, 14, 'Rampur Bushahr'),
(431, 16, 'Ranchi'),
(432, 1, 'Rangat'),
(433, 20, 'Ratlam'),
(434, 21, 'Ratnagiri'),
(435, 15, 'Reasi'),
(436, 20, 'Rewa'),
(437, 23, 'Ri Bhoi'),
(438, 13, 'Rohtak'),
(439, 5, 'Rohtas'),
(440, 28, 'Ropar'),
(441, 35, 'Rudraprayag'),
(442, 28, 'Rupnagar'),
(443, 12, 'Sabarkantha'),
(444, 20, 'Sagar'),
(445, 34, 'Saharanpur'),
(446, 5, 'Saharsa'),
(447, 31, 'Salem East'),
(448, 31, 'Salem West'),
(449, 5, 'Samastipur'),
(450, 26, 'Sambalpur'),
(451, 32, 'Sangareddy'),
(452, 21, 'Sangli'),
(453, 28, 'Sangrur'),
(454, 34, 'Sant Kabir Nagar'),
(455, 34, 'Sant Ravidas Nagar'),
(456, 16, 'Santhal Parganas'),
(457, 5, 'Saran'),
(458, 21, 'Satara'),
(459, 29, 'Sawai Madhopur'),
(460, 32, 'Secunderabad'),
(461, 20, 'Sehore'),
(462, 22, 'Senapati'),
(463, 24, 'Serchhip'),
(464, 20, 'Shahdol'),
(465, 34, 'Shahjahanpur'),
(466, 14, 'Shimla'),
(467, 17, 'Shimoga'),
(468, 34, 'Shrawasti'),
(469, 4, 'Sibsagar'),
(470, 34, 'Siddharthnagar'),
(471, 29, 'Sikar'),
(472, 21, 'Sindhudurg'),
(473, 16, 'Singhbhum'),
(474, 29, 'Sirohi'),
(475, 17, 'Sirsi'),
(476, 5, 'Sitamarhi'),
(477, 34, 'Sitapur'),
(478, 31, 'Sivaganga'),
(479, 5, 'Siwan'),
(480, 14, 'Solan'),
(481, 21, 'Solapur'),
(482, 34, 'Sonbhadra'),
(483, 13, 'Sonepat'),
(484, 4, 'Sonitpur'),
(485, 36, 'South 24 Parganas'),
(486, 36, 'South Dinajpur'),
(487, 23, 'South Garo Hills'),
(488, 30, 'South Sikkim'),
(489, 33, 'South Tripura'),
(490, 2, 'Srikakulam'),
(491, 15, 'Srinagar'),
(492, 31, 'Srirangam'),
(493, 34, 'Sultanpur'),
(494, 26, 'Sundargarh'),
(495, 12, 'Surat'),
(496, 12, 'Surendranagar'),
(497, 32, 'Suryapet'),
(498, 2, 'Tadepalligudem'),
(499, 31, 'Tambaram'),
(500, 22, 'Tamenglong'),
(501, 36, 'Tamluk'),
(502, 28, 'Tarn Taran'),
(503, 3, 'Tawang'),
(504, 35, 'Tehri Garhwal'),
(505, 2, 'Tenali'),
(506, 18, 'Thalassery'),
(507, 21, 'Thane'),
(508, 31, 'Thanjavur'),
(509, 31, 'Theni'),
(510, 22, 'Thoubal'),
(511, 4, 'Tinsukia'),
(512, 3, 'Tirap'),
(513, 31, 'Tiruchirapalli'),
(514, 31, 'Tirunelveli'),
(515, 2, 'Tirupati'),
(516, 31, 'Tirupattur'),
(517, 31, 'Tirupur'),
(518, 18, 'Tirur'),
(519, 18, 'Tiruvalla'),
(520, 31, 'Tiruvannamalai'),
(521, 29, 'Tonk'),
(522, 18, 'Trichur'),
(523, 18, 'Trivandrum North'),
(524, 18, 'Trivandrum South'),
(525, 25, 'Tuensang'),
(526, 17, 'Tumkur'),
(527, 31, 'Tuticorin'),
(528, 29, 'Udaipur'),
(529, 35, 'Udham Singh Nagar'),
(530, 15, 'Udhampur'),
(531, 17, 'Udupi'),
(532, 20, 'Ujjain'),
(533, 22, 'Ukhrul'),
(534, 14, 'Una'),
(535, 34, 'Unnao'),
(536, 3, 'Upper Siang'),
(537, 3, 'Upper Subansiri'),
(538, 35, 'Uttarkashi'),
(539, 18, 'Vadakara'),
(540, 12, 'Vadodara East'),
(541, 12, 'Vadodara West'),
(542, 5, 'Vaishali'),
(543, 12, 'Valsad'),
(544, 34, 'Varanasi'),
(545, 31, 'Vellore'),
(546, 20, 'Vidisha'),
(547, 2, 'Vijayawada'),
(548, 31, 'Virudhunagar'),
(549, 2, 'Visakhapatnam'),
(550, 2, 'Vizianagaram'),
(551, 31, 'Vriddhachalam'),
(552, 32, 'Wanaparthy'),
(553, 32, 'Warangal'),
(554, 21, 'Wardha'),
(555, 21, 'Washim'),
(556, 5, 'West Champaran'),
(557, 23, 'West Garo Hills'),
(558, 3, 'West Kameng'),
(559, 23, 'West Khasi Hills'),
(560, 3, 'West Siang'),
(561, 30, 'West Sikkim'),
(562, 33, 'West Tripura'),
(563, 25, 'Wokha'),
(564, 21, 'Yavatmal'),
(565, 25, 'Zunhebotto');

-- --------------------------------------------------------

--
-- Table structure for table `get_donation`
--

CREATE TABLE `get_donation` (
  `donation_id` int(50) NOT NULL,
  `donate_img_dir` varchar(50) NOT NULL,
  `donation_title` varchar(50) NOT NULL,
  `donation_cause` varchar(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `org_id` int(50) NOT NULL,
  `donation_start_date` date NOT NULL,
  `donation_end_date` date NOT NULL,
  `donation_contact_no` int(50) NOT NULL,
  `donation_description` varchar(50) NOT NULL,
  `donation_get_amount` int(50) NOT NULL,
  `get_donation_sts` tinyint(1) NOT NULL,
  `get_donation_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `get_donation`
--

INSERT INTO `get_donation` (`donation_id`, `donate_img_dir`, `donation_title`, `donation_cause`, `user_id`, `org_id`, `donation_start_date`, `donation_end_date`, `donation_contact_no`, `donation_description`, `donation_get_amount`, `get_donation_sts`, `get_donation_timestamp`) VALUES
(2, 'Profile/tayyab.jpeg', 'Help in Education young in Slums ', 'Education', 0, 0, '2018-01-01', '2019-01-01', 2147483647, ' The school is a middle-class institution, not mer', 50000, 0, '2018-03-31 07:39:28.411435'),
(4, 'Profile/profile_user1.jpg', 'Women Empowerment', 'Free Startup Training For Womens', 0, 0, '2018-03-31', '2018-05-30', 2147483647, ' Startup training for womens', 500000, 0, '2018-03-31 08:26:00.084330'),
(5, 'Profile/profile_user2.jpg', 'Health Awareness', 'Cancer', 0, 0, '2018-04-02', '2018-04-30', 2147483647, ' Cancer awareness', 100000, 0, '2018-03-31 08:28:42.366588'),
(6, 'Profile/profile_user2.jpg', 'Health Awareness', 'Cancer', 0, 0, '2018-04-02', '2018-04-30', 2147483647, ' Cancer awareness', 100000, 0, '2018-03-31 08:38:25.164438');

-- --------------------------------------------------------

--
-- Table structure for table `give_donation`
--

CREATE TABLE `give_donation` (
  `give_donation_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `org_id` int(50) NOT NULL,
  `donation_id` int(50) NOT NULL,
  `donation_title` varchar(50) NOT NULL,
  `donation_cause` varchar(50) NOT NULL,
  `give_donation_amount` int(50) NOT NULL,
  `PAN` varchar(50) NOT NULL,
  `give_donation_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `invest_id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `organization_name` varchar(255) DEFAULT NULL,
  `invest_sector` varchar(255) NOT NULL,
  `job_desc` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `invest_type` varchar(255) NOT NULL,
  `year` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `shares` int(255) NOT NULL,
  `market_price` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`invest_id`, `job_title`, `organization_name`, `invest_sector`, `job_desc`, `state`, `city`, `invest_type`, `year`, `amount`, `shares`, `market_price`) VALUES
(3, 'Cloth bag', NULL, 'Medicine', 'Nice cloth bag', '5', '343', 'InterestLoan', 2, 2355, 235235, 23635);

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `job_app_id` int(50) NOT NULL,
  `job_app_user_id` int(50) NOT NULL,
  `job_app_org_id` int(50) NOT NULL,
  `job_post_id` int(50) NOT NULL,
  `job_app_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `job_app_resume_dir` varchar(255) NOT NULL,
  `job_app_message` varchar(255) NOT NULL,
  `job_app_approval` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`job_app_id`, `job_app_user_id`, `job_app_org_id`, `job_post_id`, `job_app_timestamp`, `job_app_resume_dir`, `job_app_message`, `job_app_approval`) VALUES
(1, 0, 1, 2, '2018-03-21 16:08:10.633026', 'Resume/undertaking.pdf', 'abcd', 0),
(2, 0, 1, 2, '2018-03-23 07:03:32.400126', '', '', 0),
(3, 0, 1, 2, '2018-03-23 08:21:35.704976', '', '', 0),
(4, 0, 1, 2, '2018-03-23 08:22:03.268968', '', '', 0),
(5, 0, 1, 2, '2018-03-24 13:56:09.686568', '', '', 0),
(6, 0, 1, 3, '2018-03-24 14:59:50.926149', 'Resume/undertaking.pdf', 'avca', 0),
(7, 1, 1, 3, '2018-03-24 15:03:34.413350', 'Resume/Gyanendra Maurya Resume_2.pdf', 'abcd', 0),
(8, 1, 1, 3, '2018-03-24 15:51:12.884610', '', '', 0),
(9, 1, 1, 3, '2018-03-26 10:00:51.545415', 'Resume/Gyanendra Maurya Resume_2.pdf', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `job_post_id` int(50) NOT NULL,
  `job_post_user_id` int(50) NOT NULL DEFAULT '0',
  `job_post_org_id` int(50) NOT NULL DEFAULT '0',
  `job_post_title` varchar(255) NOT NULL,
  `job_post_sector` varchar(255) NOT NULL,
  `job_post_description` varchar(255) NOT NULL,
  `job_post_state` int(50) NOT NULL,
  `job_post_city` int(50) NOT NULL,
  `job_post_skills` varchar(255) NOT NULL,
  `job_post_exp` int(50) NOT NULL,
  `job_post_salary` int(50) NOT NULL,
  `job_post_duration` int(50) NOT NULL,
  `job_post_start_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `job_post_status` tinyint(1) NOT NULL DEFAULT '1',
  `job_post_vacancy` int(50) NOT NULL,
  `job_post_latest_update` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`job_post_id`, `job_post_user_id`, `job_post_org_id`, `job_post_title`, `job_post_sector`, `job_post_description`, `job_post_state`, `job_post_city`, `job_post_skills`, `job_post_exp`, `job_post_salary`, `job_post_duration`, `job_post_start_time`, `job_post_status`, `job_post_vacancy`, `job_post_latest_update`) VALUES
(2, 0, 1, 'graphics designing', 'Manfacture', 'some description some description some description some description some description some description ', 13, 438, 'c html', 2, 1000000, 5, '2018-03-21 15:58:15.442888', 1, 6, '0000-00-00 00:00:00.000000'),
(3, 0, 1, 'web', 'Medicine', '1', 2, 72, '1', 1, 1, 1, '2018-03-24 14:16:40.620318', 1, 1, '0000-00-00 00:00:00.000000'),
(4, 27, 0, 'Service Relationship Manager', 'Other', 'Responsible for Client services as well as providing support to the Financial Advisors.\r\n\r\n-Role is suitable for a person who has experience working in the financial services industry and particular experience in dealing with  Financial products.\r\n\r\n-To c', 16, 212, 'Customer Relationship Officer\" \"Customer Care Executive\" \"Customer Associate\" \"Client Servicing\" \"Client Handling\" \"Phone Banking', 3, 10000000, 20, '2018-03-30 12:24:53.103951', 1, 5, '0000-00-00 00:00:00.000000'),
(5, 27, 0, 'Graphic Designer', 'Information-Technology', 'Understanding client & team brief & ideating on creative concepts \r\nVisualising & coming up with creative designs and concepts \r\nCreation of Graphic Design for Social Media Posts \r\nCreation of Gif and animations ', 13, 438, ' Graphic Designer, photo editing, videography, Premiere Pro, after Affects, Photoshop, Illustrator', 2, 20000, 45, '2018-03-30 12:27:10.324054', 1, 10, '0000-00-00 00:00:00.000000'),
(6, 27, 0, 'Graphic Designer', 'Information-Technology', 'Understanding client & team brief & ideating on creative concepts \r\nVisualising & coming up with creative designs and concepts \r\nCreation of Graphic Design for Social Media Posts \r\nCreation of Gif and animations ', 13, 438, ' Graphic Designer, photo editing, videography, Premiere Pro, after Affects, Photoshop, Illustrator', 2, 20000, 45, '2018-03-30 12:42:33.394957', 1, 10, '0000-00-00 00:00:00.000000'),
(7, 27, 0, 'Graphic Designer', 'Information-Technology', 'Understanding client & team brief & ideating on creative concepts \r\nVisualising & coming up with creative designs and concepts \r\nCreation of Graphic Design for Social Media Posts \r\nCreation of Gif and animations ', 13, 438, ' Graphic Designer, photo editing, videography, Premiere Pro, after Affects, Photoshop, Illustrator', 2, 20000, 45, '2018-03-30 12:42:41.489184', 1, 10, '0000-00-00 00:00:00.000000'),
(8, 1, 0, 'Linux Administrator ', 'Information-Technology', 'Position Summary: Briefly describe the primary purpose and function of this position.\r\n\r\nSoftware engineer, who is responsible for the product development with quality and by following the engineering practices. The candidate should be a team player who s', 21, 347, 'C, Linux Device Drivers, Linux Kernel, Embedded Linux, ARMX86,  Software Development, USB Android System Programming Bus', 3, 750000, 1000, '2018-03-31 07:13:08.075425', 1, 10, '0000-00-00 00:00:00.000000'),
(9, 1, 0, 'Linux System Admin', 'Information-Technology', 'Required Skills:\r\n\r\nLinux/Unix server installation, configuration.\r\nLinux/Unix Administration and Troubleshooting.\r\nVMware Administration virtualization techniques or any other virtualization technology\r\nShould have worked on HP UX.\r\nShould have strong ha', 21, 347, 'AWS, Linux, Cloud, Shell Scripting', 0, 800000, 19900, '2018-03-31 07:15:18.534440', 1, 16, '0000-00-00 00:00:00.000000'),
(10, 1, 0, 'House Worker ', 'Other', 'Need a women for taking care of the Old parents, good salary.\r\n\r\nRequired skills are : efficient in cooking and house work.', 21, 507, 'cooking and house work.', 1, 10000, 10, '2018-03-31 07:17:34.498395', 1, 1, '0000-00-00 00:00:00.000000'),
(11, 1, 0, 'Sales Manager ( Females )', 'Business', 'Responsible for generating sales with project specific enquiries.\r\nSchedule and conduct site visits and follow up with client till closure.\r\nGet connected between customers and the company for up-to-date status of service, pricing and new product', 21, 356, 'sales management Real Estate Sales Real Estate Marketing CRM Sales customer relationship management sales Negotiation Skills Communication Skills Product Marketing', 2, 250000, 365, '2018-03-31 07:19:51.206668', 1, 5, '0000-00-00 00:00:00.000000'),
(12, 1, 0, 'Cabin Crew Walkin in Mumbai on 30-march-18 (only Females)', 'Other', 'With Reference to your CV on Naukri, We would like to call you for an interview for the post of CABIN CREW. We would like to meet you in person and assess you for the same.Interview details are as below:-\r\n\r\n\r\nDate of Interview: 30 March 2018\r\nTiming : 10', 18, 223, 'Excellent communication and event management skills and experience ', 1, 400000, 10000, '2018-03-31 07:21:44.179098', 1, 40, '0000-00-00 00:00:00.000000'),
(13, 1, 0, 'PR Manager Only Females Location Mumbai', 'Other', 'Excellent Verbal & Written Communication.Presenter, proactive, reliable, responsible.\r\nHave good knowledge of blogging, must know good promotional skill for outlets and hotel, responsible for boosting goodwill of the organization', 11, 186, 'Excellent Verbal & Written Communication.Presenter, proactive, reliable, responsible.', 3, 400000, 40000, '2018-03-31 07:25:22.122722', 1, 20, '0000-00-00 00:00:00.000000'),
(14, 1, 0, ' Customer Service Associate', 'Medicine', 'Store Managers and Associate Store Managers â€“ Full timers: Relevant exp in Retail (Digital or Telecom industry preferred), Customer Service Orientation, Effective Communication skills, Inventory management', 11, 186, 'Good Communication skills ', 0, 50000, 400, '2018-03-31 07:28:56.825561', 1, 30, '0000-00-00 00:00:00.000000'),
(15, 27, 0, 'Cultivation of wheat', 'Agriculture', 'One should have knowledge of farming with few years of experience', 33, 489, 'Farming', 2, 100000, 60, '2018-03-31 08:07:53.911037', 1, 12, '0000-00-00 00:00:00.000000'),
(16, 27, 0, 'Construction', 'Other', 'Construction of building', 8, 127, 'Civil engineer', 5, 500000000, 780, '2018-03-31 08:08:03.877491', 1, 5, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `log_job_post`
--

CREATE TABLE `log_job_post` (
  `ljp_serial_no` int(50) NOT NULL,
  `actions` varchar(255) NOT NULL,
  `ljp_id` int(50) NOT NULL,
  `ljp_title_old` varchar(255) NOT NULL,
  `ljp_title_new` varchar(255) NOT NULL,
  `ljp_sector_old` varchar(255) NOT NULL,
  `ljp_sector_new` varchar(255) NOT NULL,
  `ljp_description_old` varchar(255) NOT NULL,
  `ljp_description_new` varchar(255) NOT NULL,
  `ljp_state_old` int(50) NOT NULL,
  `ljp_state_new` int(50) NOT NULL,
  `ljp_city_old` int(50) NOT NULL,
  `ljp_city_new` int(50) NOT NULL,
  `ljp_skills_old` varchar(255) NOT NULL,
  `ljp_skills_new` varchar(255) NOT NULL,
  `ljp_exp_old` int(50) NOT NULL,
  `ljp_exp_new` int(50) NOT NULL,
  `ljp_salary_old` int(50) NOT NULL,
  `ljp_salary_new` int(50) NOT NULL,
  `ljp_duration_old` int(50) NOT NULL,
  `ljp_duration_new` int(50) NOT NULL,
  `ljp_status` tinyint(1) NOT NULL,
  `ljp_vacancy_old` int(50) NOT NULL,
  `ljp_vacancy_new` int(50) NOT NULL,
  `ljp_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `ljp_user_id` int(50) NOT NULL,
  `ljp_org_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_job_post`
--

INSERT INTO `log_job_post` (`ljp_serial_no`, `actions`, `ljp_id`, `ljp_title_old`, `ljp_title_new`, `ljp_sector_old`, `ljp_sector_new`, `ljp_description_old`, `ljp_description_new`, `ljp_state_old`, `ljp_state_new`, `ljp_city_old`, `ljp_city_new`, `ljp_skills_old`, `ljp_skills_new`, `ljp_exp_old`, `ljp_exp_new`, `ljp_salary_old`, `ljp_salary_new`, `ljp_duration_old`, `ljp_duration_new`, `ljp_status`, `ljp_vacancy_old`, `ljp_vacancy_new`, `ljp_timestamp`, `ljp_user_id`, `ljp_org_id`) VALUES
(1, 'created', 1, '', 'web development', '', 'agriculture', '', 'some description', 0, 5, 0, 5, '', 'c html', 0, 5, 0, 100000, 0, 5, 1, 0, 5, '2018-03-21 15:33:44.000000', 100, 100),
(3, 'deleted', 1, 'web development', '', 'agriculture', '', 'some description', '', 5, 0, 5, 0, 'c html', '', 5, 0, 100000, 0, 5, 0, 1, 5, 0, '2018-03-21 15:36:06.000000', 100, 0),
(4, 'created', 2, '', 'graphics designing', '', 'Manfacture', '', 'some description some description some description some description some description some description ', 0, 13, 0, 438, '', 'c html', 0, 2, 0, 1000000, 0, 5, 1, 0, 6, '2018-03-21 15:58:15.000000', 0, 1),
(5, 'created', 3, '', 'web', '', 'Medicine', '', '1', 0, 2, 0, 72, '', '1', 0, 1, 0, 1, 0, 1, 1, 0, 1, '2018-03-24 14:16:40.000000', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `needsupport`
--

CREATE TABLE `needsupport` (
  `s_id` int(50) NOT NULL,
  `type_of_help` varchar(50) NOT NULL,
  `duration` int(50) NOT NULL,
  `cause` varchar(100) NOT NULL,
  `amount` int(50) DEFAULT NULL,
  `support_desc` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `no_of_volunteer` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `org_id` int(50) NOT NULL,
  `org_username` varchar(255) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `emp_id` int(50) NOT NULL,
  `org_country` varchar(255) NOT NULL,
  `org_location` varchar(255) NOT NULL,
  `org_pin` int(50) NOT NULL,
  `org_license_no` int(50) NOT NULL,
  `org_gstn_no` int(50) NOT NULL,
  `org_cstn_no` int(50) NOT NULL,
  `org_wct_no` int(50) NOT NULL,
  `org_pan` varchar(255) NOT NULL,
  `org_contact_no1` bigint(50) NOT NULL,
  `org_contact_no2` bigint(50) NOT NULL,
  `org_contact_no3` bigint(50) NOT NULL,
  `org_password` varchar(255) NOT NULL,
  `org_email` varchar(255) NOT NULL,
  `org_description` varchar(255) NOT NULL,
  `org_type` varchar(255) NOT NULL,
  `org_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`org_id`, `org_username`, `org_name`, `emp_id`, `org_country`, `org_location`, `org_pin`, `org_license_no`, `org_gstn_no`, `org_cstn_no`, `org_wct_no`, `org_pan`, `org_contact_no1`, `org_contact_no2`, `org_contact_no3`, `org_password`, `org_email`, `org_description`, `org_type`, `org_time`) VALUES
(1, 'dzgd', 'zgd', 5646, 'dfbg', 'dgfgg', 4356, 46474, 4747474, 46466, 3663636, 'sgsgsgz', 33533636, 3636363663, 6363636, '123', 'sdt@gdgd.ssf', 'ttwtwtwt', 'wtttwtwt', '2018-03-18 12:47:11.254436'),
(2, '1', '11', 1, '1', 'Mumbai', 1, 1, 1, 1, 1, '1', 1, 1, 1, '1', '1@rff.ddd', 'Good organization', 'Manufacture', '2018-03-18 12:47:11.254436'),
(3, '1', '11', 1, '1', 'Mumbai', 1, 1, 1, 1, 1, '1', 1, 1, 1, '1', '1@rff.ddd', 'Good organization', 'Manufacture', '2018-03-18 12:47:11.254436'),
(4, '1', '11', 1, '1', 'Mumbai', 1, 1, 1, 1, 1, '1', 1, 1, 1, '1', '1@rff.ddd', 'Good organization', 'Manufacture', '2018-03-18 12:47:11.254436'),
(5, '1', '11', 1, '1', 'Mumbai', 1, 1, 1, 1, 1, '1', 1, 1, 1, '1', '1@rff.ddd', 'Good organization', 'Manufacture', '2018-03-18 12:47:11.254436'),
(6, '1', '11', 1, '1', 'Mumbai', 1, 1, 1, 1, 1, '1', 1, 1, 1, '1', '1@rff.ddd', 'Good organization', 'Manufacture', '2018-03-18 12:47:11.254436'),
(7, '1', '11', 1, '1', 'Mumbai', 1, 1, 1, 1, 1, '1', 1, 1, 1, '1', '1@rff.ddd', 'Good organization', 'Manufacture', '2018-03-18 12:47:11.254436'),
(8, '1', '11', 1, '1', 'Mumbai', 1, 1, 1, 1, 1, '1', 1, 1, 1, '1', '1@rff.ddd', 'Good organization', 'Manufacture', '2018-03-18 12:47:11.254436'),
(9, '1', '11', 1, '1', 'Mumbai', 1, 1, 1, 1, 1, '1', 1, 1, 1, '1', '1@rff.ddd', 'Good organization', 'Manufacture', '2018-03-18 12:47:11.254436'),
(10, '1', '11', 1, '1', 'Mumbai', 1, 1, 1, 1, 1, '1', 1, 1, 1, '1', '1@rff.ddd', 'Good organization', 'Manufacture', '2018-03-18 12:47:11.254436'),
(11, '1', '11', 1, '1', 'Mumbai', 1, 1, 1, 1, 1, '1', 1, 1, 1, '1', '1@rff.ddd', 'Good organization', 'Manufacture', '2018-03-18 12:47:11.254436');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_mname` int(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_location` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pincode` bigint(255) NOT NULL,
  `user_pan` varchar(255) NOT NULL,
  `user_is_mentor` varchar(255) NOT NULL,
  `user_mobile` bigint(10) NOT NULL,
  `user_uid` bigint(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_organization` varchar(255) NOT NULL,
  `user_active` int(50) NOT NULL DEFAULT '1',
  `user_photo` varchar(255) NOT NULL,
  `user_roleid` int(50) DEFAULT NULL,
  `user_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `user_username`, `user_fname`, `user_mname`, `user_lname`, `user_country`, `user_location`, `user_email`, `user_pincode`, `user_pan`, `user_is_mentor`, `user_mobile`, `user_uid`, `user_password`, `user_gender`, `user_organization`, `user_active`, `user_photo`, `user_roleid`, `user_timestamp`) VALUES
(1, 'yash', 'yash', 0, '', 'india', 'mumbai', 'yash@yas.com', 0, '', '', 8424840140, 0, 'yash', '', '', 0, '', 0, '2018-03-22 04:59:14.043710'),
(2, '', 'Gyan', 0, '', 'India', 'Mubai', 'gy@gy.com', 0, '', '', 9235668395, 0, '123', '', '', 0, '', 0, '2018-03-22 04:59:14.043710'),
(3, '', 'Renita', 0, '', 'India', 'Mumbai', 'ren@ren.com', 0, '', '', 9654585657, 0, '12345', '', '', 0, '', 0, '2018-03-22 04:59:14.043710'),
(4, '', 'Dhruv', 0, '', 'India', 'Mumbai', 'dhu@dhu.com', 0, '', '', 9658237456, 0, '123456', '', '', 0, '', 0, '2018-03-22 04:59:14.043710'),
(5, '', 'kevin', 0, '', 'india', 'mumbai', 'kev@kev.in', 0, '', '', 9235668395, 0, '123', '', '', 0, '', 0, '2018-03-22 04:59:14.043710'),
(6, '', 'asfa', 0, '', 'afs', 'asf', 'af@asffas.fas', 0, '', '', 9235668395, 0, '123', '', '', 0, '', 0, '2018-03-22 04:59:14.043710'),
(7, '', '', 0, '', '', '', '', 0, '', '', 9235668395, 0, '', '', '', 0, '', 0, '2018-03-22 04:59:14.043710'),
(9, '', 'hfjs', 0, '', 'lskdfjls', ' ksdfm;', 'kfjdls@sghs.sfd', 0, '', '', 9235668395, 0, '123', '', '', 0, '', 0, '2018-03-22 04:59:14.043710'),
(10, '', 'hkj', 0, '', 'kjh', 'jkh', 'hjk@hk.hj', 0, '', '', 9235668395, 0, '132', '', '', 0, '', 0, '2018-03-22 04:59:14.043710'),
(11, '', 'ddsfdsvdsv', 0, '', 'isfihfis', 'safsafasih', 'asifhasi@sdisahf.asfjs', 0, '', '', 9235668395, 0, '123', '', '', 0, '', 0, '2018-03-22 04:59:14.043710'),
(14, 'sdfsdf', 'sfefs', 0, 'sfsfe', 'sff', 'sfasfsaf', 'safasfs@dgsfs.fdvsd', 0, '', '', 9654575445, 0, '123', 'm', '', 0, '', 0, '2018-03-22 04:59:14.043710'),
(15, 'Prerna123', 'Prerna', 0, 'Singh', 'India', 'Mumbai', 'Prerna@gmail.com', 0, '', '', 9658745213, 0, '123', 'f', '', 0, '', 0, '2018-03-22 04:59:14.043710'),
(16, 'fwetgdffdg', 'sdg', 0, 'dgs', 'sdgd', 'Mumbai', 'efas@dsf.sfsdf', 4241242141, 'sfdgs', 'Yes', 9235668395, 0, '123', 'm', '', 0, '', 0, '2018-03-22 04:59:14.043710'),
(27, 'kevin', 'kevin', 1, 'lobo', '1', 'Ahmedabad', 'kevinlobo160@gmail.com', 1, '1', 'Yes', 9999999999, 123456789, '1', 'm', '1', 1, 'abcd', NULL, '2018-03-28 13:03:31.649597'),
(19, '1', '1', 0, '1', '1', 'Mumbai', '1@rff.ddd1', 1, '1', 'No', 9235668395, 824837593845, '123', 'm', '1', 0, '', 0, '2018-03-22 04:59:14.043710'),
(20, '123', '1', 0, '1', '1', 'Mumbai', '1@rff.ddd', 1, '1', 'Yes', 9235668395, 824837593845, '1', 'm', '1', 0, '', 0, '2018-03-22 04:59:14.043710'),
(21, '1', '1', 0, '1', '1', 'Mumbai', '1@rff.ddd', 1, '1', 'Yes', 9235668395, 824837593845, '1', 'm', '1', 0, '', 0, '2018-03-22 04:59:14.043710'),
(22, '1', '1', 1, '1', '1', '1', '1', 1, '1', '1', 1, 1, '1', '1', '1', 1, '1', 0, '2018-03-22 04:59:14.043710'),
(23, '1', '1', 1, '1', '1', 'Mumbai', '1@rff.ddd', 1, '1', 'Yes', 9235668395, 824837593845, '1', 'm', '1', 1, 'abcd', NULL, '2018-03-22 05:30:16.882481'),
(24, '1', '1', 1, '1', '1', 'Mumbai', '1@rff.ddd', 1, '1', 'No', 9235668395, 824837593845, '1', 'm', '1', 1, 'abcd', NULL, '2018-03-22 05:36:39.761733'),
(25, '1', '1', 1, '1', '1', 'Mumbai', '1@rff.ddd1', 1, '1', 'Yes', 1, 11, '1', 'm', '1', 1, 'abcd', NULL, '2018-03-22 07:57:34.858807'),
(26, 'kevin12312', '1', 11, '1', '1', 'Ahmedabad', 'rvc.lobo3@gmail.com', 1, '11', 'Yes', 9999999999, 123456789, '1', 'm', '1', 1, 'abcd', NULL, '2018-03-28 04:35:06.164947');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `session_login_timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `session_logout` timestamp(6) NULL DEFAULT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_id` int(50) UNSIGNED NOT NULL DEFAULT '0',
  `org_id` int(50) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `session_login_timestamp`, `session_logout`, `ip_address`, `user_id`, `org_id`) VALUES
(8, '2018-03-22 07:15:40.815009', NULL, '', 24, 0),
(7, '2018-03-22 07:15:40.814009', NULL, '', 23, 0),
(6, '2018-03-22 07:15:40.813007', NULL, '', 22, 0),
(5, '2018-03-22 07:15:40.812010', NULL, '', 21, 0),
(9, '2018-03-22 07:17:37.944844', NULL, '', 18, 0),
(10, '2018-03-22 09:24:59.212815', NULL, '', 18, 0),
(11, '2018-03-22 09:27:18.443127', NULL, '', 18, 0),
(12, '2018-03-22 09:35:29.356059', NULL, '', 18, 0),
(13, '2018-03-25 15:45:50.928393', NULL, '', 19, 0),
(14, '2018-03-25 15:49:29.507610', NULL, '', 19, 0),
(15, '2018-03-27 07:27:36.795056', NULL, '', 13, 0),
(16, '2018-03-27 07:30:41.494121', NULL, '', 13, 0),
(17, '2018-03-27 07:33:44.475455', NULL, '', 13, 0),
(18, '2018-03-27 07:35:56.435077', NULL, '', 13, 0),
(19, '2018-03-27 07:39:12.192744', NULL, '', 13, 0),
(20, '2018-03-27 07:43:29.242716', '2018-03-27 07:43:36.000000', '', 13, 0),
(21, '2018-03-27 13:47:00.854374', '2018-03-27 13:47:33.000000', '::1', 13, 0),
(22, '2018-03-31 03:32:55.707657', '2018-03-31 03:50:29.000000', '103.15.67.146', 1, 0),
(23, '2018-03-31 03:53:12.130036', '2018-03-31 03:54:52.000000', '103.15.67.146', 1, 0),
(24, '2018-03-31 03:56:34.023838', NULL, '103.15.67.146', 1, 0),
(25, '2018-03-31 07:08:30.220724', NULL, '103.15.67.146', 1, 0),
(26, '2018-03-31 07:10:52.774106', NULL, '103.15.67.146', 1, 0),
(27, '2018-03-31 07:33:33.045767', NULL, '103.15.67.146', 27, 0),
(28, '2018-03-31 07:35:35.126982', NULL, '103.15.67.146', 27, 0),
(29, '2018-03-31 07:45:39.780344', NULL, '47.247.184.26', 27, 0),
(30, '2018-03-31 07:54:41.387854', NULL, '47.247.184.26', 27, 0),
(31, '2018-03-31 08:05:26.008982', NULL, '47.247.184.26', 27, 0),
(32, '2018-03-31 08:14:44.152945', '2018-03-31 08:51:28.000000', '47.247.211.138', 1, 0),
(33, '2018-03-31 10:02:18.548388', NULL, '103.15.67.146', 1, 0),
(34, '2018-03-31 10:17:05.446243', NULL, '103.15.67.146', 1, 0),
(35, '2018-03-31 10:17:06.494265', NULL, '103.15.67.146', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `start_campaign`
--

CREATE TABLE `start_campaign` (
  `st_cpn_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL DEFAULT '0',
  `org_id` int(50) NOT NULL DEFAULT '0',
  `st_cpn_title` varchar(255) NOT NULL,
  `st_cpn_cause` varchar(255) NOT NULL,
  `st_cpn_website` varchar(255) NOT NULL,
  `st_cpn_state` int(50) NOT NULL,
  `st_cpn_district` int(50) NOT NULL,
  `st_cpn_desc` varchar(255) NOT NULL,
  `st_cpn_start_date` varchar(255) NOT NULL,
  `st_cpn_end_date` varchar(255) NOT NULL,
  `st_cpn_volunteers` int(50) NOT NULL,
  `st_cpn_skills` varchar(255) NOT NULL,
  `st_cpn_money` int(50) NOT NULL,
  `st_cpn_image` varchar(255) NOT NULL,
  `st_cpn_status` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `start_campaign`
--

INSERT INTO `start_campaign` (`st_cpn_id`, `user_id`, `org_id`, `st_cpn_title`, `st_cpn_cause`, `st_cpn_website`, `st_cpn_state`, `st_cpn_district`, `st_cpn_desc`, `st_cpn_start_date`, `st_cpn_end_date`, `st_cpn_volunteers`, `st_cpn_skills`, `st_cpn_money`, `st_cpn_image`, `st_cpn_status`, `timestamp`) VALUES
(3, 0, 0, 'beti padhao', 'girls education', 'https://www.google.co.in/search?q=store+current+timestamp+in+php+variab%3Be&rlz=1C1NDCM_enIN730IN730&oq=store+current+timestamp+in+php+variab%3Be&aqs=chrome..69i57.7435j0j4&sourceid=chrome&ie=UTF-8', 12, 298, '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\neducation is the source of power', '2018-03-10', '2018-03-16', 5, 'Graduate', 50000, 'profile/1522409819.png', 1, '2018-03-30 11:36:59.451417'),
(4, 0, 0, 'cloth bags', 'yash aggarwals development', 'https://mail.google.com/mail/u/0/#inbox', 13, 168, 'Save the environment using cloth bag', '2018-03-24', '2018-03-31', 5, 'stitching, marketing', 100000, 'profile/1522410232.png', 1, '2018-03-30 11:43:52.065188'),
(7, 0, 0, 'mahila-e-haat', 'women empowerment', 'https://www.google.co.in/?gfe_rd=cr&dcr=0&ei=7vG9Wv-9JsLy8AfSh4DoDg', 2, 115, '\r\nto empower women', '2017-02-02', '2018-02-02', 12, 'comms', 2000, 'profile/1522446074.jpg', 0, '2018-03-30 21:41:14.931387'),
(8, 0, 0, 'Freedom Of Expression', 'To be vocal to express our thoughts and beliefs', 'https://www.google.com', 11, 186, 'Empower women', '2018-01-02', '2019-01-01', 1000, 'Comms', 6000, 'profile/1522482003.jpg', 1, '2018-03-31 07:40:03.095725'),
(9, 0, 0, 'Go Paperless', 'Save Trees', 'https://www.google.com', 2, 14, 'save trees', '2018-03-31', '2019-01-01', 500, 'love for trees', 10000, 'profile/1522482477.png', 1, '2018-03-31 07:47:57.196085'),
(10, 0, 0, 'Mahila Shakti', 'To Empower Women physically', 'https://www.yahoo.com', 5, 156, 'To make women strong', '2018-04-26', '2018-06-30', 50, 'Strength', 10000, 'profile/1522482605.jpg', 1, '2018-03-31 07:50:05.272549'),
(11, 0, 0, 'Mahila Shiksha', 'To educate girls', 'https://www.bing.com', 6, 100, 'Education for girls', '2018-11-09', '2018-12-27', 100, 'BEd', 50000, 'profile/1522482725.jpg', 1, '2018-03-31 07:52:05.081902'),
(12, 0, 0, 'Mahila sehat', 'Heath improvement', 'http://www.yahoo.com', 5, 74, 'Healthy and fit', '2018-03-20', '2018-04-21', 50, 'Graduate', 500000, 'profile/1522483097.jpg', 1, '2018-03-31 07:58:17.318827'),
(13, 0, 0, 'Increasing knowledge and awareness domestic violence against women', 'Women Empowerment ', 'http://www.opensourcetutorials.in', 21, 347, 'Violence against women is rooted in discrimination and inequality, making it challenging to address.  Men and women who have not had opportunities to question gender roles, attitudes and beliefs, cannot change them. Women who are unaware of their rights c', '2018-04-30', '2018-05-01', 12, 'Drama , Event management, Music, and Digital Publicity', 100000, 'profile/1522483208.jpg', 1, '2018-03-31 08:00:08.798836'),
(14, 0, 0, 'Naari ', 'To support widows', 'https://www.trual.com', 9, 152, 'Support them monetary', '2018-08-01', '2018-10-31', 360, 'Graduate', 1500000, 'profile/1522483246.jpg', 1, '2018-03-31 08:00:46.194786'),
(15, 0, 0, 'Naari hunar', 'To develop skills', 'http://github.com', 19, 300, 'Enhancing skills of women to support women empowerment', '2018-03-31', '2018-04-21', 300, 'Communication', 57000, 'profile/1522483296.jpg', 1, '2018-03-31 08:01:36.201896');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `StCode` int(11) NOT NULL,
  `StateName` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StCode`, `StateName`) VALUES
(1, 'Andaman & Nicobar Islands'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chattisgarh'),
(8, 'Dadra & Nagar Haveli'),
(9, 'Daman & Diu'),
(10, 'Delhi'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu & Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Poducherry'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttar Pradesh'),
(35, 'Uttarakhand'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_app`
--

CREATE TABLE `volunteer_app` (
  `vol_id` int(50) NOT NULL,
  `campaign_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL DEFAULT '0',
  `org_id` int(50) NOT NULL DEFAULT '0',
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `no_of_vol` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer_app`
--

INSERT INTO `volunteer_app` (`vol_id`, `campaign_id`, `user_id`, `org_id`, `timestamp`, `no_of_vol`) VALUES
(1, 3, 27, 0, '2018-03-30 18:33:18.616906', 354),
(2, 3, 27, 0, '2018-03-30 18:37:01.608632', 354),
(4, 7, 27, 0, '2018-03-30 21:41:54.977537', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`DistCode`),
  ADD KEY `StCode` (`StCode`);

--
-- Indexes for table `get_donation`
--
ALTER TABLE `get_donation`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `get_donation__user_id` (`user_id`),
  ADD KEY `get_donation_org_id` (`org_id`);

--
-- Indexes for table `give_donation`
--
ALTER TABLE `give_donation`
  ADD PRIMARY KEY (`give_donation_id`),
  ADD KEY `give_donation_user_id` (`user_id`),
  ADD KEY `give_donation_org_id` (`org_id`);

--
-- Indexes for table `investment`
--
ALTER TABLE `investment`
  ADD UNIQUE KEY `invest_id` (`invest_id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`job_app_id`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`job_post_id`);

--
-- Indexes for table `log_job_post`
--
ALTER TABLE `log_job_post`
  ADD PRIMARY KEY (`ljp_serial_no`);

--
-- Indexes for table `needsupport`
--
ALTER TABLE `needsupport`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD UNIQUE KEY `session_id` (`session_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `org_id` (`org_id`);

--
-- Indexes for table `start_campaign`
--
ALTER TABLE `start_campaign`
  ADD PRIMARY KEY (`st_cpn_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`StCode`);

--
-- Indexes for table `volunteer_app`
--
ALTER TABLE `volunteer_app`
  ADD PRIMARY KEY (`vol_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `DistCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=566;

--
-- AUTO_INCREMENT for table `get_donation`
--
ALTER TABLE `get_donation`
  MODIFY `donation_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `give_donation`
--
ALTER TABLE `give_donation`
  MODIFY `give_donation_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investment`
--
ALTER TABLE `investment`
  MODIFY `invest_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `job_app_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `job_post_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `log_job_post`
--
ALTER TABLE `log_job_post`
  MODIFY `ljp_serial_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `org_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `start_campaign`
--
ALTER TABLE `start_campaign`
  MODIFY `st_cpn_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `volunteer_app`
--
ALTER TABLE `volunteer_app`
  MODIFY `vol_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
