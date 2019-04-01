-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 31, 2019 at 03:04 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `uniauction`
--
CREATE DATABASE IF NOT EXISTS `uniauction` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `uniauction`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item_information`
--

CREATE TABLE `item_information` (
  `account_id` varchar(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `color` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `item_condition` varchar(20) NOT NULL,
  `item_url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_information`
--

INSERT INTO `item_information` (`account_id`, `item_id`, `item_name`, `category`, `price`, `color`, `description`, `item_condition`, `item_url`) VALUES
('45', 31, 'Laptop', 'Electronics, Books & Computers', '1500', '#000000', 'Lenovo', 'New', ''),
('45', 32, 'Pillow', 'Home & Kitchenware', '10', '#000000', 'Memory foam', 'New', ''),
('45', 33, 'Biscuits', 'Food & Grocery', '13', '#000000', 'Chocolate coated', 'Very Good', ''),
('45', 34, 'Jeans', 'Clothes, Shoes & Watches', '40', '#000000', 'Levis', 'Like New', ''),
('45', 35, 'Hand cream', 'Health & Beauty', '20', '#000000', 'Some brand', 'Good', ''),
('45', 36, 'Headphones', 'Electronics, Books & Computers', '200', '#000000', 'Sony noise cancelling wireless', 'Like New', ''),
('45', 37, 'Computer book', 'Electronics, Books & Computers', '20', '#000000', 'Guide to computers', 'Like New', ''),
('45', 38, 'Stroopwaffels', 'Food & Grocery', '12', '#000000', 'Original Dutch', 'New', ''),
('45', 39, 'Japanese Knife', 'Home & Kitchenware', '24', '#000000', 'Forged by a master', 'Very Good', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `id` int(11) NOT NULL,
  `order_code` varchar(7) NOT NULL,
  `account_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `transaction_date` date NOT NULL,
  `transaction_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `account_id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `university` varchar(45) NOT NULL,
  `verified` int(11) NOT NULL COMMENT '0=no, 1=yes',
  `verificationCode` varchar(264) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`account_id`, `first_name`, `last_name`, `email`, `password`, `university`, `verified`, `verificationCode`) VALUES
(6, 'Keng Munn', 'Foong', 'km@gmail.com', '$2y$10$3vG5Y4zVfGMHzleuWuy7pO2k/dzaYMJ94cNlBHVdSjapgI3tURtHS', '', 1, ''),
(14, 'Bhargav', 'Parekh', 'bparekh2@gmail.com', '$2y$10$E9t1lNKNEfWgBG4IYdsop.ZEynoSPiDQWAPUHTWI2Fh2e/IZDtyni', '', 1, ''),
(23, 'km', 'f', 'km@hi.com', '$2y$10$aqP4Tw3p4rkWfzZxTnO3veJk4a35SwREooM70pq6x5dUYhE/ABfqS', '', 1, 'UykVr'),
(24, 'sdfa', 'asfd', 'asdf@a.com', '$2y$10$D4wDh9ik/rxtp.f.ykFpZuqS43ZmV1ncFpkIrva0yVRxD5iRadHz6', '', 1, 'cToA8'),
(25, 'asdf', 'fsda', 'fdsa@a.com', '$2y$10$FXVPORhbu1w1PKyKXByWierlhlFW/VNvFmHTJvtWlnWE4JwH6fCnS', '', 1, '9UkYw'),
(26, 'test', 'test', 'test@gmail.com', '$2y$10$xNIUcxBV9tbryL3dQd1PkOj2oNc0kXQnNJjkrrFPvQfI9IzUlWcxu', '', 1, ''),
(30, 'Jim', 'theCarrot', 'jimthecarrot@gmail.com', '$2y$10$CFJXrtamshFmfsB3u.ULEePXIqZamBBMCpknM5oy4pY20HmKn0vSC', '', 1, '20AoE'),
(31, 'domdomdom', 'domdom', 'zcemdki@ucl.ac.uk', '$2y$10$V3r4SQhdXiYrRYEyeWNs3uXOOiKoDTh/5yGwcLx8vl8D4vbyE7WFS', '', 1, 'BAWyZ'),
(33, 'doom', 'doom', 'doom@asdf.com', '$2y$10$TFVuobHQxAlyPeuDGCPxeOMDTGns5h4WtqJrxNBZgRjK/Y1phwKh6', '', 1, 'WojgV'),
(45, 'Keng Munn', 'Foong', 'kengmunnfoong2005@gmail.com', '$2y$10$u/wBc6OsTQ3vEQcUFKJ6LeJi/JJy3PVgujLsteTNhcyoCyMa3wBve', '', 1, 'cxARr'),
(46, 'Keng Munn', 'Foong', 'kengmfoong@gmail.com', '$2y$10$GqUa56k6sh/.g5JBJ5gtD.T8bOqhJH/G7Gi833pQuj6rrWQ0v.T3y', '', 1, 'LUJd0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_information`
--
ALTER TABLE `item_information`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `item_information`
--
ALTER TABLE `item_information`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `transaction_history`
--
ALTER TABLE `transaction_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
