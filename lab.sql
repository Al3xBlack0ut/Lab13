-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Paź 2023, 16:40
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `lab`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `id_filmu` int(3) DEFAULT NULL,
  `tytul` varchar(255) NOT NULL,
  `opis` varchar(1024) NOT NULL,
  `plik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`id_filmu`, `tytul`, `opis`, `plik`) VALUES
(1, 'lama', 'lama rick roll ', 'lama.mp4'),
(2, 'NET_CAM_045', 'przesłuchanie zaginięcie siostra ucieczka wakacje las policja policjanci harcerstwo wina istota narkotyki skaut skauci zaniedbanie altruizm', 'zaniedbanie.mp4'),
(3, 'IMG_0137.mp4', 'IMG_0137.mp4 error laboratorium 13 lab13 lab 13\r\n', 'IMG_0137.mp4'),
(4, 'Siostra', 'siostra zaginięcie bandana dzieci są jak koty wróci przesłuchanie ', 'mlodsza_siostra.mp4'),
(5, 'Siostra', 'siostra zaginięcie bandana dzieci są jak koty wróci przesłuchanie ', 'starsza_siostra.mp4'),
(6, 'video call', 'rozmowa video wideo przyjaciółka sen istota', 'sen1.mp4'),
(7, 'A. D. CATulhu', 'A.D CATulhu A. D. CATulhu\r\nAgencja detektywistyczna Catulhu\r\nArchiwa agencji detektywistycznej catulhu\r\narchiwum', 'archiwum.mp4'),
(8, 'A. D. CATulhu', 'A.D CATulhu A. D. CATulhu\r\nAgencja detektywistyczna Catulhu\r\nArchiwa agencji detektywistycznej catulhu\r\narchiwum', 'dobrzy.mp4'),
(13, 'Ucieczka 013', 'ucieczka uciekać uchodzić uciec placowka badawcza opiekunowie', 'ucieczka1.mp4'),
(9, 'Aleco!', 'sen aleco fiore umano rysunek ', 'sen2.mp4'),
(10, 'RPG', 'RPG alexander hasło kod skrzynka szafka', 'RPG.mp4'),
(11, 'Tropy', 'Sen łóżko las szpital ', 'sen4.mp4'),
(16, 'Ucieczka 016', 'ucieczka uciekać uchodzić uciec placowka badawcza opiekunowie', 'ucieczka2.mp4'),
(17, 'Zodiak', 'sen wróżba zodiak znaczenie snów potwór', 'sen5.mp4');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wiadomosci`
--

CREATE TABLE `wiadomosci` (
  `nr_telefonu` int(10) NOT NULL,
  `nazwisko` text NOT NULL,
  `wiadomosc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `wiadomosci`
--

INSERT INTO `wiadomosci` (`nr_telefonu`, `nazwisko`, `wiadomosc`) VALUES
(507496402, '231', '22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
