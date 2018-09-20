-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 01:15 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_houses`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(15) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `email`, `message`, `date`) VALUES
(1, 'Tony Blair', 'blairman1994@gmail.com', 'Hi admin. i need a rental house. What can i do?', '2017-05-20 12:57:33'),
(2, 'Collince OOOO', 'collo@gmail.com', 'Hi, i need a room, what should i do?', '2017-05-20 19:52:37'),
(3, 'Collinc OOOO', 'colo@gmail.com', 'Hey, this site is awesome men.', '2017-05-20 20:02:52'),
(4, 'Collinc OOOO', 'collo@gmail.com', 'Hey admin, i forgot my login password, how can i access the site?', '2017-05-20 20:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `house_id` int(11) NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `landlord` varchar(30) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `house_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `rent_cost` int(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `location_description` text NOT NULL,
  `max_capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`house_id`, `house_number`, `landlord`, `phonenumber`, `fName`, `house_type`, `image`, `rent_cost`, `location`, `location_description`, `max_capacity`, `status`) VALUES
(1, 'F011', 'Mburugua', '0751266161', 'MBURUGUA JOSEPH', 'Bed sitter', 'house1.jpg', 6500, 'Kaithe', 'County: Meru\r\nLocation: Tigania West district, Tigania West division, Nkomo location, Kaithe sub-location. meru;-maua highway,branch at kunene pry.school 500m from nchiru market.1 km towards Maua.\r\n\r\nWater vailable\r\nFree electricity', 3, 'Approved'),
(2, 'SER61', 'nkirotejane', '071125415', 'JANE NKIROTE MWITI', 'SELF contain extension', 'house4.jpg', 8000, 'Nchiru Market', 'County: Meru\r\nLocation: Tigania West district, Tigania West division, Nkomo location, Kunene sub-location. meru;-maua highway,branch at kunene pry.school 500m from nchiru market.1 km towards kunene-kagaene .\r\nWelcome.\r\n\r\nWater available thru the week', 4, 'Approved'),
(5, 'ghr56', 'Mwitij', '0715845166', 'Joshua Mwiti', 'Square', 'house.jpg', 2000, 'Kianjai', 'Kianjai is a cool place located at Meru, Kenya.', 1, 'Available'),
(7, 'MB456', 'Matayo56', '0741116651', 'Mathew Lamau wa Ngegi', 'Square', 'house3.jpg', 3000, 'Kunene', 'County: Meru\r\nLocation: Tigania West district, Tigania West division, Nkomo location, Ntunene sub-location. meru;-maua highway,branch at kunene pry.school 500m from nchiru market.1 km towards Kianjai .\r\n\r\nWater vailable\r\nFree electricity', 2, 'Available'),
(8, '556RT', 'Tony Blair', '0715096908', 'Tony Blair Okoth the trusted one', 'Single', 'house4.jpg', 2500, 'Kianjai', 'Kianjai is a very good place to be.', 3, 'Available'),
(9, 'KKK45', 'Dancun', '0766666668', 'Duncan Kipngeno', 'BedSeater', 'house2.jpg', 4000, 'Kianjai', 'Kianjai is a cool place for renting a house.', 2, 'Available'),
(10, 'TB554', 'Dancun', '0744333333', 'Duncan Kipngeno', 'Single', 'house4.jpg', 5000, 'Kaithe', 'Kaithe is very cool place to stay in.', 1, 'Available'),
(11, 'KK66', 'Tony Blair', '0715096908', 'Tony Blair Okoth the trusted one', 'BedSeater', 'house1.jpg', 4600, 'Kianjai', 'Kianjai is a cool place for renting a house.', 3, 'Available'),
(12, 'T554', 'Dancun', '0744333322', 'Duncan Kipngeno', 'BedSeater', 'property_1.jpg', 6000, 'kaithe', 'Kaithe is very cool place to stay in. Come now. 200m from town.', 4, 'Available'),
(13, 'U7765', 'Dancun', '0766666666', 'Duncan Kipngeno', 'Single', 'property_2.jpg', 3000, 'Kianjai', 'Kianjai is 20km from Meru.', 1, 'Available'),
(14, 'S566', 'Mbugua', '0744332222', 'Mbugua Joseph', 'Doble Room', 'house4.jpg', 2500, 'Nchiru', '10 km from Meru.', 2, 'Available'),
(15, 'GKDE3', 'Tony Blair', '0744332233', 'Tony', 'Single', 'house3.jpg', 2500, 'Nchiru Market', '10 km from Meru.', 2, 'Available'),
(16, 'TT88', 'Ronnie', '0744332222', 'Ronnie Sigei Kipngetich', 'Single', 'property_2.jpg', 3000, 'Kianjai', 'Kianjai is 20km from Meru.', 2, 'Approved'),
(17, 'ER200', 'Ronnie', '0711223344', 'Sir Man', 'BedSeater', 'property_2.jpg', 4500, 'Kianjai', 'Kianjai is 20km from Meru.', 2, 'Available'),
(18, 'HH554', 'Rawrence', '0712334455', 'Rawlence Kariithi', 'BedSeater', 'property_1.jpg', 3000, 'Nchiru Market', '10 km from Meru.', 2, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `landlord`
--

CREATE TABLE `landlord` (
  `landlord_id` int(11) NOT NULL,
  `l_username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landlord`
--

INSERT INTO `landlord` (`landlord_id`, `l_username`, `email`, `fName`, `phonenumber`, `password`) VALUES
(1, 'nkirotejane', 'janemwiti@gmail.com', 'JANE NKIROTE MWITI', '0728719865', '123456'),
(2, 'Tony', 'blairman1994@gmail.com', 'Tony Blair', '0715096908', '123456'),
(3, 'Duncan ', 'duncan@gmail.com', 'Duncan Kipngeno', '0766666666', '123456'),
(4, 'Ronnie ', 'ronnie@gmail.com', 'Ronnie Sigei Kipngetich', '0711223344', '123456'),
(5, 'Rawlence', 'rawlence@gmail.com', 'Lawrence Kariithi', '0712334455', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `message`, `status`, `time`, `name`, `email`, `phone`) VALUES
(6, 'Hi admin, i need the house number 33333.. has it being booked or not?', 'Unread', '2017-05-21 01:00:31', 'Tony Blair', 'blairman1994@gmail.com', 715096908),
(7, 'Hello , I am interested in the house number 4444, has it being booked or not?', 'Unread', '2017-05-21 01:02:10', 'Duncan', 'Kipngenoh@gmail.com', 744332233),
(8, 'Hey, how are the booking processes?', 'Unread', '2017-05-21 10:30:52', 'tony', 'tony@gmail.com', 715096908),
(9, 'Hey , how are the booking processes?', 'Unread', '2017-05-22 12:40:38', 'Duncan Kipngeno', 'duncan@gmail.com', 744333333),
(10, 'Hi admin, thank you for accepting my booking request.', 'Unread', '2017-05-22 17:47:34', 'Sir Man', 'sir@gmail.com', 755443322),
(11, 'Hey admin, I am booking a house. Please accept my request.', 'Unread', '2017-05-22 18:05:50', 'Rawlence Kariithi', 'rawlence@gmail.com', 755443322);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `mpesa` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `email`, `id_no`, `phone`, `username`, `password`, `location`, `gender`, `status`, `mpesa`) VALUES
(2, 'felix Rotich', 'rotichfelix@yahoo.com', 30073147, 705053484, 'fello', '123456', 'nairobi', 'Male', 'Approved', 'JKKK777'),
(3, 'concepter', 'concybogita@gmail.com', 27695131, 707403614, 'gogo', '12345', 'kisii', 'Female', 'Approved', 'KKK987'),
(4, 'enock bosire', 'enock@gmail.com', 1234567, 717056766, 'hohoh', 'gugu', 'narok', 'Male', 'Approved', 'HHH7676'),
(5, 'Tony Blair', 'blair@gmail.com', 66554433, 715096908, 'youman', '123456', 'Nchiru', 'Male', 'Available', 'TT7678'),
(6, 'Tony Blair', 'ben@gmail.com', 66554433, 744332233, 'blair', '123456', 'Nchiru', 'Male', 'Available', 'HHYT656'),
(7, 'Collo Yearman', 'collo@gmail.com', 66666666, 766666666, 'collo', 'collo', 'Kianjai', 'Male', 'Available', 'LLK90978'),
(8, 'Tony Blair', 'blair@gmail.com', 66554433, 715096908, 'blair', '', 'Nchiru', 'Male', 'Available', '0744333233'),
(9, 'Rawlence Kariithi', 'rawlence@gmail.com', 77665544, 766666668, 'Ronnie', '123456', 'Nchiru Market', 'Female', 'Available', '0733552222');

-- --------------------------------------------------------

--
-- Table structure for table `userbook`
--

CREATE TABLE `userbook` (
  `houseid` int(15) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `idno` int(10) NOT NULL,
  `phone` int(12) NOT NULL,
  `username` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `mpesa` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userbook`
--

INSERT INTO `userbook` (`houseid`, `fname`, `email`, `idno`, `phone`, `username`, `location`, `gender`, `status`, `mpesa`) VALUES
(1, 'Tony Blair', 'blair@gmail.com', 32445544, 715096908, 'blair', 'Nchiru', 'Male', 'Approved', '0744333233'),
(2, 'Duncan Kipngeno', 'duncan@gmail.com', 66554433, 744333322, 'dan', 'Nchiru', 'Male', 'Available', '0744333233'),
(16, 'Sir Man', 'sir@gmail.com', 77665544, 755443322, 'sir', 'Kianjai', 'Male', 'Available', '0733552222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `landlord`
--
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`landlord_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `landlord`
--
ALTER TABLE `landlord`
  MODIFY `landlord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
