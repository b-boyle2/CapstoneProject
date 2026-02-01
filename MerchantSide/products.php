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
                        <th>Price</th>
                    </thead>
                    <tbody>
                        <!-- PRODUCTS LISTED HERE -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src='productListings.js'></script>
</body>
</html>