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

$productId = isset($_GET['productID']) ? intval($_GET['productID']) : 0;

// Basic validation
if (!$productId) {
    echo json_encode(["error" => "Invalid weapon selected."]);
    exit;
}

$sql = "
    INSERT INTO cart (PriceAtAdd, ProductID, Quantity, AddedAt)
    SELECT Price, $productId, 1, Now()
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