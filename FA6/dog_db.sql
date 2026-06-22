-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2026 at 05:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dog_info`
--

CREATE TABLE `dog_info` (
  `id` int(6) UNSIGNED NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_breed` varchar(50) NOT NULL,
  `d_age` varchar(30) NOT NULL,
  `d_add` varchar(100) NOT NULL,
  `d_color` varchar(30) NOT NULL,
  `d_height` varchar(30) NOT NULL,
  `d_weight` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dog_info`
--

INSERT INTO `dog_info` (`id`, `d_name`, `d_breed`, `d_age`, `d_add`, `d_color`, `d_height`, `d_weight`) VALUES
(1, 'Bidam', 'Pug', '2yrs old', 'Quezon City', 'white', '2 ft', '2.5 kilos'),
(2, 'Potchi', 'Siberian Husky', '3yrs old', 'Malabon City', 'brown', '3 ft', '5.5 kilos'),
(3, 'Luna', 'Chow Chow', '4 years old', 'Bulacan', 'Brown', '2 feet', '4 kilos'),
(4, 'Maggie', 'Golden Retriever', '5yrs old', 'Manila', 'Golden', '2.5 ft', '25 kilos'),
(5, 'Potpot', 'Pomeranian', '1yr old', 'Caloocan City', 'White', '1 ft', '2 kilos'),
(6, 'Whitney', 'German Shepherd', '4yrs old', 'Pasig City', 'Black/Tan', '3 ft', '30 kilos'),
(7, 'Bonney', 'Shih Tzu', '2yrs old', 'Makati City', 'Black/White', '1 ft', '4 kilos'),
(8, 'Snow', 'Poodle', '3yrs old', 'Taguig City', 'Apricot', '1.5 ft', '6 kilos'),
(9, 'Brownie', 'Beagle', '6yrs old', 'Mandaluyong City', 'Tricolor', '1.5 ft', '10 kilos'),
(10, 'Oreo', 'Chihuahua', '2yrs old', 'San Juan', 'Fawn', '0.8 ft', '1.5 kilos'),
(11, 'Sol', 'Asong Pinoy', '1yr old', 'Pasay City', 'White', '1 ft', '5 kilos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dog_info`
--
ALTER TABLE `dog_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dog_info`
--
ALTER TABLE `dog_info`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
