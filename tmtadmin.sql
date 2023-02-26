-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2023 at 07:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmtadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role_as` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `role_as`, `created_at`, `updated_at`) VALUES
(1, 'user@user.com', '1234', 1, '2023-02-25 17:52:01', '2023-02-25 17:52:01'),
(2, 'hi@hi.com', '1234', 1, '2023-02-26 05:03:57', '2023-02-26 05:03:57'),
(3, 'vignesh@gmail.com', '1234', 1, '2023-02-26 05:33:08', '2023-02-26 05:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event` text NOT NULL,
  `artist` text NOT NULL,
  `type` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `image` text NOT NULL,
  `trending` int(11) NOT NULL,
  `category` text NOT NULL,
  `price` int(11) NOT NULL,
  `details` text NOT NULL,
  `category2` text NOT NULL,
  `price2` int(11) NOT NULL,
  `details2` text NOT NULL,
  `category3` text NOT NULL,
  `price3` int(11) NOT NULL,
  `details3` text NOT NULL,
  `boxoffice` int(11) NOT NULL,
  `venue` text NOT NULL,
  `city` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event`, `artist`, `type`, `date`, `time`, `image`, `trending`, `category`, `price`, `details`, `category2`, `price2`, `details2`, `category3`, `price3`, `details3`, `boxoffice`, `venue`, `city`, `created_at`, `updated_at`) VALUES
(5, 'Yuvan', 'Yuvan', 'Music', '2023-02-28', '16:00:00', '1677388299.jpg', 0, 'Bronze', 2000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et harum ex adipisci?', 'Silver', 3000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et harum ex adipisci?', 'Gold', 4000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et harum ex adipisci?', 0, 'ECR', 'Chennai', '2023-02-26 05:11:39', '0000-00-00 00:00:00'),
(6, 'Maroon', 'Maroon', 'Music', '2023-03-07', '23:00:00', '1677388676.jpg', 1, 'Silver', 3000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et harum ex adipisci?', 'Gold', 6000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et harum ex adipisci?', 'Premium', 12000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et harum ex adipisci?', 0, 'ABC Resort', 'Mumbai', '2023-02-26 05:17:56', '0000-00-00 00:00:00'),
(7, 'Nothin', 'Shawn Mendes', 'Music', '2023-03-09', '18:00:00', '1677388930.jpeg', 1, 'Gold', 6000, ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Et harum ex adipisci?', 'Elite', 12000, ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Et harum ex adipisci?', 'Premium', 15000, ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Et harum ex adipisci?', 0, 'ABC gardens', 'Bangalore', '2023-02-26 05:22:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` int(11) NOT NULL,
  `venue` text NOT NULL,
  `address` text NOT NULL,
  `gmapurl` text NOT NULL,
  `city` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `venue`, `address`, `gmapurl`, `city`, `created_at`, `updated_at`) VALUES
(7, 'ECR', 'East Coast Road', 'https://goo.gl/maps/fRQxo16LtmXZnq6J9', 'Chennai', '2023-02-26 05:10:20', '2023-02-26 05:10:20'),
(8, 'ABC Resort', 'No. 21, Patel Road', 'https://goo.gl/maps/M6Yd683G2ESivByH9', 'Mumbai', '2023-02-26 05:16:29', '2023-02-26 05:16:29'),
(9, 'ABC gardens', 'No 6, ABCD street', 'https://goo.gl/maps/M6Yd683G2ESivByH9', 'Bangalore', '2023-02-26 05:20:51', '2023-02-26 05:20:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
