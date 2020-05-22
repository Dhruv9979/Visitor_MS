-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 07:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baps`
--

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `Day` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`Day`) VALUES
('Mon'),
('Tue'),
('Wed'),
('Thu'),
('Fri'),
('Sat'),
('Sun');

-- --------------------------------------------------------

--
-- Table structure for table `tab_grouptype`
--

CREATE TABLE `tab_grouptype` (
  `GroupType` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_grouptype`
--

INSERT INTO `tab_grouptype` (`GroupType`) VALUES
('Edu - High School (Gr 9 - Gr 12)'),
('Edu - Kindergarden'),
('Edu - Pre-Primary (G1 - G4)'),
('Edu - Primary (G5 - G8)'),
('Edu - Students Others'),
('Edu - University/College'),
('Event Program  - Baby Shower'),
('Event Program  - Wedding'),
('Event Program - Others'),
('Group - Children/Youth'),
('Group - Cooperate'),
('Group - Seniors'),
('Group - Women'),
('Media'),
('Others'),
('Photography'),
('Politicans'),
('Prof - Engineers'),
('Prof - Medical'),
('Prof - Teachers'),
('Professional - Others'),
('Religious - Church'),
('Religious - Hindu/Bhuddist'),
('Religious - Islamic'),
('VIP');

-- --------------------------------------------------------

--
-- Table structure for table `tab_guides`
--

CREATE TABLE `tab_guides` (
  `GuideID` int(11) NOT NULL,
  `GuideName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `City` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Province` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PostalCode` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Country` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CellNumber` int(10) DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datetimestamp` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_guides`
--

INSERT INTO `tab_guides` (`GuideID`, `GuideName`, `Address`, `City`, `Province`, `PostalCode`, `Country`, `CellNumber`, `Email`, `Datetimestamp`) VALUES
(1, 'Rajni Kotecha', 'Birchmount Rd', 'Toronto', 'ON', '1a2b3c', 'Canada', 1234567890, 'abc@gmail.com', '2019-12-25'),
(7, 'a', 'a', 'a', 'a', 'a', 'a', 123456, 'a', '2020-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `tab_language`
--

CREATE TABLE `tab_language` (
  `Language` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_language`
--

INSERT INTO `tab_language` (`Language`) VALUES
('English'),
('English & Gujarati'),
('English & Hindi'),
('Gujrati'),
('Hindi');

-- --------------------------------------------------------

--
-- Table structure for table `tab_organizers`
--

CREATE TABLE `tab_organizers` (
  `OrganizerID` int(11) NOT NULL,
  `GroupName` varchar(240) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ContactName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `City` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Province` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PostalCode` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Country` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Telephone1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Telephone2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FaxNumber` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SchoolGeneralEmail` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SubscribedToMailingList` bit(1) DEFAULT NULL,
  `HowDidYouHear` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Comments` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `Datetimestamp` datetime DEFAULT NULL,
  `Diwaliinvites` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_organizers`
--

INSERT INTO `tab_organizers` (`OrganizerID`, `GroupName`, `ContactName`, `Address1`, `Address2`, `City`, `Province`, `PostalCode`, `Country`, `Title`, `Telephone1`, `Telephone2`, `FaxNumber`, `SchoolGeneralEmail`, `Email`, `SubscribedToMailingList`, `HowDidYouHear`, `Comments`, `Datetimestamp`, `Diwaliinvites`) VALUES
(9, 'Amal El Shammah, West Humber Collegiate Institute   ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2008-03-27 21:00:00', b'0'),
(14, 'Bendale Acres Adult Day Program', 'Nicole McGouran', '2920', 'Lawrence  Ave', 'Scarborough', NULL, 'M1P 2T8', NULL, NULL, '416-397-7048', NULL, NULL, NULL, 'nmcgour@toronto.ca', b'0', NULL, NULL, '2008-03-27 21:00:00', b'0'),
(62, 'Michael Power St Joseph High School', 'Katherine Zappala', '675', 'O\'Brien Street', 'North Bay', 'ON', 'P1B9R3', NULL, NULL, '705-494-8600', NULL, '705-494-4778', NULL, 'zappalak@npsc.edu.on.ca', b'0', NULL, NULL, '2008-03-27 21:00:00', b'1'),
(67, 'New Beginnings', 'Rose So', '621', 'Galloway Crescent', 'Mississauga', 'ON', 'L5C 3R7', NULL, NULL, '905-232-3672', NULL, '905-232-3671', NULL, 'rose_so@hotmail.com', b'0', NULL, NULL, '2008-03-27 21:00:00', b'0'),
(68, 'North Park Collegiate and Vocational School', 'Kathryn Cottrill', '280', 'North Park Street', 'Brantford', 'Ontario', NULL, 'Canada', 'Teacher', '519-759-2560', NULL, NULL, NULL, 'lombardi7@rogers.com', b'0', NULL, NULL, '2008-03-27 21:00:00', b'0'),
(102, 'Bell Mobility Inc.', 'Charlotte Koven', '210', 'Wilson Ave.', NULL, NULL, 'M5M 3B1', NULL, NULL, '416-487-3281', NULL, NULL, NULL, 'char@templesinai.net', b'0', NULL, NULL, '2008-03-27 21:00:00', b'0'),
(103, 'The Classic Social Committee', 'Gerda Frieberg', '2204-85', 'Skynark Dr.', 'Toronto', 'ON', 'M2H 3P2', NULL, NULL, '416-495-7808', NULL, NULL, NULL, 'gfrieberg@rogers.com', b'0', NULL, NULL, '2008-03-27 21:00:00', b'0'),
(104, 'The Excellence Social Activities Committee', 'Ann Samson', '89', 'Skymark Drive', 'Toronto', 'ON', 'M2H 3S6', NULL, NULL, '416-491-9109', NULL, NULL, NULL, 'annsamson@rogers.com', b'0', NULL, NULL, '2008-03-27 21:00:00', b'0'),
(147, 'TD Bank - Pineville Branch', 'Husan', '4499', 'Hwy 7 west', 'Woodbridge', 'Ontario', 'L4L-9A9', 'Canada', 'Associate, Commercial Banking', '905-264-3744', NULL, '905-805-8209', NULL, 'kumail.hasan@td.com', b'0', NULL, NULL, '2008-04-20 08:55:00', b'0'),
(154, 'The Friendship Club/ Sydenham St. United', 'Dr. Barry', '120', 'Sydenham Street', NULL, 'Ontario', 'N3R-3Y8', 'Canada', 'Minister', '519-753-1248', NULL, '519-753-1965', NULL, 'sydenham@bfree.on.ca', b'0', NULL, NULL, '2008-04-24 16:04:49', b'0'),
(155, 'Stratford Northwestern Secondary school', 'Stephen Fischer', '428', 'Forman Ave', 'Strathnd', 'Ontario', 'N5A-5A8', 'Canada', 'Teacher', '519-273-5123', NULL, '519-271-7834', NULL, 'globalstudiesclub@hotmail.com', b'0', NULL, NULL, '2008-04-25 19:52:43', b'1'),
(158, 'All Saints Catholic Secondary School', 'Elaine Dawe', '3001', 'Country Lane', 'Whitby', 'Ontario', 'L1P-1M1', 'Canada', NULL, '416-668-6058', '1-905-666-7815', NULL, NULL, 'edawe@rogers.com', b'0', NULL, NULL, '2008-05-04 11:00:53', b'1'),
(165, 'North Bay & District Canadian Club', 'Audrey Sullivan', '1364', 'Gorman St.', 'North Bay', 'Ontario', 'P1B-2Y4', 'Canada', 'Tour Director', '705-474-9883', NULL, NULL, NULL, 'wjsull@sympatico.ca', b'0', NULL, NULL, '2008-05-09 21:59:49', b'0'),
(177, 'Terry Tan Child Centre', 'Anu Jain', '15', 'Rossburn Dr,', 'Etobicoke', 'Ontario', 'M9C-2P7', 'Canada', 'ECE', '416-621-9722', NULL, '416-621-5096', NULL, 'shenil@hotmail.com', b'0', NULL, NULL, '2008-06-01 10:37:44', b'1'),
(183, 'Melntyre', 'Ruth', '68', 'Hesp Drive', 'Bolton', 'Ontario', 'L7E-2R1', 'Canada', NULL, '905-857-1451', NULL, '905-857-9726', NULL, 'meintre.ruth@symptico.ca', b'0', NULL, NULL, '2008-06-09 22:04:20', b'0'),
(187, 'TD Bank Fincial Group', 'Arunbhai Pradhan', '66', 'Wellington St. West', 'Toronto', 'Ontario', 'M5K-1A2', 'Canada', 'Architect', '416-490-0685', NULL, '416-490-1408', NULL, 'papaprad@on.aibn.com', b'0', NULL, NULL, '2008-06-12 14:59:07', b'0'),
(193, 'AWIC Community and Social Service', 'Gagan Babra', '3030', 'Don Mills Road', NULL, 'Ontario', 'M2J-3C1', 'Canada', 'Volunteer Coordinator', '416-566-4524', NULL, '416-499-4077', NULL, 'awic2006@gmail.com', b'0', NULL, NULL, '2008-06-24 12:31:13', b'0'),
(197, 'Bangladesh Hindu Temple', 'Alok Chowdhury', '10015', 'Contant Ave,Hamtramck, Michigan', NULL, 'Ontario', NULL, 'Canada', 'President', '313-368-6893', NULL, NULL, NULL, 'arobindanath808@msn.com', b'0', NULL, NULL, '2008-07-02 21:17:50', b'0'),
(218, 'The Harbourfront Centre', 'Diana', '235', 'Queens Quay West', NULL, 'Ontario', 'M5J-2G8', 'Canada', 'Artistic Associate', '416-952-9994', NULL, '416-973-8729', NULL, 'dwebley@harbourfrontcentre.com', b'0', NULL, NULL, '2008-09-09 15:20:44', b'0'),
(253, 'Albion Gardens Presbyterian Church', 'Ronald VanAuken', '80', 'Thistle Down Blvd.', 'Toronto', 'Ontario', NULL, 'Canada', 'Pastor', '905-431-0385', NULL, NULL, NULL, '6pmvanauken@rogers.com', b'0', NULL, NULL, '2008-10-14 12:21:30', b'0'),
(254, 'Albion Linc', 'Susan', '1530', 'Albion Rd,', 'Toronto', 'Ontario', 'M9V-1B4', 'Canada', 'Instructor', '416-394-6232', NULL, '416-394-6447', NULL, 'shaliechuk@hotmail.com', b'0', NULL, NULL, '2008-10-14 14:55:57', b'0'),
(258, 'North Kipling JMS', 'Sona Majithia', '2', 'Rowntree Rd.', 'Etobicoke', 'Ontario', 'M9V-5C7', 'Canada', 'Teacher', '416-394-6340', NULL, '416-394-6344', 'sona.majithia@tel.tdsb.on.ca', 'sona.majithia@tel.tdsb.on.ca', b'0', NULL, NULL, '2008-10-20 17:00:25', b'0'),
(268, 'The Buddhist Ass. Of Canada Cham Shan Temple', 'Irene Poon', '7254', 'Bayview Ave.', 'Thornhill', 'Ontario', 'L3T-2R6', 'Canada', NULL, '905-886-1522 E - 227', NULL, '905-881-0386', 'shaulinchau@hotmail.com', NULL, b'0', NULL, NULL, '2008-11-18 14:05:23', b'0'),
(274, '_Politicans', NULL, NULL, NULL, NULL, 'Ontario', NULL, 'Canada', NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2009-01-16 13:58:08', b'0'),
(275, '_VIPs', NULL, NULL, NULL, NULL, 'Ontario', NULL, 'Canada', NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2009-01-21 17:55:51', b'0'),
(278, 'Beta Sigma Phi', 'Pam Forsyth', '48', 'Cousins Court', 'Bradford', 'Ontario', 'L3Z-0H1', 'Canada', 'Secretary', '905 775 0538', '905 836 2433', NULL, NULL, '	pjforsyth2014@gmail.com', b'0', NULL, NULL, '2009-01-22 14:11:09', b'0'),
(281, 'American Women\'s Club Of Toronto', 'Dorothy Richardson', '19', 'Oakhurst Drive,', 'North York', 'Ontario', 'M2K-2N2', 'Canada', NULL, '416-226-6308', NULL, NULL, NULL, 'dotrichardson2@hotmail.com', b'0', NULL, NULL, '2009-01-26 09:44:02', b'0'),
(284, '_Media', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2009-01-29 16:33:57', b'0'),
(289, 'The \"Owls\" Group', 'Kathleen Roberts', '39', 'Edenvalley Drive', NULL, 'Ontario', 'M9A-4Z5', 'Canada', 'Retired', '416-243-7735', NULL, '416-243-7735', NULL, NULL, b'0', NULL, NULL, '2009-02-06 19:34:50', b'0'),
(294, 'Alexander Mackenize High School', 'Wanye Shaw', '300', 'Major Mackenize Dr. W,', 'Richmond Hill', 'Ontario', 'L4C-3S3', 'Canada', 'Teacher', '905-884-0554', NULL, '905-884-4694', NULL, 'shaw750@hotmail.com', b'0', NULL, NULL, '2009-02-24 16:19:08', b'0'),
(300, '_Photography', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2009-03-06 17:37:30', b'0'),
(311, 'The Mystery Group', 'Henza Miller', '233', 'Franklin Ave,', 'Thornhill', 'Ontario', 'L4J-7L5', 'Canada', NULL, '905-882-1450', NULL, NULL, NULL, 'henzamiller@hotmail.com', b'0', NULL, NULL, '2009-03-16 17:57:24', b'0'),
(312, 'Back to Basics Learing Center', 'Berry', '39', 'Osterhout Place,', 'Scarboro', 'Ontario', 'M1B-1E4', 'Canada', NULL, '647-436-8772', NULL, NULL, NULL, '2btruthful@gmail.com', b'0', NULL, NULL, '2009-03-16 19:42:49', b'0'),
(334, 'Barrie Kempenfelt Probus Club', 'Rochelle', '203', 'Collier St.', 'Barrie', 'Ontario', NULL, 'Canada', 'Social Convenor', '705-721-4632', NULL, NULL, NULL, 'rochmul@rogers.com', b'0', NULL, NULL, '2009-04-14 15:29:01', b'0'),
(361, 'Temple Sinai Synagogue Religious School', 'Perry Silverberg', '210', 'Wilson Ave,', 'Toronto', 'Ontario', 'M5M-3B1', 'Canada', 'Teacher', '416 487-3281x240', NULL, '416 487-5161', NULL, 'char@templesinai.net', b'0', NULL, NULL, '2009-07-02 18:51:18', b'0'),
(368, 'Meghal Pandya', 'Meghal Pandya', '300', 'Ray Lawson Blvd,', 'Brampton', 'Ontario', 'L6Y-5H5', 'Canada', NULL, '905-874-4090', NULL, NULL, NULL, 'meghal.pandya@gmail.com', b'0', NULL, NULL, '2009-08-11 19:51:58', b'0'),
(371, 'Avalon Children\'s Residence', 'Stacey Thurman', 'Po Box 279', NULL, 'Hillsburgh, \r\n     Hillsburgh, \r\nHillsburgh,', 'Ontario', 'N0B-1Z0', 'Canada', 'Diversity Facilitator', '519-833-0188', NULL, NULL, NULL, 'thurman.stacey@gmail.com', b'0', NULL, NULL, '2009-09-09 22:09:46', b'0'),
(380, 'Storefront Humber Inc.', 'Bruce', '2445', 'Lake Shoe Blvd. West', 'Etobicoke', 'Ontario', 'M8V-1C5', 'Canada', 'Coordinator', '416-259-4207', NULL, '416-259-4200', NULL, ' epc@stoefronthumber.ca', b'0', NULL, NULL, '2009-10-16 10:51:33', b'0'),
(387, 'Beach Photo Club', 'John Wallace', '98', 'Glen Davis', NULL, 'Ontario', 'M4E-1X5', 'Canada', 'Coordinator', '416-690-2077', NULL, NULL, NULL, 'ziggydoodle@rogers.com', b'0', NULL, NULL, '2009-11-18 11:52:31', b'0'),
(394, 'Nigara Hindu Samaj', 'Aarti Mehta', NULL, 'P.O.Box 25008 t Catharines On', NULL, 'Ontario', 'L2T-4C4', 'Canada', 'Co.ordinator', '905-641-1879', NULL, NULL, NULL, 'aruna.mehta59@yahoo.ca', b'0', NULL, NULL, '2009-12-02 11:17:17', b'0'),
(395, 'North Albion CI', 'Navjot Jandu', '2580', 'Kipling Ave', 'Etobicoke', 'Ontario', 'M9V-3B2', 'Canada', 'Teacher', '416-394-7550', '647-388-0732', '416-394-6902', NULL, 'kirk.moss@tdsb.on.ca', b'0', NULL, 'Pallav Bhavsar\'s school', '2009-12-03 15:20:46', b'0'),
(409, 'NEWH INC', 'MEREDITH WHIPP', NULL, 'C/O 600 ORWELL STREET, UNIT 17,', 'MISSISSAUGA', 'Ontario', NULL, 'Canada', 'PROGRAM DIRECTOR', '905 279 8882', '416-254-8381', '905 279 0889', NULL, 'MWHIPP@TAPPATEC.COM', b'0', NULL, NULL, '2010-03-16 20:29:14', b'0'),
(412, 'Bishop McDonell Cathloic School', 'Michael Brennan/Derek Smydo', '200', 'Clair Road West', 'Guelph', 'Ontario', 'N1L-1L1', 'Canada', 'Teacher', '519-822-9752', NULL, '519-837-1469', NULL, 'dsmydo@wellingtoncdsb.ca', b'0', NULL, NULL, '2010-04-01 16:22:16', b'0'),
(437, 'Bishop Allen Academy', 'Basil Boudreau', '721', 'Royal York Road', 'Etobicoke', 'Ontario', NULL, 'Canada', 'Chaplain', '416-393-5549 (6013)', NULL, '416-397-6074', NULL, 'basil.boudreau@TCDSB.org', b'0', NULL, NULL, '2010-10-08 14:38:35', b'0'),
(457, 'Beaver Valley Probus Club', 'Stella Zahradnik', NULL, 'Beaver Valley Commmunity Center', NULL, 'Ontario', NULL, 'Canada', 'Social Convenor', NULL, '519-599-2477', NULL, 'stella.zahradnik@gmail.com', NULL, b'0', 'Another school or group', NULL, '2011-03-30 13:54:23', b'0'),
(470, 'Michael Power St. Joseph HS', 'Venassa Tesolin', '105', 'Eringate Drive', NULL, 'Ontario', 'M9C-2E7', 'Canada', 'Teacher', NULL, '416 858 0477', '416-393-5742', NULL, 'alexandra.bolcic@tcdsb.org', b'0', 'Friends', NULL, '2011-05-05 19:20:25', b'0'),
(472, 'Bernard Betel Center', 'Raya Shuster', '1003', 'Steeles Avenue', 'Toronto', 'Ontario', 'M2R-3T6', 'Canada', 'Event Co-ordinator', '416-953-0280', NULL, NULL, 'info@felixtours.com', 'felixtours@rogers.com', b'0', 'Other', NULL, '2011-05-17 19:57:46', b'0'),
(485, 'Belinda Yu', 'Belinda Yu', '37', 'Lysander Court', 'Scarborough', 'Ontario', 'M1V-3R2', 'Canada', NULL, NULL, '(416) 702 2292', NULL, NULL, 'belinda.yu@rogers.com', b'0', 'Repeat visit', 'Just visit for 10-15 min.', '2011-07-14 19:01:42', b'0'),
(486, 'North Park Nursing Home', 'Ashtey Bose', '450', 'Bustic Road', 'Toronto', 'Ontario', 'M6L-1W9', 'Canada', 'Programs Manager', '416-247-0531 Ext 28', NULL, '416-247-6159', NULL, 'arose.northpark@rogers.com', b'0', 'Repeat visit', NULL, '2011-08-05 11:03:37', b'0'),
(494, 'Barrie Youth Ambassadors', 'Louise LeRoux', '194', 'Collier Street', 'Barrie', 'Ontario', 'L4M-1H7', 'Canada', 'Teacher', '7057226583', NULL, NULL, NULL, 'ricklou.leroux@gmail.com', b'0', 'Repeat visit', NULL, '2011-09-15 10:34:08', b'0'),
(506, 'AMJ', 'Amina Bajwa', '10610', 'Jane Street', 'Maple', 'Ontario', 'L6A-3A2', 'Canada', 'Secteray Outreach', '647-427-6313', NULL, NULL, NULL, 'amina_hameed@hotmail.com', b'0', 'Friends', NULL, '2011-10-23 09:39:12', b'0'),
(512, 'Big Brothers Big Sisters of Peel', 'Danielle Matos', '23-71', 'West Drive', 'Brampton', 'Ontario', 'L6T-5E2', 'Canada', 'Conversation Club Caseworker', '905 457 7288 EXT 243', NULL, '905 454 0769', NULL, 'zuhal.khoja@bigbrothersbigsisters.ca', b'0', 'Other', NULL, '2011-11-18 11:54:45', b'0'),
(530, 'The Claremont Retirement Residence', 'Jordan Shuler', '305', 'Balliol Street', NULL, 'Ontario', NULL, 'Canada', 'Activity Director', NULL, '416.440.0012', NULL, NULL, 'jordan.shuler@reveraliving.com', b'0', NULL, NULL, '2012-03-16 13:55:41', b'0'),
(537, 'The Group', 'June Musselwhite', '16', 'McArthur St.,', 'Toronto', 'Ontario', NULL, 'Canada', NULL, '416 245 5524', NULL, NULL, NULL, 'junemusselwhite@rogers.com', b'0', NULL, NULL, '2012-04-24 11:34:48', b'0'),
(539, 'Neighbourhood Link Support Services', 'Amy Wu', '3036', 'Danforth Ave.', 'Toronto', 'Ontario', NULL, 'Canada', NULL, '416-693-4762', NULL, NULL, NULL, 'awu@neighbourhoodlink.org', b'0', NULL, NULL, '2012-04-24 14:29:00', b'0'),
(542, 'NEEHILL INVESTMENT CLUB', 'STEPHEN RISK', NULL, 'c/o 27 Baby Point Cres', 'Toronto', 'Ontario', NULL, 'Canada', 'President', NULL, '416 766 3003', NULL, NULL, 'stpr@rogers.com', b'0', NULL, NULL, '2012-05-03 10:00:58', b'0'),
(579, 'Banting Memorial High School', 'LeVern Pooke', '203', ' Victoria Street East', 'Alliston', 'Ontario', NULL, 'Canada', NULL, '7054356288t40184', NULL, NULL, NULL, 'lpooke@mail.scdsb.on.ca', b'0', NULL, NULL, '2012-10-12 10:26:33', b'0'),
(588, 'Bishop Marrocco/Thomas Mbishop morroco HS', ' Veronika Zydron', '1515', 'Bloor Street West', 'Toronto', 'Ontario', NULL, 'Canada', 'Chaplain/Religion Teacher', '(416) 393-5545', NULL, NULL, NULL, 'veronika.zydron@tcdsb.org', b'0', NULL, NULL, '2012-11-01 14:52:01', b'0'),
(593, 'AZ Bus Tours Inc.', 'Gloria Cheung', '3670', 'Weston Road', 'Toronto', 'Ontario', NULL, 'Canada', 'Sales Manager', NULL, '416-748-8828 (X116)', '416-742-6886', NULL, 'gIorìa.cheung@az-bus.com', b'0', NULL, NULL, '2012-12-12 15:12:20', b'0'),
(596, 'Beth Torah Congregation', 'Jenn Ferman', '47', 'Glenbrook Avenue', 'Toronto', 'Ontario', 'm6b-2l7', 'Canada', 'Director of Education', '4166024647', NULL, NULL, ' Programs@livingjewishly.org', NULL, b'0', 'Repeat visit', NULL, '2013-01-20 21:53:20', b'0'),
(609, 'Tendercare Living Center', 'Lisa Ta', '1020', 'Mcnicoll Ave', 'scarborough', 'Ontario', 'M1W-2J6', 'Canada', 'Manager', '4164992020 Ext 230', NULL, '4164993379', NULL, 'jmaxwell@tendercare.ca', b'0', NULL, NULL, '2013-04-19 12:22:17', b'0'),
(635, 'North American Interfaith network', 'Chander khanna', '52', 'Gossamer Ave', NULL, 'Ontario', 'M2M-2X4', 'Canada', 'Organizer', '647 215 9645', NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2013-07-18 15:53:42', b'0'),
(649, 'The Dorothy Ley Hospice', 'Rami  Shami', '220', 'Sherway Dr', 'Etobicoke', 'Ontario', 'M9C-0A7', 'Canada', 'Coordinator', '416 626 0116 ext 237', NULL, '416 626 7285', NULL, 'rshami@dlhospice.org', b'0', NULL, NULL, '2013-10-17 13:09:26', b'0'),
(653, 'TDSB Woburn CI', 'Riaz Khamis', '2222', 'Ellesmere Rd', 'Toronto', 'Ontario', 'M1g-3M3', 'Canada', 'Teacher', '647 290 4526', NULL, '416 396 4569', NULL, 'riaz.khamis@tdsb.on.ca', b'0', NULL, NULL, '2013-10-22 10:31:04', b'0'),
(672, 'Ahmadiya Institute of Islamic', 'Amna Tauqeer', '106010', 'JaneSt', 'Maple', 'Ontario', 'L6A-3A2', 'Canada', 'Leader', '905-303-4000', NULL, NULL, NULL, 'aisha.ahmadiyya@gmail.com', b'0', NULL, NULL, '2014-04-08 18:51:41', b'0'),
(695, 'TDSB', 'Olga Galperin', '33', 'Drewry Ave', 'Toronto', 'Ontario', NULL, 'Canada', NULL, NULL, '416 824 4487', NULL, NULL, 'olga@galperin.com', b'0', NULL, NULL, '2014-06-09 17:11:54', b'0'),
(722, 'Bayside secondary school', 'Emily B Narayan', '1247', 'Old Highway 2, RR2', 'Belleville', 'Ontario', 'K8N-4Z2', 'Canada', 'Teacher', '613 966 2922', NULL, NULL, NULL, 'Enarayan@HPEDSB.on.ca', b'0', NULL, NULL, '2014-11-04 12:02:26', b'0'),
(745, 'The Church at Mt Gilead', 'Dave Thurman', '6019', 'E ST Rd 144', 'Mooresville', 'Indiana', NULL, 'USA', NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2015-06-26 13:35:14', b'0'),
(749, 'Bharatiya Culture Association of Ontario', 'Jagdish Patel', '6136', 'Silken Laumann Way', 'Mississauga', 'Ontario', 'L5V-1A2', 'Canada', NULL, '647 632 7482', ' 289 729 0707', NULL, NULL, 'jagpatel123@gmaail.com', b'0', NULL, NULL, '2015-07-20 15:12:58', b'0'),
(753, 'Amica at Oakville', 'Reem Toma', '160', 'Bronte Rd', 'Oakville', 'Ontario', 'L6L-3C1', 'Canada', 'Wellness & Vitality Coordinator', '905 842 8167', NULL, NULL, NULL, 'r.toma@amica.ca', b'0', NULL, NULL, '2015-09-16 17:32:50', b'0'),
(778, 'Betel Centre', 'Hava Aharon', '1003', 'Steeles Ave W', 'Toronto', 'Ontario', 'M2R-3W7', 'Canada', NULL, NULL, '416 226 1179', NULL, NULL, 'havaroni@bell.net', b'0', NULL, NULL, '2016-06-07 14:10:11', b'0'),
(796, 'Ahmaidya Muslim Women\'s Association', 'Maliha sattar', '3001', 'Finch ave west', 'Toronto', 'Ontario', 'M9m-3A9', 'Canada', 'Leader', '6476282880', '6475758225', NULL, NULL, ' malihaimtiaz30@gmail.com', b'0', NULL, NULL, '2016-08-09 13:03:55', b'0'),
(798, 'Bangladesh C S of Hinduism & Cultural Studies', 'Satyabrata Purkayastha', '16', 'Dohme Ave', 'East York', 'Ontario', NULL, 'Canada', NULL, '416 693 4444', '647 328 4326', NULL, 'info@hindumondir.org', NULL, b'0', NULL, NULL, '2016-08-23 10:40:19', b'0'),
(801, 'Ahmadiya Muslim Jamaat', 'Sammer Mian', '320', 'Mickey Crt', 'Milton', 'Ontario', NULL, 'Canada', NULL, ' 416-949-8187', NULL, NULL, NULL, 'sammer.mian@gmail.com', b'0', NULL, NULL, '2016-09-13 11:07:23', b'0'),
(804, 'Alice Tours', 'Alice Leung', '7', 'Miramar Drive', 'Markham', 'Ontario', 'L6E-1Z6', 'Canada', NULL, NULL, '647 297 3988', NULL, NULL, 'aliceleungjj@hotmail.com', b'0', NULL, NULL, '2016-09-20 12:46:11', b'0'),
(830, 'Andrew Chen', 'Toronto Hiking group', '703', 'Don Mills', 'Toronto', 'Ontario', 'M3C-3N3', 'Canada', NULL, NULL, '647 918 8012', NULL, NULL, 'xiaozhuang1234@hotmail.com', b'0', NULL, NULL, '2017-02-20 13:56:35', b'0'),
(853, 'The Order of St. Lazarus', ' Francie Maroosis', '707-2', 'Carlton Street', 'Toronto', 'Ontario', 'M5B-1J3', 'Canada', NULL, '416-455-3474', NULL, NULL, NULL, 'rfirth@hpco.ca', b'0', NULL, NULL, '2017-08-23 17:41:00', b'0'),
(872, 'American Women\'s Club of Southern Ontario', 'Tracy Hudson', '2095', 'Silwell Crt', 'Burlington', 'Ontario', 'l7p-3p9', 'Canada', NULL, '905 467 5999', NULL, NULL, NULL, 'discovery@awco.ca', b'0', NULL, NULL, '2017-11-23 17:47:35', b'0'),
(890, '_Private or Single Groups', 'Susan Feldstein', '12', 'Brigs Ave', 'Richmond Hill', 'ont', 'L4B-6S3', 'Toronto Canada', 'Leader', '64709885666', NULL, NULL, NULL, 'Feidstein.susan @gmail.com', b'0', NULL, NULL, '2018-03-23 12:15:23', b'0'),
(898, 'Student Christian Fellowship', 'Seth Beebe', '204-40', 'Goodstone Rd', 'Northyork', 'Ontario', NULL, 'Canada', 'Leader', '437-982-8428', ': 437-982-8428', NULL, NULL, NULL, b'0', NULL, NULL, '2018-04-23 13:12:21', b'0'),
(914, 'Newcomer Youth Leadership Development- Etobicoke YMCA', 'Tania Ghazinejad', '1530', 'Albion Road', 'Etobicoke', 'Ontario', 'M9V-5H4', 'Canada', NULL, '416 846 6300', NULL, NULL, NULL, 'Tania.Ghazinejad@ymcagta.org', b'0', NULL, NULL, '2018-07-19 16:17:27', b'0'),
(937, 'The Big Red Barn creativity & Welness Centre', 'Fotini Chandrika Walton', NULL, NULL, NULL, 'Ontario', NULL, 'Canada', NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, '2019-03-27 11:01:43', b'0'),
(941, 'Mika Chaudhry', 'Mika Chaudhry', '335', 'Webb Dr', 'Mississauga', 'Ontario', 'L5B-4A1', 'Canada', 'Self', '6476339930', NULL, NULL, NULL, 'mika.chaudhry@gmail.com', b'0', NULL, NULL, '2019-04-17 10:32:23', b'0'),
(953, 'Amanda Persaud', NULL, '3310-25', 'Telegrammews', 'Toronto', 'Ontario', NULL, 'Canada', NULL, '4165246269', NULL, NULL, NULL, 'amandapersaud@live.ca', b'0', NULL, NULL, '2019-05-01 09:49:24', b'0'),
(958, 'Nilakshan Jesuthasa', 'Nilakshan Jesuthasa', '148', 'Bruce Canon Dr', 'Bomanville', 'Ontario', 'L1C-0W3', 'Canada', 'Self', '6479815258', NULL, NULL, NULL, 'nilakshanjesuthasa@gmail.com', b'0', NULL, NULL, '2019-05-08 10:41:03', b'0'),
(960, 'Nithysha Singaravelan', 'Nithysha Singaravelan', '10', 'Corriane Ave', 'Whitby', 'Ontario', 'L1M-2J2', 'Canada', 'Self', '6473001041', NULL, NULL, NULL, 'nitthu29@gmail.com', b'0', NULL, NULL, '2019-05-09 10:14:34', b'0'),
(987, '_Weekends', 'WALKS IN AT MANDIR', NULL, NULL, NULL, 'Ontario', NULL, 'Canada', NULL, NULL, NULL, NULL, NULL, NULL, b'0', NULL, NULL, NULL, b'0'),
(1001, 'The cross-cultural community services association', 'Sisi Yao', '3636', 'Steels Ave east 213 A', 'Markaham', 'Ontario', 'L3R-1K9', 'Canada', 'Leader', '9059481671', NULL, NULL, NULL, 'syao@tccsa.org', b'0', NULL, NULL, '2019-09-12 13:01:35', b'0'),
(1014, 'Alps Welding Ltd', 'Jignesh Patel', '400', 'New Huntington Rd', 'Vaughn', 'Ontario', 'L4H-0R4', 'Canada', 'Organizor', '6473811492', NULL, NULL, NULL, 'jigs_p99@yahoo.co.uk', b'0', NULL, NULL, '2019-11-12 09:58:03', b'0'),
(1017, 'Autism Ontario', 'Sinthia Chowdry', '1179', 'King St west', 'Toronto', 'Ontario', 'M6K-3C5', 'Canada', 'Organizor', NULL, '4162469592 236', NULL, NULL, NULL, b'0', NULL, NULL, '2019-11-20 10:19:57', b'0'),
(1127, 'aaaaa', '', '', '', '', '', '', '', '', '', '', '', '', '', b'0', NULL, '', '2020-03-12 22:52:11', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tab_source`
--

CREATE TABLE `tab_source` (
  `Source` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_source`
--

INSERT INTO `tab_source` (`Source`) VALUES
('Another school or group'),
('Doors Open'),
('Friends'),
('Other'),
('Press'),
('Repeat visit');

-- --------------------------------------------------------

--
-- Table structure for table `tab_status`
--

CREATE TABLE `tab_status` (
  `Visit_Status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_status`
--

INSERT INTO `tab_status` (`Visit_Status`) VALUES
('Booked'),
('Cancelled'),
('Confirmed'),
('Paid'),
('Pending'),
('Photography'),
('Resecduled'),
('To be Invoiced (visited)'),
('Visited');

-- --------------------------------------------------------

--
-- Table structure for table `tab_users`
--

CREATE TABLE `tab_users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Role` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_users`
--

INSERT INTO `tab_users` (`ID`, `Username`, `Password`, `Role`) VALUES
(1, 'admin@gmail.com', '1234', 'admin'),
(2, 'user@gmail.com', '4321', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tab_visitorgroups`
--

CREATE TABLE `tab_visitorgroups` (
  `OrganizerID` int(11) DEFAULT NULL,
  `GroupID` int(11) NOT NULL,
  `DateVisit` datetime DEFAULT NULL,
  `TimeVisit` datetime DEFAULT NULL,
  `Day` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GroupName` varchar(240) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `City` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Province` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Postalcode` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Telephone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GroupType` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Male` int(11) DEFAULT NULL,
  `Female` int(11) DEFAULT NULL,
  `Handicaped` int(11) DEFAULT NULL,
  `TotalVisitors` int(11) DEFAULT NULL,
  `GuideRequired` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GuideName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VisitToMuseum` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GroupInfo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DataInputDate` datetime DEFAULT NULL,
  `MealStatus` bit(1) DEFAULT NULL,
  `Exhibition_Seva` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tab_visitorgroups`
--

INSERT INTO `tab_visitorgroups` (`OrganizerID`, `GroupID`, `DateVisit`, `TimeVisit`, `Day`, `GroupName`, `Address`, `City`, `Province`, `Postalcode`, `Telephone`, `Email`, `GroupType`, `Male`, `Female`, `Handicaped`, `TotalVisitors`, `GuideRequired`, `GuideName`, `VisitToMuseum`, `GroupInfo`, `Status`, `DataInputDate`, `MealStatus`, `Exhibition_Seva`) VALUES
(9, 10, '2007-12-22 00:00:00', '1899-12-30 13:00:00', 'Sat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, NULL, 20, 'Yes', NULL, NULL, NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(6, 13, '2007-12-07 00:00:00', '1899-12-30 17:00:00', 'Fri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, NULL, 15, 'Yes', 'Jitu/Nileshbhai', 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(16, 17, '2007-12-12 00:00:00', '1899-12-30 09:45:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 50, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(21, 25, '2007-11-15 00:00:00', '1899-12-30 10:00:00', 'Thu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, NULL, 25, 'Yes', NULL, 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(22, 26, '2007-12-19 00:00:00', '1899-12-30 09:45:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 90, 'Yes', NULL, 'No', NULL, NULL, '2014-02-24 14:48:20', b'0', NULL),
(28, 35, '2008-05-08 00:00:00', '1899-12-30 11:00:00', 'Thu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 22, 'Yes', NULL, 'Yes', NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(29, 36, '2007-11-16 00:00:00', '1899-12-30 13:00:00', 'Fri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 25, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(31, 38, '2007-11-20 00:00:00', '1899-12-30 09:45:00', 'Tue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 50, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(34, 41, '2007-12-01 00:00:00', '1899-12-30 10:30:00', 'Sat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 20, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(35, 43, '2007-11-14 00:00:00', '1899-12-30 09:45:00', 'Wed', 'Cardinal Newman School', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 35, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(35, 44, '2007-12-06 00:00:00', '1899-12-30 11:00:00', 'Thu', 'Grand River Collegiate High School', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 25, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(35, 50, '2008-05-01 00:00:00', '1899-12-30 11:00:00', 'Thu', 'Bishop Macdonnell Guelph', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, NULL, 25, 'Yes', NULL, NULL, NULL, 'Booked', '2009-02-28 13:55:45', b'0', NULL),
(35, 51, '2008-05-14 00:00:00', '1899-12-30 09:45:00', 'Wed', 'Cardinal Newman School Stoney Creek', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 35, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(35, 52, '2008-05-15 00:00:00', '1899-12-30 11:00:00', 'Thu', 'Our Lady of Lourdes Guelph', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 35, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(35, 61, '2008-05-07 00:00:00', '1899-12-30 09:45:00', 'Wed', 'Cardinal Newman School Stoney Creek', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 35, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(37, 63, '2007-11-23 00:00:00', '1899-12-30 09:30:00', 'Fri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, NULL, 20, 'Yes', 'Jitu', 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(42, 68, '2007-11-13 00:00:00', '1899-12-30 10:00:00', 'Tue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, NULL, 90, 'Yes', NULL, 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(46, 72, '2007-11-21 00:00:00', '1899-12-30 11:00:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, NULL, 300, 'Yes', NULL, 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(48, 79, '2008-04-29 00:00:00', '1899-12-30 09:45:00', 'Tue', 'Weston Collegiate Institute', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 20, 30, NULL, 50, 'Yes', NULL, NULL, NULL, 'pending', '2008-03-27 21:00:00', b'0', NULL),
(48, 80, '2008-04-30 00:00:00', '1899-12-30 09:45:00', 'Wed', 'Weston Collegiate Institute', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 20, 30, NULL, 50, 'Yes', NULL, NULL, NULL, 'pending', '2008-03-27 21:00:00', b'0', NULL),
(52, 84, '2007-11-20 00:00:00', '1899-12-30 09:00:00', 'Tue', 'Loyola Catholic School', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 45, 'Yes', NULL, 'No', NULL, 'DONE', '2008-04-06 22:47:54', b'0', NULL),
(52, 85, '2007-11-20 00:00:00', '1899-12-30 10:00:00', 'Tue', 'Loyola Catholic School', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 45, 'Yes', NULL, 'No', NULL, 'DONE', '2008-04-06 22:47:52', b'0', NULL),
(56, 88, '2007-11-30 00:00:00', '1899-12-30 11:00:00', 'Fri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Prof - Teachers', 0, 0, NULL, 6, 'Yes', 'Jitu', 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(57, 89, '2007-12-03 00:00:00', '1899-12-30 10:30:00', 'Mon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, NULL, 49, 'Yes', 'Jitu', 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(58, 91, '2008-06-13 00:00:00', '1899-12-30 10:00:00', 'Fri', NULL, NULL, NULL, NULL, NULL, '416-488-2674', 'marymortontours1@aol.com', 'Edu - High School (Gr 9 - Gr 12)', 0, 0, NULL, 47, 'Yes', NULL, 'yes', NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(58, 92, '2008-06-20 00:00:00', '1899-12-30 10:00:00', 'Fri', NULL, NULL, NULL, NULL, NULL, '416-488-2674', 'marymortontours1@aol.com', 'Edu - High School (Gr 9 - Gr 12)', 0, 0, NULL, 47, 'Yes', NULL, 'yes', NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(58, 93, '2008-06-23 00:00:00', '1899-12-30 10:00:00', 'Mon', NULL, NULL, NULL, NULL, NULL, '416-488-2674', 'marymortontours1@aol.com', 'Edu - High School (Gr 9 - Gr 12)', 0, 0, NULL, 50, 'Yes', NULL, 'yes', NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(58, 94, '2008-06-26 00:00:00', '1899-12-30 10:00:00', 'Thu', NULL, NULL, NULL, NULL, NULL, '416-488-2674', 'marymortontours1@aol.com', 'Edu - High School (Gr 9 - Gr 12)', 0, 0, NULL, 47, 'Yes', NULL, 'yes', NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(60, 98, '2007-12-04 00:00:00', '1899-12-30 09:45:00', 'Tue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 80, 'Yes', 'Hari', 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(60, 99, '2007-12-05 00:00:00', '1899-12-30 09:45:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 50, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(61, 100, '2007-11-17 00:00:00', '1899-12-30 13:30:00', 'Sat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 50, 'Yes', NULL, 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(62, 106, '2008-05-07 00:00:00', '1899-12-30 13:00:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 50, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(62, 107, '2008-05-08 00:00:00', '1899-12-30 13:00:00', 'Thu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 50, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(62, 108, '2008-05-09 00:00:00', '1899-12-30 13:00:00', 'Fri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 50, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(62, 109, '2008-05-12 00:00:00', '1899-12-30 13:00:00', 'Mon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 50, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(62, 110, '2008-05-13 00:00:00', '1899-12-30 13:00:00', 'Tue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 50, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(66, 114, '2007-11-27 00:00:00', '1899-12-30 10:00:00', 'Tue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, NULL, 8, 'Yes', 'Jitu/Kshamaben', 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(67, 115, '2007-12-05 00:00:00', '1899-12-30 10:00:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, NULL, 45, 'Yes', 'Jitu/Kokilamami', 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(68, 116, '2007-11-29 00:00:00', '1899-12-30 13:00:00', 'Thu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 35, 'Yes', NULL, 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(70, 118, '2007-11-22 00:00:00', '1899-12-30 12:30:00', 'Thu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, NULL, 35, 'Yes', 'Jitu/Kshamaben/Artiben', 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(74, 123, '2007-11-30 00:00:00', '1899-12-30 11:00:00', 'Fri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, NULL, 100, 'Yes', 'Jitu', 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(79, 129, '2007-12-13 00:00:00', '1899-12-30 13:30:00', 'Thu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 20, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(80, 130, '2007-12-17 00:00:00', '1899-12-30 11:00:00', 'Mon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 55, 'Yes', 'Kshamaben', 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(83, 135, '2007-12-07 00:00:00', '1899-12-30 14:00:00', 'Fri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 19, 'Yes', NULL, 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(87, 139, '2007-11-17 00:00:00', '1899-12-30 14:00:00', 'Sat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, NULL, 50, 'Yes', NULL, 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(88, 141, '2007-11-13 00:00:00', '1899-12-30 12:30:00', 'Tue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 55, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(88, 142, '2007-11-14 00:00:00', '1899-12-30 12:30:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 50, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(89, 143, '2008-01-09 00:00:00', '1899-12-30 09:00:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 46, 'Yes', 'Jitu', 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(91, 145, '2007-11-24 00:00:00', '1899-12-30 11:00:00', 'Sat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 15, 'Yes', NULL, 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(92, 159, '2007-12-03 00:00:00', '1899-12-30 09:45:00', 'Mon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 90, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(92, 160, '2007-12-04 00:00:00', '1899-12-30 09:45:00', 'Tue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 71, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(92, 161, '2007-12-05 00:00:00', '1899-12-30 09:45:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 80, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(93, 162, '2007-11-21 00:00:00', '1899-12-30 09:45:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 50, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(93, 163, '2007-11-22 00:00:00', '1899-12-30 09:45:00', 'Thu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 50, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(93, 164, '2007-12-17 00:00:00', '1899-12-30 09:45:00', 'Mon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 55, 'Yes', 'Jitu', 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(94, 165, '2008-05-12 00:00:00', '1899-12-30 13:30:00', 'Mon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, NULL, 100, 'Yes', NULL, NULL, 'other date 29 May - waiting confirmation', 'emailed', '2008-03-27 21:00:00', b'0', NULL),
(95, 167, '2008-05-05 00:00:00', '1899-12-30 10:15:00', 'Mon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 12, 13, NULL, 25, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(95, 168, '2008-05-07 00:00:00', '1899-12-30 10:15:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 12, 13, NULL, 25, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(95, 169, '2008-05-12 00:00:00', '1899-12-30 10:15:00', 'Mon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 12, 13, NULL, 25, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(231, 172, '2007-12-12 00:00:00', '1899-12-30 10:00:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 45, 'Yes', NULL, 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(149, 174, '2007-11-27 00:00:00', '1899-12-30 11:00:00', 'Tue', 'St. Dominic Catholic Secondary School', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 32, 'Yes', NULL, 'No', NULL, 'DONE', '2009-09-04 17:22:43', b'0', NULL),
(100, 175, '2008-05-09 00:00:00', '1899-12-30 10:15:00', 'Fri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 12, 13, NULL, 25, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(100, 177, '2008-05-14 00:00:00', '1899-12-30 10:15:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 12, 13, NULL, 25, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(100, 178, '2008-05-16 00:00:00', '1899-12-30 10:15:00', 'Fri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 12, 13, NULL, 25, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(104, 184, '2008-07-10 00:00:00', '1899-12-30 09:30:00', 'Thu', 'The Excellence Social Activities Committee', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, NULL, 30, 'Yes', NULL, NULL, NULL, 'Booked', '2008-04-17 13:29:13', b'0', NULL),
(105, 185, '2008-05-27 00:00:00', '1899-12-30 10:00:00', 'Tue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, NULL, 47, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(108, 188, '2008-05-21 00:00:00', '1899-12-30 09:30:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, NULL, 40, 'Yes', NULL, NULL, NULL, 'Booked', '2008-03-27 21:00:00', b'0', NULL),
(112, 192, '2007-11-21 00:00:00', '1899-12-30 16:00:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, NULL, 35, 'Yes', NULL, 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(113, 193, '2007-11-28 00:00:00', '1899-12-30 11:00:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Group - Women', 0, 0, NULL, 25, 'Yes', 'Kshamaben', 'Yes', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(118, 198, '2007-12-19 00:00:00', '1899-12-30 10:00:00', 'Wed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, NULL, 27, 'Yes', NULL, 'No', NULL, 'DONE', '2008-03-27 21:00:00', b'0', NULL),
(124, 206, '2008-06-07 00:00:00', NULL, NULL, 'Fo Guang Shan Buddhist Temple', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 10, 10, 0, 20, NULL, NULL, NULL, 'English Dharma Class', NULL, '2008-04-06 10:26:50', b'0', NULL),
(88, 209, '2008-05-01 00:00:00', '1899-12-30 10:30:00', NULL, 'St. Augustine', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 25, 25, 0, 50, '-1', NULL, '-1', NULL, 'Booked', '2008-04-06 22:37:54', b'0', NULL),
(125, 210, '2008-05-07 00:00:00', '1899-12-30 11:00:00', NULL, 'smcdsb', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, 0, 40, '-1', NULL, '-1', 'pforsyth@smcdsb.on.ca', NULL, '2008-04-06 22:40:40', b'0', NULL),
(52, 211, '2008-05-21 00:00:00', '1899-12-30 09:30:00', NULL, 'Loyola Catholic School', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 40, '-1', NULL, NULL, 'Previous booking May 21', 'Resecduled', '2008-05-16 09:28:02', b'0', NULL),
(35, 213, '2008-05-28 00:00:00', '1899-12-30 09:00:00', NULL, 'Stephen Lewis', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 30, NULL, NULL, '-1', NULL, NULL, '2008-05-02 10:49:12', b'0', NULL),
(88, 214, '2008-05-05 00:00:00', '1899-12-30 10:30:00', NULL, 'St. Augustina', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 25, 25, 0, 50, '-1', NULL, '-1', NULL, 'Booked', '2008-04-07 18:43:51', b'0', NULL),
(88, 221, '2008-05-02 00:00:00', '1899-12-30 10:30:00', NULL, 'St. Augustine', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 25, 25, 0, 50, '-1', NULL, '-1', NULL, 'Booked', '2008-04-11 11:48:42', b'0', NULL),
(88, 222, '2008-05-13 00:00:00', '1899-12-30 10:30:00', NULL, 'St. Augustine', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 25, 25, 0, 50, '-1', NULL, '-1', NULL, 'Booked', '2008-04-11 11:52:06', b'0', NULL),
(138, 225, '2008-06-04 00:00:00', '1899-12-30 13:00:00', NULL, 'Rose of Sharon Services to the Young Parents', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 20, 0, 20, '-1', NULL, '-1', 'Grade 11 and Grade 12 Students with babies and staff members', NULL, '2008-04-16 09:51:55', b'0', NULL),
(141, 228, '2008-06-05 00:00:00', '1899-12-30 11:30:00', NULL, 'St. Demetrius', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 40, 0, 40, '-1', NULL, NULL, NULL, 'Booked', '2008-04-16 12:31:20', b'0', NULL),
(145, 234, '2008-06-10 00:00:00', '1899-12-30 14:15:00', NULL, 'Governor General Canadian Leadership  Conference Tour Group', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, 0, 20, '-1', NULL, '-1', NULL, NULL, '2008-05-08 17:50:18', b'0', NULL),
(145, 235, '2008-05-07 00:00:00', '1899-12-30 10:00:00', NULL, 'Governor General Canadian Leadership Conference Tour Group', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, 0, 4, '-1', NULL, NULL, NULL, NULL, '2008-05-08 17:46:16', b'0', NULL),
(146, 236, '2008-05-17 00:00:00', '1899-12-30 13:00:00', NULL, 'Joy of Yoga', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 2, 8, 0, 10, '-1', NULL, '-1', NULL, 'Booked', '2008-04-18 09:52:19', b'0', NULL),
(149, 240, '2008-05-21 00:00:00', '1899-12-30 11:00:00', NULL, 'St.Dominic Catholic Secondary School', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 25, 25, 0, 50, '-1', NULL, NULL, NULL, 'Booked', '2008-04-21 17:58:48', b'0', NULL),
(151, 241, '2008-05-06 00:00:00', '1899-12-30 11:00:00', NULL, 'Lynda', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, 0, 15, '-1', NULL, '-1', NULL, 'Booked', '2008-04-23 14:57:16', b'0', NULL),
(148, 242, '2008-05-23 00:00:00', '1899-12-30 11:00:00', NULL, 'Facilities & Property Management Staff-city of Mississauga', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, 0, 20, NULL, NULL, NULL, NULL, 'Booked', '2008-04-23 14:16:32', b'0', NULL),
(152, 243, '2008-07-06 00:00:00', '1899-12-30 14:00:00', NULL, 'Oraynu Congregation for Humanistic Judaism', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, 0, 15, '-1', NULL, '-1', NULL, 'Booked', '2008-04-23 15:20:52', b'0', NULL),
(153, 247, '2008-06-07 00:00:00', '1899-12-30 12:00:00', NULL, 'Catholic Women\'s League of Canada', NULL, NULL, NULL, NULL, NULL, NULL, 'Religious - Church', 0, 0, 0, 30, '-1', NULL, NULL, NULL, 'Booked', '2008-04-24 15:48:33', b'0', NULL),
(154, 248, '2008-06-13 00:00:00', '1899-12-30 16:30:00', NULL, 'The Friendship Club/ Sydenham St. United', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 20, 20, 1, 41, '-1', NULL, '-1', NULL, 'Booked', '2008-04-24 16:10:39', b'0', NULL),
(155, 249, '2008-05-13 00:00:00', '1899-12-30 10:30:00', NULL, 'Stratford Northwestern Secondary school', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 35, '-1', NULL, '-1', NULL, 'Booked', '2008-04-25 20:03:04', b'0', NULL),
(156, 251, '2008-06-19 00:00:00', '1899-12-30 09:45:00', NULL, 'St. Stephen\'s Community House - Senior Activities Centre', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 45, '-1', NULL, '-1', NULL, 'Booked', '2008-04-30 12:17:36', b'0', NULL),
(158, 253, '2008-05-28 00:00:00', '1899-12-30 11:00:00', NULL, 'All Saints Catholic Secondary School', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 46, '-1', NULL, '-1', 'Some Student wish to purchase food from Sayona & they eat in the Gym.', 'Booked', '2008-05-04 11:10:17', b'1', NULL),
(159, 254, '2008-06-03 00:00:00', '1899-12-30 10:30:00', NULL, 'Forest Grove United Church', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 40, '-1', NULL, '0', 'Sayona Lunch For $4:00 to be eaten inside Swaminarayan Complex', 'Booked', '2008-05-04 14:03:51', b'0', NULL),
(160, 255, '2008-05-29 00:00:00', '1899-12-30 17:30:00', NULL, 'MNK Finanical Service', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 10, 10, 0, 20, '-1', NULL, '-1', 'No Refreshments', 'Booked', '2008-05-07 08:55:07', b'0', NULL),
(162, 257, '2008-06-09 00:00:00', '1899-12-30 11:00:00', NULL, 'Ismailia Headquarters Seniors Centre', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 48, 52, 0, 100, '-1', NULL, '-1', NULL, 'Booked', '2008-05-04 22:39:03', b'0', NULL),
(163, 258, '2008-07-10 00:00:00', '1899-12-30 18:30:00', NULL, 'Ontario Institute of Quantity Surveyors', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 40, 10, 0, 50, '-1', NULL, NULL, NULL, 'Booked', '2008-05-05 15:34:46', b'0', NULL),
(166, 262, '2008-07-16 00:00:00', '1899-12-30 09:00:00', NULL, 'Canadian Churche\'s Forum for Golbal Ministries', NULL, NULL, NULL, NULL, NULL, NULL, 'Religious - Church', 3, 7, 0, 10, '-1', NULL, '-1', NULL, 'Booked', '2008-05-14 18:37:48', b'0', NULL),
(167, 263, '2008-06-27 00:00:00', '1899-12-30 11:00:00', NULL, 'Healthy Zoroastrian Seniors', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 45, '-1', NULL, '-1', 'They will call for Luch or Refreshment.', 'Booked', '2008-05-15 20:55:00', b'1', NULL),
(168, 264, '2008-06-05 00:00:00', '1899-12-30 18:30:00', NULL, 'Ontario Association of Home Inspectors', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, 0, 60, '-1', NULL, '-1', 'Ref Vijaybhai. Snacks in Yogi Hall. Samosa, Coffee, Colddrinks,Sweet.', 'Booked', '2008-05-27 11:02:59', b'1', NULL),
(169, 266, '2008-06-29 00:00:00', '1899-12-30 12:00:00', NULL, 'Sara Ramsaran', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 9, 9, 0, 18, '-1', NULL, '-1', NULL, 'Booked', '2008-05-19 15:31:54', b'0', NULL),
(91, 267, '2008-06-05 00:00:00', '1899-12-30 11:30:00', NULL, 'St. Edmund Campion Secondary School', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Students Others', 0, 0, 0, 16, '-1', NULL, '-1', NULL, 'Booked', '2008-05-29 08:13:42', b'0', NULL),
(231, 268, '2008-05-29 00:00:00', '1899-12-30 13:00:00', NULL, 'St. Paul Secondary School', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 12, 13, 0, 25, '-1', NULL, NULL, NULL, 'Booked', '2008-05-20 13:54:21', b'1', NULL),
(170, 269, '2008-05-29 00:00:00', '1899-12-30 11:00:00', NULL, 'Canes Home Support Services', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 17, 0, 17, NULL, NULL, NULL, NULL, 'Booked', '2008-05-20 14:20:17', b'0', NULL),
(172, 271, '2008-05-31 00:00:00', '1899-12-30 14:30:00', 'Sat', 'Papadopoulos & Pradhan Architects Inc. & Guests', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 17, 18, 0, 35, '0', NULL, '-1', NULL, 'Booked', '2011-07-07 18:49:37', b'0', NULL),
(173, 273, '2008-06-17 00:00:00', '1899-12-30 14:00:00', NULL, 'City Adult learning Centre, World Religion Students', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 10, 10, 0, 20, '-1', NULL, NULL, NULL, 'Booked', '2008-05-26 14:46:43', b'0', NULL),
(174, 274, '2008-07-22 00:00:00', '1899-12-30 11:30:00', NULL, 'Funtime Travel', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 56, 0, 56, '-1', NULL, '-1', NULL, 'Booked', '2008-05-27 22:55:04', b'0', NULL),
(175, 275, '2008-06-12 00:00:00', '1899-12-30 11:00:00', NULL, 'Unitatian Fellowship of Northwest Toronto', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 3, 7, 0, 10, '-1', NULL, NULL, 'Lunch', 'Booked', '2008-05-28 22:36:13', b'0', NULL),
(177, 277, '2008-08-06 00:00:00', '1899-12-30 09:30:00', NULL, 'Terry Tan Child Centre', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Primary (G5 - G8)', 30, 20, 0, 50, '-1', 'Hari', '-1', NULL, 'Booked', '2008-06-01 10:48:55', b'0', NULL),
(166, 281, '2008-07-16 00:00:00', '1899-12-30 09:00:00', NULL, 'Canadian Churche\'s Forum for Golbal Ministries', NULL, NULL, NULL, NULL, NULL, NULL, 'Religious - Church', 0, 0, 0, 10, '-1', NULL, '-1', NULL, 'Booked', '2008-06-05 21:09:17', b'0', NULL),
(181, 290, '2008-07-04 00:00:00', '1899-12-30 10:00:00', NULL, 'Canada Hindu Heritage Centre', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Pre-Primary (G1 - G4)', 0, 0, 0, 50, '-1', NULL, '-1', NULL, 'Booked', '2008-06-06 23:06:18', b'0', NULL),
(182, 291, '2008-06-10 00:00:00', '1899-12-30 10:30:00', NULL, 'Leaside Retirement Residence', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 12, '-1', NULL, '-1', NULL, 'Booked', '2008-06-06 23:22:50', b'0', NULL),
(119, 292, '2008-06-17 00:00:00', '1899-12-30 10:00:00', NULL, 'William Osler N119 Health Centre Foundation', NULL, NULL, NULL, NULL, NULL, NULL, 'Group - Cooperate', 4, 13, 0, 17, '-1', NULL, '-1', 'Tea, coffee and snacks available', 'Booked', '2008-06-09 21:55:35', b'1', NULL),
(183, 293, '2008-06-10 00:00:00', '1899-12-30 10:00:00', NULL, 'Melntyre', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, 0, 3, '-1', NULL, '-1', NULL, 'Booked', '2008-06-09 22:10:00', b'0', NULL),
(185, 295, '2008-06-13 00:00:00', '1899-12-30 10:30:00', NULL, 'Mandarin Elderly Persons Club', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 75, '-1', NULL, NULL, NULL, 'Booked', '2008-06-11 12:01:37', b'0', NULL),
(189, 301, '2008-06-22 00:00:00', '1899-12-30 09:30:00', NULL, 'Sri Sathya Sai Centre of Middlefild', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 45, '-1', NULL, '-1', NULL, 'Booked', '2008-06-18 09:17:29', b'0', NULL),
(190, 302, '2008-06-26 00:00:00', '1899-12-30 14:00:00', NULL, 'Mississauga Life Care', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 12, '-1', NULL, '-1', NULL, 'Booked', '2008-06-19 22:51:32', b'0', NULL),
(35, 303, '2008-07-29 00:00:00', '1899-12-30 03:30:00', NULL, 'Cham Shan Buddhist Temple', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, 0, 20, '-1', NULL, NULL, NULL, 'Booked', '2008-06-20 13:56:28', b'0', NULL),
(191, 306, '2008-07-09 00:00:00', '1899-12-30 16:30:00', NULL, 'Dr. Bhiku Jethalal', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 11, 13, 0, 24, '-1', 'Hiralben M', '-1', 'Dinner', 'Booked', '2008-06-23 20:14:55', b'0', NULL),
(193, 307, '2008-07-10 00:00:00', '1899-12-30 10:00:00', NULL, 'AWIC Community and Social Service', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 4, 16, 1, 20, '-1', NULL, '-1', NULL, 'Booked', '2008-06-24 12:38:29', b'0', NULL),
(46, 308, '2008-07-21 00:00:00', '1899-12-30 11:00:00', NULL, 'Jambo Seniors', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 100, '-1', NULL, NULL, NULL, 'Booked', '2008-06-26 20:45:21', b'0', NULL),
(188, 313, '2008-07-25 00:00:00', '1899-12-30 18:00:00', NULL, 'Proffessional Engineers Ontario - Scarborough Chapter', NULL, NULL, NULL, NULL, NULL, NULL, 'Prof - Engineers', 40, 9, 1, 50, '-1', NULL, '-1', 'Call to Sayona', 'Booked', '2008-06-30 12:21:31', b'1', NULL),
(197, 314, '2008-07-04 00:00:00', '1899-12-30 12:00:00', NULL, 'Bangladesh Hindu Temple', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 32, 25, 0, 59, '0', NULL, NULL, NULL, 'Booked', '2008-07-02 21:28:55', b'0', NULL),
(201, 319, '2008-08-06 00:00:00', '1899-12-30 11:00:00', NULL, 'The Second Mills Club', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 40, '-1', NULL, NULL, NULL, 'Booked', '2008-07-09 09:15:46', b'0', NULL),
(203, 321, '2008-07-16 00:00:00', '1899-12-30 10:00:00', NULL, 'Keele Street Christain Church', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, 0, 30, '-1', NULL, '-1', NULL, 'Booked', '2008-07-14 15:14:11', b'0', NULL),
(204, 322, '2008-07-17 00:00:00', '1899-12-30 10:00:00', NULL, 'Sistering', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 20, 0, 20, '-1', NULL, '-1', NULL, 'Booked', '2008-07-15 16:18:15', b'0', NULL),
(205, 323, '2008-08-10 00:00:00', '1899-12-30 09:00:00', NULL, 'St. Mary Armenian Church Choir', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 20, 25, 0, 45, '-1', NULL, '-1', NULL, 'Booked', '2008-07-15 16:25:30', b'0', NULL),
(166, 420, '2009-01-09 00:00:00', '1899-12-30 09:00:00', NULL, 'Canadian Churche\'s Forum for Golbal Ministries', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 4, 11, 0, 15, '-1', NULL, '-1', NULL, 'Booked', '2008-10-08 16:31:10', b'0', NULL),
(259, 437, '2009-01-22 00:00:00', '1899-12-30 10:00:00', NULL, 'Jarvis Collegiate Institute', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 35, 35, 0, 70, '-1', NULL, '-1', NULL, 'Booked', '2008-10-20 19:24:33', b'0', NULL),
(32, 462, '2009-02-04 00:00:00', '1899-12-30 09:00:00', NULL, 'DAREarts Foundation', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Primary (G5 - G8)', 0, 0, 0, 30, '-1', NULL, '-1', 'they bring there own Luch and they need Tables and chair because students doing there Craft.', 'Booked', '2008-11-28 09:42:30', b'0', NULL),
(48, 465, '2009-01-14 00:00:00', '1899-12-30 10:00:00', NULL, 'Bishop Strachan School', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 15, '-1', NULL, NULL, NULL, 'Booked', '2008-12-15 20:09:32', b'0', NULL),
(271, 468, '2009-01-13 00:00:00', '1899-12-30 09:00:00', NULL, 'Tamil Seniors', NULL, NULL, NULL, NULL, NULL, NULL, 'Group - Seniors', 10, 25, 0, 35, '-1', NULL, '-1', NULL, 'Booked', '2008-12-22 18:01:42', b'0', NULL),
(272, 469, '2009-01-19 00:00:00', '1899-12-30 18:30:00', NULL, 'The Rotary Club of Aurora', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, 0, 30, '-1', NULL, '-1', NULL, 'Booked', '2008-12-26 16:55:56', b'0', NULL),
(48, 471, '2009-02-09 00:00:00', '1899-12-30 09:45:00', NULL, 'Judy', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 0, 0, 0, 50, '-1', NULL, NULL, NULL, 'Booked', '2009-01-13 12:06:01', b'0', NULL),
(274, 472, '2009-01-11 00:00:00', '1899-12-30 16:00:00', NULL, 'Rik Dykstra', NULL, NULL, NULL, NULL, NULL, NULL, 'Politicans', 0, NULL, 0, 14, NULL, 'BOD', '-1', 'MP for St. Catherines (Niagara Falls area) came with his wife Kathy and 2 children. Joining them were other Indian businessmen (Anilbhai etc) from Niagara, connected to the local Hindu Mandir there.', 'Visited', '2009-01-21 18:02:45', b'0', NULL),
(275, 474, '2009-01-20 00:00:00', '1899-12-30 18:00:00', NULL, 'Mr. Udaya Ratnayake, BMO Nesbitt Burns', NULL, NULL, NULL, NULL, NULL, NULL, 'VIP', 1, 0, 0, 1, NULL, NULL, NULL, 'Nilesh invited him has been to Gala and Diwali 2008. Nimesh M Patel knows him got him to get a table for gala. (Cell: 416-520-0379)', 'Visited', '2009-02-07 23:24:54', b'1', NULL),
(274, 475, '2009-01-25 00:00:00', '1899-12-30 16:00:00', NULL, 'Tony Clement,  Minister of Industries (Federal)', NULL, NULL, NULL, NULL, NULL, NULL, 'Politicans', 2, 2, 0, 4, '-1', NULL, '-1', 'Will need to set 10-12 dinning. Coming with family', NULL, '2009-01-21 18:30:24', b'1', NULL),
(277, 476, '2009-01-30 00:00:00', '1899-12-30 09:45:00', NULL, 'Maple Crest Pri. School', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - Pre-Primary (G1 - G4)', 0, 0, 0, 25, '-1', NULL, '-1', NULL, 'Booked', '2009-01-22 11:39:19', b'0', NULL),
(280, 480, '2009-01-27 00:00:00', '1899-12-30 10:30:00', NULL, 'Probus Of Brampton', NULL, NULL, NULL, NULL, NULL, NULL, 'Group - Seniors', 0, 0, 0, 30, '-1', NULL, '-1', NULL, 'Booked', '2009-01-26 21:00:32', b'0', NULL),
(281, 482, '2008-05-15 00:00:00', '1899-12-30 09:00:00', NULL, 'American Women\'s Club Of Toronto', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 0, 0, 0, 15, '-1', NULL, '-1', NULL, 'Booked', '2009-01-26 10:00:38', b'0', NULL),
(284, 494, '1970-01-01 01:00:00', '2020-03-12 10:35:00', NULL, 'Vikas Nangia - TV Asia', '', '', '', '', '', '', 'Media', 2, 2, 0, 4, '-1', NULL, '-1', 'Cming to take shots of Vasant Panchami sabha. First time. Contact from NAHQ', NULL, NULL, b'1', 0),
(290, 509, '2009-02-07 00:00:00', '1899-12-30 10:30:00', NULL, 'Ahmadiya Muslim Community', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - University/College', 0, 0, 0, 20, '-1', NULL, '-1', NULL, 'Booked', '2009-02-07 13:42:32', b'0', NULL),
(275, 510, '2009-02-11 00:00:00', '1899-12-30 11:00:00', NULL, 'Itesh Sachdev', NULL, NULL, NULL, NULL, NULL, NULL, 'VIP', 2, 0, 0, 2, '-1', NULL, '-1', 'From London with Dr Joseph Glass. Gujarati Research. Will have lunch and meet santos', 'Booked', '2009-02-07 23:26:32', b'0', NULL),
(287, 1989, '2009-02-06 00:00:00', '1899-12-30 09:30:00', NULL, 'King\'s College School for Bright and Gifted Chidren', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 6, 9, 0, 15, '-1', NULL, NULL, 'Need Guide', 'Confirmed', '2014-01-23 13:09:42', b'0', 0),
(38, 3236, '2007-12-13 00:00:00', '1899-12-30 01:00:00', NULL, 'Father John Redmond Catholic Secondary School', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 40, 45, 0, 85, '-1', 'Rajni Kotecha', '-1', NULL, 'Confirmed', '2017-11-22 12:07:11', b'0', 0),
(300, 3401, '2019-05-28 00:00:00', '1899-12-30 10:30:00', NULL, 'Anjali  Paranithurai', 'Wadebridge Cres', NULL, NULL, NULL, '6474093898', NULL, 'Photography', 0, 0, 0, 5, NULL, NULL, NULL, 'EM Photography 4164095904', 'Confirmed', '2019-01-08 00:46:08', b'0', 0),
(818, 3419, '2019-05-23 00:00:00', '1899-12-30 10:15:00', NULL, 'St. Mary C.S.S', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 29, 29, 0, 58, '-1', 'Rajni Kotecha', '-1', NULL, 'Confirmed', '2018-06-13 17:00:19', b'0', 0),
(818, 3420, '2019-05-24 00:00:00', '1899-12-30 10:15:00', NULL, 'St. Mary C.S.S', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 29, 29, 0, 58, '-1', 'Rajni Kotecha', '-1', NULL, 'Confirmed', '2018-06-13 17:00:48', b'0', 0),
(589, 3594, '2019-05-31 00:00:00', '1899-12-30 11:00:00', NULL, 'Cardinal Carter Academy for the Arts', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 30, 25, 0, 55, '-1', 'Rajni Kotecha', NULL, NULL, 'Confirmed', '2019-01-18 13:46:45', b'0', 0),
(484, 3624, '2019-05-28 00:00:00', '1899-12-30 11:00:00', NULL, 'Encounter World Religion Ce', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 15, 15, 0, 30, NULL, 'Rajni Kotecha', NULL, NULL, 'Cancelled', '2019-05-16 11:04:33', b'0', 0),
(26, 3628, '2019-05-23 00:00:00', '1899-12-30 11:00:00', NULL, 'Christ the King Catholic Seco', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 21, 21, 0, 42, '-1', 'Rajni Kotecha', NULL, NULL, 'Confirmed', '2019-03-06 10:57:57', b'0', 0),
(26, 3629, '2019-05-28 00:00:00', '1899-12-30 11:00:00', NULL, 'Christ the King Catholic Seco', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 21, 21, 0, 42, '-1', 'Rajni Kotecha', NULL, NULL, 'Confirmed', '2019-03-06 10:58:36', b'0', 0),
(300, 3638, '2019-06-01 00:00:00', '1899-12-30 09:30:00', NULL, 'Praveen Pushpanathan', '75 Woodraw Blvd', 'Toronto', NULL, NULL, '647 928 0112', 'karthik.praveen2019@gmail.', 'Photography', 0, 0, 0, 5, NULL, NULL, NULL, 'Kicksnap Photography', 'Confirmed', '2019-05-03 17:54:00', b'0', 0),
(826, 3675, '2019-05-26 00:00:00', '1899-12-30 10:30:00', NULL, 'Toronto Social Group - Meetu', NULL, NULL, NULL, NULL, NULL, NULL, 'Others', 25, 25, 0, 50, '-1', NULL, '-1', NULL, 'Confirmed', '2019-04-22 11:26:09', b'0', 0),
(890, 3676, '2019-05-25 00:00:00', '1899-12-30 14:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Religious - Hindu', 15, 10, 0, 25, '-1', 'Rajni Kotecha', '-1', NULL, 'Confirmed', '2019-04-23 10:33:13', b'0', 0),
(944, 3677, '2019-05-25 00:00:00', '1899-12-30 14:00:00', NULL, 'Shivsena Sangh Mandir', NULL, NULL, NULL, NULL, NULL, NULL, 'Religious - Hindu', 15, 10, 0, 25, '-1', 'Rajni Kotecha', '-1', NULL, 'Confirmed', '2019-04-23 10:35:11', b'0', 0),
(948, 3684, '2019-05-29 00:00:00', '1899-12-30 10:30:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Group - Seniors', 7, 8, 0, 15, '-1', 'Rajni Kotecha', '-1', NULL, 'Confirmed', '2019-04-25 10:27:37', b'0', 0),
(573, 3702, '2019-05-28 00:00:00', '1899-12-30 10:30:00', NULL, 'St. Martin C Secondary', NULL, NULL, NULL, NULL, NULL, NULL, 'Edu - High School (Gr 9 - Gr 12)', 30, 15, 0, 45, '-1', 'Rajni Kotecha', '-1', NULL, 'Confirmed', '2019-05-21 14:06:52', b'0', 0),
(964, 3705, '2019-05-24 00:00:00', '1899-12-30 11:00:00', NULL, 'Rashman Sivarajah', NULL, NULL, NULL, NULL, NULL, NULL, 'Photography', 3, 4, 0, 7, NULL, NULL, NULL, 'Lojan Magic Shot Montreal 5147465755', 'Confirmed', '2019-05-23 13:10:24', b'0', 0),
(965, 3706, '2019-06-01 00:00:00', '1899-12-30 11:00:00', NULL, 'Sangeeta Acharya', NULL, NULL, NULL, NULL, NULL, NULL, 'Photography', 3, 2, 0, 5, NULL, NULL, NULL, 'Samir Kumar 647 522 8915', 'Confirmed', '2019-05-30 17:30:59', b'0', 0),
(966, 3707, '2019-06-01 00:00:00', '1899-12-30 10:00:00', NULL, 'Thusha Sivananthan', NULL, NULL, NULL, NULL, NULL, NULL, 'Photography', 2, 2, 0, 4, NULL, NULL, NULL, 'Schinthan Kathir 416 392 1936', 'Confirmed', '2019-05-30 17:45:47', b'1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_guides`
--
ALTER TABLE `tab_guides`
  ADD PRIMARY KEY (`GuideID`);

--
-- Indexes for table `tab_organizers`
--
ALTER TABLE `tab_organizers`
  ADD PRIMARY KEY (`OrganizerID`);

--
-- Indexes for table `tab_users`
--
ALTER TABLE `tab_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tab_visitorgroups`
--
ALTER TABLE `tab_visitorgroups`
  ADD PRIMARY KEY (`GroupID`),
  ADD KEY `OrganizerID` (`OrganizerID`),
  ADD KEY `OrganizerID_2` (`OrganizerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_guides`
--
ALTER TABLE `tab_guides`
  MODIFY `GuideID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tab_organizers`
--
ALTER TABLE `tab_organizers`
  MODIFY `OrganizerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1128;

--
-- AUTO_INCREMENT for table `tab_users`
--
ALTER TABLE `tab_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tab_visitorgroups`
--
ALTER TABLE `tab_visitorgroups`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3735;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
