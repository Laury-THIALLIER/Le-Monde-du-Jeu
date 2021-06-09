-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: mysql-laury.alwaysdata.net
-- Generation Time: Oct 17, 2020 at 02:00 AM
-- Server version: 10.4.12-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laury_lemondedujeu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Login` varchar(25) NOT NULL,
  `Mdp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Login`, `Mdp`) VALUES
('Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `jeu`
--

CREATE TABLE `jeu` (
  `IDJeu` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `PrixMoy` int(11) NOT NULL,
  `NbrJoueurMin` int(11) NOT NULL,
  `NbrJoueurMax` int(11) NOT NULL,
  `Duree` int(11) NOT NULL,
  `AgeMin` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Video` varchar(255) NOT NULL,
  `ID_Note` int(11) NOT NULL,
  `ID_Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jeu`
--

INSERT INTO `jeu` (`IDJeu`, `Nom`, `PrixMoy`, `NbrJoueurMin`, `NbrJoueurMax`, `Duree`, `AgeMin`, `Image`, `Video`, `ID_Note`, `ID_Type`) VALUES
(1, 'Splendor', 25, 2, 4, 30, 10, 'https://cdn1.philibertnet.com/329538-thickbox_default/splendor.jpg', 'https://www.youtube.com/embed/gz0b3J9Ml80', 4, 2),
(2, 'Mysterium', 40, 2, 7, 40, 10, 'https://www.espritjeu.com/upload/image/mysterium-p-image-56159-grande.jpg', 'https://www.youtube.com/embed/Or13pbEfy6I', 5, 4),
(3, 'Bluffer', 20, 2, 10, 30, 12, 'https://www.agorajeux.com/11189-thickbox_default/bluffer.jpg', 'https://www.youtube.com/embed/eJrAbVd1j50', 5, 1),
(4, 'Sbires', 30, 2, 5, 45, 12, 'https://www.espritjeu.com/upload/image/sbires-p-image-61537-grande.jpg', 'https://www.youtube.com/embed/5xn-Kda3vmc', 4, 2),
(5, 'Captain Sonar', 40, 2, 8, 45, 14, 'https://www.espritjeu.com/upload/image/captain-sonar-p-image-59110-grande.jpg', 'https://www.youtube.com/embed/KhKQKmIkY-4', 5, 2),
(6, 'Love Letter', 10, 2, 6, 20, 10, 'https://cdn1.philibertnet.com/452305-large_default/love-letter.jpg', 'https://www.youtube.com/embed/l3tuahyJRXI', 5, 5),
(7, 'Paper Tales', 30, 2, 5, 30, 12, 'https://cdn2.philibertnet.com/374414-thickbox_default/paper-tales.jpg', 'https://www.youtube.com/embed/erIw6LfjCgk', 3, 2),
(8, 'Code Names', 20, 2, 8, 15, 12, 'https://cdn3.philibertnet.com/353015-thickbox_default/codenames-vf.jpg', 'https://www.youtube.com/embed/szYTmx0bYyw', 5, 1),
(9, 'Hanabi', 10, 2, 5, 20, 8, 'https://www.espritjeu.com/upload/image/hanabi-p-image-71105-grande.jpg', 'https://www.youtube.com/embed/vG9-letaXCs', 3, 4),
(10, 'Clank', 45, 2, 4, 45, 14, 'https://www.espritjeu.com/upload/image/clank--p-image-63096-grande.jpg', 'https://www.youtube.com/embed/RSUE4Q8jW9k', 4, 2),
(11, 'Augustus', 20, 2, 6, 30, 8, 'https://www.espritjeu.com/upload/image/augustus-p-image-49942-grande.jpg', 'https://www.youtube.com/embed/NydGhjgta7c', 4, 2),
(12, '6 Qui Prend', 15, 2, 10, 30, 10, 'https://www.troubajoueurs.fr/wp-content/uploads/2019/04/6-qui-prend-1.png', 'https://www.youtube.com/embed/kEvS1t9bpEk', 4, 5),
(13, 'Wingspan', 50, 1, 5, 60, 10, 'https://www.espritjeu.com/upload/image/wingspan-p-image-67127-grande.jpg', 'https://www.youtube.com/embed/smXC8UIQL38', 4, 2),
(14, 'Isle of Skye', 30, 2, 5, 60, 8, 'https://www.canalbd.net/img/couvpage/28/9910000064289_cg.jpg', 'https://www.youtube.com/embed/fjcJJeoU6w4', 3, 2),
(15, 'Gizmos', 30, 2, 4, 50, 14, 'https://cdn1.philibertnet.com/425911-large_default/gizmos.jpg', 'https://www.youtube.com/embed/sTUoHGHGvwA', 4, 2),
(16, 'Colt Express', 25, 2, 6, 40, 10, 'https://cdn2.philibertnet.com/334664-large_default/colt-express.jpg', 'https://www.youtube.com/embed/YtHVz6Tch94', 4, 2),
(17, 'Chakra', 25, 2, 4, 30, 8, 'https://www.espritjeu.com/upload/image/chakra-p-image-67458-grande.jpg', 'https://www.youtube.com/embed/KbhgP03PnXo', 4, 2),
(18, 'Oriflamme', 15, 3, 5, 20, 10, 'https://cdn2.philibertnet.com/466983-large_default/oriflamme.jpg', 'https://www.youtube.com/embed/6TZkSftLnj4', 5, 5),
(19, 'Dr Eureka', 20, 2, 4, 15, 6, 'https://www.espritjeu.com/upload/image/dr-eureka-p-image-56851-grande.jpg', 'https://www.youtube.com/embed/b4ebVXXxeGM', 3, 3),
(20, 'Welcome', 20, 1, 50, 25, 10, 'https://cdn1.philibertnet.com/390979-thickbox_default/welcome.jpg', 'https://www.youtube.com/embed/V27IGRa_9Jg', 3, 2),
(21, 'Minecraft', 35, 2, 4, 45, 10, 'https://www.espritjeu.com/upload/image/minecraft---le-jeu-de-plateau-p-image-69543-grande.jpg', 'https://www.youtube.com/embed/evfMgBqAb9U', 4, 3),
(22, 'Mito', 10, 3, 5, 25, 7, 'https://www.espritjeu.com/upload/image/mito-p-image-63988-grande.jpg', 'https://www.youtube.com/embed/d7T6eS7EUck', 4, 5),
(23, 'Labyrinthe', 30, 2, 4, 30, 7, 'https://cdn1.philibertnet.com/392933-large_default/labyrinthe.jpg', 'https://www.youtube.com/embed/8W1CjKRnAng', 4, 3),
(24, 'Croque Carotte', 25, 2, 4, 20, 4, 'https://www.espritjeu.com/upload/image/croque-carotte-p-image-54932-grande.jpg', 'https://www.youtube.com/embed/F3EI8Rvyz0Q', 3, 3),
(25, 'Kluster', 20, 1, 4, 10, 6, 'https://www.espritjeu.com/upload/image/kluster---kisskiss-edition-p-image-69512-grande.jpg', 'https://www.youtube.com/embed/nJkgHlRWubU', 3, 1),
(26, 'Docteur Pilule', 20, 4, 12, 30, 10, 'https://www.troubajoueurs.fr/wp-content/uploads/2019/08/Docteur-pilule.png\r\n', 'https://www.youtube.com/embed/5Iu0-2MY7U8', 3, 1),
(27, '7 Wonders', 40, 2, 7, 30, 10, 'https://www.espritjeu.com/upload/image/7-wonders-p-image-65500-grande.jpg', 'https://www.youtube.com/embed/0VU6lGR95X0', 3, 2),
(28, 'Azul', 35, 2, 4, 40, 8, 'https://www.espritjeu.com/upload/image/azul-p-image-65690-grande.jpg', 'https://www.youtube.com/embed/C9zOpikMSzA', 3, 2),
(29, 'Concept', 25, 4, 12, 40, 10, 'https://www.troubajoueurs.fr/wp-content/uploads/2019/04/conceptpng.png', 'https://www.youtube.com/embed/HXG_azOnris', 3, 1),
(31, 'L\'île Interdite', 25, 2, 4, 30, 10, 'https://media.cultura.com/media/catalog/product/cache/1/image/1000x1000/9df78eab33525d08d6e5fb8d27136e95/j/e/jeu-ile-interdite-3760052140747_0.jpg?t=1576088634', 'https://www.youtube.com/embed/n7LF550SIuk', 4, 4),
(32, 'Just One', 20, 3, 7, 20, 8, 'https://cdn3.philibertnet.com/456747-thickbox_default/just-one.jpg', 'https://www.youtube.com/embed/FNddIoRoyZ8', 4, 1),
(33, 'Mission Pas Possible', 20, 1, 5, 10, 10, 'https://cdn2.philibertnet.com/390723-large_default/56983.jpg', 'https://www.youtube.com/embed/b1OzT1LmfYE', 4, 4),
(34, 'Magic Maze', 20, 1, 8, 15, 8, 'https://www.espritjeu.com/upload/image/magic-maze-p-image-61489-grande.jpg', 'https://www.youtube.com/embed/yWAwm46h3U0', 5, 4),
(35, 'Las Vegas', 20, 2, 5, 30, 8, 'https://www.didacto.com/13100-large_default/las-vegas.jpg', 'https://www.youtube.com/embed/VDzMzovq9Pk', 3, 1),
(36, 'Le Verger', 40, 2, 4, 15, 3, 'https://images.oxybul.com/Photo/IMG_FICHE_PRODUIT/Image/1200x1200/5/503570.jpg', 'https://www.youtube.com/embed/kHrLLBwi44w', 3, 3),
(37, 'Wazabi', 20, 2, 6, 20, 8, 'https://products-images.di-static.com/image/gigamic-wazabi/3421272103317-475x500-1.jpg', 'https://www.youtube.com/embed/2aImCVUpCmM', 4, 1),
(38, 'Service Compris', 20, 2, 6, 45, 10, 'https://www.400coups.ch/images/detailed/0/asmodee-service-compris-nouvelle-edition.jpg', 'https://www.youtube.com/embed/1yqKw2cILAg', 4, 1),
(39, 'Sagrada', 35, 1, 4, 40, 14, 'https://cdn3.philibertnet.com/372404-large_default/51197.jpg', 'https://www.youtube.com/embed/8jAJlRqL9Pk', 2, 2),
(40, 'The Big Idea', 15, 3, 6, 25, 8, 'https://cdn1.philibertnet.com/312778-thickbox_default/the-big-idea.jpg', 'https://www.youtube.com/embed/dNug-xJ1QDY', 3, 1),
(41, 'Tyrannosaurus Rex', 25, 2, 6, 20, 6, 'https://media.cultura.com/media/catalog/product/cache/1/image/1000x1000/9df78eab33525d08d6e5fb8d27136e95/t/y/tyrannosaurus-rex-tyrannosaurus-rex-3760046780201_0.jpg?t=1576116778', 'https://www.youtube.com/embed/tdyOV2ZJYcM', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `IDNote` int(11) NOT NULL,
  `Libelle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`IDNote`, `Libelle`) VALUES
(1, 'Mauvais'),
(2, 'Moyen'),
(3, 'Bien'),
(4, 'Très bien'),
(5, 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `IDType` int(11) NOT NULL,
  `Libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`IDType`, `Libelle`) VALUES
(1, 'Jeu d\'ambiance'),
(2, 'Jeu de strategie'),
(3, 'Jeu pour enfants'),
(4, 'Jeu cooperatif'),
(5, 'Jeu de carte');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Login`);

--
-- Indexes for table `jeu`
--
ALTER TABLE `jeu`
  ADD PRIMARY KEY (`IDJeu`),
  ADD KEY `ID_Note` (`ID_Note`),
  ADD KEY `ID_Type` (`ID_Type`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`IDNote`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`IDType`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jeu`
--
ALTER TABLE `jeu`
  MODIFY `IDJeu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `IDType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jeu`
--
ALTER TABLE `jeu`
  ADD CONSTRAINT `jeu_ibfk_1` FOREIGN KEY (`ID_Note`) REFERENCES `note` (`IDNote`),
  ADD CONSTRAINT `jeu_ibfk_2` FOREIGN KEY (`ID_Type`) REFERENCES `type` (`IDType`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
