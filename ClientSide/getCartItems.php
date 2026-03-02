<?php
header("Content-Type: application/json");

//database connection
$conn = new mysqli("127.0.0.1", "root", "", "ironveil_forge");

if ($conn->connect_error) {
    die(json_encode(["error" => "DB connection failed"]));
}

$userID = $_GET['userID'];

//query only what's needed
$stmt = $conn->prepare("
    SELECT
        c.ProductID,
        w.Name, 
        w.Image, 
        c.Quantity,
        c.PriceAtAdd,
        w.Description
    FROM cart c
    JOIN products w ON c.ProductID = w.ID
    WHERE c.UserID = ?
 ");
$stmt->bind_param("s", $userID);
$stmt->execute();

$result = $stmt->get_result();

$weapons = [];

while ($row = $result->fetch_assoc()) {
    $weapons[] = $row;
}

echo json_encode($weapons);
$conn->close();