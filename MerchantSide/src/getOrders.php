<?php
header("Content-Type: application/json");

// database connection
$conn = new mysqli("127.0.0.1", "root", "", "ironveil_forge");
if ($conn->connect_error) {
    echo json_encode(["error" => "DB connection failed"]);
    exit;
}

$limitOrders = $_GET['limitOrders'];

// query only what's needed
if ($limitOrders == 'true'){
    $sql = 
        "SELECT 
            o.ID, 
            o.Status, 
            o.CreatedAt,
            u.Username,
            o.TotalPrice
        FROM orders o
        JOIN Users u ON o.UserID = u.ID
        WHERE (o.Status =  'pending') OR (o.Status = 'processing')
        ORDER BY CreatedAt DESC
        LIMIT 5
        ";
        
}

else {
    $sql = "
        SELECT 
            o.ID, 
            o.Status, 
            o.CreatedAt,
            u.Username,
            o.TotalPrice
        FROM orders o
        JOIN Users u ON o.UserID = u.ID
        ORDER BY CreatedAt DESC
        ";
}



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