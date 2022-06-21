-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 jun 2022 om 23:46
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `catagory`
--

CREATE TABLE `catagory` (
  `id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `catagory`
--

INSERT INTO `catagory` (`id`, `Name`, `image`) VALUES
(1, 'crosstrainer', 'img/crosstrainer.jpg'),
(2, 'hometrainer', 'img/hometrainer.jpg'),
(3, 'loopband', 'img/loopband.jpg'),
(4, 'roeitrainer', 'img/roeitrainer.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` blob DEFAULT NULL,
  `catagory_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `catagory_id`) VALUES
(1, 'Roeitrainer - VirtuFit Row 1.0 - Roeimachine', 'De VirtuFit Row 1.0 is een eenvoudige roeitrainer die makkelijk in gebruik is. De roeitrainer met verstelbare elastomeer weerstand maakt een fijne roeibeweging. De ergonomisch gevormde zitting glijdt soepel over een stevig aluminium rail. De anti-slip ped', NULL, 4),
(2, 'Roeitrainer - Sportstech RSX500', 'Het roeitoestel biedt je verschillende trainingsmogelijkheden voor een effectieve training van het hele lichaam. Versterk je rug, benen en buik om je houding te verbeteren. Train efficiënt met de app-compatibele console met je smartphone of tablet en volg', NULL, 4),
(3, 'Roeitrainer - VirtuFit Row 450', 'De VirtuFit Row 450 heeft een “silent magnetic” weerstandssysteem waardoor je flexibel de weerstand kunt aanpassen. Daarnaast maakt het schakelen tussen de 10 verschillende weerstanden nauwelijks geluid. Dit maakt het apparaat ideaal om thuis mee te sport', NULL, 4),
(4, 'VirtuFit Ultimate Pro 2i', 'De VirtuFit Ultimate Pro 2i is voor de fanatieke roeier die prestaties bij wilt houden en extra uitdaging zoekt. Je verbindt de roeitrainer via bluetooth of ANT+ met applicaties zoals Kinomap en Selfloops. Hiermee roei je routes over de hele wereld, volg ', NULL, 4),
(5, 'Tunturi FitCross 50i Rear', 'Werk aan je conditie met de FitCross 50i Rear crosstrainer. De aandrijving zit aan de achterkant, waardoor je beweging korter en actiever is dan bij een front driven crosstrainer. Daarnaast heeft het apparaat een tablethouder. Handig wanneer je de iConsol', NULL, 1),
(6, 'Bowflex Max Trainer M8i', 'De Bowflex Max Trainer M8i is een stairclimber met speciale H.I.I.T (High Intensity Interval Training) programma\'s. Hiermee verbrand je meer calorieën dan op een standaard crosstrainer en wordt je bovenlichaam beter aan het werk gezet. Het grote scherm is', NULL, 1),
(7, 'VirtuFit iConsole Total Fit Ergometer', 'De VirtuFit iConsole Total Fit Ergometer is een crosstrainer waarmee je vanaf een laag instapniveau je conditie in stappen opbouwt. Bovendien koppel je het apparaat via Bluetooth aan applicaties zoals Fit Hi Way om je trainingsgegevens te monitoren en Kin', NULL, 1),
(8, 'VirtuFit CTR 1.2i', 'De VirtuFit CTR 1.2i is een compacte crosstrainer voor mensen die thuis graag een afvaldoel bereiken of hun conditie op peil willen houden. Het compacte apparaat neemt weinig ruimte in en is met wieltjes aan de kant te rollen. Bovendien koppel je hem aan ', NULL, 1),
(9, 'Tunturi FitCycle 50i Ergometer', 'De Tunturi FitCycle 50i Ergometer is een hometrainer waarmee je jouw conditie opbouwt en verbetert. Met 20 trainingsprogramma\'s wissel je gemakkelijk tussen verschillende trainingen. Om de trainingen lichter of zwaarder te maken, kies je uit één van de 32', NULL, 2),
(10, 'Flow Fitness Stelvio iConsole Ergometer', 'Revalideer van een blessure en verbeter je conditie met de Flow Fitness Stelvio iConsole Ergometer. De hometrainer heeft maar liefst 20 trainingsprogramma\'s en 32 weerstandniveaus. Hierdoor bouw je in kleine stapjes je fitheid op. Als je behoefte hebt aan', NULL, 2),
(11, 'Flow Fitness Stelvio Racer Pro i ', 'Met de Flow Fitness Stelvio Racer Pro i fiets je routes over de hele wereld, race je tegen vrienden en houd je training prestaties bij zonder je huis te verlaten. Deze fitness fiets verbind je namelijk via bluetooth met de Kinomap app en de iConsole+ app.', NULL, 2),
(12, 'Schwinn IC8', 'Gebruik de Schwinn IC8 om dagelijks zeer fanatiek te trainen. Wanneer je op zoek bent naar een interactieve, gevarieerde training, sluit je de IC8 aan op de Zwift of RideSocial app. Hiermee fiets je digitale routes over het strand, door de bergen of in ee', NULL, 2),
(13, 'VirtuFit Run Fit Foldable ', 'Wil je fit blijven vanuit huis, maar heb je weinig ruimte voor sport apparatuur? Dan gebruik je de VirtuFit Run Fit Foldable. Deze loopband is volledig inklapbaar, zodat je hem na gebruik eenvoudig plat maakt en onder je bed schuift. Ook over je onderbure', NULL, 3),
(14, 'Flow Fitness Kingston Pro i ', 'Breng variatie aan in je hardlooptrainingen met de Flow Fitness Kingston Pro i. Deze loopband heeft 28 vooraf ingestelde programma\'s en een app verbinding voor nog meer trainingsmogelijkheden. Ga bijvoorbeeld voor een hartslag gestuurde training, volg een', NULL, 3),
(15, 'Flow Fitness Kingston i ', 'De Flow Fitness Kingston i is een loopband met uiteenlopende trainingsfuncties. Hierdoor gebruik je hem zowel voor lichte trainingen als zwaardere workouts. De loopband heeft 24 voorgeprogrammeerde trainingsprogramma\'s met uiteenlopende moeilijkheidsgraad', NULL, 3),
(16, 'VirtuFit TR-100 ', 'Of je nu traint voor een marathon of gewoon om fit te blijven, met de Virtufit TR-100 is niet één training saai. Kies een trainingsprogramma of begin dankzij de Quick Speed functie met trainen zonder programma te selecteren. Wanneer je tijdens je training', NULL, 3);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catagory_products` (`catagory_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `catagory_products` FOREIGN KEY (`catagory_id`) REFERENCES `catagory` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
