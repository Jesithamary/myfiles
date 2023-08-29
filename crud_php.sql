-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 12:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud.php`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `jobs_types` varchar(15) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `file_upload` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `address`, `gender`, `jobs_types`, `phone_number`, `file_upload`) VALUES
(14, 'Angel', 'Yelagiri', 'Female', 'Choose a Jobs', '8056442440', 'fether.jpg'),
(15, 'Stephen', 'Mumbai', 'Male', 'BPS', '2147483647', 'sports.jpg'),
(16, 'Alex', 'Chennai', 'Male', 'Choose a Jobs', '3456782346', '17025.jpg'),
(17, 'Femila', 'Chennai', 'Female', 'Full stack Deve', '2147483647', '7027.jpg'),
(18, 'Angel', 'Chennai', 'Female', 'Full stack Deve', '2147483647', '468.jpg'),
(19, 'ramya', 'Osur', 'Female', 'Teching', '2147483647', '544.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
