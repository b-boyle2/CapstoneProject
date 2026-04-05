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

$country = $_POST['Country'];
$name = $_POST['Name'];
$phoneNumber = $_POST['PhoneNum'];
$streetAddress = $_POST['StreetAddress'];
$aptAddress = isset($_POST['AptAddress']) ? $_POST['AptAddress'] : null;
$city = $_POST['City'];
$state = isset($_POST['State']) ? $_POST['State'] : null;
$zipCode = $_POST['ZIP'];

session_start();
$_SESSION['shipping'] = [
    'name' => $name,
    'streetAddress' => $streetAddress,
    'aptAddress' => $aptAddress,
    'city' => $city,
    'state' => $state,
    'country' => $country,
    'zip' => $zipCode,
    'phoneNum' => $phoneNumber
];



$stmt = $conn->prepare("
    INSERT INTO shippingaddresses (UserID, Country, Name, PhoneNum, StreetAddress, AptAddress, City, State, ZIP)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "issssssss",
    $userID,
    $country,
    $name,
    $phoneNumber,
    $streetAddress,
    $aptAddress,
    $city,
    $state,
    $zipCode
);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["error" => "Failed to add payment method"]);
}

$conn->close();
?>