<?php
header("Content-Type: application/json");

//database connection
$conn = new mysqli("127.0.0.1", "root", "", "ironveil_forge");

if ($conn->connect_error) {
    die(json_encode(["error" => "DB connection failed"]));
}

$table = $_GET['table'];

//validate table name to prevent SQL injection

$allowedTables = ['swords', 'daggers', 'blunthandweapons', 'polearms', 'ranged'];
    if (!in_array($table, $allowedTables)) {
        die(json_encode(["error" => "Invalid Table"]));
    }

//query only what's needed
$sql = "
    SELECT 
        w.ID, 
        w.Name, 
        w.Image, 
        s.ID AS Subcategory_ID,
        s.name AS Subcategory, 
        w.Price 
    FROM $table w
    JOIN Subcategories s ON w.Subcategory_ID = s.ID";
$result = $conn->query($sql);

$weapons = [];

while ($row = $result->fetch_assoc()) {
    $weapons[] = $row;
}

echo json_encode($weapons);
$conn->close();