<?php
header("Content-Type: application/json");

//database connection
$conn = new mysqli("127.0.0.1", "root", "", "ironveil_forge");

if ($conn->connect_error) {
    die(json_encode(["error" => "DB connection failed"]));
}

$weaponType = $_GET['table'];

//validate table name to prevent SQL injection

$allowedWeaponTypes = ['swords', 'daggers', 'blunthandweapons', 'polearms', 'ranged'];
    if (!in_array($weaponType, $allowedWeaponTypes)) {
        die(json_encode(["error" => "Invalid Table"]));
    }

//query only what's needed
$sql = "
    SELECT 
        p.ID, 
        p.Name, 
        p.Image,
        w.Subcategory_ID,
        p.Price 
    FROM products p
    JOIN $weaponType w ON p.ID = w.ProductID
    ";
$result = $conn->query($sql);

$weapons = [];

while ($row = $result->fetch_assoc()) {
    $weapons[] = $row;
}

error_log(print_r($row, true));

echo json_encode($weapons);
$conn->close();