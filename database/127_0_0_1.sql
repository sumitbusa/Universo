-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2016 at 06:43 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courses`
--
CREATE DATABASE IF NOT EXISTS `courses` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `courses`;

-- --------------------------------------------------------

--
-- Table structure for table `1_comments`
--

CREATE TABLE `1_comments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1_comments`
--

INSERT INTO `1_comments` (`id`, `name`, `email`, `date`, `message`, `status`) VALUES
(1, 'sumitbusa', 'sumitbusa@gmail.com', '2016-04-11', 'hi', 'Admin'),
(2, 'sumit', 'shah@maiil.com', '2016-04-11', 'hello', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `1_content`
--

CREATE TABLE `1_content` (
  `id` int(11) NOT NULL,
  `content` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1_content`
--

INSERT INTO `1_content` (`id`, `content`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla, volutpat elit non, tristique lectus. Nam blandit odio nisl, ac malesuada lacus fermentum sit amet. Vestibulum vitae aliquet felis, ornare feugiat elit. Nulla varius condimentum elit, sed pulvinar leo sollicitudin vel.'),
(2, 'Maecenas sodales, nisl eget dignissim molestie, ligula est consectetur metus, et mollis justo urna sit amet nulla. Etiam lectus arcu, pellentesque eu tellus tempor, tristique ultrices leo. Nullam at felis mauris. Aenean in neque eu ligula tempor ornare. Mauris tristique in elit a blandit. Nam laoreet vulputate nisi eu accumsan. Sed faucibus arcu nec est facilisis dignissim. Fusce risus leo, euismod ut cursus vitae, imperdiet id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce mollis mi vulputate leo vestibulum, quis scelerisque libero condimentum. Praesent rutrum consequat lacus quis suscipit. Proin dapibus mi non semper lobortis.'),
(3, 'Ut dignissim placerat est, sit amet tincidunt enim. Sed nisi nisi, ornare vitae lacinia a, mattis quis tortor. Suspendisse ornare adipiscing nunc, sit amet aliquam diam condimentum quis. Sed in leo sit amet sapien porttitor vestibulum a ut est. In hac habitasse platea dictumst. Mauris quam dui, cursus nec lorem non, pellentesque elementum dui. Vestibulum volutpat, risus vitae scelerisque fringilla, ligula nisi egestas sem, id vulputate ligula nulla ac ligula.');

-- --------------------------------------------------------

--
-- Table structure for table `1_faq`
--

CREATE TABLE `1_faq` (
  `id` int(11) NOT NULL,
  `questions` varchar(1000) DEFAULT NULL,
  `answers` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1_faq`
--

INSERT INTO `1_faq` (`id`, `questions`, `answers`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et nibh at diam?', 'Aliquam sed fermentum nulla. Praesent dictum, velit in condimentum volutpat, nulla orci vestibulum risus, et facilisis purus urna non metus. Donec aliquam urna et tempus luctus.'),
(2, 'Fusce gravida varius justo sed porta?', 'Ut tincidunt dui non velit aliquet, quis porta quam vehicula. Vivamus suscipit hendrerit arcu. Nullam lacinia purus at porttitor varius. Aliquam rutrum feugiat tempor.'),
(3, 'Vivamus ac risus cursus, eleifend lorem quis, viverra urna.?', 'Aenean porttitor feugiat nibh. Phasellus et dolor id nulla dictum lacinia nec bibendum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae'),
(4, 'Hasellus non nisl et quam tristique placerat. Aliquam elementum tempus ?', 'Pellentesque a luctus libero. Integer mattis diam sem, nec ornare neque consequat id. Nullam malesuada lacus in rhoncus pellentesque. Mauris risus mauris, commodo ac volutpat eget, lacinia a risus. Aliquam nec semper libero, ac pharetra libero.');

-- --------------------------------------------------------

--
-- Table structure for table `1_invited_person`
--

CREATE TABLE `1_invited_person` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1_invited_person`
--

INSERT INTO `1_invited_person` (`id`, `name`, `category`, `bio`, `image_path`) VALUES
(1, 'Claire Doe', 'Marketing Specialist', 'Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.', 'assets/img/student-testimonial.jpg'),
(2, 'Rachel Britain', 'Data Architect', 'Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.', 'assets/img/discussion-author-02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `1_schedule`
--

CREATE TABLE `1_schedule` (
  `id` int(11) NOT NULL,
  `chapter` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `time_to_complete` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1_schedule`
--

INSERT INTO `1_schedule` (`id`, `chapter`, `time_to_complete`) VALUES
(1, '1.chapter', '2,5 hours'),
(2, '2.chapter\r\n3.chapter', '5 hours'),
(3, '4.chapter\r\n5.chapter\r\n6.chapter', '3 hours');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1_comments`
--
ALTER TABLE `1_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1_content`
--
ALTER TABLE `1_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1_faq`
--
ALTER TABLE `1_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1_invited_person`
--
ALTER TABLE `1_invited_person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1_schedule`
--
ALTER TABLE `1_schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1_comments`
--
ALTER TABLE `1_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `1_content`
--
ALTER TABLE `1_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `1_faq`
--
ALTER TABLE `1_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `1_invited_person`
--
ALTER TABLE `1_invited_person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `1_schedule`
--
ALTER TABLE `1_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;--
-- Database: `events`
--
CREATE DATABASE IF NOT EXISTS `events` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `events`;

-- --------------------------------------------------------

--
-- Table structure for table `event_1`
--

CREATE TABLE `event_1` (
  `id` int(11) NOT NULL,
  `content` varchar(1000) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `event_1`
--

INSERT INTO `event_1` (`id`, `content`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla, volutpat elit non,\r\n										tristique lectus. Nam blandit odio nisl, ac malesuada lacus fermentum sit amet. Vestibulum vitae\r\n										aliquet felis, ornare feugiat elit. Nulla varius condimentum elit, sed pulvinar leo sollicitudin vel.'),
(2, 'Maecenas sodales, nisl eget dignissim molestie, ligula est consectetur metus, et mollis justo urna\r\n										sit amet nulla. Etiam lectus arcu, pellentesque eu tellus tempor, tristique ultrices leo. Nullam at\r\n										felis mauris. Aenean in neque eu ligula tempor ornare. Mauris tristique in elit a blandit. Nam laoreet\r\n										vulputate nisi eu accumsan. Sed faucibus arcu nec est facilisis dignissim. Fusce risus leo, euismod ut\r\n										cursus vitae, imperdiet id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada\r\n										fames ac turpis egestas. Fusce mollis mi vulputate leo vestibulum, quis scelerisque libero condimentum.\r\n										Praesent rutrum consequat lacus quis suscipit. Proin dapibus mi non semper lobortis.'),
(3, 'Ut dignissim placerat est, sit amet tincidunt enim. Sed nisi nisi, ornare vitae lacinia a, mattis quis tortor.\r\n										Suspendisse ornare adipiscing nunc, sit amet aliquam diam condimentum quis. Sed in leo sit amet sapien\r\n										porttitor vestibulum a ut est. In hac habitasse platea dictumst. Mauris quam dui, cursus nec lorem non,\r\n										pellentesque elementum dui. Vestibulum volutpat, risus vitae scelerisque fringilla, ligula nisi egestas\r\n										sem, id vulputate ligula nulla ac ligula.');

-- --------------------------------------------------------

--
-- Table structure for table `event_2`
--

CREATE TABLE `event_2` (
  `id` int(11) NOT NULL,
  `content` varchar(1000) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `event_3`
--

CREATE TABLE `event_3` (
  `id` int(11) NOT NULL,
  `content` varchar(1000) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_1`
--
ALTER TABLE `event_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_2`
--
ALTER TABLE `event_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_3`
--
ALTER TABLE `event_3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_1`
--
ALTER TABLE `event_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `event_2`
--
ALTER TABLE `event_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_3`
--
ALTER TABLE `event_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;--
-- Database: `universo`
--
CREATE DATABASE IF NOT EXISTS `universo` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `universo`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `rating` int(11) NOT NULL,
  `message` varchar(1000) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_bin NOT NULL,
  `type` varchar(100) COLLATE utf8_bin NOT NULL,
  `starts` date NOT NULL,
  `length` int(11) NOT NULL,
  `time_duration` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `time` time NOT NULL,
  `to_time` time NOT NULL,
  `brief` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `image_path` varchar(100) COLLATE utf8_bin NOT NULL,
  `video_path` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `presentation_path` varchar(200) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `type`, `starts`, `length`, `time_duration`, `time`, `to_time`, `brief`, `image_path`, `video_path`, `presentation_path`) VALUES
(1, 'How to Find Long-Term Customers', 'Marketing', '2016-04-25', 3, '4-6 hours of work / week', '06:00:00', '08:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla, volutpat elit non, tristique lectus. Nam blandit odio nisl, ac malesuada lacus fermentum sit amet. Vestibulum vitae aliquet felis, ornare feugiat elit. Nulla varius condimentum elit, sed pulvinar leo sollicitudin vel.', 'assets/img/course-detail-img.jpg', '//player.vimeo.com/video/64373696', ''),
(2, 'How to Find Long-Term Customers', 'Science', '2016-04-06', 3, '4-6 hours of work / week', '16:00:00', '19:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla, volutpat elit non, tristique lectus. Nam blandit odio nisl, ac malesuada lacus fermentum sit amet. Vestibulum vitae aliquet felis, ornare feugiat elit. Nulla varius condimentum elit, sed pulvinar leo sollicitudin vel.', 'assets/img/course-detail-img.jpg', '//player.vimeo.com/video/64373696', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `image_path` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `date` date NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `location` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` varchar(500) COLLATE utf8_bin NOT NULL,
  `category` varchar(50) COLLATE utf8_bin NOT NULL,
  `length` int(11) NOT NULL,
  `time_duration` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` time NOT NULL,
  `to_time` time NOT NULL,
  `video_path` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `button_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `image_path`, `date`, `title`, `location`, `description`, `category`, `length`, `time_duration`, `time`, `to_time`, `video_path`, `button_id`) VALUES
(1, 'assets/img/event-img-01.jpg', '2016-04-12', 'Conservatory Exhibit: The garden of india a country and culture revealed', 'Matthaei Botanical Gardens', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla\r\n                                            volutpat elit non, tristique lectus. Nam blandit odio nisl, ac malesuada lacus fermentum sit amet.\r\n                                            Vestibulum vitae aliquet felis, ornare feugiat elit. Nulla varius condimentum elit,\r\n                                            sed pulvinar leo sollicitudin vel.', 'Maketing', 6, '4-6 hours of work / week', '06:00:00', '08:00:00', 'http://player.vimeo.com/video/64373696', 1),
(2, 'assets/img/event-img-02.jpg', '2016-04-06', 'February Half-Term Activities: Big Stars and Little Secrets', 'Pitt Rivers and Natural History Museums', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla\r\n                                            volutpat elit non, tristique lectus. Nam blandit odio nisl, ac malesuada lacus fermentum sit amet.\r\n                                            Vestibulum vitae aliquet felis, ornare feugiat elit. Nulla varius condimentum elit,\r\n                                            sed pulvinar leo sollicitudin vel.', 'Arts', 4, '4-6 hours of work / week', '10:00:00', '16:00:00', NULL, 2),
(3, 'assets/img/event-img-03.jpg', '2016-08-11', 'The Orchestra of the Age of Enlightenment perform with Music', ' Faculty of Music', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla\r\n                                            volutpat elit non, tristique lectus. Nam blandit odio nisl, ac malesuada lacus fermentum sit amet.\r\n                                            Vestibulum vitae aliquet felis, ornare feugiat elit. Nulla varius condimentum elit,\r\n                                            sed pulvinar leo sollicitudin vel.', 'Arts', 4, '5-6 hours of work / week', '11:00:00', '16:00:00', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `status` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `status`) VALUES
(1, 'Sumit Busa', 'sumitbusa@gmail.com', 'pass@123', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `description`) VALUES
(1, '2016-04-04', 'U-M School of Public Health, Detroit partners aim to improve air quality in the city', 'null'),
(2, '2016-04-22', 'At 50, Center for the Education of Women celebrates a wider mission', 'null'),
(3, '2016-04-29', 'Three U-Michigan scientists receive Sloan fellowships', 'null'),
(4, '2016-04-29', 'Three U-Michigan scientists receive Sloan fellowships', 'null'),
(5, '2016-04-22', 'At 50, Center for the Education of Women celebrates a wider mission', 'null'),
(6, '2016-04-29', 'Three U-Michigan scientists receive Sloan fellowships', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `performers`
--

CREATE TABLE `performers` (
  `id` int(11) NOT NULL,
  `name` varchar(75) COLLATE utf8_bin NOT NULL,
  `category` varchar(100) COLLATE utf8_bin NOT NULL,
  `bio` varchar(500) COLLATE utf8_bin NOT NULL,
  `image_path` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `event_handler` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `performers`
--

INSERT INTO `performers` (`id`, `name`, `category`, `bio`, `image_path`, `event_handler`) VALUES
(1, 'Claire Doe', 'Marketing Specialist', 'Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.\r\n                                                Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.', 'assets/img/student-testimonial.jpg', 1),
(2, 'Rachel Britain', 'Data Architect', '                                                Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.\r\n                                                Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.', 'assets/img/discussion-author-02.jpg', 1),
(3, 'John Doe', 'Senior Designer', 'Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.\r\n                                                Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.', 'assets/img/discussion-author-03.jpg', 1),
(4, 'Claire Doe', 'Marketing Specialist', 'Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.\r\n                                                Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.', 'assets/img/student-testimonial.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_bin NOT NULL,
  `lname` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(10) COLLATE utf8_bin NOT NULL,
  `location` varchar(50) COLLATE utf8_bin NOT NULL,
  `profile_image` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `button_id` (`button_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `performers`
--
ALTER TABLE `performers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `performers`
--
ALTER TABLE `performers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
