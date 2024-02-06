-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 09:50 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naukad`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nazwiska`
--

CREATE TABLE `nazwiska` (
  `id` int(5) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `stanowisko` varchar(20) NOT NULL,
  `pensja` int(7) DEFAULT NULL,
  `miasto` varchar(20) NOT NULL,
  `data_zatr` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nazwiska`
--

INSERT INTO `nazwiska` (`id`, `imie`, `nazwisko`, `stanowisko`, `pensja`, `miasto`, `data_zatr`) VALUES
(1, 'Jan', 'Kowalski', 'Urzednik', 900, 'Gdansk', '2011-12-20'),
(2, 'Waldemar', 'Pawlak', 'Kierownik', 3000, 'Sopot', '2012-10-17'),
(3, 'Marian', 'Malinowski', 'Urzednik', 1100, 'Gdynia', '2011-02-15'),
(4, 'Adam', 'Nowak', 'Ksiegowy', 2000, 'Gdansk', '2010-05-07'),
(5, 'Ewa', 'Musial', 'Stazysta', NULL, 'Gdansk', '2013-06-24'),
(6, 'Zenon', 'Miler', 'Stazysta', NULL, 'Gdynia', '2013-09-01'),
(7, 'Paoul', 'Deavis', 'Prezes', 8000, 'Londyn', '2010-03-21'),
(8, 'Mieczyslaw', 'Dobija', 'Kontroler', 3000, 'Warszawa', '2012-05-21'),
(9, 'Peter', 'Norton', 'Informatyk', 3500, 'Gdansk', '2010-07-18');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdjecia`
--

CREATE TABLE `zdjecia` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwaPliku` text DEFAULT NULL,
  `podpis` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `zdjecia`
--

INSERT INTO `zdjecia` (`id`, `nazwaPliku`, `podpis`) VALUES
(1, '1.jpg', 'Londyn'),
(2, '2.jpg', 'Wenecja'),
(3, '3.jpg', 'Berlin'),
(4, '4.jpg', 'Warszawa'),
(5, '5.jpg', 'Budapeszt'),
(6, '6.jpg', 'Paryz'),
(7, '7.jpg', 'Nowy Jork'),
(8, '8.jpg', 'Barcelona'),
(9, '9.jpg', 'Moskwa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zlecenia`
--

CREATE TABLE `zlecenia` (
  `id_zlec` int(7) NOT NULL,
  `id_prac` int(7) NOT NULL,
  `kod_zlecenia` char(8) NOT NULL,
  `wartosc_zlec` decimal(8,2) NOT NULL,
  `data_zlec` date NOT NULL,
  `godz_zlec` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zlecenia`
--

INSERT INTO `zlecenia` (`id_zlec`, `id_prac`, `kod_zlecenia`, `wartosc_zlec`, `data_zlec`, `godz_zlec`) VALUES
(1, 1, 'Z-001', 500.00, '2015-06-11', '10:01:48'),
(2, 2, 'Z-002', 3000.00, '2014-02-01', '11:23:52'),
(3, 3, 'Z-003', 700.00, '2015-11-20', '09:37:27'),
(4, 4, 'Z-004', 300.00, '2014-07-28', '08:15:06'),
(5, 1, 'Z-005', 400.00, '2016-09-18', '12:17:12'),
(6, 3, 'Z-006', 500.00, '2015-10-06', '13:20:19'),
(7, 3, 'Z-007', 900.00, '2014-03-15', '14:40:20'),
(8, 2, 'Z-008', 1000.00, '2016-04-21', '15:18:19');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `nazwiska`
--
ALTER TABLE `nazwiska`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zlecenia`
--
ALTER TABLE `zlecenia`
  ADD PRIMARY KEY (`id_zlec`),
  ADD KEY `id_prac` (`id_prac`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `zlecenia`
--
ALTER TABLE `zlecenia`
  ADD CONSTRAINT `zlecenia_ibfk_1` FOREIGN KEY (`id_prac`) REFERENCES `nazwiska` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
