-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Ago-2024 às 16:52
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresateste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `nomeCargo` varchar(50) NOT NULL,
  `salario` decimal(8,2) NOT NULL,
  `codCargo` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`nomeCargo`, `salario`, `codCargo`, `created_at`, `updated_at`) VALUES
('Programador Jr', '2600.00', 1, '2024-08-30 09:23:00', NULL),
('Programador Pleno', '5400.00', 2, '2024-08-30 09:23:00', NULL),
('Programador Sênior', '7800.00', 3, '2024-08-30 09:23:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `nomeDepartamento` varchar(45) NOT NULL,
  `codDepartamento` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`nomeDepartamento`, `codDepartamento`, `created_at`, `updated_at`) VALUES
('Backend', 1, '2024-08-30 09:24:00', NULL),
('Frontend', 2, '2024-08-30 09:24:00', NULL),
('Fullstack', 3, '2024-08-30 09:24:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `funcional` int(11) NOT NULL,
  `cpf` char(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `telefone` char(15) DEFAULT NULL,
  `endereco` varchar(70) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `image_url` varchar(80) DEFAULT NULL,
  `codDepartamento` int(11) NOT NULL,
  `codCargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`funcional`, `cpf`, `nome`, `telefone`, `endereco`, `created_at`, `updated_at`, `image_url`, `codDepartamento`, `codCargo`) VALUES
(1, '25968921102', 'Fernando Henrique Cardozo', '11934455420', 'Parque Vitória / Franco da Rocha SP', '2024-08-30 09:25:00', '2024-08-30 09:30:00', 'pessoa.jpg', 1, 1),
(2, '16892555202', 'José Antonio Vasquez', '11999232876', 'Av. Antonia Leopodina / Caieras SP', '2024-08-30 09:29:00', '2024-08-30 09:31:00', 'pessoa2.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `funcional` int(11) NOT NULL,
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`codCargo`),
  ADD UNIQUE KEY `nomeCargo` (`nomeCargo`);

--
-- Índices para tabela `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`codDepartamento`),
  ADD UNIQUE KEY `uqDepto` (`nomeDepartamento`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`funcional`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `uqcpf` (`cpf`),
  ADD KEY `fkfuncDepto` (`codDepartamento`),
  ADD KEY `fkCargoFunc` (`codCargo`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `funcional` (`funcional`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargo`
--
ALTER TABLE `cargo`
  MODIFY `codCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `codDepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `funcional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `fkCargoFunc` FOREIGN KEY (`codCargo`) REFERENCES `cargo` (`codCargo`),
  ADD CONSTRAINT `fkfuncDepto` FOREIGN KEY (`codDepartamento`) REFERENCES `departamento` (`codDepartamento`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_funcionario_funcional` FOREIGN KEY (`funcional`) REFERENCES `funcionario` (`funcional`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
