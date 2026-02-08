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
        <div class="nav">
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
        </div>
    </nav>

    <div class="mainSection">
        <div class="header">
            <h1>Products</h1>
            
        </div>
        
        
        <div class="content">
            <div class="otherButtons" id="addWeaponButton">Add New Weapon</div>
            <div class="otherButtons" id="backButton">&#8249;</div>

            <div class="section" id="weaponList">
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
                        <option value="blunthandweapons">Blunt Hand Weapons</option>
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
                        <div class="formSubsection">
                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>
                        </div>

                        <h3>Hilt</h3>
                        <div class="formSubsection">
                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>
                        </div>

                        <h3>Pommel</h3>
                        <div class="formSubsection">
                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>
                        </div>

                        <h3>Sheath</h3>
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="swordSheathType">Type</label>
                                <select name="sheathType" id="swordSheathType">
                                    <option value="1">Minimal</option>
                                    <option value="2">Ornate</option>
                                    <option value="3">Jeweled</option>
                                    <option value="4">Wrapped</option>
                                </select>
                            </div>

                            <div class="formItem">
                                <label for="swordSheathMaterial">Material</label>
                                <select name="sheathMaterial" id="swordSheathMaterial">
                                    <option value="1">Leather</option>
                                    <option value="2">Wooden</option>
                                    <option value="3">Metal</option>
                                    <option value="4">Laquered</option>
                                </select>
                            </div>

                            <div class="formItem">
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
                            </div>
                        </div>

                        <h3>Other</h3>
                        <label for="swordEngravings">Engravings</label>
                        <input type="text" name="engravings" id="swordEngravings" maxlength="255">

                        <label for="swordInscriptions">Inscriptions</label>
                        <input type="text" name="inscriptions" id="swordInscriptions" maxlength="255">

                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="swordBladeLength">Blade Length (cm)</label>
                                <input type="number" id="swordBladeLength" name="bladeLength" step="0.01" min="0.00" required>
                            </div>

                            <div class="formItem">
                                <label for="swordWeight">Weight (kg)</label>
                                <input type="number" id="swordWeight" name="weight" step="0.01" min="0.00" required>
                            </div>
                        </div>
                        
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
                        <div class="formSubsection">
                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>
                        </div>

                        <h3>Hilt</h3>
                        <div class="formSubsection">
                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>
                        </div>

                        <h3>Pommel</h3>
                        <div class="formSubsection">
                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>
                        </div>

                        <h3>Sheath</h3>
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="daggerSheathType">Type</label>
                                <select name="sheathType" id="daggerSheathType">
                                    <option value="1">Minimal</option>
                                    <option value="2">Ornate</option>
                                    <option value="3">Jeweled</option>
                                    <option value="4">Wrapped</option>
                                </select>
                            </div>

                            <div class="formItem">
                                <label for="daggerSheathMaterial">Material</label>
                                <select name="sheathMaterial" id="daggerSheathMaterial">
                                    <option value="1">Leather</option>
                                    <option value="2">Wooden</option>
                                    <option value="3">Metal</option>
                                    <option value="4">Laquered</option>
                                </select>
                            </div>

                            <div class="formItem">
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
                            </div>
                        </div>

                        <h3>Other</h3>
                        <label for="daggerEngravings">Engravings</label>
                        <input type="text" name="engravings" id="daggerEngravings" maxlength="255">

                        <label for="daggerInscriptions">Inscriptions</label>
                        <input type="text" name="inscriptions" id="daggerInscriptions" maxlength="255">

                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="daggerBladeLength">Blade Length (cm)</label>
                                <input type="number" id="daggerBladeLength" name="bladeLength" step="0.01" min="0.00" required>
                            </div>

                            <div class="formItem">
                                <label for="daggerWeight">Weight (kg)</label>
                                <input type="number" id="daggerWeight" name="weight" step="0.01" min="0.00" required>
                            </div>
                        </div>
                        
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
                        <div class="formSubsection">
                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
                                <label for="bluntHandpikesNum">Number of Spikes</label>
                                <input type="number" name="spikesNum" id="bluntHandpikesNum" min="0" max="12">
                            </div>

                            <div class="formItem">
                                <label for="bluntHandChainLength">Chain Length (cm)</label>
                                <input type="number" id="bluntHandChainLength" name="chainLength" step="0.01" min="0.00">
                            </div>
                        </div>

                        <h3>Shaft</h3>
                        <div class="formSubsection">
                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>
                        </div>

                        <h3>Pommel</h3>
                        <div class="formSubsection">
                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>
                        </div>

                        <h3>Other</h3>
                        <label for="bluntHandEngravings">Engravings</label>
                        <input type="text" name="engravings" id="bluntHandEngravings" maxlength="255">

                        <label for="bluntHandInscriptions">Inscriptions</label>
                        <input type="text" name="inscriptions" id="bluntHandInscriptions" maxlength="255">

                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="bluntHandLength">Total Length (cm)</label>
                                <input type="number" id="bluntHandLength" name="totalLength" step="0.01" min="0.00" required>
                            </div>

                            <div class="formItem">
                                <label for="bluntHandWeight">Weight (kg)</label>
                                <input type="number" id="bluntHandWeight" name="weight" step="0.01" min="0.00" required>
                            </div>
                        </div>
                        
                        <label for="bluntHandPrice">Price</label>
                        <input type="number" id="bluntHandPrice" name="price" step="0.01" min="0.00" required>
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
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="polearmShaftLength">Shaft Length (cm)</label>
                                <input type="number" id="polearmShaftLength" name="shaftLength" step="0.01" min="0.00">
                            </div>

                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>
                        </div>

                        <h3>Butt Cap</h3>
                        <div class="formSubsection">
                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>
                        </div>

                        <h3>Other</h3>
                        <label for="polearmEngravings">Engravings</label>
                        <input type="text" name="engravings" id="polearmEngravings" maxlength="255">

                        <label for="polearmInscriptions">Inscriptions</label>
                        <input type="text" name="inscriptions" id="polearmInscriptions" maxlength="255">

                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="polearmLength">Total Length (cm)</label>
                                <input type="number" id="polearmLength" name="totalLength" step="0.01" min="0.00" required>
                            </div>

                            <div class="formItem">
                                <label for="polearmWeight">Weight (kg)</label>
                                <input type="number" id="polearmWeight" name="weight" step="0.01" min="0.00" required>
                            </div>
                        </div>
                        
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
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="rangedShaftLength">Shaft Length</label>
                                <input type="number" id="rangedShaftLength" name="shaftLength" step="0.01" min="0.00">
                            </div>

                            <div class="formItem">
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
                            </div>

                            <div class="formItem">
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
                            </div>
                        </div>

                        <h3>Other</h3>
                        <label for="rangedEngravings">Engravings</label>
                        <input type="text" name="engravings" id="rangedEngravings" maxlength="255">

                        <label for="rangedInscriptions">Inscriptions</label>
                        <input type="text" name="inscriptions" id="rangedInscriptions" maxlength="255">

                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="rangedLength">Total Length (cm)</label>
                                <input type="number" id="rangedLength" name="totalLength" step="0.01" min="0.00" required>
                            </div>

                            <div class="formItem">
                                <label for="rangedWeight">Weight (kg)</label>
                                <input type="number" id="rangedWeight" name="weight" step="0.01" min="0.00" required>
                            </div>
                        </div>
                        
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

        <div class="section" id="editProductForm">
            <div class="topSection">
                <h2>Edit Product</h2>
                <button class="deleteButton">Delete Item</button>
            </div>
                <form id="editWeaponForm">
                    <div class="weaponSpecificForm" id="editSwordsForm">
                        <label for="editSwordName">Product Name:</label>
                        <input type="text" name="Name" id="editSwordName" maxlength="255" required>

                        <label for="editSwordSubcategory">Subcategory</label>
                        <select name="Subcategory_ID" id="editSwordSubcategory">
                            <option value="1">Arming Swords</option>
                            <option value="2">Broadswords</option>
                            <option value="3">Longswords</option>
                            <option value="4">Falchions</option>
                        </select>

                        <h3>Blade</h3>
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editSwordBladeMaterial">Material</label>
                                <select name="BladeMaterial_ID" id="editSwordBladeMaterial">
                                    <option value="1">High-Carbon Steel</option>
                                    <option value="2">Tool Steel</option>
                                    <option value="3">PM Stainless</option>
                                    <option value="4">Titanium Alloy</option>
                                    <option value="5">Tungsten Carbide</option>
                                    <option value="6">Maraging Steel</option>
                                    <option value="7">Bronze Alloy</option>
                                    <option value="8">Dark Steel</option>
                                </select>
                            </div>
                        
                            <div class="formItem">
                                <label for="editSwordBladeShape">Shape</label>
                                <select name="BladeShape_ID" id="editSwordBladeShape">
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
                            </div>

                            <div class="formItem">
                                <label for="editSwordBladeEdge">Edge Style</label>
                                <select name="bladeEdge" id="editSwordBladeEdge">
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
                            </div>
                        </div>

                        <h3>Hilt</h3>
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editSwordHiltMaterial">Material</label>
                                <select name="HiltMaterial_ID" id="editSwordHiltMaterial">
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
                            </div>

                            <div class="formItem">
                                <label for="editSwordGrip">Grip Style</label>
                                <select name="Grip_ID" id="editSwordGrip">
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
                            </div>
                        </div>

                        <h3>Pommel</h3>
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editSwordPommel">Type</label>
                                <select name="Pommel_ID" id="editSwordPommel">
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
                            </div>

                            <div class="formItem">
                                <label for="editSwordPommelMaterial">Material</label>
                                <select name="PommelMaterial_ID" id="editSwordPommelMaterial">
                                    <option value="1">High-Carbon Steel</option>
                                    <option value="2">Tool Steel</option>
                                    <option value="3">PM Stainless</option>
                                    <option value="4">Titanium Alloy</option>
                                    <option value="5">Tungsten Carbide</option>
                                    <option value="6">Maraging Steel</option>
                                    <option value="7">Bronze Alloy</option>
                                    <option value="8">Dark Steel</option>
                                </select>
                            </div>

                            <div class="formItem">
                                <label for="editSwordPommelAccent">Accent</label>
                                <select name="PommelAccent_ID" id="editSwordPommelAccent">
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
                            </div>

                            <div class="formItem">
                                <label for="editSwordPommelGem">Gem</label>
                                <select name="PommelGem_ID" id="editSwordPommelGem">
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
                            </div>
                        </div>

                        <h3>Sheath</h3>
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editSwordSheathType">Type</label>
                                <select name="SheathType_ID" id="editSwordSheathType">
                                    <option value="1">Minimal</option>
                                    <option value="2">Ornate</option>
                                    <option value="3">Jeweled</option>
                                    <option value="4">Wrapped</option>
                                </select>
                            </div>

                            <div class="formItem">
                                <label for="editSwordSheathMaterial">Material</label>
                                <select name="SheathMaterial_ID" id="editSwordSheathMaterial">
                                    <option value="1">Leather</option>
                                    <option value="2">Wooden</option>
                                    <option value="3">Metal</option>
                                    <option value="4">Laquered</option>
                                </select>
                            </div>

                            <div class="formItem">
                                <label for="editSwordSheathColor">Color</label>
                                <select name="SheathColor_ID" id="editSwordSheathColor">
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
                            </div>
                        </div>

                        <h3>Other</h3>
                        <label for="editSwordEngravings">Engravings</label>
                        <input type="text" name="Engravings" id="editSwordEngravings" maxlength="255">

                        <label for="editSwordInscriptions">Inscriptions</label>
                        <input type="text" name="Inscriptions" id="editSwordInscriptions" maxlength="255">
                        
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editSwordBladeLength">Blade Length (cm)</label>
                                <input type="number" id="editSwordBladeLength" name="BladeLength_cm" step="0.01" min="0.00" required>
                            </div>

                            <div class="formItem">
                                <label for="editSwordWeight">Weight (kg)</label>
                                <input type="number" id="editSwordWeight" name="Weight_kg" step="0.01" min="0.00" required>
                            </div>
                        </div>
                        
                        <label for="editSwordPrice">Price</label>
                        <input type="number" id="editSwordPrice" name="Price" step="0.01" min="0.00" required>
                    </div>

                    <div class="weaponSpecificForm" id="editDaggersForm">
                        <label for="editDaggerName">Product Name:</label>
                        <input type="text" name="Name" id="editDaggerName" maxlength="255" required>

                        <label for="editDaggerSubcategory">Subcategory</label>
                        <select name="Subcategory_ID" id="editDaggerSubcategory">
                            <option value="5">Anelace</option>
                            <option value="6">Stilleto</option>
                            <option value="7">Poignard</option>
                            <option value="8">Rondel</option>
                            <option value="9">Sica</option>
                            <option value="10">Dagger</option>
                        </select>

                        <h3>Blade</h3>
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editDaggerBladeMaterial">Material</label>
                                <select name="BladeMaterial_ID" id="editDaggerBladeMaterial">
                                    <option value="1">High-Carbon Steel</option>
                                    <option value="2">Tool Steel</option>
                                    <option value="3">PM Stainless</option>
                                    <option value="4">Titanium Alloy</option>
                                    <option value="5">Tungsten Carbide</option>
                                    <option value="6">Maraging Steel</option>
                                    <option value="7">Bronze Alloy</option>
                                    <option value="8">Dark Steel</option>
                                </select>
                            </div>

                            <div class="formItem">
                                <label for="editDaggerBladeEdge">Edge Style</label>
                                <select name="BladeEdge_ID" id="editDaggerBladeEdge">
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
                            </div>
                        </div>

                        <h3>Hilt</h3>
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editDaggerHiltMaterial">Material</label>
                                <select name="HiltMaterial_ID" id="editDaggerHiltMaterial">
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
                            </div>

                            <div class="formItem">
                                <label for="editDaggerGrip">Grip Style</label>
                                <select name="Grip_ID" id="editDaggerGrip">
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
                            </div>
                        </div>

                        <h3>Pommel</h3>
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editDaggerPommel">Type</label>
                                <select name="Pommel_ID" id="editDaggerPommel">
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
                            </div>

                            <div class="formItem">
                                <label for="editDaggerPommelMaterial">Material</label>
                                <select name="PommelMaterial_ID" id="editDaggerPommelMaterial">
                                    <option value="1">High-Carbon Steel</option>
                                    <option value="2">Tool Steel</option>
                                    <option value="3">PM Stainless</option>
                                    <option value="4">Titanium Alloy</option>
                                    <option value="5">Tungsten Carbide</option>
                                    <option value="6">Maraging Steel</option>
                                    <option value="7">Bronze Alloy</option>
                                    <option value="8">Dark Steel</option>
                                </select>
                            </div>

                            <div class="formItem">
                                <label for="editDaggerPommelGem">Gem</label>
                                <select name="PommelGem_ID" id="editDaggerPommelGem">
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
                            </div>
                        </div>

                        <h3>Sheath</h3>
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editDaggerSheathType">Type</label>
                                <select name="SheathType_ID" id="editDaggerSheathType">
                                    <option value="1">Minimal</option>
                                    <option value="2">Ornate</option>
                                    <option value="3">Jeweled</option>
                                    <option value="4">Wrapped</option>
                                </select>
                            </div>

                            <div class="formItem">
                                <label for="editDaggerSheathMaterial">Material</label>
                                <select name="SheathMaterial_ID" id="editDaggerSheathMaterial">
                                    <option value="1">Leather</option>
                                    <option value="2">Wooden</option>
                                    <option value="3">Metal</option>
                                    <option value="4">Laquered</option>
                                </select>
                            </div>

                            <div class="formItem">
                                <label for="editDaggerSheathColor">Color</label>
                                <select name="SheathColor_ID" id="editDaggerSheathColor">
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
                            </div>
                        </div>

                        <h3>Other</h3>
                        <label for="daggerEngravings">Engravings</label>
                        <input type="text" name="Engravings" id="daggerEngravings" maxlength="255">

                        <label for="editDaggerInscriptions">Inscriptions</label>
                        <input type="text" name="Inscriptions" id="editDaggerInscriptions" maxlength="255">

                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editDaggerBladeLength">Blade Length (cm)</label>
                                <input type="number" id="editDaggerBladeLength" name="BladeLength_cm" step="0.01" min="0.00" required>
                            </div>

                            <div class="formItem">
                                <label for="editDaggerWeight">Weight (kg)</label>
                                <input type="number" id="editDaggerWeight" name="Weight_kg" step="0.01" min="0.00" required>
                            </div>
                        </div>
                        
                        <label for="editDaggerPrice">Price</label>
                        <input type="number" id="editDaggerPrice" name="Price" step="0.01" min="0.00" required>

                    </div>

                    <div class="weaponSpecificForm" id="editBluntHandsForm">
                        <label for="editBluntHandName">Product Name:</label>
                        <input type="text" name="Name" id="editBluntHandName" maxlength="255" required>

                        <label for="editBluntHandSubcategory">Subcategory</label>
                        <select name="Subcategory_ID" id="editBluntHandSubcategory">
                            <option value="11">Mace</option>
                            <option value="12">Morningstar</option>
                            <option value="13">Flail</option>
                            <option value="14">War Hammer</option>
                            <option value="15">Horsemen's Pick</option>
                        </select>

                        <h3>Head</h3>
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editBluntHandHeadMaterial">Head Material</label>
                                <select name="HeadMaterial_ID" id="editBluntHandHeadMaterial">
                                    <option value="1">High-Carbon Steel</option>
                                    <option value="2">Tool Steel</option>
                                    <option value="3">PM Stainless</option>
                                    <option value="4">Titanium Alloy</option>
                                    <option value="5">Tungsten Carbide</option>
                                    <option value="6">Maraging Steel</option>
                                    <option value="7">Bronze Alloy</option>
                                    <option value="8">Dark Steel</option>
                                </select>
                            </div>

                            <div class="formItem">
                                <label for="editBluntHandpikesNum">Number of Spikes</label>
                                <input type="number" name="SpikesNum" id="editBluntHandpikesNum" min="0" max="12">
                            </div>

                            <div class="formItem">
                                <label for="editBluntHandChainLength">Chain Length</label>
                                <input type="number" id="editBluntHandChainLength" name="ChainLength" step="0.01" min="0.00">
                            </div>
                        </div>

                        <h3>Shaft</h3>
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editBluntHandShaftMaterial">Material</label>
                                <select name="ShaftMaterial_ID" id="editBluntHandShaftMaterial">
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
                            </div>

                            <div class="formItem">
                                <label for="editBluntHandGrip">Grip Style</label>
                                <select name="Grip_ID" id="editBluntHandGrip">
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
                            </div>
                        </div>

                        <h3>Pommel</h3>
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editBluntHandPommel">Type</label>
                                <select name="Pommel_ID" id="editBluntHandPommel">
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
                            </div>

                            <div class="formItem">
                                <label for="editBluntHandPommelMaterial">Material</label>
                                <select name="PommelMaterial_ID" id="editBluntHandPommelMaterial">
                                    <option value="1">High-Carbon Steel</option>
                                    <option value="2">Tool Steel</option>
                                    <option value="3">PM Stainless</option>
                                    <option value="4">Titanium Alloy</option>
                                    <option value="5">Tungsten Carbide</option>
                                    <option value="6">Maraging Steel</option>
                                    <option value="7">Bronze Alloy</option>
                                    <option value="8">Dark Steel</option>
                                </select>
                            </div>
                        </div>

                        <h3>Other</h3>
                        <label for="editBluntHandEngravings">Engravings</label>
                        <input type="text" name="Engravings" id="editBluntHandEngravings" maxlength="255">

                        <label for="editBluntHandInscriptions">Inscriptions</label>
                        <input type="text" name="Inscriptions" id="editBluntHandInscriptions" maxlength="255">

                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editBluntHandLength">Total Length (cm)</label>
                                <input type="number" id="editBluntHandLength" name="Length_cm" step="0.01" min="0.00" required>
                            </div>

                            <div class="formItem">
                                <label for="editBluntHandWeight">Weight (kg)</label>
                                <input type="number" id="editBluntHandWeight" name="Weight_kg" step="0.01" min="0.00" required>
                            </div>
                        </div>
                        
                        <label for="editBluntHandPrice">Price</label>
                        <input type="number" id="editBluntHandPrice" name="Price" step="0.01" min="0.00" required>
                    </div>

                    <div class="weaponSpecificForm" id="editPolearmsForm">
                        <label for="editPolearmName">Product Name:</label>
                        <input type="text" name="Name" id="editPolearmName" maxlength="255" required>

                        <label for="editPolearmSubcategory">Subcategory</label>
                        <select name="Subcategory_ID" id="editPolearmSubcategory">
                            <option value="16">Spear</option>
                            <option value="17">Lance</option>
                            <option value="18">Poleaxe</option>
                            <option value="19">Halberd</option>
                            <option value="20">Corseque</option>
                            <option value="21">Maul</option>
                        </select>

                        <h3>Head</h3>
                        <label for="editPolearmHeadMaterial">Head Material</label>
                        <select name="HeadMaterial_ID" id="editPolearmHeadMaterial">
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
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editPolearmShaftLength">Shaft Length</label>
                                <input type="number" id="editPolearmShaftLength" name="ShaftLength" step="0.01" min="0.00">
                            </div>

                            <div class="formItem">
                                <label for="editPolearmShaftMaterial">Material</label>
                                <select name="ShaftMaterial_ID" id="editPolearmShaftMaterial">
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
                            </div>

                            <div class="formItem">
                                <label for="editPolearmGrip">Grip Style</label>
                                <select name="Grip_ID" id="editPolearmGrip">
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
                            </div>
                        </div>

                        <h3>Butt Cap</h3>
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editPolearmButtCap">Type</label>
                                <select name="ButtCap_ID" id="editPolearmButtCap">
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
                            </div>

                            <div class="formItem">
                                <label for="editPolearmButtCapMaterial">Material</label>
                                <select name="ButtCapMaterial_ID" id="editPolearmButtCapMaterial">
                                    <option value="1">High-Carbon Steel</option>
                                    <option value="2">Tool Steel</option>
                                    <option value="3">PM Stainless</option>
                                    <option value="4">Titanium Alloy</option>
                                    <option value="5">Tungsten Carbide</option>
                                    <option value="6">Maraging Steel</option>
                                    <option value="7">Bronze Alloy</option>
                                    <option value="8">Dark Steel</option>
                                </select>
                            </div>
                        </div>

                        <h3>Other</h3>
                        <label for="editPolearmEngravings">Engravings</label>
                        <input type="text" name="Engravings" id="editPolearmEngravings" maxlength="255">

                        <label for="editPolearmInscriptions">Inscriptions</label>
                        <input type="text" name="Inscriptions" id="editPolearmInscriptions" maxlength="255">

                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editPolearmLength">Total Length (cm)</label>
                                <input type="number" id="editPolearmLength" name="Length_cm" step="0.01" min="0.00" required>
                            </div>

                            <div class="formItem">
                                <label for="editPolearmWeight">Weight (kg)</label>
                                <input type="number" id="editPolearmWeight" name="Weight_kg" step="0.01" min="0.00" required>
                            </div>
                        </div>
                        
                        <label for="editPolearmPrice">Price</label>
                        <input type="number" id="editPolearmPrice" name="Price" step="0.01" min="0.00" required>
                    </div>

                    <div class="weaponSpecificForm" id="editRangedForm">
                        <label for="editRangedName">Product Name:</label>
                        <input type="text" name="Name" id="editRangedName" maxlength="255" required>

                        <label for="editRangedSubcategory">Subcategory</label>
                        <select name="Subcategory_ID" id="editRangedSubcategory">
                            <option value="22">Throwing Axe</option>
                            <option value="23">Javelin</option>
                        </select>

                        <h3>Head</h3>
                        <label for="editRangedHeadMaterial">Head Material</label>
                        <select name="HeadMaterial_ID" id="editRangedHeadMaterial">
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
                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editRangedShaftLength">Shaft Length</label>
                                <input type="number" id="editRangedShaftLength" name="ShaftLength" step="0.01" min="0.00">
                            </div>

                            <div class="formItem">
                                <label for="editRangedShaftMaterial">Material</label>
                                <select name="shaftMaterial" id="editRangedShaftMaterial">
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
                            </div>

                            <div class="formItem">
                                <label for="editRangedGrip">Grip Style</label>
                                <select name="grip" id="editRangedGrip">
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
                            </div>
                        </div>

                        <h3>Other</h3>
                        <label for="editRangedEngravings">Engravings</label>
                        <input type="text" name="Engravings" id="editRangedEngravings" maxlength="255">

                        <label for="editRangedInscriptions">Inscriptions</label>
                        <input type="text" name="Inscriptions" id="editRangedInscriptions" maxlength="255">

                        <div class="formSubsection">
                            <div class="formItem">
                                <label for="editRangedLength">Total Length (cm)</label>
                                <input type="number" id="editRangedLength" name="Length_cm" step="0.01" min="0.00" required>
                            </div>

                            <div class="formItem">
                                <label for="editRangedWeight">Weight (kg)</label>
                                <input type="number" id="editRangedWeight" name="Weight_kg" step="0.01" min="0.00" required>
                            </div>
                        </div>
                        
                        <label for="editRangedPrice">Price</label>
                        <input type="number" id="editRangedPrice" name="Price" step="0.01" min="0.00" required>
                    </div>

                    <label for="fileUpload" class="customFileUpload" id="editFormImg">
                        Upload Image
                    </label>
                        
                    <input id="fileUpload" type="file" name="image" accept="image/*">

                    <input type="submit" value="Submit Edit" id="submitEdit">
                </form>

                <p id="formMessage"></p>
            </div>

    </div>

    <script src='productListings.js'></script>
</body>
</html>