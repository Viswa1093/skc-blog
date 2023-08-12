-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 03:40 AM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(240) NOT NULL,
  `fname` varchar(2000) NOT NULL,
  `lname` varchar(2000) NOT NULL,
  `mail` varchar(2000) NOT NULL,
  `city` varchar(2000) NOT NULL,
  `mob` int(100) NOT NULL,
  `subject` varchar(2000) NOT NULL,
  `reason` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(50) NOT NULL,
  `category` varchar(200) NOT NULL,
  `caption` varchar(1000) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(1000) NOT NULL,
  `cimage` varchar(1000) NOT NULL,
  `title` varchar(500) NOT NULL,
  `subtitle` varchar(500) NOT NULL,
  `contents` varchar(10000) NOT NULL,
  `staff` varchar(100) NOT NULL,
  `view` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `category`, `caption`, `description`, `date`, `image`, `cimage`, `title`, `subtitle`, `contents`, `staff`, `view`) VALUES
(51, 'Events', 'Thoughts About Current Technology - GD', 'Well Friends! Technology has been evolving rapidly in recent years. We can expect to see many more advancements in the upcoming years. ', '2023-06-15', '445312Untitled design (5).png', '445312Untitled design (6).png', 'Thoughts About Current Technology - GD', 'GD DISCUSSION', '<p><strong>Kamatchi: </strong>&nbsp;Yes, I think one of the biggest trends in technology is artificial intelligence. AI is being used in more and more applications, from self-driving cars to virtual assistants. We&rsquo;re already seeing rapid advances in artificial intelligence, robotics, and other forms of automation that are changing the way we live and work. In the near future, I expect to see more powerful and sophisticated AI, as well as continued advances in robotic technology. I think it&rsquo;s safe to say that the future of technology world is going to be truly amazing.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Nandha:</strong> I agree, AI is definitely a trend that is gaining a lot of attention. However, I think another trending technology &nbsp;is &nbsp;Internet of Things (IoT). This is the concept of connecting everyday objects to the internet and allowing them to communicate with each other. This technology has the potential to revolutionize the way we live, making our lives more efficient and convenient. We&rsquo;ll also see greater use of cloud computing, which will enable us to access data and applications from anywhere in the world.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Prithivi:</strong> &nbsp;Sorry to interrupt you, I thought block chain technology is another trend. That is gaining a lot of attention. It is used for a variety of applications, from crypto currency to healthcare, secure transactions and to store data securely.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Rajeshwaran:</strong> Yes, I think block chain technology is a very exciting trend that could have a big impact in the future. I also think virtual reality (VR) is a trend that is gaining a huge place in technology. It&rsquo;s being used in entertainment, healthcare, and education.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Asik:</strong> It seems like there are a lot of different technologies that are trending right now. What do you think will be the most popular trending &nbsp;technology in the future?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Kamatchi:</strong>&nbsp; AI will continue to be popular, but I think augmented reality (AR) will also become more popular. It&rsquo;s being used in gaming and for training simulations.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Mohan:</strong> I agree. But Also machine learning &nbsp;will &nbsp;be popular in the future. It used to automate tasks and to make decisions.</p>\r\n', '', 22),
(53, 'Guest Lectures', 'A Midsummer Night’s Dream ', '  ilo puiyyu 6 uu yu e u iu u', '2023-07-20', '519792Screenshot (243).png', '519792front.png', 'hjkl yyuy uyhjk', '', '<p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>\r\n', '', 5),
(54, 'Story', 'Group Discussion on world Trending Technology ', '  hhhj nn  yhdh yyuu y', '2023-07-27', '198102Screenshot (246).png', '198102Screenshot (239).png', 'dyuu yyud ', 'lklkpo popopop', '<p>dhjyhu 6u66 eewea&nbsp;</p>\r\n', 'MR.S.VISWANATHAN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE `magazine` (
  `id` int(255) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `caption` varchar(1000) NOT NULL,
  `descrip` varchar(2000) NOT NULL,
  `date` date NOT NULL,
  `Timage` varchar(500) NOT NULL,
  `document` varchar(2000) NOT NULL,
  `staff` varchar(100) NOT NULL,
  `view` int(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `magazine`
--

INSERT INTO `magazine` (`id`, `category`, `caption`, `descrip`, `date`, `Timage`, `document`, `staff`, `view`) VALUES
(2, 'Events', 'A Midsummer Night’s Dream - A triangle love story', '  d;kdxcjkjl uyuh iyyaxc opy yj', '2023-07-18', '265134IMG_20230218_115653.jpg', '265134A11UCA057.pdf', '', 9),
(3, 'Story', 'A Midsummer Night’s Dream - A triangle love story', '  jhjklkjhjjh yuukjh', '2023-06-26', '808810Screenshot (244).png', '808810db ex2.pdf', 'STUDENT', 1),
(4, 'Story', 'kkkkkkkkkkkkkkkkkkkkkk', '  jjjjjjjjjjjjjjjjjjj', '2023-07-26', '886749Screenshot (258).png', '886749Digital 2&3 pdf.pdf', 'STUDENT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `id` int(240) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `cp` varchar(240) NOT NULL,
  `blogs` int(240) NOT NULL,
  `views` int(240) NOT NULL,
  `students` int(240) NOT NULL,
  `staff` int(240) NOT NULL,
  `magazine` int(255) NOT NULL,
  `mviews` int(255) NOT NULL,
  `log` varchar(2000) NOT NULL,
  `viewers` int(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`id`, `password`, `cp`, `blogs`, `views`, `students`, `staff`, `magazine`, `mviews`, `log`, `viewers`) VALUES
(1, 'aa11', 'aa11', 3, 95, 233, 10, 3, 30, 'STUDENT', 289);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(240) NOT NULL,
  `staff` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `staff`) VALUES
(1, 'MS.R.MUTHULAKSHMI'),
(2, 'MRS.M.GURUMAHESHWARI'),
(3, 'LT.K.GANESHBABU'),
(4, 'MR.R.PRABAKARAN'),
(5, 'MR.M.MUTHUSRINIVASAN'),
(6, 'MRS.V.MAHALAKSHMI'),
(7, 'MR.S.VISWANATHAN'),
(8, 'MR.R.SRIJANAKIRAMAN'),
(9, 'MR.P.NISHANTH KUMAR'),
(11, 'MS.S.RAMYA'),
(12, 'STUDENT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazine`
--
ALTER TABLE `magazine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `magazine`
--
ALTER TABLE `magazine`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
