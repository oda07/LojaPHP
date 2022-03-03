-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Mar-2022 às 00:52
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) DEFAULT NULL,
  `cpf` varchar(64) DEFAULT NULL,
  `senha` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `senha`) VALUES
(4, 'odair', '36443265792', '12345'),
(5, 'andre', '36443432792', '12345'),
(6, 'rafael', '36443432792', '12345'),
(7, 'darlei', '37626743', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL,
  `preco` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `estoque`, `preco`) VALUES
(1, 'celular', 0, 2000),
(2, 'computador', 1, 5000),
(3, 'monitor', 21, 2000),
(4, 'teclado', 0, 200);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `valor` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `id_produto`, `id_cliente`, `valor`) VALUES
(64, 1, 4, 2000),
(69, 8, 4, 30),
(73, 8, 4, 30),
(78, 1, 4, 2000),
(79, 1, 4, 2000),
(80, 1, 4, 2000),
(81, 9, 4, 15),
(82, 9, 4, 15),
(83, 9, 4, 15),
(84, 9, 4, 15),
(85, 9, 4, 15),
(89, 10, 4, 110),
(90, 10, 4, 110),
(92, 10, 5, 110),
(93, 1, 20, 2000),
(94, 9, 4, 15),
(96, 11, 4, 3.4),
(97, 11, 4, 3.4),
(98, 11, 4, 3.4),
(99, 11, 4, 3.4),
(100, 11, 4, 3.4),
(101, 11, 4, 3.4),
(102, 1, 4, 2000),
(103, 1, 4, 2000),
(104, 1, 4, 2000),
(105, 11, 4, 3.4),
(106, 11, 4, 3.4),
(107, 11, 4, 3.4),
(108, 11, 4, 3.4),
(109, 11, 4, 3.4),
(110, 11, 4, 3.4),
(111, 11, 4, 3.4),
(112, 11, 4, 3.4),
(113, 11, 4, 3.4),
(114, 11, 4, 3.4),
(115, 11, 4, 3.4),
(116, 11, 4, 3.4),
(117, 11, 4, 3.4),
(118, 11, 4, 3.4),
(119, 11, 4, 3.4),
(120, 11, 4, 3.4),
(121, 11, 4, 3.4),
(126, 8, 4, 30),
(144, 2, 4, 5000),
(145, 3, 4, 2000),
(146, 3, 4, 2000);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
