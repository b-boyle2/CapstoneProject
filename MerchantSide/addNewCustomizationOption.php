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

// Read form values
$table = $_POST['optionTypeSelect'] ?? '';
$name = $_POST['name'] ?? '';
$priceModifier = isset($_POST['price']) ? (float)$_POST['price'] : 1;
$image = $_POST['image'] ?? '../Images/Placeholder.png';

if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $imageTmp = $_FILES['image']['tmp_name'];
    $imageName = basename($_FILES['image']['name']);
    $uploadDir = "../Images/CustomizationOptions/";
    $uploadPath = $uploadDir . $imageName;

    if (move_uploaded_file($imageTmp, $uploadPath)) {
        $image = $uploadPath;
    }
}

// verify table
$allowedTables = [
    'bladeedges', 'bladeshapes', 'gripstyles', 'metalmaterials',
    'pommelgems', 'pommeltypes', 'sheathcolors', 'sheathmaterials',
    'sheathtypes', 'woodmaterials'
];
if (!in_array($table, $allowedTables)) {
    echo json_encode(["error" => "Invalid Table"]);
    exit;
}

// SQL insert
$sql = "
INSERT INTO $table (
    Name, Image, PriceModifier
)
VALUES (?, ?, ?)
";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param(
    "ssd",
    $name,
    $image,
    $priceModifier
);

// execute
if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => $stmt->error]);
}

$stmt->close();
$conn->close();
exit;