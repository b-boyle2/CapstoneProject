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

$userId = isset($_GET['userID']) ? (int)($_GET['userID']) : 0;
$productId = isset($_GET['productID']) ? intval($_GET['productID']) : 0;


// Basic validation
if (!$userId) {
    echo json_encode([`error" => "Invalid user selected. User $userId`]);
    exit;
}

if (!$productId) {
    echo json_encode(["error" => "Invalid weapon selected."]);
    exit;
}

$result = $conn->query("SELECT ID FROM users WHERE ID = 1");

if ($result->num_rows === 0) {
    die("User 1 NOT FOUND in this DB connection");
} else {
    error_log("User exists in this DB");
}
error_log("Debug message: FINAL UserID = " . $userId);

$sql = "
    INSERT INTO cart (UserID, PriceAtAdd, ProductID, Quantity, AddedAt)
    SELECT $userId, Price, $productId, 1, Now()
    FROM products p
    WHERE ID = $productId
";

if ($conn->query($sql)) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["error" => "Failed to add to cart"]);
}

$conn->close();
?>