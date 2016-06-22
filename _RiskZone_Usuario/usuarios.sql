-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jun-2016 às 01:22
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riskzone`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios2`
--

CREATE TABLE `usuarios` (
  `id` int(6) NOT NULL,
  `nome` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `usuario` varchar(32) NOT NULL DEFAULT '',
  `senha` varchar(32) NOT NULL DEFAULT '',
  `sexo` varchar(32) NOT NULL DEFAULT '',
  `raca` varchar(32) NOT NULL DEFAULT '',
  `data_nascimento` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data_cadastro` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data_ultimo_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nivel_usuario` enum('0','1','2') NOT NULL DEFAULT '0',
  `ativado` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios2`
--

INSERT INTO `usuarios2` (`id`, `nome`, `email`, `usuario`, `senha`, `sexo`, `raca`, `data_nascimento`, `data_cadastro`, `data_ultimo_login`, `nivel_usuario`, `ativado`) VALUES
(1, 'Fabio Bonina', 'fabiobonina@gmail.com', 'Fabio', '123456', 'Masculino', 'Parda', '1984-07-23 00:00:00', '2016-06-20 12:18:30', '2016-06-20 12:18:30', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios2`
--
ALTER TABLE `usuarios2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios2`
--
ALTER TABLE `usuarios2`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
