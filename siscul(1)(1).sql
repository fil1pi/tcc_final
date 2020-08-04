-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Ago-2020 às 00:29
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
-- Database: `siscul`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_alpha`
--

CREATE TABLE `produtos_alpha` (
  `id` int(11) NOT NULL,
  `nome` varchar(222) NOT NULL,
  `Preco_producao` double NOT NULL,
  `quantidade` int(11) NOT NULL,
  `Total_gasto` double NOT NULL,
  `produtor` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos_alpha`
--

INSERT INTO `produtos_alpha` (`id`, `nome`, `Preco_producao`, `quantidade`, `Total_gasto`, `produtor`) VALUES
(39, 'FeijÃ£o', 25, 10, 3750, 'Felipin'),
(41, 'soja', 150, 100, 75000, 'Felipin'),
(42, 'cafÃ©', 58, 194, 11600, 'Felipin'),
(43, 'sÃ³ja', 250, 0, 125000, 'Usuario'),
(44, 'trigo', 150, 0, 45000, 'Usuario'),
(45, 'cafÃ©', 175, 0, 70000, 'Usuario'),
(46, 'FeijÃ£o', 25, 10, 5000, 'Vitoria santana'),
(47, 'queijo', 20, 0, 1000, 'Vitoria santana'),
(48, 'doÃ§e de leite', 15, 5, 375, 'Vitoria santana'),
(49, 'FeijÃ£o', 20, 0, 8000, 'Usuario'),
(50, 'queijo', 20, 0, 5000, 'Usuario'),
(51, 'milho', 150, 0, 45000, 'Usuario'),
(52, 'Rapadura', 5, 30, 150, 'Usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_omega`
--

CREATE TABLE `produtos_omega` (
  `idproduto` int(11) NOT NULL,
  `nome` varchar(222) NOT NULL,
  `Preco_producao` double NOT NULL,
  `quantidade` int(11) NOT NULL,
  `Total_gasto` double NOT NULL,
  `Preco_venda` double NOT NULL,
  `quantida_Venda` int(11) NOT NULL,
  `total_venda` double NOT NULL,
  `Total_Final` double NOT NULL,
  `produtor` varchar(222) NOT NULL,
  `idprodutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos_omega`
--

INSERT INTO `produtos_omega` (`idproduto`, `nome`, `Preco_producao`, `quantidade`, `Total_gasto`, `Preco_venda`, `quantida_Venda`, `total_venda`, `Total_Final`, `produtor`, `idprodutor`) VALUES
(3463, 'FeijÃ£o', 25, 150, 3750, 30, 140, 4200, 450, 'Felipin', 23),
(3464, 'soja', 150, 500, 75000, 200, 400, 80000, 5000, 'Felipin', 23),
(3465, 'sÃ³ja', 250, 500, 125000, 253, 400, 101200, -23800, 'Usuario', 24),
(3466, 'trigo', 150, 300, 45000, 170, 300, 51000, 6000, 'Usuario', 24),
(3467, 'cafÃ©', 175, 400, 70000, 180, 350, 63000, -7000, 'Usuario', 24),
(3468, 'FeijÃ£o', 25, 200, 5000, 30, 190, 5700, 700, 'Vitoria santana', 25),
(3469, 'queijo', 20, 50, 1000, 22, 50, 1100, 100, 'Vitoria santana', 25),
(3470, 'doÃ§e de leite', 15, 25, 375, 18, 20, 360, -15, 'Vitoria santana', 25),
(3471, 'FeijÃ£o', 20, 400, 8000, 25, 400, 10000, 2000, 'Usuario', 24),
(3472, 'queijo', 20, 250, 5000, 22, 240, 5280, 280, 'Usuario', 24),
(3473, 'sÃ³ja', 250, 100, 125000, 270, 100, 27000, -98000, 'Usuario', 24),
(3474, 'milho', 150, 300, 45000, 200, 300, 60000, 15000, 'Usuario', 24),
(3475, 'cafÃ©', 175, 50, 70000, 180, 50, 9000, -61000, 'Usuario', 24),
(3476, 'queijo', 20, 10, 5000, 22, 10, 220, -4780, 'Usuario', 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `adm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `adm`) VALUES
(21, 'Felipe Schmitz', 'FelipeSchmitz@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1),
(23, 'Felipin', 'Felipinabl@gmail.com', '25d55ad283aa400af464c76d713c07ad', 0),
(24, 'Usuario', 'usutest2@teste.com', '2a30ce3b224bed11efd57d0487327470', 0),
(25, 'Vitoria santana', 'vitoria2@teste.com', '2a30ce3b224bed11efd57d0487327470', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos_alpha`
--
ALTER TABLE `produtos_alpha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos_omega`
--
ALTER TABLE `produtos_omega`
  ADD PRIMARY KEY (`idproduto`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos_alpha`
--
ALTER TABLE `produtos_alpha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `produtos_omega`
--
ALTER TABLE `produtos_omega`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3477;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
