-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 01:46 PM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `geeksbyte`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(33) NOT NULL,
  `pass` varchar(33) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('root', 'passwd'),
('geeksbyte', 'passwd'),
('admin', 'passwd');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `text`) VALUES
(1, 'Php'),
(2, 'C'),
(3, 'Python'),
(4, 'JavaScript'),
(5, 'Linux'),
(6, 'Security'),
(7, 'Books'),
(8, 'Learn'),
(9, 'Hacking'),
(10, 'Kali Linux');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `title` varchar(333) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(9) NOT NULL,
  `tags` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `content`, `author`, `tags`, `date`) VALUES
(1, 2, 'Best C Books For Beginners.', 'As a beginner in programming it can be difficult for you to choose the best C books to start your C programming journey. Selecting good book is very crucial part of learning. To make your task easier, in this article I have shared some best C books for beginners. These books are highly recommended for those who do not have any pre knowledge in programming.<br>\r\n\r\n<div class="panel panel-default">\r\n  <div class="panel-heading bg-success"><p>The C Programming Language By Dennis Richie</p></div>\r\n  <div class="panel-body">\r\n<p>The C Programming Language is written by Brian W. Kernighan and Dennis M. Ritchie. This book is considered to be the best C programming book because it is written by inventors of C language. The book explains the concept of C language in an easy manner and covers every concept in detail. This book will be really helpful for people looking to study computer concepts and C programming.</p>\r\n</div>\r\n</div>', 'admin', 'c', '2018-07-27'),
(2, 1, 'Best IDE for PHP Development', 'PHP is one the most popular web programming language. To develop awesome sites in PHP we require great tools. An IDE make our work really easy and fast. If you just started PHP development then it may be difficult for you to choose a best PHP IDE. Codelobster PHP Edition is a free and best IDE for PHP development. It is available for windows platform. There are lots of other tools and IDEs available in the market but Codelobster PHP Edition is best among all of them. It is used by thousand of PHP developers and programmers. Lets take a look on some of its features.\r\n', 'admin', 'php', '2018-07-27'),
(3, 1, 'Top Database Technologies for PHP Web Applications', 'Undoubtedly PHP is the most prominent platform for web development at the moment. Apart from websites, enterprise applications such as ERP, web based open source CRMs for SMEs and e-Commerce solutions are hugely prominent at the moment. There are a lot of people who believe that mySQL is the only database connecting with PHP while others are known to the fact that PHP is supporting other databases as well but they are unaware of the ones. What happens most of the times is that customers are picky as it comes to the database they are keen to have for the implementation. So here we are to help out the PHP developers, web development companies and others making them understand the databases that PHP supports.', 'admin', 'php', '2018-07-23'),
(16, 5, 'Debian 9.5 Released: â€œRock Solidâ€ GNU/Linux Distro Arrives With Spectre v2 Fix', '<p>Following the fourth point release of Debian 9 â€œstretchâ€ in March, the developers of the popular GNU/Linux distro have shipped the latest update to its stable distribution. For those who donâ€™t know, Debian 9 is an LTS version thatâ€™ll remain supported for 5 years. </p><br>\r\n<p> As one would expect, this point release doesnâ€™t bring any set of new features and keeps focusing on improving an already stable experience by delivering security patches and bug fixes. In case youâ€™re looking for an option that brings new features, you can check out the recently released Linux Mint 19.</p><br>\r\n\r\n<p> \r\nComing back to Debian 9.5, all the security patches shipping with the release have already been published in the form of security advisories, and their references can be found in the official release post.\r\n</p><br>\r\n<p> \r\nTo be precise, Debian 9.5 was released with 100 security updates and 91 bug fixes spread across different packages.\r\n</p><br>\r\n<p>\r\nAs mentioned above, one shouldnâ€™t expect any new features from this release. So, in case oneâ€™s running an existing installation of Debian 9, updating the machine is the best option. The users can point their package management system to one of the HTTP mirrors and upgrade the installations.\r\n </p><br>\r\n<p>\r\nIn case someoneâ€™s interested in fresh installation of Debian 9.5, the mirrors can be found at https://www.debian.org/mirror/list.\r\n</p>', 'admin', 'debian,linux', '2018-07-28'),
(17, 6, 'Hereâ€™s How Hackers Are Using Googleâ€™s Servers To Host Malware For Free', '<p>\r\nn the past, the security researchers have come across cases where notorious hackers were able to use EXIF data of images to hide malicious code. This technique is still widely used to infect web users with malware.\r\n</p>\r\n<p>\r\nGoing one step further, it has been found that hackers have found a way to share malware via trusted and reliable Google servers like those of googleusercontent. Contrary to the malware stored in text files, itâ€™s much harder to spot malicious payloads in images. Moreover, itâ€™s even harder to report malware found on googleusercontent.com to Google.</p>\r\n<p>\r\nFor those who donâ€™t know, googleusercontent is Googleâ€™s domain for serving user-supplied content without affecting the safety of Googleâ€™s own pages.\r\n</p>\r\n<p>\r\nAs per a report by Sucuri, the following code was spotted in a script that extracts PayPal security code:\r\n</p>', 'admin', 'security,google', '2018-07-28'),
(18, 10, 'Build Kali with Live-Build on Debian Based Systems', '<p>\r\nWe use live-build to create our official Kali releases and we encourage users to jump in and build their own customized versions of Kali whenever we can. Our documentation of the process is one of the most popular items on our documentation site, and the Kali Dojo also revolves around this topic. We love it and our users love it.\r\n</p>\r\n<p>\r\nOne roadblock of live-build has always been the fact that you need a Kali system to build a Kali system. The reason for this is that small changes in both the original debootstrap and live-build packages are needed for building a Kali ISO. In Kali, these changes are already included, however in most Debian derivatives, some gentle massaging is needed to get our ISOs to build.\r\n</p>\r\n<p>\r\nToday, we have updated our docs site to include instructions on how to build a custom Kali ISO on other Debian based systems such as Debian 9 (Stretch) and Ubuntu 16.04 and 18.04. This will hopefully allow users running Debian derivatives to test the waters with Kali and play with one of its cooler features.\r\n</p>\r\n', 'admin', 'kali linux,liux', '2018-07-29'),
(19, 10, 'Kali Linux 2018.2 Release', '<p>\r\nIf you would like to check out this latest and greatest Kali release, you can find download links for ISOs and Torrents on the Kali Downloads page along with links to the Offensive Security virtual machine and ARM images, which have also been updated to 2018.2. If you already have a Kali installation youâ€™re happy with, you can easily upgrade in place as follows.\r\n</p>\r\n<code>\r\nroot@kali:~# apt update && apt full-upgrade\r\n</code>\r\n<p>\r\nAs always, if you encounter any bugs at all, we implore you to open a report on our bug tracker. We canâ€™t fix what we donâ€™t know about.\r\n</p>', 'admin', 'kali linux,linux', '2018-07-29'),
(20, 8, 'GitHub Learning Lab Launches Free Courses On HTML And Open Source Contribution', '<p>\r\nWhen it comes to free resources to learn programming, GitHubâ€™s new Learning Lab is getting popularity among the coding enthusiasts. The code hosting service launched this service earlier this year to help people use GitHub is a better way.\r\n</p>\r\n<p>\r\nThe very first offerings of GitHubâ€™s Learning Lab included topics like Introduction to GitHub, GitHub Pages, Migration to GitHub, etc. Now, in a recent blog post, the company has introduced two new courses that might be really useful to beginners.\r\n</p>\r\n<p>\r\nThe first course is named Community Starter Kit (link). It teaches you what settings to use, what files one should add to the GitHub repository, what metadata to add, and what files to look for while contributing to some open source project on GitHub.\r\n</p>\r\n<p>\r\nThe second course is called Introduction to HTML (link). Itâ€™s a great free resource for everyone who is wishing to become a developer. With this course, one can start by creating simple web pages and start learning the nuances of programming.\r\n</p>', 'admin', 'github,open source,learn', '2018-07-29'),
(21, 3, 'Why to learn python?', '<p>\r\nThere can be many reasons that can make you start to learn Python. Some of them are as follows:\r\n</p>\r\n<p>\r\n<b>Easy syntax:</b> Python syntax is very easy to learn than any other programming language out there. If youâ€™re an experienced programmer and new to python youâ€™ll amazed after seeing the easiness of writing code in python. Even if youâ€™re new to programming you can start programming with Python right away.\r\n</p>\r\n<p>\r\n<b>Readability:</b> In most other programming languages, we use indentation only to help make the code look pretty, but in Python it is required. Whether youâ€™re inside in a loop or declaring some functions you have shift your block of code with certain amount of spaces to indicate what block of code a statement belongs too, which increases readability of a code written in Python.\r\n</p>\r\n<p>\r\n<b>High level language:</b> Python looks more like a readable, human language than like a low-level  language, which gives you ability to program at faster rate than a low-level language will allow you.\r\n</p>\r\n<p>\r\n<b>Object oriented programming language:</b> Pythonâ€™s support for object-oriented programming in one of its greatest benefits to new programmers because they will be encountering the same concepts and terminology in their work but python also support structured programming fully. So you can code in any style you want.\r\n</p>\r\n<p>\r\n<b>Free and cross-platform:</b> Python is both free and open source. It runs on all major operating systems like Windows, Linux and Mac OS X.\r\n</p>\r\n<p>\r\n<b>Large number of standard libraries: </b>Python contains over than 300 standard library modules which contain modules and classes for a wide variety of programming tasks, which will help us to reduce the length of our code and provide easiness to write code.\r\n</p>', 'admin', 'python', '2018-07-29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
