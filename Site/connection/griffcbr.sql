-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Fev-2016 às 18:47
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `griffcbr`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador unico das fotos',
  `nome` varchar(50) DEFAULT NULL COMMENT 'Nome da imagem',
  `foto` varchar(100) DEFAULT NULL COMMENT 'Nome do arquivo imagem',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador unico dos usuarios adm',
  `nome` varchar(50) DEFAULT NULL COMMENT 'Nome do usuario',
  `usuario` varchar(25) DEFAULT NULL COMMENT 'Nome do login do usuario',
  `senha` varchar(40) DEFAULT NULL COMMENT 'Senha do Usuario',
  `nivel` int(1) DEFAULT NULL COMMENT 'Nivel de acesso',
  `email` varchar(100) NOT NULL COMMENT 'Email usuario',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `nivel`, `email`) VALUES
(1, 'Evandro C Cortiano', 'EvandroCtba', 'a078f286537f13de1da0ea5af1297946f5e6b584', 2, '35298fc666cddf680eb5331227d5ace235fbdf0a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
