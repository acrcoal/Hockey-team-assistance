-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 10:08 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cegep_php_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipes`
--

CREATE TABLE `equipes` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `nomEquipe` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `equipes`
--

INSERT INTO `equipes` (`id`, `nomEquipe`) VALUES
(1, 'Novices'),
(2, 'Atomes'),
(3, 'Peewee'),
(4, 'Bantam'),
(5, 'Midget'),
(6, 'Jumior');

-- --------------------------------------------------------

--
-- Table structure for table `joueurs`
--

CREATE TABLE `joueurs` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `accompagnateur1` varchar(30) DEFAULT NULL,
  `accompagnateur2` varchar(30) DEFAULT NULL,
  `idEquipe` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `joueurs`
--

INSERT INTO `joueurs` (`id`, `nom`, `prenom`, `accompagnateur1`, `accompagnateur2`, `idEquipe`) VALUES
(1, 'Quiroga', 'Gerardo', 'Magda', 'Eugenio', 1),
(2, 'Ibarra', 'Ivan', 'Mine', 'Fernando', 1),
(3, 'Estrada', 'Esteban', 'Laura', 'Genaro', 1),
(4, 'Ramirez', 'Axel', 'Yanira', 'Roberto', 1),
(5, 'Gonzalez', 'Edgardo', 'Iris', 'Albert', 1),
(6, 'Cerda', 'Luciano', 'Leticia', 'Humberto', 1),
(7, 'Valadez', 'Raul', 'Aurora', 'Juan', 1),
(8, 'Casas', 'Alejandro', 'Ivet', 'Gilberto', 1),
(9, 'Jordan', 'Michel', '', '', 1),
(10, 'Trujillo', 'Alfonso', '', '', 1),
(11, 'Froylan', 'Jury', 'Arai', 'John', 2),
(12, 'Chavez', 'Magdaleno', 'Anne', 'Jean', 2),
(13, 'Aguilar', 'Omar', 'Erika', 'Horacio', 2),
(14, 'Martinez', 'Alvaro', 'Sonia', 'Juan', 2),
(15, 'Santillan', 'Roberto', 'Aime', 'Eder', 2),
(16, 'Giza', 'Isrrael', 'Cindy', 'Esequiel', 2),
(17, 'Regalado', 'Juan Jose', 'Ali', 'Jose', 2),
(18, 'Froylan', 'Jury', 'Arai', 'John', 2),
(19, 'Garza', 'Noe', '', '', 2),
(20, 'Pinto', 'Hiram', '', '', 2),
(21, 'Martinez', 'Alvaro', 'Sonia', 'Juan', 3),
(22, 'Santillan', 'Roberto', 'Aime', 'Eder', 3),
(23, 'Gaitan', 'Juan', 'Sofi', 'Leonel', 3),
(24, 'Hernandez', 'Lauro', 'David', 'Jorge', 3),
(25, 'Angulo', 'Juan Carlos', 'Shaine', 'Tayler', 3),
(26, 'Freyre', 'Samar', 'Marely', 'Eduard', 3),
(27, 'Noguez', 'Victor', 'Silvia', 'Alejo', 3),
(28, 'Leos', 'Guillermo', 'Soraya', 'Ernesto', 3),
(29, 'Milmo', 'Tomas', '', '', 3),
(30, 'Clapton', 'Erick', '', '', 3),
(31, 'Zuniga', 'Raymundo', 'Dofi', 'Geremy', 4),
(32, 'Aristegui', 'Laurentino', 'Abril', 'Emanuel', 4),
(33, 'Solorzano', 'Manuel', 'Melba', 'Tayler', 4),
(34, 'Sostenes', 'Moises', 'Alondra', 'Alonso', 4),
(35, 'Talamantes', 'Zaul', 'Sonia', 'German', 4),
(36, 'Santos', 'Adrian', 'Carmen', 'Diego', 4),
(37, 'Lozano', 'Ramiro', 'Vanesa', 'Leonardo', 4),
(38, 'Montes', 'Esteban', 'Diana', 'Hugo', 4),
(39, 'Rangel', 'Victor', '', '', 4),
(40, 'Rogers', 'Kenny', '', '', 4),
(41, 'Zamora', 'Adolfo', 'Lizeth', 'Sanoni', 5),
(42, 'Williams', 'Hernan', 'Suzana', 'Gilberto', 5),
(43, 'Watts', 'Daniel', 'Elena', 'Jeremy', 5),
(44, 'Legarreta', 'Noe', 'Nayvi', 'Aron', 5),
(45, 'Montijo', 'Emiliano', 'Abigail', 'Hilario', 5),
(46, 'Lara', 'Lorenzo', 'Lucy', 'Geranio', 5),
(47, 'Jimenez', 'Oscar', 'Jessica', 'Osama', 5),
(48, 'Novoa', 'Omar', 'Juridia', 'Tom', 5),
(49, 'Abrego', 'Zair', '', '', 5),
(50, 'Tellez', 'Liam', '', '', 5),
(51, 'Chavez', 'Magdaleno', 'Anne', 'Jean', 6),
(52, 'Aguilar', 'Omar', 'Elenor', 'Horacio', 6),
(53, 'Tovar', 'Leo', 'Sara', 'Jerry', 6),
(54, 'Siller', 'Liandro', 'Lorena', 'Lalo', 6),
(55, 'Fuentes', 'Renato', 'Aurora', 'Emilio', 6),
(56, 'Sisneros', 'Fiury', 'Xoxitl', 'Moctezuma', 6),
(57, 'Pulido', 'Boby', 'Elisa', 'Faisan', 6),
(58, 'Reyes', 'Rene', 'Lola', 'Lencho', 6),
(59, 'Ferreti', 'Tuca', NULL, NULL, 6),
(60, 'Siboldi', 'Eugine', NULL, NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `presences`
--

CREATE TABLE `presences` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `pJoueurs` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `pAccompagnateur1` varchar(30) DEFAULT NULL,
  `pAccompagnateur2` varchar(30) DEFAULT NULL,
  `pEnt1` varchar(30) DEFAULT NULL,
  `idJoueur` smallint(5) UNSIGNED NOT NULL,
  `idEquipe` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `presences`
--

INSERT INTO `presences` (`id`, `pJoueurs`, `date`, `pAccompagnateur1`, `pAccompagnateur2`, `pEnt1`, `idJoueur`, `idEquipe`) VALUES
(39, 'Présence', '2020-10-13', 'Présence', 'Présence', '', 1, 1),
(40, '', '2020-10-13', '', '', 'Présence', 9, 1),
(41, 'Absence', '2020-10-13', 'Présence', 'Absence', '', 3, 1),
(42, '', '2020-10-13', '', '', 'Présence', 29, 3),
(43, '', '2020-10-13', '', '', 'Absence', 10, 1),
(44, 'Présence', '2020-10-13', 'Absence', 'Présence', '', 2, 1),
(45, 'Absence', '2020-10-13', 'Présence', 'Absence', '', 5, 1),
(46, '', '2020-10-14', '', '', 'Présence', 19, 2),
(47, '', '2020-10-14', '', '', 'Présence', 20, 2),
(48, 'Présence', '2020-10-14', 'Absence', 'Présence', '', 15, 2),
(49, 'Présence', '2020-10-14', 'Présence', 'Présence', '', 13, 2),
(50, 'Présence', '2020-10-14', 'Absence', 'Présence', '', 34, 4),
(51, '', '2020-10-14', '', '', 'Présence', 39, 4),
(52, 'Absence', '2020-10-14', 'Absence', 'Absence', '', 37, 4),
(53, 'Présence', '2020-10-15', 'Absence', 'Présence', '', 31, 4),
(54, '', '2020-10-15', '', '', 'Présence', 40, 4),
(55, 'Présence', '2020-10-15', 'Présence', 'Présence', '', 35, 4),
(56, '', '2020-10-15', '', '', 'Présence', 40, 4),
(57, 'Présence', '2020-10-15', 'Présence', 'Absence', '', 41, 5),
(58, 'Présence', '2020-10-15', 'Absence', 'Présence', '', 45, 5),
(59, 'Présence', '2020-10-15', 'Présence', 'Présence', '', 48, 5),
(60, '', '2020-10-15', '', '', 'Présence', 49, 5),
(61, 'Présence', '2020-10-15', 'Absence', 'Présence', '', 51, 6),
(62, 'Présence', '2020-10-15', 'Présence', 'Présence', '', 57, 6),
(63, '', '2020-10-15', '', '', 'Présence', 59, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joueurs`
--
ALTER TABLE `joueurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_EQUIPES_JOUEURS` (`idEquipe`);

--
-- Indexes for table `presences`
--
ALTER TABLE `presences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_JOUEURS_PRESENCES` (`idJoueur`),
  ADD KEY `FK_EQUIPES_PRESENCES_idx` (`idEquipe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipes`
--
ALTER TABLE `equipes`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `joueurs`
--
ALTER TABLE `joueurs`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `presences`
--
ALTER TABLE `presences`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `joueurs`
--
ALTER TABLE `joueurs`
  ADD CONSTRAINT `FK_EQUIPES_JOUEURS` FOREIGN KEY (`idEquipe`) REFERENCES `equipes` (`id`);

--
-- Constraints for table `presences`
--
ALTER TABLE `presences`
  ADD CONSTRAINT `FK_EQUIPES_PRESENCES` FOREIGN KEY (`idEquipe`) REFERENCES `equipes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_JOUEURS_PRESENCES` FOREIGN KEY (`idJoueur`) REFERENCES `joueurs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
