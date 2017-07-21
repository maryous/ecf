-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2017 at 11:20 AM
-- Server version: 5.7.19-0ubuntu0.17.04.1
-- PHP Version: 7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `athletik`
--

-- --------------------------------------------------------

--
-- Table structure for table `athlete`
--

CREATE TABLE `athlete` (
  `id` int(11) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `birthdate` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `athlete`
--

INSERT INTO `athlete` (`id`, `firstname`, `lastname`, `birthdate`) VALUES
(1, 'Jean Claude', 'Duss', 1985),
(2, 'Bibi', 'Lafrite', 1965),
(3, 'Robert', 'Camembert', 1989),
(4, 'Christine', 'Boutin', 1992),
(5, 'Albert', 'Heinstein', 1995),
(6, 'Marguaret', 'Thatcher', 2003),
(7, 'Jules', 'Cesar', 1991),
(8, 'Momo', 'Ise', 1997),
(9, 'Sidharta', 'gautama', 1991),
(10, 'Adolf', 'Hitler', 2006),
(11, 'Oussama', 'Ben Laden', 2001),
(12, 'Jonnhy', 'Haliday', 1989),
(13, 'Justin', 'Bieber', 1982),
(14, 'Nicky', 'Minaj', 2006),
(15, 'Lionel', 'Duboeuf', 2004),
(16, 'Pika', 'Tchu', 1999);

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`id`, `name`, `description`, `date`) VALUES
(1, 'Peta Ouchnok', '', '2017-07-18'),
(2, 'Troufaillon Les oies', '', '2017-07-28'),
(5, 'PARIS', 'Le running a le vent en poupe et avec lui, les courses originales ! Se rouler dans la boue, courir en équipe, se faire poursuivre par des clowns..., il y en a pour tous les goûts. Saurez-vous relever le défi de ces courses folles ? Découvrez une sélection du programme de cette année 2016 à Paris et aux alentours.\r\n\r\nVous aimez les défis sportifs et vous êtes en quête de nouveaux challenges ? De nombreuses courses et parcours sportifs, tous plus originaux les uns que les autres, vous attendent cette année en Ile-de-France.\r\n\r\n', '2017-08-30'),
(6, 'LYON', 'La Spartan Race 2017 à LYON : Gagnez vos places - Amateurs de challenges et de sensations fortes, à vos agendas ! La Spartan Race revient pour une nouvelle édition sur l’Ile de Loisirs de Jablines (Seine et Marne) le 3 juin 2017. Un événement absolument incontournable pour les sportifs qui n\'ont pas peur de se salir les mains, et avec une nouveauté au programme ! Et forcément, on a des places à vous offrir les amis !', '2017-08-15'),
(7, 'morlaix', 'kzakhdkhfkhfk', '2016-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `meeting_id` int(11) NOT NULL,
  `athlete_id` int(11) NOT NULL,
  `time` float NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `meeting_id`, `athlete_id`, `time`, `points`) VALUES
(1, 1, 1, 2.48, 404),
(2, 1, 2, 3.45, 392),
(3, 1, 3, 2.39, 419),
(4, 1, 4, 2.45, 409),
(5, 1, 5, 3.2, 341),
(6, 1, 6, 3.56, 380),
(7, 1, 8, 2.56, 391),
(8, 1, 9, 3.25, 308),
(9, 1, 7, 3.12, 321),
(10, 1, 10, 4.2, 358),
(11, 1, 11, 4.3, 282),
(12, 1, 12, 5.2, 193),
(13, 1, 13, 2.3, 435),
(14, 1, 14, 3.12, 481),
(15, 1, 15, 4.59, 310),
(16, 1, 16, 2.53, 467),
(17, 7, 16, 35, 500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'hasnae', 'hasnasara40@gmail.com', '$2y$10$6nrTE.Z7vz4c7K2s3lnpcu7.jB6/RBB1WBVao9.R0Py2FUT.Qv3XC'),
(2, 'marwa', 'marwa@gmail.com', '$2y$10$qNKPEi1dMZKDa7Wbrdx75uEJ7x0ceaRqAFgusTzxprQxZLZs1xIpq'),
(3, 'joudar', 'joudar@gmail.com', '$2y$10$jP5QJsMO866htLK/zuDTOOuwWdJ33IxN.ZHUiVtRzxqPj9vSs35Xm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athlete`
--
ALTER TABLE `athlete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `athlete_id` (`athlete_id`),
  ADD KEY `meeting_id` (`meeting_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athlete`
--
ALTER TABLE `athlete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`athlete_id`) REFERENCES `athlete` (`id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`meeting_id`) REFERENCES `meeting` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
