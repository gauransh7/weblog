-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 05:18 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog1`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` text NOT NULL,
  `blog_subtitle` text NOT NULL,
  `thumbnail` text NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `status_remark` text NOT NULL,
  `cate_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `likes` int(11) NOT NULL,
  `comments` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_subtitle`, `thumbnail`, `content`, `user_id`, `status`, `status_remark`, `cate_id`, `created`, `likes`, `comments`, `views`) VALUES
(2, 'Gauransh', 'Owner of this website.', '2.jpg', '<p>my name is gauransh dingwani .\r\npresently studying in IIT-ROORKEE pursuing chemical engineering .\r\nThis blog is first blog of this website and is a trial .Hope this website helo people to share exciting blogs and to come up with their skills in this field .\r\nmy name is gauransh dingwani .\r\npresently studying in IIT-ROORKEE pursuing chemical engineering .\r\nThis blog is first blog of this website and is a trial .Hope this website helo people to share exciting blogs and to come up with their skills in this field .\r\nmy name is gauransh dingwani .\r\npresently studying in IIT-ROORKEE pursuing chemical engineering .\r\nThis blog is first blog of this website and is a trial .Hope this website helo people to share exciting blogs and to come up with their skills in this field .</p>', 5, 1, '', 4, '2019-12-15 11:30:56', 0, 5, 21),
(3, 'lifstyle', 'The IIT life ', '7.jpg', '<p>This is a photo of my coaching mates along with whom i prepared for JEE exams .\r\nThere’s a sense of dedication, rigour and a fierce determination to crack the JEE. But these kids do not entirely cut themselves off from what’s happening around them. Many of them also participate in life and nurture their interests. Here’s how the life of students is before getting into IITs.\r\n\r\nBidding Adieu to Social Media\r\nThis is the extent of pain students have to go through. During the rigorous preparation phase, Facebook, Twitter, Snapchat or Instagram can ruin your focus. JEE requires an undistracted mind, but whenever students feel bored of studies, they sneak out to play some sport or catch up with friends. Read about effects of social media on education here.\r\n\r\nMaking Notes Religiously\r\nIt’s a rat race, and there’s no way one can take a chance. Formulae applications are the most important type of questions in Physics and Mathematics in JEE. Taking notes during the first time reading of the topics help revise at the end. So, whether it’s coaching class or college lectures, students are busy making their personal notes for each subject.\r\n\r\nStudying Concepts, Solving Problems, Cross-Checking Solutions\r\nNo matter how many coaching classes students join or how many study materials/books they buy, they have to spend time studying these materials and lecture notes. Self-study is one of the most important aspects of JEE preparation. The more time one devotes towards clearing concepts in 3 topics (Physics, Chemistry, and Mathematics) – the better are chances of getting a top rank in the JEE.\r\n\r\nFollowing a Strict Schedule\r\nbefore getting into the IITs, students are busy planning each day in advance to make their dream come true. So, most of them set a schedule in their brain about the to-do tasks and stick to time management. This is a crucial time to mark priorities and jot down the work they cannot skip—lunch, classes and seminars.</p>\r\n', 5, 1, '', 5, '2019-12-15 12:17:13', 0, 2, 22),
(6, 'FUN', 'Journey', 'IMG_20190630_161215_013.png', '<p>We all have our wishes. Someone wants to be rich. Someone wants to be happy. Someone maybe just wants to live. I think wishes are some really good things we humans have. Unlike any other being it is a cause of our existence. Without it we will be like a ship without radar.\r\n\r\nI think there is no one without a dream. The wishes may be small. Sometimes so small we ignore them without thinking twice. Let me give a little example.\r\n\r\nSuppose you are walking in a road and you see a old man is selling some foods. The foods can be anything you see everyday. But sometimes you may want to taste them.\r\n\r\nBut usually these kinds of wants are ignored by us all the time. These are the small wishes. We can have them easily. But still we ignore them. At the other hand the big wishes are like wanting to become something or being someone famous. These are the wishes that can’t be true so easily. They need hard labour.\r\n\r\nA good fortune as well. But what if you get a wish instantly. Just like the shooting star thing or like the Aladin’s story? Well in this post your one single wish will come true. Just imagine I made a machine (Well…This is funny but a little imagining will not harm anything).\r\n\r\nSo suppose I made a machine or found something that can get one wish fulfilled. So what will you ask? You can ask anything. I am just pretty excited that what kind of wishes people will ask. I asked my brother what was his wish.\r\n\r\nHe answered he wants to be rich unlike anyother. Yeah a childish answer but still many of us also wants to be rich too. My exact point is how people thinks. Oh you guys wanna know about my wish? I will wish to get all my wishes fulfilled. Hahah Just kdding.</p>\r\n', 1, 1, '', 5, '2019-12-17 10:44:21', 0, 0, 6),
(20, 'Human Behavior', 'Your life - your rules', 'humanbeh.jfif', '<p>We live in a world where stress is almost unavoidable. Because technology creates the expectation that we make ourselves available to others 24 hours a day, balancing our commitments and coping with stress in healthy ways can seem impossible. Caught in a constant to-do list, we seldom make the time to evaluate the toll that fear, worry, and distress can take on our bodies and minds. How do you know when you&rsquo;re under too much stress?</p>\r\n\r\n<p>Everyone has their own unique stress response, so it&rsquo;s vital to examine your physiological, behavioral, and psychological responses to the strain of life&rsquo;s demands. Let&rsquo;s take a look at a few common signs that you are under too much stress.</p>\r\n', 9, 1, 'nil', 4, '2020-01-15 06:50:07', 0, 1, 4),
(21, 'Time is money', 'human and time ', 'life.jpg', '<p>There are thousands of piddling, trivial things anyone can&nbsp;do to&nbsp;<a href=\"https://www.thebalancesmb.com/time-management-techniques-for-super-busy-people-2948666\">save time</a>. But this article focuses on how to save time in daily life by focusing on the general things that anyone can do that will actually make a big change in the amount of time you have to do what you want to do.&nbsp;Best of all, each of these ways to save time is relatively easy to do. If you do all ten, you&#39;ll save so much time you may have to take up a new hobby!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Have a Regular Place for Things</h3>\r\n\r\n<p>If you always set your keys on the table in the hall when you come in, you&rsquo;ll always be able to find them easily when you go out &ndash; and never waste time looking for them. And what works with your keys will work with just about everything else that you use regularly, too. Your reading glasses. Your can opener. Your dog leash. Develop the habit of keeping the things you use regularly in one place and put them back in that place when you&#39;re done using them.</p>\r\n', 9, 1, 'nil', 4, '2020-01-15 06:52:14', 0, 0, 1),
(22, 'Self dependent', 'start enjoying yourself', 'enjoy.jfif', '<p>Even if you don&rsquo;t drink alcohol, you can bring your own drinks. That way, you cut down the awkwardness of whether or not a certain beer in the fridge is up for grabs, or brought by someone else. If you want to give the illusion of drinking, bring your own flask and fill it with something non-alcoholic. That, or you can say your soda is spiked. Take control over the situation and remember that nobody&rsquo;s going to call you out.</p>\r\n\r\n<p>The goal here isn&rsquo;t just to hang out with your one friend at a different venue &mdash; but it&rsquo;s to make you feel comfortable enough with your surroundings and know you have someone looking out for you. This is especially important if you&rsquo;re&nbsp;<a href=\"https://www.bolde.com/floating-beer-pong-table-summer-pool-party-accessory/\">partying at someone&rsquo;s place</a>&nbsp;you don&rsquo;t really know. As sad as it is, women really need to look out for each other during events like this. So if your awkwardness is stemming from nerves that something bad might happen, use the buddy system.</p>\r\n', 10, 1, 'nil', 5, '2020-01-15 06:56:56', 0, 0, 2),
(23, 'Being social ', 'Being human', 'Being-social-day-5-2-770x257.jpg', '<p>A handy round up of&nbsp;<a href=\"https://twitter.com/search?q=%23BeingHuman19&amp;src=hashtag_click\">#BeingHuman19</a>&nbsp;day 5! Featuring&hellip; zines on music and memory; the hidden history of climate change; an exploration of trauma and illness through graphic novels and Pinocchio setting foot in the modern world!</p>\r\n\r\n<p>A handy round up of&nbsp;<a href=\"https://twitter.com/search?q=%23BeingHuman19&amp;src=hashtag_click\">#BeingHuman19</a>&nbsp;day 5! Featuring&hellip; zines on music and memory; the hidden history of climate change; an exploration of trauma and illness through graphic novels and Pinocchio setting foot in the modern world!</p>\r\n\r\n<p><em>If you&rsquo;d like to be featured in our daily story, join the conversation on Twitter and Instagram and tag us @BeingHumanFest or use the hashtag #BeingHuman19.</em></p>\r\n', 10, 1, 'nil', 4, '2020-01-15 07:01:24', 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(50) NOT NULL,
  `cate_des` text NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`, `cate_des`, `sort_order`, `status`, `created`) VALUES
(4, 'human', 'bad and good , male and female', 1, 1, '2019-12-15 07:28:55'),
(5, 'life', 'testing', 2, 1, '2019-12-15 10:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cmnt_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cmnt_des` text NOT NULL,
  `cmnt_status` int(11) NOT NULL,
  `cmnt_created` datetime NOT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cmnt_id`, `user_id`, `cmnt_des`, `cmnt_status`, `cmnt_created`, `blog_id`) VALUES
(1, 8, 'You are handsome.\r\nThis comment is a trial.', 1, '2019-12-19 19:05:37', 2),
(2, 8, 'You are handsome.\r\nThis comment is a trial.', 1, '2019-12-19 23:46:31', 2),
(3, 8, 'You are handsome.\r\nThis comment is a trial.', 1, '2019-12-19 23:57:04', 2),
(4, 8, 'You are handsome.\r\nThis comment is a trial.', 1, '2019-12-19 23:57:38', 2),
(5, 8, 'You are handsome.\r\nThis comment is a trial.', 1, '2019-12-19 23:58:14', 2),
(6, 8, 'really nice pic.\r\n', 1, '2019-12-19 23:59:52', 2),
(7, 8, 'really nice pic.\r\n', 1, '2019-12-20 00:00:04', 2),
(8, 8, 'really nice pic', 1, '2019-12-20 00:00:24', 2),
(9, 8, 'this might be 5th.', 1, '2019-12-20 00:44:26', 2),
(10, 8, 'this might be 5th.', 1, '2019-12-20 01:00:49', 2),
(11, 8, 'lets get 1st comment.', 1, '2019-12-20 01:10:40', 2),
(12, 8, 'lets get 1st comment.', 1, '2019-12-20 01:10:49', 2),
(13, 8, 'this might add one comment.', 1, '2019-12-20 01:22:50', 2),
(14, 5, 'shikhar is my 3rd home .', 1, '2019-12-20 02:58:02', 3),
(15, 5, 'shikhar is my 3rd home .', 1, '2019-12-20 03:00:41', 3),
(16, 21, 'hey there', 1, '2020-01-15 19:01:39', 2),
(17, 21, 'hey there', 1, '2020-01-15 19:02:28', 20),
(18, 21, 'hey there', 1, '2020-01-15 19:45:06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `title_1` text NOT NULL,
  `title_2` text NOT NULL,
  `slider_img` text NOT NULL,
  `sort_order` int(11) NOT NULL,
  `slider_created` datetime NOT NULL,
  `slider_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `profile_update` datetime NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `name`, `mobile_no`, `password`, `status`, `created`, `last_login`, `profile_update`, `email_id`, `user_role`) VALUES
(1, '', '', 'admin', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'kishankushwah54@gmail.com', 1),
(5, 'gauransh dingwani', '9009623382', 'admin', 1, '2019-12-13 14:11:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'gauransh7dingwani@gmail.com', 1),
(6, 'prakhar', '9111117012', 'admin', 1, '2019-12-15 06:14:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'prakhar@gmail.com', 1),
(7, 'himanshu ', '1234567890', 'adminl', 1, '2019-12-18 02:56:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'himanshu@gmail.com', 1),
(8, 'aditya', '9685068900', 'user', 1, '2019-12-18 11:49:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'aditya@gmail.com', 0),
(9, 'samarth garg', '9399643692', 'user', 1, '2020-01-13 21:09:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'samarthgarg@gmail.com', 0),
(10, 'mrinal kumar ', '8989898989', 'kmrinal', 1, '2020-01-15 06:53:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'kmrinal19@gmail.com', 0),
(11, 'Ankit kumar ', '7979797979', '$2y$10$HnTjuFfnw.sABGwK87MBrenv4XaBB9yjdEUizXlvR72', 1, '2020-01-15 13:35:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ankit@gmail.com', 0),
(12, 'Ankit kumar ', '7979797979', '$2y$10$4QtKjMcXQUTH5/ZDHHMckOJKO28J/JXrkXWcIBib5b/', 1, '2020-01-15 13:37:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ankit@gmail.com', 0),
(13, 'Gaurav', '1111111', '$2y$10$Yas9GN4bcQgwCwB8g9/EheH/8GqaN3Mut8TfLOFFOh5', 1, '2020-01-15 15:36:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'gaurav@gmail.com', 0),
(14, 'pratik', '7878787878', '$2y$10$XXHB6./VJTRfucA1z/26aOaxNCpj9He0FA5Eq9aC5Rn', 1, '2020-01-15 15:40:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'pratik@gmail.com', 0),
(15, 'pratik', '7878787878', '$2y$10$XXHB6./VJTRfucA1z/26aOaxNCpj9He0FA5Eq9aC5Rn', 1, '2020-01-15 15:40:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'pratik@gmail.com', 0),
(16, 'prabhav', '6767676767', '$2y$10$7EBYWdfudgwEEatl8qBVRu8kzCKRLfcC82dxmURAYyO', 1, '2020-01-15 15:42:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'prabhav@gmail.com', 0),
(17, 'nagendra', '5656565656', '$2y$10$bkC3CwfMcS2L5Gj9gI92HevbI/Ll5x3NyUm8WJYLCKf', 1, '2020-01-15 15:44:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'nagendra@gmail.com', 0),
(18, 'naitik', '878787878', '$2y$10$.DeSt7krkJ2nlincGtQ2AeHT1TfTDxjJ1Ag2LADHJEN', 1, '2020-01-15 15:48:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'naitik@gmail.com', 0),
(19, 'praduman', '6767676767', '$2y$10$0H4wcO1fDwGA3OsT.VB87eGKdCVElovy9N.KnenmWxR', 1, '2020-01-15 15:49:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'praduman@gmail.com', 0),
(20, 'pranav', '6767676767', '$2y$10$nQsUFxrtZ2fiPxrEZf8zHOI2CkkqkIuFsrYt/1LF050oiT6vSGFH6', 1, '2020-01-15 16:47:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'pranav@gmail.com', 0),
(21, 'ankita', '676767690', '$2y$10$8ynUTJUK3YQer5pHv504Iuu7sHLjJ68.kJYPhHIK4Q38XCi5LGSH.', 1, '2020-01-15 16:49:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ankita@gmail.com', 0),
(22, 'ankit kumar', '565656556', '$2y$10$9E0B7LWjXWo62.8dWGyCGORfMCq/mocrg2ZN4gOo1gr85bcYAlGgS', 1, '2020-01-15 17:10:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'kumar@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmnt_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cmnt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
