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
$bladeMaterial = isset($_POST['bladeMaterial']) ? (int)$_POST['bladeMaterial'] : 1;
$bladeEdge = isset($_POST['bladeEdge']) ? (int)$_POST['bladeEdge'] : 1;
$hiltMaterial = isset($_POST['hiltMaterial']) ? (int)$_POST['hiltMaterial'] : 1;
$grip = isset($_POST['grip']) ? (int)$_POST['grip'] : 1;
$pommel = isset($_POST['pommel']) ? (int)$_POST['pommel'] : 1;
$pommelMaterial = isset($_POST['pommelMaterial']) ? (int)$_POST['pommelMaterial'] : 1;

// nullable foreign keys
$pommelGem = isset($_POST['pommelGem']) && $_POST['pommelGem'] !== '' ? (int)$_POST['pommelGem'] : null;

$sheathType = isset($_POST['sheathType']) ? (int)$_POST['sheathType'] : 1;
$sheathMaterial = isset($_POST['sheathMaterial']) ? (int)$_POST['sheathMaterial'] : 1;
$sheathColor = isset($_POST['sheathColor']) ? (int)$_POST['sheathColor'] : 1;
$engravings = $_POST['engravings'] ?? '';
$inscriptions = $_POST['inscriptions'] ?? '';
$bladeLength = isset($_POST['bladeLength']) ? (float)$_POST['bladeLength'] : 1;
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
    Name, Image, Subcategory_ID, BladeMaterial_ID, BladeEdge_ID,
    HiltMaterial_ID, Grip_ID, Pommel_ID, PommelMaterial_ID, PommelGem_ID,
    SheathMaterial_ID, SheathColor_ID, SheathType_ID,
    Engravings, Inscriptions, BladeLength_cm, Weight_kg, Price
)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param(
    "ssiiiiiiiiiiissddd",
    $name,
    $image,
    $subcategory,
    $bladeMaterial,
    $bladeEdge,
    $hiltMaterial,
    $grip,
    $pommel,
    $pommelMaterial,
    $pommelGem,
    $sheathMaterial,
    $sheathColor,
    $sheathType,
    $engravings,
    $inscriptions,
    $bladeLength,
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