-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 09-Jan-2020 às 17:55
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabalhoprojeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

DROP TABLE IF EXISTS `contrato`;
CREATE TABLE IF NOT EXISTS `contrato` (
  `id_contrato` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilizador` int(11) DEFAULT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `id_regulacao` int(11) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT 'Contrato padrão',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_contrato`),
  KEY `id_utilizador` (`id_utilizador`),
  KEY `id_empresa` (`id_empresa`),
  KEY `id_regulacao` (`id_regulacao`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contrato`
--

INSERT INTO `contrato` (`id_contrato`, `id_utilizador`, `id_empresa`, `id_regulacao`, `descricao`, `created`, `modified`) VALUES
(2, 4, 1, 1, 'Contrato op', NULL, '2020-01-08 21:24:50'),
(4, 1, 1, 1, 'Contrato padrão', '2020-01-08 21:23:09', '2020-01-08 21:23:09'),
(5, 5, 1, 1, 'Contrato padrão', '2020-01-08 21:23:31', '2020-01-08 21:23:31'),
(6, 3, 1, 1, 'Contrato padrão', '2020-01-09 11:23:02', '2020-01-09 11:23:02'),
(8, 1, 2, 1, 'Contrato padrão', '2020-01-09 17:17:56', '2020-01-09 17:17:56');

-- --------------------------------------------------------

--
-- Stand-in structure for view `contratoextended`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `contratoextended`;
CREATE TABLE IF NOT EXISTS `contratoextended` (
`id_contrato` int(11)
,`empresa` varchar(90)
,`web` varchar(150)
,`utilizador` varchar(90)
,`email` varchar(250)
,`designacao` varchar(90)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `contrato_completo`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `contrato_completo`;
CREATE TABLE IF NOT EXISTS `contrato_completo` (
`id_contrato` int(11)
,`empresa` varchar(90)
,`web` varchar(150)
,`utilizador` varchar(90)
,`email` varchar(250)
,`designacao` varchar(90)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) NOT NULL,
  `web` varchar(150) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome`, `web`, `email`, `pass`) VALUES
(1, 'MagoCorp', 'http:\\\\www.mago.pt', 'ceo@mago.pt', 'qwerty'),
(2, 'Pentium Corp', 'pentium.com', 'mdasd@das.ds', 'qwerty');

-- --------------------------------------------------------

--
-- Estrutura da tabela `regulacao`
--

DROP TABLE IF EXISTS `regulacao`;
CREATE TABLE IF NOT EXISTS `regulacao` (
  `id_regulacao` int(11) NOT NULL AUTO_INCREMENT,
  `designacao` varchar(90) NOT NULL,
  `local_efetivo` varchar(250) NOT NULL,
  `regulamento` varchar(250) NOT NULL,
  PRIMARY KEY (`id_regulacao`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `regulacao`
--

INSERT INTO `regulacao` (`id_regulacao`, `designacao`, `local_efetivo`, `regulamento`) VALUES
(1, 'Regulamento de Proteção de dados', 'União Europeia', 'http://www.pgdlisboa.pt/leis/lei_mostra_articulado.php?nid=2961&tabela=leis&so_miolo=');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

DROP TABLE IF EXISTS `utilizador`;
CREATE TABLE IF NOT EXISTS `utilizador` (
  `id_utilizador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) NOT NULL,
  `idade` int(2) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  PRIMARY KEY (`id_utilizador`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`id_utilizador`, `nome`, `idade`, `email`, `pass`) VALUES
(1, 'Duarte Cruz', 16, 'duartemcruz@hotmail.com', 'qwerty'),
(3, 'Zé das Coves', 32, 'mago@compal.com', 'qwerty'),
(4, 'MagoPTzão', 10, 'mago@boss.tv', 'qwerty'),
(5, 'agfhf', 17, 'hfdhds@basaf.vb', 'qwerty');

-- --------------------------------------------------------

--
-- Structure for view `contratoextended`
--
DROP TABLE IF EXISTS `contratoextended`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `contratoextended`  AS  select `c`.`id_contrato` AS `id_contrato`,`e`.`nome` AS `empresa`,`e`.`web` AS `web`,`u`.`nome` AS `utilizador`,`u`.`email` AS `email`,`r`.`designacao` AS `designacao` from (((`contrato` `c` join `empresa` `e`) join `regulacao` `r`) join `utilizador` `u`) group by `u`.`id_utilizador` ;

-- --------------------------------------------------------

--
-- Structure for view `contrato_completo`
--
DROP TABLE IF EXISTS `contrato_completo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `contrato_completo`  AS  select `c`.`id_contrato` AS `id_contrato`,`e`.`nome` AS `empresa`,`e`.`web` AS `web`,`u`.`nome` AS `utilizador`,`u`.`email` AS `email`,`r`.`designacao` AS `designacao` from (((`contrato` `c` join `empresa` `e`) join `regulacao` `r`) join `utilizador` `u`) where ((`c`.`id_utilizador` = `u`.`id_utilizador`) and (`c`.`id_empresa` = `e`.`id_empresa`) and (`c`.`id_regulacao` = `r`.`id_regulacao`)) ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`id_utilizador`) REFERENCES `utilizador` (`id_utilizador`),
  ADD CONSTRAINT `contrato_ibfk_2` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`),
  ADD CONSTRAINT `contrato_ibfk_3` FOREIGN KEY (`id_regulacao`) REFERENCES `regulacao` (`id_regulacao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
