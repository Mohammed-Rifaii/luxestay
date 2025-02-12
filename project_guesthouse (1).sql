-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2025 at 05:02 PM
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
-- Database: `project_guesthouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(15) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(1, 'stephan', '123'),
(2, 'anthony', '123'),
(3, 'jimmy', '123');

-- --------------------------------------------------------

--
-- Table structure for table `commission_history`
--

CREATE TABLE `commission_history` (
  `change_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comm_value` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `commission_history`
--

INSERT INTO `commission_history` (`change_date`, `comm_value`, `admin_id`) VALUES
('2023-04-04 21:00:00', 10, 1),
('2023-04-05 13:41:53', 15, 1),
('2023-04-14 08:49:33', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `guest_houses`
--

CREATE TABLE `guest_houses` (
  `guest_house_id` int(11) NOT NULL,
  `guest_house_name` varchar(20) NOT NULL,
  `area` int(11) NOT NULL,
  `beds` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `guest_house_ppd` int(11) NOT NULL,
  `guest_house_des` varchar(1000) NOT NULL,
  `guest_house_about` varchar(1000) NOT NULL,
  `guest_house_persons` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `house_type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `guest_houses`
--

INSERT INTO `guest_houses` (`guest_house_id`, `guest_house_name`, `area`, `beds`, `baths`, `cost`, `guest_house_ppd`, `guest_house_des`, `guest_house_about`, `guest_house_persons`, `owner_id`, `location_id`, `house_type`) VALUES
(1, 'Cozy Haven', 130, 4, 2, 130, 200, 'Nestled in the heart of Bint Jbeil, \n                Cozy Heaven House offers a warm and inviting retreat for those seeking comfort and tranquility.', 'Nestled in the heart of Bint Jbeil, Cozy Heaven House offers a warm and inviting retreat for those seeking comfort and tranquility. This charming guesthouse features cozy interiors, modern amenities, and a peaceful outdoor space, perfect for relaxing and unwinding. Whether you\'re visiting family, exploring the beauty of South Lebanon, or simply escaping the city, our home provides the ideal setting for a memorable stay. Book your getaway today and experience true comfort in a welcoming atmosphere!', 4, 3, 29, 9),
(2, 'Garden Retreat', 0, 0, 0, 0, 150, 'A charming guesthouse surrounded by beautiful gardens, offering a peaceful and relaxing stay.', '', 2, 6, 5, 10),
(3, 'Serenity House', 0, 0, 0, 0, 350, 'A tranquil and serene guesthouse, designed to promote relaxation and rejuvenation.', '', 6, 1, 3, 10),
(4, 'Mountain View', 0, 0, 0, 0, 100, 'A guesthouse situated in the mountains.Offering breathtaking views and a peaceful escape from the city.', '', 4, 4, 2, 9),
(5, 'Peaceful Cottage', 0, 0, 0, 0, 60, 'A charming cottage-style guesthouse, providing a peaceful and relaxing environment for guests.', '', 2, 4, 6, 6),
(6, 'Pine Ridge', 0, 0, 0, 0, 550, 'A rustic and cozy guesthouse nestled in a pine forest, offering a secluded and peaceful retreat.', '', 4, 5, 5, 5),
(7, 'Sunrise', 0, 0, 0, 0, 190, 'A guesthouse that boasts beautiful sunrise views, perfect for early risers and nature lovers.', '', 3, 1, 4, 7),
(8, 'Sunset Villa', 0, 0, 0, 0, 630, 'A guesthouse with stunning sunset views, ideal for those looking to unwind and enjoy the beauty of nature.', '', 2, 2, 8, 3),
(9, 'Tranquil Hideaway', 0, 0, 0, 0, 125, 'A hidden gem of a guesthouse, offering a tranquil and secluded escape from the hustle and bustle of daily life.', '', 3, 8, 9, 4),
(18, 'Cozy Haven', 0, 0, 0, 0, 200, 'A warm and welcoming retreat with comfortable furnishings and a cozy atmosphere.', '', 4, 3, 1, 9),
(19, 'Garden Retreat', 0, 0, 0, 0, 150, 'A charming guesthouse surrounded by beautiful gardens, offering a peaceful and relaxing stay.', '', 2, 6, 5, 10),
(20, 'Serenity House', 0, 0, 0, 0, 350, 'A tranquil and serene guesthouse, designed to promote relaxation and rejuvenation.', '', 6, 1, 3, 10),
(21, 'Mountain View', 0, 0, 0, 0, 100, 'A guesthouse situated in the mountains.Offering breathtaking views and a peaceful escape from the city.', '', 4, 4, 2, 9),
(22, 'Peaceful Cottage', 0, 0, 0, 0, 60, 'A charming cottage-style guesthouse, providing a peaceful and relaxing environment for guests.', '', 2, 4, 6, 6),
(23, 'Pine Ridge', 0, 0, 0, 0, 550, 'A rustic and cozy guesthouse nestled in a pine forest, offering a secluded and peaceful retreat.', '', 4, 5, 5, 5),
(24, 'Sunrise', 0, 0, 0, 0, 190, 'A guesthouse that boasts beautiful sunrise views, perfect for early risers and nature lovers.', '', 3, 1, 4, 7),
(25, 'Sunset Villa', 0, 0, 0, 0, 630, 'A guesthouse with stunning sunset views, ideal for those looking to unwind and enjoy the beauty of nature.', '', 2, 2, 8, 3),
(26, 'Tranquil Hideaway', 0, 0, 0, 0, 125, 'A hidden gem of a guesthouse, offering a tranquil and secluded escape from the hustle and bustle of daily life.', '', 3, 8, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `house_types`
--

CREATE TABLE `house_types` (
  `type_id` int(11) NOT NULL,
  `type_desc` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `house_types`
--

INSERT INTO `house_types` (`type_id`, `type_desc`) VALUES
(1, 'Pool'),
(2, 'Villa'),
(3, 'Chalet'),
(4, 'Cabin'),
(5, 'Mansion'),
(6, 'Farmhouse'),
(7, 'Hut'),
(8, 'Apartment'),
(9, 'Townhouse'),
(10, 'Courtyard'),
(11, 'Duplex'),
(12, 'Beach'),
(13, 'Studio'),
(14, 'Pool'),
(15, 'Villa'),
(16, 'Chalet'),
(17, 'Cabin'),
(18, 'Mansion'),
(19, 'Farmhouse'),
(20, 'Hut'),
(21, 'Apartment'),
(22, 'Townhouse'),
(23, 'Courtyard'),
(24, 'Duplex'),
(25, 'Beach'),
(26, 'Studio');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `guest_house_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `image_path`, `guest_house_id`) VALUES
(1, 'assets/img/property-slide/cozyHaven.jpg', 1),
(2, 'assets/img/property-slide/cozyHaven2.jpg\r\n', 1),
(3, 'assets/img/property-slide/cozyHaven3.jpg', 1),
(4, 'photos/gardenRetreat.jpg', 2),
(5, 'photos/gardenRetreat2.jpg', 2),
(6, 'photos/gardenRetreat3.jpg', 2),
(7, 'photos/mountainView.jpg', 3),
(8, 'photos/mountainView2.jpg', 3),
(9, 'photos/mountainView3.jpg', 3),
(10, 'photos/peacefulCottage.jpg', 4),
(11, 'photos/peacefulCottage2.jpg', 4),
(12, 'photos/peacefulCottage3.jpg', 4),
(13, 'photos/pineRidge.jpg', 5),
(14, 'photos/pineRidge2.jpg', 5),
(15, 'photos/pineRidge3.jpg', 5),
(16, 'photos/serenityHouse.jpg', 6),
(17, 'photos/serenityHouse2.jpg', 6),
(18, 'photos/serenityHouse3.jpg', 6),
(19, 'photos/sunrise.jpg', 7),
(20, 'photos/sunrise2.jpg', 7),
(21, 'photos/sunrise3.jpg', 7),
(22, 'photos/sunsetVilla.jpg', 8),
(23, 'photos/sunsetVilla2.jpg', 8),
(24, 'photos/sunsetVilla3.jpg', 8),
(25, 'photos/tranquil.jpg', 9),
(26, 'photos/tranquil2.jpg', 9),
(27, 'photos/tranquil3.jpg', 9),
(28, 'photos/cozyHaven.jpg', 1),
(29, 'photos/cozyHaven2.jpg', 1),
(30, 'photos/cozyHaven3.jpg', 1),
(31, 'photos/gardenRetreat.jpg', 2),
(32, 'photos/gardenRetreat2.jpg', 2),
(33, 'photos/gardenRetreat3.jpg', 2),
(34, 'photos/mountainView.jpg', 3),
(35, 'photos/mountainView2.jpg', 3),
(36, 'photos/mountainView3.jpg', 3),
(37, 'photos/peacefulCottage.jpg', 4),
(38, 'photos/peacefulCottage2.jpg', 4),
(39, 'photos/peacefulCottage3.jpg', 4),
(40, 'photos/pineRidge.jpg', 5),
(41, 'photos/pineRidge2.jpg', 5),
(42, 'photos/pineRidge3.jpg', 5),
(43, 'photos/serenityHouse.jpg', 6),
(44, 'photos/serenityHouse2.jpg', 6),
(45, 'photos/serenityHouse3.jpg', 6),
(46, 'photos/sunrise.jpg', 7),
(47, 'photos/sunrise2.jpg', 7),
(48, 'photos/sunrise3.jpg', 7),
(49, 'photos/sunsetVilla.jpg', 8),
(50, 'photos/sunsetVilla2.jpg', 8),
(51, 'photos/sunsetVilla3.jpg', 8),
(52, 'photos/tranquil.jpg', 9),
(53, 'photos/tranquil2.jpg', 9),
(54, 'photos/tranquil3.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `location_desc` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `location_desc`) VALUES
(1, 'Beirut'),
(2, 'Tripoli'),
(3, 'Sidon'),
(4, 'Byblos '),
(5, 'Zahle'),
(6, 'Baalbek'),
(7, 'Batroun'),
(8, 'Nabatieh'),
(9, 'Jounieh'),
(10, 'Bint Jbeil'),
(11, 'Marjeyoun'),
(12, 'Zgharta'),
(13, 'Rashaya'),
(14, 'Hasbaya'),
(15, 'Beirut'),
(16, 'Tripoli'),
(17, 'Sidon'),
(18, 'Byblos '),
(19, 'Zahle'),
(20, 'Baalbek'),
(21, 'Batroun'),
(22, 'Nabatieh'),
(23, 'Jounieh'),
(24, 'Bint Jbeil'),
(25, 'Marjeyoun'),
(26, 'Zgharta'),
(27, 'Rashaya'),
(28, 'Hasbaya'),
(29, 'Jbeil');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `owner_id` int(11) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `owner_phone` varchar(10) NOT NULL,
  `owner_email` varchar(50) NOT NULL,
  `registration_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`owner_id`, `owner_name`, `owner_phone`, `owner_email`, `registration_date`) VALUES
(1, 'Anthony Mhanna', '81-214815', 'anthony@gmail.com', '2023-04-13'),
(2, 'Stephan Chabchoul', '71-456634', 'stephan@gmail.com', '2023-04-13'),
(3, 'Jimmy Rahme', '76-345876', 'jimmy@gmail.com', '2023-04-14'),
(4, 'Hicham Sleimen', '03-548321', 'hicham@gmail.com', '2023-04-15'),
(5, 'Hady Hapche', '76-567523', 'hady@gmail.com', '2023-04-15'),
(6, 'Charbel Bteich', '71-456432', 'charbel@gmail.com', '2023-04-15'),
(7, 'Paul Akiki', '76-143159', 'paul@gmail.com', '2023-04-16'),
(8, 'Youssef Seif', '81-678754', 'youssef@gmail.com', '2023-04-20'),
(9, 'Marc Zgheib', '71-398789', 'marc@gmail.com', '2023-04-20'),
(10, 'Elie', '03-335445', 'elie@gmail.com', '2023-04-21'),
(11, 'Anthony Mhanna', '81-214815', 'anthony@gmail.com', '2025-02-06'),
(12, 'Stephan Chabchoul', '71-456634', 'stephan@gmail.com', '2025-02-06'),
(13, 'Jimmy Rahme', '76-345876', 'jimmy@gmail.com', '2025-02-06'),
(14, 'Hicham Sleimen', '03-548321', 'hicham@gmail.com', '2025-02-06'),
(15, 'Hady Hapche', '76-567523', 'hady@gmail.com', '2025-02-06'),
(16, 'Charbel Bteich', '71-456432', 'charbel@gmail.com', '2025-02-06'),
(17, 'Paul Akiki', '76-143159', 'paul@gmail.com', '2025-02-06'),
(18, 'Youssef Seif', '81-678754', 'youssef@gmail.com', '2025-02-06'),
(19, 'Marc Zgheib', '71-398789', 'marc@gmail.com', '2025-02-06'),
(20, 'Elie', '03-335445', 'elie@gmail.com', '2025-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `reminder_id` int(11) NOT NULL,
  `reminder_date` date NOT NULL,
  `reminder_content` varchar(200) DEFAULT NULL,
  `reservation_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`reminder_id`, `reminder_date`, `reminder_content`, `reservation_id`) VALUES
(1, '2023-04-21', NULL, 13),
(2, '2023-04-22', NULL, 14),
(3, '2023-04-25', NULL, 15),
(4, '2023-04-22', NULL, 16),
(5, '2023-04-21', NULL, 17),
(6, '2023-04-24', NULL, 18),
(7, '2023-04-29', NULL, 19),
(8, '2023-04-22', NULL, 20),
(9, '2023-04-23', NULL, 21),
(10, '2023-04-26', NULL, 22),
(11, '2023-04-29', NULL, 23),
(12, '2023-04-23', NULL, 24),
(13, '2023-04-27', NULL, 25),
(14, '2023-04-22', NULL, 26),
(15, '2023-04-26', NULL, 27);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(11) NOT NULL,
  `reservation_date` varchar(15) NOT NULL,
  `house_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) DEFAULT NULL,
  `user_lastName` varchar(25) DEFAULT NULL,
  `user_email` varchar(30) DEFAULT NULL,
  `user_phone` varchar(30) DEFAULT NULL,
  `user_password` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_lastName`, `user_email`, `user_phone`, `user_password`) VALUES
(1004, 'Anthony', 'Mhanna', 'anthonymhanna8@gmail.com', '81214815', 'd09a92992c780d8d6d6f9a656ffc0ea0af11bbe8305613bb7a039b9195f57cce'),
(1006, 'amjad', 'rifaii', 'amajdrifaii@gmail.com', '71797400', '12345678'),
(1007, 'amjad', 'rifaii', 'amjadrifaii@gmail.com', '1234567890', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `commission_history`
--
ALTER TABLE `commission_history`
  ADD PRIMARY KEY (`change_date`);

--
-- Indexes for table `guest_houses`
--
ALTER TABLE `guest_houses`
  ADD PRIMARY KEY (`guest_house_id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `house_type` (`house_type`);

--
-- Indexes for table `house_types`
--
ALTER TABLE `house_types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `guest_house_id` (`guest_house_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`reminder_id`),
  ADD KEY `reservation_id` (`reservation_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guest_houses`
--
ALTER TABLE `guest_houses`
  MODIFY `guest_house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `house_types`
--
ALTER TABLE `house_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reminder`
--
ALTER TABLE `reminder`
  MODIFY `reminder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=453;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
