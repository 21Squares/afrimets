-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2025 at 11:24 AM
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
-- Database: `gsagov_afrimets_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `title` varchar(10) DEFAULT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `passport_number` varchar(50) DEFAULT NULL,
  `nationality` varchar(100) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dietary_preferences` text DEFAULT NULL,
  `attendance_type` enum('Physical','Online') NOT NULL,
  `tc_meetings` text DEFAULT NULL,
  `other_meetings` text DEFAULT NULL,
  `require_visa` enum('Yes','No') NOT NULL,
  `preferred_hotel` varchar(100) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `title`, `first_name`, `last_name`, `passport_number`, `nationality`, `institution`, `position`, `country`, `email`, `phone`, `dietary_preferences`, `attendance_type`, `tc_meetings`, `other_meetings`, `require_visa`, `preferred_hotel`, `registration_date`) VALUES
(1, 'Prof.', 'Ask', 'World ', 'c12345678', 'JAMAICAN', 'GHANA STANDARDS AUTHORITY', 'IT OFFICER', 'JAMAICA', 'askworld@gmail.com', '+1543278912', 'No', 'Online', 'TC - Legal', 'EXCOM - Executive Commitee Meeting, NMI/LMB Directors Meeting', 'No', 'None', '2025-04-14 14:03:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
