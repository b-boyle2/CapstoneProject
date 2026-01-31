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
                <form action="">
                    <label for="weaponType" id="weaponTypeSelection"></label>
                    <select name="weaponTypeSelection" id="weaponTypeSelection">
                        <option value="swords">Swords</option>
                        <option value="daggers">Daggers</option>
                        <option value="bunthandweapons">Blunt Hand</option>
                        <option value="polearms">Polearms</option>
                        <option value="ranger">Ranged</option>
                    </select>
                </form>
                <table class="listedItems">
                    <tr>
                        <th class="edit"></th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Subcategory</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td class="edit"><img src="Images/pencilIcon.svg" class="editIcon" alt=""></td>
                        <td>The Duskward Defender</td>
                        <td>../Images/ArmingSwords/duskwardDefender.png</td>
                        <td>Arming Sword</td>
                        <td>1200</td>
                    </tr>
                    <tr>
                        <td class="edit"><img src="Images/pencilIcon.svg" class="editIcon" alt=""></td>
                        <td>The Duskward Defender</td>
                        <td>../Images/ArmingSwords/duskwardDefender.png</td>
                        <td>Arming Sword</td>
                        <td>1200</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>