-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2017 at 01:48 PM
-- Server version: 5.5.39-36.0-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mudraqd8_mudra`
--
CREATE DATABASE IF NOT EXISTS `mudraqd8_mudra` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mudraqd8_mudra`;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='For storing details of different branded companies who supplies products to mudra sports.' AUTO_INCREMENT=24 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
(6, 'SPIRIT FITNESS USA'),
(7, 'BODY SOLID'),
(8, 'STEEL FLEX'),
(9, 'MBH FITNESS'),
(10, 'SPORT SYSTEM'),
(11, 'HARROD'),
(12, 'POLANIK'),
(13, 'COURTSOL'),
(15, 'ACRYLIC'),
(17, 'KENTFIELD'),
(18, 'CONCEPT2'),
(19, 'FUEL FITNESS'),
(20, 'COURTSOL'),
(21, 'TARGE'),
(22, 'NEO FLEX'),
(23, 'YONEX');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(6, 'COMMERCIAL FITNESS'),
(7, 'HOME FITNESS'),
(8, 'TEAM SPORTS'),
(9, 'TRACK AND FIELD'),
(10, 'TABLE TOP GAMES'),
(11, 'SPORTS FACILITY'),
(12, 'PROJECTS'),
(13, 'MEDICAL FITNESS');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `modal` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `rating` float DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `review_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `part_number` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `modal`, `description`, `brand_id`, `rating`, `status`, `review_id`, `category_id`, `part_number`) VALUES
(14, 'ELLIPTICAL', 'CE800', 'The CE800 is designed with convenience, comfort, reliability, and aesthetic appeal in mind. We are confident that if people enjoy the experience – proper ergonomics and biomechanics, a smooth, quiet stride, important workout data feedback, and challenging programs, that they will adhere to a regular exercise routine.\n \nThis unit features a multitude of program options, wireless and contact heart rate, a 20” stride length, 40 levels of resistance, a 30 lb. flywheel, and an extensive amount of console feedback This model is very appealing to someone that values a smooth ride and extensive data feedback.', 6, NULL, 'recommended', NULL, 6, NULL),
(15, 'ELLIPTICAL', 'CG800', 'This unit features the patent pending “Direct Drive” system that creates a fluid, friction free “floating” experience, magnetic resistance, a 30 lb. flywheel, and simplistic programming.\r\n ', 6, NULL, 'featured', NULL, 6, NULL),
(16, 'FITNESS BIKES', 'CR800', 'Durable, comfortable, and smooth are all qualities of the Spirit Fitness CR800 semi-recumbent fitness bike. Easy adjustments, bright LED screens, a turbo cooling fan, high density foam seats, challenging programs, 40 levels of magnetic resistance, and a generator powered console are standard on this model.\r\n \r\nIndoor exercise bikes have been around for many decades. Their appeal and effectiveness have stood the test of time. Comfort, convenience, familiarity, enjoyment, and medical conditions are a few reasons this modality appeals to a large segment of the population.\r\n \r\nThe entire C series expounds on two of these critical areas – comfort and convenience. We know that if your users don’t enjoy the experience that our products create, they won’t feel compelled to make using them a part of their lifestyle.', 6, NULL, 'featured', NULL, 6, NULL),
(17, 'STEPPERS', 'CS800', 'The CS800 Stepper combines the familiar dependent stepping action with an arched step-rail design and impressive 16” maximum step height for an effective lower body workout. The narrow 2” pedal spacing (Q-Factor), large cushioned pedals, and solid handrail design combine to give you an incredibly comfortable and space-efficient cardio unit.', 6, NULL, 'featured', NULL, 6, NULL),
(18, 'ROWER', 'CRW800 ', 'The CRW800 Rower combines a long list of high performance features with a reliable design. From the convenience of the 20” frame height and folding storage design to the combined air/magnetic resistance and remote handle controls, the CRW800 is sure to impress.', 6, NULL, 'featured', NULL, 6, NULL),
(19, 'INDOOR CYCLE', 'CB900', '', 6, NULL, 'featured', NULL, 7, NULL),
(20, 'TREADMILL', 'CT800', 'There are several keys areas that define a well designed treadmill. All Spirit Fitness models offer comfortable belts and cushioning systems, convenient storage and adjustments, generous features and programs, and eye catching aesthetics. Select the design elements you desire to create a product that will retain its value for years to come.\r\n \r\nThe CT800 is even stouter than the XT685 (75 lbs. heavier). This model is very appealing to someone that is a walker or a runner. It features a non-folding platform base which is designed to stand up to the rigors of frequent running.\r\n \r\nOther design elements include a bright Tri-color LED console, Quick Speed and Incline keys, contact and wireless heart rate, dual drive motor cooling fans, and a maintenance free wax deck system.', 6, NULL, 'featured', NULL, 6, NULL),
(21, 'TREADMILL', 'CT850ENT', 'There are several keys areas that define a well designed treadmill. All Spirit Fitness models offer comfortable belts and cushioning systems, convenient storage and adjustments, generous features and programs, and eye catching aesthetics. Select the design elements you desire to create a product that will retain its value for years to come.\r\n \r\nDesigned on the solid CT850 platform, the CT850ENT treadmill incorporates touchscreen technology on an oversized 15.6” entertainment display. TV, web browsing, and music streaming are all made possible within a user interface that is easy to use and adaptable to nearly any facility.\r\n \r\nThe cool running, brushless 4.0 Horse Power AC Drive motor adds to the reliability of the treadmill while providing the torque and smooth continuous power required by the unique needs of its users.', 6, NULL, 'featured', NULL, 6, NULL),
(22, 'FITNESS BIKE', 'CU800', 'Durable, comfortable, and smooth are all qualities of the Spirit Fitness CU800 fitness bike. Easy adjustments, bright LED screens, a turbo cooling fan, high density foam seats, challenging programs, 40 levels of magnetic resistance, and a generator powered console are standard on both models.\r\n \r\nIndoor exercise bikes have been around for many decades. Their appeal and effectiveness have stood the test of time. Comfort, convenience, familiarity, enjoyment, and medical conditions are a few reasons this modality appeals to a large segment of the population.\r\n \r\nThe entire C series expounds on two of these critical areas – comfort and convenience. We know that if your users don’t enjoy the experience that our products create, they won’t feel compelled to make using them a part of their lifestyle.', 6, NULL, 'featured', NULL, 6, NULL),
(23, 'FITNESS BIKE', 'XBR55', 'The XBR55 is our mid-priced semi-recumbent bike. It offers all of the conveniences of the XBR25 along with four additional programs, audio jack with speakers, remote handlebar controls, adjustable seat back, and wireless HR chest strap (included).', 6, NULL, 'recommended', NULL, 7, NULL),
(24, 'FITNESS BIKE', 'XBU55', 'Durable, comfortable, and smooth are all qualities of the XBU55 fitness bike. Easy adjustments, a cooling fan, high density foam seat, challenging programs, 20 levels of resistance, and a bright LCD display are all standard.\r\n \r\nIndoor exercise bikes have been around for many decades. Their appeal and effectiveness have stood the test of time. Comfort, convenience, familiarity, enjoyment, and medical conditions are a few reasons this modality appeals to a large segment of the population.', 6, NULL, 'featured', NULL, 7, NULL),
(25, 'TREADMILL', 'XT385', 'The XT385 is designed to keep you motivated mile after mile. Our large 22" x 60" running surface and 3.5HP motor give you all the room and power you need for a comfortable workout. The top speed of 12mph and 15% elevation are sure to keep you challenged.\r\n \r\nThe XT385  has the same options as the XT285 plus two User programs, up to 15% elevation capability, Aluminum side rails, larger motor with wider belt, and frame uprights stability bar for a more solid feel. This model is very appealing to someone that is a walker, at a transitional stage from walking to running, or a mid-level runner.', 6, NULL, 'recommended', NULL, 7, NULL),
(26, 'VERTICAL LEG PRESS MACHINE', 'PVLP156X', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(27, 'VERTICAL KNEE RAISE CHIN DIP', 'PVKC83X', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(28, 'SQUAT RACK', 'PSS60X', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(29, 'SMITH MACHINE', 'PSM144X', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(30, 'SEATED CALF MACHINE', 'PSC43X', '            ', 7, NULL, '', NULL, 6, NULL),
(31, 'POWER RACK', 'PPR200X', '            ', 7, NULL, '', NULL, 6, NULL),
(32, 'PREACHER CURL MACHINE', 'PPB32X', '            ', 7, NULL, '', NULL, 6, NULL),
(33, 'LAT MACHINE', 'PLM180X', '            ', 7, NULL, '', NULL, 6, NULL),
(34, 'LEG EXTENSION/CURL MACHINE', 'PLCE165X', '            ', 7, NULL, '', NULL, 6, NULL),
(35, 'LAT ATTACHMENT', 'PLA200X', '            ', 7, NULL, '', NULL, 6, NULL),
(36, '45 DEGREE BACK HYPER EXTENSION', 'PHYP200X', '            ', 7, NULL, '', NULL, 6, NULL),
(37, 'HARDCORE GYM', 'PHG1000X', '            ', 7, NULL, '', NULL, 6, NULL),
(38, 'FLAT/INCLINE/DECLINE BENCH', 'PFID130X', '            ', 7, NULL, '', NULL, 6, NULL),
(39, '2TIER DUMBBELL RACK', 'PDR282X', '            ', 7, NULL, '', NULL, 6, NULL),
(40, 'ROMAN CHAIR', 'PCH24X', '            ', 7, NULL, '', NULL, 6, NULL),
(41, 'CABLE CROSSOVER MACHINE', 'PCCO90X', '            ', 7, NULL, '', NULL, 6, NULL),
(42, 'AB BOARD', 'PAB139X', '            ', 7, NULL, '', NULL, 6, NULL),
(43, 'PRO DUAL MULTI PRESS', 'DPRS-SF', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(44, 'PRO DUAL VERTICAL PRESS AND LAT', 'DPLS-SF', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(45, 'PRO DUAL VPEC REAR DELT', 'DPEC-SF', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(46, 'PRO DUAL ADJUSTABLE CABLE COLUMN', 'DPCC-SF', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(47, 'PRO DUAL LEG EXTENSION % CURL', 'DPCC-SF', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(48, 'PRO DUAL LEG EXTENSION ', 'DLEC-SF', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(49, 'PRO DUAL LAT MID ROW', 'DLAT-SF', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(50, 'PRO DUAL INNER AND OUTER THIGH', 'DIOT-SF', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(51, 'BASE FRAME FOR PRO DUAL MULTI STACK', 'DGYM', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(52, 'PROCLUB LINE DUAL CABLE COLUMN', 'SDC2000G/2', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(53, 'PRO DUAL LEG/CALF PRESS', 'DCLP-SF', '            ', 7, NULL, '', NULL, 6, NULL),
(54, 'PRO DUAL BICEP CURL TRICEP EXTENSION', 'DBTC-SF', '            ', 7, NULL, '', NULL, 6, NULL),
(55, 'PRO DUAL AB AND BACK', 'DABB-SF', '            ', 7, NULL, '', NULL, 6, NULL),
(56, 'PROCLUB LINE INNER OR OUTER THIGH', 'STH1100G/2', '            ', 7, NULL, '', NULL, 6, NULL),
(57, 'PROCLUB LINE SHOULDER PRESS OLMPIC BENCH', 'SPB368G', '            ', 7, NULL, '', NULL, 6, NULL),
(58, 'PROCLUB LINE LEG PRESS', 'SLP500G/2', '            ', 7, NULL, '', NULL, 6, NULL),
(59, 'PROCLUB LINE LAT MID ROW', 'SLM300G/2', '            ', 7, NULL, '', NULL, 6, NULL),
(60, 'PROCLUB LINE LEG EXTENSION', 'SLE200G/2', '            ', 7, NULL, '', NULL, 6, NULL),
(61, 'PROCLUB LINE INLINE OLYMPIC BENCH', 'SIB359G', '            ', 7, NULL, '', NULL, 6, NULL),
(62, 'PROCLUB LINE FLAT OLYMPIC BENCH', 'SFB349G', '            ', 7, NULL, '', NULL, 6, NULL),
(63, 'PROCLUB LINE DUAL CABLE COLUMN', 'SDC2000G/2', '            ', 7, NULL, '', NULL, 6, NULL),
(64, 'PROCLUB LINE DECLINE OLYMPIC BENCH', 'SDB351G', '            ', 7, NULL, '', NULL, 6, NULL),
(65, 'PROCLUB LINE CHEST PRESS', 'SBP100G/2', '            ', 7, NULL, '', NULL, 6, NULL),
(66, 'PROCLUB LINE PROFESSIONAL LEG PRESS', 'GLPH-2100', '            ', 7, NULL, '', NULL, 6, NULL),
(67, 'MULTI-STATION SELECTORIZED GYM', 'GEXM-2000S', '            ', 7, NULL, '', NULL, 6, NULL),
(68, 'MULTI-STATION SELECTORIZED GYM', 'GEXM-2750S', '            ', 7, NULL, '', NULL, 6, NULL),
(69, 'BI-ANGULAR MULTI-STATION GYM', 'G10B', '            ', 7, NULL, '', NULL, 6, NULL),
(70, 'SELECTORIZED MULTI-STATION GYM', 'G9S', '            ', 7, NULL, '', NULL, 6, NULL),
(71, 'ISO-FLEX MULTI-STATION GYM', 'G8I', '            ', 7, NULL, '', NULL, 6, NULL),
(72, 'BI-ANGULAR MULTI-STATION GYM', 'G6B', '            ', 7, NULL, '', NULL, 6, NULL),
(73, 'SELECTORIZED MULTI-STATION GYM', 'G5S', '            ', 7, NULL, '', NULL, 6, NULL),
(74, 'ISO-FLEX HOME GYM', 'G41', '            ', 7, NULL, '', NULL, 7, NULL),
(75, 'SELECTORIZED HOME GYM', 'G3S', '            ', 7, NULL, '', NULL, 7, NULL),
(76, 'BI-ANGULAR HOME GYM', 'G2B', '            ', 7, NULL, '', NULL, 7, NULL),
(77, 'SELECTORIZED HOME GYM', 'G1S', '            ', 7, NULL, '', NULL, 7, NULL),
(78, 'FUSION 600 PERSONAL TRAINER', 'F600', '            ', 7, NULL, '', NULL, 7, NULL),
(79, 'FUSION 500 PERSONAL TRAINER', 'F500', '            ', 7, NULL, '', NULL, 7, NULL),
(80, 'FUSION 400 PERSONAL TRAINER', 'F400', '            ', 7, NULL, '', NULL, 7, NULL),
(81, 'SELECTORIZED COMMERCIAL GYM', 'EXM4000S', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(82, 'SELECTORIZED MULTI-STATION GYM', 'EXM3000LPS', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(83, 'MULTI SQUAT RACK', 'SMR1000', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(84, 'VERTICAL KNEE RAISE CHIN DIP AND PULL STATION', 'GVKR82', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(85, 'VERTICAL KNEE RAISE AND DIP STATION', 'GVKR60', '            ', 7, NULL, 'featured', NULL, 6, NULL),
(86, 'ABCORE', 'ABCORE', '            ', 7, NULL, '', NULL, 6, NULL),
(87, 'ADJUSTABLE AB BOARD', 'GAB60', '            ', 7, NULL, '', NULL, 6, NULL),
(88, 'CABLE CROSSOVER', 'GCCO-150S', '            ', 7, NULL, '', NULL, 6, NULL),
(89, 'CAM SERIES LEG EXTENSON/LEG CURL MACHINE', 'GCEC340', '            ', 7, NULL, '', NULL, 6, NULL),
(90, 'FUNCTIONAL TRAINING CENTER', 'GDCC200', '            ', 7, NULL, '', NULL, 6, NULL),
(91, 'CABLE CROSSOVER FUNCTIONAL TRAINER', 'GDCC250', '            ', 7, NULL, '', NULL, 6, NULL),
(92, 'POWERCENTER COMBO BENCH PACKAGE', 'GDIB46LP4', '            ', 7, NULL, '', NULL, 6, NULL),
(93, 'DIP STATION', 'GDIP59', '            ', 7, NULL, '', NULL, 6, NULL),
(94, '6-PAIR VERTICAL DUMBBELL RACK', 'GDR44', '            ', 7, NULL, '', NULL, 6, NULL),
(95, '2X3 FLAT BENCH', 'GFB350', '            ', 7, NULL, '', NULL, 6, NULL),
(96, '2X3 FLAT/INCLINE BENCH', 'GFI21', '            ', 7, NULL, '', NULL, 6, NULL),
(97, 'FLAT/INCLINE/DECLINE BENCH', 'GFID31', '            ', 7, NULL, '', NULL, 6, NULL),
(98, '2X3 LEG CURL/EXTENSION STATION', 'GLCE365', '            ', 7, NULL, '', NULL, 6, NULL),
(99, 'LEG PRESS HACK SQUAT MACHINE', 'GLPH1100', '            ', 7, NULL, '', NULL, 6, NULL),
(100, '2X3 PREACHER CURL MACHINE', 'GPCB329', '            ', 7, NULL, '', NULL, 6, NULL),
(101, 'PLATE LOADED PEC MACHINE', 'GPM65', '            ', 7, NULL, '', NULL, 6, NULL),
(102, '2X3 MULTI PRESS RACK', 'GPR370', '            ', 7, NULL, '', NULL, 6, NULL),
(103, 'SERIES 7 SMITH GYM SYSTEM', 'GS348QP4', '            ', 7, NULL, '', NULL, 6, NULL),
(104, 'AB MACHINE', 'SAM-900G-2', '            ', 7, NULL, '', NULL, 6, NULL),
(105, 'BICEP CURL MACHINE', 'SBC-600G-2', '            ', 7, NULL, '', NULL, 6, NULL),
(106, 'BACK MACHINE', 'SBK-1600G-2', '            ', 7, NULL, '', NULL, 6, NULL),
(107, 'CABLE  ', 'SCC1200G', '            ', 7, NULL, '', NULL, 6, NULL),
(108, 'FLAT/INCLINE/DECLINE BENCH', 'SID-50G', '            ', 7, NULL, '', NULL, 6, NULL),
(109, 'INCLINE PRESS MACHINE', 'SIP-1400G-2', '            ', 7, NULL, '', NULL, 6, NULL),
(110, 'ROTARY TORSO MACHINE', 'SOT-1800G-2', '            ', 7, NULL, '', NULL, 6, NULL),
(111, 'PEC MACHINE', 'SPD-700G-2', '            ', 7, NULL, '', NULL, 6, NULL),
(112, 'SEATED ROW MACHINE', 'SRM-1700G-2', '            ', 7, NULL, '', NULL, 6, NULL),
(113, 'COUNTER BALANCED SMITH MACHINE ', 'SSM-350G', '            ', 7, NULL, '', NULL, 6, NULL),
(114, 'SHOULDER PRESS MACHINE', 'SSP 800G-2', '            ', 7, NULL, '', NULL, 6, NULL),
(117, 'BILLIARDS & SNOOKERS', 'KENT-3700', '            ', 17, NULL, '', NULL, 10, NULL),
(118, 'BILLIARDS & SNOOKERS', 'KENT-3600', '            ', 17, NULL, '', NULL, 10, NULL),
(119, 'BILLIARDS & SNOOKERS', 'KENT-3400', '            ', 17, NULL, '', NULL, 10, NULL),
(120, 'BILLIARDS & SNOOKERS', 'KENT-2900', '            ', 17, NULL, '', NULL, 10, NULL),
(121, 'BILLIARDS & SNOOKERS', 'KENT-1600', '            ', 17, NULL, '', NULL, 10, NULL),
(122, 'BILLIARDS & SNOOKERS', 'KENT-1500', '            ', 17, NULL, '', NULL, 10, NULL),
(123, 'Dual Cable Column And Chin Up / Dip Machine', ' MDC2000', '	Built to deliver strength-and deliver it does. Structurally and biomechanically designed for intensive club use, the Dual Cable Column and Chin Up/Dip rigid body structure plays a critical role in the machineâ€™s superb handling. Its large base frame aids stability and comfort, and yields a neutral weight distribution. Substantial rear and side sub frames help eliminate lateral torsion and vibration.            ', 8, NULL, '', NULL, 6, NULL),
(124, 'Smith Machine', 'MSM', 'The Smith Machine is the product of advanced biomechanical design, superior structural engineering and meticulous quality standards. It is a collection of the best benefits the Smith Machine, Half-Cage and Multi-station Gyms have to offer and its backed by the best warranty in the industry.\r\nï¼Ž	Oval 11-gauge steel gives the MSM a modern look and fantastic stability. Case hardened rods and club-quality bearings ensure smooth performance at any weight. Add it all up and you have got the perfect smith machine for any facility.', 8, NULL, '', NULL, 6, NULL),
(125, 'Chin/Dip Machine', 'MCD2100', '\r\nï¼Ž	Built to deliver strengthâ€”and deliver it does. Structurally and biomechanically designed for intensive club use, the Chin/Dipâ€™ rigid body structure plays a critical role in the machineâ€™s superb handling. Its large base frame aids stability and comfort, and yields a neutral weight distribution. Substantial rear and side subframes help eliminate lateral torsion and vibration.', 8, NULL, '', NULL, 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(250) NOT NULL,
  `datetime` datetime NOT NULL,
  `reviewer` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `content`, `datetime`, `reviewer`, `product_id`) VALUES
(1, 'r1', '2017-02-09 15:05:31', 'Re1', 1),
(2, 'r2', '2017-02-10 15:06:03', 'Re2', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
