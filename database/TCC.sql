-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 27-Abr-2019 às 17:17
-- Versão do servidor: 10.3.13-MariaDB-1
-- versão do PHP: 7.3.3-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TCC`
--
CREATE DATABASE IF NOT EXISTS `TCC` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `TCC`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Category`
--

CREATE TABLE `Category` (
  `idCategory` int(10) NOT NULL,
  `nameCategory` varchar(25) NOT NULL,
  `descCategory` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Category_has_Item`
--

CREATE TABLE `Category_has_Item` (
  `id_Category_has_Item` int(10) NOT NULL,
  `fk_idItem` int(10) NOT NULL,
  `fk_idCategory` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Comment`
--

CREATE TABLE `Comment` (
  `idComment` int(10) NOT NULL,
  `textComment` text NOT NULL,
  `fk_idUser` int(10) NOT NULL,
  `fk_idItem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Favorites`
--

CREATE TABLE `Favorites` (
  `idFavorites` int(10) NOT NULL,
  `fk_idUser` int(10) NOT NULL,
  `fk_idItem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Image`
--

CREATE TABLE `Image` (
  `idImage` int(10) NOT NULL,
  `img` blob DEFAULT NULL,
  `fk_idItem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Item`
--

CREATE TABLE `Item` (
  `idItem` int(10) NOT NULL,
  `nameItem` varchar(80) NOT NULL,
  `descItem` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Price`
--

CREATE TABLE `Price` (
  `idPrice` int(10) NOT NULL,
  `datePrice` date NOT NULL,
  `valuePrice` varchar(15) NOT NULL,
  `fk_idStore` int(10) NOT NULL,
  `fk_idItem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Relationship`
--

CREATE TABLE `Relationship` (
  `idRelationship` int(10) NOT NULL,
  `fk_idUser` int(10) NOT NULL,
  `fk_idFriend` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Store`
--

CREATE TABLE `Store` (
  `idStore` int(10) NOT NULL,
  `urlStore` text NOT NULL,
  `descStore` text NOT NULL,
  `nameStore` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Token`
--

CREATE TABLE `Token` (
  `idToken` int(10) NOT NULL,
  `token` varchar(32) NOT NULL,
  `hashIPToken` varchar(32) NOT NULL,
  `expireDateToken` datetime NOT NULL,
  `dateCreationToken` datetime NOT NULL,
  `fk_idUser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `Token`
--

INSERT INTO `Token` (`idToken`, `token`, `hashIPToken`, `expireDateToken`, `dateCreationToken`, `fk_idUser`) VALUES
(1, '13ea96aa6bab545f797a0b1d5252c485', 'cb7271ffaab1129ddc7bf55ed9e50f97', '2019-04-26 02:55:22', '2019-04-25 14:55:22', 8),
(2, '949584f773b5b6777a3a0a22897a72b3', '84e68612d37bde2533698451f5b3b1b9', '2019-04-26 02:56:41', '2019-04-25 14:56:41', 8),
(3, '56a1cce70dfd0ddb38fdbdb12f18101d', '0ddfd0406054b8bbe729e74f259e11c2', '2019-04-26 02:56:52', '2019-04-25 14:56:52', 8),
(4, 'ce52169e37985c74d72c8424452904a1', 'dee64467b8804eb4de7335f26b2cea50', '2019-04-26 02:57:30', '2019-04-25 14:57:30', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `User`
--

CREATE TABLE `User` (
  `idUser` int(10) NOT NULL,
  `nameUser` varchar(25) NOT NULL,
  `emailUser` varchar(50) NOT NULL,
  `permissionUser` int(1) NOT NULL DEFAULT 1,
  `birthDateUser` date NOT NULL,
  `dateCreationUser` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `passwordUser` varchar(32) NOT NULL,
  `genderUser` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `User`
--

INSERT INTO `User` (`idUser`, `nameUser`, `emailUser`, `permissionUser`, `birthDateUser`, `dateCreationUser`, `passwordUser`, `genderUser`) VALUES
(8, 'Pedro', 'pedro@gmail.com', 1, '2002-04-25', '2019-04-25 15:40:44', '098f6bcd4621d373cade4e832627b4f6', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`idCategory`),
  ADD UNIQUE KEY `idCategory_UNIQUE` (`idCategory`),
  ADD KEY `idCategory_index` (`idCategory`);

--
-- Indexes for table `Category_has_Item`
--
ALTER TABLE `Category_has_Item`
  ADD PRIMARY KEY (`id_Category_has_Item`),
  ADD UNIQUE KEY `id_Category_has_Item_UNIQUE` (`id_Category_has_Item`),
  ADD KEY `fk_Category_has_Item_Item1_idx` (`fk_idItem`),
  ADD KEY `fk_Category_has_Item_Category1_idx` (`fk_idCategory`);

--
-- Indexes for table `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`idComment`),
  ADD UNIQUE KEY `idComment_UNIQUE` (`idComment`),
  ADD KEY `fk_Comment_User1_idx` (`fk_idUser`),
  ADD KEY `fk_Comment_Item1_idx` (`fk_idItem`);

--
-- Indexes for table `Favorites`
--
ALTER TABLE `Favorites`
  ADD PRIMARY KEY (`idFavorites`),
  ADD UNIQUE KEY `idFavorites_UNIQUE` (`idFavorites`),
  ADD KEY `Favorites_ibfk_1` (`fk_idUser`),
  ADD KEY `Favorites_ibfk_2` (`fk_idItem`);

--
-- Indexes for table `Image`
--
ALTER TABLE `Image`
  ADD PRIMARY KEY (`idImage`),
  ADD UNIQUE KEY `idImage_UNIQUE` (`idImage`),
  ADD KEY `fk_Image_Item1_idx` (`fk_idItem`);

--
-- Indexes for table `Item`
--
ALTER TABLE `Item`
  ADD PRIMARY KEY (`idItem`),
  ADD UNIQUE KEY `idItem_UNIQUE` (`idItem`);

--
-- Indexes for table `Price`
--
ALTER TABLE `Price`
  ADD PRIMARY KEY (`idPrice`),
  ADD UNIQUE KEY `idPrice_UNIQUE` (`idPrice`),
  ADD KEY `fk_Price_Store1_idx` (`fk_idStore`),
  ADD KEY `fk_Price_Item1_idx` (`fk_idItem`);

--
-- Indexes for table `Relationship`
--
ALTER TABLE `Relationship`
  ADD PRIMARY KEY (`idRelationship`),
  ADD UNIQUE KEY `idListFriends_UNIQUE` (`idRelationship`),
  ADD KEY `fk_idUser` (`fk_idUser`),
  ADD KEY `fk_listFriends_User1_idx` (`fk_idFriend`);

--
-- Indexes for table `Store`
--
ALTER TABLE `Store`
  ADD PRIMARY KEY (`idStore`),
  ADD UNIQUE KEY `idStore_UNIQUE` (`idStore`);

--
-- Indexes for table `Token`
--
ALTER TABLE `Token`
  ADD PRIMARY KEY (`idToken`),
  ADD UNIQUE KEY `idToken_UNIQUE` (`idToken`),
  ADD KEY `fk_Token_User1_idx` (`fk_idUser`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `idUser_UNIQUE` (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `idCategory` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Category_has_Item`
--
ALTER TABLE `Category_has_Item`
  MODIFY `id_Category_has_Item` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Comment`
--
ALTER TABLE `Comment`
  MODIFY `idComment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Favorites`
--
ALTER TABLE `Favorites`
  MODIFY `idFavorites` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Image`
--
ALTER TABLE `Image`
  MODIFY `idImage` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Item`
--
ALTER TABLE `Item`
  MODIFY `idItem` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Price`
--
ALTER TABLE `Price`
  MODIFY `idPrice` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Relationship`
--
ALTER TABLE `Relationship`
  MODIFY `idRelationship` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Store`
--
ALTER TABLE `Store`
  MODIFY `idStore` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Token`
--
ALTER TABLE `Token`
  MODIFY `idToken` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `idUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `Category_has_Item`
--
ALTER TABLE `Category_has_Item`
  ADD CONSTRAINT `fk_Category_has_Item_Category1` FOREIGN KEY (`fk_idCategory`) REFERENCES `Category` (`idCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Category_has_Item_Item1` FOREIGN KEY (`fk_idItem`) REFERENCES `Item` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `Comment`
--
ALTER TABLE `Comment`
  ADD CONSTRAINT `fk_Comment_Item1` FOREIGN KEY (`fk_idItem`) REFERENCES `Item` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Comment_User1` FOREIGN KEY (`fk_idUser`) REFERENCES `User` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `Favorites`
--
ALTER TABLE `Favorites`
  ADD CONSTRAINT `Favorites_ibfk_1` FOREIGN KEY (`fk_idUser`) REFERENCES `User` (`idUser`),
  ADD CONSTRAINT `Favorites_ibfk_2` FOREIGN KEY (`fk_idItem`) REFERENCES `Item` (`idItem`);

--
-- Limitadores para a tabela `Image`
--
ALTER TABLE `Image`
  ADD CONSTRAINT `fk_Image_Item1` FOREIGN KEY (`fk_idItem`) REFERENCES `Item` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `Price`
--
ALTER TABLE `Price`
  ADD CONSTRAINT `fk_Price_Item1` FOREIGN KEY (`fk_idItem`) REFERENCES `Item` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Price_Store1` FOREIGN KEY (`fk_idStore`) REFERENCES `Store` (`idStore`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `Relationship`
--
ALTER TABLE `Relationship`
  ADD CONSTRAINT `fk_listFriends_User1` FOREIGN KEY (`fk_idFriend`) REFERENCES `User` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `listFriends_ibfk_1` FOREIGN KEY (`fk_idUser`) REFERENCES `User` (`idUser`);

--
-- Limitadores para a tabela `Token`
--
ALTER TABLE `Token`
  ADD CONSTRAINT `fk_Token_User1` FOREIGN KEY (`fk_idUser`) REFERENCES `User` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
