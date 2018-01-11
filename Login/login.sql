-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Jan-2018 às 22:57
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `usuario` varchar(222) NOT NULL,
  `senha` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(9, 'eduardo castro de oliveira', 'madaradu01@hotmail.com', 'Eduardo', '$2y$10$9T3IIaElduyv10V6MzsJfu.HS3Zsr64lZVSrwu7naDXppsEo92gx2'),
(10, 'Maria', 'maria@gmail.com', 'Maria', '$2y$10$nrzyW.8Ws0XpyoCQ9Om0revU75ip5xiWn5rE1UXyS9IgBu/PnUkOu'),
(11, 'Josue', 'Josue@gmail.com', 'Jose', '$2y$10$0Mfmsf4d/SzhXu9InsHtPutZxi5A9.mtHKfwMt/qJQNwsEVD7SWyK'),
(12, 'Romario', 'romario2@gmail.com', 'romario', '$2y$10$WNwzFJw3Tq9lyVXjsx5Qv.aSCuMKYC7jnbo9Aj5y7RbnKc8B3Byzu'),
(14, 'eduardo castro de oliveira', 'edua123sonic@gmail.com', 'eduardo castro de oliveira', '$2y$10$qbC3nOxWQeM6k49RhXAuauXjXc4ZoskJB4rugzL9r6jZOndNyPiqa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
