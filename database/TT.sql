-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2012 at 09:28 AM
-- Server version: 5.1.49
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `TT`
--
CREATE DATABASE `TT` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `TT`;

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(25) NOT NULL,
  `price` double(4,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `color`, `price`) VALUES
(2, 'orange', 11.00),
(1, 'blue', 7.50),
(3, 'red', 13.00);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `resNummer` int(11) NOT NULL,
  `film` varchar(50) NOT NULL,
  `zaal` int(1) NOT NULL,
  `dt` varchar(100) NOT NULL,
  PRIMARY KEY (`resNummer`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ids`
--

CREATE TABLE IF NOT EXISTS `ids` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `dt` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `ids`
--

INSERT INTO `ids` (`id`, `dt`) VALUES
(1, 'vrijdag om 22:00'),
(2, 'maandag om 22:00'),
(3, 'dinsdag om 15:00'),
(4, 'vrijdag om 22:00'),
(5, 'zondag om 15:00'),
(6, 'zondag om 22:00'),
(7, 'donderdag om 15:00'),
(8, 'vrijdag om 22:00'),
(9, 'zaterdag om 15:00'),
(10, 'dinsdag om 22:00'),
(11, 'maandag om 15:00'),
(12, 'woensdag om 15:00'),
(13, 'woensdag om 22:00'),
(14, 'zaterdag om 22:00'),
(15, 'donderdag om 22:00'),
(16, 'zondag om 22:00'),
(17, 'vrijdag om 15:00'),
(18, 'maandag om 22:00'),
(19, '31 oktober om 22:15');

-- --------------------------------------------------------

--
-- Table structure for table `pn`
--

CREATE TABLE IF NOT EXISTS `pn` (
  `pass_nr` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pn`
--

INSERT INTO `pn` (`pass_nr`) VALUES
(56134),
(32048),
(69034),
(13489),
(31895),
(61898),
(64984),
(78941),
(14498),
(34184);

-- --------------------------------------------------------

--
-- Table structure for table `rc`
--

CREATE TABLE IF NOT EXISTS `rc` (
  `res_id` int(11) NOT NULL,
  `zaal_id` int(2) NOT NULL,
  `chairnr` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stoelen`
--

CREATE TABLE IF NOT EXISTS `stoelen` (
  `stoelnr` varchar(4) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`stoelnr`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stoelen`
--

INSERT INTO `stoelen` (`stoelnr`, `cat_id`) VALUES
('B004', 1),
('B003', 1),
('B002', 1),
('B001', 1),
('A001', 1),
('A002', 1),
('A003', 1),
('A004', 1),
('A005', 1),
('A006', 1),
('A007', 1),
('A008', 1),
('A009', 1),
('A010', 1),
('A011', 1),
('A012', 1),
('A013', 1),
('A014', 1),
('A015', 1),
('A016', 1),
('A017', 1),
('A018', 1),
('A019', 1),
('A020', 1),
('A021', 1),
('A022', 1),
('A023', 1),
('A024', 1),
('A025', 1),
('A026', 1),
('A027', 1),
('A028', 1),
('A029', 1),
('A030', 1),
('A031', 1),
('A032', 1),
('A033', 1),
('A034', 2),
('A035', 2),
('A036', 1),
('A037', 1),
('A038', 1),
('A039', 1),
('A040', 1),
('A041', 1),
('A042', 1),
('A043', 1),
('A044', 1),
('A045', 2),
('A046', 2),
('A047', 2),
('A048', 2),
('A049', 1),
('A050', 1),
('A051', 1),
('A052', 1),
('A053', 1),
('A054', 1),
('A055', 1),
('A056', 2),
('A057', 2),
('A058', 3),
('A059', 3),
('A060', 2),
('A061', 2),
('A062', 1),
('A063', 1),
('A064', 1),
('A065', 1),
('A066', 1),
('A067', 1),
('A068', 2),
('A069', 2),
('A070', 3),
('A071', 3),
('A072', 2),
('A073', 2),
('A074', 1),
('A075', 1),
('A076', 1),
('A077', 1),
('A078', 1),
('A079', 1),
('A080', 2),
('A081', 2),
('A082', 3),
('A083', 3),
('A084', 2),
('A085', 2),
('A086', 1),
('A087', 1),
('A088', 1),
('A089', 1),
('A090', 1),
('A091', 1),
('A092', 1),
('A093', 2),
('A094', 2),
('A095', 2),
('A096', 2),
('A097', 1),
('A098', 1),
('A099', 1),
('A100', 1),
('A101', 1),
('A102', 1),
('A103', 1),
('A104', 1),
('A105', 1),
('A106', 2),
('A107', 2),
('A108', 1),
('A109', 1),
('A110', 1),
('A111', 1),
('A112', 1),
('A113', 1),
('A114', 1),
('A115', 1),
('A116', 1),
('A117', 1),
('A118', 1),
('A119', 1),
('A120', 1),
('A121', 1),
('A122', 1),
('A123', 1),
('A124', 1),
('A125', 1),
('A126', 1),
('A127', 1),
('A128', 1),
('A129', 1),
('A130', 1),
('A131', 1),
('A132', 1),
('A133', 1),
('A134', 1),
('A135', 1),
('A136', 1),
('A137', 1),
('A138', 1),
('B005', 1),
('B006', 1),
('B007', 1),
('B008', 1),
('B009', 1),
('B010', 1),
('B011', 1),
('B012', 1),
('B013', 1),
('B014', 1),
('B015', 1),
('B016', 1),
('B017', 1),
('B018', 1),
('B019', 1),
('B020', 1),
('B021', 1),
('B022', 2),
('B023', 2),
('B024', 2),
('B025', 2),
('B026', 2),
('B027', 2),
('B028', 1),
('B029', 1),
('B030', 1),
('B031', 1),
('B032', 1),
('B033', 1),
('B034', 1),
('B035', 1),
('B036', 1),
('B037', 2),
('B038', 2),
('B039', 2),
('B040', 2),
('B041', 2),
('B042', 2),
('B043', 2),
('B044', 2),
('B045', 1),
('B046', 1),
('B047', 1),
('B048', 1),
('B049', 1),
('B050', 1),
('B051', 1),
('B052', 1),
('B053', 2),
('B054', 2),
('B055', 2),
('B056', 2),
('B057', 2),
('B058', 2),
('B059', 2),
('B060', 2),
('B061', 1),
('B062', 1),
('B063', 1),
('B064', 1),
('B065', 1),
('B066', 1),
('B067', 1),
('B068', 2),
('B069', 2),
('B070', 2),
('B071', 2),
('B072', 2),
('B073', 2),
('B074', 2),
('B075', 2),
('B076', 2),
('B077', 2),
('B078', 1),
('B079', 1),
('B080', 1),
('B081', 1),
('B082', 1),
('B083', 1),
('B084', 2),
('B085', 2),
('B086', 2),
('B087', 2),
('B088', 3),
('B089', 3),
('B090', 2),
('B091', 2),
('B092', 2),
('B093', 2),
('B094', 1),
('B095', 1),
('B096', 1),
('B097', 1),
('B098', 1),
('B099', 1),
('B100', 2),
('B101', 2),
('B102', 2),
('B103', 2),
('B104', 3),
('B105', 3),
('B106', 3),
('B107', 3),
('B108', 2),
('B109', 2),
('B110', 2),
('B111', 2),
('B112', 1),
('B113', 1),
('B114', 1),
('B115', 1),
('B116', 1),
('B117', 1),
('B118', 2),
('B119', 2),
('B120', 2),
('B121', 3),
('B122', 3),
('B123', 3),
('B124', 3),
('B125', 3),
('B126', 3),
('B127', 2),
('B128', 2),
('B129', 2),
('B130', 1),
('B131', 1),
('B132', 1),
('B133', 1),
('B134', 1),
('B135', 2),
('B136', 2),
('B137', 2),
('B138', 2),
('B139', 3),
('B140', 3),
('B141', 3),
('B142', 3),
('B143', 3),
('B144', 3),
('B145', 2),
('B146', 2),
('B147', 2),
('B148', 2),
('B149', 1),
('B150', 1),
('B151', 1),
('B152', 1),
('B153', 2),
('B154', 2),
('B155', 2),
('B156', 2),
('B157', 3),
('B158', 3),
('B159', 3),
('B160', 3),
('B161', 3),
('B162', 3),
('B163', 2),
('B164', 2),
('B165', 2),
('B166', 2),
('B167', 1),
('B168', 1),
('B169', 1),
('B170', 1),
('B171', 2),
('B172', 2),
('B173', 2),
('B174', 2),
('B175', 3),
('B176', 3),
('B177', 3),
('B178', 3),
('B179', 3),
('B180', 3),
('B181', 2),
('B182', 2),
('B183', 2),
('B184', 2),
('B185', 1),
('B186', 1),
('B187', 1),
('B188', 1),
('B189', 2),
('B190', 2),
('B191', 2),
('B192', 2),
('B193', 3),
('B194', 3),
('B195', 3),
('B196', 3),
('B197', 2),
('B198', 2),
('B199', 2),
('B200', 2),
('B201', 1),
('B202', 1),
('B203', 1),
('B204', 1),
('B205', 1),
('B206', 2),
('B207', 2),
('B208', 2),
('B209', 2),
('B210', 3),
('B211', 3),
('B212', 2),
('B213', 2),
('B214', 2),
('B215', 2),
('B216', 1),
('B217', 1),
('B218', 1),
('B219', 1),
('B220', 1),
('B221', 1),
('B222', 1),
('B223', 2),
('B224', 2),
('B225', 2),
('B226', 2),
('B227', 2),
('B228', 2),
('B229', 2),
('B230', 2),
('B231', 1),
('B232', 1),
('B233', 1),
('B234', 1),
('B235', 1),
('B236', 1),
('B237', 1),
('B238', 1),
('B239', 2),
('B240', 2),
('B241', 2),
('B242', 2),
('B243', 2),
('B244', 2),
('B245', 1),
('B246', 1),
('B247', 1),
('B248', 1),
('B249', 1),
('B250', 1),
('B251', 1),
('B252', 1),
('B253', 2),
('B254', 2),
('B255', 2),
('B256', 2),
('B257', 2),
('B258', 2),
('B259', 1),
('B260', 1),
('B261', 1),
('B262', 1),
('B263', 1),
('B264', 1),
('B265', 1),
('B266', 1),
('B267', 1),
('B268', 1),
('B269', 1),
('B270', 1),
('B271', 1),
('B272', 1),
('B273', 1),
('B274', 1),
('B275', 1),
('B276', 1),
('B277', 1),
('B278', 1),
('B279', 1),
('B280', 1),
('B281', 1),
('B282', 1),
('B283', 1),
('B284', 1),
('B285', 1),
('B286', 1),
('B287', 1),
('B288', 1),
('B289', 1),
('B290', 1),
('B291', 1),
('B292', 1),
('B293', 1),
('B294', 1),
('B295', 1),
('B296', 1),
('B297', 1),
('B298', 1),
('B299', 1),
('B300', 1),
('C500', 1),
('C499', 1),
('C498', 1),
('C497', 1),
('C496', 1),
('C495', 1),
('C494', 1),
('C493', 1),
('C492', 1),
('C491', 1),
('C490', 1),
('C489', 1),
('C488', 1),
('C487', 1),
('C486', 1),
('C485', 1),
('C484', 1),
('C483', 1),
('C482', 1),
('C481', 1),
('C480', 1),
('C479', 1),
('C478', 1),
('C477', 1),
('C476', 1),
('C475', 1),
('C474', 1),
('C473', 1),
('C472', 1),
('C471', 1),
('C470', 1),
('C469', 1),
('C468', 1),
('C467', 1),
('C466', 1),
('C465', 1),
('C464', 1),
('C463', 1),
('C462', 1),
('C461', 1),
('C460', 1),
('C459', 1),
('C458', 1),
('C457', 1),
('C456', 1),
('C455', 1),
('C454', 1),
('C453', 1),
('C452', 1),
('C451', 1),
('C450', 1),
('C449', 1),
('C448', 1),
('C447', 1),
('C446', 1),
('C445', 1),
('C444', 1),
('C443', 1),
('C442', 1),
('C441', 2),
('C440', 2),
('C439', 2),
('C438', 2),
('C437', 2),
('C436', 2),
('C435', 1),
('C434', 1),
('C433', 1),
('C432', 1),
('C431', 1),
('C430', 1),
('C429', 1),
('C428', 1),
('C427', 1),
('C426', 1),
('C425', 1),
('C424', 1),
('C423', 1),
('C422', 1),
('C421', 1),
('C420', 1),
('C419', 2),
('C418', 2),
('C417', 2),
('C416', 2),
('C415', 2),
('C414', 2),
('C413', 2),
('C412', 2),
('C411', 2),
('C410', 2),
('C409', 1),
('C408', 1),
('C407', 1),
('C406', 1),
('C405', 1),
('C404', 1),
('C403', 1),
('C402', 1),
('C401', 1),
('C400', 1),
('C399', 1),
('C398', 1),
('C397', 1),
('C396', 1),
('C395', 2),
('C394', 2),
('C393', 2),
('C392', 2),
('C391', 2),
('C390', 2),
('C389', 2),
('C388', 2),
('C387', 2),
('C386', 2),
('C385', 2),
('C384', 2),
('C383', 1),
('C382', 1),
('C381', 1),
('C380', 1),
('C379', 1),
('C378', 1),
('C377', 1),
('C376', 1),
('C375', 1),
('C374', 1),
('C373', 1),
('C372', 1),
('C371', 1),
('C370', 2),
('C369', 2),
('C368', 2),
('C367', 2),
('C366', 2),
('C365', 2),
('C364', 2),
('C363', 2),
('C362', 2),
('C361', 2),
('C360', 2),
('C359', 2),
('C358', 2),
('C357', 2),
('C356', 1),
('C355', 1),
('C354', 1),
('C353', 1),
('C352', 1),
('C351', 1),
('C350', 1),
('C349', 1),
('C348', 1),
('C347', 1),
('C346', 1),
('C345', 1),
('C344', 1),
('C343', 2),
('C342', 2),
('C341', 2),
('C340', 2),
('C339', 2),
('C338', 3),
('C337', 3),
('C336', 3),
('C335', 3),
('C334', 2),
('C333', 2),
('C332', 2),
('C331', 2),
('C330', 2),
('C329', 1),
('C328', 1),
('C327', 1),
('C326', 1),
('C325', 1),
('C324', 1),
('C323', 1),
('C322', 1),
('C321', 1),
('C320', 1),
('C319', 1),
('C318', 1),
('C317', 1),
('C316', 1),
('C315', 2),
('C314', 2),
('C313', 2),
('C312', 2),
('C311', 3),
('C310', 3),
('C309', 3),
('C308', 3),
('C307', 3),
('C306', 3),
('C305', 3),
('C304', 3),
('C303', 2),
('C302', 2),
('C301', 2),
('C300', 2),
('C299', 1),
('C298', 1),
('C297', 1),
('C296', 1),
('C295', 1),
('C294', 1),
('C293', 1),
('C292', 1),
('C291', 1),
('C290', 1),
('C289', 1),
('C288', 1),
('C287', 1),
('C286', 2),
('C285', 2),
('C284', 2),
('C283', 2),
('C282', 2),
('C281', 3),
('C280', 3),
('C279', 3),
('C278', 3),
('C277', 3),
('C276', 3),
('C275', 3),
('C274', 3),
('C273', 2),
('C272', 2),
('C271', 2),
('C270', 2),
('C269', 2),
('C268', 1),
('C267', 1),
('C266', 1),
('C265', 1),
('C264', 1),
('C263', 1),
('C262', 1),
('C261', 1),
('C260', 1),
('C259', 1),
('C258', 1),
('C257', 2),
('C256', 2),
('C255', 2),
('C254', 2),
('C253', 2),
('C252', 2),
('C251', 3),
('C250', 3),
('C249', 3),
('C248', 3),
('C247', 3),
('C246', 3),
('C245', 3),
('C244', 3),
('C243', 2),
('C242', 2),
('C241', 2),
('C240', 2),
('C239', 2),
('C238', 2),
('C237', 1),
('C236', 1),
('C235', 1),
('C234', 1),
('C233', 1),
('C232', 1),
('C231', 1),
('C230', 1),
('C229', 1),
('C228', 1),
('C227', 2),
('C226', 2),
('C225', 2),
('C224', 2),
('C223', 2),
('C222', 2),
('C221', 3),
('C220', 3),
('C219', 3),
('C218', 3),
('C217', 3),
('C216', 3),
('C215', 3),
('C214', 3),
('C213', 2),
('C212', 2),
('C211', 2),
('C210', 2),
('C209', 2),
('C208', 2),
('C207', 1),
('C206', 1),
('C205', 1),
('C204', 1),
('C203', 1),
('C202', 1),
('C201', 1),
('C200', 1),
('C199', 1),
('C198', 1),
('C197', 1),
('C196', 2),
('C195', 2),
('C194', 2),
('C193', 2),
('C192', 2),
('C191', 3),
('C190', 3),
('C189', 3),
('C188', 3),
('C187', 3),
('C186', 3),
('C185', 3),
('C184', 3),
('C183', 2),
('C182', 2),
('C181', 2),
('C180', 2),
('C179', 2),
('C178', 1),
('C177', 1),
('C176', 1),
('C175', 1),
('C174', 1),
('C173', 1),
('C172', 1),
('C171', 1),
('C170', 1),
('C169', 1),
('C168', 1),
('C167', 2),
('C166', 2),
('C165', 2),
('C164', 2),
('C163', 2),
('C162', 3),
('C161', 3),
('C160', 3),
('C159', 3),
('C158', 3),
('C157', 3),
('C156', 3),
('C155', 3),
('C154', 2),
('C153', 2),
('C152', 2),
('C151', 2),
('C150', 2),
('C149', 1),
('C148', 1),
('C147', 1),
('C146', 1),
('C145', 1),
('C144', 1),
('C143', 1),
('C142', 1),
('C141', 1),
('C140', 1),
('C139', 2),
('C138', 2),
('C137', 2),
('C136', 2),
('C135', 2),
('C134', 3),
('C133', 3),
('C132', 3),
('C131', 3),
('C130', 3),
('C129', 3),
('C128', 2),
('C127', 2),
('C126', 2),
('C125', 2),
('C124', 2),
('C123', 1),
('C122', 1),
('C121', 1),
('C120', 1),
('C119', 1),
('C118', 1),
('C117', 1),
('C116', 1),
('C115', 1),
('C114', 2),
('C113', 2),
('C112', 2),
('C111', 2),
('C110', 2),
('C109', 2),
('C108', 3),
('C107', 3),
('C106', 3),
('C105', 3),
('C104', 2),
('C103', 2),
('C102', 2),
('C101', 2),
('C100', 2),
('C099', 2),
('C098', 1),
('C097', 1),
('C096', 1),
('C095', 1),
('C094', 1),
('C093', 1),
('C092', 1),
('C091', 1),
('C090', 1),
('C089', 2),
('C088', 2),
('C087', 2),
('C086', 2),
('C085', 2),
('C084', 2),
('C083', 2),
('C082', 2),
('C081', 2),
('C080', 2),
('C079', 2),
('C078', 2),
('C077', 2),
('C076', 2),
('C075', 1),
('C074', 1),
('C073', 1),
('C072', 1),
('C071', 1),
('C070', 1),
('C069', 1),
('C068', 1),
('C067', 1),
('C066', 1),
('C065', 2),
('C064', 2),
('C063', 2),
('C062', 2),
('C061', 2),
('C060', 2),
('C059', 2),
('C058', 2),
('C057', 2),
('C056', 2),
('C055', 2),
('C054', 2),
('C053', 2),
('C052', 2),
('C051', 1),
('C050', 1),
('C049', 1),
('C048', 1),
('C047', 1),
('C046', 1),
('C045', 1),
('C044', 1),
('C043', 1),
('C042', 1),
('C041', 1),
('C040', 2),
('C039', 2),
('C038', 2),
('C037', 2),
('C036', 2),
('C035', 2),
('C034', 2),
('C033', 2),
('C032', 2),
('C031', 2),
('C030', 2),
('C029', 2),
('C028', 1),
('C027', 1),
('C026', 1),
('C025', 1),
('C024', 1),
('C023', 1),
('C022', 1),
('C021', 1),
('C020', 1),
('C019', 1),
('C018', 1),
('C017', 1),
('C016', 1),
('C015', 1),
('C014', 1),
('C013', 1),
('C012', 1),
('C011', 1),
('C010', 1),
('C009', 1),
('C008', 1),
('C007', 1),
('C006', 1),
('C005', 1),
('C004', 1),
('C003', 1),
('C002', 1),
('C001', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;