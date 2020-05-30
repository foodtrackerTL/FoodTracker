-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 30 Μάη 2020 στις 21:04:12
-- Έκδοση διακομιστή: 10.4.11-MariaDB
-- Έκδοση PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `projecttl`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `admins`
--

CREATE TABLE `admins` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('roro', '11122219');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `articles`
--

CREATE TABLE `articles` (
  `title` varchar(20) NOT NULL,
  `thumbnail` varchar(20) NOT NULL,
  `editor` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `articles`
--

INSERT INTO `articles` (`title`, `thumbnail`, `editor`, `content`, `date`) VALUES
('Εύκολο Πρωίνο', 'breakfast.jpg', 'roro', 'Εδω θα υπάρχει μια σύντομη περιγραφή του Άρθρου η οποία είτε θα είναι γραμμένη ξεχωριστά είτε θα είναι οι πρώτες γραμμές του άρθρου.', '0000-00-00'),
('Μεσημεριανό', 'lunch.png', 'roro', 'εδω θα γράφει πολλα και διάφορα μπλα μπλα εδω θα γράφει πολλα και διάφορα μπλα μπλαεδω θα γράφει πολλα και διάφορα μπλα μπλα ', '2020-05-29'),
('Μεσημεριανό2', 'lunch.png', 'roro', 'εδω θα γράφει πολλα και διάφορα μπλα μπλα εδω θα γράφει πολλα και διάφορα μπλα μπλαεδω θα γράφει πολλα και διάφορα μπλα μπλα ', '2020-05-29'),
('Μεσημεριανό33', 'lunch.png', 'roro', 'εδω θα γράφει πολλα και διάφορα μπλα μπλα εδω θα γράφει πολλα και διάφορα μπλα μπλαεδω θα γράφει πολλα και διάφορα μπλα μπλα ', '2020-05-29');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `location`
--

CREATE TABLE `location` (
  `Polh` varchar(20) NOT NULL,
  `latittude` int(20) NOT NULL,
  `longtitude` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `meals`
--

CREATE TABLE `meals` (
  `meal_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `components` varchar(20) NOT NULL,
  `vegan` tinyint(1) NOT NULL,
  `vegeterian` tinyint(1) NOT NULL,
  `calories` float NOT NULL,
  `points` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `products`
--

CREATE TABLE `products` (
  `product_ID` int(20) NOT NULL,
  `name` varchar(22) NOT NULL,
  `barcode` int(15) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `components` varchar(30) NOT NULL,
  `calories` int(10) NOT NULL,
  `vegan` tinyint(1) NOT NULL,
  `vegeterian` tinyint(1) NOT NULL,
  `points` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `products`
--

INSERT INTO `products` (`product_ID`, `name`, `barcode`, `description`, `category`, `location`, `components`, `calories`, `vegan`, `vegeterian`, `points`) VALUES
(1, 'Γάλα', 2147483647, 'Αγελαδινό γάλα που παράγετε στα τρίκαλα μπλα', 'Γαλακτροκο', '0', 'υδατάνθρακες 8 προτεϊνες 20 λι', 50, 0, 0, 1),
(2, 'Γάλα', 2147483647, 'Αγελαδινό γάλα που παράγετε στα τρίκαλα μπλα', 'Γαλακτροκο', 'Τρίκαλα', 'υδατάνθρακες 8 προτεϊνες 20 λι', 50, 0, 0, 1),
(3, 'Γάλα2', 2147483647, 'Αγελαδινό γάλα που παράγετε στα τρίκαλα μπλα', 'Γαλακτροκο', 'Τρίκαλα', 'υδατάνθρακες 8 προτεϊνες 20 λι', 50, 0, 0, 1),
(4, 'Γάλα', 2147483647, 'Αγελαδινό γάλα που παράγετε στα τρίκαλα μπλα', 'Γαλακτροκο', 'Τρίκαλα', 'υδατάνθρακες 8 προτεϊνες 20 λι', 50, 0, 0, 1),
(5, 'Γάλα3', 2147483647, 'Αγελαδινό γάλα που παράγετε στα τρίκαλα μπλα', 'Γαλακτροκο', 'Τρίκαλα', 'υδατάνθρακες 8 προτεϊνες 20 λι', 50, 0, 0, 1),
(6, 'Γάλα4', 2147483647, 'Αγελαδινό γάλα που παράγετε στα τρίκαλα μπλα', 'Γαλακτροκο', 'Τρίκαλα', 'υδατάνθρακες 8 προτεϊνες 20 λι', 50, 0, 0, 1),
(7, 'Γάλα5', 2147483647, 'Αγελαδινό γάλα που παράγετε στα τρίκαλα μπλα', 'Γαλακτροκο', 'Τρίκαλα', 'υδατάνθρακες 8 προτεϊνες 20 λι', 50, 0, 0, 1),
(8, 'Γάλα6', 2147483647, 'Αγελαδινό γάλα που παράγετε στα τρίκαλα μπλα', 'Γαλακτροκο', 'Τρίκαλα', 'υδατάνθρακες 8 προτεϊνες 20 λι', 50, 0, 0, 1),
(9, 'Γάλα7', 2147483647, 'Αγελαδινό γάλα που παράγετε στα τρίκαλα μπλα', 'Γαλακτροκο', 'Τρίκαλα', 'υδατάνθρακες 8 προτεϊνες 20 λι', 50, 0, 0, 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(81) NOT NULL,
  `email` varchar(30) NOT NULL,
  `hid` varchar(50) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Sex` enum('Male','Female') NOT NULL,
  `age` int(20) NOT NULL,
  `weight` int(20) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `allergies` text NOT NULL,
  `userscore` int(55) NOT NULL,
  `absence` tinyint(1) NOT NULL,
  `user_ID` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `hid`, `Name`, `Lastname`, `Sex`, `age`, `weight`, `Location`, `allergies`, `userscore`, `absence`, `user_ID`) VALUES
('ronis', '2b4f7f6238dbd83ff223114454333909', 'ronisyo@hotmail.com', '????S?J?$,3?s?|9??9j?ӹy%??Q?', '', '', 'Male', 0, 0, '0', '', 50, 0, 1),
('ronis1', '2b4f7f6238dbd83ff223114454333909', 'ronisyo@hotmail.com', '????S?J?$,3?s?|9??9j?ӹy%??Q?', 'STYLIANOS', 'ΜΑΚΑΡΩΝΗΣ', 'Male', 28, 100, '0', 'none', 111, 0, 2),
('ronis2', '2b4f7f6238dbd83ff223114454333909', 'ronisyo@hotmail.com', '????S?J?$,3?s?|9??9j?ӹy%??Q?', 'STYLIANOS', 'ΜΑΚΑΡΩΝΗΣ', 'Female', 13, 111, '0', 'none', 20, 0, 3),
('ronis4', '2b4f7f6238dbd83ff223114454333909', 'lala@lalala.com', 'r&i\"!,?? un??j?', 'asd', 'asd', 'Female', 123, 2133, '0', 'ασδ', 0, 0, 4);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`meal_id`);

--
-- Ευρετήρια για πίνακα `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_ID`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `meals`
--
ALTER TABLE `meals`
  MODIFY `meal_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `products`
--
ALTER TABLE `products`
  MODIFY `product_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
