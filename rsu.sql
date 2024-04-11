-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 05:38 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsu`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `absent` int(50) NOT NULL,
  `excuses` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Id`, `code`, `absent`, `excuses`) VALUES
(202001458, 'ITCS347', 22, 1),
(202001458, 'ITCS347', 22, 3),
(202001458, 'ITCS347', 0, 0),
(20192244, 'ITCS347', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`code`, `name`, `price`, `pic`) VALUES
('ITCS333', 'HTML & CSS: Design and Build Web Sites', 5, 'p1.png'),
('java', 'JavaScript and jQuery', 24, 'java.jpg'),
('PHP', 'php & MYSQL', 28, 'php.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `name` varchar(50) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`name`, `location`) VALUES
('S40', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3584.562752632478!2d50.50745997528734!3d26.047858877173255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e484d8b81a2a359%3A0xa70e4d46ca258e1b!2sIT%20College%20-%20S40!5e0!3m2!1sen!2sbh!4v1683288'),
('S51', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3584.5431791442734!2d50.50641567528739!3d26.04849897717283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e484d56cf4d569d%3A0x2cf73c4aec986a64!2sS51%2C%20Zallaq!5e0!3m2!1sen!2sbh!4v1683288910592!');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(50) NOT NULL,
  `code` varchar(255) NOT NULL,
  `book` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `code`, `book`, `price`, `quantity`) VALUES
(202001458, 'PHP', 'php & MYSQL', 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id2` int(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `sec` int(50) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `location1` varchar(255) NOT NULL,
  `time1` time NOT NULL,
  `day1` varchar(255) NOT NULL,
  `seats` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id2`, `code`, `sec`, `doctor`, `location1`, `time1`, `day1`, `seats`) VALUES
(18, 'ITCS389', 2, 'THAHAR', 'S40/058', '12:00:00', 'Monday', 38),
(19, 'ITCS347', 3, 'ALHARATH', 'S40/056', '01:00:00', 'Monday', 36);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `Id` int(50) NOT NULL,
  `code` varchar(255) NOT NULL,
  `sec` int(50) NOT NULL,
  `credit` int(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `exams` int(50) NOT NULL,
  `project` int(50) NOT NULL,
  `Quiz` int(50) NOT NULL,
  `Assignment` int(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `CGPA` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`Id`, `code`, `sec`, `credit`, `grade`, `exams`, `project`, `Quiz`, `Assignment`, `status`, `CGPA`) VALUES
(202001458, 'ITCS347', 2, 3, '', 0, 0, 0, 0, 'Enrollment', 3),
(20192244, 'ITCS347', 2, 3, '', 0, 0, 0, 0, 'Enrollment', 2.5);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `code` varchar(50) NOT NULL,
  `doctor` text NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`code`, `doctor`, `review`) VALUES
('ITCS321', 'ABDULFATTAH MAHMOOD', 'He is a doctor who collaborates with his student. He does this by providing the same example.'),
('ITCS389', 'THAHAR SALAH', 'Doctor is an excellent doctor, and you can get A easier just pay attention to his explanation. And Study what you focus on.'),
('ITCS389', 'THAHAR SALAH', 'fatima'),
('ITCS489', 'Ameen', 'hello'),
('ITCS489', 'Ameen', 'hello'),
('ITCS489', 'Ameen', 'hello'),
('ITCS489', 'hello', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Id2` int(50) NOT NULL,
  `Id` int(50) NOT NULL,
  `Day` varchar(50) NOT NULL,
  `Time1` time NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Sec` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Id2`, `Id`, `Day`, `Time1`, `Subject`, `Sec`) VALUES
(59, 20192244, 'Monday', '01:00:00', 'ITCS347', 3),
(60, 202001458, 'Monday', '01:00:00', 'ITCS347', 3),
(62, 20192244, 'Monday', '12:00:00', 'ITCS389', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_type` varchar(255) NOT NULL,
  `id` int(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_type`, `id`, `user_name`, `password`) VALUES
('student', 20192244, 'Maryam Ahmed', 'MA12345'),
('Doctor', 38726534, 'Tahar Faisel', '2673g5'),
('student', 202001458, 'Fatima Anwar', 'FA202001458'),
('Admin', 908453674, 'Faisel Mansoor', 'FM1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id2`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Id2`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id2` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Id2` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=908453675;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `users` (`id`);

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `users` (`id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
