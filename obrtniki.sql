-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 01. jun 2018 ob 08.03
-- Različica strežnika: 10.1.31-MariaDB
-- Različica PHP: 7.2.4

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
  `Naziv` varchar(200) COLLATE utf32_slovenian_ci NOT NULL,
  `Opis` varchar(500) COLLATE utf32_slovenian_ci NOT NULL,
  `Kontakt` varchar(50) COLLATE utf32_slovenian_ci NOT NULL,
  `Lokacija` varchar(50) COLLATE utf32_slovenian_ci NOT NULL,
  `Kategorija` varchar(30) COLLATE utf32_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci;

--
-- Odloži podatke za tabelo `obrtniki`
--

INSERT INTO `obrtniki` (`ID_Podjetje`, `Naziv`, `Opis`, `Kontakt`, `Lokacija`, `Kategorija`) VALUES
(2, 'lesarstvo Lesi d. o. o.', 'Smo proizvajalci vsestranskih lesnih produktov. Naši najbolj priljubljeni izdelki so po naročilu delani stoli in mize. Odlikuje nas hitra odzivnost in oseben odnos s strankami.', '041 231 223, lesarstvo.lesi@gmail.com', 'Orehova vas 12', 'lesarstvo'),
(3, 'RORTECH dimnikarstvo', 'Na kurilnih in dimovodnih napravah izvajamo vse obvezne in neobvezne dimnikarske storitve kot so: mehansko čiščenje kurilnih in dimovodnih ter prezračevalnih naprav, strojno odstranjevanje katranskih oblog v dimovodnih napravah, meritve emisij, pregledovanje in nadzorovanje kurilnih naprav ter svetovanje pri izbiri, vgradnji in uporabi naprav v okviru naših pristojnosti.', '+386 (40) 475 421, dimnikarstvo.rortech@gmail.com', 'Bodonci 118', 'dimnikarstvo'),
(4, 'Avtomehanika Papež d.o.o.', 'Z opravljanjem avtomehaničnih dejavnosti se ukvarjamo že dobrih 25 let. V tem času se redno izobražujemo o novostih, tako da smo visoko strokovno podkovani, da uporabnikom naših storitev lahko nudimo visoko kvaliteten servis. Pri delu smo zelo prilagodljivi do strank. Naše stranke imajo za čas popravil in servisov na voljo tudi nadomestno vozilo. V našem servisu vam nudimo vsa avtomobilska popravila, servis in svetovanje. Veseli bomo vašega obiska.', 'avto.papez@gmail.com, 030 098 998', 'Kolodvorska cesta 16, 1330 Kočevje', 'avtomehanikarstvo'),
(5, 'Informacijski inženiring HRC', 'Ponujamo storitve, kot so bančna platforma prihodnosti, procesne rešitve in IT podpora. Na osnovi učinkovitega osrednjega bančnega sistema Hibis razvijamo rešitve, ki usmerjajo k večji procesni učinkovitosti. Podpiramo brezhibno delovanje osnovnih bančnih procesov in vas spodbujamo k ustvarjanju poglobljenih in kakovostnih odnosov z vašimi komitenti.', 'info@hrc.si, +386 (0)3 713 42 10', 'Savinjska cesta 19 SI-3310 Žalec', 'informacijski inženi'),
(6, 'računovodske storitve Biro 46', 'Smo družinski računovodski servis z dolgoletnimi izkušnjami pri poslovanju s samostojnimi podjetniki in manjšimi gospodarskimi družbami, med našimi poslovnimi partnerji pa so tudi društva in zavodi. Poslovanje z nami je možno tako klasično kot tudi z uporabo modernih tehnologij za izmenjavo podatkov.', ' +386 (41) 520 739, info@biro46.si', 'Jakšičeva ulica 2, 1000 Ljubljana', 'računovodske storitve'),
(7, 'računovodske storitve Skaper', 'Naš cilj je poleg kakovostne izvedbe del predvsem zadovoljitev potreb naših strank. O načrtih in izvedbi smo se vedno pripravljeni pogovoriti s stranko, prisluhniti njenim željam  in ji svetovati v smeri optimalne rešitve. Pri naših storitvah uporabljamo le kakovostne in preizkušene materiale tehnike knjigovodstva. Poslanstvo podjetja je zagotoviti vsem strankam kvalitetno storitev, ki jo predpisujejo zakonski predpisi in spoštovati pravice uporabnikov.', 'rac_sto.skaper@telemach.net, 050 676 545', 'Kočevska cesta 35, 1330 Kočevje', 'računovodske storitve'),
(8, 'elektroinštalcije Global elektrik', 'Smo mlado podjetje, specializirano za izvajanje tehničnih storitev s področja elektro inštalacij in strelovodnih naprav. Nudimo celostno obravnavo elektro inštalacij od projektiranja do izvedbe ali montaže in nadzora.   Direktor podjetja ima številna specializirana znanja s področja električnih inštalacij, energetike in telekomunikacij ter strelovodnih inštalacij za individualne gradnje.', 'info@global-elektrik.si, 040 232 112', 'Pločanska ulica 22, 1211 Ljubljana', 'elektroinštalacije'),
(9, 'dimnikarstvo Tavčar', 'Družba je bila ustanovljena leta 1991. Prva koncesija za opravljanje obveznih dimnikarskih storitev je bila pridobljena leta 1999 in sicer za dobo 10 let. Potem je bila podpisana koncesijska pogodba za opravljanje dimnikarskih storitve, in sicer za obdobje 8 let.Poslanstvo podjetja je zagotoviti vsem strankam kvalitetno storitev, ki jo predpisujejo zakonski predpisi in spoštovati pravice uporabnikov.\r\nNaša vizija je podjetje, ki s svojim znanjem, izkušeno kadrovsko zasedbo in kakovostnimi storit', '031 212 900, dimnikarstvo.tavcar@siol.net', 'Povir 54b, 6210 Sežana', 'dimnikarstvo'),
(10, 'elektroinštalacije Huzjak', 'elektroinštalacije Huzjak je podjetje, ki se ukvarja s prodajno in storitveno dejavnostjo. V okviru prodajne dejavnosti se osredotoča na ponudbo širokega in zanimivega spektra znamk elektronskih pripomočkov srednje in višje vrednosti, kakor tudi širokega nabora kablov. Poleg tega ponuja tudi spominske kartice. V okviru storitvene dejavnosti se ukvarjamo s popravilom in servisiranjem električnih pripomočkov vseh vrst in znamk. Tako se opravljajo zahtevnejša in manj zahtevna popravila različnih el', 'elektro.huzjak@gmail.com, 070 665 556', 'Kocljeva ulica 1a, 9000 Murska Sobota', 'elektroinštalacije'),
(11, 'lesarstvo Woody', 'Predelava lesa ter uporaba lesnih izdelkov, je za znižanje emisije toplogrednih plinov bistvena in lahko v največji možni meri prispeva k normalizaciji podnebja. Za prihodnost in obstanek človeštva bo les nedvomno odločilen material 21. stoletja. Zato izberite pravilno - izberite nas.', '050 232 123', 'Petrovče 12', 'lesarstvo');

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
  MODIFY `ID_Podjetje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
