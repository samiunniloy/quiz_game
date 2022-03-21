-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 07:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_game-main`
--

-- --------------------------------------------------------

--
-- Table structure for table `11`
--

CREATE TABLE `11` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `subj` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `11`
--

INSERT INTO `11` (`id`, `title`, `subj`) VALUES
(1, 'a', 'b'),
(1, 'CSE', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `12`
--

CREATE TABLE `12` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `subj` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `12`
--

INSERT INTO `12` (`id`, `title`, `subj`) VALUES
(1, 'ready!', 'cse'),
(2, 'ready!', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `13`
--

CREATE TABLE `13` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `subj` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `13`
--

INSERT INTO `13` (`id`, `title`, `subj`) VALUES
(1, 'Niloy', 'cse'),
(2, 'Niloy', 'cse'),
(3, 'Niloy', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `id` int(11) NOT NULL,
  `ques` varchar(200) NOT NULL,
  `a` varchar(30) NOT NULL,
  `b` varchar(30) NOT NULL,
  `c` varchar(30) NOT NULL,
  `d` varchar(30) NOT NULL,
  `ans` varchar(30) NOT NULL,
  `subj` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`id`, `ques`, `a`, `b`, `c`, `d`, `ans`, `subj`) VALUES
(1, 'who am i', 'a', 'b', 'c', 'd', 'a', 'cse'),
(2, 'aa', 'b', 'c', 'd', 'e', 'f', 'cse'),
(3, 'aba', 'b', 'c', 'd', 'e', 'f', 'cse'),
(4, 'aaba', 'b', 'c', 'd', 'e', 'f', 'cse'),
(5, 'ba', 'b', 'c', 'd', 'e', 'f', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_table`
--

CREATE TABLE `quiz_table` (
  `id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_table`
--

INSERT INTO `quiz_table` (`id`, `q_id`, `subject`, `title`) VALUES
(11, 11, 'cse', 'CSE'),
(12, 12, 'cse', 'ready!'),
(13, 13, 'cse', 'Niloy');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Institue` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `Institue`, `email`, `password`) VALUES
(1, 'Niloy', 'niloysamiun@gmail.com', 'yoyo', '1234'),
(2, 'Niloy', 'BUET', 'niloysamiun91@gmail.com', '1234'),
(3, 'niloy', 'BUET', 'niloysamiun91@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `institute` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `institute`, `email`, `password`) VALUES
(4, 'Karim', 'BUET', 'samiun@gmail.com', '1234'),
(5, 'niloy', 'BUET', 'samiun@gmail.com', '1234'),
(6, 'Niloy', 'BUET', 'samiun@gmail.com', '1234'),
(7, 'Niloy', 'BUET', 'samiun@gmail.com', '1234'),
(8, 'Karim', 'BUET', 'niloysamiun91@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `name`, `institute`, `email`, `password`) VALUES
(1, '[value-2]', '[value-3]', '[value-4]', '[value-5]'),
(2, '[value-2]', '[value-3]', '[value-4]', '[value-5]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `13`
--
ALTER TABLE `13`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_table`
--
ALTER TABLE `quiz_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
