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
            <div class="buttons">
                <div class="otherButtons" id="saveButton">Save</div>
                <div class="otherButtons" style="display:flex;" id="backButton">&#8249;</div>
            </div>

            <div class="section">
                <div class='sectionHeader'>
                    <div id='orderNum'><h4>Order 235</h4></div>

                    <div class="filterSelect" id="statusDropdown">
                        <div class="subcategoryFilter" id="swords">
                            <span class="selected">Pending</span>
                            <div class="filterCarrot"></div>
                            <div class="options">
                                <div data-value="pending">Pending</div>
                                <div data-value="processing">Processing</div>
                                <div data-value="shipped">Shipped</div>
                                <div data-value="delivered">Delivered</div>
                                <div data-value="canceled">Canceled</div>
                            </div>
                        </div>
                    </div>

                </div>

                <h3>Order Details</h3>
                <div>
                    <table class="orderItems">
                        <thead>
                            <tr>
                                <th class="alignLeft">ID</th>
                                <th class="alignLeft">Product Name</th>
                                <th class="alignLeft">Key Specs</th>
                                <th class="alignRight">Qty</th>
                                <th class="alignRight">Price</th>
                                <th class="alignRight">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody id="orderItemsList">
                            <tr class="summary">
                                <td class="alignLeft">1</td>
                                <td class="alignLeft">Duskward Defender</td>
                                <td class="alignLeft">High-carbon steel • Clip point • Hickory grip</td>
                                <td class="alignRight">2</td>
                                <td class="alignRight">1300</td>
                                <td class="alignRight">2600</td>
                                <!-- PRODUCTS LISTED HERE -->
                            </tr>
                            <tr class="details">
                                <td><!-- for indent --></td>
                                <td colspan='5'>
                                    <div class='detailCell'>
                                        <h4>Blade:</h4>
                                        <ul>
                                            <li>Material: High-carbon steel</li>
                                            <li>Style: Clip point</li>
                                            <li>Edge: Flat grind</li>
                                        </ul>

                                        <h4>Hilt:</h4>
                                        <ul>
                                            <li>Material: Hickory</li>
                                            <li>Grip: Wrapped</li>
                                        </ul>

                                        <h4>Pommel:</h4>
                                        <ul>
                                            <li>Type: Faceted</li>
                                        </ul>

                                        <h4>Sheath:</h4>
                                        <ul>
                                            <li>Type: Leather</li>
                                            <li>Color: Dark brown</li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        </tbody>
                    </table>
                </div>

                </div>
            </div>
            <div class='section'>
                <h3>Shipping Info</h3>
                <div id="shippingInfo">
                    <ul>
                        <li><strong>Bridget Boyle</strong></li>
                        <li>637 Morris Ave Apt 3B</li>
                        <li>St. Louis, MO 63125</li>
                        <li>United States</li>
                        <li>Phone Number: 314-714-0789</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src='src/main.js'></script>
    <script src='src/singleOrder.js'></script>
</body>
</html>