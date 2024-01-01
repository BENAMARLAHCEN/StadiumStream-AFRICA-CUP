-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 01, 2024 at 01:48 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stadiumstream`
--

-- --------------------------------------------------------

--
-- Table structure for table `matche`
--

CREATE TABLE `matche` (
  `MatchID` int NOT NULL,
  `Team1ID` int DEFAULT NULL,
  `Team2ID` int DEFAULT NULL,
  `MatchDateTime` datetime NOT NULL,
  `Result` varchar(255) DEFAULT NULL,
  `GroupID` varchar(2) DEFAULT NULL,
  `stadium_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `matche`
--

INSERT INTO `matche` (`MatchID`, `Team1ID`, `Team2ID`, `MatchDateTime`, `Result`, `GroupID`, `stadium_id`) VALUES
(1, 1, 2, '2024-01-13 20:00:00', NULL, 'A', 1),
(2, 3, 4, '2024-01-13 14:00:00', NULL, 'A', 1),
(3, 5, 6, '2024-01-14 17:00:00', NULL, 'B', 2),
(4, 7, 8, '2024-01-14 20:00:00', NULL, 'B', 2),
(5, 9, 10, '2024-01-15 14:00:00', NULL, 'C', 3),
(6, 11, 12, '2024-01-15 17:00:00', NULL, 'C', 3),
(7, 13, 14, '2024-01-15 20:00:00', NULL, 'D', 4),
(8, 15, 16, '2024-01-15 14:00:00', NULL, 'D', 4),
(9, 17, 18, '2024-01-16 17:00:00', NULL, 'E', 5),
(10, 19, 20, '2024-01-16 20:00:00', NULL, 'E', 5),
(11, 21, 22, '2024-01-17 17:00:00', NULL, 'F', 1),
(12, 23, 24, '2024-01-17 20:00:00', NULL, 'F', 1),
(13, 2, 4, '2024-01-18 14:00:00', NULL, 'A', 2),
(14, 1, 3, '2024-01-18 17:00:00', NULL, 'A', 2),
(15, 5, 7, '2024-01-18 20:00:00', NULL, 'B', 3),
(16, 8, 6, '2024-01-19 14:00:00', NULL, 'B', 3),
(17, 9, 11, '2024-01-19 17:00:00', NULL, 'C', 4),
(18, 12, 10, '2024-01-19 20:00:00', NULL, 'C', 4),
(19, 13, 15, '2024-01-20 14:00:00', NULL, 'D', 5),
(20, 16, 14, '2024-01-20 17:00:00', NULL, 'D', 5),
(21, 17, 19, '2024-01-20 20:00:00', NULL, 'E', 1),
(22, 20, 18, '2024-01-21 14:00:00', NULL, 'E', 1),
(23, 21, 23, '2024-01-21 17:00:00', NULL, 'F', 2),
(24, 24, 22, '2024-01-21 20:00:00', NULL, 'F', 2),
(25, 1, 4, '2024-01-22 17:00:00', NULL, 'A', 3),
(26, 2, 3, '2024-01-22 17:00:00', NULL, 'A', 3),
(27, 6, 7, '2024-01-22 20:00:00', NULL, 'B', 4),
(28, 8, 6, '2024-01-22 20:00:00', NULL, 'B', 4),
(29, 10, 12, '2024-01-23 14:00:00', NULL, 'C', 5),
(30, 11, 9, '2024-01-23 17:00:00', NULL, 'C', 5),
(31, 14, 16, '2024-01-23 20:00:00', NULL, 'D', 1),
(32, 13, 15, '2024-01-24 14:00:00', NULL, 'D', 1),
(33, 18, 20, '2024-01-24 17:00:00', NULL, 'E', 2),
(34, 17, 19, '2024-01-24 20:00:00', NULL, 'E', 2),
(35, 22, 24, '2024-01-25 14:00:00', NULL, 'F', 3),
(36, 21, 23, '2024-01-25 17:00:00', NULL, 'F', 3),
(37, 3, 1, '2024-01-26 14:00:00', NULL, 'A', 4),
(38, 4, 2, '2024-01-26 17:00:00', NULL, 'A', 4),
(39, 5, 8, '2024-01-26 20:00:00', NULL, 'B', 5),
(40, 7, 6, '2024-01-27 14:00:00', NULL, 'B', 5),
(41, 9, 12, '2024-01-27 17:00:00', NULL, 'C', 1),
(42, 11, 10, '2024-01-27 20:00:00', NULL, 'C', 1),
(43, 14, 15, '2024-01-28 14:00:00', NULL, 'D', 2),
(44, 16, 13, '2024-01-28 17:00:00', NULL, 'D', 2),
(45, 17, 18, '2024-01-28 20:00:00', NULL, 'E', 3),
(46, 20, 19, '2024-01-29 14:00:00', NULL, 'E', 3),
(47, 21, 24, '2024-01-29 17:00:00', NULL, 'F', 4),
(48, 23, 22, '2024-01-29 20:00:00', NULL, 'F', 4);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `ticket_count` int DEFAULT NULL,
  `date_reservattion` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'spectateur');

-- --------------------------------------------------------

--
-- Table structure for table `stadium`
--

CREATE TABLE `stadium` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `capacity` bigint DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stadium`
--

INSERT INTO `stadium` (`id`, `name`, `city`, `capacity`, `address`) VALUES
(1, 'National Stadium', 'Abidjan', 50000, '123 Main Street, Abidjan'),
(2, 'Unity Stadium', 'Yamoussoukro', 45000, '456 Central Avenue, Yamoussoukro'),
(3, 'Liberty Arena', 'Bouaké', 40000, '789 Freedom Road, Bouaké'),
(4, 'Victory Park', 'Korhogo', 35000, '101 Winners Circle, Korhogo'),
(5, 'Harmony Stadium', 'San Pedro', 30000, '222 Peaceful Lane, San Pedro'),
(6, 'Serenity Arena', 'Daloa', 32000, '333 Tranquil Street, Daloa'),
(7, 'Golden Stadium', 'Man', 28000, '444 Prosperity Avenue, Man'),
(8, 'Emerald Field', 'Gagnoa', 26000, '555 Green Boulevard, Gagnoa'),
(9, 'Royal Park', 'Bondoukou', 23000, '666 Regal Road, Bondoukou'),
(10, 'Silver Park', 'Grand-Bassam', 21000, '777 Silver Street, Grand-Bassam');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `TeamID` int NOT NULL,
  `TeamName` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `coatch` varchar(25) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`TeamID`, `TeamName`, `Country`, `coatch`, `logo`) VALUES
(1, 'Côte d’Ivoire', 'Côte d’Ivoire', 'louis gasset', 'CI'),
(2, 'Guinée-Bissau', 'Guinée-Bissau', 'baciro cande', 'GW'),
(3, 'Nigeria', 'Nigeria', 'jose peseiro', 'NG'),
(4, 'Guinée équatoriale', 'Guinée équatoriale', 'kamba diawara', 'GQ'),
(5, 'Egypte', 'Egypte', 'rui vitoria', 'EG'),
(6, 'Mozambique', 'Mozambique', 'chiquinho conde', 'MZ'),
(7, 'Ghana', 'Ghana', 'chris hughton', 'GH'),
(8, 'Cap-Vert', 'Cap-Vert', 'nita nedio', 'CV'),
(9, 'Sénégal', 'Sénégal', 'aliou cisse', 'SN'),
(10, 'Gambie', 'Gambie', 'tom saintfiet', 'GM'),
(11, 'Cameroun', 'Cameroun', 'rigobert song', 'CM'),
(12, 'Guinée', 'Guinée', 'baciro cande', 'GN'),
(13, 'Algérie', 'Algérie', 'djamel belmadi', 'DZ'),
(14, 'Angola', 'Angola', 'pedro goncalves', 'AO'),
(15, 'Burkina Faso', 'Burkina Faso', 'hubert velud', 'BF'),
(16, 'Mauritanie', 'Mauritanie', 'amir abdou', 'MR'),
(17, 'Tunisie', 'Tunisie', 'jaled kadri', 'TN'),
(18, 'Namibie', 'Namibie', 'collin benjamin', 'NA'),
(19, 'Mali', 'Mali', 'eric chelle', 'ML'),
(20, 'Afrique du Sud', 'Afrique du Sud', 'rassie erasmus', 'ZA'),
(21, 'Maroc', 'Maroc', 'oualid regragi', 'MA'),
(22, 'Tanzanie', 'Tanzanie', 'tom badia', 'TZ'),
(23, 'RDC', 'RDC', ' sebastien desabre', 'CD'),
(24, 'Zambie', 'Zambie', 'avram grant', 'ZM');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int NOT NULL,
  `STATUS` varchar(25) DEFAULT NULL,
  `id_reservation` int DEFAULT NULL,
  `matchID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matche`
--
ALTER TABLE `matche`
  ADD PRIMARY KEY (`MatchID`),
  ADD KEY `FK_Team1` (`Team1ID`),
  ADD KEY `FK_Team2` (`Team2ID`),
  ADD KEY `matches_ibfk_1` (`stadium_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stadium`
--
ALTER TABLE `stadium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`TeamID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_ibfk_2` (`matchID`),
  ADD KEY `ticket_ibfk_1` (`id_reservation`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matche`
--
ALTER TABLE `matche`
  ADD CONSTRAINT `FK_Team1` FOREIGN KEY (`Team1ID`) REFERENCES `team` (`TeamID`),
  ADD CONSTRAINT `FK_Team2` FOREIGN KEY (`Team2ID`) REFERENCES `team` (`TeamID`),
  ADD CONSTRAINT `matche_ibfk_1` FOREIGN KEY (`stadium_id`) REFERENCES `stadium` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`matchID`) REFERENCES `matche` (`MatchID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
