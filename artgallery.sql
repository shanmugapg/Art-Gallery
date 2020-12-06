-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 04:04 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artgallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `aregister`
--

CREATE TABLE `aregister` (
  `id` int(10) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `ph` varchar(10) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aregister`
--

INSERT INTO `aregister` (`id`, `username`, `password`, `ph`, `email`) VALUES
(1, 'admin', 'AD123', '1234567890', 'admin@gmail.com'),
(2, 'priya', 'priya', '1234598760', 'priya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(10) NOT NULL,
  `aname` varchar(225) NOT NULL,
  `ph` varchar(10) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `aname`, `ph`, `email`) VALUES
(1, 'Veekas', '9456778823', 'veekas@gmail.com'),
(2, 'A.Das', '9888123451', 'adas@gmail.com'),
(3, 'Lakshaya', '9253686712', 'lakshaya@gmail.com'),
(4, 'KC Paliya', '9000156781', 'paliyakc@gmail.com'),
(5, 'Deepika Parashar', '8976342135', 'deepikap@gmail.com'),
(6, 'Rahul Jain', '7895612345', 'jainrahul@gmail.com'),
(7, 'Moti Lal', '7894123415', 'mlal@gmail.com'),
(8, 'Suraj Kumar', '9734578961', 'skumar@gmail.com'),
(9, 'Lalit Singh', '9073037888', 'singhlalit@gmail.com'),
(10, 'Anita Kohli', '9734598961', 'akohli@gmail.com'),
(11, 'RS Agarwal', '7685423415', 'rsagarwal@gmail.com'),
(12, 'Rohini', '8965473214', 'rohini@gmail.com'),
(13, 'Prateek Agarwal', '7023368884', 'pagarwal@gmail.com'),
(14, 'Yash Raj', '9056783241', 'yashr@gmail.com'),
(15, 'Aditi Agarwal', '9413858889', 'agarwalanju468@gmail.com'),
(16, 'Aditi Khemka', '7073037888', 'aditikhemka03@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
  `id` int(10) NOT NULL,
  `artist_id` int(10) NOT NULL,
  `arname` varchar(225) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artwork`
--

INSERT INTO `artwork` (`id`, `artist_id`, `arname`, `price`) VALUES
(1, 0, 'After Rain Bliss', '10000'),
(2, 0, 'The Sparrow', '6000'),
(3, 0, 'AUTUMN COUPLE', '11000'),
(4, 0, 'Moment Of Raindrops', '15000'),
(5, 0, 'Ganesha', '9000'),
(6, 0, 'The Cool Chimp', '18000'),
(7, 0, 'Radha-Krishna', '25000'),
(8, 0, 'Vintage Wall', '8000'),
(9, 0, 'Weaver', '9000'),
(10, 0, 'The Horses', '12000'),
(11, 0, 'The Shiva', '20000'),
(12, 0, 'Enchanted Garden', '17000'),
(13, 0, 'Confusion Colors', '13000'),
(14, 0, 'Gautum Buddha', '10000'),
(15, 0, 'London Telephone Booth', '21000'),
(16, 0, 'The Flower', '12000');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `name` varchar(225) NOT NULL,
  `c_id` int(10) NOT NULL,
  `a_id` int(10) NOT NULL,
  `address` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `payment` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `zip` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `c_id`, `a_id`, `address`, `city`, `payment`, `state`, `zip`) VALUES
(1, 'Aditi Khemka', 0, 1, 'Geeta Bhawan,petch Area', 'Bhilwara', 'CASH ON DELIVERY', 'Rajasthan', '311001'),
(3, 'Aakansha', 0, 1, 'talwandi', 'kota', 'CASH ON DELIVERY', 'Rajasthan', '311020'),
(4, 'Aakansha', 0, 4, 'talwandi', 'kota', 'CASH ON DELIVERY', 'Rajasthan', '311020'),
(5, 'Vatasal Singh', 0, 8, 'iit roorke', 'Roorke', 'CASH ON DELIVERY', 'Uttrakhand', '311029'),
(6, 'Aarushi', 0, 10, 'Vaishali Nagar', 'Ajmer', 'CASH ON DELIVERY', 'Rajasthan', '312020'),
(7, 'Aarushi', 0, 12, 'Vaishali Nagar', 'Ajmer', 'CASH ON DELIVERY', 'Rajasthan', '312020'),
(9, 'Aditi Khemka', 0, 7, 'Geeta Bhawan,petch Area', 'Bhilwara', 'CASH ON DELIVERY', 'Rajasthan', '311001'),
(10, 'yukta', 0, 11, 'sector 45', 'Noida', 'CASH ON DELIVERY', 'UP', '300167'),
(11, 'yukta', 0, 6, 'sector 45', 'Noida', 'CASH ON DELIVERY', 'UP', '300167'),
(12, 'Aditi Khemka', 0, 13, 'Geeta Bhawan,petch Area', 'Bhilwara', 'CASH ON DELIVERY', 'Rajasthan', '311001'),
(33, 'Yukta', 0, 9, 'sector 45', 'Noida', 'CASH ON DELIVERY', 'UP', '300167'),
(34, 'Aditi Khemka', 0, 5, 'Geeta Bhawan,petch Area', 'Bhilwara', 'CASH ON DELIVERY', 'Rajasthan', '311001'),
(35, 'Vatasal Singh', 0, 4, 'iit roorke', 'Roorke', 'CASH ON DELIVERY', 'Uttrakhand', '311029'),
(36, 'yukta', 0, 2, 'sector 45', 'Noida', 'CASH ON DELIVERY', 'UP', '300167'),
(37, 'Rohit', 0, 15, 'Andheri,WEST', 'Mumbai', 'CASH ON DELIVERY', 'Maharashtra', '321456'),
(38, 'Aditi Khemka', 0, 3, 'sector 45', 'Noida', 'CASH ON DELIVERY', 'UP', '300167'),
(39, 'Rohit', 0, 9, 'Andheri,WEST', 'Mumbai', 'CASH ON DELIVERY', 'Maharashtra', '321456'),
(40, 'Bhawana', 0, 4, 'mody university', 'lakshmangrah', 'CASH ON DELIVERY', 'Rajasthan', '332311'),
(41, 'Aditi Khemka', 0, 6, 'mody university', 'lakshmangrah', 'CASH ON DELIVERY', 'Rajasthan', '332311'),
(42, 'prateek', 0, 6, 'Geeta Bhawan,petch Area', 'Bhilwara', 'CASH ON DELIVERY', 'Rajasthan', '311001'),
(43, 'samridhi', 0, 1, 'mody university', 'lakshmangrah', 'CASH ON DELIVERY', 'Rajasthan', '332311'),
(44, 'Aadita', 0, 3, 'mody university', 'lakshmangrah', 'CASH ON DELIVERY', 'Rajasthan', '332311'),
(45, 'abc', 0, 11, 'Vaishali Nagar', 'Ajmer', 'CASH ON DELIVERY', 'Rajasthan', '312020');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `ph` varchar(10) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `ph`, `email`) VALUES
(1, 'Aditi Khemka', 'aditi', '7073037888', 'aditik@gmail.com'),
(2, 'Vatasal Singh', 'vatsala', '9456778823', 'vatsala@gmail.com'),
(3, 'Aakansha', '123', '9034526172', 'aakansha@gmail.com'),
(4, 'Aarushi', '1234', '9462255264', 'aarushi@gmail.com'),
(5, 'Yukta', 'yukta', '9456778823', 'yukta@gmail.com'),
(6, 'Rohit', 'rohit', '7896454321', 'rohit@gmail.com'),
(7, 'Bhawana', 'bhawana', '8890946969', 'bhawana@gmail.com'),
(8, 'prateek', 'prateek', '7023368884', 'prateek@gmail.com'),
(9, 'samridhi', 'samridhi', '9979706570', 'sam@gmail.com'),
(10, 'Aadita', 'aadita', '9888123451', 'aadita@gmail.com'),
(11, 'abc', 'abc', '1244545678', 'veekas@gmail.com'),
(12, 'Anju', 'anju', '7023388860', 'anju@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aregister`
--
ALTER TABLE `aregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`,`a_id`),
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aregister`
--
ALTER TABLE `aregister`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artwork`
--
ALTER TABLE `artwork`
  ADD CONSTRAINT `artwork_ibfk_1` FOREIGN KEY (`id`) REFERENCES `artist` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `artwork` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`name`) REFERENCES `register` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
