-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2025 at 02:52 PM
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
-- Database: `gaming_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` enum('male','female','custom') NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `dob`, `gender`, `email`, `password`, `phone`, `status`) VALUES
(1, 'Rayyan Javed', '9-Dec-1999', 'male', 'rayyan@gmail.com', 'Rayyan@123', '03242339864', 'active'),
(2, 'Ahsan Zafar', '12-Dec-1997', 'male', 'ahsan@gmail.com', 'Ahsan@123', '03058456541', 'active'),
(4, 'Muhammad Huzaifa', '7-Nov-2010', 'female', 'mhz_123@gmail.com', 'Huzaifa@123', '03245487871', 'active'),
(7, 'Xena Hello', '22-May-1994', 'male', 'figugyhe@mailinator.com', 'Pa$$w0rd!', '03242339864', 'inactive'),
(8, 'Sir Faraz Basit', '14-Aug-1997', 'male', 'sirfaraz@gmail.com', 'SirFaraz@123', '03245487871', 'active'),
(9, 'Carlos', '23-Mar-2007', 'custom', 'tehowikag@mailinator.com', 'Pa$$w0rd!', '05211466351', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `shipping_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `total_amount`, `shipping_address`) VALUES
(2, 1, '2025-12-28', 47600.00, 'fb area'),
(3, 1, '2025-12-28', 52000.00, 'fb area');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_at_purchase` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price_at_purchase`) VALUES
(1, 2, 11, 2, 4500.00),
(2, 2, 9, 4, 3700.00),
(3, 3, 16, 1, 13000.00),
(4, 3, 15, 1, 13000.00);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `company`, `platform`, `genre`, `price`, `stock`, `image`, `status`) VALUES
(2, 'Animal Crossing - New Horizons', 'Nintendo', 'Nintendo', 'Platformer', 12000.00, 14, 'Animal_Crossing_New_Horizons.jpg', 'active'),
(9, 'BloodBorne', 'Bandai Namco', 'Playstation 4', 'Action, Adventure', 3700.00, 8, 'bloodborne.jpg', 'active'),
(11, 'Halo - Master Chief Collection', 'Bungee Studios', 'Xbox', 'Action, Shooter', 4500.00, 15, 'halo master chief xbox.jpg', 'active'),
(13, 'Kirby - The Forgotten Land', 'The Kirby Company', 'Nintendo', 'Adventure, Platformer', 21000.00, 9, 'KIRBY THE FORGOTTEN LAND.jpg', 'active'),
(14, 'Red Dead Redemption', 'Rockstar Studios', 'Playstation 5', 'Action, Adventure', 8000.00, 2, 'rdr1.jpg', 'active'),
(15, 'Forza Horizon 5', 'Microsoft', 'Xbox', 'Racing', 13000.00, 12, 'images (3).jpg', 'active'),
(16, 'Black Myth Wukong', 'Game Science', 'Playstation 5', 'Action, Souls-Like', 13000.00, 9, 'black myth wukong ps5.jpg', 'active'),
(17, 'Metroid Dread', 'Nintendo', 'Nintendo', 'Platformer', 18000.00, 5, 'METROID DREAD.jpg', 'active'),
(18, 'Assassins Creed Mirage', 'Ubisoft', 'Xbox', 'Action, Adventure', 9000.00, 24, 'assassins creed mirage xbox.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `status`) VALUES
(1, 'Rayyan Sheikh', 'Rayyan@123', 'admin@gmail.com', 'active'),
(2, 'Ahsan Zafar', 'Ahsan@123', 'admin@gmail.com', 'active'),
(5, 'Sir Faraz Basit', 'SirFarazBasit@123', 'sirfaraz@gmail.com', 'active'),
(9, 'Muhammad Huzaifa', 'Huzaifa@123', 'admin@gmail.com', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_id_order_customer` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `FK_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `FK_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
