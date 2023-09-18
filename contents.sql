-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 172.17.0.1:3306
-- Čas generovania: Po 18.Sep 2023, 08:11
-- Verzia serveru: 5.7.39-42-log
-- Verzia PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `j6u18bqz`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `contents`
--

INSERT INTO `contents` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'about', '<h3>Renus hic non reiciendis ea possimus at quia.</h3>\r\n          <p>Rem id rerum. Debitis deserunt quidem delectus expedita ducimus dolor. Aut iusto ipsa. Eos ipsum nobis ipsa soluta itaque perspiciatis fuga ipsum perspiciatis. Eum amet fugiat totam nisi possimus ut delectus dicta.\r\n          </p><p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos. Deserunt porro magni qui necessitatibus dolorem at animi cupiditate.</p>', NULL, '2022-10-04 14:34:27'),
(2, 'service_first', '<h3>Spoľahlivosť</h3>\r\n<p>Som spoľahlivý a dobrý robotník&nbsp;</p>', NULL, '2023-01-11 06:13:07'),
(3, 'service_second', '<h3>Oprava</h3>\r\n<p>Opravím všetko, regále, chrbtice, kolená.</p>', NULL, '2022-10-04 13:25:59'),
(4, 'service_third', '<h3>Zameranie</h3>\r\n<p>Prídem osobne a všetko presne zameriam</p>', NULL, NULL),
(5, 'service_four', '<h3>Doprava</h3>\r\n<p>Všetko donesiem a odnesiem, prenesiem a nanesiem</p>', NULL, NULL),
(6, 'service_five', '<h3>Najlepšia cena</h3>\r\n<p>Sme malá firma a všetko si spravujeme samostatne</p>', NULL, NULL),
(7, 'feature_kitchen', '<h3>Kuchyne na mieru</h3>\r\n<p class=\"fst-italic\"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore\r\nmagna aliqua.\r\n</p>\r\n<ul>\r\n<li><i class=\"bi bi-check2-all\"></i>Kvalitne spracovanie</li>\r\n<li><i class=\"bi bi-check2-all\"></i> Kvalitný materiál</li>\r\n<li><i class=\"bi bi-check2-all\"></i>&nbsp;Osobný prístup&nbsp;</li>\r\n</ul>', NULL, '2023-01-11 06:12:40'),
(8, 'feature_wardrobe', '<h3>Vstavané skrine</h3>\r\n<p class=\"fst-italic\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore\r\nmagna aliqua.\r\n</p>\r\n<ul>\r\n <li><i class=\"bi bi-check2-all\"></i> Variabilne rozloženie..</li>\r\n<li><i class=\"bi bi-check2-all\"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>\r\n<li><i class=\"bi bi-check2-all\"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>\r\n<li><i class=\"bi bi-check2-all\"></i>&nbsp;Provident tala surgent.</li>\r\n</ul>', NULL, '2023-01-11 06:14:04'),
(9, 'feature_furniture', '<h3>Nábytok na mieru</h3>\r\n<p class=\"fst-italic\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n<ul>\r\n<li><i class=\"bi bi-check2-all\"></i>Podla vašich predstáv</li>\r\n<li><i class=\"bi bi-check2-all\"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>\r\n<li><i class=\"bi bi-check2-all\"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>\r\n</ul>\r\n', NULL, NULL),
(10, 'construction_first', '<h4 class=\"card-title\">Kvalitný materiál</h4>\r\n<p>Materiál objednávam od najlepších fachmanov v remesle.</p>', NULL, NULL),
(11, 'construction_second', '<h4 class=\"card-title\">Moja dieľňa</h4>\r\n<p>Mám plne zariadenú dielnu, kde môžem spracovat vase objednavky. Používam najkvalitnejšie pristroje najlepších značiek</p>', NULL, NULL),
(12, 'construction_third', '<h4 class=\"card-title\">Doprava</h4>\r\n<p>Zabezpecujem dopravu objednavky kdekolvek na zemeguli, dokonca aj do perneku, aj ked to je už trochu moc, ale aj tam treba trošku.</p>', NULL, '2022-10-04 13:48:51'),
(13, 'construction_four', '<h4 class=\"card-title\">Montáž</h4>\r\n<p>Podla povahy prostredia montujem veci na mieste alebo ich donesiem zmontované, čo ulahcuje prácu.</p>', NULL, NULL),
(14, 'hero', '<h2 data-aos=\"fade-down\" class=\"aos-init aos-animate\">Woo<span class=\"text-warning\">dD</span>ream</h2>\r\n<p data-aos=\"fade-up\" class=\"aos-init aos-animate\"><strong>KUCHYNE – SPÁLNE - ŠATNÍKY – VSTAVANÉ SKRINE – KÚPELNE</strong></p><p data-aos=\"fade-up\" class=\"aos-init aos-animate\">Výroba nábytku na mieru podľa vaších predstáv.&nbsp;</p><p data-aos=\"fade-up\" class=\"aos-init aos-animate\">Kladieme dôraz na profesionalitu, kvalitu, spoľahlivosť a jednotlivý prístup ku každému zákazníkovi.</p>', NULL, '2023-01-11 08:33:45');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
