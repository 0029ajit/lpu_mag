-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2014 at 10:27 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE IF NOT EXISTS `follow` (
  `follower` varchar(20) NOT NULL,
  `followed` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`follower`, `followed`) VALUES
('T1100', 'T1100'),
('T1100', 'T1107'),
('T1100', 'T1112'),
('T1101', 'T1100'),
('T1101', 'T1103'),
('T1101', 'T1107'),
('T1101', 'T1116'),
('T1101', 'T1105'),
('T1101', 'T1101'),
('T1107', 'T1100'),
('T1107', 'T1107'),
('T1103', 'T1104'),
('T1104', 'T1100'),
('T1103', 'T1100'),
('T1103', 'T1101'),
('11006889', 'T1100'),
('11006889', 'T1101'),
('11010746', 'T1100'),
('11010746', 'T1101');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `last_login` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`, `category`, `name`, `pic`, `dept`, `last_login`) VALUES
('11006889', '11006889', 'student', 'vishwajeet', '1397329708503S.jpg', 'cse', 1397860481),
('11009889', '11009889', 'student', 'raju', '1397508994698S.jpg', 'mec', 0),
('11010746', '11010746', 'student', 'Mani', '1397329787309S.jpg', 'ece', 1397799183),
('admin', 'admin', 'admin', '', '', '', 0),
('editor', 'veditor', 'editor', '', '', '', 0),
('T1100', 'T1100', 'faculty', 'ravi', '139732983065F.JPG', 'cse', 1397861492),
('T1101', 'T1101', 'faculty', 'Ashok', '1397329864690F.JPG', 'cse', 1397855557),
('T1102', 'T1102', 'faculty', 'Prashant', '13973299058F.JPG', 'cse', 0),
('T1103', 'T1103', 'faculty', 'vikas', '1397330040816F.JPG', 'cse', 1397796575),
('T1104', 'T1104', 'faculty', 'abhinav', '1397330071546F.JPG', 'cse', 1397795947),
('T1105', 'T1105', 'faculty', 'Abhishek', '139733010712F.JPG', 'cse', 0),
('T1106', 'T1106', 'faculty', 'ajit', '1397330137154F.JPG', 'mec', 0),
('T1107', 'T1107', 'faculty', 'ranjit', '1397330167422F.JPG', 'mec', 1397781108),
('T1108', 'T1108', 'faculty', 'aditya', '1397330193582F.JPG', 'mec', 0),
('T1109', 'T1109', 'faculty', 'ajay', '1397330220390F.JPG', 'mec', 0),
('T1110', 'T1110', 'faculty', 'ankit', '1397330249170F.JPG', 'mec', 0),
('T1111', 'T1111', 'faculty', 'anuj', '1397330274186F.JPG', 'mec', 0),
('T1112', 'T1112', 'faculty', 'anupam', '1397330313765F.JPG', 'ece', 0),
('T1113', 'T1113', 'faculty', 'arman', '1397330341208F.JPG', 'ece', 0),
('T1114', 'T1114', 'faculty', 'ashish', '1397330370350F.JPG', 'ece', 0),
('T1115', 'T1115', 'faculty', 'dhananjay', '1397330408260F.JPG', 'ece', 0),
('T1116', 'T1116', 'faculty', 'emam', '139733043627F.JPG', 'ece', 0),
('T1117', 'T1117', 'faculty', 'gaurav', '139733045972F.JPG', 'ece', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tweet`
--

CREATE TABLE IF NOT EXISTS `tweet` (
  `id` varchar(11) NOT NULL,
  `title` text NOT NULL,
  `tweet` longtext NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tweet`
--

INSERT INTO `tweet` (`id`, `title`, `tweet`, `time`) VALUES
('T1100', 'java', 'good', 0),
('T1100', 'java 2', 'good also', 0),
('T1100', 'fyhhdf', 'fh', 0),
('T1100', 'gfhfghfhfg', 'fghfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffg', 0),
('T1100', 'final', 'this is what called a complete project but we have to go through a little more test ', 0),
('T1100', 'final long', 'this is what called a complete project but we have to go through a little more testthis is what called a complete project but we have to go through a little more testthis is what called a complete project but we have to go through a little more testthis is what called a complete project but we have to go through a little more testthis is what called a complete project but we have to go through a little more test', 0),
('T1100', 'xcc', 'cxxc', 1397777763),
('T1100', 'mnnh', 'hjngh', 1397780119),
('T1100', 'serdsxe', 'tfgtg', 1397780483),
('T1100', 'ghjgj', 'ghjmg', 1397780855),
('T1100', 'fgjhrt', 'hjdfj', 1397780963),
('T1107', 'hhjihi', 'hhjjhnjhh', 1397781088),
('T1100', 'hihuil', 'gghuihop', 1397781167),
('T1100', 'ghfgh', 'hghdf', 1397781383),
('T1100', 'gjh', 'j', 1397781482),
('T1104', 'try', 'try succesful', 1397795829),
('T1104', 'fff', 'final', 1397795966),
('T1104', 'gogle', 'fff', 1397796046),
('T1101', 'rrrrr', 'rrr', 1397796096),
('T1100', 'ddd', 'dd', 1397796467),
('T1101', 'dfdfs', 'sdfsdfsdf', 1397796489),
('T1100', 'vcxv', 'xcv', 1397796616),
('T1100', 'new', 'check new successfull', 1397799081),
('T1100', 'xx', 'xx', 1397799098),
('T1100', 'new', 'new', 1397858198),
('T1100', 'yes', 'ss', 1397860715),
('T1100', 'gdfg', 'bb', 1397861019);
--
-- Database: `magazine_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `1396642051_academic`
--

CREATE TABLE IF NOT EXISTS `1396642051_academic` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `1396642051_academic`
--

INSERT INTO `1396642051_academic` (`s_no`, `title`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `video`) VALUES
(1, 'jan 1 acadmic title', 'jan 1 acadmic description', '139664174539811092012982.jpg', '1396641745327031120121196.jpg', '1396641745472191020121110.jpg', '', '', '', '1396641745995231020121134.jpg', '', '', '', '<iframe width="420" height="315" src="https://www.youtube.com/embed/fXuYCNJGfto" frameborder="0" allowfullscreen></iframe>'),
(2, 'jan 2 acadmic title', 'jan 2 acadmic description', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'jan 3 acadmic title', 'jan 3 acadmic description', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `1396642051_activity`
--

CREATE TABLE IF NOT EXISTS `1396642051_activity` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642051_competition`
--

CREATE TABLE IF NOT EXISTS `1396642051_competition` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642051_guest_visit`
--

CREATE TABLE IF NOT EXISTS `1396642051_guest_visit` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `1396642051_guest_visit`
--

INSERT INTO `1396642051_guest_visit` (`s_no`, `title`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `video`) VALUES
(1, 'jan 1 guest visit title', 'guset visit', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `1396642051_lpu_in_news`
--

CREATE TABLE IF NOT EXISTS `1396642051_lpu_in_news` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `1396642051_lpu_in_news`
--

INSERT INTO `1396642051_lpu_in_news` (`s_no`, `title`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `video`) VALUES
(1, 'jan lpu in news 1', 'jan lpu in news', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `1396642051_new_in_lpu`
--

CREATE TABLE IF NOT EXISTS `1396642051_new_in_lpu` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642051_placement`
--

CREATE TABLE IF NOT EXISTS `1396642051_placement` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `1396642051_placement`
--

INSERT INTO `1396642051_placement` (`s_no`, `title`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `video`) VALUES
(1, 'jan 1 placement title', 'jan 1 placement description', '139664179570231020121134.jpg', '', '', '1396641795364191020121112.jpg', '', '', '', '', '', '', '<iframe width="420" height="315" src="https://www.youtube.com/embed/fXuYCNJGfto" frameborder="0" allowfullscreen></iframe>'),
(2, 'jan 2 placement title', 'jan 2 placement description', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `1396642051_sports`
--

CREATE TABLE IF NOT EXISTS `1396642051_sports` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `1396642051_sports`
--

INSERT INTO `1396642051_sports` (`s_no`, `title`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `video`) VALUES
(1, 'jan 1 sports title', 'jan 1 sports description', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `1396642107_academic`
--

CREATE TABLE IF NOT EXISTS `1396642107_academic` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642107_activity`
--

CREATE TABLE IF NOT EXISTS `1396642107_activity` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642107_competition`
--

CREATE TABLE IF NOT EXISTS `1396642107_competition` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642107_guest_visit`
--

CREATE TABLE IF NOT EXISTS `1396642107_guest_visit` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642107_lpu_in_news`
--

CREATE TABLE IF NOT EXISTS `1396642107_lpu_in_news` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642107_new_in_lpu`
--

CREATE TABLE IF NOT EXISTS `1396642107_new_in_lpu` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642107_placement`
--

CREATE TABLE IF NOT EXISTS `1396642107_placement` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642107_sports`
--

CREATE TABLE IF NOT EXISTS `1396642107_sports` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642134_academic`
--

CREATE TABLE IF NOT EXISTS `1396642134_academic` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642134_activity`
--

CREATE TABLE IF NOT EXISTS `1396642134_activity` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642134_competition`
--

CREATE TABLE IF NOT EXISTS `1396642134_competition` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642134_guest_visit`
--

CREATE TABLE IF NOT EXISTS `1396642134_guest_visit` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642134_lpu_in_news`
--

CREATE TABLE IF NOT EXISTS `1396642134_lpu_in_news` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642134_new_in_lpu`
--

CREATE TABLE IF NOT EXISTS `1396642134_new_in_lpu` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642134_placement`
--

CREATE TABLE IF NOT EXISTS `1396642134_placement` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642134_sports`
--

CREATE TABLE IF NOT EXISTS `1396642134_sports` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642162_academic`
--

CREATE TABLE IF NOT EXISTS `1396642162_academic` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642162_activity`
--

CREATE TABLE IF NOT EXISTS `1396642162_activity` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642162_competition`
--

CREATE TABLE IF NOT EXISTS `1396642162_competition` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642162_guest_visit`
--

CREATE TABLE IF NOT EXISTS `1396642162_guest_visit` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642162_lpu_in_news`
--

CREATE TABLE IF NOT EXISTS `1396642162_lpu_in_news` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642162_new_in_lpu`
--

CREATE TABLE IF NOT EXISTS `1396642162_new_in_lpu` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642162_placement`
--

CREATE TABLE IF NOT EXISTS `1396642162_placement` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642162_sports`
--

CREATE TABLE IF NOT EXISTS `1396642162_sports` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642418_academic`
--

CREATE TABLE IF NOT EXISTS `1396642418_academic` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `1396642418_academic`
--

INSERT INTO `1396642418_academic` (`s_no`, `title`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `video`) VALUES
(1, 'may acadmic 1', 'may acadmic 1 desc', '1396642279313191020121110.jpg', '', '', '', '13966422794962013-03-31 18.25.36.jpg', '', '13966422794162013-03-31 18.26.49.jpg', '', '', '', ''),
(2, 'acdmic 2 may', 'may acadmic 2 desc', '139664230445901012011003.jpg', '', '', '', '', '', '', '', '', '', ''),
(3, 'may acadmic 3', 'may acadmic 3 desc', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'may acadmic 4', 'may acadmic 4 desc', '', '', '', '', '', '', '', '', '', '', '<iframe width="420" height="315" src="https://www.youtube.com/embed/fXuYCNJGfto" frameborder="0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `1396642418_activity`
--

CREATE TABLE IF NOT EXISTS `1396642418_activity` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642418_competition`
--

CREATE TABLE IF NOT EXISTS `1396642418_competition` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642418_guest_visit`
--

CREATE TABLE IF NOT EXISTS `1396642418_guest_visit` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642418_lpu_in_news`
--

CREATE TABLE IF NOT EXISTS `1396642418_lpu_in_news` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642418_new_in_lpu`
--

CREATE TABLE IF NOT EXISTS `1396642418_new_in_lpu` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396642418_placement`
--

CREATE TABLE IF NOT EXISTS `1396642418_placement` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `1396642418_placement`
--

INSERT INTO `1396642418_placement` (`s_no`, `title`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `video`) VALUES
(1, 'placement may 1', 'placement desc', '139664237894801012011007.jpg', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `1396642418_sports`
--

CREATE TABLE IF NOT EXISTS `1396642418_sports` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `1396642418_sports`
--

INSERT INTO `1396642418_sports` (`s_no`, `title`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `video`) VALUES
(1, 'ccc', 'cccccc', '', '13966423968201012011008.jpg', '', '', '', '', '', '', '', '', '<iframe width="420" height="315" src="https://www.youtube.com/embed/fXuYCNJGfto" frameborder="0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `1396708119_academic`
--

CREATE TABLE IF NOT EXISTS `1396708119_academic` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396708119_activity`
--

CREATE TABLE IF NOT EXISTS `1396708119_activity` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396708119_competition`
--

CREATE TABLE IF NOT EXISTS `1396708119_competition` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396708119_guest_visit`
--

CREATE TABLE IF NOT EXISTS `1396708119_guest_visit` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396708119_lpu_in_news`
--

CREATE TABLE IF NOT EXISTS `1396708119_lpu_in_news` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396708119_new_in_lpu`
--

CREATE TABLE IF NOT EXISTS `1396708119_new_in_lpu` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396708119_placement`
--

CREATE TABLE IF NOT EXISTS `1396708119_placement` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396708119_sports`
--

CREATE TABLE IF NOT EXISTS `1396708119_sports` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396743637_academic`
--

CREATE TABLE IF NOT EXISTS `1396743637_academic` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396743637_activity`
--

CREATE TABLE IF NOT EXISTS `1396743637_activity` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396743637_competition`
--

CREATE TABLE IF NOT EXISTS `1396743637_competition` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396743637_guest_visit`
--

CREATE TABLE IF NOT EXISTS `1396743637_guest_visit` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396743637_lpu_in_news`
--

CREATE TABLE IF NOT EXISTS `1396743637_lpu_in_news` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396743637_new_in_lpu`
--

CREATE TABLE IF NOT EXISTS `1396743637_new_in_lpu` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396743637_placement`
--

CREATE TABLE IF NOT EXISTS `1396743637_placement` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396743637_sports`
--

CREATE TABLE IF NOT EXISTS `1396743637_sports` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396745839_academic`
--

CREATE TABLE IF NOT EXISTS `1396745839_academic` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396745839_activity`
--

CREATE TABLE IF NOT EXISTS `1396745839_activity` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `1396745839_activity`
--

INSERT INTO `1396745839_activity` (`s_no`, `title`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `video`) VALUES
(1, 'fake activity 2', 'photo scattered', '1396745111901555.jpg', '', '', '1396745111973City521.jpg', '', '', '', '1396745111911Cars7845.jpg', '1396745111161Architecture3882.jpg', '1396745111161Architecture3882.jpg', ''),
(2, 'title', 'Ground Wave \r\n         Radio waves in the VLF band propagate in a ground, or surface wave.  The wave is connected at one end to the surface of the earth and to the ionosphere at the other. The ionosphere is the region above the troposphere (where the air is), from about 50 to 250 miles above the earth.  It is a collection of ions, which  ', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'fake', 'no dat', '1396745610957Military5594.jpg', '139674561016Architecture3882.jpg', '1396745610426City521.jpg', '1396745610689Technology9044.jpg', '1396745610533Technology7256.jpg', '1396745610172Technology9044.jpg', '1396745610400Technology8549.jpg', '1396745610667Technology9043.jpg', '1396745610741Motorcycle8101.jpg', '1396745610741Motorcycle8101.jpg', '<iframe width="420" height="315" src="https://www.youtube.com/embed/fXuYCNJGfto" frameborder="0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `1396745839_competition`
--

CREATE TABLE IF NOT EXISTS `1396745839_competition` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396745839_guest_visit`
--

CREATE TABLE IF NOT EXISTS `1396745839_guest_visit` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396745839_lpu_in_news`
--

CREATE TABLE IF NOT EXISTS `1396745839_lpu_in_news` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396745839_new_in_lpu`
--

CREATE TABLE IF NOT EXISTS `1396745839_new_in_lpu` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396745839_placement`
--

CREATE TABLE IF NOT EXISTS `1396745839_placement` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396745839_sports`
--

CREATE TABLE IF NOT EXISTS `1396745839_sports` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396760054_academic`
--

CREATE TABLE IF NOT EXISTS `1396760054_academic` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `1396760054_academic`
--

INSERT INTO `1396760054_academic` (`s_no`, `title`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `video`) VALUES
(1, 'vvv', 'Identical twins were born in Webville a number of years ago and by a\r\nfreak accident involving an Internet router malfunction, the twins were\r\nseparated shortly after birth. Both grew up without knowledge of the\r\nother, and only through another set of freak circumstances did they later\r\nmeet and discover their identity, which they decided to keep secret.\r\nAfter the discovery, they quickly learned that they shared a surprising\r\nnumber of things in common. Both were married to wives named\r\nCitation. They also both had a love for quotations. The first twin,\r\nthe <q> element, loved short, pithy quotes, while the second,\r\n<blockquote>, loved longer quotes, often memorizing\r\ncomplete passages from books or poems.\r\nBeing identical twins, they bore a strong resemblance to each other, and\r\nso they decided to put together an evil scheme whereby they might stand\r\nin for each other now and then. They first tested this on their wives (the\r\ndetails of which we wonâ€™t go into) and they passed with flying colors\r\nâ€“ their wives had no idea (or at least pretended not to).\r\nNext they wanted to test their switching scheme in the work place\r\nwhere, as another coincidence, they both performed the same job:\r\nmarking up quotes in HTML documents. So, on the chosen day, the\r\nbrothers went to the otherâ€™s work place fully confident theyâ€™d pull off\r\ntheir evil plan (after all, if their wives couldnâ€™t tell, how could their\r\nbosses?), and thatâ€™s when things turned bad. Within 10 minutes of\r\nstarting the work day, the brothers had both been found to be imposters\r\nand the standards authorities were immediately alerted', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'ccc', 'Identical twins were born in Webville a number of years ago and by a\r\nfreak accident involving an Internet router malfunction, the twins were\r\nseparated shortly after birth. Both grew up without knowledge of the\r\nother, and only through another set of freak circumstances did they later\r\nmeet and discover their identity, which they decided to keep secret.\r\nAfter the discovery, they quickly learned that they shared a surprising\r\nnumber of things in common. Both were married to wives named\r\nCitation. They also both had a love for quotations. The first twin,\r\nthe <q> element, loved short, pithy quotes, while the second,\r\n<blockquote>, loved longer quotes, often memorizing\r\ncomplete passages from books or poems.\r\nBeing identical twins, they bore a strong resemblance to each other, and\r\nso they decided to put together an evil scheme whereby they might stand\r\nin for each other now and then. They first tested this on their wives (the\r\ndetails of which we wonâ€™t go into) and they passed with flying colors\r\nâ€“ their wives had no idea (or at least pretended not to).\r\nNext they wanted to test their switching scheme in the work place\r\nwhere, as another coincidence, they both performed the same job:\r\nmarking up quotes in HTML documents. So, on the chosen day, the\r\nbrothers went to the otherâ€™s work place fully confident theyâ€™d pull off\r\ntheir evil plan (after all, if their wives couldnâ€™t tell, how could their\r\nbosses?), and thatâ€™s when things turned bad. Within 10 minutes of\r\nstarting the work day, the brothers had both been found to be imposters\r\nand the standards authorities were immediately alertedIdentical twins were born in Webville a number of years ago and by a\r\nfreak accident involving an Internet router malfunction, the twins were\r\nseparated shortly after birth. Both grew up without knowledge of the\r\nother, and only through another set of freak circumstances did they later\r\nmeet and discover their identity, which they decided to keep secret.\r\nAfter the discovery, they quickly learned that they shared a surprising\r\nnumber of things in common. Both were married to wives named\r\nCitation. They also both had a love for quotations. The first twin,\r\nthe <q> element, loved short, pithy quotes, while the second,\r\n<blockquote>, loved longer quotes, often memorizing\r\ncomplete passages from books or poems.\r\nBeing identical twins, they bore a strong resemblance to each other, and\r\nso they decided to put together an evil scheme whereby they might stand\r\nin for each other now and then. They first tested this on their wives (the\r\ndetails of which we wonâ€™t go into) and they passed with flying colors\r\nâ€“ their wives had no idea (or at least pretended not to).\r\nNext they wanted to test their switching scheme in the work place\r\nwhere, as another coincidence, they both performed the same job:\r\nmarking up quotes in HTML documents. So, on the chosen day, the\r\nbrothers went to the otherâ€™s work place fully confident theyâ€™d pull off\r\ntheir evil plan (after all, if their wives couldnâ€™t tell, how could their\r\nbosses?), and thatâ€™s when things turned bad. Within 10 minutes of\r\nstarting the work day, the brothers had both been found to be imposters\r\nand the standards authorities were immediately alertedIdentical twins were born in Webville a number of years ago and by a\r\nfreak accident involving an Internet router malfunction, the twins were\r\nseparated shortly after birth. Both grew up without knowledge of the\r\nother, and only through another set of freak circumstances did they later\r\nmeet and discover their identity, which they decided to keep secret.\r\nAfter the discovery, they quickly learned that they shared a surprising\r\nnumber of things in common. Both were married to wives named\r\nCitation. They also both had a love for quotations. The first twin,\r\nthe <q> element, loved short, pithy quotes, while the second,\r\n<blockquote>, loved longer quotes, often memorizing\r\ncomplete passages from books or poems.\r\nBeing identical twins, they bore a strong resemblance to each other, and\r\nso they decided to put together an evil scheme whereby they might stand\r\nin for each other now and then. They first tested this on their wives (the\r\ndetails of which we wonâ€™t go into) and they passed with flying colors\r\nâ€“ their wives had no idea (or at least pretended not to).\r\nNext they wanted to test their switching scheme in the work place\r\nwhere, as another coincidence, they both performed the same job:\r\nmarking up quotes in HTML documents. So, on the chosen day, the\r\nbrothers went to the otherâ€™s work place fully confident theyâ€™d pull off\r\ntheir evil plan (after all, if their wives couldnâ€™t tell, how could their\r\nbosses?), and thatâ€™s when things turned bad. Within 10 minutes of\r\nstarting the work day, the brothers had both been found to be imposters\r\nand the standards authorities were immediately alerted', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `1396760054_activity`
--

CREATE TABLE IF NOT EXISTS `1396760054_activity` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396760054_competition`
--

CREATE TABLE IF NOT EXISTS `1396760054_competition` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396760054_guest_visit`
--

CREATE TABLE IF NOT EXISTS `1396760054_guest_visit` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396760054_lpu_in_news`
--

CREATE TABLE IF NOT EXISTS `1396760054_lpu_in_news` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396760054_new_in_lpu`
--

CREATE TABLE IF NOT EXISTS `1396760054_new_in_lpu` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396760054_placement`
--

CREATE TABLE IF NOT EXISTS `1396760054_placement` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396760054_sports`
--

CREATE TABLE IF NOT EXISTS `1396760054_sports` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396899114_academic`
--

CREATE TABLE IF NOT EXISTS `1396899114_academic` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `1396899114_academic`
--

INSERT INTO `1396899114_academic` (`s_no`, `title`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `video`) VALUES
(1, 'fake acticvity', 'bbbbbbbbbbbbbbbbbbb', '1396898909227banner_orange-red.png', '', '', '139689890937abstract-light-blur-lrg.jpg', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `1396899114_activity`
--

CREATE TABLE IF NOT EXISTS `1396899114_activity` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396899114_competition`
--

CREATE TABLE IF NOT EXISTS `1396899114_competition` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396899114_guest_visit`
--

CREATE TABLE IF NOT EXISTS `1396899114_guest_visit` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396899114_lpu_in_news`
--

CREATE TABLE IF NOT EXISTS `1396899114_lpu_in_news` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396899114_new_in_lpu`
--

CREATE TABLE IF NOT EXISTS `1396899114_new_in_lpu` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396899114_placement`
--

CREATE TABLE IF NOT EXISTS `1396899114_placement` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1396899114_sports`
--

CREATE TABLE IF NOT EXISTS `1396899114_sports` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1397187172_academic`
--

CREATE TABLE IF NOT EXISTS `1397187172_academic` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1397187172_activity`
--

CREATE TABLE IF NOT EXISTS `1397187172_activity` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1397187172_competition`
--

CREATE TABLE IF NOT EXISTS `1397187172_competition` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1397187172_guest_visit`
--

CREATE TABLE IF NOT EXISTS `1397187172_guest_visit` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1397187172_lpu_in_news`
--

CREATE TABLE IF NOT EXISTS `1397187172_lpu_in_news` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1397187172_new_in_lpu`
--

CREATE TABLE IF NOT EXISTS `1397187172_new_in_lpu` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1397187172_placement`
--

CREATE TABLE IF NOT EXISTS `1397187172_placement` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `1397187172_sports`
--

CREATE TABLE IF NOT EXISTS `1397187172_sports` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `1397187172_sports`
--

INSERT INTO `1397187172_sports` (`s_no`, `title`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `video`) VALUES
(1, 'cric', 'nnbhjyg lgguliui', '1397187141275pub.JPG', '', '', '', '', '', '', '1397187141169logo.png', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mag_table`
--

CREATE TABLE IF NOT EXISTS `mag_table` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `id` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `cover` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mag_table`
--

INSERT INTO `mag_table` (`no`, `id`, `name`, `cover`) VALUES
(1, '1396642051', 'jan', '139664205115467129_118571748208278_100001663607963_123811_5171254_n.jpg'),
(2, '1396642107', 'feb', '139664210768154965_118573284874791_100001663607963_123844_681059_n.jpg'),
(3, '1396642134', 'march', '1396642134320IMG0048A.jpg'),
(4, '1396642162', 'april', '1396642162192154965_118573294874790_100001663607963_123845_2917524_n.jpg'),
(5, '1396642418', 'may', '13966424182702013-03-31 18.28.jpg'),
(6, '1396708119', 'june', '1396708119424Class Reunion_lg.JPG'),
(7, '1396743637', 'November', '139674363728Graduation_LGthumb.jpg'),
(8, '1396745839', 'september 2014', '1396745839317screen-shot-2010-10-04-at-11-26-07.png'),
(9, '1396760054', 'test', '1396760054699CTK College magazine Design.jpg'),
(10, '1396899114', 'bbbbbb', '1396899114647070336-firey-orange-jelly-icon-alphanumeric-plus-sign-simple.png'),
(11, '1397187172', 'nov 2014', '1397187172312pub.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`message`) VALUES
('hello');

-- --------------------------------------------------------

--
-- Table structure for table `temp_academic`
--

CREATE TABLE IF NOT EXISTS `temp_academic` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_activity`
--

CREATE TABLE IF NOT EXISTS `temp_activity` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_competition`
--

CREATE TABLE IF NOT EXISTS `temp_competition` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_guest_visit`
--

CREATE TABLE IF NOT EXISTS `temp_guest_visit` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_lpu_in_news`
--

CREATE TABLE IF NOT EXISTS `temp_lpu_in_news` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_new_in_lpu`
--

CREATE TABLE IF NOT EXISTS `temp_new_in_lpu` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_placement`
--

CREATE TABLE IF NOT EXISTS `temp_placement` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_sports`
--

CREATE TABLE IF NOT EXISTS `temp_sports` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` longtext,
  `image1` text,
  `image2` text,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  `image7` text,
  `image8` text,
  `image9` text,
  `image10` text,
  `video` longtext,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
