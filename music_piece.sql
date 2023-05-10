-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 28 mrt 2023 om 17:33
-- Serverversie: 5.7.36
-- PHP-versie: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_piece`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Baroque'),
(2, 'Classical'),
(3, 'Romantic');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_03_28_111531_create_genres_table', 1),
(3, '2023_03_28_105849_create_pieces_table', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pieces`
--

DROP TABLE IF EXISTS `pieces`;
CREATE TABLE IF NOT EXISTS `pieces` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `composer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pieces_genre_id_index` (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `pieces`
--

INSERT INTO `pieces` (`id`, `name`, `composer`, `link`, `genre_id`) VALUES
(1, 'Minuet in G major, BWV Anh 114', 'Johann Sebastian Bach', 'https://www.youtube.com/watch?v=p1gGxpitLO8&ab_channel=TheGreatRepertoire', 1),
(3, 'Concerto No. 4 in F minor, Op. 8 No. 4/RV 297 \'Winter\'', 'Antonio Vivaldi', 'https://www.youtube.com/watch?v=pmiQ7og8gIM&ab_channel=amadeustv', 1),
(4, 'Volin concerto in A minor BWV 1041', 'Johann Sebastian Bach', 'https://www.youtube.com/watch?v=Q3-5144TaYg&ab_channel=Bachology', 1),
(5, 'Concerto in E major, op. 8 no. 1, RV 269 “La primavera”', 'Antonio Vivaldi', 'https://www.youtube.com/watch?v=e3nSvIiBNFo&ab_channel=ClassicalConcertChamberOrchestra', 1),
(6, 'Prelude and Fugue in C major, BWV 846', 'Johann Sebastian Bach', 'https://www.youtube.com/watch?v=frxT2qB1POQ&ab_channel=Rousseau', 1),
(7, 'Concerto in E major, op. 8 no. 1, RV 269 “La primavera”', 'Antonio Vivaldi', 'https://www.youtube.com/watch?v=pzlw6fUux4o&ab_channel=VoicesofMusic', 1),
(8, 'Piano Sonata in A, K331: III', 'Wolfgang Amadeus Mozart', 'https://www.youtube.com/watch?v=aeEmGvm7kDk&ab_channel=Rousseau', 2),
(9, 'Piano Sonata in C major, No 16, K 545, Allegro', 'Wolfgang Amadeus Mozart', 'https://www.youtube.com/watch?v=dNbqRC4xtEg&ab_channel=TheGreatRepertoire', 2),
(10, 'Concerto in E major, op. 8 no. 1, RV 269 “La primavera”', 'Antonio Vivaldi', 'https://www.youtube.com/watch?v=pzlw6fUux4o&ab_channel=VoicesofMusic', 2),
(11, 'Moonlight Sonata (Piano Sonata No. 14, Op. 27 No. 2, 1st Movement)', 'Johann Sebastian Bach', 'https://www.youtube.com/watch?v=sbTVZMJ9Z2I&ab_channel=Rousseau', 2),
(12, 'Moonlight Sonata - 3rd Mvmt - No.14, Op.27 No.2', 'Johann Sebastian Bach', 'https://www.youtube.com/watch?v=BV7RkEL6oRc&ab_channel=Rousseau', 2),
(13, 'Sonatina in C major, Op. 36, No. 1, Allegro', 'Muzio Clementi', 'https://www.youtube.com/watch?v=Ryq0nX1_Jds&list=PLO963W_c67MquzzXNsc_loh20b9jb-Dlj&index=3&ab_channel=TheGreatRepertoire', 2),
(14, 'Sonatina Op.36 No.3', 'Muzio Clementi', 'https://www.youtube.com/watch?v=ERNZAGQcyj0&ab_channel=HazelNguyenPianist', 2),
(15, 'Swan Lake, Op. 20: I. Scene', 'Pjotr Iljitsj Tsjaikovski', 'https://www.youtube.com/watch?v=vAeRzW98IFw&ab_channel=Kassia', 3),
(16, 'La campanella', 'Niccolò Paganini', 'https://www.youtube.com/watch?v=LJNWB-jMhB4&ab_channel=MusicScores15', 3),
(17, 'La campanella', 'Franz Liszt', 'https://www.youtube.com/watch?v=JpfbDLFSZb4&ab_channel=ardiem', 3),
(18, 'Bagatelle No. 25 in A minor (Für Elise)', 'Ludwig van Beethoven', 'https://www.youtube.com/watch?v=wfF0zHeU3Zs&ab_channel=Rousseau', 3),
(19, 'Gymnopédie No. 1', 'Erik Satie', 'https://www.youtube.com/watch?v=2BnWamtDcgc&ab_channel=TheGreatRepertoire', 3),
(20, 'Waltz in A minor, B 150, Op. Posth', 'Frédéric Chopin', 'https://www.youtube.com/watch?v=algM0c_u99k&ab_channel=TheGreatRepertoire', 3),
(21, 'Pavane, Op 50', 'Gabriel Fauré', 'https://www.youtube.com/watch?v=SqEgbmNcNww&ab_channel=Dottore%27', 3),
(22, 'Sicilienne, Op. 78', 'Gabriel Fauré', ' https://www.youtube.com/watch?v=4FY-57Gt1TM&ab_channel=NickConstantine', 3),
(23, 'Sicilienne, Op. 78', 'Gabriel Fauré', ' https://www.youtube.com/watch?v=4FY-57Gt1TM&ab_channel=NickConstantine', 3),
(24, 'Nocturne Op 9 No 2 (E Flat Major)', 'Frédéric Chopin', 'https://www.youtube.com/watch?v=p29JUpsOSTE&ab_channel=Rousseau', 3);

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `pieces`
--
ALTER TABLE `pieces`
  ADD CONSTRAINT `pieces_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
