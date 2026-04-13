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
        p.Method,
        p.CardName, 
        p.CardNum,
        p.Expiry,
        p.CVV,
        p.ZIP
    FROM paymentmethods p
    WHERE p.UserID = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

if (!$stmt->execute()) {
    error_log("Query failed: " . $stmt->error);
} else {
    error_log("Query executed successfully for userID $id in table paymentmethods");
}

$result = $stmt->get_result();
$paymentInfo = $result->fetch_assoc();

if (!$paymentInfo) {
    error_log("DEBUG: Query returned no row for paymentmethods, ID $id");
    echo json_encode(["error" => "No row found"]);
    exit;
}


echo json_encode($paymentInfo);

$conn->close();