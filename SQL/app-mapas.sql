/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `elderth_app.mapaparaavida.com.br` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `elderth_app.mapaparaavida.com.br`;

CREATE TABLE IF NOT EXISTS `configuracoes` (
  `idConfig` int(11) NOT NULL,
  `idU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `gestao` (
  `idU` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `sobrenome` text NOT NULL,
  `apelido` varchar(75) NOT NULL,
  `dataNasc` date NOT NULL,
  `nivel` int(1) NOT NULL,
  `email` varchar(75) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `imgperfil` varchar(10000) NOT NULL,
  PRIMARY KEY (`idU`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

REPLACE INTO `gestao` (`idU`, `nome`, `sobrenome`, `apelido`, `dataNasc`, `nivel`, `email`, `senha`, `imgperfil`) VALUES
	(1, 'Pablo Guilherme', 'Leite de Souza', 'swykany', '2003-04-05', 3, 'swykany@gmail.com', '$2y$10$9IHcTYKdbFtfMlQzSlALsORV5ayPkSN3ZDHyAO7nZiUCL0YPx4u72', '/imgs/users/adminsitrador/swykany/63d2987b68bb9/perfil63d2987b68bb9swykany.jpg'),
	(2, 'Carla', 'Alves Maia', 'Carla Alves', '1983-05-04', 3, 'carla.alves.maia.mapas.da.vida@gmail.com', '$2y$10$rjdQ.JPzPp/VarE21WqpUOslfiy0E4cdE9Ub62idyG2CKvPwdDD2G', '/imgs/users/adminsitrador/Carla Alves/63d411231274c/perfil63d411231274cCarla Alves.png'),
	(3, 'Elder', 'Theodoro', 'ElderTH', '1992-02-28', 3, 'elderth@elderth.com', '$2y$10$h/eAyeHI9GTxAT4LyqPr0uabydVV.E3KEF.DvKeYsXk8.L56jcqDm', '/imgs/users/adminsitrador/ElderTH/63dac58da6fb5/perfil63dac58da6fb5ElderTH.jpg');

CREATE TABLE IF NOT EXISTS `numerologia` (
  `idN` int(11) NOT NULL AUTO_INCREMENT,
  `nomeN` text NOT NULL,
  `numerologia` int(11) NOT NULL,
  `frase` longtext NOT NULL,
  `idPub` int(11) NOT NULL,
  `idTipo` int(11) NOT NULL,
  PRIMARY KEY (`idN`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

REPLACE INTO `numerologia` (`idN`, `nomeN`, `numerologia`, `frase`, `idPub`, `idTipo`) VALUES
	(1, '', 1, '', 0, 0),
	(2, '', 2, '', 0, 0),
	(3, '', 1, '', 0, 0);

CREATE TABLE IF NOT EXISTS `pedidos` (
  `idPed` int(11) NOT NULL AUTO_INCREMENT,
  `idC` int(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `NumWHTS` varchar(10) NOT NULL DEFAULT '',
  `dadosNB1` text NOT NULL,
  `dadosNB2` date NOT NULL,
  `dadosNB3` text DEFAULT NULL,
  `dadosNP1` text NOT NULL,
  `dadosNP2` date NOT NULL,
  `dados NP3` int(11) DEFAULT NULL,
  `dadosNE1` text NOT NULL,
  `dadosNE2` date NOT NULL,
  `nB` int(1) NOT NULL,
  `nP` int(1) NOT NULL,
  `nE` int(1) NOT NULL,
  PRIMARY KEY (`idPed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `publico` (
  `idPub` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `dir1` longtext DEFAULT NULL,
  `dir2` longtext DEFAULT NULL,
  PRIMARY KEY (`idPub`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

REPLACE INTO `publico` (`idPub`, `nome`, `dir1`, `dir2`) VALUES
	(1, 'Bebê', 'https://app.mapaparaavida.com.br/imgs/num/1/img11.jpg', 'https://app.mapaparaavida.com.br/imgs/num/1/img21.jpg'),
	(2, 'Pessoal', 'https://app.mapaparaavida.com.br/imgs/num/2/img12.jpg', 'https://app.mapaparaavida.com.br/imgs/num/2/img22.jpg'),
	(3, 'Empresa', NULL, NULL);

CREATE TABLE IF NOT EXISTS `tipo_numerologia` (
  `idTipo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  PRIMARY KEY (`idTipo`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
