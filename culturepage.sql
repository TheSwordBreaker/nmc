-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 05:51 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `culturepage`
--

CREATE TABLE `culturepage` (
  `id` int(200) NOT NULL,
  `name` varchar(4000) NOT NULL,
  `img` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `culturepage`
--

INSERT INTO `culturepage` (`id`, `name`, `img`) VALUES
(1, 'Pande Mithai', 'pande_mithai.jpg'),
(2, 'Samarath Juice Centre', 'samartha_juice.jpg'),
(3, 'Dairy Don', 'j3.jpeg'),
(4, 'Rock n Rolls', 'wraproti.jpg'),
(5, 'Sadhna misal', 'sadhna_misal.jpg'),
(6, 'Kokni Darbar', 'j6.jpg'),
(7, 'Akbar Soda', 'soda.png'),
(8, 'Budha Halwai', 'gulabjamun.jpg'),
(9, 'Kondaji Chivda', 'Kondaji_Chivda.jpg'),
(10, 'Sayantara', 'sayantara.jpg'),
(11, 'Coffee', 'coffee.jpg'),
(12, 'Chienese', 'chiness.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `culturepage`
--
ALTER TABLE `culturepage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `culturepage`
--
ALTER TABLE `culturepage`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
