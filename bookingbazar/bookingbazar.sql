-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 02:56 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingbazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(33) NOT NULL,
  `privillage` int(1) NOT NULL,
  `dateandtime` int(16) NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `privillage`, `dateandtime`, `flag`) VALUES
(1, 'Joy ', 'joy@bookingbazar.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 1482159234, 1);

-- --------------------------------------------------------

--
-- Table structure for table `checkinout`
--

CREATE TABLE `checkinout` (
  `id` int(10) NOT NULL,
  `hotelid` int(10) NOT NULL,
  `checkinfrom` varchar(15) NOT NULL,
  `checkinto` varchar(15) NOT NULL,
  `checkoutfrom` varchar(15) NOT NULL,
  `checkoutto` varchar(15) NOT NULL,
  `updatetime` int(10) NOT NULL,
  `flag` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('cpi1m7oqegfbhq7sr5gllphr47tvrkhg', '::1', 1523523978, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333532333937383b),
('n32agn0ej2i8pgg617nt65p2j5d797rv', '::1', 1523524305, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333532343330353b),
('p5j3l50tfbae123bpq4blpkurl21du8t', '::1', 1523524673, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333532343637333b),
('dtq0veq4665f567maf8uu85o3af9iths', '::1', 1523527026, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333532373032363b),
('4m91g1pkd73tdmlbf3jsr2bd7657shct', '::1', 1523527327, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333532373032363b),
('72mu33u8ov3a6mlnmha7fmpcthb2pjke', '::1', 1523709893, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333730393839333b),
('7kapl6s0922ecot427q1jhn4p32g9mnd', '::1', 1523710196, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333731303139363b),
('1n91gk2u0gmbp3cbegh63mr49q67qtic', '::1', 1523710572, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333731303537323b69647c733a313a2231223b6e616d657c733a343a224a6f7920223b757365726e616d657c733a32303a226a6f7940626f6f6b696e6762617a61722e636f6d223b61646d696e5f6c6f67696e7c623a313b),
('n86f5vm6epthbqf4m9qpi9aqj8o5fm94', '::1', 1523710573, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532333731303537323b69647c733a313a2231223b6e616d657c733a343a224a6f7920223b757365726e616d657c733a32303a226a6f7940626f6f6b696e6762617a61722e636f6d223b61646d696e5f6c6f67696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) NOT NULL,
  `hotelid` int(10) NOT NULL,
  `facilityname` varchar(250) NOT NULL,
  `facilitydetail` text NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `hotelid`, `facilityname`, `facilitydetail`, `flag`) VALUES
(1, 1, 'gfacility', 'Air conditioning,Non-smoking througho,Allergy-free room,Heating,Soundproof rooms,Safety deposit box,VIP room facilities,Safe', 1),
(2, 1, 'language', 'Malay,Spanish,English', 1),
(3, 1, 'forntdesk', 'Lockers,Baggage Storage,Currency Exchange ,Express Check-in/Check-out', 1),
(4, 1, 'bathroom', 'Hairdryer,Towels,Shower,Free toiletries,Bath,Other', 1),
(5, 1, 'media', 'media, tv, vcr etc', 1),
(6, 1, 'Services', 'Hairdryer,Towels,Shower,Free toiletries,Bath,Other', 1),
(7, 3, 'gfacility', 'Facilities for disabled guests,Non-smoking rooms,Designated smoking area,Laptop safe,Interconnected room(s) available,Carpeted,Bridal suite,Wake Up Service/Alarm Clock,Wake-up service,Tile/Marble floor,Soundproof rooms,Family rooms', 1),
(8, 3, 'language', 'Hindi,English', 1),
(9, 3, 'parking', 'Free parking,Onsite Parking (Free),Parking with Security Guard', 1),
(10, 3, 'view', 'City view,Garden', 1),
(11, 3, 'outdoor', 'BBQ facilities (Additional charge),Terrace', 1),
(12, 3, 'internet', 'Free wifi', 1),
(13, 3, 'kitchen', 'Electric kettle,Coffee machine', 1),
(14, 3, 'accessibility', 'Upper floors accessible by lift', 1),
(15, 3, 'activities', 'Billiards (Additional charge)', 1),
(16, 3, 'entertainment', 'Children television networks', 1),
(17, 3, 'transport', 'Airport shuttle (additional charge),Car Hire,Limousine Service', 1),
(18, 3, 'hotelamenities', '', 1),
(19, 3, 'pets', 'Pets are not allowed', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotelphoto`
--

CREATE TABLE `hotelphoto` (
  `id` int(10) NOT NULL,
  `hotelid` int(10) NOT NULL,
  `photo` text NOT NULL,
  `uploadtime` int(10) NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelphoto`
--

INSERT INTO `hotelphoto` (`id`, `hotelid`, `photo`, `uploadtime`, `flag`) VALUES
(4, 1, 'Chrysanthemum.jpg', 1498226854, 1),
(5, 1, 'Desert.jpg', 1498226854, 1),
(6, 1, 'Hydrangeas.jpg', 1498226854, 1),
(7, 1, 'samplephoto.jpeg', 1498226854, 1),
(8, 1, 'samplephoto.jpeg', 1498226854, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `hotelname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `locationid` int(5) NOT NULL,
  `description` text NOT NULL,
  `subway` varchar(255) NOT NULL,
  `petallow` int(2) NOT NULL,
  `star` int(1) NOT NULL,
  `photo` text NOT NULL,
  `link` text NOT NULL,
  `promotion` int(3) NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `hotelname`, `address`, `locationid`, `description`, `subway`, `petallow`, `star`, `photo`, `link`, `promotion`, `flag`) VALUES
(1, 'THE WAY Dhaka ', '10/B/2, Road-54/B, Gulshan 2, Dhaka, 1212 Dhaka, Bangladesh', 1, ' Get the celebrity treatment with world-class service at THE WAY Dhaka\r\n\r\nOne of our top picks in Dhaka – and a guest favorite.\r\n\r\nFeaturing free WiFi and a restaurant, THE WAY Dhaka offers accommodations in Dhaka, just 300 m from Embassy of Germany. Guests can enjoy the on-site restaurant.\r\n\r\nEvery room has a flat-screen TV with satellite channels and DVD player. Some accommodations feature a sitting area for your convenience. Enjoy a cup of tea while looking out at the garden or city. The rooms are fitted with a private bathroom. For your comfort, you will find bathrobes, slippers and free toiletries.\r\n\r\nYou will find a 24-hour front desk at the property.\r\n\r\nThe hotel also provides car rental. Embassy of Spain is 300 m from THE WAY Dhaka, and High Commission of Australia is 400 m away. Zia Airport is 5 km from the property. \r\n\r\nThis property also has one of the top-rated locations in Dhaka! Guests are happier about it compared to other properties in the area.\r\n\r\nCouples in particular like the location – they rated it 8 for a two-person trip.\r\n\r\nThis property is also rated for the best value in Dhaka! Guests are getting more for their money when compared to other properties in this city.\r\n\r\nWe speak your language!', 'The Raintree Dhaka has a location score of 9.2', 0, 4, '', '', 0, 1),
(3, 'Executive Inn ', '155/A, North Gulshan Avenue, 1212 Dhaka, Bangladesh', 1, ' Featuring free WiFi and a restaurant, Executive Inn offers accommodations in Dhaka. The hotel has a terrace and views of the garden, and guests can enjoy a meal at the restaurant. Free private parking is available on site.\r\n\r\nEach room is fitted with a flat-screen TV with satellite channels. Certain rooms have a sitting area to relax in after a busy day. You will find a kettle in the room. Each room includes a private bathroom equipped with a hot tub and bathtub. For your comfort, you will find slippers and free toiletries.\r\n\r\nYou will find a 24-hour front desk at the property.\r\n\r\nThe hotel also provides car rental. The nearest airport is Zia Airport, 5 km from the property. \r\n\r\nThis property also has one of the top-rated locations in Dhaka! Guests are happier about it compared to other properties in the area.\r\n\r\nCouples in particular like the location – they rated it 8.3 for a two-person trip.\r\n\r\nThis property is also rated for the best value in Dhaka! Guests are getting more for their money when compared to other properties in this city.\r\n\r\nWe speak your language!', '20 Km from Airport', 0, 5, '', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(5) NOT NULL,
  `country` varchar(30) NOT NULL,
  `locationname` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `parentid` int(5) NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `country`, `locationname`, `image`, `parentid`, `flag`) VALUES
(1, 'Bangladesh', 'Dhaka', 'dhaka.jpg', 0, 1),
(2, 'Bangladesh', 'Chittagong', 'chittagong.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roomphoto`
--

CREATE TABLE `roomphoto` (
  `id` int(10) NOT NULL,
  `roomid` int(10) NOT NULL,
  `photo` text NOT NULL,
  `uploadtime` int(10) NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomphoto`
--

INSERT INTO `roomphoto` (`id`, `roomid`, `photo`, `uploadtime`, `flag`) VALUES
(1, 1, 'Chrysanthemum2.jpg', 1494282268, 1),
(2, 1, 'Hydrangeas2.jpg', 1494282268, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) NOT NULL,
  `hotelid` int(10) NOT NULL,
  `roomname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `bed_bedroom` varchar(255) NOT NULL,
  `bed_livingroom` varchar(255) NOT NULL,
  `baseprice` float NOT NULL,
  `todayprice` float NOT NULL,
  `guestallowed` int(2) NOT NULL,
  `roomsize` int(4) NOT NULL,
  `howmany` int(4) NOT NULL,
  `facility` text NOT NULL,
  `facilities` text NOT NULL,
  `availability` enum('1','0') NOT NULL,
  `offerpercent` int(3) NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `hotelid`, `roomname`, `description`, `bed_bedroom`, `bed_livingroom`, `baseprice`, `todayprice`, `guestallowed`, `roomsize`, `howmany`, `facility`, `facilities`, `availability`, `offerpercent`, `flag`) VALUES
(1, 1, '1', 'View, Garden view, City view, Pay-per-view channels, TV, Telephone, Radio, DVD Player, Satellite channels, Cable channels, Laptop safe, Flat-screen TV, Safe, Air conditioning, Iron, Desk, Ironing facilities, Sitting area, Extra long beds (> 6.5 ft), Walk-in closet, Sofa, Soundproof, Tile/Marble floor, Hardwood/Parquet floors, Wardrobe/Closet, Hypoallergenic, Cleaning products, Clothes rack, Shower, Hairdryer, Bathrobe, Free toiletries, Toilet, Bathroom, Slippers, Bathtub or shower, Toilet paper , Minibar, Refrigerator, Electric kettle, Wake-up service, Alarm clock, Towels/Sheets (extra fee), Towels, Linens', '2 King Bed', '2 King Bed', 200, 1580, 2, 52, 30, 'Free WiFi,FREE cancellation,Garden View,NO PREPAYMENT NEEDED – pay at the property,City View,Good Breakfast Included,Special Conditions,Beach View', 'View, Garden view, City view, Pay-per-view channels, TV, Telephone, Radio, DVD Player, Satellite channels, Cable channels, Laptop safe, Flat-screen TV, Safe, Air conditioning, Iron, Desk, Ironing facilities, Sitting area, Extra long beds (> 6.5 ft), Walk-in closet, Sofa, Soundproof, Tile/Marble floor, Hardwood/Parquet floors, Wardrobe/Closet, Hypoallergenic, Cleaning products, Clothes rack, Shower, Hairdryer, Bathrobe, Free toiletries, Toilet, Bathroom, Slippers, Bathtub or shower, Toilet paper , Minibar, Refrigerator, Electric kettle, Wake-up service, Alarm clock, Towels/Sheets (extra fee), Towels, Linens', '1', 2, 1),
(2, 1, '9', ' Detail of this room description', '2 King Bed', '1 King Bed', 300, 200, 2, 300, 10, 'Free WiFi,Garden View,Private bathroom,City View,Good Breakfast Included', ' asdf', '1', 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `privillage` int(2) NOT NULL,
  `joindate` int(11) NOT NULL,
  `campaignid` int(5) NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `privillage`, `joindate`, `campaignid`, `flag`) VALUES
(1, 'Uzzal', 'uzzal@ml.com', 'ML12345', 1, 1489263765, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkinout`
--
ALTER TABLE `checkinout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelphoto`
--
ALTER TABLE `hotelphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomphoto`
--
ALTER TABLE `roomphoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkinout`
--
ALTER TABLE `checkinout`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hotelphoto`
--
ALTER TABLE `hotelphoto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roomphoto`
--
ALTER TABLE `roomphoto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
