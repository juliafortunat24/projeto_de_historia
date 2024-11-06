-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/11/2024 às 01:48
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_historia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `glossario`
--

CREATE TABLE `glossario` (
  `id_palavra` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `glossario`
--

INSERT INTO `glossario` (`id_palavra`, `titulo`, `descricao`) VALUES
(1, 'Civilização', 'Conjunto complexo de culturas, instituições, tecnologias e avanços sociais de uma sociedade organizada.'),
(2, 'Oriente Médio', 'Região geográfica que abrange partes da Ásia Ocidental e Norte da África, conhecida por sua importância histórica, cultural e política.'),
(3, 'Código de Hamurabi', 'Conjunto de leis babilônicas criadas pelo rei Hamurabi por volta de 1754 a.C., um dos mais antigos códigos legais escritos da história.'),
(4, 'Escrita hieroglífica', 'Sistema de escrita da antiga civilização egípcia, utilizando símbolos pictográficos para representar palavras e sons.'),
(5, 'Pólvora', 'Mistura explosiva de salitre, carvão e enxofre, inventada na China, usada inicialmente para fogos de artifício e mais tarde em armamentos.'),
(6, 'Expansão', 'Processo de crescimento territorial, econômico ou cultural de uma civilização ou império, frequentemente através de conquistas e colonização.'),
(7, 'Confucionismo', 'Sistema filosófico e ético baseado nos ensinamentos de Confúcio, enfatizando moralidade, família, respeito pelos anciãos e harmonia social.'),
(8, 'Taoismo', 'Tradição filosófica e religiosa chinesa que busca a harmonia com o Tao (Caminho), enfatizando a simplicidade, espontaneidade e a conexão com a natureza.'),
(9, 'Escrita Cuneiforme', 'A escrita cuneiforme consiste em símbolos formados por impressões em forma de cunha, feitas em tábuas de argila com um estilete. Inicialmente, era usada para registrar transações comerciais, mas ao longo do tempo passou a ser utilizada para escrever docum');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome_usuario` varchar(250) NOT NULL,
  `tipo_usuario` enum('aluno','administrador') NOT NULL,
  `pass_usuario` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_usuario`, `tipo_usuario`, `pass_usuario`) VALUES
(1, 'Mariana', 'administrador', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Julia', 'aluno', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `glossario`
--
ALTER TABLE `glossario`
  ADD PRIMARY KEY (`id_palavra`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `glossario`
--
ALTER TABLE `glossario`
  MODIFY `id_palavra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
