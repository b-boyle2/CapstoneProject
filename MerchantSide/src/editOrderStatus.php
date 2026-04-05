<?php
header("Content-Type: application/json");

$conn = new mysqli("127.0.0.1", "root", "", "ironveil_forge");
if ($conn->connect_error) {
    echo json_encode(["error" => "DB connection failed"]);
    exit;
}

// POST check
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["error" => "Invalid request method"]);
    exit;
}

$id = isset($_POST['orderID']) ? (int)$_POST['orderID'] : null;
$status = $_POST['newStatus'] ?? "";

// SQL update
$sql = "
UPDATE orders 
SET 
    Status = ?
WHERE ID = ?";
$stmt = $conn->prepare($sql);
// Bind parameters
$stmt->bind_param(
    "si",
    $status,
    $id
);

// execute
if ($stmt->execute()) {
    echo json_encode(["success" => true]);
}
else {
    echo json_encode(["success" => false, "error" => $stmt->error]);
}

$stmt->close();
$conn->close();
exit;