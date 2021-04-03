-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 13-Ago-2018 às 13:48
-- Versão do servidor: 5.6.21
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abylius`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE `administradores` (
  `cod_admin` int(11) NOT NULL,
  `nome` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(225) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`cod_admin`, `nome`, `email`, `senha`, `created`, `modified`) VALUES
(1, 'Osmar Abilio', 'osmar@unb.br', '123456', '2018-07-20 01:40:00', '2018-07-20 01:40:00'),
(2, 'Renato', 'renatofg@unb.br', '122344', '2018-07-23 21:01:07', '2018-07-23 21:01:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `discentes`
--

CREATE TABLE `discentes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `curso` int(11) NOT NULL,
  `uf_origin` varchar(100) DEFAULT NULL,
  `littlevitae` text,
  `ingresso` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `lattes` varchar(255) DEFAULT NULL,
  `docente_id` int(11) NOT NULL,
  `docentes_co_cod` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `discentes`
--

INSERT INTO `discentes` (`id`, `nome`, `curso`, `uf_origin`, `littlevitae`, `ingresso`, `email`, `lattes`, `docente_id`, `docentes_co_cod`, `photo`, `photo_dir`, `created`, `modified`) VALUES
(3, 'José Carlos de Oliveira', 2, 'Universidade Federal de Uberlândia', 'Graduado em Geografia, experiência de 10 anos com geoprocessamento.', '2018-06-06', 'zeoliveira@gmail.com', '', 5, '', 'zeoliveira.jpg', '', '2018-08-06 14:46:50', '2018-08-06 14:46:50'),
(4, 'Wagner Campos', 3, 'Universidade de São Paulo', 'Geologo, especialista em sensoriamento remoto.', '2018-08-06', 'wcampos@hotmail.com', '', 7, '', 'wagner.jpg', '', '2018-08-06 14:49:49', '2018-08-06 14:49:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `docentes`
--

CREATE TABLE `docentes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `titulacao` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `lattes` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `docentes`
--

INSERT INTO `docentes` (`id`, `nome`, `titulacao`, `email`, `lattes`, `photo`, `photo_dir`, `created`, `modified`) VALUES
(2, 'José Lopes', 2, 'zelopes@unb.br', 'http://lattes.cnpq.br/0271802826555094', 'lopes.jpg', '', '2018-08-05 15:10:49', '2018-08-06 14:42:14'),
(5, 'Renato FG Geociencias', 2, 'renatofg@unb.br', 'http://lattes.cnpq.br/0271802826555094', 'renato.jpg', '', '2018-08-05 15:51:44', '2018-08-05 23:59:31'),
(6, 'Renato FG Geociencias 2', 1, 'ren@unb.br', 'http://lattes.cnpq.br/0271802826555094', 'renato.png', '', '2018-08-05 16:25:05', '2018-08-05 16:25:41'),
(7, 'Roberta da Silva', 2, 'robertot@unb.br', 'http://lattes.cnpq.br/5572269831914055', 'mulher.jpg', '', '2018-08-05 23:58:11', '2018-08-05 23:58:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagesevents`
--

CREATE TABLE `imagesevents` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `noticia_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imagesevents`
--

INSERT INTO `imagesevents` (`id`, `descricao`, `imagem`, `noticia_id`, `created`, `modified`) VALUES
(1, '4º Congresso Brasileiro de Geoprocessamento', 'logo-cbg.png', 1, '2018-08-13 01:18:54', '2018-08-13 01:18:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `metodos`
--

CREATE TABLE `metodos` (
  `cod_metodo` int(11) NOT NULL,
  `nome` varchar(225) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `passos` mediumtext NOT NULL,
  `referencias` text,
  `video` varchar(1000) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `metodos`
--

INSERT INTO `metodos` (`cod_metodo`, `nome`, `descricao`, `passos`, `referencias`, `video`, `created`, `modified`) VALUES
(1, 'Distância Euclidiana', 'Em matemática, distância euclidiana (ou distância métrica) é a distância entre dois pontos, que pode ser provada pela aplicação repetida do teorema de Pitágoras. Aplicando essa fórmula como distância, o espaço euclidiano torna-se um espaço métrico.', '1.Faça Isso\r\n2.Faça aquilo\r\n3. Aqui outro\r\n4. Novamente', 'https://pt.wikipedia.org/wiki/Dist%C3%A2ncia_euclidiana', 'https://www.youtube.com/embed/DxoBKD1By4Y', '2018-07-19 22:25:23', '2018-08-04 19:39:02'),
(2, 'Método do Paralelepípedo', 'Pessoal Neste tutorial apresento a resolução do exercício proposto no post anterior pelo Método do Paralelepípedo, que apesar de ser um dos métodos mais simples da Classificação Supervisionada tem o seu valor por ser mais rápido no processamento, mas informo que perdemos um pouco na “eficiência” devido suas restrições na hora de classificar, por isso aconselho que seja utilizado quando', '1. Faça Isso\r\n2. Faça Aquilo\r\n3. Aquilo outro\r\n4. Novamente\r\n5. Siga em frente\r\n6. Clique em ok', 'https://geosenso.wordpress.com/2012/03/30/pensando-como-o-software-ii-classificacao-supervisionada-metodo-do-paralelepipedo-matlab/', 'https://www.youtube.com/embed/8r_GG26K1c8', '2018-07-19 22:38:50', '2018-08-04 19:40:12'),
(4, 'Kohonen', 'asfafafafafaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaffffffffffffffff', 'https://www.youtube.com/embed/s6SC01qgILE', '2018-07-30 02:21:20', '2018-07-30 04:22:45'),
(5, 'K-Media', 'A idéia do algoritmo K-Means (também chamado de K-Médias) é fornecer uma classificação de informações de acordo com os próprios dados. Esta classificação, como será vista a seguir, é baseada em análise e comparações entre os valores numéricos dos dados. Desta maneira, o algoritmo automaticamente vai fornecer uma classificação automática sem a necessidade de nenhuma supervisão humana, ou seja, sem nenhuma pré-classificação existente. Por causa desta característica, o K-Means é considerado como um algoritmo de mineração de dados não supervisionado.', '1. Isso\r\n2. Aqui\r\n3. Aqui outro', 'http://www.kdkeys.net/forums/3538/ShowPost.aspx', 'https://www.youtube.com/embed/T2arU0zsMHY', '2018-08-02 01:11:27', '2018-08-02 01:11:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `subtitle` text,
  `body` mediumtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `title`, `subtitle`, `body`, `user_id`, `created`, `modified`) VALUES
(1, 'Cogresso Brasileiro de Geoprocessamento', '', 'Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.\r\nDonec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.\r\nDonec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.\r\nDonec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.\r\nDonec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.', 4, '2018-08-13 01:14:21', '2018-08-13 01:14:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `email`, `role`, `created`, `modified`) VALUES
(2, 'Franscisca Lima', 'fran', '$2y$10$2VibkG9glRrFmiPovJQ41eizwHJ5hthK.vdsOLL/SnjLCfNvSDb.K', 'franlima@gmail.com', 'admin', '2018-08-01 15:59:21', '2018-08-10 15:06:31'),
(3, 'Luiz Oliveira', 'luiz', '$2y$10$i6zxuM2.Vz2lrOPbnuCvLOt7Vvp4GSARgKli7.UuGt7wzG4fNB/iy', 'luizeduardo.unb@gmail.com', '', '2018-08-10 14:35:05', '2018-08-10 15:06:57'),
(4, 'Osmar Abílio', 'abilio', '$2y$10$h6yBM30jeChd4Ok0d1BIa.BkB18MhXs7ZyCpBn/1y0hTnIjQrYXnG', 'osmarjr@unb.br', 'admin', '2018-08-10 15:07:45', '2018-08-10 15:07:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`cod_admin`);

--
-- Indexes for table `discentes`
--
ALTER TABLE `discentes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `docente_id` (`docente_id`);

--
-- Indexes for table `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagesevents`
--
ALTER TABLE `imagesevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metodos`
--
ALTER TABLE `metodos`
  ADD PRIMARY KEY (`cod_metodo`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `cod_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discentes`
--
ALTER TABLE `discentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `imagesevents`
--
ALTER TABLE `imagesevents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `metodos`
--
ALTER TABLE `metodos`
  MODIFY `cod_metodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `discentes`
--
ALTER TABLE `discentes`
  ADD CONSTRAINT `discentes_ibfk_1` FOREIGN KEY (`docente_id`) REFERENCES `docentes` (`id`);

--
-- Limitadores para a tabela `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
