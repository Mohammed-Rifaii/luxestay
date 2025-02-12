-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2025 at 02:41 AM
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
-- Table structure for table `guest_houses`
--

CREATE TABLE `guest_houses` (
  `guest_house_id` int(11) NOT NULL,
  `guest_house_name` varchar(20) NOT NULL,
  `area` int(11) NOT NULL,
  `beds` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `garages` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `guest_house_des` varchar(1000) NOT NULL,
  `guest_house_about` varchar(1000) NOT NULL,
  `guest_house_persons` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `house_type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `guest_houses`
--

INSERT INTO `guest_houses` (`guest_house_id`, `guest_house_name`, `area`, `beds`, `baths`, `garages`, `cost`, `guest_house_des`, `guest_house_about`, `guest_house_persons`, `location_id`, `house_type`) VALUES
(1, 'Cozy Haven', 130, 4, 2, 2, 130, 'Nestled in the heart of Jbeil, \r\n                Cozy Heaven House offers a warm and inviting retreat for those seeking comfort and tranquility.', 'Nestled in the heart of Jbeil, Cozy Heaven House offers a warm and inviting retreat for those seeking comfort and tranquility. This charming guesthouse features cozy interiors, modern amenities, and a peaceful outdoor space, perfect for relaxing and unwinding. Whether you\'re visiting family, exploring the beauty of South Lebanon, or simply escaping the city, our home provides the ideal setting for a memorable stay. Book your getaway today and experience true comfort in a welcoming atmosphere!', 4, 9, 9),
(2, 'Garden Retreat', 60, 2, 2, 3, 80, 'A charming guesthouse surrounded by beautiful gardens, offering a peaceful and relaxing stay.', 'A charming guesthouse surrounded by beautiful gardens, offering a peaceful and relaxing stay, where you can unwind amidst nature\'s serenity, enjoy the soothing sounds of birdsong, and experience warm hospitality in a cozy, home-like atmosphere. Whether you\'re seeking a quiet retreat or a base to explore the surrounding area, this guesthouse provides the perfect blend of comfort and tranquility at the Zahl&eacute; Mounts.', 2, 14, 10),
(3, 'Serenity House', 80, 2, 1, 1, 60, 'A tranquil and serene guesthouse, designed to promote relaxation and rejuvenation.', '', 2, 3, 10),
(4, 'Mountain View', 80, 2, 2, 2, 100, 'A guesthouse situated in the mountains.Offering breathtaking views and a peaceful escape from the city.', 'A guesthouse situated in the Tripoli Heights, offering breathtaking views and a peaceful escape from the city, where crisp mountain air rejuvenates your senses and panoramic vistas of rolling hills or snow-capped peaks greet you at every turn. Whether you\'re cozying up by the fireplace, exploring scenic trails, or simply soaking in the tranquility of nature, this mountain retreat promises an unforgettable experience of serenity and adventure.\r\n', 2, 12, 9),
(5, 'Peaceful Cottage', 45, 1, 1, 1, 40, 'A charming cottage-style guesthouse, providing a peaceful and relaxing environment for guests.', 'A charming cottage-style guesthouse, providing a peaceful and relaxing environment for guests, nestled in the historic heart of Baalbek, where ancient ruins and timeless landscapes create a magical backdrop. Surrounded by lush gardens and the gentle whispers of history, this retreat offers a perfect blend of rustic charm and modern comfort. Wake up to the golden hues of sunrise over the iconic Roman temples, savor traditional Lebanese breakfasts on the terrace, and unwind in the serene ambiance of this enchanting haven. Whether you\'re exploring the archaeological wonders of Baalbek or simply enjoying the tranquility of the countryside, this guesthouse is your ideal escape', 2, 5, 6),
(6, 'Pine Ridge', 100, 4, 2, 2, 140, 'A rustic and cozy guesthouse nestled in a pine forest, offering a secluded and peaceful retreat.', 'A rustic and cozy guesthouse nestled in a pine forest, offering a secluded and peaceful retreat, in the picturesque town of Zahl&eacute;, where the scent of pine trees mingles with the fresh mountain breeze. Surrounded by lush greenery and the soothing sounds of nature, this charming hideaway is the perfect escape from the hustle and bustle of everyday life. Spend your days exploring nearby vineyards, strolling along the serene Berdawni River, or simply relaxing on the wooden porch with a cup of locally brewed coffee. As the sun sets, gather around a crackling fire pit under a canopy of stars, and let the tranquility of this forested haven rejuvenate your soul. Whether you\'re seeking adventure or relaxation, this guesthouse in Zahl&eacute; promises an unforgettable retreat.', 4, 11, 5),
(7, 'Sunrise', 130, 5, 2, 2, 150, 'A guesthouse that boasts beautiful sunrise views, perfect for early risers and nature lovers.', '', 5, 8, 7),
(8, 'Sunset Villa', 200, 5, 4, 4, 300, 'A guesthouse with stunning sunset views, ideal for those looking to enjoy the luxurious life.', 'A guesthouse in the heart of Batroun, with stunning sunset views, ideal for those looking to enjoy the luxurious life, where every evening paints the sky in vibrant hues of gold, pink, and orange, creating a mesmerizing backdrop for your stay. Designed with elegance and sophistication, this retreat offers spacious, beautifully appointed rooms, private balconies, and infinity pools that seem to blend seamlessly with the horizon. Indulge in gourmet dining experiences, unwind with bespoke spa treatments, and savor the finest wines as you watch the sun dip below the horizon. Whether you\'re celebrating a special occasion or simply seeking a lavish escape, this guesthouse promises an unparalleled experience of opulence and tranquility, where every moment feels like a dream', 7, 6, 3),
(9, 'Tranquil Hideaway', 60, 2, 1, 1, 90, 'A hidden gem of a guesthouse, offering a tranquil and secluded escape from the hustle and bustle of daily life.', '', 3, 13, 13),
(27, 'Rusty Lake', 70, 2, 1, 1, 45, 'The Rusty Lake', 'Cube Escape Reference', 3, 8, 2);

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
(13, 'Studio');

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
(4, 'assets/img/property-slide/gardenRetreat.jpg', 2),
(5, 'assets/img/property-slide/gardenRetreat2.jpg', 2),
(6, 'assets/img/property-slide/gardenRetreat3.jpg', 2),
(7, 'assets/img/property-slide/mountainView.jpg', 3),
(8, 'assets/img/property-slide/mountainView2.jpg', 3),
(9, 'assets/img/property-slide/mountainView3.jpg', 3),
(10, 'assets/img/property-slide/mountainView.jpg', 4),
(11, 'assets/img/property-slide/mountainView2.jpg', 4),
(12, 'assets/img/property-slide/mountainView3.jpg', 4),
(13, 'assets/img/property-slide/peacefulCottage.jpg', 5),
(14, 'assets/img/property-slide/peacefulCottage2.jpg', 5),
(15, 'assets/img/property-slide/peacefulCottage3.jpg', 5),
(16, 'assets/img/property-slide/pineRidge.jpg', 6),
(17, 'assets/img/property-slide/pineRidge2.jpg', 6),
(18, 'assets/img/property-slide/pineRidge3.jpg', 6),
(19, 'assets/img/property-slide/sunrise.jpg', 7),
(20, 'assets/img/property-slide/sunrise2.jpg', 7),
(21, 'assets/img/property-slide/sunrise3.jpg', 7),
(22, 'assets/img/property-slide/sunsetVilla.jpg', 8),
(23, 'assets/img/property-slide/sunsetVilla2.jpg', 8),
(24, 'assets/img/property-slide/sunsetVilla3.jpg', 8),
(25, 'assets/img/property-slide/tranquil.jpg', 9),
(26, 'assets/img/property-slide//tranquil2.jpg', 9),
(27, 'assets/img/property-slide/tranquil3.jpg', 9),
(28, 'assets/img/property-slide/cozyHaven.jpg', 1),
(29, 'assets/img/property-slide/cozyHaven2.jpg', 1),
(30, 'assets/img/property-slide/cozyHaven3.jpg', 1),
(31, 'assets/img/property-slide/gardenRetreat.jpg', 2),
(32, 'assets/img/property-slide/gardenRetreat2.jpg', 2),
(33, 'assets/img/property-slide/gardenRetreat3.jpg', 2),
(34, 'assets/img/property-slide/mountainView.jpg', 3),
(35, 'assets/img/property-slide/mountainView2.jpg', 3),
(36, 'assets/img/property-slide/mountainView3.jpg', 3),
(37, 'assets/img/property-slide/peacefulCottage.jpg', 4),
(38, 'assets/img/property-slide/peacefulCottage2.jpg', 4),
(39, 'assets/img/property-slide/peacefulCottage3.jpg', 4),
(40, 'assets/img/property-slide/pineRidge.jpg', 5),
(41, 'assets/img/property-slide/pineRidge2.jpg', 5),
(42, 'assets/img/property-slide/pineRidge3.jpg', 5),
(43, 'assets/img/property-slide/serenityHouse.jpg', 6),
(44, 'assets/img/property-slide/serenityHouse2.jpg', 6),
(45, 'assets/img/property-slide/serenityHouse3.jpg', 6),
(46, 'assets/img/property-slide/sunrise.jpg', 7),
(47, 'assets/img/property-slide/sunrise2.jpg', 7),
(48, 'assets/img/property-slide/sunrise3.jpg', 7),
(49, 'assets/img/property-slide/sunsetVilla.jpg', 8),
(50, 'assets/img/property-slide/sunsetVilla2.jpg', 8),
(51, 'assets/img/property-slide/sunsetVilla3.jpg', 8),
(52, 'assets/img/property-slide/tranquil.jpg', 9),
(53, 'assets/img/property-slide/tranquil2.jpg', 9),
(54, 'assets/img/property-slide/tranquil3.jpg', 9),
(56, 'assets/img/property-slide/rustyLake1.jpg', 27),
(57, 'assets/img/property-slide/rustyLake3.jpeg', 27),
(59, 'assets/img/property-slide/rustyLake2.jpg', 27);

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
(5, 'Baalbek'),
(6, 'Batroun'),
(7, 'Nabatieh'),
(8, 'Jounieh'),
(9, 'Bint Jbeil'),
(10, 'Marjeyoun'),
(11, 'Zgharta'),
(12, 'Rashaya'),
(13, 'Hasbaya'),
(14, 'Zahle');

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

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `reservation_date`, `house_id`, `user_id`) VALUES
(708, '2025-02-04', 3, 1011),
(709, '2025-02-28', 3, 1011),
(710, '2025-02-17', 2, 1011),
(711, '2025-02-18', 2, 1011),
(712, '2025-02-17', 4, 1011),
(713, '2025-02-18', 4, 1011),
(714, '2025-03-24', 6, 1020),
(715, '2025-03-25', 6, 1020);

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
  `user_password` varchar(150) DEFAULT NULL,
  `urole` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_lastName`, `user_email`, `user_phone`, `user_password`, `urole`) VALUES
(1011, 'amjad', 'rifaii', 'amjadrifaii@gmail.com', '123456', '123456', 'admin'),
(1014, 'elio', 'abdo', 'elioabdo@gmail.com', '123456', '123456', 'admin'),
(1019, 'elia', 'abel masih', 'eliaabelmasih@gmail.com', '123456', '123456', 'admin'),
(1020, 'test', 'subject', 'testsubject@test.com', '1', '123', 'user'),
(1021, 'potato', 'chips', 'potatochips@gmail.com', '12', '123456', 'user'),
(1022, 'tomato', 'zomato', 'tomatozomato@gmail.com', '123', '123456', 'user'),
(1023, 'php', 'isfun', 'phpisfun@gmail.com', '123', '123456', 'user'),
(1024, 'LUCS', 'ZAHLE', 'LUCSZAHLE@gmail.com', '123', '123456', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest_houses`
--
ALTER TABLE `guest_houses`
  ADD PRIMARY KEY (`guest_house_id`),
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
-- AUTO_INCREMENT for table `guest_houses`
--
ALTER TABLE `guest_houses`
  MODIFY `guest_house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `house_types`
--
ALTER TABLE `house_types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=716;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1025;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
