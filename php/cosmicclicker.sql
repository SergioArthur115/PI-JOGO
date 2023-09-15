-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Set-2023 às 21:37
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cosmicclicker`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artefatosvalor`
--

CREATE TABLE `artefatosvalor` (
  `id_artefatosValor` int(11) NOT NULL,
  `valor1` varchar(20) NOT NULL,
  `valor2` varchar(20) NOT NULL,
  `valor3` varchar(20) NOT NULL,
  `valor4` varchar(20) NOT NULL,
  `valor5` varchar(20) NOT NULL,
  `valor6` varchar(20) NOT NULL,
  `valor7` varchar(20) NOT NULL,
  `valor8` varchar(20) NOT NULL,
  `valor9` varchar(20) NOT NULL,
  `valor10` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `moeda` float NOT NULL,
  `mps` float NOT NULL,
  `clique` bigint(20) NOT NULL,
  `id_entidadesQTD` int(11) DEFAULT NULL,
  `id_entidadesValor` int(11) DEFAULT NULL,
  `id_artefatosValor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entidadesqtd`
--

CREATE TABLE `entidadesqtd` (
  `id_entidadesQTD` int(11) NOT NULL,
  `qtd1` int(11) NOT NULL,
  `qtd2` int(11) NOT NULL,
  `qtd3` int(11) NOT NULL,
  `qtd4` int(11) NOT NULL,
  `qtd5` int(11) NOT NULL,
  `qtd6` int(11) NOT NULL,
  `qtd7` int(11) NOT NULL,
  `qtd8` int(11) NOT NULL,
  `qtd9` int(11) NOT NULL,
  `qtd10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entidadesvalor`
--

CREATE TABLE `entidadesvalor` (
  `id_entidadesValor` int(11) NOT NULL,
  `valor1` float NOT NULL,
  `valor2` float NOT NULL,
  `valor3` float NOT NULL,
  `valor4` float NOT NULL,
  `valor5` float NOT NULL,
  `valor6` float NOT NULL,
  `valor7` float NOT NULL,
  `valor8` float NOT NULL,
  `valor9` float NOT NULL,
  `valor10` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `artefatosvalor`
--
ALTER TABLE `artefatosvalor`
  ADD PRIMARY KEY (`id_artefatosValor`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_entidadesQTD` (`id_entidadesQTD`),
  ADD KEY `id_entidadesValor` (`id_entidadesValor`),
  ADD KEY `id_artefatosValor` (`id_artefatosValor`);

--
-- Índices para tabela `entidadesqtd`
--
ALTER TABLE `entidadesqtd`
  ADD PRIMARY KEY (`id_entidadesQTD`);

--
-- Índices para tabela `entidadesvalor`
--
ALTER TABLE `entidadesvalor`
  ADD PRIMARY KEY (`id_entidadesValor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artefatosvalor`
--
ALTER TABLE `artefatosvalor`
  MODIFY `id_artefatosValor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `entidadesqtd`
--
ALTER TABLE `entidadesqtd`
  MODIFY `id_entidadesQTD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `entidadesvalor`
--
ALTER TABLE `entidadesvalor`
  MODIFY `id_entidadesValor` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_entidadesQTD`) REFERENCES `entidadesqtd` (`id_entidadesQTD`),
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`id_entidadesValor`) REFERENCES `entidadesvalor` (`id_entidadesValor`),
  ADD CONSTRAINT `cliente_ibfk_3` FOREIGN KEY (`id_artefatosValor`) REFERENCES `artefatosvalor` (`id_artefatosValor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
