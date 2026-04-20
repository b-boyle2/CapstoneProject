document.addEventListener("DOMContentLoaded", () => {
    orderStatuses = document.querySelector('#statusCounts');
    totalRevenueText = document.querySelector('#totalRevenue');
    totalOrdersText = document.querySelector('#totalOrders');
    avgOrderValText = document.querySelector('#avgOrderValue');

    function loadDashboardData() {
        fetch('src/getDashboardData.php')
        .then(res => res.json())
        .then(data => {
            displayDashboardData(data);
        })
        /*.then(res => res.text())
        .then(data => {
            console.log(data);        // logs raw PHP output
            document.body.innerHTML = data; // optional: display it in page
        })*/
        .catch(err => console.error(err));
    }

    function displayDashboardData(data) {
        totalRevenueText.innerHTML = `$${data.totalRevenue}`;
        totalOrdersText.innerHTML = `${data.totalOrders}`;
        avgOrderValText.innerHTML = `${data.avgOrderVal}`;
        orderStatuses.innerHTML = `
            <tr>
                <td>Pending</td>
                <td class="alignRight">${data.pendingCount}</td>
            </tr>
            <tr>
                <td>Processing</td>
                <td class="alignRight">${data.processingCount}</td>
            </tr>
            <tr>
                <td>Shipped</td>
                <td class="alignRight">${data.shippedCount}</td>
            </tr>
            <tr>
                <td>Delivered</td>
                <td class="alignRight">${data.deliveredCount}</td>
            </tr>
            <tr>
                <td>Canceled</td>
                <td class="alignRight">${data.canceledCount}</td>
            </tr>
        `;
    }

    loadDashboardData();
})