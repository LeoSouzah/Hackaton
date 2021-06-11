-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jun-2021 às 02:44
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `multi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

CREATE TABLE `cor` (
  `id` int(11) NOT NULL,
  `cor` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cor`
--

INSERT INTO `cor` (`id`, `cor`) VALUES
(1, 'amarelo'),
(2, 'branco'),
(3, 'preto'),
(4, 'cinza'),
(5, 'azul claro'),
(6, 'cinza claro'),
(7, 'laranja');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`id`, `marca`) VALUES
(1, 'mclaren'),
(2, 'Koenigsegg'),
(3, 'Bugatti'),
(4, 'SSC'),
(5, 'Hennessey');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Gustavo', 'gu', '12345'),
(2, 'leonardo', 'leo', '67890');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `anomodelo` year(4) NOT NULL,
  `anofabricacao` year(4) NOT NULL,
  `valor` double NOT NULL,
  `tipo` enum('novo','seminovo') NOT NULL,
  `fotoDestaque` varchar(200) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `cor_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `opcionais` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`id`, `modelo`, `anomodelo`, `anofabricacao`, `valor`, `tipo`, `fotoDestaque`, `marca_id`, `cor_id`, `usuario_id`, `opcionais`) VALUES
(1, 'mclarenf1', 1998, 1993, 5000000, 'novo', 'HOR_XB1_McLaren_F1', 1, 6, 1, ''),
(2, 'Koenigsegg CCR', 2006, 2004, 4000000, 'novo', 'HOR_XB1_Koenigsegg_CCX', 2, 7, 1, ''),
(3, 'Bugatti Veyron 16.4', 2015, 2005, 7000000, 'novo', 'd9025e3a3f3593da44bd48d85297d8fd', 3, 6, 1, ''),
(4, 'SSC Ultimate Aero TT', 2013, 2006, 3000000, 'novo', 'SSC-Ultimate-Aero-the-American', 4, 4, 1, ''),
(5, 'Bugatti Veyron Super Sport', 2011, 2010, 15000000, 'seminovo', 'ace63b2f6ccd29c7e567e070089fcd5b', 3, 5, 2, ''),
(6, 'Hennessey Venom GT', 2017, 2010, 10000000, 'seminovo', 'HOR_XB1_Hennessey_Venom', 5, 1, 2, ''),
(7, 'Koenigsegg Agera RS', 2018, 2015, 5000000, 'seminovo', 'HOR_XB1_Koenigsegg_Agera', 2, 3, 2, ''),
(8, ' Bugatti Chiron Super Sport 300+', 2016, 2016, 20000000, 'seminovo', 'chiron-sport-300-featured', 3, 5, 2, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cor`
--
ALTER TABLE `cor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cor`
--
ALTER TABLE `cor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
