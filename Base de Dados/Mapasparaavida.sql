-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jan-2023 às 14:11
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Estrutura da tabela `configuracoes`
--

CREATE TABLE `configuracoes` (
  `idConfig` int(11) NOT NULL,
  `idU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gestao`
--

CREATE TABLE `gestao` (
  `idU` int(11) NOT NULL,
  `nome` date NOT NULL,
  `sobrenome` text NOT NULL,
  `apelido` varchar(75) NOT NULL,
  `dataNasc` date NOT NULL,
  `nivel` int(1) NOT NULL,
  `email` varchar(75) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `numerologia`
--

CREATE TABLE `numerologia` (
  `idN` int(11) NOT NULL,
  `idT` int(11) NOT NULL,
  `numerologia` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `idPed` int(11) NOT NULL,
  `idC` int(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `dadosNB1` text NOT NULL,
  `dadosNB2` int(11) NOT NULL,
  `dadosNP1` int(11) NOT NULL,
  `dadosNP2` int(11) NOT NULL,
  `dadosNE1` int(11) NOT NULL,
  `dadosNE2` int(11) NOT NULL,
  `nB` int(11) NOT NULL,
  `nP` int(11) NOT NULL,
  `nE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `publico`
--

CREATE TABLE `publico` (
  `idPub` int(11) NOT NULL,
  `nume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiponumerologia`
--

CREATE TABLE `tiponumerologia` (
  `idT` int(11) NOT NULL,
  `nome` int(11) NOT NULL,
  `idPub` int(11) NOT NULL,
  `frase` varchar(5000) NOT NULL,
  `urlImg1` varchar(1000) NOT NULL,
  `urlImg2` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `gestao`
--
ALTER TABLE `gestao`
  ADD PRIMARY KEY (`idU`);

--
-- Índices para tabela `numerologia`
--
ALTER TABLE `numerologia`
  ADD PRIMARY KEY (`idN`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPed`);

--
-- Índices para tabela `publico`
--
ALTER TABLE `publico`
  ADD PRIMARY KEY (`idPub`);

--
-- Índices para tabela `tiponumerologia`
--
ALTER TABLE `tiponumerologia`
  ADD PRIMARY KEY (`idT`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `gestao`
--
ALTER TABLE `gestao`
  MODIFY `idU` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `numerologia`
--
ALTER TABLE `numerologia`
  MODIFY `idN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPed` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `publico`
--
ALTER TABLE `publico`
  MODIFY `idPub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tiponumerologia`
--
ALTER TABLE `tiponumerologia`
  MODIFY `idT` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
