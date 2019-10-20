-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Temps de generació: 20-10-2019 a les 08:03:07
-- Versió del servidor: 5.7.21-0ubuntu0.16.04.1
-- Versió de PHP: 7.2.2-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `test`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `gestisimal`
--

CREATE TABLE `gestisimal` (
  `codi` int(11) NOT NULL,
  `descripcio` varchar(50) NOT NULL,
  `preuCompra` float NOT NULL,
  `preuVenda` float NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Bolcant dades de la taula `gestisimal`
--

INSERT INTO `gestisimal` (`codi`, `descripcio`, `preuCompra`, `preuVenda`, `stock`) VALUES
(1, 'Crimpadora', 12, 20, 15),
(2, 'ConnexiÃ³ RJ45', 0.05, 0.5, 1000),
(3, 'Femella RJ45', 1.2, 3, 30),
(4, 'Impressora LaserJet Pro M402dn', 72, 120, 6);

--
-- Indexos per taules bolcades
--

--
-- Index de la taula `gestisimal`
--
ALTER TABLE `gestisimal`
  ADD PRIMARY KEY (`codi`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `gestisimal`
--
ALTER TABLE `gestisimal`
  MODIFY `codi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
