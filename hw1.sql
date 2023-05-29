-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 29, 2023 alle 09:18
-- Versione del server: 10.4.25-MariaDB
-- Versione PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hw1`
--

-- CREAZIONE DEL DB RIMUOVERE SE GIA' ESISTE
CREATE DATABASE IF NOT EXISTS `hw1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hw1`;

-- --------------------------------------------------------

--
-- Struttura della tabella `commenti`
--

CREATE TABLE `commenti` (
  `id` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `id_utente` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `descrizione` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `commenti`
--

INSERT INTO `commenti` (`id`, `id_foto`, `id_utente`, `time`, `descrizione`) VALUES
(11, 64, 60, '0000-00-00 00:00:00', 'la foto è molto bella, come mai 300iso? '),
(17, 63, 60, '0000-00-00 00:00:00', '<3'),
(19, 63, 60, '0000-00-00 00:00:00', 'Un commento'),
(21, 64, 60, '0000-00-00 00:00:00', 'Prova da iphone di Antonio'),
(22, 69, 77, '0000-00-00 00:00:00', 'Questa è casa mia!'),
(24, 69, 77, '0000-00-00 00:00:00', '😎'),
(36, 73, 60, '0000-00-00 00:00:00', 'GRANDEEEEEEEEEE');

-- --------------------------------------------------------

--
-- Struttura della tabella `foto`
--

CREATE TABLE `foto` (
  `ID` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `luogo` varchar(30) NOT NULL,
  `Macchina` varchar(20) NOT NULL,
  `Obiettivo` varchar(15) NOT NULL,
  `F` varchar(3) NOT NULL,
  `iso` varchar(8) NOT NULL,
  `esposizione` varchar(10) NOT NULL,
  `descrizione` longtext NOT NULL,
  `utente` int(11) NOT NULL,
  `ora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Valore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `foto`
--

INSERT INTO `foto` (`ID`, `foto`, `luogo`, `Macchina`, `Obiettivo`, `F`, `iso`, `esposizione`, `descrizione`, `utente`, `ora`, `Valore`) VALUES
(63, 'gio78493.jpg', 'Bologna', 'NIKON D5100', 'SIGMA 17-70', '2.8', '100', '1/900', 'Foto scattata al beautiful museum di Bologna', 61, '2023-05-29 07:02:12', 0),
(64, 'gio38142.jpg', 'UZBEKISTAN', 'NIKON D7200', 'SIGMA 17-70', '2.8', '300', '1/1000', 'Ho scattato questa foto durante il mio viaggio in Uzbekistan. Con questa immagine volevo sottolineare le splendide imperfezioni delle strutture di quel luogo.\r\nHo scattato questa foto durante il mio viaggio in Uzbekistan. Con questa immagine volevo sottolineare le splendide imperfezioni delle strutture di quel luogo.\r\nHo scattato questa foto durante il mio viaggio in Uzbekistan. Con questa immagine volevo sottolineare le splendide imperfezioni delle strutture di quel luogo.\r\nHo scattato questa foto durante il mio viaggio in Uzbekistan. Con questa immagine volevo sottolineare le splendide imperfezioni delle strutture di quel luogo.\r\nHo scattato questa foto durante il mio viaggio in Uzbekistan. Con questa immagine volevo sottolineare le splendide imperfezioni delle strutture di quel luogo.\r\nHo scattato questa foto durante il mio viaggio in Uzbekistan. Con questa immagine volevo sottolineare le splendide imperfezioni delle strutture di quel luogo.\r\nHo scattato questa foto durante il mio viaggio in Uzbekistan. Con questa immagine volevo sottolineare le splendide imperfezioni delle strutture di quel luogo.\r\nHo scattato questa foto durante il mio viaggio in Uzbekistan. Con questa immagine volevo sottolineare le splendide imperfezioni delle strutture di quel luogo.\r\nHo scattato questa foto durante il mio viaggio in Uzbekistan. Con questa immagine volevo sottolineare le splendide imperfezioni delle strutture di quel luogo.\r\nHo scattato questa foto durante il mio viaggio in Uzbekistan. Con questa immagine volevo sottolineare le splendide imperfezioni delle strutture di quel luogo.Ho scattato questa foto durante il mio viaggio in Uzbekistan. Con questa immagine volevo sottolineare le splendide imperfezioni delle strutture di quel luogo.\r\n', 61, '2023-05-15 10:20:22', 0),
(65, 'SOFIAMAANNO51826.jpg', 'NICOLOSI', 'D5100', '18-105', '5.6', '400', '1/1000', 'Foto scattata durante i festeggiamenti post analisi 1', 66, '2023-05-29 07:02:45', 0),
(66, 'cr1057099.jpg', 'UZBEKISTAN', 'D5100', '50mm', '1.8', '100', '1/2000', 'pavone uzbeko', 60, '2023-05-29 07:02:58', 0),
(67, 'cr1056969.jpg', 'ROMANIA', 'D7200', 'SIGMA 17-70', '2.8', '300', '1/800', 'Ho scattato questa immagine in Romania, ho immortalato questo momento in bianco e nero per enfatizzare i contrasti.', 60, '2023-05-29 07:07:25', 0),
(68, 'cr1099154.jpg', 'UZBEKISTAN', 'NIKON D7200', 'SIGMA 17-70', '5.6', '300', '1/1000', 'Ho scattato questa foto durante il mio viaggio in Uzbekistan. Con questa immagine volevo sottolineare le splendide imperfezioni delle strutture di quel luogo.', 60, '2023-05-29 07:06:35', 0),
(69, 'cr1021198.jpg', 'ROMANIA', 'D5100', '18-105', '8', '200', '1/800', 'CASE ROMANIA', 60, '2023-05-21 16:11:22', 0),
(73, 'Dragone202322026.jpg', 'Playa', 'NIKON', '70-300', '5', '200', '1/800', 'Dopo aver battuto medicina.\nDedico tale vittoria ai miei colleghi.\n', 78, '2023-05-29 06:59:43', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `mipiace`
--

CREATE TABLE `mipiace` (
  `id` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `id_utente` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `mipiace`
--

INSERT INTO `mipiace` (`id`, `id_foto`, `id_utente`, `time`) VALUES
(46, 63, 60, '2023-05-24 10:38:05'),
(48, 65, 60, '2023-05-24 10:38:08'),
(50, 63, 61, '2023-05-24 10:55:11'),
(53, 67, 60, '2023-05-24 13:22:32'),
(56, 68, 60, '2023-05-24 13:52:07'),
(57, 63, 77, '2023-05-24 13:56:36'),
(58, 64, 77, '2023-05-24 13:56:37'),
(59, 65, 77, '2023-05-24 13:56:38'),
(60, 66, 77, '2023-05-24 13:56:39'),
(61, 67, 77, '2023-05-24 13:56:40'),
(62, 68, 77, '2023-05-24 13:56:41'),
(63, 69, 77, '2023-05-24 13:56:42'),
(75, 73, 66, '2023-05-25 15:02:27'),
(80, 73, 60, '2023-05-29 07:16:08');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `id` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pwd` char(60) DEFAULT NULL,
  `salt` varbinary(16) NOT NULL,
  `mail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`id`, `user`, `pwd`, `salt`, `mail`) VALUES
(60, 'cr10', '$2y$10$KJYaksUeZnUMvaZjbr0RnuYPIIOPlH..eMy3zgXCqEje.jyWf6z1i', '', 'cristiano.pistorio@gmail.com'),
(61, 'gio', '$2y$10$DkXQYfZGFCrF4Y.dGKiW3OVUPoRMrnRC42buK4dghaLlCyK5MZJp6', '', 'giorgi@gmail.com'),
(66, 'SOFIAMAANNO', '$2y$10$TXbK3NqQuMo7ltlRBQvsDu0TAdBp9KmcZGAaLiCx.2ajTryi14deK', '', 'SOFIAMAANNO@GMAIL.COM'),
(77, 'AntoMalzo', '$2y$10$TXbK3NqQuMo7ltlRBQvsDu0TAdBp9KmcZGAaLiCx.2ajTryi14deK', '', 'anto@topg.universe'),
(78, 'Dragone2023', '$2y$10$mYTYl8dAoSROng7P2pFGi.um5APZ5/FRcd27XMpNCKMiv7GLOyy7.', '', 'Priviteraalfio4@gmail.com'),
(82, 'a', '$2y$10$iCQPyoYvejsvO7BjVOCzROrpu1OfaVpQ9/fKPXCzaw3/lWexk2npS', '', 'a@a.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `commenti`
--
ALTER TABLE `commenti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commenti_ibfk_1` (`id_foto`),
  ADD KEY `commenti_ibfk_2` (`id_utente`);

--
-- Indici per le tabelle `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `utente` (`utente`);

--
-- Indici per le tabelle `mipiace`
--
ALTER TABLE `mipiace`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messo` (`id_utente`),
  ADD KEY `a` (`id_foto`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `commenti`
--
ALTER TABLE `commenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT per la tabella `foto`
--
ALTER TABLE `foto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT per la tabella `mipiace`
--
ALTER TABLE `mipiace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `commenti`
--
ALTER TABLE `commenti`
  ADD CONSTRAINT `commenti_ibfk_1` FOREIGN KEY (`id_foto`) REFERENCES `foto` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `commenti_ibfk_2` FOREIGN KEY (`id_utente`) REFERENCES `utente` (`id`) ON DELETE CASCADE;

--
-- Limiti per la tabella `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `creata` FOREIGN KEY (`utente`) REFERENCES `utente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `mipiace`
--
ALTER TABLE `mipiace`
  ADD CONSTRAINT `a` FOREIGN KEY (`id_foto`) REFERENCES `foto` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `messo` FOREIGN KEY (`id_utente`) REFERENCES `utente` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
