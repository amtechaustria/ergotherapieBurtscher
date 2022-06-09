-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Jan 2021 um 12:59
-- Server-Version: 10.4.17-MariaDB
-- PHP-Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `kontaktburtscher`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_kontaktformular`
--

CREATE TABLE `tbl_kontaktformular` (
  `ND_ID` mediumint(9) NOT NULL,
  `Vorname` varchar(50) NOT NULL,
  `Nachname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Betreff` varchar(50) NOT NULL,
  `Nachricht` text NOT NULL,
  `Datum` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `tbl_kontaktformular`
--

INSERT INTO `tbl_kontaktformular` (`ND_ID`, `Vorname`, `Nachname`, `Email`, `Betreff`, `Nachricht`, `Datum`) VALUES
(1, 'Michael', 'Astl', 'info@amtech.at', 'Testbetreff', 'Das ist eine Testnachricht', '2021-01-02 18:43:07');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tbl_kontaktformular`
--
ALTER TABLE `tbl_kontaktformular`
  ADD PRIMARY KEY (`ND_ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tbl_kontaktformular`
--
ALTER TABLE `tbl_kontaktformular`
  MODIFY `ND_ID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
