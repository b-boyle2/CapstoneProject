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

$table = $_POST['table'] ?? '';
$id = $_POST['optionID'] ?? null;

//validate table name to prevent SQL injection
$allowedTables = [
    'bladeedges', 'bladeshapes', 'gripstyles', 'metalmaterials',
    'pommelgems', 'pommeltypes', 'sheathcolors', 'sheathmaterials',
    'sheathtypes', 'woodmaterials'
];
    if (!in_array($table, $allowedTables)) {
        die(json_encode(["error" => "Invalid Table"]));
    }



// Read form values
$name = $_POST['Name'] ?? '';
$priceModifier = isset($_POST['PriceModifier']) ? (float)$_POST['PriceModifier'] : 1;

//default to original image file first
$image = $_POST['existingImage'] ?? '../Images/Placeholder.png';

//if a new file was uploaded, overwrite $image
if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    // new image uploaded
    $imageTmp = $_FILES['image']['tmp_name'];
    $imageName = basename($_FILES['image']['name']);
    $uploadDir = "../Images/CustomizationOptions/";
    $uploadPath = $uploadDir . $imageName;
    if (move_uploaded_file($imageTmp, $uploadPath)) {
        $image = $uploadPath;
    }
}
// SQL update
$sql = "
UPDATE $table 
SET 
    Name = ?, 
    Image = ?,
    PriceModifier = ?
WHERE ID = ?";
$stmt = $conn->prepare($sql);
// Bind parameters
$stmt->bind_param(
    "ssdi",
    $name,
    $image,
    $priceModifier,
    $id
);

// execute
if ($stmt->execute()) {
    echo json_encode(["success" => true]);
}
else {
    echo json_encode(["success" => false, "error" => $stmt->error]);
}

$stmt->close();
$conn->close();
exit;