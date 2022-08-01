-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 08:03 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fursa`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`) VALUES
(5, 'Uncategorized', 'This is the description for uncategorized category'),
(11, 'Law', 'Opportunities related to legal matters.'),
(12, 'Business, Finance and Accounting', 'Opportunities related to the above.'),
(13, 'IT and Engineering', 'Opportunities related to the above.'),
(14, 'Sports', 'Opportunities related to the above.'),
(15, 'Hospitality', 'Opportunities related to the above.'),
(16, 'Creative Arts', 'Opportunities related to the above.'),
(17, 'Communications', 'Opportunities related to the above.'),
(18, 'Training', 'Opportunities related to the above\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `author_id` int(11) UNSIGNED NOT NULL,
  `is_featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `thumbnail`, `date_time`, `category_id`, `author_id`, `is_featured`) VALUES
(14, 'JOB DESCRIPTION: GROWTH OPERATIONS INTERN', 'Position: Growth Operations Intern (Content, Marketing and Communication)\r\nReporting to: GoBeba Directors\r\nLocation: Nairobi, Kenya\r\nSubmission Email: work@gobeba.com\r\nApplication Deadline: July 29, 2022\r\nCompany Background\r\nGoBeba is the next-generation digital retailer of household essentials. We are reimagining retail in Africa.\r\nShopping is unpleasant for people living in African cities - which are crowded and have a low supermarket\r\npenetration. Customers endure high traffic and long checkout queues. This requires innovative solutions\r\nto improve the shopping experience. Some of Africa&rsquo;s most pressing problems have been solved through\r\nleapfrogging. We&rsquo;ve seen this in mobile telephony where we bypassed landlines and we also saw this in\r\nmobile payments where we skipped traditional banks. We believe that a combination of mobile technology\r\nand AI-enabled supply chain technologies fused with a network of distributed micro-warehouses will\r\nleapfrog brick &amp; mortar retail. GoBeba is leading this evolution of retail in African cities. Due to our recent\r\ngrowth, we are looking for a creative and highly motivated rockstar who can bring in energy and\r\nenthusiasm in our marketing and communications operations.\r\nJob Summary\r\nSupport brand and digital marketing/communications initiatives including management of social media\r\naccounts. Gather customer insights to support customer acquisition and retention. Support growth\r\nactivities such as business performance reporting.\r\nKey Tasks and Responsibilities:\r\nDigital Marketing\r\n● Social Media Marketing\r\n- Create and distribute daily content on social media\r\n- Create and manage a calendar for digital content\r\n- Respond to comments and DMs on social media platforms\r\n- Respond to Whatsapp messages sent to the company line\r\n● Search Engine Marketing\r\n- Create and maintain display and text search creatives for Google and other search\r\nengines\r\n- Execute search engine campaigns\r\n- Manage location-based content in Google maps both paid and organic\r\n- Support search engine optimization (SEO) initiatives across all digital channels\r\n● Brand Marketing\r\n- Support the execution of targeted hyperlocal, out of home campaigns\r\n\r\nGrowth Analytics\r\n\r\n- Assemble data (structured and unstructured) to drive optimization of campaigns\r\n- Support daily, weekly and monthly analysis to drive continuous performance optimization\r\n- Gather customer insights and analyze the findings\r\n\r\n1\r\n\r\n- Analyze call center performance metrics to improve the quality of customer service\r\n- Support customer retention activities such as sending sms and calling existing customers\r\nto get feedback on service satisfaction\r\nCategory Management and Merchandising\r\n\r\n- Support identification of high performing FMCG products for retail\r\n- Obtain high quality images for the products and upload them on digital platforms\r\n\r\nRequirements:\r\n● Bachelor&rsquo;s Degree in Marketing, Communications, Creative Arts, Social/ Exact Sciences or any\r\nother relevant discipline that combines quantitative and creative disciplines\r\n● Experience on executing marketing campaigns across digital and non-digital channels\r\n● An understanding of paid, owned and earned media channels, being comfortable tracking and\r\nreporting on established performance marketing KPIs\r\n● Strong skills in Microsoft Office, especially in Excel\r\n● Excellent communication skills, both oral and verbal\r\n● Hungry to learn and full of grit\r\n● An empathetic and curious attitude\r\n● Well rounded person\r\n\r\nAPPLICATION\r\nSend your CV and cover letter to work@gobeba.com', '1659323901what-is-marketing.png', '2022-08-01 03:18:21', 12, 14, 0),
(15, 'Twiga Foods People Operations Intern', 'Currently enrolled in an accredited university or college obtaining a bachelor&#039;s degree or diploma in Human Resource Management.\r\nHave a working knowledge of Ms Office applications such as Word, Excel and PowerPoint\r\nBe an inquisitive individual with a desire to learn, possessing a long-term desire to work in the human resources space\r\nStrong attention to detail, accuracy and completeness, and a commitment to producing high-quality deliverables\r\nBe self-assured, curious, willing to expand your boundaries and continue learning as you go\r\nBe a self-starter with a high level of personal drive and resilience, with unquestionable integrity, confidentiality, and respect\r\nAvailable to begin internship immediately\r\nApplication deadline: 21st July,2022', '16593252043e3f6eea5795752769efd9fb4d3085c7.jpg', '2022-08-01 03:29:59', 5, 14, 1),
(16, 'Airtel Kenya Grow with Airtel', 'Recent graduate with strong communication skills.\r\nAbility to engage at all levels\r\nAttention to details combined with strong analytical skills\r\nIndividual who is inquisitive and eager to learn\r\nKnowledge of Microsoft applications.\r\n\r\nApplication Link:https://www.fuzu.com\r\nRegister on Fuzu and search for the internship opportunity\r\nApplication Deadline:28th July,2022.', '1659324846Airtel-Logo.png', '2022-08-01 03:34:06', 18, 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `avatar`, `is_admin`) VALUES
(12, 'Agnes', 'Otieno', 'agnesotieno', 'agnes.otieno@strathmore.edu', '$2y$10$0zx8k9j.hA96DGsT27qcKutFtcr/EUcSii4DMnKjhxpSZXM4FY.9u', '165929581656249339_303.jpg', 1),
(13, 'Oscar', 'Frankline', 'oscarfrankline', 'frankline.otieno@strathmore.edu', '$2y$10$6dL7y8yQW52sBEyNPj93/uYC4QkCqc4FmMkGyC/dNBETZjyR4JhK2', '165929715556249339_303.jpg', 1),
(14, 'Student ', 'Council', 'studentcouncil', 'studentcouncil@strathmore.edu', '$2y$10$shCyTM21sHXOJ.242B2uTeLgBes7j3.hsTvt.ru5AvYVzQsWN/nqO', '1659320848SC.jpg', 0),
(15, 'John', 'Doe', 'johndoe', 'johndoe@strathmore.edu', '$2y$10$xXkaO2coJwxHjXjeNSv/q.eR8qtkhdhsSSrnn0tG.pZI/H05xxnGS', '1659324386m1.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_blog_category` (`category_id`),
  ADD KEY `FK_blog_author` (`author_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_blog_author` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_blog_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
