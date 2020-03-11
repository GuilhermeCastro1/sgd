-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 11/03/2020 às 16:32
-- Versão do servidor: 5.7.29-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_npo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `dt_nasc` date DEFAULT NULL,
  `func` varchar(40) NOT NULL,
  `c_foto` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `email`, `telefone`, `apelido`, `nome`, `sobrenome`, `dt_nasc`, `func`, `c_foto`, `status`) VALUES
(1, 'admin', 'admin', 'admin@npo.com.br', '', 'Administrador', 'Administrador', '', NULL, 'ADM do Sistema', '', 0),
(2, 'alisson', '123', 'alissoncavalcanticma@gmail.com', '0', 'Alisson', 'Alisson', 'Cavalcanti Galvão', '1990-02-19', 'Operador de Infraestrutura Jr.', '', 1),
(3, 'guilherme', '123', '...', '', 'Guilherme', 'Guilherme', 'Henrique J. Castro', '1996-02-25', 'Operador de Infraestrutura Jr.', '', 1),
(4, 'ribeiro', '123', '...', '', 'Ribeiro', 'José', ' Ribeiro da Silva', NULL, 'Operador de Infraestrutura Jr.', '', 1),
(5, 'bruno', '123', '', '', 'Bruno', 'Bruno', ' Nascimento', NULL, '', '', 0),
(6, 'fabio', '123', '', '', 'Fabio Kleber', 'Fábio', ' Kléber Pereira', NULL, 'Operador de Infraestrutura Sênior.', '', 1),
(7, 'almir', '123', '', '', 'Almir', 'Almir', 'Albuquerque', NULL, 'Operador de Infraestrutura Jr.', '', 1),
(8, 'felipe', '123', '', '', 'Felipe', 'Felipe', 'Manoel', NULL, 'Operador de Infraestrutura Jr.', '', 1),
(9, 'abelardo', '123', '', '', 'Abelardo', 'Abelardo', 'Campina', NULL, '', '', 0),
(10, 'marcio', '123', '', '', 'Marcio', 'Márcio', 'Castro', NULL, '', '', 0),
(12, 'cleiton', '123', 'h2oinformatica@gmail.com', '', 'Cleiton', 'Cleiton', 'Oliveira', NULL, 'Operador de Infraestrutura Jr.', '', 1),
(13, 'matheus', '123', 'matheusbarfos', '', 'Matheus', 'Matheus', 'Barfos', NULL, 'Operador de Infraestrutura Jr.', '', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
