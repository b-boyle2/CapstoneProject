<?php
header("Content-Type: application/json");

// database connection
$conn = new mysqli("127.0.0.1", "root", "", "ironveil_forge");
if ($conn->connect_error) {
    echo json_encode(["error" => "DB connection failed"]);
    exit;
}


// query only what's needed
$ordersQuery = "
    SELECT COUNT(*) AS totalOrders,
    SUM(TotalPrice) AS totalRevenue,
    ROUND(AVG(TotalPrice), 2) AS avgOrderVal,
    SUM(CASE WHEN Status = 'pending' THEN 1 ELSE 0 END) AS pendingOrders,
    SUM(CASE WHEN Status = 'processing' THEN 1 ELSE 0 END) AS processingOrders,
    SUM(CASE WHEN Status = 'shipped' THEN 1 ELSE 0 END) AS shippedOrders,
    SUM(CASE WHEN Status = 'delivered' THEN 1 ELSE 0 END) AS deliveredOrders,
    SUM(CASE WHEN Status = 'canceled' THEN 1 ELSE 0 END) AS canceledOrders
    FROM orders
";

$result = $conn->query($ordersQuery);
$row = $result->fetch_assoc();

echo json_encode([
    'totalOrders' => $row['totalOrders'],
    'totalRevenue' => $row['totalRevenue'],
    'avgOrderVal' => $row['avgOrderVal'],
    'pendingCount' => $row['pendingOrders'],
    'processingCount' => $row['processingOrders'],
    'shippedCount' => $row['shippedOrders'],
    'deliveredCount' => $row['deliveredOrders'],
    'canceledCount' => $row['canceledOrders']
]);
$conn->close();