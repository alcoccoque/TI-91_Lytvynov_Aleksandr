-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2018 at 03:10 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `title`, `body`, `user_id`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'Greece', 'I love Greece very much. Last year I visited Rhodes and it was wonderful. Hope to revisit this summer!', 7, 1, '2018-08-09 18:47:49', '2018-08-09 18:47:49'),
(2, 'Visiting Acropolis', 'It was a pleasant surprise to actually see acropolis with my family.', 7, 1, '2018-08-10 20:40:56', '2018-08-10 20:40:56'),
(3, 'dosds', 'lmsdsmdmsidisndnosnidnsindinsidisindsdns', 7, 1, '2018-08-15 11:56:54', '2018-08-15 11:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lat` double(8,2) NOT NULL,
  `lng` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `cities` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`, `lat`, `lng`, `popularity`) VALUES
(1, 'Greece', 'https://www.azernews.az/media/pictures/greece_2.jpg', 'Greece is located at the crossroads of Europe, Asia, and Africa. Situated on the southern tip of the Balkan Peninsula, it shares land borders with Albania to the northwest, the Republic of Macedonia and Bulgaria to the north, and Turkey to the northeast. The Aegean Sea lies to the east of the mainland, the Ionian Sea to the west, the Cretan Sea and the Mediterranean Sea to the south. Greece has the longest coastline on the Mediterranean Basin and the 11th longest coastline in the world at 13,676 km (8,498 mi) in length, featuring a large number of islands, of which 227 are inhabited. Eighty percent of Greece is mountainous, with Mount Olympus being the highest peak at 2,918 metres (9,573 ft). The country consists of nine geographic regions: Macedonia, Central Greece, the Peloponnese, Thessaly, Epirus, the Aegean Islands (including the Dodecanese and Cyclades), Thrace, Crete, and the Ionian Islands. ', NULL, NULL,39.07, 21.82),
(2, 'Spain', 'http://1.bp.blogspot.com/-uKAQBgTkqzQ/UQJ4Q3cUrMI/AAAAAAAAbt8/An3yRIMrPLQ/s1600/Spain+98.jpg', 'Spain officially the Kingdom of Spain is a sovereign state mostly located on the Iberian Peninsula in Europe. The country\'s mainland is bordered to the south and east by the Mediterranean Sea except for a small land boundary with Gibraltar; to the north and northeast by France, Andorra, and the Bay of Biscay; and to the west and northwest by Portugal and the Atlantic Ocean. Spanish territory includes two large archipelagoes, the Balearic Islands in the Mediterranean Sea and the Canary Islands off the African Atlantic coast, two cities, Ceuta and Melilla, on the African mainland and several small islands in the Alboran Sea near the African coast. Spain is the only European country to have a border with an African country (Morocco).', NULL, '2018-08-13 20:05:20',39.07, 21.82),
(3, 'Italy', 'https://www.gloholiday.com/wp-content/uploads/2014/02/Places-to-Visit-in-Italy.jpg', 'Italy officially the Italian Republic is a sovereign state in Europe. Located in the heart of the Mediterranean Sea, Italy shares open land borders with France, Switzerland, Austria, Slovenia, San Marino and Vatican City. Italy covers an area of 301,340 km2 (116,350 sq mi) and has a largely temperate seasonal and Mediterranean climate. With around 61 million inhabitants, it is the fourth-most populous EU member state and the most populous in southern Europe. ', NULL, '2018-08-15 11:57:18',39.07, 21.82),
(4, 'Jamaica', 'http://cdn.sandals.com/beaches/v11/slideshows/resorts/bng/home/slide-01.jpg', 'Jamaica  is an island country situated in the Caribbean Sea. Spanning 10,990 square kilometres (4,240 sq mi) in area, it is the third-largest island of the Greater Antilles and the fourth-largest island country in the Caribbean. Jamaica lies about 145 kilometres (90 mi) south of Cuba, and 191 kilometres (119 mi) west of Hispaniola (the island containing the countries of Haiti and the Dominican Republic).', NULL, NULL,39.07, 21.82),
(5, 'Japan', 'http://static.asiawebdirect.com/m/phuket/portals/japan-hotels-ws/homepage/pagePropertiesImage/Japan%20Hotels%20and%20Travel%20Guide.jpg', 'Japan  is a sovereign island country in East Asia. Located in the Pacific Ocean, it lies off the eastern coast of the Asian mainland and stretches from the Sea of Okhotsk in the north to the East China Sea and China in the southwest. Coordinates: 35??N 136??E The kanji that make up Japan\'s name mean \"sun origin\", and it is often called the \"Land of the Rising Sun\". Japan is a stratovolcanic archipelago consisting of about 6,852 islands. The four largest are Honshu, Hokkaido, Kyushu, and Shikoku, which make up about ninety-seven percent of Japan\'s land area and often are referred to as home islands. The country is divided into 47 prefectures in eight regions, with Hokkaido being the northernmost prefecture and Okinawa being the southernmost one. The population of 127 million is the world\'s tenth largest. Japanese people make up 98.5% of Japan\'s total population. About 9.1 million people live in Tokyo, the capital of Japan.', NULL, '2018-08-20 09:47:13',39.07, 21.82),
(6, 'Egypt', 'https://www.egypttoursplus.com/wp-content/uploads/2014/11/EgyptTours.jpg', 'Egypt officially the Arab Republic of Egypt, is a transcontinental country spanning the northeast corner of Africa and southwest corner of Asia by a land bridge formed by the Sinai Peninsula. Egypt is a Mediterranean country bordered by the Gaza Strip and Israel to the northeast, the Gulf of Aqaba to the east, the Red Sea to the east and south, Sudan to the south, and Libya to the west. Across the Gulf of Aqaba lies Jordan, and across from the Sinai Peninsula lies Saudi Arabia, although Jordan and Saudi Arabia do not share a land border with Egypt. ', NULL, '2018-08-13 09:22:43',39.07, 21.82),
(7, 'Norway', 'http://www.letstravelsomewhere.com/wp-content/uploads/2014/07/lets-travel-to-lofoten-norway-with-vicki-mar-3.jpg', 'Norway officially the Kingdom of Norway, is a unitary sovereign state in Northwestern Europe whose core territory comprises the western and northernmost portion of the Scandinavian Peninsula; the remote island of Jan Mayen and the archipelago of Svalbard are also part of the Kingdom of Norway. The Antarctic Peter I Island and the sub-Antarctic Bouvet Island are dependent territories and thus not considered part of the Kingdom. Norway also lays claim to a section of Antarctica known as Queen Maud Land. ', NULL, NULL,39.07, 21.82),
(8, 'France', 'https://cumuloquoise.files.wordpress.com/2013/05/paris_at_sunset_with_the_eiffel_tower.jpg', 'France officially the French Republic is a sovereign state whose territory consists of metropolitan France in Western Europe, as well as several overseas regions and territories. The metropolitan area of France extends from the Mediterranean Sea to the English Channel and the North Sea, and from the Rhine to the Atlantic Ocean. The overseas territories include French Guiana in South America and several islands in the Atlantic, Pacific and Indian oceans. The country\'s 18 integral regions (five of which are situated overseas) span a combined area of 643,801 square kilometres (248,573 sq mi) and a total population of 67.25 million (as of June 2018).[10] France is a unitary semi-presidential republic with its capital in Paris, the country\'s largest city and main cultural and commercial centre. Other major urban centres include Marseille, Lyon, Lille, Nice, Toulouse and Strasbourg. ', NULL, NULL,39.07, 21.82),
(9, 'Australia', 'http://www.holidaybazaar.travel/wp-content/uploads/2014/05/Australia-The-Sun-Silhouettes-Kangaroos.jpg', 'Australia, officially the Commonwealth of Australia, is a sovereign country comprising the mainland of the Australian continent, the island of Tasmania and numerous smaller islands. It is the largest country in Oceania and the world\'s sixth-largest country by total area. The neighbouring countries are Papua New Guinea, Indonesia and East Timor to the north; the Solomon Islands and Vanuatu to the north-east; and New Zealand to the south-east. Australia\'s capital is Canberra, and its largest city is Sydney. ', NULL, NULL,39.07, 21.82)

-- --------------------------------------------------------

--
-- Table structure for table `country_user`
--

CREATE TABLE `city_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,  
  `lat` double(8,2) NOT NULL,
  `lng` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country_user`
--

INSERT INTO `city_user` (`id`, `city_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 7, NULL, NULL),
(9, 4, 4, NULL, NULL),
(10, 6, 7, NULL, NULL),
(11, 6, 8, NULL, NULL),
(13, 6, 4, NULL, NULL),
(14, 2, 4, NULL, NULL),
(15, 12, 10, NULL, NULL),
(16, 3, 7, NULL, NULL),
(18, 5, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `title`, `body`, `user_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Site', 'This is an awesome site!', 7, 4, '2018-08-02 17:22:29', '2018-08-02 17:22:29'),
(2, 'Site', 'Still need improvement', 7, 2, '2018-08-02 17:27:50', '2018-08-02 17:27:50'),
(3, 'Site Feedback', 'You have a good site', 7, 5, '2018-08-02 17:28:39', '2018-08-02 17:28:39'),
(4, 'Testing', 'Testing the site if works properly in virtual host environment', 7, 2, '2018-08-03 10:47:05', '2018-08-03 10:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_04_06_212423_create_users_table', 1),
(2, '2021_04_06_161535_create_posts_table', 2),
(3, '2021_04_06_132800_create_cities_table', 3),
(4, '2021_04_06_174059_create_places_table', 4),
(5, '2021_04_06_191859_add_lat_to_cities', 5),
(6, '2021_04_06_192030_add_lng_to_cities', 5),
(7, '2021_04_06_134557_add_username_to_users', 6),
(8, '2021_04_06_192421_create_feedback_table', 7),
(9, '2021_04_06_213332_add_image_to_places', 8),
(10, '2021_04_06_141836_add_type_to_users', 9),
(11, '2021_04_06_005445_add_timestamps_to_places', 10),
(12, '2021_04_06_130500_create_city_user_table', 11),
(13, '2021_04_06_125207_create_comments_table', 12),
(14, '2021_04_06_132938_add_popularity_to_cities', 13),
(15, '2021_04_06_183305_create_news_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urlToImage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `url`, `urlToImage`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'See How Soldiers Sleep in the Field', 'While embedded with U.S. troops in Afghanistan, photographer Tim Hetherington created images showing rare and precious moments of calm.', 'https://www.nationalgeographic.com/science/2018/08/how-soldiers-sleep-tim-hetherington-war-health.html', 'https://www.nationalgeographic.com/content/dam/science/2018/08/01/sleeping-soldiers/sleeping-soldiers-tim-hetherington-04.jpg', 7, NULL, NULL),
(6, 'Vaping: How safe actually are e-cigarettes according to the scientific studies and experts', 'A new study has found that vapour from e-cigarettes could harm lung cells, but what else has been said about vaping?', 'https://www.walesonline.co.uk/news/health/vaping-how-safe-actually-e-15028637', 'https://i2-prod.walesonline.co.uk/news/wales-news/article12984182.ece/ALTERNATES/s1200/1_JS85248175JPG.jpg', 10, NULL, NULL),
(9, 'Teenagers wrongly think vaping is as bad as smoking', 'More than a quarter of teenagers believe that vaping is as dangerous as smoking, twice the proportion of five years ago. The anti-smoking charity ASH said that misguided advice from doctors and...', 'https://www.thetimes.co.uk/article/teenagers-wrongly-think-vaping-is-as-bad-as-smoking-t0mcm6hv3', 'http://www.thetimes.co.uk/imageserver/image/methode%2Ftimes%2Fprod%2Fweb%2Fbin%2Feca18b3c-a092-11e8-8dd0-114e457a16b3.jpg?crop=2532%2C1424%2C0%2C132', 4, NULL, NULL),
(10, 'Eating breakfast before a workout could help you to burn more carbs during the day', 'Fasted training may not be best', 'https://www.standard.co.uk/lifestyle/health/study-eating-breakfast-before-exercise-helps-to-burn-carbs-a3911851.html', 'https://static.standard.co.uk/s3fs-public/thumbnails/image/2018/08/15/09/nirzar-pangarkar-28869-unsplash.jpg', 4, NULL, NULL),
(11, 'Hawaii Enlists Urchins to Help Corals Resist Algae Invasion', 'In K??ne\'ohe Bay, invasive algae was smothering coral reefs. But scientists have found a clever new way to clean them up.', 'https://www.nationalgeographic.com/environment/2018/08/hawaii-coral-reef-healthy-recovery-urchins.html', 'https://www.nationalgeographic.com/content/dam/environment/2018/08/algae_cleanup/01_invasive_algae_cleanup_h_14395505.jpg', 7, NULL, NULL),
(12, 'Smelling things that aren\'t there could be a sign: Study', 'The reasons behind phantom odors are a mystery. They occur when someone smells something, but there is nothing in the environment that corresponds to the often unpleasant odors.', 'https://wtop.com/health-fitness/2018/08/smelling-things-that-arent-there-could-be-a-sign-study/', 'https://wtop.com/wp-content/uploads/2018/08/getty_081618_smellingthings.jpg', 4, NULL, NULL),
(13, 'Carlow girl Shauntelle Tynan is now cancer free after experimental US treatment', 'She was receiving treatment for a rare autoimmune disease in Houston.', 'https://www.irishexaminer.com/breakingnews/ireland/carlow-girl-shauntelle-tynan-is-now-cancer-free-after-experimental-us-treatment-862796.html', 'http://www.irishexaminer.com/remote/media.central.ie/media/images/s/ShanTynanCancerFree_large.jpg?width=648&s=ie-862796', 4, NULL, NULL),
(15, 'Measles cases hit record high in Europe', 'More than 41,000 people have been infected with measles in the first six months of 2018.', 'https://www.bbc.co.uk/news/health-45246049', 'https://ichef.bbci.co.uk/news/1024/branded_news/781D/production/_103094703_measles-spl.jpg', 7, NULL, NULL),
(16, 'Man has a tumour in his brain formed of SPERM CELLS: Medics have told 23-year-old he only has 18 months to live', 'Jordan Payne, 23, from Ripley in Derbyshire, is battling a golf ball-sized brain tumour that is made of germ cells - created as a foetus grows in the womb. They eventually become sperm or eggs.', 'http://www.dailymail.co.uk/health/article-6078169/Labourer-23-18-months-live-rare-tumour-brain.html', 'https://i.dailymail.co.uk/i/newpix/2018/08/20/10/4F3B5ED800000578-0-image-a-16_1534758377480.jpg', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `information`, `city_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Acropolis', 'The Acropolis of Athens is an ancient citadel located on a rocky outcrop above the city of Athens and contains the remains of several ancient buildings of great architectural and historic significance, the most famous being the Parthenon. The word acropolis is from the Greek words ??????????? (akron, \"highest point, extremity\") and ?????????? (polis, \"city\"). Although the term acropolis is generic and there are many other acropoleis in Greece, the significance of the Acropolis of Athens is such that it is commonly known as \"The Acropolis\" without qualification. During ancient times it was known also more properly as Cecropia, after the legendary serpent-man, Cecrops, the first Athenian king.', 1, 'https://www.keytours.gr/uploads/images/athens_tourists.jpg', NULL, NULL),
(2, 'Thessaloniki', 'Thessaloniki also familiarly known as Thessalonica, Salonica, or Salonika is the second-largest city in Greece, with over 1 million inhabitants in its metropolitan area, and the capital of Greek Macedonia, the administrative region of Central Macedonia and the Decentralized Administration of Macedonia and Thrace. Its nickname is ?? ?????????????????????????? (Symprot??vousa), literally \"the co-capital\", a reference to its historical status as the ???????????????????????????? (Symvasil??vousa) or \"co-reigning\" city of the Eastern Roman (Byzantine) Empire, alongside Constantinople.', 1, 'https://i.ytimg.com/vi/NBBAlHZpRkk/maxresdefault.jpg', NULL, NULL),
(3, 'Ibiza', 'Ibiza (Catalan: Eivissa) is an island in the Mediterranean Sea off the east coast of Spain. It is 150 kilometres (93 miles) from the city of Valencia. It is the third largest of the Balearic Islands, an autonomous community of Spain. Its largest settlements are Ibiza Town (Catalan: Vila d\'Eivissa, or simply Vila), Santa Eul??ria des Riu, and Sant Antoni de Portmany. Its highest point, called Sa Talaiassa (or Sa Talaia), is 475 metres (1,558 feet) above sea level.\r\nIbiza has become well known for its association with nightlife, electronic music that originated on the island, and for the summer club scene, all of which attract large numbers of tourists drawn to that type of holiday. Several years before 2010, the island\'s government and the Spanish Tourist Office had been working to promote more family-oriented tourism, with the police closing down clubs that played music at late night hours, but by 2010 this policy was reversed. Around 2015 it was resumed.', 2, 'http://3.bp.blogspot.com/-1MEpdirJW9s/T7v2EtjVEeI/AAAAAAAAPJA/VgPy4aRD9AU/s1600/Ibiza-Spain.jpg', '2018-08-05 21:59:39', '2018-08-05 21:59:39'),
(4, 'Rome', 'Rome is the capital city of Italy and a special comune (named Comune di Roma Capitale). Rome also serves as the capital of the Lazio region. With 2,872,800 residents in 1,285 km2 (496.1 sq mi), it is also the country\'s most populated comune. It is the fourth-most populous city in the European Union by population within city limits. It is the centre of the Metropolitan City of Rome, which has a population of 4.3 million residents. Rome is located in the central-western portion of the Italian Peninsula, within Lazio (Latium), along the shores of the Tiber. The Vatican City is an independent country inside the city boundaries of Rome, the only existing example of a country within a city: for this reason Rome has been often defined as capital of two states.', 3, 'http://cdn-locations-images.tripomatic.com/img-poi707-124isJ-i4s.jpg', '2018-08-05 22:05:38', '2018-08-05 22:05:38'),
(5, 'Lofoten Islands', 'Lofoten is an archipelago and a traditional district in the county of Nordland, Norway. Lofoten is known for a distinctive scenery with dramatic mountains and peaks, open sea and sheltered bays, beaches and untouched lands. Though lying within the Arctic Circle, the archipelago experiences one of the world\'s largest elevated temperature anomalies relative to its high latitude. There is evidence of human settlement extending back at least 11,000 years in Lofoten, and the earliest archaeological sites ... are only about 5,500 years old, at the transition from the early to late Stone Age.\" Iron Age agriculture, livestock, and significant human habitation can be traced back to c. 250 BC.', 7, 'https://4.bp.blogspot.com/-sHOhQTIrl7A/VrfoMbZ07JI/AAAAAAAAK_U/ceFCyg_t4L4jQhd-OcZy6BMsxQWg2WifgCKgB/s1600/Reine+2+Lofoten+Islands.jpg.jpg', '2018-08-05 22:10:56', '2018-08-05 22:10:56'),
(6, 'Santa Claus Village', 'Santa Claus Village is an amusement park in Rovaniemi in the Lapland region of Finland. It was opened in 1985. Santa Claus Village is located about 8 km northeast of Rovaniemi and about 2 km from the Rovaniemi Airport. Rovaniemi city bus route 8 travels between the Rovaniemi Railway Station and the Santa Claus Village. The bus trip takes about 30 minutes. The first original home of Santa Clause was Korvatunturi, which remained mysterious. In 1985, Rovaniemi was declared as an official hometown of Santa Claus. During World War Two Rovaniemi was completely destroyed, after then it was reconstructed again.', 13, 'https://www.visitrovaniemi.fi/wp-content/uploads/Santa-Claus-Office-Santa-Claus-Village.jpg', '2018-08-05 22:18:20', '2018-08-05 22:18:20'),
(7, 'Tokyo', 'Tokyo officially Tokyo Metropolis, is one of the 47 prefectures of Japan and has been the capital since 1869. The Greater Tokyo Area is the most populous metropolitan area in the world. It is the seat of the Emperor of Japan, the Japanese government and the National Diet. Tokyo is in the Kant?? region on the southeastern side of the main island Honshu and includes the Izu Islands and Ogasawara Islands. Tokyo was formerly named Edo when Sh??gun Tokugawa Ieyasu made the city as his headquarters in 1603. It became the capital after Emperor Meiji moved his seat to the city from Kyoto in 1868; at that time Edo was renamed Tokyo. Tokyo Metropolis was formed in 1943 from the merger of the former Tokyo Prefecture and the city of Tokyo.', 5, 'https://www.arcspace.com/wp-content/uploads/CropUp/-/media/871741/Tokyo-Travel-guide-Shibuya-at-night.jpg', '2018-08-07 09:46:03', '2018-08-07 09:46:03'),
(8, 'Sydney Opera House', 'The Sydney Opera House is a multi-venue performing arts centre in Sydney, New South Wales, Australia. It is one of the 20th century\'s most famous and distinctive buildings.\r\nDesigned by Danish architect J??rn Utzon, the building was formally opened on 20 October 1973 after a gestation beginning with Utzon\'s 1957 selection as winner of an international design competition. The Government of New South Wales, led by the premier, Joseph Cahill, authorised work to begin in 1958 with Utzon directing construction. The government\'s decision to build Utzon\'s design is often overshadowed by circumstances that followed, including cost and scheduling overruns as well as the architect\'s ultimate resignation.\r\nThe building and its surrounds occupy the whole of Bennelong Point on Sydney Harbour, between Sydney Cove and Farm Cove, adjacent to the Sydney central business district and the Royal Botanic Gardens, and close by the Sydney Harbour Bridge.', 9, 'http://newwallpapers1.com/wp-content/uploads/2015/02/Sydney-Opera-House-Australia-2.jpg', '2018-08-09 09:21:23', '2018-08-09 09:21:23'),
(9, 'Brazilian Carnival', 'The Carnival of Brazil (Portuguese: Carnaval do Brasil, IPA: [ka??na??vaw]) is an annual Brazilian festival held between the Friday afternoon before Ash Wednesday and Ash Wednesday at noon, which marks the beginning of Lent, the forty-day period before Easter. On certain days of Lent, Roman Catholics and some other Christians traditionally abstained from the consumption of meat and poultry, hence the term \"carnival\", from carnelevare, \"to remove (literally, \"raise\") meat. Carnival is the most famous holiday in Brazil and has become an event of huge proportions. Except for industrial production, retail establishments such as malls, and carnival-related businesses, the country unifies completely for almost a week and festivities are intense, day and night, mainly in coastal cities. Rio de Janeiro\'s carnival alone drew 4.9 million people in 2011, with 400,000 being foreigners.', 11, 'http://i0.wp.com/www.thetrentonline.com/wp-content/uploads/2015/06/Brazil-Carnival.jpg', '2018-08-15 14:35:45', '2018-08-15 14:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'I had a great time visiting India this summer!', 4, '2018-07-22 19:14:52', '2018-07-22 19:14:52'),
(2, 'I am living a dream in Spain. Come visit this beautiful country on your own!', 4, '2018-07-22 19:45:09', '2018-07-22 19:45:09'),
(3, 'I love Greece!', 4, '2018-07-23 10:00:09', '2018-07-23 10:00:09'),
(4, 'Help me decide India or Brazil?', 5, '2018-07-25 13:00:22', '2018-07-25 13:00:22'),
(5, 'Come to Greece', 4, '2018-07-25 17:04:20', '2018-07-25 17:04:20'),
(6, 'Hi from LA!', 6, '2018-07-25 17:18:58', '2018-07-25 17:18:58'),
(7, 'Last year I visited Jamaica. It was a fantastic experience!', 7, '2018-07-29 10:56:07', '2018-07-29 10:56:07'),
(8, 'Hallo from Canada', 7, '2018-07-31 09:07:57', '2018-07-31 09:07:57'),
(9, 'Hi from France', 7, '2018-08-03 17:04:23', '2018-08-03 17:04:23'),
(10, 'Testing the post request changes in database!', 7, '2018-08-12 15:15:32', '2018-08-12 15:15:32'),
(11, 'It was a pleasant experience visiting Kenya this summer', 10, '2018-08-14 15:00:27', '2018-08-14 15:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `email`, `username`, `password`, `remember_token`, `type`) VALUES
(1, '2018-07-21 19:31:30', '2018-07-21 19:31:30', 'test@test.com', 'test', '$2y$10$OF44jAqnJRZKY//fM/KmIuv.A3M9Knunmjii73S3xrFn8YrLlSzFK', NULL, 'default'),
(3, '2018-07-22 09:58:36', '2018-07-22 09:58:36', 'mixalis@mix.com', 'mixalis', '$2y$10$CdRTyvchvMgjFBwKYhflmesmAmcrUQsMAGnwq4DJbhvnDIbJAlyiC', NULL, 'default'),
(4, '2018-07-22 10:25:35', '2018-08-06 09:39:27', 'helen@helen.com', 'helen', '$2y$10$sxdRJYpCR8t8RL7fjB0BGeVeNyXQn1H3Nr1v5HNolQLRkgU4C9ioy', 'nPZld83WsZlrJT4yTAR0iBwsnEMaSMpek5G3VPr2c0EJ2PL5E9VjDqMwCk9M', 'default'),
(5, '2018-07-25 12:59:19', '2018-07-25 12:59:19', 'test1@test.com', 'test1', '$2y$10$KA1UpvhQB/XXJJ75/cIhbuNuerS81nWzK367qtccwOPbE3L6Z2Vd6', NULL, 'default'),
(6, '2018-07-25 17:18:31', '2018-07-25 17:18:31', 'ntinos@ntinos.com', 'ntinos', '$2y$10$Wbou4oz7u3n52uInaqDsS.MHcmguNqKNTfVBFGsYzAjBRV18SZKPS', NULL, 'default'),
(7, '2018-07-28 11:02:11', '2018-07-28 11:02:11', 'elkapsim@gmail.com', 'sirlef', '$2y$10$kErHPHZwW0CBH/eRpcwQTOerojUkIELU00iUNS.9YJ53wDoXFDiAC', 'bLPLZU76DNDFl2yQh8zw3ML2X18wGAGjfSM1WW5btHco8miRWTpnDxrAQ3kI', 'admin'),
(8, '2018-08-11 10:55:43', '2018-08-11 10:55:43', 'test2@test.com', 'JohnDoe', '$2y$10$SIqbWpkr69L69oYRm8X8neEpkbAZJEm8b1hZxCe1.cR49ofPUyonO', NULL, 'default'),
(9, '2018-08-13 21:42:10', '2018-08-13 21:42:42', 'admin@admin.com', 'admin', '$2y$10$XCNhkg5K2v5O58yPTinJSOqGUHs9FJrcRKR2qwIKOmDnZKeg/rYoS', 'H1m1KY60sFEjv7D20BIjrqspAPDZm6PJyzr09fPbDeMYlzh0Zlee0LTHXgzR', 'admin'),
(10, '2018-08-14 14:57:20', '2018-08-14 14:57:20', 'test4@test.com', 'test4', '$2y$10$5qc.65AzjMLHHh.d5fghhOhjpybvhfng4CkXITmso2uw.ewfKK/Pe', 'qfUIIZzE4uKaxBXbsLy5XndV9dnIUEu6617BQjp31e0ZgRCjY4de6gOxzDOW', 'default');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_user`
--
ALTER TABLE `city_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `city_user`
--
ALTER TABLE `city_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;


