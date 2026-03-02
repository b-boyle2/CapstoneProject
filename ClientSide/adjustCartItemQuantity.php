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

$quantity = $_POST['quantity'] ?? '';
$productID = $_POST['productID'] ?? null;
$userID = $_POST['userID'] ?? '';

$stmt = $conn->prepare("
    UPDATE cart
        SET Quantity = ?
    WHERE ProductID = ? && UserID = ?
 ");
$stmt->bind_param(
    "iis", 
    $quantity,
    $productID,
    $userID
);

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode([
            "success" => false,
            "error" => "No rows updated"
        ]);
    }
}

$stmt->close();
$conn->close();
?>