-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2019 at 12:39 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Developer_Server`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_username`, `fname`, `lname`, `password`, `role`) VALUES
(1, 'Aakash', 'Aakash', 'Singh', '827ccb0eea8a706c4c34a16891f84e7b', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

CREATE TABLE `contests` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(500) NOT NULL,
  `intro` varchar(1500) NOT NULL,
  `overview` text NOT NULL,
  `reg_fees` int(10) NOT NULL,
  `duration` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contests`
--

INSERT INTO `contests` (`id`, `date`, `title`, `intro`, `overview`, `reg_fees`, `duration`, `status`) VALUES
(1, '0000-00-00', 'Web Development', '', '<p>Write overview here... halla duhaye hai betabi chaye hai</p>\r\n', 100, '40 Hours', 'Active'),
(2, '0000-00-00', 'Web Development', '', '<p>Write overview here... halla duhaye hai betabi chaye hai</p>\r\n', 100, '40 Hours', 'Active'),
(3, '0000-00-00', 'Machine Learning', 'Develop machine learning project and get certified', '<p>Create machine learning project and get certified</p>\r\n', 250, '12 Hours', 'Active'),
(4, '0000-00-00', 'Advance Web Development ', 'You have to develop advance web project in this contest.', '<p>Hello to all curious minds!</p>\r\n\r\n<p>We are happy to welcome you to the third season of HackBenchers. It is the time of the quarter to learn and build something exciting. HackBenchers #3 brings you another interesting topic to work on:&nbsp;<strong>Evolution</strong>.</p>\r\n\r\n<p><strong>Evolution: A natural selection process</strong></p>\r\n\r\n<p>The age of the Earth is about&nbsp;<strong>4.54 billion years</strong>. The earliest evidence of life on Earth dates to at least 3.5 billion years ago. In the beginning, all living beings on Earth were single-celled organisms. After a billion year, multicellular organisms evolved and increased the diversity of life on Earth. The evolution does not explain the origin of life but it does explain how lifeforms rapidly evolved into the complex ecosystem that we see today.</p>\r\n\r\n<p>This HackBenchers revolves around the past of the evolution of all living beings. There are various questions about the past of living beings that must be addressed. For example, several million years ago:</p>\r\n\r\n<ul>\r\n	<li>What were we?</li>\r\n	<li>What were our form and structure?</li>\r\n	<li>How did we look?</li>\r\n	<li>What did we eat?</li>\r\n	<li>How did we survive?</li>\r\n	<li>What was our behavioral trait?</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Isn&#39;t it interesting to walk through the past and understand this huge transformation?</p>\r\n\r\n<p>Here is a video by&nbsp;<a href=\"https://www.youtube.com/user/Kurzgesagt\" target=\"blank\">Kurzgesagt: In a nutshell</a>&nbsp;that explains&nbsp;<strong>what, why, and how of the evolution</strong>:<br />\r\n&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"450\" src=\"https://www.youtube.com/embed/hOfRN0KihOU\" width=\"800\"></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>HackBenchers #3 absolutely helps you to find the story about our evolution. If you are eager to know about how lifeforms evolved on Earth, then this season of HackBenchers is exclusively for you.</p>\r\n\r\n<p>It sure is going to be interesting and challenging. In case you need any help throughout the project, we are here to guide you. Scroll down to view problem statements and understand the expectations of this project.</p>\r\n\r\n<p><strong>Learning scope with HackBenchers #3</strong></p>\r\n\r\n<ul>\r\n	<li>Understanding the theory of evolution</li>\r\n	<li>Learning and analyzing the evolution of all the living beings through centuries and several million years</li>\r\n	<li>Final outcome of this event is to evaluate a web or mobile application. Therefore, you can learn the skill of the application development.</li>\r\n	<li>Code optimization</li>\r\n	<li>Incorporating the analyzed data in the application</li>\r\n	<li>Designing and building a new application</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"enter image description here\" src=\"https://he-s3.s3.amazonaws.com/media/uploads/6181422.png\" /></p>\r\n\r\n<p><strong>Eligibility criteria for prizes</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Age</strong>: 19 and below (high-school, first-year, and second-year students)</li>\r\n	<li>Good learner</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Note</strong>: HackEarth is inviting school students to nominate for school ambassadors. Show your interest to become the ambassador for your school by&nbsp;<strong><a href=\"https://docs.google.com/forms/d/e/1FAIpQLScDzrwXqH8dNOn6D7EWb177Po36YI3LH115wfyHHbvH5bnGRw/viewform\" target=\"blank\">filling this form</a>.</strong></p>\r\n', 500, '12 Hours', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `overview` text NOT NULL,
  `reg_fees` int(10) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `views` int(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `title`, `intro`, `overview`, `reg_fees`, `tag`, `views`, `status`) VALUES
(1, '0000-00-00', 'Web Development with React', 'Learn how to work with react and build web apps', '<p>test bitches</p>\r\n', 350, '', 0, 'Active'),
(2, '0000-00-00', 'Web Development with React', 'Learn how to work with react and build web apps', '<p>test bitches</p>\r\n', 350, '', 0, 'Active'),
(3, '0000-00-00', 'Web Development with React', 'Learn how to work with react and build web apps', '<p>test bitches</p>\r\n', 350, '', 3, 'Active'),
(4, '0000-00-00', 'Web Development', 'Develop machine learning project and get certified', '<p>test</p>\r\n', 350, '', 0, 'Active'),
(5, '0000-00-00', 'Web Development with React', 'Develop machine learning project and get certified', '<p>What we do on the Web changes every day. The web development industry is constantly evolving. While we may not be able to tell the day-to-day changes while it&#39;s happening, it&#39;s easy for us to look back to the past few months and see that a lot of things we do now are much different than what we&#39;ve been doing before.<br />\r\nBecause our work lies in one of the fastest-paced industries, it&#39;s important for us to predict and learn about what&#39;s coming up or risk being left in the web development dust.</p>\r\n\r\n<p><img src=\"https://www.cryptus.in/image/Web_d2.jpg\" style=\"height:150px; width:200px\" title=\"Web Development\" />While this may sound daunting at first, it&#39;s actually pretty easy to see where we&#39;ll be in the next several months/years to come. Just as fast as Web 2.0 came, Web 3.0 began developing. There are varying definitions of what phase three of the web will be, but the majority of the theories focus around a user-centric approach. Things like i Google, &quot;the portable web&quot; (mobile, i Pad, etc.), pick &amp; choose content, smarter user interfaces, etc. are all coming about under the new definition of 3.0.<br />\r\nWeb 2.0, in contrast, was more focused around providing the user with content. A large pool of floating content such as blogs, better search engines, smart SEO, all made up Web 2.0. As from a design perspective, Web 2.0consisted of clean and sleek designs that focused around providing content to the user in a more efficient way.</p>\r\n', 350, '', 2, 'Active'),
(6, '0000-00-00', 'Web Development with React', 'Develop machine learning project and get certified', '<p>What we do on the Web changes every day. The web development industry is constantly evolving. While we may not be able to tell the day-to-day changes while it&#39;s happening, it&#39;s easy for us to look back to the past few months and see that a lot of things we do now are much different than what we&#39;ve been doing before.<br />\r\nBecause our work lies in one of the fastest-paced industries, it&#39;s important for us to predict and learn about what&#39;s coming up or risk being left in the web development dust.</p>\r\n\r\n<p><img src=\"https://www.cryptus.in/image/Web_d2.jpg\" style=\"height:150px; width:200px\" title=\"Web Development\" />While this may sound daunting at first, it&#39;s actually pretty easy to see where we&#39;ll be in the next several months/years to come. Just as fast as Web 2.0 came, Web 3.0 began developing. There are varying definitions of what phase three of the web will be, but the majority of the theories focus around a user-centric approach. Things like i Google, &quot;the portable web&quot; (mobile, i Pad, etc.), pick &amp; choose content, smarter user interfaces, etc. are all coming about under the new definition of 3.0.<br />\r\nWeb 2.0, in contrast, was more focused around providing the user with content. A large pool of floating content such as blogs, better search engines, smart SEO, all made up Web 2.0. As from a design perspective, Web 2.0consisted of clean and sleek designs that focused around providing content to the user in a more efficient way.</p>\r\n', 350, 'Web Development', 16, 'Active'),
(7, '0000-00-00', 'Machine Learning and Jango', 'Develop machine learning project and get certified', '<h2>MACHINE LEARNING&nbsp;BOOTCAMP</h2>\r\n\r\n<h3>( FIVE DAYS )</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><a href=\"http://www.mlworkshops.com/Five_Day_ML_Workshop.html#Schedule\">( FOR UPCOMING SCHEDULE AND FEES REFER BELOW )</a></h4>\r\n\r\n<h2>ABOUT MACHINE LEARNING</h2>\r\n\r\n<p>Machine learning is a field of computer science that often uses statistical techniques to give computers the ability to &quot;learn&quot; (i.e., progressively improve performance on a specific task) with data, without being explicitly programmed.&nbsp;<br />\r\nMachine learning is an application of artificial intelligence (AI) that provides systems the ability to automatically learn and improve from experience without being explicitly programmed. Machine learning focuses on the development of computer programs that can access data and use it learn for themselves. The process of learning begins with observations or data, such as examples, direct experience, or instruction, in order to look for patterns in data and make better decisions in the future based on the examples that we provide. The primary aim is to allow the computers learn automatically without human intervention or assistance and adjust actions accordingly.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>ABOUT THE WORKSHOP</h2>\r\n\r\n<p>This is a five day workshop which will progressively take you through various&nbsp;<a href=\"https://en.wikipedia.org/wiki/Supervised_learning\">Supervised Learning algorithms</a>, providing hands on experience on problems based on&nbsp;<a href=\"https://en.wikipedia.org/wiki/Statistical_classification\">Classification</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Regression_analysis\">Regression</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Text_mining\">Textual analysis</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Time_series\">Time Series analysis</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Feature_engineering\">Feature Engineering</a>&nbsp;and Optimization. At the end of this workshop, you would have solved and uploaded your results to the respective sites.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>INTRODUCTION TO MACHINE LEARNING</h4>\r\n\r\n<p><img src=\"http://www.mlworkshops.com/images/five_day/machine.jpeg\" style=\"width:150px\" />This session gives introduction for what machine learning is and where can machine learning be applied.This also provides an overview of various types of machine learning.This also provides a path on where to start for establishing a career in machine learning and the process that has to be followed to make predictions on a machine learning problem.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>PYTHON FOR MACHINE LEARNING</h4>\r\n\r\n<p><img src=\"http://www.mlworkshops.com/images/five_day/python_for_ml.jpg\" style=\"width:180px\" />This session gives introduction for what machine learning is and where can machine learning be applied.This also provides hands on experience on python packages like numpy, pandas, matplotlib and seaborn necessary for data analysis and machine learning using python.&nbsp;<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>LOGISTIC REGRESSION - KAGGLE TITANIC</h4>\r\n\r\n<p><img src=\"http://www.mlworkshops.com/images/five_day/titanic.jpeg\" style=\"width:200px\" /><a href=\"http://scikit-learn.org/stable/modules/generated/sklearn.linear_model.LogisticRegression.html\">Logistic Regression</a>&nbsp;is a statistical method for analyzing a dataset in which there are one or more independent variables that determine an outcome. The outcome is measured with a dichotomous variable (in which there are only two possible outcomes). You would be able to use Logistic Regression algorithms to determine if passengers on Titanic survived or died based on their attributes.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>LINEAR REGRESSION, RANDOM FOREST REGRESSION - PREDICT ANNUAL RETURNS</h4>\r\n\r\n<p><br />\r\n<img src=\"http://www.mlworkshops.com/images/five_day/randomforest.jpg\" style=\"height:300px; width:500px\" /><br />\r\n<a href=\"http://scikit-learn.org/stable/modules/generated/sklearn.linear_model.LinearRegression.html\">Linear Regression</a>&nbsp;is a standard Statistical Data Analysis technique which is used to determine the extent to which there is a linear relationship between a dependent variable and one or more independent variables.&nbsp;<a href=\"\">Random Forests</a>are an ensemble learning method for classification and regression. Through this workshop, you will get to know how random forests can be used for regression. You will get to solve a problem which is asked in HackerEarth&#39;s Brain Waves Competition using the above two algorithms.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>CLASSIFICATION AND FEATURE ENGINEERING USING XGBOOST - PREDICT THE CRIMINALS</h4>\r\n\r\n<p><img src=\"http://www.mlworkshops.com/images/five_day/xgboost.jpg\" style=\"width:200px\" /><a href=\"http://xgboost.readthedocs.io/en/latest/model.html\">XGBoost Algorithm</a>&nbsp;has become the ultimate weapon of many data scientists. It&acirc;&euro;&trade;s a highly sophisticated algorithm, powerful enough to deal with all sorts of irregularities of data and is capable to perform parallel computation. It has both linear model solver and tree learning algorithms. Participants will get to know about XGBoost, Feature Engineering Using XGBoost and Optimization of hyperparameters using XGBoost through hands on experience.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>NLTK WITH NAIVE BAYES CLASSIFIER - TWITTER SENTIMENT ANALYSIS</h4>\r\n\r\n<p><img src=\"http://www.mlworkshops.com/images/five_day/nltk.jpg\" style=\"width:70px\" />Most of the data in today&acirc;&euro;&trade;s world is being generated as we speak, as we tweet, as we send messages on social media and in various other activities. Working on this data has become necessary to derive useful patterns which will help in serving the customers better and also helps in business growth. Despite having this raw data it cannot be used without performing necessary processing. Participants will be provided hands on experience on natural language processing tools along with end to end walk-through on how to classify the twitter comments using the&nbsp;<a href=\"http://scikit-learn.org/stable/tutorial/text_analytics/working_with_text_data.html\">NLTK Tools</a>.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>TIME SERIES ANALYSIS - STOCK MARKET PREDICTION</h4>\r\n\r\n<p><img src=\"http://www.mlworkshops.com/images/five_day/timeseries.jpg\" style=\"width:70px\" />We predict the future using the observations from the present and give equal weightage to all the observations. It is necessary to give importance to certain observations over another when dealing with time dependent data and also when there are seasonal trends in the data. So this workshop will focus on coverage of all techniques necessary to handle Time Series Data.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>KEY TAKEAWAYS</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>RECOGNIZING THE PROBLEM</h4>\r\n\r\n<p>A high level overview of what machine learning is and to recognize the problems that can be solved with Machine Learning.</p>\r\n\r\n<h4>SELECTING THE TECHNIQUES</h4>\r\n\r\n<p>Select the right technique to solve the problem (is it a classification problem? a regression? needs preprocessing?).</p>\r\n\r\n<h4>TOOLS</h4>\r\n\r\n<p>A few libraries like Numpy, Pandas, Scikit-Learn, to start your learning experience, that you can improve upon.</p>\r\n\r\n<h4>CERTIFICATE</h4>\r\n\r\n<p>A certificate for succesful completion of the course.</p>\r\n\r\n<h4>CONCLUSION</h4>\r\n\r\n<p>Finally, you would be able to decide if Machine Learning is for you and what you would have to do next, if you want to make this your career.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>PREREQUISITES</h2>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Having a good knowledge of programming concepts (writing loops, data structures, functions and recursive functions).</li>\r\n	<li>Knowledge of Python. (If you are not sure about your knowledge of python, sign up for the&nbsp;<a href=\"file:///F:/DATASCIENCE/Solivar_Work/mlw/basic_python.html\">Basic Python for Data Science course).</a></li>\r\n	<li>Laptop with Wifi capability and Python 3.x installed.</li>\r\n	<li>A desire and thirst for knowledge.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>UPCOMING SCHEDULE</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table>\r\n	<thead>\r\n		<tr>\r\n			<th>Location</th>\r\n			<th>City</th>\r\n			<th>Workshop Details</th>\r\n			<th>Timings</th>\r\n			<th>Fees</th>\r\n			<th>Register</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Hinjowadi</td>\r\n			<td>Pune</td>\r\n			<td><a href=\"http://www.mlworkshops.com/Five_Day_ML_Workshop.html\">Machine Learning Bootcamp</a></td>\r\n			<td>July 17th, 2018 to July 21st, 2018</td>\r\n			<td>Rs.8000 to&nbsp;<br />\r\n			Rs.12,000</td>\r\n			<td>Register</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<h1>CHIEF FACILITATOR</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Avatar\" src=\"http://www.mlworkshops.com/images/profile/venkat.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>VENKATESH TADINADA</h4>\r\n\r\n<p>Venkatesh Tadinada is passionate about data. &quot;In God we trust, all others bring data,&quot; said Edward Deming, a philosophy wholly imbibed by Venkat. For the last 25 years, he has been working in various domains and various technologies with DATA as a common theme. Starting with Data Warehouses, proceeding on to Data Mining, Business Intelligence and now Machine Learning, Deep Learning &amp; AI.&nbsp;<br />\r\n<br />\r\nHe successfully co-founded and exited a couple of startups so far. One of which is of Business Intelligence for Enterprises and the other is an Insurance sector product. Currently, he is invested in a few startups in the ML area and also sits on the boards of a few more.&nbsp;<br />\r\n<br />\r\nVenkatesh has a Masters in Computers Science and an MBA. He brings his formal education and experience, combined with his passion for DATA to develop Predictive Analytics capabilities to his enterprise clients in pharmaceutical and insurance verticals.&nbsp;<br />\r\n<br />\r\nVenkatesh in his spare time also follows his passion for teaching by conducting workshops in Machine Learning where he coaches aspiring students in the joy of DATA.</p>\r\n', 8000, 'Machine Learning', 37, 'Active'),
(8, '0000-00-00', 'Aakash TEst', 'testing phase for workshop', '<p>testing</p>\r\n', 1, 'test', 13, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `event_reg`
--

CREATE TABLE `event_reg` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `F_NAME` varchar(255) NOT NULL,
  `L_NAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `MSISDN` varchar(12) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(12) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `TXN_AMOUNT` varchar(255) NOT NULL,
  `ORDER_ID` varchar(255) NOT NULL,
  `CUST_ID` varchar(255) NOT NULL,
  `INDUSTRY_TYPE_ID` varchar(255) NOT NULL,
  `CHANNEL_ID` varchar(255) NOT NULL,
  `TXN_STATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_reg`
--

INSERT INTO `event_reg` (`id`, `date`, `F_NAME`, `L_NAME`, `EMAIL`, `college_name`, `department`, `MSISDN`, `country`, `state`, `zip`, `event_name`, `TXN_AMOUNT`, `ORDER_ID`, `CUST_ID`, `INDUSTRY_TYPE_ID`, `CHANNEL_ID`, `TXN_STATUS`) VALUES
(1, 0, 'ashutosh', 'singh', 'aakashsingh1999@gmail.com', 'Rajarajeswari College of Engineering', 'cse', '2147483647', 'IN', 'uttar pradesh', 201014, '', '1', 'DHT59414718', 'DEV-CUST955628', 'Retail', 'WEB', ''),
(2, 1551945229, 'Aakash', 'Singh', 'aakash@develophowto.com', 'RRCE', 'CSE', '2147483647', 'AF', 'delhi', 110029, 'Web Development with React', '350', 'DHT90027324', 'DEV-CUST74051393', 'Retail', 'WEB', ''),
(3, 1551945822, 'ashutosh', 'singh', 'aakashsingh1999@gmail.com', 'Rajarajeswari College of Engineering', 'CSE', '2147483647', 'IN', 'uttar pradesh', 201014, 'Aakash TEst', '1', 'DHT24059858', 'DEV-CUST1490348', 'Retail', 'WEB', ''),
(4, 1551948479, 'ashutosh', 'singh', 'aakashsingh1999@gmail.com', 'Rajarajeswari College of Engineering', 'cse', '2147483647', 'IN', 'uttar pradesh', 201014, 'Web Development with React', '350', 'DHT7238005', 'DEV-CUST79226016', 'Retail', 'WEB', ''),
(5, 1551950558, 'Amit', 'Patra', 'lol@lol.com', 'rrce', 'cse', '2147483647', 'IN', 'uttar pradesh', 201014, 'Web Development with React', '350', 'DHT29241297', 'DEV-CUST7513342', 'Retail', 'WEB', ''),
(6, 1551953152, 'Ankita', 'Suman', 'ankita@aa.com', 'RRCE', 'CSe', '9999999999', 'AF', 'uttar pradesh', 201014, 'Aakash TEst', '1', 'DHT9217021', 'DEV-CUST898675', 'Retail', 'WEB', 'SUCCESS'),
(7, 1551953504, 'Alika', 'Arora', 'aa@lika.com', 'MAIT', 'cse', '8800733347', 'IN', 'uttar pradesh', 201014, 'Machine Learning and Jango', '8000', 'DHT71865882', 'DEV-CUST84838689', 'Retail', 'WEB', ''),
(8, 1551953602, 'Singh', 'Asu', 'asu@singh.com', 'rrce', 'cse', '8800733347', 'IN', 'uttar pradesh', 201014, 'Machine Learning and Jango', '8000', 'DHT47131123', 'DEV-CUST17350298', 'Retail', 'WEB', 'FAILED'),
(9, 1551953656, 'Shivay', 'Lamba', 'shivaylamba@develophowto.com', 'MAIT', 'CSE', '8800733347', 'IN', 'uttar pradesh', 201014, 'Web Development with React', '350', 'DHT74891777', 'DEV-CUST24781410', 'Retail', 'WEB', 'SUCCESS'),
(10, 1552029993, 'ashutosh', 'singh12', 'aakashsingh1999@gmail.com', 'Rajarajeswari College of Engineering', 'CSE', '8800733347', 'IN', 'uttar pradesh', 201014, 'Web Development with React', '350', 'DHT44884200', 'DEV-CUST12741378', 'Retail', 'WEB', 'SUCCESS');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `reg_date` varchar(50) NOT NULL,
  `tandc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `name`, `username`, `email`, `password`, `role`, `phone_no`, `college_name`, `branch`, `country`, `state`, `reg_date`, `tandc`) VALUES
(1, 'Aakash SIngh', 'Aakash', 'aakashsingh1999@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '8800870411', 'Rajarajeswari College of Engineering', 'CSE', 'India', 'Bangalore', '2019/02/05', 'true'),
(2, '', 'Aakash12', 'aakashsingh1999a@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '', '', '', '', '', '2019/02/05', '&c'),
(3, '', 'IndianCharizard', 'in@fmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '', '', '', '', '', '2019/02/05', ''),
(4, '', 'ksheeraja', 'ksrksheeraja@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', '', '', '', '', '', '2019/02/05', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contests`
--
ALTER TABLE `contests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_reg`
--
ALTER TABLE `event_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contests`
--
ALTER TABLE `contests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event_reg`
--
ALTER TABLE `event_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
