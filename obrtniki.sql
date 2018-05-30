-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 30. maj 2018 ob 11.29
-- Različica strežnika: 10.1.32-MariaDB
-- Različica PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `obrtniki`
--

-- --------------------------------------------------------

--
-- Struktura tabele `obrtniki`
--

CREATE TABLE `obrtniki` (
  `ID_Podjetje` int(11) NOT NULL,
  `Naziv` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Opis` varchar(500) CHARACTER SET utf8 NOT NULL,
  `Kontakt` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Lokacija` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Kategorija` varchar(50) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `obrtniki`
--
ALTER TABLE `obrtniki`
  ADD PRIMARY KEY (`ID_Podjetje`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `obrtniki`
--
ALTER TABLE `obrtniki`
  MODIFY `ID_Podjetje` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
