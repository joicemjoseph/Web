-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2002 at 08:53 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `websms`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  `id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `phone`, `feedback`, `id`) VALUES
('Janeesh K', 'janeesh2009@gmail.ccom', '9846164641', 'hi GOOD Morning!', 5),
('Vishnu', 'vishnu@rediffmail.com', '9876555888', 'fine its good', 22);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `group_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_name`, `username`, `id`) VALUES
('Q-read', 'jani', 2),
('nexegen', 'jani', 4),
('illustris', 'jani', 10),
('topmost', 'shafeer', 11),
('violin', 'shafeer', 12),
('testabiz', 'abhil', 16),
('techno india', 'raku', 17),
('Testabiz', 'jani', 18),
('IOSS', 'jani', 19),
('Orange', 'jani', 32),
('nexegen', 'manjulal', 34),
('1', 'shafeer', 37),
('Orange', 'shafeer', 39),
('ioss', 'shafeer', 40),
('topmost', 'jani', 42),
('Black Pearls', 'jani', 44),
('black pearls', 'subin', 47),
('TWITTER', 'subin', 51),
('black pearls', 'anoop', 52),
('diwar', 'manu', 64),
('NIT', 'manu', 65),
('BIGLEAP', 'manu', 66),
('YOUTH', 'manu', 67),
('MEA', 'jamshi', 68),
('RANGOLI', 'admin', 70),
('aravally', 'jani', 71),
('nexegen', 'admin', 75),
('INDIA', 'bharat', 76),
('RAIN VALLEY', 'abhinav', 77);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `content` varchar(100) NOT NULL,
  `id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`content`, `id`) VALUES
('FREE SMS !!..', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages_inbox`
--

CREATE TABLE `messages_inbox` (
  `message` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `messages_inbox`
--

INSERT INTO `messages_inbox` (`message`, `category`, `category_id`, `id`) VALUES
('luv u 2oooooooo', 'love', 1, 7),
('good night dear friend', 'goodnight', 4, 8),
('LOve never fails!!!!!', 'love', 1, 10),
('True love has definite meaning!!!', 'love', 1, 11),
('LOVE is to enjoy!!!', 'love', 1, 12),
('FRIENDSHIP - gates of memmory never closes.....', 'friendship', 2, 15),
('kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', '   smily', 3, 16),
('good night BOss!', 'goodnight', 4, 17),
('Good morning calicut', 'goodmorning', 5, 18),
('Good luck catches the eye, but good look catches the HEART...', 'friendship', 2, 22),
(' gzsgggggggzsgggggggzsgggggggzsgggggggzsgggggggzsgggggggzsgggggggzsgggggggzsgggggggzsgggggggzsgggggggz sgggggggzsgggggggzsgggggggzsgggggggzsgggggggzsgggggggzsgggggggzsgggggggzsgggggggzsgggggggzsggggggv', '   smily', 3, 23),
('good night DOSTH...', 'goodnight', 4, 24),
('good morning kerala', 'goodmorning', 5, 25),
(' LOVE - " Rainbow between two hearts "', 'love', 1, 28),
('  FRIENDSHIP - never begin on morning and ends in evening.. its a package of feeling to be shared between two hearts.....', 'friendship', 2, 29),
('  SMILE please Mr & Mrs Jinto jose', '   smily', 3, 30),
('  GOOD NIGHT Calicut', 'goodnight', 4, 31),
(' GOOD MORNING BOSS!', 'goodmorning', 5, 32),
('Friendship doesnt get closer by meetings...', 'friendship', 2, 35),
('oooooo', '   smily', 3, 37),
('Love means affection towards an HEART .....', 'love', 1, 39),
('You are my unto thee..', 'love', 1, 40),
('True love is the love of inner soul...', 'love', 1, 41),
(' Its too difficlt to live without U...', 'love', 1, 42),
('google', ' friendship', 2, 46),
('poda youtheeeeee', '   smily', 3, 53),
('our', ' goodmorning', 5, 57),
('MLM software India.. IOSS Pvt Ltd , Calicut, Kerala, INDIA', 'ioss', 14, 61),
('Q-read techno based at calicut ', 'Qread techno', 13, 62),
('SEO services kerala, India', 'ioss', 14, 63),
('Multi Level Marketing Softwares - IOSS', 'ioss', 14, 64),
('For MLM softwares Please contact :: 9846345765 ::', 'ioss', 14, 65),
('MLM softwares - visit the site : www.mlmsoftware-india.com', 'ioss', 14, 66),
('Founded in the year 2009, Our primary activity is to provide web applications and support to our customers.', 'Qread techno', 13, 67),
('We possess latest in technology and graphics softwares with the proven skills of accomplished commercial Professionals', 'Qread techno', 13, 68),
('Qread techno is committed to delivering high quality services to meet your web design needs.', 'Qread techno', 13, 69),
('Depending on the customers requirements, we develop solutions and products based on PHP technology.', 'Qread techno', 13, 70),
(' Affordable, professional web design and that not only makes a difference in our client`s bottom lines but also opens up new opportunities for improving business operations and customer service.', 'Qread techno', 13, 71),
(' Congratulations for your victory !!!!', '  Congratulation', 15, 72);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `username`, `password`, `date_time`, `id`) VALUES
('Janeesh K', 'janeesh2009@gmail.com', 'jani', 'k', '2009-12-08 00:35:30', 2),
('Shafeer', 'shafeerp@rediffmail.com', 'shafeer', 's', '2009-12-08 00:43:23', 3),
('Abhil V', 'abhilv@gmail.com', 'abhil', 'a', '2009-12-08 01:09:11', 18),
('rakesh', 'r@yahoo.com', 'raku', 'r', '2009-12-12 19:22:52', 19),
('bose', 'janeesh2009@gmail.com', 'bose', 'b', '2010-02-12 23:30:22', 20),
('jijo', 'jijose@gmail.com', 'jijo', 'jijo', '2010-02-21 12:05:41', 27),
('ameen', 'ameen123@gmail.com', 'ameen', 'a', '2010-02-21 12:10:06', 28),
('Manjulal', 'm@gmail.com', 'manjulal', 'm', '2010-02-21 16:45:33', 29),
('Subin Joy', 'subin009@yahoo.co.in', 'subin', 'subinjoy', '2002-01-01 00:40:44', 31),
('anoop', 'anoop@rediffmail.com', 'anoop', 'anoopchandran', '2002-01-01 01:04:36', 32),
('jijo', 'jijO@rediffmail.com', 'jijojose', 'jijo', '2002-01-01 02:31:13', 33),
('ali', 'jjjj', 'janii', 'g', '2002-01-01 17:41:45', 34),
('ali', 'ali', 'alia', 'aa', '2002-01-01 17:42:33', 35),
('bhai', 'bhai', 'bhai', 'b', '2002-01-01 17:43:11', 36),
('jagadheesh', 'jagu@rediffmail.com', 'jagu', 'j', '2010-03-04 15:58:04', 39),
('Jackson', 'jackson@gmail.com', 'jaku', 'j', '2010-03-04 15:59:01', 40),
('jabir', 'jabi@yahoo.co.in', 'jabi', 'j', '2010-03-04 16:09:08', 41),
('Rahullal', 'rahul@rediffmail.com', 'rahul', 'r', '2010-03-04 16:12:36', 42),
('Rahullal', 'rahul@rediffmail.com', 'rahu', 'r', '2010-03-04 16:14:15', 43),
('manu', 'manu@gmail.com', 'manu', 'm', '2010-03-08 21:12:09', 44),
('Jamsheer', 'jamshi@rediffmail.com', 'jamshi', 'j', '2010-03-08 22:26:05', 45),
('abhinav mahindra', 'abhinav009@gmail.com', 'abhinav', 'a', '2010-03-13 23:17:25', 46),
('madhav krishna', 'madhav@rediffmail.com', 'madhav', 'm', '2010-03-13 23:31:03', 47),
('Bharat Rajan', 'bharat123@yahoo.co.in', 'bharat', 'b', '2010-03-13 23:34:40', 48);

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `sms` text NOT NULL,
  `sms_to` varchar(100) NOT NULL,
  `id` int(11) NOT NULL auto_increment,
  `message` longtext NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`sms`, `sms_to`, `id`, `message`) VALUES
('402,1', '9846164641', 66, 'xvxcvxcvxcvxcv'),
('402,2', '9846164641,9567105676', 67, 'dgvxfgbdfgd'),
('406', '9846164641,9567105676', 68, ''),
('406', '9846164641,9567105676', 69, ''),
('402,1', '9567105676', 70, 'jjjjjj'),
('402,2', '9846164641,9567105676', 71, 'Q-read techno'),
('413', '9846164641,9567105676', 72, 'On JUNE 2010 Calicut will wake up with an Happy news!!..'),
('402,3', '9846164641,9567105676,9645473301', 73, 'hello anas'),
('412', '9567105676', 74, 'hello dear how are you?5555555555555555555555555555555555 tt5y5 555ye5y5 5e5y5ey5ery5ey5eryery'),
('412', '9846164641', 76, 'hai'),
('412', '9846164641', 77, 'hai Boss!'),
('412', '9846164641', 78, 'hi hi hi'),
('412', '9846164641', 79, 'hi dear'),
('412', '9846164641', 80, 'ji'),
('412', '9846164641', 81, 'hy'),
('402,4', '9846164641,9567105676,9645473301,9388448349', 82, 'just for Testing'),
('402,1', '9846164641', 83, 'Testing by Team Q-read techno Calicut'),
('402,1', '9846164641', 85, 'on JUNE 2010 Calicut will wake up with an HAPPY News!!! - "a MIRACLE team of Professionals in the HEART of Calicut city...!!!! '),
('402,1', '9846164641', 86, 'on JUNE 2010 Calicut will wake up with an HAPPY News!!! - "a MIRACLE team of Professionals in the HEART of Calicut city...!!!! '),
('402,1', '9846164641', 88, 'Vacancy for the post of PHP Programmer in Q-read techno Calicut, Qualification:BTech or MCA, Experience: 1 year. Forward your RESUME to qreadtechno@gmail.com '),
('402,1', '9846164641,9846164641', 97, 'hi fine'),
('402,2', '9846164641,9037886766', 98, 'hai Team Q-read .....'),
('', '9567105676,9645473301,9388448349', 100, ''),
('', '9846164641', 101, ''),
('', '9846164641', 105, ''),
('', '9846164641,9037886766', 106, ''),
('', '9846164641,9037886766', 107, ''),
('', '9567105676,9645473301,9388448349', 108, ''),
('', '9846164641', 109, ''),
('', '9999999990', 111, ''),
('', '9999999990', 112, '');

-- --------------------------------------------------------

--
-- Table structure for table `sms_category`
--

CREATE TABLE `sms_category` (
  `category` varchar(100) NOT NULL,
  `id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `sms_category`
--

INSERT INTO `sms_category` (`category`, `id`) VALUES
('love', 1),
('friendship', 2),
('smily', 3),
('goodnight', 4),
('goodmorning', 5),
('Qread techno', 13),
('ioss', 14),
('  Congratulation', 15);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `subscriber_name` varchar(100) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`subscriber_name`, `mobile_no`, `group_name`, `username`, `id`) VALUES
('sivakumar', '9846722822', 'topmost', 'shafeer', 4),
('suhas', '8678568568', 'testabiz', 'abhil', 6),
('gafoor', '9567105676', 'nexegen', 'jani', 10),
('rakesh', '568568568', 'illustris', 'jani', 12),
('jijo jose', '987667890', 'Testabiz', 'jani', 14),
('shibil o', '9777777', 'Testabiz', 'jani', 15),
('sathu', '999', 'topmost', 'shafeer', 16),
('Gafoor', '9567105676', 'IOSS', 'jani', 18),
('Anas', '9645473301', 'IOSS', 'jani', 20),
('justin', '9388448349', 'IOSS', 'jani', 21),
('shijin', '9846164641', 'nexegen', 'jani', 32),
('faheem', '9846164641', 'illustris', 'jani', 33),
('fayiz', '9846164641', 'Testabiz', 'jani', 34),
('Vibhat', '98989898', 'Orange', 'shafeer', 35),
('Janeesh', '9846164641', 'Black Pearls', 'jani', 36),
('Jagadheesh', '90909090', 'black pearls', 'subin', 39),
('Rijesh', '9090900', 'black pearls', 'subin', 40),
('Sumesh', '987654321', 'black pearls', 'anoop', 41),
('Janeesh K', '9846164641', 'Q-read', 'jani', 44),
('Biju Thoamas', '9037886766', 'Q-read', 'jani', 45),
('Jamsheer', '9111111111', 'NIT', 'manu', 54),
('Adarsh', '9222222222', 'NIT', 'manu', 55),
('luttu', '9098989898', 'MEA', 'jamshi', 56),
('vibhat vs', '9999999990', 'aravally', 'jani', 57),
('janeesh k', '999999999999', 'illustris', 'jani', 69),
('Jithesh', '9090909099', 'RANGOLI', 'admin', 72),
('manjulal', '1111111111', 'nexegen', 'admin', 73),
('Neel Prasad', '0987654321', 'INDIA', 'bharat', 74),
('praveen', '7676767667', 'RAIN VALLEY', 'abhinav', 75);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `status`, `id`) VALUES
('jani', 'k', 1, 1),
('shafeer', 's', 0, 2),
('abhil', 'a', 0, 17),
('raku', 'r', 0, 18),
('bose', 'b', 0, 19),
('admin', 'websms', 2, 20),
('jijo', 'jijo', 0, 27),
('ameen', 'a', 0, 28),
('manjulal', 'm', 0, 29),
('subin', 'subinjoy', 0, 31),
('anoop', 'anoopchandran', 0, 32),
('jijojose', 'jijo', 0, 33),
('janii', 'g', 0, 34),
('alia', 'aa', 0, 35),
('bhai', 'b', 0, 36),
('jagu', 'j', 0, 39),
('jaku', 'j', 0, 40),
('jabi', 'j', 0, 41),
('rahul', 'r', 0, 42),
('rahu', 'r', 0, 43),
('manu', 'm', 1, 44),
('jamshi', 'j', 0, 45),
('abhinav', 'a', 1, 46),
('madhav', 'm', 0, 47),
('bharat', 'b', 1, 48);
