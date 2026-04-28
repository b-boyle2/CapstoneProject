document.addEventListener('DOMContentLoaded', () => {
    //FOR TESTING PURPOSES
    const userID = 1;
    const ordersList = document.querySelector('.orderContainer');

    function formatDate(date) {
        dateObj = new Date(date.replace(" ", "T"));
        const formatted = dateObj.toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
        });

        return formatted;
    }
    
    function loadOrders() {
        fetch(`src/getOrders.php?userID=${userID}`)
            .then(res=> res.json())
            .then(data => {
                displayOrders(data);
            })
           /*.then(res => res.text())
            .then(data => {
            console.log(data);        // logs raw PHP output
            document.body.innerHTML = data; // optional: display it in page
            })*/
        .catch(err => console.error(err));
    }

    function displayOrders(data){
        //clears previous results
        if (ordersList) {
            ordersList.innerHTML = '';
        }
        if (data != null){
            data.forEach(order => {
                status = order.Status;
                if (status == 'shipped'){
                    status = `Shipped at ${formatDate(order.ShippedDate)}`;
                }
                else if(status == 'delivered'){
                    status = `Delivered at ${formatDate(order.DeliveredDate)}`;
                }

                singleOrderDiv = document.createElement('div');
                singleOrderDiv.dataset.id = order.ID;
                singleOrderDiv.classList.add('singleOrder');

                orderHeadDiv = document.createElement('div');
                orderHeadDiv.classList.add('orderHead');
                singleOrderDiv.appendChild(orderHeadDiv);
                
                orderHeadDiv.innerHTML = `
                    <table>
                        <tr>
                            <th>Order Placed</th>
                            <th>Total</th>
                            <th>Ship To</th>
                        </tr>
                        <tr class="orderHeadData">
                            <td>${formatDate(order.OrderDate)}</td>
                            <td>$${order.TotalPrice}</td>
                            <td>${order.ShippingName}</td>
                        </tr>
                    </table>
                    <div>
                        Order # ${order.ID}
                        
                        <span class="status">${status.charAt(0).toUpperCase() + status.slice(1)}</span>
                    </div>
                `;

                divider = document.createElement('div');
                divider.classList.add('divider');
                divider.innerHTML = '<img src="../Images/FooterDivider.svg" id=footerDivider alt="">'
                singleOrderDiv.appendChild(divider);

                orderSummaryDiv = document.createElement('div');
                orderSummaryDiv.classList.add('orderSummary');
                singleOrderDiv.appendChild(orderSummaryDiv);
                itemListDiv = document.createElement('div');
                itemListDiv.classList.add('itemList');
                orderSummaryDiv.appendChild(itemListDiv);
                
                order.items.forEach(item => {
                    itemListDiv.innerHTML += `
                        <div class="orderItem">
                            <div class="itemInfo">
                                <div class="imgContainer">
                                    <img src=${item.Image} alt="">
                                </div>
                                <div class="details">
                                    <div class="topSection">
                                        <h3 class="name">
                                            ${item.Name}
                                        </h3>
                                    </div>

                                    <div class="description">
                                        ${item.Description}
                                    </div>

                                    <button class="button2" id="buyAgainButton" onclick="window.location.href='singleProduct.php?productId=${item.ProductID}'"><span>Buy Again</span></button>
                                </div>
                            </div>
                        </div>
                    `;
                })

                buttonContainer = document.createElement('div');
                buttonContainer.classList.add('buttonContainer');
                orderSummaryDiv.appendChild(buttonContainer);
                buttonContainer.innerHTML = `
                    <button class="button2"><span>Get Product Support</span></button>
                    <div class="buttonBorder"><button class="button2 secondaryButton"><span>Return/Replace Items</span></button></div>
                    <div class="buttonBorder"><button class="button2 secondaryButton"><span>Get Product Support</span></button></div>
                    <div class="buttonBorder"><button class="button2 secondaryButton"><span>Write a Product Review</span></button></div>
                `;

                if(status == 'pending' || status == 'processing') {
                    buttonContainer.innerHTML += `<div class="buttonBorder"><button class="button2 secondaryButton cancelOrderButton"><span>Cancel Order</span></button></div>`;
                }

                ordersList.appendChild(singleOrderDiv);
            });
        }
    }

    ordersList.addEventListener('click', (e) => {
        const cancelOrderButton = e.target.closest(".cancelOrderButton");
        if (!cancelOrderButton) return;

        const order = cancelOrderButton.closest(".singleOrder");
        let orderID = order.dataset.id;
        console.log(`Order ID = ${orderID}`)

        console.log("Updated Status");
        let formData = new FormData();
        formData.append("orderID", orderID);

        fetch(`src/cancelOrder.php`, {
            method: "POST",
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                console.log("order canceled");
                location.reload();
            } else {
                console.error("Update failed:", data.error);
            }
        })
        /*.then(res => res.text())
        .then(data => {
            console.log(data);        // logs raw PHP output
            document.body.innerHTML = data; // optional: display it in page
        })*/
        .catch(err => console.error(err));
    })

    loadOrders();

})