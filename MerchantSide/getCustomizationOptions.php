<?php
header("Content-Type: application/json");

// database connection
$conn = new mysqli("127.0.0.1", "root", "", "ironveil_forge");
if ($conn->connect_error) {
    echo json_encode(["error" => "DB connection failed"]);
    exit;
}

// safely get table name
$table = $_GET['table'] ?? '';

// validate table name to prevent SQL injection
$allowedTables = [
    'bladeedges', 'bladeshapes', 'gripstyles', 'metalmaterials',
    'pommelgems', 'pommeltypes', 'sheathcolors', 'sheathmaterials',
    'sheathtypes', 'woodmaterials'
];

if (!in_array($table, $allowedTables)) {
    echo json_encode([]);
    exit; // return empty array if invalid
}

// query only what's needed
$sql = "
    SELECT 
        o.ID, 
        o.Name, 
        o.Image,
        o.PriceModifier
    FROM $table o
";

$result = $conn->query($sql);

// check for query error
if (!$result) {
    echo json_encode([]);
    $conn->close();
    exit;
}

// fetch rows into array
$options = [];
while ($row = $result->fetch_assoc()) {
    // cast numeric values to proper types
    $row['ID'] = (int)$row['ID'];
    $row['PriceModifier'] = isset($row['PriceModifier']) ? (float)$row['PriceModifier'] : 0;

    $options[] = $row;
}

// output JSON
echo json_encode($options);

$conn->close();
