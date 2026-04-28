-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2026 at 12:41 AM
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
-- Database: `ironveil_forge`
--

-- --------------------------------------------------------

--
-- Table structure for table `bladeedges`
--

CREATE TABLE `bladeedges` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `PriceModifier` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bladeedges`
--

INSERT INTO `bladeedges` (`ID`, `Name`, `Image`, `PriceModifier`) VALUES
(1, 'Single Edge', '../Images/CustomizationOptions/BladeEdges/single.png', 0.00),
(2, 'Double Edge', '../Images/CustomizationOptions/BladeEdges/double.png', 25.00),
(3, 'False Edge', '../Images/CustomizationOptions/BladeEdges/false.png', 15.00),
(4, 'Blunt', '../Images/CustomizationOptions/BladeEdges/blunt/png', 5.00),
(5, 'Plain', '../Images/CustomizationOptions/BladeEdges/plain.png', 0.00),
(6, 'Serrated', '../Images/CustomizationOptions/BladeEdges/serrated.png', 40.00),
(7, 'Hybrid', '../Images/CustomizationOptions/BladeEdges/hybrid.png', 45.00),
(8, 'Flat Grind', '../Images/CustomizationOptions/BladeEdges/flat.png', 15.00),
(9, 'Hollow', '../Images/CustomizationOptions/BladeEdges/hollow.png', 30.00),
(10, 'Convex', '../Images/CustomizationOptions/BladeEdges/convex.png', 40.00),
(11, 'Chisel', '../Images/CustomizationOptions/BladeEdges/chisel.png', 20.00),
(12, 'Scandi', '../Images/CustomizationOptions/BladeEdges/scandi.png', 25.00),
(13, 'Saber', '../Images/CustomizationOptions/BladeEdges/saber.png', 25.00);

-- --------------------------------------------------------

--
-- Table structure for table `bladeshapes`
--

CREATE TABLE `bladeshapes` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `PriceModifier` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bladeshapes`
--

INSERT INTO `bladeshapes` (`ID`, `Name`, `Image`, `PriceModifier`) VALUES
(1, 'Clip', '../Images/CustomizationOptions/BladeShapes/clip.png', 25.00),
(2, 'Drop', '../Images/CustomizationOptions/BladeShapes/drop.png', 10.00),
(3, 'Tanto', '../Images/CustomizationOptions/BladeShapes/tanto.png', 30.00),
(4, 'Fuller', '../Images/CustomizationOptions/BladeShapes/fuller.png', 45.00),
(5, 'Leaf', '../Images/CustomizationOptions/BladeShapes/leaf.png', 40.00),
(6, 'Scimitar', '../Images/CustomizationOptions/BladeShapes/scimitar.png', 55.00),
(7, 'Falchion', '../Images/CustomizationOptions/BladeShapes/falcion.png', 40.00),
(8, 'Bowie', '../Images/CustomizationOptions/BladeShapes/bowie.png', 35.00),
(9, 'Wharncliffe', '../Images/CustomizationOptions/BladeShapes/wharncliffe.png', 25.00),
(10, 'Recurve', '../Images/CustomizationOptions/BladeShapes/recurve.png', 50.00),
(11, 'Kukri', '../Images/CustomizationOptions/BladeShapes/kukri.png', 60.00),
(12, 'Estoc', '../Images/CustomizationOptions/BladeShapes/estoc.png', 70.00);

-- --------------------------------------------------------

--
-- Table structure for table `blunthandweapons`
--

CREATE TABLE `blunthandweapons` (
  `ID` int(10) UNSIGNED NOT NULL,
  `ProductID` int(10) UNSIGNED DEFAULT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Image2` varchar(255) DEFAULT NULL,
  `Image3` varchar(255) DEFAULT NULL,
  `Image4` varchar(255) DEFAULT NULL,
  `Subcategory_ID` int(10) UNSIGNED NOT NULL,
  `HeadMaterial_ID` int(10) UNSIGNED NOT NULL,
  `SpikesNum` int(10) UNSIGNED NOT NULL,
  `ChainLength` decimal(10,2) DEFAULT NULL,
  `ShaftMaterial_ID` int(10) UNSIGNED NOT NULL,
  `Grip_ID` int(10) UNSIGNED DEFAULT NULL,
  `Pommel_ID` int(10) UNSIGNED NOT NULL,
  `PommelMaterial_ID` int(10) UNSIGNED NOT NULL,
  `Engravings` varchar(40) DEFAULT NULL,
  `Inscriptions` varchar(40) DEFAULT NULL,
  `Length_cm` decimal(10,2) NOT NULL,
  `Weight_kg` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blunthandweapons`
--

INSERT INTO `blunthandweapons` (`ID`, `ProductID`, `Name`, `Image`, `Image2`, `Image3`, `Image4`, `Subcategory_ID`, `HeadMaterial_ID`, `SpikesNum`, `ChainLength`, `ShaftMaterial_ID`, `Grip_ID`, `Pommel_ID`, `PommelMaterial_ID`, `Engravings`, `Inscriptions`, `Length_cm`, `Weight_kg`, `Price`, `Description`) VALUES
(1, 86, 'Skullcrusher Mace', '../Images/BluntHandWeapons/skullcrusherMace.png', NULL, NULL, NULL, 11, 1, 6, NULL, 2, 7, 1, 1, NULL, NULL, 60.96, 3.50, 650.00, 'The Skullcrusher Mace is a high-carbon steel mace with six spikes, designed to deliver devastating blows. A hickory shaft with a leather grip and sphere pommel ensures balance and control. Its 61 cm length and hefty 3.5 kg weight make it a fearsome choice in close combat.'),
(2, 87, 'Doomrend Mace', '../Images/BluntHandWeapons/doomrendMace.png', NULL, NULL, NULL, 11, 3, 6, NULL, 8, 1, 3, 3, NULL, NULL, 66.04, 3.80, 680.00, 'Doomrend Mace features a tool steel head with six spikes, optimized for crushing armor. Hornbeam shaft and straight grip give the wielder precision, while a flat pommel balances the weapon. At 66 cm and 3.8 kg, it combines power and manageability.'),
(3, 88, 'Bonebreaker Flail', '../Images/BluntHandWeapons/bonebreakerFlail.png', NULL, NULL, NULL, 13, 1, 16, 22.86, 9, 7, 12, 1, NULL, NULL, 71.12, 4.20, 900.00, 'Bonebreaker Flail is a high-carbon steel flail with twelve spikes on a 22.9 cm chain, ideal for striking over shields. Its purpleheart shaft and leather grip provide control, finished with a flat pommel. The 71 cm weapon weighs 4.2 kg, delivering punishing momentum.'),
(4, 89, 'Thunderstrike Morningstar', '../Images/BluntHandWeapons/thunderstrikeMorningstar.png', NULL, NULL, NULL, 12, 1, 10, NULL, 11, 11, 1, 1, NULL, NULL, 55.88, 3.20, 750.00, 'Thunderstrike Morningstar is a high-carbon steel morningstar with ten spikes, built for heavy impact. A hornbeam shaft with cord-wrapped grip ensures a secure hold, paired with a sphere pommel. Its 56 cm length and 3.2 kg weight make it effective in tight quarters.'),
(5, 90, 'Ironfang Morningstar', '../Images/BluntHandWeapons/ironfangMorningstar.png', NULL, NULL, NULL, 12, 3, 8, NULL, 4, 2, 1, 3, NULL, NULL, 60.96, 3.50, 720.00, 'Ironfang Morningstar combines tool steel with eight spikes for crushing efficiency. A beech shaft and waisted grip offer precision, balanced by a flat pommel. At 61 cm and 3.5 kg, it delivers both control and force.'),
(6, 91, 'Grimspike War Hammer', '../Images/BluntHandWeapons/grimspikeWarHammer.png', NULL, NULL, NULL, 14, 1, 1, NULL, 2, 1, 12, 1, NULL, NULL, 71.12, 4.50, 1050.00, 'Grimspike War Hammer features a high-carbon steel head for blunt force attacks. Its hickory shaft with straight grip and flat pommel maximizes balance and swing power. Measuring 71 cm and weighing 4.5 kg, it is a formidable hammer in battle.'),
(7, 92, 'Ravager Horseman’s Pick', '../Images/BluntHandWeapons/ravagerHorsemanPick.png', NULL, NULL, NULL, 15, 1, 1, NULL, 9, 7, 8, 1, NULL, NULL, 55.88, 3.80, 950.00, 'Ravager Horseman’s Pick is a high-carbon steel pick designed for mounted combat, with a sharp single point. Ironwood shaft and cord-wrapped grip provide stability, paired with a ring pommel. At 56 cm and 3.8 kg, it strikes with precision from horseback.'),
(8, 93, 'Chain of Blackmere', '../Images/BluntHandWeapons/chainBlackmere.png', NULL, NULL, NULL, 13, 4, 8, 20.32, 6, 1, 8, 1, NULL, NULL, 66.04, 4.00, 420.00, 'Chain of Blackmere is a tool steel flail with eight spikes on a 20.3 cm chain for swinging attacks over obstacles. Maple shaft with straight grip offers control, finished with a flat pommel. Its 66 cm length and 4 kg weight make it a versatile striking weapon.'),
(9, 94, 'Ironreach War Hammer', '../Images/BluntHandWeapons/ironreachWarHammer.png', NULL, NULL, NULL, 14, 1, 1, NULL, 2, 7, 2, 1, NULL, NULL, 55.88, 3.20, 460.00, 'Ironreach War Hammer is a high-carbon steel hammer optimized for direct strikes. A hickory shaft with leather grip and sphere pommel gives perfect balance. The 56 cm weapon weighs 3.2 kg, ideal for delivering reliable blows.'),
(10, 95, 'Saddlebreak Pick', '../Images/BluntHandWeapons/saddlebreakPick.png', NULL, NULL, NULL, 15, 1, 1, NULL, 1, 7, 12, 1, NULL, NULL, 50.80, 2.90, 440.00, 'Saddlebreak Pick is a high-carbon steel horseman’s pick designed for mounted assaults. Hickory shaft with leather grip and flat pommel ensures handling stability. Its compact 51 cm length and 2.9 kg weight make it fast and precise.'),
(11, 96, 'Crown of Stonefall', '../Images/BluntHandWeapons/crownStonefall.png', NULL, NULL, NULL, 11, 1, 6, 0.00, 7, 7, 1, 1, NULL, NULL, 53.34, 3.10, 390.00, 'A circular-headed mace forged to mimic a fallen monarch’s crown, its heavy ridges and studded perimeter deliver crushing blows with regal finality. Built for durability and balance, it excels in close-quarters engagements where raw impact matters most.'),
(12, 97, 'Dawnbreak Spire', '../Images/BluntHandWeapons/dawnbreakSpire.png', NULL, NULL, NULL, 12, 1, 8, NULL, 4, 7, 12, 1, NULL, NULL, 58.42, 3.30, 410.00, 'Rising like a radiant tower, this flanged mace channels focused striking power through its tapered head and reinforced shaft. Designed for precision as much as force, it pierces armor gaps and shatters defenses with disciplined momentum.'),
(13, 98, 'Blackridge Breaker', '../Images/BluntHandWeapons/blackridgeBreaker.png', NULL, NULL, NULL, 14, 1, 1, NULL, 7, 7, 12, 1, NULL, NULL, 48.26, 3.00, 450.00, 'Hewn from darkened metal and shaped for relentless impact, this hammer embodies the unforgiving terrain it’s named after. Its broad striking face and compact form make it a dependable breaching weapon, capable of cracking shields, stone, and bone alike.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(10) UNSIGNED NOT NULL,
  `UserID` int(11) UNSIGNED NOT NULL,
  `ProductTable` varchar(50) NOT NULL,
  `ProductID` int(10) UNSIGNED NOT NULL,
  `Quantity` int(10) UNSIGNED NOT NULL,
  `PriceAtAdd` decimal(10,2) NOT NULL,
  `AddedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daggers`
--

CREATE TABLE `daggers` (
  `ID` int(10) UNSIGNED NOT NULL,
  `ProductID` int(10) UNSIGNED DEFAULT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Image2` varchar(255) DEFAULT NULL,
  `Image3` varchar(255) DEFAULT NULL,
  `Image4` varchar(255) DEFAULT NULL,
  `Subcategory_ID` int(10) UNSIGNED NOT NULL,
  `BladeMaterial_ID` int(10) UNSIGNED NOT NULL,
  `BladeEdge_ID` int(10) UNSIGNED NOT NULL,
  `HiltMaterial_ID` int(10) UNSIGNED NOT NULL,
  `Grip_ID` int(10) UNSIGNED DEFAULT NULL,
  `Pommel_ID` int(10) UNSIGNED NOT NULL,
  `PommelMaterial_ID` int(10) UNSIGNED NOT NULL,
  `PommelGem_ID` int(10) UNSIGNED DEFAULT NULL,
  `SheathMaterial_ID` int(10) UNSIGNED NOT NULL,
  `SheathColor_ID` int(10) UNSIGNED NOT NULL,
  `SheathType_ID` int(10) UNSIGNED NOT NULL,
  `Engravings` varchar(40) DEFAULT NULL,
  `Inscriptions` varchar(40) DEFAULT NULL,
  `BladeLength_cm` decimal(10,2) NOT NULL,
  `Weight_kg` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daggers`
--

INSERT INTO `daggers` (`ID`, `ProductID`, `Name`, `Image`, `Image2`, `Image3`, `Image4`, `Subcategory_ID`, `BladeMaterial_ID`, `BladeEdge_ID`, `HiltMaterial_ID`, `Grip_ID`, `Pommel_ID`, `PommelMaterial_ID`, `PommelGem_ID`, `SheathMaterial_ID`, `SheathColor_ID`, `SheathType_ID`, `Engravings`, `Inscriptions`, `BladeLength_cm`, `Weight_kg`, `Price`, `Description`) VALUES
(1, 71, 'Ashveil Stiletto', '../Images/Daggers/ashveilStiletto.png', NULL, NULL, NULL, 6, 1, 2, 8, 1, 5, 1, NULL, 1, 1, 1, NULL, NULL, 30.00, 0.45, 280.00, 'The Ashveil Stiletto is a high-carbon steel stiletto with a double-edged blade, designed for precise thrusts. Its black walnut hilt and straight grip offer a secure hold, while a faceted pommel balances the weapon. A minimal black leather sheath keeps it practical and ready for quick access.'),
(2, 72, 'The Whittlemark Knife', '../Images/Daggers/whittlemarkKnife.png', NULL, NULL, NULL, 10, 2, 2, 6, 1, 12, 2, NULL, 1, 1, 1, NULL, NULL, 28.00, 0.50, 340.00, 'Forged from tool steel with a double-edged blade, The Whittlemark Knife is built for accuracy and reliability. An ash hilt with straight grip ensures steady handling, complemented by a flat pommel. The minimal black leather sheath emphasizes function over decoration.'),
(3, 73, 'Vexmere Rondel', '../Images/Daggers/vexmereRondel.png', NULL, NULL, NULL, 8, 3, 1, 4, 1, 7, 3, 2, 2, 6, 2, NULL, NULL, 32.00, 0.55, 390.00, 'The Vexmere Rondel combines PM stainless steel with a single-edged blade, ideal for piercing armor gaps. A beech hilt with a straight grip and a hook pommel provides control and balance. Housed in a wooden dark brown sheath, it is both durable and ready for field use.'),
(4, 74, 'Greythorn Poignard', '../Images/Daggers/greythornPoignard.png', NULL, NULL, NULL, 7, 8, 2, 10, 7, 1, 1, NULL, 1, 2, 1, NULL, NULL, 29.00, 0.48, 230.00, 'Greythorn Poignard is crafted from dark steel with a double-edged blade, perfect for close-quarters combat. Its hornbeam hilt and wood grip give precision, while a sphere pommel adds balance. The minimal dark brown sheath ensures reliable protection for the blade.'),
(5, 75, 'Dreadfen Sica', '../Images/Daggers/dreadfenSica.png', NULL, NULL, NULL, 9, 3, 1, 7, 1, 1, 1, NULL, 1, 2, 1, NULL, NULL, 33.00, 0.55, 310.00, 'The Dreadfen Sica uses PM stainless steel in a single-edged sica design, optimized for slashing strikes. A hornbeam hilt with straight grip provides control, complemented by a disc pommel for balance. The minimal dark brown sheath keeps it practical and quick to draw.'),
(6, 76, 'The Embercoil Anelace', '../Images/Daggers/embercoilAnelace.png', NULL, NULL, NULL, 5, 1, 2, 1, 1, 5, 1, NULL, 1, 1, 1, NULL, NULL, 31.00, 0.50, 360.00, 'This anelace features high-carbon steel with a double-edged blade, built for quick, decisive thrusts. A hickory hilt with straight grip and a wheel pommel balance the weapon in hand. Its minimal black leather sheath prioritizes functionality and swift access.'),
(7, 77, 'Bramblefang Dagger', '../Images/Daggers/bramblefangDagger.png', NULL, NULL, NULL, 10, 7, 2, 6, 2, 2, 1, NULL, 2, 2, 2, NULL, NULL, 30.00, 0.48, 360.00, 'Bramblefang Dagger is forged from tool steel with a double-edged blade, ideal for precision strikes. An ash hilt with waisted grip offers control, while a disc pommel balances the weapon. The ornate dark brown sheath gives it a touch of visual distinction while remaining practical.'),
(8, 78, 'Ironreach Dagger', '../Images/Daggers/ironreachDagger.png', NULL, NULL, NULL, 10, 3, 2, 11, 1, 12, 3, NULL, 1, 1, 1, NULL, NULL, 28.00, 0.45, 260.00, 'Ironreach Dagger uses PM stainless steel with a double-edged blade, designed for quick, accurate attacks. A birch hilt with straight grip is paired with a flat pommel for stability. Its minimal black leather sheath keeps the design functional and ready for use.'),
(9, 79, 'Greycourt Anelace', '../Images/Daggers/greycourtAnelace.png', NULL, NULL, NULL, 5, 1, 2, 7, 1, 2, 1, NULL, 1, 1, 1, NULL, NULL, 32.00, 0.50, 340.00, 'Slender and understated, this anelace favors clean thrusts and controlled precision over spectacle. Its refined proportions and balanced weight make it a discreet yet effective companion for duels, patrols, and quiet encounters.'),
(10, 80, 'Duskcoil Sica', '../Images/Daggers/duskcoilSica.png', NULL, NULL, NULL, 9, 8, 1, 2, 1, 3, 1, NULL, 2, 2, 1, NULL, NULL, 34.00, 0.55, 310.00, 'With a subtle inward curve and darkened finish, this sica is built for deceptive angles and close-range maneuverability. The blade’s coiling profile allows strikes to slip past guards, rewarding fluid movement and calculated timing.');

-- --------------------------------------------------------

--
-- Table structure for table `gripstyles`
--

CREATE TABLE `gripstyles` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `PriceModifier` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gripstyles`
--

INSERT INTO `gripstyles` (`ID`, `Name`, `Image`, `PriceModifier`) VALUES
(1, 'Straight', '../Images/CustomizationOptions/GripStyles/straight.png', 0.00),
(2, 'Waisted', '../Images/CustomizationOptions/GripStyles/waisted.png', 6.00),
(3, 'Curved', '../Images/CustomizationOptions/GripStyles/curved.png', 8.00),
(4, 'Flared', '../Images/CustomizationOptions/GripStyles/flared.png', 10.00),
(5, 'Faceted', '../Images/CustomizationOptions/GripStyles/faceted.png', 22.00),
(6, 'Cord-wrapped', '../Images/CustomizationOptions/GripStyles/cordWrapped.png', 12.00),
(7, 'Leather', '../Images/CustomizationOptions/GripStyles/leather.png', 15.00),
(8, 'Wire', '../Images/CustomizationOptions/GripStyles/wire.png', 18.00),
(9, 'Wood', '../Images/CustomizationOptions/GripStyles/wood.png', 0.00),
(10, 'Bone', '../Images/CustomizationOptions/GripStyles/bone.png', 14.00),
(11, 'Segmented', '../Images/CustomizationOptions/GripStyles/segmented.png', 20.00),
(12, 'Integral', '../Images/CustomizationOptions/GripStyles/integral.png', 0.00),
(13, 'Capped', '../Images/CustomizationOptions/GripStyles/capped.png', 10.00),
(14, 'Ornate', '../Images/CustomizationOptions/GripStyles/ornate.png', 30.00);

-- --------------------------------------------------------

--
-- Table structure for table `metalmaterials`
--

CREATE TABLE `metalmaterials` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `PriceModifier` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metalmaterials`
--

INSERT INTO `metalmaterials` (`ID`, `Name`, `Image`, `PriceModifier`) VALUES
(1, 'High-Carbon Steel', '../Images/CustomizationOptions/Materials/highCarbonSteel.png', 0.00),
(2, 'Tool Steel', '../Images/CustomizationOptions/Materials/toolSteel.png', 25.00),
(3, 'PM Stainless', '../Images/CustomizationOptions/Materials/pmStainlessSteel.png', 60.00),
(4, 'Titanium Alloy', '../Images/CustomizationOptions/Materials/titaniumAlloy.png', 85.00),
(5, 'Tungsten Carbide', '../Images/CustomizationOptions/Materials/tungstenCarbide.png', 110.00),
(6, 'Maraging Steel', '../Images/CustomizationOptions/Materials/maragingSteel.png', 75.00),
(7, 'Bronze Alloy', '../Images/CustomizationOptions/Materials/bronzeAlloy.png', 15.00),
(8, 'Dark Steel', '../Images/CustomizationOptions/Materials/darkSteel.png', 50.00);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `ID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) UNSIGNED NOT NULL,
  `Quantity` int(11) NOT NULL,
  `PriceAtPurchase` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`ID`, `OrderID`, `ProductID`, `Quantity`, `PriceAtPurchase`) VALUES
(1, 1, 9, 1, 1100.00),
(2, 1, 88, 1, 900.00),
(3, 2, 71, 2, 280.00),
(4, 3, 3, 1, 310.00),
(5, 3, 11, 1, 1300.00),
(6, 3, 94, 1, 460.00),
(7, 4, 105, 1, 1350.00),
(8, 5, 78, 1, 260.00),
(9, 6, 11, 2, 1300.00),
(10, 6, 77, 1, 360.00),
(11, 6, 110, 1, 1080.00),
(12, 7, 18, 1, 1150.00),
(13, 7, 38, 1, 1180.00),
(14, 7, 90, 1, 720.00),
(15, 7, 74, 2, 230.00),
(16, 7, 102, 1, 650.00),
(17, 7, 7, 1, 360.00),
(18, 8, 4, 3, 320.00),
(19, 8, 1, 1, 300.00),
(20, 9, 43, 1, 1480.00),
(21, 10, 105, 1, 1350.00),
(22, 11, 73, 2, 390.00),
(23, 12, 87, 1, 680.00),
(24, 13, 24, 1, 970.00),
(25, 13, 20, 1, 980.00),
(26, 14, 14, 1, 1220.00),
(27, 15, 25, 1, 680.00),
(28, 16, 11, 1, 1300.00),
(29, 16, 8, 1, 1200.00),
(30, 16, 79, 2, 340.00),
(31, 17, 11, 1, 1300.00),
(32, 17, 74, 2, 230.00);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `UserID` int(10) UNSIGNED NOT NULL,
  `Status` enum('pending','processing','shipped','delivered','canceled') NOT NULL DEFAULT 'pending',
  `TotalPrice` decimal(10,2) UNSIGNED NOT NULL,
  `ShippingName` varchar(255) NOT NULL,
  `ShippingStreetAddress` varchar(255) NOT NULL,
  `ShippingAptAddress` varchar(255) NOT NULL,
  `ShippingCity` varchar(255) NOT NULL,
  `ShippingState` varchar(255) NOT NULL,
  `ShippingCountry` varchar(255) NOT NULL,
  `ShippingZIP` varchar(10) NOT NULL,
  `ShippingPhoneNum` varchar(20) NOT NULL,
  `CreatedAt` datetime NOT NULL DEFAULT current_timestamp(),
  `ShippedAt` datetime DEFAULT NULL,
  `DeliveredAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `UserID`, `Status`, `TotalPrice`, `ShippingName`, `ShippingStreetAddress`, `ShippingAptAddress`, `ShippingCity`, `ShippingState`, `ShippingCountry`, `ShippingZIP`, `ShippingPhoneNum`, `CreatedAt`, `ShippedAt`, `DeliveredAt`) VALUES
(1, 1, 'delivered', 2000.00, 'Bridget Boyle', '637 Morris Ave', '', 'St. Louis', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 14:54:21', '2026-04-27 20:29:11', '2026-04-27 20:29:20'),
(2, 2, 'delivered', 560.00, 'Tom Nook', '123 Crossing Ln', '', 'NewLeaf', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 14:57:18', '2026-04-27 20:29:43', '2026-04-27 20:29:47'),
(3, 3, 'shipped', 2070.00, 'Marth', '3590 Altea Ct', '', 'Archania', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 14:59:28', '2026-04-27 20:30:37', NULL),
(4, 1, 'shipped', 1350.00, 'Bridget Boyle', '637 Morris Ave', '', 'St. Louis', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 14:59:54', '2026-04-27 20:30:42', NULL),
(5, 4, 'processing', 260.00, 'Lonk', '1346 Hyrule Dr', '', 'Ordon', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 15:00:23', NULL, NULL),
(6, 4, 'processing', 4040.00, 'Lonk', '1346 Hyrule Dr', '', 'Ordon', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 15:12:31', NULL, NULL),
(7, 3, 'processing', 4520.00, 'Marth', '3590 Altea Ct', '', 'Archanea', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 15:14:33', NULL, NULL),
(8, 2, 'pending', 1260.00, 'Tom Nook', '123 Crossing Ln', '', 'NewLeaf', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 15:15:32', NULL, NULL),
(9, 1, 'delivered', 1480.00, 'Bridget Boyle', '637 Morris Ave', '', 'St. Louis', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 15:16:15', '2026-04-28 15:31:00', '2026-04-28 15:31:28'),
(10, 1, 'canceled', 1350.00, 'Bridget Boyle', '637 Morris Ave', '', 'St. Louis', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 18:56:04', NULL, NULL),
(11, 1, 'shipped', 780.00, 'Bridget Boyle', '637 Morris Ave', '', 'St. Louis', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 18:57:32', '2026-04-28 17:17:58', NULL),
(12, 1, 'pending', 680.00, 'Bridget Boyle', '637 Morris Ave', '', 'St. Louis', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 18:59:43', NULL, NULL),
(13, 1, 'canceled', 1950.00, 'Bridget Boyle', '637 Morris Ave', '', 'St. Louis', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 19:08:22', NULL, NULL),
(14, 3, 'pending', 1220.00, 'Marth', '3590 Altea Ct', '', 'Archanea', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 19:43:07', NULL, NULL),
(15, 4, 'pending', 680.00, 'Lonk', '1346 Hyrule Dr', '', 'Ordon', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-27 19:46:21', NULL, NULL),
(16, 1, 'canceled', 3180.00, 'Bridget Boyle', '637 Morris Ave', '', 'St. Louis', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-28 15:26:10', NULL, NULL),
(17, 1, 'pending', 1760.00, 'Bridget Boyle', '637 Morris Ave', '', 'St. Louis', 'missouri', 'united-states', '11111', '(111) 111-1111', '2026-04-28 17:13:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethods`
--

CREATE TABLE `paymentmethods` (
  `ID` int(10) UNSIGNED NOT NULL,
  `UserID` int(10) UNSIGNED NOT NULL,
  `Method` varchar(255) NOT NULL,
  `CardName` varchar(255) NOT NULL,
  `CardNum` varchar(20) NOT NULL,
  `Expiry` varchar(7) NOT NULL,
  `CVV` varchar(3) NOT NULL,
  `ZIP` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymentmethods`
--

INSERT INTO `paymentmethods` (`ID`, `UserID`, `Method`, `CardName`, `CardNum`, `Expiry`, `CVV`, `ZIP`) VALUES
(3, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(4, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(5, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(6, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(7, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(8, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(9, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(10, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(11, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(12, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(13, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(14, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(15, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(16, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(17, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(18, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(19, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(20, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(21, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(22, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(23, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(24, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(25, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(26, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(27, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(28, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(29, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(30, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(31, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(32, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(33, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(34, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(35, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(36, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(37, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(38, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(39, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222'),
(40, 1, 'visa', 'Bridget Boyle', '2222 2222 2222 2222', '22 / 22', '222', '22222');

-- --------------------------------------------------------

--
-- Table structure for table `polearms`
--

CREATE TABLE `polearms` (
  `ID` int(10) UNSIGNED NOT NULL,
  `ProductID` int(10) UNSIGNED DEFAULT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Image2` varchar(255) DEFAULT NULL,
  `Image3` varchar(255) DEFAULT NULL,
  `Image4` varchar(255) DEFAULT NULL,
  `Subcategory_ID` int(10) UNSIGNED NOT NULL,
  `HeadMaterial_ID` int(10) UNSIGNED NOT NULL,
  `ShaftLength` decimal(10,2) DEFAULT NULL,
  `ShaftMaterial_ID` int(10) UNSIGNED NOT NULL,
  `Grip_ID` int(10) UNSIGNED DEFAULT NULL,
  `ButtCap_ID` int(10) UNSIGNED NOT NULL,
  `ButtCapMaterial_ID` int(10) UNSIGNED NOT NULL,
  `Engravings` varchar(40) DEFAULT NULL,
  `Inscriptions` varchar(40) DEFAULT NULL,
  `Length_cm` decimal(10,2) NOT NULL,
  `Weight_kg` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `polearms`
--

INSERT INTO `polearms` (`ID`, `ProductID`, `Name`, `Image`, `Image2`, `Image3`, `Image4`, `Subcategory_ID`, `HeadMaterial_ID`, `ShaftLength`, `ShaftMaterial_ID`, `Grip_ID`, `ButtCap_ID`, `ButtCapMaterial_ID`, `Engravings`, `Inscriptions`, `Length_cm`, `Weight_kg`, `Price`, `Description`) VALUES
(1, 101, 'Ironspire Spear', '../Images/Polearms/ironspireSpear.png', '', '', '', 16, 1, 182.88, 2, 7, 4, 1, NULL, NULL, 182.88, 2.50, 520.00, 'Ironspire Spear features a high-carbon steel spearhead on a hickory shaft, designed for reach and thrusting attacks. A cord-wrapped grip ensures control, balanced with a flat butt cap. At 183 cm and 2.5 kg, it combines agility with striking precision.'),
(2, 102, 'Stormwing Spear', '../Images/Polearms/stormwingSpear.png', '', '', '', 16, 6, 213.36, 4, 7, 2, 2, NULL, NULL, 213.36, 3.00, 650.00, 'Stormwing Spear has a tool steel head mounted on a maple shaft for maximum reach and durability. Cord-wrapped grip provides handling security, finished with a flat butt cap. Its 213 cm length and 3 kg weight make it ideal for frontline combat.'),
(3, 103, 'Dreadlance', '../Images/Polearms/dreadlance.png', '', '', '', 17, 1, 274.32, 2, 7, 12, 1, NULL, NULL, 274.32, 4.20, 1100.00, 'Dreadlance is a high-carbon steel cavalry lance with a hickory shaft for reinforced thrusting power. Leather-wrapped grip and flat butt cap give stability when mounted. Measuring 274 cm and weighing 4.2 kg, it delivers devastating strikes from horseback.'),
(4, 104, 'Gravecleaver Poleaxe', '../Images/Polearms/gravecleaverPoleaxe.png', '', '', '', 18, 1, 152.40, 1, 7, 4, 1, NULL, NULL, 167.64, 5.50, 1200.00, 'Gravecleaver Poleaxe combines a high-carbon steel axe head and hammer with a reinforced hickory shaft. Cord-wrapped grip and flat butt cap provide balance for precise swings. Its 168 cm length and 5.5 kg weight make it a brutal close-quarters weapon.'),
(5, 105, 'Shadowfang Halberd', '../Images/Polearms/shadowfangHalberd.png', '', '', '', 19, 1, 198.12, 2, 7, 4, 1, NULL, NULL, 198.12, 6.00, 1350.00, 'Shadowfang Halberd features a high-carbon steel axe-blade with a spear tip on a hickory shaft for versatile combat. Cord-wrapped grip ensures control, paired with a flat butt cap. At 198 cm and 6 kg, it balances reach and striking power.'),
(6, 106, 'The Argent Halberd', '../Images/Polearms/argentHalberd.png', '', '', '', 19, 1, 213.36, 4, 7, 12, 2, NULL, NULL, 213.36, 6.50, 1000.00, 'The Argent Halberd uses high-carbon steel for its axe-spear head mounted on a maple shaft. Cord-wrapped grip and flat butt cap provide secure handling. Measuring 213 cm and 6.5 kg, it excels in both sweeping and thrusting attacks.'),
(7, 107, 'Bonescourge Corseque', '../Images/Polearms/bonescourgeCorseque.png', '', '', '', 20, 1, 213.36, 10, 9, 4, 1, NULL, NULL, 213.36, 5.80, 1150.00, 'Bonescourge Corseque has a high-carbon steel heavy blade on an ironwood shaft, built to cleave armor. Leather-wrapped grip and flat butt cap give balance for heavy swings. Its 213 cm length and 5.8 kg weight make it a fearsome battlefield weapon.'),
(8, 108, 'Thornward Corseque', '../Images/Polearms/thornwardCorseque.png', '', '', '', 20, 8, 213.36, 11, 9, 4, 1, NULL, NULL, 213.36, 5.50, 980.00, 'Thornward Corseque features a tool steel heavy blade on an ash shaft for strong armor penetration. Leather-wrapped grip ensures stability, paired with a flat butt cap. At 213 cm and 5.5 kg, it delivers controlled, bone-crushing strikes.'),
(9, 109, 'Iron Verdict Poleaxe', '../Images/Polearms/ironVerdictPoleaxe.png', '', '', '', 18, 1, 167.64, 1, 7, 4, 1, NULL, NULL, 167.64, 5.60, 1250.00, 'Iron Verdict Poleaxe combines a high-carbon steel axe and hammer head on a reinforced hickory shaft. Cord-wrapped grip and flat butt cap maximize swing balance. Its 168 cm length and 5.6 kg weight give devastating close-combat capability.'),
(10, 110, 'Ashfall Cavalry Lance', '../Images/Polearms/ashfallCavalryLance.png', '', '', '', 17, 7, 274.32, 2, 7, 12, 1, NULL, NULL, 274.32, 4.10, 1080.00, 'Ashfall Cavalry Lance has a tool steel spearhead on a hickory shaft, optimized for mounted combat. Cord-wrapped grip and flat butt cap provide stability during high-speed charges. Measuring 274 cm and 4.1 kg, it delivers lethal thrusts from horseback.');

-- --------------------------------------------------------

--
-- Table structure for table `pommelgems`
--

CREATE TABLE `pommelgems` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `PriceModifier` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pommelgems`
--

INSERT INTO `pommelgems` (`ID`, `Name`, `Image`, `PriceModifier`) VALUES
(1, 'Garnet', '../Images/CustomizationOptions/PommelGems/garnet.png', 35.00),
(2, 'Sapphire', '../Images/CustomizationOptions/PommelGems/sapphire.png', 70.00),
(3, 'Ruby', '../Images/CustomizationOptions/PommelGems/ruby.png', 75.00),
(4, 'Jade', '../Images/CustomizationOptions/PommelGems/jade.png', 20.00),
(5, 'Rose Quartz', '../Images/CustomizationOptions/PommelGems/roseQuartz.png', 10.00),
(6, 'Topaz', '../Images/CustomizationOptions/PommelGems/topaz.png', 45.00),
(7, 'Pearl', '../Images/CustomizationOptions/PommelGems/pearl.png', 30.00),
(8, 'Onyx', '../Images/CustomizationOptions/PommelGems/onyx.png', 25.00);

-- --------------------------------------------------------

--
-- Table structure for table `pommeltypes`
--

CREATE TABLE `pommeltypes` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `PriceModifier` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pommeltypes`
--

INSERT INTO `pommeltypes` (`ID`, `Name`, `Image`, `PriceModifier`) VALUES
(1, 'Sphere', '../Images/CustomizationOptions/PommelTypes/sphere.png', 6.00),
(2, 'Disc', '../Images/CustomizationOptions/PommelTypes/disc.png', 5.00),
(3, 'Wheel', '../Images/CustomizationOptions/PommelTypes/wheel.png', 8.00),
(4, 'Spike', '../Images/CustomizationOptions/PommelTypes/spike.png', 12.00),
(5, 'Faceted', '../Images/CustomizationOptions/PommelTypes/faceted.png', 18.00),
(6, 'Ring', '../Images/CustomizationOptions/PommelTypes/ring.png', 14.00),
(7, 'Hook', '../Images/CustomizationOptions/PommelTypes/hook.png', 15.00),
(8, 'Knob', '../Images/CustomizationOptions/PommelTypes/knob.png', 8.00),
(9, 'Gem', '../Images/CustomizationOptions/PommelTypes/jeweled.png', 15.00),
(10, 'Cage', '../Images/CustomizationOptions/PommelTypes/cage.png', 22.00),
(11, 'Counterweight', '../Images/CustomizationOptions/PommelTypes/counterweight.png', 10.00),
(12, 'Flat', '../Images/CustomizationOptions/PommelTypes/flat.png', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `WeaponType` varchar(50) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Image2` varchar(255) DEFAULT NULL,
  `Image3` varchar(255) DEFAULT NULL,
  `Image4` varchar(255) DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Name`, `WeaponType`, `Price`, `Description`, `Image`, `Image2`, `Image3`, `Image4`, `CreatedAt`) VALUES
(1, 'Ironbite Throwing Axe', 'ranged', 300.00, 'Ironbite Throwing Axe features a high-carbon steel head on an ash shaft, crafted for balance and accuracy. Cord-wrapped grip ensures secure handling during repeated throws. Measuring 41 cm and 1.2 kg, it is compact yet deadly in skilled hands.', '../Images/Ranged/ironbiteThrowingAxe.png', '', '', '', '2026-02-23 01:24:30'),
(2, 'Stormstrike Throwing Axe', 'ranged', 280.00, 'Stormstrike Throwing Axe has a high-carbon steel blade mounted on a hickory shaft for optimized throwing distance. Cord-wrapped grip provides control and precision. At 36 cm and 1.1 kg, it is ideal for quick, tactical strikes.', '../Images/Ranged/stormstrikeThrowingAxe.png', '', '', '', '2026-02-23 01:24:30'),
(3, 'Dreadspike Throwing Axe', 'ranged', 310.00, 'Dreadspike Throwing Axe combines a high-carbon steel head with a purpleheart shaft, engraved with tribal patterns for visual intimidation. Cord-wrapped grip enhances stability mid-flight. Its 46 cm length and 1.4 kg weight make it a fearsome ranged weapon.', '../Images/Ranged/dreadspikeThrowingAxe.png', '', '', '', '2026-02-23 01:24:30'),
(4, 'Bloodfang Throwing Axe', 'ranged', 320.00, 'Bloodfang Throwing Axe features a high-carbon steel blade on an ash shaft, designed for long-range throwing. Cord-wrapped grip ensures consistent aim. Measuring 51 cm and 1.6 kg, it delivers heavy impact while remaining balanced.', '../Images/Ranged/bloodfangThrowingAxe.png', '', '', '', '2026-02-23 01:24:30'),
(5, 'Frostbrand Javelin', 'ranged', 350.00, 'Frostbrand Javelin is a high-carbon steel javelin on a hickory shaft, optimized for aerodynamic throws. Cord-wrapped grip improves handling and accuracy. At 152 cm and 1.8 kg, it allows for long-distance strikes with lethal force.', '../Images/Ranged/frostbrandJavelin.png', '', '', '', '2026-02-23 01:24:30'),
(6, 'Nightpiercer Javelin', 'ranged', 370.00, 'Nightpiercer Javelin combines a high-carbon steel head with a purpleheart shaft for maximum piercing power. Cord-wrapped grip provides secure throws. Measuring 183 cm and 2 kg, it excels at long-range precision attacks.', '../Images/Ranged/nightpiercerJavelin.png', '', '', '', '2026-02-23 01:24:30'),
(7, 'Doomlance Javelin', 'ranged', 360.00, 'Doomlance Javelin has a tool steel head mounted on a maple shaft, engraved with floral motifs for elegance and intimidation. Cord-wrapped grip enhances control during throws. Its 198 cm length and 2.1 kg weight make it a formidable long-range weapon.', '../Images/Ranged/doomlanceJavelin.png', '', '', '', '2026-02-23 01:24:30'),
(8, 'Duskward Defender', 'swords', 1200.00, 'A steady and understated arming sword, the Duskward Defender is forged from dark steel with a clipped, single-edged blade built for disciplined precision. Its walnut hilt and simple disc pommel favor balance over ornament, while the minimal black leather sheath keeps its presence discreet. Reliable and unadorned, it is a weapon made for vigilance rather than vanity.', '../Images/Uploads/duskwardDefender.png', '../Images/Uploads/duskwardDefender2.png', '', '', '2026-02-23 01:32:28'),
(9, 'The Ashen Sigil', 'swords', 1100.00, 'A refined and dependable arming sword, The Ashen Sigil is forged from high‑carbon steel with a clipped, single‑edged blade built for clean, controlled strikes. Its hornbeam hilt and spherical pommel offer steady balance and understated strength, free of ornament or inscription. Carried in a minimal black leather sheath, it is a practical weapon for disciplined hands.', '../Images/ArmingSwords/ashenSigil.png', '', '', '', '2026-02-23 01:32:28'),
(10, 'The Stalwart Companion', 'swords', 1250.00, 'Built for steadfast defense, the Stalwart Companion features a tool steel fuller blade with a single edge. Its beech hilt and wood grip provide a solid and ergonomic hold. The faceted pommel and minimal leather sheath emphasize practical craftsmanship over ornamentation.', '../Images/ArmingSwords/stalwartCompanion.png', '', '', '', '2026-02-23 01:32:28'),
(11, 'Sentinel of Dunmere', 'swords', 1300.00, 'The Sentinel of Dunmere wields a bronze alloy drop blade with a single edge, optimized for precision. A black walnut hilt and wood grip ensure stable handling in battle. Accented with a wheel pommel and minimal leather sheath, it’s a versatile and reliable sword for guards.', '../Images/ArmingSwords/sentinelDunmere.png', '', '', '', '2026-02-23 01:32:28'),
(12, 'Ironveil Guard’s Blade', 'swords', 1150.00, 'A balanced and dependable sidearm, the Ironveil Guard\'s Blade is the standard-issue weapon of the city\'s watchmen. Forged for endurance and precision, it blends utility with understated craftsmanship.', '../Images/ArmingSwords/ironveilGuardBlade.png', '', '', '', '2026-02-23 01:32:28'),
(13, 'Frostgate Officer’s Sword', 'swords', 1180.00, 'High-carbon steel and a leaf-shaped single edge define the Frostgate Officer’s Sword, designed for swift strikes. The hornbeam hilt and leather grip provide comfort for prolonged wielding. Its faceted pommel and black leather sheath complete a sword both functional and refined.', '../Images/ArmingSwords/frostgateOfficerSword.png', '', '', '', '2026-02-23 01:32:28'),
(14, 'Redwyn’s Edge', 'swords', 1220.00, 'Redwyn’s Edge features a dark steel drop blade with a single edge, crafted for resilience in combat. The hornbeam hilt and wood grip deliver stability, complemented by a disc pommel. Its minimal leather sheath underscores the sword’s practical elegance.', '../Images/ArmingSwords/redwynEdge.png', '', '', '', '2026-02-23 01:32:28'),
(15, 'Hollowkeep Standard Issue', 'swords', 1270.00, 'Made of maraging steel with a clip-shaped single edge, the Hollowkeep Standard Issue is both strong and precise. A purpleheart hilt and wood grip provide ergonomic support. Finished with a disc pommel and black leather sheath, it’s a reliable sidearm for any soldier.', '../Images/ArmingSwords/hollowkeepStandardIssue.png', '', '', '', '2026-02-23 01:32:28'),
(16, 'The Thornhill Blade', 'swords', 1190.00, 'The Thornhill Blade wields tool steel with a tanto-shaped single edge, designed for both cutting and thrusting. Its hornbeam hilt and cord-wrapped grip offer firm handling. Accented with a faceted pommel and minimal leather sheath, it’s a practical yet distinguished weapon.', '../Images/ArmingSwords/thornhillBlade.png', '', '', '', '2026-02-23 01:32:28'),
(17, 'The Ironveil Pattern II', 'swords', 1210.00, 'A refined continuation of the original Ironveil design, Pattern II emphasizes durability and disciplined balance. Built for repeated field use, its straightforward geometry and reliable handling reflect the forge’s philosophy of practical, soldier-first craftsmanship.', '../Images/ArmingSwords/ironveilPatternII.png', '', '', '', '2026-02-23 01:32:28'),
(18, 'Blackmoor Bastard Sword', 'swords', 1150.00, 'The Blackmoor Bastard Sword is forged from dark steel with a bowie-shaped single edge, built for power and cutting efficiency. Its beech hilt and leather grip provide a secure hold, while a sphere pommel balances the blade. The minimalist leather sheath keeps the design straightforward and battle-ready.', '../Images/Broadswords/blackmoorBastardSword.png', '', '', '', '2026-02-23 01:32:28'),
(19, 'The Northfell Cutter', 'swords', 1120.00, 'Constructed from high-carbon steel, the Northfell Cutter features a bowie-shaped single edge that excels in both offense and defense. Its hornbeam hilt and curved grip offer stability in the hand. Finished with a disc pommel and simple black leather sheath, it’s a dependable warhorse of a sword.', '../Images/Broadswords/northfellCutter.png', '', '', '', '2026-02-23 01:32:28'),
(20, 'The Stormholt Bastion', 'swords', 980.00, 'The Stormholt Bastion wields a bronze alloy bowie blade with a single edge, emphasizing durability and cutting power. A black walnut hilt and wood grip provide a steady hold for sustained combat. Accented with a wheel pommel and minimal leather sheath, it balances practicality with understated craftsmanship.', '../Images/Broadswords/stormholtBastion.png', '', '', '', '2026-02-23 01:32:28'),
(21, 'The Duskfield Guard’s Sword', 'swords', 820.00, 'This weapon combines maraging steel with a bowie-shaped single edge, optimized for precise slashes. Its hornbeam hilt and waisted grip offer controlled handling, while a faceted pommel adds subtle visual appeal. The sword rests in a minimal leather sheath, emphasizing utility over ornamentation.', '../Images/Broadswords/duskfieldGuardSword.png', '', '', '', '2026-02-23 01:32:28'),
(22, 'Silverbarrow Line Breaker', 'swords', 1250.00, 'Silverbarrow Line Breaker features tool steel in a bowie-shaped single edge, designed for heavy strikes and battlefield versatility. A hickory hilt and cord-wrapped grip provide a reliable hold, while a faceted pommel offers balanced heft. Its black leather sheath keeps the look clean and functional.', '../Images/Broadswords/silverbarrowLineBreaker.png', '', '', '', '2026-02-23 01:32:28'),
(23, 'Emberlake Warblade', 'swords', 920.00, 'Forged from maraging steel, the Emberlake Warblade’s bowie-shaped single edge is built for aggressive combat. A hickory hilt and straight grip make the sword sturdy in hand. Paired with a minimal black leather sheath, it’s a resilient weapon for prolonged engagements.', '../Images/Broadswords/emberlakeWarblade.png', '', '', '', '2026-02-23 01:32:28'),
(24, 'The Wyrdcliff Vanguard', 'swords', 970.00, 'The Wyrdcliff Vanguard combines tool steel with a bowie-shaped single edge, offering a sharp and reliable blade. Its black walnut hilt and ornate grip provide both style and control. Finished with a faceted pommel and minimal leather sheath, it’s a sword built for both elegance and battle.', '../Images/Broadswords/wyrdcliffVanguard.png', '', '', '', '2026-02-23 01:32:28'),
(25, 'Ironvale Heavy Cutter', 'swords', 680.00, 'Broad, weighty, and unapologetically forceful, this cutter excels at decisive cleaving strikes. Its forward presence rewards committed swings, making it a favored choice among warriors who rely on momentum to dominate engagements.', '../Images/Broadswords/ironvaleHeavyCutter.png', '', '', '', '2026-02-23 01:32:28'),
(26, 'Hollowspire Broad Edge', 'swords', 1040.00, 'Defined by its expansive blade profile, the Broad Edge combines cutting authority with controlled balance. The weapon’s silhouette conveys quiet confidence, offering dependable performance without unnecessary ornamentation.', '../Images/Broadswords/hollowspireBroadEdge.png', '', '', '', '2026-02-23 01:32:28'),
(27, 'The Stonewatch Standard', 'swords', 780.00, 'Issued in the tradition of Stonewatch garrisons, this sword embodies consistency and readiness. Balanced for patrol and skirmish alike, it stands as a dependable sidearm shaped by the expectations of watchful service.', '../Images/Broadswords/stonewatchStandard.png', '', '', '', '2026-02-23 01:32:28'),
(28, 'Emberfell Reaver', 'swords', 870.00, 'The Emberfell Reaver is a high-carbon steel falchion with a bowie-shaped single edge, designed for swift, decisive strikes. Its ash hilt and wood grip provide stability, while a disc pommel balances the blade. The black leather sheath keeps the weapon simple and ready for combat.', '../Images/Falchions/emberfellReaver.png', '', '', '', '2026-02-23 01:32:28'),
(29, 'Ironwood Field Falchion', 'swords', 780.00, 'Crafted from tool steel, the Ironwood Field Falchion features a bowie-shaped single edge optimized for reach and cutting power. Its hornbeam hilt and wood grip ensure precise handling, complemented by a faceted pommel. Housed in a minimal black leather sheath, it emphasizes function over flair.', '../Images/Falchions/ironwoodFieldFalchion.png', '', '', '', '2026-02-23 01:32:28'),
(30, 'Ironveil Tradesman’s Edge', 'swords', 790.00, 'The Ironveil Tradesman’s Edge blends maraging steel with a bowie-shaped single edge, delivering durability and sharpness for routine or battlefield use. A hornbeam hilt and waisted grip provide firm control, while a wheel pommel balances the weapon. Its minimal leather sheath completes a utilitarian design.', '../Images/Falchions/ironveilTradesmanEdge.png', '', '', '', '2026-02-23 01:32:28'),
(31, 'Wyrmvale Raider’s Blade', 'swords', 890.00, 'This falchion combines bronze alloy with a bowie-shaped single edge, emphasizing cutting efficiency and resilience. A hickory hilt with cord-wrapped grip gives precise handling, while a faceted pommel ensures balance. The black leather sheath maintains the sword’s straightforward, practical style.', '../Images/Falchions/wyrmvaleRaiderBlade.png', '', '', '', '2026-02-23 01:32:28'),
(32, 'The Redfen Sawblade', 'swords', 880.00, 'The Redfen Sawblade features titanium alloy in a bowie-shaped single edge, built for strength and swift strikes. Its hornbeam hilt and flared grip offer reliable control, complemented by a spike pommel. Stored in a minimal black leather sheath, it is designed for battle-ready utility.', '../Images/Falchions/redfenSawblade.png', '', '', '', '2026-02-23 01:32:28'),
(33, 'The Duskmoor Falchion', 'swords', 1020.00, 'Made from tool steel with a bowie-shaped single edge, the Duskmoor Falchion excels at cutting and slicing. Its hornbeam hilt and ornate grip provide both style and control, while a counterweight pommel balances the weapon. The black leather sheath is kept simple to emphasize practicality.', '../Images/Falchions/duskmoorFalchion.png', '', '', '', '2026-02-23 01:32:28'),
(34, 'The Blackhollow Cutter', 'swords', 950.00, 'The Blackhollow Cutter wields maraging steel with a bowie-shaped single edge, engineered for precise and sustained slashes. A hornbeam hilt and cord-wrapped grip give solid handling, paired with a faceted pommel for balance. The minimal black leather sheath underscores the sword’s functional design.', '../Images/Falchions/blackhollowCutter.png', '', '', '', '2026-02-23 01:32:28'),
(35, 'Greyhaven War Falchion', 'swords', 1060.00, 'With its pronounced curve and robust spine, the War Falchion delivers sweeping power suited to the chaos of close combat. Its design favors assertive movement, translating fluid arcs into formidable cutting force.', '../Images/Falchions/greyhavenWarFalchion.png', '', '', '', '2026-02-23 01:32:28'),
(36, 'Hollowgate Hunter’s Sword', 'swords', 840.00, 'Lightweight and responsive, this hunter’s blade prioritizes endurance and adaptability. Its agile handling supports prolonged pursuits, where efficiency and control matter more than raw impact.', '../Images/Falchions/hollowgateHunterSword.png', '', '', '', '2026-02-23 01:32:28'),
(37, 'Stormrest Frontliner', 'swords', 910.00, 'Forged with the realities of frontline combat in mind, this falchion balances reach, resilience, and striking presence. Its confident geometry complements advancing formations, reinforcing the rhythm of forward pressure.', '../Images/Falchions/stormrestFrontliner.png', '', '', '', '2026-02-23 01:32:28'),
(38, 'Crowhaven’s Longsword', 'swords', 1180.00, 'Crowhaven’s Longsword is a high-carbon steel weapon with a clip-shaped single edge, built for balance and reliable handling. Its hornbeam hilt and wood grip offer steady control, complemented by a sphere pommel. A minimal black leather sheath keeps the design straightforward and practical.', '../Images/Longswords/crowhavenLongsword.png', '', '', '', '2026-02-23 01:32:28'),
(39, 'The Ebonreach Guard’s Edge', 'swords', 1260.00, 'Forged from tool steel with a clip-shaped single edge, The Ebonreach Guard’s Edge emphasizes precision and durability in the field. A hickory hilt with wood grip provides comfortable handling, while a disc pommel ensures balanced swings. Its minimal black leather sheath maintains a functional, no-frills aesthetic.', '../Images/Longswords/ebonreachGuardEdge.png', '', '', '', '2026-02-23 01:32:28'),
(40, 'The Frostmere Vigil', 'swords', 1320.00, 'The Frostmere Vigil combines maraging steel with a fuller-shaped single edge, ideal for long, decisive cuts. A birch hilt and wood grip provide stability, while a faceted pommel ensures balance. Housed in a minimal black leather sheath, it’s crafted for reliability and endurance.', '../Images/Longswords/frostmereVigil.png', '', '', '', '2026-02-23 01:32:28'),
(41, 'Redwyne Officer’s Saber', 'swords', 1090.00, 'Redwyne Officer’s Saber features PM stainless steel with a drop-shaped single edge, designed for swift and precise strikes. Its ash hilt and waisted grip offer controlled handling, paired with a wheel pommel for balance. The minimal black leather sheath keeps the weapon practical and combat-ready.', '../Images/Longswords/redwyneOfficerSaber.png', '', '', '', '2026-02-23 01:32:28'),
(42, 'The Ironholt Line Sword', 'swords', 1050.00, 'The Ironholt Line Sword is built from titanium alloy with a tanto-shaped single edge, combining toughness and cutting efficiency. A hornbeam hilt and cord-wrapped grip provide precise control, complemented by a spike pommel. Its minimal black leather sheath underscores its utilitarian focus.', '../Images/Longswords/ironholtLineSword.png', '', '', '', '2026-02-23 01:32:28'),
(43, 'The Dreadmarch Pattern IV', 'swords', 1480.00, 'This longsword employs PM stainless steel with a fuller-shaped single edge, emphasizing reach and slicing power. A hickory hilt with straight grip ensures stability, while a disc pommel balances the blade. The minimal black leather sheath keeps the weapon ready for sustained use.', '../Images/Longswords/dreadmarchPatternIV.png', '', '', '', '2026-02-23 01:32:28'),
(44, 'Ashford Battle Longsword', 'swords', 980.00, 'Ashford Battle Longsword uses bronze alloy in a bowie-shaped single edge, designed for versatility and durability. Its hornbeam hilt and waisted grip provide firm control, paired with a faceted pommel for balance. Housed in a minimal black leather sheath, it prioritizes function over decoration.', '../Images/Longswords/ashfordBattleLongsword.png', '', '', '', '2026-02-23 01:32:28'),
(45, 'Thornwall Marshal’s Sword', 'swords', 1160.00, 'The Thornwall Marshal’s Sword features high-carbon steel with a tanto-shaped single edge, built for strength and precision. A black walnut hilt and straight grip ensure a solid hold, while a disc pommel balances the weapon. The minimal black leather sheath maintains a utilitarian style.', '../Images/Longswords/thornwallMarshalSword.png', '', '', '', '2026-02-23 01:32:28'),
(46, 'Stonevale Great Longsword', 'swords', 1340.00, 'Stonevale Great Longsword combines maraging steel with a fuller-shaped single edge, designed for reach and cutting power. A hornbeam hilt and wood grip provide stability, complemented by a faceted pommel. Its minimal black leather sheath keeps the weapon functional and ready for battle.', '../Images/Longswords/stonevaleGreatLongsword.png', '', '', '', '2026-02-23 01:32:28'),
(47, 'The Nightwell Blade', 'swords', 1240.00, 'The Nightwell Blade is forged from dark steel with a bowie-shaped single edge, optimized for decisive cuts. A black walnut hilt with cord-wrapped grip gives secure handling, paired with a cage pommel for balance. Its minimal black leather sheath emphasizes practicality over ornamentation.', '../Images/Longswords/nightwellBlade.png', '', '', '', '2026-02-23 01:32:28'),
(71, 'Ashveil Stiletto', 'daggers', 280.00, 'The Ashveil Stiletto is a high-carbon steel stiletto with a double-edged blade, designed for precise thrusts. Its black walnut hilt and straight grip offer a secure hold, while a faceted pommel balances the weapon. A minimal black leather sheath keeps it practical and ready for quick access.', '../Images/Daggers/ashveilStiletto.png', NULL, NULL, NULL, '2026-02-23 01:33:17'),
(72, 'The Whittlemark Knife', 'daggers', 340.00, 'Forged from tool steel with a double-edged blade, The Whittlemark Knife is built for accuracy and reliability. An ash hilt with straight grip ensures steady handling, complemented by a flat pommel. The minimal black leather sheath emphasizes function over decoration.', '../Images/Daggers/whittlemarkKnife.png', NULL, NULL, NULL, '2026-02-23 01:33:17'),
(73, 'Vexmere Rondel', 'daggers', 390.00, 'The Vexmere Rondel combines PM stainless steel with a single-edged blade, ideal for piercing armor gaps. A beech hilt with a straight grip and a hook pommel provides control and balance. Housed in a wooden dark brown sheath, it is both durable and ready for field use.', '../Images/Daggers/vexmereRondel.png', NULL, NULL, NULL, '2026-02-23 01:33:17'),
(74, 'Greythorn Poignard', 'daggers', 230.00, 'Greythorn Poignard is crafted from dark steel with a double-edged blade, perfect for close-quarters combat. Its hornbeam hilt and wood grip give precision, while a sphere pommel adds balance. The minimal dark brown sheath ensures reliable protection for the blade.', '../Images/Daggers/greythornPoignard.png', NULL, NULL, NULL, '2026-02-23 01:33:17'),
(75, 'Dreadfen Sica', 'daggers', 310.00, 'The Dreadfen Sica uses PM stainless steel in a single-edged sica design, optimized for slashing strikes. A hornbeam hilt with straight grip provides control, complemented by a disc pommel for balance. The minimal dark brown sheath keeps it practical and quick to draw.', '../Images/Daggers/dreadfenSica.png', NULL, NULL, NULL, '2026-02-23 01:33:17'),
(76, 'The Embercoil Anelace', 'daggers', 360.00, 'This anelace features high-carbon steel with a double-edged blade, built for quick, decisive thrusts. A hickory hilt with straight grip and a wheel pommel balance the weapon in hand. Its minimal black leather sheath prioritizes functionality and swift access.', '../Images/Daggers/embercoilAnelace.png', NULL, NULL, NULL, '2026-02-23 01:33:17'),
(77, 'Bramblefang Dagger', 'daggers', 360.00, 'Bramblefang Dagger is forged from tool steel with a double-edged blade, ideal for precision strikes. An ash hilt with waisted grip offers control, while a disc pommel balances the weapon. The ornate dark brown sheath gives it a touch of visual distinction while remaining practical.', '../Images/Daggers/bramblefangDagger.png', NULL, NULL, NULL, '2026-02-23 01:33:17'),
(78, 'Ironreach Dagger', 'daggers', 260.00, 'Ironreach Dagger uses PM stainless steel with a double-edged blade, designed for quick, accurate attacks. A birch hilt with straight grip is paired with a flat pommel for stability. Its minimal black leather sheath keeps the design functional and ready for use.', '../Images/Daggers/ironreachDagger.png', NULL, NULL, NULL, '2026-02-23 01:33:17'),
(79, 'Greycourt Anelace', 'daggers', 340.00, 'Slender and understated, this anelace favors clean thrusts and controlled precision over spectacle. Its refined proportions and balanced weight make it a discreet yet effective companion for duels, patrols, and quiet encounters.', '../Images/Daggers/greycourtAnelace.png', NULL, NULL, NULL, '2026-02-23 01:33:17'),
(80, 'Duskcoil Sica', 'daggers', 310.00, 'With a subtle inward curve and darkened finish, this sica is built for deceptive angles and close-range maneuverability. The blade’s coiling profile allows strikes to slip past guards, rewarding fluid movement and calculated timing.', '../Images/Daggers/duskcoilSica.png', NULL, NULL, NULL, '2026-02-23 01:33:17'),
(86, 'Skullcrusher Mace', 'blunthandweapons', 650.00, 'The Skullcrusher Mace is a high-carbon steel mace with six spikes, designed to deliver devastating blows. A hickory shaft with a leather grip and sphere pommel ensures balance and control. Its 61 cm length and hefty 3.5 kg weight make it a fearsome choice in close combat.', '../Images/BluntHandWeapons/skullcrusherMace.png', NULL, NULL, NULL, '2026-02-23 01:33:34'),
(87, 'Doomrend Mace', 'blunthandweapons', 680.00, 'Doomrend Mace features a tool steel head with six spikes, optimized for crushing armor. Hornbeam shaft and straight grip give the wielder precision, while a flat pommel balances the weapon. At 66 cm and 3.8 kg, it combines power and manageability.', '../Images/BluntHandWeapons/doomrendMace.png', NULL, NULL, NULL, '2026-02-23 01:33:34'),
(88, 'Bonebreaker Flail', 'blunthandweapons', 900.00, 'Bonebreaker Flail is a high-carbon steel flail with twelve spikes on a 22.9 cm chain, ideal for striking over shields. Its purpleheart shaft and leather grip provide control, finished with a flat pommel. The 71 cm weapon weighs 4.2 kg, delivering punishing momentum.', '../Images/BluntHandWeapons/bonebreakerFlail.png', NULL, NULL, NULL, '2026-02-23 01:33:34'),
(89, 'Thunderstrike Morningstar', 'blunthandweapons', 750.00, 'Thunderstrike Morningstar is a high-carbon steel morningstar with ten spikes, built for heavy impact. A hornbeam shaft with cord-wrapped grip ensures a secure hold, paired with a sphere pommel. Its 56 cm length and 3.2 kg weight make it effective in tight quarters.', '../Images/BluntHandWeapons/thunderstrikeMorningstar.png', NULL, NULL, NULL, '2026-02-23 01:33:34'),
(90, 'Ironfang Morningstar', 'blunthandweapons', 720.00, 'Ironfang Morningstar combines tool steel with eight spikes for crushing efficiency. A beech shaft and waisted grip offer precision, balanced by a flat pommel. At 61 cm and 3.5 kg, it delivers both control and force.', '../Images/BluntHandWeapons/ironfangMorningstar.png', NULL, NULL, NULL, '2026-02-23 01:33:34'),
(91, 'Grimspike War Hammer', 'blunthandweapons', 1050.00, 'Grimspike War Hammer features a high-carbon steel head for blunt force attacks. Its hickory shaft with straight grip and flat pommel maximizes balance and swing power. Measuring 71 cm and weighing 4.5 kg, it is a formidable hammer in battle.', '../Images/BluntHandWeapons/grimspikeWarHammer.png', NULL, NULL, NULL, '2026-02-23 01:33:34'),
(92, 'Ravager Horseman’s Pick', 'blunthandweapons', 950.00, 'Ravager Horseman’s Pick is a high-carbon steel pick designed for mounted combat, with a sharp single point. Ironwood shaft and cord-wrapped grip provide stability, paired with a ring pommel. At 56 cm and 3.8 kg, it strikes with precision from horseback.', '../Images/BluntHandWeapons/ravagerHorsemanPick.png', NULL, NULL, NULL, '2026-02-23 01:33:34'),
(93, 'Chain of Blackmere', 'blunthandweapons', 420.00, 'Chain of Blackmere is a tool steel flail with eight spikes on a 20.3 cm chain for swinging attacks over obstacles. Maple shaft with straight grip offers control, finished with a flat pommel. Its 66 cm length and 4 kg weight make it a versatile striking weapon.', '../Images/BluntHandWeapons/chainBlackmere.png', NULL, NULL, NULL, '2026-02-23 01:33:34'),
(94, 'Ironreach War Hammer', 'blunthandweapons', 460.00, 'Ironreach War Hammer is a high-carbon steel hammer optimized for direct strikes. A hickory shaft with leather grip and sphere pommel gives perfect balance. The 56 cm weapon weighs 3.2 kg, ideal for delivering reliable blows.', '../Images/BluntHandWeapons/ironreachWarHammer.png', NULL, NULL, NULL, '2026-02-23 01:33:34'),
(95, 'Saddlebreak Pick', 'blunthandweapons', 440.00, 'Saddlebreak Pick is a high-carbon steel horseman’s pick designed for mounted assaults. Hickory shaft with leather grip and flat pommel ensures handling stability. Its compact 51 cm length and 2.9 kg weight make it fast and precise.', '../Images/BluntHandWeapons/saddlebreakPick.png', NULL, NULL, NULL, '2026-02-23 01:33:34'),
(96, 'Crown of Stonefall', 'blunthandweapons', 390.00, 'A circular-headed mace forged to mimic a fallen monarch’s crown, its heavy ridges and studded perimeter deliver crushing blows with regal finality. Built for durability and balance, it excels in close-quarters engagements where raw impact matters most.', '../Images/BluntHandWeapons/crownStonefall.png', NULL, NULL, NULL, '2026-02-23 01:33:34'),
(97, 'Dawnbreak Spire', 'blunthandweapons', 410.00, 'Rising like a radiant tower, this flanged mace channels focused striking power through its tapered head and reinforced shaft. Designed for precision as much as force, it pierces armor gaps and shatters defenses with disciplined momentum.', '../Images/BluntHandWeapons/dawnbreakSpire.png', NULL, NULL, NULL, '2026-02-23 01:33:34'),
(98, 'Blackridge Breaker', 'blunthandweapons', 450.00, 'Hewn from darkened metal and shaped for relentless impact, this hammer embodies the unforgiving terrain it’s named after. Its broad striking face and compact form make it a dependable breaching weapon, capable of cracking shields, stone, and bone alike.', '../Images/BluntHandWeapons/blackridgeBreaker.png', NULL, NULL, NULL, '2026-02-23 01:33:34'),
(101, 'Ironspire Spear', 'polearms', 520.00, 'Ironspire Spear features a high-carbon steel spearhead on a hickory shaft, designed for reach and thrusting attacks. A cord-wrapped grip ensures control, balanced with a flat butt cap. At 183 cm and 2.5 kg, it combines agility with striking precision.', '../Images/Polearms/ironspireSpear.png', '', '', '', '2026-02-23 01:33:48'),
(102, 'Stormwing Spear', 'polearms', 650.00, 'Stormwing Spear has a tool steel head mounted on a maple shaft for maximum reach and durability. Cord-wrapped grip provides handling security, finished with a flat butt cap. Its 213 cm length and 3 kg weight make it ideal for frontline combat.', '../Images/Polearms/stormwingSpear.png', '', '', '', '2026-02-23 01:33:48'),
(103, 'Dreadlance', 'polearms', 1100.00, 'Dreadlance is a high-carbon steel cavalry lance with a hickory shaft for reinforced thrusting power. Leather-wrapped grip and flat butt cap give stability when mounted. Measuring 274 cm and weighing 4.2 kg, it delivers devastating strikes from horseback.', '../Images/Polearms/dreadlance.png', '', '', '', '2026-02-23 01:33:48'),
(104, 'Gravecleaver Poleaxe', 'polearms', 1200.00, 'Gravecleaver Poleaxe combines a high-carbon steel axe head and hammer with a reinforced hickory shaft. Cord-wrapped grip and flat butt cap provide balance for precise swings. Its 168 cm length and 5.5 kg weight make it a brutal close-quarters weapon.', '../Images/Polearms/gravecleaverPoleaxe.png', '', '', '', '2026-02-23 01:33:48'),
(105, 'Shadowfang Halberd', 'polearms', 1350.00, 'Shadowfang Halberd features a high-carbon steel axe-blade with a spear tip on a hickory shaft for versatile combat. Cord-wrapped grip ensures control, paired with a flat butt cap. At 198 cm and 6 kg, it balances reach and striking power.', '../Images/Polearms/shadowfangHalberd.png', '', '', '', '2026-02-23 01:33:48'),
(106, 'The Argent Halberd', 'polearms', 1000.00, 'The Argent Halberd uses high-carbon steel for its axe-spear head mounted on a maple shaft. Cord-wrapped grip and flat butt cap provide secure handling. Measuring 213 cm and 6.5 kg, it excels in both sweeping and thrusting attacks.', '../Images/Polearms/argentHalberd.png', '', '', '', '2026-02-23 01:33:48'),
(107, 'Bonescourge Corseque', 'polearms', 1150.00, 'Bonescourge Corseque has a high-carbon steel heavy blade on an ironwood shaft, built to cleave armor. Leather-wrapped grip and flat butt cap give balance for heavy swings. Its 213 cm length and 5.8 kg weight make it a fearsome battlefield weapon.', '../Images/Polearms/bonescourgeCorseque.png', '', '', '', '2026-02-23 01:33:48'),
(108, 'Thornward Corseque', 'polearms', 980.00, 'Thornward Corseque features a tool steel heavy blade on an ash shaft for strong armor penetration. Leather-wrapped grip ensures stability, paired with a flat butt cap. At 213 cm and 5.5 kg, it delivers controlled, bone-crushing strikes.', '../Images/Polearms/thornwardCorseque.png', '', '', '', '2026-02-23 01:33:48'),
(109, 'Iron Verdict Poleaxe', 'polearms', 1250.00, 'Iron Verdict Poleaxe combines a high-carbon steel axe and hammer head on a reinforced hickory shaft. Cord-wrapped grip and flat butt cap maximize swing balance. Its 168 cm length and 5.6 kg weight give devastating close-combat capability.', '../Images/Polearms/ironVerdictPoleaxe.png', '', '', '', '2026-02-23 01:33:48'),
(110, 'Ashfall Cavalry Lance', 'polearms', 1080.00, 'Ashfall Cavalry Lance has a tool steel spearhead on a hickory shaft, optimized for mounted combat. Cord-wrapped grip and flat butt cap provide stability during high-speed charges. Measuring 274 cm and 4.1 kg, it delivers lethal thrusts from horseback.', '../Images/Polearms/ashfallCavalryLance.png', '', '', '', '2026-02-23 01:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `ranged`
--

CREATE TABLE `ranged` (
  `ID` int(10) UNSIGNED NOT NULL,
  `ProductID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Image2` varchar(255) DEFAULT NULL,
  `Image3` varchar(255) DEFAULT NULL,
  `Image4` varchar(255) DEFAULT NULL,
  `Subcategory_ID` int(10) UNSIGNED NOT NULL,
  `HeadMaterial_ID` int(10) UNSIGNED NOT NULL,
  `ShaftLength` decimal(10,2) DEFAULT NULL,
  `ShaftMaterial_ID` int(10) UNSIGNED NOT NULL,
  `Grip_ID` int(10) UNSIGNED DEFAULT NULL,
  `Engravings` varchar(40) DEFAULT NULL,
  `Inscriptions` varchar(40) DEFAULT NULL,
  `Length_cm` decimal(10,2) NOT NULL,
  `Weight_kg` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ranged`
--

INSERT INTO `ranged` (`ID`, `ProductID`, `Name`, `Image`, `Image2`, `Image3`, `Image4`, `Subcategory_ID`, `HeadMaterial_ID`, `ShaftLength`, `ShaftMaterial_ID`, `Grip_ID`, `Engravings`, `Inscriptions`, `Length_cm`, `Weight_kg`, `Price`, `Description`) VALUES
(1, 1, 'Ironbite Throwing Axe', '../Images/Ranged/ironbiteThrowingAxe.png', NULL, NULL, NULL, 21, 1, 40.64, 5, 7, NULL, NULL, 40.64, 1.20, 300.00, 'Ironbite Throwing Axe features a high-carbon steel head on an ash shaft, crafted for balance and accuracy. Cord-wrapped grip ensures secure handling during repeated throws. Measuring 41 cm and 1.2 kg, it is compact yet deadly in skilled hands.'),
(2, 2, 'Stormstrike Throwing Axe', '../Images/Ranged/stormstrikeThrowingAxe.png', NULL, NULL, NULL, 21, 1, 35.56, 2, 7, NULL, NULL, 35.56, 1.10, 280.00, 'Stormstrike Throwing Axe has a high-carbon steel blade mounted on a hickory shaft for optimized throwing distance. Cord-wrapped grip provides control and precision. At 36 cm and 1.1 kg, it is ideal for quick, tactical strikes.'),
(3, 3, 'Dreadspike Throwing Axe', '../Images/Ranged/dreadspikeThrowingAxe.png', NULL, NULL, NULL, 21, 1, 45.72, 7, 7, 'Engraved tribal patterns', NULL, 45.72, 1.40, 310.00, 'Dreadspike Throwing Axe combines a high-carbon steel head with a purpleheart shaft, engraved with tribal patterns for visual intimidation. Cord-wrapped grip enhances stability mid-flight. Its 46 cm length and 1.4 kg weight make it a fearsome ranged weapon.'),
(4, 4, 'Bloodfang Throwing Axe', '../Images/Ranged/bloodfangThrowingAxe.png', NULL, NULL, NULL, 21, 1, 50.80, 5, 7, NULL, NULL, 50.80, 1.60, 320.00, 'Bloodfang Throwing Axe features a high-carbon steel blade on an ash shaft, designed for long-range throwing. Cord-wrapped grip ensures consistent aim. Measuring 51 cm and 1.6 kg, it delivers heavy impact while remaining balanced.'),
(5, 5, 'Frostbrand Javelin', '../Images/Ranged/frostbrandJavelin.png', NULL, NULL, NULL, 22, 1, 152.40, 2, 7, NULL, NULL, 152.40, 1.80, 350.00, 'Frostbrand Javelin is a high-carbon steel javelin on a hickory shaft, optimized for aerodynamic throws. Cord-wrapped grip improves handling and accuracy. At 152 cm and 1.8 kg, it allows for long-distance strikes with lethal force.'),
(6, 6, 'Nightpiercer Javelin', '../Images/Ranged/nightpiercerJavelin.png', NULL, NULL, NULL, 22, 1, 182.88, 7, 7, NULL, NULL, 182.88, 2.00, 370.00, 'Nightpiercer Javelin combines a high-carbon steel head with a purpleheart shaft for maximum piercing power. Cord-wrapped grip provides secure throws. Measuring 183 cm and 2 kg, it excels at long-range precision attacks.'),
(7, 7, 'Doomlance Javelin', '../Images/Ranged/doomlanceJavelin.png', NULL, NULL, NULL, 22, 2, 198.12, 4, 7, 'Engraved floral motifs', NULL, 198.12, 2.10, 360.00, 'Doomlance Javelin has a tool steel head mounted on a maple shaft, engraved with floral motifs for elegance and intimidation. Cord-wrapped grip enhances control during throws. Its 198 cm length and 2.1 kg weight make it a formidable long-range weapon.');

-- --------------------------------------------------------

--
-- Table structure for table `sheathcolors`
--

CREATE TABLE `sheathcolors` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `PriceModifier` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sheathcolors`
--

INSERT INTO `sheathcolors` (`ID`, `Name`, `Image`, `PriceModifier`) VALUES
(1, 'Black', '../Images/CustomizationOptions/SheathColors/black.png', 2.00),
(2, 'Dark Brown', '../Images/CustomizationOptions/SheathColors/darkBrown.png', 0.00),
(3, 'Chestnut', '../Images/CustomizationOptions/SheathColors/chestnut.png', 2.00),
(4, 'Mahogany', '../Images/CustomizationOptions/SheathColors/mahogany.png', 5.00),
(5, 'Deep Indigo', '../Images/CustomizationOptions/SheathColors/deepIndigo.png', 6.00),
(6, 'Crimson', '../Images/CustomizationOptions/SheathColors/crimson.png', 6.00),
(7, 'Dark Green', '../Images/CustomizationOptions/SheathColors/darkGreen.png', 4.00),
(8, 'Forest Green', '../Images/CustomizationOptions/SheathColors/forestGreen.png', 4.00),
(9, 'Navy', '../Images/CustomizationOptions/SheathColors/navy.png', 4.00),
(10, 'Steel Gray', '../Images/CustomizationOptions/SheathColors/steelGray.png', 4.00),
(11, 'Charcoal', '../Images/CustomizationOptions/SheathColors/charcoal.png', 2.00),
(12, 'Natural', '../Images/CustomizationOptions/SheathColors/natural.png', 0.00),
(13, 'Bone White', '../Images/CustomizationOptions/SheathColors/boneWhite.png', 7.00),
(14, 'Midnight Blue', '../Images/CustomizationOptions/SheathColors/midnightBlue.png', 6.00),
(15, 'Oxblood', '../Images/CustomizationOptions/SheathColors/oxblood.png', 7.00);

-- --------------------------------------------------------

--
-- Table structure for table `sheathmaterials`
--

CREATE TABLE `sheathmaterials` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `PriceModifier` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sheathmaterials`
--

INSERT INTO `sheathmaterials` (`ID`, `Name`, `Image`, `PriceModifier`) VALUES
(1, 'Leather', '../Images/CustomizationOptions/SheathMaterials/leather.png', 0.00),
(2, 'Wooden', '../Images/CustomizationOptions/SheathMaterials/wooden.png', 10.00),
(3, 'Metal', '../Images/CustomizationOptions/SheathMaterials/metal.png', 30.00),
(4, 'Laquered', '../Images/CustomizationOptions/SheathMaterials/lacquered.png', 18.00);

-- --------------------------------------------------------

--
-- Table structure for table `sheathtypes`
--

CREATE TABLE `sheathtypes` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `PriceModifier` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sheathtypes`
--

INSERT INTO `sheathtypes` (`ID`, `Name`, `Image`, `PriceModifier`) VALUES
(1, 'Minimal', '../Images/CustomizationOptions/SheathTypes/minimal.png', 0.00),
(2, 'Ornate', '../Images/CustomizationOptions/SheathTypes/ornate.png', 35.00),
(3, 'Jeweled', '../Images/CustomizationOptions/SheathTypes/jeweled.png', 60.00),
(4, 'Wrapped', '../Images/CustomizationOptions/SheathTypes/wrapped.png', 15.00);

-- --------------------------------------------------------

--
-- Table structure for table `shippingaddresses`
--

CREATE TABLE `shippingaddresses` (
  `ID` int(11) NOT NULL,
  `UserID` int(10) UNSIGNED NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `PhoneNum` varchar(20) NOT NULL,
  `StreetAddress` varchar(255) NOT NULL,
  `AptAddress` varchar(255) DEFAULT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) DEFAULT NULL,
  `ZIP` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shippingaddresses`
--

INSERT INTO `shippingaddresses` (`ID`, `UserID`, `Country`, `Name`, `PhoneNum`, `StreetAddress`, `AptAddress`, `City`, `State`, `ZIP`) VALUES
(4, 1, 'united-states', 'Bridget Boyle', '(111) 111-1111', '637 Morris Ave', '', 'St. Louis', 'missouri', '11111'),
(5, 1, 'united-states', 'Bridget Boyle', '(111) 111-1111', '637 Morris Ave', '', 'St. Louis', 'missouri', '11111'),
(6, 1, 'united-states', 'Bridget Boyle', '(111) 111-1111', '637 Morris Ave', '', 'St. Louis', 'missouri', '11111'),
(7, 1, 'united-states', 'Bridget Boyle', '(111) 111-1111', '637 Morris Ave', '', 'St. Louis', 'missouri', '11111'),
(8, 1, 'united-states', 'Bridget Boyle', '(111) 111-1111', '637 Morris Ave', '', 'St. Louis', 'missouri', '11111'),
(9, 1, 'united-states', 'Bridget Boyle', '(111) 111-1111', '637 Morris Ave', '', 'St. Louis', 'missouri', '11111'),
(10, 1, 'united-states', 'Lonk', '(111) 111-1111', '1346 Hyrule Dr', '', 'St. Louis', 'missouri', '11111'),
(11, 1, 'united-states', '3590 Altea Ct', '(111) 111-1111', '637 Morris Ave', '', 'St. Louis', 'missouri', '11111'),
(12, 1, 'united-states', 'Tom Nook', '(111) 111-1111', '123 Crossing Ln', '', 'St. Louis', 'missouri', '11111'),
(13, 1, 'united-states', 'Bridget Boyle', '(111) 111-1111', '637 Morris Ave', '', 'St. Louis', 'missouri', '11111'),
(14, 1, 'united-states', 'Bridget Boyle', '(111) 111-1111', '637 Morris Ave', '', 'St. Louis', 'missouri', '11111'),
(15, 1, 'united-states', 'Bridget Boyle', '(111) 111-1111', '637 Morris Ave', '', 'St. Louis', 'missouri', '11111'),
(16, 1, 'united-states', 'Bridget Boyle', '(111) 111-1111', '637 Morris Ave', '', 'St. Louis', 'missouri', '11111'),
(17, 1, 'united-states', 'Bridget Boyle', '(111) 111-1111', '637 Morris Ave', '', 'St. Louis', 'missouri', '11111'),
(18, 1, 'united-states', 'Marth', '(111) 111-1111', '3590 Altea Dr', '', 'St. Louis', 'missouri', '11111'),
(19, 1, 'united-states', 'Lonk', '(111) 111-1111', '1346 Hyrule Dr', '', 'St. Louis', 'missouri', '11111'),
(20, 1, 'united-states', 'Bridget Boyle', '(111) 111-1111', '637 Morris Ave', '', 'St. Louis', 'missouri', '11111'),
(21, 1, 'united-states', 'Bridget Boyle', '(111) 111-1111', '637 Morris Ave', '', 'St. Louis', 'missouri', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `WeaponType` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`ID`, `Name`, `WeaponType`) VALUES
(1, 'Arming Sword', 'Sword'),
(2, 'Broadsword', 'Sword'),
(3, 'Longsword', 'Sword'),
(4, 'Falchion', 'Sword'),
(5, 'Anelace', 'Dagger'),
(6, 'Stiletto', 'Dagger'),
(7, 'Poignard', 'Dagger'),
(8, 'Rondel', 'Dagger'),
(9, 'Sica', 'Dagger'),
(10, 'Dagger', 'Dagger'),
(11, 'Mace', 'Blunt'),
(12, 'Morningstar', 'Blunt'),
(13, 'Flail', 'Blunt'),
(14, 'War Hammer', 'Blunt'),
(15, 'Horsemen\'s Pick', 'Blunt'),
(16, 'Spear', 'Polearm'),
(17, 'Lance', 'Polearm'),
(18, 'Poleaxe', 'Polearm'),
(19, 'Halberd', 'Polearm'),
(20, 'Corseque', 'Polearm'),
(21, 'Maul', 'Polearm'),
(22, 'Throwing Axe', 'Ranged'),
(23, 'Javelin', 'Ranged');

-- --------------------------------------------------------

--
-- Table structure for table `swords`
--

CREATE TABLE `swords` (
  `ID` int(10) UNSIGNED NOT NULL,
  `ProductID` int(10) UNSIGNED DEFAULT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Image2` varchar(255) DEFAULT NULL,
  `Image3` varchar(255) DEFAULT NULL,
  `Image4` varchar(255) DEFAULT NULL,
  `Subcategory_ID` int(10) UNSIGNED NOT NULL,
  `BladeMaterial_ID` int(10) UNSIGNED NOT NULL,
  `BladeShape_ID` int(10) UNSIGNED NOT NULL,
  `BladeEdge_ID` int(10) UNSIGNED NOT NULL,
  `HiltMaterial_ID` int(10) UNSIGNED NOT NULL,
  `Grip_ID` int(10) UNSIGNED DEFAULT NULL,
  `Pommel_ID` int(10) UNSIGNED NOT NULL,
  `PommelMaterial_ID` int(10) UNSIGNED NOT NULL,
  `PommelAccent_ID` int(10) UNSIGNED DEFAULT NULL,
  `PommelGem_ID` int(10) UNSIGNED DEFAULT NULL,
  `SheathMaterial_ID` int(10) UNSIGNED NOT NULL,
  `SheathColor_ID` int(10) UNSIGNED NOT NULL,
  `SheathType_ID` int(10) UNSIGNED NOT NULL,
  `Engravings` varchar(40) DEFAULT NULL,
  `Inscriptions` varchar(40) DEFAULT NULL,
  `BladeLength_cm` decimal(10,2) NOT NULL,
  `Weight_kg` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `swords`
--

INSERT INTO `swords` (`ID`, `ProductID`, `Name`, `Image`, `Image2`, `Image3`, `Image4`, `Subcategory_ID`, `BladeMaterial_ID`, `BladeShape_ID`, `BladeEdge_ID`, `HiltMaterial_ID`, `Grip_ID`, `Pommel_ID`, `PommelMaterial_ID`, `PommelAccent_ID`, `PommelGem_ID`, `SheathMaterial_ID`, `SheathColor_ID`, `SheathType_ID`, `Engravings`, `Inscriptions`, `BladeLength_cm`, `Weight_kg`, `Price`, `Description`) VALUES
(1, 8, 'Duskward Defender', '../Images/Uploads/duskwardDefender.png', '../Images/Uploads/duskwardDefender2.png', '', '', 1, 8, 1, 1, 9, 9, 2, 8, 3, NULL, 1, 1, 1, '', '', 85.00, 1.30, 1200.00, 'A steady and understated arming sword, the Duskward Defender is forged from dark steel with a clipped, single-edged blade built for disciplined precision. Its walnut hilt and simple disc pommel favor balance over ornament, while the minimal black leather sheath keeps its presence discreet. Reliable and unadorned, it is a weapon made for vigilance rather than vanity.'),
(2, 9, 'The Ashen Sigil', '../Images/ArmingSwords/ashenSigil.png', 'C:\\xampp\\htdocs\\CapstoneProject\\MerchantSide\\src/../../Images/Uploads/20251018_131116.jpg', '', '', 1, 1, 1, 1, 10, 9, 1, 1, NULL, NULL, 1, 1, 1, '', '', 87.00, 1.35, 1100.00, 'A refined and dependable arming sword, The Ashen Sigil is forged from high‑carbon steel with a clipped, single‑edged blade built for clean, controlled strikes. Its hornbeam hilt and spherical pommel offer steady balance and understated strength, free of ornament or inscription. Carried in a minimal black leather sheath, it is a practical weapon for disciplined hands.'),
(3, 10, 'The Stalwart Companion', '../Images/ArmingSwords/stalwartCompanion.png', '', '', '', 1, 3, 4, 1, 4, 9, 5, 3, NULL, NULL, 1, 1, 1, NULL, NULL, 88.00, 1.40, 1250.00, 'Built for steadfast defense, the Stalwart Companion features a tool steel fuller blade with a single edge. Its beech hilt and wood grip provide a solid and ergonomic hold. The faceted pommel and minimal leather sheath emphasize practical craftsmanship over ornamentation.'),
(4, 11, 'Sentinel of Dunmere', '../Images/ArmingSwords/sentinelDunmere.png', '', '', '', 1, 7, 2, 1, 9, 9, 9, 7, NULL, 1, 1, 1, 1, NULL, NULL, 84.00, 1.25, 1300.00, 'The Sentinel of Dunmere wields a bronze alloy drop blade with a single edge, optimized for precision. A black walnut hilt and wood grip ensure stable handling in battle. Accented with a wheel pommel and minimal leather sheath, it’s a versatile and reliable sword for guards.'),
(5, 12, 'Ironveil Guard’s Blade', '../Images/ArmingSwords/ironveilGuardBlade.png', '', '', '', 1, 4, 5, 1, 4, 9, 1, 4, NULL, NULL, 1, 1, 1, NULL, NULL, 86.00, 1.28, 1150.00, 'A balanced and dependable sidearm, the Ironveil Guard\'s Blade is the standard-issue weapon of the city\'s watchmen. Forged for endurance and precision, it blends utility with understated craftsmanship.'),
(6, 13, 'Frostgate Officer’s Sword', '../Images/ArmingSwords/frostgateOfficerSword.png', '', '', '', 1, 1, 6, 1, 5, 7, 4, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 85.50, 1.30, 1180.00, 'High-carbon steel and a leaf-shaped single edge define the Frostgate Officer’s Sword, designed for swift strikes. The hornbeam hilt and leather grip provide comfort for prolonged wielding. Its faceted pommel and black leather sheath complete a sword both functional and refined.'),
(7, 14, 'Redwyn’s Edge', '../Images/ArmingSwords/redwynEdge.png', '', '', '', 1, 8, 2, 1, 10, 9, 4, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 86.00, 1.32, 1220.00, 'Redwyn’s Edge features a dark steel drop blade with a single edge, crafted for resilience in combat. The hornbeam hilt and wood grip deliver stability, complemented by a disc pommel. Its minimal leather sheath underscores the sword’s practical elegance.'),
(8, 15, 'Hollowkeep Standard Issue', '../Images/ArmingSwords/hollowkeepStandardIssue.png', '', '', '', 1, 6, 1, 1, 7, 9, 2, 3, NULL, NULL, 1, 1, 1, NULL, NULL, 87.00, 1.35, 1270.00, 'Made of maraging steel with a clip-shaped single edge, the Hollowkeep Standard Issue is both strong and precise. A purpleheart hilt and wood grip provide ergonomic support. Finished with a disc pommel and black leather sheath, it’s a reliable sidearm for any soldier.'),
(9, 16, 'The Thornhill Blade', '../Images/ArmingSwords/thornhillBlade.png', '', '', '', 1, 2, 3, 1, 11, 11, 6, 2, NULL, NULL, 1, 1, 1, NULL, NULL, 88.00, 1.38, 1190.00, 'The Thornhill Blade wields tool steel with a tanto-shaped single edge, designed for both cutting and thrusting. Its hornbeam hilt and cord-wrapped grip offer firm handling. Accented with a faceted pommel and minimal leather sheath, it’s a practical yet distinguished weapon.'),
(10, 17, 'The Ironveil Pattern II', '../Images/ArmingSwords/ironveilPatternII.png', '', '', '', 1, 3, 5, 1, 8, 9, 1, 3, NULL, NULL, 1, 1, 1, '', NULL, 87.00, 1.36, 1210.00, 'A refined continuation of the original Ironveil design, Pattern II emphasizes durability and disciplined balance. Built for repeated field use, its straightforward geometry and reliable handling reflect the forge’s philosophy of practical, soldier-first craftsmanship.'),
(11, 18, 'Blackmoor Bastard Sword', '../Images/Broadswords/blackmoorBastardSword.png', '', '', '', 2, 8, 7, 1, 4, 7, 1, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 95.00, 1.50, 1150.00, 'The Blackmoor Bastard Sword is forged from dark steel with a bowie-shaped single edge, built for power and cutting efficiency. Its beech hilt and leather grip provide a secure hold, while a sphere pommel balances the blade. The minimalist leather sheath keeps the design straightforward and battle-ready.'),
(12, 19, 'The Northfell Cutter', '../Images/Broadswords/northfellCutter.png', '', '', '', 2, 1, 7, 1, 7, 6, 2, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 96.00, 1.55, 1120.00, 'Constructed from high-carbon steel, the Northfell Cutter features a bowie-shaped single edge that excels in both offense and defense. Its hornbeam hilt and curved grip offer stability in the hand. Finished with a disc pommel and simple black leather sheath, it’s a dependable warhorse of a sword.'),
(13, 20, 'The Stormholt Bastion', '../Images/Broadswords/stormholtBastion.png', '', '', '', 2, 2, 7, 1, 9, 9, 8, 2, NULL, NULL, 1, 1, 1, NULL, NULL, 97.00, 1.60, 980.00, 'The Stormholt Bastion wields a bronze alloy bowie blade with a single edge, emphasizing durability and cutting power. A black walnut hilt and wood grip provide a steady hold for sustained combat. Accented with a wheel pommel and minimal leather sheath, it balances practicality with understated craftsmanship.'),
(14, 21, 'The Duskfield Guard’s Sword', '../Images/Broadswords/duskfieldGuardSword.png', '', '', '', 2, 7, 7, 1, 11, 2, 5, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 94.00, 1.48, 820.00, 'This weapon combines maraging steel with a bowie-shaped single edge, optimized for precise slashes. Its hornbeam hilt and waisted grip offer controlled handling, while a faceted pommel adds subtle visual appeal. The sword rests in a minimal leather sheath, emphasizing utility over ornamentation.'),
(15, 22, 'Silverbarrow Line Breaker', '../Images/Broadswords/silverbarrowLineBreaker.png', '', '', '', 2, 3, 7, 1, 2, 11, 6, 3, NULL, NULL, 1, 1, 1, NULL, NULL, 95.50, 1.52, 1250.00, 'Silverbarrow Line Breaker features tool steel in a bowie-shaped single edge, designed for heavy strikes and battlefield versatility. A hickory hilt and cord-wrapped grip provide a reliable hold, while a faceted pommel offers balanced heft. Its black leather sheath keeps the look clean and functional.'),
(16, 23, 'Emberlake Warblade', '../Images/Broadswords/emberlakeWarblade.png', '', '', '', 2, 6, 7, 1, 1, 4, 2, 6, NULL, NULL, 1, 1, 1, NULL, NULL, 96.00, 1.55, 920.00, 'Forged from maraging steel, the Emberlake Warblade’s bowie-shaped single edge is built for aggressive combat. A hickory hilt and straight grip make the sword sturdy in hand. Paired with a minimal black leather sheath, it’s a resilient weapon for prolonged engagements.'),
(17, 24, 'The Wyrdcliff Vanguard', '../Images/Broadswords/wyrdcliffVanguard.png', '', '', '', 2, 5, 7, 1, 5, 14, 9, 6, NULL, 3, 1, 1, 1, NULL, NULL, 97.50, 1.60, 970.00, 'The Wyrdcliff Vanguard combines tool steel with a bowie-shaped single edge, offering a sharp and reliable blade. Its black walnut hilt and ornate grip provide both style and control. Finished with a faceted pommel and minimal leather sheath, it’s a sword built for both elegance and battle.'),
(18, 25, 'Ironvale Heavy Cutter', '../Images/Broadswords/ironvaleHeavyCutter.png', '', '', '', 2, 4, 7, 1, 5, 8, 10, 3, NULL, NULL, 1, 1, 1, '', NULL, 98.00, 1.65, 680.00, 'Broad, weighty, and unapologetically forceful, this cutter excels at decisive cleaving strikes. Its forward presence rewards committed swings, making it a favored choice among warriors who rely on momentum to dominate engagements.'),
(19, 26, 'Hollowspire Broad Edge', '../Images/Broadswords/hollowspireBroadEdge.png', '', '', '', 2, 8, 7, 1, 10, 12, 2, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 96.50, 1.58, 1040.00, 'Defined by its expansive blade profile, the Broad Edge combines cutting authority with controlled balance. The weapon’s silhouette conveys quiet confidence, offering dependable performance without unnecessary ornamentation.'),
(20, 27, 'The Stonewatch Standard', '../Images/Broadswords/stonewatchStandard.png', '', '', '', 2, 1, 7, 1, 8, 13, 4, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 95.50, 1.50, 780.00, 'Issued in the tradition of Stonewatch garrisons, this sword embodies consistency and readiness. Balanced for patrol and skirmish alike, it stands as a dependable sidearm shaped by the expectations of watchful service.'),
(21, 28, 'Emberfell Reaver', '../Images/Falchions/emberfellReaver.png', '', '', '', 4, 1, 7, 1, 2, 9, 2, 1, NULL, NULL, 1, 1, 1, '', '', 85.00, 1.30, 870.00, 'The Emberfell Reaver is a high-carbon steel falchion with a bowie-shaped single edge, designed for swift, decisive strikes. Its ash hilt and wood grip provide stability, while a disc pommel balances the blade. The black leather sheath keeps the weapon simple and ready for combat.'),
(22, 29, 'Ironwood Field Falchion', '../Images/Falchions/ironwoodFieldFalchion.png', '', '', '', 4, 2, 7, 1, 11, 9, 8, 2, NULL, NULL, 1, 1, 1, NULL, NULL, 87.00, 1.35, 780.00, 'Crafted from tool steel, the Ironwood Field Falchion features a bowie-shaped single edge optimized for reach and cutting power. Its hornbeam hilt and wood grip ensure precise handling, complemented by a faceted pommel. Housed in a minimal black leather sheath, it emphasizes function over flair.'),
(23, 30, 'Ironveil Tradesman’s Edge', '../Images/Falchions/ironveilTradesmanEdge.png', '', '', '', 4, 7, 7, 1, 5, 2, 5, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 86.00, 1.30, 790.00, 'The Ironveil Tradesman’s Edge blends maraging steel with a bowie-shaped single edge, delivering durability and sharpness for routine or battlefield use. A hornbeam hilt and waisted grip provide firm control, while a wheel pommel balances the weapon. Its minimal leather sheath completes a utilitarian design.'),
(24, 31, 'Wyrmvale Raider’s Blade', '../Images/Falchions/wyrmvaleRaiderBlade.png', '', '', '', 4, 3, 7, 1, 4, 6, 6, 3, NULL, NULL, 1, 1, 1, NULL, NULL, 88.00, 1.40, 890.00, 'This falchion combines bronze alloy with a bowie-shaped single edge, emphasizing cutting efficiency and resilience. A hickory hilt with cord-wrapped grip gives precise handling, while a faceted pommel ensures balance. The black leather sheath maintains the sword’s straightforward, practical style.'),
(25, 32, 'The Redfen Sawblade', '../Images/Falchions/redfenSawblade.png', '', '', '', 4, 6, 7, 1, 7, 4, 7, 6, NULL, NULL, 1, 1, 1, NULL, NULL, 87.00, 1.45, 880.00, 'The Redfen Sawblade features titanium alloy in a bowie-shaped single edge, built for strength and swift strikes. Its hornbeam hilt and flared grip offer reliable control, complemented by a spike pommel. Stored in a minimal black leather sheath, it is designed for battle-ready utility.'),
(26, 33, 'The Duskmoor Falchion', '../Images/Falchions/duskmoorFalchion.png', '', '', '', 4, 5, 7, 1, 5, 13, 10, 5, NULL, 2, 1, 1, 1, NULL, NULL, 90.00, 1.50, 1020.00, 'Made from tool steel with a bowie-shaped single edge, the Duskmoor Falchion excels at cutting and slicing. Its hornbeam hilt and ornate grip provide both style and control, while a counterweight pommel balances the weapon. The black leather sheath is kept simple to emphasize practicality.'),
(27, 34, 'The Blackhollow Cutter', '../Images/Falchions/blackhollowCutter.png', '', '', '', 4, 4, 7, 1, 1, 11, 10, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 88.00, 1.40, 950.00, 'The Blackhollow Cutter wields maraging steel with a bowie-shaped single edge, engineered for precise and sustained slashes. A hornbeam hilt and cord-wrapped grip give solid handling, paired with a faceted pommel for balance. The minimal black leather sheath underscores the sword’s functional design.'),
(28, 35, 'Greyhaven War Falchion', '../Images/Falchions/greyhavenWarFalchion.png', '', '', '', 4, 1, 7, 1, 8, 9, 4, 1, NULL, NULL, 1, 1, 1, '', NULL, 86.00, 1.35, 1060.00, 'With its pronounced curve and robust spine, the War Falchion delivers sweeping power suited to the chaos of close combat. Its design favors assertive movement, translating fluid arcs into formidable cutting force.'),
(29, 36, 'Hollowgate Hunter’s Sword', '../Images/Falchions/hollowgateHunterSword.png', '', '', '', 4, 2, 7, 1, 11, 9, 1, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 85.00, 1.30, 840.00, 'Lightweight and responsive, this hunter’s blade prioritizes endurance and adaptability. Its agile handling supports prolonged pursuits, where efficiency and control matter more than raw impact.'),
(30, 37, 'Stormrest Frontliner', '../Images/Falchions/stormrestFrontliner.png', '', '', '', 4, 8, 7, 1, 10, 2, 2, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 87.00, 1.40, 910.00, 'Forged with the realities of frontline combat in mind, this falchion balances reach, resilience, and striking presence. Its confident geometry complements advancing formations, reinforcing the rhythm of forward pressure.'),
(31, 38, 'Crowhaven’s Longsword', '../Images/Longswords/crowhavenLongsword.png', '', '', '', 3, 1, 1, 1, 4, 9, 1, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 100.00, 1.60, 1180.00, 'Crowhaven’s Longsword is a high-carbon steel weapon with a clip-shaped single edge, built for balance and reliable handling. Its hornbeam hilt and wood grip offer steady control, complemented by a sphere pommel. A minimal black leather sheath keeps the design straightforward and practical.'),
(32, 39, 'The Ebonreach Guard’s Edge', '../Images/Longswords/ebonreachGuardEdge.png', '', '', '', 3, 2, 1, 1, 1, 9, 2, 2, NULL, NULL, 1, 1, 1, NULL, NULL, 101.00, 1.65, 1260.00, 'Forged from tool steel with a clip-shaped single edge, The Ebonreach Guard’s Edge emphasizes precision and durability in the field. A hickory hilt with wood grip provides comfortable handling, while a disc pommel ensures balanced swings. Its minimal black leather sheath maintains a functional, no-frills aesthetic.'),
(33, 40, 'The Frostmere Vigil', '../Images/Longswords/frostmereVigil.png', '', '', '', 3, 3, 4, 1, 11, 9, 5, 3, NULL, NULL, 1, 1, 1, NULL, NULL, 102.00, 1.70, 1320.00, 'The Frostmere Vigil combines maraging steel with a fuller-shaped single edge, ideal for long, decisive cuts. A birch hilt and wood grip provide stability, while a faceted pommel ensures balance. Housed in a minimal black leather sheath, it’s crafted for reliability and endurance.'),
(34, 41, 'Redwyne Officer’s Saber', '../Images/Longswords/redwyneOfficerSaber.png', '', '', '', 3, 4, 2, 1, 5, 2, 2, 4, NULL, NULL, 1, 1, 1, NULL, NULL, 103.00, 1.55, 1090.00, 'Redwyne Officer’s Saber features PM stainless steel with a drop-shaped single edge, designed for swift and precise strikes. Its ash hilt and waisted grip offer controlled handling, paired with a wheel pommel for balance. The minimal black leather sheath keeps the weapon practical and combat-ready.'),
(35, 42, 'The Ironholt Line Sword', '../Images/Longswords/ironholtLineSword.png', '', '', '', 3, 6, 3, 1, 11, 4, 7, 6, NULL, NULL, 1, 1, 1, NULL, NULL, 104.00, 1.58, 1050.00, 'The Ironholt Line Sword is built from titanium alloy with a tanto-shaped single edge, combining toughness and cutting efficiency. A hornbeam hilt and cord-wrapped grip provide precise control, complemented by a spike pommel. Its minimal black leather sheath underscores its utilitarian focus.'),
(36, 43, 'The Dreadmarch Pattern IV', '../Images/Longswords/dreadmarchPatternIV.png', '', '', '', 3, 7, 4, 1, 2, 7, 4, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 105.00, 1.62, 11480.00, 'This longsword employs PM stainless steel with a fuller-shaped single edge, emphasizing reach and slicing power. A hickory hilt with straight grip ensures stability, while a disc pommel balances the blade. The minimal black leather sheath keeps the weapon ready for sustained use.'),
(37, 44, 'Ashford Battle Longsword', '../Images/Longswords/ashfordBattleLongsword.png', '', '', '', 3, 5, 7, 1, 7, 9, 6, 5, NULL, NULL, 1, 1, 1, NULL, NULL, 106.00, 1.65, 980.00, 'Ashford Battle Longsword uses bronze alloy in a bowie-shaped single edge, designed for versatility and durability. Its hornbeam hilt and waisted grip provide firm control, paired with a faceted pommel for balance. Housed in a minimal black leather sheath, it prioritizes function over decoration.'),
(38, 45, 'Thornwall Marshal’s Sword', '../Images/Longswords/thornwallMarshalSword.png', '', '', '', 3, 1, 3, 1, 10, 12, 8, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 107.00, 1.68, 1160.00, 'The Thornwall Marshal’s Sword features high-carbon steel with a tanto-shaped single edge, built for strength and precision. A black walnut hilt and straight grip ensure a solid hold, while a disc pommel balances the weapon. The minimal black leather sheath maintains a utilitarian style.'),
(39, 46, 'Stonevale Great Longsword', '../Images/Longswords/stonevaleGreatLongsword.png', '', '', '', 3, 3, 5, 1, 5, 14, 10, 3, NULL, NULL, 1, 1, 1, NULL, NULL, 108.00, 1.72, 1340.00, 'Stonevale Great Longsword combines maraging steel with a fuller-shaped single edge, designed for reach and cutting power. A hornbeam hilt and wood grip provide stability, complemented by a faceted pommel. Its minimal black leather sheath keeps the weapon functional and ready for battle.'),
(40, 47, 'The Nightwell Blade', '../Images/Longswords/nightwellBlade.png', '', '', '', 3, 8, 7, 1, 8, 11, 9, 8, NULL, 8, 1, 1, 1, NULL, NULL, 109.00, 1.70, 1240.00, 'The Nightwell Blade is forged from dark steel with a bowie-shaped single edge, optimized for decisive cuts. A black walnut hilt with cord-wrapped grip gives secure handling, paired with a cage pommel for balance. Its minimal black leather sheath emphasizes practicality over ornamentation.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`) VALUES
(1, 'user123', 'password123'),
(2, 'tnook4', 'c4pit4lismr0cks'),
(3, 'heroking', 'mFE1990'),
(4, 'definitelyTheHero', 'true_hero17');

-- --------------------------------------------------------

--
-- Table structure for table `woodmaterials`
--

CREATE TABLE `woodmaterials` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `PriceModifier` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `woodmaterials`
--

INSERT INTO `woodmaterials` (`ID`, `Name`, `Image`, `PriceModifier`) VALUES
(1, 'Hickory', '../Images/CustomizationOptions/Materials/hickory.png', 10.00),
(2, 'Ash', '../Images/CustomizationOptions/Materials/ash.png', 6.00),
(3, 'Ironwood', '../Images/CustomizationOptions/Materials/ironwood.png', 22.00),
(4, 'Purpleheart', '../Images/CustomizationOptions/Materials/purpleheart.png', 18.00),
(5, 'Beech', '../Images/CustomizationOptions/Materials/beech.png', 4.00),
(6, 'Birch', '../Images/CustomizationOptions/Materials/birch.png', 2.00),
(7, 'Maple', '../Images/CustomizationOptions/Materials/maple.png', 8.00),
(8, 'Poplar', '../Images/CustomizationOptions/Materials/poplar.png', 0.00),
(9, 'Black Walnut', '../Images/CustomizationOptions/Materials/blackWalnut.png', 15.00),
(10, 'Hornbeam', '../Images/CustomizationOptions/Materials/hornbeam.png', 12.00),
(11, 'Lignum Vitae', '../Images/CustomizationOptions/Materials/lignumVitae.png', 25.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bladeedges`
--
ALTER TABLE `bladeedges`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bladeshapes`
--
ALTER TABLE `bladeshapes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blunthandweapons`
--
ALTER TABLE `blunthandweapons`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Subcategory_ID` (`Subcategory_ID`),
  ADD KEY `HeadMaterial_ID` (`HeadMaterial_ID`),
  ADD KEY `ShaftMaterial_ID` (`ShaftMaterial_ID`),
  ADD KEY `Grip_ID` (`Grip_ID`),
  ADD KEY `Pommel_ID` (`Pommel_ID`),
  ADD KEY `PommelMaterial_ID` (`PommelMaterial_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `cart_ibfk_2` (`ProductID`),
  ADD KEY `cart_ibfk_1` (`UserID`);

--
-- Indexes for table `daggers`
--
ALTER TABLE `daggers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Subcategory_ID` (`Subcategory_ID`),
  ADD KEY `BladeMaterial_ID` (`BladeMaterial_ID`),
  ADD KEY `BladeEdge_ID` (`BladeEdge_ID`),
  ADD KEY `HiltMaterial_ID` (`HiltMaterial_ID`),
  ADD KEY `Grip_ID` (`Grip_ID`),
  ADD KEY `Pommel_ID` (`Pommel_ID`),
  ADD KEY `PommelMaterial_ID` (`PommelMaterial_ID`),
  ADD KEY `PommelGem_ID` (`PommelGem_ID`),
  ADD KEY `SheathMaterial_ID` (`SheathMaterial_ID`),
  ADD KEY `SheathColor_ID` (`SheathColor_ID`),
  ADD KEY `SheathType_ID` (`SheathType_ID`);

--
-- Indexes for table `gripstyles`
--
ALTER TABLE `gripstyles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `metalmaterials`
--
ALTER TABLE `metalmaterials`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `orderitems_ibfk_1` (`OrderID`),
  ADD KEY `orderitems_ibfk_2` (`ProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `orders_ibfk_1` (`UserID`);

--
-- Indexes for table `paymentmethods`
--
ALTER TABLE `paymentmethods`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `payment_ibfk_1` (`UserID`);

--
-- Indexes for table `polearms`
--
ALTER TABLE `polearms`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Subcategory_ID` (`Subcategory_ID`),
  ADD KEY `HeadMaterial_ID` (`HeadMaterial_ID`),
  ADD KEY `ShaftMaterial_ID` (`ShaftMaterial_ID`),
  ADD KEY `Grip_ID` (`Grip_ID`),
  ADD KEY `ButtCap_ID` (`ButtCap_ID`),
  ADD KEY `ButtCapMaterial_ID` (`ButtCapMaterial_ID`);

--
-- Indexes for table `pommelgems`
--
ALTER TABLE `pommelgems`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pommeltypes`
--
ALTER TABLE `pommeltypes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ranged`
--
ALTER TABLE `ranged`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Subcategory_ID` (`Subcategory_ID`),
  ADD KEY `HeadMaterial_ID` (`HeadMaterial_ID`),
  ADD KEY `ShaftMaterial_ID` (`ShaftMaterial_ID`),
  ADD KEY `Grip_ID` (`Grip_ID`);

--
-- Indexes for table `sheathcolors`
--
ALTER TABLE `sheathcolors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sheathmaterials`
--
ALTER TABLE `sheathmaterials`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sheathtypes`
--
ALTER TABLE `sheathtypes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shippingaddresses`
--
ALTER TABLE `shippingaddresses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `addresses_ibfk_1` (`UserID`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `swords`
--
ALTER TABLE `swords`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Subcategory_ID` (`Subcategory_ID`),
  ADD KEY `BladeMaterial_ID` (`BladeMaterial_ID`),
  ADD KEY `BladeShape_ID` (`BladeShape_ID`),
  ADD KEY `BladeEdge_ID` (`BladeEdge_ID`),
  ADD KEY `HiltMaterial_ID` (`HiltMaterial_ID`),
  ADD KEY `Grip_ID` (`Grip_ID`),
  ADD KEY `Pommel_ID` (`Pommel_ID`),
  ADD KEY `PommelMaterial_ID` (`PommelMaterial_ID`),
  ADD KEY `PommelAccent_ID` (`PommelAccent_ID`),
  ADD KEY `PommelGem_ID` (`PommelGem_ID`),
  ADD KEY `SheathMaterial_ID` (`SheathMaterial_ID`),
  ADD KEY `SheathColor_ID` (`SheathColor_ID`),
  ADD KEY `SheathType_ID` (`SheathType_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `woodmaterials`
--
ALTER TABLE `woodmaterials`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bladeedges`
--
ALTER TABLE `bladeedges`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bladeshapes`
--
ALTER TABLE `bladeshapes`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blunthandweapons`
--
ALTER TABLE `blunthandweapons`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `daggers`
--
ALTER TABLE `daggers`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gripstyles`
--
ALTER TABLE `gripstyles`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `metalmaterials`
--
ALTER TABLE `metalmaterials`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `paymentmethods`
--
ALTER TABLE `paymentmethods`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `polearms`
--
ALTER TABLE `polearms`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pommelgems`
--
ALTER TABLE `pommelgems`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pommeltypes`
--
ALTER TABLE `pommeltypes`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `ranged`
--
ALTER TABLE `ranged`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sheathcolors`
--
ALTER TABLE `sheathcolors`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sheathmaterials`
--
ALTER TABLE `sheathmaterials`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sheathtypes`
--
ALTER TABLE `sheathtypes`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shippingaddresses`
--
ALTER TABLE `shippingaddresses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `swords`
--
ALTER TABLE `swords`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `woodmaterials`
--
ALTER TABLE `woodmaterials`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blunthandweapons`
--
ALTER TABLE `blunthandweapons`
  ADD CONSTRAINT `blunthandweapons_ibfk_1` FOREIGN KEY (`Subcategory_ID`) REFERENCES `subcategories` (`ID`),
  ADD CONSTRAINT `blunthandweapons_ibfk_2` FOREIGN KEY (`HeadMaterial_ID`) REFERENCES `metalmaterials` (`ID`),
  ADD CONSTRAINT `blunthandweapons_ibfk_3` FOREIGN KEY (`ShaftMaterial_ID`) REFERENCES `woodmaterials` (`ID`),
  ADD CONSTRAINT `blunthandweapons_ibfk_4` FOREIGN KEY (`Grip_ID`) REFERENCES `gripstyles` (`ID`),
  ADD CONSTRAINT `blunthandweapons_ibfk_5` FOREIGN KEY (`Pommel_ID`) REFERENCES `pommeltypes` (`ID`),
  ADD CONSTRAINT `blunthandweapons_ibfk_6` FOREIGN KEY (`PommelMaterial_ID`) REFERENCES `metalmaterials` (`ID`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ID`);

--
-- Constraints for table `daggers`
--
ALTER TABLE `daggers`
  ADD CONSTRAINT `daggers_ibfk_1` FOREIGN KEY (`Subcategory_ID`) REFERENCES `subcategories` (`ID`),
  ADD CONSTRAINT `daggers_ibfk_10` FOREIGN KEY (`SheathColor_ID`) REFERENCES `sheathcolors` (`ID`),
  ADD CONSTRAINT `daggers_ibfk_11` FOREIGN KEY (`SheathType_ID`) REFERENCES `sheathtypes` (`ID`),
  ADD CONSTRAINT `daggers_ibfk_2` FOREIGN KEY (`BladeMaterial_ID`) REFERENCES `metalmaterials` (`ID`),
  ADD CONSTRAINT `daggers_ibfk_3` FOREIGN KEY (`BladeEdge_ID`) REFERENCES `bladeedges` (`ID`),
  ADD CONSTRAINT `daggers_ibfk_4` FOREIGN KEY (`HiltMaterial_ID`) REFERENCES `woodmaterials` (`ID`),
  ADD CONSTRAINT `daggers_ibfk_5` FOREIGN KEY (`Grip_ID`) REFERENCES `gripstyles` (`ID`),
  ADD CONSTRAINT `daggers_ibfk_6` FOREIGN KEY (`Pommel_ID`) REFERENCES `pommeltypes` (`ID`),
  ADD CONSTRAINT `daggers_ibfk_7` FOREIGN KEY (`PommelMaterial_ID`) REFERENCES `metalmaterials` (`ID`),
  ADD CONSTRAINT `daggers_ibfk_8` FOREIGN KEY (`PommelGem_ID`) REFERENCES `pommelgems` (`ID`),
  ADD CONSTRAINT `daggers_ibfk_9` FOREIGN KEY (`SheathMaterial_ID`) REFERENCES `sheathmaterials` (`ID`);

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `paymentmethods`
--
ALTER TABLE `paymentmethods`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `polearms`
--
ALTER TABLE `polearms`
  ADD CONSTRAINT `polearms_ibfk_1` FOREIGN KEY (`Subcategory_ID`) REFERENCES `subcategories` (`ID`),
  ADD CONSTRAINT `polearms_ibfk_2` FOREIGN KEY (`HeadMaterial_ID`) REFERENCES `metalmaterials` (`ID`),
  ADD CONSTRAINT `polearms_ibfk_3` FOREIGN KEY (`ShaftMaterial_ID`) REFERENCES `woodmaterials` (`ID`),
  ADD CONSTRAINT `polearms_ibfk_4` FOREIGN KEY (`Grip_ID`) REFERENCES `gripstyles` (`ID`),
  ADD CONSTRAINT `polearms_ibfk_5` FOREIGN KEY (`ButtCap_ID`) REFERENCES `pommeltypes` (`ID`),
  ADD CONSTRAINT `polearms_ibfk_6` FOREIGN KEY (`ButtCapMaterial_ID`) REFERENCES `metalmaterials` (`ID`);

--
-- Constraints for table `ranged`
--
ALTER TABLE `ranged`
  ADD CONSTRAINT `ranged_ibfk_1` FOREIGN KEY (`Subcategory_ID`) REFERENCES `subcategories` (`ID`),
  ADD CONSTRAINT `ranged_ibfk_2` FOREIGN KEY (`HeadMaterial_ID`) REFERENCES `metalmaterials` (`ID`),
  ADD CONSTRAINT `ranged_ibfk_3` FOREIGN KEY (`ShaftMaterial_ID`) REFERENCES `woodmaterials` (`ID`),
  ADD CONSTRAINT `ranged_ibfk_4` FOREIGN KEY (`Grip_ID`) REFERENCES `gripstyles` (`ID`);

--
-- Constraints for table `shippingaddresses`
--
ALTER TABLE `shippingaddresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`);

--
-- Constraints for table `swords`
--
ALTER TABLE `swords`
  ADD CONSTRAINT `swords_ibfk_1` FOREIGN KEY (`Subcategory_ID`) REFERENCES `subcategories` (`ID`),
  ADD CONSTRAINT `swords_ibfk_10` FOREIGN KEY (`PommelGem_ID`) REFERENCES `pommelgems` (`ID`),
  ADD CONSTRAINT `swords_ibfk_11` FOREIGN KEY (`SheathMaterial_ID`) REFERENCES `sheathmaterials` (`ID`),
  ADD CONSTRAINT `swords_ibfk_12` FOREIGN KEY (`SheathColor_ID`) REFERENCES `sheathcolors` (`ID`),
  ADD CONSTRAINT `swords_ibfk_13` FOREIGN KEY (`SheathType_ID`) REFERENCES `sheathtypes` (`ID`),
  ADD CONSTRAINT `swords_ibfk_2` FOREIGN KEY (`BladeMaterial_ID`) REFERENCES `metalmaterials` (`ID`),
  ADD CONSTRAINT `swords_ibfk_3` FOREIGN KEY (`BladeShape_ID`) REFERENCES `bladeshapes` (`ID`),
  ADD CONSTRAINT `swords_ibfk_4` FOREIGN KEY (`BladeEdge_ID`) REFERENCES `bladeedges` (`ID`),
  ADD CONSTRAINT `swords_ibfk_5` FOREIGN KEY (`HiltMaterial_ID`) REFERENCES `woodmaterials` (`ID`),
  ADD CONSTRAINT `swords_ibfk_6` FOREIGN KEY (`Grip_ID`) REFERENCES `gripstyles` (`ID`),
  ADD CONSTRAINT `swords_ibfk_7` FOREIGN KEY (`Pommel_ID`) REFERENCES `pommeltypes` (`ID`),
  ADD CONSTRAINT `swords_ibfk_8` FOREIGN KEY (`PommelMaterial_ID`) REFERENCES `metalmaterials` (`ID`),
  ADD CONSTRAINT `swords_ibfk_9` FOREIGN KEY (`PommelAccent_ID`) REFERENCES `metalmaterials` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
