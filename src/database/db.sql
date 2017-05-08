-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 03:42 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `Authentication` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authentication`
--

INSERT INTO `Authentication` (`id`, `user`, `session`, `is_delete`) VALUES
(1, 1, '354bdf8ca36af1f312394ba36f49cad1', 0),
(2, 3, '3aa0960c50b9fda90cf967b1da7b5442', 0),
(3, 5, '41e0a85c244abf250c1953e78ef30986', 0),
(4, 8, 'f54d8b864b188cda526fc93c2bd09e39', 0),
(5, 2, 'e73c8d1ba5b2740830a8510a67f0d082', 0),
(6, 7, 'dc9863d23a37b58fb548ef72cb1ae9f7', 0),
(7, 10, 'c744f8e74b9c89a09d998f1c8a3d1cbd', 0),
(8, 4, 'a9a42bca121cae0d6058dc9070516019', 0),
(9, 9, 'eff24af34d3d13fe219aa0ec4859ed0f', 0),
(10, 6, '4704d3964d9c57d3e15f964d72f5d8db', 0);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `Book` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `producerId` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `total_cost` double NOT NULL,
  `time` date NOT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `book`
--

INSERT INTO `Book` (`id`, `productId`, `producerId`, `user`, `total_cost`, `time`, `is_delete`) VALUES
(1, 1, 2, 3, 1500, '2017-05-06', 0),
(2, 5, 2, 5, 100, '2017-05-03', 0),
(3, 4, 6, 1, 10, '2017-05-02', 0),
(4, 7, 7, 7, 3, '2017-05-04', 0),
(5, 9, 9, 3, 10000, '2017-05-01', 0),
(6, 3, 4, 5, 200, '2017-04-20', 0),
(7, 2, 2, 3, 700, '2017-04-25', 0),
(19, 5, 2, 3, 100, '2017-05-07', 0),
(20, 22, 4, 3, 800, '2017-05-07', 0),
(21, 9, 9, 3, 10000, '2017-05-07', 0),
(22, 8, 8, 3, 15, '2017-05-07', 0),
(24, 25, 2, 10, 5, '2017-05-07', 0),
(25, 1, 2, 2, 1500, '2017-05-08', 0),
(26, 9, 9, 2, 10000, '2017-05-08', 0),
(27, 9, 9, 4, 10000, '2017-05-08', 0),
(28, 6, 7, 4, 3, '2017-05-08', 0),
(29, 33, 4, 10, 2000, '2017-05-08', 0),
(31, 33, 4, 3, 2000, '2017-05-08', 0),
(33, 4, 6, 3, 10, '2017-05-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `Product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` int(11) NOT NULL,
  `cost` double NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `Product` (`id`, `name`, `user`, `cost`, `type`, `description`, `is_delete`) VALUES
(1, 'laptop', 2, 1500, 'technology', 'Power-efficient, latest version of our product, beautiful design.', 0),
(2, 'Galaxy S8', 2, 700, 'technology', 'Last version of Galaxy models. More reliable than previous version Galaxy S7', 0),
(3, 'Smart Watch', 4, 200, 'technology', 'Very smart watches that can help you anytime, anywhere. It has many features. Enjoy it!', 0),
(4, 'Pizza', 6, 10, 'food', 'Very delicious pizzas for your lunch. You can order it anytime', 0),
(5, 'Washing Car', 2, 100, 'technology', 'Comfortable washing machines that helps you to save your time.', 0),
(6, 'CocaCola', 7, 3, 'drink', 'CocaCola... It gives you everything you want.', 0),
(7, 'Fanta', 7, 3, 'drink', 'Happy life with Fanta', 0),
(8, 'Ultra Boost', 8, 15, 'clothes', 'Beatiful design and the best choice.', 0),
(9, 'Malibu', 9, 10000, 'cars', 'The best friend to make your life easy', 0),
(22, 'iphone', 4, 800, 'technology', 'The best', 0),
(23, 'jacket', 8, 30, 'clothes', 'The best clothe in cold and hot weather', 0),
(24, 'Football ball', 8, 10, 'other', 'The best ball for World Cup Championships', 0),
(25, 'earphone', 2, 5, 'technology', 'Enjoy listening to music with the earphones. Nobody hears you!', 0),
(26, 'Galaxy', 3, 200, 'technology', 'I need money', 0),
(27, 'Spark', 10, 5000, 'cars', 'It has been one year since I bought', 1),
(28, 'Spark', 10, 5000, 'cars', 'It has been a year since I bought it.', 1),
(29, 'Spark', 10, 5000, 'cars', 'Awesome', 1),
(30, 'dsfgdsf', 10, 0, 'clothes', 'dfsgsdfg', 1),
(31, 's', 10, 0, 'food', 'sdhfsdf', 1),
(32, 'TV', 2, 200, 'technology', 'The beautiful design with HD quality.', 0),
(33, 'MacBook', 4, 2000, 'technology', 'The best laptop to help you anytime and anywhere', 0),
(34, 'Air condition', 2, 300, 'technology', 'Your best friend in summer and winter', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `user_type` varchar(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `User` (`id`, `username`, `password`, `full_name`, `user_type`, `email`, `is_delete`) VALUES
(1, 'tom', 'aprel12aprel15', 'Tulkinjon Isoqov', '0', 'isoqov12@gmail.com', 0),
(2, 'Samsung', 'samsung', 'Samsung Electronics Company', '1', 'samsung@gmail.com', 0),
(3, 'Sherzodbek', 'sher12345', 'Sherzodbek Tojimahammatov', '0', 'tojimahammatov@gmail.com', 0),
(4, 'apple', 'apple123', 'Apple Company', '1', 'apple@gmail.com', 0),
(5, 'sardor', 'sardor123', 'Sardor Islomov', '0', 'sardor@gmail.com', 0),
(6, 'McDonalds', 'donald123', 'McDonalds Coorporation', '1', 'mcdonald@gmail.com', 0),
(7, 'CocaCola', 'cocacola', 'CocaCola Company ', '1', 'cocacola@gmail.com', 0),
(8, 'adidas', 'adidasgo', 'Adidas', '1', 'adidas@hotmail.com', 0),
(9, 'chevrolet', 'chevrolet', 'Chevrolet Company', '1', 'chevrolet@gmail.com', 0),
(10, 'Shohobiddin', '12345', 'Shohobiddin Urmanov', '0', 'urmanov@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authentication`
--
ALTER TABLE `Authentication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authentication`
--
ALTER TABLE `Authentication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `Book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `Product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
