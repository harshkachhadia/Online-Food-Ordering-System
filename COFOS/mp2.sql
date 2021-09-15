-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 01:13 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `fid` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`fid`, `title`, `email`) VALUES
('friedrice', 'friedrice', 'yashjain4411@gmail.com'),
('aerated', 'aerated', 'ridhamdudhat@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `fid` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `price` float NOT NULL,
  `discount` float DEFAULT NULL,
  `available` varchar(3) NOT NULL,
  `category` varchar(60) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`fid`, `title`, `price`, `discount`, `available`, `category`, `description`) VALUES
('aerated', 'aerated', 20, NULL, '', 'beverages', ''),
('aloochaat', 'aloochaat', 24, NULL, 'yes', 'bhajipav_chats', ''),
('aloomuter', 'aloomuter', 25, NULL, '', 'sandwich', ''),
('aloomutter', 'aloomutter', 45, NULL, '', 'vegpunjabi', ''),
('alooparatha', 'alooparatha', 45, NULL, 'yes', 'fullthali', ''),
('applejuice', 'applejuice', 35, NULL, '', 'juice', ''),
('bananashake', 'bananashake', 35, NULL, 'yes', 'milkshake', ''),
('batatavada', 'batatavada', 24, NULL, 'yes', 'snacks', ''),
('bhel', 'bhel', 30, NULL, 'yes', 'bhajipav_chats', ''),
('breadbutter', 'breadbutter', 20, NULL, '', 'sandwich', ''),
('breadbutterjam', 'breadbutterjam', 20, NULL, '', 'sandwich', ''),
('buttermilk', 'buttermilk', 15, NULL, '', 'curd_buttermilk', ''),
('butterscotchshake', 'butterscotchshake', 40, NULL, 'yes', 'milkshake', ''),
('chanamasala', 'chanamasala', 45, NULL, '', 'vegpunjabi', ''),
('cheesegrill', 'cheesegrill', 35, NULL, '', 'sandwich', ''),
('cheesemasaladosa', 'cheese masala dosa', 55, NULL, 'yes', 'southindian', ''),
('cheeseplaindosa', 'cheese plain dosa', 35, NULL, 'yes', 'southindian', ''),
('cheesesandwich', 'cheesesandwich', 30, NULL, '', 'sandwich', ''),
('chikooshake', 'chikooshake', 35, NULL, 'yes', 'milkshake', ''),
('chinesebhel', 'chinesebhel', 42, NULL, 'yes', 'chinese', ''),
('chocolateshake', 'chocolateshake', 45, NULL, 'yes', 'milkshake', ''),
('coffee', 'coffee', 20, NULL, '', 'beverages', ''),
('coldcoco', 'coldcoco', 45, NULL, 'yes', 'milkshake', ''),
('coldcoffee', 'coldcoffee', 35, NULL, 'yes', 'milkshake', ''),
('curd', 'curd', 10, NULL, '', 'curd_buttermilk', ''),
('cutlet', 'cutlet', 26, NULL, 'yes', 'snacks', ''),
('dabeli', 'dabeli', 18, NULL, 'yes', 'bhajipav_chats', ''),
('friedrice', 'friedrice', 45, NULL, 'yes', 'chinese', ''),
('gujaratithali', 'gujaratithali', 50, NULL, 'yes', 'fullthali', ''),
('icetealemon', 'icetealemon', 40, NULL, '', 'juice', ''),
('idlisambar', 'idli sambar', 35, NULL, 'yes', 'southindian', ''),
('jeeraaloo', 'jeeraaloo', 50, NULL, '', 'vegpunjabi', ''),
('kachori', 'kachori', 20, NULL, 'yes', 'snacks', ''),
('kesarelaichi', 'kesarelaichi', 45, NULL, 'yes', 'milkshake', ''),
('khaman', 'khaman', 18, NULL, 'yes', 'snacks', ''),
('manchuriandry', 'manchuriandry', 32, NULL, 'yes', 'chinese', ''),
('manchurianfriedrice', 'manchurianfriedrice', 46, NULL, 'yes', 'chinese', ''),
('manchuriangravy', 'manchuriangravy', 42, NULL, 'yes', 'chinese', ''),
('manchuriannoodles', 'manchuriannoodles', 45, NULL, 'yes', 'chinese', ''),
('mangoshake', 'mangoshake', 45, NULL, 'yes', 'milkshake', ''),
('masaladosa', 'masala dosa', 32, NULL, 'yes', 'southindian', ''),
('masalauttapam', 'masala uttapam', 32, NULL, 'yes', 'southindian', ''),
('mixedvegetable', 'mixedvegetable', 40, NULL, '', 'vegpunjabi', ''),
('mosambijuice', 'mosambijuice', 40, NULL, '', 'juice', ''),
('mysoreplaindosa', 'mysore plain dosa', 45, NULL, 'yes', 'southindian', ''),
('noodles', 'noodles', 34, NULL, 'yes', 'chinese', ''),
('orangejuice', 'orangejuice', 40, NULL, '', 'juice', ''),
('papdichaat', 'papdichaat', 30, NULL, 'yes', 'bhajipav_chats', ''),
('paratha', 'paratha', 20, NULL, '', 'extratandooriitems', ''),
('pavbhaji', 'pavbhaji', 36, NULL, 'yes', 'bhajipav_chats', ''),
('pineapplejuice', 'pineapplejuice', 40, NULL, '', 'juice', ''),
('plaindosa', 'plain dosa', 35, NULL, 'yes', 'southindian', ''),
('poha', 'poha', 18, NULL, 'yes', 'snacks', ''),
('punjabithali', 'punjabithali', 60, NULL, 'yes', 'fullthali', ''),
('puri', 'puri', 20, NULL, '', 'extratandooriitems', ''),
('samosa', 'samosa', 18, NULL, 'yes', 'snacks', ''),
('samosachaat', 'samosachaat', 30, NULL, 'yes', 'bhajipav_chats', ''),
('sandwichdhokla', 'sandwichdhokla', 18, NULL, 'yes', 'snacks', ''),
('sevkhamni', 'sevkhamni', 20, NULL, 'yes', 'snacks', ''),
('sevtomato', 'sevtomato', 45, NULL, '', 'vegpunjabi', ''),
('tandooriroti', 'tandooriroti', 15, NULL, '', 'extratandooriitems', ''),
('tandoorirotibutter', 'tandoorirotibutter', 20, NULL, '', 'extratandooriitems', ''),
('tawaroti', 'tawaroti', 10, NULL, '', 'extratandooriitems', ''),
('tea', 'tea', 10, NULL, '', 'beverages', ''),
('tetrapack', 'tetrapack', 40, NULL, '', 'beverages', ''),
('tomatouttapam', 'tomato uttapam', 35, NULL, 'yes', 'southindian', ''),
('vadapav', 'vadapav', 18, NULL, 'yes', 'bhajipav_chats', ''),
('vegetablejaipuri', 'vegetablejaipuri', 45, NULL, '', 'vegpunjabi', ''),
('veggrill', 'veggrill', 30, NULL, '', 'sandwich', ''),
('watermelonjuice', 'watermelonjuice', 0, NULL, '', 'juice', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(40) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `contactno`, `email`, `password`) VALUES
('KALPESH B SHAH', '9898660179', 'yashjain4411@gmail.com', '123456'),
('KALPESH B SHAH', '9898989809', 'yashjain44131@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `contactno` (`contactno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
