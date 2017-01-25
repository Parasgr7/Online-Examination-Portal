--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `1233`
--

CREATE TABLE `1233` (
  `ID` int(11) NOT NULL,
  `Question` varchar(20) NOT NULL,
  `Option1` varchar(20) NOT NULL,
  `Option2` varchar(20) NOT NULL,
  `Option3` varchar(20) NOT NULL,
  `Option4` varchar(20) NOT NULL,
  `Answer` varchar(20) NOT NULL,
  `Marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `S.no` int(20) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`S.no`, `Name`, `Password`) VALUES
(1, 'Paras', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `ID` int(11) NOT NULL,
  `Question` varchar(20) NOT NULL,
  `Option1` varchar(20) NOT NULL,
  `Option2` varchar(20) NOT NULL,
  `Option3` varchar(20) NOT NULL,
  `Option4` varchar(20) NOT NULL,
  `Answer` varchar(20) NOT NULL,
  `Marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cyber`
--

CREATE TABLE `cyber` (
  `ID` int(11) NOT NULL,
  `Question` varchar(20) NOT NULL,
  `Option1` varchar(20) NOT NULL,
  `Option2` varchar(20) NOT NULL,
  `Option3` varchar(20) NOT NULL,
  `Option4` varchar(20) NOT NULL,
  `Answer` varchar(20) NOT NULL,
  `Marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Username` varchar(15) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Retype Password` varchar(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Contactno.` int(12) NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL,
  `PinCode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Username`, `Password`, `Retype Password`, `Email`, `Contactno.`, `Address`, `City`, `PinCode`) VALUES
('a', '68053af2923e002', '68053af2923e002', 'a', 123, 'qwe', 'kjadsh', 123),
('Abhineet', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc', 'kinshu.sriv@gmail.co', 9999, '999', 'hqwfdy', 20),
('Ashu', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59a', 'slkfhslk', 0, 'kdhlfhlhsfhl', ';lsdhlasd', 123456),
('dklhashlkd', 'a384b6463fc216a5f8ecb6670f86456a', 'a384b6463fc216a', 'chljodhfodh', 2147483647, 'dihochhodisi', 'soi', 66564),
('Himanshu', '4122ea4f5490094', '4122ea4f5490094', 'himanshu', 0, 'himanshu', 'himanshu', 0),
('Kartik', '962012d09b8170d912f0669f6d7d9d07', '962012d09b8170d', 'sdjsagda', 0, 'dgfksagf', 'jjfgkgka', 0),
('lullu', '02c77002a0c6466', '02c77002a0c6466', 'padhhd@gmail.com', 2147483647, 'dfafgajsk', 'dsfsaafs', 223300),
('PARAS', '123456', '123456', 'para@gmail.com', 945763346, 'gzb', 'gzb', 123),
('Paru', '68053af2923e002', '68053af2923e002', 'parasgr484@gmail.com', 159874123, 'senior boys hostel 1 AKGEC\r\nLucknow cantt', 'lucknow', 226002),
('Praveen', '789456', '789456', 'parasgr484@gmail.com', 1593574862, 'senior boys hostel 1 AKGEC\r\nLucknow cantt', 'lucknow', 154789),
('qwer', '202cb962ac59075b964b07152d234b70', '202cb962ac59075', 'kfksdkhfksh', 456789123, 'jdggfjsgdj', 'lko', 123456),
('qwerty', '962012d09b8170d', '962012d09b8170d', 'zxczx', 0, 'xcxc', 'zxczxc', 1233),
('renu', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59a', 'syaskyak', 2147483647, 'asjdkadkd\r\nsaidakskja', 'jdadakdlal', 456789),
('Rohan', '202cb962ac59075', '202cb962ac59075', 'parasgr484@gmail.com', 2147483647, 'senior boys hostel 1 AKGEC\r\nLucknow cantt', 'lucknow', 226002),
('sha', '202cb962ac59075b964b07152d234b70', '202cb962ac59075', 'hh', 0, 'hh', 'hh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hacker`
--

CREATE TABLE `hacker` (
  `ID` int(11) NOT NULL,
  `Question` varchar(20) NOT NULL,
  `Option1` varchar(20) NOT NULL,
  `Option2` varchar(20) NOT NULL,
  `Option3` varchar(20) NOT NULL,
  `Option4` varchar(20) NOT NULL,
  `Answer` varchar(20) NOT NULL,
  `Marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qww`
--

CREATE TABLE `qww` (
  `sdasdad` date NOT NULL,
  `dvsfsd` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regdata`
--

CREATE TABLE `regdata` (
  `Username` varchar(15) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Retype Password` varchar(32) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Contactno.` int(15) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(20) NOT NULL,
  `PinCode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regdata`
--

INSERT INTO `regdata` (`Username`, `Password`, `Retype Password`, `Email`, `Contactno.`, `Address`, `City`, `PinCode`) VALUES
('pill', '68053af2923e00204c3ca7c6a3150cf7', '68053af2923e00204c3ca7c6a3150cf7', 'xzcxczx', 555441, 'sszcszc', 'xczcs', 85214);

-- --------------------------------------------------------

--
-- Table structure for table `submng`
--

CREATE TABLE `submng` (
  `Subject Name` varchar(10) NOT NULL,
  `Sub Des` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submng`
--

INSERT INTO `submng` (`Subject Name`, `Sub Des`) VALUES
('Physics', 'skjhdklflasflakflkas'),
('Physics', 'dkkdkdsahvkfa'),
('Chem', 'sxkjkjxhclklzzc'),
('Bio', 'gkgggkfjdd'),
('paras', 'hkhkkhkh'),
('paras', 'hkhkkhkh'),
('paras', 'hkhkkhkh'),
('paras', 'hkhkkhkh'),
('DLD', 'nlkklvhjhchgd'),
('Ds', 'dlfllfflksjflksfls'),
('lklfljd', 'rfoewo'),
('', ''),
('', ''),
('Humanities', 'art is my art\r\n'),
('Humanities', 'art is my art\r\n'),
('', ''),
('', ''),
('ddd', 'asda'),
('', ''),
('Humanities', 'gygy'),
('qwe', 'fgdfgzs'),
('maths3', 'askdgsdkha'),
('rdhdx', 'rdys'),
('dadkkah', 'kdhfykaslfs'),
('DAA', 'HArd');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `ID` int(11) NOT NULL,
  `Question` varchar(50) NOT NULL,
  `Option1` varchar(20) NOT NULL,
  `Option2` varchar(20) NOT NULL,
  `Option3` varchar(20) NOT NULL,
  `Option4` varchar(20) NOT NULL,
  `Answer` varchar(20) NOT NULL,
  `Marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`ID`, `Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`, `Marks`) VALUES
(1, 'how is hero', 'me', 'you', 'him', 'they', 'me', 5),
(2, 'who is obama', 'President', 'PM', 'CM', 'DM', 'President', 5),
(3, 'How is dkhdk', 'sh', 'lhsd', 'ldkh', 'eh', 'lhsd', 5),
(4, 'sjwgs', 'sg', 'hidhi', 'hkhdsk', 'ckhhs', 'hidhi', 1),
(5, 'kjdgfsk', 'kjegfgk', 'ewgkrgw', 'kjgewkrg', 'kweg', 'kjegfgk', 4),
(6, 'kdkahdkahk', 'qwe', 'dsd', 'sa', 'sad', 'dsd', 5);

-- --------------------------------------------------------

--
-- Table structure for table `testdef`
--

CREATE TABLE `testdef` (
  `desc1` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `code` varchar(20) NOT NULL,
  `validity` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testdef`
--

INSERT INTO `testdef` (`desc1`, `name`, `code`, `validity`) VALUES
('DS', 'yuuuiiii', 'hacker', 'very long'),
('sfawf::qee', 'PHYSICS', '1233', '2016-09-20 to 2016-09-29'),
('::', '', '', ' to '),
('sdfcsa::csa', 'CYBER', 'Cyber', '2016-09-27 to 2016-09-29'),
('sdfcsa::csa', 'CYBER', 'Cyber', '2016-09-27 to 2016-09-29'),
('sdfcsa::csa', 'CYBER', 'Cyber', '2016-09-27 to 2016-09-29'),
('sdfcsa::csa', 'CYBER', 'Cyber', '2016-09-27 to 2016-09-29'),
('sdfcsa::csa', 'CYBER', 'Cyber', '2016-09-27 to 2016-09-29'),
('sdfcsa::csa', 'CYBER', 'Cyber', '2016-09-27 to 2016-09-29'),
('sdfcsa::csa', 'CYBER', 'Cyber', '2016-09-27 to 2016-09-29'),
('herhksh::wjqgejg', 'SANSKRIT', 'codes', '2016-09-14 to 2016-09-28'),
('::', 'HINDI', '', ' to ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1233`
--
ALTER TABLE `1233`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`S.no`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cyber`
--
ALTER TABLE `cyber`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `hacker`
--
ALTER TABLE `hacker`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1233`
--
ALTER TABLE `1233`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `S.no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cyber`
--
ALTER TABLE `cyber`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hacker`
--
ALTER TABLE `hacker`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
