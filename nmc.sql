-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 06:01 PM
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
-- Database: `nmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `culturepage`
--

CREATE TABLE `culturepage` (
  `id` int(200) NOT NULL,
  `name` varchar(4000) NOT NULL,
  `img` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `culturepage`
--

INSERT INTO `culturepage` (`id`, `name`, `img`) VALUES
(1, 'Pande Mithai', 'pande_mithai.jpg'),
(2, 'Samarath Juice Centre', 'samartha_juice.jpg'),
(3, 'Dairy Don', 'j3.jpeg'),
(4, 'Rock n Rolls', 'wraproti.jpg'),
(5, 'Sadhna misal', 'sadhna_misal.jpg'),
(6, 'Kokni Darbar', 'j6.jpg'),
(7, 'Akbar Soda', 'soda.png'),
(8, 'Budha Halwai', 'gulabjamun.jpg'),
(9, 'Kondaji Chivda', 'Kondaji_Chivda.jpg'),
(10, 'Sayantara', 'sayantara.jpg'),
(11, 'Coffee', 'coffee.jpg'),
(12, 'Chienese', 'chiness.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `desattractions`
--

CREATE TABLE `desattractions` (
  `id` int(200) NOT NULL,
  `con_name` varchar(100) NOT NULL,
  `con_des` varchar(5000) NOT NULL,
  `con_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desattractions`
--

INSERT INTO `desattractions` (`id`, `con_name`, `con_des`, `con_img`) VALUES
(1, 'TRAMBAKESHWAR', 'Counted as the holiest temple of India, the Trimbakeshwar Temple houses one of the most important twelve Jyotirlingas, a form of Lord Shiva.', 'trambak1.jpg'),
(2, 'PANCHVATI', 'Nothing short of holy for the ardent belivers of Ramayana, this site gets a lots of visitors in the form of pilgrims and religious travellers.', '1.jpg'),
(3, 'SAPTSHRUNGI GAD', 'Situated on a hill range, consisting of seven hills, Saptashrungi is a site of religious significance for Hindus. The drive to the temple is quite scenic, especially during the monsoon season.', 'VANI1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `destsec2`
--

CREATE TABLE `destsec2` (
  `id` int(200) NOT NULL,
  `name` varchar(400) NOT NULL,
  `img` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destsec2`
--

INSERT INTO `destsec2` (`id`, `name`, `img`) VALUES
(2, 'Phalake Smarak', 'PRIMG3.jpg'),
(3, 'Panchwati', '1.jpg'),
(4, 'Panduv Leni', 'pandavlene.jpg'),
(5, 'Kala-Ram Mandir', 'kalaram.jpg'),
(6, 'Anjeneri', 'PRIMG5.jpg'),
(8, 'Trambkeshwar', 'trambak1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(200) NOT NULL,
  `name` varchar(400) NOT NULL,
  `des` varchar(5000) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `name`, `des`, `img`) VALUES
(1, 'TRAMBAKESHWAR,nashik', 'It is an ancient Hindu temple in the town of Trimbak, in the Trimbakeshwar tehsil in the Nashik District of Maharashtra, India, 28 km from the city of Nashik and 40 km from nashik road. It is dedicated to the god Shiv and is one of the twelve Jyotirlingas, where the Hindu genealogy registers at Trimbakeshwar, Maharashtra are kept. The origin of the sacred Godavari river is near Trimbak. Kusavarta, a kunda (sacred pond) in the temple premises is the source of the Godavari River. The current temple was built by Peshwa Balaji Baji Rao.', 'trambak1.jpg'),
(2, 'PANCHVATI, NASHIK', 'Holy land for the believers of Ramayana, Panchvati attracts a lot of pilgrims. A serene town located near Nasik, the site offers small sightings having a lot of significance in the epic of Ramayana. Given the legend of Panchvati, the place holds a lot oreligious significance even in the present day. Sites sucas the Kalaram Temple and the Sita Gufaa are on everpilgrims list. The Kumbh Mela takes place on the river banks of Godavari, and has a surplus of pilgrims from every corner of world during the occasion.', '1.jpg'),
(3, 'SAPTASHRUNGI GADH, Vani', 'This hill range situated 60 km from Nashik and forms a part of the Sahyadri range. It is a blend of the Sanskrit words \'sapta\' which means seven and \'shrung\' which means peak.which greatly add to the beauty of the hills. Not only are the hills incredible to look at, but the forests on the hills are loaded with medicinal herbs. In fact, as per the Hindu tradition, when Laxman was lying unconscious and could only be awakened by the \'sanjeevani\' herb, Lord Hanuman flew to these hills in search of the herb', 'VANI1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homesec2`
--

CREATE TABLE `homesec2` (
  `id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homesec2`
--

INSERT INTO `homesec2` (`id`, `name`, `des`, `pic`) VALUES
(1, 'Nashik', 'Nashik has a personality of its own, due to its mythological, historical, social and cultural importance. The city is situated on the banks of the Godavari River, making it one of the holiest places for Hindus all over the world. Nashik has a rich historical past, as the mythology has it that Lord Rama, the King of Ayodhya, made Nashik his adobe during his 14 years in exile. At the same place Lord Laxman, by the wish of Lord Rama, cut the nose of “Shurpnakha” and thus this city was named as “Nashik”.In Kritayuga, Nashik was ‘Trikantak’, ‘Janasthana’ in Dwaparyuga and later in Kuliyuga it became ‘Navashikh’ or ‘Nashik’. Renowed poets like Valmiki, Kalidas and Bhavabhooti have paid rich tributes here. Nashik in 150 BC.was beleived to be the country’s largets market place. From 1487 A.D, this province came under the rule of Mughals and was known as ‘Gulchanabad’. It was also home of emperor Akbar and he has written at lenght about Nashik in ‘Ein-e-Akbari’. It was also known as the ‘Land o', 'dham.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homesec3`
--

CREATE TABLE `homesec3` (
  `id` int(200) NOT NULL,
  `img` varchar(400) NOT NULL,
  `des` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homesec3`
--

INSERT INTO `homesec3` (`id`, `img`, `des`) VALUES
(1, 'PRIMG3.jpg', 'Dada Saheb Phalke Smarak in Nashik : Is situated right down of Pandav pandav leni.  \r\n					This is a memorial of great visionary, Dadasaheb Phalke who was always committed towards edifying, devout and rational development.'),
(2, 'KumbhMela1.jpg', 'Kumbh Mela or Kumbha Mela : It is a major pilgrimage and festival in Hinduism. It is celebrated in a cycle of approximately 12 years at four river-bank the Prayag (Ganges-Yamuna-mythical Saraswati rivers confluence), Haridwar (Ganges), Nashik (Godavari), and Ujjain (Shipra).'),
(3, 'PRIMG5.jpg', 'Anjaneri Hills Nashik : Anjaneri Parvat is quite significant amongst the devotees as locals say that the cave on the top of the hill was the place where Goddess Anjana gave birth to Lord Hanuman. And that\'s how the mountain got its name.'),
(4, 'PRIMG4.jpg', 'Anjaneri Hills Nashik : Anjaneri Parvat is quite significant amongst the devotees as locals say that the cave on the top of the hill was the place where Goddess Anjana gave birth to Lord Hanuman. And that\'s how the mountain got its name.'),
(5, 'saputara.jpg', 'Saputara Hill Station – A perfect Hill Station for Monsoon : Saputra has situated around  80 km from Nashik City, is a beautiful and densely wooded hill station, ‘ Saputara’  situated in the “Dang” district of southern tip of Gujarat, India.'),
(6, 'PRIMG1.jpg', 'Sula Vineyards – The Vineyards Story & Resort Around : Sula has rapidly established itself as India’s leading premium wine company. \r\n					Known for its white and red wine, Sula has been winning kudos in their field and showing growth since their commencement.'),
(7, 'VANI1.jpg', 'Shree Saptshrungi Gad Vani : Shree Saptshrungi Gad is situated at a distance of 60 km from Nashik in Kalwan Tahsil.\r\n					The temple is situated at 4659 feet above sea level, on a hill surrounded by seven peaks. It is considered to be Ardha Shaktipeeth out of Sadetin Shakti Peeths in Maharashtra. '),
(8, 'trambak1.jpg', 'Trimbakeshwar Nashik :It is one of the holy places of not only Maharashtra but the whole India is near Nashik. Trimbakeshwar is one of the twelve Jyotirlingaas of Lord Shiva.'),
(9, 'RamRath.jpeg', 'Ramnavmi Rath Yatrac : Ramnavmi Ratha Yatra is held during the festival of Janmotsava at the Sansthan Shri Kalaram Mandir at Panchavati which is dedicated to Lord Rama. The festival is which lasts for 15days begin from the first day of Chaitra till Chaitra Purnima.');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(200) NOT NULL,
  `name` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `backgroundImf` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `title`, `backgroundImf`) VALUES
(1, 'home', 'NASHIK TOURISM', '1.mp4'),
(2, 'Destination', 'Nashik Tourism &mdash; Destination', 'dham.jpg'),
(3, 'Culture', 'Nashik Tourism &mdash; Culture', 'j6.jpg'),
(4, 'About Us', 'Nashik Tourism &mdash; About Us', 'PRIMG3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'root', 'toor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `culturepage`
--
ALTER TABLE `culturepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desattractions`
--
ALTER TABLE `desattractions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destsec2`
--
ALTER TABLE `destsec2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
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
-- AUTO_INCREMENT for table `culturepage`
--
ALTER TABLE `culturepage`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `desattractions`
--
ALTER TABLE `desattractions`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destsec2`
--
ALTER TABLE `destsec2`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homesec2`
--
ALTER TABLE `homesec2`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homesec3`
--
ALTER TABLE `homesec3`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
