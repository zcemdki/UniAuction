-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 12:50 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, '', '', '', '', '$2y$10$/.mdcRzcnYcY5biQzCgAhOiLqsKkAwwOt..cptt4EUXY7AntMeR2q'),
(2, 'test', 'test123', 'test@hotmail.com', 'Test', '$2y$10$kQjHNNvdZU3k.flEvqsas.dS0XL/otRAZVHkzLF30..CqZ.URoxz2'),
(3, 'Dominic', 'KP', 'Iloveprogramming', 'hatelife', '$2y$10$lWk3r9ukZdFhkqfMpLGVwOiH.HIPQ54xwXjPHbwSwb.4efaFBWgJa'),
(4, 'Test 10', 'tester', 'test@hotmail.com', 'test', '$2y$10$LpdrnfZ2EOn4L/kDAfvpjeIZSSYMO6GnpPIWg8pDFPrrEGdVcVQP2'),
(6, 'Frank', 'Cray', 'Frankcray@hotmail.com', 'Frank1234', '$2y$10$ZogDnwx4wb4LeRiVlWIed.tq2peq9fZvjiunHSuRSR8klR83go3xy'),
(10, 'Dominic', 'KP', 'zcemdki@ucl.ac.uk', 'zcemdki', '$2y$10$Q9fY2arqoT3TgNwAT8Plvuf4aRZYjLEVKcSvH5c8QZJ1erfe.qope'),
(12, 'hello', 'hello', 'gello@gmail.com', 'hello', '$2y$10$1fw38KB4KJnsgKvvRU0jr.AzZ3fhjL4QNXw1psk8FmcEC3LXCka5O'),
(13, 'gjgg', 'jhihhh', 'qwerty@hotmail.com', 'qwerty', '$2y$10$o02Zm6u4SRGixdNLeoPmOeCT3STDMefnuWScZ3hBvWuNFXewXwJmy'),
(14, 'dyqjdj', 'fjkhfkwh', 'joeisacunt@ucl.ac.uk', 'joeisacunt', '$2y$10$pL0cXrnwwk7lRAzM587cmeGd89la2WLqhrLrC.E55APQ8hHVH7Zb.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
