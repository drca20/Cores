-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql300.epizy.com
-- Generation Time: Feb 20, 2020 at 11:26 PM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_24911520_cores`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(5, 'DArshan', 'dg@gmail.com', 'hii this  is my first message.');

-- --------------------------------------------------------

--
-- Table structure for table `customize_product`
--

CREATE TABLE `customize_product` (
  `id` int(2) NOT NULL,
  `p_heading` varchar(100) DEFAULT NULL,
  `p_desc` varchar(500) DEFAULT NULL,
  `status` int(2) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_circle`
--

CREATE TABLE `home_circle` (
  `id` int(2) NOT NULL,
  `href` varchar(50) DEFAULT NULL,
  `image_class` varchar(50) DEFAULT NULL,
  `link text` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `desc.` varchar(150) DEFAULT NULL,
  `status` int(2) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_circle`
--

INSERT INTO `home_circle` (`id`, `href`, `image_class`, `link text`, `title`, `desc.`, `status`) VALUES
(1, 'home.php', 'brush.jpg', 'FOR MORE', 'Design', 'WE PROVIDE BEST </br>DESIGN.</br></br>', 1),
(2, 'quality.php', 'quality.png', 'View Quality Insrument', 'Quality', 'CORES POLYPRINT </br>BELIVES IN TOTAL QUALITY</br>SATIFACTION.', 1),
(3, 'about.php', 'mission.png', 'About US', 'Vision', '“ QUALITY WITH NO</br>COMPROMISE ”</br></br> ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(2) NOT NULL,
  `page_id` int(3) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `heading` varchar(75) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `page_id`, `name`, `heading`) VALUES
(1, 4, 'measure1.jpg', 'Bonding Strength'),
(2, 4, 'measure2.jpg', 'Treatment Test'),
(3, 4, 'measure3.jpg', 'Tape Test'),
(4, 4, 'measure4.jpg', 'Adhesive Proportion'),
(5, 4, 'measure5.jpg', 'Dart Impact'),
(6, 4, 'measure6.jpg', 'Coating GMS'),
(7, 4, 'measure7.jpg', 'Density'),
(8, 4, 'measure8.png', 'Solid Content'),
(9, 4, 'measure9.jpg', 'Sleep Test'),
(10, 4, 'measure10.jpg', 'Viscosity'),
(11, 4, 'measure11.jpg', 'Drop Test'),
(12, 4, 'measure12.jpg', 'Distillation');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(2) NOT NULL,
  `pagename` varchar(500) NOT NULL,
  `pagetitle` varchar(500) NOT NULL,
  `pagetext` text NOT NULL,
  `href` varchar(25) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '0->inactive, 1->active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pagename`, `pagetitle`, `pagetext`, `href`, `status`) VALUES
(1, 'Home', 'WE PROVIDE AWESOME PRINTING <strong>SERVICES</strong>', '<P><strong>CoresPolyprint-Best</strong> Poly Print Solution</p>  				<p>There is nothing better than working with good people</p>', 'about.php', 1),
(2, 'About', 'About US', ' Cores Polyprint established in 2014, started with a small layout and optimum capacity utilization.Rising as a one stop solution provider for all packaging requirements and aimed to provide high quality with affordable value to be one of the largest market players in the region.', 'infrastructure.php', 1),
(3, 'Infrastructure', 'Infrastructure', '<p>Our Manufacturing plant is designed to meet international standards in hygiene required by Food and Pharmaceutical industries. Understanding our responsibility towards public health and safety.</p></br></br>', NULL, 1),
(4, 'Services', 'WELCOME TO CORESPOLYPRINT', '<p>We provied maximum service to our client related to flexible packaging. According to client product we recommended type of flexible packaging material required to them with best barrier property. Even we also give services to our client to developed there flexible packaging design for there customized packaging usally we developed design in coral draw and photoshop. We also devloped logo of brand name and also guide our client how to register or trademark them.</p></br>\r\n                        <p>We are the one stop solution for flexible packaging starting from design developing to finish good.</p></br>', NULL, 1),
(5, 'Quality', 'Quality', '<p>CORES POLYPRINT Believes in total quality satisfaction. Utmost care and strict, rigid quality controls ensure that raw-material / substrates / laminates pass through rigorous tests in the in-house lab, ensuring perfect product performance.</p></br>', NULL, 1),
(6, 'product-details', 'product-details', 'here is details', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(2) NOT NULL,
  `page_id` int(2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Hading` varchar(50) DEFAULT NULL,
  `Page_location` varchar(20) NOT NULL COMMENT '1 Home',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '0->inactive, 1->active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `page_id`, `image`, `Hading`, `Page_location`, `status`) VALUES
(1, 1, 'Slide-1.jpg', '', 'Home', 1),
(2, 1, 'Slide-2.jpg', NULL, 'Home', 1),
(3, 1, 'Slide-3.jpg', NULL, 'Home', 1),
(4, 1, 'Slide-4.jpg', NULL, 'Home', 1),
(5, 1, 'Slide-5.jpg', NULL, 'Home', 0),
(6, 1, 'Slide-6.jpg', NULL, 'Home', 0),
(7, 5, 'roto.jpg', 'ROTO', 'Infrastructure', 1),
(8, 5, 'pouch.jpg', 'POUCH MACHINE', 'Infrastructure', 1),
(9, 5, 'sliter.jpg', 'DRUM SLITER', 'Infrastructure', 1),
(10, 5, 'kentiliver.jpg', 'New Sliter', 'Infrastructure', 1),
(11, 5, 'lemination.jpg', 'SOLVENT LESS', 'Infrastructure', 1),
(12, 5, 'lemination1.jpg', 'SOLVENT', 'Infrastructure', 1),
(13, 1, 'CERTIFICATE.jpg', 'TESTCASE', 'Home', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stockproduct`
--

CREATE TABLE `stockproduct` (
  `id` int(2) NOT NULL,
  `p_heading` varchar(100) NOT NULL,
  `p_image` varchar(100) DEFAULT NULL,
  `p_desc` varchar(1000) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockproduct`
--

INSERT INTO `stockproduct` (`id`, `p_heading`, `p_image`, `p_desc`, `status`) VALUES
(1, 'Three side seal', 'Slide-1.jpg', 'this is a klaskjdasdjakskdasd', 1),
(2, 'Standy Pouch', 'Slide-2.jpg', 'this is a standy pouch which having great look', 1),
(3, 'Paper Finsh', '12-10-13-41Slide-3.jpg', 'this  is surface printing pouch', 1),
(4, 'Namkeen Pouch', 'Slide-4.jpg', 'Namkeen pouch with roll form', 1),
(5, 'Flexible pouch ', 'Slide-6.jpg', 'this is resize pouch which we use any place', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `image` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `userrole` varchar(20) NOT NULL,
  `roleid` int(2) NOT NULL DEFAULT '0' COMMENT '0->CC,1->CR,2->GR',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '0->inactive,1->active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `image`, `firstname`, `lastname`, `userrole`, `roleid`, `status`) VALUES
(1, 'DG@cc.com', 'DG', 'user1.jpg', 'Darshan', 'Ghetiya', 'Devloper', 0, 1),
(3, 'URU@cc.com', 'URU', 'user2.jpg', 'Urvi', 'Javia', 'Galo', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customize_product`
--
ALTER TABLE `customize_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_circle`
--
ALTER TABLE `home_circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pageid` (`page_id`);

--
-- Indexes for table `stockproduct`
--
ALTER TABLE `stockproduct`
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
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customize_product`
--
ALTER TABLE `customize_product`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_circle`
--
ALTER TABLE `home_circle`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `stockproduct`
--
ALTER TABLE `stockproduct`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
