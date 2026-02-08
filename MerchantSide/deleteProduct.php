<?php
header("Content-Type: application/json");

$conn = new mysqli("localhost", "root", "", "ironveil_forge");
if ($conn->connect_error) {
    echo json_encode(["error" => "DB connection failed"]);
    exit;
}

// POST check
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["error" => "Invalid request method"]);
    exit;
}

$table = $_POST['table'] ?? '';
$id = isset($_POST['weaponID']) ? (int)$_POST['weaponID'] : 0;

// Validate table name
$allowedTables = ['swords', 'daggers', 'blunthandweapons', 'polearms', 'ranged'];
if (!in_array($table, $allowedTables)) {
    echo json_encode(["error" => "Invalid Table"]);
    exit;
}

// Prevent accidental deletion
if ($id <= 0) {
    echo json_encode(["error" => "Invalid ID"]);
    exit;
}

// Prepare statement safely
$sql = "DELETE FROM $table WHERE ID = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo json_encode(["error" => "Prepare failed: " . $conn->error]);
    exit;
}

$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => $stmt->error]);
}

$stmt->close();
$conn->close();
exit;
?>
