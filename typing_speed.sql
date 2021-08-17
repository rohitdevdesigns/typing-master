-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 10:46 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `typing_speed`
--

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `id` int(15) NOT NULL,
  `user_id` int(15) NOT NULL,
  `wpm` int(15) NOT NULL,
  `correct` int(15) NOT NULL,
  `incorrect` int(15) NOT NULL,
  `keystrokes` int(15) NOT NULL,
  `accuracy` int(15) NOT NULL,
  `timestamp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranking`
--

INSERT INTO `ranking` (`id`, `user_id`, `wpm`, `correct`, `incorrect`, `keystrokes`, `accuracy`, `timestamp`) VALUES
(1, 1, 21, 23, 4, 172, 85, ''),
(2, 1, 0, 1, 27, 168, 3, ''),
(3, 2, 29, 29, 0, 190, 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `strings`
--

CREATE TABLE `strings` (
  `id` int(11) NOT NULL,
  `string` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strings`
--

INSERT INTO `strings` (`id`, `string`) VALUES
(1, 'page was first attracted to computers when he was six years old as he was able to play with the stuff lying around first generation personal computers that had been left by his parents he became the kid in his elementary school to turn in an assignment from a word processor his older brother also taught him to take things apart and before long he was taking everything in his house apart to see how it worked he said that from a very early age i also realized i wanted to invent things so i became '),
(2, 'fashion mostly refers to the style of clothing worn at a particular time clothing at its most basic is to keep us warm but it serves many other functions it needs to fit the customs and norms of society clothing needs to be accepted as more or less normal it needs for instance to preserve decency'),
(3, 'the bermuda triangle also known as the devils triangle is a loosely defined region in the western part of the north atlantic ocean where a number of aircraft and ships are said to have disappeared and the name is not recognized by the US Board on geographic names  he would review period newspapers of the dates of reported incidents and find reports on possibly relevant events like unusual weather that were never mentioned in the disappearance stories'),
(4, 'social media has come a long way in India and its penetration is growing rapidly  while there were 86 million social network users in india in 2013 this number is expected to touch 197 million active shop at many indian stores at one place and we aim to house designer brands from india in the forthcoming months the products that will be available at Ownow are relatively exclusive and plenty of each is imported for the entire country'),
(5, 'in this section you describe where you grew up what impact your family and community had on you your first and best friends your education and early work experiences this is not a resume type of listing  but focuses on the aha moments of insights ouch pain points to solve and inspirational messages from mentors and influencers many of these have a conscious or sub conscious impact on your attitudes values and behaviours and this section of the canvas helps you understand how you became who you a'),
(6, 'this is also about indian business and thinking processes he adds pointing to the frameworks and case studies of jugaad and frugal innovation business writers in india will have the world reading them he believes that the only way to solve this is by helping women get online and sell home cooked food to consumers according to vinodh most of the women are unable to go out for employment because of various reasons this makes them financially dependent on their parents children and husband'),
(7, 'the venture plans to take off with its consumer marketplace in phases with the app to be launched this october the company is also planning to go global with its partnerships and has commenced work with but there has been a major shift in their consumption patterns as well as attitudes the silver surfers dont see the need to hoard savings anymore as the next generation does not want or need to depend on their wealth this leaves them free to spend all that money on their own comforts'),
(8, 'ger even while at sapient she made sure that she had a know how of different things so she got down gone are the days when three generations of a family lived under the same roof with the elderly passing on the reins of the household as well as their special needs to their children with migration nuclear families are becoming the norm and the elderly are mostly left to fend for themselves');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(15) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`) VALUES
(1, 'shivam', '12345'),
(2, 'rohan', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strings`
--
ALTER TABLE `strings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `strings`
--
ALTER TABLE `strings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
