-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 05:41 AM
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
-- Database: `onlinestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'Deepak', 'deepak@gmail.com', '9919167877', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `image`) VALUES
(1, 'men cloths', 'category.jpg'),
(2, 'women cloths', 'category.jpg'),
(3, 'grocery products', 'category.jpg'),
(4, 'cosmetic products', 'category.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Quin Strong', 'qiraj@mailinator.com', ''),
(2, 'Piper Bell', 'huwuzifigu@mailinator.com', 'Id non odio sit exce'),
(3, 'shivam', 'deepakmaurya8396@gmail.com', 'hey i am Deepak, I have some Query Regarding your Website');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderId` varchar(100) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `payMode` int(11) DEFAULT NULL,
  `paymentStatus` int(11) DEFAULT 0,
  `bookStatus` int(11) DEFAULT NULL,
  `qty` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderId`, `userId`, `productId`, `payMode`, `paymentStatus`, `bookStatus`, `qty`, `total`, `createdAt`, `updatedAt`) VALUES
(25, 'Nash1696357293644@kmc', 14, 2, 2, 0, 0, '50', '20000', '2023-10-03 18:21:33', '2023-10-03 18:21:33'),
(26, 'Nash1696357422411@kmc', 14, 2, 2, 0, 0, '50', '20000', '2023-10-03 18:23:42', '2023-10-03 18:23:42'),
(27, 'Nash1696530469708@kmc', 14, 24, 1, 0, 0, '50', '15000', '2023-10-05 18:27:49', '2023-10-05 18:27:49'),
(28, 'Nash1696530469708@kmc', 14, 23, 1, 0, 0, '50', '15000', '2023-10-05 18:27:49', '2023-10-05 18:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `skuCode` varchar(50) DEFAULT NULL,
  `image1` varchar(50) DEFAULT NULL,
  `image2` varchar(50) DEFAULT NULL,
  `image3` varchar(50) DEFAULT NULL,
  `image4` varchar(50) DEFAULT NULL,
  `image5` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `availbility` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categoryId`, `name`, `skuCode`, `image1`, `image2`, `image3`, `image4`, `image5`, `price`, `availbility`) VALUES
(2, 1, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '400', 0),
(3, 1, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 1),
(4, 1, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(5, 2, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(6, 1, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '400', 0),
(7, 3, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '600', 0),
(8, 2, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 1),
(9, 4, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(10, 2, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(11, 2, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(12, 2, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(13, 2, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(14, 3, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 1),
(15, 2, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(16, 2, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(17, 1, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(18, 2, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(19, 2, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(20, 4, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 1),
(21, 2, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(22, 2, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 1),
(23, 3, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(24, 2, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '300', 0),
(25, 1, 'iphone 12 pro max', NULL, 'iphone.jpg', NULL, NULL, NULL, NULL, '800', 0);

-- --------------------------------------------------------

--
-- Table structure for table `taxsetting`
--

CREATE TABLE `taxsetting` (
  `id` int(11) NOT NULL,
  `taxName` varchar(50) DEFAULT NULL,
  `amount` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taxsetting`
--

INSERT INTO `taxsetting` (`id`, `taxName`, `amount`) VALUES
(1, 'productPrice', 12),
(2, 'shipping', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `pinCode` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `password`, `pic`, `address`, `pinCode`, `city`, `state`) VALUES
(14, NULL, '9919168088', 'deepak@gmail.com', '$2y$10$Yt2iZMeH/JKuZv9p4A8nbuwMUmkaKP.X1ZeuSoOHxsL8vs0Z/uJf.', NULL, NULL, NULL, NULL, NULL),
(15, NULL, '3498732984', 'ziwulopigo@mailinator.com', '$2y$10$33swRQl9MAhJm273fgBenObeZeGvY5/iqQ/nsUtrHM7fo7c2lWXua', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `productId` (`productId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `taxsetting`
--
ALTER TABLE `taxsetting`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `productId` (`productId`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `taxsetting`
--
ALTER TABLE `taxsetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
