-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Nov-2024 às 15:47
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
-- Banco de dados: `projeto_historia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `glossario`
--

CREATE TABLE `glossario` (
  `id_palavra` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `glossario`
--

INSERT INTO `glossario` (`id_palavra`, `titulo`, `descricao`) VALUES
(92, 'Hierárquica', 'Estrutura organizada em níveis de poder ou status, com uma classe dominante acima das outras.'),
(93, 'Politeísta', 'Crença em vários deuses, comum nas civilizações antigas.'),
(94, 'Cuneiforme', 'Primeira forma de escrita registrada, com símbolos em forma de cunha, criada na Mesopotâmia.'),
(95, 'Aqueduto', 'Estrutura construída para transportar água de fontes até as cidades, uma inovação romana em engenharia.'),
(96, 'Globalização', 'Processo de integração econômica, cultural e política entre países, intensificado após a Guerra Fria.'),
(97, 'Mercantilismo', 'Sistema econômico predominante na Idade Moderna, baseado na acumulação de riquezas e exploração colonial.'),
(99, 'Iluminismo', 'Movimento intelectual que enfatizava a razão, liberdade e igualdade, influenciando mudanças políticas e sociais.'),
(100, 'Heliocentrismo', 'Teoria que posiciona o Sol como centro do sistema solar, proposta por Nicolau Copérnico.'),
(101, 'Renascimento', 'Movimento cultural que redescobriu a cultura greco-romana e destacou o humanismo e as artes no século XV e XVI.'),
(102, 'Feudalismo', 'Sistema econômico e social baseado em feudos, com servos trabalhando em troca de proteção e terras.'),
(103, 'Trovadores', 'Poetas e músicos da Idade Média, conhecidos por suas canções de amor e cavalaria.'),
(104, 'Astrolábio', 'Instrumento utilizado para medir a posição dos astros, essencial para a navegação no mar.'),
(105, 'Cruzadas', 'Expedições militares sancionadas pela Igreja Católica para recuperar a Terra Santa durante a Idade Média.'),
(106, 'Mercado', 'Sistema econômico baseado no comércio de bens e serviços, fundamental na troca e no crescimento das economias.'),
(107, 'Telescópio', 'Instrumento científico utilizado para observação astronômica, essencial para os avanços na ciência.'),
(108, 'Microscópio', 'Instrumento utilizado para observar objetos em escala microscópica, fundamental para estudos biológicos.'),
(109, 'Bússola', 'Instrumento de navegação que aponta o norte magnético, essencial para a navegação marítima e exploração.'),
(110, 'Rádio', 'Tecnologia de comunicação que transmite ondas sonoras a longas distâncias, muito usada no século XX.'),
(111, 'Televisão', 'Meio de comunicação visual e sonora, que transformou a informação e o entretenimento na sociedade moderna.'),
(112, 'Direitos Humanos', 'Conjunto de direitos fundamentais que garantem liberdade, igualdade e dignidade a todos os indivíduos.'),
(113, 'Descolonização', 'Processo de independência das colônias, principalmente após a Segunda Guerra Mundial.'),
(114, 'Automóvel', 'Veículo motorizado que revoluciona o transporte de pessoas e mercadorias no século XX.'),
(115, 'Avião', 'Aeronave que permite viagens rápidas, conectando diferentes regiões do mundo.'),
(116, 'Democracia', 'Sistema de governo em que o poder é exercido pelo povo, geralmente por meio de eleições.'),
(117, 'Capitalismo', 'Sistema econômico baseado na propriedade privada dos meios de produção e no livre mercado.'),
(118, 'Multiculturalismo', 'Convivência e interação de diversas culturas dentro de um mesmo espaço social e político.'),
(119, 'Surrealismo', 'Movimento artístico do século XX que explora o inconsciente, os sonhos e o irracional.'),
(120, 'Expressionismo', 'Estilo artístico que busca expressar emoções, utilizando distorções e cores intensas.'),
(121, 'Absolutismo', 'Sistema político onde o monarca detém poder total, sem limitações por outras instituições ou leis.'),
(122, 'Descolonização', 'Processo de independência das colônias, especialmente após a Segunda Guerra Mundial.'),
(123, 'Moinho de Vento', 'Estrutura que utiliza o vento para realizar tarefas como moer grãos ou bombear água.'),
(124, 'Moinho de Água', 'Estrutura movida pela força da água usada para moer grãos ou realizar outras tarefas agrícolas.'),
(125, 'Universidades', 'Instituições de ensino superior criadas para promover o estudo de filosofia, medicina, direito e outras ciências.'),
(126, 'Arquitetura Gótica', 'Estilo arquitetônico da Idade Média, com igrejas grandiosas e arcos ogivais.'),
(127, 'Catedrais', 'Igrejas grandes e grandiosas, muitas vezes construídas no estilo gótico, representando a fé cristã.'),
(128, 'Cerimônia de Vassalos', 'Ritual de lealdade entre senhores feudais e vassalos, característico do feudalismo.'),
(129, 'Renascença', 'Período de renovação cultural e científica que preparou o caminho para o Renascimento e a modernidade.'),
(130, 'Idade Contemporânea', 'Período histórico iniciado com a Revolução Francesa, caracterizado por grandes mudanças sociais e políticas.'),
(131, 'Revolução Industrial', 'Transformação dos processos produtivos com a introdução de máquinas e produção em larga escala.'),
(132, 'Guerras Mundiais', 'Dois conflitos globais (1914-1918 e 1939-1945) que mudaram a política mundial e a sociedade internacional.'),
(133, 'Guerra Fria', 'Conflito ideológico e político entre os Estados Unidos e a União Soviética após a Segunda Guerra Mundial.'),
(134, 'Máquina a Vapor', 'Invenção que usa vapor para gerar energia e impulsionar máquinas, revolucionando o transporte e a indústria.'),
(135, 'Eletricidade', 'Forma de energia essencial para o desenvolvimento tecnológico e industrial moderno.'),
(136, 'Código de Hamurabi', 'Conjunto de leis babilônicas criadas por Hamurabi para regular a justiça na sociedade mesopotâmica.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome_usuario` varchar(250) NOT NULL,
  `tipo_usuario` enum('aluno','administrador') NOT NULL,
  `pass_usuario` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_usuario`, `tipo_usuario`, `pass_usuario`) VALUES
(3, 'Cibely', 'aluno', '$2y$10$/gx8hLhjuI3ee07BMUfpo.d9zyIc438zskl2ftx3IXBWX19ZBJKZC'),
(4, 'Justin', 'aluno', '$2y$10$Fa.fYIgpjuBp1pt0bpKRoe11mF4lIBbroBKci2mdY6OGFaloFhSz.'),
(5, 'Mariana', 'administrador', '$2y$10$CmrmPQ.YoFXO8/25FeVGheBTZIz5uQvYvhc8Y.mxFLjMefFbxqcvW'),
(6, 'Julia', 'aluno', '$2y$10$hC8sNbx3/epAYo76RnRoMOKgQAfDdYFFLuHXBkAj07P4k1u.86zcW');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `glossario`
--
ALTER TABLE `glossario`
  ADD PRIMARY KEY (`id_palavra`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `glossario`
--
ALTER TABLE `glossario`
  MODIFY `id_palavra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
