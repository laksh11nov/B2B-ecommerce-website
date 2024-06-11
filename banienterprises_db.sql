-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 08:40 AM
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
-- Database: `banienterprises_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_desc` varchar(300) NOT NULL,
  `category_slug` varchar(50) NOT NULL,
  `photo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_desc`, `category_slug`, `photo`) VALUES
(1, 'Cabinet Handle', 'Handle', 'cabinet-handle', '1.webp'),
(2, 'Wardrobe Handle', 'Handle', 'wardrobe-handle', '1.webp'),
(3, 'Main Door Handle', 'Handle', 'main-door-handle', '1.webp'),
(4, 'Glass Door Handle', 'Handle', 'glass-door-handle', '1.webp'),
(5, 'Mortise Handle', 'Handle', 'mortise-handle', '1.webp'),
(6, 'Drawer Knob', 'Knob', 'drawer-knob', '1.webp'),
(7, 'Drawer Kadi', 'Kadi', 'drawer-kadi', '1.webp'),
(8, 'Sofa Leg', 'Leg', 'sofa-leg', '1.webp');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `contact_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`contact_id`, `fullname`, `email`, `mobile`, `message`, `created_at`) VALUES
(1, 'lakshay', 'lakshaysanhotra01835@gmail.com', '2147483647', '2147483647', '2024-03-21 10:20:52'),
(2, 'lakshay', 'lakshaysanhotra01835@gmail.com', '2147483647', '0', '2024-03-21 10:27:02'),
(3, 'lakshay', 'lakshaysanhotra1@gmail.com', '9990748478', '0', '2024-03-23 11:13:25'),
(4, 'lakshay', 'lakshaysanhotra1@gmail.com', '9990748478', '0', '2024-03-23 11:14:19'),
(5, 'lakshay', 'lakshaysanhotra01835@gmail.com', '123456789', '0', '2024-03-23 11:17:56'),
(6, 'lakshay', 'lakshaysanhotra01835@gmail.com', '123456789', '0', '2024-03-23 11:19:16'),
(7, 'lakshay', 'lakshaysanhotra1@gmail.com', '9990748478', '0', '2024-03-23 11:29:20'),
(8, 'lakshay', 'lakshaysanhotra01835@gmail.com', '9990748478', '0', '2024-03-26 05:28:12'),
(9, 'lakshay', 'lakshaysanhotra01835@gmail.com', '9990748478', '0', '2024-03-26 05:33:50'),
(10, 'lakshay', 'lakshaysanhotra01835@gmail.com', '9990748478', '0', '2024-03-26 05:34:08'),
(11, 'lakshay', 'lakshaysanhotra01835@gmail.com', '9990748478', '0', '2024-03-26 05:36:21'),
(12, 'lakshay', 'lakshaysanhotra01835@gmail.com', '9990748478', '0', '2024-03-26 05:36:31'),
(13, 'lakshay', 'lakshaysanhotra01835@gmail.com', '9990748478', '0', '2024-03-26 05:42:58'),
(14, 'lakshay', 'puneetsethi1609@gmail.com', '8888888888', '0', '2024-03-26 05:56:40'),
(15, 'puneet', 'puneetsethi1609@gmail.com', '2093485345', '0', '2024-03-26 05:57:14'),
(16, 'puneet', 'puneetsethi1609@gmail.com', '4555445554', '0', '2024-03-26 06:01:39'),
(17, 'lakshay', 'lakshaysanhotra@gmail.com', '32423424', '22342342', '2024-03-26 06:02:46'),
(18, 'lakshay', 'lakshaysanhotra@gmail.com', '345245345', '2147483647', '2024-03-26 06:03:06'),
(19, 'lakshay', 'puneetsethi1609@gmail.com', '23644624564', '0', '2024-03-26 06:05:41'),
(20, 'lakshay', 'lakshaysanhotra@gmail.com', '44354556345', '0', '2024-03-26 06:06:20'),
(21, 'lakshay', 'lakshaysanhotra01835@gmail.com', '12435142546', '0', '2024-03-26 06:07:43'),
(22, 'lakshay', 'lakshaysanhotra01835@gmail.com', '12435142546', '0', '2024-03-26 06:37:16'),
(23, 'puneet', 'lakshaysanhotra01835@gmail.com', '9999074847', '0', '2024-03-26 07:08:21'),
(24, 'lakshay', 'lakshaysanhotra01835@gmail.com', '9990748478', '0', '2024-03-26 07:13:16'),
(25, 'lakshay', 'lakshaysanhotra@gmail.com', '9990748478', '0', '2024-03-26 07:14:26'),
(26, 'lakshay', 'lakshaysanhotra@gmail.com', '9990748478', 'hello', '2024-03-26 07:16:55'),
(27, 'lakshay', 'lakshaysanhotra01835@gmail.com', '9990487146', 'hello', '2024-03-26 07:18:08'),
(28, 'lakshay', 'lakshaysanhotra01835@gmail.com', '9990487146', 'hello', '2024-03-26 07:19:05'),
(29, 'lakshay', 'lakshaysanhotra@gmail.com', '9990748478', 'hello', '2024-03-26 07:19:31'),
(30, 'lakshay', 'lakshaysanhotra@gmail.com', '9990748478', 'hello', '2024-03-26 07:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(300) NOT NULL,
  `product_slug` varchar(20) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `product_slug`, `product_price`, `product_desc`, `category_id`) VALUES
(1, 'Cabinet Handle 001', '1.webp', '1', 99, 'demo text text text text ', 1),
(2, 'Wardrobe Handle 001', '1.webp', '2', 99, 'demo text text text text ', 2),
(3, 'Wardrobe Handle 002', '2.webp', '3', 99, 'demo text text text text ', 2),
(4, 'Cabinet Handle 002', '2.webp', '4', 99, 'demo text text text text', 1),
(5, 'Cabinet Handle 003', '3.webp', '5', 99, 'demo text text text text', 1),
(6, 'Cabinet Handle 004', '4.webp', '6', 99, 'demo text text text text', 1),
(7, 'Cabinet Handle 005', '5.webp', '7', 99, 'demo text text text text', 1),
(8, 'Cabinet Handle 006', '6.webp', '8', 99, 'demo text text text text', 1),
(9, 'Cabinet Handle 007', '7.webp', '9', 99, 'demo text text text text', 1),
(10, 'Cabinet Handle 008', '8.webp', '10', 99, 'demo text text text text', 1),
(11, 'Cabinet Handle 009', '9.webp', '11', 99, 'demo text text text text', 1),
(12, 'Cabinet Handle 010', '10.webp', '12', 99, 'demo text text text text', 1),
(13, 'Cabinet Handle 011', '11.webp', '13', 99, 'demo text text text text', 1),
(14, 'Wardrobe Handle 003', '3.webp', '14', 99, 'demo text text text text', 2),
(15, 'Wardrobe Handle 004', '4.webp', '15', 99, 'demo text text text text', 2),
(16, 'Wardrobe Handle 005', '5.webp', '16', 99, 'demo text text text text', 2),
(17, 'Wardrobe Handle 006', '6.webp', '17', 99, 'demo text text text text', 2),
(18, 'Wardrobe Handle 007', '7.webp', '18', 99, 'demo text text text text', 2),
(19, 'Wardrobe Handle 008', '8.webp', '19', 99, 'demo text text text text', 2),
(20, 'Wardrobe Handle 009', '9.webp', '20', 99, 'demo text text text text', 2),
(21, 'Wardrobe Handle 010', '10.webp', '21', 99, 'demo text text text text', 2),
(22, 'Wardrobe Handle 011', '11.webp', '22', 99, 'demo text text text text', 2),
(23, 'Wardrobe Handle 012', '12.webp', '23', 99, 'demo text text text text', 2),
(24, 'Main door Handle 001', '1.webp', '24', 99, 'demo text text text text', 3),
(25, 'Main door Handle 002', '2.webp', '25', 99, 'demo text text text text', 3),
(26, 'Main door Handle 003', '3.webp', '26', 99, 'demo text text text text', 3),
(27, 'Main door Handle 004', '4.webp', '27', 99, 'demo text text text text', 3),
(28, 'Main door Handle 005', '5.webp', '28', 99, 'demo text text text text', 3),
(29, 'Main door Handle 006', '6.webp', '29', 99, 'demo text text text text', 3),
(30, 'Main door Handle 007', '7.webp', '30', 99, 'demo text text text text', 3),
(31, 'Main door Handle 008', '8.webp', '31', 99, 'demo text text text text', 3),
(32, 'Main door Handle 009', '9.webp', '32', 99, 'demo text text text text', 3),
(33, 'Main door Handle 010', '10.webp', '33', 99, 'demo text text text text', 3),
(34, 'Glass door Handle 001', '1.webp', '34', 99, 'demo text text text text', 4),
(35, 'Glass door Handle 002', '2.webp', '35', 99, 'demo text text text text', 4),
(36, 'Glass door Handle 003', '3.webp', '36', 99, 'demo text text text text', 4),
(37, 'Glass door Handle 004', '4.webp', '37', 99, 'demo text text text text', 4),
(38, 'Glass door Handle 005', '5.webp', '38', 99, 'demo text text text text', 4),
(39, 'Glass door Handle 006', '6.webp', '39', 99, 'demo text text text text', 4),
(40, 'Glass door Handle 007', '7.webp', '40', 99, 'demo text text text text', 4),
(41, 'Glass door Handle 008', '8.webp', '41', 99, 'demo text text text text', 4),
(42, 'Glass door Handle 009', '9.webp', '42', 99, 'demo text text text text', 4),
(43, 'Glass door Handle 010', '10.webp', '43', 99, 'demo text text text text', 4),
(44, 'Mortise Handle 001', '1.webp', '44', 99, 'demo text text text text', 5),
(45, 'Mortise Handle 002', '2.webp', '45', 99, 'demo text text text text', 5),
(46, 'Mortise Handle 003', '3.webp', '46', 99, 'demo text text text text', 5),
(47, 'Mortise Handle 004', '4.webp', '47', 99, 'demo text text text text', 5),
(48, 'Mortise Handle 005', '5.webp', '48', 99, 'demo text text text text', 5),
(49, 'Mortise Handle 006', '6.webp', '49', 99, 'demo text text text text', 5),
(50, 'Mortise Handle 007', '7.webp', '50', 99, 'demo text text text text', 5),
(51, 'Mortise Handle 008', '8.webp', '51', 99, 'demo text text text text', 5),
(52, 'Mortise Handle 009', '9.webp', '52', 99, 'demo text text text text', 5),
(53, 'Mortise Handle 010', '10.webp', '53', 99, 'demo text text text text', 5),
(54, 'Drawer Knob 001', '1.webp', '54', 99, 'demo text text text text', 6),
(55, 'Drawer Knob 002', '2.webp', '55', 99, 'demo text text text text', 6),
(56, 'Drawer Knob 003', '3.webp', '56', 99, 'demo text text text text', 6),
(57, 'Drawer Knob 004', '4.webp', '57', 99, 'demo text text text text', 6),
(58, 'Drawer Knob 005', '5.webp', '58', 99, 'demo text text text text', 6),
(59, 'Drawer Knob 006', '6.webp', '59', 99, 'demo text text text text', 6),
(60, 'Drawer Knob 007', '7.webp', '60', 99, 'demo text text text text', 6),
(61, 'Drawer Knob 008', '8.webp', '61', 99, 'demo text text text text', 6),
(62, 'Drawer Knob 009', '9.webp', '62', 99, 'demo text text text text', 6),
(63, 'Drawer Knob 010', '10.webp', '63', 99, 'demo text text text text', 6),
(64, 'Drawer Kadi 001', '1.webp', '64', 99, 'demo text text text text', 7),
(65, 'Drawer Kadi 002', '2.webp', '65', 99, 'demo text text text text', 7),
(66, 'Drawer Kadi 003', '3.webp', '66', 99, 'demo text text text text', 7),
(67, 'Drawer Kadi 004', '4.webp', '67', 99, 'demo text text text text', 7),
(68, 'Drawer Kadi 005', '5.webp', '68', 99, 'demo text text text text', 7),
(69, 'Drawer Kadi 006', '6.webp', '69', 99, 'demo text text text text', 7),
(70, 'Drawer Kadi 007', '7.webp', '70', 99, 'demo text text text text', 7),
(71, 'Drawer Kadi 008', '8.webp', '71', 99, 'demo text text text text', 7),
(72, 'Drawer Kadi 009', '9.webp', '72', 99, 'demo text text text text', 7),
(73, 'Drawer Kadi 010', '10.webp', '73', 99, 'demo text text text text', 7),
(74, 'Sofa leg 001', '1.webp', '74', 99, 'demo text text text text', 8),
(75, 'Sofa leg 002', '2.webp', '75', 99, 'demo text text text text', 8),
(76, 'Sofa leg 003', '3.webp', '76', 99, 'demo text text text text', 8),
(77, 'Sofa leg 004', '4.webp', '77', 99, 'demo text text text text', 8),
(78, 'Sofa leg 005', '5.webp', '78', 99, 'demo text text text text', 8),
(79, 'Sofa leg 006', '6.webp', '79', 99, 'demo text text text text', 8),
(80, 'Sofa leg 007', '7.webp', '80', 99, 'demo text text text text', 8),
(81, 'Sofa leg 008', '8.webp', '81', 99, 'demo text text text text', 8),
(82, 'Sofa leg 009', '9.webp', '82', 99, 'demo text text text text', 8),
(83, 'Sofa leg 010', '10.webp', '83', 99, 'demo text text text text', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
