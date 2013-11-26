-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2013 at 02:56 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cloud_it`
--
CREATE DATABASE IF NOT EXISTS `cloud_it` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cloud_it`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2013_05_31_140553_create_posts_table', 1),
('2013_05_31_141423_create_tags_table', 1),
('2013_06_02_233005_create_users_table', 1),
('2013_06_02_233121_create_password_reminders_table', 1),
('2013_07_10_021355_add_user_to_posts', 1),
('2013_08_21_143501_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'post',
  `publish_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `image`, `type`, `publish_date`, `active`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'hello world', 'hello-world', '![ambot unza neh](http://t3.gstatic.com/images?q=tbn:ANd9GcQvILTDrYavrKmtoJVsArKglnNOzW-qhEtUIPDwldWnJeX5gkwB)*Liquidae omnem, hanc inani vi modum omnes captiosa, totam democritus expectamus incommoda liberabuntur ante ille minus duce. Afranius interrogare retinere formidinum disciplinam, dein laetamur dubium a inertissimae maximam intellegam, lectorem monstruosi clamat ulla minus mortem. Siculis explentur. Complectitur amicorum sive futura versuum tu movet. Horribiles. Tempore diesque inutile interesset probarent veserim impendet omittantur sentiamus, ornamenta inhaererent plerique complectitur tractatas quod memoriter tuo anteponant labefactant, celeritas iusLiquidae omnem, hanc inani vi modum omnes captiosa, totam democritus expectamus incommoda liberabuntur ante ille minus duce. Afranius interrogare retinere formidinum disciplinam, dein laetamur dubium a inertissimae maximam intellegam, lectorem monstruosi clamat ulla minus mortem. Siculis explentur. Complectitur amicorum sive futura versuum tu movet. Horribiles. Tempore diesque inutile interesset probarent veserim impendet omittantur sentiamus, ornamenta inhaererent plerique complectitur tractatas quod memoriter tuo anteponant labefactant, celeritas iusLiquidae omnem, hanc inani vi modum omnes captiosa, totam democritus expectamus incommoda liberabuntur ante ille minus duce. Afranius interrogare retinere formidinum disciplinam, dein laetamur dubium a inertissimae maximam intellegam, lectorem monstruosi clamat ulla minus mortem. Siculis explentur. Complectitur amicorum sive futura versuum tu movet. Horribiles. Tempore diesque inutile interesset probarent veserim impendet omittantur sentiamus, ornamenta inhaererent plerique complectitur tractatas quod memoriter tuo anteponant labefactant, celeritas ius*', '', 'post', '2013-10-06 00:21:00', 0, '2013-10-06 00:21:16', '2013-10-06 07:41:46', 1),
(2, 'hello world2', 'hello-world2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iniucundus desiderat putas ratio quando natura rebus avocent iuvaret. Incorruptis errem elaborare, sed dedocendi sollicitant patre populo reici pertinaces consuetudine orationis, constituto salutatus sero iusteque novi latinas operis. Sero, elaborare vacuitate pertinax ignorare privatio odia ultimum compluribus nominant. Copulationesque dicitis utroque maiores placeat genus blanditiis omnesque, singulos stabilem iudicari sive effecerit effluere litterae quales, novi. Erga iudicatum quaerendi, durissimis honestum significet gravitate propemodum praetermittenda ignorant illis, acuti doloribus atomus praetermittenda stabilique contemnit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iniucundus desiderat putas ratio quando natura rebus avocent iuvaret. Incorruptis errem elaborare, sed dedocendi sollicitant patre populo reici pertinaces consuetudine orationis, constituto salutatus sero iusteque novi latinas operis. Sero, elaborare vacuitate pertinax ignorare privatio odia ultimum compluribus nominant. Copulationesque dicitis utroque maiores placeat genus blanditiis omnesque, singulos stabilem iudicari sive effecerit effluere litterae quales, novi. Erga iudicatum quaerendi, durissimis honestum significet gravitate propemodum praetermittenda ignorant illis, acuti doloribus atomus praetermittenda stabilique contemnit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iniucundus desiderat putas ratio quando natura rebus avocent iuvaret. Incorruptis errem elaborare, sed dedocendi sollicitant patre populo reici pertinaces consuetudine orationis, constituto salutatus sero iusteque novi latinas operis. Sero, elaborare vacuitate pertinax ignorare privatio odia ultimum compluribus nominant. Copulationesque dicitis utroque maiores placeat genus blanditiis omnesque, singulos stabilem iudicari sive effecerit effluere litterae quales, novi. Erga iudicatum quaerendi, durissimis honestum significet gravitate propemodum praetermittenda ignorant illis, acuti doloribus atomus praetermittenda stabilique contemnit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iniucundus desiderat putas ratio quando natura rebus avocent iuvaret. Incorruptis errem elaborare, sed dedocendi sollicitant patre populo reici pertinaces consuetudine orationis, constituto salutatus sero iusteque novi latinas operis. Sero, elaborare vacuitate pertinax ignorare privatio odia ultimum compluribus nominant. Copulationesque dicitis utroque maiores placeat genus blanditiis omnesque, singulos stabilem iudicari sive effecerit effluere litterae quales, novi. Erga iudicatum quaerendi, durissimis honestum significet gravitate propemodum praetermittenda ignorant illis, acuti doloribus atomus praetermittenda stabilique contemnit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iniucundus desiderat putas ratio quando natura rebus avocent iuvaret. Incorruptis errem elaborare, sed dedocendi sollicitant patre populo reici pertinaces consuetudine orationis, constituto salutatus sero iusteque novi latinas operis. Sero, elaborare vacuitate pertinax ignorare privatio odia ultimum compluribus nominant. Copulationesque dicitis utroque maiores placeat genus blanditiis omnesque, singulos stabilem iudicari sive effecerit effluere litterae quales, novi. Erga iudicatum quaerendi, durissimis honestum significet gravitate propemodum praetermittenda ignorant illis, acuti doloribus atomus praetermittenda stabilique contemnit.', '', 'post', '2013-10-06 03:44:00', 0, '2013-10-06 03:44:12', '2013-10-06 07:10:37', 1),
(3, 'Cloud-it', 'cloud-it', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Liquidae omnem, hanc inani vi modum omnes captiosa, totam democritus expectamus incommoda liberabuntur ante ille minus duce. Afranius interrogare retinere formidinum disciplinam, dein laetamur dubium a inertissimae maximam intellegam, lectorem monstruosi clamat ulla minus mortem. Siculis explentur. Complectitur amicorum sive futura versuum tu movet. Horribiles. Tempore diesque inutile interesset probarent veserim impendet omittantur sentiamus, ornamenta inhaererent plerique complectitur tractatas quod memoriter tuo anteponant labefactant, celeritas iustitiam nostram tradit, deinde dicent, artifex vidisse.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Liquidae omnem, hanc inani vi modum omnes captiosa, totam democritus expectamus incommoda liberabuntur ante ille minus duce. Afranius interrogare retinere formidinum disciplinam, dein laetamur dubium a inertissimae maximam intellegam, lectorem monstruosi clamat ulla minus mortem. Siculis explentur. Complectitur amicorum sive futura versuum tu movet. Horribiles. Tempore diesque inutile interesset probarent veserim impendet omittantur sentiamus, ornamenta inhaererent plerique complectitur tractatas quod memoriter tuo anteponant labefactant, celeritas iustitiam nostram tradit, deinde dicent, artifex vidisse.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Liquidae omnem, hanc inani vi modum omnes captiosa, totam democritus expectamus incommoda liberabuntur ante ille minus duce. Afranius interrogare retinere formidinum disciplinam, dein laetamur dubium a inertissimae maximam intellegam, lectorem monstruosi clamat ulla minus mortem. Siculis explentur. Complectitur amicorum sive futura versuum tu movet. Horribiles. Tempore diesque inutile interesset probarent veserim impendet omittantur sentiamus, ornamenta inhaererent plerique complectitur tractatas quod memoriter tuo anteponant labefactant, celeritas iustitiam nostram tradit, deinde dicent, artifex vidisse.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Liquidae omnem, hanc inani vi modum omnes captiosa, totam democritus expectamus incommoda liberabuntur ante ille minus duce. Afranius interrogare retinere formidinum disciplinam, dein laetamur dubium a inertissimae maximam intellegam, lectorem monstruosi clamat ulla minus mortem. Siculis explentur. Complectitur amicorum sive futura versuum tu movet. Horribiles. Tempore diesque inutile interesset probarent veserim impendet omittantur sentiamus, ornamenta inhaererent plerique complectitur tractatas quod memoriter tuo anteponant labefactant, celeritas iustitiam nostram tradit, deinde dicent, artifex vidisse.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Liquidae omnem, hanc inani vi modum omnes captiosa, totam democritus expectamus incommoda liberabuntur ante ille minus duce. Afranius interrogare retinere formidinum disciplinam, dein laetamur dubium a inertissimae maximam intellegam, lectorem monstruosi clamat ulla minus mortem. Siculis explentur. Complectitur amicorum sive futura versuum tu movet. Horribiles. Tempore diesque inutile interesset probarent veserim impendet omittantur sentiamus, ornamenta inhaererent plerique complectitur tractatas quod memoriter tuo anteponant labefactant, celeritas iustitiam nostram tradit, deinde dicent, artifex vidisse.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Liquidae omnem, hanc inani vi modum omnes captiosa, totam democritus expectamus incommoda liberabuntur ante ille minus duce. Afranius interrogare retinere formidinum disciplinam, dein laetamur dubium a inertissimae maximam intellegam, lectorem monstruosi clamat ulla minus mortem. Siculis explentur. Complectitur amicorum sive futura versuum tu movet. Horribiles. Tempore diesque inutile interesset probarent veserim impendet omittantur sentiamus, ornamenta inhaererent plerique complectitur tractatas quod memoriter tuo anteponant labefactant, celeritas iustitiam nostram tradit, deinde dicent, artifex vidisse. ', '', 'post', '2013-10-06 04:38:00', 0, '2013-10-06 04:38:31', '2013-10-06 07:10:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `post_id` int(11) NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `tags_post_id_tag_unique` (`post_id`,`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`post_id`, `tag`) VALUES
(1, 'hello world'),
(2, 'hello world'),
(3, 'fox here'),
(3, 'hello world2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Arnel', 'Lenteria', 'arnel.lenteria@gmail.com', '$2y$08$bvo.AfVChHF1hyi8qpWtIeWRLgeqinB3euQqo/cR6KPhUXBcKW..e', 1, '2013-10-06 00:17:33', '2013-10-06 06:27:31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
