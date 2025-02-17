-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2025 at 08:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peertechtor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `f_name` varchar(60) NOT NULL,
  `m_name` varchar(60) DEFAULT NULL,
  `l_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `position` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=deleted,1=existing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `f_name`, `m_name`, `l_name`, `email`, `password`, `position`, `status`) VALUES
(1, 'April', NULL, 'De Leon', 'apriljane@gmail.com', '81e9bb67d35131a8f3c8cc9b4fcea365241e9a236b9863253961717ebca2888d', 'Guidance Counselor', 1),
(2, 'Bong Bong', NULL, 'Marcos', 'bonbongmarcos@gmail.com', '5aeb4e486d4bf88743a129643db1edb2cd267329c2f7b7a3da9089add349a036', 'Principal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `IDsentTo` int(11) NOT NULL,
  `IDsentFrom` int(11) NOT NULL,
  `bullyingType` varchar(60) NOT NULL,
  `messages` text DEFAULT NULL,
  `imagesProof` varchar(255) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=deleted,1=existing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `IDsentTo`, `IDsentFrom`, `bullyingType`, `messages`, `imagesProof`, `date_added`, `status`) VALUES
(9, 1, 4, 'Physical', 'awdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwadawdwad', 'report_67b2e3b7d92164.98049519.jpg', '2025-02-17 07:44:42', 1),
(10, 1, 4, 'Others', 'gyjgyj', NULL, '2025-02-17 07:34:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mname` varchar(60) DEFAULT NULL,
  `lname` varchar(60) NOT NULL,
  `yr_sec` varchar(60) NOT NULL,
  `lrn` varchar(60) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=deleted,1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `mname`, `lname`, `yr_sec`, `lrn`, `contact`, `password`, `status`) VALUES
(1, 'student', 'student', 'student', 'student', '234', '3', '264c8c381bf16c982a4e59b0dd4c6f7808c51a05f64c35db42cc78a2a72875bb', 1),
(2, 'joshua', '', 'padilla', '41B', '2147483647', '2147483647', '90264f54b005212c9f6937bd5ccdf4bd0e2bd2ed250ff441141f1edbd5e753e6', 1),
(4, 'joshua', '', 'padill', 'bsit 41B', '104913060074', '2147483647', '90264f54b005212c9f6937bd5ccdf4bd0e2bd2ed250ff441141f1edbd5e753e6', 1),
(5, 'andy', '', 'padilla', 'BS41B', '104913060072', '2147483647', '90264f54b005212c9f6937bd5ccdf4bd0e2bd2ed250ff441141f1edbd5e753e6', 1),
(6, 'andy', '', 'anderson', 'awdaw', '123456', '1212', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1),
(7, 'juan', '', 'delacruz', '41C', '104913000', '2147483647', '0432b1b835b5b2b0fe6636e6e51737d9373216babc384ac8d938c1567f418ed8', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `IDsentFrom` (`IDsentFrom`),
  ADD KEY `IDsentTo` (`IDsentTo`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`IDsentFrom`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`IDsentTo`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
