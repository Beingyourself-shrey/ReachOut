-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 06:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reachout`
--

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `approve_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `contribution_discription` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `ngo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approve`
--

INSERT INTO `approve` (`approve_id`, `user_id`, `cat_id`, `contribution_discription`, `date`, `ngo_id`) VALUES
(5, 1, 1, 'Available food 10kg and containers not availble food can be store for 20 hrs from now', '2018-03-23', 1),
(6, 3, 2, 'I have so many books of engineering  ', '2018-03-23', 1),
(7, 3, 1, '80kgs of food is there and it can be preserved for atmost two days from now', '2018-03-21', 1),
(8, 6, 1, 'I have around 10 kg of food', '2018-03-24', 9);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Indore'),
(2, 'Chennai'),
(3, 'Ahmedabad'),
(4, 'Baroda'),
(5, 'Delhi'),
(6, 'Faridabad'),
(7, 'Gudgaon');

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE `contribution` (
  `contribution_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `contribution_description` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contribution`
--

INSERT INTO `contribution` (`contribution_id`, `user_id`, `cat_id`, `contribution_description`, `date`) VALUES
(2, 2, 2, 'second hand class 12th books of chemistry, maths and physics in good condition I will be happy to contribute for the same.', '2018-03-23'),
(6, 6, 3, 'Want to donate some clothes. For age group 15-20 of size M.', '2018-03-24'),
(7, 6, 4, 'would like to donate my childhood toys.For age group of 5-9.', '2018-03-24'),
(8, 6, 1, '10kgs food\r\n', '2018-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `contribution_categories`
--

CREATE TABLE `contribution_categories` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contribution_categories`
--

INSERT INTO `contribution_categories` (`cat_id`, `name`) VALUES
(1, 'food'),
(2, 'books'),
(3, 'clothes'),
(4, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `issue_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `issue_description` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`issue_id`, `user_id`, `issue_description`, `date`) VALUES
(1, 2, 'dogs in town', '2018-03-23'),
(2, 6, 'The dogs near my home bark so much and  one of them is suffering from mental problem.', '2018-03-24'),
(3, 6, 'many labor kids are roam around here and there and they need proper teaching guidance.', '2018-03-24'),
(4, 6, 'many labor kids are roam around here and there and they need proper teaching guidance.', '2018-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `name`) VALUES
(1, 'contribution'),
(2, 'isuue'),
(3, 'join');

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mail` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`id`, `name`, `location`, `username`, `password`, `mail`) VALUES
(1, 'wto', 'chennai', 'wto', 'wto', 'wto@wto.com'),
(2, 'wso', 'indore', 'wso', 'wso', 'wso@wso.com'),
(5, 'wts', 'chennai', 'wts', 'wts', 'wts@wts.com'),
(6, 'nso', 'baroda', 'nso', 'shrey', 'nso@nso.com'),
(9, 'wrs', 'ahmedabad', 'wrs', 'wrs', 'wrs@wrs.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(250) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `credit` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `name`, `email`, `location`, `credit`, `phone`) VALUES
(1, 'shrey', 'shrey', 'shrey', 'shrey@gmail.com', 'chennai', 0, '123456789'),
(2, 'khushal', 'khushal', 'khushal', 'khushal@gmail.com', 'indore', 0, '123456789'),
(3, 'karan', 'karan', 'karan', 'karan@gmail.com', 'chennai', 0, '123456789'),
(4, 'gaurav', 'gaurav', 'gaurav', 'gaurav@gmail.com', 'chennai', 0, '1234567890'),
(5, 'prakhar', 'prakhar', 'prakhar', 'prakhar@gmail.com', 'indore', 0, '123456789'),
(6, 'crazymeshrey@', 'shrey', 'shrey', 'shrey4625@gmail.com', 'ahmedabad', 0, '8871009875');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`approve_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contribution`
--
ALTER TABLE `contribution`
  ADD PRIMARY KEY (`contribution_id`);

--
-- Indexes for table `contribution_categories`
--
ALTER TABLE `contribution_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approve`
--
ALTER TABLE `approve`
  MODIFY `approve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contribution`
--
ALTER TABLE `contribution`
  MODIFY `contribution_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contribution_categories`
--
ALTER TABLE `contribution_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
