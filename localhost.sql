-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2009 at 01:03 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sebook`
--
CREATE DATABASE `sebook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sebook`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Password`) VALUES
('mahesh', 'mahesh');

-- --------------------------------------------------------

--
-- Table structure for table `agri`
--

CREATE TABLE `agri` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `agri`
--

INSERT INTO `agri` (`id`, `title`, `image`, `url`, `auther`, `rdate`, `format`) VALUES
(19, 'Weettind', 'admin/ibook/Zip.png', 'admin/ubook/31105-h.zip', 'maliin', '11-12-1988', 'zip');

-- --------------------------------------------------------

--
-- Table structure for table `anth`
--

CREATE TABLE `anth` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `anth`
--

INSERT INTO `anth` (`id`, `title`, `image`, `url`, `auther`, `rdate`, `format`) VALUES
(4, 'Loring_MA_Thesis', 'admin/ibook/Loring_MA_Thesis.bmp', 'admin/ubook/Loring_MA_Thesis.pdf', 'MA_Thesis', '9-14-1957', 'pdf'),
(5, 'Anthropology', 'admin/ibook/antho.PNG', 'admin/ubook/22601-8.zip', 'R.R. MARETT, M.A.', '1-1-1940', 'zip'),
(6, 'kinship organisations', 'admin/ibook/kinship organisations.PNG', 'admin/ubook/17280-h.zip', 'NORTHCOTE W. THOMAS, M.A.', '9-11-1956', 'zip');

-- --------------------------------------------------------

--
-- Table structure for table `bot`
--

CREATE TABLE `bot` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bot`
--

INSERT INTO `bot` (`id`, `title`, `image`, `url`, `auther`, `rdate`, `format`) VALUES
(3, 'flower of the form', 'admin/ibook/flower of the form.PNG', 'admin/ubook/13347-h.zip', 'Dairy mint', '1-1-1940', 'zip'),
(4, 'Fungi', 'admin/ibook/Fungi.PNG', 'admin/ubook/30181-h.zip', 'M. C. COOKE, M.A., LL.D.', '9-15-1940', 'zip'),
(5, ' Handbook of the Trees of', 'admin/ibook/img.cover.jpg', 'admin/ubook/20467-h.zip', 'Lorin Low Dame         He', '1-28-1940', 'zip');

-- --------------------------------------------------------

--
-- Table structure for table `che`
--

CREATE TABLE `che` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `che`
--


-- --------------------------------------------------------

--
-- Table structure for table `com`
--

CREATE TABLE `com` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `com`
--


-- --------------------------------------------------------

--
-- Table structure for table `cos`
--

CREATE TABLE `cos` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cos`
--

INSERT INTO `cos` (`id`, `title`, `image`, `url`, `auther`, `rdate`, `format`) VALUES
(1, 'Aether', 'admin/ibook/AETHER.PNG', 'admin/ubook/24667-h.zip', 'Aether collon', '12-28-1982', 'zip'),
(2, 'Life and Matter', 'admin/ibook/Zip.png', 'admin/ubook/26321-h.zip', 'Sir Oliver Lodge', '8-10-1961', 'zip(html)');

-- --------------------------------------------------------

--
-- Table structure for table `dec1`
--

CREATE TABLE `dec1` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(50) NOT NULL,
  `rdate` varchar(50) NOT NULL,
  `format` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dec1`
--

INSERT INTO `dec1` (`id`, `title`, `image`, `url`, `auther`, `rdate`, `format`) VALUES
(1, 'cvvmbnvcmn', 'admin/ibook/the Art of interior.PNG', 'admin/ubook/30472-8.zip', 'bnd,mn', '1-1-1940', 'FGKDFKGJ');

-- --------------------------------------------------------

--
-- Table structure for table `eco`
--

CREATE TABLE `eco` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `eco`
--

INSERT INTO `eco` (`id`, `title`, `image`, `url`, `auther`, `rdate`, `format`) VALUES
(1, 'THE COPY/SOUTH DOSSIER', 'admin/ibook/22746.bmp', 'admin/ubook/22746-p.pdf', 'john', '12-1-1959', 'pdf'),
(2, 'The Wealth of Networks', 'admin/ibook/Benkler_Wealth_Of_Networks.bmp', 'admin/ubook/Benkler_Wealth_Of_Networks.pdf', 'jekh join', '12-18-1968', 'pdf'),
(3, 'New Perspectives on Regul', 'admin/ibook/New_Perspectives_Full_Text.bmp', 'admin/ubook/New_Perspectives_Full_Text.pdf', 'Kristen Argenio', '5-14-2009', 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `fdback`
--

CREATE TABLE `fdback` (
  `id` int(11) NOT NULL auto_increment,
  `Name` varchar(30) NOT NULL,
  `City` varchar(15) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phoneno` varchar(10) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fdback`
--

INSERT INTO `fdback` (`id`, `Name`, `City`, `Gender`, `Email`, `Phoneno`, `Subject`) VALUES
(1, 'Mahesh tavethiya', 'bhavnagar', 'Male', 'mahesh@yahoo.com', '9033404261', 'nice eBook in share book'),
(2, 'yogesh', 'botad', 'Male', 'yogesh@yahoo.com', '9723655108', 'i like share books');

-- --------------------------------------------------------

--
-- Table structure for table `geo`
--

CREATE TABLE `geo` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `geo`
--

INSERT INTO `geo` (`id`, `title`, `image`, `url`, `auther`, `rdate`, `format`) VALUES
(1, 'Highroads of Geography', 'admin/ibook/11218-h.htm', 'admin/ubook/11218-h.zip', 'ANOM', '9-10-1965', 'PDF');

-- --------------------------------------------------------

--
-- Table structure for table `geog1`
--

CREATE TABLE `geog1` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `geog1`
--

INSERT INTO `geog1` (`id`, `title`, `image`, `url`, `auther`, `rdate`, `format`) VALUES
(2, 'BIBLICAL GEOGRAPHY', 'admin/ibook/FDFDF.bmp', 'admin/ubook/15435-h.zip', 'LOS ANGELES, CALIF.', '5-4-1949', 'PDF');

-- --------------------------------------------------------

--
-- Table structure for table `his`
--

CREATE TABLE `his` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `his`
--

INSERT INTO `his` (`id`, `title`, `image`, `url`, `auther`, `rdate`, `format`) VALUES
(1, 'WESTMINSTER ABBEY', 'admin/ibook/1-28_text.bmp', 'admin/ubook/1-28_text.pdf', 'WESTMINSTER ABBEY', '1-1-1940', 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `hum`
--

CREATE TABLE `hum` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hum`
--


-- --------------------------------------------------------

--
-- Table structure for table `lan`
--

CREATE TABLE `lan` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `lan`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Uname` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Uname`, `Pass`) VALUES
('mahesh', 'mahesh');

-- --------------------------------------------------------

--
-- Table structure for table `mic`
--

CREATE TABLE `mic` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mic`
--


-- --------------------------------------------------------

--
-- Table structure for table `mus`
--

CREATE TABLE `mus` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mus`
--

INSERT INTO `mus` (`id`, `title`, `image`, `url`, `auther`, `rdate`, `format`) VALUES
(1, 'COMPOSE ON TOUR  OWN MUSI', 'admin/ibook/compose.bmp', 'admin/ubook/compose.pdf', 'MISS', '12-17-1964', 'pdf'),
(2, 'COREL REFF', 'admin/ibook/coral1.bmp', 'admin/ubook/coral1.pdf', 'REFF', '6-12-1957', 'pdf'),
(3, 'GuideToSundaneseMusic', 'admin/ibook/GuideToSundaneseMusc.bmp', 'admin/ubook/GuideToSundaneseMusic.pdf', 'SUN', '8-17-1960', 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `nat`
--

CREATE TABLE `nat` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `nat`
--


-- --------------------------------------------------------

--
-- Table structure for table `open`
--

CREATE TABLE `open` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `open`
--


-- --------------------------------------------------------

--
-- Table structure for table `pain`
--

CREATE TABLE `pain` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pain`
--

INSERT INTO `pain` (`id`, `title`, `image`, `url`, `auther`, `rdate`, `format`) VALUES
(3, 'incpainting', 'admin/ibook/inkpainting.bmp', 'admin/ubook/inkpainting.pdf', 'cattt', '12-22-1960', 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pdf`
--


-- --------------------------------------------------------

--
-- Table structure for table `psy`
--

CREATE TABLE `psy` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `psy`
--


-- --------------------------------------------------------

--
-- Table structure for table `rec`
--

CREATE TABLE `rec` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rec`
--


-- --------------------------------------------------------

--
-- Table structure for table `reli`
--

CREATE TABLE `reli` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `reli`
--


-- --------------------------------------------------------

--
-- Table structure for table `rgs`
--

CREATE TABLE `rgs` (
  `id` int(20) NOT NULL auto_increment,
  `password` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `rgs`
--

INSERT INTO `rgs` (`id`, `password`, `Name`, `Email`) VALUES
(1, 'admin ', 'admin', 'mahesh@yahoo.com'),
(56, 'mm', 'mm', 'mm'),
(57, 'kk', 'kk', 'kk'),
(58, 'mahesh', 'Tavethiya mahesh', 'mahesh@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `scul`
--

CREATE TABLE `scul` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `scul`
--


-- --------------------------------------------------------

--
-- Table structure for table `soc`
--

CREATE TABLE `soc` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `soc`
--


-- --------------------------------------------------------

--
-- Table structure for table `soft`
--

CREATE TABLE `soft` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `auther` varchar(25) NOT NULL,
  `rdate` varchar(15) NOT NULL,
  `format` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `soft`
--


-- --------------------------------------------------------

--
-- Table structure for table `usershare`
--

CREATE TABLE `usershare` (
  `id` int(11) NOT NULL auto_increment,
  `Yourname` varchar(30) NOT NULL,
  `Booktitle` varchar(15) NOT NULL,
  `Bookimage` varchar(50) NOT NULL,
  `Bookurl` varchar(50) NOT NULL,
  `bookformate` varchar(10) NOT NULL,
  `Auther` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `usershare`
--

INSERT INTO `usershare` (`id`, `Yourname`, `Booktitle`, `Bookimage`, `Bookurl`, `bookformate`, `Auther`) VALUES
(11, 'mahesh ', 'ink painting', 'admin/ibook/inkpainting.bmp', 'admin/ubook/inkpainting.pdf', 'pdf', 'mahesh'),
(12, 'MANISH', 'THE POEMS', 'admin/ibook/baudelai3628736287-thumb.jpg', 'admin/ubook/Hitarth.zip', 'pdf', 'CHARLES');
