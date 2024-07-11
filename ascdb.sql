-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2024 at 11:24 AM
-- Server version: 10.6.18-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ascdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `ad_logo` varchar(400) NOT NULL,
  `ad_name` varchar(400) NOT NULL,
  `ad_title` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `ad_logo`, `ad_name`, `ad_title`) VALUES
(1, './assets/img/logo-ct.png', 'Admin Panel', 'Admin Panel');

-- --------------------------------------------------------

--
-- Table structure for table `direktorlar_surasi`
--

CREATE TABLE `direktorlar_surasi` (
  `id` int(11) NOT NULL,
  `ad` varchar(600) NOT NULL,
  `sekil` varchar(500) NOT NULL,
  `hazirki_vezife` varchar(600) NOT NULL,
  `e-mail` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `direktorlar_surasi`
--

INSERT INTO `direktorlar_surasi` (`id`, `ad`, `sekil`, `hazirki_vezife`, `e-mail`) VALUES
(1, 'İlkin Zeynalov İlqar oğlu', 'assets/img/666207750b625.jpg', 'Aqrar Sığorta Müştərək Sığorta Şirkəti» ASC-nin Direktorlar Şurasının Sədri', 'E-poçt: office@agro-insurance.az, Tel:1651'),
(2, ' Fuad Sadıqov', 'assets/img/66616fbcc7b97.jpg', 'Aqrar Sığorta Müştərək Sığorta Şirkəti» ASC-nin Direktorlar Şurasının üzvü', 'E-poçt: info@asf.gov.az; Tel.: 1651'),
(8, ' Fərid Hidayətov', 'assets/img/ferid-hidayetzade-2.jpg', 'Aqrar Sığorta Müştərək Sığorta Şirkəti» ASC-nin Direktorlar Şurasının üzvü', 'E-poçt: fhidayatov@pasha-insurance.az Tel; *7000'),
(9, ' Anar Nəsirli', 'assets/img/anar-nesirli-1.jpg', 'Aqrar Sığorta Müştərək Sığorta Şirkəti» ASC-nin Direktorlar Şurasının üzvü', 'E-poçt: office@qala-insurance.az Tel.: (012) 377 10 10'),
(11, ' Pərviz Səfərov', 'assets/img/perviz-seferov.jpg', 'Aqrar Sığorta Müştərək Sığorta Şirkəti» ASC-nin Direktorlar Şurasının üzvü', 'E-poçt: parviz.safarov@ateshgah.com, Tel/Fax: 940 (+994 12) 497-81-82 E-mail: office@ateshgah.com');

-- --------------------------------------------------------

--
-- Table structure for table `e-müraciet`
--

CREATE TABLE `e-müraciet` (
  `id` int(11) NOT NULL,
  `asm_email` varchar(300) NOT NULL,
  `asm_ünvan` varchar(300) NOT NULL,
  `asm_əlaqə` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `e-müraciet`
--

INSERT INTO `e-müraciet` (`id`, `asm_email`, `asm_ünvan`, `asm_əlaqə`) VALUES
(1, 'office@agro-insurance.az', 'https://maps.app.goo.gl/m97hYmEQzbBgcxLT8', 1651);

-- --------------------------------------------------------

--
-- Table structure for table `esas_sehife`
--

CREATE TABLE `esas_sehife` (
  `id` int(11) NOT NULL,
  `loqo` varchar(400) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `twitter` varchar(500) NOT NULL,
  `youtube` varchar(400) NOT NULL,
  `instagram` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `esas_sehife`
--

INSERT INTO `esas_sehife` (`id`, `loqo`, `facebook`, `twitter`, `youtube`, `instagram`) VALUES
(1, 'assets/img/6656ce04bae52.png', '#', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `haqqimizda`
--

CREATE TABLE `haqqimizda` (
  `id` int(11) NOT NULL,
  `ad` varchar(200) NOT NULL,
  `sekil` varchar(300) NOT NULL,
  `alt_basliq` text NOT NULL,
  `url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `haqqimizda`
--

INSERT INTO `haqqimizda` (`id`, `ad`, `sekil`, `alt_basliq`, `url`) VALUES
(1, 'Haqqımızda', '../assets/images/loqoaz.JPG\r\n', '«Aqrar Sığorta Müştərək Sığorta Şirkəti» ASC – Aqrar Sığorta Fondu adından aqrar sığorta sisteminin idarəedilməsini həyata keçirən kommersiya hüquqi şəxsdir. Oktyabr 2020-ci ildə Azərbaycan Mərkəzi Bankı tərəfindən «Aqrar Sığorta Müştərək Sığorta Şirkəti» ASC-yə sığorta fəaliyyəti həyata keçirmək üçün lisenziya verilib.', 'idare_haqq.php');

-- --------------------------------------------------------

--
-- Table structure for table `idare_heyet`
--

CREATE TABLE `idare_heyet` (
  `id` int(11) NOT NULL,
  `sekil` varchar(300) NOT NULL,
  `ad` varchar(300) NOT NULL,
  `hazirki_vezife` varchar(300) NOT NULL,
  `e-mail` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `idare_heyet`
--

INSERT INTO `idare_heyet` (`id`, `sekil`, `ad`, `hazirki_vezife`, `e-mail`) VALUES
(1, 'assets/img/66620a35cd025.jpg', 'Abbasova Elnarə ', 'Aqrar Sığorta Müştərək Sığorta Şirkəti» ASC-nin İdarə Heyətinin sədri', 'E-poçt:office@agro-insurance.az Tel.: 1651'),
(13, 'assets/img/WhatsApp Image 2024-06-10 at 16.19.22_856e183c.jpg', 'Nərgiz Sultanlı', 'Aqrar Sığorta Müştərək Sığorta Şirkəti» ASC-nin İdarə Heyətinin üzvü', 'E-poçt:office@agro-insurance.az Tel.: 1651');

-- --------------------------------------------------------

--
-- Table structure for table `mehsul`
--

CREATE TABLE `mehsul` (
  `id` int(11) NOT NULL,
  `mehsul_ad` varchar(400) NOT NULL,
  `mehsul_sekil` varchar(400) NOT NULL,
  `mehsul_altbasliq` text NOT NULL,
  `mehsul_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mehsul`
--

INSERT INTO `mehsul` (`id`, `mehsul_ad`, `mehsul_sekil`, `mehsul_altbasliq`, `mehsul_url`) VALUES
(1, 'Heyvandarlıq', '../assets/images/heyvan.jpg', 'Aqrar Sığorta predmeti olaraq aşağıdakı kənd təsərrüfatı heyvanları sığortalanır...', 'heyvandarliq.php'),
(2, 'Bitkiçilik', '../assets/images/bitki.jpg', 'Aqrar Sığorta predmeti olaraq aşağıdakı bitkiçilik məhsulları sığortalanır...', 'bitkicilik.php'),
(3, 'Akvakultura', '../assets/images/akvakultura.jpg', 'Akvakultura məhsulu kimi balıqlar sığortanın predmeti hesab edilirlər.', 'akvakultura.php');

-- --------------------------------------------------------

--
-- Table structure for table `sign_in`
--

CREATE TABLE `sign_in` (
  `id` int(5) NOT NULL,
  `ad_email` varchar(400) NOT NULL,
  `ad_usarname` varchar(400) NOT NULL,
  `ad_password` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_in`
--

INSERT INTO `sign_in` (`id`, `ad_email`, `ad_usarname`, `ad_password`) VALUES
(2, 'admin2024@gmail.com', 'Admin', '$2y$10$B2epmZ9LXlyVrBed7EOts.euJEP4EbZ4Gvxe67B1PpTZgGJpojRPy');

-- --------------------------------------------------------

--
-- Table structure for table `xeber`
--

CREATE TABLE `xeber` (
  `id` int(10) NOT NULL,
  `sekil` varchar(300) NOT NULL,
  `basliq` varchar(300) NOT NULL,
  `alt_basliq` varchar(300) NOT NULL,
  `mezmun` text NOT NULL,
  `tarix` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xeber`
--

INSERT INTO `xeber` (`id`, `sekil`, `basliq`, `alt_basliq`, `mezmun`, `tarix`, `status`) VALUES
(34, 'assets/img/n-vq-dekabr-site-copy-2-2.png', 'Nazir Məcnun Məmmədov Yevlaxda vətəndaşları qəbul edəcək', 'Qəbulda iştirak etmək istəyənlər Ağstafa DAİM-ə və ya 1652-yə müraciət edə bilərlər', 'Kənd təsərrüfatı naziri Məcnun Məmmədov mayın 24-də saat 09:00-da Yevlax Dövlət Aqrar İnkişaf Mərkəzinin inzibati binasında Yevlax rayonu və Mingəçevir şəhərindən olan vətəndaşları qəbul edəcək.  Qəbul zamanı vətəndaşların Kənd Təsərrüfatı Nazirliyinin səlahiyyət dairəsinə aid məsələlərlə bağlı müraciətləri cavablandırılacaq, müraciətlərdə əksini tapan məsələlərin həlli ilə əlaqədar tədbirlər görüləcək.  Vətəndaş qəbulunda iştirak etmək istəyənlər Yevlax Dövlət Aqrar İnkişaf Mərkəzinə (051-377-84-97) müraciət edə bilərlər.  Qəbula yazılmaq üçün, həmçinin Kənd Təsərrüfatı Nazirliyinin “Çağrı Mərkəzi”nə zəng etməklə (1652) qeydiyyatdan keçmək olar.  Qəbula gələn vətəndaşlar əvvəlcədən qeydiyyatdan keçməli və şəxsiyyətlərini təsdiq edən sənədləri özləri ilə gətirməlidirlər.', '2024-06-03 05:58:39', 1),
(37, 'assets/img/yeni-pambiq-sayt.jpg', 'Azərbaycanda pambıq sahələrinin sığortasında - FERMERLƏR ÜÇÜN SƏRFƏLİ YENİLİK', 'Pambıq sahələrinə dəyən zərərlər üzrə sığorta ödənişlərinin yaxın günlərdə başlanacağı gözlənilir.', 'Azərbaycanda kənd təsərrüfatında mühüm bitkilərdən sayılan pambıq sahələrinin sığortası mövsümü başlayıb.  Xatırladaq ki, pambıq Azərbaycan iqtisadiyyatında, o cümlədən ölkədən ixracda əhəmiyyətli paya malikdir. Azərbaycanda təqribən 100 min hektara yaxın ərazidə pambıq yetişdirilir, bu sahədə 200 min nəfərdən çox əhali çalışır.  Ölkədə pambıq 20-yə yaxın rayonda əkilir, ən çox pambıq becərilən rayonlar Saatlı, Ağcabədi, Sabirabad, Beyləqan və İmişlidir. Eyni zamanda pambıq Azərbaycanın qeyri-neft sektoru üzrə ixracında ilk beşlikdədir.  Sərfəli bitki olması ilə yanaşı, pambıq həm də təbiət hadisələrinə qarşı həssasdır. Ölkəmizdə dövlət dəstəyi ilə tətbiq edilən aqrar sığorta pambıq sahələrini çoxsaylı risklərdən qoruyur. Bura dolu, sel-subasma, qasırğa, fırtına, leysan yağışları, ildırım vurması, vəhşi heyvanların hücumu, 3-cü şəxsin hərəkətləri və sair hallar aiddir.  Dövlətin sığorta haqqına göstərdiyi 50%-lik dəstək sayəsində fermerlər pambıq sahələrini cüzi məbləğ ödəməklə sığorta edə bilərlər.  Pambıq əkini ilə məşğul olan fermer və təsərrüfatlar əkinlərini bəyan etdikdən sonra sığorta üçün müraciət etməlidir.', '2024-06-03 06:06:41', 1),
(38, 'assets/img/qrafik-1.png', 'Azərbaycanda sığortalanan əkin sahələri genişlənir – YENİ RƏQƏMLƏR AÇIQLANDI', 'Ən çox sığortalanan kənd təsərrüfatı bitkiləri payızlıq buğda və  payızlıq arpa sahələri, eləcə də fındıq bağları olub', 'Aqrar Müştərək Sığorta 2024-cü ilin 1-ci rübü üzrə nəticələrini açıqlayıb.  Fondun məlumatına görə, cari ilin yanvar-mart ayları ərzində Aqrar  Müştərək Sığorta tərəfindən 323 min hektar əkin sahəsi və 882 baş kənd təsərrüfatı heyvanları sığortalanıb.  Ötən ilin eyni dövrü ilə müqayisədə sığortalanan əkin sahələri 22 min hektar və ya təqribən 7% artıb.  Hesabat dövründə bitkiçilik sığortası üzrə 6 milyon 815 min manat, heyvandarlıq təsərrüfatlarının sığortası üzrə 537 min manat olmaqla, ümumilikdə 7 milyon 352 min manat sığorta haqqı toplanıb.  Bu dövrdə ən çox sığortalanan kənd təsərrüfatı bitkiləri payızlıq buğda və  payızlıq arpa sahələri, eləcə də fındıq bağları olub.  Sığortalanan təsərrüfatlar üzrə verilmiş sığorta təminatının həcmi 255 milyon manatdan artıq olub.  Aqrar Sığorta Fondunun fəaliyyəti və aqrar sığorta şərtləri barədə daha ətraflı məlumatı Fondun rəsmi internet səhifəsindən (www.asf.gov.az) əldə etmək olar.', '2024-06-03 06:55:27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `direktorlar_surasi`
--
ALTER TABLE `direktorlar_surasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e-müraciet`
--
ALTER TABLE `e-müraciet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `esas_sehife`
--
ALTER TABLE `esas_sehife`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haqqimizda`
--
ALTER TABLE `haqqimizda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idare_heyet`
--
ALTER TABLE `idare_heyet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mehsul`
--
ALTER TABLE `mehsul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_in`
--
ALTER TABLE `sign_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xeber`
--
ALTER TABLE `xeber`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `direktorlar_surasi`
--
ALTER TABLE `direktorlar_surasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `e-müraciet`
--
ALTER TABLE `e-müraciet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `esas_sehife`
--
ALTER TABLE `esas_sehife`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `haqqimizda`
--
ALTER TABLE `haqqimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `idare_heyet`
--
ALTER TABLE `idare_heyet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mehsul`
--
ALTER TABLE `mehsul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sign_in`
--
ALTER TABLE `sign_in`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `xeber`
--
ALTER TABLE `xeber`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
