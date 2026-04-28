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
$table = $_POST['weaponTypeSelect'] ?? '';
$name = $_POST['name'] ?? '';
$subcategory = isset($_POST['subcategory']) ? (int)$_POST['subcategory'] : 1;
$headMaterial = isset($_POST['headMaterial']) ? (int)$_POST['headMaterial'] : 1;
$shaftLength = isset($_POST['shaftLength']) ? (float)$_POST['shaftLength'] : 1;
$shaftMaterial = isset($_POST['shaftMaterial']) ? (int)$_POST['shaftMaterial'] : 1;
$grip = isset($_POST['grip']) ? (int)$_POST['grip'] : 1;
$engravings = $_POST['engravings'] ?? '';
$inscriptions = $_POST['inscriptions'] ?? '';
$length = isset($_POST['totalLength']) ? (float)$_POST['totalLength'] : 1;
$weight = isset($_POST['weight']) ? (float)$_POST['weight'] : 1;
$price = isset($_POST['price']) ? (float)$_POST['price'] : 1;
$image = '../Images/Placeholder.png';
$image2 = '';
$image3 = '';
$image4 = '';

function uploadImage($key) {
    if (!isset($_FILES[$key]) || $_FILES[$key]['error'] !== 0) {
        return '';
    }

    $tmp = $_FILES[$key]['tmp_name'];
    $name = basename($_FILES[$key]['name']);
    $dir = __DIR__ . '/../../Images/Uploads/';
    $path = $dir . $name;

    if (move_uploaded_file($tmp, $path)) {
        return "../Images/Uploads/" . $name;
    }

    return '';
}

$image = uploadImage('image');
$image2 = uploadImage('image2');
$image3 = uploadImage('image3');
$image4 = uploadImage('image4');

// verify table
$allowedTables = ['swords', 'daggers', 'blunthandweapons', 'polearms', 'ranged'];
if (!in_array($table, $allowedTables)) {
    echo json_encode(["error" => "Invalid Table"]);
    exit;
}

// SQL insert
$sql = "
INSERT INTO $table (
    Name, Image, Subcategory_ID, HeadMaterial_ID, shaftLength,
    ShaftMaterial_ID, Grip_ID,
    Engravings, Inscriptions, Length_cm, Weight_kg, Price
)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param(
    "ssiidiissddd",
    $name,
    $image,
    $subcategory,
    $headMaterial,
    $shaftLength,
    $shaftMaterial,
    $grip,
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