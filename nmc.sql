-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 07:07 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MkHQqIA0Sf`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(120) NOT NULL,
  `msg` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `msg`) VALUES
(0, 'dfvxcvz', 'vvxzvz', 'xvzxvzx');

-- --------------------------------------------------------

--
-- Table structure for table `culsec1`
--

CREATE TABLE `culsec1` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `img` varchar(5000) NOT NULL,
  `des` varchar(5000) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `culsec1`
--

INSERT INTO `culsec1` (`id`, `name`, `img`, `des`, `active`) VALUES
(1, 'History', 'historyimg.jpg', 'Nashik was known as Panchavati before Ramayana period. Nashik has mythological, historical, social and cultural importance. The city is situated on the banks of the Godavari River, making it one of the holiest places for Hindus all over the world.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `culsec2`
--

CREATE TABLE `culsec2` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `des` varchar(5000) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `img` varchar(7000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `culsec2`
--

INSERT INTO `culsec2` (`id`, `name`, `des`, `active`, `img`) VALUES
(1, 'Kumbh Mela', 'Millions of people, who gather without any invitation, notice or summon from all over the globe to participate in the stream of knowledge and spirituality on the banks of sacred rivers is Kumbhamela.The Kumbh Mela is an important festival according to Kumbh Melathe Hindu mythology. The festival is one of the largest public gatherings of faith in the world as it draws crores of pilgrims over a course of 48 days to bathe in the holy confluence of rivers-- the Ganga, the Yamuna and the Saraswati. Though the Mela is visited by Hindu devotees from across the world, the congregation mainly includes sadhus, sadhvis, ascetics, kalpvais and pilgrims.', 1, 'KumbhMela1.jpg'),
(2, 'Ram-Ratha Yatra', 'Nashik City mainly knows as the place where Lord Ramachandra stayed for more than 12 years in the area known as Panchavati. Ramnavmi Ratha Yatra is held during the festival of Janmotsava at the Sansthan Shri Kalaram Mandir at Panchavati which is dedicated to Lord Rama. The festival is which lasts for 15days begin from the first day of Chaitra till Chaitra Purnima. The major attraction of the festival is Ratha Yathra held on the second day, that starts at about 4.30 p.m and continuous till late night with the rath of Lord Rama and Lord Hanuman. The raths have a big wooden round rod known as Dhuri and are pulled with heavy ropes by the rath sevakas.', 1, 'RamRath1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `culsec3`
--

CREATE TABLE `culsec3` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(5000) NOT NULL,
  `des` varchar(5000) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `des1` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `culsec3`
--

INSERT INTO `culsec3` (`id`, `name`, `img`, `des`, `active`, `des1`) VALUES
(1, 'Nashik Dhol', 'nashik-dhol3.png', 'Nashik dhol was prepared by army band which was supposed to play in the prade Band did play it in the republic day parade so it was named”Nashik Dhol”. Tune was played in Nashik as it was invented here.', 1, '\"The Tune Of Happiness...\"'),
(2, 'Grapes', 'grapes5.png', 'Nashik is very famous for its table and wine grapes. The grapes are sure to tickle your taste buds. The black, green, seed and seedless varities are all popular. Grapes from the city are exported to Europe, the Middle East, and Asia.', 1, '\"Nothing great is created suddenly, any more than a bunch of grapes or a fig.\"'),
(3, 'Chivda', 'chivda.jpg', 'Chivda is a traditional Maharashtrian snack. The Nashik Chivda is very unique and delicious. It is a combination of flattened rice (Poha in Marathi), roasted gram, dried coconut, fried curry leaves, peanuts, sometimes cashews and masalas. Some famous brands selling Nashik Chivda are – Kondaji, Madhavji etc.', 1, '\"Sometimes satisfying our hanger is just not enough.. TASTE is very important.\"'),
(4, 'Misal', 'misal.jpg', 'The Misal is a delicacy made from the mixture of various sprouts like mung, matki, chana, beans and lots of spicy, oily masala. The Misal Pav is a relatively cheap yet nutritional snack or meal. It is a must must have if you are in Nashik.', 1, '\"It\'s not just Misal, it\'s an experience !!!\"'),
(5, 'Wine ', 'wine2.png', 'Nashik is the “Wine Capital of India”, so how can one miss it when in the city. There are around 33 wineries in and around Nashik. You can get white, red etc types of quality and exclusive Wines in Nashik.', 1, '\"Wine is a passport to World....\"'),
(6, 'Guavas ', 'guava4.png', 'Nashik is also known as the “Kitchen garden” of Mumbai and other neighboring cities. The Guavas (Peru in Marathi) from Nashik are popular for their unique taste.', 1, '\"One that would have the fruit must climb the tree.\"');

-- --------------------------------------------------------

--
-- Table structure for table `culsec4`
--

CREATE TABLE `culsec4` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(5000) NOT NULL,
  `des` varchar(5000) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `culture`
--

CREATE TABLE `culture` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `culturepage`
--

CREATE TABLE `culturepage` (
  `id` int(200) NOT NULL,
  `name` varchar(4000) NOT NULL,
  `img` varchar(10000) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `culturepage`
--

INSERT INTO `culturepage` (`id`, `name`, `img`, `active`) VALUES
(1, 'Pande Mithai', 'culturepage/pande_mithai.jpg', 1),
(2, 'Samarath Juice Centre', 'culturepage/samartha_juice.jpg', 1),
(3, 'Dairy Don', 'culturepage/j3.jpeg', 1),
(4, 'Rock n Rolls', 'culturepage/wraproti.jpg', 1),
(5, 'Sadhna misal', 'culturepage/sadhna_misal.jpg', 1),
(6, 'Kokni Darbar', 'culturepage/j6.jpg', 1),
(7, 'Akbar Soda', 'culturepage/soda.png', 1),
(8, 'Budha Halwai', 'culturepage/gulabjamun.jpg', 1),
(9, 'Kondaji Chivda', 'culturepage/Kondaji_Chivda.jpg', 1),
(10, 'Sayantara', 'culturepage/sayantara.jpg', 1),
(11, 'Coffee', 'culturepage/coffee.jpg', 1),
(12, 'Chienese', 'culturepage/chiness.jpg', 1),
(13, 'hiiiii', 'CulturePage/dairydonice2.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `name`, `des`, `img`, `active`) VALUES
(1, 'TRAMBAKESHWAR', 'It is an ancient Hindu temple in the town of Trimbak, in the Trimbakeshwar tehsil in the Nashik District of Maharashtra, India, 28 km from the city of Nashik and 40 km from nashik road. It is dedicated to the god Shiv and is one of the twelve Jyotirlingas, where the Hindu genealogy registers at Trimbakeshwar, Maharashtra are kept. The origin of the sacred Godavari river is near Trimbak. Kusavarta, a kunda (sacred pond) in the temple premises is the source of the Godavari River. The current temple was built by Peshwa Balaji Baji Rao.', 'Destination/trambak1.jpg', 1),
(2, 'PANCHVATI', 'Holy land for the believers of Ramayana, Panchvati attracts a lot of pilgrims. A serene town located near Nasik, the site offers small sightings having a lot of significance in the epic of Ramayana. Given the legend of Panchvati, the place holds a lot oreligious significance even in the present day. Sites sucas the Kalaram Temple and the Sita Gufaa are on everpilgrims list. The Kumbh Mela takes place on the river banks of Godavari, and has a surplus of pilgrims from every corner of world during the occasion.', 'Destination/1.jpg', 0),
(3, 'SAPTASHRUNGI GADH', 'This hill range situated 60 km from Nashik and forms a part of the Sahyadri range. It is a blend of the Sanskrit words \'sapta\' which means seven and \'shrung\' which means peak.which greatly add to the beauty of the hills. Not only are the hills incredible to look at, but the forests on the hills are loaded with medicinal herbs. In fact, as per the Hindu tradition, when Laxman was lying unconscious and could only be awakened by the \'sanjeevani\' herb, Lord Hanuman flew to these hills in search of the herb\r\n\r\n', 'Destination/VANI1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `destsec1`
--

CREATE TABLE `destsec1` (
  `id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `des` varchar(5000) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destsec1`
--

INSERT INTO `destsec1` (`id`, `name`, `des`, `img`, `active`) VALUES
(1, 'TRAMBAKESHWAR', 'Counted as the holiest temple of India, the Trimbakeshwar Temple houses one of the most important twelve Jyotirlingas, a form of Lord Shiva.', 'destsec1/trambak1.jpg', 1),
(2, 'PANCHVATI', 'Nothing short of holy for the ardent belivers of Ramayana, this site gets a lots of visitors in the form of pilgrims and religious travellers.', 'destsec1/1.jpg', 1),
(3, 'SAPTSHRUNGI GAD', 'Situated on a hill range, consisting of seven hills, Saptashrungi is a site of religious significance for Hindus. The drive to the temple is quite scenic, especially during the monsoon season.', 'destsec1/VANI1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `destsec2`
--

CREATE TABLE `destsec2` (
  `id` int(200) NOT NULL,
  `name` varchar(400) NOT NULL,
  `img` varchar(400) NOT NULL,
  `active` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destsec2`
--

INSERT INTO `destsec2` (`id`, `name`, `img`, `active`) VALUES
(2, 'Phalake Smarak', 'destsec2/PRIMG3.jpg', b'1'),
(3, 'Panchwati', 'destsec2/1.jpg', b'1'),
(4, 'Panduv Leni', 'destsec2/pandavlene.jpg', b'1'),
(5, 'Kala-Ram Mandir', 'destsec2/kalaram.jpg', b'1'),
(6, 'Anjeneri', 'destsec2/PRIMG5.jpg', b'1'),
(8, 'Trambkeshwar', 'destsec2/trambak1.jpg', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `destsec3`
--

CREATE TABLE `destsec3` (
  `id` int(11) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `video` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destsec3`
--

INSERT INTO `destsec3` (`id`, `des`, `img`, `active`, `video`) VALUES
(1, 'Experience Our Outstanding Services', 'destsec3/saputara.jpg', 1, '1.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `destsec4`
--

CREATE TABLE `destsec4` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `active` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destsec4`
--

INSERT INTO `destsec4` (`id`, `name`, `des`, `active`) VALUES
(1, 'Day 1', 'Reach Nasik, preferably by noon, and take some rest. In the evening, you can take a stroll in the main markets, which are famous for their beaded jewellery and other handicrafts.', b'1'),
(2, 'Day 2', 'The next day should be earmarked for a visit to the glorious Triambakeshwar temple for both spiritualism & adventure. There on, you can proceed to Anjaneri Hills, which is the birthplace of Lord Hanuman.', b'1'),
(3, 'Day 3', 'The third day can start with blessings from the holy site of Panchvati.Then you can go for Sri Kalaram Temple is situated in the Panchavati area, after this you can also visit to Tapovan and Seeta gumha which are just near to this.', b'1'),
(4, 'Day 4', 'Now you can visit to Pandavleni Caves which are the ancient rock cut caves situated to the south of Nashik.Then you can move to Sri Dharmachakra Prabhav Tirth, a beautiful Jain Temple situated near Viholi village on Nashik - Mumbai Road. You can also include Butterfly garden in this places.', b'1'),
(5, 'Day 5', 'The fifth day can be start with Dhudsagar falls offer a panoramic view with a spectacular scenery, which may also include Balaji temple in this visit. There is another best place to visit that is Navsha Ganpati Temple of Lord Ganesha. These places are closer from one another.', b'1'),
(6, 'Day 6', 'Then the next day you can go to Saptashrungi Gad, a hill range situated 60 km from Nashik and forms a part of the Sahyadri range.Then you can go for Saputara, snuggled in the Sahyadris or the Western Ghats, a quaint little hill station near to Nashik.', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `destsec5`
--

CREATE TABLE `destsec5` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `active` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destsec5`
--

INSERT INTO `destsec5` (`id`, `name`, `img`, `active`) VALUES
(1, 'Phalke Smarak', 'Destsec5/phalkesmarak1.jpg', b'1'),
(2, 'Artillary Museum', 'Destsec5/Artillarymuseam11.png', b'1'),
(3, 'Coin Museum', 'Destsec5/coin.png', b'1'),
(4, 'Gargoti Museum', 'Destsec5/gargoti1.jpg', b'1'),
(5, 'WeGo Art Gallery', 'Destsec5/WeGoArtGallery1.jpg', b'1'),
(6, '360 Degree Objet D\'art', 'Destsec5/360Degree1.jpg', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `destsec6`
--

CREATE TABLE `destsec6` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `active` bit(1) NOT NULL DEFAULT b'1',
  `slide_to` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destsec6`
--

INSERT INTO `destsec6` (`id`, `name`, `img`, `active`, `slide_to`) VALUES
(1, 'Brahmagiri Hill, Nashik', 'destsec6/brahmagiri.jpg', b'1', '0'),
(2, 'Alang Madan Kulang, Nashik', 'destsec6/AlangMadanKulang.jpg', b'1', '1'),
(3, 'Kalsubai, Nashik', 'destsec6/Kalsubai.jpg', b'1', '2'),
(4, 'Harihargad Fort, Nashik', 'destsec6/HarihargadFort.jpg', b'1', '3'),
(5, 'Ratangad Fort, Nashik', 'destsec6/RatangadFort.jpg', b'1', '4');

-- --------------------------------------------------------

--
-- Table structure for table `destsec7`
--

CREATE TABLE `destsec7` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `active` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destsec7`
--

INSERT INTO `destsec7` (`id`, `name`, `des`, `img`, `active`) VALUES
(1, 'Someshwar Waterfall', 'The water fall is located 2 Km away from the Someswar temple and close to Balaji temple. From Panchavati area of Nashik, its only 4-5 Km. It was great \r\n                                        to visit this place during monsoon when the waterfall look lively and vigorous. Its a nice place to spend some time in the evening.', 'destsec7/someshwarWaterfall.jpg', b'1'),
(2, 'Vihigaon Waterfall', 'Vihigaon waterfall also refered to as Ashoka Waterfall\r\n                                         is a fantastic visit. The waterfall is huge & very clear water. You can enjoy yourselves in the pond & stand under it to experience large fresh & big water droplets crashing on your body which feels amazing. Crowd is limited here.', 'destsec7/Vihigaon_Waterfall.jpg', b'1'),
(3, 'Dabhosa Waterfall', 'Dabhosa Waterfalls is a waterfalls situated in the village of Dabhosa in Jawhar Tehsil, palghar district, Maharashtra, India. This is one of the highest waterfalls situated near Mumbai. Dabhosa Waterfalls is a beautiful waterfall especially, during the monsoon season.', 'destsec7/dabhosaWaterfall.jpg', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(200) NOT NULL,
  `msg` varchar(1500) NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foodsec1`
--

CREATE TABLE `foodsec1` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `img` varchar(50000) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodsec1`
--

INSERT INTO `foodsec1` (`id`, `name`, `img`, `active`) VALUES
(1, 'Nashik\'s Best Spicy Food', 'FoodSec1/Amazingly-Bhel-Puri-768x768_2.jpg', 1),
(2, 'Cool Nashik', 'FoodSec1/j5.jpeg', 1),
(3, 'Delisious Desserts', 'FoodSec1/bagga_sweets1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foodsec2`
--

CREATE TABLE `foodsec2` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `img` varchar(50000) NOT NULL,
  `des` mediumtext NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodsec2`
--

INSERT INTO `foodsec2` (`id`, `name`, `img`, `des`, `active`) VALUES
(1, 'Vada Pav', 'FoodSec2/Mumbai-vada4.jpg', 'The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to \"Naviglio\" where you can enjoy the main night life in Barcelona...', 1),
(2, 'Rock And Roll', 'FoodSec2/rock_N_roll.png', 'The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to \"Naviglio\" where you can enjoy the main night life in Barcelona...', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foodsec3`
--

CREATE TABLE `foodsec3` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `img` varchar(50000) NOT NULL,
  `des` mediumtext NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodsec3`
--

INSERT INTO `foodsec3` (`id`, `name`, `img`, `des`, `active`) VALUES
(1, '', 'FoodSec3/platter-of-foods-941869.jpg', 'Oh ... you want to add description related to your content....', 1),
(2, '', 'FoodSec3/kokanidarbar.png', 'Oh ... you want to add description related to your content....', 1),
(3, '', 'FoodSec3/white-and-brown-cooked-dish-on-white-ceramic-bowls-958545.jpg', 'Oh ... you want to add description related to your content....', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foodsec4`
--

CREATE TABLE `foodsec4` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `des` varchar(5000) NOT NULL,
  `img` varchar(2000) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodsec4`
--

INSERT INTO `foodsec4` (`id`, `name`, `des`, `img`, `active`) VALUES
(1, 'Sadhana Misal:', 'A stronghold with cheery ambiance where the radiant aroma of sizzling flavors is in the air. Designed with a village-setting, the hotel showcases hybrid birds and animals including Emu, Turkey, camels for visitors. The hotel is well-known in Nashik as ‘Chulivarchi Misal’.', 'FoodSec4/sathna-misal11.png', 1),
(2, 'Shamsundar Misal', 'Even though this hotel is situated near industrial area, their Misal pav is high on demand. Shamsundar Misal was one of the popular Misal point years ago. Down to increasing competition, the hotel must have lost its name but is striving hard to gain its name and fame by delivering a first class Misal.', 'FoodSec4/sham-sundar11.jpg', 1),
(3, 'Mamachya Mala', 'Mamachya Mala perfect for its delicious Misal, is moreover famous for Jalebis. Based on a village-setting, this is a real good place to be visited in weekends with family. The hotel situated in Makhmalabad-Mahsrul link road, will most of all, let', 'FoodSec4/sham-sundar2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foodstuff`
--

CREATE TABLE `foodstuff` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodstuff`
--

INSERT INTO `foodstuff` (`id`, `name`, `des`, `img`, `active`) VALUES
(1, 'Shaukin  Bhel ', 'Running late, well you still have wide offerings from nashik’s chat vendors Shaukin Bhel and Mathurawasi Chat Bhandar, which will surely end your craving for chat before doomsday. Try “Pani Puri” at Shaukin simple yet slightly spicy “Pani Puri” ,Spice levels can be raised just ask the person serving to give you jhatka. Bhel here is again slightly spicy and extremely spicy version is “Kolhapuri Bhel”. Mathurawasi has slightly sweeter “Pani Puri” and served in Bhalla instead of normal rounded puri.', 'FoodStuff/Amazingly-Bhel-Puri-768x768_2.jpg', 0),
(2, 'Bugga Sweets Lassi ', 'Baggas will serve you your last dahi wada laden in yogurt (Dahi) with spicy and tangy chutney showers. Lassi here is really thick and will surely satisfy your appetite.', 'FoodStuff/bagga_sweets1.png', 0),
(3, 'Sadhana Misal', 'A stronghold with cheery ambiance where the radiant aroma of sizzling flavors is in the air.  Designed with a village-setting, the hotel showcases hybrid birds and animals including Emu, Turkey, camels for visitors. The hotel is well-known in Nashik as ‘Chulivarchi Misal’.', 'FoodStuff/sathna-misal1.png', 0),
(4, 'Shamsundar Misal: ', 'Even though this hotel is situated near industrial area, their Misal pav is high on demand. Shamsundar Misal was one of the popular Misal point years ago. Down to increasing competition, the hotel must have lost its name but is striving hard to gain its name and fame by delivering a first class Misal.', 'FoodStuff/sham-sundar2.jpg', 0),
(6, 'Mamachya Mala', 'Mamachya Mala perfect for its delicious Misal, is moreover famous for Jalebis. Based on a village-setting, this is a real good place to be visited in weekends with family. The hotel situated in Makhmalabad-Mahsrul link road, will most of all, let you enjoy your Misal in a peaceful environment as is positioned in decentralized area.', 'FoodStuff/sham-sundar11.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `homesec1`
--

CREATE TABLE `homesec1` (
  `id` int(200) NOT NULL,
  `name` varchar(400) NOT NULL,
  `des` varchar(5000) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homesec1`
--

INSERT INTO `homesec1` (`id`, `name`, `des`, `img`, `active`) VALUES
(1, 'TRAMBAKESHWAR,NASHIK', 'It is an ancient Hindu temple in the town of Trimbak, in the Trimbakeshwar tehsil in the Nashik District of Maharashtra, India, 28 km from the city of Nashik and 40 km from nashik road. It is dedicated to the god Shiv and is one of the twelve Jyotirlingas, where the Hindu genealogy registers at Trimbakeshwar, Maharashtra are kept. The origin of the sacred Godavari river is near Trimbak. Kusavarta, a kunda (sacred pond) in the temple premises is the source of the Godavari River. The current temple was built by Peshwa Balaji Baji Rao.', 'homesec1/trambak1.jpg', 1),
(2, 'PANCHVATI, NASHIK', 'Holy land for the believers of Ramayana, Panchvati attracts a lot of pilgrims. A serene town located near Nasik, the site offers small sightings having a lot of significance in the epic of Ramayana. Given the legend of Panchvati, the place holds a lot oreligious significance even in the present day. Sites sucas the Kalaram Temple and the Sita Gufaa are on everpilgrims list. The Kumbh Mela takes place on the river banks of Godavari, and has a surplus of pilgrims from every corner of world during the occasion.', 'homesec1/1.jpg', 1),
(3, 'SAPTASHRUNGI GADH, Vani', 'This hill range situated 60 km from Nashik and forms a part of the Sahyadri range. It is a blend of the Sanskrit words \'sapta\' which means seven and \'shrung\' which means peak.which greatly add to the beauty of the hills. Not only are the hills incredible to look at, but the forests on the hills are loaded with medicinal herbs. In fact, as per the Hindu tradition, when Laxman was lying unconscious and could only be awakened by the \'sanjeevani\' herb, Lord Hanuman flew to these hills in search of the herb', 'homesec1/VANI1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `homesec2`
--

CREATE TABLE `homesec2` (
  `id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `img` varchar(500) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homesec2`
--

INSERT INTO `homesec2` (`id`, `name`, `des`, `img`, `active`) VALUES
(1, 'Nashik', 'Nashik has a personality of its own, due to its mythological, historical, social and cultural importance. The city is situated on the banks of the Godavari River, making it one of the holiest places for Hindus all over the world. Nashik has a rich historical past, as the mythology has it that Lord Rama, the King of Ayodhya, made Nashik his adobe during his 14 years in exile. At the same place Lord Laxman, by the wish of Lord Rama, cut the nose of “Shurpnakha” and thus this city was named as “Nashik”.In Kritayuga, Nashik was ‘Trikantak’, ‘Janasthana’ in Dwaparyuga and later in Kuliyuga it became ‘Navashikh’ or ‘Nashik’. Renowed poets like Valmiki, Kalidas and Bhavabhooti have paid rich tributes here. Nashik in 150 BC.was beleived to be the country’s largets market place. From 1487 A.D, this province came under the rule of Mughals and was known as ‘Gulchanabad’. It was also home of emperor Akbar and he has written at lenght about Nashik in ‘Ein-e-Akbari’. It was also known as the ‘Land o', 'homesec2/dham.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `homesec3`
--

CREATE TABLE `homesec3` (
  `id` int(100) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `name1` varchar(1000) NOT NULL,
  `name2` varchar(1000) NOT NULL,
  `name3` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homesec3`
--

INSERT INTO `homesec3` (`id`, `img`, `name1`, `name2`, `name3`) VALUES
(1, 'homesec3/homeCul.jpg', 'Nashik has a personality of its own, due to its mythological, historical, social and cultural importance. The city is situated on the banks of the Godavari River, making it one of the holiest places for Hindus all over the world. Nashik has a rich historical past, as the mythology has it that Lord Rama, ', 'the King of Ayodhya, made Nashik his adobe during his 14 years in exile.At the same place Lord Laxman, by the wish of Lord Rama, cut the nose of “Shurpnakha” and thus this city was named as “Nashik”.In Kritayuga, Nashik was ‘Trikantak’,', '‘Janasthana’ in Dwaparyuga and later in Kuliyuga it became ‘Navashikh’ or ‘Nashik’. Renowed poets like Valmiki, Kalidas and Bhavabhooti have paid rich tributes here. Nashik in 150 BC.was beleived to be the country’s largets market place. From 1487 A.D, this province came under the rule of Mughals and was known as ‘Gulchanabad’. It was also home of emperor Akbar and he has written at lenght about Nashik in ‘Ein-e-Akbari’.');

-- --------------------------------------------------------

--
-- Table structure for table `homesec4`
--

CREATE TABLE `homesec4` (
  `id` int(100) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homesec4`
--

INSERT INTO `homesec4` (`id`, `img`, `name`, `des`) VALUES
(1, 'j6.jpg', 'KOKNI DARBAR', 'This is the best place in nashik for non vegetarian. Taste of food here is mind blowing. U will not experience such a good taste anywhere in nashik for non veg. The most famous dish over here is chicken sizzlers.'),
(2, 'sadhna_misal.jpg', 'Sadhana Misal', 'One who enjoys misal is just gonna fall in love with Sadhana Misal in Nashik which is situated very close to Someshwar. Sadhana is just two and a half years old restaurant and has become so very famous in such a short while '),
(3, 'gulabjamun.jpg', 'bhudha halwai', 'This is well known mithai shop in Nashik. An iconic place in Nasik since decades.\r\n									Famous for its Jaleebi, but rest of the items are also very tasty.\r\n									One of the must visits in nashik, this is situated in the heart of the city in panchavati.');

-- --------------------------------------------------------

--
-- Table structure for table `homesec10`
--

CREATE TABLE `homesec10` (
  `id` int(200) NOT NULL,
  `img` varchar(400) NOT NULL,
  `des` varchar(500) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homesec10`
--

INSERT INTO `homesec10` (`id`, `img`, `des`, `active`) VALUES
(1, 'PRIMG3.jpg', 'Dada Saheb Phalke Smarak in Nashik : Is situated right down of Pandav pandav leni.  \r\n					This is a memorial of great visionary, Dadasaheb Phalke who was always committed towards edifying, devout and rational development.', 1),
(2, 'KumbhMela1.jpg', 'Kumbh Mela or Kumbha Mela : It is a major pilgrimage and festival in Hinduism. It is celebrated in a cycle of approximately 12 years at four river-bank the Prayag (Ganges-Yamuna-mythical Saraswati rivers confluence), Haridwar (Ganges), Nashik (Godavari), and Ujjain (Shipra).', 1),
(3, 'PRIMG5.jpg', 'Anjaneri Hills Nashik : Anjaneri Parvat is quite significant amongst the devotees as locals say that the cave on the top of the hill was the place where Goddess Anjana gave birth to Lord Hanuman. And that\'s how the mountain got its name.', 1),
(4, 'PRIMG4.jpg', 'Anjaneri Hills Nashik : Anjaneri Parvat is quite significant amongst the devotees as locals say that the cave on the top of the hill was the place where Goddess Anjana gave birth to Lord Hanuman. And that\'s how the mountain got its name.', 1),
(5, 'saputara.jpg', 'Saputara Hill Station – A perfect Hill Station for Monsoon : Saputra has situated around  80 km from Nashik City, is a beautiful and densely wooded hill station, ‘ Saputara’  situated in the “Dang” district of southern tip of Gujarat, India.', 1),
(6, 'PRIMG1.jpg', 'Sula Vineyards – The Vineyards Story & Resort Around : Sula has rapidly established itself as India’s leading premium wine company. \r\n					Known for its white and red wine, Sula has been winning kudos in their field and showing growth since their commencement.', 1),
(7, 'VANI1.jpg', 'Shree Saptshrungi Gad Vani : Shree Saptshrungi Gad is situated at a distance of 60 km from Nashik in Kalwan Tahsil.\r\n					The temple is situated at 4659 feet above sea level, on a hill surrounded by seven peaks. It is considered to be Ardha Shaktipeeth out of Sadetin Shakti Peeths in Maharashtra. ', 1),
(8, 'trambak1.jpg', 'Trimbakeshwar Nashik :It is one of the holy places of not only Maharashtra but the whole India is near Nashik. Trimbakeshwar is one of the twelve Jyotirlingaas of Lord Shiva.', 1),
(9, 'RamRath.jpeg', 'Ramnavmi Rath Yatrac : Ramnavmi Ratha Yatra is held during the festival of Janmotsava at the Sansthan Shri Kalaram Mandir at Panchavati which is dedicated to Lord Rama. The festival is which lasts for 15days begin from the first day of Chaitra till Chaitra Purnima.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `name`, `link`, `active`) VALUES
(1, 'Home', 'MainC/', 1),
(2, 'Destination', 'MainC/Dest', 1),
(3, 'FoodStuff', 'MainC/FoodStuff', 1),
(5, 'Culture', 'MainC/Culture', 1),
(6, 'About Us', 'MainC/AboutUs', 0),
(8, 'About us', 'MainC/AboutUs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(200) NOT NULL,
  `name` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `title`, `img`) VALUES
(1, 'home', 'NASHIK TOURISM', 'pages/1.mp4'),
(2, 'Destination', 'Nashik Tourism &mdash; Destination', 'pages/dham.jpg'),
(3, 'Culture', 'Nashik Tourism &mdash; Culture', 'pages/KumbhMela4.jpg'),
(4, 'About Us', 'Nashik Tourism &mdash; About Us', 'pages/PRIMG3.jpg'),
(5, 'Food Stuff', 'Nashik Tourism &mdash; FoodStuff', 'pages/j6.jpg'),
(6, 'Search Result', 'Nashik Tourism &mdash; Search Result', 'pages/j61.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(400) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'root', 'toor', '0'),
(2, 'kunal', '', ''),
(3, 'new', '', ''),
(7, 'who', '$2y$10$00hydAHb8Q/fFW1ydoVHEOuhzeVxqNVugmIDFBair1DU5tUttvJXu', ''),
(8, 'me', '$2y$10$rkLkVj2H1ac.OnCnVtWRL./D1rcNAfZJTdGW5PaE0YbMokVgX34Vq', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `culsec1`
--
ALTER TABLE `culsec1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `culsec2`
--
ALTER TABLE `culsec2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `culsec3`
--
ALTER TABLE `culsec3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `culsec4`
--
ALTER TABLE `culsec4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `culture`
--
ALTER TABLE `culture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `culturepage`
--
ALTER TABLE `culturepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destsec1`
--
ALTER TABLE `destsec1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destsec2`
--
ALTER TABLE `destsec2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destsec3`
--
ALTER TABLE `destsec3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destsec4`
--
ALTER TABLE `destsec4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destsec5`
--
ALTER TABLE `destsec5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destsec6`
--
ALTER TABLE `destsec6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destsec7`
--
ALTER TABLE `destsec7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodsec1`
--
ALTER TABLE `foodsec1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodsec2`
--
ALTER TABLE `foodsec2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodsec3`
--
ALTER TABLE `foodsec3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodsec4`
--
ALTER TABLE `foodsec4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodstuff`
--
ALTER TABLE `foodstuff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesec1`
--
ALTER TABLE `homesec1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesec2`
--
ALTER TABLE `homesec2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesec3`
--
ALTER TABLE `homesec3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesec4`
--
ALTER TABLE `homesec4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesec10`
--
ALTER TABLE `homesec10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `culsec1`
--
ALTER TABLE `culsec1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `culsec2`
--
ALTER TABLE `culsec2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `culsec3`
--
ALTER TABLE `culsec3`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `culsec4`
--
ALTER TABLE `culsec4`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `culture`
--
ALTER TABLE `culture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `culturepage`
--
ALTER TABLE `culturepage`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destsec2`
--
ALTER TABLE `destsec2`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foodsec1`
--
ALTER TABLE `foodsec1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foodsec2`
--
ALTER TABLE `foodsec2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foodsec3`
--
ALTER TABLE `foodsec3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foodsec4`
--
ALTER TABLE `foodsec4`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `foodstuff`
--
ALTER TABLE `foodstuff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `homesec1`
--
ALTER TABLE `homesec1`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `homesec2`
--
ALTER TABLE `homesec2`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homesec10`
--
ALTER TABLE `homesec10`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
