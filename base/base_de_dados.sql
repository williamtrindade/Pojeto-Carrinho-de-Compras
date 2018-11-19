-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Nov-2018 às 19:07
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `codigoPro` int(4) NOT NULL AUTO_INCREMENT,
  `nomePro` varchar(50) DEFAULT NULL,
  `descricaoPro` varchar(50) DEFAULT NULL,
  `precoPro` decimal(10,2) NOT NULL,
  PRIMARY KEY (`codigoPro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `codigoUsu` int(4) NOT NULL AUTO_INCREMENT,
  `nomeUsu` varchar(50) DEFAULT NULL,
  `senhaUsu` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`codigoUsu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE IF NOT EXISTS `venda` (
  `codigoVen` int(4) NOT NULL AUTO_INCREMENT,
  `codigoUsu` int(4) DEFAULT NULL,
  `codigoPro` int(4) DEFAULT NULL,
  PRIMARY KEY (`codigoVen`),
  KEY `codigoUsu` (`codigoUsu`),
  KEY `codigoPro` (`codigoPro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`codigoUsu`) REFERENCES `usuario` (`codigoUsu`),
  ADD CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`codigoPro`) REFERENCES `produto` (`codigoPro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
