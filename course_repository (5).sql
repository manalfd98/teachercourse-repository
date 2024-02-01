-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 04:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_repository`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `a_id` int(11) NOT NULL,
  `lectures` varchar(255) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `midterm` varchar(255) NOT NULL,
  `final` varchar(255) NOT NULL,
  `quizzes` varchar(255) NOT NULL,
  `lab_task` varchar(255) NOT NULL,
  `lab_manual` varchar(255) NOT NULL,
  `course_tracking` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `assign_course1`
--

CREATE TABLE `assign_course1` (
  `ac_id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `dep_name` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `credit_hour` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_course1`
--

INSERT INTO `assign_course1` (`ac_id`, `teacher_name`, `dep_name`, `course_name`, `course_code`, `credit_hour`) VALUES
(7, 'Ms.surraiya', 'Computer science and software engineering', 'Web Development', 'CSC 3072', '3+1'),
(8, 'Ms.soomaiya', 'Computer science and software engineering', 'Computer Network', 'CSC 2051', '3+1'),
(11, 'Ms.Anisa', 'Computer science and software engineering', 'Data Structures and Algorithm', 'CSC 3072', '3+1'),
(12, 'Ms.Narmeen', 'Computer science and software engineering', 'Human Computer Interaction', 'CSC 2092', '3+0'),
(13, 'Ms.Anum', 'Computer science and software engineering', 'Linear Algebra', 'CSC 3265', '3+0'),
(14, 'Ms.Soomaiya', 'Computer science and software engineering', 'Professional Practices', 'CSC 3193', '3+1'),
(16, 'Ms.Javeria', '', '', '', ''),
(17, '', 'Computer Science and Software Engineering', 'Compiler Construction ', 'CSC 3121', '3+0');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `b_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `degprog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `credit_hours` varchar(255) NOT NULL,
  `clos` varchar(255) NOT NULL,
  `reference_books` varchar(255) NOT NULL,
  `outline` varchar(255) NOT NULL,
  `theory_wb` varchar(255) NOT NULL,
  `lab_wb` varchar(255) NOT NULL,
  `objectives` varchar(255) NOT NULL,
  `a_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `name`, `course_code`, `credit_hours`, `clos`, `reference_books`, `outline`, `theory_wb`, `lab_wb`, `objectives`, `a_id`) VALUES
(18, 'Web Development', 'CSC 3072', '3+1', '3', 'Introduction to Web Design', 'Study of web design', '45', '16', 'Frontend, Backend,JS', 0),
(19, 'Computer Network ', 'CSC 3092', '3+1', '3', 'Introduction to Computer Network', 'Study of computer network', '45', '16', 'networking, routers, switch', 0),
(20, 'Artificial Intelligence', 'CSC 3172', '3+1', '3', 'Introduction to AI', 'Study of AI, ML, DL', '45', '16', 'AI, ML, DL', 0),
(21, 'Communication and Presentation Skills', 'GED 1052', '3+0', '3', 'Introduction to C&P Skills', 'Study of communication', '43', '', 'communication, presentation', 0),
(22, 'Human Computer Interaction', 'CSC 3092', '3+0', '3', 'Introduction to HCI', 'Study of hci', '45', '', 'usability heuristics', 0),
(24, 'Data Structures and Algorithm', 'CSC 2051', '3+1', '3', 'Introduction to DSA', 'Study of dsa', '43', '16', 'data structures, algorithms', 0);

-- --------------------------------------------------------

--
-- Table structure for table `degree_program`
--

CREATE TABLE `degree_program` (
  `degprog_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `s_id` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`user_id`, `username`, `email`, `password`, `designation`) VALUES
(6, 'mehak234', 'mehakd@gmail.com', 'mk4567', 'teacher'),
(10, 'marium778', 'marium@gmail.com', 'mr5678', 'admin'),
(12, 'manal123', 'manalfd@gmail.com', 'mnl345', 'teacher'),
(15, 'ali123', 'ali@gmail.com', 'ali123', 'teacher'),
(17, 'ayesha67', 'ays@mail.com', 'ays234', 'teacher'),
(18, 'aliya12', 'aliya23@gmail.com', 'ay123', 'admin'),
(19, 'maya289', 'maya@gmail.com', 'my678', 'teacher'),
(21, 'amna123', 'amna@gmail.com', 'amna123', 'teacher'),
(22, 'ali56', 'ali@gmail.com', 'ali899', 'teacher'),
(23, 'ali123', 'gfk1998@gmail.com', 'ali7999', 'teacher'),
(24, 'ali123', 'ali@gmail.com', 'ali6568', 'teacher'),
(25, 'alya23', 'alya23@gmail.com', 'a678', 'admin'),
(26, 'ahmed56', 'ah@gmail.com', 'ah234', 'admin'),
(27, 'maria199', 'maria@gmail.com', 'mr123', 'admin'),
(28, 'faiza34', 'faiza@gmail.com', 'fz123', 'teacher'),
(29, 'hafsa123', 'hafsa@gmail.com', 'hf123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `assign_course1`
--
ALTER TABLE `assign_course1`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `degree_program`
--
ALTER TABLE `degree_program`
  ADD PRIMARY KEY (`degprog_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_course1`
--
ALTER TABLE `assign_course1`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `degree_program`
--
ALTER TABLE `degree_program`
  MODIFY `degprog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `teacher` (`user_id`);

--
-- Constraints for table `batch`
--
ALTER TABLE `batch`
  ADD CONSTRAINT `batch_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `assignment` (`a_id`);

--
-- Constraints for table `degree_program`
--
ALTER TABLE `degree_program`
  ADD CONSTRAINT `degree_program_ibfk_1` FOREIGN KEY (`degprog_id`) REFERENCES `batch` (`b_id`);

--
-- Constraints for table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `degree_program` (`degprog_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
