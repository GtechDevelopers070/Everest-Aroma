-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2017 at 05:50 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('everest', 'de0480c5cfd34a78b10286c77faa8631');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `albumPK` int(11) NOT NULL,
  `albumName` text NOT NULL,
  `albumDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`albumPK`, `albumName`, `albumDescription`) VALUES
(2, 'Dhanusa   ', ''),
(3, 'NawalParasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `photoPK` int(11) NOT NULL,
  `albumFK` int(11) NOT NULL,
  `photo` text NOT NULL,
  `albumCover` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`photoPK`, `albumFK`, `photo`, `albumCover`) VALUES
(5, 2, 'img/gallery/1.png', 'N'),
(6, 2, 'img/gallery/6.png', 'N'),
(7, 2, 'img/gallery/7.png', 'N'),
(8, 2, 'img/gallery/8.png', 'N'),
(9, 2, 'img/gallery/9.png', 'N'),
(10, 2, 'img/gallery/10.png', 'N'),
(11, 2, 'img/gallery/11.png', 'Y'),
(14, 3, 'img/gallery/12.png', 'Y'),
(15, 3, 'img/gallery/15.png', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `NewsID` int(11) NOT NULL,
  `NewsTitle` varchar(200) NOT NULL,
  `NewsContents` text NOT NULL,
  `NewsPicture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NewsID`, `NewsTitle`, `NewsContents`, `NewsPicture`) VALUES
(6, 'Dhanusa Project', 'Everest Aroma, the leading essential oil processing company of our country is seeking the options for enhancing the economic condition of our country by fostering local development through a recently proposed project in Dhanusha, Eastern Nepal. The detailed study and survey has been carried successfully and the project is marked as feasible from every aspects. The farming for German Chamomile, Lemongrass, Citronella, Pamarosa, and Basil has been planned as the climate under study is suitable for these plants. EA plans on seeking local participation by encouraging local farmers and community with the aid of grants and assistance for farming. Also, for collateral encouragement, EA plans to make cultivation of their own.', 'Uploads/news-image.png'),
(7, ' Sankhasabha project\r\n						', ' hamro project ko esto kaam\r\nustari vayo\r\nhai ta', 'Uploads/Anthopogon.png');

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

CREATE TABLE `productdetails` (
  `productID` int(11) NOT NULL,
  `EnglishName` text NOT NULL,
  `LocalName` text NOT NULL,
  `BotanicalName` text NOT NULL,
  `FamilyName` text NOT NULL,
  `Season` text NOT NULL,
  `PartsUsed` text NOT NULL,
  `Description` text NOT NULL,
  `Appearance` text NOT NULL,
  `Aroma` text NOT NULL,
  `FlashPoint` text NOT NULL,
  `SpecificGravity` text NOT NULL,
  `RefractiveIndex` text NOT NULL,
  `RelativeIndex` text NOT NULL,
  `EsterValue` text NOT NULL,
  `EsterValueAfterAcetylation` text NOT NULL,
  `OpticalRotation` text NOT NULL,
  `AcidNumber` text NOT NULL,
  `TotalAlcohol` text NOT NULL,
  `Solubility` text NOT NULL,
  `Solubleinwater` text NOT NULL,
  `CountryofOrigin` text NOT NULL,
  `Uses` text NOT NULL,
  `Packaging` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`productID`, `EnglishName`, `LocalName`, `BotanicalName`, `FamilyName`, `Season`, `PartsUsed`, `Description`, `Appearance`, `Aroma`, `FlashPoint`, `SpecificGravity`, `RefractiveIndex`, `RelativeIndex`, `EsterValue`, `EsterValueAfterAcetylation`, `OpticalRotation`, `AcidNumber`, `TotalAlcohol`, `Solubility`, `Solubleinwater`, `CountryofOrigin`, `Uses`, `Packaging`) VALUES
(1, 'Anthopogon', 'Sunpate', 'Rhododendron anthopogon D. Don', 'Ericase', 'May - July', 'Leafs of the plant', 'It is found in Himalayan region of Nepal. It is an evergreen, strongly aromatic\r\nshrub-let too 60 cm to 1 m tall. Leaves simple, alternate, short stalked, oval to\r\novate, 2.5-4 cm long, dense', 'colorless to pale yellow liquid', 'balsamic herbaceous', '151F/>66C', '(at  68F/20C):  0.8630  to  0.8804', '(at 68F/20C): 1.4785 to 1.4881', '', '', '', '', '', '', '', '', '', 'Cosmetic, Aromatherapy, Fragrance', '1 kg, 5 kg, 10 kg, 25 kg'),
(2, 'French basil oil', '', 'Ocimum basilicum L', '', '', '', '', 'Liquid', 'Basil', '930C', '0.8854 at 250C', '1.469 at 250C', '', '9.1', '80.7', '', '', '', 'Insoluble in water', 'Insoluble', '', 'Cosmetic, aromatherapy and pharmaceuticals', '1 Kg, 5 Kg, 10 Kg, 25 Kg'),
(3, 'Sweet flag', 'Bojho', 'Acorus calamus', 'Araceae', 'June- july', 'Rhizomes', 'A rhizomatous herb growing on marshy places. Leaves bright green, 15-25 cm long and\r\n0.2-0.5 cm broad, ensiform with distinct midrib. Flowers small, yellow green arranged\r\nin cylindrical spadix. The rhizome is bitter.\r\nThe rhizome is aromatic, carminative, emetic, antihelmintic, expectorant, antispasmodic\r\nand nerve tonic. It is used in dyspepsia, coleic, remittent fevers, diarrhea, dysentry,\r\nbronchial and chest affections.', '', 'Warm, woody spicy', '', '1.0695 to 1.0795 at 23° C', '', '1.402 to 1.55895 at 23° C', '2 to 12', '8.5 to 12', '(-) 0°  to (-) 7°  at 23° C', '0.5 to 2.5', '', 'soluble in 0.4  to 1.5 vols of 80% alcohol', 'Insoluble', '', '', '1 kg, 5 kg, 10 kg, 25 kg '),
(4, 'Chamomile', 'Daminiful', 'Chamomilla recutita (L.) Rauschert', 'Asteraceae', 'March - April', 'Flowering tops', 'Chamomile is a common name for several daisy-like plants. They were introduced in\r\nNepal some years ago. They are now cultivated in Terai region. It has flower which is\r\nyellowish in color. These plants are best known for their ability to be made into a tea\r\nwhich is commonly used to help with sleep and is often served with either honey or\r\nlemon.  Its  essential  oil  is  extracted  through  steam  distillation  process.', 'Fluid Liquid', 'Warm spicy odor, woody-oriental type', '', '0.880 to 0.965  at (15 to  25)° C', '', '1.333 to 1.45 at (15 to 25)° C', '3.15 to 35', '', '', '1.9 to 6.5', '', 'Soluble in 1 - 5 vol of 80% alcohol', 'Insoluble', '', 'Chamomile essential oil is useful in the treatment of arthritis, skin irritation, headaches,\r\nindigestion,  depression,  anxiety,  menstrual  problems  and  digestive  problems.\r\nIts actions include being anti-inflammatory, calming, digestive and as a nerve sedative.\r\n', '1 kg, 5 kg, 10 kg, 25 kg '),
(5, 'Citronella', 'Peere Ghaas', 'Cymbopogon nardus L, Andropogon nardus', 'Poaceae', 'July - September', 'Whole plant', 'Citronella is a grass having scent like lemon. It is found in terai region of Nepal. It is\r\nharvest for commercial purpose. It has insect repellant characteristics so it is popularly\r\nknown as bio-pesticide. Citronella oil is one of the essential oils obtained from the leaves\r\nand stems of different species of Cymbopogon. It is extracted by the help of steam\r\ndistillation process.', 'Fluid Liquid', 'Fresh and sweet', '81', '0.8820 to 0.8875 at 23°C', '.465 to 1.490 at 23° C', '', '20 to 40', '250 to 280', '-2 to - 4 at 23°C', '0.5 to 3.5', '80 to 90% geranial', 'Soluble in 0.5 to 5 vol. of 70% alcohol.', 'Insoluble', '', 'It is used as insecticide.\r\nIt is used as ingredient for soap ,phenyl etc.', '1 kg, 5 kg, 10 kg, 25 kg '),
(6, 'Eucalyptus', 'Masala', 'Eucalyptus globulus', 'Myrtaece', 'May - June', 'Leaves', 'A big tree native to Australia and Tasmania, eucalyptus is also cultivated in terai region\r\nof Nepal. The leaves and oil are especially used in inhalation preparations. Additionally,\r\neucalyptus is used as an effective natural insect repellant and antiseptic. Eucalyptus oil\r\nis  obtained  bysteam  distillation  of  the  leaves  of  Eucalyptus  camaldulensiss.', 'Fluid liquid', 'Sweet herbal, faintly balsamic', '', '1.0695 to 1.0795 at 23° C', '1.5335 to 1.5589 at 23° C', '', '', '', '(-) 0.2 to (-) 0.5 at 23° C', '0.6 to 2.5', '', 'Soluble in 0.4 to 1.5 volumes of 80% alcohol', 'Insoluble', '', 'Essential oil obtained from the leaves is used in aromatherapy.Essential oil obtained\r\nfrom the leaves is also used as an anthelmintic.', '1 kg, 5 kg, 10 kg, 25 kg '),
(7, 'Juniper Berry', 'Dhupi', 'Juniperus spp', 'Cupressaceae', 'May - August', 'Leaves and Berries', 'Juniper is found in Himalayan region. This medium sized tree is conical shaped. It is\r\nfound wildly in nature. Its berry (fruit), leaves and twigs have great medicinal value.\r\nFrom ancient times people used this tree for many medicinal purpose for  intestinal\r\nproblem, pain etc. Juniper Berry essential oil is obtained by steam distillation of the\r\ncultural dried or partially dried ripe berries (fruits), leaves and twigs of Juniperus spp.', 'Liquid', 'Characteristic', '410C', '0.8664 at 250C', '1.478 at 250C', '', '5.5', '7.6', '', '', '', 'Soluble in ethyl alcohol', 'Insoluble', '', 'It is used medicinally for urinary infections, for respiratory problems as well as gastro-\r\nintestinal infections and worms. It helps to expel the build-up of uric acid in the joints\r\nand is employed in gout, rheumatic and arthritis.', '1 kg, 5 kg, 10 kg, 25 kg '),
(8, 'Lemongrass', 'Lemongrass', 'Cymbopohonflexuosus flexuous', 'Garminae', 'July- Sept.', 'Whole plant', 'Lemongrass  in  found from terai  region  to  low hilly area of Nepal. Nowadays  it  is\r\ncultivated for commercial purpose in terai region. Lemongrass is an aromatic and cooling\r\nherb having smell like that of lemon. Lemongrass oil is obtained by steam distillation\r\nof partially wilted leaves of Cymbopogon flexuosus (D. C.) Stapf.   ', '', 'Characteristic  intense  sweet  woody  odour  with  flowery  odour', '166 Deg. Fah.', '0.8894 at 250C', '1.4585 at 250C', '', '55.0', '101.6', '', '', '', 'Insoluble in water, soluble in oil and alcohol.', 'Insoluble', '', 'It is used to increase perspiration and relieve fevers and help treat minor, feverish\r\nillnesses.\r\nIt also acts as a diuretic and helps promote urination and relieves retained water.\r\nIt is well known for its invigorating and antiseptic properties.\r\nAs an excellent anti-depressant, it tones and fortifies the nervous system and can be\r\nused in bath for soothing muscular nerves and pain.', '1 kg, 5 kg, 10 kg, 25 kg '),
(9, 'Mentha arvensis', 'Pudinaa', 'Mantha Arvensia', 'labiatae', 'June - July', 'Leaves', 'Mentha is widely found in terai region of Nepal, especially far west region. It was\r\nadopted and now cultivated for commercial purpose. It is a perennial herb, 60 cm high.\r\nLeaves simple, opposite, short stalked, oblong, 2.5-5 cm long obtusely or acutely serrated.\r\nFlowers are small and lilac in auxiliary whorls. Fruits nut lets are smooth. It''s essential\r\noil is extracted via steam distillation process.', 'Slightly thick', 'Strong, fresh and somewhat bitter-sweet.', '71ºC', '0.8930 to 0.9115 at 25° C', '1.457 to 1.479 at 25° C', '', '', '', '- 16 to -45 at 25° C', '', '', 'Soluble in 1.2 to 2.5 vol. of .70% alcohol', 'Insoluble', '', 'It is aromatic, antispasmodic, carminative, stomachic, refrigerant, stimulant, emmenogogue\r\nand diuretic.', '1 kg, 5 kg, 10 kg, 25 kg '),
(10, 'Palma Rosa', 'Palma Rosa', 'Cymbopogon martini', 'Poaceae', 'July - August', 'Whole plant', 'Palmaris is a perennial grass to 3 m tall. It is cultivated in terai region of Nepal. Its\r\nwhole body is used. It is antiseptic as well as has pleasant smell. Palmaris essential oil\r\nis obtained by steam distillation of the fresh partially dried tops of Cymbopogon martini.', 'Liquid', 'Characteristic of floural', '1010C', '0.8883 at 250C', '1.474 at 250C', '', '56.9', '232.5', '', '', '', 'Insoluble in water', 'Insoluble', '', 'It can be used in soap making ingredients, lotions, massage oils,diffusers, potpourri,\r\nscent, air fresheners, body fragrance, perfume oils,aromatherapy products, bath oils,\r\ntowel scenting, spa''s, incense, lightrings, laundry, facial steams, hair treatments, and\r\nmore.\r\nIt is a valuable antiseptic that suits all skin types.\r\nIt is used also in uplifting to the emotions, and may be used in a room burner for its\r\nantiviral properties. Its action against viral illnesses and against bacteria, together with\r\nits\r\npleasant smell makes it a great oil to use to disinfect a room.\r\nTraditionally, acclaimed as a reliever of stress natural it is also known for its ability to\r\nclear the mind and calm ones senses to help relieve nervous tension and stress. It stimulates\r\ncellular regeneration for nervous exhaustion.', '1Kg, 5 Kg, 10 Kg, 25 Kg'),
(11, 'Spikenard', 'Jatamansi', 'Nardostachys jatamansi D. C\r\n', 'Valerian', 'Sep - Dec ', 'Rhizomes', 'Spikenard is a flowering plant of the valerian family that grows in the Himalayas of Nepal. The plant grows to about 1 meter  in height and has pink, bell-shaped flowers. It is found in the altitude of about 3,000 to 5,000 m. Rhizomes (underground stems) can be crushed and distilled into an intensely aromatic amber or greenish blue-colored essential oil.\r\n', 'Fluid to slightly viscous liquid.', 'Heavy, sweet woody and spicy-animal odor.  \r\n', '', '0.9494 at 250C', '1.509 at 250C', '', '', '', '1.77 at 250C\r\n', '', '', '', '', '', 'Perfumery, Incense and Herbal Medicine', '1Kg, 5 Kg, 10 kg, 25 Kg'),
(12, 'Valerian', 'Sugandhawal', 'Valerina wallichi', 'Valeriance', 'February - May', 'Rhizomes and Roots', 'Valerian is found in mountainous reason in Nepal. It is a perennial herd to 45 cm tall\r\nwith thick, nodular and aromatic root stock. Basal leaves with ovate-heart shaped acute\r\nblade, 2.5-8 cm, and toothed or wavy-margined, long stalked; stem leaves few, small,\r\nentire or pinnate lobed. Flowers white or pink tinged, in terminal clusters, borne on erect\r\nnearly leafless stem. Fruits are small with persistent papas like calyx. This herb has been\r\nhighly esteemed since medieval times and used to be call "all heal." The fragrance is\r\nrather unpleasant for most people but when mixed with other more pleasant-smelling\r\noils it can be tolerated. It is best used in very small amounts--too much can dull the\r\nsenses.  The  oil  is  produced  by  steam  distillation  of  the  roots  of  the  plant.', 'Liquid', 'Characteristic', '410C', '0.8664 at 250C', '1.478 at 250C', '', '5.5', '7.6', '', '', '', 'Soluble in ethyl alcohol', 'Insoluble', '', 'It is used for cholera, epilepsy and for skin complains.\r\nIt  is  used  for  backache,  colds,  menstrual  problems,  bruises  and  sores.\r\nIt is used for insomnia, migraines, dysmenorrheal, intestinal colic, rheumatism, backaches,\r\ncolds, and menstrual problems.', '1 kg, 5 kg, 10 kg, 25 kg '),
(13, 'Wintergreen', 'Dhasingre', 'Gaultheria fragrantissima wall', 'Ericase', 'April - May', 'Twigs and Leaves', 'A much branched ever green aromatic shrub about 3 m tall. Leaves simple, alternate,\r\nstalked, oblong-lanceolate to elliptic, serrate, stiffly coriaceous, dotted with glands, up\r\nto 13 cm long. Flowers small, greenish white fragrant in short auxiliary bunches. Fruits\r\ncapsule and sub globose are enclosed in bluish sepals. Wintergreen essential oil is\r\nobtained  by  steam  distillation  of  the  leaves  of  Gaultheria  fragrantissima  Wall.', 'Liquid', 'Characteristic  intense  sweet  woody  odour  with  flowery  odour', '950C ', '1.1829 at 250C', '1.536 at 250C', '', '278.9', '331.1', '', '2.7', '', 'Insoluble in water, soluble in oil and alcohol.', 'Insoluble', '', 'It is aromatic, stimulant, carminative and antiseptic. It is also used in various forms of\r\nrheumatism and applied externally in liniments in the form of a suitable ointment to\r\ncounteract  their  irritating  effects.  It  has  germicidal  action  against  hookworm.', '1 kg, 5 kg, 10 kg, 25 kg '),
(14, 'Prickly ash', 'Timur', 'Zanthoxylum armatum', 'Rutaceae', 'May', 'Seed and bark', 'Seeds and barks are used as a tonic in fever, dyspepsia and cholera. Fruits are used\r\nin toothache and considered as carminative and stomachic. Fruits, branches and thorns\r\nare also used as fish poison.', 'Liquid', 'Characteristic', '510C ', '0.8750 at 250C', '1.469 at 250C', '', '25.7', '89.6', '8.67 at 250C', '', '', 'Soluble in ethyl alcohol', '', '', '', '1 kg, 5 kg, 10 kg, 25 kg '),
(15, 'Zeodary', 'Kachur', 'Curcuma zeodoaria', 'Zingiberaceae', 'May', 'Rhizomes', 'A large leaved rhizomatous herb. Rhizomes camphor scented leaves  large oblong\r\nacuminate stalked, 30-60 cm long, narrow at the base purple midriv. Flowers pink and\r\npale yellow with green and red bracts.\r\nRhizomes are stomachic., cooling, diuretic. aromatic, stimulant carminative, applied in\r\nbruises and pains; decoction along with pepper, cinnamomum and honey is beneficial\r\nin colds.', 'Fluid Liquid', 'Sweet, floral- rosy', '>100°C ', '0.700- 0.9007 at 25ºC', '1.379- 1.4798 at 25º C', '', '240- 395', '', '(-) 0.5º- 0.75º at 25º C', '0.85- 10.5', '72 - 96%', 'Soluble in 1.2 to 3.5 vol 80% alcohol some in 2.0 to 2.5 vol of 90% alcohol', 'Insoluble', '', '', '1 kg, 5 kg, 10 kg, 25 kg '),
(16, 'fsdf', 'sdfsdfsdf	', 'dsfsdfsdfadfdasdaas	', '21312	', ' 	', ' 	', '  ', ' ', '  ', ' ', ' wqedqwedq', ' qweqweqw', ' ', ' ', ' ', ' ', ' ', ' ', '  ', ' ', '  ', '  ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` text NOT NULL,
  `productPhoto` text NOT NULL,
  `visibility` varchar(100) NOT NULL,
  `homeShow` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productPhoto`, `visibility`, `homeShow`) VALUES
(1, 'Anthopogon', 'Uploads/Anthopogon.png', 'yes', 'no'),
(2, 'Basil', 'Uploads/Basil.png', 'yes', 'no'),
(3, 'Calamus', 'Uploads/Calamus.png', 'yes', 'yes'),
(4, 'Chamomile', 'Uploads/Chamomile.png', 'no', 'no'),
(5, 'Citronella', 'Uploads/Citronella.png', 'yes', 'yes'),
(6, 'Eucalyptus', 'Uploads/Eucalyptus.png', 'yes', 'yes'),
(7, 'Juniper Berry', 'Uploads/Juniper.png', 'yes', 'no'),
(8, 'Lemongrass', 'Uploads/Lemongrass.png', 'yes', 'no'),
(9, 'Mentha arvensis', 'Uploads/Mentha.png', 'yes', 'yes'),
(10, 'Palmarosa', 'Uploads/Palmarosa.png', 'yes', 'no'),
(11, 'Spikenard', 'Uploads/Spikenard.png', 'yes', 'no'),
(12, 'Valerian', 'Uploads/Valerian.png', 'yes', 'no'),
(13, 'Wintergreen', 'Uploads/Wintergreen.png', 'yes', 'no'),
(14, 'Zenthoxylum', 'Uploads/Zenthoxylum.png', 'yes', 'no'),
(15, 'Zedoary', 'Uploads/Zedoary.png', 'yes', 'no'),
(16, 'fsdf', 'Uploads/Fsdf.png', 'yes', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`albumPK`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`photoPK`),
  ADD KEY `FK_albumlink` (`albumFK`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NewsID`);

--
-- Indexes for table `productdetails`
--
ALTER TABLE `productdetails`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `albumPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `photoPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `NewsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
