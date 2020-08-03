-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 07:55 PM
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
-- Database: `vibing`
--

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `artist` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` longblob NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `artist`, `title`, `cover`, `type`, `genre`, `label`, `year`) VALUES
(12, 'Death Grips', 'Exmilitary', '', 'Mixtape', 'Experimental hip hop, rap rock', 'wydany samodzielnie', 2011),
(13, 'Three Days Grace', 'Human', '', 'LP', 'alternative metal, post-grunge, hard rock', 'RCA', 2015),
(26, 'goreshit', 'with all my heart', '', 'EP', 'breakcore, idm', 'self released', 2015),
(27, 'Show Me The Body', 'Corpus I', '', 'Mixtape', 'Electronic, Hip Hop, Rock', 'Loma Vista Recordings', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no` int(11) DEFAULT NULL,
  `musicid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `no`, `musicid`) VALUES
(25, 'Beware', 1, 12),
(26, 'Guillotine', 2, 12),
(27, 'Spread Eagle Cross the Block', 3, 12),
(28, 'Lord of the Game (ft. Mexican Girl)', 4, 12),
(29, 'Takyon (Death Yon)', 5, 12),
(30, 'Cut Throat (Instrumental)', 6, 12),
(31, 'Klink', 7, 12),
(32, 'Culture Shock', 8, 12),
(33, '5D', 9, 12),
(34, 'Thru the Walls', 10, 12),
(35, 'Known for It', 11, 12),
(36, 'I Want It I Need It (Death Heated)', 12, 12),
(37, 'Blood Creepin', 13, 12),
(38, 'Human Race', 1, 13),
(39, 'Painkiller', 2, 13),
(40, 'Fallen Angel', 3, 13),
(41, 'Landmine', 4, 13),
(42, 'Tell Me Why', 5, 13),
(43, 'I Am Machine', 6, 13),
(44, 'So What', 7, 13),
(45, 'Car Crash', 8, 13),
(46, 'One Too Many', 10, 13),
(47, 'The End Is Not the Answer', 11, 13),
(48, 'The Real You', 12, 13),
(49, '海辺の傷', 1, 14),
(50, '6日にMRはそれを断ると言います', 2, 14),
(51, 'この旅行これらの涙。何の喜びはありませ', 3, 14),
(52, '日曜日にはバスはありません', 4, 14),
(53, '私が持っていた私が離れました', 5, 14),
(68, 'New Blood', 1, 20),
(69, 'Built for This Time', 2, 20),
(70, 'Live Life', 3, 20),
(71, 'King', 4, 20),
(72, 'Wildest Ones', 5, 20),
(73, 'Heroes', 6, 20),
(74, 'Strike a Match', 7, 20),
(90, 'Me', 2, 23),
(91, 'DziÅ› pÃ³Åºno pÃ³jdziemy spaÄ‡', 1, 24),
(92, 'the quickest way to the center of the heart', 1, 26),
(93, 'look at me tenderly', 2, 26),
(94, 'with all my heart.', 3, 26),
(95, 'sayonara utsukushii usagi. anata o aishite imasu.', 4, 26),
(96, 'tsukasa hardcore recorder hits 2008', 5, 26),
(97, 'otakuIDM', 6, 26),
(98, 'dreams of falling', 7, 26),
(99, 'initiation (chapter iv)', 8, 26),
(100, 'cotton drifting', 9, 26),
(101, 'daddy can change', 10, 26),
(102, 'mion (story arc 2)', 11, 26),
(103, 'when the cicadas cry', 12, 26),
(104, 'pa-pa-pa-pattycore!', 13, 26),
(105, 'ergo junglistix', 14, 26),
(106, 'nana vector 7 (breaching mix)', 16, 26),
(107, 'kaorin no amen', 17, 26),
(108, 'Intro', 1, 27),
(109, 'Trash', 2, 27),
(110, 'You Though What You Saw Was It', 3, 27),
(111, 'Hungry', 4, 27),
(112, 'In A Grave', 5, 27),
(113, 'Taxi Hell', 6, 27),
(114, 'Just A Slither', 7, 27),
(115, 'Halogen', 8, 27),
(116, 'Stress', 9, 27),
(117, 'My Whole Family', 10, 27),
(118, 'Spit', 12, 27),
(119, 'Cyba Slam Fif World Dance Party (Uppa Echelon Dance Remix)', 13, 27),
(120, 'Everything Hate (Here)', 14, 27),
(121, 'Two Hands', 15, 27),
(122, 'Why You Lying', 16, 27),
(123, 'Proud Boys', 17, 27);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` char(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privileges` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `mail`, `privileges`) VALUES
(1, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@test.pl', NULL),
(11, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a@a.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `musicid` (`musicid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
