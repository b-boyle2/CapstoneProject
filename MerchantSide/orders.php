<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>

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
        <button class="navLink" onclick="location.href='orders.php'" id="here"><img src="Images/cartIcon.svg" alt="" class="navIcon">Orders</button>
        <button class="navLink" onclick="location.href='products.php'"><img src="Images/swordIcon.svg" alt="" class="navIcon">Products</button>
        <button class="navLink" onclick="location.href='customizationOptions.php'"><img src="Images/customizationIcon.svg" alt="" class="navIcon">Customization Options</button>
        <button class="navLink" onclick="location.href='inventory.php'"><img src="Images/clipboardIcon.svg" alt="" class="navIcon">Inventory</button>
    </nav>
    <div id='collapsedNavBar'>
        <button class="collapseNav" id='openNav'>
            <i class="chevron"></i>
        </button>
    </div>

    <div class="mainSection">
        <div class="header">
            <h1>Orders</h1>  
        </div>

        <div class="content">
            <div class="section">
                <div class='subsections'>
                    <h4 class='activeSubsection' id="activeOrders">Active</h4> <!--orders with pending, processing, or shipped status -->
                    <h4 id="previousOrders">History</h4> <!--orders with cancelled or delivered status --> 
                </div>
                <div class="ordersList">
                    <table>
                        <thead>
                            <tr>
                                <th class="alignLeft">ID</th>
                                <th class="alignLeft">Status</th>
                                <th class="alignRight">Date</th>
                                <th class="alignRight">Time</th>
                                <th class="alignLeft">Customer</th>
                                <th class="alignRight">Total</th>
                            </tr>
                        </thead>
                        <tbody id="orderListItems">
                            <td class="alignLeft">1</td>
                            <td class="alignLeft">pending</td>
                            <td class="alignRight">3-29-2026</td>
                            <td class="alignRight">11:57AM</td>
                            <td class="alignLeft">Bridget Boyle</td>
                            <td class="alignRight">1100</td>
                            <!-- PRODUCTS LISTED HERE -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src='src/main.js'></script>
    <script src='src/orders.js'></script>
</body>
</html>