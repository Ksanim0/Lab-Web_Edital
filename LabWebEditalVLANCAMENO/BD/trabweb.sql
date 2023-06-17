-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/06/2023 às 16:46
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trabweb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

CREATE TABLE `aluno` (
  `nome_completo` varchar(255) DEFAULT NULL,
  `nome_social` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `municipio` varchar(255) DEFAULT NULL,
  `bairro` text DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `portugues6` mediumint(9) DEFAULT NULL,
  `portugues7` mediumint(9) DEFAULT NULL,
  `portugues8` mediumint(9) DEFAULT NULL,
  `portugues9` mediumint(9) DEFAULT NULL,
  `matematica6` mediumint(9) DEFAULT NULL,
  `matematica7` mediumint(9) DEFAULT NULL,
  `matematica8` mediumint(9) DEFAULT NULL,
  `matematica9` mediumint(9) DEFAULT NULL,
  `ciencias6` mediumint(9) DEFAULT NULL,
  `ciencias7` mediumint(9) DEFAULT NULL,
  `ciencias8` mediumint(9) DEFAULT NULL,
  `ciencias9` mediumint(9) DEFAULT NULL,
  `historia6` mediumint(9) DEFAULT NULL,
  `historia7` mediumint(9) DEFAULT NULL,
  `historia8` mediumint(9) DEFAULT NULL,
  `historia9` mediumint(9) DEFAULT NULL,
  `geografia6` mediumint(9) DEFAULT NULL,
  `geografia7` mediumint(9) DEFAULT NULL,
  `geografia8` mediumint(9) DEFAULT NULL,
  `geografia9` mediumint(9) DEFAULT NULL,
  `ingles6` mediumint(9) DEFAULT NULL,
  `ingles7` mediumint(9) DEFAULT NULL,
  `ingles8` mediumint(9) DEFAULT NULL,
  `ingles9` mediumint(9) DEFAULT NULL,
  `artes6` mediumint(9) DEFAULT NULL,
  `artes7` mediumint(9) DEFAULT NULL,
  `artes8` mediumint(9) DEFAULT NULL,
  `artes9` mediumint(9) DEFAULT NULL,
  `edfisica6` mediumint(9) DEFAULT NULL,
  `edfisica7` mediumint(9) DEFAULT NULL,
  `edfisica8` mediumint(9) DEFAULT NULL,
  `edfisica9` mediumint(9) DEFAULT NULL,
  `media` float DEFAULT NULL,
  `data_nasc` varchar(255) DEFAULT NULL,
  `deficiencia` varchar(255) DEFAULT NULL,
  `genero` varchar(255) DEFAULT NULL,
  `curso` varchar(255) DEFAULT NULL,
  `concorrencia` varchar(255) DEFAULT NULL,
  `indentificador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`indentificador`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `indentificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
