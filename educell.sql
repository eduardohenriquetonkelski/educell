-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/11/2023 às 20:09
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `educell`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name_product` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Celulares'),
(2, 'Computadores'),
(3, 'Acessórios');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` varchar(155) NOT NULL,
  `endereco` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `senha`, `telefone`, `endereco`) VALUES
(1, 'Bruno', 'bruno@bruno.com.br', 'de1d574761e7db668b4ae8d3ff12c0c9', '(11) 9 9966-9966', 'rua do desenvolvedor, 548\r\ncep 03939-046\r\nsão paulo/sp'),
(2, 'eduardo', 'eduardo@bruno.com.br', '25f9e794323b453885f5181f1b624d0b', '(99) 6 6445-5632', 'rua do estudante, 255\r\ncep 03969-693\r\nsao paulo/sp'),
(3, 'Kim', 'kim@bruno.com.br', 'de1d574761e7db668b4ae8d3ff12c0c9', '(99)999999999', 'rua da fortuna 666');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `descricao` text DEFAULT NULL,
  `preco_anterior` decimal(10,2) NOT NULL,
  `preco_atual` decimal(10,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_subcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `img`, `descricao`, `preco_anterior`, `preco_atual`, `estoque`, `id_categoria`, `id_subcategoria`) VALUES
(12, 'Peliculas 3d', 'Assets/produtos/peliculas 3d.webp', 'Peliculas superprotetoras para seu aparelho e esconde suas mensagens de bisbilhoteiros.', 35.00, 30.00, 10, 3, 10),
(13, 'Smartphone Samsung Galaxy A04e 64GB Preto', 'Assets/produtos/samsung2.png', 'Smartphone Samsung Galaxy A04e 64GB Preto', 700.00, 700.00, 10, 1, 4),
(14, 'Moto G32 Dual SIM 128 GB rose gold 4 GB RAM', 'Assets/produtos/Moto G32.webp', 'Apontou, clicou, postou. É surreal. Tire fotos ultra-wide com grande-angular, faça retratos com aparência profissional e capture detalhes bem de perto. Você tem a câmera ideal para todos os momentos.Curta o áudio multidimensional imersivo e envolvente, com graves aprimorados, voz mais nítida e som mais cristalino, com dois alto-falantes estéreo grandes com Dolby Atmos.Assista a todos os seus conteúdos com um som mais claro, nítido e alto. Com o Moto G32, você ouve graves aprimorados e vocais mais nítidos, além de ter mais clareza e volumes mais altos.Som tridimensional e envolvente de qualidade Dolby Atmos. Curta o som dos seus filmes e séries favoritos de um jeito completamente novo e escute músicas com mais clareza e nitidez.Aproveite o melhor da câmera do Moto G32 com sensor de 50MP + Quad Pixel e confira também alguns dos recursos para deixar seus cliques ainda mais bonitos.Com a ajuda da inteligência artificial, usando a regra dos terços, a câmera gera automaticamente uma versão opcional da imagem com base na foto original.Mude para o modo Night Vision em ambientes com pouquíssima luz para revelar mais detalhes no escuro.Com a tecnologia Quad Pixel, você tem 4 vezes mais sensibilidade em situações de pouca luz para suas fotos ficarem mais nítidas e vibrantes.Grave vídeos ou tire fotos usando as câmeras traseira e frontal ao mesmo tempo. Com o modo Captura Dupla, as duas câmeras funcionam juntas em uma tela dividida.A vida não para. Seu telefone também não pode parar. O processador Snapdragon 680 Octa-Core e os 6GB de RAM aceleram seu desempenho em tudo. Tenha potência extra para curtir games, assistir a vídeos por streaming e usar recursos avançados de fotografia. E não se preocupe mais com o armazenamento. Com 128GB de memória interna, tem espaço de sobra para fotos, filmes, músicas, apps e jogos.Ninguém merece se estressar com pouca bateria, principalmente antes de sair à noite ou durante um dia agitado no trabalho. Com o TurboPower 33, você consegue horas de bateria em poucos minutos de carga.Pode esquecer o carregador e o estresse. A bateria reforçada de 5000 mAh acompanha seu ritmo por mais tempo sem precisar de uma nova carga.', 1000.00, 920.00, 10, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `subcategoria`
--

INSERT INTO `subcategoria` (`id`, `nome`) VALUES
(1, 'iPhone'),
(2, 'Motorola'),
(3, 'Xiaomi'),
(4, 'Samsung'),
(5, 'Periféricos'),
(6, 'Monitores'),
(7, 'Componentes'),
(8, 'Fones'),
(9, 'Carregadores'),
(10, 'Películas'),
(11, 'Capinhas');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_subcategoria` (`id_subcategoria`);

--
-- Índices de tabela `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`id_subcategoria`) REFERENCES `subcategoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
