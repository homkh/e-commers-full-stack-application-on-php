-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 07:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `re_password` varchar(255) NOT NULL,
  `admin_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_password`, `re_password`, `admin_email`) VALUES
(1, 'homkhadka', 'admin', 'admin', 'homkhadka67@gmail.com'),
(2, 'sangam', 'admin', 'admin', 'sangamdiwal@gami.com'),
(3, 'ram khadka', 'ram', 'ram', 'ramkhadka77@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `agri_profiles`
--

CREATE TABLE `agri_profiles` (
  `agri_id` int(11) NOT NULL,
  `agri_name` varchar(100) NOT NULL,
  `agri_email` varchar(100) NOT NULL,
  `agri_contactNo` varchar(100) NOT NULL,
  `agri_specilization` varchar(255) NOT NULL,
  `about_agri` varchar(255) NOT NULL,
  `image_agri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agri_profiles`
--

INSERT INTO `agri_profiles` (`agri_id`, `agri_name`, `agri_email`, `agri_contactNo`, `agri_specilization`, `about_agri`, `image_agri`) VALUES
(4, 'Hom Khadka', 'homkhadka@gmail.com', '9832187634', 'Animal Specialists ', 'A veterinary specialist is a veterinarian who has completed additional training in a specific area of veterinary medicine and has passed an examination.', 'hom.jpeg'),
(5, 'Reezu Khadka', 'reezukhadka@gami.com', '9834567825', 'Soil Expert', 'He has excellent knowledge and knowledge about the soil. He profoundly understands soil properties, formation, classification, and how soils interact with the environment.', 'reezu.jpg'),
(6, 'Sangam Diwal', 'sangamdiwal@gmail.com', '9856723196', 'Fertilizer Specialist ', 'He has excellent knowledge and well knowledge about the Fertilizer. The specialists have in-depth knowledge about various types of fertilizers, their compositions, application methods, and their impact on plants, soil, and the environment.', 'sangam.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `author_name` varchar(20) NOT NULL,
  `blog_content` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `author_name`, `blog_content`, `blog_image`) VALUES
(1, 'Nepal’s unreliable vision for seeds.', 'Sangam Shresth', 'Availability of good quality seeds is a prerequisite to increase crop production. But Nepal\'s seed supply system is unreliable and farmers have always complained about the unavailability of quality seeds.\r\nThe availability of good quality seeds is one of ', 'download.jpeg'),
(2, 'What’s the cause behind fertilizer shortage? What can be done?', 'Sandesh Pandey', 'Nepal must explore short-term and long-term solutions to mitigate the fertilizer shortage that has hindered the country’s agriculture production for years. Fertilizer supply in Nepal remains critically below the total demand every year but the store is mo', 'fertilizer_20201209135142.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(5, 'Nepal Seeds Pvt.'),
(6, 'Sangam Agro limited.'),
(7, 'Krishi Nepal Pvt.'),
(8, 'Hamro krishikendra Pvt. Ltd'),
(9, 'sunway_krishi_sewa');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(13, '::1', 1),
(15, '::1', 1),
(18, '::1', 1),
(20, '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Rice'),
(2, 'fruites'),
(3, 'corn seeds'),
(4, 'Mustard Seeds'),
(5, 'Wheat '),
(6, 'others'),
(7, 'rice'),
(8, 'xyz'),
(9, 'Fertilizer'),
(10, 'mango');

-- --------------------------------------------------------

--
-- Table structure for table `formedetails`
--

CREATE TABLE `formedetails` (
  `inq_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formedetails`
--

INSERT INTO `formedetails` (`inq_id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Hom Bahadur Khadka', 'sanjay@mavorion.com', 'About partner ship', 'I want to become our business partners.'),
(5, 'sandesh pandey', 'sandesPanday@123gamil.conm', 'Regarding To The Order Conform ', 'I have already pouched the seed from the cord seeds form your sides however my order is still pending. Please solve this issue as soon as possible. '),
(10, 'Goshai Parjapati', 'goshainParjapati@gmail.com', 'Regarding to the issues on product delivery', 'Before the one weeks i have been order a seeds product form yours website. Till the date i as not got the any responses and form you.'),
(11, 'hom khadka', 'homkhadka67@gmail.com', 'for the seller regertatration ', 'for the particuler reasons i wan to become your sell on t');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_price`) VALUES
(7, 'Rice Seeds', 'This is the high-quality seeds at the best price. This is the certified seeds by Nark with a 20% discount. ', 'rice seeds ', 1, 0, 'rice1.jpeg', 'rice2.jpeg', '450'),
(8, 'Mustard Seeds | Hari Ghotra', 'Mustard seeds are the small round seeds of various mustard plants. The seeds are usually about 1 to 2 millimetres in diameter and may be colored from yellowish white to black Rs.700/-', 'Mustard Seeds- tori seeds ', 0, 0, 'mustard_seeds.jpg', 'mustardseeds.jpg', '700'),
(9, 'Wheat Seed | Bulk Pack', ' In stock* Introduce vitality to your fields with our premium quality wheat seeds. Crafted with care and bred for excellence, ', 'whet seeds - premium quality', 0, 0, 'Wheat-Bulk.jpg', 'whhet2.jpg', '790'),
(10, 'Chia Seeds | Sangam Agro', 'Chia seeds are the edible seeds of Salvia hispanica, a flowering plant in the mint family native to central and southern Mexico. Available with 25% discount on first order..', 'chia seeds, organic seeds', 6, 0, 'cheya_seeds.jpeg', 'cheys_more.jpeg', '999'),
(11, 'Corn Seeds', 'Find here details of companies selling Sweet Corn Seed, for your purchase requirements. Get latest info on Sweet Corn Seed, Mithas Sweet Corn, suppliers..', 'corn seeds, organic seeds', 3, 0, 'POPCORN-SEED-SPROUTING-1KG.jpg', 'cornseeds2.jpg', '440'),
(12, 'OrganicDews Liquid Seaweed', 'OrganicDews Liquid Seaweed Concentrate for Plants 250 ml with Measuring Cup 25 ml Fertilizer for All Indoor and Outdoor Plants 250 ml Visit the hamro krishi Store', 'organic fertilizer', 9, 0, 'fertilizer1.PNG', 'fertilizer2.PNG', '300'),
(13, 'Babique Dap Fertilizer ', 'Babique Dap Fertilizer for Plants | Plant Nutrient and Plant Food | All Plants | Gardening (200 Gm) Visit the Hamro Krishi Store Store', 'Organic Fertilizer', 9, 0, 'fertilier3.PNG', 'fertilizer4.PNG', '200'),
(14, 'Neem Cake Powder Organic Fertilizer', 'TrustBasket Neem Cake Powder Organic Fertilizer and Pest Repellent for Plants (450 GMS) Visit the Sangam Agro Store....', 'Organic fertilizer', 9, 0, 'fertilizer5.PNG', 'fertilizer6.PNG', '200'),
(15, '46-0-0 UREA FERTILIZER 50 LB', 'Urea is the most important nitrogenous fertilizer in the market, with the highest Nitrogen content (about 46 percent). It is a white crystalline organic chemical compound. Urea is neutral in pH and can adapt to almost all kinds of soils.', 'UREA (46% N)', 9, 0, 'Urea.jpg', 'Urea-fertilizer.jpg', '1960'),
(16, 'Cubic Potash || Chemical Fertilizer || Potash fertilizer', 'Cubic Potash, Chemical Fertilizer, Potash fertilizer', 'Cubic potash (potash derived from molasses) provides potash to plants in water-soluble form. It is potassium rich fertilizer which we offer as an alternate to the existing chemical potash fertilizers derived from molasses.', 9, 0, 'Potash.jpg', 'fertilizer_potash.jpg', '1950'),
(17, 'DAP Fertilizer ', 'DAP Fertilizer 1kg Pack for grow your plant flowers and fruits . best fertilizer for soil t helps the plant to grow fast and produce more fruits and flowers.', 'DAP Fertilizer, fertilizer item', 0, 0, 'dap.jpg', 'dap1.jpg', '6000'),
(18, 'Pumpkin Seed/Farsi Biya (फर्सी बीया) - 200gm', 'Pumpkin seeds are a good source of magnesium, manganese, iron, zinc, and copper. Magnesium helps improve mood and sleep. In addition to reducing inflammation, antioxidants help fend off premature aging and chronic diseases.', 'Pumpkin Seed, Farsi Biya ', 2, 0, 'pumkin.jpg', 'Pumpkin_2.jpg', '250'),
(19, 'Rayo Vegetable Sag Seed - 5 gms', 'Rayo Vegetable Seed Mustang Marpha Chaudapate Improved variety Higher germination Genetically and physically pure Useful for kitchen garden and commercial production', 'Rayo Vegetable Sag Seed', 6, 0, 'rayoSag.PNG', 'rayosag1.PNG', '70'),
(20, 'Chilli 10 Grams PUSA-JWALA', 'Chilli 10 Grams PUSA-JWALA', 'Chilli 10 Grams PUSA-JWALA', 6, 0, 'readchelly.PNG', 'readchelly1.png', '120');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, '', '$2y$10$pCbgvt/.CbiIgst8tQEA9.7OFl/2QfNBe66LSUPW.q4O97NMZXWhe'),
(2, 'ashish', 'ashish123');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `con_user_password` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `con_user_password`, `user_ip`, `user_mobile`) VALUES
(8, 'homkhadka', 'homkhadka@gamil.com', '$2y$10$l7jTtzJOjWbxnhWe5eMd8.KIocIuqtjvm1SLN8aPbO8XGNKoJsHcG', 'hom123', '::1', '9843294319'),
(10, 'sangam_diwal', 'sangam@diwal.com', '$2y$10$uwXIo1oHszUBfiHXFoN0POdYCOLAO5lPINvH79fJTHo.9rq2JAqKC', 'sangam12', '::1', '987654321'),
(11, 'Anishkhadka', 'ashishkhadka@gamil.com', '$2y$10$AwKHGjiYIzyuKwqcVZ/RrOjLvKVSHA72kJI./gZBTQTo5qscTlQOi', 'anish123', '::1', '9856234189');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_name` (`admin_name`);

--
-- Indexes for table `agri_profiles`
--
ALTER TABLE `agri_profiles`
  ADD PRIMARY KEY (`agri_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `formedetails`
--
ALTER TABLE `formedetails`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agri_profiles`
--
ALTER TABLE `agri_profiles`
  MODIFY `agri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `formedetails`
--
ALTER TABLE `formedetails`
  MODIFY `inq_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
