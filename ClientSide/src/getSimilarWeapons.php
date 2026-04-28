<?php
header("Content-Type: application/json");

//database connection
$conn = new mysqli("127.0.0.1", "root", "", "ironveil_forge");

if ($conn->connect_error) {
    die(json_encode(["error" => "DB connection failed"]));
}

$table = isset($_GET['weaponType']) ? $_GET['weaponType'] : '';
$id = isset($_GET['productID']) ? intval($_GET['productID']) : 0;
$subcategory = isset($_GET['subcategory']) ? intval($_GET['subcategory']) : 0;

//validate table name to prevent SQL injection
$allowedTables = ['swords', 'daggers', 'blunthandweapons', 'polearms', 'ranged'];
    if (!in_array($table, $allowedTables)) {
        die(json_encode(["error" => "Invalid Table"]));
    }

//query only what's needed
$sql = 
    "SELECT 
        p.ID, 
        p.Name, 
        p.Image, 
        w.Subcategory_ID, 
        p.Price
        FROM products p
        JOIN $table w ON w.ProductID = p.ID
        WHERE Subcategory_ID = $subcategory AND ProductID != $id
        LIMIT 5
    ";
$result = $conn->query($sql);

$weapons = [];

while ($row = $result->fetch_assoc()) {
    $weapons[] = $row;
}

echo json_encode($weapons);
$conn->close();