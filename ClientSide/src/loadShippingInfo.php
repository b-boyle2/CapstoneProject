<?php
header("Content-Type: application/json");

//database connection
$conn = new mysqli("127.0.0.1", "root", "", "ironveil_forge");

if ($conn->connect_error) {
    die(json_encode(["error" => "DB connection failed"]));
}

$id = $_POST['userID'] ?? null;

$sql = "
    SELECT
        s.Country, 
        s.Name,
        s.PhoneNum,
        s.StreetAddress,
        s.AptAddress,
        s.City,
        s.State,
        s.ZIP
    FROM shippingaddresses s
    WHERE s.UserID = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

if (!$stmt->execute()) {
    error_log("Query failed: " . $stmt->error);
} else {
    error_log("Query executed successfully for userID $id in table shippingAddresses");
}

$result = $stmt->get_result();
$shippingAddress = $result->fetch_assoc();

if (!$shippingAddress) {
    error_log("DEBUG: Query returned no row for shippingAddresses, ID $id");
    echo json_encode(["error" => "No row found"]);
    exit;
}


echo json_encode($shippingAddress);

$conn->close();