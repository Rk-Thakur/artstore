-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 12, 2021 at 10:25 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ARTSTORE`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `file`, `topic`, `description`) VALUES
(1, 'category-1.jpg', 'Art Store', '            fingerstache pitchfork.umami snackwave tilde chillwave ugh. Pour-over meditation PBR&B pickled ennui celiac mlkshk freegan photo booth af fingerstache pitchfork.                  fingerstache pitchfork.umami snackwave tilde chillwave ugh. Pour-over meditation PBR&B pickled ennui celiac mlkshk freegan photo booth af fingerstache pitchfork.                  ');

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `id` int(11) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `price` int(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `pieces` int(10) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`id`, `file`, `topic`, `price`, `type`, `pieces`, `description`) VALUES
(1, 'category-2.jpg', 'Man Walking  to street ', 2312, 'Feature', 3, 'sdfasd'),
(2, 'category-3.jpg', 'Man Walking  to street ', 12349, 'Feature', 5, '      Lorem ipsum dolor sit amet consectetur\r\nadipisicing elit. Maiores blanditiis vitae sequi minima vero adipisci repellat numquam debitis obcaecati soluta ad quasi, odit perspiciatis sed. Similique eius sequi vero velit?Lorem ipsum dolor sit amet consectetur\r\nadipisicing elit. Maiores blanditiis vitae sequi minima vero adipisci repellat numquam debitis obcaecati soluta ad quasi, odit perspiciatis sed. Similique eius sequi vero velit?'),
(4, 'category-1.jpg', 'dfads', 2342, 'Latest', 3, '      dfLorem ipsum dolor sit amet consectetur\r\nadipisicing elit. Maiores blanditiis vitae sequi minima vero adipisci repellat numquam debitis obcaecati soluta ad quasi, odit perspiciatis sed. Similique eius sequi vero velit?'),
(5, 'gallery-2.jpg', 'fasd', 2343, 'Feature', 3, '      Lorem ipsum dolor sit amet consectetur\r\nadipisicing elit. Maiores blanditiis vitae sequi minima vero adipisci repellat numquam debitis obcaecati soluta ad quasi, odit perspiciatis sed. Similique eius sequi vero velit?'),
(6, 'category-1.jpg', 'sdfa', 3423, 'Feature', 232, '      fsffa'),
(7, 'category-2.jpg', 'fasdkjq', 21321, 'Feature', 234, '      adkfjasdncpa;sd '),
(10, 'category-2.jpg', 'asdfasdfaskjd', 123, 'Latest', 123, '      asfasd'),
(12, 'category-1.jpg', 'ram', 341, 'Feature', 2332, '      sdfdfs');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `topic1` varchar(100) NOT NULL,
  `topic2` varchar(100) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `file`, `topic1`, `topic2`, `description`) VALUES
(3, 'image1.png', 'Give Your Work', 'A New Style!', '      Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores blanditiis vitae sequi minima vero adipisci repellat numquam debitis obcaecati soluta ad quasi, odit perspiciatis sed. Similique eius sequi vero velit?      ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(12, 'ranjan', 'ranjan'),
(13, 'dhiren', '(*^!!&$#^#Ranjan');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`) VALUES
(7, 'fasdjfkl', 't@gmail.com', 'lkajsdfklasdf asdfk oapsd'),
(8, 'fasdjfkl', 't@gmail.com', 'lkajsdfklasdf asdfk oapsd'),
(13, 'aama', 'a@gmail.com', 'Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter'),
(14, 'aama', 'a@gmail.com', 'Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter'),
(15, 'aama', 'a@gmail.com', 'Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter'),
(16, 'aama', 'a@gmail.com', 'Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter'),
(17, 'aama', 'a@gmail.com', 'Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter'),
(18, 'aama', 'a@gmail.com', 'Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `oid` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `id` int(100) NOT NULL,
  `image_name` varchar(500) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`oid`, `fullname`, `address`, `phone`, `email`, `id`, `image_name`, `payment`, `Date`) VALUES
(7, 'Ranjan Thakur', 'Kathmandu, Baneshwor, Nepal', 123456789, 'tranjan@gmail.com', 2, 'Man Walking to street', 'Cash on Hand', '2021-09-11'),
(8, 'Astha Thapa', 'Kathmandu, Baneshwor, Nepal', 9810290602, 'ashta@gmail.com', 1, 'Man Walking to street', 'Cash on Hand', '2021-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `fullname`, `feedback`) VALUES
(2, 'Om Prakash Thakur', '      ksdkflasd aji asnd asdf asdf\r\n'),
(3, 'Om Praksh Thakur', '      djflkajdskasdfjklajsdfaksjdfa sjdfkasdfjklajsdfaksjdfa sjdfkasdfjklajsdfaksjdfa sjdf kasdfjklajsdfaksjdfa sjdfkasdfjklajsdfaksjdfa sjdfkasdfjklajsdfaksjdfa sjdf kasdfjklajsdfaksjdfa sjdfkasdfjklajsdfaksjdfa sjdfkasdfjklajsdfaksjdfa sjdf kasdfjklajsdfaksjdfa sjdfkasdfjklajsdfaksjdfa sjdfkasdfjklajsdfaksjdfa sjdf\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `message`, `date`) VALUES
(19, 'ranj', '2021-09-11 06:11:50'),
(20, 'rnajndfa ', '2021-09-11 18:36:01'),
(21, 'asdfjka', '2021-09-11 18:36:18'),
(22, 'fjaksld', '2021-09-11 18:36:20'),
(23, 'jfkasd', '2021-09-11 18:36:22'),
(24, 'jflkasd', '2021-09-11 18:36:24'),
(25, 'fjkasd', '2021-09-11 18:36:26'),
(26, '      fingerstache pitchfork.umami snackwave tilde chillwave ugh. Pour-over meditation PBR&B pickled ennui celiac mlkshk freegan photo booth af fingerstache pitchfork.            ', '2021-09-11 18:36:29'),
(27, 'fskdjfla', '2021-09-11 18:36:33'),
(28, 'jfksdjfa', '2021-09-11 18:36:36'),
(29, 'fasdkjfasd', '2021-09-11 18:36:39'),
(30, 'kasjdflkasd', '2021-09-11 18:36:43'),
(31, 'skjfkldfjsa', '2021-09-11 18:36:44'),
(32, 'kasdjfasdkf      fingerstache pitchfork.umami snackwave tilde chillwave ugh. Pour-over meditation PBR&B pickled ennui celiac mlkshk freegan photo booth af fingerstache pitchfork.            ', '2021-09-11 18:36:47'),
(33, 'skdjfkladsf', '2021-09-11 18:36:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`id`) REFERENCES `art` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
