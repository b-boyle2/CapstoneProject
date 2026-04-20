<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://use.typekit.net/ynz6cyc.css">

    <link rel="preload" href="../Fonts/MedievalSharp/MedievalSharp-Regular.woff2" as="font" type="font/woff2" crossorigin>
</head>

<body>
    
    <nav>
        <div>
            <h1 class="siteTitle">Ironveil Forge</h1>
            <button class="collapseNav" id='closeNav'>
                <i class="chevron"></i>
            </button>
        </div>

        <button class="navLink" onclick="location.href='index.php'" id="here"><img src="Images/homeIcon.svg" alt="" class="navIcon">Dashboard</button>
        <button class="navLink" onclick="location.href='orders.php'"><img src="Images/cartIcon.svg" alt="" class="navIcon">Orders</button>
        <button class="navLink" onclick="location.href='products.php'"><img src="Images/swordIcon.svg" alt="" class="navIcon">Products</button>
        <button class="navLink" onclick="location.href='customizationOptions.php'"><img src="Images/customizationIcon.svg" alt="" class="navIcon">Customization Options</button>
    </nav>
    <div id='collapsedNavBar'>
        <button class="collapseNav" id='openNav'>
            <i class="chevron"></i>
        </button>
    </div>

    <div class="mainSection">
        <div class="header">
            <h1>Dashboard</h1>  
        </div>

        <div class="content">
            <div class="sectionContainer">
                <div class="section kpi">
                    <span>
                        <h4>Total Revenue</h4>
                        <h2 id="totalRevenue">$1345</h2>
                    </span>
                    <span class="iconContainer">
                        <img src="Images/revenueIcon.svg" alt="">
                    </span>
                </div>

                <div class="section kpi">
                    <span>
                        <h4>Total Orders</h4>
                        <h2 id="totalOrders">432</h2>
                    </span>
                    <span class="iconContainer">
                        <img src="Images/totalOrdersIcon.svg" alt="">
                    </span>
                </div>

                <div class="section kpi">
                    <span>
                       <h4>Avg Order Value</h4>
                        <h2 id="avgOrderValue">$1356.25</h2> 
                    </span>
                    <span class="iconContainer">
                        <img src="Images/avgTotalIcon.svg" alt="">
                    </span>
                    
                </div>
            </div>

            <div class="section" id="revenue">
                <h2>Revenue</h2>
                <canvas id="revenueChart"></canvas>
            </div>

            <div class="sectionContainer">
                <div class="section">
                    <span>
                        <h2 class='dashboardOrders activeSubsection' id='activeOrders'>Current Orders</h2>
                    </span>
                    <span class="ordersList" id="orders">
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
                                <!-- PRODUCTS LISTED HERE -->

                                <!-- EXAMPLE
                                <td class="alignLeft">1</td>
                                <td class="alignLeft">pending</td>
                                <td class="alignRight">3-29-2026</td>
                                <td class="alignRight">11:57AM</td>
                                <td class="alignLeft">Bridget Boyle</td>
                                <td class="alignRight">1100</td>
                                -->

                            </tbody>
                        </table>
                    </span>
                </div>
                <div class="section" id="orderStatuses">
                    <table>
                        <thead>
                            <tr>
                                <th class="alignLeft">Status</th>
                                <th class="alignRight">Total</th>
                            </tr>
                        </thead>
                        <tbody id='statusCounts'>
                            <!-- DATA HERE -->
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src='src/main.js'></script>
    <script src='src/dashboard.js'></script>
    <script src='src/orders.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.5.0"></script>
    <script>
        //FOR REVENUE CHART
        const revenueChartDiv = document.querySelector('#revenueChart');

        
        const revenueData = [
            { month: "Oct", revenue: 0 },
            { month: "Nov", revenue: 1840 },
            { month: "Dec", revenue: 2760 },
            { month: "Jan", revenue: 3910 },
            { month: "Feb", revenue: 5280 },
            { month: "Mar", revenue: 7420 },
            { month: "Apr", revenue: 9680 },
            { month: "May", revenue: 12450 }
        ];

        const labels = revenueData.map(d => d.month);
        const data = revenueData.map(d => d.revenue);

        revenueChart = new Chart(revenueChartDiv, {
            type: "line",
            data: {
                labels: labels,
                datasets: [{
                    backgroundColor: "#926D41", // safer than var(--gold) for now
                    data: data,
                    backgroundColor: "rgba(213, 184, 90, 0.2)", // translucent fill
                    fill: true,
                    tension: 0.3 // optional smoothing
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 20,
                        right: 20,
                        bottom: 20
                    }
                },
                plugins: {
                    legend: { display: false },
                    title: {
                        display: true,
                        font: { size: 16 }
                    }
                }
            }
        });

        const closeNavButton = document.querySelector('#closeNav');

        closeNavButton.addEventListener('click', () => {
            setTimeout(() => {
                revenueChart.resize();
                revenueChart.update();

                // second pass after layout settles
                setTimeout(() => {
                    revenueChart.resize();
                    revenueChart.update();
                }, 100);

            }, 300);
        });

        const openNavButton = document.querySelector('#openNav');

        openNavButton.addEventListener('click', () => {
            setTimeout(() => {
                revenueChart.resize();
                revenueChart.update();

                // second pass after layout settles
                setTimeout(() => {
                    revenueChart.resize();
                    revenueChart.update();
                }, 100);

            }, 300);
        });


    </script>
</body>
</html>