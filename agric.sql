-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 12:30 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agric`
--

-- --------------------------------------------------------

--
-- Table structure for table `agri_tips`
--

CREATE TABLE `agri_tips` (
  `id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `date_t` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agri_tips`
--

INSERT INTO `agri_tips` (`id`, `description`, `region`, `type`, `date_t`) VALUES
(2, 'Insecticide Thiamethoxam 30% SC, 21% SC, good control effect on rice planthopper Usage method 1. To control rice planthopper, 25% thiamethoxazine ', 'Rift-Valley', 'Agricultural Insecticides', '2024-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `joined_date` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `name`, `username`, `password`, `phone`, `region`, `joined_date`, `type`) VALUES
(3, 'Clive Omoro', 'omosh', '827ccb0eea8a706c4c34a16891f84e7b', '0775011617', 'Nyanza', '2024-03-25', 'Farmer'),
(5, 'Babu Owino',  'babu', '827ccb0eea8a706c4c34a16891f84e7b', '0775509424', 'Nairobi', '2024-03-25', 'Farmer');

-- --------------------------------------------------------

--
-- Table structure for table `forecasting`
--

CREATE TABLE `forecasting` (
  `id` int(11) NOT NULL,
  `tempa` varchar(20) NOT NULL,
  `region` varchar(90) NOT NULL,
  `daily` varchar(90) NOT NULL,
  `date_t` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forecasting`
--

INSERT INTO `forecasting` (`id`, `tempa`, `region`, `daily`, `date_t`) VALUES
(1, '24', 'Rift-valley', 'partly Clouds', '12 March 2024');

-- --------------------------------------------------------
--
-- Table structure for table `farm_inputs`
--

CREATE TABLE `farm_inputs` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(90) NOT NULL,
  `price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farm_inputs`
--

INSERT INTO `farm_inputs` (`id`, `name`, `description`, `price`) VALUES
(1, 'Folk Jembe', 'Digging', '2500');


--
-- Indexes for dumped tables
--



-- --------------------------------------------------------

--
-- Table structure for table `admins`
--
CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `surname`, `username`, `password`, `type`) VALUES
(1, 'Charles', 'Jeckton', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(4, 'Rufus', 'mwangi', 'rufus', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(5, 'Mbugua', 'Esther', 'mbugua', 'd41d8cd98f00b204e9800998ecf8427e', 'admin');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `agri_tips`
--
ALTER TABLE `agri_tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forecasting`
--
ALTER TABLE `forecasting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farm_inputs`
--
ALTER TABLE `farm_inputs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agri_tips`
--
ALTER TABLE `agri_tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `forecasting`
--
ALTER TABLE `forecasting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farm_inputs`
--
ALTER TABLE `farm_inputs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
