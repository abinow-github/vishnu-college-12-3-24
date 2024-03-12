-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2024 at 12:26 AM
-- Server version: 8.0.32-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vishnuayurvedaco_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'vishnuayurveda', 'vishnu6354dfh5d4ht6');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `image` text COLLATE utf8mb4_general_ci NOT NULL,
  `caption` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `caption`) VALUES
(19, '../images/d39b07b5efb27bdb706ef31804dadca2.jpg', 'image'),
(20, '../images/5312bf6d4429e5dd606526e74d875ccb.jpg', 'image'),
(22, '../images/6e45d0c5579fa6383ba385b24688a0da.jpg', 'image'),
(23, '../images/4215e805be9c6ba4097b0807c53cae73.jpg', 'image'),
(24, '../images/e08f52f5b94cab72d8db8395a7a54085.jpg', 'image'),
(25, '../images/742a3bcdb1fca81f7aac5fcb94af4694.jpg', 'image'),
(26, '../images/1fbf1d247d2dd73c77d914c91440a880.jpg', 'image'),
(27, '../images/229815bb1feac8125df91a54a4dff956.jpg', 'image'),
(28, '../images/7fa490d7d6ee7550b6d7de026bf4f440.jpg', 'image'),
(29, '../images/6e85341018d7f2c7678dc388d173f769.jpg', 'image'),
(30, '../images/a78ae8c478a18cbe552f7dfa9ea162eb.jpg', 'image'),
(31, '../images/8291e4cc3938ce0f7992da7db025a133.jpg', 'image'),
(32, '../images/fe660394c06820dc31f9c8b36539105e.jpg', 'image'),
(33, '../images/0230f6cc9429f231d52e80c7800b358e.jpg', 'image'),
(34, '../images/b109b592e3144f772cd5edfff51e4dce.jpg', 'image'),
(35, '../images/e9d803c6a1bcbdb8e18501f08836c133.jpg', 'image'),
(36, '../images/b20e0627079329af4951b511eeda4665.jpg', 'image'),
(37, '../images/6243175366e9d932f84d661692966848.jpg', 'image'),
(38, '../images/7666bdcb0009bfeaafcf37a6597a313a.jpg', 'Ayurveda day'),
(41, '../images/75f0dca9ca2b30195bb497a746403bd9.jpg', ''),
(42, '../images/f53b5e21329439ad03a85b76397992ba.jpg', ''),
(43, '../images/6caaee169e4bff14274c1756f8aaf41d.jpg', ''),
(44, '../images/5d32b8a568efba0d7e5263a9245ba288.jpg', ''),
(52, '../images/0a2c08d25c2641063d0c417a4631cf90.jpg', ''),
(53, '../images/2ce79a24124ab7c8f1e84f4f3efab5f3.jpg', ''),
(54, '../images/987f09b132c6164fc6443414d570d945.jpg', ''),
(60, '../images/59563daeb83ba2e1ab1d74dd13629602.jpg', ''),
(61, '../images/46530b19fb5f23ab4e4b4da6825696d3.jpg', ''),
(62, '../images/f4aaa1d8bad4d77a3eec13cba1c26d6f.jpg', ''),
(63, '../images/602c1a3e8a2c4d9bc9b9f445b2f3d651.jpg', ''),
(64, '../images/7365c90e4c7e98ed4e310e615c662c12.jpg', ''),
(65, '../images/46fdbe452178c5b447593cc9313156ee.jpg', ''),
(66, '../images/aa64c90644efdb373050ec3961bea8db.jpg', ''),
(67, '../images/b79fda9388b3bbd3b15f7aa3a1aef1ee.jpg', ''),
(68, '../images/280c9ba75ea7392d80f9f0559dd74699.jpg', ''),
(69, '../images/4f60741e6decb693611b698ca3b18d59.jpg', ''),
(70, '../images/994757163cb497c14202c15a7f079317.jpg', ''),
(71, '../images/38496202a9af025f60922acacdab314f.jpg', ''),
(72, '../images/78129b6fbf99e11aa45ac86ff06cf4db.jpg', ''),
(73, '../images/7935275ba9f6680d0b8822afeba75b1f.jpg', ''),
(74, '../images/03746e750d98b32655a5a8a36cc43109.jpg', ''),
(75, '../images/5eff37f6f428d9a094072c39cc9e16ac.jpg', ''),
(76, '../images/8064a2c0b4ce350340abbc06e8f86c93.jpg', ''),
(77, '../images/1f98c9f0cad5b9aa688380ab6796145c.jpg', ''),
(78, '../images/b5b52dca9fbced06c3affbd0a2673b5f.jpg', ''),
(79, '../images/5e6b0d787241f2b05e21555925d96776.jpg', ''),
(80, '../images/c8de69f9aa839a2edfd673f85d7187be.jpg', ''),
(82, '../images/1651021bfb11da20273ac6c78398d4fa.jpg', ''),
(83, '../images/731bddb26ee8ae9a5b6e3c76c003a30b.jpg', ''),
(84, '../images/32dfd916c9663d6850694f1ddd4606bc.jpg', ''),
(85, '../images/b39eaee24f57e322c80edfeb34ea4669.jpg', ''),
(86, '../images/454560fa149727172a1dbcffab982841.jpg', ''),
(87, '../images/970ccf66187dd539d9e8fd6bf1d82023.jpg', ''),
(88, '../images/37b34332b4f8111b422a1b779dd325df.jpg', ''),
(89, '../images/0930425254fcda62ddfa3031deac77b5.jpg', ''),
(90, '../images/2d1b7dbd56ade71bb5f047afc4928d9a.jpg', ''),
(91, '../images/38b3cd2c648159862895f22f08fa69e7.jpg', ''),
(92, '../images/d1ed2a1a0de2125a0623cc1556f7f826.jpg', ''),
(93, '../images/71f5290293d67d6a9a23aaeb9d46b14e.jpg', ''),
(94, '../images/3dd4146403a8d259b96810833f6ade9f.jpg', ''),
(95, '../images/a20b1a958f5fbce89664323e531c0386.jpg', ''),
(96, '../images/c522d4e86edaa2aaeeb42c64b9d6cbab.jpg', ''),
(97, '../images/702e114568add9c4a7468a83578025ad.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `images` text COLLATE utf8mb4_general_ci,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `images`, `title`, `date`, `text`) VALUES
(9, '1585649024_02-04-2024_0715am.jpg,2065343569_02-04-2024_0715am.jpg', 'Retirement function ', '2024-01-31', '<p>6B.ng)0.<br>@3pmn.Jtau<br>CUD. 41-0<br>@ånejosmo god. en<br>sl. 013, 4.0.<br>cmoo. (Tualcü,<br>caco. DB.<br>anmo\'ö\'å1Dd,<br>moolAJ.</p>'),
(10, '1197427523_01-31-2024_0350am.jpg,988620289_01-31-2024_0350am.jpg,1408232111_01-31-2024_0350am.jpg,796569829_01-31-2024_0350am.jpg', 'Ayurveda day celebrations ', '2023-11-14', ''),
(11, '799409653_02-04-2024_0649am.jpg,562073718_02-04-2024_0649am.jpg,1775235283_02-04-2024_0649am.jpg', 'Where can I get some?', '2024-01-31', ''),
(14, 'd6f263a3b8c40413e30b8e8528db05ab.jpg,69f41af37d8a33d762d10a9e1e2a48c8.jpg,de4d1394c7d011f4bcbf4664b4ea4f78.jpg', 'College day celebrations ', '2024-02-06', ''),
(16, 'daf9d4317c9fdcf1c6afd907a026da3e.jpg,c9d3bebdeee2d745cb30b55d917b2c03.jpg', 'College day celebrations ', '2024-02-06', ''),
(17, 'd113e8381539bb5ffa3547183db0d507.jpg', '', '2024-02-06', ''),
(18, 'bf77de92ba34d0efc708e16db036d688.png', 'നിളാ ആരതിയും നിളാ ശുചീകരണവും നടത്തി ആയുര്‍വേദ കോളേജ്‌ വിദ്യാര്‍ഥികള്‍', '2024-02-10', '<p>ചെറുതുരുത്തി : എന്‍എസ്‌എസ്‌ സപൃൂദിന ക്യാമ്പിന്റെ ഭാഗമായി നിളാ പഠന ഗവേഷണ കേന്ദ്രത്തിന്റെ സഹായത്തോടെ ഭാരതപ്പുഴ ശുചീകരണവും നിളാ സംരക്ഷണം പ്രതിജ്ഞയും ഷൊര്‍ണൂര്‍ വിയ്കു ആയുര്‍വേദ കോളേജിന്റെ നേതൃത്വത്തില്‍ നടത്തി.&nbsp;</p>'),
(25, 'fd6fd14fa527e6c939588a7036aea472.jpg,e128ce3e610dec12dfc4ef0d63d05b66.jpg,7b20c609c5a97c7590765212bfccf65f.jpg,bb2875540c7abdafffd6e9a60a078b26.jpg,e84b1fcf160477384c1fa756e48f0032.jpg', '', '2024-02-19', ''),
(29, '4b897d59e917f2634fac364a2a703fd5.jpg', '', '2024-02-19', ''),
(30, '81132a12be3c46e8c02f3c1a70302652.jpg,3eb9a35822d98f23ddfd87289280f2b7.jpg', '', '2024-02-19', ''),
(31, '22a38c395b84685d0dcfde95d3c7c56c.jpg', '', '2024-02-19', ''),
(32, '329cdffa7c4e4e97b19937a03e188eca.jpg', '', '2024-02-19', ''),
(33, 'aa7b81c64d0c91965beb42d3c8ec8bf0.jpg', '', '2024-02-19', ''),
(34, 'a6da1122628988ab188cd61304f07b45.jpg,e8178898ab61d4cf8161b2f00da1e98b.jpg,29dd770a1d1fb0a1b75d7200ee5deee7.jpg', '', '2024-02-21', ''),
(35, 'ce03bbc99cb45719edce8dcb5600bda3.jpg', '', '2024-02-21', ''),
(36, '459b160c6e295893e732c620a6fc6e4d.jpg', '', '2024-02-21', ''),
(39, '9177900be5a161e5070c47a8b24e61fb.jpg,8932bfce4bd91e29414c780f5e9206c9.jpg,a32d31583cfc17fc34855f09cdd3a307.jpg,e40e656138ffad0902341af2d2ea6866.jpg', '', '2024-03-02', ''),
(41, '229015d571ae5baa62309d092d582f02.jpg,7cae4cdeba142c03f647ab2471bb32ac.jpg,57ec815411f2324502497b8553f36406.jpg', '', '2024-03-02', ''),
(42, 'fa93f7486d492231aa99df5a7d21c83b.jpg,1c279f824eb7b89d282ea6ca53dfa573.jpg', '', '2024-03-02', ''),
(43, '81b00d9fc29f25fb234de3db029d59ba.jpg,0cbfe032afa6eedef736d21655bee937.jpg', '', '2024-03-02', ''),
(44, '47370aa7eeebdc3d5c4a4e7198ad4b90.jpg,6c90d30fca44d19dcecba0d31da7f2a1.jpg', '', '2024-03-02', ''),
(45, '0a56b0ae5f5017d78d19a35614a4af31.jpg', '', '2024-03-02', ''),
(46, '7f69d9200790ab2712005ece3fc616b8.jpg', '', '2024-03-03', ''),
(47, 'd43a1a8fde0fd21123afe9eb5c78861c.jpg', '', '2024-03-06', ''),
(48, '20d61f360df58b4784555abcf96ef3d4.jpg', '', '2024-03-07', ''),
(51, '9b5afdf53e51c640b62602098f2543c9.jpg', '', '2024-03-07', ''),
(53, '074440064bb706698af6d3072e69a76b.jpg', '', '2024-03-07', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
