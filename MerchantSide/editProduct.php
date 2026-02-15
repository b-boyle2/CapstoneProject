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
$id = $_POST['weaponID'] ?? null;

//validate table name to prevent SQL injection
$allowedTables = ['swords', 'daggers', 'blunthandweapons', 'polearms', 'ranged'];
    if (!in_array($table, $allowedTables)) {
        die(json_encode(["error" => "Invalid Table"]));
    }
if ($table == "swords") {
    // Read form values
    $name = $_POST['Name'] ?? '';
    $subcategory = isset($_POST['Subcategory_ID']) ? (int)$_POST['Subcategory_ID'] : 1;
    $bladeMaterial = isset($_POST['BladeMaterial_ID']) ? (int)$_POST['BladeMaterial_ID'] : 1;
    $bladeShape = isset($_POST['BladeShape_ID']) ? (int)$_POST['BladeShape_ID'] : 1;
    $bladeEdge = isset($_POST['BladeEdge_ID']) ? (int)$_POST['BladeEdge_ID'] : 1;
    $hiltMaterial = isset($_POST['HiltMaterial_ID']) ? (int)$_POST['HiltMaterial_ID'] : 1;
    $grip = isset($_POST['Grip_ID']) ? (int)$_POST['Grip_ID'] : 1;
    $pommel = isset($_POST['Pommel_ID']) ? (int)$_POST['Pommel_ID'] : 1;
    $pommelMaterial = isset($_POST['PommelMaterial_ID']) ? (int)$_POST['PommelMaterial_ID'] : 1;

    // nullable foreign keys
    $pommelAccent = isset($_POST['PommelAccent_ID']) && $_POST['PommelAccent_ID'] !== '' ? (int)$_POST['PommelAccent_ID'] : null;
    $pommelGem = isset($_POST['PommelGem_ID']) && $_POST['PommelGem_ID'] !== '' ? (int)$_POST['PommelGem_ID'] : null;

    $sheathType = isset($_POST['SheathType_ID']) ? (int)$_POST['SheathType_ID'] : 1;
    $sheathMaterial = isset($_POST['SheathMaterial_ID']) ? (int)$_POST['SheathMaterial_ID'] : 1;
    $sheathColor = isset($_POST['SheathColor_ID']) ? (int)$_POST['SheathColor_ID'] : 1;
    $engravings = $_POST['Engravings'] ?? '';
    $inscriptions = $_POST['Inscriptions'] ?? '';
    $bladeLength = isset($_POST['BladeLength_cm']) ? (float)$_POST['BladeLength_cm'] : 1;
    $weight = isset($_POST['Weight_kg']) ? (float)$_POST['Weight_kg'] : 1;
    $price = isset($_POST['Price']) ? (float)$_POST['Price'] : 1;
    $image = $_POST['Image'] ?? '../Images/Placeholder.png';

    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $imageTmp = $_FILES['image']['tmp_name'];
        $imageName = basename($_FILES['image']['name']);
        $uploadDir = "../Images/Uploads/";
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
        Subcategory_ID = ?,
        BladeMaterial_ID = ?,
        BladeShape_ID = ?,
        BladeEdge_ID = ?,
        HiltMaterial_ID = ?,
        Grip_ID = ?,
        Pommel_ID = ?,
        PommelMaterial_ID = ?,
        PommelAccent_ID = ?,
        PommelGem_ID = ?,
        SheathMaterial_ID = ?,
        SheathColor_ID = ?,
        SheathType_ID = ?,
        Engravings = ?,
        Inscriptions = ?,
        BladeLength_cm = ?,
        Weight_kg = ?,
        Price = ?
    WHERE ID = ?";

    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param(
        "ssiiiiiiiiiiiiissdddi",
        $name,
        $image,
        $subcategory,
        $bladeMaterial,
        $bladeShape,
        $bladeEdge,
        $hiltMaterial,
        $grip,
        $pommel,
        $pommelMaterial,
        $pommelAccent,
        $pommelGem,
        $sheathMaterial,
        $sheathColor,
        $sheathType,
        $engravings,
        $inscriptions,
        $bladeLength,
        $weight,
        $price,
        $id
    );
}
if ($table == "daggers") {
    // Read form values
    $name = $_POST['Name'] ?? '';
    $subcategory = isset($_POST['Subcategory_ID']) ? (int)$_POST['Subcategory_ID'] : 1;
    $bladeMaterial = isset($_POST['BladeMaterial_ID']) ? (int)$_POST['BladeMaterial_ID'] : 1;
    $bladeEdge = isset($_POST['BladeEdge_ID']) ? (int)$_POST['BladeEdge_ID'] : 1;
    $hiltMaterial = isset($_POST['HiltMaterial_ID']) ? (int)$_POST['HiltMaterial_ID'] : 1;
    $grip = isset($_POST['Grip_ID']) ? (int)$_POST['Grip_ID'] : 1;
    $pommel = isset($_POST['Pommel_ID']) ? (int)$_POST['Pommel_ID'] : 1;
    $pommelMaterial = isset($_POST['PommelMaterial_ID']) ? (int)$_POST['PommelMaterial_ID'] : 1;

    // nullable foreign keys
    $pommelGem = isset($_POST['PommelGem_ID']) && $_POST['PommelGem_ID'] !== '' ? (int)$_POST['PommelGem_ID'] : null;

    $sheathType = isset($_POST['SheathType_ID']) ? (int)$_POST['SheathType_ID'] : 1;
    $sheathMaterial = isset($_POST['SheathMaterial_ID']) ? (int)$_POST['SheathMaterial_ID'] : 1;
    $sheathColor = isset($_POST['SheathColor_ID']) ? (int)$_POST['SheathColor_ID'] : 1;
    $engravings = $_POST['Engravings'] ?? '';
    $inscriptions = $_POST['Inscriptions'] ?? '';
    $bladeLength = isset($_POST['BladeLength_cm']) ? (float)$_POST['BladeLength_cm'] : 1;
    $weight = isset($_POST['Weight_kg']) ? (float)$_POST['Weight_kg'] : 1;
    $price = isset($_POST['Price']) ? (float)$_POST['Price'] : 1;
    $image = $_POST['Image'] ?? '../Images/Placeholder.png';

    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $imageTmp = $_FILES['image']['tmp_name'];
        $imageName = basename($_FILES['image']['name']);
        $uploadDir = "../Images/Uploads/";
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
        Subcategory_ID = ?,
        BladeMaterial_ID = ?,
        BladeEdge_ID = ?,
        HiltMaterial_ID = ?,
        Grip_ID = ?,
        Pommel_ID = ?,
        PommelMaterial_ID = ?,
        PommelGem_ID = ?,
        SheathMaterial_ID = ?,
        SheathColor_ID = ?,
        SheathType_ID = ?,
        Engravings = ?,
        Inscriptions = ?,
        BladeLength_cm = ?,
        Weight_kg = ?,
        Price = ?
    WHERE ID = ?";

    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param(
        "ssiiiiiiiiiiissdddi",
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
        $price,
        $id
    );
}
if ($table == "blunthandweapons") {
    // Read form values
    $name = $_POST['Name'] ?? '';
    $subcategory = isset($_POST['Subcategory_ID']) ? (int)$_POST['Subcategory_ID'] : 1;
    $headMaterial = isset($_POST['HeadMaterial_ID']) ? (int)$_POST['HeadMaterial_ID'] : 1;
    $spikesNum = isset($_POST['SpikesNum']) ? (int)$_POST['SpikesNum'] : 1;
    $chainLength = isset($_POST['ChainLength']) ? (int)$_POST['ChainLength'] : 1;
    $shaftMaterial = isset($_POST['ShaftMaterial_ID']) ? (int)$_POST['ShaftMaterial_ID'] : 1;
    $grip = isset($_POST['Grip_ID']) ? (int)$_POST['Grip_ID'] : 1;
    $pommel = isset($_POST['Pommel_ID']) ? (int)$_POST['Pommel_ID'] : 1;
    $pommelMaterial = isset($_POST['PommelMaterial_ID']) ? (int)$_POST['PommelMaterial_ID'] : 1;
    $engravings = $_POST['Engravings'] ?? '';
    $inscriptions = $_POST['Inscriptions'] ?? '';
    $length = isset($_POST['Length_cm']) ? (float)$_POST['Length_cm'] : 1;
    $weight = isset($_POST['Weight_kg']) ? (float)$_POST['Weight_kg'] : 1;
    $price = isset($_POST['Price']) ? (float)$_POST['Price'] : 1;
    $image = $_POST['Image'] ?? '../Images/Placeholder.png';

    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $imageTmp = $_FILES['image']['tmp_name'];
        $imageName = basename($_FILES['image']['name']);
        $uploadDir = "../Images/Uploads/";
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
        Subcategory_ID = ?,
        HeadMaterial_ID = ?,
        SpikesNum = ?,
        ChainLength = ?,
        ShaftMaterial_ID = ?,
        Grip_ID = ?,
        Pommel_ID = ?,
        PommelMaterial_ID = ?,
        Engravings = ?,
        Inscriptions = ?,
        Length_cm = ?,
        Weight_kg = ?,
        Price = ?
    WHERE ID = ?";

    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param(
        "ssiiidiiiissdddi",
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
        $price,
        $id
    );
}
if ($table == "polearms") {
    // Read form values
    $name = $_POST['Name'] ?? '';
    $subcategory = isset($_POST['Subcategory_ID']) ? (int)$_POST['Subcategory_ID'] : 1;
    $headMaterial = isset($_POST['HeadMaterial_ID']) ? (int)$_POST['HeadMaterial_ID'] : 1;
    $shaftLength = isset($_POST['ShaftLength']) ? (int)$_POST['ShaftLength'] : 1;
    $shaftMaterial = isset($_POST['ShaftMaterial_ID']) ? (int)$_POST['ShaftMaterial_ID'] : 1;
    $grip = isset($_POST['Grip_ID']) ? (int)$_POST['Grip_ID'] : 1;
    $buttCap = isset($_POST['ButtCap_ID']) ? (int)$_POST['ButtCap_ID'] : 1;
    $buttCapMaterial = isset($_POST['ButtCap_ID']) ? (int)$_POST['ButtCapMaterial_ID'] : 1;
    $engravings = $_POST['Engravings'] ?? '';
    $inscriptions = $_POST['Inscriptions'] ?? '';
    $length = isset($_POST['Length_cm']) ? (float)$_POST['Length_cm'] : 1;
    $weight = isset($_POST['Weight_kg']) ? (float)$_POST['Weight_kg'] : 1;
    $price = isset($_POST['Price']) ? (float)$_POST['Price'] : 1;
    $image = $_POST['Image'] ?? '../Images/Placeholder.png';

    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $imageTmp = $_FILES['image']['tmp_name'];
        $imageName = basename($_FILES['image']['name']);
        $uploadDir = "../Images/Uploads/";
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
        Subcategory_ID = ?,
        HeadMaterial_ID = ?,
        ShaftLength = ?,
        ShaftMaterial_ID = ?,
        Grip_ID = ?,
        ButtCap_ID = ?,
        ButtCapMaterial_ID = ?,
        Engravings = ?,
        Inscriptions = ?,
        Length_cm = ?,
        Weight_kg = ?,
        Price = ?
    WHERE ID = ?";

    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param(
        "ssiidiiiissdddi",
        $name,
        $image,
        $subcategory,
        $headMaterial,
        $shaftLength,
        $shaftMaterial,
        $grip,
        $buttCap,
        $buttCapMaterial,
        $engravings,
        $inscriptions,
        $length,
        $weight,
        $price,
        $id
    );
}
if ($table == "ranged") {
    // Read form values
    $name = $_POST['Name'] ?? '';
    $subcategory = isset($_POST['Subcategory_ID']) ? (int)$_POST['Subcategory_ID'] : 1;
    $headMaterial = isset($_POST['HeadMaterial_ID']) ? (int)$_POST['HeadMaterial_ID'] : 1;
    $shaftLength = isset($_POST['ShaftLength']) ? (int)$_POST['ShaftLength'] : 1;
    $shaftMaterial = isset($_POST['ShaftMaterial_ID']) ? (int)$_POST['ShaftMaterial_ID'] : 1;
    $grip = isset($_POST['Grip_ID']) ? (int)$_POST['Grip_ID'] : 1;
    $engravings = $_POST['Engravings'] ?? '';
    $inscriptions = $_POST['Inscriptions'] ?? '';
    $length = isset($_POST['Length_cm']) ? (float)$_POST['Length_cm'] : 1;
    $weight = isset($_POST['Weight_kg']) ? (float)$_POST['Weight_kg'] : 1;
    $price = isset($_POST['Price']) ? (float)$_POST['Price'] : 1;
    $image = $_POST['Image'] ?? '../Images/Placeholder.png';

    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $imageTmp = $_FILES['image']['tmp_name'];
        $imageName = basename($_FILES['image']['name']);
        $uploadDir = "../Images/Uploads/";
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
        Subcategory_ID = ?,
        HeadMaterial_ID = ?,
        ShaftLength = ?,
        ShaftMaterial_ID = ?,
        Grip_ID = ?,
        Engravings = ?,
        Inscriptions = ?,
        Length_cm = ?,
        Weight_kg = ?,
        Price = ?
    WHERE ID = ?";

    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param(
        "ssiidiissdddi",
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
        $price,
        $id
    );
}

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