-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jun-2018 às 02:13
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scsac`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `grr` int(8) DEFAULT NULL,
  `reg` text NOT NULL,
  `curso` varchar(30) NOT NULL,
  `discp1` varchar(30) NOT NULL,
  `discp2` varchar(30) NOT NULL,
  `validacao` varchar(7) NOT NULL,
  `func` varchar(30) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `grr`, `reg`, `curso`, `discp1`, `discp2`, `validacao`, `func`, `data`) VALUES
(1, 'Félix Miélli Venerando', 19700001, 'Aluno', 'Agronomia', 'Topografia', 'Divulgação Científica', '', '', '0000-00-00 00:00:00'),
(2, 'Eduardo Roberto Stinghen', 19700012, 'Aluno', 'Licenciatura Ciências Exatas', 'Divulgação Científica', 'Matemática I', '', '', '0000-00-00 00:00:00'),
(3, 'Emerson Leão', 19700022, 'Aluno', 'Medicina Veterinária', 'Citologia e Histologia', 'Anatomia Veterinária I', '', '', '0000-00-00 00:00:00'),
(4, 'Carlos Alberto Torres', 19700004, 'Aluno', 'Licenciatura Computação', 'Ética e Educação', 'Computadores e Sociedade', 'Negado', 'Airan', '2018-06-03 00:00:00'),
(5, 'José Maria Rodrigues Alves', 19700021, 'Aluno', 'Ciências Biológicas', 'Genética', 'Parasitologia', '', '', '0000-00-00 00:00:00'),
(6, 'Marco Antônio Feliciano', 19700006, 'Aluno', 'Biotecnologia', 'Genética', 'Bioquímica Geral', '', '', '0000-00-00 00:00:00'),
(7, 'Everaldo Marques da Silva', 19700016, 'Aluno', 'Medicina Veterinária', 'Anestesiologia Veterinária', 'Parasitologia', '', '', '0000-00-00 00:00:00'),
(8, 'Hércules Brito Ruas', 19700002, 'Aluno', 'Engenharia de Aquicultura', 'Tecnologia do Pescado', 'Divulgação Científica', '', '', '0000-00-00 00:00:00'),
(9, 'Wilson Piazza', 19700003, 'Aluno', 'Licenciatura Computação', 'Introdução à Lógica', 'Ética e Educação', '', '', '0000-00-00 00:00:00'),
(10, 'Gérson de Oliveira Nunes', 19700008, 'Aluno', 'Licenciatura Ciências Exatas', 'Geometria Analítica', 'Química Orgânica', '', '', '0000-00-00 00:00:00'),
(11, 'Roberto Rivellino', 19700011, 'Aluno', 'Licenciatura Computação', 'Matemática I', 'Didática da Computação', '', '', '0000-00-00 00:00:00'),
(12, 'Eduardo Gonçalves de Andrade', 19700007, 'Aluno', 'Licenciatura Computação', 'Introdução à Lógica', 'Computadores e Sociedade', 'Aceito', 'Helio', '2018-06-03 00:00:00'),
(13, 'Edson Arantes do Nascimento', 19700010, 'Aluno', 'Licenciatura Computação', 'Divulgação Científica', 'Matemática I', 'Aceito', 'Airan', '2018-06-03 00:00:00'),
(14, 'Jair Ventura Filho', 19700007, 'Aluno', 'Medicina Veterinária', 'Ecologia de Campo', 'Anestesiologia Veterinária', '', '', '0000-00-00 00:00:00'),
(15, 'Mário Jorge lobo Zagallo', 19700000, 'Servidor', 'Licenciatura Computação', 'Ética e Educação', 'Inteligência Artificial', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nomedocurso` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nomedocurso`) VALUES
(64, 'Agronomia'),
(66, 'Ciências Biológicas'),
(67, 'Engenharia de Aquicultura'),
(68, 'Biotecnologia'),
(70, 'Licenciatura Computação'),
(71, 'Licenciatura Ciências Exatas'),
(72, 'Medicina Veterinária'),
(73, 'Eng de Recursos Renováveis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id` int(11) NOT NULL,
  `nomedisciplina` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id`, `nomedisciplina`) VALUES
(1, 'Genética'),
(2, 'Topografia'),
(3, 'Gestão Ambiental'),
(4, 'Biologia Celular'),
(5, 'Parasitologia'),
(6, 'Ecologia de Campo'),
(7, 'Redação Instrumental'),
(8, 'Citologia e Histologia'),
(9, 'Tecnologia do Pescado'),
(10, 'Microbiologia'),
(11, 'Química Orgânica'),
(12, 'Computadores e Sociedade'),
(13, 'Didática da Computação'),
(14, 'Divulgação Científica'),
(15, 'Ética e Educação'),
(16, 'Geometria Analítica'),
(17, 'Inteligência Artificial'),
(18, 'Introdução à Lógica'),
(19, 'Matemática I'),
(20, 'Bioquímica Geral'),
(21, 'Anatomia Veterinária I'),
(23, 'Anestesiologia Veterinária');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `login` varchar(10) NOT NULL,
  `senha` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`login`, `senha`) VALUES
('Airan', 123456),
('Airan', 123456),
('Helio', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
