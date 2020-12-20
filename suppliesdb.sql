-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 10:30 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suppliesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cid`, `pid`, `quantity`) VALUES
(28, 0, 6, 1),
(32, 11, 4, 2),
(33, 11, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Dog Food'),
(2, 'Cat Food'),
(3, 'Clothing'),
(4, 'Bedding'),
(5, 'Grooming'),
(6, 'Accessories'),
(7, 'Toys');

-- --------------------------------------------------------

--
-- Table structure for table `loginuser`
--

CREATE TABLE `loginuser` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginuser`
--

INSERT INTO `loginuser` (`id`, `username`, `email`, `password`, `phone_num`) VALUES
(1, 'Tanvi', 'tanvidesai018@gmail.com', 'tanvi112', 98343),
(3, 'appppii', 'appi@gmail.com', 'apppi', 91568),
(4, 'prachi', 'prach@gmail.com', 'prachu', 45392),
(5, 'Rehu', 'rehu@gmail.com', 'rehu', 98343),
(6, 'Priya', 'priya@gmail.com', 'priya', 12342),
(7, 'doisy', 'doisy@gmail.com', 'doisy', 35334),
(8, 'biro', 'biro@gmail.com', 'biro', 45353),
(9, 'utkarsh', 'utkarsh@gmail.com', 'utku', 98343),
(10, 'tina', 'tina@gmail.com', 'tina', 43332),
(11, 'Riya Naik', 'riya11@gmail.com', 'riya', 2147483647),
(12, 'Shreya Desai', 'shreya12@gmail.com', 'shreaya', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `odate` timestamp NOT NULL DEFAULT current_timestamp(),
  `cid` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `pay_method` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `pid`, `price`, `quantity`, `odate`, `cid`, `address`, `city`, `state`, `pincode`, `pay_method`) VALUES
(1, 3, 900, 1, '2020-12-19 18:58:50', 10, 'khadpabandh', 'ponda', 'goa', 403401, 'cash on delivery'),
(12, 2, 400, 1, '2020-12-19 19:12:56', 10, 'khadpabandh', 'ponda', 'goa', 403401, 'cash on delivery'),
(13, 1, 500, 1, '2020-12-19 19:12:56', 10, 'khadpabandh', 'ponda', 'goa', 403401, 'cash on delivery'),
(15, 8, 500, 1, '2020-12-19 19:12:56', 10, 'khadpabandh', 'ponda', 'goa', 403401, 'cash on delivery'),
(16, 2, 400, 1, '2020-12-19 19:20:48', 4, 'fatorda', 'quepem', 'goa', 235585, 'credit card'),
(20, 8, 500, 1, '2020-12-19 19:39:12', 4, 'khadpabandh', 'ponda', 'goa', 403401, 'credit card'),
(25, 8, 500, 1, '2020-12-19 20:19:25', 5, 'fatorda', 'quepem', 'goa', 235585, 'cash on delivery'),
(26, 4, 200, 1, '2020-12-19 20:19:25', 5, 'fatorda', 'quepem', 'goa', 235585, 'cash on delivery'),
(27, 4, 200, 2, '2020-12-19 20:29:48', 6, 'mapusa', 'panjim', 'goa', 34253, 'credit card'),
(28, 7, 300, 1, '2020-12-19 20:29:48', 6, 'mapusa', 'panjim', 'goa', 34253, 'credit card'),
(29, 6, 500, 1, '2020-12-19 20:32:12', 6, 'mapusa', 'panjim', 'goa', 34253, 'debit card'),
(30, 7, 300, 1, '2020-12-19 20:32:12', 6, 'mapusa', 'panjim', 'goa', 34253, 'debit card'),
(31, 1, 500, 1, '2020-12-19 20:34:45', 9, 'curti', 'ponda', 'goa', 403401, 'debit card'),
(32, 3, 900, 2, '2020-12-19 20:34:45', 9, 'curti', 'ponda', 'goa', 403401, 'debit card'),
(33, 7, 300, 1, '2020-12-20 02:30:12', 1, 'margao', 'panjim', 'goa', 325142, 'cash on delivery'),
(34, 8, 400, 1, '2020-12-20 02:30:12', 1, 'margao', 'panjim', 'goa', 325142, 'cash on delivery'),
(35, 6, 500, 2, '2020-12-20 02:38:41', 3, 'verna', 'margao', 'goa', 345343, 'cash on delivery'),
(36, 4, 300, 1, '2020-12-20 02:38:41', 3, 'verna', 'margao', 'goa', 345343, 'cash on delivery'),
(37, 9, 400, 1, '2020-12-20 02:52:42', 5, 'fatorda', 'quepem', 'goa', 235585, 'cash on delivery'),
(38, 2, 500, 1, '2020-12-20 02:52:42', 5, 'fatorda', 'quepem', 'goa', 235585, 'cash on delivery'),
(39, 5, 200, 2, '2020-12-20 05:05:30', 12, 'shrejji darshan appts haveli Curti', 'Ponda', 'Goa', 403401, 'cash on delivery'),
(40, 9, 400, 1, '2020-12-20 05:05:31', 12, 'shrejji darshan appts haveli Curti', 'Ponda', 'Goa', 403401, 'cash on delivery'),
(41, 3, 900, 1, '2020-12-20 05:05:31', 12, 'shrejji darshan appts haveli Curti', 'Ponda', 'Goa', 403401, 'cash on delivery'),
(42, 9, 400, 1, '2020-12-20 09:15:39', 5, 'Shreeji darshan Appts haveli curti', 'verna', 'Goa', 3255421, 'cash on delivery'),
(43, 4, 300, 1, '2020-12-20 09:15:40', 5, 'Shreeji darshan Appts haveli curti', 'verna', 'Goa', 3255421, 'cash on delivery');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(50) NOT NULL,
  `mfg_date` date NOT NULL,
  `exp_date` date DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `prod_img` varchar(20) NOT NULL,
  `subcat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `price`, `description`, `mfg_date`, `exp_date`, `stock`, `prod_img`, `subcat_id`) VALUES
(1, 'Pedigree for  dog', 600, 'Adult dogs', '2020-10-14', '2021-01-21', 50, 'pedigree.png', 4),
(2, 'Whiskas cat food', 500, 'for kittens wet food', '2020-09-23', '2021-01-18', 20, 'catfood.jpg', 4),
(3, 'dogs sweater', 900, 'winter wear sweaters', '2020-12-21', NULL, 40, 'sweater.jpg', 9),
(4, 'Rope Toys ', 300, 'rope toys for dogs', '2020-12-08', NULL, 39, 'rope-toys.jpg', 1),
(5, '2pcs Chew Toy Rubber', 200, 'rubber toy for dogs', '2020-12-14', NULL, 40, 'dog-toy.jpg', 2),
(6, 'Play twins rope ball', 500, 'rope balls', '2020-11-23', NULL, 60, 'rope-ball.jpg', 1),
(7, 'fetch tug and toss toy', 300, 'tug and fetch toy', '2020-11-09', NULL, 20, 'rope.jpg', 2),
(8, '2 pack floating rope toy', 400, 'gfhfxsha ghs', '2020-10-13', NULL, 26, 'ropeball.jpg', 1),
(9, 'Frisbee tug toy', 400, 'super frisbee tug toys for dogs', '2020-08-17', NULL, 10, 'fetch.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `scat_name` varchar(30) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `scat_name`, `cat_id`) VALUES
(1, 'Rope Toys', 7),
(2, 'Fetch and Tug Toys', 7),
(3, 'Dry food', 1),
(4, 'Wet Food', 1),
(5, 'Grain Free Food', 1),
(6, 'Blankets', 4),
(7, 'Mattress', 4),
(8, 'tshirt', 3),
(9, 'Winter wear', 3),
(10, 'collars', 6),
(11, 'chain sets', 6),
(12, 'bowls', 6),
(13, 'stick toys', 7),
(14, 'plush toys', 7),
(15, 'brushes and combs', 5),
(16, 'shampoos and soaps', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
