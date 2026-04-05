<?php
header('Content-Type: application/json');

// Connect to your database
$mysqli = new mysqli("localhost", "root", "", "ironveil_forge");
if ($mysqli->connect_errno) {
    echo json_encode(["error" => "Failed to connect to MySQL: " . $mysqli->connect_error]);
    exit;
}

$orderID = isset($_GET['orderID']) ? (int)$_GET['orderID'] : 0;

$statusStmt = $mysqli->prepare("
    SELECT Status
    FROM orders
    WHERE ID = ?
");
$statusStmt->bind_param("i", $orderID);
$statusStmt->execute();
$statusResult = $statusStmt->get_result();
$statusRow = $statusResult->fetch_assoc();

$orderStatus = $statusRow['Status'];

$statusStmt->close();

$stmt = $mysqli->prepare("
    SELECT 
        oi.ProductID,
        oi.Quantity,
        oi.PriceAtPurchase,
        p.Name,
        p.WeaponType
    FROM orderitems oi
    JOIN products p ON oi.ProductID = p.ID
    LEFT JOIN orders o ON oi.OrderID = o.ID
    WHERE oi.OrderID = ?
");
$stmt->bind_param("i", $orderID);
$stmt->execute();
$result = $stmt->get_result();

$orderItems = [];

while ($row = $result->fetch_assoc()) {
    $productID = $row['ProductID'];
    $weaponType = $row['WeaponType'];

    // get details
    
    //validate table name to prevent SQL injection
    $allowedWeaponTypes = ['swords', 'daggers', 'blunthandweapons', 'polearms', 'ranged'];

    if (!in_array($weaponType, $allowedWeaponTypes)) {
        continue;
    }

    // Query the correct table dynamically (using prepared statements)
    if ($weaponType == "swords"){
        $sql = "
            SELECT
                p.ID,
                p.Name, 
                p.WeaponType,
                p.Image,
                p.Image2,
                p.Image3,
                p.Image4,
                s.ID AS Subcategory_ID,
                s.name AS Subcategory,
                bm.ID AS BladeMaterial_ID,
                bm.name AS BladeMaterial,
                bs.ID AS BladeShape_ID,
                bs.name AS BladeShape,
                be.ID AS BladeEdge_ID,
                be.name AS BladeEdge,
                wm.ID AS HiltMaterial_ID,
                wm.name AS HiltMaterial,
                g.ID AS Grip_ID,
                g.name AS Grip,
                po.ID AS Pommel_ID,
                po.name AS Pommel,
                pm.ID AS PommelMaterial_ID,
                pm.name AS PommelMaterial,
                pa.ID AS PommelAccent_ID,
                pa.name AS PommelAccent,
                pg.ID AS PommelGem_ID,
                pg.name AS PommelGem,
                sm.ID AS SheathMaterial_ID,
                sm.name AS SheathMaterial,
                sc.ID AS SheathColor_ID,
                sc.name AS SheathColor,
                st.ID AS SheathType_ID,
                st.name AS SheathType,
                w.Engravings,
                w.Inscriptions,
                w.BladeLength_cm,
                w.Weight_kg,
                p.Price,
                p.Description
            FROM products p
            JOIN $weaponType w ON w.ProductID = p.ID
            LEFT JOIN Subcategories s ON w.Subcategory_ID = s.ID
            LEFT JOIN MetalMaterials bm ON w.BladeMaterial_ID = bm.ID
            LEFT JOIN BladeShapes bs ON w.BladeShape_ID = bs.ID
            LEFT JOIN BladeEdges be ON w.BladeEdge_ID = be.ID
            LEFT JOIN WoodMaterials wm ON w.HiltMaterial_ID = wm.ID
            LEFT JOIN GripStyles g ON w.Grip_ID = g.ID
            LEFT JOIN MetalMaterials pm ON w.PommelMaterial_ID = pm.ID
            LEFT JOIN MetalMaterials pa ON w.PommelAccent_ID = pa.ID
            LEFT JOIN PommelTypes po ON w.Pommel_ID = po.ID
            LEFT JOIN PommelGems pg ON w.PommelGem_ID = pg.ID
            LEFT JOIN SheathMaterials sm ON w.SheathMaterial_ID = sm.ID
            LEFT JOIN SheathColors sc ON w.SheathColor_ID = sc.ID
            LEFT JOIN SheathTypes st ON w.SheathType_ID = st.ID
            WHERE p.ID = ?";
    }
    if($weaponType == "daggers"){
        $sql = "
            SELECT
                p.ID,
                p.Name, 
                p.WeaponType,
                p.Image,
                p.Image2,
                p.Image3,
                p.Image4, 
                s.ID AS Subcategory_ID,
                s.name AS Subcategory,
                bm.ID AS BladeMaterial_ID,
                bm.name AS BladeMaterial,
                be.ID AS BladeEdge_ID,
                be.name AS BladeEdge,
                wm.ID AS HiltMaterial_ID,
                wm.name AS HiltMaterial,
                g.ID AS Grip_ID,
                g.name AS Grip,
                po.ID AS Pommel_ID,
                po.name AS Pommel,
                pm.ID AS PommelMaterial_ID,
                pm.name AS PommelMaterial,
                pg.ID AS PommelGem_ID,
                pg.name AS PommelGem,
                sm.ID AS SheathMaterial_ID,
                sm.name AS SheathMaterial,
                sc.ID AS SheathColor_ID,
                sc.name AS SheathColor,
                st.ID AS SheathType_ID,
                st.name AS SheathType,
                w.Engravings,
                w.Inscriptions,
                w.BladeLength_cm,
                w.Weight_kg,
                p.Price,
                p.Description
            FROM products p
            JOIN $weaponType w ON w.ProductID = p.ID
            LEFT JOIN Subcategories s ON w.Subcategory_ID = s.ID
            LEFT JOIN MetalMaterials bm ON w.BladeMaterial_ID = bm.ID
            LEFT JOIN BladeEdges be ON w.BladeEdge_ID = be.ID
            LEFT JOIN WoodMaterials wm ON w.HiltMaterial_ID = wm.ID
            LEFT JOIN GripStyles g ON w.Grip_ID = g.ID
            LEFT JOIN MetalMaterials pm ON w.PommelMaterial_ID = pm.ID
            LEFT JOIN PommelTypes po ON w.Pommel_ID = po.ID
            LEFT JOIN PommelGems pg ON w.PommelGem_ID = pg.ID
            LEFT JOIN SheathMaterials sm ON w.SheathMaterial_ID = sm.ID
            LEFT JOIN SheathColors sc ON w.SheathColor_ID = sc.ID
            LEFT JOIN SheathTypes st ON w.SheathType_ID = st.ID
            WHERE p.ID = ?";
    }
    if($weaponType == "blunthandweapons") {
        $sql = "
            SELECT
                p.ID,
                p.Name, 
                p.WeaponType,
                p.Image,
                p.Image2,
                p.Image3,
                p.Image4,
                s.ID AS Subcategory_ID,
                s.name AS Subcategory,
                bm.ID AS HeadMaterial_ID,
                bm.name AS HeadMaterial,
                w.SpikesNum,
                w.ChainLength,
                wm.ID AS ShaftMaterial_ID,
                wm.name AS ShaftMaterial,
                g.ID AS Grip_ID,
                g.name AS Grip,
                po.ID AS Pommel_ID,
                po.name AS Pommel,
                pm.ID AS PommelMaterial_ID,
                pm.name AS PommelMaterial,
                w.Engravings,
                w.Inscriptions,
                w.Length_cm,
                w.Weight_kg,
                w.Price,
                w.Description
            FROM products p
            JOIN $weaponType w ON w.ProductID = p.ID
            LEFT JOIN Subcategories s ON w.Subcategory_ID = s.ID
            LEFT JOIN MetalMaterials bm ON w.HeadMaterial_ID = bm.ID
            LEFT JOIN WoodMaterials wm ON w.ShaftMaterial_ID = wm.ID
            LEFT JOIN GripStyles g ON w.Grip_ID = g.ID
            LEFT JOIN MetalMaterials pm ON w.PommelMaterial_ID = pm.ID
            LEFT JOIN PommelTypes po ON w.Pommel_ID = po.ID
            WHERE p.ID = ?";
    }
    if($weaponType == "polearms") {
        $sql = "
            SELECT
                p.ID,
                p.Name, 
                p.WeaponType,
                p.Image,
                p.Image2,
                p.Image3,
                p.Image4,
                s.ID AS Subcategory_ID,
                s.name AS Subcategory,
                bm.ID AS HeadMaterial_ID,
                bm.name AS HeadMaterial,
                w.ShaftLength,
                wm.ID AS ShaftMaterial_ID,
                wm.name AS ShaftMaterial,
                g.ID AS Grip_ID,
                g.name AS Grip,
                po.ID AS ButtCap_ID,
                po.name AS ButtCap,
                pm.ID AS ButtCapMaterial_ID,
                pm.name AS ButtCapMaterial,
                w.Engravings,
                w.Inscriptions,
                w.Length_cm,
                w.Weight_kg,
                p.Price,
                p.Description
            FROM products p
            JOIN $weaponType w ON w.ProductID = p.ID
            LEFT JOIN Subcategories s ON w.Subcategory_ID = s.ID
            LEFT JOIN MetalMaterials bm ON w.HeadMaterial_ID = bm.ID
            LEFT JOIN WoodMaterials wm ON w.ShaftMaterial_ID = wm.ID
            LEFT JOIN GripStyles g ON w.Grip_ID = g.ID
            LEFT JOIN MetalMaterials pm ON w.ButtCapMaterial_ID = pm.ID
            LEFT JOIN PommelTypes po ON w.ButtCap_ID = po.ID
            WHERE p.ID = ?";
    }
    if($weaponType == "ranged") {
        $sql = "
            SELECT
                p.ID,
                p.Name, 
                p.WeaponType,
                p.Image,
                p.Image2,
                p.Image3,
                p.Image4,
                s.ID AS Subcategory_ID,
                s.name AS Subcategory,
                bm.ID AS HeadMaterial_ID,
                bm.name AS HeadMaterial,
                w.ShaftLength,
                wm.ID AS ShaftMaterial_ID,
                wm.name AS ShaftMaterial,
                g.ID AS Grip_ID,
                g.name AS Grip,
                w.Engravings,
                w.Inscriptions,
                w.Length_cm,
                w.Weight_kg,
                p.Price,
                p.Description
            FROM products p
            JOIN $weaponType w ON w.ProductID = p.ID
            LEFT JOIN Subcategories s ON w.Subcategory_ID = s.ID
            LEFT JOIN MetalMaterials bm ON w.HeadMaterial_ID = bm.ID
            LEFT JOIN WoodMaterials wm ON w.ShaftMaterial_ID = wm.ID
            LEFT JOIN GripStyles g ON w.Grip_ID = g.ID
            WHERE p.ID = ?";
    }

    $detailStmt = $mysqli->prepare($sql);
    $detailStmt->bind_param("i", $productID);
    $detailStmt->execute();
    $detailResult = $detailStmt->get_result();
    $details = $detailResult->fetch_assoc();
    $detailStmt->close();

    $orderItems[] = [
        "summary" => [
            "ProductID" => $row['ProductID'],
            "Name" => $row['Name'],
            "Quantity" => $row['Quantity'],
            "Price" => $row['PriceAtPurchase']
        ],
        "details" => $details
    ];
}

$shippingStmt = $mysqli->prepare("
    SELECT 
        o.ShippingName,
        u.Username,
        o.ShippingStreetAddress,
        o.ShippingAptAddress,
        o.ShippingCity,
        o.ShippingState,
        o.ShippingCountry,
        o.ShippingZIP,
        o.ShippingPhoneNum
    FROM orders o
    JOIN Users u ON o.UserID = u.ID
    WHERE o.ID = ?
");

$shippingStmt->bind_param("i", $orderID);
$shippingStmt->execute();
$shippingResult = $shippingStmt->get_result();
$shippingInfo = $shippingResult->fetch_assoc();
$shippingStmt->close();

echo json_encode([
    "success" => true,
    "items" => $orderItems,
    "shipping" => $shippingInfo,
    "status" => $orderStatus
]);