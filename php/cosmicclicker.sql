-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Set-2023 às 15:44
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

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

--
-- Extraindo dados da tabela `artefatosvalor`
--

INSERT INTO `artefatosvalor` (`id_artefatosValor`, `valor1`, `valor2`, `valor3`, `valor4`, `valor5`, `valor6`, `valor7`, `valor8`, `valor9`, `valor10`) VALUES
(39, 'Comprado', 'Comprado', 'Comprado', '3038', '35129', '547435', '2059060', '14239150', '976139168', '8681402912'),
(40, 'Comprado', '100', '449', '3038', '35129', '547435', '2059060', '14239150', '976139168', '8681402912'),
(41, 'Comprado', '100', '449', '3038', '35129', '547435', '2059060', '14239150', '976139168', '8681402912'),
(42, 'Comprado', '100', '449', '3038', '35129', '547435', '2059060', '14239150', '976139168', '8681402912'),
(43, 'Comprado', 'Comprado', '449', '3038', '35129', '547435', '2059060', '14239150', '976139168', '8681402912');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `moeda` float NOT NULL,
  `mps` float NOT NULL,
  `clique` bigint(100) NOT NULL,
  `id_entidadesQTD` int(11) DEFAULT NULL,
  `id_entidadesValor` int(11) DEFAULT NULL,
  `id_artefatosValor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `moeda`, `mps`, `clique`, `id_entidadesQTD`, `id_entidadesValor`, `id_artefatosValor`) VALUES
(39, 378.55, 1.6, 12, 40, 39, 39),
(40, 378.55, 1.6, 12, 41, 40, 40),
(41, 378.55, 1.6, 12, 42, 41, 41),
(42, 378.55, 1.6, 12, 43, 42, 42),
(43, 378.55, 1.6, 12, 44, 43, 43);

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

--
-- Extraindo dados da tabela `entidadesqtd`
--

INSERT INTO `entidadesqtd` (`id_entidadesQTD`, `qtd1`, `qtd2`, `qtd3`, `qtd4`, `qtd5`, `qtd6`, `qtd7`, `qtd8`, `qtd9`, `qtd10`) VALUES
(40, 14, 11, 1, 0, 0, 0, 0, 0, 0, 0),
(41, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 6, 1, 0, 0, 0, 0, 0, 0, 0, 0);

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
-- Extraindo dados da tabela `entidadesvalor`
--

INSERT INTO `entidadesvalor` (`id_entidadesValor`, `valor1`, `valor2`, `valor3`, `valor4`, `valor5`, `valor6`, `valor7`, `valor8`, `valor9`, `valor10`) VALUES
(39, 37.96, 285.33, 4533.1, 11727, 848309, 1964830, 10363300, 569079000, 9641580000, 23493900000),
(40, 14.64, 100, 4121, 11727, 848309, 1964830, 10363300, 569079000, 9641580000, 23493900000),
(41, 10, 100, 4121, 11727, 848309, 1964830, 10363300, 569079000, 9641580000, 23493900000),
(42, 10, 100, 4121, 11727, 848309, 1964830, 10363300, 569079000, 9641580000, 23493900000),
(43, 17.71, 110, 4121, 11727, 848309, 1964830, 10363300, 569079000, 9641580000, 23493900000);

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
  ADD KEY `cliente_ibfk_1` (`id_entidadesQTD`),
  ADD KEY `cliente_ibfk_2` (`id_entidadesValor`),
  ADD KEY `cliente_ibfk_3` (`id_artefatosValor`);

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
  MODIFY `id_artefatosValor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `entidadesqtd`
--
ALTER TABLE `entidadesqtd`
  MODIFY `id_entidadesQTD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `entidadesvalor`
--
ALTER TABLE `entidadesvalor`
  MODIFY `id_entidadesValor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
