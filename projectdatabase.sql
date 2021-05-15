-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 05:03 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(10) NOT NULL,
  `content` text NOT NULL,
  `question_id` int(10) NOT NULL,
  `correct` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `content`, `question_id`, `correct`) VALUES
(1, 'You receive an email from an acquaintance who you are rarely in contact with that contains only a web link', 1, '0'),
(2, 'You got an email that appears to be from your bank asking you to enter your account number and password, but the web address looks unfamiliar.', 1, '0'),
(3, 'You received a text message claiming that you won a contest and asking you to click on the link', 1, '0'),
(4, 'Some place easily seen from computer', 2, '0'),
(5, 'You should never write your password', 2, '1'),
(6, 'Someplace that is out of sight, like beneath your keyboard or in a nearby drawer.', 2, '0'),
(7, 'End users', 3, '1'),
(8, 'Instant Messaging, Peer To Peer Application', 3, '0'),
(9, 'Malware-viruses, worms, spywares', 3, '0'),
(10, 'Internet download', 4, '0'),
(11, 'Infected disk', 4, '0'),
(12, 'Email', 4, '1'),
(13, 'Click on the link and provide your debit/credit information as the more protection is guaranteed.', 5, '0'),
(14, 'Close the window. If you want spyware protection software or are unsure if you have up-to-date anti-spyware software, it is best to speak with IT Specialist', 5, '1'),
(15, 'Click on the link in the ad to learn more about the company it\'s products before the choice.', 5, '0'),
(16, 'All of the above', 1, '1'),
(17, 'Where you really need it for memory, but this information is to be kept only in secure location', 2, '0'),
(18, 'Spam,Phishing Attacks', 3, '0'),
(19, 'Instant Messaging Software', 4, '0');

-- --------------------------------------------------------

--
-- Table structure for table `bank_database`
--

CREATE TABLE `bank_database` (
  `account_no` bigint(12) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `IFSC` bigint(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_database`
--

INSERT INTO `bank_database` (`account_no`, `account_type`, `customer_name`, `IFSC`, `status`, `pwd`) VALUES
(3450, 'Savings ', 'mno', 12345, 0, 'raTSkZIw'),
(3451, 'Savings ', 'ijk', 12345, 0, ''),
(3452, 'Savings', 'Purnima Ahirao', 12345, 0, ''),
(3456, 'Savings ', 'xyz', 12345, 0, ''),
(23450, 'Savings', 'Rishabh Ketan Rupani', 5678, 0, 'ZGmSTK3a'),
(34567, 'Savings ', 'pqrs', 12345, 0, ''),
(34568, 'Savings ', 'abcd', 12345, 0, ''),
(123456, 'Savings', 'Suyash Jadhav', 12345, 0, '6y*D1wPv'),
(567897, 'Savings', 'Srijan Rajkumar Das', 1234, 0, '%kzIS@3e');

-- --------------------------------------------------------

--
-- Table structure for table `basic_details`
--

CREATE TABLE `basic_details` (
  `id` int(2) NOT NULL,
  `account_no` bigint(12) NOT NULL,
  `HighestQualification` varchar(30) NOT NULL,
  `leaf_score` int(1) NOT NULL,
  `percentage` decimal(10,0) NOT NULL,
  `status` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic_details`
--

INSERT INTO `basic_details` (`id`, `account_no`, `HighestQualification`, `leaf_score`, `percentage`, `status`) VALUES
(1, 123456, 'SSC', 2, '65', 'pass'),
(3, 3450, 'EXTC/ETRX/MECH/Civil', 5, '0', ''),
(4, 34568, 'IT/Comps', 9, '0', ''),
(5, 3456, 'IT/Comps', 9, '0', ''),
(6, 3451, 'Comps/IT', 6, '0', ''),
(7, 34567, 'EXTC/ETRX/MECH/Civil', 5, '0', ''),
(8, 567897, 'Medical', 4, '65', 'pass'),
(9, 23450, 'Comps/IT', 6, '78', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `degree_id` int(1) NOT NULL,
  `degree_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`degree_id`, `degree_name`) VALUES
(1, 'PG & Above'),
(2, 'UG'),
(3, 'Below Grad');

-- --------------------------------------------------------

--
-- Table structure for table `leaf`
--

CREATE TABLE `leaf` (
  `leaf_id` int(1) NOT NULL,
  `leaf_name` varchar(35) NOT NULL,
  `leaf_type_id` int(2) NOT NULL,
  `leaf_degree_id` int(1) NOT NULL,
  `value` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaf`
--

INSERT INTO `leaf` (`leaf_id`, `leaf_name`, `leaf_type_id`, `leaf_degree_id`, `value`) VALUES
(1, 'IT/Comps', 1, 1, 9),
(2, 'EXTC/ETRX/MECH/Civil', 1, 1, 8),
(3, 'Medical', 2, 1, 7),
(4, 'Business Management', 2, 1, 7),
(5, 'Law', 2, 1, 7),
(6, 'Arts', 2, 1, 7),
(7, 'Commerce', 2, 1, 7),
(8, 'Comps/IT', 3, 2, 6),
(9, 'EXTC/ETRX/MECH/Civil', 3, 2, 5),
(10, 'Commerce', 4, 2, 4),
(11, 'Arts', 4, 2, 4),
(12, 'Humanities', 4, 2, 4),
(13, 'Medical', 4, 2, 4),
(14, 'HSC', 5, 3, 3),
(15, 'Diploma', 5, 3, 3),
(16, 'SSC', 6, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `objective_result`
--

CREATE TABLE `objective_result` (
  `id` int(2) NOT NULL,
  `acc_no` bigint(12) NOT NULL,
  `obj_res` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objective_result`
--

INSERT INTO `objective_result` (`id`, `acc_no`, `obj_res`) VALUES
(27, 3450, '100'),
(28, 34568, '20'),
(29, 3456, '40'),
(30, 3451, '80'),
(31, 34567, '80'),
(33, 123456, '100'),
(34, 567897, '80'),
(35, 23450, '80');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(10) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `content`) VALUES
(1, 'Which of the following is a common example of \'phishing\' attack?'),
(2, 'Where should you write down your password ?'),
(3, 'What is the biggest threat to computer information security ?'),
(4, 'What is most common delivery method for computer malwares ?'),
(5, 'A web browser pop-up appears on your personal computer offering an \'anti-spyware\' product. What is the best course of action ? ');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `acc_no` bigint(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verification_key` varchar(32) NOT NULL,
  `is_email_verified` text NOT NULL,
  `mobile` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `acc_no`, `email`, `password`, `verification_key`, `is_email_verified`, `mobile`) VALUES
(3, 3451, 'ijk@gmail.com', '$2y$10$qO2gn8MMm9A7Uyxf1sNG6.kQaVIaQD0yCu6Xn0sx3LA0MCPy2d3Yq', 'f4ca0509e2b836e2d0558d71b0c4c1d8', 'yes', NULL),
(4, 3456, 'xyz@gmail.com', '$2y$10$bMTbcjWnptRMxH.sodv0uef.qQwVCT7RbMVj8y8Ui3.4xyJFQzzTu', '05e9642d79b78e4639bfa394e3743542', 'yes', NULL),
(5, 34567, 'pqrs@gmail.com', '$2y$10$d5VkqkwjWPHqOHSbpzt1v.BmItqYN1yKUCm7xafYYLRQOjmokqmF2', 'fc1e5dfa6d5c75e935501d6511fdac37', 'yes', NULL),
(6, 34568, 'abcd@gmail.com', '$2y$10$Vqs2oXK6YsoSmWLwWg18yOUmdwA9u.wKTogCdqi5Y8Fsp3XhyWj0y', 'aa6de65723165e365c1f83470ed31fbc', 'yes', NULL),
(17, 3450, 'mno@gmail.com', '$2y$10$C.HoeSAA.zQ76d0Uti3yUOWVcyaFiMCDsazEcqh66wg.Y8JbOz6EO', '39278d155ce026c0f0319cfa3cfd36a2', 'yes', NULL),
(19, 123456, 'sjadhav1998@gmail.com', '$2y$10$oJE/dzwrXl94SdM/tJTmi.Da5XcgqtNIvKxIr50P21.n6xoK1CB2.', '47b32510eba2112a4249a46dc7c857d0', 'yes', 9833792928),
(20, 567897, 'srijandas98@gmail.com', '$2y$10$k8CaiP1LVKu5up0rYqBMn..9SzYAkc6oERWBw3ZUW7YYAa8jEIa56', '4299125b658990853b3151594b78873b', 'yes', 9833792928),
(22, 3452, 'purnima.ahirao@gmail.com', '$2y$10$ka6jABJGfKG9AAfwQuZzt.XvX58soE9jtQSzbHCc6jQLUfstWiyLy', '097254e325e50cd2de1f0615e975277e', 'yes', 9920392293),
(24, 23450, 'rishabh.rupani@gmail.com', '$2y$10$B3xInb5AV.Jh2JexPFW11uqU0UWyVQZowa6YmqR/s/p9FlsUui5Ru', 'c88b213d00a454c5467174ea4102c0ac', 'yes', 9833792928);

-- --------------------------------------------------------

--
-- Table structure for table `subjectiveans`
--

CREATE TABLE `subjectiveans` (
  `ExpectedAns` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectiveans`
--

INSERT INTO `subjectiveans` (`ExpectedAns`) VALUES
('Card Validation Value'),
('https://www.facebook.com/login'),
('No');

-- --------------------------------------------------------

--
-- Table structure for table `subjective_result`
--

CREATE TABLE `subjective_result` (
  `id` int(2) NOT NULL,
  `acc_no` bigint(12) NOT NULL,
  `sub_res` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjective_result`
--

INSERT INTO `subjective_result` (`id`, `acc_no`, `sub_res`) VALUES
(8, 3450, '64'),
(9, 34568, '67'),
(10, 3456, '62'),
(11, 3451, '93'),
(12, 34567, '93'),
(13, 123456, '76'),
(14, 567897, '76'),
(15, 23450, '93');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(2) NOT NULL,
  `type_name` varchar(15) NOT NULL,
  `type_degree_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`, `type_degree_id`) VALUES
(1, 'Tech', 1),
(2, 'Non-Tech', 1),
(3, 'Tech', 2),
(4, 'Non-Tech', 2),
(5, 'Higher Secondar', 3),
(6, 'SSC', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_question_id` (`question_id`);

--
-- Indexes for table `bank_database`
--
ALTER TABLE `bank_database`
  ADD PRIMARY KEY (`account_no`);

--
-- Indexes for table `basic_details`
--
ALTER TABLE `basic_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_no` (`account_no`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`degree_id`);

--
-- Indexes for table `leaf`
--
ALTER TABLE `leaf`
  ADD PRIMARY KEY (`leaf_id`),
  ADD KEY `fk_leaf_type_id` (`leaf_type_id`),
  ADD KEY `fk_leaf_degree_id` (`leaf_degree_id`);

--
-- Indexes for table `objective_result`
--
ALTER TABLE `objective_result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acc_no` (`acc_no`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_no` (`acc_no`);

--
-- Indexes for table `subjective_result`
--
ALTER TABLE `subjective_result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acc_no` (`acc_no`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `fk_type_degree_id` (`type_degree_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `basic_details`
--
ALTER TABLE `basic_details`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `degree_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leaf`
--
ALTER TABLE `leaf`
  MODIFY `leaf_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `objective_result`
--
ALTER TABLE `objective_result`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `subjective_result`
--
ALTER TABLE `subjective_result`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `fk_question_id` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

--
-- Constraints for table `basic_details`
--
ALTER TABLE `basic_details`
  ADD CONSTRAINT `fk_account_no` FOREIGN KEY (`account_no`) REFERENCES `bank_database` (`account_no`);

--
-- Constraints for table `leaf`
--
ALTER TABLE `leaf`
  ADD CONSTRAINT `fk_leaf_degree_id` FOREIGN KEY (`leaf_degree_id`) REFERENCES `degree` (`degree_id`),
  ADD CONSTRAINT `fk_leaf_type_id` FOREIGN KEY (`leaf_type_id`) REFERENCES `type` (`type_id`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `fk_acc_no` FOREIGN KEY (`acc_no`) REFERENCES `bank_database` (`account_no`);

--
-- Constraints for table `subjective_result`
--
ALTER TABLE `subjective_result`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`acc_no`) REFERENCES `bank_database` (`account_no`);

--
-- Constraints for table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `fk_type_degree_id` FOREIGN KEY (`type_degree_id`) REFERENCES `degree` (`degree_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
