-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2025 at 05:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaming_store`
--
CREATE DATABASE IF NOT EXISTS `gaming_store` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gaming_store`;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `dob`, `gender`, `email`, `password`, `phone`, `status`) VALUES
(1, 'Rayyan Javed', '9-Dec-1999', 'male', 'rayyan@gmail.com', 'Rayyan@123', '03242339864', 'active'),
(2, 'Ahsan Zafar', '12-Dec-1997', 'male', 'ahsan@gmail.com', 'Ahsan@123', '03058456541', 'active'),
(4, 'Muhammad Huzaifa', '7-Nov-2010', 'female', 'mhz_123@gmail.com', 'Huzaifa@123', '03245487871', 'active'),
(7, 'Xena Hello', '22-May-1994', 'male', 'figugyhe@mailinator.com', 'Pa$$w0rd!', '03242339864', 'inactive'),
(8, 'Sir Faraz Basit', '14-Aug-1997', 'male', 'sirfaraz@gmail.com', 'SirFaraz@123', '03245487871', 'active'),
(9, 'Carlos', '23-Mar-2007', 'custom', 'tehowikag@mailinator.com', 'Pa$$w0rd!', '05211466351', 'active');

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `total_amount`, `shipping_address`) VALUES
(2, 1, '2025-12-28', 47600.00, 'fb area'),
(3, 1, '2025-12-28', 52000.00, 'fb area');

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price_at_purchase`) VALUES
(1, 2, 11, 2, 4500.00),
(2, 2, 9, 4, 3700.00),
(3, 3, 16, 1, 13000.00),
(4, 3, 15, 1, 13000.00);

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `company`, `platform`, `genre`, `price`, `stock`, `image`, `status`) VALUES
(2, 'Animal Crossing - New Horizons', 'Nintendo', 'Nintendo', 'Platformer', 12000.00, 14, 'Animal_Crossing_New_Horizons.jpg', 'active'),
(9, 'BloodBorne', 'Bandai Namco', 'Playstation 4', 'Action, Adventure', 3700.00, 8, 'bloodborne.jpg', 'active'),
(11, 'Halo - Master Chief Collection', 'Bungee Studios', 'Xbox', 'Action, Shooter', 4500.00, 15, 'halo master chief xbox.jpg', 'active'),
(13, 'Kirby - The Forgotten Land', 'The Kirby Company', 'Nintendo', 'Adventure, Platformer', 21000.00, 9, 'KIRBY THE FORGOTTEN LAND.jpg', 'active'),
(14, 'Red Dead Redemption', 'Rockstar Studios', 'Playstation 5', 'Action, Adventure', 8000.00, 2, 'rdr1.jpg', 'active'),
(15, 'Forza Horizon 5', 'Microsoft', 'Xbox', 'Racing', 13000.00, 12, 'images (3).jpg', 'active'),
(16, 'Black Myth Wukong', 'Game Science', 'Playstation 5', 'Action, Souls-Like', 13000.00, 9, 'black myth wukong ps5.jpg', 'active'),
(17, 'Metroid Dread', 'Nintendo', 'Nintendo', 'Platformer', 18000.00, 5, 'METROID DREAD.jpg', 'active'),
(18, 'Assassins Creed Mirage', 'Ubisoft', 'Xbox', 'Action, Adventure', 9000.00, 24, 'assassins creed mirage xbox.jpg', 'active'),
(19, 'Demon Souls', 'From Software', 'Playstation 5', 'Action RPG', 5000.00, 25, 'demon souls.jpg', 'active'),
(20, 'Call Of Duty: Black Ops 6 ', 'Activision', 'Playstation 5', 'Arcade Shooter', 8000.00, 10, 'call of duty 6 ps5.jpg', 'active'),
(21, 'Astro Bot', 'Team Asobi', 'Playstation 5', 'Platformer', 7000.00, 5, 'astrobot ps5.jpg', 'active'),
(22, 'Dragon Ball Sparking Zero', 'Bandai Namco', 'Playstation 5', 'Action RPG', 6500.00, 17, 'dragon ball sparkling zero ps5.jpg', 'active'),
(23, 'Fortnite ', 'Epic Games', 'Playstation 5', 'Battle Royale', 8700.00, 2, 'fortnite ps5.jpg', 'active'),
(24, 'Final Fantasy VII', 'Square Enix', 'Playstation 5', 'Adventure game', 9600.00, 13, 'final fantasy vii  ps5.jpg', 'active'),
(25, 'God Of War: Ragnarok', 'Santa Monica', 'Playstation 5', 'Action, Adventure', 15000.00, 29, 'god of war ragnarok ps5.jpg', 'active'),
(26, 'The Last Of Us Part II', 'Naughty Dog', 'Playstation 5', 'Action, Adventure', 7000.00, 10, 'last of us part 2.jpg', 'active'),
(27, 'Grand Turismo 7', 'Sony', 'Playstation 5', 'Racing', 8700.00, 12, 'grand tursimo 7.jpg', 'active'),
(28, 'Red Dead Redemption 2', 'Rockstar Studios', 'Playstation 5', 'Action, Adventure', 7500.00, 34, 'red dead redemption 2 ps5.jpg', 'active'),
(29, 'FC 25', 'EA', 'Playstation 5', 'Sports', 1000.00, 11, 'fc 25 xbox.jpg', 'active'),
(30, 'UFC 5', 'EA', 'Playstation 5', 'Fighting', 6500.00, 25, 'ea sports ufc 5 ps5.jpg', 'active'),
(31, 'Resident Evil IV Remake', 'Capcom', 'Playstation 5', 'Action RPG', 9600.00, 5, 'resident evil 4.jpg', 'active'),
(32, 'Spooder man 2', 'Insomniac Games', 'Playstation 5', 'Action, Adventure', 6500.00, 44, 'spider man 2 ps5.jpg', 'active'),
(33, 'Tom Clancy Six Siege', 'Ubisoft', 'Playstation 5', 'Action, Stealth', 2000.00, 11, 'tom clancy six siege ps5.jpg', 'active'),
(34, 'The Crew Motorfest', 'Ubisoft', 'Playstation 5', 'Racing', 9600.00, 55, 'the crew motorfest ps5.jpg', 'active'),
(35, 'War Hammer 40,000', 'Games Workshop', 'Playstation 5', 'Action RPG', 3000.00, 31, 'warhammer 40,000 ps5.jpg', 'active'),
(36, 'Forza Horizon 5', 'Microsoft', 'Playstation 5', 'Racing', 8000.00, 22, 'forza horizon 5 xbox.jpg', 'active'),
(37, 'Hell Blade 2', 'Ninja Studios', 'Xbox', 'Action, Adventure', 2500.00, 23, 'hellblade 2 xbox.jpg', 'active'),
(38, 'Skyrim ', 'Bethesda Studios', 'Xbox', 'Action, Adventure', 8700.00, 26, 'skyrim xbox.jpg', 'active'),
(39, 'Sea Of Thieves', 'Rare', 'Xbox', 'Action, Adventure', 3330.00, 13, 'SEA OF THEIVES.jpg', 'active'),
(40, 'Halo Infinite', 'Team Bunjee', 'Xbox', 'Sci-Fi Shooter', 4500.00, 49, 'halo infinite xbox.jpg', 'active'),
(41, 'Flight Simulator', 'Microsoft', 'Xbox', 'Simulation', 9600.00, 11, 'MICROFOST FLIGHT SIMULATOR.jpg', 'active'),
(42, 'Ratchet And Clank', 'Insomniac Games', 'Playstation 5', 'Action, Adventure', 4000.00, 34, 'ratchet and clank rift apart.jpg', 'active'),
(43, 'Gears 5', 'The Coalition', 'Xbox', 'Action, Adventure', 450.00, 10, 'gears 5 xbox.jpg', 'active'),
(44, 'Ori and Wisps', 'Moon Studios', 'Xbox', '2D Adventure', 9600.00, 17, 'ori ad the will of the wisps xbox.jpg', 'active'),
(45, 'Gears of Wars 4', 'The Coalition', 'Xbox', 'Action RPG', 3311.00, 18, 'Gears of war 4 xbox.jpg', 'active'),
(46, 'Hell Divers 2', 'Arrowhead Studios', 'Xbox', 'Co-op, Shooter', 16000.00, 17, 'hell divers 2.jpg', 'active'),
(47, 'GTA V', 'Rocks', 'Playstation 4', 'Action, Adventure', 10000.00, 120, 'gta v ps4.jpg', 'active'),
(48, 'Horizon Zero Dawn', 'Guerrilla Games', 'Playstation 4', 'Action RPG', 4444.00, 55, 'horizon zero dawn ps4.jpg', 'active'),
(49, 'Minecraft', 'Mojang', 'Playstation 4', 'Real-time strategy', 4500.00, 3440, 'mincecraft ps5.jpg', 'active'),
(50, 'Returnal', 'Climax Studios', 'Playstation 4', 'TPS, Action', 6000.00, 25, 'returnal ps5.jpg', 'active'),
(51, 'Starfield', 'Bethesda Studios', 'Xbox', 'Action RPG', 8000.00, 29, 'STARFIELD.jpg', 'active'),
(52, 'Ghost Of Tsushima', 'Sucker Punch', 'Playstation 4', 'Action, Adventure', 16000.00, 43, 'ghost of tshushma.jpg', 'active'),
(53, 'Nier Automata', 'Platinum Games', 'Playstation 4', 'Action RPG', 2000.00, 7, 'Nier Automata.jpg', 'active'),
(54, 'Persona 5', 'Atlus, P Studio', 'Playstation 4', 'Dungeon crawl', 1250.00, 77, 'person 5 royal ps4.jpg', 'active'),
(55, 'Cuphead', 'StudioMDHR', 'Playstation 4', 'Run-And-Gun', 3000.00, 12, 'Cup Head ps4.jpg', 'active'),
(56, 'God Of War', 'Santa Monica', 'Playstation 4', 'Action, Adventure', 40000.00, 23, 'god of war 2018_.jpg', 'active'),
(57, 'Fallout 4', 'Bethesda Studios', 'Playstation 4', 'Action, Strategy', 200.00, 1000, 'fallout 4.jpg', 'active'),
(58, 'Marvel Spider-Man ', 'Insomniac Games', 'Playstation 4', 'Action, Adventure', 2000.00, 20, 'spider-man ps4.jpg', 'active'),
(59, 'Witcher 3', 'CD Projekt Red', 'Playstation 4', 'Action RPG', 1500.00, 6, 'witcher 3  ps4.jpg', 'active'),
(60, 'Uncharted 4', 'Naughty Dog', 'Playstation 4', 'Action, Adventure', 2500.00, 40, 'uncharted  4 ps4.jpg', 'active'),
(61, 'Bayonetta 3', 'Platinum Games', 'Nintendo', 'Hack-And-Slash', 23000.00, 13, 'bayonetta3.jpg', 'active'),
(62, 'WWE 2K22', '2k Games', 'Playstation 4', 'Sports', 4000.00, 23, 'wwe 2k22.jpg', 'active'),
(63, 'Pokemon Scarlet ', 'Game Freak', 'Nintendo', 'Adventure RPG', 4000.00, 23, 'POKEMON SCARLETjpg.jpg', 'active'),
(64, 'Super Mario Odyssey', 'Nintendo EPD Tokyo', 'Nintendo', 'Open World 3D', 25000.00, 23, 'super mario odysst nintendo.jpg', 'active'),
(65, 'Super Smash Bros Ultimate', 'Sora Ltd.', 'Nintendo', 'Platform Fighter', 30000.00, 12, 'SUPER SMASH BRO ULTIMATE SWITCH.jpg', 'active'),
(66, 'Splatoon 3', 'Nintendo ', 'Nintendo', 'Third-Person Shooter', 4500.00, 122, 'SPLATOON 3.jpg', 'active'),
(67, 'Luigis Mansion 3', 'Next Level Games', 'Nintendo', 'Action, Adventure', 34000.00, 34, 'luigis mansion 3 nintendo.jpg', 'active'),
(68, 'Mario Kart World', 'Nintendo EPD', 'Nintendo', 'kart racing game', 30400.00, 23, 'mario kart.jpg', 'active'),
(69, 'Perfect Dark', '4J Studios', 'Nintendo', 'Sci-Fi FPS ', 1000.00, 10, 'PERFECT DARK.jpg', 'active'),
(70, 'Pokemon Violet', 'Game Freak', 'Nintendo', 'RPG', 20000.00, 21, 'pokemon violet nintendo.jpg', 'active'),
(71, 'Sea Of Stars', 'Sabotage Studio', 'Nintendo', 'Retro, RPG', 3000.00, 100, 'sea of stars xbox.jpg', 'active');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `status`) VALUES
(1, 'Rayyan Sheikh', 'Rayyan@123', 'admin@gmail.com', 'active'),
(2, 'Ahsan Zafar', 'Ahsan@123', 'admin@gmail.com', 'active'),
(5, 'Sir Faraz Basit', 'SirFarazBasit@123', 'sirfaraz@gmail.com', 'active'),
(9, 'Muhammad Huzaifa', 'Huzaifa@123', 'admin@gmail.com', 'active');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
