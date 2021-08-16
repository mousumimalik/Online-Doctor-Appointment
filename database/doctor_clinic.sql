-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 05:23 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_details`
--

CREATE TABLE `appointment_details` (
  `appointment_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` varchar(20) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `appointment_date` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_details`
--

INSERT INTO `appointment_details` (`appointment_id`, `name`, `email`, `age`, `dob`, `appointment_date`, `mobile`, `gender`, `address`) VALUES
(11, 'Aashwin Malik', 'ashwin@hmail.com', '3', '2018-07-01', '2018-07-01', '9101262785', 'Male', 'Address'),
(12, 'Eanna Malik', 'enna@gmail.com', '1', '2018-11-01', '2018-11-01', '8122929234', 'Female', 'Address');

-- --------------------------------------------------------

--
-- Table structure for table `contact_mail`
--

CREATE TABLE `contact_mail` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_mail`
--

INSERT INTO `contact_mail` (`contact_id`, `name`, `email`, `date`, `mobile`, `message`) VALUES
(8, 'Mousumi Malik', 'mousumi@gamil.com', '2018-07-26', '8133929235', 'Something to tell'),
(9, 'Mou Malik', 'mou@gmail.com', '2018-07-09', '766125333', 'Triblet digit number'),
(11, 'Sabana Sauvik', 'savana@gmail.com', '2018-08-24', '9181026383', 'Zone plates'),
(12, 'Tata Indico', 'tata@gmail.com', '2018-07-29', '0000000000', 'Hahahah hihi');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `description`, `active`) VALUES
(2, 'img3.jpg', 'doctor', 1),
(3, 'dr.jpg', 'mahi', 1),
(4, 'bg2.jpg', 'hi', 0),
(5, 'onln.jpg', 'demo', 1),
(6, 'bg1.jpg', 'good ', 0),
(7, 'Allah-image-1.jpg', 'god', 0),
(8, '9.jpg', 'imh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`) VALUES
(1, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_details`
--
ALTER TABLE `appointment_details`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `contact_mail`
--
ALTER TABLE `contact_mail`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_details`
--
ALTER TABLE `appointment_details`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_mail`
--
ALTER TABLE `contact_mail`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
