-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2022 at 06:13 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `Registeration`
--

CREATE TABLE `Registeration` (
  `studentNo` varchar(45) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `residence` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `Application` varchar(255) DEFAULT NULL,
  `Payment` varchar(255) DEFAULT NULL,
  `manifesto` varchar(255) DEFAULT NULL,
  `approved` enum('Yes','No') DEFAULT NULL,
  `counts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Registeration`
--

INSERT INTO `Registeration` (`studentNo`, `firstName`, `lastName`, `year`, `email`, `phone`, `residence`, `post`, `Application`, `Payment`, `manifesto`, `approved`, `counts`) VALUES
('B1512633', 'Akampwera', 'Patricia', '2017', 'akampwerapatricia@gmail', '0552789068', 'MOSTAGANEM', 'President', 'NULL', 'NULL', 'B1512633 TOGETHER WE CAN REVIVE USAA.docx 3.pdf', 'No', 69),
('B1516770', 'Kamusiime', 'Azaria', '2017', 'azariak@cpaiuganda.org', '0560543250', 'Ain-Temouchent', 'generalSecretary', 'NULL', 'NULL', 'B1516770 manifesto.pdf', 'No', 130),
('B1538691', 'Bugingo', 'Gilbert', '2017', 'bugingobwera@gmail.com', '0560584302', 'Tizi Ouzou', 'President', 'NULL', 'NULL', 'B1538691 manifesto3 (2).pdf', 'No', 57),
('B1551374', 'Celestine', 'Alianat', '2017', 'Celestinealianat@gmail.com', '+213 7 79355614', 'Oran', 'vicePresidentGirls', 'NULL', 'NULL', 'B1551374 MY MANIFESTO .pdf.pdf', 'No', 115),
('B1697027', 'OPOLO', 'STEPHEN EDWARDS', '2018', 'stevenoedwards9@gmail.com', '0698688764', 'Oran', 'vicePresident', 'NULL', 'NULL', 'B1697027 S.OPOLO-Manifesto .pdf', 'Yes', 164),
('B1698736', 'Nakandha ', 'Patricia Grace ', '2018', 'nakandhapatricia081@gmail.com', '0697194129', 'Bejaia', 'Treasurer', 'NULL', 'NULL', 'B1698736 patu.pdf', 'No', 68),
('B1731928', 'Kanyana', 'Kyamagana Lisa', '2018', 'kyamaganalisa@gmail.com', '0540184709', 'Annaba', 'vicePresidentGirls', 'NULL', 'NULL', 'B1731928 manifesto copy.pdf', 'No', 62);

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `uniq_number` varchar(50) NOT NULL,
  `studentNo` varchar(10) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `second_name` varchar(15) NOT NULL,
  `other_names` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `alt_phone_no` varchar(15) NOT NULL,
  `nok` varchar(50) NOT NULL,
  `nok_phone` varchar(15) NOT NULL,
  `nok_email` varchar(50) NOT NULL,
  `home_district` varchar(50) NOT NULL,
  `region` varchar(30) NOT NULL,
  `home_addr` varchar(50) NOT NULL,
  `voted` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`uniq_number`, `studentNo`, `first_name`, `second_name`, `other_names`, `gender`, `dob`, `email`, `phone_no`, `alt_phone_no`, `nok`, `nok_phone`, `nok_email`, `home_district`, `region`, `home_addr`, `voted`) VALUES
('16UGA-ALG001012', 'A00319278', 'OGWANG', 'RODIN', 'ADAM', 'M', '1994-12-19', 'hacker@gmail.com', '+213796944073', '+256702844217', 'AWIO GEOFFREY', '+256776844217', '', 'Oyam', 'Northern', 'TE-APENA', 'Yes'),
('16UGA-ALG002024', 'A00431447', 'ALIYINZA', 'Charity', '', 'F', '1996-04-20', 'aliyinzacharitysarah@gmail.com', '+213541829883', '+256701651953', 'Juritah NANZALA', '+256782208671', 'nanzalajuritah@gmail.com', 'Kampala', 'Central', '10414, Kisugu', ''),
('16UGA-ALG003027', 'A00319295', 'Nandi', 'Linda Sheila', '', 'F', '1996-01-13', 'hacker@gmail.com', '+213553724062', '+256779522135', 'Wiiwo Jerusa', '+256703772680', 'namulodip@yahoo.com', 'Wakiso', 'Central', 'Ndejje, Kyadondo', 'Yes'),
('17UGA-ALG001002', 'B1542735', 'Ogwang ', 'Kokas Amuja', '', 'M', '1996-08-28', 'princekokas13@gmail.com', '+213560659212', '+213699724298', 'Asonya Stephen Collins', '+256782790434', '', 'Ngora', 'Eastern', 'Nansana', ''),
('17UGA-ALG002023', 'B1388334', 'MBABAZI', 'REINER', 'BASHABE', 'M', '1996-11-26', 'reiner.mbabazi44@gmail.com', '+213782671316', '+213000000001', 'MBABAZI DAVID', '+256772663468', '', 'Wakiso', 'Central', 'Nansana', ''),
('18UGA-ALG001001', 'B1721106', 'lutaaya', 'andrew', '', 'M', '1998-11-02', 'lutaayaandrew0@gmail.com', '+213795309852', '+213784148790', 'muwanga henry', '+256772565832', '', 'Luwero', 'Central', 'kasana', ''),
('18UGA-ALG001003', 'B1697403', 'SSEKIMPI ', 'TITUS TRAVIS ', '', 'M', '1999-12-08', 'titosseks213@gmail.com', '+213778860776', '+256775586922', 'Nabawanda Betty', '+256772474727', '', 'Kampala', 'Central', 'Kawempe ', ''),
('18UGA-ALG002004', 'B1731831', 'SSEMUGOOMA', 'YUSUFU', '', 'M', '1997-02-08', 'yuskiem@gmail.com', '+213555187815', '+256758560555', 'MUKASA BUYINZA AMINAH', '+256772461257', 'mukasabuyinza@gmail.com. ', 'Wakiso', 'Central', 'NDEJJE-LUFUKA', ''),
('18UGA-ALG004005', 'B1698736', 'Nakandha', 'Patricia Grace ', '', 'F', '1999-02-02', 'Nakandhapatricia081@gmail.com', '+213658800494', '+213776271570', 'Mwanja Paul', '+256784849595', '', 'Mityana', 'Central', 'Masajja Namasuba', ''),
('18UGA-ALG005006', 'B1734544', 'Mulindwa', 'Mark Alvin', '', 'M', '1998-06-20', 'mulindwamarkalvin0@gmail.com', '+213552664357', '+256782588685', 'vincent mulindwa', '+256772348781', '', 'Wakiso', 'Central', 'kyengera', ''),
('18UGA-ALG006008', 'A00319279', 'Opio', 'Daniel', '', 'M', '1998-01-31', 'danielopio98@gmail.com', '+213559432214', '+213559432214', 'Ajok Christine', '', '', 'Oyam', 'Northen', 'Acaba Oyam', ''),
('18UGA-ALG007010', 'B1714328 ', 'NIZEYE ', 'Brian ', '', 'M', '1997-11-02', 'bnizeye3@gmail.com', '+213552735793', '+256787430746', 'Niyibizi  Godfrey ', '+256787564954', 'bnigof@gmail.com ', 'Kisoro', 'Western', 'Bunagana, Muramba ', ''),
('18UGA-ALG008011', 'B1735948', 'KAGUGUBE', 'ROBERT', '', 'M', '1998-09-23', 'kaguguberobert688@gmail.com', '+213552952348', '+213659146296', 'Sseka willy Williams', '+256754300355', '', 'Mityana', 'Central', 'Kakiri', ''),
('18UGA-ALG009013', 'B1731432', 'Ssaazi', 'Petercleaver', '', 'M', '1998-05-10', 'psaazi01@hotmail.com', '+213554609693', '+256704044001', 'Lwanga Charles', '+256705193765', '', 'Wakiso', 'Central', 'Bulenga, Wakiso', ''),
('18UGA-ALG011015', 'B1708798', 'JOOMU', 'KENNETH', '', 'M', '2000-02-28', 'Joomukenneth@gmail.com', '+213778285329', '+256702570893', 'JOOMU MOSES', '+256772445948', '', 'Mayuge', 'Eastern', 'IGANGA', ''),
('18UGA-ALG011026', 'B1706893', 'KAJJUMBA', 'JULIUS', '', 'M', '1998-10-23', 'kajjumbajulius6600@gmail.com', '+213560378543', '+256789580622', 'KIMERA EDWARD', '+256772422679', '', 'Nakaseke', 'Central', 'BUKATIRA', ''),
('19UGA-ALG001007', 'A00136137', 'DIIMA', 'ALLAN', '', 'M', '2000-02-02', 'dylnepro@gmail.com', '+213557584922', '+256778985991', 'THOMAS DIIMA', '+256702924693', 'diimathomas1@gmail.com', 'Jinja', 'Eastern', 'KIREKA KAMPALA', ''),
('19UGA-ALG002019', 'A00126951', 'BAGUMA', 'AZIIZI', '', 'M', '2000-01-01', 'aziizibaguma23@gmail.com', '+213557599816', '+256708469773', 'BUSINGE ISMAIL', '+256752544876', '', 'Masindi', 'Western', 'Kampala', ''),
('19UGA-ALG003020', 'A00057952', 'NDAWULA', 'IBRAHIM', '', 'M', '1996-11-03', 'indawula222@gmail.com', '+213770857777', '+256704482215', 'Najjemba Aminah', '+256773090224', 'indawula222@gmail', 'Wakiso', 'Central', 'Ndejje masitowa', ''),
('19UGA-ALG004022', 'A00094744', 'Kalanzi', 'Hassan', '', 'M', '1999-11-27', 'kalanzihassan0@gmail.com', '+213557590498', '+256659662397', 'Mrs. Nagawa Sophia', '+256782398209', '', 'Wakiso', 'Central', 'Nammere', ''),
('19UGA-ALG005025', 'A00140617', 'Nalumansi', 'Alexis', 'Edith', 'F', '1999-08-21', 'alexisnalumansi@gmail.com', '+213795480498', '+256708639520', 'Margaret Nabweteme', '+256705114948', 'nabwetememargaret@gmail.com', 'Mukono', 'Central', 'Kitete Mukono', ''),
('20UGA-ALG001009', 'A00046025', 'Agaba', 'Marvin', '', 'F', '2000-05-28', 'agabamarveen@gmail.com', '+213558062567', '+256702314070', 'Jenipher Kemeri', '+256776314070', 'jenipher.kemeri@gmail.com', 'Bushenyi', 'Western', 'Bushenyi', ''),
('20UGA-ALG002015', 'A00164073', 'Babirye', 'Ashura Nabiryo', '', 'F', '2000-06-04', 'ashurabbr@gmail.com', '+213795970855', '+256794383856', 'Ssebitossi Rashid Musa', '+256701373899', '', 'Kampala', 'Central', 'Buddo', ''),
('20UGA-ALG003016', 'A00185443', 'MUKWAYA', 'JOSEPH', '', 'M', '1999-12-27', 'josephmukwaya999@gmail.com', '+213557539635', '+256775872452', 'SIKYOMU ROSE LIMMY', '+256750872452', 'josephmukwaya999@gmail.com', 'Masaka', 'Central', 'KIMAANYA A', ''),
('20UGA-ALG004017', 'A00322285', 'KAYAGA', 'LATIFAH', '', 'F', '1999-01-11', 'lawiyyahkayla@gmail.com', '+256  774594503', '+213793643978', 'WATEMA ISA', '+256706134277', 'isawatema6@gmail.com', 'Wakiso', 'Central', 'Kazinga', ''),
('20UGA-ALG005018', 'A00141545', 'Kiprop ', 'Emmanuel', '', 'M', '2000-12-21', 'emmasikor@gmail.com', '+256  773463086', '+213795773571', 'Kiprop Julius Kapwomu', '+256772871175', '', 'Bukwa', 'Eastern', 'Jinja ', ''),
('20UGA-ALG006021', 'A00151675', 'NABAGALA', 'IMMACULATE', '', 'F', '1997-05-09', 'nabagalaimmaculate1@gmail.com', '+213794813865', '+256704623095', 'NAKAFEERO TEOPISTER', '+256751109458', '', 'Wakiso', 'Central', 'BUSSI ISLAND', ''),
('UNUGA-ALG007023', 'A00319299', 'Nakakande ', 'Caroline ', '', 'F', '1996-12-13', 'nakyroline@gmail.com', '+213672925462', '+256777730518', 'Namuddu  Beatrice ', '+256773066936', '', 'Wakiso', 'Central', 'Bandwe ', ''),
('UNUGA-ALG007026', 'B1516770', 'Kamusiime ', 'Azaria ', '', 'M', '1997-03-17', 'kamusiimeazaria@gmail.com', '+213560543250', '+256778475377', 'Atwiine  Christian ', '+256776160000', 'atwiinechristian@gmail.com ', 'Isingiro', 'Western', 'KASHUMBA', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Registeration`
--
ALTER TABLE `Registeration`
  ADD PRIMARY KEY (`studentNo`),
  ADD UNIQUE KEY `passportNo_UNIQUE` (`studentNo`);

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`uniq_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
