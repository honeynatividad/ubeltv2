-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2017 at 05:25 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ubelt`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `first_name` varchar(1024) NOT NULL,
  `middle_name` varchar(1024) NOT NULL,
  `last_name` varchar(1024) NOT NULL,
  `contact_number` varchar(1024) NOT NULL,
  `birthday` date NOT NULL,
  `email_address` varchar(1024) NOT NULL,
  `facebook_name` varchar(1024) NOT NULL,
  `complete_home_address` text NOT NULL,
  `campus` varchar(1024) NOT NULL,
  `area` varchar(1024) NOT NULL,
  `year_level` varchar(1024) NOT NULL,
  `graduating` varchar(1024) NOT NULL,
  `youth_services_you_attend` varchar(1024) NOT NULL,
  `ministry_involvement` varchar(1024) NOT NULL,
  `name_of_your_leadership_group` varchar(1024) NOT NULL,
  `one_2_one` varchar(1024) NOT NULL,
  `victory_weekend` varchar(1024) NOT NULL,
  `water_baptism` varchar(1024) NOT NULL,
  `making_disciples` varchar(1024) NOT NULL,
  `church_community` varchar(1024) NOT NULL,
  `foundation_class` varchar(1024) NOT NULL,
  `empowering_leaders` varchar(1024) NOT NULL,
  `leadership_113` varchar(1024) NOT NULL,
  `how_many_victory_groups_you_are_leading` varchar(1024) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `first_name`, `middle_name`, `last_name`, `contact_number`, `birthday`, `email_address`, `facebook_name`, `complete_home_address`, `campus`, `area`, `year_level`, `graduating`, `youth_services_you_attend`, `ministry_involvement`, `name_of_your_leadership_group`, `one_2_one`, `victory_weekend`, `water_baptism`, `making_disciples`, `church_community`, `foundation_class`, `empowering_leaders`, `leadership_113`, `how_many_victory_groups_you_are_leading`, `created`) VALUES
(1, 'Hazel Marie', 'C', 'Natividad', '9173384133', '2017-02-14', 'kirayuki@outlook.com', 'Hazel Marie C Natividad', 'Phase 1 Block 33 Lot 8 Enlisted Personnel Vill.\r\nBgay Pinagsama', '2', 'Intramuros', 'Junior HS (Grade 7-10)', 'Yes', 'Thursday 5pm', '', 'sd', '', '', '', '', '', '', '', '', 'sd', '2017-02-14 14:17:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
