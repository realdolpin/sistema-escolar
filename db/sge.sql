-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Maio-2023 às 16:11
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sge`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nome` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_senha` varchar(50) NOT NULL,
  `admin_foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_nome`, `admin_email`, `admin_senha`, `admin_foto`) VALUES
(1, 'Vuvu Pereira', 'vuvupereira@gmail.com', '3049a1f0f1c808cdaa4fbed0e01649b1', 'da9e7fa8-3097-4df3-af6e-c0efc9799ed8.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE `tb_aluno` (
  `aluno_id` int(11) NOT NULL,
  `aluno_nome` varchar(50) NOT NULL,
  `aluno_email` varchar(50) NOT NULL,
  `aluno_senha` varchar(50) NOT NULL,
  `aluno_data_nascimento` date NOT NULL,
  `aluno_genero` varchar(50) NOT NULL,
  `aluno_telefone` varchar(20) NOT NULL,
  `aluno_num_documento` varchar(50) NOT NULL,
  `aluno_nacionalidade` varchar(50) NOT NULL,
  `aluno_cidade` varchar(50) NOT NULL,
  `aluno_bairro` varchar(50) NOT NULL,
  `aluno_rua` varchar(50) NOT NULL,
  `aluno_encarregado_nome` varchar(500) NOT NULL,
  `aluno_encarregado_telefone` varchar(20) NOT NULL,
  `aluno_encarregado_email` varchar(50) NOT NULL,
  `aluno_certificado` varchar(255) NOT NULL,
  `aluno_copia_bi` varchar(255) NOT NULL,
  `aluno_atestado_medico` varchar(255) NOT NULL,
  `aluno_cartao_vacina` varchar(255) NOT NULL,
  `aluno_foto_passe` varchar(255) DEFAULT NULL,
  `aluno_ano_lectivo` int(11) DEFAULT NULL,
  `aluno_estado` varchar(20) NOT NULL,
  `aluno_situacao` varchar(50) NOT NULL,
  `classe_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `data_registro_aluno` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_aluno`
--

INSERT INTO `tb_aluno` (`aluno_id`, `aluno_nome`, `aluno_email`, `aluno_senha`, `aluno_data_nascimento`, `aluno_genero`, `aluno_telefone`, `aluno_num_documento`, `aluno_nacionalidade`, `aluno_cidade`, `aluno_bairro`, `aluno_rua`, `aluno_encarregado_nome`, `aluno_encarregado_telefone`, `aluno_encarregado_email`, `aluno_certificado`, `aluno_copia_bi`, `aluno_atestado_medico`, `aluno_cartao_vacina`, `aluno_foto_passe`, `aluno_ano_lectivo`, `aluno_estado`, `aluno_situacao`, `classe_id`, `curso_id`, `data_registro_aluno`) VALUES
(4, 'Ana Mateus', 'anamateus@gmail.com', '1bf554ab8a7e8d4a6263a8f58129192b', '1976-03-26', 'F', '921538972', '11111111111111', 'Angolana', 'hotezeluke@mailinator.com', 'gukibygih@mailinator.com', 'mixeqacun@mailinator.com', 'António Domingos', '921000000', 'antoniodomingos@gmail.com', '63437fda-4abc-4d2b-be1d-8378476b5bd9.jpg', '63437fda-4abc-4d2b-be1d-8378476b5bd9.jpg', '63437fda-4abc-4d2b-be1d-8378476b5bd9.jpg', '63437fda-4abc-4d2b-be1d-8378476b5bd9.jpg', '1663962632242.jpg', 2023, 'Pendente', 'Corrente', 2, 5, '2023-05-28 20:54:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_classe`
--

CREATE TABLE `tb_classe` (
  `classe_id` int(11) NOT NULL,
  `classe_nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_classe`
--

INSERT INTO `tb_classe` (`classe_id`, `classe_nome`) VALUES
(1, '10ªclasse'),
(2, '11ªclasse'),
(3, '12ªclasse'),
(4, '13ªclasse'),
(5, '14ª classe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso`
--

CREATE TABLE `tb_curso` (
  `curso_id` int(11) NOT NULL,
  `curso_nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_curso`
--

INSERT INTO `tb_curso` (`curso_id`, `curso_nome`) VALUES
(1, 'Desenho Técnico'),
(5, 'Informática');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_disciplina`
--

CREATE TABLE `tb_disciplina` (
  `disciplina_id` int(11) NOT NULL,
  `disciplina_nome` varchar(50) NOT NULL,
  `disciplina_carga_horaria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_disciplina`
--

INSERT INTO `tb_disciplina` (`disciplina_id`, `disciplina_nome`, `disciplina_carga_horaria`) VALUES
(1, 'Física', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_disciplina_professor`
--

CREATE TABLE `tb_disciplina_professor` (
  `disciplina_professor_id` int(11) NOT NULL,
  `disciplina_id` int(11) NOT NULL,
  `professor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_disciplina_professor`
--

INSERT INTO `tb_disciplina_professor` (`disciplina_professor_id`, `disciplina_id`, `professor_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_horario`
--

CREATE TABLE `tb_horario` (
  `horario_id` int(11) NOT NULL,
  `horario_arquivo` varchar(250) DEFAULT NULL,
  `turma_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_horario`
--

INSERT INTO `tb_horario` (`horario_id`, `horario_arquivo`, `turma_id`, `admin_id`) VALUES
(1, '63437fda-4abc-4d2b-be1d-8378476b5bd9.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_matricula`
--

CREATE TABLE `tb_matricula` (
  `matricula_id` int(11) NOT NULL,
  `aluno_id` int(11) NOT NULL,
  `turma_id` int(11) NOT NULL,
  `ano_lectivo` int(8) NOT NULL,
  `data_registro_matricula` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_matricula`
--

INSERT INTO `tb_matricula` (`matricula_id`, `aluno_id`, `turma_id`, `ano_lectivo`, `data_registro_matricula`) VALUES
(1, 4, 2, 2022, '2023-05-28 20:54:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_nota`
--

CREATE TABLE `tb_nota` (
  `nota_id` int(11) NOT NULL,
  `aluno_id` int(11) NOT NULL,
  `disciplina_id` int(11) NOT NULL,
  `trimestre_id` int(11) NOT NULL,
  `professor_id` int(11) NOT NULL,
  `nota` decimal(4,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_nota`
--

INSERT INTO `tb_nota` (`nota_id`, `aluno_id`, `disciplina_id`, `trimestre_id`, `professor_id`, `nota`) VALUES
(1, 4, 1, 1, 1, '15.0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_professor`
--

CREATE TABLE `tb_professor` (
  `professor_id` int(11) NOT NULL,
  `professor_nome` varchar(50) NOT NULL,
  `professor_email` varchar(50) NOT NULL,
  `professor_senha` varchar(50) NOT NULL,
  `professor_genero` varchar(50) NOT NULL,
  `professor_bi` varchar(50) NOT NULL,
  `professor_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_professor`
--

INSERT INTO `tb_professor` (`professor_id`, `professor_nome`, `professor_email`, `professor_senha`, `professor_genero`, `professor_bi`, `professor_foto`) VALUES
(1, 'Isabel Pereira', 'isabelpereira@gmail.com', '3049a1f0f1c808cdaa4fbed0e01649b1', '', '1111111111111111', 'IMG_8529-Isabel-Ntanda_@VisionStudio (1).jpg'),
(2, 'João', 'vybuloty@mailinator.com', 'd9b1d7db4cd6e70935368a1efb10e377', 'M', '999999', '63437fda-4abc-4d2b-be1d-8378476b5bd9.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_trimestre`
--

CREATE TABLE `tb_trimestre` (
  `trimestre_id` int(11) NOT NULL,
  `trimestre_nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_trimestre`
--

INSERT INTO `tb_trimestre` (`trimestre_id`, `trimestre_nome`) VALUES
(1, '1º Trimestre'),
(2, '2º Trimestre'),
(3, '3º Trimestre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turma`
--

CREATE TABLE `tb_turma` (
  `turma_id` int(11) NOT NULL,
  `turma_nome` varchar(50) NOT NULL,
  `classe_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_turma`
--

INSERT INTO `tb_turma` (`turma_id`, `turma_nome`, `classe_id`, `curso_id`) VALUES
(1, 'A1', 1, 1),
(2, 'A2', 2, 1),
(3, 'B1', 2, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turma_professor`
--

CREATE TABLE `tb_turma_professor` (
  `turma_professor_id` int(11) NOT NULL,
  `turma_id` int(11) NOT NULL,
  `professor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_turma_professor`
--

INSERT INTO `tb_turma_professor` (`turma_professor_id`, `turma_id`, `professor_id`) VALUES
(2, 2, 1),
(4, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Índices para tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD PRIMARY KEY (`aluno_id`),
  ADD KEY `classe_id` (`classe_id`),
  ADD KEY `curso_id` (`curso_id`);

--
-- Índices para tabela `tb_classe`
--
ALTER TABLE `tb_classe`
  ADD PRIMARY KEY (`classe_id`);

--
-- Índices para tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD PRIMARY KEY (`curso_id`);

--
-- Índices para tabela `tb_disciplina`
--
ALTER TABLE `tb_disciplina`
  ADD PRIMARY KEY (`disciplina_id`);

--
-- Índices para tabela `tb_disciplina_professor`
--
ALTER TABLE `tb_disciplina_professor`
  ADD PRIMARY KEY (`disciplina_professor_id`),
  ADD KEY `disciplina_id` (`disciplina_id`),
  ADD KEY `professor_id` (`professor_id`);

--
-- Índices para tabela `tb_horario`
--
ALTER TABLE `tb_horario`
  ADD PRIMARY KEY (`horario_id`),
  ADD KEY `turma_id` (`turma_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Índices para tabela `tb_matricula`
--
ALTER TABLE `tb_matricula`
  ADD PRIMARY KEY (`matricula_id`),
  ADD KEY `aluno_id` (`aluno_id`),
  ADD KEY `turma_id` (`turma_id`);

--
-- Índices para tabela `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD PRIMARY KEY (`nota_id`),
  ADD KEY `aluno_id` (`aluno_id`),
  ADD KEY `disciplina_id` (`disciplina_id`),
  ADD KEY `trimestre_id` (`trimestre_id`),
  ADD KEY `professor_id` (`professor_id`);

--
-- Índices para tabela `tb_professor`
--
ALTER TABLE `tb_professor`
  ADD PRIMARY KEY (`professor_id`);

--
-- Índices para tabela `tb_trimestre`
--
ALTER TABLE `tb_trimestre`
  ADD PRIMARY KEY (`trimestre_id`);

--
-- Índices para tabela `tb_turma`
--
ALTER TABLE `tb_turma`
  ADD PRIMARY KEY (`turma_id`),
  ADD KEY `curso_id` (`curso_id`),
  ADD KEY `classe_id` (`classe_id`);

--
-- Índices para tabela `tb_turma_professor`
--
ALTER TABLE `tb_turma_professor`
  ADD PRIMARY KEY (`turma_professor_id`),
  ADD KEY `turma_id` (`turma_id`),
  ADD KEY `professor_id` (`professor_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  MODIFY `aluno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_classe`
--
ALTER TABLE `tb_classe`
  MODIFY `classe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `curso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_disciplina`
--
ALTER TABLE `tb_disciplina`
  MODIFY `disciplina_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_disciplina_professor`
--
ALTER TABLE `tb_disciplina_professor`
  MODIFY `disciplina_professor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_horario`
--
ALTER TABLE `tb_horario`
  MODIFY `horario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_matricula`
--
ALTER TABLE `tb_matricula`
  MODIFY `matricula_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_nota`
--
ALTER TABLE `tb_nota`
  MODIFY `nota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_professor`
--
ALTER TABLE `tb_professor`
  MODIFY `professor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_trimestre`
--
ALTER TABLE `tb_trimestre`
  MODIFY `trimestre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_turma`
--
ALTER TABLE `tb_turma`
  MODIFY `turma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_turma_professor`
--
ALTER TABLE `tb_turma_professor`
  MODIFY `turma_professor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD CONSTRAINT `tb_aluno_ibfk_1` FOREIGN KEY (`classe_id`) REFERENCES `tb_classe` (`classe_id`),
  ADD CONSTRAINT `tb_aluno_ibfk_2` FOREIGN KEY (`curso_id`) REFERENCES `tb_curso` (`curso_id`);

--
-- Limitadores para a tabela `tb_disciplina_professor`
--
ALTER TABLE `tb_disciplina_professor`
  ADD CONSTRAINT `tb_disciplina_professor_ibfk_1` FOREIGN KEY (`disciplina_id`) REFERENCES `tb_disciplina` (`disciplina_id`),
  ADD CONSTRAINT `tb_disciplina_professor_ibfk_2` FOREIGN KEY (`professor_id`) REFERENCES `tb_professor` (`professor_id`);

--
-- Limitadores para a tabela `tb_horario`
--
ALTER TABLE `tb_horario`
  ADD CONSTRAINT `tb_horario_ibfk_1` FOREIGN KEY (`turma_id`) REFERENCES `tb_turma` (`turma_id`),
  ADD CONSTRAINT `tb_horario_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `tb_admin` (`admin_id`);

--
-- Limitadores para a tabela `tb_matricula`
--
ALTER TABLE `tb_matricula`
  ADD CONSTRAINT `tb_matricula_ibfk_1` FOREIGN KEY (`aluno_id`) REFERENCES `tb_aluno` (`aluno_id`),
  ADD CONSTRAINT `tb_matricula_ibfk_2` FOREIGN KEY (`turma_id`) REFERENCES `tb_turma` (`turma_id`);

--
-- Limitadores para a tabela `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD CONSTRAINT `tb_nota_ibfk_1` FOREIGN KEY (`aluno_id`) REFERENCES `tb_aluno` (`aluno_id`),
  ADD CONSTRAINT `tb_nota_ibfk_2` FOREIGN KEY (`disciplina_id`) REFERENCES `tb_disciplina` (`disciplina_id`),
  ADD CONSTRAINT `tb_nota_ibfk_3` FOREIGN KEY (`trimestre_id`) REFERENCES `tb_trimestre` (`trimestre_id`),
  ADD CONSTRAINT `tb_nota_ibfk_4` FOREIGN KEY (`professor_id`) REFERENCES `tb_professor` (`professor_id`);

--
-- Limitadores para a tabela `tb_turma`
--
ALTER TABLE `tb_turma`
  ADD CONSTRAINT `tb_turma_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `tb_curso` (`curso_id`),
  ADD CONSTRAINT `tb_turma_ibfk_2` FOREIGN KEY (`classe_id`) REFERENCES `tb_classe` (`classe_id`);

--
-- Limitadores para a tabela `tb_turma_professor`
--
ALTER TABLE `tb_turma_professor`
  ADD CONSTRAINT `tb_turma_professor_ibfk_1` FOREIGN KEY (`turma_id`) REFERENCES `tb_turma` (`turma_id`),
  ADD CONSTRAINT `tb_turma_professor_ibfk_2` FOREIGN KEY (`professor_id`) REFERENCES `tb_professor` (`professor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
