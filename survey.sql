-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 01, 2022 at 11:26 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cm_staff`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

DROP TABLE IF EXISTS `survey`;
CREATE TABLE IF NOT EXISTS `survey` (
  `survey_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` text NOT NULL,
  `unit` text NOT NULL,
  `role` text NOT NULL,
  `key1` text NOT NULL,
  `key2` text NOT NULL,
  `key3` text NOT NULL,
  `key4` text NOT NULL,
  `key5` text NOT NULL,
  `key6` text NOT NULL,
  `key7` text NOT NULL,
  `key8` text NOT NULL,
  `key9` text NOT NULL,
  `key10` text NOT NULL,
  `key11` text NOT NULL,
  `key12` text NOT NULL,
  `key13` text NOT NULL,
  `key14` text NOT NULL,
  `key15` text NOT NULL,
  `key16` text NOT NULL,
  `key17` text NOT NULL,
  `key18` text NOT NULL,
  `key19` text NOT NULL,
  `key20` text NOT NULL,
  `key21` text NOT NULL,
  `key22` text NOT NULL,
  `key23` text NOT NULL,
  `key24` text NOT NULL,
  `key25` text NOT NULL,
  `key26` text NOT NULL,
  `key27` text NOT NULL,
  `key28` text NOT NULL,
  `key29` text NOT NULL,
  `key30` text NOT NULL,
  `key31` text NOT NULL,
  `key32` text NOT NULL,
  `key33` text NOT NULL,
  `key34` text NOT NULL,
  `key35` text NOT NULL,
  `key36` text NOT NULL,
  `key37` text NOT NULL,
  `key38` text NOT NULL,
  `key39` text NOT NULL,
  `key40` text NOT NULL,
  `key41` text NOT NULL,
  `key42` text NOT NULL,
  `key43` text NOT NULL,
  `key44` text NOT NULL,
  PRIMARY KEY (`survey_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`survey_id`, `staff_id`, `unit`, `role`, `key1`, `key2`, `key3`, `key4`, `key5`, `key6`, `key7`, `key8`, `key9`, `key10`, `key11`, `key12`, `key13`, `key14`, `key15`, `key16`, `key17`, `key18`, `key19`, `key20`, `key21`, `key22`, `key23`, `key24`, `key25`, `key26`, `key27`, `key28`, `key29`, `key30`, `key31`, `key32`, `key33`, `key34`, `key35`, `key36`, `key37`, `key38`, `key39`, `key40`, `key41`, `key42`, `key43`, `key44`) VALUES
(1, '2', '3', 'Volunteer', '1-3 years', 'Rarely', 'Not so satisfied', 'Strongly disagree', 'Neither agree/disagree', 'Disagree', 'Disagree', '  In your opinion, what improvements can be made to your work/life balance? Please comment below.', 'Disagree', 'Agree', 'Agree', 'Agree', 'Disagree', 'Neutral/Neither agree nor disagree', 'Strongly Disagree', 'Neutral/Neither agree nor disagree', 'Disagree', 'Neutral/Neither agree nor disagree', 'Disagree', 'Agree', 'Strongly Agree', 'Strongly Disagree', 'Strongly Disagree', 'Agree', 'Strongly Disagree', 'Strongly Agree', 'Agree', 'Very easy', 'Very available', 'Very often', 'Somewhat improved', 'Very effective', 'Not so consistently', 'Very consistently', 'Extremely often', 'About half of the time', 'Not at all reliable', 'Extremely often', 'Slightly meaningful', 'Moderately challenging', 'Not at all often', 'A little', 'Slightly Proud', 'Moderately likely'),
(2, '1', '1', 'Management / C-Level', '4-7 years', 'Daily', 'Somewhat satisfied', 'Strongly disagree', 'Neither agree/disagree', 'Neither agree/disagree', 'Neither agree/disagree', '  In your opinion, what improvements can be made to your work/life balance? Please comment below. In your opinion, what improvements can be made to your work/life balance? Please comment below.', 'Neutral/Neither agree nor disagree', 'Neutral/Neither agree nor disagree', 'Neutral/Neither agree nor disagree', 'Neutral/Neither agree nor disagree', 'Strongly Agree', 'Agree', 'Disagree', 'Strongly Disagree', 'Disagree', 'Strongly Disagree', 'Strongly Agree', 'Disagree', 'Agree', 'Strongly Agree', 'Disagree', 'Agree', 'Agree', 'Agree', 'Agree', 'Somewhat easy', 'Moderately available', 'Not very often', 'Very improved', 'Not so effective', 'Not so consistently', 'Not at all consistently', 'Somewhat often', 'Once in a while', 'Not at all reliable', 'Not so often', 'Very meaningful', 'Moderately challenging', 'Extremely often', 'Moderate amount', 'Slightly Proud', 'Very likely');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
