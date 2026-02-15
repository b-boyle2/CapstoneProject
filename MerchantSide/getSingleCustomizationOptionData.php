<?php
header("Content-Type: application/json");

//database connection
$conn = new mysqli("127.0.0.1", "root", "", "ironveil_forge");

if ($conn->connect_error) {
    die(json_encode(["error" => "DB connection failed"]));
}

$table = $_POST['table'] ?? '';
$id = $_POST['optionID'] ?? null;

//validate table name to prevent SQL injection
$allowedTables = [
    'bladeedges', 'bladeshapes', 'gripstyles', 'metalmaterials',
    'pommelgems', 'pommeltypes', 'sheathcolors', 'sheathmaterials',
    'sheathtypes', 'woodmaterials'
];

$sql = "
    SELECT
        o.Name, 
        o.Image,
        o.PriceModifier 
    FROM $table o
    WHERE o.ID = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

if (!$stmt->execute()) {
    error_log("Query failed: " . $stmt->error);
} else {
    error_log("Query executed successfully for ID $id in table $table");
}

$result = $stmt->get_result();
$option = $result->fetch_assoc();

error_log("DEBUG: Raw row from daggers query: " . json_encode($option));

if (!$option) {
    error_log("No rows returned for ID $id in table $table");
} else {
    error_log("option data: " . print_r($option, true));
}

if (!$option) {
    error_log("DEBUG: Query returned no row for table $table, ID $id");
    echo json_encode(["error" => "No row found"]);
    exit;
}


echo json_encode($option);
$conn->close();