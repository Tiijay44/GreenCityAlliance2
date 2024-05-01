-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 10:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green_cities_alliance`
--
CREATE DATABASE IF NOT EXISTS `green_cities_alliance` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `green_cities_alliance`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Admin One', 'admin1@example.com', 'password'),
(2, 'Admin Two', 'admin2@example.com', 'password'),
(3, 'Admin Three', 'admin3@example.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
  `Area_id` int(11) NOT NULL,
  `Area_name` varchar(255) NOT NULL,
  `Council_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`Area_id`, `Area_name`, `Council_id`) VALUES
(1, 'St ', 1),
(2, 'Watford', 2),
(3, 'Hemel Hempstead', 3),
(4, 'Cheshunt', 4),
(5, 'Broxbourne', 5),
(6, 'Welwyn Garden City', 6),
(7, 'Harpenden', 1),
(8, 'Hitchin', 7),
(10, 'Sawbridgeworth', 4),
(11, 'Bishopʼs Stortford', 4),
(12, 'Hertford', 6),
(13, 'Ware', 6),
(14, 'Buckhurst Hill', 2),
(15, 'Loughton', 2),
(16, 'Chipping Ongar', 2),
(17, 'Epping', 2),
(18, 'Hatfield', 1),
(19, 'Potters Bar', 1),
(20, 'Borehamwood', 1),
(21, 'Bushey', 1),
(22, 'Abbots Langley', 1),
(23, 'Rickmansworth', 1),
(24, 'Kings Langley', 1),
(25, 'Tring', 3),
(26, 'Berkhamsted', 3),
(27, 'Redbourn', 3),
(28, 'Hemel Hempstead Rural', 3),
(30, 'kingston', 6),
(32, 'Jade', 3),
(34, 'Jader', 3),
(35, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `Company_id` int(11) NOT NULL,
  `Company_name` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone_number` varchar(50) DEFAULT NULL,
  `Product_Services` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Company_id`, `Company_name`, `Email`, `Password`, `Phone_number`, `Product_Services`) VALUES
(2, 'GreenTech Solutions', 'sales@greentechsol.com', '$2y$10$nLsoeiciUeqzm6lrcoUdveaB6kcbXy6Io/Ot8aVF1yFxWVxcv/CyS', '453532523542', 'Renewable Energy Systems'),
(3, 'The Refillery Store', 'contact@therefillerystore.uk', '$2y$10$ECYYE1ls', '+44 161 828 1234', 'Zero-Waste Refills and Products'),
(4, 'Bloom & Branch', 'info@bloombranch.co.uk', '$2y$10$ECYYE1ls', '+44 28 9560 4567', 'Organic Gardening Supplies'),
(5, 'Eco-Cycle Ltd.', 'enquiries@ecocycle.ltd', '$2y$10$ECYYE1ls', '+44 191 234 5678', 'Sustainable Waste Management'),
(6, 'GreenWheels Transportation', 'info@greenwheels.uk', '$2y$10$ECYYE1ls', '+44 31 4567 8901', 'Electric Vehicle Charging Solutions'),
(7, 'The Natural Cleaning Co.', 'sales@thenaturalcleaningco.com', '$2y$10$ECYYE1ls', '+44 122 456 7890', 'Eco-Friendly Cleaning Products'),
(8, 'Sustainably Sourced', 'info@sustainablysourced.com', '$2y$10$ECYYE1ls', '+44 20 8765 4321', 'Ethical and Sustainable Products'),
(9, 'The Green Roof Company', 'sales@thegreenroofcompany.co.uk', '$2y$10$ECYYE1ls', '+44 141 321 0987', 'Green Rooftops and Living Walls'),
(10, 'The Rethink Project', 'contact@therethinkproject.org', '$2y$10$ECYYE1ls', '+44 152 247 6543', 'Sustainable Clothing and Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `local_councils`
--

DROP TABLE IF EXISTS `local_councils`;
CREATE TABLE `local_councils` (
  `Council_id` int(11) NOT NULL,
  `Council_name` varchar(255) NOT NULL,
  `Council_Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `local_councils`
--

INSERT INTO `local_councils` (`Council_id`, `Council_name`, `Council_Email`) VALUES
(1, 'Broxbourne Borough Council', NULL),
(2, 'Waltham Cross Borough Council', NULL),
(3, 'Dacorum Borough Council', NULL),
(4, 'East Hertfordshire District Council', NULL),
(5, 'Hertsmere Borough Council', NULL),
(6, 'North Hertfordshire District Council', NULL),
(7, 'St Albans City and District Council', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_services`
--

DROP TABLE IF EXISTS `products_services`;
CREATE TABLE `products_services` (
  `Product_id` int(11) NOT NULL,
  `Company_id` int(11) NOT NULL,
  `Product_name` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL,
  `Size` varchar(50) DEFAULT NULL,
  `Environmental_benefits` text DEFAULT NULL,
  `Price` decimal(12,3) NOT NULL,
  `Price_category` enum('Affordable','Moderate','Premium') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_services`
--

INSERT INTO `products_services` (`Product_id`, `Company_id`, `Product_name`, `Description`, `Size`, `Environmental_benefits`, `Price`, `Price_category`) VALUES
(2, 2, 'Energy-Saving LED Bulbs', 'Pack of 4 dimmable LED bulbs with low energy consumption', 'medium', 'Reduces energy usage', 14000.000, 'Moderate'),
(3, 3, 'Compost Bin (Outdoor)', 'Durable and ventilated compost bin for sustainable waste management', 'large', 'Promotes organic waste recycling', 39.990, 'Premium'),
(4, 4, 'Bamboo Toothbrushes', 'Eco-friendly and biodegradable bamboo toothbrushes (pack of 4)', 'small', 'Sustainable alternative to plastic brushes', 4.500, 'Affordable'),
(6, 5, 'Reusable Water Bottle (Stainless Steel)', 'Double-walled stainless steel bottle for keeping drinks hot or cold', 'medium', 'Reduces single-use plastic bottles', 19.950, 'Moderate'),
(8, 7, 'Organic Cotton Shopping Bags', 'Set of 3 reusable shopping bags made from organic cotton', 'small', 'Sustainable and ethical alternative', 7.990, 'Affordable'),
(9, 8, 'Natural Cleaning Products Kit', 'Eco-friendly cleaning products for a variety of surfaces', 'medium', 'Non-toxic and biodegradable cleaning solutions', 14.990, 'Moderate'),
(10, 9, 'Recycled Paper Products', 'Bundle of recycled paper products (printer paper, notebooks)', 'large', 'Reduces paper waste and deforestation', 24.990, 'Premium'),
(11, 10, 'Compostable Utensils Set', 'Set of disposable utensils made from compostable materials', 'small', 'Biodegradable alternative to plastic utensils', 2.990, 'Affordable');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

DROP TABLE IF EXISTS `resident`;
CREATE TABLE `resident` (
  `Resident_id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `AGE` int(11) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `Gender` enum('male','female','other') DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Environmental_interests` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`Resident_id`, `FirstName`, `LastName`, `Email`, `AGE`, `Password`, `Gender`, `Location`, `Environmental_interests`) VALUES
(1, 'Rewut', 'Wilbue', 'oliver.wright@example.com', 32, 'khona1990', 'male', 'St Albans', 'Renewable Energy'),
(2, 'Emily', 'Jones', 'emily.jones@example.com', 28, '$2y$10$xVGKBkKOXs', 'female', 'Watford', 'Waste Reduction'),
(3, 'Michael', 'Brown', 'michael.brown@example.com', 45, '$2y$10$xVGKBkKOXs', 'male', 'Hitchin', 'Energy Efficiency'),
(4, 'Sophia', 'Miller', 'sophia.miller@example.com', 21, '$2y$10$xVGKBkKOXs', 'female', 'Welwyn Garden City', 'Renewable Energy'),
(5, 'William', 'Davis', 'william.davis@example.com', 52, '$2y$10$xVGKBkKOXs', 'male', 'Stevenage', 'Waste Reduction'),
(6, 'Charlotte', 'Taylor', 'charlotte.taylor@example.com', 38, '$2y$10$xVGKBkKOXs', 'female', 'Bishop\'s Stortford', 'Energy Efficiency'),
(7, 'James', 'Campbell', 'james.campbell@example.com', 19, '$2y$10$xVGKBkKOXs', 'male', 'Hemel Hempstead', 'Transportation'),
(8, 'Olivia', 'Bennett', 'olivia.bennett@example.com', 25, '$2y$10$xVGKBkKOXs', 'female', 'Cheshunt', 'Renewable Energy'),
(11, 'Olomu', 'davis', 'olomu.davis@ymail.com', 25, '$2y$10$xVGKBkKOXs', 'male', 'Hatfield', 'Renewable Energy'),
(12, 'Olomu', 'davis', '', 10, '$2y$10$xVGKBkKOXs', '', 'Hatfield', ''),
(21, 'Olomu', 'davis', 'olomu.daviwsa@ymail.com', 10, '$2y$10$xVGKBkKOXs', 'male', 'Welwyn', 'Waste Reduction'),
(22, 'Olomu', 'davis', 'olomu.davi@ymail.com', 10, '$2y$10$xVGKBkKOXs', 'male', 'Welwyn', 'Waste Reduction'),
(23, 'Olomu', 'davis', 'olou.davi@ymail.com', 10, '$2y$10$xVGKBkKOXs', 'female', 'Welwyn', 'Waste Reduction');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

DROP TABLE IF EXISTS `vote`;
CREATE TABLE `vote` (
  `vote_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`vote_id`, `company_id`, `product_id`) VALUES
(1, 2, 2),
(2, 2, 2),
(3, 3, 3),
(4, 3, 3),
(5, 3, 3),
(6, 4, 4),
(7, 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`Area_id`),
  ADD UNIQUE KEY `Area_name` (`Area_name`),
  ADD KEY `Council_id` (`Council_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Company_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `local_councils`
--
ALTER TABLE `local_councils`
  ADD PRIMARY KEY (`Council_id`);

--
-- Indexes for table `products_services`
--
ALTER TABLE `products_services`
  ADD PRIMARY KEY (`Product_id`),
  ADD UNIQUE KEY `Product_name` (`Product_name`),
  ADD KEY `Company_id` (`Company_id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`Resident_id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Location` (`Location`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`vote_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `resident_id` (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `Area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `local_councils`
--
ALTER TABLE `local_councils`
  MODIFY `Council_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products_services`
--
ALTER TABLE `products_services`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `Resident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_ibfk_1` FOREIGN KEY (`Council_id`) REFERENCES `local_councils` (`Council_id`);

--
-- Constraints for table `products_services`
--
ALTER TABLE `products_services`
  ADD CONSTRAINT `company_fk` FOREIGN KEY (`Company_id`) REFERENCES `company` (`Company_id`);

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products_services` (`Product_id`),
  ADD CONSTRAINT `vote_ibfk_3` FOREIGN KEY (`company_id`) REFERENCES `company` (`Company_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
