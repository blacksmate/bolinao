-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 01:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bolinao`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `gradeid` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `gradeid`, `grade`) VALUES
(1, 'g1', 'Grade 1'),
(2, 'g2', 'Grade 2'),
(3, 'g3', 'Grade 3');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `qcid` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL,
  `coption` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `question_text` varchar(255) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `qcid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questionscategory`
--

CREATE TABLE `questionscategory` (
  `id` int(11) NOT NULL,
  `subjectid` varchar(255) NOT NULL,
  `subjectcategory` varchar(255) NOT NULL,
  `quizdesc` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `gradeid` varchar(255) NOT NULL,
  `instructions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionscategory`
--

INSERT INTO `questionscategory` (`id`, `subjectid`, `subjectcategory`, `quizdesc`, `activity`, `gradeid`, `instructions`) VALUES
(72, '31', 'Mother Tongue', 'First Quarter Module', 'Assignment', 'g1', 'Sundan ang mga  Sundan ang mga kailangan Sundan ang mga kailangan Sundan ang mga kailangan Sundan ang mga kailangan kailangan'),
(73, '31', 'Mother Tongue', 'First Quarter Module', 'Quizzes', 'g1', ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not ');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjectid` int(11) NOT NULL,
  `subjdesc` varchar(255) NOT NULL,
  `gradeid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectid`, `subjdesc`, `gradeid`) VALUES
(31, 'Mother Tongue', 'g1'),
(32, 'Araling Panlipunan', 'g2'),
(33, 'Mother Tongue', 'g2');

-- --------------------------------------------------------

--
-- Table structure for table `submitted_students`
--

CREATE TABLE `submitted_students` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `stud_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `score` int(11) NOT NULL,
  `total_points` int(11) NOT NULL,
  `subjectcategory` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `qcid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tagalogilocano`
--

CREATE TABLE `tagalogilocano` (
  `id_tagalog` int(11) NOT NULL,
  `word_tagalog` varchar(255) NOT NULL,
  `word_ilocano` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tagalogilocano`
--

INSERT INTO `tagalogilocano` (`id_tagalog`, `word_tagalog`, `word_ilocano`, `image`) VALUES
(81, 'kumain', 'mangan', 'anime-school-girl-raining-umbrella-4k-wallpaper-uhdpaper.com-791@0@h.jpg'),
(82, 'matulog', 'maturog', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `username`, `password`) VALUES
(3, 'teacher', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `gradeid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `uid`, `fullname`, `email`, `password`, `address`, `mobileno`, `gradeid`) VALUES
(117, 'stduid000001', 'JASON ORILLA RAMIREZ', 'blacksmate@gmail.com', 'qwerty', 'BARADI', '09563528453', 'g1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionscategory`
--
ALTER TABLE `questionscategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `submitted_students`
--
ALTER TABLE `submitted_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagalogilocano`
--
ALTER TABLE `tagalogilocano`
  ADD PRIMARY KEY (`id_tagalog`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=495;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `questionscategory`
--
ALTER TABLE `questionscategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `submitted_students`
--
ALTER TABLE `submitted_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `tagalogilocano`
--
ALTER TABLE `tagalogilocano`
  MODIFY `id_tagalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
