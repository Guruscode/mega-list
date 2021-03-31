-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2018 at 08:56 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `anakle`
--

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `address`) VALUES
(1, 'sdfdsf', ''),
(2, 'sdfdsf', ''),
(3, 'fdgdfgdf', ''),
(4, 'dfsdfds', ''),
(5, 'dfsdfds', ''),
(6, 'dsfsfds', ''),
(7, 'adsfdsfds', 'ssssss'),
(8, 'I am a store', 'Adresdvdsgfdg '),
(9, 'dfdsgdf', 'gdfgdf'),
(10, 'sdfdsgfd', 'sdfgdsfsd'),
(11, 'sgdfgdf', 'gdfgdf'),
(12, 'I am here', 'fdsgdsgdfs '),
(13, 'dsfds', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'rds', 'dfsd', 'fsfsd'),
(2, 'rds', 'dfsd', 'fsfsd'),
(3, 'rds', 'dfsd', 'md5(fsfsd)'),
(4, 'Ser', 'xyluz@ymail.com', '0b25ba7bbccaee97789c8021f9cd0d33'),
(5, 'Seyi Onifade', 'gidxyluz@gmail.com', '98a7e0c29dafc9fa1d0db5f335c7177c'),
(6, 'Seyi Onifade', 'xyluz@ymail.com', 'e8b948a37a8bf52aabc373853d5f2be1'),
(7, 'Seyi Onifade', 'gidxyluz@gmail.com', '98a7e0c29dafc9fa1d0db5f335c7177c'),
(8, 'Seyi Onifade', 'xyluz@ymail.com', '98a7e0c29dafc9fa1d0db5f335c7177c'),
(9, 'Seyi Onifade', 'm@c.com', '98a7e0c29dafc9fa1d0db5f335c7177c'),
(10, 'Seyi Onifade', 'm@c.com', '98a7e0c29dafc9fa1d0db5f335c7177c'),
(11, 'W', 'g@c.c', '98a7e0c29dafc9fa1d0db5f335c7177c'),
(12, 'see', 'xyluz@yms.com', '4cfe44cf9d079c1a1ac8e97f7cb640e0'),
(13, 'uuu', 'u@.com', '98a7e0c29dafc9fa1d0db5f335c7177c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
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
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
