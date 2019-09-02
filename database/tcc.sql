-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Ago-2019 às 17:28
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `idCategory` int(10) NOT NULL,
  `nameCategory` varchar(25) NOT NULL,
  `descCategory` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`idCategory`, `nameCategory`, `descCategory`) VALUES
(1, 'Celular', 'Celulares e Smartphones'),
(2, 'Eletrodomésticos', 'Geladeiras, fogões, micro-ondas, e etc'),
(3, 'Auto peças', 'Tudo para seu carro, moto, e etc');

-- --------------------------------------------------------

--
-- Estrutura da tabela `category_has_item`
--

CREATE TABLE `category_has_item` (
  `id_Category_has_Item` int(10) NOT NULL,
  `fk_idItem` int(10) NOT NULL,
  `fk_idCategory` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `category_has_item`
--

INSERT INTO `category_has_item` (`id_Category_has_Item`, `fk_idItem`, `fk_idCategory`) VALUES
(1, 9, 1),
(2, 8, 2),
(3, 2, 2),
(5, 7, 2),
(6, 5, 2),
(7, 3, 2),
(8, 13, 3),
(9, 6, 2),
(10, 10, 2),
(11, 11, 1),
(12, 12, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comment`
--

CREATE TABLE `comment` (
  `idComment` int(10) NOT NULL,
  `textComment` text NOT NULL,
  `fk_idUser` int(10) NOT NULL,
  `fk_idItem` int(10) NOT NULL,
  `dateComment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comment`
--

INSERT INTO `comment` (`idComment`, `textComment`, `fk_idUser`, `fk_idItem`, `dateComment`) VALUES
(2, 'Muito bom!!', 8, 9, '2019-08-27 12:20:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `favorites`
--

CREATE TABLE `favorites` (
  `idFavorites` int(10) NOT NULL,
  `fk_idUser` int(10) NOT NULL,
  `fk_idItem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `favorites`
--

INSERT INTO `favorites` (`idFavorites`, `fk_idUser`, `fk_idItem`) VALUES
(2, 8, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `image`
--

CREATE TABLE `image` (
  `idImage` int(10) NOT NULL,
  `img` blob,
  `fk_idItem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `idItem` int(10) NOT NULL,
  `nameItem` varchar(80) NOT NULL,
  `descItem` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`idItem`, `nameItem`, `descItem`) VALUES
(2, 'Geladeira Brastemp 2000', 'Geladeira 60 litros com capacidade para a família toda'),
(3, 'Aspirador de pó multifuncional', 'Aspirador de plástico turbinado'),
(4, 'Espelho grande', 'Espelho 2m x 0,8m'),
(5, 'Fritadeira air frier Philips walita', 'Polishop fritadeira que frita sem óleo'),
(6, 'Triturador de carne mondial', 'Mondial MC-03'),
(7, 'Liquidificador grande', 'Para vitaminas, batidas, massas, e muito mais'),
(8, 'Fogão 5 bocas', 'Fogão cooktop 5 bocas qualidade'),
(9, 'Xiaomi Redmi Note 7', 'Com 64gb de armazenamento e 4gb de memória'),
(10, 'Ar-condicionado 3000', ''),
(11, 'Iphone XS', 'É caro mas é bom'),
(12, 'Smart TV 8K Ultra HD LG', '60 polegadas. Não inclui o DVD do rei leão'),
(13, 'Pneu Bridgestone', 'ER300');

-- --------------------------------------------------------

--
-- Estrutura da tabela `price`
--

CREATE TABLE `price` (
  `idPrice` int(10) NOT NULL,
  `datePrice` varchar(25) NOT NULL,
  `valuePrice` float NOT NULL,
  `fk_idStore` int(10) NOT NULL,
  `fk_idItem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `price`
--

INSERT INTO `price` (`idPrice`, `datePrice`, `valuePrice`, `fk_idStore`, `fk_idItem`) VALUES
(2, 'Maio/2017', 1200, 2, 2),
(3, 'Junho/2017', 300, 2, 4),
(4, 'Agosto/2018', 499, 3, 6),
(5, 'Abril/2019', 4000, 2, 12),
(6, 'Maio/2019', 2155, 2, 2),
(7, 'Setembro/2019', 1335, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `store`
--

CREATE TABLE `store` (
  `idStore` int(10) NOT NULL,
  `urlStore` text NOT NULL,
  `descStore` text NOT NULL,
  `nameStore` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `store`
--

INSERT INTO `store` (`idStore`, `urlStore`, `descStore`, `nameStore`) VALUES
(2, 'https://lojinhatop.com.br', 'Lojinha Top: essa loja está cheia de preços muito interessantes', 'Lojinha Top'),
(3, 'http://casemiro.com.br', 'Loja virtual brasileira. Somente os melhores preços', 'Casemiro'),
(4, 'https://hipermais.com.br', 'Loja física e virtual proveniente de Santa Catarina', 'Hipermais');

-- --------------------------------------------------------

--
-- Estrutura da tabela `token`
--

CREATE TABLE `token` (
  `idToken` int(10) NOT NULL,
  `token` varchar(32) NOT NULL,
  `hashIPToken` varchar(32) NOT NULL,
  `expireDateToken` datetime NOT NULL,
  `dateCreationToken` datetime NOT NULL,
  `fk_idUser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `token`
--

INSERT INTO `token` (`idToken`, `token`, `hashIPToken`, `expireDateToken`, `dateCreationToken`, `fk_idUser`) VALUES
(1, '13ea96aa6bab545f797a0b1d5252c485', 'cb7271ffaab1129ddc7bf55ed9e50f97', '2019-04-26 02:55:22', '2019-04-25 14:55:22', 8),
(2, '949584f773b5b6777a3a0a22897a72b3', '84e68612d37bde2533698451f5b3b1b9', '2019-04-26 02:56:41', '2019-04-25 14:56:41', 8),
(3, '56a1cce70dfd0ddb38fdbdb12f18101d', '0ddfd0406054b8bbe729e74f259e11c2', '2019-04-26 02:56:52', '2019-04-25 14:56:52', 8),
(4, 'ce52169e37985c74d72c8424452904a1', 'dee64467b8804eb4de7335f26b2cea50', '2019-04-26 02:57:30', '2019-04-25 14:57:30', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `idUser` int(10) NOT NULL,
  `nameUser` varchar(25) NOT NULL,
  `emailUser` varchar(50) NOT NULL,
  `permissionUser` int(1) NOT NULL DEFAULT '1',
  `birthDateUser` date NOT NULL,
  `dateCreationUser` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `passwordUser` varchar(32) NOT NULL,
  `genderUser` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`idUser`, `nameUser`, `emailUser`, `permissionUser`, `birthDateUser`, `dateCreationUser`, `passwordUser`, `genderUser`) VALUES
(8, 'Pedro', 'pedro@gmail.com', 1, '2002-04-25', '2019-04-25 15:40:44', '098f6bcd4621d373cade4e832627b4f6', 'male'),
(10, 'Lara', 'larinha@email.com', 0, '2002-02-13', '2019-08-25 17:44:28', 'larinha123', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`),
  ADD UNIQUE KEY `idCategory_UNIQUE` (`idCategory`),
  ADD KEY `idCategory_index` (`idCategory`);

--
-- Indexes for table `category_has_item`
--
ALTER TABLE `category_has_item`
  ADD PRIMARY KEY (`id_Category_has_Item`),
  ADD UNIQUE KEY `id_Category_has_Item_UNIQUE` (`id_Category_has_Item`),
  ADD KEY `fk_Category_has_Item_Item1_idx` (`fk_idItem`),
  ADD KEY `fk_Category_has_Item_Category1_idx` (`fk_idCategory`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`),
  ADD UNIQUE KEY `idComment_UNIQUE` (`idComment`),
  ADD KEY `fk_Comment_User1_idx` (`fk_idUser`),
  ADD KEY `fk_Comment_Item1_idx` (`fk_idItem`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`idFavorites`),
  ADD UNIQUE KEY `idFavorites_UNIQUE` (`idFavorites`),
  ADD KEY `Favorites_ibfk_1` (`fk_idUser`),
  ADD KEY `Favorites_ibfk_2` (`fk_idItem`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`idImage`),
  ADD UNIQUE KEY `idImage_UNIQUE` (`idImage`),
  ADD KEY `fk_Image_Item1_idx` (`fk_idItem`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`idItem`),
  ADD UNIQUE KEY `idItem_UNIQUE` (`idItem`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`idPrice`),
  ADD UNIQUE KEY `idPrice_UNIQUE` (`idPrice`),
  ADD KEY `fk_Price_Store1_idx` (`fk_idStore`),
  ADD KEY `fk_Price_Item1_idx` (`fk_idItem`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`idStore`),
  ADD UNIQUE KEY `idStore_UNIQUE` (`idStore`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`idToken`),
  ADD UNIQUE KEY `idToken_UNIQUE` (`idToken`),
  ADD KEY `fk_Token_User1_idx` (`fk_idUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `idUser_UNIQUE` (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_has_item`
--
ALTER TABLE `category_has_item`
  MODIFY `id_Category_has_Item` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `idFavorites` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `idImage` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `idItem` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `idPrice` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `idStore` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `idToken` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `category_has_item`
--
ALTER TABLE `category_has_item`
  ADD CONSTRAINT `fk_Category_has_Item_Category1` FOREIGN KEY (`fk_idCategory`) REFERENCES `category` (`idCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Category_has_Item_Item1` FOREIGN KEY (`fk_idItem`) REFERENCES `item` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_Comment_Item1` FOREIGN KEY (`fk_idItem`) REFERENCES `item` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Comment_User1` FOREIGN KEY (`fk_idUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `Favorites_ibfk_1` FOREIGN KEY (`fk_idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `Favorites_ibfk_2` FOREIGN KEY (`fk_idItem`) REFERENCES `item` (`idItem`);

--
-- Limitadores para a tabela `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_Image_Item1` FOREIGN KEY (`fk_idItem`) REFERENCES `item` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `fk_Price_Item1` FOREIGN KEY (`fk_idItem`) REFERENCES `item` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Price_Store1` FOREIGN KEY (`fk_idStore`) REFERENCES `store` (`idStore`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_Token_User1` FOREIGN KEY (`fk_idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
