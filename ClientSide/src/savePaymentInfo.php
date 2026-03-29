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

$userID = isset($_POST['userID']) ? intval($_POST['userID']) : 0;

$paymentMethod = $_POST['Method'];
$name = $_POST['CardName'];
$cardNumber = $_POST['CardNumber'];
$expiry = $_POST['Expiry'];
$cvv = $_POST['CVV'];
$zipCode = $_POST['ZIPCode'];

$stmt = $conn->prepare("
    INSERT INTO paymentmethods (UserID, Method, CardName, CardNum, Expiry, CVV, ZIP)
    VALUES (?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "issssss",
    $userID,
    $paymentMethod,
    $name,
    $cardNumber,
    $expiry,
    $cvv,
    $zipCode
);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["error" => "Failed to add payment method"]);
}

$conn->close();
?>