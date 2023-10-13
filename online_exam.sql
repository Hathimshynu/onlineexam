-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 04:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `selected_answer` varchar(100) NOT NULL,
  `correct_answer` varchar(100) NOT NULL,
  `is_correct` varchar(100) NOT NULL,
  `exam_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_result`
--

INSERT INTO `exam_result` (`id`, `username`, `question`, `selected_answer`, `correct_answer`, `is_correct`, `exam_date`) VALUES
(1, '1000', 'Question 1', 'Paris', 'paris', '0', '2023-10-12 19:37:00'),
(2, '1000', 'Question 2', 'Elephant', 'camel', '0', '2023-10-12 19:37:00'),
(3, '1000', 'Question 3', '8 days', '7 days', '0', '2023-10-12 19:37:00'),
(4, '1000', 'Question 4', '28 hours', '24 hours', '0', '2023-10-12 19:37:01'),
(5, '1000', 'Question 5', '26 letters', '26 letters', '1', '2023-10-12 19:37:01'),
(6, '1000', 'Question 6', '7 colours', '7 colours', '1', '2023-10-12 19:37:01'),
(7, '1000', 'Question 7', '365 days', '365 days', '1', '2023-10-12 19:37:01'),
(8, '1000', 'Question 8', '69 minutes', '60 minutes', '0', '2023-10-12 19:37:01'),
(9, '1000', 'Question 9', 'giraffe', 'tiger', '0', '2023-10-12 19:37:01'),
(10, '1000', 'Question 10', 'mango', 'mango', '1', '2023-10-12 19:37:01'),
(11, '1000', 'Question 1', 'Paris', 'paris', '0', '2023-10-12 19:44:31'),
(12, '1000', 'Question 2', 'Camel', 'camel', '0', '2023-10-12 19:44:31'),
(13, '1000', 'Question 3', '5 days', '7 days', '0', '2023-10-12 19:44:31'),
(14, '1000', 'Question 4', '12 hours', '24 hours', '0', '2023-10-12 19:44:31'),
(15, '1000', 'Question 5', '20 letters', '26 letters', '0', '2023-10-12 19:44:31'),
(16, '1000', 'Question 6', '9 colours', '7 colours', '0', '2023-10-12 19:44:31'),
(17, '1000', 'Question 7', '367 days', '365 days', '0', '2023-10-12 19:44:31'),
(18, '1000', 'Question 8', '69 minutes', '60 minutes', '0', '2023-10-12 19:44:31'),
(19, '1000', 'Question 9', 'giraffe', 'tiger', '0', '2023-10-12 19:44:31'),
(20, '1000', 'Question 10', 'banana', 'mango', '0', '2023-10-12 19:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `login_success`
--

CREATE TABLE `login_success` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `network_ip` varchar(100) NOT NULL,
  `system_ip` varchar(100) NOT NULL,
  `browser_details` varchar(100) NOT NULL,
  `server_name` varchar(100) NOT NULL,
  `user_city` varchar(100) DEFAULT NULL,
  `user_state` varchar(100) DEFAULT NULL,
  `user_country` varchar(100) DEFAULT NULL,
  `login_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_success`
--

INSERT INTO `login_success` (`id`, `username`, `network_ip`, `system_ip`, `browser_details`, `server_name`, `user_city`, `user_state`, `user_country`, `login_date`) VALUES
(1, '1000', '::1', '{\n  \"ip\": \"110.224.84.144\",\n  \"city\": \"Chennai\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  \"loc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-03 09:36:21'),
(2, '1001', '::1', '{\n  \"ip\": \"106.203.6.100\",\n  \"city\": \"Tiruchirappalli\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-07 10:59:09'),
(3, '1001', '::1', '{\n  \"ip\": \"106.203.6.100\",\n  \"city\": \"Tiruchirappalli\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-07 11:01:45'),
(4, '1000', '::1', '{\n  \"ip\": \"106.197.139.114\",\n  \"city\": \"Coimbatore\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  ', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-07 18:00:34'),
(5, '1001', '::1', '{\n  \"ip\": \"42.106.179.142\",\n  \"city\": \"Kozhikode\",\n  \"region\": \"Kerala\",\n  \"country\": \"IN\",\n  \"loc\":', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-08 07:27:52'),
(6, '1001', '::1', '{\n  \"ip\": \"223.187.116.64\",\n  \"city\": \"Chennai\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  \"loc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-08 12:45:07'),
(7, '1001', '::1', '{\n  \"ip\": \"223.187.112.28\",\n  \"city\": \"Chennai\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  \"loc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-09 14:10:36'),
(8, '1002', '::1', '{\n  \"ip\": \"223.187.115.68\",\n  \"city\": \"Chennai\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  \"loc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-09 18:06:39'),
(9, '1002', '::1', '{\n  \"ip\": \"223.187.116.35\",\n  \"city\": \"Chennai\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  \"loc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-10 17:32:43'),
(10, '1000', '::1', '{\n  \"ip\": \"223.187.116.35\",\n  \"city\": \"Chennai\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  \"loc', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-10 20:24:11'),
(11, '1000', '::1', '{\n  \"ip\": \"106.203.43.83\",\n  \"city\": \"Injambakkam\",\n  \"region\": \"Tamil Nadu\",\n  \"country\": \"IN\",\n  \"', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Sa', 'DESKTOP-9K1D2EQ', NULL, NULL, NULL, '2023-10-12 11:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `pwd_hint` varchar(100) NOT NULL,
  `mob` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `pin` int(20) NOT NULL,
  `entry_date` datetime NOT NULL,
  `login_count` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `username`, `pwd`, `pwd_hint`, `mob`, `email`, `fname`, `lname`, `city`, `country`, `state`, `dob`, `gender`, `image`, `pin`, `entry_date`, `login_count`) VALUES
(1, '1000', '6056620c4282ec612a293960bde694bad423720b', 'BjexHr3S', 2147483647, 'hathimshynu@gmail.com', 'hathim', 'hathim', '', '', '', '2023-10-11', 'male', '637115b64bd4b9f99e7ae8b8c2dcb558.jpg', 629162, '2023-10-12 11:54:13', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_success`
--
ALTER TABLE `login_success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_result`
--
ALTER TABLE `exam_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login_success`
--
ALTER TABLE `login_success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
