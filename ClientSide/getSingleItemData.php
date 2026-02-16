<?php
header('Content-Type: application/json');

// Connect to your database
$mysqli = new mysqli("localhost", "root", "", "ironveil_forge");
if ($mysqli->connect_errno) {
    echo json_encode(["error" => "Failed to connect to MySQL: " . $mysqli->connect_error]);
    exit;
}
// Get the query params from the URL
$weaponType = isset($_GET['weaponType']) ? $_GET['weaponType'] : '';
$id = isset($_GET['weaponID']) ? intval($_GET['weaponID']) : 0;

// Basic validation
if (!$weaponType || !$id) {
    echo json_encode(["error" => "Invalid weapon selected."]);
    exit;
}

//validate table name to prevent SQL injection
$allowedTables = ['swords', 'daggers', 'blunthandweapons', 'polearms', 'ranged'];
    if (!in_array($weaponType, $allowedTables)) {
        die(json_encode(["error" => "Invalid Table"]));
    }

// Query the correct table dynamically (using prepared statements)
if ($weaponType == "swords"){
    $sql = "
        SELECT
            w.Name, 
            w.Image,
            w.Image2,
            w.Image3,
            w.Image4,
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
            p.ID AS Pommel_ID,
            p.name AS Pommel,
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
            w.Price,
            w.Description
        FROM $weaponType w
        LEFT JOIN Subcategories s ON w.Subcategory_ID = s.ID
        LEFT JOIN MetalMaterials bm ON w.BladeMaterial_ID = bm.ID
        LEFT JOIN BladeShapes bs ON w.BladeShape_ID = bs.ID
        LEFT JOIN BladeEdges be ON w.BladeEdge_ID = be.ID
        LEFT JOIN WoodMaterials wm ON w.HiltMaterial_ID = wm.ID
        LEFT JOIN GripStyles g ON w.Grip_ID = g.ID
        LEFT JOIN MetalMaterials pm ON w.PommelMaterial_ID = pm.ID
        LEFT JOIN MetalMaterials pa ON w.PommelAccent_ID = pa.ID
        LEFT JOIN PommelTypes p ON w.Pommel_ID = p.ID
        LEFT JOIN PommelGems pg ON w.PommelGem_ID = pg.ID
        LEFT JOIN SheathMaterials sm ON w.SheathMaterial_ID = sm.ID
        LEFT JOIN SheathColors sc ON w.SheathColor_ID = sc.ID
        LEFT JOIN SheathTypes st ON w.SheathType_ID = st.ID
        WHERE w.ID = ?";
}
if($weaponType == "daggers"){
    $sql = "
        SELECT
            w.Name, 
            w.Image, 
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
            p.ID AS Pommel_ID,
            p.name AS Pommel,
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
            w.Price,
            w.Description
        FROM $weaponType w
        LEFT JOIN Subcategories s ON w.Subcategory_ID = s.ID
        LEFT JOIN MetalMaterials bm ON w.BladeMaterial_ID = bm.ID
        LEFT JOIN BladeEdges be ON w.BladeEdge_ID = be.ID
        LEFT JOIN WoodMaterials wm ON w.HiltMaterial_ID = wm.ID
        LEFT JOIN GripStyles g ON w.Grip_ID = g.ID
        LEFT JOIN MetalMaterials pm ON w.PommelMaterial_ID = pm.ID
        LEFT JOIN PommelTypes p ON w.Pommel_ID = p.ID
        LEFT JOIN PommelGems pg ON w.PommelGem_ID = pg.ID
        LEFT JOIN SheathMaterials sm ON w.SheathMaterial_ID = sm.ID
        LEFT JOIN SheathColors sc ON w.SheathColor_ID = sc.ID
        LEFT JOIN SheathTypes st ON w.SheathType_ID = st.ID
        WHERE w.ID = ?";
}
if($weaponType == "blunthandweapons") {
    $sql = "
        SELECT
            w.Name, 
            w.Image, 
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
            p.ID AS Pommel_ID,
            p.name AS Pommel,
            pm.ID AS PommelMaterial_ID,
            pm.name AS PommelMaterial,
            w.Engravings,
            w.Inscriptions,
            w.Length_cm,
            w.Weight_kg,
            w.Price,
            w.Description
        FROM $weaponType w
        LEFT JOIN Subcategories s ON w.Subcategory_ID = s.ID
        LEFT JOIN MetalMaterials bm ON w.HeadMaterial_ID = bm.ID
        LEFT JOIN WoodMaterials wm ON w.ShaftMaterial_ID = wm.ID
        LEFT JOIN GripStyles g ON w.Grip_ID = g.ID
        LEFT JOIN MetalMaterials pm ON w.PommelMaterial_ID = pm.ID
        LEFT JOIN PommelTypes p ON w.Pommel_ID = p.ID
        WHERE w.ID = ?";
}
if($weaponType == "polearms") {
    $sql = "
        SELECT
            w.Name, 
            w.Image, 
            s.ID AS Subcategory_ID,
            s.name AS Subcategory,
            bm.ID AS HeadMaterial_ID,
            bm.name AS HeadMaterial,
            w.ShaftLength,
            wm.ID AS ShaftMaterial_ID,
            wm.name AS ShaftMaterial,
            g.ID AS Grip_ID,
            g.name AS Grip,
            p.ID AS ButtCap_ID,
            p.name AS ButtCap,
            pm.ID AS ButtCapMaterial_ID,
            pm.name AS ButtCapMaterial,
            w.Engravings,
            w.Inscriptions,
            w.Length_cm,
            w.Weight_kg,
            w.Price,
            w.Description
        FROM $weaponType w
        LEFT JOIN Subcategories s ON w.Subcategory_ID = s.ID
        LEFT JOIN MetalMaterials bm ON w.HeadMaterial_ID = bm.ID
        LEFT JOIN WoodMaterials wm ON w.ShaftMaterial_ID = wm.ID
        LEFT JOIN GripStyles g ON w.Grip_ID = g.ID
        LEFT JOIN MetalMaterials pm ON w.ButtCapMaterial_ID = pm.ID
        LEFT JOIN PommelTypes p ON w.ButtCap_ID = p.ID
        WHERE w.ID = ?";
}
if($weaponType == "ranged") {
    $sql = "
        SELECT
            w.Name, 
            w.Image, 
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
            w.Price,
            w.Description
        FROM $weaponType w
        LEFT JOIN Subcategories s ON w.Subcategory_ID = s.ID
        LEFT JOIN MetalMaterials bm ON w.HeadMaterial_ID = bm.ID
        LEFT JOIN WoodMaterials wm ON w.ShaftMaterial_ID = wm.ID
        LEFT JOIN GripStyles g ON w.Grip_ID = g.ID
        WHERE w.ID = ?";
}

$stmt = $mysqli->prepare($sql);
if (!$stmt) {
    echo json_encode(["error" => "Failed to prepare query."]);
    exit;
}

$stmt->bind_param("i", $id);
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
