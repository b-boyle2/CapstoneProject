<!DOCTYPE html>
<html>
<head>
    <title>Customization Options</title>

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
            <button class="navLink" onclick="location.href='products.php'"><img src="Images/swordIcon.svg" alt="" class="navIcon">Products</button>
            <button class="navLink" onclick="location.href='customizationOptions.php'" id="here"><img src="Images/customizationIcon.svg" alt="" class="navIcon">Customizations</button>
            <button class="navLink" onclick="location.href='inventory.php'"><img src="Images/clipboardIcon.svg" alt="" class="navIcon">Inventory</button>
        </div>
    </nav>

    <div class="mainSection">
        <div class="header">
            <h1>Customization Options</h1>
            
        </div>
        
        
        <div class="content">
            <div class="otherButtons" id="addOptionButton">Add New Customization Option</div>
            <div class="otherButtons" id="backButton">&#8249;</div>

            <div class="section" id="customizationsList">
                <div class="sectionHeader">
                    <form action="">
                        <label for="customizationTypeSelection"></label>
                        <select name="customizationTypeSelection" id="customizationTypeSelection" class="typeSelection">
                            <option value="bladeedges">Blade Edges</option>
                            <option value="bladeshapes">Blade Shapes</option>
                            <option value="gripstyles">Grip Styles</option>
                            <option value="metalmaterials">Metal Materials</option>
                            <option value="pommelgems">Pommel Gems</option>
                            <option value="pommeltypes">Pommel Types</option>
                            <option value="sheathcolors">Sheath Colors</option>
                            <option value="sheathmaterials">Sheath Materials</option>
                            <option value="sheathtypes">Sheath Types</option>
                            <option value="woodmaterials">Wooden Materials</option>
                        </select>
                    </form>

                    <!--<div class="filterSelect">
                        <div class="subcategoryFilter" id="blades">
                            <span class="selected">Blade Edges</span>
                            <div class="filterCarrot"></div>
                            <div class="options">
                                <div data-value="bladeedges">Blade Edges</div>
                                <div data-value="bladeshapes">Blade Shapes</div>
                            </div>
                        </div>

                        <div class="subcategoryFilter" id="pommels">
                            <span class="selected">Pommel Types</span>
                            <div class="filterCarrot"></div>
                            <div class="options">
                                <div data-value="5">Pommel Types</div>
                                <div data-value="6">Pommel Gems</div>
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
                    </div> -->
                </div>

                <table class="listedItems">
                    <thead>
                        <th class="edit"></th>
                        <th>Name</th>
                        <th>Image</th>
                        <th class="price">Price Modifier</th>
                    </thead>
                    <tbody>
                        <!-- PRODUCTS LISTED HERE -->
                    </tbody>
                </table>
            </div>

            
            <div id="customizationOptionsForm" class="addForm">
                <div class="section">
                    <h2>Add Product</h2>
                    <form id="addOptionForm" class="addMainForm">
                        <label for="optionTypeSelect">Select Option Type</label>
                        <select name="optionTypeSelect" id="optionTypeSelect">
                            <option value="bladeedges">Blade Edges</option>
                            <option value="bladeshapes">Blade Shapes</option>
                            <option value="gripstyles">Grip Styles</option>
                            <option value="metalmaterials">Metal Materials</option>
                            <option value="pommelgems">Pommel Gems</option>
                            <option value="pommeltypes">Pommel Types</option>
                            <option value="sheathcolors">Sheath Colors</option>
                            <option value="sheathmaterials">Sheath Materials</option>
                            <option value="sheathtypes">Sheath Types</option>
                            <option value="woodmaterials">Wooden Materials</option>
                        </select>

                        <div class="formItem">
                            <label for="optionName">Product Name:</label>
                            <input type="text" name="name" id="optionName" maxlength="255" required>
                        </div>
                        <label for="optionPriceModifier">Price Modifier</label>
                        <input type="number" id="optionPriceModifier" name="PriceModifier" step="0.01" min="0.00" required>

                        <label for="fileUpload" class="customFileUpload">
                            Upload Image
                        </label>
                        <input id="fileUpload" type="file" name="image" accept="image/*">

                        <input type="submit" value="Add Customization Option" id="submit" class="submitButton">
                    </form>

                    <p id="formMessage"></p>
                </div>
            </div>

            <div id="editCustomizationOptionsForm" class="editForm">
                <div class="section">
                    <div class="topSection">
                        <h2>Edit Customization Option</h2>
                        <button class="deleteButton">Delete Item</button>
                    </div>
                        <form id="editOptionForm" class="editMainForm">
                            <div class="weaponSpecificForm" id="editOptionsForm">
                                <label for="editOptionName">Option Name:</label>
                                <input type="text" name="Name" id="editOptionName" maxlength="255" required>

                                <label for="editOptionPriceModifier">Price Modifier</label>
                                <input type="number" id="editOptionPriceModifier" name="PriceModifier" step="0.01" min="0.00" required>
                            </div>

                            <label for="editedFileUpload" class="customFileUpload" id="editFormImg">
                                Upload Image
                            </label>
                            <input id="editedFileUpload" type="file" name="image" accept="image/*">
                            
                            <input type="submit" value="Submit Edit" id="submitEdit" class="submitButton">
                        </form>

                        <p id="formMessage"></p>
                    </div>
                </div>
            </div>
        </div>

        

    <script src='customizationOptionListings.js'></script>
</body>
</html>