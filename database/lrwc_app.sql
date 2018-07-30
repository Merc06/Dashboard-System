-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2018 at 03:39 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lrwc_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(100) NOT NULL,
  `corp_id` int(11) NOT NULL,
  `branch_add` varchar(100) NOT NULL,
  `branch_contactno` varchar(50) NOT NULL,
  PRIMARY KEY (`branch_id`),
  UNIQUE KEY `branch_id` (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `corp_id`, `branch_add`, `branch_contactno`) VALUES
(1, 'AT Bingo Station - Dumaguete', 0, '	G/F AL Fresco Area\nBrgy Calindagan, Business District\nRobinsons Dumaguete City,	', ''),
(2, 'Baguio Bingo - SM Baguio', 0, '	Upper Basement, SM City Baguio\nUpper Session Rd., cor. Luneta Hill,\nBaguio City, Benguet Mountain P', ''),
(3, 'Balay Bingo - Robinson''s Bacolod', 0, '	3/L Robinson\\''s Place\nLacson St., Mandalagan,\nBacolod City, Negros Occidental,	', ''),
(4, 'Bayview Bingo - SM Mall of Asia', 0, '	G/F Entertainment Mall,\nSM Mall of Asia,\nBay View Blvd., Pasay City,	', ''),
(5, 'Central Office', 10, 'Ortigas Center, Pasig City,	', '6375291'),
(6, 'Bingo Bonanza - Warehouse', 0, '	BBC Whse Units A & B,\n#888C. Raymundo Ave.,\nBarangay Maybunga, Pasig City, MM,	', ''),
(7, 'Bingo Bonanza - SM City North', 0, '	G/F SM City - North Edsa\nSuper Sale Club Bldg.\nNorth Edsa, Queson City,	', ''),
(8, 'Bingo Bonanza - SM Megamall', 0, '	3/F Bldg. A SM Megamall\nJulia Vargas St. corner EDSA\nBrgy. Wack Wack, Mandaluyong City,	', ''),
(9, 'Bingo Bonanza - New Farmers Plaza', 0, '	4/F New Farmers Plaza\nAraneta Center, Bgy. Socorro,\nCubao, Quezon City,	', ''),
(10, 'Bingo Bonanza - Sta. Lucia', 0, '	2/L Phase 1 STL East Grandmall\nFelix Ave., cor. Marcos Hi-way,\nCainta, Rizal,	', ''),
(11, 'Bingo Bonanza - Makati Cinema Square', 1, '	Basement Area, MCS Condominium Corp.,\r\nChino Roces St., corner\r\nA. Arnaiz St., Makati City,	', '-'),
(12, 'Bingo Bonanza - SM Southmall', 0, '	3rd Floor SM Southmall\nAlabang Zapote Road,\nLas Pinas City,	', ''),
(13, 'Bingo Boutique - Libis', 0, '	2/F Intrepid Plaza Bldg. E. Rodriguez Ave. Brgy. Bagumbayan, Quezon City,	', ''),
(14, 'Bingo Boutique - Sliver City', 1, '	(NULL),	', '-'),
(15, 'Bingo Boutique - Armal', 1, '2F Caruncho Ave. Pasig City', '-'),
(16, 'Bingo Boutique - Metro East', 1, '	LGF Robinsons Metro East Marcos Highway, Pasig City,	', '-'),
(17, 'Bingo Boutique - Hobbies of Asia', 1, '	Unit No. M5. Hobbies of Asia No. 8 President Diosdado Macapagal Blvd. Pasay City,	', '-'),
(18, 'Bingo Boutique - Pasay', 1, '	LGF Pasay City Mall Taft Ave., Cor. Libertad St. Pasay City,	', '-'),
(19, 'Bingo Boutique - ITSP - Taytay', 1, '	G/F Km 6 Ortigas Ext. Brgy San Isidro Taytay Rizal,	', '-'),
(20, 'Bingo Boutique - Manapla', 14, 'G/F Gustillo Town Center, Manapla , Negros Occidental,	', '-'),
(21, 'Bingo Boutique - SunShine Boulevard', 1, '	Sunshine Blvd. Plaza\r\nQuezon Ave. corner Sct Santiago and Panay Ave.\r\nQuezon City,	', '-'),
(22, 'Bingo Boutique - BLC - Palawan', 1, 'G/F BLC Bldg., Rizal Ave., Puerto Princesa City, Palawan,	', '-'),
(23, 'Bingo Boutique - PUREGOLD - San Pedro', 1, '	Puregold Price Club, Magsaysay Rd., Brgy. San Antonio, San Pedro Laguna,	', '-'),
(24, 'Bingo Boutique - Hypermart - Cubao', 1, '	2/F SM Hypermart, Edsa Cor., Main Ave., Brgy. Socorro 3, Cubao Q.C.,	', '-'),
(25, 'Bingo Boutique - 168 Shopping Mall', 2, '5/F 168 Shopping Mall\r\nSoler St. Binondo\r\nManila', '-'),
(26, 'Bingo Boutique - Elorde', 1, '	(NULL),	', '-'),
(27, 'Bingo Boutique - Graceland', 14, '	(NULL),	', '-'),
(28, 'Bingo Boutique - V Central', 1, '	(NULL),	', '-'),
(29, 'Bingo Boutique - Wilson', 1, '	Unit No. 5 Wilson Square Bldg. Wilson St., San Juan City,	', '-'),
(30, 'Bingo Boutique - Tomas Morato', 1, '	G/F QY Plaza 233 Tomas Morato Ave., South Triangle 4, Quezon City,	', '-'),
(31, 'Bingo Boutique - Mandalagan', 14, 'G/F Lopues Mall Lacson St., Lopues Mandalagan Bacolod City,	', '-'),
(32, 'Bingo Boutique - Naga', 14, '	GF ALDP Commercial Complez Multicolor Bldg. Annex C Pequeï¿½a Diversion Rd., Naga City,	', '-'),
(33, 'Bingo Boutique - Star J', 1, '	(NULL),	', '-'),
(34, 'Bingo Boutique - Robinson Junction', 1, '	G/F Robinsons Place Cainta Brgy. Sto. Domingo Cainta Rizal,	', '-'),
(35, 'Bingo Boutique - Wharf', 1, '	KM 20, East Service Road Sucat, Muntinlupa City,	', '-'),
(36, 'Bingo Boutique - Nasugbu', 1, '	2F Rsam Bldg. JP Laurel St. Cor. Muling Bayan St. Nasugbu, Batangas,	', '-'),
(37, 'Bingo Boutique - Festival', 1, '3/L Commerce Entrance Festival Mall Filinvest Alabang Muntinlupa City,	', '-'),
(38, 'Bingo Boutique - 678 Molino', 1, '	(NULL),	', '-'),
(39, 'Bingo Boutique - Guimba', 1, '	(NULL),	', '-'),
(40, 'Bingo Boutique - Webjet', 14, '	(NULL),	', '-'),
(41, 'Bingo Boutique - Greenhills', 1, 'G-Strip Greenhills Shopping Center\r\nParking-1,\r\nSan Juan, Metro Manila,	', '-'),
(42, 'Bingo Boutique - Jupiter', 1, '	G/F Villa Building\r\nJupiter St. cor. Makati Ave.,\r\nMakati City,	', '-'),
(43, 'Bingo Boutique - Lee Plaza', 1, '	(NULL),	', '-'),
(44, 'Bingo Boutique - Balagtas	', 1, '	(NULL),	', '-'),
(45, 'Bingo Boutique - Hypermart Cainta	', 1, '	(NULL),	', '-'),
(46, 'Bingo Carnivale - SM Muntinlupa', 1, '	2/F SM Supercenter Muntinlupa\r\nNat''l Highway Brgy. Putatan,\r\nTunasan, Muntinlupa City,	', '-'),
(47, 'Bingo Carnivale - Sm Tarlac	', 1, '	2/F SM City Tarlac\r\nMac Arthur Highway, Tarlac City,	', '-'),
(48, 'Bingo City - SM Fairview', 1, '	UG/F SM City - Fairview\r\nQuirino Highway cor., Regalado Ave.,\r\nNovaliches, Quezon City,	', '-'),
(49, 'Bingo Dinero - SM Cebu', 1, '	2/L SM City Cebu\r\nNorth Reclamation Area\r\nCebu City,	', '-'),
(50, 'Bingo Extravaganza - SM Sucat', 1, '	2/F TFA SM Supercenter\r\nDr. A. Santos Avenue,\r\nSucat,Paranaque City,	', '-'),
(51, 'Bingo Extravaganza - SM Bicutan', 1, '	G/F, SM City Bicutan\r\nDona Soledad Ave., Don Bosco,\r\nBicutan, Paranaque City,	', '-'),
(52, 'Bingo Extravaganza - Palawan', 1, '	2/F Tonie''s Mart Bldg.\r\nMalvar St.\r\nPuerto Princessa City, Palawan,	', '-'),
(53, 'Bingo Gallery - Lianas', 1, '	3F Lianas Mutya ng Pasig Mall\r\nCarucho Ave. Brgy. Palatiw,	', '-'),
(54, 'Bingo Garden - Divisoria Mall', 1, '	3/F Divisoria Mall\r\nSto. Cristo St., cor. M. de Santos St.,\r\nTondo, Manila,	', '-'),
(55, 'Bingo Junction - Robinson', 1, '	3/F Robinson''s Place,\r\nCainta-Junction Ortigas Ave. Ext.,\r\nCainta Rizal,	', '-'),
(56, 'Bingo Palace - Robinson', 1, '	4/L Robinson''s Place\r\nM. Adriatico St.,\r\nMalate,Manila City,	', '-'),
(57, 'Bingo Palace - Calasiao', 1, '	2F Robinson Calasiao\r\nBrgy San Miguel Calasiao\r\nPangasinan,	', '-'),
(58, 'Bingo Palace - Pacific Mall - Lucena', 1, '	3/F Pacific Mall\r\nM. L. Tagarao St. Brgy 003,\r\nLucena City, Quezon Province,	', '-'),
(59, 'Bingo Palace - Urdaneta', 1, '	3/F New Public Market\r\nBrgy. Poblacion,\r\nUrdaneta City, Pangasinan,	', '-'),
(60, 'Bingo Plaza - SM Centerpoint', 1, '	3/F SM City Sta. Mesa\r\nAurora Blvd., cor Araneta Ave.,\r\nSta. Mesa, Quezon City,	', '-'),
(61, 'Bingo Royale - Harrison Plaza', 1, '	G/F Harrizon Plaza Commercial Complex\r\nMabini St., Malate,\r\nManila City,	', '-'),
(62, 'Bingo sa Metro - Elizabeth Mall', 1, '	3/F Elizabeth Mall,\r\nLeon Kilat St. cor. South Super Highway,\r\nCebu City,	', '-'),
(63, 'Bingo Sa Nova - SM Novaliches', 1, '	5/F Novaliches Plaza Mall\r\nQuirino Highway\r\nNovaliches, Quezon City,	', '-'),
(64, 'Bingo Station - SM Bacoor', 1, '	3/F SM City - Bacoor\r\nAguinaldo Highway,\r\nBacoor, Cavite City,	', '-'),
(65, 'Cagayan Bingo - Cagayan De Oro', 14, '	3/L SM Cagayan De Oro\r\nMasterson Ave., cor., Gran Via,\r\nPueblo de Oro, Cagayan de Oro City,	', '-'),
(66, 'Davao Bingo - SM Davao', 1, '	2/F SM City Davao\r\nQuimpo Blvd, Ecoland Subdivision\r\nDavao City,	', '-'),
(67, 'Festival Bingo - Festival Supermall', 1, '	4/F Festival Mall\r\nAlabang Town Plaza,\r\nMuntinlupa City,	', '-'),
(68, 'Galleria Bingo - Robinson', 1, '	Park Ave Level\r\nRobinson''s Galleria\r\nEdsa, cor. Ortigas Ave., Quezon City,	', '-'),
(69, 'Highland Bingo - Baguio Center Mall', 1, '	5/F Baguio Center Mall Bldg.\r\nMagsaysay Ave., Baguio City,\r\nBenguet Mountain Province,	', '-'),
(70, 'Iligan Bingo - Iligan', 1, '	G/F Berds Bldg.,\r\ncor. Gen. Aguinaldo, c& B.S. Ongs St.,\r\nIligan City, Lanao del Norte,	', '-'),
(71, 'IloIlo Bingo - SM Iloilo', 1, '	LGF SM City Iloilo\r\nBenigno Aquino Ave. North Diversion Rd.,\r\nMandurriao, Iloilo City,	', '-'),
(72, 'Junction Bingo - SM Masinag', 1, '	UGF SM Masinag\r\nMarcos Highway, Brgy Mayamot\r\nAntipolo City,	', '-'),
(73, 'Koronadal Bingo - Koronadal', 1, '	2nd Floor Fitmart Mall\r\nNat''l Highway, Gensan Drive,\r\nKoronadal City, South Cotabato,	', '-'),
(74, 'Link Games - Link Games', 1, '	BBC Whse Units A & B,\r\n#888C. Raymundo Ave.,\r\nBarangay Maybunga, Pasig City, MM,	', '-'),
(75, 'Lucena Bingo - SM Lucena', 1, '	2/F SM City Lucena\r\nMaharlika Nat''l Rd cor. Dalahican Rd. Pagbilao\r\nLucena City, Quezon Province,	', '-'),
(76, 'Malabon Bingo - Malabon', 1, '	3/F Star J. Plaza\r\nNo. 7F Sevilla Blvd. Brgy Tanong\r\nMalabon City,	', '-'),
(77, 'Metro Bingo - Manuela Complex', 1, '	2/L Manuela Star Mall\r\nAlabang Zapote Road\r\nDona Manuela, Las Pinas City,	', '-'),
(78, 'Metro Bingo - SM Molino', 1, '	2/F SM Supercenter Molino\r\nMolino IV Zapote Read, Bacoor,\r\nCavite,	', '-'),
(79, 'Naga Bingo - SM Naga', 14, '	2/F SM City Naga\r\nCentral Business District II\r\nBrgy Triangulo, Naga City,	', '-'),
(80, 'One Bingo Place - SM Manila', 1, '	4/F SM City Manila\r\nArroceros corner San Marcelino St.,\r\nManila City,	', '-'),
(81, 'Bingo Boutique - Robinson Pioneer', 1, '	2/L Robinsons Place Pioneer\r\nEdsa cor. Pioneer St.,\r\nBoni, Mandaluyong City,	', '-'),
(82, 'South Bingo - SM Pampanga', 1, '	3/F SM City San Fernando\r\nSan Fernando and Mexico St.,\r\nPampanga City,	', '-'),
(83, 'Summit Bingo - Angeles', 1, '	3/L Saver''s Mall,\r\nMcArthur Highway, Balibago\r\nAngeles City, Pampanga	', '-'),
(84, 'Metro Bingo - Star Mall San Jose Del Monte', 37, 'San Jose Del Monte Bulacan', '-'),
(85, 'Bingo Boutique - Merville', 14, 'Merville, Paranaque', '-'),
(86, 'Roxas Isabela', 14, 'LGU Bldg., Roxas, Isabela', '-'),
(87, 'Calapan Mindoro', 14, 'Confill. Bldg. Calapan City Mindoro', '-'),
(88, 'Bingo Boutique - Marilao Bulacan', 14, 'Hollywood Suites and Resorts Marilao, Bulacan', '-'),
(89, 'Bingo Boutique - Madison', 9, 'Madison, Las PiÃ±as', '-'),
(90, 'Bingo Boutique - Mati Davao', 14, 'Mati, Davao', '-'),
(91, 'Bingo Boutique - Gaisano Bacolod', 14, 'Gaisano, Bacolod', '-'),
(92, 'Bingo Boutique - Iba Zambales', 1, 'Sapphire Bldg. Govic Ave., Paulien, Dirita Iba, Zambales', '-'),
(93, 'Bingo Boutique - RMR Tandang Sora', 14, 'Tandang Sora Brgy. Tamo, QC.', '-'),
(94, 'Bingo Boutique - Panglao', 41, 'G/F Tawala Panglaw, Bohol', '-'),
(95, 'Meycauyan Bulacan', 9, 'Robinson Supermarket, EMA Ton Center, Brgy. Camalig Meycauyan, Bulacan', '-'),
(96, 'LOS BAÃ‘OS', 22, 'Upper ground flr., centro mall lopez ave., batong, malaki los baÃ±os laguna', '-'),
(97, 'Bingo Boutique - Butuan', 14, 'Mazua Resort, Butuan', '-'),
(98, 'Bingo Boutique - Congressional', 14, 'Congressional', '-'),
(99, 'Bingo Boutique - Bocobo', 14, 'Bocobo', '-'),
(100, 'Bingo Boutique - ICON Hotel', 14, '1010 Macapagal Ave. corner Pacific Ave. Bgy. Don Galo, Manila Bay, Manila, Philippines', '-'),
(101, 'Bingo Boutique - Masbate', 14, 'Masbate', '-'),
(102, 'Topnotch - Tayuman', 60, 'Tayuman Manila', '-'),
(103, 'Topnotch - Rosario', 60, 'Rosario', '-'),
(104, 'TGXI - MALATE, MANILA', 53, '1766 ADRIATICO STREET, MALATE, MANILA', '567-2211 / 527-3195'),
(105, 'TGXI - ROYAL ARRANQUE, STA. CRUZ. MANILA', 61, '2ND FLR ROYAL ARRANQUE BLDG. STA. CRUZ, MANILA', '733-5124'),
(106, 'TGXI - BAMBANG, STA. CRUZ. MANILA', 61, '1656 BAMBANG ST. STA. CRUZ. MANILA', '712-0118'),
(107, 'TGXI - PACO, MANILA', 61, 'UNIT 3 TOPMARK BLDG. PACO, MANILA', '256-1213'),
(108, 'TGXI - QUIRINO AVE., MANILA', 61, '808-810 QUIRINO AVE. cor. TAFT AVE. MALATE, MANILA', '400-2640'),
(109, 'TGXI - MAYBUNGA G/F, PASIG', 61, 'G/F SGC BLDG. II, BRGY. MAYBUNGA, PASIG CITY', '642-0092'),
(110, 'TGXI - MAYBUNGA 2/F, PASIG', 61, '2/F SGC BLDG. II, BRGY. MAYBUNGA, PASIG CITY', '643-7156'),
(111, 'TGXI - ROSARIO, PASIG', 61, '2/F MANGGA DUA SOHOTEL, ROSARIO, PASIG CITY', '621-3370'),
(112, 'TGXI - KAPITOLYO, PASIG', 61, 'G/F GCA BLDG. KAPITOLYO, PASIG CITY', '661-4246'),
(113, 'TGXI - SILVER CITY, PASIG', 61, 'SILVER CITY FRONTERA VERDER, UGONG, PASIG CITY', '706-2390 / 636-5733'),
(114, 'TGXI - STARMALL, MANDALUYONG', 61, '2/F STARMALL BLDG. MANDALUYONG CITY', '727-2721'),
(115, 'TGXI - MADISON SQUARE, MANDALUYONG', 61, 'GF BLDG B, MADISON SQUARE, #4 PIONEER ST., MANDALUYONG CITY', '720-2324'),
(116, 'TGXI - BALINTAWAK, QC', 61, '1250 EDSA, BALINTAWAK, QUEZON CITY', '454-4327'),
(117, 'TGXI - TALAYAN, QC', 61, '716 DEL MONTE AVE., TALAYAN, QUEZON CITY', '256-1021'),
(118, 'TGXI - DON ANTONIO SPORTS CMPLX, QC', 61, '2/F DON ANTONIO SPORTS CMPLX, QUEZON CITY', '931-0485 / 376-1864'),
(119, 'TGXI - VILLA ORTIGAS, QC', 61, 'UNIT 50 VILLA ORTIGAS III BLDG., QUEZON CITY', '725-4483'),
(120, 'TGXI - KATIPUNAN AVE., QC', 61, '2F CITIGOLD PLAZA BLDG., 175 KATIPUNAN AVE., LOYOLA HEIGHTS, QUEZON CITY', '434-2005'),
(121, 'TGXI - CUBAO, QC', 61, 'UNIT G7, P TUAZON COMM APARTMENT, P TUAZON BLVD., CUBAO QUEZON CITY', '911-3295'),
(122, 'TGXI - TANDANG SORA, QC', 61, '2/F MSK BLDG., TANDANG SORA, QUEZON CITY', '454-2082'),
(123, 'TGXI - CALOOCAN', 61, 'UNIT 8, 2ND FLR. ONE KALAYAAN BLDG., SAMSON ROAD, CALOOCAN CITY', '351-6511'),
(124, 'TGXI - PUREGOLD VALENZUELA', 61, 'G/F PUREGOLD VALENZUELA, MC ARTHUR HIGHWAY, VALENZUELA CITY', '376-6799'),
(125, 'TGXI - LB BLDG., VALENZUELA', 61, '2/F LB BLDG, PASO DE BLAS ROAD, VALENZUELA CITY', '443-8692'),
(126, 'TGXI - LIBERTAD, PASAY', 61, 'CRUZ BLDG., TAFT AVE., LIBERTAD, PASAY CITY', '551-2757'),
(127, 'TGXI - BRGY SAN ISIDRO, PARAÃ‘AQUE', 61, 'RF LOPEZ BLDG., #6 N. LOPEZ AVE., LOPEZ VILL., BRGY. SAN ISIDRO, PARAÃ‘AQUE CITY', '823-0831 / 358-2642'),
(128, 'TGXI - AIRLANE, PARAÃ‘AQUE', 61, '99 PAL DRIVE, AIRLANE VILL., PARAÃ‘AQUE CITY', '403-4932'),
(129, 'TGXI - SUMULONG, ANTIPOLO', 61, '2/F CMDL BLDG., SUMULONG HIGHWAY, ANTIPOLO CITY', '584-8654'),
(130, 'TGXI - BINANGONAN, RIZAL', 61, 'G/F GRACE BLDG., NATL. ROAD, BINANGONAN, RIZAL ', '584-3208'),
(131, 'TGXI - G & T PLACE, CAINTA', 61, 'UNIT 6 G& T PLACE, KM 20 ORTIGAS EXT., CAINTA, RIZAL', '570-2827'),
(132, 'TGXI - SAUNTERFIELD, CAINTA', 61, '2F SAUNTERFIELD BLDG., KM 20, ORTIGAS AVE. EXTN., BRGY. SAN JUAN, CAINTA RIZAL', '570-3559'),
(133, 'TGXI - HILLSTOPGARDEN, ANTIPOLO', 61, 'HILLSTOP GARDEN REST, ANTIPOLO CITY', '451-0983'),
(134, 'TGXI - TAYTAY, RIZAL', 61, 'A3 LUI GIN BLDG., RIZAL AVE., BRGY. SAN JUAN, TAYTAY, RIZAL', '213-0190'),
(135, 'TGXI - FESTIVAL, MUNTINLUPA', 61, 'G/F PARKWAY LANE, FESTIVAL MALL, MUNTINLUPA CITY', '659-3324'),
(136, 'TGXI - STARMALL, ALABANG', 61, '2/F STARMALL, ALABANG, MUNTINLUPA CITY', '542-2218'),
(137, 'TGXI - EL RANCHO INN, MUNTINLUPA', 61, 'G.F EL RANCHO INN, NATL HIGHWAY, MUNTINLUPA CITY', '0932-8725752'),
(138, 'TGXI - EL RANCHO HOTEL, BIÃ‘AN, LAGUNA', 61, 'EL RANCHO HOTEL, NATIONAL HIGHWAY, BIÃ‘AN LAGUNA', '478-3298'),
(139, 'TGXI - KID TOWER MALL, BIÃ‘AN, LAGUNA', 61, 'G/F KID TOWER MALL, BRGY. SAN ANTONIO, BIÃ‘AN, LAGUNA', '0949-511-3375'),
(140, 'TGXI - STA ROSA, LAGUNA', 61, '2/F CONCORDIA COMM CENTER, STA. ROSA, LAGUNA', '0949-302-0575 / 0922-818-9237'),
(141, 'TGXI - CUEVAS VILLE, BACOOR CAVITE', 61, 'UNITS 10 & 11, CUEVAS VILLE COMM BLDG., BACOOR CAVITE', '046-4130748 / 02-985-6556'),
(142, 'TGXI - MOLINO, BACOOR CAVITE', 61, '2/F & 3/F K SOBREMONTE BLDG., MOLINO3, BACOOR, CAVITE', '046-4773459 / 02-998-9259'),
(143, 'TGXI - KAWIT, CAVITE', 61, 'G/F BAUTISTA ARCADE, BRGY. BINAKAYAN, KAWIT, CAVITE', '046-4815406 / 703-0455'),
(144, 'TGXI - GEN. TRIAS, CAVITE', 61, '2/F MSI BLDG., GOVERNORS DRIVE, GEN. TRIAS, CAVITE', '046-5380365 / 985-5633'),
(145, 'TGXI - CARMONA, CAVITE', 61, 'UNIT 5 PASEO DE CARMONA, BRGY. MADUYA, CARMONA, CAVITE', '046-4130748'),
(146, 'TGXI - SILANG, CAVITE', 61, 'BRGY. BUHO, SILANG, CAVITE', '0932-8765750'),
(147, 'TGXI - MEYCAUAYAN, BULACAN', 61, '665 A MC ARTHUR HIGHWAY, BRGY. BANCAL, MEYCAUAYAN, BULACAN', '292-8314'),
(148, 'TGXI - SJDM, BULACAN', 61, 'UMEREZ COMPUND, TUNGKONG MANGGA, SJDM CITY, BULACAN', '782-9618'),
(149, 'TGXI - PLARIDEL, BULACAN', 61, 'AMORANTE BLDG., CAGAYAN VALLEY RD, PLARIDEL, BULACAN', '0932-8629966'),
(150, 'TGXI - PULILAN, BULACAN', 61, 'SVC BLDG. CAGAYAN VALLEY RD, BRGY., STO. CRISTO, PULILAN BULACAN', '044-8153137'),
(151, 'TGXI - SAN MIGUEL, BULACAN', 61, 'TOTAL GAS STATION, CAGAYAN VALLEY RD., SAN MIGUEL BULACAN', '0932-8629968'),
(152, 'TGXI - SAN RAFAEL, BULACAN', 61, '141 CAGAYAN VALLEY RD., BRGY. SAMPLAOC, SAN RAFAEL, BULACAN', '0932-8765751'),
(153, 'TGXI - STA MARIA, BULACAN', 61, '112 C GOV. HALILI AVE., BRGY. BAGBAGUIN, STA. MARIA, BULACAN', '044-9130139'),
(154, 'TGXI - MABALACAT, PAMPANGA', 61, 'STALL 19, PINEDA BLDG., MC ARTHUR HIGHWAY, MABALACAT PAMPANGA', '0922-818-9239'),
(155, 'TGXI - SUBIC, OLONGAPO', 61, 'UNIT 27-30 2FLR., 1 STOP SHOP BLDG. RIZAL AVE. COR. AGUINALDO ST. SUBIC BAY FREEPORT ZONE, OLONGAPO', '047-2502487'),
(156, 'BINGO BOUTIQUE - MALANGIN', 14, 'BINGO BOUTIQUE MALANGIN', '-'),
(157, 'Topnotch - BATANGAS', 60, 'SM CITY BATANGAS', '043 783 2628'),
(158, 'Topnotch - metropoint', 60, 'Metropoint', '-'),
(159, 'TGXI - NOVALICHES', 61, 'Novaliches', '454-5600'),
(160, 'BINGO BOUTIQUE - PUREGOLD SAN MATEO', 14, 'SAN MATEO RIZAL', '5037424'),
(161, 'BINGO BOUTIQUE - BALINTAWAK', 14, 'Q.C. BALINTAWAK', '-'),
(162, 'BINGO BOUTIQUE - FELCRIS', 14, 'DAVAO', '-'),
(163, 'Bingo Boutique - Lipa', 14, 'Lipa, Batangas City', '-'),
(164, 'Bingo Boutique Ruben', 14, '-', '7428620'),
(165, 'Bingo Boutique Arangque', 14, '-', '7423873'),
(166, 'TGXI - NAIA', 61, '-', '-'),
(167, 'TGXI - BF PARAÃ‘AQUE', 61, '-', '-'),
(168, 'TOPNOTCH - SM CLARK', 60, '-', '-'),
(169, 'BINGO BOUTIQUE - SUBIC PARK N SHOP', 14, '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`dept_id`),
  UNIQUE KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `email`) VALUES
(1, 'ACCOUNTING', ''),
(2, 'ARTS', ''),
(3, 'AUDIT', ''),
(4, 'ENGINEERING', ''),
(5, 'HUMAN RESOURCES', ''),
(6, 'LEGAL', ''),
(7, 'ITMS', ''),
(8, 'OFFICE OF THE PRESIDENT', ''),
(9, 'OPERATIONS AND MARKETING', ''),
(10, 'PURCHASING', ''),
(11, 'TECHNICAL SERVICES DEPARTMENT', ''),
(12, 'TREASURY', ''),
(13, 'WAREHOUSE', ''),
(14, 'ADMIN DIVISION', '');

-- --------------------------------------------------------

--
-- Table structure for table `links_tbl`
--

CREATE TABLE IF NOT EXISTS `links_tbl` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) NOT NULL,
  `link_title` varchar(255) NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `links_tbl`
--

INSERT INTO `links_tbl` (`link_id`, `link_url`, `link_title`) VALUES
(2, 'n/a', 'Cognos'),
(3, 'https://www.office.com/?auth=2&home=1', 'O 365'),
(4, '', 'VIZ Exp'),
(5, 'http://itms-inventory.com/', 'IT Inv'),
(6, '', 'Ebms'),
(7, 'http://leisuretimes.lrwc.com.ph/', 'Intranet'),
(8, '', 'Nav'),
(17, 'n/a', 'Hris');

-- --------------------------------------------------------

--
-- Table structure for table `logs_tbl`
--

CREATE TABLE IF NOT EXISTS `logs_tbl` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_empid` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `log_date_access` date NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `logs_tbl`
--

INSERT INTO `logs_tbl` (`log_id`, `log_empid`, `link_id`, `log_date_access`) VALUES
(1, 1234, 1, '2018-01-18'),
(2, 1234, 2, '2018-01-19'),
(3, 1234, 3, '2018-01-18'),
(4, 1234, 2, '2018-01-19'),
(5, 1234, 3, '2018-01-18'),
(6, 1234, 5, '2018-01-19'),
(7, 1234, 8, '2018-01-18'),
(8, 1234, 3, '2018-01-19'),
(9, 1234, 4, '2018-01-18'),
(10, 1234, 6, '2018-01-19'),
(11, 1234, 7, '2018-01-18'),
(12, 1234, 2, '2018-01-19'),
(13, 1234, 5, '2018-01-30'),
(14, 1234, 5, '2018-01-30'),
(15, 1234, 5, '2018-01-31'),
(16, 1234, 5, '2018-01-31'),
(17, 1234, 5, '2018-01-31'),
(18, 1234, 5, '2018-01-31'),
(19, 1234, 5, '2018-01-31'),
(20, 1234, 5, '2018-01-31'),
(21, 1234, 3, '2018-01-31'),
(22, 1234, 1, '2018-01-31'),
(23, 1234, 7, '2018-01-31'),
(24, 1234, 7, '2018-01-31'),
(25, 1234, 5, '2018-01-31'),
(26, 1234, 1, '2018-01-31'),
(27, 1234, 5, '2018-01-31'),
(28, 1234, 5, '2018-01-31'),
(29, 1234, 1, '2018-01-31'),
(30, 1234, 7, '2018-01-31'),
(31, 1234, 1, '2018-01-31'),
(32, 1234, 1, '2018-01-31'),
(33, 1234, 2, '2018-01-31'),
(34, 1234, 3, '2018-01-31'),
(35, 1234, 2, '2018-01-31'),
(36, 1234, 5, '2018-01-31'),
(37, 1234, 5, '2018-01-31'),
(38, 1234, 5, '2018-01-31'),
(39, 1234, 6, '2018-01-31'),
(40, 1234, 5, '2018-01-31'),
(41, 123321, 5, '2018-01-31'),
(42, 123321, 3, '2018-01-31'),
(43, 123321, 5, '2018-01-31'),
(44, 123321, 7, '2018-01-31'),
(45, 123321, 5, '2018-01-31'),
(46, 1234, 5, '2018-02-01'),
(47, 1234, 5, '2018-02-01'),
(48, 1234, 4, '2018-02-01'),
(49, 1234, 1, '2018-02-01'),
(50, 123321, 8, '2018-02-01'),
(51, 123321, 8, '2018-02-01'),
(52, 123321, 8, '2018-02-01'),
(53, 123321, 8, '2018-02-01'),
(54, 123321, 8, '2018-02-01'),
(55, 123321, 8, '2018-02-01'),
(56, 123321, 8, '2018-02-01'),
(57, 123321, 7, '2018-02-01'),
(58, 123321, 7, '2018-02-01'),
(59, 123321, 7, '2018-02-01'),
(60, 123321, 7, '2018-02-01'),
(61, 1234, 5, '2018-02-02'),
(62, 1234, 5, '2018-02-02'),
(63, 1234, 5, '2018-02-02'),
(64, 1234, 8, '2018-02-05'),
(65, 1234, 8, '2018-02-05'),
(66, 1234, 5, '2018-02-05'),
(67, 1234, 17, '2018-02-05'),
(68, 1234, 8, '2018-02-05'),
(69, 1234, 17, '2018-02-05'),
(70, 1234, 5, '2018-02-06'),
(71, 1234, 18, '2018-02-06'),
(72, 1234, 3, '2018-02-14'),
(73, 1234, 7, '2018-02-14'),
(74, 1234, 5, '2018-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `e_mail` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `emp_id`, `branch_id`, `dept_id`, `image`, `username`, `password`, `e_mail`, `firstname`, `lastname`, `address`) VALUES
(1, 1234, 1, 7, 'download.png', 'merc', 'cd2ad2bc706c386eda424a206c39d9f9', 'merc@yahoo.com', 'Marc', 'Asoy', '956 parada st.'),
(11, 123321, 5, 7, 'download (1).png', 'lex', '5ad8a1dde1e3936f65dc4487cc3e10c3', 'lanebres@yahoo.com', 'lex', 'nebres', 'pasig'),
(12, 321321, 5, 7, '', 'marc', '3dbe00a167653a1aaee01d93e77e730e', 'merclouie0506@yahoo.com', 'Marc', 'Asoy', 'asdfsdf'),
(21, 11655, 5, 7, '', 'ube', 'ae8e7b1ef9bf9fbd07770b1d60e62d27', 'jkhkj@email.com', 'bryan', 'santuele', 'bb dsd dsa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
