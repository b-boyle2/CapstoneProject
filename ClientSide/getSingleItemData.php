<?php
header('Content-Type: application/json');

// Connect to your database
$mysqli = new mysqli("localhost", "root", "", "ironveil_forge");
if ($mysqli->connect_errno) {
    echo json_encode(["error" => "Failed to connect to MySQL: " . $mysqli->connect_error]);
    exit;
}
// Get the query params from the URL
$productId = isset($_GET['productID']) ? intval($_GET['productID']) : 0;

// Basic validation
if (!$productId) {
    echo json_encode(["error" => "Invalid weapon selected."]);
    exit;
}

//get WeaponType from productsTable
$stmt = $mysqli->prepare("SELECT WeaponType FROM products WHERE ID = ?");
$stmt->bind_param("i", $productId);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    echo json_encode(["error" => "Weapon not found."]);
    exit;
}

$weaponType = $row['WeaponType'];


//validate table name to prevent SQL injection
$allowedWeaponTypes = ['swords', 'daggers', 'blunthandweapons', 'polearms', 'ranged'];
    if (!in_array($weaponType, $allowedWeaponTypes)) {
        die(json_encode(["error" => "Invalid Table"]));
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

$stmt = $mysqli->prepare($sql);
if (!$stmt) {
    echo json_encode(["error" => "Failed to prepare query."]);
    exit;
}

$stmt->bind_param("i", $productId);
$stmt->execute();
$result = $stmt->get_result();

$weapon = $result->fetch_assoc();
if (!$weapon) {
    echo json_encode(["error" => "Weapon not found."]);
    exit;
}

// Return weapon data as JSON
echo json_encode($weapon);

$stmt->close();
$mysqli->close();
?>
