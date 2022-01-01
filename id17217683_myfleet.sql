-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2021 at 09:05 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17217683_myfleet`
--

-- --------------------------------------------------------

--
-- Table structure for table `distance_conditions`
--

CREATE TABLE `distance_conditions` (
  `distance` double NOT NULL,
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distance_conditions`
--

INSERT INTO `distance_conditions` (`distance`, `id`, `created_at`) VALUES
(0.18, 13, '2021-07-18 18:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `driver_details`
--

CREATE TABLE `driver_details` (
  `driver_name` text NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `driver_email` text NOT NULL,
  `driver_age` bigint(20) NOT NULL,
  `driver_role` text NOT NULL,
  `driver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_details`
--

INSERT INTO `driver_details` (`driver_name`, `phone_number`, `driver_email`, `driver_age`, `driver_role`, `driver_id`) VALUES
('ade bisi', 8035884422, 'adebisi@gmail.com', 37, 'Volunteer', 9),
('Lotta Harvey', 9011133355, 'LottaHarvey@gmail.com', 50, 'Volunteer', 10),
('Emeka David', 8033355511, 'EmekaDavid123@gmail.com', 34, 'Permanent', 11),
('Abasi Okor', 904443333, 'AbasiOkor@yahoo.com', 29, 'Volunteer', 12);

-- --------------------------------------------------------

--
-- Table structure for table `normal_distance_conditions`
--

CREATE TABLE `normal_distance_conditions` (
  `min_distance` float NOT NULL,
  `max_distance` float NOT NULL,
  `id` int(11) NOT NULL,
  `farm_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `normal_distance_conditions`
--

INSERT INTO `normal_distance_conditions` (`min_distance`, `max_distance`, `id`, `farm_id`) VALUES
(1.21, 2.21, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `company_name` varchar(100) NOT NULL,
  `company_email` text NOT NULL,
  `password` text NOT NULL,
  `company_address` text NOT NULL,
  `role` int(2) NOT NULL DEFAULT 1,
  `id` int(11) NOT NULL,
  `fleet_size` text NOT NULL,
  `fleet_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`company_name`, `company_email`, `password`, `company_address`, `role`, `id`, `fleet_size`, `fleet_category`) VALUES
('admin', 'admin@gmail.com', 'admin', 'admin@gmail.com', 2, 1, '0', '0'),
('esther', 'esther@gmail.com', 'esther', 'esther@gmail.com', 1, 2, '0', '0'),
('goodness', 'goodness@gmail.com', 'goodness', 'goodness@gmail.com', 1, 3, '0', '0'),
('nelson', 'nelson@gmail.com', 'nelson', 'nelson@gmail.com', 1, 4, '0', '0'),
('clmt', 'johnsonora@gmail.com', '1111', 'clmt@gmail.com', 1, 10, '16-40', 'Buses');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_name` text NOT NULL,
  `vehicle_model` text NOT NULL,
  `model_year` int(4) NOT NULL,
  `license_number` text NOT NULL,
  `VIN` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_name`, `vehicle_model`, `model_year`, `license_number`, `VIN`, `id`) VALUES
('camry', 'toyota', 2019, '55454', 138848498, 9),
('proace', 'toyota', 2016, '444566', 666777444, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distance_conditions`
--
ALTER TABLE `distance_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_details`
--
ALTER TABLE `driver_details`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `normal_distance_conditions`
--
ALTER TABLE `normal_distance_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distance_conditions`
--
ALTER TABLE `distance_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `driver_details`
--
ALTER TABLE `driver_details`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `normal_distance_conditions`
--
ALTER TABLE `normal_distance_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
