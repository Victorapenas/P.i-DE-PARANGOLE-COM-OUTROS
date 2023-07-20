-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/07/2023 às 06:01
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
-- Banco de dados: `srscjf_if`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(6) UNSIGNED NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `senha` varchar(70) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `turma` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `matricula`, `senha`, `nome`, `telefone`, `curso`, `turma`, `email`) VALUES
(1, '202013600050', '$2y$10$Dh80X/Yxciic6N.NynFqsO8.fP6zB49feQsBqHg6ILYroVDt6Y18K', 'ney mar', '(77) 77777-7777', 'meio_ambiente', 'EMA-11', '202013600050@ifba.edu.br'),
(2, '777777777777', '$2y$10$7S.MWtwhvfRRMw2u14GqW.KI8hKNecvTOODjdl.fIHO1M8CpVyP3q', 'ney mar', '(77) 77777-7777', 'edificacoes', 'ED-11', '777777777777@ifba.edu.br'),
(3, '888888888888', '$2y$10$eS5DCXjw8y9fsMYUYUgc0.6ioLlBUUtvC.BvAphzR5wGERUyMKGfG', 'neymar jr', '(88) 88888-8888', 'meio_ambiente', 'EMA-21', '888888888888@ifba.edu.br'),
(4, '222222222222', '$2y$10$K.OrVuhxtTXAUXJdl5/0cO5lK0ppc/Vyk6TV7DSMssrvuNhOUXDJ.', 'ney mar', '(77) 77777-7777', 'meio_ambiente', 'EMA-21', '222222222222@ifba.edu.br'),
(5, '000000000000', '$2y$10$4ibxvJA77cUH.ThwBMQRHOXqHFjpjSVXZp6QmbH/w7WXvAmNPvDpO', 'ney mar', '(00) 00000-0000', 'meio_ambiente', 'EMA-22', '000000000000@ifba.edu.br');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Matricula` (`matricula`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
