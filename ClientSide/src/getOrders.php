<?php
header("Content-Type: application/json");

//database connection
$conn = new mysqli("127.0.0.1", "root", "", "ironveil_forge");

if ($conn->connect_error) {
    die(json_encode(["error" => "DB connection failed"]));
}

$userID = $_GET['userID'];

$query = "
    SELECT
    o.ID,
    o.ShippingName,
    o.TotalPrice,
    o.CreatedAt,
    o.ShippedAt,
    o.DeliveredAt,
    o.Status,

    oi.ProductID,
    
    p.Name,
    p.Image,
    p.Description
    
    FROM orders o
    LEFT JOIN OrderItems oi ON o.ID = oi.OrderID
    LEFT JOIN products p ON p.ID = oi.ProductID
    WHERE UserID = $userID
    ORDER BY o.CreatedAt DESC
";

$result = $conn->query($query);

$orders = [];

while($row = $result->fetch_assoc()) {
    $orderId = $row['ID'];

    //create order in array
    if(!isset($orders[$orderId])) {
        $orders[$orderId] = [
            'ID' => $orderId,
            'OrderDate' => $row['CreatedAt'],
            'TotalPrice' => $row['TotalPrice'],
            'ShippedDate' => $row['ShippedAt'],
            'DeliveredDate' => $row['DeliveredAt'],
            'ShippingName' => $row['ShippingName'],
            'Status' => $row['Status'],
            'items' => []
        ];
    }

    //add items to order in array
    if($row['ProductID']){
        $orders[$orderId]['items'][] = [
            'Name' => $row['Name'],
            'Image' => $row['Image'],
            'Description' => $row['Description'],
            'ProductID' => $row['ProductID']
        ];
    }
}


echo json_encode(array_values($orders));