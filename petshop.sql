-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 26 Ιουν 2021 στις 15:03:59
-- Έκδοση διακομιστή: 10.4.17-MariaDB
-- Έκδοση PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `petshop`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `categories`
--

CREATE TABLE `categories` (
  `id` int(4) NOT NULL,
  `name` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(512) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `categories`
--

INSERT INTO `categories` (`id`, `name`, `alias`) VALUES
(1, 'Dog', 'dog'),
(2, 'Cat', 'cat'),
(3, 'Small Pet', 'smallpet'),
(4, 'Bird', 'bird'),
(5, 'Top Brands', 'topbrands'),
(6, 'Special Offers', 'offers'),
(11, 'test', 'test');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `First Name` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `Last Name` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `Zip` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `Country` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `syndromi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `kodikos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `customers`
--

INSERT INTO `customers` (`id`, `First Name`, `Last Name`, `Address`, `Zip`, `City`, `Country`, `Phone`, `Email`, `syndromi`, `kodikos`, `birthday`) VALUES
(1, 'ΔΗΜΟΣ', 'ΚΑΡΑΔΗΜΟΣ', 'ΕΡΜΟΥ 45', '54624', 'ΘΕΣΣΑΛΟΝΙΚΗ', '', '6981123456', 'dkaradimos@delta360.gr', '', '', NULL),
(2, 'Achi', 'Potsis', 'Kalamari', '20011', 'Thessaloniki', '', '6920103040', 'aop@gmail.com', '', '', NULL),
(3, 'Ioannis', 'Ioannou', 'Aristotelous', '90222', 'Thessaloniki', '', '6910203940', 'lap@in.gr', '', '', NULL),
(11, 'adfa', 'adsfasdfasd', 'asdfasdf', '11111', 'adsf', 'Germany', '+306982385769', 'asdf@asf.gr', 'yes', 'Zk68911031!', NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `customers.id` int(4) NOT NULL,
  `shipping.id` int(4) NOT NULL,
  `payment.id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `orders`
--

INSERT INTO `orders` (`id`, `datetime`, `customers.id`, `shipping.id`, `payment.id`) VALUES
(1, '2020-06-10 08:45:00', 1, 2, 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `orders-products`
--

CREATE TABLE `orders-products` (
  `orders.id` int(4) NOT NULL,
  `products.id` int(4) NOT NULL,
  `price` double(8,2) NOT NULL,
  `amount` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `orders-products`
--

INSERT INTO `orders-products` (`orders.id`, `products.id`, `price`, `amount`) VALUES
(1, 1, 69.90, 2);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `cost` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `payment`
--

INSERT INTO `payment` (`id`, `name`, `cost`) VALUES
(1, 'ΠΙΣΤΩΤΙΚΗ - ΧΡΕΩΣΤΙΚΗ ΚΑΡΤΑ', 0.00),
(2, 'ΑΝΤΙΚΑΤΑΒΟΛΗ', 3.00),
(3, 'ΚΑΤΑΘΕΣΗ ΣΕ ΤΡΑΠΕΖΙΚΟ ΛΟΓΑΡΙΑΣΜΟ', 0.00);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `short-description` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `long-description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `offer-price` double(8,2) NOT NULL,
  `discount` int(4) NOT NULL,
  `amount` int(4) NOT NULL,
  `sku` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `warranty` int(4) NOT NULL,
  `weight` double(8,2) NOT NULL,
  `height` double(8,2) NOT NULL,
  `width` double(8,2) NOT NULL,
  `length` double(8,2) NOT NULL,
  `subcategories_id` int(4) NOT NULL,
  `alias` varchar(512) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `products`
--

INSERT INTO `products` (`id`, `name`, `short-description`, `long-description`, `price`, `offer-price`, `discount`, `amount`, `sku`, `warranty`, `weight`, `height`, `width`, `length`, `subcategories_id`, `alias`) VALUES
(1, 'MSI Motherboard H310M Pro-VH Plus (H310/1151/DDR4)', 'Μητρική για τους επεξεργαστές Intel Core 8ης & 9ης Γενιάς, με 2 θέσεις για RAM DDR4 έως 32GB, προηγμένο σύστημα ψύξης, 4Κ HDMI, θύρες USB 3.1 και ήχο Audio Boost\r\n', 'Με μια ματιά\r\nΗ μητρική MSI H310M PRO-VH Plus υποστηρίζει την 8η γενιά επεξεργαστών Intel Core. Είναι έτοιμη να φιλοξενήσει έως και 2 μνήμες RAM DDR4, για χωρητικότητα που μπορεί να φτάσει ακόμα και τα 32GB.\r\n\r\n \r\n\r\nΔιαθέτει προηγμένο σύστημα ψύξης με DC/PWM Μode και δυνατότητα ρύθμισης των ανεμιστήρων μέσω του Total Fan Control, για να μην ανεβάζει θερμοκρασία ακόμη και μετά από πολύωρο gaming, 4Κ HDMI για να συνδέεται απευθείας με την οθόνη ή την UHD TV σου, καθώς και τεχνολογία MSI Audio Boost για επαγγελματικής ποιότητας ήχο. \r\n\r\n \r\n\r\nΕίναι εξοπλισμένη με 4 θύρες USB 2.0 και 2 θύρες USB 3.1 για ακόμα μεγαλύτερες ταχύτητες μεταφοράς δεδομένων. Επιπλέον ενσωματώνει ήχο HD που θα ανεβάσει τη διάθεσή σου στα ύψη.', 74.90, 69.90, 0, 5, '3221938', 3, 0.00, 0.00, 0.00, 0.00, 1, 'MSI-Motherboard-H310M-Pro-VH-Plus-(H310-1151-DDR4)'),
(2, 'HP 15s - eq0020nv Laptop (Ryzen 5 3450U/8 GB/256 GB/Radeon Vega 8)', 'Iδανικό για εργασία και διασκέδαση, με επεξεργαστή AMD Ryzen™ 5 3450U, 8GB DDR4 RAM, οθόνη 15,6” FHD IPS, NVMe M.2 SSD 256GB, Windows 10 (S) και βάρος μόλις 1,74 κιλά για να το έχεις πάντα μαζί σου!', 'Κάνε την ημέρα σου αποδοτικότερη: ο φορητός υπολογιστής HP 15s-eq0020nv προσφέρει αξιόπιστη απόδοση για streaming, περιήγηση και άνετη εργασία, ώστε να έχεις απρόσκοπτη παραγωγικότητα και ψυχαγωγία, όπου κι αν βρίσκεσαι!\r\n\r\nΒασίζεται στον 4πύρηνο επεξεργαστή AMD Ryzen™ 5 3450U (Base Clock στα 2,1GHz, Max Boost στα 3,5GHz), ο οποίος πλαισιώνεται από 8GB RAM DDR4-2400 για ανεμπόδιστο multi-tasking και αποθηκευτική μονάδα NVMe M.2 SSD με χωρητικότητα 256GB, για ταχύτατη εκκίνηση και άμεση απόκριση σε ό,τι κι αν κάνεις.\r\n\r\nΗ ενσωματωμένη στον επεξεργαστή κάρτα γραφικών AMD Radeon™ Vega 8 είναι ικανή να ανταποκριθεί σε απαιτητικές εφαρμογές αλλά και casual games. Με Windows 10 (S Mode) και βάρος 1,74 κιλά για να τον μεταφέρεις παντού με ευκολία.\r\n', 599.00, 0.00, 0, 5, '3563804', 3, 1.74, 1.79, 35.00, 24.00, 2, 'HP-15s---eq0020nv-Laptop-(Ryzen-5-3450U-8-GB-256-GB-Radeon-Vega-8)'),
(4, 'HP 15s - eq0020nv Laptop (Ryzen 5 3450U/8 GB/256 GB/Radeon Vega 8)', 'Iδανικό για εργασία και διασκέδαση, με επεξεργαστή AMD Ryzen™ 5 3450U, 8GB DDR4 RAM, οθόνη 15,6” FHD IPS, NVMe M.2 SSD 256GB, Windows 10 (S) και βάρος μόλις 1,74 κιλά για να το έχεις πάντα μαζί σου!', 'Κάνε την ημέρα σου αποδοτικότερη: ο φορητός υπολογιστής HP 15s-eq0020nv προσφέρει αξιόπιστη απόδοση για streaming, περιήγηση και άνετη εργασία, ώστε να έχεις απρόσκοπτη παραγωγικότητα και ψυχαγωγία, όπου κι αν βρίσκεσαι!\r\n\r\nΒασίζεται στον 4πύρηνο επεξεργαστή AMD Ryzen™ 5 3450U (Base Clock στα 2,1GHz, Max Boost στα 3,5GHz), ο οποίος πλαισιώνεται από 8GB RAM DDR4-2400 για ανεμπόδιστο multi-tasking και αποθηκευτική μονάδα NVMe M.2 SSD με χωρητικότητα 256GB, για ταχύτατη εκκίνηση και άμεση απόκριση σε ό,τι κι αν κάνεις.\r\n\r\nΗ ενσωματωμένη στον επεξεργαστή κάρτα γραφικών AMD Radeon™ Vega 8 είναι ικανή να ανταποκριθεί σε απαιτητικές εφαρμογές αλλά και casual games. Με Windows 10 (S Mode) και βάρος 1,74 κιλά για να τον μεταφέρεις παντού με ευκολία.\r\n', 599.00, 0.00, 0, 5, '3563804', 3, 1.74, 1.79, 35.00, 24.00, 9, 'HP-15s---eq0020nv-Laptop-(Ryzen-5-3450U-8-GB-256-GB-Radeon-Vega-8)');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `shipping`
--

CREATE TABLE `shipping` (
  `id` int(11) NOT NULL,
  `name` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `cost` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `shipping`
--

INSERT INTO `shipping` (`id`, `name`, `cost`) VALUES
(1, 'COURIER', 5.00),
(2, 'ΠΑΡΑΛΑΒΗ ΑΠΟ ΤΟ ΚΑΤΑΣΤΗΜΑ', 0.00),
(3, 'ΕΛΤΑ', 2.00);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(4) NOT NULL,
  `name` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `categories_id` int(4) NOT NULL,
  `alias` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `categories_id`, `alias`) VALUES
(1, 'ΜΗΤΡΙΚΕΣ', 1, 'mhtrikes'),
(2, 'ΜΝΗΜΕΣ', 1, 'mnhmes'),
(3, 'ΣΚΛΗΡΟΙ ΔΙΣΚΟΙ', 1, 'sklhroi-diskoi'),
(4, 'INKJET', 2, 'inkjet'),
(5, 'LASER', 2, 'laser'),
(6, 'ANDROID', 3, 'android'),
(7, 'APPLE', 3, 'apple'),
(8, 'TV', 5, 'tv'),
(9, 'CINEMA', 5, 'cinema'),
(10, 'Windows LAPTOP', 1, 'windows-laptop'),
(11, 'Apple Laptop', 1, 'apple-laptop');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT για πίνακα `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT για πίνακα `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT για πίνακα `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT για πίνακα `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT για πίνακα `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT για πίνακα `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
