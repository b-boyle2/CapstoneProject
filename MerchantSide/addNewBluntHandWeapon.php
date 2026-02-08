<?php
header("Content-Type: application/json");

$conn = new mysqli("localhost", "root", "", "ironveil_forge");
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
$table = $_POST['weaponTypeSelect'] ?? '';
$name = $_POST['name'] ?? '';
$subcategory = isset($_POST['subcategory']) ? (int)$_POST['subcategory'] : 1;
$headMaterial = isset($_POST['headMaterial']) ? (int)$_POST['headMaterial'] : 1;
$spikesNum = isset($_POST['spikesNum']) ? (int)$_POST['spikesNum'] : 1;
$chainLength = isset($_POST['chainLength']) && $_POST['chainLength'] !== '' ? (float)$_POST['chainLength'] : null;
$shaftMaterial = isset($_POST['shaftMaterial']) ? (int)$_POST['shaftMaterial'] : 1;
$grip = isset($_POST['grip']) ? (int)$_POST['grip'] : 1;
$pommel = isset($_POST['pommel']) ? (int)$_POST['pommel'] : 1;
$pommelMaterial = isset($_POST['pommelMaterial']) ? (int)$_POST['pommelMaterial'] : 1;
$engravings = $_POST['engravings'] ?? '';
$inscriptions = $_POST['inscriptions'] ?? '';
$length = isset($_POST['totalLength']) ? (float)$_POST['totalLength'] : 1;
$weight = isset($_POST['weight']) ? (float)$_POST['weight'] : 1;
$price = isset($_POST['price']) ? (float)$_POST['price'] : 1;
$image = $_POST['image'] ?? '../Images/Placeholder.png';

if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $imageTmp = $_FILES['image']['tmp_name'];
    $imageName = basename($_FILES['image']['name']);
    $uploadDir = "../Images/Uploads/";
    $uploadPath = $uploadDir . $imageName;

    if (move_uploaded_file($imageTmp, $uploadPath)) {
        $image = $uploadPath;
    }
}

// verify table
$allowedTables = ['swords', 'daggers', 'blunthandweapons', 'polearms', 'ranged'];
if (!in_array($table, $allowedTables)) {
    echo json_encode(["error" => "Invalid Table"]);
    exit;
}

// SQL insert
$sql = "
INSERT INTO $table (
    Name, Image, Subcategory_ID, HeadMaterial_ID, SpikesNum, ChainLength,
    ShaftMaterial_ID, Grip_ID, Pommel_ID, PommelMaterial_ID,
    Engravings, Inscriptions, Length_cm, Weight_kg, Price
)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param(
    "ssiiidiiiissddd",
    $name,
    $image,
    $subcategory,
    $headMaterial,
    $spikesNum,
    $chainLength,
    $shaftMaterial,
    $grip,
    $pommel,
    $pommelMaterial,
    $engravings,
    $inscriptions,
    $length,
    $weight,
    $price
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