-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 05:53 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gain&share`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `password`) VALUES
(1, 'Shru', 'Shruu123'),
(2, 'Anshul', 'ansh810'),
(3, 'Chinu', 'Chinu123'),
(4, 'Aishwarya', 'aish99');

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE `ans` (
  `aid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `adate` date NOT NULL,
  `atime` time NOT NULL,
  `ansq` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`aid`, `qid`, `uid`, `adate`, `atime`, `ansq`) VALUES
(1, 1, 1, '2021-01-31', '13:10:04', 'Browse to your phpMyAdmin URL using your Internet Web Browser, and login using your root or dba user login as shown. In the create database field type in a name for your database. Leave the collation drop down box if you wish to use the default MySQL schema collation. Click Create.'),
(2, 4, 2, '2021-01-28', '00:00:00', '1)Easy to code: Python is a high-level programming language. \r\n2)Free and Open Source: \r\n3)Object-Oriented Language: \r\n4)GUI Programming Support: '),
(3, 5, 4, '2021-01-14', '04:25:00', 'Python is an interpreted, object-oriented, high-level programming language with dynamic semantics.'),
(4, 6, 6, '2021-01-07', '04:30:00', ' Modules refer to a file containing Python statements and definitions. A file containing Python code, for example: example.py , is called a module, and its module name would be example '),
(5, 7, 8, '2021-09-28', '03:07:00', 'In computer science, a data structure is a data organization, management, and storage format that enables efficient access and modification'),
(6, 8, 7, '2020-08-26', '04:45:00', 'In linear data structure, data elements are sequentially connected and each element is traversable through a single run. In non-linear data structure, data elements are hierarchically connected and are present at various levels. .'),
(7, 8, 10, '2021-08-28', '07:30:00', 'Data structure where data elements are arranged sequentially or linearly where the elements are attached to its previous and next adjacent in what is called a linear data structure. \r\nData structures where data elements are not arranged sequentially or linearly are called non-linear data structures'),
(8, 8, 9, '2021-01-30', '05:45:00', '. The crucial difference between them is that the linear data structure arranges the data into a sequence and follow some sort of order. Whereas, the non-linear data structure does not organize the data in a sequential manner.'),
(9, 9, 5, '2020-07-24', '07:30:00', ' A stack is a data structure used to store a collection of objects. Individual items can be added and stored in a stack using a push operation. LIFO stacks, for example, can be used to retrieve recently used objects, from a cache.'),
(10, 10, 3, '0000-00-00', '09:45:00', 'PEAR is short for \"PHP Extension and Application Repository\" and is pronounced just like the fruit. The purpose of PEAR is to provide: A structured library of open-source code for PHP users. A system for code distribution and package maintenance.'),
(11, 11, 4, '2020-05-15', '08:25:00', 'A PHP framework provides a basic structure for streamlining the development of web apps. We use them because they speed up the development process.\r\n\r\nAbove all, the responsiveness of websites and applications built using PHP frameworks helps businesses fulfill their performance needs. So there’s no doubt that PHP frameworks will continue gaining attention and popularity in 2019.'),
(12, 12, 2, '2020-05-25', '04:25:00', 'Wrapper classes provide a way to use primitive data types (int, boolean, etc..) as objects.'),
(13, 12, 6, '2021-01-30', '04:25:00', 'The wrapper class in Java provides the mechanism to convert primitive into object and object into primitive.'),
(14, 12, 8, '2020-05-28', '08:56:00', 'A Wrapper class is a class whose object wraps or contains primitive data types. When we create an object to a wrapper class, it contains a field and in this field, we can store primitive data types. '),
(15, 13, 4, '2020-08-24', '04:30:00', 'A constructor in Java is a special method that is used to initialize objects. The constructor is called when an object of a class is created.'),
(16, 14, 1, '2020-07-25', '05:45:00', ' It stores data in tables.\r\n- Tables have rows and column.\r\n- These tables are created using SQL.\r\n- And data from these tables are also retrieved using SQL.'),
(17, 16, 7, '2020-03-21', '04:30:00', 'Cyber-security researchers have identified a total of at least 57 different ways in which cyber-attacks can have a negative impact on individuals, businesses and even nations, ranging from threats to life, causing depression, regulatory fines or disrupting daily activities'),
(18, 18, 6, '2020-04-28', '04:25:00', 'These three letters stand for confidentiality, integrity, and availability, otherwise known as the CIA triad. Together, these three principles form the cornerstone of any organization\'s security infrastructure; in fact, they (should) function as goals and objectives for every security'),
(19, 19, 5, '2020-05-29', '04:30:00', 'WebKit is a web browser engine used by browsers such as Safari and Chrome. You can make use of WebKit features such as animation, transform, transition, and more through the use of the -webkit prefix in your CSS.'),
(20, 20, 4, '2020-08-05', '03:07:00', 'The CSS Box Model All HTML elements can be considered as boxes. In CSS, the term \"box model\" is used when talking about design and layout. The CSS box model is essentially a box that wraps around every HTML element. It consists of: margins, borders, padding, and the actual content.'),
(21, 21, 10, '2020-07-28', '07:30:00', 'Media API. ...\r\nText Track API. ...\r\nDrag and Drop. ...\r\nOffline Web Applications/Application Cache. ...\r\nUser Interaction. ...\r\nHistory. ...\r\nMIME type and protocol handler registration. ...\r\nAPIs in the WHATWG specification.'),
(22, 22, 2, '2020-05-05', '05:45:00', 'The Unified Modeling Language (UML) is a general-purpose, developmental, modeling language in the field of software engineering that is intended to provide a standard way to visualize the design of a system.'),
(23, 23, 7, '2020-08-29', '04:25:00', 'In UML modeling, a relationship is a connection between two or more UML model elements that adds semantic information to a model. ... An abstraction relationship is a dependency between model elements that represent the same concept at different levels of abstraction or from different viewpoints.'),
(24, 24, 4, '2020-01-16', '04:45:00', 'A static object diagram is an instance of a class diagram; it shows a snapshot of the detailed state of a system at a point in time.\" It also stated that object diagram is \"a class diagram with objects and no classes.\" UML 2.4 specification simply provides no definition of object diagram.'),
(62, 3, 5, '2021-02-08', '18:36:21', 'Stands for \"Relational Database Management System.\" An RDBMS is a DBMS designed specifically for relational databases. A relational database refers to a database that stores data in a structured format, using rows and columns. This makes it easy to locate and access specific values within the database.'),
(68, 2, 10, '2021-02-08', '19:16:35', 'The JDK is a key platform component for building Java applications. At its heart is the Java compiler. IDG / Oracle / Vasabii / Getty Images. The Java Development Kit (JDK) is one of three core technology packages used in Java programming, along with the JVM (Java Virtual Machine) and the JRE (Java Runtime Environment)'),
(69, 3, 1, '2021-02-08', '22:41:35', 'Stands for \"Relational Database Management System.\" An RDBMS is a DBMS designed specifically for relational databases. A relational database refers to a database that stores data in a structured format, using rows and columns. This makes it easy to locate and access specific values within the database.'),
(70, 3, 7, '2021-02-08', '22:52:48', 'While a relational database describes the type of database an RDMBS manages, the RDBMS refers to the database program itself.'),
(71, 26, 9, '2021-02-13', '16:56:31', 'Python is a high-level programming language designed to be easy to read and simple to implement. It is open source, which means it is free to use, even for commercial applications.'),
(73, 3, 2, '2021-02-14', '15:38:09', 'It shows the relationship between the data in the tables. ');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `catname` varchar(30) NOT NULL,
  `catimage` varchar(200) NOT NULL,
  `catdesc` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `catname`, `catimage`, `catdesc`, `isactive`) VALUES
(1, 'Python', '', 'Python is a programming language.', 1),
(2, 'Banking', 'table.jpg', 'books of accounting', 0),
(3, 'PHP', 'b1.png', 'programming language', 1),
(4, 'JAVA', '', 'Java is a programming language', 1),
(5, 'RDBMS', '', 'It shows the relationship of the data in database', 1),
(6, 'Accounting', '', 'Accounting is a process of recording transactions.', 0),
(7, 'Network Security', '', 'Network Security is a broad term that covers a multitude of technologies, devices and processes.\r\n', 1),
(8, 'Web Technology', '', 'Web technology gives us a way to interact with hosted information, like websites.', 1),
(9, 'Data Structures', '', 'Data structure is a data organization, management, and storage format that enables efficient access ', 1),
(10, 'Unified Modelling Language', '', 'UML is a general purpose, developmental, modelling language in the field of software engineering.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `conid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`conid`, `name`, `email`, `message`) VALUES
(1, 'Ashish', 'ashishkumar@gmail.com', 'This site is very useful to solve our doubts.'),
(2, 'Vikash', 'vikashs@gmail.com', 'With the help of these site the language is used is very understandable.');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `qid` int(11) NOT NULL,
  `qname` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `qdate` date NOT NULL,
  `qtime` time NOT NULL,
  `qstatus` int(11) NOT NULL DEFAULT '0',
  `qimg` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`qid`, `qname`, `category`, `qdate`, `qtime`, `qstatus`, `qimg`) VALUES
(1, 'How to create database in phpmyadmin?', 'PHP', '2021-01-30', '19:31:51', 1, ''),
(2, 'What is JDK?', 'JAVA', '2021-01-30', '23:03:48', 1, ''),
(3, 'What is the basic concept of rdbms?', 'RDBMS', '2021-01-30', '23:06:08', 4, ''),
(4, 'What are the key features of python?', 'Python', '2021-01-25', '04:46:00', 1, NULL),
(5, 'What type of language is python?', 'Python', '2021-01-09', '03:22:00', 1, NULL),
(6, 'What are python modules?', 'Python', '2021-01-04', '12:47:00', 1, NULL),
(7, 'What is a data structure?', 'Data structure', '2021-09-25', '11:24:00', 1, NULL),
(8, 'What are linear and non-linear data structures?', 'Data structures', '2020-08-25', '03:43:00', 3, NULL),
(9, 'What is stack and where it can be used?', 'Data structure', '2020-07-21', '12:08:00', 1, NULL),
(10, 'What does PEAR stand for?', 'PHP', '2020-06-12', '05:05:32', 1, NULL),
(11, 'What are popular frameworks in php?', 'PHP', '2020-05-13', '07:04:00', 1, NULL),
(12, 'What are wrapper classes in java?', 'JAVA', '2020-05-21', '09:07:04', 3, NULL),
(13, 'What are constructors in java?', 'JAVA', '2020-08-21', '02:13:00', 1, NULL),
(14, 'What are different features of rdbms?', 'RDBMS', '2020-07-23', '05:36:00', 1, NULL),
(15, 'Explain the E-R model?', 'RDBMS', '2020-08-25', '04:32:00', 0, NULL),
(16, 'What can be the impact of computer network attack?', 'Network Security', '2020-03-18', '02:04:00', 1, NULL),
(17, 'What is the meaning of AAA?', 'Network Security', '2020-03-21', '01:36:00', 0, NULL),
(18, 'What is CIA?', 'Network Security', '2020-04-23', '05:32:00', 1, NULL),
(19, 'What is the use of Webkit in CSS3?', 'Web Technology', '2020-05-23', '06:04:00', 1, NULL),
(20, 'What are the CSS box Model and its components?', 'Web Technology', '2020-07-30', '07:34:00', 1, NULL),
(21, 'Mention the APIs which are approved by HTML5 recen', 'Web Technology', '2020-07-22', '05:45:00', 1, NULL),
(22, 'What do you understand by UML?', 'UML', '2020-04-30', '07:34:00', 1, NULL),
(23, 'What do you understand by relationship in UMl?', 'UMl', '2020-05-13', '09:33:00', 1, NULL),
(24, 'What are static digrams in UML?', 'UML', '2020-08-22', '09:36:00', 1, NULL),
(25, 'Can you name the types of modelling?', 'UML', '2020-01-11', '03:45:00', 0, NULL),
(26, 'What do you mean by Python?', 'Python', '2021-02-13', '16:55:07', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `usermstr`
--

CREATE TABLE `usermstr` (
  `uid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usermstr`
--

INSERT INTO `usermstr` (`uid`, `name`, `email`, `password`) VALUES
(1, 'Shru', 'shrutijain12159@gmail.com', 'shruti@1234'),
(2, 'Chinu', 'chinmayagrawal1999@gmail.com', 'ch@123'),
(3, 'ayush', 'ayush@gmail.com', 'Ayush'),
(4, 'Ansh', 'anshyerudkar07@gail.com', 'ansh'),
(5, 'Aish', 'aish54@gmail.com', 'aish'),
(6, 'Arya', 'arya77@gmail.com', 'arya'),
(7, 'Karan', 'karan89@gmail.com', 'kr'),
(8, 'Archit', 'arch99@gmail.com', 'archit'),
(9, 'Arnav', 'arav67@gmail.com', 'arav'),
(10, 'Shraddha', 'Shradha55@gmail.com', 'shradha'),
(11, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `ans`
--
ALTER TABLE `ans`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `qid` (`qid`) USING BTREE,
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`conid`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `usermstr`
--
ALTER TABLE `usermstr`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ans`
--
ALTER TABLE `ans`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `conid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `usermstr`
--
ALTER TABLE `usermstr`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ans`
--
ALTER TABLE `ans`
  ADD CONSTRAINT `ans_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `usermstr` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
