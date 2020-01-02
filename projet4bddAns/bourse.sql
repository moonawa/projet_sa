-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2019 at 09:07 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `batiment`
--

CREATE TABLE `batiment` (
  `idbat` int(11) NOT NULL,
  `nombat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batiment`
--

INSERT INTO `batiment` (`idbat`, `nombat`) VALUES
(1, 'bat1'),
(2, 'bat2');

-- --------------------------------------------------------

--
-- Table structure for table `Boursier`
--

CREATE TABLE `Boursier` (
  `matricule` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Boursier`
--

INSERT INTO `Boursier` (`matricule`, `id_type`) VALUES
(18, 1),
(26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chambre`
--

CREATE TABLE `chambre` (
  `id_chambre` varchar(255) NOT NULL,
  `idbat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chambre`
--

INSERT INTO `chambre` (`id_chambre`, `idbat`) VALUES
('1A', 1),
('1B', 1);

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `matricule` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`matricule`, `nom`, `prenom`, `tel`, `mail`, `date_naissance`) VALUES
(1, 'jhjh', 'hhhjjj', 777, 'bass@gmail.com', '1995-01-01'),
(2, 'jhjh', 'hhh', 777, 'bass@gmail.com', '1995-01-01'),
(3, 'jhjh', 'hhhjjj', 777, 'bass@gmail.com', '1995-01-01'),
(4, 'jhjh', 'hhh', 777, 'bass@gmail.com', '1995-01-01'),
(5, 'jhh', 'jhhh', 66666, 'sallpapesouleymane@yahoo.fr', '2019-06-05'),
(6, 'jhh', 'jhhh', 66666, 'sallpapesouleymane@yahoo.fr', '2019-06-05'),
(7, 'tout', 'four', 4455, 'sallpouleymane@yahoo.fr', '2019-06-19'),
(8, 'tout', 'four', 4455, 'sallpouleymane@yahoo.fr', '2019-06-19'),
(9, 'tout', 'four', 4455, 'sallpouleymane@yahoo.fr', '2019-06-19'),
(10, 'tout', 'four', 4455, 'sallpouleymane@yahoo.fr', '2019-06-19'),
(11, 'SDFGHJ', 'DMG', 852, 'awandiayesene7@gmail.com', '2019-06-03'),
(12, 'SDFGHJ', 'DMG', 852, 'awandiayesene7@gmail.com', '2019-06-03'),
(13, 'rachid', 'zow', 777, 'allah@gmail.com', '2019-06-03'),
(14, 'rachid', 'zow', 777, 'allah@gmail.com', '2019-06-03'),
(15, 'rachid', 'zow', 777, 'allah@gmail.com', '2019-06-03'),
(16, 'rachid', 'zow', 777, 'allah@gmail.com', '2019-06-03'),
(17, 'lok', 'knk', 852, 'jjn@gf.j', '2019-06-14'),
(18, 'dfghj', 'ertyui', 7410, 'hvj@fhj.yuhkj', '2019-06-25'),
(19, 'dfghj', 'ertyui', 7410, 'hvj@fhj.yuhkj', '2019-06-25'),
(20, 'dfghj', 'ertyui', 7410, 'hvj@fhj.yuhkj', '2019-06-25'),
(21, 'zeryui', 'sdfghjkl', 8896, 'yj@hh.lih', '2019-06-19'),
(22, 'zeryui', 'sdfghjkl', 8896, 'yj@hh.lih', '2019-06-19'),
(23, 'zeryui', 'sdfghjkl', 8896, 'yj@hh.lih', '2019-06-19'),
(24, 'sdfghjkl', 'azertyu', 7410, 'jjn@gf.j', '2019-06-19'),
(25, 'sdfghjkl', 'azertyu', 7410, 'jjn@gf.j', '2019-06-19'),
(26, 'azert', 'tgv', 78963, 'etryyu@sdfg', '2019-06-12'),
(27, 'seydi', 'namon', 741, 'allah@gmail.com', '2019-06-21'),
(28, 'seydi', 'namon', 741, 'allah@gmail.com', '2019-06-21'),
(29, 'feki', 'mouhamadou', 130, 'mouh@gmail.com', '1995-01-02'),
(30, 'keita', 'ouzin', 124, 'awandiaye@gmail.com', '2019-06-13'),
(31, 'Diop', 'Samba', 77489545, 'diop.samba@sunumail.sn', '0019-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `loge`
--

CREATE TABLE `loge` (
  `matricule` int(11) NOT NULL,
  `id_chambre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loge`
--

INSERT INTO `loge` (`matricule`, `id_chambre`) VALUES
(12, '1A'),
(19, '1A'),
(27, '1A'),
(28, '1B');

-- --------------------------------------------------------

--
-- Table structure for table `nonboursier`
--

CREATE TABLE `nonboursier` (
  `matricule` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nonboursier`
--

INSERT INTO `nonboursier` (`matricule`, `adresse`) VALUES
(1, 'dakar'),
(3, 'dakar'),
(5, 'hjk'),
(13, 'diana'),
(15, 'diana'),
(22, 'diana'),
(23, 'diana'),
(24, 'ouakam'),
(30, 'ouakam'),
(31, 'dakar');

-- --------------------------------------------------------

--
-- Table structure for table `Type_Bourse`
--

CREATE TABLE `Type_Bourse` (
  `id_type` int(11) NOT NULL,
  `type_bourse` varchar(50) NOT NULL,
  `montant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Type_Bourse`
--

INSERT INTO `Type_Bourse` (`id_type`, `type_bourse`, `montant`) VALUES
(1, 'DEMI', 200000),
(2, 'ENTIERE', 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`idbat`);

--
-- Indexes for table `Boursier`
--
ALTER TABLE `Boursier`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `Boursier_Type_Bourse0_FK` (`id_type`);

--
-- Indexes for table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id_chambre`),
  ADD KEY `chambre_batiment_FK` (`idbat`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`matricule`);

--
-- Indexes for table `loge`
--
ALTER TABLE `loge`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `loge_chambre0_FK` (`id_chambre`);

--
-- Indexes for table `nonboursier`
--
ALTER TABLE `nonboursier`
  ADD PRIMARY KEY (`matricule`);

--
-- Indexes for table `Type_Bourse`
--
ALTER TABLE `Type_Bourse`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batiment`
--
ALTER TABLE `batiment`
  MODIFY `idbat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `matricule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Boursier`
--
ALTER TABLE `Boursier`
  ADD CONSTRAINT `Boursier_Type_Bourse0_FK` FOREIGN KEY (`id_type`) REFERENCES `Type_Bourse` (`id_type`),
  ADD CONSTRAINT `Boursier_etudiant_FK` FOREIGN KEY (`matricule`) REFERENCES `etudiant` (`matricule`);

--
-- Constraints for table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_batiment_FK` FOREIGN KEY (`idbat`) REFERENCES `batiment` (`idbat`);

--
-- Constraints for table `loge`
--
ALTER TABLE `loge`
  ADD CONSTRAINT `loge_Boursier_FK` FOREIGN KEY (`matricule`) REFERENCES `etudiant` (`matricule`),
  ADD CONSTRAINT `loge_chambre0_FK` FOREIGN KEY (`id_chambre`) REFERENCES `chambre` (`id_chambre`);

--
-- Constraints for table `nonboursier`
--
ALTER TABLE `nonboursier`
  ADD CONSTRAINT `nonboursier_etudiant_FK` FOREIGN KEY (`matricule`) REFERENCES `etudiant` (`matricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
