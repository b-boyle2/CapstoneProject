<?php
header("Content-Type: application/json");

// database connection
$conn = new mysqli("127.0.0.1", "root", "", "ironveil_forge");
if ($conn->connect_error) {
    echo json_encode(["error" => "DB connection failed"]);
    exit;
}


// query only what's needed
$sql = "
    SELECT 
        o.ID, 
        o.Status, 
        o.CreatedAt,
        u.Username,
        o.TotalPrice
    FROM orders o
    JOIN Users u ON o.UserID = u.ID
    ";

$result = $conn->query($sql);

// check for query error
if (!$result) {
    echo json_encode([]);
    $conn->close();
    exit;
}

$orders = [];

while ($row = $result->fetch_assoc()) {
    $orders[] = $row;
}

echo json_encode($orders);
$conn->close();