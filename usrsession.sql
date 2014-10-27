-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2014 a las 21:59:27
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usrsession`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_26_174810_create_users_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Eudora Little Sr.', 'gerry80@yahoo.com', '$2y$10$KK4BpaBHMnRmgBNXlDtcHe4XbLikuHTtvyuznot/72rSTGgxtUXfG', '03774 Marks Throughway\nDomenicochester, SD 27632', '+27(1)4915312169', '', '2014-10-26 17:53:01', '2014-10-26 17:53:01'),
(2, 'Kendall Beier', 'americo45@yahoo.com', '$2y$10$azCnOCYYWCKw/4Jjw3VYCO49GXOLxyeiJhSEM9/vUQpLVGs5gKyy2', '96266 Alexie Corner Suite 340\nElodymouth, PR 86324', '(665)004-6160x7288', '', '2014-10-26 17:53:01', '2014-10-26 17:53:01'),
(3, 'Koby Schinner', 'maggie.jast@marks.org', '$2y$10$tWTbRFk1ilGtES02mZywJeTognn1cDEJkOdkjg4BssNcmLzsWXxOK', '906 Lindgren Pine Apt. 415\nNorth Omaport, GA 88885-8830', '+36(2)5292051766', '', '2014-10-26 17:53:01', '2014-10-26 17:53:01'),
(4, 'Veronica Kilback', 'xgusikowski@yahoo.com', '$2y$10$2nUWykCX5tN/sPJulbcio.3wZSn0VRGDxV2hmN9IjoXyNGDV2hjLC', '627 Jamie Crossroad\nEast Ellenton, AA 04898', '438.551.9649', '', '2014-10-26 17:53:01', '2014-10-26 17:53:01'),
(5, 'Mrs. Elva Collins', 'xyost@yahoo.com', '$2y$10$rRJzTd3Vn0TUVlUc/ApjauPLAxXS4EVgfEcF3ELfykfk7aC8ty7pu', '0646 Cory Wall\nSouth Jacynthe, AR 92910', '(944)374-8307', '', '2014-10-26 17:53:02', '2014-10-26 17:53:02'),
(6, 'Albina Feeney', 'vlabadie@gmail.com', '$2y$10$K/uWSgv8TN352bppI8ciQeWhE8tTYYjyiPhN6Ty88BvEVk2rqnvMC', '2395 Mraz Turnpike\nNew Jesusberg, TX 57240-4863', '1-280-546-4482', '', '2014-10-26 17:53:02', '2014-10-26 17:53:02'),
(7, 'Chyna McDermott', 'nschmitt@yahoo.com', '$2y$10$oiex.aWE2F2HS6Kg98xirO8rfTC0./UVWkwn6KGtoyASy4.bpbdR6', '154 Emily Villages\nHermanntown, WY 65394-1061', '(756)154-5019', '', '2014-10-26 17:53:02', '2014-10-26 17:53:02'),
(8, 'Jarrod Pollich', 'rowe.anastacio@jenkins.com', '$2y$10$mp5xs6HZ7gnzebb87BM99e0lpPUPfzGrAd1h.qHb/x841uGfJsrfm', '28935 Lonzo Locks\nHymanborough, AK 95121-0842', '(193)855-6893x06158', '', '2014-10-26 17:53:02', '2014-10-26 17:53:02'),
(9, 'Mr. Amy Nicolas Jr.', 'klockman@marvin.biz', '$2y$10$87FtZ22lVJt.03WN80Sf5eqDlB3SKpwwgrinYtjws0jbHV3rpx72a', '28601 Stroman Road\nKevenside, DE 38728-7248', '1-062-380-0053x531', '', '2014-10-26 17:53:02', '2014-10-26 17:53:02'),
(10, 'Derick Boehm', 'dario49@yahoo.com', '$2y$10$2mY88K2x76bRI0RZtaH9GOBinHPFnOTXYV6Uo3wo7ctahzjGLfMKa', '605 Ephraim Glen Apt. 113\nJacobifort, NM 28938-3692', '556-772-9894x63885', '', '2014-10-26 17:53:03', '2014-10-26 17:53:03'),
(12, 'kenia', 'kenia_arc@hotmail.com', '$2y$10$84oGRMJABAXwSO5OgjedLOrWEOszVZwfWxHhHwhIMrOCv.spPpuH6', '30 nash street', '0863764519', 'wDxnOm64aiaOgSzJQQ6vkBk9OQwFMhhUp4W8YYY7ESPSbtILrqA2xOkzgKtU', '2014-10-26 19:00:32', '2014-10-26 20:53:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
