<?php
header("Content-Type: application/json");

// Connect to your database
$mysqli = new mysqli("localhost", "root", "", "ironveil_forge");
if ($mysqli->connect_errno) {
    echo json_encode(["error" => "Failed to connect to MySQL: " . $mysqli->connect_error]);
    exit;
}
$swordTable = "swords";
$daggerTable = "daggers";
$bluntWeaponTable = "blunthandweapons";
$polearmTable = "polearms";
$rangedTable = "ranged";


//query only what's needed
$swordStmt = $mysqli->prepare("
    SELECT 
        p.ID, 
        p.Name, 
        p.Image, 
        w.Subcategory_ID, 
        p.Price 
        FROM products p
        JOIN swords w ON w.ProductID = p.ID
        WHERE WeaponType = ?
        LIMIT 6
    ");
$swordStmt->bind_param("s", $swordTable);
$swordStmt->execute();
$swordResult = $swordStmt->get_result();
$swordData = [];
while ($row = $swordResult->fetch_assoc()) {
    $swordData[] = $row;
}
$swordStmt->close();

$daggerStmt = $mysqli->prepare("
    SELECT 
        p.ID, 
        p.Name, 
        p.Image, 
        w.Subcategory_ID, 
        p.Price 
        FROM products p
        JOIN daggers w ON w.ProductID = p.ID
        WHERE WeaponType = ?
        LIMIT 6
    ");
$daggerStmt->bind_param("s", $daggerTable);
$daggerStmt->execute();
$daggerResult = $daggerStmt->get_result();
$daggerData = [];
while ($row = $daggerResult->fetch_assoc()) {
    $daggerData[] = $row;
}$daggerStmt->close();

$bluntStmt = $mysqli->prepare("
    SELECT 
        p.ID, 
        p.Name, 
        p.Image, 
        w.Subcategory_ID, 
        p.Price 
        FROM products p
        JOIN blunthandweapons w ON w.ProductID = p.ID
        WHERE WeaponType = ?
        LIMIT 6
    ");
$bluntStmt->bind_param("s", $bluntWeaponTable);
$bluntStmt->execute();
$bluntResult = $bluntStmt->get_result();
$bluntData = [];
while ($row = $bluntResult->fetch_assoc()) {
    $bluntData[] = $row;
}$bluntStmt->close();

$polearmStmt = $mysqli->prepare("
    SELECT 
        p.ID, 
        p.Name, 
        p.Image, 
        w.Subcategory_ID, 
        p.Price 
        FROM products p
        JOIN polearms w ON w.ProductID = p.ID
        WHERE WeaponType = ?
        LIMIT 6
    ");
$polearmStmt->bind_param("s", $polearmTable);
$polearmStmt->execute();
$polearmResult = $polearmStmt->get_result();
$polearmData = [];
while ($row = $polearmResult->fetch_assoc()) {
    $polearmData[] = $row;
}$polearmStmt->close();

$rangedStmt = $mysqli->prepare("
    SELECT 
        p.ID, 
        p.Name, 
        p.Image, 
        w.Subcategory_ID, 
        p.Price 
        FROM products p
        JOIN ranged w ON w.ProductID = p.ID
        WHERE WeaponType = ?
        LIMIT 6
    ");
$rangedStmt->bind_param("s", $rangedTable);
$rangedStmt->execute();
$rangedResult = $rangedStmt->get_result();
$rangedData = [];
while ($row = $rangedResult->fetch_assoc()) {
    $rangedData[] = $row;
}$rangedStmt->close();


echo json_encode([
    "swords" => $swordData,
    "daggers" => $daggerData,
    "bluntWeapons" => $bluntData,
    "polearms" => $polearmData,
    "ranged" => $rangedData
]);