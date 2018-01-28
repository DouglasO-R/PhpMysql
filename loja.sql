-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Jan-2018 às 03:30
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'esporte'),
(2, 'escolar'),
(3, 'mobilidade'),
(4, 'guloseimas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `descricao` text,
  `categoria_id` int(11) NOT NULL,
  `usado` tinyint(1) DEFAULT '0',
  `isbn` varchar(255) DEFAULT NULL,
  `tipoProduto` varchar(255) DEFAULT NULL,
  `marcaDagua` varchar(255) DEFAULT NULL,
  `taxaImpressao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `categoria_id`, `usado`, `isbn`, `tipoProduto`, `marcaDagua`, `taxaImpressao`) VALUES
(18, 'celular 2017', '4000.00', 'celular lanÃ§amento de 2016 usado        ', 1, 0, '', 'livroFisico', NULL, NULL),
(22, 'gsfdgafs', '34534.00', ' dasdASASD', 0, 0, NULL, NULL, NULL, NULL),
(24, 'caneta', '2.00', '        ', 1, 0, '', 'livroFisico', NULL, NULL),
(28, 'dgsdfgd', '21.00', NULL, 0, 0, NULL, NULL, NULL, NULL),
(29, 'rola', '99999999.99', NULL, 0, 0, NULL, NULL, NULL, NULL),
(30, 'sdfsadgsfdgsrgsd', '342.00', NULL, 0, 0, NULL, NULL, NULL, NULL),
(31, 'sdfsdfsd', '234.00', NULL, 0, 0, NULL, NULL, NULL, NULL),
(32, 'sdfsdfsd', '234.00', NULL, 0, 0, NULL, NULL, NULL, NULL),
(33, 'oiiii', '56.00', NULL, 0, 0, NULL, NULL, NULL, NULL),
(34, 'kjkjlk', '34.00', NULL, 0, 0, NULL, NULL, NULL, NULL),
(35, 'asdas', '213.00', NULL, 0, 0, NULL, NULL, NULL, NULL),
(36, 'qeqw', '23.00', NULL, 0, 0, NULL, NULL, NULL, NULL),
(37, 'vcbcb', '44.00', NULL, 0, 0, NULL, NULL, NULL, NULL),
(38, 'sdfasdfsd', '234132.00', 'asdfasdfsdfs', 4, 1, NULL, NULL, NULL, NULL),
(39, 'moto oo', '45.00', 'hglglkgj', 1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'douglasor@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
