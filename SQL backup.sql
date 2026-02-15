-- ========================================
-- Supporting Tables
-- ========================================

CREATE TABLE Subcategories (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL,
    WeaponType VARCHAR(40) NOT NULL
);

INSERT INTO Subcategories (Name, WeaponType) VALUES
('Arming Sword', 'Sword'),
('Broadsword', 'Sword'),
('Longsword', 'Sword'),
('Falchion', 'Sword'),
('Anelace', 'Dagger'),
('Stiletto', 'Dagger'),
('Poignard', 'Dagger'),
('Rondel', 'Dagger'),
('Sica', 'Dagger'),
('Dagger', 'Dagger'),
('Mace', 'Blunt'),
('Morningstar', 'Blunt'),
('Flail', 'Blunt'),
('War Hammer', 'Blunt'),
("Horsemen's Pick", 'Blunt'),
('Spear', 'Polearm'),
('Lance', 'Polearm'),
('Poleaxe', 'Polearm'),
('Halberd', 'Polearm'),
('Corseque', 'Polearm'),
('Maul', 'Polearm'),
('Throwing Axe', 'Ranged'),
('Javelin', 'Ranged');

CREATE TABLE MetalMaterials (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL
    Image VARCHAR(255) NOT NULL,
    PriceModifier(10,2) NOT NULL
);

INSERT INTO MetalMaterials (Name) VALUES
('High-Carbon Steel', '../Images/CustomizationOptions/Materials/highCarbonSteel.png', 0.00),
('Tool Steel', '../Images/CustomizationOptions/Materials/toolSteel.png', 25.00),
('PM Stainless', '../Images/CustomizationOptions/Materials/pmStainlessSteel.png', 60.00),
('Titanium Alloy', '../Images/CustomizationOptions/Materials/titaniumAlloy.png', 85.00),
('Tungsten Carbide', '../Images/CustomizationOptions/Materials/tungstenCarbide.png', 110.00),
('Maraging Steel', '../Images/CustomizationOptions/Materials/maragingSteel.png', 75.00),
('Bronze Alloy', '../Images/CustomizationOptions/Materials/bronzeAlloy.png', 15.00),
('Dark Steel', '../Images/CustomizationOptions/Materials/darkSteel.png', 50.00);

CREATE TABLE BladeShapes (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL
    Image VARCHAR(255) NOT NULL,
    PriceModifier(10,2) NOT NULL
);

INSERT INTO BladeShapes (Name) VALUES
('Clip', '../Images/CustomizationOptions/BladeShapes/clip.png', 25.00),
('Drop', '../Images/CustomizationOptions/BladeShapes/drop.png', 10.00),
('Tanto', '../Images/CustomizationOptions/BladeShapes/tanto.png', 30.00),
('Fuller', '../Images/CustomizationOptions/BladeShapes/fuller.png', 45.00),
('Leaf', '../Images/CustomizationOptions/BladeShapes/leaf.png', 40.00),
('Scimitar', '../Images/CustomizationOptions/BladeShapes/scimitar.png', 55.00),
('Falchion', '../Images/CustomizationOptions/BladeShapes/falcion.png', 40.00),
('Bowie', '../Images/CustomizationOptions/BladeShapes/bowie.png', 35.00),
('Wharncliffe', '../Images/CustomizationOptions/BladeShapes/wharncliffe.png', 25.00),
('Recurve', '../Images/CustomizationOptions/BladeShapes/recurve.png', 50.00),
('Kukri', '../Images/CustomizationOptions/BladeShapes/kukri.png', 60.00),
('Estoc', '../Images/CustomizationOptions/BladeShapes/estoc.png', 70.00);

CREATE TABLE BladeEdges (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL
    Image VARCHAR(255) NOT NULL,
    PriceModifier(10,2) NOT NULL
);

INSERT INTO BladeEdges (Name) VALUES
('Single Edge', '../Images/CustomizationOptions/BladeEdges/single.png', 0.00),
('Double Edge', '../Images/CustomizationOptions/BladeEdges/double.png', 25.00),
('False Edge', '../Images/CustomizationOptions/BladeEdges/false.png', 15.00),
('Blunt', '../Images/CustomizationOptions/BladeEdges/blunt/png', 5.00),
('Plain', '../Images/CustomizationOptions/BladeEdges/plain.png', 0.00),
('Serrated', '../Images/CustomizationOptions/BladeEdges/serrated.png', 40.00),
('Hybrid', '../Images/CustomizationOptions/BladeEdges/hybrid.png', 45.00),
('Flat Grind', '../Images/CustomizationOptions/BladeEdges/flat.png', 15.00),
('Hollow', '../Images/CustomizationOptions/BladeEdges/hollow.png', 30.00),
('Convex', '../Images/CustomizationOptions/BladeEdges/convex.png', 40.00),
('Chisel', '../Images/CustomizationOptions/BladeEdges/chisel.png', 20.00),
('Scandi', '../Images/CustomizationOptions/BladeEdges/scandi.png', 25.00),
('Saber', '../Images/CustomizationOptions/BladeEdges/saber.png', 25.00);

CREATE TABLE WoodMaterials (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL
    Image VARCHAR(255) NOT NULL,
    PriceModifier(10,2) NOT NULL
);

INSERT INTO WoodMaterials (Name) VALUES
('Hickory', '../Images/CustomizationOptions/Materials/hickory.png', 10.00),
('Ash', '../Images/CustomizationOptions/Materials/ash.png', 6.00),
('Ironwood', '../Images/CustomizationOptions/Materials/ironwood.png', 22.00),
('Purpleheart', '../Images/CustomizationOptions/Materials/purpleheart.png', 18.00),
('Beech', '../Images/CustomizationOptions/Materials/beech.png', 4.00),
('Birch', '../Images/CustomizationOptions/Materials/birch.png', 2.00),
('Maple', '../Images/CustomizationOptions/Materials/maple.png', 8.00),
('Poplar', '../Images/CustomizationOptions/Materials/poplar.png', 0.00),
('Black Walnut', '../Images/CustomizationOptions/Materials/blackWalnut.png', 15.00),
('Hornbeam', '../Images/CustomizationOptions/Materials/hornbeam.png', 12.00),
('Lignum Vitae', '../Images/CustomizationOptions/Materials/lignumVitae.png', 25.00);

CREATE TABLE GripStyles (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40),
    Image VARCHAR(255) NOT NULL,
    PriceModifier(10,2) NOT NULL
);

INSERT INTO GripStyles (Name) VALUES
('Straight', '../Images/CustomizationOptions/GripStyles/straight.png', 0.00),
('Waisted', '../Images/CustomizationOptions/GripStyles/waisted.png', 6.00),
('Curved', '../Images/CustomizationOptions/GripStyles/curved.png', 8.00),
('Flared', '../Images/CustomizationOptions/GripStyles/flared.png', 10.00),
('Faceted', '../Images/CustomizationOptions/GripStyles/faceted.png', 22.00),
('Cord-wrapped', '../Images/CustomizationOptions/GripStyles/cordWrapped.png', 12.00),
('Leather', '../Images/CustomizationOptions/GripStyles/leather.png', 15.00),
('Wire', '../Images/CustomizationOptions/GripStyles/wire.png', 18.00),
('Wood', '../Images/CustomizationOptions/GripStyles/wood.png', 0.00),
('Bone', '../Images/CustomizationOptions/GripStyles/bone.png', 14.00),
('Segmented', '../Images/CustomizationOptions/GripStyles/segmented.png', 20.00),
('Integral', '../Images/CustomizationOptions/GripStyles/integral.png', 0.00),
('Capped', '../Images/CustomizationOptions/GripStyles/capped.png', 10.00),
('Ornate', '../Images/CustomizationOptions/GripStyles/ornate.png', 30.00);

CREATE TABLE PommelTypes (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL,
    Image VARCHAR(255) NOT NULL,
    PriceModifier(10,2) NOT NULL
);

INSERT INTO PommelTypes (Name, Image, PriceModifier) VALUES
('Sphere', '../Images/CustomizationOptions/PommelTypes/sphere.png', 6.00),
('Disc', '../Images/CustomizationOptions/PommelTypes/disc.png', 5.00),
('Wheel', '../Images/CustomizationOptions/PommelTypes/wheel.png', 8.00),
('Spike', '../Images/CustomizationOptions/PommelTypes/spike.png', 12.00),
('Faceted', '../Images/CustomizationOptions/PommelTypes/faceted.png', 18.00),
('Ring', '../Images/CustomizationOptions/PommelTypes/ring.png', 14.00),
('Hook', '../Images/CustomizationOptions/PommelTypes/hook.png', 15.00),
('Knob', '../Images/CustomizationOptions/PommelTypes/knob.png', 8.00),
('Gem', '../Images/CustomizationOptions/PommelTypes/jeweled.png', 15.00),
('Cage', '../Images/CustomizationOptions/PommelTypes/cage.png', 22.00),
('Counterweight', '../Images/CustomizationOptions/PommelTypes/counterweight.png', 10.00),
('Flat', '../Images/CustomizationOptions/PommelTypes/flat.png', 0.00);

CREATE TABLE PommelGems (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL
    Image VARCHAR(255) NOT NULL,
    PriceModifier(10,2) NOT NULL
);

INSERT INTO PommelGems (Name) VALUES
('Garnet', '../Images/CustomizationOptions/PommelGems/garnet.png', 35.00),
('Sapphire', '../Images/CustomizationOptions/PommelGems/sapphire.png', 70.00),
('Ruby', '../Images/CustomizationOptions/PommelGems/ruby.png', 75.00),
('Jade', '../Images/CustomizationOptions/PommelGems/jade.png', 20.00),
('Rose Quartz', '../Images/CustomizationOptions/PommelGems/roseQuartz.png', 10.00),
('Topaz', '../Images/CustomizationOptions/PommelGems/topaz.png', 45.00),
('Pearl', '../Images/CustomizationOptions/PommelGems/pearl.png', 30.00),
('Onyx', '../Images/CustomizationOptions/PommelGems/onyx.png', 25.00);

CREATE TABLE SheathMaterials (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL
    Image VARCHAR(255) NOT NULL,
    PriceModifier(10,2) NOT NULL
);

INSERT INTO SheathMaterials (Name) VALUES
('Leather', '../Images/CustomizationOptions/SheathMaterials/leather.png', 0.00),
('Wooden', '../Images/CustomizationOptions/SheathMaterials/wooden.png', 10.00),
('Metal', '../Images/CustomizationOptions/SheathMaterials/metal.png', 30.00),
('Laquered', '../Images/CustomizationOptions/SheathMaterials/lacquered.png', 18.00);

CREATE TABLE SheathColors (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL
    Image VARCHAR(255) NOT NULL,
    PriceModifier(10,2) NOT NULL
);

INSERT INTO SheathColors (Name) VALUES
('Black', '../Images/CustomizationOptions/SheathColors/black.png', 2.00),
('Dark Brown', '../Images/CustomizationOptions/SheathColors/darkBrown.png', 0.00),
('Chestnut', '../Images/CustomizationOptions/SheathColors/chestnut.png', 2.00),
('Mahogany', '../Images/CustomizationOptions/SheathColors/mahogany.png', 5.00),
('Deep Indigo', '../Images/CustomizationOptions/SheathColors/deepIndigo.png', 6.00),
('Crimson', '../Images/CustomizationOptions/SheathColors/crimson.png', 6.00),
('Dark Green', '../Images/CustomizationOptions/SheathColors/darkGreen.png', 4.00),
('Forest Green', '../Images/CustomizationOptions/SheathColors/forestGreen.png', 4.00),
('Navy', '../Images/CustomizationOptions/SheathColors/navy.png', 4.00),
('Steel Gray', '../Images/CustomizationOptions/SheathColors/steelGray.png', 4.00),
('Charcoal', '../Images/CustomizationOptions/SheathColors/charcoal.png', 2.00),
('Natural', '../Images/CustomizationOptions/SheathColors/natural.png', 0.00),
('Bone White', '../Images/CustomizationOptions/SheathColors/boneWhite.png', 7.00),
('Midnight Blue', '../Images/CustomizationOptions/SheathColors/midnightBlue.png', 6.00),
('Oxblood', '../Images/CustomizationOptions/SheathColors/oxblood.png', 7.00);

CREATE TABLE SheathTypes (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL
    Image VARCHAR(255) NOT NULL,
    PriceModifier(10,2) NOT NULL
);

INSERT INTO SheathTypes (Name) VALUES
('Minimal', '../Images/CustomizationOptions/SheathTypes/minimal.png', 0.00),
('Ornate', '../Images/CustomizationOptions/SheathTypes/ornate.png', 35.00),
('Jeweled', '../Images/CustomizationOptions/SheathTypes/jeweled.png', 60.00),
('Wrapped', '../Images/CustomizationOptions/SheathTypes/wrapped.png', 15.00);

-- ========================================
-- Swords Table
-- ========================================

CREATE TABLE Swords (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL,
    Image VARCHAR(255) NOT NULL,
    Subcategory_ID INT UNSIGNED NOT NULL,
    BladeMaterial_ID INT UNSIGNED NOT NULL,
    BladeShape_ID INT UNSIGNED NOT NULL,
    BladeEdge_ID INT UNSIGNED NOT NULL,
    HiltMaterial_ID INT UNSIGNED NOT NULL,
    Grip_ID INT UNSIGNED DEFAULT NULL,
    Pommel_ID INT UNSIGNED NOT NULL,
    PommelMaterial_ID INT UNSIGNED NOT NULL,
    PommelAccent_ID INT UNSIGNED DEFAULT NULL,
    PommelGem_ID INT UNSIGNED DEFAULT NULL,
    SheathMaterial_ID INT UNSIGNED NOT NULL,
    SheathColor_ID INT UNSIGNED NOT NULL,
    SheathType_ID INT UNSIGNED NOT NULL,
    Engravings VARCHAR(40) DEFAULT NULL,
    Inscriptions VARCHAR(40) DEFAULT NULL,
    BladeLength_cm DECIMAL(10,2) NOT NULL,
    Weight_kg DECIMAL(10,2) NOT NULL,
    Price DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (Subcategory_ID) REFERENCES Subcategories(ID),
    FOREIGN KEY (BladeMaterial_ID) REFERENCES MetalMaterials(ID),
    FOREIGN KEY (BladeShape_ID) REFERENCES BladeShapes(ID),
    FOREIGN KEY (BladeEdge_ID) REFERENCES BladeEdges(ID),
    FOREIGN KEY (HiltMaterial_ID) REFERENCES WoodMaterials(ID),
    FOREIGN KEY (Grip_ID) REFERENCES GripStyles(ID),
    FOREIGN KEY (Pommel_ID) REFERENCES PommelTypes(ID),
    FOREIGN KEY (PommelMaterial_ID) REFERENCES MetalMaterials(ID),
    FOREIGN KEY (PommelAccent_ID) REFERENCES PommelAccents(ID),
    FOREIGN KEY (PommelGem_ID) REFERENCES PommelGems(ID),
    FOREIGN KEY (SheathMaterial_ID) REFERENCES SheathMaterials(ID),
    FOREIGN KEY (SheathColor_ID) REFERENCES SheathColors(ID),
    FOREIGN KEY (SheathType_ID) REFERENCES SheathTypes(ID)
);

-- ========================================
-- Premade Swords Insert
-- ========================================

INSERT INTO Swords 
(Name, Image, Subcategory_ID, BladeMaterial_ID, BladeShape_ID, BladeEdge_ID, HiltMaterial_ID, Grip_ID, Pommel_ID, PommelMaterial_ID, PommelAccent_ID, PommelGem_ID, SheathMaterial_ID, SheathColor_ID, SheathType_ID, Engravings, Inscriptions, BladeLength_cm, Weight_kg, Price)
VALUES
-- Arming Swords
('The Duskward Defender', '../Images/ArmingSwords/duskwardDefender.png', 1, 8, 1, 1, 9, 9, 2, 8, 3, NULL, 1, 1, 1, NULL, NULL, 85.00, 1.30, 1200.00),
('The Ashen Sigil', '../Images/ArmingSwords/ashenSigil.png', 1, 1, 1, 1, 10, 9, 1, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 87.00, 1.35, 1100.00),
('The Stalwart Companion', '../Images/ArmingSwords/stalwartCompanion.png', 1, 3, 4, 1, 4, 9, 5, 3, NULL, NULL, 1, 1, 1, NULL, NULL, 88.00, 1.40, 1250.00),
('Sentinel of Dunmere', '../Images/ArmingSwords/sentinelDunmere.png', 1, 7, 2, 1, 9, 9, 9, 7, NULL, 1, 1, 1, 1, NULL, NULL, 84.00, 1.25, 1300.00),
('Ironveil Guard’s Blade', '../Images/ArmingSwords/ironveilGuardBlade.png', 1, 4, 5, 1, 4, 9, 1, 4, NULL, NULL, 1, 1, 1, NULL, NULL, 86.00, 1.28, 1150.00),
('Frostgate Officer’s Sword', '../Images/ArmingSwords/frostgateOfficerSword.png', 1, 1, 6, 1, 5, 7, 4, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 85.50, 1.30, 1180.00),
('Redwyn’s Edge', '../Images/ArmingSwords/redwynEdge.png', 1, 8, 2, 1, 10, 9, 4, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 86.00, 1.32, 1220.00),
('Hollowkeep Standard Issue', '../Images/ArmingSwords/hollowkeepStandardIssue.png', 1, 6, 1, 1, 7, 9, 2, 3, NULL, NULL, 1, 1, 1, NULL, NULL, 87.00, 1.35, 1270.00),
('The Thornhill Blade', '../Images/ArmingSwords/thornhillBlade.png', 1, 2, 3, 1, 11, 11, 6, 2, NULL, NULL, 1, 1, 1, NULL, NULL, 88.00, 1.38, 1190.00),
('The Ironveil Pattern II', '../Images/ArmingSwords/ironveilPatternII.png', 1, 3, 5, 1, 8, 9, 1, 3, NULL, NULL, 1, 1, 1, NULL, NULL, 87.00, 1.36, 1210.00),

-- Broadswords
('Blackmoor Bastard Sword', '../Images/Broadswords/blackmoorBastardSword.png', 2, 8, 7, 1, 4, 7, 1, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 95.00, 1.50, 1150.00),
('The Northfell Cutter', '../Images/Broadswords/northfellCutter.png', 2, 1, 7, 1, 7, 6, 2, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 96.00, 1.55, 1120.00),
('The Stormholt Bastion', '../Images/Broadswords/stormholtBastion.png', 2, 2, 7, 1, 9, 9, 8, 2, NULL, NULL, 1, 1, 1, NULL, NULL, 97.00, 1.60, 980.00),
('The Duskfield Guard’s Sword', '../Images/Broadswords/duskfieldGuardSword.png', 2, 7, 7, 1, 11, 2, 5, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 94.00, 1.48, 820.00),
('Silverbarrow Line Breaker', '../Images/Broadswords/silverbarrowLineBreaker.png', 2, 3, 7, 1, 2, 11, 6, 3, NULL, NULL, 1, 1, 1, NULL, NULL, 95.50, 1.52, 1250.00),
('Emberlake Warblade', '../Images/Broadswords/emberlakeWarblade.png', 2, 6, 7, 1, 1, 4, 2, 6, NULL, NULL, 1, 1, 1, NULL, NULL, 96.00, 1.55, 920.00),
('The Wyrdcliff Vanguard', '../Images/Broadswords/wyrdcliffVanguard.png', 2, 5, 7, 1, 5, 14, 9, 6, NULL, 3, 1, 1, 1, NULL, NULL, 97.50, 1.60, 970.00),
('Ironvale Heavy Cutter', '../Images/Broadswords/ironvaleHeavyCutter.png', 2, 4, 7, 1, 5, 8, 10, 3, NULL, NULL, 1, 1, 1, NULL, NULL, 98.00, 1.65, 680.00),
('Hollowspire Broad Edge', '../Images/Broadswords/hollowspireBroadEdge.png', 2, 8, 7, 1, 10, 12, 2, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 96.50, 1.58, 1040.00),
('The Stonewatch Standard', '../Images/Broadswords/stonewatchStandard.png', 2, 1, 7, 1, 8, 13, 4, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 95.50, 1.50, 780.00),

-- Falchions
('Emberfell Reaver', '../Images/Falchions/emberfellReaver.png', 4, 1, 7, 1, 2, 9, 2, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 85.00, 1.30, 870.00),
('Ironwood Field Falchion', '../Images/Falchions/ironwoodFieldFalchion.png', 4, 2, 7, 1, 11, 9, 8, 2, NULL, NULL, 1, 1, 1, NULL, NULL, 87.00, 1.35, 780.00),
('Ironveil Tradesman’s Edge', '../Images/Falchions/ironveilTradesmanEdge.png', 4, 7, 7, 1, 5, 2, 5, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 86.00, 1.30, 790.00),
('Wyrmvale Raider’s Blade', '../Images/Falchions/wyrmvaleRaiderBlade.png', 4, 3, 7, 1, 4, 6, 6, 3, NULL, NULL, 1, 1, 1, NULL, NULL, 88.00, 1.40, 890.00),
('The Redfen Sawblade', '../Images/Falchions/redfenSawblade.png', 4, 6, 7, 1, 7, 4, 7, 6, NULL, NULL, 1, 1, 1, NULL, NULL, 87.00, 1.45, 880.00),
('The Duskmoor Falchion', '../Images/Falchions/duskmoorFalchion.png', 4, 5, 7, 1, 5, 13, 10, 5, NULL, 2, 1, 1, 1, NULL, NULL, 90.00, 1.50, 1020.00),
('The Blackhollow Cutter', '../Images/Falchions/blackhollowCutter.png', 4, 4, 7, 1, 1, 11, 10, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 88.00, 1.40, 950.00),
('Greyhaven War Falchion', '../Images/Falchions/greyhavenWarFalchion.png', 4, 1, 7, 1, 8, 9, 4, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 86.00, 1.35, 1060.00),
('Hollowgate Hunter’s Sword', '../Images/Falchions/hollowgateHunterSword.png', 4, 2, 7, 1, 11, 9, 1, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 85.00, 1.30, 840.00),
('Stormrest Frontliner', '../Images/Falchions/stormrestFrontliner.png', 4, 8, 7, 1, 10, 2, 2, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 87.00, 1.40, 910.00),

-- Longswords
('Crowhaven’s Longsword', '../Images/Longswords/crowhavenLongsword.png', 3, 1, 1, 1, 4, 9, 1, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 100.00, 1.60, 1180.00),
('The Ebonreach Guard’s Edge', '../Images/Longswords/ebonreachGuardEdge.png', 3, 2, 1, 1, 1, 9, 2, 2, NULL, NULL, 1, 1, 1, NULL, NULL, 101.00, 1.65, 1260.00),
('The Frostmere Vigil', '../Images/Longswords/frostmereVigil.png', 3, 3, 4, 1, 11, 9, 5, 3, NULL, NULL, 1, 1, 1, NULL, NULL, 102.00, 1.70, 1320.00),
('Redwyne Officer’s Saber', '../Images/Longswords/redwyneOfficerSaber.png', 3, 4, 2, 1, 5, 2, 2, 4, NULL, NULL, 1, 1, 1, NULL, NULL, 103.00, 1.55, 1090.00),
('The Ironholt Line Sword', '../Images/Longswords/ironholtLineSword.png', 3, 6, 3, 1, 11, 4, 7, 6, NULL, NULL, 1, 1, 1, NULL, NULL, 104.00, 1.58, 1050.00),
('The Dreadmarch Pattern IV', '../Images/Longswords/dreadmarchPatternIV.png', 3, 7, 4, 1, 2, 7, 4, 8, NULL, NULL, 1, 1, 1, NULL, NULL, 105.00, 1.62, 11480.00),
('Ashford Battle Longsword', '../Images/Longswords/ashfordBattleLongsword.png', 3, 5, 7, 1, 7, 9, 6, 5, NULL, NULL, 1, 1, 1, NULL, NULL, 106.00, 1.65, 980.00),
('Thornwall Marshal’s Sword', '../Images/Longswords/thornwallMarshalSword.png', 3, 1, 3, 1, 10, 12, 8, 1, NULL, NULL, 1, 1, 1, NULL, NULL, 107.00, 1.68, 1160.00),
('Stonevale Great Longsword', '../Images/Longswords/stonevaleGreatLongsword.png', 3, 3, 5, 1, 5, 14, 10, 3, NULL, NULL, 1, 1, 1, NULL, NULL, 108.00, 1.72, 1340.00),
('The Nightwell Blade', '../Images/Longswords/nightwellBlade.png', 3, 8, 7, 1, 8, 11, 9, 8, NULL, 8, 1, 1, 1, NULL, NULL, 109.00, 1.70, 1240.00);

-- ========================================
-- Daggers Table
-- ========================================

CREATE TABLE Daggers (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL,
    Image VARCHAR(255) NOT NULL,
    Subcategory_ID INT UNSIGNED NOT NULL,
    BladeMaterial_ID INT UNSIGNED NOT NULL,
    BladeEdge_ID INT UNSIGNED NOT NULL,
    HiltMaterial_ID INT UNSIGNED NOT NULL,
    Grip_ID INT UNSIGNED DEFAULT NULL,
    Pommel_ID INT UNSIGNED NOT NULL,
    PommelMaterial_ID INT UNSIGNED NOT NULL,
    PommelGem_ID INT UNSIGNED DEFAULT NULL,
    SheathMaterial_ID INT UNSIGNED NOT NULL,
    SheathColor_ID INT UNSIGNED NOT NULL,
    SheathType_ID INT UNSIGNED NOT NULL,
    Engravings VARCHAR(40) DEFAULT NULL,
    Inscriptions VARCHAR(40) DEFAULT NULL,
    BladeLength_cm DECIMAL(10,2) NOT NULL,
    Weight_kg DECIMAL(10,2) NOT NULL,
    Price DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (Subcategory_ID) REFERENCES Subcategories(ID),
    FOREIGN KEY (BladeMaterial_ID) REFERENCES MetalMaterials(ID),
    FOREIGN KEY (BladeEdge_ID) REFERENCES BladeEdges(ID),
    FOREIGN KEY (HiltMaterial_ID) REFERENCES WoodMaterials(ID),
    FOREIGN KEY (Grip_ID) REFERENCES GripStyles(ID),
    FOREIGN KEY (Pommel_ID) REFERENCES PommelTypes(ID),
    FOREIGN KEY (PommelMaterial_ID) REFERENCES MetalMaterials(ID),
    FOREIGN KEY (PommelGem_ID) REFERENCES PommelGems(ID),
    FOREIGN KEY (SheathMaterial_ID) REFERENCES SheathMaterials(ID),
    FOREIGN KEY (SheathColor_ID) REFERENCES SheathColors(ID),
    FOREIGN KEY (SheathType_ID) REFERENCES SheathTypes(ID)
);

-- ========================================
-- Premade Daggers Insert
-- ========================================

INSERT INTO Daggers 
(`Name`, `Image`, `Subcategory_ID`, `BladeMaterial_ID`, `BladeEdge_ID`, `HiltMaterial_ID`, `Grip_ID`, `Pommel_ID`, `PommelMaterial_ID`, `PommelGem_ID`, `SheathMaterial_ID`, `SheathColor_ID`, `SheathType_ID`, `Engravings`, `Inscriptions`, `BladeLength_cm`, `Weight_kg`, `Price`) 
VALUES
('Ashveil Stiletto', '../Images/Daggers/ashveilStiletto.png', 6, 1, 2, 8, 1, 5, 1, NULL, 1, 1, 1, NULL, NULL, 30.00, 0.45, 280),
('The Whittlemark Knife', '../Images/Daggers/whittlemarkKnife.png', 10, 2, 2, 6, 1, 12, 2, NULL, 1, 1, 1, NULL, NULL, 28.00, 0.5, 340),
('Vexmere Rondel', '../Images/Daggers/vexmereRondel.png', 8, 3, 1, 4, 1, 7, 3, 2, 2, 6, 2, NULL, NULL, 32.00, 0.55, 390),
('Greythorn Poignard', '../Images/Daggers/greythornPoignard.png', 7, 8, 2, 10, 7, 1, 1, NULL, 1, 2, 1, NULL, NULL, 29.00, 0.48, 230),
('Dreadfen Sica', '../Images/Daggers/dreadfenSica.png', 9, 3, 1, 7, 1, 1, 1, NULL, 1, 2, 1, NULL, NULL, 33.00, 0.55, 310),
('The Embercoil Anelace', '../Images/Daggers/embercoilAnelace.png', 5, 1, 2, 1, 1, 5, 1, NULL, 1, 1, 1, NULL, NULL, 31.00, 0.5, 360),
('Bramblefang Dagger', '../Images/Daggers/bramblefangDagger.png', 10, 7, 2, 6, 2, 2, 1, NULL, 2, 2, 2, NULL, NULL, 30.00, 0.48, 360),
('Ironreach Dagger', '../Images/Daggers/ironreachDagger.png', 10, 3, 2, 11, 1, 12, 3, NULL, 1, 1, 1, NULL, NULL, 28.00, 0.45, 260),
('Greycourt Anelace', '../Images/Daggers/greycourtAnelace.png', 5, 1, 2, 7, 1, 2, 1, NULL, 1, 1, 1, NULL, NULL, 32.00, 0.5, 340),
('Duskcoil Sica', '../Images/Daggers/duskcoilSica.png', 9, 8, 1, 2, 1, 3, 1, NULL, 2, 2, 1, NULL, NULL, 34.00, 0.55, 310);


-- ========================================
-- BluntHandWeapons Table
-- ========================================

CREATE TABLE BluntHandWeapons (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL,
    Image VARCHAR(255) NOT NULL,
    Subcategory_ID INT UNSIGNED NOT NULL,
    HeadMaterial_ID INT UNSIGNED NOT NULL,
    SpikesNum INT UNSIGNED NOT NULL,
    ChainLength DECIMAL (10,2) DEFAULT NULL,
    ShaftMaterial_ID INT UNSIGNED NOT NULL,
    Grip_ID INT UNSIGNED DEFAULT NULL,
    Pommel_ID INT UNSIGNED NOT NULL,
    PommelMaterial_ID INT UNSIGNED NOT NULL,
    Engravings VARCHAR(40) DEFAULT NULL,
    Inscriptions VARCHAR(40) DEFAULT NULL,
    Length_cm DECIMAL(10,2) NOT NULL,
    Weight_kg DECIMAL(10,2) NOT NULL,
    Price DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (Subcategory_ID) REFERENCES Subcategories(ID),
    FOREIGN KEY (HeadMaterial_ID) REFERENCES MetalMaterials(ID),
    FOREIGN KEY (ShaftMaterial_ID) REFERENCES WoodMaterials(ID),
    FOREIGN KEY (Grip_ID) REFERENCES GripStyles(ID),
    FOREIGN KEY (Pommel_ID) REFERENCES PommelTypes(ID),
    FOREIGN KEY (PommelMaterial_ID) REFERENCES MetalMaterials(ID)
);

-- ========================================
-- Premade Swords Insert
-- ========================================

INSERT INTO BluntHandWeapons
(Name, Image, Subcategory_ID, HeadMaterial_ID, SpikesNum, ChainLength, ShaftMaterial_ID, Grip_ID, Pommel_ID, PommelMaterial_ID, Engravings, Inscriptions, Length_cm, Weight_kg, Price)
VALUES
('Skullcrusher Mace', '../Images/BluntHandWeapons/skullcrusherMace.png', 11, 1, 6, NULL, 2, 7, 1, 1, NULL, NULL, 60.96, 3.5, 650),
('Doomrend Mace', '../Images/BluntHandWeapons/doomrendMace.png', 11, 3, 6, NULL, 8, 1, 3, 3, NULL, NULL, 66.04, 3.8, 680),
('Bonebreaker Flail', '../Images/BluntHandWeapons/bonebreakerFlail.png', 13, 1, 12, 22.86, 9, 7, 12, 1, NULL, NULL, 71.12, 4.2, 900),
('Thunderstrike Morningstar', '../Images/BluntHandWeapons/thunderstrikeMorningstar.png', 12, 1, 10, NULL, 11, 11, 1, 1, NULL, NULL, 55.88, 3.2, 750),
('Ironfang Morningstar', '../Images/BluntHandWeapons/ironfangMorningstar.png', 12, 3, 8, NULL, 4, 2, 1, 3, NULL, NULL, 60.96, 3.5, 720),
('Grimspike War Hammer', '../Images/BluntHandWeapons/grimspikeWarHammer.png', 14, 1, 1, NULL, 2, 1, 12, 1, NULL, NULL, 71.12, 4.5, 1050),
('Ravager Horseman’s Pick', '../Images/BluntHandWeapons/ravagerHorsemanPick.png', 15, 1, 1, NULL, 9, 7, 8, 1, NULL, NULL, 55.88, 3.8, 950),
('Chain of Blackmere', '../Images/BluntHandWeapons/chainBlackmere.png', 13, 4, 8, 20.32, 6, 1, 8, 1, NULL, NULL, 66.04, 4.0, 420),
('Ironreach War Hammer', '../Images/BluntHandWeapons/ironreachWarHammer.png', 14, 1, 1, NULL, 2, 7, 2, 1, NULL, NULL, 55.88, 3.2, 460),
('Saddlebreak Pick', '../Images/BluntHandWeapons/saddlebreakPick.png', 15, 1, 1, NULL, 1, 7, 12, 1, NULL, NULL, 50.8, 2.9, 440),
('Crown of Stonefall', '../Images/BluntHandWeapons/crownStonefall.png', 11, 1, 6, NULL, 7, 7, 1, 1, NULL, NULL, 53.34, 3.1, 390),
('Dawnbreak Spire', '../Images/BluntHandWeapons/dawnbreakSpire.png', 12, 1, 8, NULL, 4, 7, 12, 1, NULL, NULL, 58.42, 3.3, 410),
('Blackridge Breaker', '../Images/BluntHandWeapons/blackridgeBreaker.png', 14, 1, 1, NULL, 7, 7, 12, 1, NULL, NULL, 48.26, 3.0, 450);

-- ========================================
-- Polearms Table
-- ========================================

CREATE TABLE Polearms (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL,
    Image VARCHAR(255) NOT NULL,
    Subcategory_ID INT UNSIGNED NOT NULL,
    HeadMaterial_ID INT UNSIGNED NOT NULL,
    ShaftLength DECIMAL (10,2) DEFAULT NULL,
    ShaftMaterial_ID INT UNSIGNED NOT NULL,
    Grip_ID INT UNSIGNED DEFAULT NULL,
    ButtCap_ID INT UNSIGNED NOT NULL,
    ButtCapMaterial_ID INT UNSIGNED NOT NULL,
    Engravings VARCHAR(40) DEFAULT NULL,
    Inscriptions VARCHAR(40) DEFAULT NULL,
    Length_cm DECIMAL(10,2) NOT NULL,
    Weight_kg DECIMAL(10,2) NOT NULL,
    Price DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (Subcategory_ID) REFERENCES Subcategories(ID),
    FOREIGN KEY (HeadMaterial_ID) REFERENCES MetalMaterials(ID),
    FOREIGN KEY (ShaftMaterial_ID) REFERENCES WoodMaterials(ID),
    FOREIGN KEY (Grip_ID) REFERENCES GripStyles(ID),
    FOREIGN KEY (ButtCap_ID) REFERENCES PommelTypes(ID),
    FOREIGN KEY (ButtCapMaterial_ID) REFERENCES MetalMaterials(ID)
);

-- ========================================
-- Premade Polearms Insert
-- ========================================

INSERT INTO Polearms 
(Name, Image, Subcategory_ID, HeadMaterial_ID, ShaftLength, ShaftMaterial_ID, Grip_ID, ButtCap_ID, ButtCapMaterial_ID, Engravings, Inscriptions, Length_cm, Weight_kg, Price) 
VALUES
('Ironspire Spear', '../Images/Polearms/ironspireSpear.png', 16, 1, 182.88, 2, 7, 4, 1, NULL, NULL, 182.88, 2.5, 520),
('Stormwing Spear', '../Images/Polearms/stormwingSpear.png', 16, 6, 213.36, 4, 7, 2, 2, NULL, NULL, 213.36, 3.0, 650),
('Dreadlance', '../Images/Polearms/dreadlance.png', 17, 1, 274.32, 2, 7, 12, 1, NULL, NULL, 274.32, 4.2, 1100),
('Gravecleaver Poleaxe', '../Images/Polearms/gravecleaverPoleaxe.png', 18, 1, 152.4, 1, 7, 4, 1, NULL, NULL, 167.64, 5.5, 1200),
('Shadowfang Halberd', '../Images/Polearms/shadowfangHalberd.png', 19, 1, 198.12, 2, 7, 4, 1, NULL, NULL, 198.12, 6.0, 1350),
('The Argent Halberd', '../Images/Polearms/argentHalberd.png', 19, 1, 213.36, 4, 7, 12, 2, NULL, NULL, 213.36, 6.5, 1000),
('Bonescourge Corseque', '../Images/Polearms/bonescourgeCorseque.png', 20, 1, 213.36, 10, 9, 4, 1, NULL, NULL, 213.36, 5.8, 1150),
('Thornward Corseque', '../Images/Polearms/thornwardCorseque.png', 20, 8, 213.36, 11, 9, 4, 1, NULL, NULL, 213.36, 5.5, 980),
('Iron Verdict Poleaxe', '../Images/Polearms/ironVerdictPoleaxe.png', 18, 1, 167.64, 1, 7, 4, 1, NULL, NULL, 167.64, 5.6, 1250),
('Ashfall Cavalry Lance', '../Images/Polearms/ashfallCavalryLance.png', 17, 7, 274.32, 2, 7, 12, 1, NULL, NULL, 274.32, 4.1, 1080);

-- ========================================
-- Ranged Table
-- ========================================

CREATE TABLE Ranged (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(40) NOT NULL,
    Image VARCHAR(255) NOT NULL,
    Subcategory_ID INT UNSIGNED NOT NULL,
    HeadMaterial_ID INT UNSIGNED NOT NULL,
    ShaftLength DECIMAL (10,2) DEFAULT NULL,
    ShaftMaterial_ID INT UNSIGNED NOT NULL,
    Grip_ID INT UNSIGNED DEFAULT NULL,
    Engravings VARCHAR(40) DEFAULT NULL,
    Inscriptions VARCHAR(40) DEFAULT NULL,
    Length_cm DECIMAL(10,2) NOT NULL,
    Weight_kg DECIMAL(10,2) NOT NULL,
    Price DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (Subcategory_ID) REFERENCES Subcategories(ID),
    FOREIGN KEY (HeadMaterial_ID) REFERENCES MetalMaterials(ID),
    FOREIGN KEY (ShaftMaterial_ID) REFERENCES WoodMaterials(ID),
    FOREIGN KEY (Grip_ID) REFERENCES GripStyles(ID)
);

-- ========================================
-- Premade Ranged Insert
-- ========================================

INSERT INTO Ranged
(Name, Image, Subcategory_ID, HeadMaterial_ID, ShaftLength, ShaftMaterial_ID, Grip_ID, Engravings, Inscriptions, Length_cm, Weight_kg, Price)
VALUES
('Ironbite Throwing Axe', '../Images/Ranged/ironbiteThrowingAxe.png', 21, 1, 40.64, 5, 7, NULL, NULL, 40.64, 1.20, 300),
('Stormstrike Throwing Axe', '../Images/Ranged/stormstrikeThrowingAxe.png', 21, 1, 35.56, 2, 7, NULL, NULL, 35.56, 1.10, 280),
('Dreadspike Throwing Axe', '../Images/Ranged/dreadspikeThrowingAxe.png', 21, 1, 45.72, 7, 7, 'Engraved tribal patterns', NULL, 45.72, 1.40, 310),
('Bloodfang Throwing Axe', '../Images/Ranged/bloodfangThrowingAxe.png', 21, 1, 50.80, 5, 7, NULL, NULL, 50.80, 1.60, 320),
('Frostbrand Javelin', '../Images/Ranged/frostbrandJavelin.png', 22, 1, 152.40, 2, 7, NULL, NULL, 152.40, 1.80, 350),
('Nightpiercer Javelin', '../Images/Ranged/nightpiercerJavelin.png', 22, 1, 182.88, 7, 7, NULL, NULL, 182.88, 2.00, 370),
('Doomlance Javelin', '../Images/Ranged/doomlanceJavelin.png', 22, 2, 198.12, 4, 7, 'Engraved floral motifs', NULL, 198.12, 2.10, 360);

