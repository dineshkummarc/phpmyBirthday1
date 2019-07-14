-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2019 at 12:46 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdaydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `treattbl`
--

CREATE TABLE `treattbl` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `tdate` date NOT NULL,
  `ttime` varchar(11) NOT NULL,
  `tzone` varchar(10) NOT NULL,
  `tvenue` varchar(50) NOT NULL,
  `tnote` varchar(200) NOT NULL,
  `tstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treattbl`
--

INSERT INTO `treattbl` (`id`, `fname`, `tdate`, `ttime`, `tzone`, `tvenue`, `tnote`, `tstatus`) VALUES
(1, 'kasun', '2019-07-10', '11', 'AM', 'DIM', 'no', 'Ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `userinfotbl`
--

CREATE TABLE `userinfotbl` (
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `oemail` varchar(50) NOT NULL,
  `pemail` varchar(50) NOT NULL,
  `mno` int(10) NOT NULL,
  `dob` date NOT NULL,
  `designation` varchar(10) NOT NULL,
  `indexyear` int(4) NOT NULL,
  `indexno` int(3) NOT NULL,
  `foodp` varchar(10) NOT NULL,
  `notes` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL,
  `student` tinyint(1) NOT NULL,
  `adminstaff` tinyint(1) NOT NULL,
  `tempacstaff` tinyint(1) NOT NULL,
  `acstaff` tinyint(1) NOT NULL,
  `organiser` tinyint(1) NOT NULL,
  `nuser` tinyint(1) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL,
  `nic` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfotbl`
--

INSERT INTO `userinfotbl` (`fname`, `sname`, `pname`, `password`, `oemail`, `pemail`, `mno`, `dob`, `designation`, `indexyear`, `indexno`, `foodp`, `notes`, `link`, `student`, `adminstaff`, `tempacstaff`, `acstaff`, `organiser`, `nuser`, `admin`, `id`, `nic`) VALUES
('Rishan', 'Mohamed', 'Rishan', 'eluwa123', 'iamrmrishan@gmail.com', 'iamrmrishan@gmail.com', 775855741, '2019-07-10', 'Mr', 2016, 72, 'Veg', 'good', 'www.facebook.com/rishan.rm', 1, 0, 0, 0, 0, 1, 0, 1, '953134462v'),
('Kasun', 'Thilakarathne', 'Kasun', 'eluwa1234', 'kasun@gmail.com', 'kasun@gmail.com', 711188333, '2019-07-17', 'Mr', 2016, 98, 'Nveg', 'no', 'www.facebook.com/kasun', 1, 0, 0, 0, 0, 1, 0, 3, '9513377334v');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `treattbl`
--
ALTER TABLE `treattbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfotbl`
--
ALTER TABLE `userinfotbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `treattbl`
--
ALTER TABLE `treattbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userinfotbl`
--
ALTER TABLE `userinfotbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
