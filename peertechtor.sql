-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2025 at 02:10 AM
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
(1, 'April', NULL, 'De Leon', 'apriljane@gmail.com', '81e9bb67d35131a8f3c8cc9b4fcea365241e9a236b9863253961717ebca2888d', 'guidance Counselor', 1),
(2, 'Bong Bong', NULL, 'Marcos', 'bonbongmarcos@gmail.com', '5aeb4e486d4bf88743a129643db1edb2cd267329c2f7b7a3da9089add349a036', 'principal', 1),
(3, 'alden', NULL, 'richard', 'password123@gmail.com', 'ef92b778bafe771e89245b89ecbc08a44a4e166c06659911881f383d4473e94f', 'guidance Counselor', 1),
(7, 'admin', NULL, 'admin', 'admin@gmail.com', '7932b2e116b076a54f452848eaabd5857f61bd957fe8a218faf216f24c9885bb', 'super admin', 1);

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
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=deleted,1=existing',
  `seen` int(11) NOT NULL DEFAULT 1 COMMENT '0=seen,1=unseen'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `IDsentTo`, `IDsentFrom`, `bullyingType`, `messages`, `imagesProof`, `date_added`, `status`, `seen`) VALUES
(16, 1, 4, 'Physical', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, tempore praesentium. Delectus natus error mollitia officia ipsa itaque esse nihil quo, architecto alias praesentium beatae aliquam, nemo, vel eaque! Totam obcaecati, vitae necessitatibus est repellat a deserunt magnam. Necessitatibus dicta assumenda temporibus impedit eveniet nesciunt! Qui maiores reiciendis dolor nesciunt hic at fugit, fuga labore ad? Dignissimos ipsum tempora qui rerum harum magnam quos in nam. Praesentium alias aliquid vero, nobis rerum, fugit animi sed veritatis, repudiandae cumque obcaecati distinctio.', 'report_67b5d741a33e45.35856074.jpg', '2025-02-19 13:06:19', 1, 0);

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
(7, 'juan', '', 'delacruz', '41C', '104913000', '2147483647', '0432b1b835b5b2b0fe6636e6e51737d9373216babc384ac8d938c1567f418ed8', 1),
(8, 'justin', 'r', 'padilla', '42C', '10491312', '09454454744', 'a9ddd6737a881fe0d2fba727c9b6d87ea969e709397defd69468cce4e1bea2f8', 1),
(9, 'Juan', '', 'Anderson', '12-AMPERE', '10491300123', '09454454744', '64c03eed69ae89bb2f7687d0cdffe7fd3e4dbc873f0ffd4e0a32604516a22fce', 1),
(10, 'lebron', '', 'james', '11-ampere', '104912', '09454454744', 'e4fdb874b5bed4a11e69a63d66608f22937de9417c91511bac236b66d4edc350', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
