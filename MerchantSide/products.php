<!DOCTYPE html>
<html>
<head>
    <title>Products</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://use.typekit.net/ynz6cyc.css">

    <link rel="preload" href="../Fonts/MedievalSharp/MedievalSharp-Regular.woff2" as="font" type="font/woff2" crossorigin>
</head>

<body>
    
    <nav>
        <div>
            <h1 class="siteTitle">Ironveil Forge</h1>
            
            <button class="collapseNav">
                <i class="chevron"></i>
            </button>
        </div>
        

        <button class="navLink" onclick="location.href='index.php'"><img src="Images/homeIcon.svg" alt="" class="navIcon">Dashboard</button>
        <button class="navLink" onclick="location.href='analytics.php'"><img src="Images/chartIcon.svg" alt="" class="navIcon">Analytics</button>
        <button class="navLink" onclick="location.href='orders.php'"><img src="Images/cartIcon.svg" alt="" class="navIcon">Orders</button>
        <button class="navLink" onclick="location.href='products.php'" id="here"><img src="Images/swordIcon.svg" alt="" class="navIcon">Products</button>
        <button class="navLink" onclick="location.href='inventory.php'"><img src="Images/clipboardIcon.svg" alt="" class="navIcon">Inventory</button>
    </nav>

    <div class="mainSection">
        <div class="header">
            <h1>Products</h1>
            
        </div>

        <div class="content">
            <div class="section">
                <div class="sectionHeader">
                    <form action="">
                        <label for="weaponTypeSelection"></label>
                        <select name="weaponTypeSelection" id="weaponTypeSelection">
                            <option value="swords">Swords</option>
                            <option value="daggers">Daggers</option>
                            <option value="blunthandweapons">Blunt Hand</option>
                            <option value="polearms">Polearms</option>
                            <option value="ranged">Ranged</option>
                        </select>
                    </form>

                    <div class="filterSelect">
                        <div class="subcategoryFilter" id="swords">
                            <span class="selected">All</span>
                            <div class="filterCarrot"></div>
                            <div class="options">
                                <div data-value="">All</div>
                                <div data-value="1">Arming Swords</div>
                                <div data-value="2">Broadswords</div>
                                <div data-value="3">Longswords</div>
                                <div data-value="4">Falchions</div>
                            </div>
                        </div>

                        <div class="subcategoryFilter" id="daggers">
                            <span class="selected">All</span>
                            <div class="filterCarrot"></div>
                            <div class="options">
                                <div data-value="">All</div>
                                <div data-value="5">Anelace</div>
                                <div data-value="6">Stiletto</div>
                                <div data-value="7">Poignard</div>
                                <div data-value="8">Rondel</div>
                                <div data-value="9">Sica</div>
                                <div data-value="10">Dagger</div>
                            </div>
                        </div>

                        <div class="subcategoryFilter" id=blunthandweapons>
                            <span class="selected">All</span>
                            <div class="filterCarrot"></div>
                            <div class="options">
                                <div data-value="">All</div>
                                <div data-value="11">Mace</div>
                                <div data-value="12">Morningstar</div>
                                <div data-value="13">Flail</div>
                                <div data-value="14">War Hammer</div>
                                <div data-value="15">Horsemen's Pick</div>
                            </div>
                        </div>

                        <div class="subcategoryFilter" id="polearms">
                            <span class="selected">All</span>
                            <div class="filterCarrot"></div>
                            <div class="options">
                                <div data-value="">All</div>
                                <div data-value="16">Spear</div>
                                <div data-value="17">Lance</div>
                                <div data-value="18">Poleaxe</div>
                                <div data-value="19">Halberd</div>
                                <div data-value="20">Corseque</div>
                            </div>
                        </div>

                        <div class="subcategoryFilter" id="ranged">
                            <span class="selected">All</span>
                            <div class="filterCarrot"></div>
                            <div class="options">
                                <div data-value="">All</div>
                                <div data-value="21">Throwing Axes</div>
                                <div data-value="22">Javelins</div>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="listedItems">
                    <thead>
                        <th class="edit"></th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Subcategory</th>
                        <th class="price">Price</th>
                    </thead>
                    <tbody>
                        <!-- PRODUCTS LISTED HERE -->
                    </tbody>
                </table>
            </div>

            <div class="section" id="productForm">
                <h2>Add Product</h2>
                <form id="addWeaponForm">
                    <label for="weaponTypeSelect">Select Weapon Type</label>
                    <select name="weaponTypeSelect" id="weaponTypeSelect">
                        <option value="swords">Swords</option>
                        <option value="daggers">Daggers</option>
                        <option value="blunthandweapons">Blunt Hand</option>
                        <option value="polearms">Polearms</option>
                        <option value="ranged">Ranged</option>
                    </select>

                    <div class="weaponSpecificForm" id="swordsForm">
                        <label for="swordName">Product Name:</label>
                        <input type="text" name="name" id="swordName" maxlength="255" required>

                        <label for="swordSubcategory">Subcategory</label>
                        <select name="subcategory" id="swordSubcategory">
                            <option value="1">Arming Swords</option>
                            <option value="2">Broadswords</option>
                            <option value="3">Longswords</option>
                            <option value="4">Falchions</option>
                        </select>

                        <h3>Blade</h3>
                        <label for="swordBladeMaterial">Material</label>
                        <select name="bladeMaterial" id="swordBladeMaterial">
                            <option value="1">High-Carbon Steel</option>
                            <option value="2">Tool Steel</option>
                            <option value="3">PM Stainless</option>
                            <option value="4">Titanium Alloy</option>
                            <option value="5">Tungsten Carbide</option>
                            <option value="6">Maraging Steel</option>
                            <option value="7">Bronze Alloy</option>
                            <option value="8">Dark Steel</option>
                        </select>

                        <label for="swordBladeShape">Shape</label>
                        <select name="bladeShape" id="swordBladeShape">
                            <option value="1">Clip</option>
                            <option value="2">Drop</option>
                            <option value="3">Tanto</option>
                            <option value="4">Fuller</option>
                            <option value="5">Leaf</option>
                            <option value="6">Scimitar</option>
                            <option value="7">Falchion</option>
                            <option value="8">Bowie</option>
                            <option value="9">Wharncliffe</option>
                            <option value="10">Recurve</option>
                            <option value="11">Kukri</option>
                            <option value="12">Estoc</option>
                        </select>

                        <label for="swordBladeEdge">Edge Style</label>
                        <select name="bladeEdge" id="swordBladeEdge">
                            <option value="1">Single Edge</option>
                            <option value="2">Double Edge</option>
                            <option value="3">False Edge</option>
                            <option value="4">Blunt</option>
                            <option value="5">Plain</option>
                            <option value="6">Serrated</option>
                            <option value="7">Hybrid</option>
                            <option value="8">Flat Grind</option>
                            <option value="9">Hollow</option>
                            <option value="10">Convex</option>
                            <option value="11">Chisel</option>
                            <option value="12">Scandi</option>
                            <option value="13">Saber</option>
                        </select>

                        <h3>Hilt</h3>
                        <label for="swordHiltMaterial">Material</label>
                        <select name="hiltMaterial" id="swordHiltMaterial">
                            <option value="1">Hickory</option>
                            <option value="2">Ash</option>
                            <option value="3">Ironwood</option>
                            <option value="4">Purpleheart</option>
                            <option value="5">Beech</option>
                            <option value="6">Birch</option>
                            <option value="7">Maple</option>
                            <option value="8">Poplar</option>
                            <option value="9">Black Walnut</option>
                            <option value="10">Hornbeam</option>
                            <option value="11">Lignum Vitae</option>
                        </select>

                        <label for="swordGrip">Grip Style</label>
                        <select name="grip" id="swordGrip">
                            <option value="1">Straight</option>
                            <option value="2">Waisted</option>
                            <option value="3">Curved</option>
                            <option value="4">Flared</option>
                            <option value="5">Faceted</option>
                            <option value="6">Cord-wrapped</option>
                            <option value="7">Leather</option>
                            <option value="8">Wire</option>
                            <option value="9">Wood</option>
                            <option value="10">Bone</option>
                            <option value="11">Segmented</option>
                            <option value="12">Integral</option>
                            <option value="13">Capped</option>
                            <option value="14">Ornate</option>
                        </select>

                        <h3>Pommel</h3>
                        <label for="swordPommel">Type</label>
                        <select name="pommel" id="swordPommel">
                            <option value="1">Sphere</option>
                            <option value="2">Disc</option>
                            <option value="3">Wheel</option>
                            <option value="4">Spike</option>
                            <option value="5">Faceted</option>
                            <option value="6">Ring</option>
                            <option value="7">Hook</option>
                            <option value="8">Knob</option>
                            <option value="9">Gem</option>
                            <option value="10">Cage</option>
                            <option value="11">Counterweight</option>
                            <option value="12">Flat</option>
                        </select>

                        <label for="swordPommelMaterial">Material</label>
                        <select name="pommelMaterial" id="swordPommelMaterial">
                            <option value="1">High-Carbon Steel</option>
                            <option value="2">Tool Steel</option>
                            <option value="3">PM Stainless</option>
                            <option value="4">Titanium Alloy</option>
                            <option value="5">Tungsten Carbide</option>
                            <option value="6">Maraging Steel</option>
                            <option value="7">Bronze Alloy</option>
                            <option value="8">Dark Steel</option>
                        </select>

                        <label for="swordPommelAccent">Accent</label>
                        <select name="pommelAccent" id="swordPommelAccent">
                            <option value="">None</option>
                            <option value="1">High-Carbon Steel</option>
                            <option value="2">Tool Steel</option>
                            <option value="3">PM Stainless</option>
                            <option value="4">Titanium Alloy</option>
                            <option value="5">Tungsten Carbide</option>
                            <option value="6">Maraging Steel</option>
                            <option value="7">Bronze Alloy</option>
                            <option value="8">Dark Steel</option>
                        </select>

                        <label for="swordPommelGem">Gem</label>
                        <select name="pommelGem" id="swordPommelGem">
                            <option value="">None</option>
                            <option value="1">Garnet</option>
                            <option value="2">Sapphire</option>
                            <option value="3">Ruby</option>
                            <option value="4">Jade</option>
                            <option value="5">Quartz</option>
                            <option value="6">Topaz</option>
                            <option value="7">Pearl</option>
                            <option value="8">Onyx</option>
                        </select>

                        <h3>Sheath</h3>
                        <label for="swordSheathType">Type</label>
                        <select name="sheathType" id="swordSheathType">
                            <option value="1">Minimal</option>
                            <option value="2">Ornate</option>
                            <option value="3">Jeweled</option>
                            <option value="4">Wrapped</option>
                        </select>

                        <label for="swordSheathMaterial">Material</label>
                        <select name="sheathMaterial" id="swordSheathMaterial">
                            <option value="1">Leather</option>
                            <option value="2">Wooden</option>
                            <option value="3">Metal</option>
                            <option value="4">Laquered</option>
                        </select>

                        <label for="swordSheathColor">Color</label>
                        <select name="sheathColor" id="swordSheathColor">
                            <option value="1">Black</option>
                            <option value="2">Dark Brown</option>
                            <option value="3">Chestnut</option>
                            <option value="4">Mahogany</option>
                            <option value="5">Deep Indigo</option>
                            <option value="6">Crimson</option>
                            <option value="7">Dark Green</option>
                            <option value="8">Forest Green</option>
                            <option value="9">Navy</option>
                            <option value="10">Steel Gray</option>
                            <option value="11">Charcoal</option>
                            <option value="12">Natural</option>
                            <option value="13">Bone White</option>
                            <option value="14">Midnight Blue</option>
                            <option value="15">Oxblood</option>
                        </select>

                        <h3>Other</h3>
                        <label for="swordEngravings">Engravings</label>
                        <input type="text" name="engravings" id="swordEngravings" maxlength="255">

                        <label for="swordInscriptions">Inscriptions</label>
                        <input type="text" name="inscriptions" id="swordInscriptions" maxlength="255">

                        <label for="swordBladeLength">Blade Length (cm)</label>
                        <input type="number" id="swordBladeLength" name="bladeLength" step="0.01" min="0.00" required>

                        <label for="swordWeight">Weight (kg)</label>
                        <input type="number" id="swordWeight" name="weight" step="0.01" min="0.00" required>
                        
                        <label for="swordPrice">Price</label>
                        <input type="number" id="swordPrice" name="price" step="0.01" min="0.00" required>
                    </div>

                    <div class="weaponSpecificForm" id="daggersForm">
                        <label for="daggerName">Product Name:</label>
                        <input type="text" name="name" id="daggerName" maxlength="255" required>

                        <label for="daggerSubcategory">Subcategory</label>
                        <select name="subcategory" id="daggerSubcategory">
                            <option value="5">Anelace</option>
                            <option value="6">Stilleto</option>
                            <option value="7">Poignard</option>
                            <option value="8">Rondel</option>
                            <option value="9">Sica</option>
                            <option value="10">Dagger</option>
                        </select>

                        <h3>Blade</h3>
                        <label for="daggerBladeMaterial">Material</label>
                        <select name="bladeMaterial" id="daggerBladeMaterial">
                            <option value="1">High-Carbon Steel</option>
                            <option value="2">Tool Steel</option>
                            <option value="3">PM Stainless</option>
                            <option value="4">Titanium Alloy</option>
                            <option value="5">Tungsten Carbide</option>
                            <option value="6">Maraging Steel</option>
                            <option value="7">Bronze Alloy</option>
                            <option value="8">Dark Steel</option>
                        </select>

                        <label for="daggerBladeEdge">Edge Style</label>
                        <select name="bladeEdge" id="daggerBladeEdge">
                            <option value="1">Single Edge</option>
                            <option value="2">Double Edge</option>
                            <option value="3">False Edge</option>
                            <option value="4">Blunt</option>
                            <option value="5">Plain</option>
                            <option value="6">Serrated</option>
                            <option value="7">Hybrid</option>
                            <option value="8">Flat Grind</option>
                            <option value="9">Hollow</option>
                            <option value="10">Convex</option>
                            <option value="11">Chisel</option>
                            <option value="12">Scandi</option>
                            <option value="13">Saber</option>
                        </select>

                        <h3>Hilt</h3>
                        <label for="daggerHiltMaterial">Material</label>
                        <select name="hiltMaterial" id="daggerHiltMaterial">
                            <option value="1">Hickory</option>
                            <option value="2">Ash</option>
                            <option value="3">Ironwood</option>
                            <option value="4">Purpleheart</option>
                            <option value="5">Beech</option>
                            <option value="6">Birch</option>
                            <option value="7">Maple</option>
                            <option value="8">Poplar</option>
                            <option value="9">Black Walnut</option>
                            <option value="10">Hornbeam</option>
                            <option value="11">Lignum Vitae</option>
                        </select>

                        <label for="daggerGrip">Grip Style</label>
                        <select name="grip" id="daggerGrip">
                            <option value="1">Straight</option>
                            <option value="2">Waisted</option>
                            <option value="3">Curved</option>
                            <option value="4">Flared</option>
                            <option value="5">Faceted</option>
                            <option value="6">Cord-wrapped</option>
                            <option value="7">Leather</option>
                            <option value="8">Wire</option>
                            <option value="9">Wood</option>
                            <option value="10">Bone</option>
                            <option value="11">Segmented</option>
                            <option value="12">Integral</option>
                            <option value="13">Capped</option>
                            <option value="14">Ornate</option>
                        </select>

                        <h3>Pommel</h3>
                        <label for="daggerPommel">Type</label>
                        <select name="pommel" id="daggerPommel">
                            <option value="1">Sphere</option>
                            <option value="2">Disc</option>
                            <option value="3">Wheel</option>
                            <option value="4">Spike</option>
                            <option value="5">Faceted</option>
                            <option value="6">Ring</option>
                            <option value="7">Hook</option>
                            <option value="8">Knob</option>
                            <option value="9">Gem</option>
                            <option value="10">Cage</option>
                            <option value="11">Counterweight</option>
                            <option value="12">Flat</option>
                        </select>

                        <label for="daggerPommelMaterial">Material</label>
                        <select name="pommelMaterial" id="daggerPommelMaterial">
                            <option value="1">High-Carbon Steel</option>
                            <option value="2">Tool Steel</option>
                            <option value="3">PM Stainless</option>
                            <option value="4">Titanium Alloy</option>
                            <option value="5">Tungsten Carbide</option>
                            <option value="6">Maraging Steel</option>
                            <option value="7">Bronze Alloy</option>
                            <option value="8">Dark Steel</option>
                        </select>

                        <label for="daggerPommelGem">Gem</label>
                        <select name="pommelGem" id="daggerPommelGem">
                            <option value="">None</option>
                            <option value="1">Garnet</option>
                            <option value="2">Sapphire</option>
                            <option value="3">Ruby</option>
                            <option value="4">Jade</option>
                            <option value="5">Quartz</option>
                            <option value="6">Topaz</option>
                            <option value="7">Pearl</option>
                            <option value="8">Onyx</option>
                        </select>

                        <h3>Sheath</h3>
                        <label for="daggerSheathType">Type</label>
                        <select name="sheathType" id="daggerSheathType">
                            <option value="1">Minimal</option>
                            <option value="2">Ornate</option>
                            <option value="3">Jeweled</option>
                            <option value="4">Wrapped</option>
                        </select>

                        <label for="daggerSheathMaterial">Material</label>
                        <select name="sheathMaterial" id="daggerSheathMaterial">
                            <option value="1">Leather</option>
                            <option value="2">Wooden</option>
                            <option value="3">Metal</option>
                            <option value="4">Laquered</option>
                        </select>

                        <label for="daggerSheathColor">Color</label>
                        <select name="sheathColor" id="daggerSheathColor">
                            <option value="1">Black</option>
                            <option value="2">Dark Brown</option>
                            <option value="3">Chestnut</option>
                            <option value="4">Mahogany</option>
                            <option value="5">Deep Indigo</option>
                            <option value="6">Crimson</option>
                            <option value="7">Dark Green</option>
                            <option value="8">Forest Green</option>
                            <option value="9">Navy</option>
                            <option value="10">Steel Gray</option>
                            <option value="11">Charcoal</option>
                            <option value="12">Natural</option>
                            <option value="13">Bone White</option>
                            <option value="14">Midnight Blue</option>
                            <option value="15">Oxblood</option>
                        </select>

                        <h3>Other</h3>
                        <label for="daggerEngravings">Engravings</label>
                        <input type="text" name="engravings" id="daggerEngravings" maxlength="255">

                        <label for="daggerInscriptions">Inscriptions</label>
                        <input type="text" name="inscriptions" id="daggerInscriptions" maxlength="255">

                        <label for="daggerBladeLength">Blade Length (cm)</label>
                        <input type="number" id="daggerBladeLength" name="bladeLength" step="0.01" min="0.00" required>

                        <label for="daggerWeight">Weight (kg)</label>
                        <input type="number" id="daggerWeight" name="weight" step="0.01" min="0.00" required>
                        
                        <label for="daggerPrice">Price</label>
                        <input type="number" id="daggerPrice" name="price" step="0.01" min="0.00" required>

                    </div>

                    <div class="weaponSpecificForm" id="bluntHandsForm">
                        <label for="bluntHandName">Product Name:</label>
                        <input type="text" name="name" id="bluntHandName" maxlength="255" required>

                        <label for="bluntHandSubcategory">Subcategory</label>
                        <select name="subcategory" id="bluntHandSubcategory">
                            <option value="11">Mace</option>
                            <option value="12">Morningstar</option>
                            <option value="13">Flail</option>
                            <option value="14">War Hammer</option>
                            <option value="15">Horsemen's Pick</option>
                        </select>

                        <h3>Head</h3>
                        <label for="bluntHandHeadMaterial">Head Material</label>
                        <select name="headMaterial" id="bluntHandHeadMaterial">
                            <option value="1">High-Carbon Steel</option>
                            <option value="2">Tool Steel</option>
                            <option value="3">PM Stainless</option>
                            <option value="4">Titanium Alloy</option>
                            <option value="5">Tungsten Carbide</option>
                            <option value="6">Maraging Steel</option>
                            <option value="7">Bronze Alloy</option>
                            <option value="8">Dark Steel</option>
                        </select>

                        <label for="bluntHandpikesNum">Number of Spikes</label>
                        <input type="number" name="spikesNum" id="bluntHandpikesNum" min="0" max="12">

                        <label for="bluntHandChainLength">Chain Length</label>
                        <input type="number" id="bluntHandChainLength" name="chainLength" step="0.01" min="0.00">

                        <h3>Shaft</h3>
                        <label for="bluntHandhaftMaterial">Material</label>
                        <select name="shaftMaterial" id="bluntHandhaftMaterial">
                            <option value="1">Hickory</option>
                            <option value="2">Ash</option>
                            <option value="3">Ironwood</option>
                            <option value="4">Purpleheart</option>
                            <option value="5">Beech</option>
                            <option value="6">Birch</option>
                            <option value="7">Maple</option>
                            <option value="8">Poplar</option>
                            <option value="9">Black Walnut</option>
                            <option value="10">Hornbeam</option>
                            <option value="11">Lignum Vitae</option>
                        </select>

                        <label for="bluntHandGrip">Grip Style</label>
                        <select name="grip" id="bluntHandGrip">
                            <option value="1">Straight</option>
                            <option value="2">Waisted</option>
                            <option value="3">Curved</option>
                            <option value="4">Flared</option>
                            <option value="5">Faceted</option>
                            <option value="6">Cord-wrapped</option>
                            <option value="7">Leather</option>
                            <option value="8">Wire</option>
                            <option value="9">Wood</option>
                            <option value="10">Bone</option>
                            <option value="11">Segmented</option>
                            <option value="12">Integral</option>
                            <option value="13">Capped</option>
                            <option value="14">Ornate</option>
                        </select>

                        <h3>Pommel</h3>
                        <label for="bluntHandPommel">Type</label>
                        <select name="pommel" id="bluntHandPommel">
                            <option value="1">Sphere</option>
                            <option value="2">Disc</option>
                            <option value="3">Wheel</option>
                            <option value="4">Spike</option>
                            <option value="5">Faceted</option>
                            <option value="6">Ring</option>
                            <option value="7">Hook</option>
                            <option value="8">Knob</option>
                            <option value="9">Gem</option>
                            <option value="10">Cage</option>
                            <option value="11">Counterweight</option>
                            <option value="12">Flat</option>
                        </select>

                        <label for="bluntHandPommelMaterial">Material</label>
                        <select name="pommelMaterial" id="bluntHandPommelMaterial">
                            <option value="1">High-Carbon Steel</option>
                            <option value="2">Tool Steel</option>
                            <option value="3">PM Stainless</option>
                            <option value="4">Titanium Alloy</option>
                            <option value="5">Tungsten Carbide</option>
                            <option value="6">Maraging Steel</option>
                            <option value="7">Bronze Alloy</option>
                            <option value="8">Dark Steel</option>
                        </select>

                        <h3>Other</h3>
                        <label for="bluntHandEngravings">Engravings</label>
                        <input type="text" name="engravings" id="bluntHandEngravings" maxlength="255">

                        <label for="bluntHandInscriptions">Inscriptions</label>
                        <input type="text" name="inscriptions" id="bluntHandInscriptions" maxlength="255">

                        <label for="bluntHandLength">Total Length (cm)</label>
                        <input type="number" id="bluntHandLength" name="totalLength" step="0.01" min="0.00" required>

                        <label for="bluntHandWeight">Weight (kg)</label>
                        <input type="number" id="bluntHandWeight" name="weight" step="0.01" min="0.00" required>
                        
                        <label for="bluntHandPrice">Price</label>
                    </div>

                    <div class="weaponSpecificForm" id="polearmsForm">
                        <label for="polearmName">Product Name:</label>
                        <input type="text" name="name" id="polearmName" maxlength="255" required>

                        <label for="polearmSubcategory">Subcategory</label>
                        <select name="subcategory" id="polearmSubcategory">
                            <option value="16">Spear</option>
                            <option value="17">Lance</option>
                            <option value="18">Poleaxe</option>
                            <option value="19">Halberd</option>
                            <option value="20">Corseque</option>
                            <option value="21">Maul</option>
                        </select>

                        <h3>Head</h3>
                        <label for="polearmHeadMaterial">Head Material</label>
                        <select name="headMaterial" id="polearmHeadMaterial">
                            <option value="1">High-Carbon Steel</option>
                            <option value="2">Tool Steel</option>
                            <option value="3">PM Stainless</option>
                            <option value="4">Titanium Alloy</option>
                            <option value="5">Tungsten Carbide</option>
                            <option value="6">Maraging Steel</option>
                            <option value="7">Bronze Alloy</option>
                            <option value="8">Dark Steel</option>
                        </select>
                        
                        <h3>Shaft</h3>
                        <label for="polearmShaftLength">Shaft Length</label>
                        <input type="number" id="polearmShaftLength" name="shaftLength" step="0.01" min="0.00">

                        <label for="polearmShaftMaterial">Material</label>
                        <select name="shaftMaterial" id="polearmShaftMaterial">
                            <option value="1">Hickory</option>
                            <option value="2">Ash</option>
                            <option value="3">Ironwood</option>
                            <option value="4">Purpleheart</option>
                            <option value="5">Beech</option>
                            <option value="6">Birch</option>
                            <option value="7">Maple</option>
                            <option value="8">Poplar</option>
                            <option value="9">Black Walnut</option>
                            <option value="10">Hornbeam</option>
                            <option value="11">Lignum Vitae</option>
                        </select>

                        <label for="polearmGrip">Grip Style</label>
                        <select name="grip" id="polearmGrip">
                            <option value="1">Straight</option>
                            <option value="2">Waisted</option>
                            <option value="3">Curved</option>
                            <option value="4">Flared</option>
                            <option value="5">Faceted</option>
                            <option value="6">Cord-wrapped</option>
                            <option value="7">Leather</option>
                            <option value="8">Wire</option>
                            <option value="9">Wood</option>
                            <option value="10">Bone</option>
                            <option value="11">Segmented</option>
                            <option value="12">Integral</option>
                            <option value="13">Capped</option>
                            <option value="14">Ornate</option>
                        </select>

                        <h3>Butt Cap</h3>
                        <label for="polearmButtCap">Type</label>
                        <select name="buttCap" id="polearmButtCap">
                            <option value="1">Sphere</option>
                            <option value="2">Disc</option>
                            <option value="3">Wheel</option>
                            <option value="4">Spike</option>
                            <option value="5">Faceted</option>
                            <option value="6">Ring</option>
                            <option value="7">Hook</option>
                            <option value="8">Knob</option>
                            <option value="9">Gem</option>
                            <option value="10">Cage</option>
                            <option value="11">Counterweight</option>
                            <option value="12">Flat</option>
                        </select>

                        <label for="polearmButtCapMaterial">Material</label>
                        <select name="buttCapMaterial" id="polearmButtCapMaterial">
                            <option value="1">High-Carbon Steel</option>
                            <option value="2">Tool Steel</option>
                            <option value="3">PM Stainless</option>
                            <option value="4">Titanium Alloy</option>
                            <option value="5">Tungsten Carbide</option>
                            <option value="6">Maraging Steel</option>
                            <option value="7">Bronze Alloy</option>
                            <option value="8">Dark Steel</option>
                        </select>

                        <h3>Other</h3>
                        <label for="polearmEngravings">Engravings</label>
                        <input type="text" name="engravings" id="polearmEngravings" maxlength="255">

                        <label for="polearmInscriptions">Inscriptions</label>
                        <input type="text" name="inscriptions" id="polearmInscriptions" maxlength="255">

                        <label for="polearmLength">Total Length (cm)</label>
                        <input type="number" id="polearmLength" name="totalLength" step="0.01" min="0.00" required>

                        <label for="polearmWeight">Weight (kg)</label>
                        <input type="number" id="polearmWeight" name="weight" step="0.01" min="0.00" required>
                        
                        <label for="polearmPrice">Price</label>
                        <input type="number" id="polearmPrice" name="price" step="0.01" min="0.00" required>
                    </div>

                    <div class="weaponSpecificForm" id="rangedForm">
                        <label for="rangedName">Product Name:</label>
                        <input type="text" name="name" id="rangedName" maxlength="255" required>

                        <label for="rangedSubcategory">Subcategory</label>
                        <select name="subcategory" id="rangedSubcategory">
                            <option value="22">Throwing Axe</option>
                            <option value="23">Javelin</option>
                        </select>

                        <h3>Head</h3>
                        <label for="rangedHeadMaterial">Head Material</label>
                        <select name="headMaterial" id="rangedHeadMaterial">
                            <option value="1">High-Carbon Steel</option>
                            <option value="2">Tool Steel</option>
                            <option value="3">PM Stainless</option>
                            <option value="4">Titanium Alloy</option>
                            <option value="5">Tungsten Carbide</option>
                            <option value="6">Maraging Steel</option>
                            <option value="7">Bronze Alloy</option>
                            <option value="8">Dark Steel</option>
                        </select>
                        
                        <h3>Shaft</h3>
                        <label for="rangedShaftLength">Shaft Length</label>
                        <input type="number" id="rangedShaftLength" name="shaftLength" step="0.01" min="0.00">

                        <label for="rangedShaftMaterial">Material</label>
                        <select name="shaftMaterial" id="rangedShaftMaterial">
                            <option value="1">Hickory</option>
                            <option value="2">Ash</option>
                            <option value="3">Ironwood</option>
                            <option value="4">Purpleheart</option>
                            <option value="5">Beech</option>
                            <option value="6">Birch</option>
                            <option value="7">Maple</option>
                            <option value="8">Poplar</option>
                            <option value="9">Black Walnut</option>
                            <option value="10">Hornbeam</option>
                            <option value="11">Lignum Vitae</option>
                        </select>

                        <label for="rangedGrip">Grip Style</label>
                        <select name="grip" id="rangedGrip">
                            <option value="1">Straight</option>
                            <option value="2">Waisted</option>
                            <option value="3">Curved</option>
                            <option value="4">Flared</option>
                            <option value="5">Faceted</option>
                            <option value="6">Cord-wrapped</option>
                            <option value="7">Leather</option>
                            <option value="8">Wire</option>
                            <option value="9">Wood</option>
                            <option value="10">Bone</option>
                            <option value="11">Segmented</option>
                            <option value="12">Integral</option>
                            <option value="13">Capped</option>
                            <option value="14">Ornate</option>
                        </select>

                        <h3>Other</h3>
                        <label for="rangedEngravings">Engravings</label>
                        <input type="text" name="engravings" id="rangedEngravings" maxlength="255">

                        <label for="rangedInscriptions">Inscriptions</label>
                        <input type="text" name="inscriptions" id="rangedInscriptions" maxlength="255">

                        <label for="rangedLength">Total Length (cm)</label>
                        <input type="number" id="rangedLength" name="totalLength" step="0.01" min="0.00" required>

                        <label for="rangedWeight">Weight (kg)</label>
                        <input type="number" id="rangedWeight" name="weight" step="0.01" min="0.00" required>
                        
                        <label for="rangedPrice">Price</label>
                        <input type="number" id="rangedPrice" name="price" step="0.01" min="0.00" required>
                    </div>

                    <label for="fileUpload" class="customFileUpload">
                        Upload Image
                    </label>
                        
                    <input id="fileUpload" type="file" name="image" accept="image/*">

                    <input type="submit" value="Add Weapon" id="submit">
                </form>

                <p id="formMessage"></p>
            </div>
        </div>
    </div>

    <script src='productListings.js'></script>
</body>
</html>